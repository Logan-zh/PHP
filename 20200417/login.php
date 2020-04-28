<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入</title>
    <style>
        form{
            border:solid;
            width:300px;
            height:200px;
            text-align:center;
            padding:50px 0;
            box-sizing:border-box;
        }
    </style>
</head>
<body>
    <?php 
    $showLoginForm = true; 
    if(isset($_GET['status'])){
        switch($_GET['status']){
            case 'login':
                echo '登入中<br>';
                $showLoginForm = false;
                echo '<a href="login.php">登出</a>';
            break;
            case 'fail':
                echo '未登入';
            break;
            }
        }
    if($showLoginForm){
    ?>
    <form action="user.php" method='get'>
        <div>帳號:<input type="text" name='acc'></div>
        <div>密碼:<input type="password" name="pw"></div>
        <div>
            <input type="submit" value="登入">
            <input type="reset" value="重置">
        </div>
    </form>
    <?php } ?>
</body>
</html>