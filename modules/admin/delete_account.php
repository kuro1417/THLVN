<?php
    $idTK = $_GET['idTK'];

    $delete_cart = "DELETE FROM `cart` WHERE `cart`.`idTK` = $idTK";
    mysqli_query(Connect(), $delete_cart);
    $delete_lib = "DELETE FROM `libary` WHERE `libary`.`idTK` = $idTK";
    mysqli_query(Connect(), $delete_lib);
    $delete_acc = "DELETE FROM `account` WHERE `account`.`idTK` = $idTK";
    mysqli_query(Connect(), $delete_acc);
redirect("?mod=admin&act=account_management");
?>