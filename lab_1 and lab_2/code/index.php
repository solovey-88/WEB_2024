<?php

//красивого вывода не будет, иначе могу к дедлайну не успеть.
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
echo "Первое число в PHP = ", $number1, "<br />";

$number2 = 5.25;
echo "Второе число в PHP = ", $number2, "<br />";

echo 1000 - 988, "<br />";

//задача с месяцами
$last_month = 1187.23;
$this_month = 1089.98;
echo "Разность между месяцами = ", $this_month - $last_month, "<br />", "<br />";

//task 11
echo "TASK 11", "<br />";

//задача с языками программирования
$num_languages = 4;
$months = 11;
$days = $months * 16;

$days_per_language = $days / $num_languages;
echo "На изучение каждого языка программирования ушло: ", $days_per_language, "<br />", "<br />";

//task 12
echo "TASK 12", "<br />";

echo "Восемь в квадрате = ",  8**2, "<br />", "<br />";

//task 13
echo "TASK 13", "<br />";

$my_num = 100;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo "Разница между ответом и исходным значением = ", $answer, "<br />", "<br />";

//task 14
echo "TASK 14", "<br />";

//Поиск остатка деления
$a = 10;
$b = 3;
echo "Остаток от деления = ", $a % $b, "<br />";

//Проверка делимости чисел
if ($a % $b == 0)
{
    echo "Делится", $a / $b, "<br />";

}
else
{
    echo "Делится с остатком: ", $a % $b, "<br />";
}

$st = 2**10;
echo "Два в десятой степени = ", $st, "<br />";
echo "Корень из 245 = ", sqrt(245), "<br />";

//Поиск корня из суммы квадратов элементов массива
$myFirstArray = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($myFirstArray as $value)
{
    $sum += pow($value, 2);
}
echo "Корень суммы квадратов = ", sqrt($sum), "<br />";

// Округление до десятых и сотых
echo round(sqrt(379)), "<br />";
echo "Округление до десятых = ", round((sqrt(379)), 1), "<br />";
echo "Округление до сотых, = ", round((sqrt(379)), 2), "<br />";

//округления числа в большую и меньшую сторону
$sqrt587 = sqrt(587);
$resultArray = ['floor' => floor($sqrt587), 'ceil' => ceil($sqrt587)];
echo "Округление числа в меньшую сторону = ", $resultArray['floor'], "<br />";
echo "Округление числа в большую сторону = ", $resultArray['ceil'], "<br />";

$mySecondArray = [4, -2, 5, 19, -130, 0, 10];
echo "Минимальное значение = ", min($mySecondArray), "<br />";
echo "Максимальное значение = ", max($mySecondArray), "<br />";

echo "Рандомное число = ", rand(1, 100), "<br />"; //Вывод рандомного числа

//Массив с рандомными числами
$randomArray = [];
for ($i = 0; $i < 10; $i++)
{
    $randomArray[] = rand(1, 100);
}

echo "Массив с рандомными элементами: ", "<br />";
foreach ($randomArray as $value)
{
    echo $value . " ";
}
echo "<br />";

//Работа с модулями
echo "Модуль разности = ", abs($a - $b), "<br />";
$myThirdArray = [1, 2, -1, -2, 3, -3];
$absoluteArray = [];
foreach ($myThirdArray as $value)
{
    $absoluteArray[] = abs($value);
}
echo "Исходный массив: ", "<br />";
foreach ($myThirdArray as $value)
{
    echo $value . " ";
}
echo "<br />";

echo "Получившийся массив: ", "<br />";
foreach ($absoluteArray as $value)
{
    echo $value . " ";
}
echo "<br />";

//Поиск делителя числа
$number30 = 30;
$divisionsArray = [];
for ($i = 1; $i <= $number30; $i++)
{
    if ($number30 % $i == 0)
    {
        $divisionsArray[] = $i;
    }
}
echo "Делители числа 30: ", "<br />";
foreach ($divisionsArray as $value)
{
    echo $value . " ";
}
echo "<br />";

//Поиск числа первых элементов для получения суммы > 10
$myFourthArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sumForFourthArray = 0;
$numberOfElement = 0;
while ($sumForFourthArray <= 10)
{
    $sumForFourthArray += $myFourthArray[$numberOfElement];
    $numberOfElement += 1;
}
echo "Количество элементов: ", $numberOfElement, "<br />", "<br />";

//task 15
echo "TASK 15", "<br />";

function printStringReturnNumber()
{
    echo "This is string ";
    return 999;
}

$my_num = printStringReturnNumber();
echo $my_num, "<br />", "<br />";

//task 16
echo "TASK 16", "<br />";

function increaseEnthusiasm($string)
{
    return $string . "!";
}

$stringForFunction = "Hello World";
echo increaseEnthusiasm($stringForFunction), "<br />";

function repeatThreeTimes($string)
{
    return $string . $string . $string;
}

echo repeatThreeTimes($stringForFunction), "<br />";
echo increaseEnthusiasm(repeatThreeTimes($stringForFunction)), "<br />";

function cut($string, $number = 10)
{
    return substr($string, $number);
}

echo cut("55555", 2), "<br />";

function Recurs($array, $index = 0)
{
    if ($index < count($array))
    {
        echo $array[$index] . " ";
        Recurs($array, $index + 1);
    }
}

$myFifthArray = [5, 10, 15, 20, 25, 30, 35, 40, 45, 50];
echo "Рекурсивный вызов массива: ", "<br />";
Recurs($myFifthArray);
echo "<br />";

