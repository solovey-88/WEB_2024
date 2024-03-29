<?php

session_start();

$surname = '';
$name = '';
$age = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $age = $_POST["age"];

    $_SESSION['surname'] = $surname;
    $_SESSION['name'] = $name;
    $_SESSION['age'] = $age;

    header('Location: task2b_page2.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Document</title>
	</head>
	<body>
    <form method="post">
        <label for="name">Имя:</label>
        <input type="text" name="name" required><br><br>

        <label for="surname">Фамилия:</label>
        <input type="text" name="surname" required><br><br>

        <label for="age">Возраст:</label>
        <input type="text" name="age" required><br><br>
        
        <button type="submit">Подтвердить</button>
    </form>

    </body>
</html>
