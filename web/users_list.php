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
        include 'dbconnect.php';
        $email = $_GET['email'];
        $sql = "select * from users where `email` = '$email'";
        $user = $pdo->query($sql)->fetch();
        echo "<h3>歡迎$user[nickname]</h3>";

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
    
    <a href="login_page.php?id=<?=$user['id']?>"><h2>回登入</h2></a>
    </div>
</body>
</html>