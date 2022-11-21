<?php
    ob_start();
    require('PHP-function/Config.php');
    session_start();
    if(isset($_POST['btn-login'])){
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
                $accInfo = "SELECT * FROM `account` WHERE username = '".$userName."' ";
                $resultInfor = mysqli_query(Connect(), $accInfo);
                if($rowInfor = mysqli_fetch_array($resultInfor)){
                    $_SESSION['idTk'] = $rowInfor['idTk'];
                    $_SESSION['username'] = $rowInfor['username'];
                    $_SESSION['password'] = $rowInfor['password'];
                    $_SESSION['email'] = $rowInfor['email'];
                }
                if(isset($_POST['remember_me'])){
                    setcookie('username',$userName,time() + 3600);
                    setcookie('password',$password,time() + 3600);
                    setcookie('user_login',$_POST['remember_me'],time() + 3600);
                }else{
                    setcookie('username',$userName,time() - 3600);
                    setcookie('password',$password,time() - 3600);
                    setcookie('is_login',$_POST['remember_me'],time() - 3600);
                }
            $_SESSION ['is_login'] = true ;
            header("location: main.php");
        }else if(empty($_POST['username'])){
            $error['username'] = "Vui lòng không để trống tên đăng nhập";
        }else if(empty($_POST['password'])){
            $error['password'] = "Vui lòng không để trống mật khẩu";
        }else{
            $error['login']="Sai tài khoản hoặc mật khẩu";
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
    <link rel="stylesheet" href="./public/css/L&R.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="./public/js/jquery-3.6.1.js"></script>
    <title>Login</title>
</head>

<body>
    <div class="wrapper">
        <form action="" method="post" class="form-login">
            <div class="logo">
                <img src="./public/image/logo.png" alt="">
            </div>
            <div class="form-group">
                <i class="fa-solid fa-user"></i>
                <input type="text" class="form-input" name="username" id="UserName" value="<?php if(!empty($userName)) echo $userName; echo get_data_cookie('username')?>" placeholder="Tài khoản" autocomplete="off">
            </div>
            <p class="error"> <?php if(!empty($error['username'])) echo $error['username'] ?></p>
            <div class="form-group">
                <i class="fa-solid fa-lock"></i>
                <input type="password" class="form-input" name="password" id="PassWord" value="<?php if(!empty($password)) echo $password; echo get_data_cookie('password')?>" placeholder="Mật Khẩu">
                <div class="eye">
                    <i class="fa-solid fa-eye toggle"></i>
                </div>
            </div>
            <p class="error"> <?php if(!empty($error['password'])) echo $error['password'] ?></p>
            <input type="checkbox" name="remember_me" id="remember"><label for="remember">Ghi nhớ mật khẩu</label>
            <p class="error"> <?php if(!empty($error['login'])) echo $error['login'] ?></p>
            <div class="form-submit">
                <input type="submit" class="login" name="btn-login" value="Đăng Nhập">
            </div>
            <div class="orther">
                <button class="register"><a href="resgiter.php">Đăng ký</a></button>
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