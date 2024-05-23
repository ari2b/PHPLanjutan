<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Array ke Json</title>
</head>
<body>
<?php
// Buat array dengan 15 data nama dan umur
$data = array(
    array("nama" => "Chase", "umur" => 20),
    array("nama" => "Rocky", "umur" => 18),
    array("nama" => "Marshall", "umur" => 23),
    array("nama" => "Alex", "umur" => 16),
    array("nama" => "Tracker", "umur" => 25),
    array("nama" => "Zuma", "umur" => 21),
    array("nama" => "Skye", "umur" => 19),
    array("nama" => "Ryder", "umur" => 22),
    array("nama" => "Everest", "umur" => 17),
    array("nama" => "Rubble", "umur" => 24),
    array("nama" => "Sweetie", "umur" => 26),
    array("nama" => "Coral", "umur" => 18),
    array("nama" => "Arrby", "umur" => 20),
    array("nama" => "Liberty", "umur" => 21),
    array("nama" => "Roxi", "umur" => 23),
);

// Konversi array ke JSON
$json = json_encode($data, JSON_PRETTY_PRINT);

// Tampilkan JSON
echo "<pre>$json</pre>";
?>
</body>
</html>