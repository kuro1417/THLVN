<?php
    $idSP = $_GET['idSP'];
    $idTK = $_GET['idTK'];
    $remove = "DELETE FROM `cart` WHERE `idSP` = $idSP AND `idTK` =$idTK ";
    $query_remove = mysqli_query(Connect(),$remove);

    redirect("?mod=cart&act=show_cart&idTK=$idTK");
?>