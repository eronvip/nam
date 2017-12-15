<?php 
	include('layouts/header.php');
	include('inc/ketnoi.php');
 ?>
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
						<?php 
							$laybanner = "SELECT * FROM banner";
							$tv_bn = mysqli_query($ketnoi, $laybanner);
							$tv_bm = mysqli_query($ketnoi, $laybanner);

							while($bn =mysqli_fetch_array($tv_bn)) {
						 			$demo[] = $bn;
						 	}
						 	$tong = count($demo);
						 ?>
							<?php 
							for($i=0; $i<$tong; $i++) {
							 ?>
							<li data-target="#slider-carousel" data-slide-to="<?= $i?>" class='<?= $i==0 ? "active": ""?>'></li>
							<?php 
								}
							 ?>
						</ol>
						
						<div class="carousel-inner">
							<?php 
								for($i=0; $i<$tong; $i++) {
									 ?>
									<div class='item <?= $i==0 ? "active": ""?>'>
										<div class="col-sm-12">
											<img src="images/banner/<?=$demo[$i]['Anh'] ?>" class="girl img-responsive" style="height: 500px; width: 910px;" />
										</div>
									</div>
									<?php 
										}
							 ?>
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<?php 
					require_once('layouts/menu.php');
				 ?>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Sản Phẩm mới </h2>
						
						<?php 
							$laysp = "SELECT * FROM san_pham ORDER BY RAND() LIMIT 9";
							$qr_laysp = mysqli_query($ketnoi, $laysp);
							while($sp = mysqli_fetch_array($qr_laysp)) {

						 ?>
						 <!-- <div class="clearfix"></div> -->
							<div class="col-sm-4">
								<div class="product-image-wrapper">
									<div class="single-products">
											<div class="productinfo text-center">
												<img style=" display:block;height: 255px;" src="admin/uploads/sp/<?php echo $sp['Anh'] ?>" alt="" />
												<h2><?=number_format($sp['DonGia'])?> VNĐ</h2>
												<p>
													<a class="tensp" href="pages/chi-tiet-san-pham.php?masp=<?=$sp['id']?>"><?=$sp['TenSanPham']?></a>
												</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a>
											</div>
									</div>
									
								</div>
							</div>
						<!-- /<div class="clearfix"></div> -->
						<?php 
							}

						 ?>

						
					</div><!--features_items-->
					
					<div class="category-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#tshirt" data-toggle="tab">Móc Khóa</a></li>
								<li><a href="#blazers" data-toggle="tab">Phụ kiện</a></li>
								<li><a href="#sunglass" data-toggle="tab">Quà Tặng</a></li>

							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="tshirt" >
								<?php 
									$sptheodm = "SELECT * FROM san_pham WHERE DanhMuc=6 LIMIT 4";
									$qr_sptheodm = mysqli_query($ketnoi, $sptheodm);
									while($spdm=mysqli_fetch_array($qr_sptheodm)) {

								 ?>
									<div class="col-sm-3">
										<div class="product-image-wrapper" style="height: 377px;">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="admin/uploads/sp/<?php echo $spdm['Anh'] ?>" alt="" />
													<h2><?=number_format($spdm['DonGia'])?> VNĐ</h2>
													<p><a class="tensp" href="pages/chi-tiet-san-pham.php?masp=<?=$spdm['id']?>" ><?=$spdm['TenSanPham']?></a></p>
													<a href="#" class="btn btn-default add-to-cart">
														<i class="fa fa-shopping-cart"></i>
														Thêm vào Giỏ
													</a>
												</div>
											</div>
										</div>
									</div>
								<?php 
									}
								 ?>
							</div>
							
							<div class="tab-pane fade" id="blazers" >
								<?php 
									$sptheodm = "SELECT * FROM san_pham WHERE DanhMuc=2 LIMIT 4";
									$qr_sptheodm = mysqli_query($ketnoi, $sptheodm);
									while($spdm=mysqli_fetch_array($qr_sptheodm)) {
								 ?>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products" style="height: 377px;">
											<div class="productinfo text-center">
												<img src="admin/uploads/sp/<?php echo $spdm['Anh'] ?>" alt="" />
												<h2><?=number_format($spdm['DonGia'])?> VNĐ</h2>
												<p><a class="tensp" href="pages/chi-tiet-san-pham.php?masp=<?=$spdm['id']?>"><?=$spdm['TenSanPham']?></a></p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào Giỏ</a>
											</div>
											
										</div>
									</div>
								</div>
								<?php 
									}
								 ?>
							</div>
							<div class="tab-pane fade" id="sunglass" >
								<?php 
									$sptheodm = "SELECT * FROM san_pham WHERE DanhMuc=7 LIMIT 4";
									$qr_sptheodm = mysqli_query($ketnoi, $sptheodm);
									while($spdm=mysqli_fetch_array($qr_sptheodm)) {
								 ?>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products" style="height: 377px;">
											<div class="productinfo text-center">
												<img src="admin/uploads/sp/<?php echo $spdm['Anh'] ?>" alt="" />
												<h2><?=number_format($spdm['DonGia'])?> VNĐ</h2>
												<p><a class="tensp" href="pages/chi-tiet-san-pham.php?masp=<?=$spdm['id']?>"><?=$spdm['TenSanPham']?></a></p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào Giỏ</a>
											</div>
											
										</div>
									</div>
								</div>
								<?php 
									}
								 ?>
							</div>
						</div>
					</div><!--/category-tab-->

				</div>
			</div>
		</div>
	</section>
	
	<?php 
		include('layouts/footer.php');
	 ?>