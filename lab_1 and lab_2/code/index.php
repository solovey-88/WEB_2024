<?php

//task 1
echo "TASK 1", "<br />";

$very_bad_unclear_name = "15 chicken wings";
// Write your code here:
$order = &$very_bad_unclear_name;
$order .= ' and pepsi';
// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.", "<br />", "<br />";


//task 2
echo "TASK 2", "<br />";

$number1 = 5;
echo $number1, "<br />";

$number2 = 5.25;
echo $number2, "<br />";

echo 1000 - 988, "<br />";


$last_month = 1187.23;
$this_month = 1089.98;
echo $this_month - $last_month, "<br />", "<br />";

//task 11
echo "TASK 11", "<br />";

$num_languages = 4;
$months = 11;
$days = $months * 16;

$days_per_language = $days / $num_languages;
echo $days_per_language, "<br />", "<br />";

//task 12
echo "TASK 12", "<br />";

echo 8**2, "<br />", "<br />";

//task 13
echo "TASK 13", "<br />";

$my_num = 100;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer, "<br />", "<br />";

//task 14
echo "TASK 14", "<br />";

$a = 10;
$b = 3;
echo $a % $b, "<br />";

if ($a % $b == 0)
{
    echo "Делится", $a / $b, "<br />";

}
else
{
    echo "Делится с остатком: ", $a % $b, "<br />";
}

$st = 2**10;
echo $st, "<br />";
echo sqrt(245), "<br />";

$myFirstArray = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($myFirstArray as $value)
{
    $sum += pow($value, 2);
}
echo sqrt($sum), "<br />";

echo round(sqrt(379)), "<br />";
echo round((sqrt(379)), 1), "<br />";
echo round((sqrt(379)), 2), "<br />";

$sqrt587 = sqrt(587);
$resultArray = ['floor' => floor($sqrt587), 'ceil' => ceil($sqrt587)];
echo $resultArray['floor'], "<br />";
echo $resultArray['ceil'], "<br />";

$mySecondArray = [4, -2, 5, 19, -130, 0, 10];
echo min($mySecondArray), "<br />";
echo max($mySecondArray), "<br />";

echo rand(1, 100), "<br />";

$randomArray = [];
for ($i = 0; $i < 10; $i++)
{
    $randomArray[] = rand(1, 100);
}
foreach ($randomArray as $value)
{
    echo $value . " ";
}
echo "<br />";

echo abs($a - $b), "<br />";
$myThirdArray = [1, 2, -1, -2, 3, -3];
$absoluteArray = [];
foreach ($myThirdArray as $value)
{
    $absoluteArray[] = abs($value);
}
foreach ($absoluteArray as $value)
{
    echo $value . " ";
}
echo "<br />";

$number30 = 30;
$divisionsArray = [];
for ($i = 1; $i <= $number30; $i++)
{
    if ($number30 % $i == 0)
    {
        $divisionsArray[] = $i;
    }
}
foreach ($divisionsArray as $value)
{
    echo $value . " ";
}
echo "<br />";

$myFourthArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sumForFourthArray = 0;
$numberOfElement = 0;
while ($sumForFourthArray <= 10)
{
    $sumForFourthArray += $myFourthArray[$numberOfElement];
    $numberOfElement += 1;
}
echo $numberOfElement, "<br />", "<br />";

//task 15
echo "TASK 15", "<br />";

function printStringReturnNumber()
{
    echo "This is string ";
    return 999;
}

$my_num = printStringReturnNumber();
echo $my_num, "<br />", "<br />";


