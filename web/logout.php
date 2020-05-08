<?php
    setcookie('status',null,time()-3600);
    setcookie('id',null,time()-3600);
    header('location:login_page.php');
?>