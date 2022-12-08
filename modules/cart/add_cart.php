<?php
    $idTK = $_SESSION['idTK'];
    $idSP = $_GET['idSP'];
    #lấy giá sản phẩm
    $sql_price = "SELECT `price` FROM `product` WHERE `idSP` = $idSP";
    $sql_price_query = mysqli_query(Connect(), $sql_price);
    $price = mysqli_fetch_array($sql_price_query);

    $sql_add_cart = "INSERT INTO `cart`(`idCart`, `idTK`, `idSP`, `total`) VALUES ('','$idTK','$idSP','$price[price]')";
    $sql_add_cart_query = mysqli_query(Connect(), $sql_add_cart);
    redirect("?mod=cart&act=show_cart&idTK=$idTK")
?>