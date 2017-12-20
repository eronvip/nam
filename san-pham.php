<?php
    include('layouts/header.php');
    include('inc/ketnoi.php');
 ?>
 <section class="container">
   <nav class="breadcrumbs">
       <a href="#">Trang Chủ</a>
       <span class="divider">›</span> Sản Phẩm
   </nav>
 </section>
 <section class="container">
    <div class="row">
        <!-- Right column -->
        <?php include('layouts/menu.php') ?>
        <section class="col-sm-8 col-md-9 col-lg-9 content-center">
            <!-- Filters -->
            <div class="filters-panel">
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="pull-left hidden-xs">Sản phẩm 1 tới 15 trong 26 total</div>
                    </div>
                    <div class="col-md-4 col-lg-4 hidden-sm hidden-xs">
                        <div class="view-mode"> Hiển thị theo:&nbsp; <a href="#" class="view-grid"><span class="icon-th"></span></a> <a href="#" class="view-list"><span class="icon-th-list"></span></a> </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 hidden-xs">
                        <!-- hien thị bên phải -->
                    </div>
                </div>
                <div class="divider"></div>

                <div class="clearfix"></div>
            </div>
            <!-- //end Filters -->
            <!-- Products list -->
            <div class="products-list products-list-small row">
                <?php
                    //khởi tạo trang ban đầu
                    $page=1;
                //số sản phẩm trên 1 trang
                    $limit=12;
                //query lấy sản phẩm
                    $LaySP = mysqli_query($ketnoi,"SELECT id FROM san_pham");
                //tính tổng số sản phẩm có trong bảng
                    $TongSP = mysqli_num_rows($LaySP);
                //tính tổng số trang sẽ chia
                    $TongTrang=ceil($TongSP/$limit);
                //xem trang có vượt giới hạn không:
                    if(isset($_GET["trang"])) {
                        //nếu biến $_GET["trang"] tồn tại thì trang hiện tại là trang $_GET["trang"]
                        $page=$_GET["trang"];
                    }
                    if($page<1){
                        //nếu trang hiện tại nhỏ hơn 1 thì gán bằng 1
                        $page=1;
                    }
                    if($page>$TongTrang){
                        //nếu trang hiện tại vượt quá số trang được chia thì sẽ bằng trang cuối cùng
                        $page=$TongTrang;
                    }
                //tính start (vị trí bản ghi sẽ bắt đầu lấy):
                    $start=($page-1)*$limit;
                //lấy ra danh sách và gán vào biến $cots:
                    $cots = mysqli_query($ketnoi,"SELECT * FROM san_pham LIMIT $start,$limit");
                    foreach($cots as $cot){

                 ?>

                <div class="product-preview">
                    <div class="preview animate scale animated">
                        <a href="product_default.html" class="preview-image">
                            <img class="img-responsive animate scale animated" src="/images/products/<?=$cot['Anh']?>" width="270" height="328" alt="">
                        </a>
                        <ul class="product-controls-list right hide-right">
                            <li class="top-out-small"></li>
                            <li><a href="#" class="circle"><span class="icon-heart"></span></a>
                            </li>
                            <li><a href="#" class="circle"><span class="icon-justice"></span></a>
                            </li>
                            <li><a href="#" class="cart"><span class="icon-basket"></span></a>
                            </li>
                        </ul>
                        <a href="product_default.html" class="quick-view">
                            <b>Xem Nhanh</b>
                        </a>
                    </div>
                        <h3 class="title">
                            <a href="product_default.html" class="preview-image"><?=$cot['TenSanPham']?></a>
                        </h3>
                        <span class="price old"><?=number_format($cot['DonGia'])?>đ</span>
                        <span class="price new"><?=number_format($cot['Gia_Giam'])?>đ</span>
                    <!--rating-->

                    <!--description-->
                    <div class="list_description">
                        <?=$cot['MoTa']?>
                    </div>
                    <!--buttons-->
                    <div class="list_buttons">
                        <a class="btn btn-mega pull-left" href="#">Thêm Vào giỏ</a>
                    </div>
                </div>

            <?php } ?>
            </div>
            <!-- //end Products list -->
            <ul class="pagination pull-right">
				<?php for($i=1;$i<=$TongTrang;$i++){ ?>
			    		<li <?php if($page == $i) echo "class='active'"; ?> >
			    			<a href="san-pham.php?trang=<?= $i; ?>">
			    				<?= $i; ?>
			    			</a>
			    		</li>
			    <?php } ?>
			</ul>
        </section>
        <!-- //end Right column -->
    </div>
</section>
 <?php
    include('layouts/footer.php');
  ?>
