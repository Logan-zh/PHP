<?php
/**
 * 1.建立資料庫及資料表來儲存檔案資訊
 * 2.建立上傳表單頁面
 * 3.取得檔案資訊並寫入資料表
 * 4.製作檔案管理功能頁面
 */
    include_once 'base.php';
    $rows = all('file_info');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>檔案管理功能</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1 class="header">檔案管理練習</h1>
<!----建立上傳檔案表單及相關的檔案資訊存入資料表機制----->
    <table>
        <tr>
            <td>瀏覽</td>
            <td>檔名</td>
            <td>路徑</td>
            <td>類別</td>
            <td>說明</td>
            <td>上傳時間</td>
            <td>操作</td>
        </tr>
        <?php foreach($rows as $row){?>
            <form action="save_file.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?=$row['id']?>">
            <tr><td><label for="img<?=$row['id']?>"><img src='img/<?=$row['filename']?>'></label></td>
            <td><?=$row['filename']?></td>
            <td><?=$row['path']?></td>
            <td><?=$row['type']?></td>
            <td><input name='note' type='text' value='<?=$row['note']?>'></td>
            <td><?=$row['upload_time']?></td>
            <td>
                <input name="img" type="file" id="img<?=$row['id']?>">
                <a href="del_file.php?id=<?=$row['id']?>">刪除</a>
                <input type="submit" value='更新'>
            </td>
        </tr>
        </form>
        <?php } ?>
    </table>




<!----透過資料表來顯示檔案的資訊，並可對檔案執行更新或刪除的工作----->




</body>
</html>