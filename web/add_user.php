<?php
if(empty($_POST)){
    echo '非法存取';
    exit();
}
    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $birthday = $_POST['birthday'];
    $tellphone = $_POST['tellphone'];
    $create_time = date('Y-m-d');
    $update_time = date('Y-m-d');
    echo "<pre>";print_r($_POST);
    date_default_timezone_set('asia/taipei');
    $dsn = "mysql:host=localhost;charset=utf8;dbname=web";
    $pdo = new pdo($dsn,'root','');
    $sql = "insert into `users` (`nickname`,`email`,`password`,`name`,`birthday`,`tellphone`,`create_time`,`update_time`) values ('$nickname','$email','$password','$name','$birthday','$tellphone','$create_time','$update_time')";
    $result = $pdo->exec($sql);
        
    if($result){
        header('location:login_page.php');
    }else{
        echo '註冊失敗';
    }
?>