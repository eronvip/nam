<?php
    include('layout/header.php');
    include('../inc/Ketnoi.php');
    if(!isset($_SESSION['quantri'])) {
        echo "<script> window.location='dang-nhap/dang-nhap.php'</script>";
    }
 ?>
 <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <ol class="breadcrumb" style="margin-top: 10px;margin-bottom: -10px;">
                <li>
                    <a href="index.php">Trang chủ</a>
                </li>
                <li>
                    <a href="danh-muc-sp.php">Danh mục sản phẩm</a>
                </li>
                 <li class="active">
                    <strong>Sửa Danh Mục</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
    <?php 
        if(isset($_GET['id_dm'])) {
            $madm = $_GET['id_dm'];

            $laydm = "SELECT * FROM loai_sp WHERE MaLoai_SP='".$madm."'";
            $qr = mysqli_query($ketnoi, $laydm);
            $dm = mysqli_fetch_array($qr);
        }
     ?>
        <div class="row">
            <div class="col-lg-8 col-lg-push-1">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <h1 class="text-center">Sửa Danh Mục</h1>
                        <form method="post" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Tên Danh Mục</label>
                                <div class="col-sm-10">
                                    <input id="tendm" class="form-control" name="tendm" type="text" value="<?php echo $dm['TenLoai']; ?>">
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-2 control-label">Mô tả chi tiết danh mục</label>
                                <div class="col-sm-10">
                                    <input id="motadm" class="form-control" name="motadm" type="text" value="<?php echo $dm['MoTa']; ?>">
                                </div>
                            </div>                               
                            <div class="hr-line-dashed"></div>
                            <div id="ThongBao" class="text-danger" style="text-align: center; color: red;"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <a href="danh-muc-sp.php" class="btn btn-white" type="submit">Hủy Bỏ</a>
                                    <button id="taodm" class="btn btn-primary" type="submit">Sửa Danh Mục</button>
                                </div>
                            </div>
                        </form>
                    </div> 
                </div>
            </div>
        </div>
        <?php 
            if($_SERVER["REQUEST_METHOD"] == "POST") {

                $tendm = htmlentities(mysqli_real_escape_string($ketnoi, $_POST['tendm']));
                $motadm = htmlentities(mysqli_real_escape_string($ketnoi, $_POST['motadm']));

                $suadm = "UPDATE loai_sp SET TenLoai='".$tendm."', MoTa='".$motadm."' WHERE MaLoai_SP='". $madm."'";
                $qr_suadm = mysqli_query($ketnoi, $suadm);

                if($qr_suadm) {
                   echo "<script>alert('Sửa Danh Mục Thành Công!')</script>";
                    echo "<script> window.location='danh-muc-sp.php'</script>";
                } else {
                    echo "<script>$('#ThongBao').text('Có lỗi xảy ra vui lòng kiểm tra lại thông tin')</script>";
                }

            }

         ?>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#taodm').click(function(){
                    tendm = $('#tendm').val();
                    motadm = $('#motadm').val();

                    Loi = 0;
                    if(tendm == "" || motadm == "") {
                        Loi++;
                        $("#ThongBao").text("Vui lòng nhập đầy đủ thông tin");
                    }
                    if(Loi!=0) {
                        return false;
                    }
                });
            });
        </script>
<?php
    include('layout/footer.php');
 ?>
