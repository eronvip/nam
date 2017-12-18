<?php
        include('../layouts/header.php');
        include('../inc/ketnoi.php');
        if(!isset($_SESSION['login'])) {
            echo "<script> window.location='../index.php'</script>";
            die;
        } else {
?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper wrapper-content">
                        <div class="row">
                            <h1 style="padding-bottom: 30px;"><b>Thông tin tài khoản</b></h1>
                            <div class="col-lg-6">
                                <?php 
                                    $email = $_SESSION['login'];

                                    $lay_TT = "SELECT * FROM thanh_vien WHERE Email='".$email."'";
                                    $qr = mysqli_query($ketnoi, $lay_TT)  or die("MySQL error: " . mysqli_error($ketnoi) . "<hr>\nQuery: $query");
                                    $tt_user = mysqli_fetch_array($qr);
                                 ?>
                                <div class="thongtin_tk"><!--sign up form-->
                                    <div class="form-group">
                                        <span>Họ Tên:</span>
                                        <p><b><?=$tt_user['TenThanhVien']?></b></p>
                                    </div>
                                    <div class="form-group">
                                        <span>Email:</span>
                                         <p><b><?=$tt_user['Email']?></b></p>
                                    </div>
                                    <div class="form-group">
                                        <span>Mật Khẩu:</span>
                                         <p><b>********</b></p>
                                    </div>

                                    <div class="form-group">
                                        <span>Số Điện Thoại:</span>
                                         <p><b><?=$tt_user['SoDienThoai']?></b></p>
                                    </div>
                                    <div class="form-group">
                                        <span>Ngày Sinh:</span>
                                         <p><b><?php            
                                            $date = date_create($tt_user['NgaySinh']);
                                            echo date_format($date,"d/m/Y");
                                         ?></b></p>
                                     </div>
                                    <div class="form-group">
                                        <span>Giới Tính:</span>
                                        <?php 
                                            if($tt_user['GioiTinh'] == 1) {
                                                echo "<p><b>Nam</b></p>";
                                            } elseif($tt_user['GioiTinh'] == 0) {
                                                echo "<p><b>Nữ</b></p>";
                                            }
                                         ?>
                                    </div>
                                <a id="doimatkhau" href="" class="btn btn-info">Đổi Mật Khẩu</a>
                                <a id="doithongtin" href="" class="btn btn-info">Đổi Thông Tin</a>
                            </div>
                            
                        </div>
                        <div class="col-lg-6">
                            <div class="login-form" id="doi_mk" style="display: none;">
                                <h2><b>Đổi Mật Khẩu</b> </h2>
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <span><b>Mật Khẩu cũ</b></span>
                                        <input name="mk_cu" id="mk_cu" class="form-control" type="email" placeholder="Nhập vào mật khẩu cũ">
                                    </div>
                                    <div class="form-group">
                                        <span>Mật Khẩu mới</span>
                                        <input name="mk_moi" id="mk_moi" class="form-control" type="password" placeholder="Mật khẩu Mới">
                                    </div>
                                    <div class="form-group">
                                        <span>Mật lại Khẩu mới</span>
                                        <input name="nl_mk" id="nl_mk" class="form-control" type="password" placeholder="Nhaaph lại Mật khẩu mới">
                                    </div>
                                    <div id="ThongBao_dn" class="text-danger" style="color: red; font-weight:bold;"></div>


                                    <div class="form-group">
                                        <button id="dangnhap" type="submit" class="btn btn-success">Đổi Mật Khẩu</button>
                                    </div>
                                </form>
                            </div>
                            <!-- ******************************* -->
                            <div class="login-form" id="doi_tt" style="display: none;">
                                <h2><b>Đổi Thông Tin Tài Khoản</b> </h2>
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <span><b>Họ Tên:</b></span>
                                        <input name="hoten" id="hoten" class="form-control" type="email">
                                    </div>
                                    <div class="form-group">
                                        <span>Số Điện Thoại:</span>
                                        <input name="sdt" id="sdt" class="form-control" type="password">
                                    </div>
                                    <div class="form-group">
                                        <span>Ngày Sinh:</span>
                                        <input name="ns" id="ns" class="form-control" type="password">
                                    </div>
                                    <div class="form-group">
                                        <span>Giới Tính:</span>
                                        <select name="gioitinh" id="gioitinh" class="form-control">
                                            <option value="1">Nam</option>
                                            <option value="0">Nữ</option>
                                        </select>
                                    </div>
                                    <div id="ThongBao_dn" class="text-danger" style="color: red; font-weight:bold;"></div>


                                    <div class="form-group">
                                        <button id="dangnhap" type="submit" class="btn btn-success">Đổi Mật Khẩu</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function(){
                $('#doimatkhau').click(function(){
                    $('#doi_mk').show();
                    $('#doi_tt').hide();
                });
                $('#doithongtin').click(function(){
                    $('#doi_mk').hide();
                    $('#doi_tt').show();
                })
            }); 
        </script>
        
<?php
    include('../layouts/footer.php');
    }
 ?>
