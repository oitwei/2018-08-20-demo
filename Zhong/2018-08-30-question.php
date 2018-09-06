<?php

$file = fopen(__DIR__ . '/2018-08-30-question.txt', 'r');
$handle = $file;

$columns_name = [];
$csv_data = [];

$output = [];
$current_line = 1;

while (($buffer = fgets($handle)) !== false) {
    if (1 === $current_line) {
<<<<<<< HEAD
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
=======
        $columns_name = explode(',', $buffer);
        $current_line += 1;
        continue;
>>>>>>> 529108f23c09ac459dc2ded14d135b49e09800a2
    }

<<<<<<< HEAD


$people_count = count($output);
$people_average_age = array_sum(array_column($output, 'age')) / $people_count;
$people_average_weight = array_sum(array_column($output, 'weight')) / $people_count;

var_dump($people_count, $people_average_age, $people_average_weight);
=======
    $csv_data[] = explode(',', $buffer);
}
var_dump($csv_data);
foreach ($columns_name as $index => $columnName) {
    $temp = array_column($csv_data, $index);
    $output[$columnName] = $temp ;
    var_dump($temp);
    exit();
}
>>>>>>> 529108f23c09ac459dc2ded14d135b49e09800a2

fclose($handle);
