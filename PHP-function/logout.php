<?php
    session_start();

    //hủy session Logined
    unset($_SESSION['is_login']);
    unset($_SESSION['username']);
    unset($_SESSION['IDKH']);
    
    //trở về trang chủ
    header("location: /THLVN/index.php");
?>