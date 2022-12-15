<?php session_start(); ?>
<?php require '../header.php'; ?>
<?php require 'menu.php'; ?>
<?php
$name=$address=$login=$password='';
if (isset($_SESSION['customer'])) {
	$name=$_SESSION['customer']['name'];
	$address=$_SESSION['customer']['address'];
	$login=$_SESSION['customer']['login'];
	$password=$_SESSION['customer']['password'];
}
echo '<form action="customer-output.php" method="post">';
echo '<table>';
echo '<tr><td>お名前</td><td>';
echo '<input type="text" name="name" value="', $name, '">';
echo '</td></tr>';
echo '<tr><td>ご住所</td><td>';
echo '<input type="text" name="address" value="', $address, '">';
echo '</td></tr>';
echo '<tr><td>ログイン名</td><td>';
echo '<input type="text" name="login" value="', $login, '">';
echo '</td></tr>';
echo '<tr><td>パスワード</td><td>';
echo '<input type="password" name="password" value="', $password, '">';
echo '</td></tr>';
echo '</table>';
echo '<input type="submit" value="確定">';
echo '</form>';
?>
<?php require '../footer.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<h1 style="text-align:center;margin-top: 0em;margin-bottom: 1em;" class="h1_log">ログインしてください</h1>
   <form action="login.php" method="post" class="form_log">
     <input type="email" name="email" class="textbox un" placeholder="メールアドレス"><br>
     <input type="password" name="password" class="textbox pass" placeholder="パスワード"><br>
     <button type="submit" class="log_button">ログインする</button>
   </form>


	<h1 style="text-align:center;margin-top: 2em;margin-bottom: 1em;" class="h1_log">初めての方はこちら</h1>
<form action="register.php" method="post" class="form_log">
     <input type="email" name="email" class="textbox un" placeholder="メールアドレス"><br>
     <input type="password" name="password" class="textbox pass" placeholder="パスワード"><br>
     <button type="submit" class="log_button">新規登録する</button>
     <p style="text-align:center;margin-top: 1.5em;">※パスワードは半角英数字をそれぞれ１文字以上含んだ、８文字以上で設定してください。</p>
</form>
</body>
</html>
