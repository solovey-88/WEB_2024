<?php
session_start();

$userData = isset($_SESSION['user_data']) ? $_SESSION['user_data'] : [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul>
    <?php foreach ($userData as $key => $value) : ?>
        <li><?= $key ?>: <?= $value ?></li>
    <?php endforeach; ?>
</ul>
</body>
</html>