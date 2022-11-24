<?php 
    get_header();
?>
<div class="wp-content">
    <div class="container">
        <div class="row text-white">
            <div class="col-md-12 d-flex">
                <form action="" class="form-search my-3">
                    <input class="search" type="text" name="" id="" placeholder="Search">
                </form>
                <div class="cart ml-auto mt-3">
                    <button class="btn btn-success"><a href="?page=cart" class="text-white text-decoration-none"><i
                                class="fa-solid fa-cart-shopping"></i>Giỏ Hàng</a></button>
                </div>
            </div>
            <div class="content col-md-10">
                <div class="profile">
                    <h3>Hồ Sơ cá Nhân</h3>
                    <p>Tên Đăng nhập</p>
                    <div class="name">
                        <p>
                            <?php echo $_SESSION['username'] ?>
                        </p>
                    </div>
                    <p class="pt-2">email</p>
                    <div class="mail">
                        <p>
                            <?php echo $_SESSION['email'] ?>
                        </p>
                    </div>
                </div>
                <div class="change-pass">
                    <h3>Đổi mật khẩu</h3>
                    <form action="" method="post">
                        <label for="old_pass">Mật khẩu hiện tại</label><br>
                        <input type="password" name="old_password" id="old_pass"><br>
                        <label for="new_pass">Mật khẩu mới</label><br>
                        <input type="password" name="new_password" id="new_pass"><br>
                        <label for="re_new_pass">Nhập lại Mật khẩu mới</label><br>
                        <input type="password" name="re_new_password" id="re_new_pass"><br><br>
                        <input type="submit" name="btn-change" class="btn btn-success" value="xác nhận"><br>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>

<?php 
    get_footer();
?>