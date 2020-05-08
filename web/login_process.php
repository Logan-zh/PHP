<?php
    date_default_timezone_set('asia/taipei');
    if(!empty($_POST['email'])){
        echo "有送出資料";
        $email = $_POST['email'];
        $password = $_POST['password'];
        $dsn = "mysql:host=localhost;charset=utf8;dbname=web";
        $pdo = NEW pdo ($dsn,'root','');
        $sql = "select * from `users` where `email` = '$email' && `password` = '$password'";
        $user = $pdo->query($sql)->fetch();
        print_r($user);
        session_start();
        if($user){
            echo '登入成功';
            // setcookie('id',$user['id'],time()+600);
            // setcookie('status','true',time()+600);
            $_SESSION['id']=$user['id'];
            $_SESSION['status']='true';
            header('location:users_list.php');
        }else{
            echo '登入失敗';
            // setcookie('status','false',time()+10);
            $_SESSION['status']='false';
            header('location:login_page.php');
        }
    }else{
        // setcookie('status','NULL',time()+10);
        $_SESSION['status']='NULL';
        header('location:login_page.php');
    }
?>