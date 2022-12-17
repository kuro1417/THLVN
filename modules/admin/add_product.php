<?php
    get_header();
    if(isset($_POST['btn_add'])){
        if(isset($_POST['tenSP'])){
            $tenSP = $_POST['tenSP'];
        }
        if(isset($_POST['giaSP'])){
            $giaSP = $_POST['giaSP'];
        }
        if(isset($_POST['img'])){
            $img = $_POST['img'];
        }
        if(isset($_POST['category'])){
            $cat = $_POST['category'];
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

    $add = "INSERT INTO `product`(`idSP`, `tenSP`, `price`, `img`, `moTa`, `idLoai`, `nhaPH`, `ngayPH`) VALUES 
        ('','$tenSP','$giaSP','$img','$moTa','$cat','$nhaPH','$ngayPH')";
        mysqli_query(Connect(),$add);
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
                        <input required="true" type="text" class="form-control" id="tenSP" name="tenSP">
                    </div>
                    <div class="form-group">
                        <label for="giaSP">Giá SP:</label>
                        <input required="true" type="number" class="form-control" id="giaSP" name="giaSP" >
                    </div>
                    <div class="form-group">
                        <label for="imageSP">Ảnh SP:</label>
                        <input type="text" class="form-control" id="imageSP" name="img">
                    </div>
                    <div class="form-group">
                        <label for="moTa">Mô Tả SP:</label>
                        <textarea name="moTa" id="" name="moTa" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="cat">ID Loại:</label>
                        <input type="text" class="form-control" id="cat" name="category">
                    </div>
                    <div class="form-group">
                        <label for="nhaPH">Nhà PH:</label>
                        <input type="text" class="form-control" id="nhaPH" name="nhaPH">
                    </div>
                    <div class="form-group">
                        <label for="ngayPH">Ngày PH:</label>
                        <input type="date" class="form-control" id="ngayPH" name="ngayPH">
                    </div>
                    <input class="btn btn-success" id="submit_img" name="btn_add" type="submit" >
				</form>
			</div>
		</div>
	</div>
<?php
    get_footer();
?>