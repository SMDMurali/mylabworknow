<?php require_once ("resources/config.php") ?> 

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
 
    <base href="" />
	<!-- Basic Page Needs

     ================================================== -->
	 
	 

    
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

	
	
	<!-- Header Scripts
    
    ================================================== -->
	
	<script src="js/modernizr-2.6.2.min.js"></script>



    <body class="fixed-header">
	
		
    
		<!-- Document Wrapper
		============================================= -->
	
    
    
			<!-- Header
			============================================= -->
			<?php include(TEMPLATE_FRONT . DS . "header.php");  ?>

    <link rel="stylesheet" href="login/style.css">
  </head>
  <body>
  <div>
     <div> 
<div class="login-box">
  <h2 style="color: #1b83b8;">Login My Lab Work Now</h2>
  <h6 style="color: red"><?php display_msg(); ?></h6>
  <div style="padding: 10px;">

  </div>
  <form action="" method="post" >
    <?php  login_user();   ?>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" name="username" placeholder="Username" required>
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="text" name="password" placeholder="Password" required>
  </div>
  <a style="padding-left: 270px;  text-decoration:none; color:#1b83b8;" href="register.php" >Forgot Password?</a>
<div style="padding:10px;">

</div>
  <input type="submit" name="submit" class="btn" >

  <div style="padding: 40px;">

  </div>
  
  <p style="margin-left:90px;">Not a member <a  style="text-decoration:none; color:grey;" href="register.php" >Sign Up?</a></p>
  </form>
</div>
<div style="margin-top: 550px;">
<!-- Footer
		============================================= -->
    <?php include(TEMPLATE_FRONT . DS . "footer.php");  ?>
	
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
