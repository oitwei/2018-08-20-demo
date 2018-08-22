<?php  
$array = [2, 4, 3, 3, 1];
$i = 0;
$array2 = $array;

function findMaxValueInArray($array)
{
    rsort($array);
    return $array[0];   
}

function findValueReapetCountInArray($array,$array2)
{
    $c= 0;
    foreach ($array as $value){
       
        if ($array2 == $value){
            $c++;   
        }  
    }
    return $c;
}
//print_r(array_count_values ($array));      
echo sprintf('最大值%s<br>',findMaxValueInArray($array));

for ($i = 0; $i < count($array);$i++ ){
    echo sprintf('%s重複%s<br>',$array[$i],findValueReapetCountInArray($array,$array2[$i]));
}
?> 
