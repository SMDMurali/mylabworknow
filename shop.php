<?php require_once ("resources/config.php") ?> 


    
			<!-- Header
			============================================= -->
			<?php include(TEMPLATE_FRONT . DS . "header.php");  ?>
    
    
			<section class="sub-page-banner shop-banner">
				
				<div id="shop-slider" class="owl-carousel">

					<div class="item">
					
						<div class="container">
							<div class="slider-text">
								<h1>fresh <span>fruits</span> tablets</h1>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
								<ul class="medicom-feature-list list-inline text-left">
									<li><i class="fa fa-check medicom-check"></i>Medicom Provide 100% Legal Access.</li>
									<li><i class="fa fa-check medicom-check"></i>We can Build a Custom Websites for your Medical Practice.</li>
									<li><i class="fa fa-check medicom-check"></i>We Provide access to FREE Health Nurse.</li>
								</ul>
								<a href="#." class="btn btn-default btn-rounded">shop now</a>
							</div>
							<div class="slider-image">
								<img src="images/shop-banner-img1.png" alt="">
							</div>
						</div>
						
					</div>
					
					<div class="item">
					
						<div class="container">
							<div class="slider-text">
								<h1>fresh <span>fruits</span> tablets</h1>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
								<ul class="medicom-feature-list list-inline text-left">
									<li><i class="fa fa-check medicom-check"></i>Medicom Provide 100% Legal Access.</li>
									<li><i class="fa fa-check medicom-check"></i>We can Build a Custom Websites for your Medical Practice.</li>
									<li><i class="fa fa-check medicom-check"></i>We Provide access to FREE Health Nurse.</li>
								</ul>
								<a href="#." class="btn btn-default btn-rounded">shop now</a>
							</div>
							<div class="slider-image">
								<img src="images/shop-banner-img1.png" alt="">
							</div>
						</div>
						
					</div>
					
					<div class="item">
					
						<div class="container">
							<div class="slider-text">
								<h1>fresh <span>fruits</span> tablets</h1>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
								<ul class="medicom-feature-list list-inline text-left">
									<li><i class="fa fa-check medicom-check"></i>Medicom Provide 100% Legal Access.</li>
									<li><i class="fa fa-check medicom-check"></i>We can Build a Custom Websites for your Medical Practice.</li>
									<li><i class="fa fa-check medicom-check"></i>We Provide access to FREE Health Nurse.</li>
								</ul>
								<a href="#." class="btn btn-default btn-rounded">shop now</a>
							</div>
							<div class="slider-image">
								<img src="images/shop-banner-img1.png" alt="">
							</div>
						</div>
						
					</div>

				</div> 

						
			</section>
    
    
			<!-- Sub Page Content
			============================================= -->
			<div id="sub-page-content" class="clearfix">

				<div class="container">
					
					<div class="row">
					
						<div class="col-md-8 clearfix">
							
							
							<!-- Products
							============================================= -->
							<h2 class="bordered light">My lab Work Now<span>Products</span></h2>
							
							<div class="products">
							
							<?php get_products_in_shop_page();  ?>
								
							</div>

						</div>
					
						<aside class="col-md-4">
							
							<!-- Search Widget
							============================================= -->
							<div class="sidebar-widget">
								<div class="search clearfix">
									<form method="get" action="#.">
										<input type="text" placeholder="Search...">
										<button type="submit" class="search-icon"><i class="fa fa-search"></i></button>
									</form>
								</div>
							</div>
							
							
							<!-- Categories Widget
							============================================= -->
							<?php include(TEMPLATE_FRONT . DS . "side_nav.php");  ?>
							
							
							<!-- Best Sellers Widget
							============================================= -->
							<div class="sidebar-widget light">
								<h2 class="bordered light">Best <span>Sellers</span></h2>
								<article class="best-seller">
									<img src="images/best-seller-img1.jpg" alt="">
									<h4><a href="#.">Panadol</a></h4>
									<p>It has survived not only five centuries,
			but also the leap into electronic.<strong>&pound;69.00</strong></p>
									
								</article>
								<article class="best-seller">
									<img src="images/best-seller-img2.jpg" alt="">
									<h4><a href="#.">Panadol</a></h4>
									<p>It has survived not only five centuries,
			but also the leap into electronic.<strong>&pound;69.00</strong></p>
									
								</article>
								<article class="best-seller">
									<img src="images/best-seller-img3.jpg" alt="">
									<h4><a href="#.">Panadol</a></h4>
									<p>It has survived not only five centuries,
			but also the leap into electronic.<strong>&pound;69.00</strong></p>
									
								</article>
							</div>
							
							
							<!-- Community poll Widget
							============================================= -->
							<div class="sidebar-widget clearfix">
								<h2 class="bordered light">community <span>poll</span></h2>
								<div class="poll">
								<form>
									<input type="radio"><span>Price Rules</span>
									<div class="clearfix"></div>
									<input type="radio"><span>Medicines</span>
									<div class="clearfix"></div>
									<input type="radio"><span>Injection</span>
									<div class="clearfix"></div>
									<input type="radio"><span>Blood Bank</span>
									<div class="clearfix"></div>
									<input type="submit" class="btn btn-default btn-rounded" value="Poll">
								</form>
								</div>
							</div>
							
							
							<div class="sidebar-widget clearfix">
								
								<h2 class="bordered light">medicom <span>tour</span></h2>
								
								<div class="panel-group" id="accordion">
								  
								  <div class="panel panel-default">
									<div class="panel-heading">
									  <h4 class="panel-title active">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
										  <span><i class="fa fa-plus fa-minus"></i></span>Outpatient Rehabilitation
										</a>
									  </h4>
									</div>
									
									<div id="collapseOne" class="panel-collapse collapse in">
									  <div class="panel-body">
										It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Aldus
				Page Maker including versions.
									  </div>
									</div>
								  </div>
								  
								  <div class="panel panel-default">
									<div class="panel-heading">
									  <h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
										  <span><i class="fa fa-plus"></i></span>Dental Instruments
										</a>
									  </h4>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse">
									  <div class="panel-body">
									   It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Aldus
				Page Maker including versions.
									  </div>
									</div>
								  </div>
								  
								  <div class="panel panel-default">
									<div class="panel-heading">
									  <h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
										  <span><i class="fa fa-plus"></i></span>Outpatient Rehabilitation
										</a>
									  </h4>
									</div>
									<div id="collapseThree" class="panel-collapse collapse">
									  <div class="panel-body">
										It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Aldus
				Page Maker including versions.
									  </div>
									</div>
								  </div>
								  
								  <div class="panel panel-default">
									<div class="panel-heading">
									  <h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
										  <span><i class="fa fa-plus"></i></span>Outpatient Surgery
										</a>
									  </h4>
									</div>
									<div id="collapseFour" class="panel-collapse collapse">
									  <div class="panel-body">
										It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Aldus
				Page Maker including versions.
									  </div>
									</div>
								  </div>  
								  
								</div>
								
							</div>
							
						</aside>
					
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