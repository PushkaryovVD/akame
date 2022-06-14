<?php
$login = $_POST['login'];
$pass=$_POST['password'];
$mysql=new mysqli('akame','root','','akame');
    $mysql->query("INSERT INTO `user` (`login`,`pass`) VALUES ('$login','$pass')");
    $mysql->close();
    header('Location: /')
?>