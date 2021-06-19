<?php require_once ("resources/config.php") ?> 

    
    
			<!-- Header
			============================================= -->
			<?php include(TEMPLATE_FRONT . DS . "header.php");  ?>
			
		<?php 
		
		$_SESSION['product_1'] = 
		
		
		
		
		
		?>



			
			<!-- Sub Page Banner
			============================================= -->
			<section class="sub-page-banner text-center" data-stellar-background-ratio="0.3">
				
				<div class="overlay"></div>
				
				<div class="container">
					<h1 class="entry-title">Cart</h1>
					<p>Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.</p>
				</div>
				
			</section>
    
    

    
    
			<!-- Sub Page Content
			============================================= -->
			<div id="sub-page-content" class="clearfix">

				<div class="container">
					
					<div class="row">
						
						<div class="col-md-12 clearfix">
							
							
							<!-- Shopping Cart
							============================================= -->
							<h2 class="bordered light">Shopping <span>Cart</span></h2>
							
							<div class="cart-list clearfix">
								
								<div class="overflow">
									
									<div class="cart-bar clearfix">
										<div class="cart-product-heading">Product</div>
										<div class="cart-price-heading">Price</div>
										<div class="cart-quantity-heading">Quantity</div>
										<div class="cart-total-heading">Total</div>
										<div class="cart-remove">&nbsp;</div>
									</div>
									
									<div class="cart-bar-list">
										
										<div class="cart-product">
											<a href="#." class="pull-left"><img src="images/product-img1.jpg" alt="" width="80"></a>
											<h4>Panadol Tablet</h4>
										</div>
										
										<div class="cart-price"><span class="amount">&pound;5.99</span></div>
										
										<div class="cart-quantity">
											<div class="item-counter">
												<span class="pull-left" id="less-item">-</span>
												<input type="text" class="items-total" id="total-items" value="0">
												<span class="pull-right" id="pluss-item">+</span>
											<div class="clr"></div>
											</div>
										</div>
										
										<div class="cart-total">
											<span class="amount">&pound;5.99</span>
										</div>
										
										<div class="product-remove2">
											<span>x</span>
										</div>
										
									</div>
									
								</div>
								
								<div class="cart-buttons">
									
									<div class="pull-right">
										<a href="#." class="btn btn-default btn-rounded">Update cart</a>
										<a href="checkout.php" class="btn btn-default btn-rounded">Procede to checkout</a>
									</div>
									
								</div>
								
							</div>
							   
							<div class="height40"></div>
							   
							<div class="row">
								
								<div class="col-md-6">
									
									<div class="cart-shipping clearfix">
										
										
										<!-- Calculate Shipping
										============================================= -->
										<h4 class="light">Calculate <span>Shipping</span></h4>
									
										<form>
											<label class="col-md-2">Country</label>
											<div class="col-md-10">
												<select>
													<option>United Kingdiom</option>
													<option>U.S.A</option>
												</select>
											</div>
											<label class="col-md-2">State</label>
											<div class="col-md-4">
												<input type="text">
											</div>
											<label class="col-md-2">Postcode</label>
											<div class="col-md-4">
												<input type="text">
											</div>
										</form>

								    </div> 
								   
								</div>
								
								<div class="col-md-6">
								
									<div class="cart-shipping clearfix">
										
										
										<!-- Cart Totals
										============================================= -->
										<h4 class="light">Cart <span>Totals</span></h4>
										
										<div class="cart-total-amount">
											<label class="pull-left">Cart Subtotal</label>
											<label class="pull-right text-right price">&pound;65.94</label>
											<div class="clearfix"></div>
											<label class="pull-left">Shipping</label>
											<label class="pull-right text-right">Free Shipping</label>
											<div class="clearfix"></div>
											<div class="order-total clearfix">
											<label class="pull-left">Order Total</label>
											<label class="pull-right text-right price">&pound;65.94</label>
											</div>
										</div>
										
								    </div> 
									
								</div>
								
							</div>
							   
						</div>
						
					</div>
					
				</div>
    
    
	
	
		</div><!--end sub-page-content-->
    

		
		<div class="colourfull-row"></div>
	
	
	
		<!-- Footer
		============================================= -->
		<?php include(TEMPLATE_FRONT . DS . "footer.php");  ?>
	
		<!-- back to top -->
		<a href="#." class="back-to-top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
	
    </div><!--end #wrapper-->
	
		
		
		
    <!-- All Javascript 
	============================================= -->
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.stellar.js"></script>
	<script src="js/jquery-ui-1.10.3.custom.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/waypoints.js"></script>
	<script src="js/jquery.uniform.js"></script>
    <script src="js/easyResponsiveTabs.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.fancybox-media.js"></script>
	<script src="js/jquery.mixitup.js"></script>
	<script src="js/forms-validation.js"></script>
	<script src="js/jquery.jcarousel.min.js"></script>
	<script src="js/jquery.easypiechart.min.js"></script>
	<script src="js/scripts.js"></script>
	
  </body>
</html>