<?php
    require('Config.php');

    if(!isset($_POST['btn-login'])){
        $error = array();
        if(isset($_POST['username'])){
            $userName = $_POST['username'];
        }
        if(isset($_POST['password'])){
            $password = $_POST['password'];
        }
        $log = "SELECT * FROM `account` WHERE username = '".$userName."' AND password='".$password."'";
        $resultLog = mysqli_query(connect(), $log);
        $numLog = mysqli_num_rows($resultLog);

        if($numLog > 0){
            header("location: TrangChu.php");
        }else{
            $error['lg']="<p>Sai tài khoản hoặc mật khẩu</p>";
        }
    }
    mysqli_close(connect());
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/L&R.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="./js/jquery-3.6.1.js"></script>
    <title>Login</title>
</head>

<body>
    <div class="wrapper">
        <form action="" method="post" class="form-login">
            <div class="logo">
                <img src="./image/logo.png" alt="">
            </div>
            <div class="form-group">
                <i class="fa-solid fa-user"></i>
                <input type="text" class="form-input" name="username" id="UserName" placeholder="Tài khoản" autocomplete="off">
            </div>
            <div class="form-group">
                <i class="fa-solid fa-lock"></i>
                <input type="password" class="form-input" name="password" id="PassWord" placeholder="Mật Khẩu">
                <div class="eye">
                    <i class="fa-solid fa-eye toggle"></i>
                </div>
            </div>
            <input type="checkbox">Nhớ mật Khẩu
            <div class="form-submit">
                <input type="submit" class="btn-login" value="Đăng Nhập">
            </div>

            <div class="orther">
                <button class="register"><a href="DangKy.php">Đăng kí</a></button>
            </div>
        </form>
    </div>

    <script>
        $(document).ready(function () {
            $('.eye').click(function () {
                $(this).children('i').toggleClass('fa-eye-slash fa-eye');
            });

            const togglePass = document.querySelector('.toggle')
            togglePass.addEventListener("click", function () {
                const input = this.parentNode.previousElementSibling;
                const inputType = input.getAttribute("type");
                if(inputType === "password"){
                    input.setAttribute("type","text");
                }else{
                    input.setAttribute("type","password");
                }
            });
        });
    </script>
</body>

</html>