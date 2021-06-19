<?php include('conn.php');  ?>
<?php 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <base href="" />
	<!-- Basic Page Needs

     ================================================== -->
	 
	 <meta charset="utf-8">
	 
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
	 <link rel="icon" type="image/png" href="images/favicon.png">
	
     <title>Medicom</title>
    
     <meta name="description" content="">
    
     <meta name="keywords" content="">
    
     <meta name="author" content="">

	 
	 <!-- Mobile Specific Metas
    
     ================================================== -->
    
     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    
     <meta name="format-detection" content="telephone=no">

	 
	 <!-- Web Font
	 ============================================= -->
	 <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet">
	 
	
	<!-- CSS
    
     ================================================== -->
	 
	 
	<!-- Theme Color
	============================================= -->
	<link rel="stylesheet" id="color" href="css/blue.css">
    
	
	<!-- Medicom Style
	============================================= -->
    <link rel="stylesheet" href="css/medicom.css">

	
	<!-- Bootstrap
	============================================= -->
    <link rel="stylesheet" href="css/bootstrap.css">

    
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

	
	
	<!-- SCRIPTS
    
     ================================================== -->
	
	<script src="js/modernizr-2.6.2.min.js"></script>
	
	<link rel="stylesheet" href="login/style.css">

	</head>
    <body class="fixed-header">
		
		
    
		<!-- Document Wrapper
		============================================= -->
		<div id="wrapper" class="clearfix">
    
    
			<!-- Header
			============================================= -->
			<header id="header" class="medicom-header">
			
				<!-- Top Row
				============================================= -->
				<div class="colourfull-row"></div>
			
				<div class="container">
					
					
					<!-- Primary Navigation
					============================================= -->
					<?php include 'header.php';  ?>

				</div>
				
				<div class="header-bottom-line"></div>

			</header>
			
			
			
			<!-- Sub Page Banner
			============================================= -->
			<section class="sub-page-banner text-center" data-stellar-background-ratio="0.3">
				
				<div class="overlay"></div>
				
				<div class="container">
					<h1 class="entry-title">Kit Registration</h1>
					<p>Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.</p>
				</div>
				
			</section>
    
    
			
			<!-- Sub Page Content
			============================================= -->
			<div id="sub-page-content" class="clearfix no-padding">
    
    
				<!-- Appointment
				============================================= -->
				<section class="appointment-sec text-center">
					
					<div class="container">
					<div style="padding:10px;">
					
					</div>
						
						<!-- <h1>Add Patient</h1>
						<p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p> -->
						
						<div class="row" >
							
							<div class="col-md-6" >
								<figure><img src="images/appointment-img.jpg" alt="image" title="Appointment image" class="img-responsive lady1"></figure>
							</div>
							
							<div class="col-md-6" style="margin-top: 80px;">
							<h1>Kit Registration</h1>
						<p style="font-size: large;">Enter the Unique Kit ID located on the registration slip inside of your kit. <a style="color:#1b83b8; font-size: large;" href="">Can’t find your Unique Kit ID?</a></p>
								<div class="appointment-form clearfix">
								  
								<form action="shop.php" method="POST" >
								<div class="textbox" style="border: 1px solid #1b83b8; ">
								
									
									<input type="text" placeholder="KIT ID" required>
								</div>
								<div style="padding:10px;">

								</div>

								<div class="textbox" style="border: 1px solid #1b83b8; margin: 0; padding: 0; " >
												
									<input  style="width: 30px; height:40px;" type="checkbox"  >
									<p style=" text-align:initial; color: grey; line-height: 1.8;">I am the test taker</p>	
								</div>
								
								<div style="padding:10px;">

								</div>
								<input type="submit" class="btn" value="Register Kit" disabled>

									</form> 


									
										<!-- <input type="text" name="app_fname" id="app_fname" placeholder="First Name" onKeyPress="removeChecks();">
										<input type="text" name="app_lname" id="app_lname" placeholder="Last Name" onKeyPress="removeChecks();"> -->
										<!-- <input type="email" name="app_email_address" id="app_email_address" placeholder="Kit Id" onKeyPress="removeChecks();"> -->
										
										<!-- <input type="text" name="datepicker" id="datepicker" placeholder="Appointment Date" onClick="removeChecks();"> -->
										<!-- <select name="gender" id="gender">
											<option>Male</option>
											<option>Female</option>
											<option>Child</option>
										</select>
										<textarea placeholder="Patient Bio" name="app_msg" id="app_msg"></textarea> -->
										<!-- <input name="app_email_address" id="app_email_address" type="checkbox" id="scales" name="scales"
         								checked>
										<input type="text" name="app_phone" id="app_phone" placeholder="Phone No"> -->
										<!-- <input type="submit" value="submit" class="btn btn-default btn-rounded" onClick="validateAppoint();"> -->
								
								
							</div>
							
						</div>
						
					</div>
					
				</section>
    
    
				
				<!-- After Booking
				============================================= -->
				<!-- <section class="after-booking-sec text-center">
					
					<div class="container">
						
						<h1>Patient Details</h1>
						<p class="lead">Hi fill in the details and submit the form. We will contact you via phone or email and fix a time schedule. These are the thing you need to carry with you when you come in for the appointment wit the doctor.</p>
						 -->
                        
						<!-- <ul class="medicom-feature-list list-inline text-left">
							<li><i class="fa fa-check medicom-check"></i>We offer a no obligation a free initial consultation.</li>
							<li><i class="fa fa-check medicom-check"></i>Enlisted Previous Numbers</li>
							<li><i class="fa fa-check medicom-check"></i>Previous Medical History</li>
							<li><i class="fa fa-check medicom-check"></i>Make sure you are feeling good</li>
							<li><i class="fa fa-check medicom-check"></i>Uncover many web sites still in their infancy.</li>
							<li><i class="fa fa-check medicom-check"></i>Uncover many web sites still in their infancy Various versions.</li>
							<li><i class="fa fa-check medicom-check"></i>you need to be sure there isn't anything embarrassing.</li>
							<li><i class="fa fa-check medicom-check"></i>you need to be sure there isn't anything embarrassing.</li>
						</ul> -->
						
					<!-- </div>
					
				</section> -->
    
    
    
		<div class="colourfull-row"></div>
	
	
	
		<!-- Footer
		============================================= -->
		<?php include 'footer.php';   ?>
	
	
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