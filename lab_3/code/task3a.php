<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="task3b.php" method="post">
    <label for="email">Почта</label>
    <label>
        <input type="email" name="email" required> <br> <br>
    </label>
    <label for="title">Название</label>
    <label>
        <input type="text" name="title" required> <br> <br>
    </label>
    <label for="category">Категория:</label>
    <select id="category" name="category" required>
        <?php
        $categories = array_filter(glob("./categories/*"), 'is_dir');
        foreach ($categories as $name) {
            $categoryName = basename($name);
            echo "<option value=\"$categoryName\">$categoryName</option>";
        }
        ?>
    </select> <br> <br>
    <label for="title">Заголовок объявления:</label>
    <input type="text" id="title" name="title" required><br><br>

    <label for="text">Текст объявления:</label><br>
    <textarea id="text" name="text" rows="4" cols="50" required></textarea> <br> <br>

    <input type="submit" value="Добавить">
</form>
<table>
    <thead>
    <th>Почта</th>
    <th>Категория</th>
    <th>Название</th>
    <th>Описание</th>
    </thead>
    <?php
    $files = glob("categories/*/*.txt");
    foreach ($files as $file) {
        $info = file($file, FILE_IGNORE_NEW_LINES);
        $category = basename(dirname($file));
        $title = basename($file, ".txt");
        $email = $info[0];
        $text = $info[1];
        echo "<tr>
                        <td>$email</td>
                        <td>$category</td>
                        <td>$title</td>
                        <td>$text</td>
                    </tr>";
    }
    ?>
</table>
</body>
</html>
