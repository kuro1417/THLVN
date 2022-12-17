<?php
    $idTK = $_SESSION['idTK'];
    $idSP = $_GET['idSP'];

    $sql=  "SELECT * FROM  `libary` WHERE  `libary`.`idTK`=$idTK";
    $sqlquery = mysqli_query(Connect(), $sql);
    $delete_cart = "DELETE FROM `cart` WHERE `cart`.`idSP` = $idSP";
    mysqli_query(Connect(), $delete_cart);   
    $row = mysqli_fetch_array($sqlquery);

if($idSP == $row['idSP'])
{
    redirect("?mod=home&act=main");
}else{
    $sql_lib = "INSERT INTO `libary`(`idLB`, `idSP`, `idTK`) VALUES ('','$idSP','$idTK')";
    $sql_lib_query = mysqli_query(Connect(), $sql_lib);      
}
    redirect("?mod=Libary&act=show_lib&idTK=$idTK");
?>