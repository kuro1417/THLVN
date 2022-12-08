<?php 
    get_header();
    # Lấy các sản phẩm
    $sql_pro = "SELECT `idSP`,`img` FROM `product` ";
    $query_pro = mysqli_query(Connect(),$sql_pro);
?>
<style>
    img.thumb{
        width: 181px;
        height: 153px;
        margin-bottom: 15px;
    }
</style>
<div class="wp-content">
    <div class="container">
            <div class="row text-white">
                <div class="col-md-12 d-flex">
                        <form action="" class="form-search my-3">
                            <input class="search" type="text" name="" id="" placeholder="Search">
                        </form>
                        <div class="cart ml-auto mt-3">
                            <button class="btn btn-success cart-btn"><a href="?mod=cart&act=show_cart&idTK=<?php echo $_SESSION['idTK'] ?>" class="text-white text-decoration-none"><i class="fa-solid fa-cart-shopping"></i>Giỏ Hàng</a></button>
                        </div>
                </div>
                    <div class="content col-md-9">
                        <!-- end search -->
                            <?php get_slider() ?>
                        <h5 class="section-header my-3">Game hay</h5>
                        <div class="game-section">
                            <div class="row">
                                <?php while ($row_pro = mysqli_fetch_array($query_pro)) { ?> 
                                <div class="col-md-4">
                                    <a href="?mod=product&act=detail&id=<?php echo $row_pro['idSP'] ?>"> <img class="img-thumbnail thumb" src="<?php echo $row_pro['img'] ?>"></a>
                                </div>
                                <?php } ?>
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