<?php
    $idTK = $_SESSION['idTK'];
    $idSP = $_GET['idSP'];
    $sql_add_cart = "INSERT INTO `cart`(`idCart`, `idTK`, `idSP`, `total`) VALUES ('','$idTK','$idSP','[value-4]')"
?>