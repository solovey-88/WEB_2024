<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB_BOARD</title>
</head>
<body>
<h2>Добавить объявление</h2>
<form action="save.php" method="post">
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
    <?php
    require_once __DIR__."/vendor/autoload.php";
    $client = new Google_Client();
    $client->setAuthConfig("credentials.json");
    $client->addScope(Google_Service_Sheets::SPREADSHEETS_READONLY);
    $service = new Google_Service_Sheets($client);
    $spreadsheetId = "1CCizKZBjFRwaZpk2ldV_oAcvaQRgoBMlc5IbhIBr9GE";
    $range = "A1:D";

    $response = $service->spreadsheets_values->get($spreadsheetId, $range);
    $values = $response->getValues();

    if (!empty($values))
    {
        foreach ($values as $row)
        {
            echo "<tr>";
            echo "<td>{$row[0]}</td>";
            echo "<td>{$row[1]}</td>";
            echo "<td>{$row[2]}</td>";
            echo "<td>{$row[3]}</td>";
            echo "</tr>";
        }
    }
    ?>
</table>
</body>
</html>
