<?php
function getMaxValueInArray($array)
{
    $currentMaxValue = 0;
    foreach ($array as $value) {
        if ($currentMaxValue < $value) {
            $currentMaxValue = $value;            
        }
    }
    return $currentMaxValue;
}

function getNumberOfTimesInArray($arrayData)  
{ 
    $output = [];   
    foreach ($arrayData as $value) {
        if (isset($output[$value])) {
            $output[$value] += 1;
        } else {
            $output[$value] = 1;
        }   
    }
    return $output;
}
$numberArray = [2, 2, 2, 3];

echo getMaxValueInArray($numberArray) . '<br>';

print_r(getNumberOfTimesInArray($numberArray)); 
