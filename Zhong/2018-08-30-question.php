<?php

$file = fopen(__DIR__ . '/123.txt', 'r');

$handle = $file;

while (($buffer = fgets($handle)) !== false) {
    echo $buffer;
}

fclose($handle);
