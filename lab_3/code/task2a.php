<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $text = $_POST['text'];
    $word_count = str_word_count($text);
    $char_count = strlen($text);
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
    <form method="POST">
        <textarea name="text" rows="8" cols="50"></textarea><br />
        <button type="submit">Подсчитать</button>
    </form>
    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
        <p>Число слов: <?php echo $word_count; ?></p>
        <p>Число символов: <?php echo $char_count; ?></p>
    <?php endif; ?>
    </body>
    </html>
<?php
