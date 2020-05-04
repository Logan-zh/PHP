<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員註冊</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
    <div class="regis">
    <h1>會員註冊</h1>
    <div class="reg">
    <form action="add_user.php" method="POST">
        <div><input placeholder="暱　　稱：" type="text" name="nickname" required><span class="bef">暱　　稱：</span></div>
        <div><input placeholder="電子信箱：" type="email" name="email" required><span class="bef">電子信箱：</span></div>
        <div><input placeholder="密　　碼：" type="password" name="password" required><span class="bef">密　　碼：</span></div>
        <div><input placeholder="姓　　名：" type="text" name="name" required><span class="bef">姓　　名：</span></div>
        <div><span>生　　日：</span><input type="date" name="birthday"></div>
        <div><input placeholder="行動電話：" type="number" name="tellphone" required><span class="bef">行動電話：</span></div>
        <div class="btn"><input type="submit" value="加入會員"><input type="reset" value="重新填寫"></div>
    </form>
    </div>
    <a href="login_page.php"><h2>回登入</h2></a>
    </div>
    </div>
</body>
</html>