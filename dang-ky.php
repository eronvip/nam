<?php
    include('layouts/header.php');
    include('inc/ketnoi.php');
?>
    <section class="container">
        <nav class="breadcrumbs"> <a href="#">Trang Chủ</a> <span class="divider">›</span> Đăng Ký Tài Khoản Mới </nav>
    </section>

<section class="container">
    <div class="row">
        
        <section class="col-sm-7 col-md-7 col-lg-7 col-sm-push-1">
            <section class="container-with-large-icon login-form">
                <div class="large-icon"><img src="images/large-icon-lock.png" alt=""></div>
                <div class="wrap">
                    <h3>Đăng Ký Tài Khoản Thành Viên</h3>
                    <form action="" method="POST" id="form-returning">

                        <div class="form-group">
                            <label for="name">Họ Tên:</label>
                            <input type="text" class="form-control" name="hoten" id="hoten">
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Mật Khẩu:</label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>
                        <div class="form-group">
                            <label for="password">Nhập Lại Mật Khẩu:</label>
                            <input type="password" class="form-control" name="nl_password" id="nl_password">
                        </div>
                        <div class="form-group">
                            <label for="dienthoai">Số Điện Thoại:</label>
                            <input type="text" class="form-control" name="dienthoai" id="dienthoai">
                        </div>
                        <div class="form-group">
                            <label for="email">Ngày Sinh:</label>
                            <input type="date" class="form-control" name="ngaysinh" id="ngaysinh">
                        </div>
                        <div class="form-group">
                            <label for="email">Giới Tính:</label>
                            <select class="form-control" name="gioitinh" id="gioitinh">
                                <option value="1">Nam</option>
                                <option value="0">Nữ</option>
                            </select>
                        </div>

                        <div id="thongbao" class="text-danger"></div>
                        <div style="margin-top: 20px;">
                            <button type="submit" class="btn btn-mega" id="dangnhap">Đăng Ký</button>
                        </div>
                    </form>
                </div>
            </section>
        </section>
    </div>
</section>
<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $hoten = htmlentities(mysqli_real_escape_string($ketnoi, $_POST['hoten']));
        $matkhau = md5($_POST['password']);
        $email = $_POST['email'];
        $dienthoai = $_POST['dienthoai'];
        $ngaysinh = $_POST['ngaysinh'];
        $gioitinh = $_POST['gioitinh'];

        //kiểm tra sự tồn tại
         $ktemail = mysqli_query($ketnoi, "SELECT * FROM thanh_vien WHERE Email='".$email."'");
         if(mysqli_num_rows($ktemail) != 1) {
            $chenuser = "INSERT INTO thanh_vien VALUES('', '".$hoten."', '".$email."', '".$matkhau."', '".$dienthoai."', '".$ngaysinh."', '".$gioitinh."', '1')";
            $qr_chenuser = mysqli_query($ketnoi, $chenuser);
            if($qr_chenuser) {
                $_SESSION['user'] = $email;
                echo '<script>alert("Đăng ký thành công!")</script>';
                echo "<script> window.location='/index.php'</script>";
            } else {
                echo '<script>alert("Lỗi, Vui long kiểm tra lại!")</script>';
            }
         } else {
            echo "<script>$('#thongbao').text('Email đã tồn tại')</script>";
         }

       
    }

 ?>
<script>
    $(document).ready(function(){
        $('#dangnhap').click(function(){
            hoten = $('#hoten').val();
            email = $('#email').val();
            matkhau = $('#password').val();
            nl_matkhau = $('#nl_password').val();
            dienthoai = $('#dienthoai').val();
            ngaysinh = $('#ngaysinh').val();
            gioitinh = $('#gioitinh').val();

            Loi = 0;
            if(hoten == "" || email == "" || matkhau == "" || dienthoai == "" || ngaysinh == "" || gioitinh == "") {
                Loi++;
                $('#thongbao').text('Vui lòng nhập đầy đủ thông tin');
            }
            if(matkhau != nl_matkhau) {
                Loi++;
                $('#thongbao').text('Mật khẩu nhập lại không đúng');
            }
            if(isNaN(dienthoai)) {
                Loi++;
                $('#thongbao').text('Điện thoại phải là số!');
            }

            if(Loi != 0) {
                return false;
            }

        });
    });
</script>

<?php
    include('layouts/footer.php')
?>
<style>
    #thongbao{
        color: red;
        margin-top: 10px;
        margin-bottom: 10px;
        font-weight: bold;
    }
</style>