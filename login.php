<!DOCTYPE html>
<html lang="en">
 <?php
// Login start
  if(isset($_REQUEST['login']))
  {
  		include_once('config.php');
		$email=$_REQUEST['email'];
		$password=$_REQUEST['password'];
		$sql="select * from registration where email='$email'";
		$res=$con->query($sql);
		if($res->num_rows > 0)
		{
			while($row=$res->fetch_assoc())
			{
				if($row['password']==$password)
				{
					if($row['status']=="Active")
					{
						session_start();
						$_SESSION['email']=$email;
						$_SESSION['id']=$row['id'];
						header('location:index.php');
					}
					else
					{
						echo "<script>alert('Wait For Admin Approval')</script>";
					}
				}
				else
				{
					echo "<script>alert('Your Password is incorrect')</script>";
				}
			}
		}
		else
		{
			echo "<script>alert('Your Email is incorrect')</script>";
		}
  }  
?>
 
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
              <form  action="#" method="post">
                <div class="col-sm-3"></div>
                    <div class="col-sm-6">

                      
                        <center><h1><b>Login</b></h1></center>
                      <div class="form-group">
                        <div class="help-block with-errors"></div>
                        <input type="email" class="form-control radius-input" id="email" name="email" placeholder="Enter email" required data-error="Please enter your email" required>
                      </div>

                      <div class="form-group">
                         <div class="help-block with-errors"></div>
                         <input type="password" class="form-control radius-input" id="msg_subject" name="password" placeholder="Password" required data-error="Please enter your message subject" required>
                      </div>
                        
                         <div class="form-group">
                         <div class="help-block with-errors"></div>
                         <center>   <input type="submit" value="Login" name="login" class="btn btn-common btn-lg"><br> OR <br>
                         
                         <h4><a href="register.php">Get Register With Us</a></h4></center>
                      </div>
                        <br>
                         <div class="form-group">
                         <div class="help-block with-errors"></div>
                        
                      </div>
                    </div>
                 <div class="col-sm-3"></div>
                 
            </form>
          </div>
           
        </div>
      </div>
    </div>
  </section>
  <!-- Conatct Section End-->
  
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
  
    <!-- Google Maps JS Only for Contact Pages -->
    <script type="text/javascript">
    var map;
    var plain = new google.maps.LatLng(-33.885429, 151.210081);
    var mapCoordinates = new google.maps.LatLng(-33.885429, 151.210081);
    
    
    var markers = [];
    var image = new google.maps.MarkerImage(
      'assets/img/map-marker.png',
      new google.maps.Size(84, 70),
      new google.maps.Point(0, 0),
      new google.maps.Point(60, 60)
    );
    
    function addMarker() {
      markers.push(new google.maps.Marker({
        position: plain,
        raiseOnDrag: false,
        icon: image,
        map: map,
        draggable: false
      }
                                         ));
      
    }
    
    function initialize() {
      var mapOptions = {
        backgroundColor: "#ffffff",
        zoom: 15,
        disableDefaultUI: true,
        center: mapCoordinates,
        zoomControl: false,
        scaleControl: false,
        scrollwheel: false,
        disableDoubleClickZoom: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        styles: [{
          "featureType": "landscape.natural",
          "elementType": "geometry.fill",
          "stylers": [{
            "color": "#ffffff"
          }
                     ]
        }
                 , {
                   "featureType": "landscape.man_made",
                   "stylers": [{
                     "color": "#ffffff"
                   }
                               , {
                                 "visibility": "off"
                               }
                              ]
                 }
                 , {
                   "featureType": "water",
                   "stylers": [{
                     "color": "#80C8E5"
                   }
                               , {
                                 "saturation": 0
                               }
                              ]
                 }
                 , {
                   "featureType": "road.arterial",
                   "elementType": "geometry",
                   "stylers": [{
                     "color": "#999999"
                   }
                              ]
                 }
                 , {
                   "elementType": "labels.text.stroke",
                   "stylers": [{
                     "visibility": "off"
                   }
                              ]
                 }
                 , {
                   "elementType": "labels.text",
                   "stylers": [{
                     "color": "#333333"
                   }
                              ]
                 }
                 
                 , {
                   "featureType": "road.local",
                   "stylers": [{
                     "color": "#dedede"
                   }
                              ]
                 }
                 , {
                   "featureType": "road.local",
                   "elementType": "labels.text",
                   "stylers": [{
                     "color": "#666666"
                   }
                              ]
                 }
                 , {
                   "featureType": "transit.station.bus",
                   "stylers": [{
                     "saturation": -57
                   }
                              ]
                 }
                 , {
                   "featureType": "road.highway",
                   "elementType": "labels.icon",
                   "stylers": [{
                     "visibility": "off"
                   }
                              ]
                 }
                 , {
                   "featureType": "poi",
                   "stylers": [{
                     "visibility": "off"
                   }
                              ]
                 }
                 
                ]
        
      }
          ;
      map = new google.maps.Map(document.getElementById('google-map'), mapOptions);
      addMarker();
      
    }
    google.maps.event.addDomListener(window, 'load', initialize);
  </script>
  
  </body>
  

<!-- Mirrored from demo.graygrids.com/themes/plain-bs/contact1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Feb 2017 17:06:45 GMT -->
</html>