<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Cookie</title>
</head>
<body>
<?php
$nama = "Arisatya Abhirama";
$game = "Bad 2 Bad Apocalypse";

setcookie("nama", $nama, time() + 3600); // Set cookie for 1 hour
setcookie("game", $game, time() + 3600); // Set cookie for 1 hour

if (isset($_COOKIE["nama"]) && isset($_COOKIE["game"])) {
    $nama = $_COOKIE["nama"];
    echo "<br>Nama Mahasiswa: " . $nama;
    $game = $_COOKIE["game"];
    echo "<br>Game Favorit: " . $game;
    echo "<br>Data Anda telah disimpan kedalam cookie.";
  } else {
    echo "Data Anda dalam cookie telah kadaluarsa.";
  }
?>
</body>
</html>