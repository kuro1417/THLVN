<?php 
    ob_start(); 
    require('witget/header.php');
?>
<?php
    $page =!empty($_GET['page'])? $_GET['page']:'home_page';
    $path = "pages/{$page}.php";
    if(file_exists($path)){
        require $path;
    }else{
        echo "trang không tồn tại";
    }
?>
<?php 
    require('witget/footer.php');
?>