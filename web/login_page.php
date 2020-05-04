<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
    if(isset($_GET['status'])){
        switch ($_GET['status']){
            case 'false':
                echo '帳號密碼錯誤';
            break;
            case 'NULL':
                echo '沒有輸入';
            break;
            case 'true':
                echo 'get='.$_GET['id'];
                header('location:users_list.php'.$_GET['id']);
            break;
        }
    }
?>
    <div class="sign-in-box">
        <div class="info"><h1>會員登入</h1></div>
    <form action="login_process.php" method="POST">
        <div><span>電子信箱：</span><input type="text" name="email"></div>
        <div><span>密　　碼：</span><input type="text" name="password"></div>
        <div class="btn">
        <a href="register.php">註冊</a>
        <input type="submit" value="登入">
        </div>
    </form>
    </div>
</body>
</html>