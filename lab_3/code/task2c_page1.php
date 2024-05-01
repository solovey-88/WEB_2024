<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST")
{
    $data = ['Имя' => $_POST['name'], 'Возраст' => $_POST['age'], 'Зарплата' => $_POST['salary'], 'День рождения' => $_POST['dateOfBirth']];
    $_SESSION['user_data'] = $data;
    header("Location: task2c_page2.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
<form method="post">
    <label for="name">Имя:</label>
    <input type="text" name="name" required><br><br>

    <label for="age">Возраст:</label>
    <input type="text" name="age" required><br><br>

    <label for="salary">Зарплата:</label>
    <input type="text" name="salary" required><br><br>

    <label for="birthday">Дата рождения:</label>
    <input type="text" name="dateOfBirth" required><br><br>

    <button type="submit">Подтвердить</button>
</form>
</form>
</body>
</html>
