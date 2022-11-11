<?php
    require('witget/header.php');
?>
        <div class="wp-content">
            <div class="container">
                <div class="row text-white">
                    <div class="col-md-12 d-flex">
                        <form action="" class="form-search my-3">
                            <input class="search" type="text" name="" id="" placeholder="Search">
                        </form>
                        <div class="cart ml-auto mt-3">
                            <button class="btn btn-success"><a href="" class="text-white text-decoration-none"><i
                                        class="fa-solid fa-cart-shopping"></i>Giỏ Hàng</a></button>
                        </div>
                    </div>
                <div class="content col-md-10">
                    <div class="profile">
                        <h3>Hồ Sơ cá Nhân</h3>
                        <p>Tên Đăng nhập</p>
                        <div class="name">
                            <p><?php echo $_SESSION['username'] ?></p>
                        </div>
                        <p class="pt-2">email</p>
                        <div class="mail">
                            <p><?php echo $_SESSION['email'] ?></p>
                        </div>
                    </div>
                    <div class="xMDeox pt-5">
                        <div class="Hvae38" role="main">
                            <form>
                                <div class="DQHtXe">
                                    <div class="FUOi1p">
                                        <h3 class="DSKSYU">Đổi mật khẩu</h3>
                                    </div>
                                    <div class="fo5IeT">
                                        <div class="Kuz0mN">
                                            <div class="A8yLgM">
                                                <div class="ltFkuQ">
                                                    <div class="op-21F">
                                                        <label class="mlaS58" for="passwordOld">Mật khẩu cũ</label>
                                                    </div>
                                                    <div class="iqUYOb">
                                                        <input id="passwordOld" class="-wQUk=jw kpK-3W" type="password" autocomplete="off" name="password" value>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="Kuz0mN">
                                            <div class="A8yLgM">
                                                <div class="ltFkuQ">
                                                    <div class="op-21F">
                                                        <label class="mlaS58" for="passwordNew">Mật khẩu mới</label>
                                                    </div>
                                                    <div class="iqUYOb">
                                                        <input id="passwordNew" class="-wQUk=jw kpK-3W" type="password"
                                                            autocomplete="off" name="password" value>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="Kuz0mN">
                                            <div class="A8yLgM">
                                                <div class="ltFkuQ">
                                                    <div class="op-21F">
                                                        <label class="mlaS58" for="passwordRepeat">Nhập lại mật khẩu</label>
                                                    </div>
                                                    <div class="iqUYOb">
                                                        <input id="passwordRepeat" class="-wQUk=jw kpK-3W" type="password" autocomplete="off" name="password" value>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="Kuz0mN">
                                            <div class="R1zsL7"></div>
                                            <div class="vuqET4 mt-3">
                                                <button class="btn btn-success btn--m btn--inline btn-solid-primary--disabled" aria-disabled="true">Xác nhận</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $('#home-slide').carousel({
                interval: 2000,
                ride: "carousel"
            })
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
<?php
require('witget/footer.php')
    ?>