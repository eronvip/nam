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
                            <a href="">Danh sách thành viên</a>
                        </li>
                        <li class="active">
                            <strong>Thêm thành viên</strong>
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
                            <h5>Thêm Thành Viên Mới</h5>
                        </div>
                        <div class="ibox-content">
                            <form method="POST" action="" class="form-horizontal" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Mã Nhân Viên</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="manhanvien">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tên Đăng Nhập</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="tendangnhap">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Mật Khẩu</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="password" type="password">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Ảnh Đại Diện</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="file" size="20" />
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Tên Nhân Viên</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="text" name="tennhanvien">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Điện Thoại</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="text" name="dienthoai">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Email</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="email" name="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Ngày Sinh</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="date" name="ngaysinh">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Giới Tính</label>
                                    <div class="col-sm-10">
                                        <select class="form-control m-b" name="gioitinh">
                                            <option>Vui Lòng chọn giới tính</option>
                                            <option>Nam</option>
                                            <option>Nữ</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <a href="<?php echo $url_admin ?>nhan-vien.php" class="btn btn-default ntn-huybo">Hủy Bỏ</a>
                                        <button class="btn btn-primary" type="submit" name="ok">Thêm Nhân Viên</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    </div>
                </div>
                <?php 
                    if($_SERVER["REQUEST_METHOD"] == "POST") {
                            $name       = $_FILES['file']['name'];  
                            $temp_name  = $_FILES['file']['tmp_name'];  
                            $manhanvien = mysqli_real_escape_string($ketnoi, $_POST['manhanvien']);
                            $tendangnhap = mysqli_real_escape_string($ketnoi, $_POST['tendangnhap']);
                            $matkhau = md5($_POST['password']);
                            $tennhanvien = mysqli_real_escape_string($ketnoi, $_POST['tennhanvien']);
                            $dienthoai = mysqli_real_escape_string($ketnoi, $_POST['dienthoai']);
                            $email = mysqli_real_escape_string($ketnoi, $_POST['email']);
                            $ngaysinh = mysqli_real_escape_string($ketnoi, $_POST['ngaysinh']);
                            $gioitinh = mysqli_real_escape_string($ketnoi, $_POST['gioitinh']);


                            if(isset($name)){
                                if(!empty($name)){      
                                    $location = '../img/avatar/';      
                                    if(move_uploaded_file($temp_name, $location.$name)){
                                            $luunhanvien = "INSERT INTO nhan_vien VALUES('".$manhanvien."', '".$tendangnhap."', '".$matkhau."', '".$name."', '".$tennhanvien."', '".$dienthoai."', '".$email."', '".$ngaysinh."', '".$gioitinh."', '1')";
                                            $truyvan_luunv = mysqli_query($ketnoi, $luunhanvien);
                               
                                        if($truyvan_luunv) {
                                           echo "<script>alert('Thêm Nhân Viên Thành Công!')</script>";
                                            echo "<script> window.location='../nhan-vien.php'</script>";
                                        } else {
                                            echo "<script>alert('Lỗi ... Vui lòng kiểm tra lại thông tin')</script>";
                                        }
                                        }
                                    }
                                }       
                            }  else {
                                echo 'Vui Lòng chọn file ảnh đại diện của bạn !!';
                            }

                 ?>
            </div>
        </div>
        <?php
    }
 ?>

<?php
    include('../layout/footer.php');
 ?>
