<?php
    date_default_timezone_set('asia/taipei');
    $id = $_POST['id'];
    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $birthday = $_POST['birthday'];
    $tellphone = $_POST['tellphone'];
    $update_time = date('Y-m-d');
    $dsn = "mysql:host=localhost;charset=utf8;dbname=web";
    $pdo = new pdo($dsn,'root','');
    $sql = "update `users` set `nickname`='$nickname',`email`='$email',`password`='$password',`name`='$name',`birthday`='$birthday',`tellphone`='$tellphone',`update_time`='$update_time' where `id`='$id'";
    $result = $pdo->exec($sql);
    echo $sql;
    if($result){
        echo 'suscessed';
        header('location:users_list.php');
    }else{
        echo 'fail';
        echo $sql;
    }
?>