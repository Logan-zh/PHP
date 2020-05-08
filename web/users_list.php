<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員列表</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="header">
        <h1>會員列表</h1>
    <?php
        // if($_COOKIE['id']){
        // include 'dbconnect.php';
        // $id = $_COOKIE['id'];
        session_start();
        if($_SESSION['id']){
        include 'dbconnect.php';
        $id = $_SESSION['id'];
        $sql = "select * from users where `id` = '$id'";
        $user = $pdo->query($sql)->fetch();
        echo "<h3>歡迎".$user['name']."</h3>";
        }else{
            header('location:login_page.php');
        }
        $sql = "select * from users";
        $rows = $pdo->query($sql)->fetchall();
    ?>
        </div>
    <table class="users-table">
        <tr>
            <td>ID</td>
            <td>暱稱</td>
            <td>電子信箱</td>
            <td>密碼</td>
            <td>姓名</td>
            <td>生日</td>
            <td>行動電話</td>
            <td>註冊日期</td>
            <td>操作</td>
        </tr>
    <?php
        foreach($rows as $row){
            echo "<tr><td>$row[id]</td>";
            echo "<td>$row[nickname]</td>";
            echo "<td>$row[email]</td>";
            echo "<td>$row[password]</td>";
            echo "<td>$row[name]</td>";
            echo "<td>$row[birthday]</td>";
            echo "<td>$row[tellphone]</td>";
            echo "<td>$row[create_time]</td>";
            echo "<td>";
            echo "<a href='edit.php?ID=$row[id]'><button>編輯</button></a>";
            echo "<a href='delete_process.php?ID=$row[id]'><button>刪除</button></a>";
            echo "</td>";
        }
    ?>
    </table>
    
    <a href="login_page.php"><h2>回登入</h2></a>
    </div>
</body>
</html>