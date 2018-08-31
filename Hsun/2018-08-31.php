<?php

$file = fopen(__DIR__ . '/123.txt', 'r');
$handle = $file;
$arrayData = [];
while (($buffer = fgets($handle)) !== false) {
    $arrayData[] = $buffer;
}
fclose($handle);
$arrayTitle = $arrayData[0];
unset($arrayData[0]); //回傳void
$arrayTitle = (explode(",", $arrayTitle));

foreach ($arrayData as $value) {
    $arrayValue[] = explode(",", $value);
}

// print_r($arrayValue);
// $ageCurrent = 0;
// $ageSum = 0;
// $weightCurrent = 0;
// $weightSum = 0;
// foreach ($arrayValue as $value) {
//     $ageCurrent = (int)$value[1];
//     $ageSum = $ageSum + $ageCurrent;
//     $weightCurrent = (int)$value[2];
//     $weightSum = $weightSum + $weightCurrent;
// }
// $ageAverage = $ageSum / count($arrayValue);
// $weightAverage = $weightSum / count($arrayValue);

// echo '總共' . count($arrayValue) . '人' . PHP_EOL;
// echo '平均年紀' . $ageAverage . '歲' . PHP_EOL;
// echo '平均公斤' . $weightAverage . '公斤' . PHP_EOL;



foreach ($arrayTitle as $index => $title) {
    $arrayTitleIndex[$title] = [];
    $arrayNumberIndex[$index] = $title;
}
// var_dump($arrayNumberIndex);
print_r($arrayValue);
foreach ($arrayValue as $index => $value) {
    $arrayValue2[] = $value;
}
print_r($arrayValue);
foreach ($arrayValue as $index => $value) {
    $arrayTitleIndex[$arrayNumberIndex[$index]][] = $value;
}
// var_dump($arrayTitleIndex);



// for ($i = 0; $i <= count($arrayValue as $value) {
//     $ = $value[0] 
// }; $i++) {
//     if ($arrayNumberIndex === $i) {
//         $arrayTitleIndex = $arrayValue[$i]; 
//     }
// }


