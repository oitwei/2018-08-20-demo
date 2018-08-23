<?php
$user_list = [
    [
        'id' => 2,
        'name' => 'A',
    ],

    [
        'id' => 6,
        'name' => 'B'
    ],

    [
        'id' => 4,
        'name' => 'C'
    ]
];

$user_score = [
    [
        'id' => 2,
        'score' => 23,
    ],

    [
        'id' => 4,
        'score' => 68,
    ],

    [
        'id' => 6,
        'score' => 74
    ]
];

function usermapping($user_list, $user_score)
{
    $output = [];
    foreach ($user_list as $user_listId) {

        foreach ($user_score as $user_scoreId) {
            
            $userData = [];
            
            if ($user_listId['id'] == $user_scoreId ['id'] ) {   
            $a = [];
            $a['id'] = $user_listId['id'] ;
            $a['name'] = $user_listId['name'] ;
            $a['score'] =  $user_scoreId['score'] ;
            // $userData[] = $user_listId ;
            // $userData[] = $user_listId['name'] ;
            // $userData[] = $user_scoreId['score'] ;
            // var_dump($a);
            }            
        }
        $output[] = $a;
    }
    return $output;
}

print_r(usermapping($user_list, $user_score));

?>