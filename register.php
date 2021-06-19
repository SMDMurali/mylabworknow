

<?php include('conn.php');  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
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
 <link rel="stylesheet" href="login/style.css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
 <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
 <![endif]-->



<!-- Header Scripts

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

<body >

<div id="sub-page-content" class="clearfix no-padding">


    <!-- Appointment
    ============================================= -->
    <section class="appointment-sec text-center">

      <div class="container">


        <!-- <h1>Add Patient</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p> -->

        <div class="row" >

          <div class="col-md-12" >

          <div class="col-md-12" style="margin-top: 320px;">
<div>
<div>



<div class="login-box" style="margin-top:110px; margin-bottom:auto" >
  <h2 style="color: #1b83b8;">REGISTER WITH US</h2>

  <form method="post" action="register.php">
  <?php include('errors.php'); ?>

  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="username" name="username"  value="<?php echo $username; ?>">
  </div>
  <!-- <div class="textbox">
  <i class="fas fa-address-card"></i>
    <input type="text" placeholder="Adddress">
  </div> -->
  <div class="textbox">
  <i class="fas fa-phone"></i>
    <input type="text" placeholder="Phone Number" name="phone" value="<?php echo $phone; ?>">
  </div>
  <div class="textbox">
  <i class="fas fa-envelope-open-text"></i>
    <input type="email" placeholder="Email" name="email"value="<?php echo $email; ?>">
  </div>
  <div class="textbox">
  <i class="fas fa-lock"></i>
    <input type="password" placeholder="password" name="password_1" >
  </div>
  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Confirm Password" name="password_2" >
  </div>
  <div style="padding: 10px;">

  </div>
  <div class="textbox" >

		<input  style="width: 30px; height:40px; line-height:1.5;" type="checkbox"  >
			<p style="line-height:2; font-size:16px;"><a href="terms-and-conditions.php">I have read and accept the Terms and Conditions</a></p>
			</div>
  <!-- <div class="textbox">
  <i class="far fa-check-circle"></i>
    <input type="password" placeholder="Conform Password">
  </div> -->
  <button type="submit" class="btn" name="reg_user">Register</button>
  <div style="padding: 40px;">

  </div>

  <p style="margin-left:10px; margin-bottom:50px;">Already Registered <a  style="text-decoration:none; color:grey;" href="login.php" >Sign In?</a></p>

  </form>
</div>
</div>
</div></div>
          </div>
          </div></div></div></section></div>


          <div style="padding: 40px;">

          </div>
<div>
<!-- Footer
		============================================= -->
		<?php include 'footer.php';   ?>

		<!-- back to top -->
		<a href="#." class="back-to-top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    </div><!--end #wrapper-->
    </div>
</div>






  </body>

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

</html>
