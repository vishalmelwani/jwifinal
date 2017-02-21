<!DOCTYPE html>
<?php    
// register user start
		if(isset($_REQUEST['_register']))
		{
			
			include_once('config.php');
			date_default_timezone_set('Asia/Kolkata');
			$fname=$_REQUEST['fname'];
			$lname=$_REQUEST['lname'];
			$email=$_REQUEST['email'];
			$password=$_REQUEST['password'];
			$contact=$_REQUEST['contact'];
			$token=mt_rand(1000,2000);
			$datetim=date("Y-m-d h:i:s",time());
			$subject="Your Token Id";
			$message="For varification, Your token id is :".$token;
			$header = "From:info@jobworkindia.in";
			$sql="select * from registration where email='$email'";
			$res = $con->query($sql);
			if ($res->num_rows > 0) 
			{
				echo "<script>alert('Your are already Register with us..!!')</script>";
			}
			else 
			{
				 $sql="Insert into registration (id,fname,lname,email,password,contact,token,time,status) values('','$fname','$lname','$email','$password','$contact','$token','$datetim','Deactive')";
				$stmt = $con->query($sql);
				mail($email,$subject,$message,$header);
				if($stmt)
				{	
					echo $_SESSION['email']=$email;
					
					echo "<script>alert('Register Successfully done. :-)')</script>";
					
					header('location:login.php');
				}
			}
		}
		
// register user end

?>
<html lang="en">
  
<!-- Mirrored from demo.graygrids.com/themes/plain-bs/contact1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Feb 2017 17:06:44 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
     JobWork India
    </title>
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <!--Fonts-->
    <link rel="stylesheet" media="screen" href="assets/fonts/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/fonts/plain/plain-fonts.css">
    
     
    <link rel="stylesheet" type="text/css" href="assets/fonts/lovelo/lovelo.css">
    <!-- Extras -->
    <link rel="stylesheet" type="text/css" href="assets/extras/owl/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="assets/extras/owl/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="assets/extras/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/extras/slicknav.css">

      <!-- Color CSS Styles  -->  
    <link rel="stylesheet" type="text/css" href="assets/css/colors/green.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="assets/css/colors/default.css" title="default" media="screen" />      
    <link rel="stylesheet" type="text/css" href="assets/css/colors/lightblue.css" title="lightblue" media="screen" />
    <link rel="stylesheet" type="text/css" href="assets/css/colors/gray.css" title="gray" media="screen" />
    <link rel="stylesheet" type="text/css" href="assets/css/colors/coffee.css" title="coffee" media="screen" />    
    <link rel="stylesheet" type="text/css" href="assets/css/colors/orange.css" title="orange" media="screen" />
    <link rel="stylesheet" type="text/css" href="assets/css/colors/wisteria.css" title="wisteria" media="screen" />
    <link rel="stylesheet" type="text/css" href="assets/css/colors/mblue.css" title="mblue" media="screen" />
    <link rel="stylesheet" type="text/css" href="assets/css/colors/greensea.css" title="greensea" media="screen" /> 
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
    </script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js">
    </script>
    <![endif]-->

  <!-- Google Maps -->
  <style>
    #google-map,
    body,
    html {
      padding: 0;
      height: 400px;
    }
  </style>

  </head>
  <body>

    <!-- Header area wrapper starts -->
  <?php
    include('header.php');
  ?>
  <!-- Header-wrap area ends -->
  
  <!-- Page Header -->
  
  <!-- Page Header End -->

  <!-- Conatct Section -->
  <section id="contact">
  <div class="contact-form-wrapper1" data-0="background-position:0px -200px;" data-10000="background-position:0px 2000;">
      <div class="container">
        <div class="row">
          

  
  
  <div class="col-md-12 contact-form wow fadeIn" data-wow-delay=".2s">
      <form action="#" method="post">
                <div class="form-group col-sm-3"></div>
                <div class="form-group col-sm-6">
                     <center><h1><b>Register</b></h1></center>
                     <div class="form-group">
                        <div class="help-block with-errors"></div>
                        <input type="text" class="form-control radius-input" id="fname" name="fname" placeholder="Enter First name" required data-error="Please enter your First Name" required>
                      </div>
                     <div class="form-group">
                        <div class="help-block with-errors"></div>
                        <input type="text" class="form-control radius-input" id="lname" name="lname" placeholder="Enter Last name" required data-error="Please enter your Last Name" required>
                      </div>
                      <div class="form-group">
                        <div class="help-block with-errors"></div>
                        <input type="email" class="form-control radius-input" id="email" placeholder="Enter email" name="email" required data-error="Please enter your email" required>
                      </div>

                      <div class="form-group">
                         <div class="help-block with-errors"></div>
                         <input type="password" class="form-control radius-input" id="password" placeholder="Password" name="password" required data-error="Please enter your password" required>
                      </div>
                      
                      <div class="form-group">
                         <div class="help-block with-errors"></div>
                         <input type="text" class="form-control radius-input" id="contact" placeholder="Contact" name="contact" required data-error="Please enter your Contact Number" required>
                      </div>
                    
                         
                         <input type="submit" id="form-submit" name="_register" value="Registet" class="btn btn-common btn-lg pull-right">
                     
                </div>
                <div class="form-group col-sm-3"></div>
                
                <div class="clearfix"></div>
            </form>
          </div>
                           
        </div>
      </div>
    </div>
  </section>
  
    <!-- Footer Section -->
   <?php
 include './footer.php';
   ?>
    <!-- Footer Section End-->
    
    <!-- ScrollTop Starts-->
    <div class="scroll-top" data-spy="affix" data-offset-top="500">
      <a onclick="smoothScr.anim('roof')">
        <i class="fa fa-angle-up fa-2x">
        </i>
      </a>      
    </div><!-- ScrollTop Starts-->

    <!-- Start Loader -->
    <div id="loader">
      <div class="square-spin">
        <img src="assets/img/preloader.gif" alt="">
      </div>
    </div>

    <!-- Style Switcher -->
  
  
    <!-- JavaScript & jQuery Plugins -->
    <!-- jQuery Load -->
    <script src="assets/js/jquery-min.js">
    </script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js">
    </script>
    <!--Text Rotator-->
    <script src="assets/js/jquery.mixitup.js">
    </script>
    <!--WOW Scroll Spy-->
    <script src="assets/js/wow.js">
    </script>
    <!-- OWL Carousel -->
    <script src="assets/js/owl.carousel.js">
    </script>
    <!-- Vide -->
    <script src="assets/js/jquery.vide.js">
    </script>
    <!-- Contact form related -->
    <script src="assets/js/form-validator.min.js">
    </script> 
    <script src="assets/js/contact-form-script.js">
    </script>   
    <!-- Smooth Scroll -->
    <script src="assets/js/smooth-scroll.js">
    </script>
    <!-- WayPoint -->
    <script src="assets/js/waypoints.min.js">
    </script>
    <!-- CounterUp -->
    <script src="assets/js/jquery.counterup.min.js">
    </script>
    <!-- ScrollTop -->
    <script src="assets/js/scroll-top.js">
    </script>
    <!-- Appear -->
    <script src="assets/js/jquery.appear.js">
    </script>
    <!-- Slicknav -->
    <script src="assets/js/jquery.slicknav.js">
    </script>
    <!-- Google Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.expsensor=false">
    </script>
    <!-- All JS plugin Triggers -->
    <script src="assets/js/main.js">
    </script>
  
    
  
  </body>
  

<!-- Mirrored from demo.graygrids.com/themes/plain-bs/contact1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Feb 2017 17:06:45 GMT -->
</html>