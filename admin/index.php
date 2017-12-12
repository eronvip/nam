<?php
    session_start();
    if(!isset($_SESSION['quantri'])) {
        echo "<script> window.location='dang-nhap/dang-nhap.php'</script>";
        die;
    } else {
        include('layout/header.php');
        ?>

            <div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content">
                    <div class="row">
                        nội dung

                    </div>
                </div>

            </div>
        </div>
        <?php
    }
 ?>
        
<?php
    include('layout/footer.php');
 ?>
