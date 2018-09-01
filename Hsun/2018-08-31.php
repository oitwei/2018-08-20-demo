<?php

$file = fopen(__DIR__ . '/123.txt', 'r');
$handle = $file;
$arrayData = [];
while (($buffer = fgets($handle)) !== false) {
    $arrayData[] = $buffer;
}
fclose($handle);
$arrayTitle = $arrayData[0];
unset($arrayData[0]); 
$arrayTitle = (explode(",", $arrayTitle));

foreach ($arrayData as $value) {
    $arrayValue[] = explode(",", $value);
}

foreach ($arrayTitle as $index => $title) {
    $arrayTitleIndex[$title] = [];
    $arrayNumberIndex[$index] = $title;
}

foreach ($arrayValue as $value) {
    foreach ($value as $index => $columnValueOfValue) {
        $key = $arrayNumberIndex[$index];
        $arrayTitleIndex[$key][] = $columnValueOfValue;
    }
}
$i = 0;
$weightTemp = 0;
$ageSume =0;
foreach ($arrayValue as $value) {
    $ageTemp = intval($arrayTitleIndex['age'][$i]);
    $ageSum = $ageSum + $ageTemp;
    $weightTemp = intval($arrayTitleIndex['weight'][$i]);
    $weightSum = $weightSum + $weightTemp;
    $i++;
}



$ageAverage = $ageSum / count($arrayValue);
$weightAverage = $weightSum / count($arrayValue);
echo '總共' . count($arrayValue) . '人' . PHP_EOL;
echo '平均年紀' . $ageAverage . '歲' . PHP_EOL;
echo '平均公斤' . $weightAverage . '公斤' . PHP_EOL;



