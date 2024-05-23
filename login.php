<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Membuat Login</title>
</head>
<body>
<?php
$nama = $email = "";
$namaErr = $emailErr = "";
function bersihkan_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["u"])) {
        $namaErr = "masukkan username";
    } else {
        $nama = bersihkan_input($_POST["u"]);
    }
    if (empty($_POST["p"])) {
        $emailErr = "masukkan password";
    } else {
        $email = bersihkan_input($_POST["p"]);
    }
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Username: <input type="text" name="u">
    <span class="error" style="color: red; font-size: 12px;">* <?php echo $namaErr;?></span><br><br>
    Password: <input type="text" name="p">
    <span class="error" style="color: red; font-size: 12px;">* <?php echo $namaErr;?></span><br><br>
    <input type="Submit" value="login">
</form>
</body>
</html>