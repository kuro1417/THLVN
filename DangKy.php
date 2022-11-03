<?php 
    require('Config.php');
    if(!isset($_POST['btn-res'])){
        $error = array();
        if(isset($_POST['username'])){
            $userName = $_POST['username'];
        }
        if(isset($_POST['password'])){
            $password = $_POST['password'];
        }

        if(isset($_POST['rePassword'])){
            $rePass = $_POST['rePassword'];
        }

        if(isset($_POST['gmail'])){
            $gmail = $_POST['gmail'];
        }

        if($userName == null){
            $error['username'] = "Vui lòng không để trống tên đăng nhập";
        }else
        {
            if($rePass == $password){
                //kiểm tra tài khoản
                $checkAcc = "SELECT * FROM `account` WHERE username = '".$userName."' ";
                $resultAcc = mysqli_query(connect(),$checkAcc);
                $numAcc = mysqli_num_rows($resultAcc);
                if($numAcc > 0){
                    $error['account'] = "Tên Đăng Nhập đã tồn tại";
                }else{
                    //check mail
                    $checkMail = "SELECT * FROM `account` WHERE email = '".$gmail."' ";
                    $resultMail = mysqli_query(connect(),$checkMail);
                    $numMail = mysqli_num_rows($resultMail);
                    if(!$numMail > 0){
                        $insert = "INSERT INTO `account`(`idTK`, `username`, `password`, `email`) VALUES ('','".$userName."','".$password."','".$gmail."')";
                        if(mysqli_query(connect(),$insert)){
                            header("location: login.php");
                            }
                        }
                        
                    else{
                        $error['mail'] = "Email này đã được sử dụng";
                    }
                }
            }else{
                $error['repass']="Mật Khẩu không khớp";
            }
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="css/L&R.css">
    <script src="./js/jquery-3.6.1.js"></script>
    <title>resgiter</title>
</head>

<body>
    <div class="wrapper">
        <form action="" method="post" class="form-login">
            <div class="logo">
                <img src="image/logo.png" alt="">
            </div>
            <div class="form-group">
                <i class="fa-solid fa-user"></i>
                <input type="text" class="form-input" name="username" id="UserName" placeholder="Nhập tài khoản" autocomplete="off">
            </div>

            <div class="form-group">
                <i class="fa-solid fa-lock"></i>
                <input type="password" data-toggle="tooltip" title="Mật khẩu phải dài hơn 6 kí tự" class="form-input" name="password" id="PassWord" placeholder="Nhập mật Khẩu" >
                <div class="eye">
                    <i class="fa-solid fa-eye toggle"></i>
                </div>
            </div>

            <div class="form-group">
                <i class="fa-solid fa-lock"></i>
                <input type="password" class="form-input" name="rePassword" id="rePassword"
                    placeholder="Nhập lại mật Khẩu">
                <div class="eye">
                    <i class="fa-solid fa-eye toggle"></i>
                </div>
            </div>

            <div class="form-group">
                <i class="fa-solid fa-envelope"></i>
                <input type="gmail" class="form-input" name="gmail" id="gmail" placeholder="Nhập gmail" autocomplete="off">
            </div>
            <div class="orther">
                <input type="submit" class="btn-res" value="Đăng ký"></input>
                <button class="out"><a href="login.php">Thoát </a> </button>
            </div>
        </form>
    </div>

    <script>
        $(document).ready(function () {
            $('.eye').click(function () {
                $(this).children('i').toggleClass('fa-eye-slash fa-eye');
            });

            const togglePass = document.querySelectorAll('.toggle');
            [...togglePass].forEach(items => items.addEventListener("click", function () {
                const input = this.parentNode.previousElementSibling;
                const inputType = input.getAttribute("type");
                if (inputType === "password") {
                    input.setAttribute("type", "text");
                } else {
                    input.setAttribute("type", "password");
                }
            }))

            $('[data-toggle="tooltip"]').tooltip({
                placement: 'bottom',
                trigger: 'hover,forcus',
                html: true,
            });
        });
    </script>
</body>

</html>