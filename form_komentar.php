<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Formulir Komentar</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Nama: <input type="text" name="nama"><br>
    E-Mail: <input type="email" name="email"><br>
    Komentar: <textarea name="comment" rows="5" cols="40"></textarea><br>
    <input type="Submit" value="simpan">
    <input type="Reset" value="bersihkan">
</form>
<?php
$nama = $email = $comment = "";
function bersihkan_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $comment = $_POST["comment"];
    echo("Nama: ".$nama."<br>");
    echo("Email: ".$email."<br>");
    echo("Komentar: ".$comment."<br>");
    echo("<hr>");
}
?>
</body>
</html>