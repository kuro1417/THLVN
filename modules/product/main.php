<?php 
    get_header();
    require('data/product.php');
?>
<style>
    img.thumb{
        width: 181px;
        height: 153px;
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
                            <button class="btn btn-success cart-btn"><a href="?mod=cart&act=show_cart&id=<?php echo $_SESSION['idTK'] ?>" class="text-white text-decoration-none"><i class="fa-solid fa-cart-shopping"></i>Giỏ Hàng</a></button>
                        </div>
                </div>
                    <div class="content col-md-9">
                        <h5 class="section-header my-3"><?php echo $row_cat['TheLoai'] ?></h5>
                        <div class="game-section">
                            <div class="row">
                                <?php 
                                    while($row_pro_id = mysqli_fetch_array($query_pro_id)){
                                ?>
                                <div class="col-md-3">
                                    <a href="?mod=product&act=detail&id=<?php echo $row_pro_id['idSP']?>">
                                        <img class="img-thumbnail thumb" src="<?php echo $row_pro_id['img'] ?>"></a>
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
        
<?php 
    get_footer();
?>