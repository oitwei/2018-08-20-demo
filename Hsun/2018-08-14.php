<?php
#$data = [];
$data = array(1,2,3,4,5);
$find = rand(0,4);
$find1 = rand(1,10);
$print = 0;
$print1 = '';


function arrayValue($data,$find){
if(isset($data[$find])){
    
}
}

function arrayBoolean($data,$find1){
    $count = count($data);
    if($count >= $find1){
        $true = 'true';
        return $true;
    }
    else{
        $false = 'false';
        return $false;
    }
}

$print = arrayValue($data,$find);
$print1 = arrayBoolean($data,$find1);

echo $print.'在索引為'.$find.'的位置<br>';
echo $print1;

?>