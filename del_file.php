<?php
include_once "base.php";

$id = $_GET['id'];
$file = find('file_info',$id);
unlink($file['path']);
$re = del('file_info',$id);


?>

<h4>確認刪除嗎?</h4>

<a href="?confirm=1">是</a>
<a href="?confirm=0">否</a>