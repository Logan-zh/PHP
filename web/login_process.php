<?php
    date_default_timezone_set('asia/taipei');
    if(!empty($_POST['email'])){
        echo "有送出資料";
        $email = $_POST['email'];
        $password = $_POST['password'];
        $dsn = "mysql:host=localhost;charset=utf8;dbname=web";
        $pdo = NEW pdo ($dsn,'root','');
        $sql = "select count(*) from `users` where `email` = '$email' && `password` = '$password'";
        $user = $pdo->query($sql)->fetchColumn();
        echo $user;
        if($user>0){
            echo '登入成功';
            header('location:users_list.php?email='.$email);
        }else{
            echo '登入失敗';
            header('location:login_page.php?status=false');
        }
    }else{
        header('location:login_page.php?status=NULL');
    }
?>