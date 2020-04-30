<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員註冊</title>
    <style>
        :root{
            font-family:cursive sans-serif;
            font-size:1.5rem;
        }
        .container{
            display:flex;
            justify-content:center;
        }
        .container h1{
            position:absolute;

        }
        .reg{
            margin:100px 0px;
            display:flex;
        }
        .reg form{
            border:1px solid;
            padding:20px;
        }
        .reg form div{
            margin:10px;
            position:relative;
        }
        .reg form div .bef{
            position:absolute;
            left:0px;
            top:10px;
            transition:.5s;
            font-size:1rem;
            color:#0000;
            user-select:none;
        }
        .reg form div input:valid + .bef{
            transform:scale(.8) translate(-5px,-30px);
            color:#000;
        }
        .reg form div input{
            border:none;
            font-size:1rem;
            padding:10px 0;
            border-radius:10px;
        }
        .reg form div input[type=text],input[type=password],input[type=email],input[type=number]{
            width:400px;
        }
        .reg form .btn input{
            margin:10px 10px;
            padding:5px;
            color:#fff;
            border:none;
            background:#eee;
            font-size:.8rem;
            width:45%;
            transition:.5s;
            cursor:pointer;
        }
        .reg form .btn input:hover{
            transform:scale(1.1);
        }
    </style>
</head>
<body>
<?php
    $id = $_GET['ID'];
    echo "你的ID是$id";
    $dsn = "mysql:host=localhost;charset=utf8;dbname=web";
    $pdo = new pdo($dsn,'root','');
    $sql = "select * from `users` where `id`=$id";
    $result = $pdo->query($sql)->fetch();
?>
    <div class="container">
    <h1>編輯會員</h1>
    <div class="reg">
    <form action="update_user.php" method="post">
        <input type="hidden" value="<?=$result['id']?>" name="id">
        <div><input required value="<?=$result['nickname']?>" placeholder="暱　　稱：" type="text" name="nickname" ><span class="bef">暱　　稱：</span></div>
        <div><input required value="<?=$result['email']?>" placeholder="電子信箱：" type="email" name="email" ><span class="bef">電子信箱：</span></div>
        <div><input required value="<?=$result['password']?>" placeholder="密　　碼：" type="password" name="password" ><span class="bef">密　　碼：</span></div>
        <div><input required value="<?=$result['name']?>" placeholder="姓　　名：" type="text" name="name" ><span class="bef">姓　　名：</span></div>
        <div><span>生　　日：</span><input value="<?=$result['birthday']?>" type="date" name="birthday"></div>
        <div><input required value="<?=$result['tellphone']?>" placeholder="行動電話：" type="number" name="tellphone" ><span class="bef">行動電話：</span></div>
        <div class="btn"><input type="submit" value="修改"></div>
    </form>
    </div>
    </div>

</body>
</html>