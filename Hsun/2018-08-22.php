<?php
$user_list = [
    [
        'id' => 2,
        'name' => 'A',
    ],
    [
        'id' => 5,
        'name' => 'B'
    ],
    [
        'id' => 6,
        'name' => 'C'
    ]
];
$user_score = [
    [
        'id' => 2,
        'score' => 23,
    ],
    [
        'id' => 5,
        'score' => 68,
    ],
    [
        'id' => 6,
        'score' => 74
    ]
];
// $scoreIndexId = [];
$id = 0;
$i = 0;
$output = [];
foreach ($user_score as $value_score) {
    foreach ($user_list as $value_list) {
        if ($value_list['id'] === $value_score['id']) {
            $tempArray['id'] = $value_list['id'];
            $tempArray['name'] = $value_list['name'];
            $tempArray['score'] = $value_score['score'];
        }

    }
    $output[] = $tempArray;
}

print_r($output);