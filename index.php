<?php include 'functions.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Web-ИС Лабораторная Работа №19</title>
        <link rel="stylesheet" type="text/css" href="./style.css" />
</head>
<body>
    <h1>Галерея фотографий</h1>
    <form name="upload-photo" action="upload.php" method="post" enctype="multipart/form-data">
        <input type="submit" name="submitPhoto" id="submit" class="submit" />
        <label class="input-file">
            <input type="file" name="uploadPhoto" id="uploadPhoto" onchange="document.getElementById('submit').click()"/>
            <span>Добавить изображение (&lt;1 МБ)</span>
        </label>
    </form>
    <?php
        logQuery();
        buildGallery("./gallery-images/");
    ?>
</body>
</html>