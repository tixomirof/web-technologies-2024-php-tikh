<?php
if (array_key_exists('uploadPhoto', $_FILES)) {
    $target_dir = "./gallery-images/";
    $target_file = $target_dir . basename($_FILES["uploadPhoto"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["uploadPhoto"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".<br>";
            $uploadOk = 1;
        } else {
            echo "File is not an image.<br>";
            $uploadOk = 0;
        }
    }

    if (file_exists($target_file)) {
        echo "File already exists.<br>";
        $uploadOk = 0;
    }

    if ($_FILES["uploadPhoto"]["size"] >= 1000000) {
        echo "Image must be less than 1 MB.<br>";
        $uploadOk = 0;
    }

    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "webp") {
        echo "Only accepting JPG, PNG, JPEG and WEBP files.<br>";
        $uploadOk = 0;
    }

    if ($uploadOk) {
        if (move_uploaded_file($_FILES["uploadPhoto"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["uploadPhoto"]["name"])). " has been uploaded.";
        header("Refresh:0; url=index.php");
        } else {
        echo "Sorry, there was an error uploading your file.<br>";
        }
    }
}
?>

<br><a href="index.php">Return</a>