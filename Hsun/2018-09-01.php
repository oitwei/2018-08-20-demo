<?php

$file = fopen(__DIR__ . '/../Zhong/2018-08-30-question.txt', 'r');
$handle = $file;
$arrayData = [];
while (($buffer = fgets($handle)) !== false) {
    $arrayData[] = trim($buffer);
}
fclose($handle);
$arrayTitle = $arrayData[0];
unset($arrayData[0]); 
$arrayTitle = explode(",", $arrayTitle);

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
$ageSum = 0;
$weightSum = 0;
$ageTemp = 0;

foreach ($arrayValue as $value) {
    $ageTemp = intval($arrayTitleIndex['age'][$i]);
    $ageSum = $ageSum + $ageTemp;
    $weightTemp = intval($arrayTitleIndex['weight'][$i]);
    $weightSum = $weightSum + $weightTemp;
    $i++;
}
$pepole = count($arrayValue);
$ageAverage = $ageSum / count($arrayValue);
$weightAverage = $weightSum / count($arrayValue);
$pepolePrint =  '總共' . $pepole . '人' . PHP_EOL;
$ageAveragePrint = '平均年紀' . $ageAverage . '歲' . PHP_EOL;
$weightAveragePrint = '平均公斤' . $weightAverage . '公斤' . PHP_EOL;


$columnAnser = [$pepolePrint, $ageAveragePrint, $weightAveragePrint];
$file = fopen(__DIR__ . '/2018-08-31-anser.txt', 'w');
$handle = $file;
foreach ($columnAnser as $value) {
    $buffer = $value;
    fwrite($handle, $buffer);
}
fclose($handle);