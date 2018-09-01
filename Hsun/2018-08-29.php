<?php

$file = fopen(__DIR__ . '\test.txt', 'w');
fwrite($file, '1' . PHP_EOL);
fwrite($file, '2' . PHP_EOL);
$file = fopen(__DIR__ . '\test.txt', 'r');
fclose($file);