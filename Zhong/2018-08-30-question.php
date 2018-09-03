<?php

$file = fopen(__DIR__ . '/2018-08-30-question.txt', 'r');

$handle = $file;

$current_line = 1;
$column_name = [];
$output = [];
$mapping = [];

while (($buffer = fgets($handle)) !== false) {
    if (1 === $current_line) {
        $column_name = explode(',', $buffer);
        $column_data = [];
        

        foreach ($column_name as $index => $name) {
            $column_data[$name] = [];
            $mapping[$index] = $name;
           
        }
    } else {
        // list($name, $age, $weight) =
        $result = explode(',', $buffer);
        foreach ($result as $index => $row) {
            $column_data[$mapping[$index]][] = $row;
        }
    }
    $current_line ++;
}



$people_count = count($output);
$people_average_age = array_sum(array_column($output, 'age')) / $people_count;
$people_average_weight = array_sum(array_column($output, 'weight')) / $people_count;

var_dump($people_count, $people_average_age, $people_average_weight);

fclose($handle);
