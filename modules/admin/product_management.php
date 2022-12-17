<?php
    get_header();
    $pro_management = "SELECT * FROM `product`";
    $query = mysqli_query(Connect(), $pro_management);
?>
<div class="wp-content">
            <div class="container" style="max-width: 1278px;">
                <div class="row text-white">
                    <div>
                        <form action="" class="form-search my-3">
                            <h1>Quản Lý Sản Phẩm</h1>
                        </form>
                        <div class="menu ml-4">
                            <ul class="d-flex list-unstyled">
                                <li>
                                    <a class="btn btn-primary mr-3" href="?mod=admin&act=product_management">Sản phẩm</a>
                                </li>
                                <li>
                                    <a class="btn btn-primary mr-3" href="?mod=admin&act=account_management">Tài khoản</a>
                                </li>
                            </ul>
                        </div>
                        <a href="?mod=admin&act=add_product" class="btn btn-success ml-4">Thêm sản phẩm</a>
                        <div class="card-body">
                            <table class="table table-sm table-bordered bg-light">
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Tên sản phẩm</th>
                                        <th>img</th>
                                        <th>mô tả</th>
                                        <th>ID Thể Loại</th>
                                        <th>Nhà Phát hành</th>
                                        <th>Ngày Phát Hành</th>
                                        <th>GIá sản phẩm</th>
                                        <th>Sửa </th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $num = 0;
                                while ($row = mysqli_fetch_array($query)) {
                                    $num += 1;
                                ?>
                                    <tr>
                                        <td><?php echo $num ?></td>
                                        <td><?php echo $row['tenSP'] ?></td>
                                        <td><?php echo $row['img'] ?></td>
                                        <td><?php echo $row['moTa'] ?></td>
                                        <td><?php echo $row['idLoai'] ?></td>
                                        <td><?php echo $row['nhaPH'] ?></td>
                                        <td><?php echo  date('d/m/Y',strtotime($row['ngayPH']))?></td>
                                        <td><?php echo $row['price'] ?>/usd</td>
                                        <td><a href="?mod=admin&act=update_product&idSP=<?php echo $row['idSP'] ?>" class="btn btn-success">Sửa</a> </td>
                                        <td><a href="?mod=admin&act=delete_product&idSP=<?php echo $row['idSP'] ?>" class="btn btn-danger">Xóa</a> </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
    get_footer();
?>