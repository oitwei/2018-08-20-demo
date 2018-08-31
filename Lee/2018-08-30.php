<?php
$file = fopen('2018-08-30-question.txt', "r");
$array = [];
while (($buffer = fgets($file)) !== false) {
    
    $array[] = $buffer;   
    
    
}


foreach ($array as $value) {
    $value =

}
var_dump($array);
$usercount = (count($array))-1;
echo '人數:' . $usercount ;
echo '平均分數' ;




fclose($file)
?>