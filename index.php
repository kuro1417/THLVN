<?php
    session_start(); 
    ob_start();
    require('PHP-function/template.php');
    require('PHP-function/Config.php');
    require('PHP-function/url.php');
?>
<?php
    //Kiểm tra ghi nhớ đăng nhập
    if(!empty($_COOKIE['is_lg'])){
        $_SESSION['is_login'] = $_COOKIE['is_lg'];
        $_SESSION['username'] = $_COOKIE['user_login'];
    }

    $page =!empty($_GET['page'])? $_GET['page']:'home_page';
    $path = "pages/{$page}.php";
    //Kiểm tra đăng nhập
    if(!isset($_SESSION['is_login']) && $page != 'login' && $page != 'resgiter'){
        redirect("?page=login");
    }

    if(file_exists($path)){
        require $path;
    }else{
        echo "trang không tồn tại";
    }
?>