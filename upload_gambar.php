<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload file</title>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="{tulis nin anda disini}">
    <meta name="author" content="{tulis nama anda disini}">
</head>
<body>
<?php
$target_dir = "gambar/";
$target_file = $target_dir . basename($_FILES["gambar"]["name"]);
$uploadOk = 0;
$tipeGambar = strtolower(pathinfo($target_file, flags:PATHINFO_EXTENSION));

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["gambar"]["tmp_name"]);
    if($check !== false) {
        echo "File berupa citra/gambar -".$check["mime"].".";
        $uploadOk = 1;
    } else {
        echo "File is not gambar.";
        $uploadOk = 0;
    }
}

if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

if ($_FILES["gambar"]["size"] > 500000) {
    echo "Sorry, file is too large.";
    $uploadOk = 0;
}

if($tipeGambar != "jpg" && $tipeGambar != "png" && $tipeGambar != "jpeg" && $tipeGambar != "gif") {
    echo "Sorry, only file JPG, JPEG, PNG & GIF.";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Sorry, your file is failed to upload.";
} else {
    if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
        echo "file". htmlspecialchars(basename($_FILES["gambar"]["name"])). "Upload successfull.";
    } else {
        echo "Sorry, there's an error while upload";
    }
}
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
    <p><label>Pilih Gambar yang akan di upload: </label><br>
        <input type="file" name="gambar" value="Pilih Gambar" id="gambar1"></p>
    <input type="Submit" value="Upload Image" name="submit">
</form>

</body>
</html>