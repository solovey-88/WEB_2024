<?php

echo "TASK 1A", "<br />";
$firstStr = 'ahb acb aeb aeeb adcb axeb';
$firstRegular = "/a..b/";
preg_match_all($firstRegular, $firstStr, $matches);
echo "Answer: ", "<br />";
foreach ($matches[0] as $key) {
    echo $key."<br />";
}
echo "<br />", "TASK 1B", "<br />";
$secondStr = 'a1b2c3';
function degrees($matches) {
    return pow($matches[0], 3);
}
echo preg_replace_callback('/\d+/', 'degrees', $secondStr), "<br />";
