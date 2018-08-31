<?php
$file = fopen('2018-08-30-question.txt', "r");
$array = [];
$array2 = [];
$array3 = [];
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
        $array3[] = explode(',', $value);
    
    }
    if ($i > 0) {
        $array2[] = explode(',', $value);
    }
    
    $i++;
}
$array4[] = array_flip($array3);


foreach ($array2 as $value) {
    $array4['姓名'] = $value[0];
    $array4['年紀'] = $value[1];
    $array4['體重'] = $value[2];
    $agesum = intval($array4['年紀']) + $agesum;
    $weightsum = intval($array4['體重']) + $weightsum;
    var_dump($array4);

}

$ageaverage = intval($agesum/(count($array)-1));
$weightaverage = intval($weightsum/(count($array)-1));
$usercount = (count($array)-1);
echo '人數:' . $usercount;
echo '平均年紀' . $ageaverage;
echo '平均體重'. $weightaverage ;
fclose($file)
?>