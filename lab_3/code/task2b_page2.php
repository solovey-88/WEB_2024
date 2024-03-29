<?php
session_start();

$surname = isset($_SESSION['surname']) ? $_SESSION['surname'] : '';
$name = isset($_SESSION['name']) ? $_SESSION['name'] : '';
$age = isset($_SESSION['age']) ? $_SESSION['age'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h2>Данные из сессии:</h2>
    <p><strong>Фамилия:</strong> <?php echo $surname; ?></p>
<p><strong>Имя:</strong> <?php echo $name; ?></p>
<p><strong>Возраст:</strong> <?php echo $age; ?></p>
</body>
</html>