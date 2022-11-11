<?php 
    session_start();
    if(!isset($_SESSION['is_login'])){
        header("Location: /THLVN/index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Home</title>
</head>
<body>
<div class="wrapper text-white">
        <div class="header mb-1 text-white">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-12 d-flex">
                        <div class="Head-Left">
                            <div class="all">
                                <a href="">
                                    <img src="./image/logo.png" style="width: 70px;" alt="">
                                </a>
                                    <a href=""><i class="fa-solid fa-house icon-home"></i> Trang Chủ</a>
                                    <a href=""><i class="fa-solid fa-phone"></i> Liên hệ</a>
                                    <a href=""><i class="fa-solid fa-gamepad"></i> Libary</a>
                            </div>
                        </div>

                        <div class="Head-right">
                            <div class="all">
                                <i class="fa-solid fa-user"></i> <a href="Profile.php" class="profile"><?php echo $_SESSION['username'] ?></a>
                                <i class="fa-solid fa-right-from-bracket"></i> <a href="/THLVN/PHP-function/logout.php" class="logout">Sign out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>