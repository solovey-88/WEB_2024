<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $email = $_POST["email"];
    $category = $_POST["category"];
    $title = $_POST["title"];
    $text = $_POST["text"];
}

$dir = "categories/$category";
if (!is_dir($dir)) {
    mkdir($dir, 0755, true);
}


$fileName = "categories/$category/{$title}.txt";
$data = "$email \n$category \n$title \n$text \n";
$write = fopen($fileName, "w");
if ($write)
{
    fwrite($write, $data);
    fclose($write);
}