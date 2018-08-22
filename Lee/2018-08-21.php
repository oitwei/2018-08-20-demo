<?php

$users = [
[
'id' => 1,
'name' => '小明',
'has_cat' => true
],
[
'id' => 2,
'name' => '小華',
'has_cat' => true
],
[
'id' => 3,
'name' => '小美',
'has_cat' => false
],
];

function searchColumn($users ,$column = 'id')
{
    $outputarray = [];
    foreach($users as $value)
   {
        $output[] = $value[$column]; 
   }
   return $output;
}
print_r(searchColumn($users,'name'));
?>