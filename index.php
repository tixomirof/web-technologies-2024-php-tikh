<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base Commit</title>
</head>
<style>
    <?php include 'style.css'; ?>
</style>
<body>
    <?php
    for ($iter = 1; $iter <= 6; $iter++) {
        echo "<div class='separator'>Task $iter</div>";
        require_once 'task' . $iter . '.php';
    }?>
</body>
</html>