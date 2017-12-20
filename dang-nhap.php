<?php
    include('layouts/header.php');
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
                    <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
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
                    <form action="#" method="POST" id="form-returning">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Mật Khẩu:</label>
                            <input type="password" class="form-control" id="password">
                        </div>
                        <div class="form-link"> <a href="#">Quên mật khẩu ?</a> </div>
                        <button type="submit" class="btn btn-mega">Đăng Nhập</button>
                    </form>
                </div>
            </section>
        </section>
    </div>
</section>

<?php
    include('layouts/footer.php')
?>
