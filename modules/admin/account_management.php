<?php
    get_header();
    $account = "SELECT * FROM `account` WHERE `idTK` != 0";
    $query = mysqli_query(Connect(), $account);
?>
<div class="wp-content">
            <div class="container">
                <div class="row text-white">
                    <div class="col-md-12">
                        <form action="" class="form-search my-3">
                            <h1>Quản Lý Tài khoản</h1>
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
                        <div class="card-body">
                            <table class="table table-bordered bg-light">
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>User Name</th>
                                        <th>Password</th>
                                        <th>email</th>
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
                                        <td><?php echo $row['username'] ?></td>
                                        <td><?php echo md5($row['password']) ?></td>
                                        <td><?php echo $row['email'] ?></td>
                                        <td><a href="?mod=admin&act=delete_account&idTK=<?php echo $row['idTK']?>" class="btn btn-danger">Xóa</a></td>
                                    </tr>
                                    <?php }?>
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