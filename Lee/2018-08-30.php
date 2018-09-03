<?php
$file = fopen('2018-08-30-question.txt', "r");
$array = [];
$arrayValue = [];
$arrayTittle = [];
$agesum = 0;
$ageaverage = 0;
$weightsum = 0;
$weightaverage = 0;
$i = 0;
while (($buffer = fgets($file)) !== false) {
    $array[] = $buffer;   
    
}


foreach ($array as $value) { 
    if ($i === 0) {
        $arrayTittle[] = explode(',', $value);
    
    }
    if ($i > 0) {
        $arrayValue[] = explode(',', $value);
    }
    
    $i++;
}
foreach ($arrayValue as $value) {
    $arrayMapping['姓名'] = $value[0];
    $arrayMapping['年紀'] = $value[1];
    $arrayMapping['體重'] = $value[2];
    $agesum = intval($arrayMapping['年紀']) + $agesum;
    $weightsum = intval($arrayMapping['體重']) + $weightsum;
    

}

$ageaverage = intval($agesum/(count($array)-1));
$weightaverage = intval($weightsum/(count($array)-1));
$usercount = (count($array)-1);
echo '人數:' . $usercount;
echo '平均年紀' . $ageaverage;
echo '平均體重'. $weightaverage ;
fclose($file)
?>