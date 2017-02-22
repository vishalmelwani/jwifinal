<?php
	if(isset($_REQUEST['submit']))
	{
	session_start();
	$sel = $_POST['sel'];
   if(empty($sel)) 
  {
  	echo "<script>
		alert('You have nothing Selected');
	</script>";
  } 
  else
  {
    
       $a=implode(",",$sel);
   	   $_SESSION['sel']=$a;
	   header('location:req.php');		 
  }
  
}
?>

<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from demo.graygrids.com/themes/plain-bs/blog-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Feb 2017 17:06:17 GMT -->
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
  </head>
  <body>

  <?php
  include("header.php");
  ?>
    <!-- Page Header -->
    <div class="page-header">
      <div class="page-header-inner">
        <div class="container">
          <h1 class="section-title page-title">
            Step1 : Select The Services Provider
          </h1>
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="page">Left Sidebar</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- Page Header End -->
    
    <!-- Blog-page Section -->
    <section id="blog-page">
      <div class="container">
        <div class="row">
          <!-- Sidebar Start -->
          <div class="col-md-4">
            <div class="sidebar">
              <div class="search-box">
                <form action="#" method="get">
                  <fieldset>
                    <div class="input-group">
                      <input name="s" class="form-control" type="text" placeholder="SEARCH...">
                        <span class="input-group-btn">
                        <button type="submit" class="btn plain-search-btn">
                          <i class="fa fa-search"></i>
                        </button>
                        </span>
                    </div>
                  </fieldset>
                </form>
              </div>
              <div class="popular-post widget">
                <h4 class="widget-title">Job Type </h4>
                <ul>
                  <li><a href="#">Very Urgent</a></li>
                  <li><a href="#">Urgent</a></li>
                  <li><a href="#">Normal</a></li>
                  
                </ul>
              </div>
              
              <div class="popular-post widget">
                <h4 class="widget-title">Budget</h4>
                <ul>
                  <li><a href="#">Rs. 0 to Rs. 15000</a></li>
                   <li><a href="#">Rs. 15000 to Rs. 50000</a></li>
				    <li><a href="#">Rs. 50000 to Rs. 1,00,000</a></li>
					 <li><a href="#">Rs. 1,00,000 +</a></li>
                </ul>
              </div>
              
              
              
            </div>
          </div>
          
          <div class="col-md-8">
            <div>
                <form method="get" action="search.php">
                    <select name="id" class="col-md-4" style="height:50px;">
                                            <?php
                                              include './config.php';
                                              $id=$_REQUEST['id'];
                                        $sql="select * from subcategory";
					$res=$con->query($sql);
					while($row=$res->fetch_assoc())
					{
                                            ?>
                                       
						<option value="<?php echo $row['id'];?>" <?php if($row['id']==$id) echo 'selected';   ?>><?php echo  $row['sname'];?></option>
						<?php
                                        }
                                        ?>
					</select>
					<div class="col-md-1"></div>
                                        
                                        <select name="area" class="col-md-4" style="height:50px;">
                                             <?php
                                              include './config.php';
                                        $sql="select * from area";
					$res=$con->query($sql);
					while($row=$res->fetch_assoc())
					{
                                            ?>
                                       
						<option value="<?php echo $row['id'];?>"><?php echo$row['name'];?></option>
						<?php
                                        }
                                        ?>
					</select>
					<div class="col-md-1"></div>
					<input type="submit" class="btn btn-success">
				</form>
			</div>
              <br/><br/><br/>
              <ul class="nav nav-tabs" role="tablist">              <li class="active">                <a data-toggle="tab" role="tab" href="#tab1">                  <i class="fa fa-info-circle">                  </i>                  Most Recommonded                </a>              </li>                          </ul>
            <div class="tab-content">
              <form action="" method="post">
                  <?php
                  include("config.php");
                 $area=isset($_REQUEST['area'])?$_REQUEST['area']:0;
                  $cat=isset($_REQUEST['id'])?$_REQUEST['id']:0;;
                  
                  $sql="select registration.id,registration.fname,area.name,port.description from registration JOIN profile on registration.id=profile.rid JOIN port on registration.id=port.rid  JOIN area on profile.area=area.id where profile.area=$area && port.category=$cat";
                  $res=$con->query($sql);
                  while($row=$res->fetch_assoc())
                  {
			 ?>
                          <div id="tab1" class="tab-pane fade in active " role="tabpanel">
                <div class="col-md-1"><input type="checkbox" style="height:30px;width:30px;" name="sel[]" value="<?php echo $row['id'];?>"></div>
				<h1>
                  <?php
                 echo $row['fname']
                  ?>
                </h1>
                <p><img class="alignleft" src="assets/images/avatar-placeholder.png" height='50' width='50' alt="plain-about" width="185" height="167"><?php  echo $row['description'] ?></p>
              </div>

                  <?php
                  }
                  ?>
                  <br>
                  <br>
			  <input type="submit" class="btn btn-success btn-lg" name='submit' >
			 
              </form>
            </div>
          </div>
          
        </div>
      </div>
    </section>
    <!-- Blog-page Section End -->
    
    <!-- Footer Section -->
    <?php
    include("footer.php");
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
    <!-- Placeholder -->
    <script src="assets/js/placeholdem.min.js">
    </script>
    <!-- Vide -->
    <script src="assets/js/jquery.vide.js">
    </script>
    <!-- Skrollr -->
    
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
    <!-- All JS plugin Triggers -->
    <script src="assets/js/main.js">
    </script>
    
  </body>

<!-- Mirrored from demo.graygrids.com/themes/plain-bs/blog-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Feb 2017 17:06:17 GMT -->
</html>