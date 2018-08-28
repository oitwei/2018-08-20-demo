<!DOCTYPE html>
<html>
<body>

GET
<br>
<form method="GET" action=>
    帳號:
    <br>
    <input type="text" name="id" value="GET" >
    <br>
    密碼:
    <br>
    <input type="text" name="password" value="GET">
    <br>
    <input type="submit" value="送出">
</form>

<br>
POST
<br>
<form method="POST" action=>
    帳號:<br>
    <input type="text" name="id" value="POST" >
    <br>
    密碼:<br>
    <input type="text" name="password" value="POST" >
    <br>
    <input type="submit" value="送出">
</form>

<?PHP

$idGet = $_GET['id'];
$passwordGet = $_GET['password'];
echo '帳號：' . $idGet . '密碼：' . $passwardGet . '<br>' ;
$idPost = $_POST['id'];
$passwordPost = $_POST['password'];
echo '帳號：' . $idPost . '密碼：' . $passwardPost;

?>
</body>
</html>