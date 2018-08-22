<?php  
$array = [1, 1, 3]; 
function findMaxValueInArray($array)
{
    $key = 0;
   foreach ($array as $value)
   {
       if ($key < $value){   
           $key = $value;
       }
   }  
   return $key ;
}

function findValueReapeatCountInArray($array)
{
    $reapeatArray = [];
    foreach ($array as $value)
    
        if (isset($reapeatArray[$value])){  
            $reapeatArray[$value] += 1;;
        }
        else {
            $reapeatArray[$value] = 1;
        }
    return $reapeatArray;
}
//print_r(array_count_values ($array));      
echo sprintf('最大值%s<br>', findMaxValueInArray($array));
print_r(findValueReapeatCountInArray($array)); 
?> 
