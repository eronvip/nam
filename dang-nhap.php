<?php
    include('layouts/header.php');
    include('inc/ketnoi.php');
?>
    <section class="container">
        <nav class="breadcrumbs"> <a href="#">Trang Chủ</a> <span class="divider">›</span> Đăng nhập </nav>
    </section>

<section class="container">
    <div class="row">
        <section class="col-sm-6 col-md-6 col-lg-6">
            <section class="container-with-large-icon login-form">
                <div class="large-icon"><img src="images/large-icon-user.png" alt=""></div>
                <div class="wrap">
                    <h3>Đăng Ký Tài Khoản Mới</h3>
                    <p>Với việc đăng ký tài khoản tại giabatngo.com bạn đồng ý và chấp thuận các quy định mua hàng và các điều khoản của shop.</p>
                    <br>
                    <button class="btn btn-mega" onclick="location.href='/dang-ky.php';">Đăng Ký</button>
                </div>
            </section>
        </section>
        <section class="col-sm-6 col-md-6 col-lg-6">
            <section class="container-with-large-icon login-form">
                <div class="large-icon"><img src="images/large-icon-lock.png" alt=""></div>
                <div class="wrap">
                    <h3>Đăng Nhập</h3>
                    <form action="" method="POST" id="form-returning">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Mật Khẩu:</label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>
                        <div class="form-link"> <a href="#">Quên mật khẩu ?</a> </div>
                        <div id="thongbao" class="text-danger"></div>
                        <button type="submit" class="btn btn-mega" id="dangnhap">Đăng Nhập</button>
                    </form>
                </div>
            </section>
        </section>
    </div>
</section>
<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $matkhau = md5($_POST['password']);

        $layuser = "SELECT * FROM thanh_vien WHERE Email='".$email."' AND MatKhau='".$matkhau."' AND Status=1";
        $qr_layuser = mysqli_query($ketnoi, $layuser);

        if(mysqli_num_rows($qr_layuser) == 1) {
            $_SESSION['user'] = $email;
            echo "<script> window.location='/index.php'</script>";
            //echo '<script>alert("ok")</script>';
        } else {
            echo '<script> $("#thongbao").text("Email hoặc mật khẩu không đúng!!")</script>';
        }
    }

 ?>
<script>
    $(document).ready(function(){
        $('#dangnhap').click(function(){
            email = $('#email').val();
            matkhau = $('#password').val();

            Loi = 0;
            if(email == "" || matkhau == "") {
                Loi++;
                $('#thongbao').text('Vui lòng nhập đầy đủ thông tin');
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
        margin-top: -19px;
        margin-bottom: 15px;
        font-weight: bold;
    }
</style>