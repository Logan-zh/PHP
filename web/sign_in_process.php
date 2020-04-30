<?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dsn = "mysql:host=localhost;charset=utf8;dbname=web";
    $pdo = new pdo($dsn,'root','');
    $sql = "select * from `users` where `email`='$email' && `password`='$password'";
    $result = $pdo->exec($sql);
    if($result){
        header('location:users_list.php');
    }else{
        echo 'fail';
        echo $sql;
    }
?>