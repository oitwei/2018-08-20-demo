<?php
$numberArray = [5, 88, 9];
$number = 5;

function findMaxValueInArray($index, $array)
{
    if (in_array($index, $array)) {
        $findArrayIndex = in_array($index, $array);
        return true;
    }
    return false;
}

function arrayExist($index, $array) 
{
    if (in_array($index, $array)) {
        $arrayExist = in_array($index, $array);
        return true;
    }
    return false;
}

$findArrayIndex = findArrayIndex($number, $numberArray);

if ($findArrayIndex === true) {
    $text = "%d在索引%d的位置<br>";
    echo sprintf($text, $number, $findArrayIndex);
    } else {
        $text = "%d不在索引<br>";
        echo sprintf($text, $number);
}

$arrayExist = arrayExist($number, $numberArray);

if ($arrayExist === true ) {
    echo '存在';
} else {
    echo '不存在';
}