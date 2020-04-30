<?php
    $id = $_GET['ID'];
    $dsn = "mysql:host=localhost;charset=utf8;dbname=web";
    $pdo = NEW pdo($dsn,'root','');
    $sql = "delete from `users` where `id`='$id'";
    $result = $pdo->exec($sql);
    if($result){
        echo 'suscess';
        header('location:users_list.php');
    }else{
        echo 'fail<br>';
        echo $sql;
    }
?>