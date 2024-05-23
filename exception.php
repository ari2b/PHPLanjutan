<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exception Login</title>
</head>
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    try {
        if ($username !== '' && $password !== '') {
            $_SESSION['isLoggedIn'] = true;
            $_SESSION["username"] = $username;
            header('Location: galery.php');
            exit;
        } else {
            throw new Exception("Username atau password salah.");
        }
    } catch (Exception $e) {
        echo "<p style='color: red;'>" . $e->getMessage() . "</p>";
    }
}
?>
<body>
<h2>Login dengan menggunakan session</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="username">Nama: </label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password: </label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>