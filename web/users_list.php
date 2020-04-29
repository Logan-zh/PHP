<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員列表</title>
    <style>
        table{
            border-collapse:collapse;
            margin:auto;
        }
        table td{
            border:1px solid #333;
            padding:5px;
        }
        button{
            margin:2px;
            border-radius:2px;
            box-shadow:1px 1px 2px #000;
        }
    </style>
</head>
<body>
    <h1>會員列表</h1>
    <?php
        $dsn = "mysql:host=localhost;charset=utf8;dbname=web";
        $pdo = new pdo($dsn,'root','');
        $sql = "select * from users";
        $rows = $pdo->query($sql)->fetchall();
    ?>
    <table>
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
            echo "<a href='delete_user.php?ID=$row[id]'><button>刪除</button></a>";
            echo "</td>";
        }
    ?>
    </table>
</body>
</html>