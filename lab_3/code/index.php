<?php

echo "TASK 1A", "<br />";
$firstStr = 'ahb acb aeb aeeb adcb axeb';
$firstRegular = "/a..b/";
preg_match_all($firstRegular, $firstStr, $matches);
echo "Ответ: ", "<br />";
foreach ($matches[0] as $key) {
    echo $key."<br />";
}
echo "<br />", "TASK 1B", "<br />";
$secondStr = 'a1b2c3';
function degrees($matches) {
    return pow($matches[0], 3);
}
echo "Исходная строка: ", $secondStr, "<br />";
echo "Получившаяся строка: ", preg_replace_callback('/\d+/', 'degrees', $secondStr), "<br />";
