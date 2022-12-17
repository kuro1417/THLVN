<?php 
    get_header();
    $idTK = $_GET['idTK'];  
    $sql_show_lib = "SELECT * FROM `product` JOIN  `libary` on `product`.`idSP` = `libary`.`idSP` WHERE `libary`.idTK = $idTK";
    $query_show_lib = mysqli_query(Connect(), $sql_show_lib);
?>
<style>
    .img-item{
        width: 362px;
        height: 206px;
        border: 1px solid white;
    }
</style>
        <div class="wp-content">
            <div class="container">
                <div class="row text-white">
                    <div class="col-md-12"> 
                        <form action="" class="form-search my-3">
                            <input class="search" type="text" name="" id="" placeholder="Search">
                        </form>
                    </div>
                    
                        <h5 class="section-header my-4 col-md-12">Libary</h5>
                        <div class="game-section">
                            <div class="row">
                                <?php
                                while($row_lib = mysqli_fetch_array($query_show_lib))
                                {
                                ?>
                                <div class="col-md-4 mb-3"><img  class="img-item"
                                            src="<?php echo $row_lib['img'] ?>"
                                            alt="">
                                    <button style="width:363px; background-color: #4d88ff; border-radius: 0px;">
                                        INSTALL NOW
                                    </button>
                                </div>
                            <?php
                                }
                            ?>
                                
                            </div>
                        </div>
                    </div>
        </div>
<?php 
    get_footer();
?>