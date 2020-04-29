<?php
    $dsn = "mysql:host=localhost;charset=utf8;dbname=school";
    $pdo = new pdo($dsn,'root','');
    $sql = "update `student` set `name`='王',`tellphone`='0913991321' where `id`=1";
    $result = $pdo->exec($sql);
    echo $sql.'<br>';
    if($result){
        echo 'suscceced';
    }else{
        echo 'fail';
    }
?>