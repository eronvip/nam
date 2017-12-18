<?php
	include('../layouts/header.php');
	include('../inc/ketnoi.php');
 ?>
 	<div class="container">
 		<div class="row">
		 	<?php require_once('../layouts/menu.php'); ?>
			<div class="col-sm-9 padding-right">
				<div class="col-md-9 single-main-left">
				<div class="sngl-top">
					<div class="col-md-5 single-top-left">	
						<div class="flexslider">
							
						<div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 1200%; transition-duration: 0s; transform: translate3d(-304px, 0px, 0px);"><li data-thumb="images/s4.jpg" class="clone" aria-hidden="true" style="float: left; display: block; width: 304px;">
									<img src="images/s4.jpg" draggable="false">
								</li>
								<li data-thumb="images/s1.jpg" style="float: left; display: block; width: 304px;" class="flex-active-slide">
									<img src="images/s1.jpg" draggable="false">
								</li>
								<li data-thumb="images/s2.jpg" style="float: left; display: block; width: 304px;" class="">
									<img src="images/s2.jpg" draggable="false">
								</li>
								<li data-thumb="images/s3.jpg" style="float: left; display: block; width: 304px;" class="">
									<img src="images/s3.jpg" draggable="false">
								</li>
								<li data-thumb="images/s4.jpg" style="float: left; display: block; width: 304px;">
									<img src="images/s4.jpg" draggable="false">
								</li>
							<li data-thumb="images/s1.jpg" style="float: left; display: block; width: 304px;" class="clone" aria-hidden="true">
									<img src="images/s1.jpg" draggable="false">
								</li></ul></div><ol class="flex-control-nav flex-control-thumbs"><li><img src="images/s1.jpg" class="flex-active" draggable="false"></li><li><img src="images/s2.jpg" draggable="false" class=""></li><li><img src="images/s3.jpg" draggable="false" class=""></li><li><img src="images/s4.jpg" draggable="false"></li></ol><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li><li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li></ul></div>
<!-- FlexSlider -->
  <script defer="" src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen">

	<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
				</div>	
				<div class="col-md-7 single-top-right">
					<div class="details-left-info simpleCart_shelfItem">
						<h3>Accessories Latest</h3>
						<p class="availability">Availability: <span class="color">In stock</span></p>
						<div class="price_single">
							<span class="reducedfrom">$800.00</span>
							<span class="actual item_price">$600.00</span><a href="#">click for offer</a>
						</div>
						<h2 class="quick">Quick Overview:</h2>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<ul class="product-colors">
							<h3>available Colors ::</h3>
							<li><a class="color1" href="#"><span> </span></a></li>
							<li><a class="color2" href="#"><span> </span></a></li>
							<li><a class="color3" href="#"><span> </span></a></li>
							<li><a class="color4" href="#"><span> </span></a></li>
							<li><a class="color5" href="#"><span> </span></a></li>
							<li><a class="color6" href="#"><span> </span></a></li>
							<li><a class="color7" href="#"><span> </span></a></li>
							<li><a class="color8" href="#"><span> </span></a></li>
							<div class="clear"> </div>
						</ul>
						<ul class="size">
							<h3>Length</h3>
							<li><a href="#">7</a></li>
							<li><a href="#">6</a></li>
						</ul>
						<div class="quantity_box">
							<ul class="product-qty">
								<span>Quantity:</span>
								<select>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
								</select>
							</ul>
						</div>
					<div class="clearfix"> </div>
				<div class="single-but item_add">
					<input value="add to cart" type="submit">
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
					
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>



	</div>
 		</div>
 	</div>


 <?php

	require_once('../layouts/footer.php');
 ?>
