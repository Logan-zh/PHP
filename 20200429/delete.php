<?php
    $dsn = "mysql:host=localhost;charset=utf8;dbname=school";
    $pdo = new pdo($dsn,'root','');
    $sql = "delete from `student` where `name`=''";
    $result = $pdo->exec($sql);
    if($result){
        echo 'suscessed';
    }else{
        echo 'fail';
    }
?>