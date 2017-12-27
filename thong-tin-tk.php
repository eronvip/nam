<?php


    include('layouts/header.php');
    include('inc/ketnoi.php');
    if(!isset($_SESSION['user'])) {
	echo "<script> window.location='/index.php'</script>";
	die;
} else {
?>
    <section class="container">
        <nav class="breadcrumbs"> <a href="/index.php">Trang Chủ</a> <span class="divider">›</span> Thông tin tài khoản </nav>
    </section>

<section class="container">
    <div class="row">
        
        <section class="col-sm-7 col-md-7 col-lg-7 col-sm-push-1">
            <section class="container-with-large-icon login-form">
                <div class="large-icon"><img src="images/large-icon-lock.png" alt=""></div>
                <div class="wrap">
                    <h3>Thông tin tài khoản:<span style="color: blue"><?=$_SESSION['user']?></span></h3>
                    <?php 
                    	if(isset($_SESSION['user'])) {
                    		$email = $_SESSION['user'];
                    		$layuser = mysqli_fetch_array(mysqli_query($ketnoi, "SELECT * FROM thanh_vien WHERE Email='".$email."' AND Status=1"));
                    	}
                     ?>
                        <div class="form-group">
                            <label for="name">Họ Tên:</label>
                            <p><b><?=$layuser['TenThanhVien']?></b></p>
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <p><b><?=$layuser['Email']?></b></p>
                        </div>
                        <div class="form-group">
                            <label for="password">Mật Khẩu:</label>
                            <p>********</p>
                        </div>
                        <div class="form-group">
                            <label for="dienthoai">Số Điện Thoại:</label>
                             <p><b><?=$layuser['SoDienThoai']?></b></p>
                        </div>
                        <div class="form-group">
                            <label for="email">Ngày Sinh:</label>
                             <p><b><?=$layuser['NgaySinh']?></b></p>
                        </div>
                        <div class="form-group">
                            <label for="email">Giới Tính:</label>
                            <p><b>
                            	<?php 
                            		if($layuser['GioiTinh'] == 1) {
                            			echo "Nam";
                            		} elseif($layuser['GioiTinh'] == 0) {
                            			echo "Nữ";
                            		}
                            	 ?>
                            </b></p>
                        </div>
                        <div style="margin-top: 20px;">
                        <!-- đổi mật khẩu  -->
					<button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Đổi Mật Khẩu</button>
					<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-lg">
					    <div class="modal-content">
					      <form action="" method="POST" id="fr-doimatkhau">
					      	<h2>Đổi Mật Khẩu</h2>
					      	<div class="form-group">
					      		<span>Mật Khẩu Cũ:</span>
					      		<input class="form-control" type="password" name="mkcu" id="mkcu">
					      	</div>
					      	<div class="form-group">
					      		<span>Mật Khẩu Mới:</span>
					      		<input class="form-control" type="password" name="mkmoi" id="mkmoi">
					      	</div>
					      	<div class="form-group">
					      		<span>Nhập Lại Mật Khẩu Mới:</span>
					      		<input class="form-control" type="password" name="nl_mkmoi" id="nl_mkmoi">
					      	</div>
					      	<div class="text-danger" id="thongbao"></div>
					      	<button class="btn btn-success" name="doimk" id="doimk">Đổi Mật Khẩu</button>
					      </form>
					      <?php 
					      	if(isset($_POST['doimk'])) {
					      		$mkcu = md5($_POST['mkcu']);
					      		$mkmoi = md5($_POST['mkmoi']);
					      		$nl_mkmoi = md5($_POST['nl_mkmoi']);

					      		$laymk = mysqli_query($ketnoi, "SELECT * FROM thanh_vien WHERE Email='".$email."' AND MatKhau='".$mkcu."'");
					      		if(mysqli_num_rows($laymk) == 1) {
					      			$doimk = mysqli_query($ketnoi, "UPDATE thanh_vien SET MatKhau='".$mkmoi."'");
					      			if($doimk) {
					      				echo '<script>alert("Đổi mật khẩu thành công!")</script>';
					      			} else {
					      				echo '<script>alert("Có lỗi vui lòng kiểm tra lại ")</script>';
					      			}
					      		} else {
					      			echo '<script>alert("Mật Khẩu không đúng")</script>';
					      		}

					      	}
					       ?>
					    </div>
					  </div>
					</div>
				<!-- đổi mật khẩu -->

                        <!-- Đổi thông tin -->
					<button class="btn btn-primary" data-toggle="modal" data-target=".stt">Đổi Thông Tin</button>
					<div class="modal fade stt" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-lg">
					    <div class="modal-content">
					      <form action="" method="POST" id="fr-doithongtin">
					      	<h2>Đổi Thông Tin Tài Khoản</h2>
					      	<div class="form-group">
					      		<span>Họ Tên:</span>
					      		<input class="form-control" type="text" name="hoten_d" id="hoten_d" value="<?=$layuser['TenThanhVien']?>">
					      	</div>
					      	<div class="form-group">
					      		<span>Email:</span>
					      		<p><b><?=$_SESSION['user']?></b></p>
					      	</div>
					      	<div class="form-group">
					      		<span>Số Điện Thoại:</span>
					      		<input class="form-control" type="text" name="dienthoai_d" id="dienthoai_d" value="<?=$layuser['SoDienThoai']?>">
					      	</div>
					      	<div class="form-group">
					      		<span>Ngày Sinh:</span>
					      		<input class="form-control" type="date" name="ngaysinh_d" id="ngaysinh_d" value="<?=$layuser['NgaySinh']?>">
					      	</div><div class="form-group">
					      		<span>Giới Tính:</span>
					      		<select name="gioitinh_d" class="form-control">
				      				<option value="1">Nam</option>
				      				<option value="0">Nữ</option>
					      		</select>
					      	</div>
					      	<div class="text-danger" id="thongbao_d"></div>
					      	<button name="doitt" id="doitt" class="btn btn-success">Đổi Thông Tin</button>
					      </form>
					      <?php 
					      	if(isset($_POST['doitt'])) {
					      		$hoten_d = $_POST['hoten_d'];
					      		$dienthoai_d = $_POST['dienthoai_d'];
					      		$ngaysinh_d = $_POST['ngaysinh_d'];
					      		$gioitinh_d = $_POST['gioitinh_d'];

					      		$tt = "UPDATE thanh_vien SET TenThanhVien='".$hoten_d."', SoDienThoai='".$dienthoai_d."', NgaySinh='".$ngaysinh_d."', GioiTinh='".$gioitinh_d."' WHERE Email='".$email."'";
					      		$doitt = mysqli_query($ketnoi, $tt);
					      		if($doitt) {
					      			echo '<script>alert("Dổi thông tin tài khoản thành công")</script>';
					      			echo "<script> window.location='/thong-tin-tk.php'</script>";
					      		} else {
					      			echo '<script>alert("Có lỗi vui lòng kiểm tra lại")</script>';
					      		}
					      	}
					       ?>
					    </div>
					  </div>
					</div>
				<!-- Đổi thông tin -->
                        </div>
                    </form>
                </div>
            </section>
        </section>
    </div>
</section>

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
            if(hoten == "" || email == "" || matkhau == "" || dienthoai == "" || ngaysinh == "" || gioitinh == "" || mkcu == "" || mkmoi == "" || nl_mkmoi == "") {
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
        //đôi mật khẩu
        $('#doimk').click(function(){
        	mkcu = $('#mkcu').val();
		mkmoi = $('#mkmoi').val();
		nl_mkmoi = $('#nl_mkmoi').val();

		 Loi = 0;
            if(mkcu == "" || mkmoi == "" || nl_mkmoi == "") {
                Loi++;
                $('#thongbao').text('Vui lòng nhập đầy đủ thông tin');
            }
            if(mkmoi != nl_mkmoi) {
                Loi++;
                $('#thongbao').text('Mật khẩu nhập lại không đúng');
            }
            if(Loi != 0) {
                return false;
            }
        });
      //đôi thong tin
        $('#doitt').click(function(){
        	//alert('ọ');
        	hoten_d = $('#hoten_d').val();
		dienthoai_d = $('#dienthoai_d').val();
		ngaysinh_d = $('#ngaysinh_d').val();

		 Loi = 0;
            if(hoten_d == "" || dienthoai_d == "" || ngaysinh_d == "") {
                Loi++;
                $('#thongbao_d').text('Vui lòng nhập đầy đủ thông tin');
            }
            
            if(isNaN(dienthoai_d)) {
                Loi++;
                $('#thongbao_d').text('Điện thoại phải là số!');
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

<?php } ?>