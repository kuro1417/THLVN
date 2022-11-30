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
                            <button class="btn btn-success cart-btn"><a href="?mod=cart&act=show_cart&id=<?php echo $_SESSION['idTK'] ?>" class="text-white text-decoration-none"><i class="fa-solid fa-cart-shopping"></i>Giỏ Hàng</a></button>
                        </div>
                    </div>
                    <div class="content col-md-9">
                        <!-- end search -->
                            <?php get_slider() ?>
                        <h5 class="section-header my-3">Game hay</h5>
                        <div class="game-section">
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="?mod=product&act=detail&id=1">
                                        <img class="img-thumbnail" src="https://cdn.cloudflare.steamstatic.com/steam/apps/588650/capsule_616x353.jpg?t=1658329626"></a></div>
                                <div class="col-md-4"><a href="">
                                    <img class="img-thumbnail" src="https://genk.mediacdn.vn/2019/3/10/photo-1-15522277313981030231701.jpg" ></a></div>
                                <div class="col-md-4"><a href="">
                                    <img class="img-thumbnail"
                                            src="https://assets.nintendo.com/image/upload/c_limit,f_auto,h_300,q_auto,w_500/v1/ncom/en_US/games/switch/p/pokemon-legends-arceus-switch/posters/Switch_PLA_OverviewTRL_eShop" ></a></div>
                                <div class="col-md-4"><a href="">
                                    <img class="img-thumbnail"
                                            src="https://cdn1.epicgames.com/offer/611482b8586142cda48a0786eb8a127c/EGS_DeadbyDaylight_BehaviourInteractive_S1_2560x1440-a32581cf9948a9a2e24b2ff15c1577c7"></a></div>
                                <div class="col-md-4"><a href="">
                                    <img class="img-thumbnail"
                                            src="https://cdn.cloudflare.steamstatic.com/steam/apps/650000/capsule_616x353.jpg?t=1569613157"></a></div>
                                <div class="col-md-4"><a href="">
                                    <img class="img-thumbnail"
                                            src="https://cdn.akamai.steamstatic.com/steam/apps/1276790/capsule_616x353.jpg?t=1643427121" ></a></div>
                            </div>
                        </div>
                    </div>

            <?php
                get_sidebar();
            ?>
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
    get_footer();
?>