<?php
if ('GET' === $_SERVER['REQUEST_METHOD']) {
    $account = $_GET['account'];
    echo '這是get<br>';
    echo  'Account = ' . $account ;
}
if('POST' === $_SERVER['REQUEST_METHOD']) {
    $password = $_POST['password_p'];
    echo '這是POST'; 
    echo '密碼長度為' . strlen($password);

}

?>