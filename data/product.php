<?php
$id = $_GET['id'];
    #Lấy sẩn phẩm theo loại
    $sql_pro_id = "SELECT * FROM `product` WHERE `product`.`idLoai` =  $id ";
    $query_pro_id = mysqli_query(Connect(),$sql_pro_id);

    #Lấy Thể Loại
    $sql_cat = "SELECT * FROM `theloai` WHERE  `theloai`.`idLoai` = $id ";
    $query_cat = mysqli_query(Connect(),$sql_cat);
    $row_cat = mysqli_fetch_array($query_cat);

    #lấy sản phẩm theo idsp
    $sql_pro_idSP = "SELECT * FROM `product` WHERE `product`.`idSP` =  $id ";
    $query_pro_idSP = mysqli_query(Connect(),$sql_pro_idSP);
    $row_pro_idSP = mysqli_fetch_array($query_pro_idSP);

    mysqli_close(connect());
?>