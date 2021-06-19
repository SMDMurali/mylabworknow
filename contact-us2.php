
    <?php require_once ("resources/config.php") ?> 
    
			<!-- Header
			============================================= -->
			<?php include(TEMPLATE_FRONT . DS . "header.php");  ?>
			
			
			
			<!-- Sub Page Banner
			============================================= -->
			<section class="sub-page-banner text-center" data-stellar-background-ratio="0.3">
				
				<div class="overlay"></div>
				
				<div class="container">
					<h1 class="entry-title">Contact Us</h1>
					<p>Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.</p>
				</div>
				
			</section>
    
    
  
    
			<!-- Sub Page Content
			============================================= -->
			<div id="sub-page-content" class="clearfix">
				
				<div class="container">
					
					<h2 class="light bordered">Get<span>Directions</span></h2>
					
					<div class="row">
						
						<div class="col-md-6">
							
							
							<!-- Map (include map api only once)
							============================================= -->
							<script src="https://maps.googleapis.com/maps/api/js?v=3key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
							<script src="js/map.js"></script>
							<div class="map" id="map"></div>
							
							
							<!-- Get Directions
							============================================= -->
							<div class="get-directions small">
								
								<form action="http://maps.google.com/maps" method="get" target="_blank">
								   <input type="text" name="saddr" placeholder="Enter Your Address" />
								   <input type="hidden" name="daddr" value="Envato Pty Ltd, Elizabeth Street, Melbourne, Victoria, Australia" />
								   <input type="submit" value="Get directions" class="direction-btn" />
								</form>
								
							</div>
							
						</div>
						
						<div class="col-md-6">
							
							
							<!-- Map
							============================================= -->
							<script src="js/map2.js"></script>
							<div class="map" id="map2"></div>
							
							
							<!-- Get Directions
							============================================= -->
							<div class="get-directions small">
								
								<form action="http://maps.google.com/maps" method="get" target="_blank">
								   <input type="text" name="saddr" placeholder="Enter Your Address" />
								   <input type="hidden" name="daddr" value="Envato Pty Ltd, Elizabeth Street, Melbourne, Victoria, Australia" />
								   <input type="submit" value="Get directions" class="direction-btn" />
								</form>
								
							</div>
							
						</div>
						
					</div>
					
					<div class="row">
						
						<div class="col-md-4 clearfix">
							
							<h2 class="light bordered">get in <span>touch</span></h2>
							
							
							<!-- Get in Touch Widget
							============================================= -->
							<div class="get-in-touch-widget boxed">
								
								<ul class="list-unstyled">
									<li><i class="fa fa-phone"></i>(+09) 0323 750 4561</li>
									<li><i class="fa fa-envelope"></i><a href="#.">quickhelp@medicom.com</a></li>
									<li><i class="fa fa-globe"></i><a href="#.">www.medicom-clinic.com</a></li>
									<li><i class="fa fa-clock-o"></i>Mon - Sat 9:00am - 6:00 pm</li>
									<li><i class="fa fa-map-marker"></i>Envato Marketplace Melbourne Farlane St Sydney TF - 123456</li>
									<li><i class="fa fa-map-marker"></i>Envato Marketplace Melbourne Farlane St Sydney TF - 123456</li>
								</ul>
								
							</div>
							
							
							
							<!-- Social
							============================================= -->
							<ul class="social-rounded contact clearfix">
								<li><a href="#."><i class="fa fa-facebook"></i></a></li>
								<li><a href="#."><i class="fa fa-twitter"></i></a></li>
								<li><a href="#."><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#."><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#."><i class="fa fa-youtube"></i></a></li>
								<li><a href="#."><i class="fa fa-vimeo-square"></i></a></li>
								<li><a href="#."><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#."><i class="fa fa-rss"></i></a></li>
								<li><a href="#."><i class="fa fa-pinterest"></i></a></li>
								<li><a href="#."><i class="fa fa-android"></i></a></li>
								<li><a href="#."><i class="fa fa-flickr"></i></a></li>
							</ul>
							
							
						</div>
						
						<div class="col-md-8">
							
							<h2 class="light bordered">Give us a <span>Message</span></h2>
							
							<h5 class="light bordered" ><?php display_msg();  ?></span></h5>
							<!-- Contact Form
							============================================= -->
							<div class="contact-form2">
								<div id="message-contact" class="success" style="display:none;">Thank you! we'll contact you shortly.</div>
								<?php send_message(); ?>
								<form  action="" method="post">
									<input type="text" name="name" id="fname" placeholder="First Name" required onKeyPress="removeChecks();">
									<input type="text" name="email" id="email_address" placeholder="Email Address" required onKeyPress="removeChecks();">
									<input type="text" name="subject" id="subject" placeholder="Subject" class="last" required>
									<textarea placeholder="Message" name="message" ></textarea>
									<input type="submit" name="submit" class="btn btn-default" >
								</form>

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