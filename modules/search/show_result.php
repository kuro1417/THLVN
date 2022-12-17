<?php 
    get_header();
    if(isset($_POST['btn_search'])){
        $keyWord = $_POST['key_word'];
    }
    $item = "SELECT * from `product` WHERE `tenSP` LIKE '%".$keyWord."%' ";
    $item_query = mysqli_query(Connect(), $item);
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
                        <?php
                            get_search();
                        ?>
                        <div class="cart ml-auto mt-3">
                            <button class="btn btn-success cart-btn"><a href="?mod=cart&act=show_cart&idTK=<?php echo $_SESSION['idTK'] ?>" class="text-white text-decoration-none"><i class="fa-solid fa-cart-shopping"></i>Giỏ Hàng</a></button>
                        </div>
                </div>
                    <div class="content col-md-9">
                        <h5 class="section-header my-3"><?php echo $keyWord ?></h5>
                        <div class="game-section">
                            <div class="row">
                                <?php while ($row_items = mysqli_fetch_array($item_query)) { ?> 
                                <div class="col-md-4">
                                    <a href="?mod=product&act=detail&id=<?php echo $row_items['idSP'] ?>"> <img class="img-thumbnail thumb" src="<?php echo $row_items['img'] ?>"></a>
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