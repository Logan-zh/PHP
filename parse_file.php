<?php

include_once "base.php";
if(!empty($_FILES['doc']['tmp_name'])){
    echo "上傳檔名跟路徑：".$_FILES['doc']['tmp_name']."<BR>";
    echo "檔案類型：".$_FILES['doc']['type']."<BR>";
    echo "檔案原始名稱：".$_FILES['doc']['name']."<BR>";

    move_uploaded_file($_FILES['doc']['tmp_name'],"doc/".$_FILES['doc']['name']);
    echo "檔案搬移位置在doc/".$_FILES['doc']['name'];
}else{
    echo "上傳錯誤：".$_FILES['doc']['error'];
}
?>