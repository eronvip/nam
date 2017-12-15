			<?php 
					//include('inc/ketnoi.php');
			 ?>
				<div class="col-sm-3">
					<div class="left-sidebar">
						<div class="brands_products">
							<h2>Danh Mục</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<?php 
										$laydm = "SELECT * FROM danh_muc";
										$qr_laydm = mysqli_query($ketnoi, $laydm);

										while($dm = mysqli_fetch_array($qr_laydm)){

									 ?>
									<li>
										<a href="#"> 
											<span class="pull-right">(50)</span>
											<?php echo $dm['TenDanhMuc']; ?>
										</a>
									</li>
									<?php 
										}
									 ?>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Facebook</h2>
							<div class="well text-center">
								 link facebook nha :D
							</div>
						</div><!--/price-range-->
						<!--quảng cáo-->
						<div class="shipping text-center">
							<img src="<?=$url;?>images/home/shipping.jpg" alt="" />
						</div>
						<!--/quảng cáo-->
					</div>
				</div>