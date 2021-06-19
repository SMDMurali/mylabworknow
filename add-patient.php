
<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <base href="" />
	<!-- Basic Page Needs

     ================================================== -->

	 <meta charset="utf-8">

	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	 <link rel="icon" type="image/png" href="images/favicon.png">

     <title>Add Patient</title>

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
					<h1 class="entry-title">Add Patient</h1>
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



						<div class="row">

							<div class="col-md-6">
								<figure><img src="images/appointment-img.jpg" alt="image" title="Appointment image" class="img-responsive lady1"></figure>
							</div>

							<div class="col-md-12">
								<div class="appointment-form clearfix">
                                <h1>Add Patient</h1>
						<!-- <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p> -->
								   <div class="success" id="message-app" style="display:none;"></div>
									<form name="appoint_form" id="appoint_form" method="post" action="submit.php" onSubmit="return false">
										<input type="text" name="app_fname" id="app_fname" placeholder="Name" onKeyPress="removeChecks();">
										<input type="text" name="app_lname" id="app_lname" placeholder="Address" onKeyPress="removeChecks();">
										<input type="email" name="app_email_address" id="app_email_address" placeholder="Email Address" onKeyPress="removeChecks();">
										<input type="text" name="app_phone" id="app_phone" placeholder="Phone No">
										<input type="text" name="datepicker" id="datepicker" placeholder="Date Of Birth" onClick="removeChecks();">
										<select name="gender" id="gender">
											<option>Male</option>
											<option>Female</option>
											<option>Child</option>
										</select>
                                        <p class="lead" style="text-align: initial;">Upload ID Proof for Verification</p>

                                        <input type="file" name="app_email_address" id="app_email_address" placeholder="Upload ID Proof For Verification" onKeyPress="removeChecks();">
                                        <!-- <input type="email" name="app_email_address" id="app_email_address" placeholder="Email Address" onKeyPress="removeChecks();"> -->
                                        <input type="email" name="app_email_address" id="app_email_address" placeholder="Physician Name" onKeyPress="removeChecks();">
										<input type="submit" value="submit" class="btn btn-default btn-rounded" onClick="validateAppoint();">
									</form>
								</div>
							</div>

						</div>

					</div>

				</section>



				<!-- After Booking
				============================================= -->



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
