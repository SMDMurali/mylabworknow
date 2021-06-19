<?php require_once ("resources/config.php") ?> 

       
			<!-- Header
			============================================= -->
			<?php include(TEMPLATE_FRONT . DS . "header.php");  ?>
			
			
			
			<!-- Sub Page Banner
			============================================= -->
			<section class="sub-page-banner text-center" data-stellar-background-ratio="0.3" style="font-size: large;">
				
				<div class="overlay"></div>
				
				<div class="container">
					<h1 class="entry-title">Shop Detail</h1>
					<p>Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.</p>
				</div>
				
			</section>
    
    

    
    
			<!-- Sub Page Content
			============================================= -->
			<div id="sub-page-content" class="clearfix">

				<div class="container">
					
					<div class="row">


					<?php

$query = query("SELECT * FROM products WHERE product_id = " . escape_string($_GET['id']) . " " );
confirm($query);

while($row = fetch_array($query)):


					?>

						
						<div class="col-md-12 clearfix">
							
							<h2 class="bordered light">My Lab Work Now <span>Product</span></h2>
								
							<div class="row">
								
								<div class="col-md-6 col-sm-6">
<!-- product slider -->

									<div id="myCarousel" class="carousel slide" data-ride="carousel" data-intervl="500">
									<!-- Indicators -->
									<ol class="carousel-indicators">
									<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
									<li data-target="#myCarousel" data-slide-to="1"></li>
									<li data-target="#myCarousel" data-slide-to="2"></li>
									</ol>

									<!-- Wrapper for slides -->
									<div class="carousel-inner" style="background-color:#F0F7F3 ;">
									<div class="item active">
										<img src="<?php echo $row['product_image'];  ?>" alt="Los Angeles" >
									</div>

									<div class="item">
										<img src="images/product.webp" alt="Chicago" >
									</div>
									
									<div class="item">
										<img src="images/product.webp" alt="New york">
									</div>
									</div>

									<!-- Left and right controls -->
									<!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left"></span>
									<span class="sr-only">Previous</span>
									</a>
									<a class="right carousel-control" href="#myCarousel" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right"></span>
									<span class="sr-only">Next</span>
									</a> -->
								</div>

<!-- product slider end -->								
								<!-- <img src="images/product.webp" alt="" class="img-rounded"> -->
								</div>
								
								
								<div class="col-md-6 col-sm-6">
									
									<div class="product-single-content">
										<h4><?php echo $row['product_title'];  ?></h4>
										<p>Food Sensitivity Test</p>
										<h4>&#36;<?php echo $row['product_price'];  ?> </h4>

										<p><?php echo $row['product_short_desc'];  ?></p>
										<ul class="medicom-feature-list text-left">
											<li><i class="fa fa-check medicom-check"></i>IgG Reactivity to 96 Foods</li>
											<li><i class="fa fa-check medicom-check"></i>Finger prick sample collection</li>
											<li><i class="fa fa-check medicom-check"></i>Test alarger variety of foods</li>
											
											
										</ul>
										

									</div>
									
									<div class="cart-items-detail clearfix">
										<div class="item-counter clearfix">
											<span id="less-item" class="pull-left">-</span>
											<input type="text" value="0" id="total-items" class="items-total">
											<span id="pluss-item" class="pull-right">+</span>
										</div>
										<a class="btn btn-default pull-left" href="shopping-cart.php">Add To Cart</a>

									</div>
									
								</div>
								
							</div>
							
							<div class="height30" style="font-size: 18px;"></div>
								
							<h2 class="light bordered">Product <span>Info</span></h2>
								
							<div id="horizontalTab" class="tab-horizontal1">
									
								<ul class="resp-tabs-list">
									<li>Discription</li>
									<li>Additional Information</li>
									<li>Review (1)</li>
								</ul>
									
								<div class="resp-tabs-container">
									<div>
										<p style="font-size: 16px;"><?php echo $row['Product_description'];  ?></p>

		<!-- <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p> -->
									</div>
									
									<div>
										<p >Maecenas non dui in ante eleifend venenatis. Praesent lobortis tortor vitae gravida semper. Fusce tincidunt odio velit, vitae pellentesque velit dapibus nec. Mauris sit amet egestas tortor, vitae pulvinar magna. Donec bibendum, lacus nec egestas consectetur, nisi lectus varius mauris, eu fermentum nisi ligula nec sapien. Graphic River  Class aptent taciti sociosqu ad litora torquent.</p>
										<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

		<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
									</div>
									
									<div>
										<div id="comments" class="review">
											
											<ol class="commentlist">
												
												<li class="comment">
													<div class="comment_container">
														<div class="comment-avartar">
															<img width="60" height="60" src="images/comment-img.jpg" alt="">
														</div>
														<div class="comment-text">
															<div title="Rated 5 out of 5" class="star-rating">
																<ul class="stars list-unstyled">
																	<li><a href="#."></a></li>
																	<li><a href="#."></a></li>
																	<li><a href="#."></a></li>
																	<li><a href="#."></a></li>
																	<li><a href="#."></a></li>
																</ul>
															</div>
															<p class="meta">
																<strong itemprop="author">Admin</strong> &ndash; <time>December 12, 2013</time>:
															</p>
															<div class="description"><p>Nice</p></div>
														</div>
													</div>
												</li>
												
											</ol>
											
											<a href="#." class="btn btn-default btn-rounded">Add a review</a>
											
										</div>
											
									</div>
										
								</div>
									
							</div>

							<?php endwhile; ?>
							
							<h2 class="light bordered">Related <span>Products</span></h2>
							
							<div class="row">
								
								<div class="col-md-12">
									
									
								
									
								<?php get_products();  ?>
									
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