function sumDigits($number)
{
    $sumOfNumbers = 0;
    while ($number != 0)
    {
        $sumOfNumbers += $number % 10;
        $number = (int)($number / 10);
    }
    if ($sumOfNumbers > 9)
    {
        return sumDigits($sumOfNumbers);
    }
    else
    {
        return $sumOfNumbers;
    }
}
echo "Результат работы функции sumDigits: ", sumDigits(55555), "<br />", "<br />";

//task 17
echo "TASK 17", "<br />";

function arrayFill($element, $number)
{
    $array = [];
    for($i = 0; $i < $number; $i++)
    {
        $array[$i] = $element;
    }
    foreach ($array as $value)
    {
        echo $value . " ";
    }
}

echo "Резульат работы функции arrayFill: ";
arrayFill('x', 5);
echo "<br />";

$twoDimArray = [[1, 2, 3], [4, 5], [6]];
$sumOfArray = 0;
foreach ($twoDimArray as $value)
{
    $sumOfArray += array_sum($value);
}
echo "Сумма элементов двумерного массива: ", $sumOfArray, "<br />";

$myTwoDimArray = [];
$valueOfArray = 1;
for ($i = 0; $i < 3; $i++)
{
    $subArray = [];
    for($j = 0; $j < 3; $j++)
    {
        $subArray[] = $valueOfArray++;
    }
    $myTwoDimArray[] = $subArray;
}
echo "Создание двумерного массива: ", "<br />";
foreach ($myTwoDimArray as $subArray) {
    foreach ($subArray as $value) {
        echo $value . " ";
    }
    echo "<br>";
}

$arrayOfNumbers = [2, 5, 3, 9];
$result = ($arrayOfNumbers[0] * $arrayOfNumbers[1]) + ($arrayOfNumbers[2] * $arrayOfNumbers[3]);
echo "Резульат умножения и сложения элементов массива = ", $result, "<br />";

$user = ["name" => "Ivan", "surname" => "Ivanov", "patronymic" => "Ivanovich"];
echo "Имя: ",  $user["surname"] . " " . $user["name"] . " " . $user["patronymic"] . "<br />";

$date = ["year" => "2024", "month" => "03", "day" => "09"];
echo "Дата: ", $date["year"] . "-" . $date["month"] . "-" . $date["day"] . "<br />";

$arrSymbol = ['a', 'b', 'c', 'd', 'e'];
echo "Количество элементов: ", count($arrSymbol), "<br />";

$arrSymbolSecond = ['a', 'b', 'c', 'd', 'e'];
echo "Последний элемент: ", $arrSymbolSecond[count($arrSymbolSecond) - 1], "<br />";
echo "Предпоследний элемент: ", $arrSymbolSecond[count($arrSymbolSecond) - 2], "<br />", "<br />";

//task 18
echo "TASK 18", "<br />";

$number3 = 3;
$number4 = 3;

function sumCheck($element1, $element2)
{
    if ($element1 + $element2 > 10)
    {
        return "true";
    }
    else
    {
        return "false";
    }
}

function equationCheck($element1, $element2)
{
    if ($element1 == $element2)
    {
        return "true";
    }
    else
    {
        return "false";
    }
}

echo "Результат работы функции sumCheck: ", sumCheck($number3, $number4), "<br />";
echo "Результат работы функции equationCheck: ", equationCheck($number3, $number4), "<br />";

$age = 60;
if ($age < 10 || $age > 99)
{
    echo "This age out of range";
}
else
{
    $sumAge = 0;
    while ($age > 0)
    {
        $digit = $age % 10;
        $sumAge += $digit;
        $age = (int)($age / 10);
    }
    if ($sumAge <= 9)
    {
        echo "Сумма цифр однозначна", "<br />";
    }
    else
    {
        echo "Сумма цифр двузначна", "<br />";
    }
}

$mySixthArray = [100, 250, 500];
if (count($mySixthArray) == 3)
{
    $sumOfElements = 0;
    foreach ($mySixthArray as $value)
    {
        $sumOfElements += $value;
    }
    echo "Сумма элементов: ", $sumOfElements, "<br />" , "<br />";
}
else
{
    echo "Массив не содержит трёх элементов", "<br />", "<br />";
}

//task 19
echo "TASK 19", "<br />";

for ($i = 1; $i < 21; $i++)
{
    echo str_repeat('x', $i), "<br />";
}
echo "<br />", "<br />";

//task 20
echo "TASK 20", "<br />";

$arrayOfNumber = [4, 9, 16, 64, 100];
echo "Среднее арифметическое: ", array_sum($arrayOfNumber) / count($arrayOfNumber), "<br />";

echo "Сумма чисел от 1 до 100: ", (1 + 100) * 100 / 2, "<br />";

$arrayOfSqrtRoots = array_map("sqrt", $arrayOfNumber);
echo "Массив квадратных корней:", "<br />";
foreach ($arrayOfSqrtRoots as $value)
{
    echo $value . " ";
}
echo "<br />";

$symbolsArray = range("a", "z");
$numbersArray = range(1, 26);
$symbolsAndNumbersArray = array_combine($symbolsArray, $numbersArray);
foreach ($symbolsAndNumbersArray as $key => $value)
{
    echo "[$key] => ", $value . " ";
}
echo "<br />";

$finalString = '1234567890';
$finalSum = array_sum(str_split($finalString, 2));
echo "Сумма из пар чисел = ", $finalSum;