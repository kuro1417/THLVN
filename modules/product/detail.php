<?php
ob_start();
get_header();
require('data/product.php');
$_SESSION['cat_title'] = $row_pro_idSP['idLoai'];

    $sql_cat_title = "SELECT `TheLoai` FROM `theloai` WHERE  `theloai`.`idLoai` = {$_SESSION['cat_title']}";
    $query_cat_title = mysqli_query(Connect(),$sql_cat_title);
    $row_cat_title = mysqli_fetch_array($query_cat_title);
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
                <h3><?php echo $row_pro_idSP['tenSP'] ?></h3>
                <img src="<?php echo $row_pro_idSP['img'] ?>" width="700px" height="370px" alt="">
                <div class="row mt-3">
                    <div class="col-md-11">
                        <div class="describe" id="describe">
                            <p><?php echo $row_pro_idSP['moTa'] ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sidebar col-md-4 pt-5">
                <div class="logo"><img
                        src="<?php echo $row_pro_idSP['img'] ?>"
                        width="371px" height="176px" alt=""></div>
                <div class="pride pt-1">
                    <p><?php echo $row_pro_idSP['price'] ?> usd</p>
                </div>
                <div class="buy-add-btn">
                    <a href="?mod=Libary&act=add_lib&idTK=<?php echo $_SESSION['idTK'] ?>&idSP=<?php echo $row_pro_idSP['idSP'] ?>"><button class="btn btn-primary btn-block">BUY NOW </button></a>
                    <a href="?mod=cart&act=add_cart&idSP=<?php echo $row_pro_idSP['idSP'] ?>"><button class="btn btn-success btn-block">ADD TO CART</button></a>
                </div>

                <div class="row game-attrs pt-5">
                <div class="col-md-6 text-muted small">Thể Loại:</div>
                    <div class="col-md-6">
                        <span class="item">
                            <?php echo $row_cat_title['TheLoai'] ?>
                        </span>
                    </div>
                    <div class="col-md-6 text-muted small">Nhà phát hành:</div>
                    <div class="col-md-6">
                        <span class="item">
                            <?php echo $row_pro_idSP['nhaPH'] ?>
                        </span>
                    </div>
                    <div class="col-md-6 text-muted small">Ngày phát hành:</div>
                    <div class="col-md-6"><?php echo date('d/m/Y',strtotime($row_pro_idSP['ngayPH']))  ?></div>


                </div>
                <br>

            </div>
        </div>
    </div>
</div>
<?php
    get_footer();
?>