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
                            <a href="/admin/index.php">Trang chủ</a>
                        </li>
                        <li>
                            <a href="/admin/danh-muc-sp.php">Danh mục</a>
                        </li>
                        <li class="active">
                            <strong>Sửa danh mục</strong>
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
                            <h5>Sửa Danh Mục</h5>
                        </div>
                        <div class="ibox-content">
                            <?php 
                                if(isset($_GET['id'])) {
                                    $id = $_GET['id'];
                                    $laydm = "SELECT * FROM danh_muc WHERE id='".$id."'";
                                    $qr = mysqli_query($ketnoi, $laydm);
                                    $dm = mysqli_fetch_array($qr);
                                }
                             ?>
                            <form method="POST" action="" class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tên Danh Mục</label>
                                    <div class="col-sm-10">
                                        <input id="tendanhmuc_sua" class="form-control" type="text" name="tendanhmuc_sua" value="<?=$dm['TenDanhMuc']?>">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Mô Tả</label>
                                    <div class="col-sm-10">
                                        <input id="mota_mota" class="form-control" type="text" name="mota_mota" value="<?=$dm['MoTa']?>">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <div class="row">
                                            <a href="/admin/danh-muc-sp.php" class="btn btn-default ntn-huybo">Hủy Bỏ</a>
                                            <button id="taotv" class="btn btn-primary" type="submit" name="ok">Sửa Danh Mục</button>
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
                            $tendanhmuc = htmlentities(mysqli_real_escape_string($ketnoi, $_POST['tendanhmuc_sua']));
                            $mota = htmlentities(mysqli_real_escape_string($ketnoi, $_POST['mota_mota']));
                            $suadm = "UPDATE danh_muc SET TenDanhMuc='".$tendanhmuc."', MoTa='".$mota."' WHERE id='".$id."'";
                            $qr_suadm = mysqli_query($ketnoi, $suadm);

                            if($qr_suadm) {
                                echo "<script>alert('Sửa danh mục thành công!')</script>";
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
