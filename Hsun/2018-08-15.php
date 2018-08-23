<?php
$numberArray = [5,88,9];
$number = 99;

function getArrayIndex($search, $array)
{
    if (in_array($search, $array)) {
        $anser = in_array($search, $array);
        return $anser;
    }
    return 0;    
}

function getArrayValueExistence(
    $index, 
    $array
) { if (in_array($index, $array)) {
        $anser = in_array($index, $array);
        return '存在';
} 
    return '不存在';    
}

$arrayValue = arrayIndex($int, $noArray);

if ($arrayValue === 0) {

    echo $int.'不在索引<br>';
} else {
    echo $int.'在索引'.$arrayValue.'的位置<br>';
}

$exist = arrayExist($int, $noArray);

echo $exist;