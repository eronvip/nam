<?php 
	include('layouts/header.php');
 ?>
	<section class="container">
	      <nav class="breadcrumbs"> <a href="/index.php">Trang Chủ</a> <span class="divider">›</span> Giỏ hàng </nav>
	</section>

	<section class="container">
      <div class="row">
        <section class="col-md-12 col-lg-12"> 
          
          <!-- Shopping cart -->
          <section class="content-box">
            <div class="shopping_cart"> <img class="back img-responsive" src="images/shopping-cart-back.png" alt="">
              <div class="box">
                <h3>Giỏ hàng của bạn</h3>
                <table>
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
                    <tr>
                      <td>
                      	<a href="#" class="remove-button hidden-xs">
                      		<span class="icon-cancel-2 "></span>
                      	</a>
                      </td>
                      	<td>
	                      <a href=""><img class="preview" src="images/products/product-08-small.jpg"></a>
                      	</td>
                      <td>
                      	<a href="#">Vero moda Joy top</a>
                      </td>
                      <td>
                      	$75.95
                      </td>
                      <td>
                      	<div class="input-group quantity-control" unselectable="on" style="user-select: none;"> 
                      		<span class="input-group-addon">−</span>
                          <input type="text" class="form-control" value="1">
                          <span class="input-group-addon">+</span> </div></td>
                      <td>
                      	<span class="td-name visible-xs">Total</span>$75.95
                      </td>
                    </tr>
                    
                  </tbody>
                </table>
                <div class="pull-left"> <b class="title">Phí giao hàng:</b> Free Shipping </div>
                <div class="pull-right">
                  <p><b class="title">Tổng tiền:</b> <span class="price">$120.9</span></p>
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