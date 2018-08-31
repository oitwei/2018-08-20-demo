<?php

$file = fopen(__DIR__ . '/2018-08-30-question.txt', 'r');
$handle = $file;

$columns_name = [];
$csv_data = [];

$output = [];
$current_line = 1;

while (($buffer = fgets($handle)) !== false) {
    if (1 === $current_line) {
        $columns_name = explode(',', $buffer);
        $current_line += 1;
        continue;
    }

    $csv_data[] = explode(',', $buffer);
}

foreach ($columns_name as $index => $name) {
    $output[$name] = array_column($csv_data, $index);
}

fclose($handle);
