<?php
include('layouts/header.php');
?>
    <section class="container">
        <nav class="breadcrumbs"><a href="/index.php">Trang Chủ</a> <span class="divider">›</span> Giỏ hàng</nav>
    </section>

    <section class="container">
    <div class="row">
    <section class="col-md-12 col-lg-12">

    <!-- Shopping cart -->
    <section class="content-box">
    <div class="shopping_cart"> <img class="back img-responsive" src="images/shopping-cart-back.png" alt="">
    <div class="box">
    <h3>Giỏ hàng của bạn</h3>
    <table id="list_cart">
    <thead>
    <tr class="hidden-xs">
        <th></th>
        <th>Ảnh</th>
        <th>Tên Sản phẩm</th>
        <th>Giá</th>
        <th>Số Lượng</th>
        <th>Thành Tiền</th>
    </tr>
    </thead>
        <tbody>
        <?php
        for ($i = 0; $i < $number_cart; $i++) {
            ?>
            <tr>
                <td>
                    <a href="#" class="remove-button hidden-xs">
                        <span class="icon-cancel-2 "></span>
                    </a>
                </td>
                <td>
                    <a href=""><img class="preview" src="/images/products/<?= $list_cart[$i]['Anh']?>"></a>
                </td>
                <td>
                    <a href="/chi-tiet-sp.php?id=<?= $list_cart[$i]['id']?>"><?= $list_cart[$i]['TenSanPham']?></a>
                </td>
                <td>
                    <?= number_format($list_cart[$i]['Gia_Giam'])?>đ
                </td>
                <td>
                    <div class="input-group quantity-control" unselectable="on" style="user-select: none;">
                        <span class="input-group-addon">−</span>
                        <input type="text" class="form-control" value="<?= $session_cart[$i]['number']?>">
                        <span class="input-group-addon">+</span></div>
                </td>
                <td>
                    <span class="td-name visible-xs">Tổng</span><span class="price-total"><?= number_format($session_cart[$i]['number'] * $list_cart[$i]['Gia_Giam']) ?></span>đ
                </td>
            </tr>
            <?php
            }
        ?>
        </tbody>
    </table>
    <div class="pull-left"><b class="title">Phí giao hàng:</b> Free Shipping</div>
    <div class="pull-right">
        <p><b class="title">Tổng tiền:</b> <span class="price"><?= number_format($price_total) ?></span></p>
        <button type="submit" class="btn btn-mega">Thanh Toán</button>
    </div>
    <div class="clearfix"></div>
    </div>
    </div>
    </section>

    <!-- //end Shopping cart -->

    </section>
    <aside class="col-md-4 col-lg-4 shopping_cart-aside">


    </aside>
    </div>
    </section>


    <?php
    include('layouts/footer.php');
    ?>