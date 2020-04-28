<?php
    $status = 'fail';
    if(!empty($_GET)){
        $acc = $_GET['acc'];
        $pw = $_GET['pw'];
        echo 'acc:'.$acc.'<br>';
        echo 'pw:'.$pw.'<br>';
        if($acc == 'admin' && $pw == 'admin'){
            echo '登入成功';
            $status = 'login';
        }else{
            echo '帳號密碼錯誤';
        }
    }
?>
<a href="login.php?status=<?=$status?>">回登入</a>
