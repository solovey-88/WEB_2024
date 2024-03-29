<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $email = $_POST["email"];
    $category = $_POST["category"];
    $title = $_POST["title"];
    $text = $_POST["text"];
}

$dir = "laba_3/$category";
if (!is_dir($dir)) {
    mkdir($dir, 0755, true);
}


$fileName = "laba_3/$category/{$title}.txt";
$data = "Email: $email\nCategory: $category\nTitle: $title\nText: $text\n";
$write = fopen($fileName, "w");
if ($write)
{
    fwrite($write, $data);
    fclose($write);
}