<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Access form data
  $nama = $_POST["nama"];
  $nim = $_POST["nim"];
  $email = $_POST["email"];
  $tempat_lahir = $_POST["tempat"];
  $tanggal_lahir = $_POST["ttl"];
  $alamat = $_POST["alamat"];
  $jenis_kelamin = $_POST["gender"];

  // Display data (without validation for now)
  echo "<h2>Detail Pendaftaran</h2>";
  echo "<p>Selamat Datang <b>" . $nama . "</b></p>";
  echo "<p>NIM: " . $nim . "</p>";
  echo "<p>Email: " . $email . "</p>";
  echo "<p>Tempat, Tanggal Lahir: " . $tempat_lahir . ", " . $tanggal_lahir . "</p>";
  echo "<p>Alamat: " . $alamat . "</p>";
  echo "<p>Jenis Kelamin: " . $jenis_kelamin . "</p>";
} else {
  echo "Akses halaman ini tidak valid.";
}
?>
