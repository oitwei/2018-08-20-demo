<?PHP

if ('GET' === $_SERVER['REQUEST_METHOD']) {
    $idGet = $_GET['id'];
    $passwordGet = $_GET['password'];
    echo $idGet . '您好';
} else { 
    $idPost = $_POST['id'];
    $passwordPost = $_POST['password'];
    echo $idPost . '您好 <br>';
    echo '您的密碼' . mb_strlen($passwordPost, 'utf-8') .  '位數';
}