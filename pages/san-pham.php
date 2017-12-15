<?php 
	require_once('../layouts/header.php');
	include('../inc/ketnoi.php');
 ?>
	<section id="advertisement">
		<div class="container">
			<img src="<?php echo $url; ?>images/shop/advertisement.jpg" alt="" />
		</div>
	</section>
	
	<section>
		<div class="container">
			<div class="row">
				<?php 
					require_once('../layouts/menu.php');
				 ?>
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Danh Mục Sản Phẩm</h2>

				<?php 
					//khởi tạo trang ban đầu
					$page=1;
				//số sản phẩm trên 1 trang
					$limit=9;
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
						
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="../admin/uploads/sp/<?=$cot['Anh']?>" alt="" />
										<h2><?=number_format($cot['DonGia'])?> VNĐ</h2>
										<p><a class="tensp" href="chi-tiet-san-pham.php?masp=<?=$cot['id']?>"><?=$cot['TenSanPham']?></a></p>
										<a href="#" class="btn btn-default add-to-cart">
											<i class="fa fa-shopping-cart"></i>
											Thêm Vào Giỏ
										</a>
									</div>
									
								</div>
							</div>
						</div>
					<?php } ?>
						
						
					</div><!--features_items-->
					<ul class="pagination pull-right">
						<?php 
							for($i=1;$i<=$TongTrang;$i++){ ?>
					    		<li <?php if($page == $i) echo "class='active'"; ?> >
					    			<a href="san-pham.php?trang=<?= $i; ?>">
					    				<?= $i; ?>
					    			</a>
					    		</li>
					    <?php } ?>
					</ul>
				</div>
			</div>
		</div>
	</section>
	
	<?php 
		require_once('../layouts/footer.php');
	 ?>