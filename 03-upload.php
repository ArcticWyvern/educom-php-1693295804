<?php

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//check if image file is an actual image or a fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . "." . "<br>";
        $uploadOk = 1;
    } else {
        echo "File is not an image." . "<br>";
        $uploadOk = 0;
    }
}

//check if file already exists
if (file_exists($target_file)) {
    echo "Sorry file already exists." . "<br>";
    $uploadOk = 0;
}

//check file size
if($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large" . "<br>";
    $uploadOk = 0;
}

//allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    echo "Sorry, only JPG, PNG & GIF files are allowed" . "<br>";
    $uploadOk = 0;
}

//check if uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded" . "<br>" ;
} else {
    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file " . htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])) . " has been uploaded." . "<br>";
    } else {
        echo "Sorry, there was an error uploading your file." . "<br>";
    }
}

?>