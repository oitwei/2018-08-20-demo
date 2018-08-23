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

function getColumn($arrayData, $id)
{
    $id = 'id';
    $output = [];
    foreach ($arrayData as $value ) {
        $output[] = $value[$id];
    }
    return $output;
}
$id = 0;

$users = getColumn($users, $id);
print_r($users);
foreach ($users as $value) {
    echo $value;
}
