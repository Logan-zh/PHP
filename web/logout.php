<?php
    setcookie('status',$_COOKIE['status'],time()-3600);
    header('location:login_page.php');
?>