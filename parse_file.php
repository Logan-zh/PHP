<?php

include_once "base.php";
if(!empty($_FILES['doc']['tmp_name'])){
    // echo "上傳檔名跟路徑：".$_FILES['doc']['tmp_name']."<BR>";
    // echo "檔案類型：".$_FILES['doc']['type']."<BR>";
    // echo "檔案原始名稱：".$_FILES['doc']['name']."<BR>";

    // move_uploaded_file($_FILES['doc']['tmp_name'],"doc/".$_FILES['doc']['name']);
    // echo "檔案搬移位置在doc/".$_FILES['doc']['name'];

    if($_FILES['doc']['type'] == 'text/plain'){
        move_uploaded_file($_FILES['doc']['tmp_name'],'doc/'.$_FILES['doc']['name']);
        $path = 'doc/'.$_FILES['doc']['name'];
        $file = fopen($path,'r');
        $num = 1;
        header("Content-Type:text/html;charset=utf-8");
        while(!feof($file)){
            $txt = fgets($file);
            $tmp = explode(',',$txt);
            $data = [
                'subject' => $tmp[0],
                'description' => $tmp[1],
                'create_date' => $tmp[2],
                'due' => $tmp[3],
            ];
            save('todo_list',$data);
            $num++;
        }
        echo '已儲存'.$num.'筆資料';
        echo fclose($file);
    }
    to('text-import.php');
}else{
    echo "上傳錯誤：".$_FILES['doc']['error'];
}
?>