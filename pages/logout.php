<?php
    session_start();

    setcookie('user_login',$userName,time() - 3600);
    setcookie('is_lg',$_SESSION['is_login'],time() - 3600);
    //hủy session Logined
    unset($_SESSION['is_login']);
    unset($_SESSION['username']);
    unset($_SESSION['IDKH']);
    
    //trở về trang chủ
    header("location: index.php");
?>