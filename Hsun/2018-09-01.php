<?php

$file = fopen(__DIR__ . '/../Zhong/2018-08-30-question.txt', 'r');
$usersData = [];
while (($buffer = fgets($file)) !== false) {
    $usersData[] = trim($buffer);
}
fclose($file);
$usersDataTitle = $usersData[0];
unset($usersData[0]); 
$usersDataTitle = explode(',', $usersDataTitle);

foreach ($usersData as $value) {
    $usersDataValue[] = explode(',', $value);
}

foreach ($usersDataTitle as $index => $title) {
    $usersDataTitleInIndex[$title] = [];
}

foreach ($usersDataValue as $arrayUsersValue) {
    foreach ($arrayUsersValue as $index => $value) {
        $key = $usersDataTitle[$index];
        $usersDataTitleInIndex[$key][] = $value;
    }
}

$i = 0;
$weightTemp = 0;
$ageSum = 0;
$weightSum = 0;
$ageTemp = 0;

foreach ($usersDataValue as $value) {
    $ageTemp = intval($usersDataTitleInIndex['age'][$i]);
    $ageSum = $ageSum + $ageTemp;
    $weightTemp = intval($usersDataTitleInIndex['weight'][$i]);
    $weightSum = $weightSum + $weightTemp;
    $i++;
}
$pepole = count($usersDataValue);
$ageAverage = $ageSum / $pepole;
$weightAverage = $weightSum / $pepole;
$pepolePrint =  '總共' . $pepole . '人' . PHP_EOL;
$ageAveragePrint = '平均年紀' . $ageAverage . '歲' . PHP_EOL;
$weightAveragePrint = '平均公斤' . $weightAverage . '公斤' . PHP_EOL;


$printAnser = [$pepolePrint, $ageAveragePrint, $weightAveragePrint];
$file = fopen(__DIR__ . '/2018-08-31-anser.txt', 'w');
$file = $file;
foreach ($printAnser as $value) {
    $buffer = $value;
    fwrite($file, $buffer);
}
fclose($file);