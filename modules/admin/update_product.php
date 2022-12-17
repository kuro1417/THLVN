<?php
    get_header();
    $idSP = $_GET['idSP'];
    $pro = "SELECT * FROM `product` WHERE `product`.`idSP` =  $idSP";
    $row = mysqli_fetch_array(mysqli_query(Connect(), $pro));

    if(isset($_POST['btn_update'])){
        if(isset($_POST['tenSP'])){
            $tenSP = $_POST['tenSP'];
        }
        if(isset($_POST['giaSP'])){
            $giaSP = $_POST['giaSP'];
        }
        if(isset($_POST['img'])){
            $img = $_POST['img'];
        }
        if(isset($_POST['moTa'])){
            $moTa = $_POST['moTa'];
        }
        if(isset($_POST['nhaPH'])){
            $nhaPH = $_POST['nhaPH'];
        }
        if(isset($_POST['ngayPH'])){
            $ngayPH = $_POST['ngayPH'];
        }

        $update = "UPDATE product SET tenSP='".$tenSP."',price='".$giaSP."',moTa='".$moTa."',img='".$img."',nhaPH='".$nhaPH."', ngayPH='".$ngayPH."'
            WHERE idSP = $idSP";
        mysqli_query(Connect(),$update);
        redirect("?mod=admin&act=product_management");
    }
?>
<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Sửa Sản Phẩm</h2>
			</div>
			<div class="panel-body">
				<form method="post" enctype="multipart/form-data">
                <div class="form-group">
                        <label for="tenSP">Tên SP:</label>
                        <input required="true" type="text" class="form-control" id="tenSP" name="tenSP" value="<?php echo $row['tenSP'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="giaSP">Giá SP:</label>
                        <input required="true" type="number" class="form-control" id="giaSP" name="giaSP" value="<?php echo $row['price'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="imageSP">Ảnh SP:</label>
                        <input type="text" class="form-control" id="imageSP" name="img" value="<?php echo $row['img'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="moTa">Mô Tả SP:</label>
                        <textarea name="moTa" id="" name="moTa" class="form-control" cols="30" rows="10">"<?php echo $row['moTa'] ?>"</textarea>
                    </div>
                    <div class="form-group">
                        <label for="nhaPH">Nhà PH:</label>
                        <input type="text" class="form-control" id="nhaPH" name="nhaPH" value="<?php echo $row['nhaPH'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="ngayPH">Ngày PH:</label>
                        <input type="date" class="form-control" id="ngayPH" name="ngayPH" value="<?php echo $row['ngayPH'] ?>">
                    </div>
                    <input class="btn btn-success" id="submit_img" name="btn_update" type="submit" value="Cập nhật">
				</form>
			</div>
		</div>
	</div>
<?php
    get_footer();
?>