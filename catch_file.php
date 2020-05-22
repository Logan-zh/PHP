<?php
echo "<pre>";
    print_r($_FILES);
echo "</pre>";

$name = $_FILES['img']['name'];
$tmp = $_FILES['img']['tmp_name'];
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
}

?>

<img src="img/<?=$name?>" alt="">