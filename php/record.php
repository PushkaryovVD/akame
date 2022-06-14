<?php 
    $name=$_POST['message-name'];
    $number=$_POST['message-number'];
    $date=$_POST['message-date'];
    $time=$_POST['message-time'];
    $message=$_POST['message'];

    $mysql=new mysqli('akame','root','','akame');
    $mysql->query("INSERT INTO `record` (`name`,`number`,`date`,`time`,`message`) VALUES ('$name','$number','$date','$time','$message')");
    $mysql->close();

    header('Location: /')
?>