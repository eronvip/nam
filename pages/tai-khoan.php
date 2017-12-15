<?php
	require_once('../layouts/header.php');
	include('../inc/ketnoi.php');
 ?>
	<section id="form">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form">
						<h2><b>Thành Viên Đăng Nhập</b> </h2>
						<form action="" method="POST">
							<div class="form-group">
								<span><b>Email</b></span>
								<input name="email" id="email" class="form-control" type="email" placeholder="Email của bạn">
							</div>
							<div class="form-group">
								<span>Mật Khẩu</span>
								<input name="matkhau" id="matkhau" class="form-control" type="password" placeholder="Mật khẩu của bạn">
							</div>
							<span>
								<input type="checkbox" class="checkbox">
								Ghi nhớ đăng nhập
							</span>

							<div class="form-group">
								<button id="dangnhap" type="submit" class="btn btn-success">Đăng Nhập</button>
							</div>
						</form>
					</div>
				</div>
				<div class="col-sm-1">
					<h2 class="or">HOẶC</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2><b>Đăng Ký Tài Khoản Mới!</b></h2>
						<form action="xuly/dang-ky.php" method="POST">
							<div class="form-group">
								<span>Họ Tên</span>
								<input name="hoten_dn" id="hoten_dn" class="form-control" type="text" placeholder="Họ Tên">
							</div>
							<div class="form-group">
								<span>Email</span>
								<input name="email_dn" id="email_dn" class="form-control" type="email" placeholder="Email">
							</div>
							<div class="form-group">
								<span>Mật Khẩu</span>
								<input name="matkhau_dn" id="matkhau_dn" class="form-control" type="password" placeholder="Mật Khẩu">
							</div>
							<div class="form-group">
								<span>Nhập lại mật khẩu</span>
								<input name="nhaplai_mk" id="nhaplai_mk" class="form-control" type="password" placeholder="Nhập lại mật khẩu">
							</div>
							<div class="form-group">
								<span>Số Điện Thoại</span>
								<input name="dienthoai" id="dienthoai" class="form-control" type="text" placeholder="Số  điện thoại">
							</div>
							<div class="form-group">
								<span>Ngày Sinh</span>
								<input name="ngaysinh" id="ngaysinh" class="form-control" type="date">
							</div>
							<div class="form-group">
								<span>Giới Tính</span>
								<select name="gioitinh" id="gioitinh" class="form-control">
									<option value="1">Nam</option>
									<option value="0">Nữ</option>
								</select>
							</div>
							<div id="ThongBao" class="text-danger" style="color: red; font-weight:bold;"></div>
							<div class="form-group">
								<button name="dangky" id="dangky" type="submit" class="btn btn-success">Đăng Ký</button>
							</div>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section>
	<script>
		$(document).ready(function(){
			$('#dangky').click(function(){
				hoten = $('#hoten_dn').val();
				email = $('#email_dn').val();
				matkhau = $('#matkhau_dn').val();
				nl_matkhau = $('#nhaplai_mk').val();
				dienthoai = $('#dienthoai').val();
				ngaysinh = $('#ngaysinh').val();
				gioitinh = $('#gioitinh').val();

				Loi=0;
				if(hoten == "" || email == "" || matkhau == "" || matkhau == "" || dienthoai == "" || ngaysinh == "" ) {
                        Loi++;
                        $('#ThongBao').text("Hãy nhập đầy đủ thông tin...");
                }
                if(isNaN(dienthoai)) {
                        Loi++;
                        $("#ThongBao").text("Số điện thoại phải là số!");
                }
                if(matkhau != nl_matkhau) {
                        Loi++;
                        $("#ThongBao").text("Mật Khẩu nhập lại không đúng!");
                }
				if(Loi!=0) {
                    return false;
                }
			});
		});
	</script>


<?php
	require_once('../layouts/footer.php');
?>
