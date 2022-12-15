<?php session_start(); ?>
<?php
unset($_SESSION['customer']);
$pdo=new PDO('mysql:host=localhost;dbname=login;charset=utf8', 
	'megumi', 'password');
$sql=$pdo->prepare('select * from customer where login=? and password=?');
$sql->execute([$_REQUEST['login'], $_REQUEST['password']]);
foreach ($sql as $row) {
	$_SESSION['customer']=[
		'id'=>$row['id'], 'name'=>$row['name'], 
		'address'=>$row['address'], 'login'=>$row['login'], 
		'password'=>$row['password']];
}
if (isset($_SESSION['customer'])) {
	echo 'Hello!', $_SESSION['customer']['name'], 'さん。';
} else {
	echo 'ログイン名またはパスワードが違います。';
}
?>
