<?php session_start();?>
<?php
$name=$address=$login=$password='';
if (isset($_SESSION['customer'])){
    $name=$_SESSION['customer']['name'];
    $address=$_SESSION['customer']['address'];
    $login=$_SESSION['customer']['login'];
    $password=$_SESSION['customer']['password'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員登録</title>
</head>
<body>
    <form action="guest-output.php" method="post">
        <table>
            <tr>
                <td>NAME</td>
                <td><input type="text" name="name" value="<?=$name?>"></td>
            </tr>

            <tr>
                <td>ID</td>
                <td><input type="text" name="login" value="<?=$login?>"></td>
            </tr>
            <tr>
                <td>PASSWORD</td>
                <td><input type="password" name="password" value="<?=$password?>"></td>
            </tr>
        </table>
            <input type="submit" value="登録">
    </form>
</body>
</html>