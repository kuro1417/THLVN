<?php
ob_start();
require('witget/header.php');
?>
<div class="wp-content text-white">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-12">
                <form action="" class="form-search my-3">
                    <input class="search" type="text" name="" id="" placeholder="Search">
                </form>
            </div>

            <div class="content col-md-8">
                <h3>Dead cells</h3>
                <img src="https://images8.alphacoders.com/120/1202591.jpg" width="700px" alt="">
                <div class="row mt-3">
                    <div class="col-md-11">
                        <div class="describe" id="describe">
                            <p><strong>Dead Cells</strong> cho phép người chơi vào vai một xác chết vô danh
                                nhưng lại có
                                khả năng chiến đấu “ảo diệu” đi khám phá sự tồn tại của mình trên một hòn đảo vô
                                định và
                                đầy rẫy cạm bẫy luôn sẵn sàng cho bạn “về vườn”.Bạn sẽ cần phải nhanh tay điều
                                khiển
                                nhân vật của mình chặt chém điên loạn, kết hợp nhuần
                                nhuyễn với việc né tránh, lăn lộn thì mới có khả năng qua màn. Vì như đã thấy,
                                các kẻ
                                thù trong game không những đông mà còn lắm chiêu bên cạnh hằng sa số cạm bẫy
                                nguy hiểm
                                (thật may là bạn có thể lợi dụng những cái bẫy này để hạ gục đối phương).Trong
                                suốt quá
                                trình chơi, bạn sẽ dần dà mở ra thêm những kĩ năng mới cho mình, giúp sống
                                sót trong các trận chiến “mỏi nhừ cả tay” dễ dàng hơn.</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="sidebar col-md-4 pt-5">
                <div class="logo"><img
                        src="https://cdn.cloudflare.steamstatic.com/steam/apps/588650/capsule_616x353.jpg?t=1658329626"
                        style="width:100%;" alt=""></div>
                <div class="pride pt-1">
                    <p>200.000</p>
                </div>
                <div class="buy-add-btn">
                    <button class="btn btn-primary btn-block">BUY NOW</button>
                    <button class="btn btn-success btn-block">ADD TO CART</button>
                </div>

                <div class="row game-attrs pt-5">
                    <div class="col-xs-4 col-md-3 text-muted small">Thể loại</div>
                    <div class="col-xs-8 col-md-9">
                        <a href="" class="item">Hành động</a>
                    </div>
                    <div class="col-xs-4 col-md-3 text-muted small">Tags:</div>
                    <div class="col-xs-8 col-md-9">
                        <a href="" class="title"></a>
                        <a href="" class="title"></a>
                        <a href="" class="title"></a>
                    </div>
                    <div class="col-xs-4 col-md-3 text-muted small">Nhà sản xuất:</div>
                    <div class="col-xs-8 col-md-9">
                        <span class="item">
                            "Tên nhà sản xuất"
                        </span>
                    </div>
                    <div class="col-xs-4 col-md-3 text-muted small">Nhà phát hành:</div>
                    <div class="col-xs-8 col-md-9">
                        <span class="item">
                            "Tên nhà sản xuất"
                        </span>
                    </div>
                    <div class="col-xs-4 col-md-3 text-muted small">Nhà phát hành:</div>
                    <div class="col-xs-8 col-md-9">2022</div>


                </div>
                <br>

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
    require('witget/footer.php');
?>