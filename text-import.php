<?php
/****
 * 1.建立資料庫及資料表
 * 2.建立上傳檔案機制
 * 3.取得檔案資源
 * 4.取得檔案內容
 * 5.建立SQL語法
 * 6.寫入資料庫
 * 7.結束檔案
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>文字檔案匯入</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1 class="header">文字檔案匯入練習</h1>
<!---建立檔案上傳機制--->

<form action="parse_file.php" method="POST" enctype="multipart/form-data" style="margin-left:auto;margin-right:auto;margin-bottom:10px; width:300px; border:1px solid black;padding:10px;">
    <input type="file" name="doc">
    <input type="submit" value="匯入">
</form>

<!----讀出匯入完成的資料----->
<?php
include_once 'base.php';
$todos = all('todo_list',1,pdo::FETCH_ASSOC);
?>
<table style="width:500px;margin:auto">
    <tr>
        <td>id</td>
        <td>subject</td>
        <td>description</td>
        <td>create_date</td>
        <td>due</td>
    </tr>
    <?php
        foreach($todos as $t){
        ?>
        <tr>
            <td><?=$t['id']?></td>
            <td><?=$t['subject']?></td>
            <td><?=$t['description']?></td>
            <td><?=$t['create_date']?></td>
            <td><?=$t['due']?></td>
        </tr>
        <?php
        }
    ?>
</table>

<?php
    $newfile = fopen('todolist.txt','w+');
    foreach($todos as $t){
        $tmp = implode(',',$t)."\n";
        fwrite($newfile,$tmp);
    }
    fclose($newfile);
?>
<a href="download.txt" download>download</a>

</body>
</html>