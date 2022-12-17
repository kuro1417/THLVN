<?php
    $idSP = $_GET['idSP'];
    $delete_cart = "DELETE FROM `cart` WHERE `cart`.`idSP` = $idSP";
    mysqli_query(Connect(), $delete_cart);
    $delete_lib = "DELETE FROM `libary` WHERE `libary`.`idSP` = $idSP";
    mysqli_query(Connect(), $delete_lib);
    $delete_pro = "DELETE FROM `product` WHERE `product`.`idSP` = $idSP";
    mysqli_query(Connect(), $delete_pro);
redirect('?mod=admin&act=product_management');
?>