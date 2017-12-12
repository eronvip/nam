<?php
    session_start();
    if(!isset($_SESSION['quantri'])) {
        echo "<script> window.location='dang-nhap/dang-nhap.php'</script>";

    include('layout/header.php');
    include('../inc/Ketnoi.php');

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
                    <strong>Thêm Danh Mục Mới</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
        <div class="row">
            <div class="col-lg-8 col-lg-push-1">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <h1 class="text-center">Thêm Danh Mục Mới</h1>
                        <form method="post" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Tên Danh Mục</label>
                                <div class="col-sm-10">
                                    <input id="tendm" class="form-control" name="tendm" type="text" placeholder="Nhập vào tên danh mục">
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-2 control-label">Mô tả chi tiết danh mục</label>
                                <div class="col-sm-10">
                                    <input id="motadm" class="form-control" name="motadm" type="text" placeholder="Nhập vào tên danh mục">
                                </div>
                            </div>                               
                            <div class="hr-line-dashed"></div>
                            <div id="ThongBao" class="text-danger" style="text-align: center; color: red;"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <a href="danh-muc-sp.php" class="btn btn-white" type="submit">Hủy Bỏ</a>
                                    <button id="taodm" class="btn btn-primary" type="submit">Tạo Danh Mục</button>
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

                $taodm = "INSERT INTO loai_sp VALUES('', '".$tendm."', '".$motadm."')";
                $truyvan_taodm = mysqli_query($ketnoi, $taodm);

               
                if($truyvan_taodm) {
                   echo "<script>alert('Tạo Danh Mục Thành Công!')</script>";
                echo "<script> window.location='danh-muc-sp.php'</script>";
                } else {
                    echo "<script>$('#ThongBao').text('Vui lòng nhập đầy đủ thông tin')</script>";
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
    }
    include('layout/footer.php');
 ?>
