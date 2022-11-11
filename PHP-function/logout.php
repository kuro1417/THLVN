<?php
    session_start();

    setcookie('username',$userName,time() - 3600);
    setcookie('password',$password,time() - 3600);
    setcookie('is_login',$_POST['remember_me'],time() - 3600);
    //hủy session Logined
    unset($_SESSION['is_login']);
    unset($_SESSION['username']);
    unset($_SESSION['IDKH']);
    
    //trở về trang chủ
    header("location: /THLVN/index.php");
?>