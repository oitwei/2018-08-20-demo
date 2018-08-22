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
foreach ($user_score as $value_score) {
    $id = $value_score['id'];
    // $scoreIndexId[$id]['score'] = $value_score['score'];
    // $scoreIndexId[$id][] = $value;
    // print_r(($value_score));
    foreach ($user_list as $value_list) {
        if ($user_list[$i]['id'] == $id) {
            // $user_list[$i]['id'] =$id;
            $user_list[$i]['score'] = $value_score['score'];
            $i++;
        }

    }
}

print_r($user_list);