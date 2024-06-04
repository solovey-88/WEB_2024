<?php
$mysqli = new mysqli('db', 'root', 'helloworld', 'web');

if (mysqli_connect_errno()) {
    printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error());
    exit;
}

// Обработка формы
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $category = $mysqli->real_escape_string($_POST['category']);
    $title = $mysqli->real_escape_string($_POST['title']);
    $description = $mysqli->real_escape_string($_POST['description']);
    $email = $mysqli->real_escape_string($_POST['email']);


    $mysqli->query("INSERT INTO ad (category, title, description, email) VALUES ('$category', '$title', '$description', '$email')");
}

$mas = [];
if ($result = $mysqli->query('SELECT * FROM ad ORDER BY created DESC')) {
    while ($row = $result->fetch_assoc()) {
        $mas[] = $row;
    }
    $result->close();
}
$mysqli->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB_BOARD</title>
</head>
<body>
<h2>Добавить объявление</h2>
<form action="index.php" method="post">
    <label for="category">Категория:</label>
    <select id="category" name="category">
        <option value="PC">PC</option>
        <option value="Console">Console</option>
        <option value="Games">Games</option>
    </select> <br> <br>

    <label for="title">Название:</label>
    <input type="text" id="title" name="title" required> <br> <br>

    <label for="description">Описание:</label>
    <textarea id="description" name="description" rows="1" cols = "10"></textarea> <br> <br>

    <label for="email">Почта:</label>
    <input type="email" id="email" name="email" required> <br> <br>
    <input type="submit" value="Добавить объявление">
</form>

<h2>Список объявлений</h2>
<table border="1">
    <tr>
        <th>Категория</th>
        <th>Название</th>
        <th>Описание</th>
        <th>Почта</th>
    </tr>
    <?php foreach ($mas as $ad):
        echo "<tr>";
        echo "<td>" . ($ad['category']) . "</td>";
        echo "<td>" . ($ad['title']) . "</td>";
        echo "<td>" . ($ad['description']) . "</td>";
        echo "<td>" . ($ad['email']) . "</td>";
        echo "</tr>";
    endforeach; ?>
</table>
</body>
</html>
