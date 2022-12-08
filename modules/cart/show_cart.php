<?php 
    get_header();
    $idTK = $_GET['idTK'];
    
    $sql_show_cart = "SELECT * FROM `product` JOIN  `cart` on `cart`.`idSP` = `product`.`idSP` WHERE `cart`.idTK = $idTK";
    $query_show = mysqli_query(Connect(), $sql_show_cart);
?>
<div class="wp-content">
    <div class="container">
        <div class="row text-white">
            <div class="col-md-12">
            <h2>Giỏ hàng của tôi</h2>
            </div>
            <div class="content col-md-8">
                <?php
                while ($row_show = mysqli_fetch_array($query_show)) {
                ?>
                <div class="cart-items d-flex mb-3">
                    <a href="?mod=product&act=detail&id=<?php echo $row_show['idSP'] ?>"><img class="cart-img" src="<?php echo $row_show['img'] ?>" alt=""></a>
                    <div class="name-item"><a href="?mod=product&act=detail&id=<?php echo $row_show['idSP'] ?>"><?php echo $row_show['tenSP'] ?></a></div>
                    <div class="price-item"><?php echo $row_show['price'] ?> <strong>usd</strong></div>
                    <div class="remove-item"><a href="">remove</a></div>
                </div>
                <?php
                }
                ?>
            </div>
            <div class="sidebar col-md-4">
                <div class="form-cart-right">
                        <h2>Games and Apps Summary</h2>
                        <div class="form-cart-top">
                            <div class="price d-flex"><span>giá tiền:</span><p class="ml-auto">250</p></div>
                            <div><span>Taxes Calculated at Checkout</span></div>    
                            <div class="total d-flex"><span>Tổng tiền:</span><p class="ml-auto">250</p></div>
                        </div>
                        <button class="btn btn-primary btn-block">Thanh Toán</button>
                </div>
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