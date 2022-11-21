<?php
require('PHP-function/Config.php');
if (isset($_POST['btn-res'])) {
    $error = array();

    if (isset($_POST['username'])) {
        $userName = $_POST['username'];
    }

    if (isset($_POST['password'])) {
        $password = $_POST['password'];
    }
        

    if (isset($_POST['rePassword'])) {
        $rePass = $_POST['rePassword'];
    }

    if (isset($_POST['gmail'])) {
        $gmail = $_POST['gmail'];
    }

    if (empty($_POST['username'])) {
        $error['username'] = "Vui lòng không để trống tên đăng nhập";
    }else if(!(strlen($userName)>=3 && strlen($userName)<=12)){
        //kiểm tra độ dài tài khoản
        $error['username'] = 'Tài khoản phải có độ dài 3 - 12 kí tự';
    }
    else if (empty($_POST['password'])) {
        $error['password'] = "Vui lòng không để trống mật khẩu";
    }else if(!(strlen($password)>=6 && strlen($password)<=32)){
        //kiểm tra độ dài mật khẩu
        $error['password'] = 'Mật khẩu phải có độ dài 6 - 32 kí tự';
    }
    else if(empty($_POST['rePassword'])){
        $error['repass'] = "Vui lòng không để trống nhập lại mật khẩu";
    }
    else if(empty($_POST['gmail'])) {
        $error['mail'] = "Vui lòng không để trống Email";
    }
    else
    {
        if ($rePass == $password) {
            //kiểm tra tài khoản
            $checkAcc = "SELECT * FROM `account` WHERE username = '" . $userName . "' ";
            $resultAcc = mysqli_query(connect(), $checkAcc);
            $numAcc = mysqli_num_rows($resultAcc);
            if ($numAcc > 0) {
                $error['username'] = "Tên Đăng Nhập đã tồn tại";
            } else {
                //check mail
                $checkMail = "SELECT * FROM `account` WHERE email = '" . $gmail . "' ";
                $resultMail = mysqli_query(connect(), $checkMail);
                $numMail = mysqli_num_rows($resultMail);
                if (!$numMail > 0) {
                    $insert = "INSERT INTO `account`(`idTK`, `username`, `password`, `email`) VALUES ('','" . $userName . "','" . $password . "','" . $gmail . "')";
                    if (mysqli_query(connect(), $insert)) {
                        header("location: index.php");
                    }
                } else {
                    $error['mail'] = "Email này đã được sử dụng";
                }
            }
        } else {
            $error['repass'] = "Mật Khẩu không khớp";
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
    <link rel="stylesheet" href="public/css/L&R.css">
    <script src="./public/js/jquery-3.6.1.js"></script>
    <title>resgiter</title>
</head>

<body>
    <div class="wrapper">
        <form action="" method="post" class="form-login">
            <div class="logo">
                <img src="./public/image/logo.png" alt="">
            </div>
            <div class="form-group">
                <i class="fa-solid fa-user"></i>
                <input type="text" class="form-input" name="username" id="UserName" value="<?php echo set_value('userName') ?>" placeholder="Nhập tài khoản"
                    autocomplete="off">
            </div>
            <?php echo form_error('username') ?>
            <div class="form-group">
                <i class="fa-solid fa-lock"></i>
                <input type="password" data-toggle="tooltip" title="Mật khẩu phải dài hơn 6 kí tự" class="form-input" name="password" id="PassWord" value="<?php echo set_value('password') ?>" placeholder="Nhập mật Khẩu">
                <div class="eye">
                    <i class="fa-solid fa-eye toggle"></i>
                </div>
            </div>
            <?php echo form_error('password') ?>
            <div class="form-group">
                <i class="fa-solid fa-lock"></i>
                <input type="password" class="form-input" name="rePassword" id="rePassword" value="<?php echo set_value('rePass') ?>" placeholder="Nhập lại mật Khẩu">
                <div class="eye">
                    <i class="fa-solid fa-eye toggle"></i>
                </div>
            </div>
            <?php echo form_error('repass') ?>
            <div class="form-group">
                <i class="fa-solid fa-envelope"></i>
                <input type="gmail" class="form-input" name="gmail" id="gmail" value="<?php echo set_value('gmail') ?>" placeholder="Nhập gmail" autocomplete="off">
            </div>
            <?php echo form_error('mail') ?>
            <div class="orther">
                <input type="submit" class="resgiter"  name="btn-res" value="Đăng ký"></input>
                <button class="out"><a href="index.php">Đăng nhập </a> </button>
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