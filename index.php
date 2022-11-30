<?php
    session_start(); 
    ob_start();
    //thư viện hàm
    require('lib/template.php');
    require('lib/Config.php');
    require('lib/url.php');
?>
<?php
    //Kiểm tra ghi nhớ đăng nhập
    if(!empty($_COOKIE['is_lg'])){
        $_SESSION['is_login'] = $_COOKIE['is_lg'];
        $_SESSION['username'] = $_COOKIE['user_login'];
    }

    // $page =!empty($_GET['page'])? $_GET['page']:'home_page';
    // $path = "pages/{$page}.php";
    
    $mod = !empty($_GET['mod'])? $_GET['mod']: 'home';
    $act = !empty($_GET['act'])? $_GET['act']: 'main';
    $path = "modules/{$mod}/{$act}.php";
    //Kiểm tra đăng nhập
    // if(!isset($_SESSION['is_login']) && $page != 'login' && $page != 'resgiter'){
    //     redirect("?page=login");
    // }
    if(!isset($_SESSION['is_login']) && $mod != 'login' && $mod != 'resgiter'){
        redirect('?mod=login&act=main');
    }

    if(file_exists($path)){
        require $path;
    }else{
        echo "trang không tồn tại";
    }
?>