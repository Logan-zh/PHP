<?php
    $dsn = "mysql:local=localhost;charset=utf8;dbname=school";
    $pdo = NEW pdo($dsn,'root','');
    $que = "select * from student";
    $rows = $pdo->query($que)->fetch();
    print_r($rows);
    foreach($rows as $row){
        echo $row."<br>";
    }
?>