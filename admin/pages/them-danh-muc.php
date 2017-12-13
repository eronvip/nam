<?php
    session_start();
    if(!isset($_SESSION['quantri'])) {
        echo "<script> window.location='dang-nhap/dang-nhap.php'</script>";
        die;
    } else {
        include('../layout/header.php');
        include('../../inc/ketnoi.php');
        ?>
        <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <ol class="breadcrumb" style="margin-top: 10px;margin-bottom: -10px;">
                        <li>
                            <a href="index.php">Trang chủ</a>
                        </li>
                        <li>
                            <a href="">Danh mục</a>
                        </li>
                        <li class="active">
                            <strong>Thêm danh mục mới</strong>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="row">
            <div class="col-lg-8 col-lg-push-1">
                <div class="wrapper wrapper-content">
                    <div class="row">
                        <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Thêm Danh Mục Mới</h5>
                        </div>
                        <div class="ibox-content">
                            <form method="POST" action="" class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tên Danh Mục</label>
                                    <div class="col-sm-10">
                                        <input id="tendanhmuc" class="form-control" type="text" name="tendanhmuc">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Mô Tả</label>
                                    <div class="col-sm-10">
                                        <input id="mota" class="form-control" type="text" name="mota">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <div class="row">
                                            <a href="<?php echo $url_admin ?>danh-muc-sp.php" class="btn btn-default ntn-huybo">Hủy Bỏ</a>
                                            <button id="taotv" class="btn btn-primary" type="submit" name="ok">Thêm Danh Mục</button>
                                        </div>
                                    </div>
                                </div>
                                <div style="color: red" class="text-danger" id="ThongBao"></div>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
                <?php 
                    if($_SERVER["REQUEST_METHOD"] == "POST") {

                            $tendanhmuc = htmlentities(mysqli_real_escape_string($ketnoi, $_POST['tendanhmuc']));
                            $mota = htmlentities(mysqli_real_escape_string($ketnoi, $_POST['mota']));

                            $themdm = "INSERT INTO danh_muc VALUES('', '".$tendanhmuc."', '".$mota."')";
                            $qr_themdm = mysqli_query($ketnoi, $themdm);
                            if( $qr_themdm) {
                                echo "<script>alert('Thêm Danh Mục Sản Phẩm Thành Công!')</script>";
                                echo "<script> window.location='../danh-muc-sp.php' </script>";
                            } else {
                                echo "<script>alert('Lỗi vui lòng kiểm tra lại!')</script>";
                            }
                    }
                ?>
            </div>
        </div>
        <script>
            $(document).ready(function(){
                $('#taotv').click(function(){
                    tendanhmuc = $('#tendanhmuc').val();
                    mota = $('#mota').val();

                    Loi =0;

                    //kiểm tra đầy đủ thông tin
                    if(tendanhmuc == "" || mota == "" ) {
                        Loi++;
                        $('#ThongBao').text("Hãy nhập đầy đủ thông tin...");
                    }

                    if(Loi!=0) {
                        return false;
                    }
                });
            });
        </script>
        <?php
    }
 ?>

<?php
    include('../layout/footer.php');
 ?>
