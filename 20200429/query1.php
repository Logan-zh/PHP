<?php
    date_default_timezone_set('asia/taipei');
    $dsn = "mysql:host=localhost;charset=utf8;dbname=school";
    $pdo = new pdo($dsn,"root","");
    $sql = "insert into student(`id`,`account`,`password`,`name`,`email`,`tellphone`,`create_time`,`update_time`,`birthday`) values (null,'wisky','wisky1108','wisky','wisky@gmail.com','09987124588','".date('Y-m-d H:i:s')."','".date('Y-m-d H:i:s')."','1918-06-08')";
    if($pdo->exec($sql)){
        echo "新增成功";
    }else{
        echo "新增失敗";
    }
?>