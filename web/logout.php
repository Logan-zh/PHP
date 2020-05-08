<?php
    // setcookie('status',null,time()-3600);
    // setcookie('id',null,time()-3600);
    session_start();
    $_SESSION['status']=null;
    $_SESSION['id']=null;
    header('location:login_page.php');
?>