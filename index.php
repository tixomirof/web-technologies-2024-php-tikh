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
    for ($i = 1; $i <= 6; $i++) {
        echo "<div class='separator'>Task $i</div>";
        require_once 'task' . $i . '.php';
    }?>
</body>
</html>