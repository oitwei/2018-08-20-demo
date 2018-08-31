<?php

$file = fopen(__DIR__ . '/123.txt', 'r');
$handle = $file;
$arrayData = [];
while (($buffer = fgets($handle)) !== false) {
    $arrayData[] = $buffer;
}
fclose($handle);

// $arrayTitle = $arrayData[0];
unset($arrayData[0]); //回傳void
// $arrayTitle = (explode(",", $arrayTitle));

foreach ($arrayData as $value) {
    $arrayValue[] = explode(",", $value);
}

print_r($arrayValue);
$ageCurrent = 0;
$ageSum = 0;
$weightCurrent = 0;
$weightSum = 0;
foreach ($arrayValue as $value) {
    $ageCurrent = (int)$value[1];
    $ageSum = $ageSum + $ageCurrent;
    $weightCurrent = (int)$value[2];
    $weightSum = $weightSum + $weightCurrent;
}
$ageAverage = $ageSum / count($arrayValue);
$weightAverage = $weightSum / count($arrayValue);

echo '總共' . count($arrayValue) . '人' . PHP_EOL;
echo '平均年紀' . $ageAverage . '歲' . PHP_EOL;
echo '平均公斤' . $weightAverage . '公斤' . PHP_EOL;


// $indexNumber = 0;
// foreach ($arrayTitle as $value) {
//     $arrayTitleIndex[$value] = '';
//     $arrayNumberIndex[] = $indexNumber;
//     $indexNumber++;
// }
// foreach ($arrayValue as $value) {
//     $arrayTitleIndex['姓名'] = $value[0];
// }
// print_r($arrayTitleIndex);
//笨方法
// $i = 0;
// foreach ($arrayValue as $value) {
//     if (key($arrayNumberIndex) === 0) {
//         $arrayTitleIndex['姓名'] = $value;
//     } else if (key($arrayNumberIndex) === 1) {
//         $arrayTitleIndex['年紀'] = $value;
//     } else if (key($arrayNumberIndex) === 2) {
//         $arrayTitleIndex['體重'] = $value;
//     }
//     print_r(key($arrayNumberIndex));

// }


// for ($i = 0; $i <= count($arrayValue as $value) {
//     $ = $value[0] 
// }; $i++) {
//     if ($arrayNumberIndex === $i) {
//         $arrayTitleIndex = $arrayValue[$i]; 
//     }
// }


