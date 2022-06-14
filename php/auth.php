<?php
$login = $_POST['alogin'];
$pass=$_POST['apass'];
$mysql=new mysqli('akame','root','','akame');
$result = $mysql->query("SELECT * FROM `user` WHERE `login` = '$login' AND `pass` = '$pass'");
$user = $result->fetch_assoc();

if ($user==0) {
    echo "Нет пользователя";
    exit();
}

$mysql->close();
header('Location: /');
?>
