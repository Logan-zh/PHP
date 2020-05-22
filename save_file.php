<?php

include_once "base.php";

print_r($_POST);
print_r($_FILES);

date_default_timezone_set('asia/taipei');

$name = $_FILES['img']['name'];
$tmp = $_FILES['img']['tmp_name'];
$type = $_FILES['img']['type'];
$error = $_FILES['img']['error'];

if($error == 0){
    switch($_FILES['img']['type']){
        case 'image/jpeg':
            $sub='.jpg';
        break;
        case 'image/png':
            $sub='.png';
        break;
        case 'image/gif':
            $sub='.gif';
        break;
    }

    $name = date("Ymdhis").$sub;
    move_uploaded_file($tmp,"img/".$name);

    if($_POST['id']){
        $data = [
            'id' => $_POST['id'],
            'filename' => $name,
            'type' => $type,
            'note' => $_POST['note'],
            'path' => 'img/'.$name,
            'upload_time' => date('Y-m-d'),
        ];
    }else{
        $data = [
            'filename' => $name,
            'type' => $type,
            'note' => $_POST['note'],
            'path' => 'img/'.$name,
            'upload_time' => date('Y-m-d'),
        ];
    }
    $re = save('file_info',$data);
    echo $re;
}else{
    $data = [
        'id' => $_POST['id'],
        'note' => $_POST['note'],
        'upload_time' => date('Y-m-d'),
    ];
    $re = save('file_info',$data);
    echo $re;
}
header('location:manage.php');
?>
