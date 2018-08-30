<?php

$file = fopen(__DIR__ . '\test.txt', 'w');
var_dump($file);
fwrite($file, '1' . PHP_EOL);
var_dump($file);
fwrite($file, '2' . PHP_EOL);
var_dump($file);
$file = fopen(__DIR__ . '\test.txt', 'r');
var_dump($file);
echo $file;
$handle = fopen("http://www.example.com/", "r");
fclose($file);
var_dump($file);
fclose($handle);