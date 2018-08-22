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

function usermapping($user_list , $user_score)
{
    $output=[];
   foreach($user_list as $user_listId)
    {
        foreach($user_score as $user_scoreId){

            if ($user_listId['id'] == $user_scoreId['id'])
            {   
                $output[$user_listId['id']]=$user_listId['name'] . '分數'.$user_scoreId['score'];
            }
        }
    }
    return $output;
}

print_r(usermapping($user_list, $user_score));

?>