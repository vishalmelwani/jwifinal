<?php
session_start();
if(!isset($_SESSION['email']))
{
    header('location:login.php');
}
if(isset($_REQUEST['submit']))
{
    
$con=new mysqli("localhost","root","","jwi");
$description=$_REQUEST['description'];
		$title=$_REQUEST['title'];
		$location=$_REQUEST['area'];
		$category=$_REQUEST['category'];
		$subcategory=$_REQUEST['subcategory'];
		$type=$_REQUEST['type'];
		$tags=$_REQUEST['job'];
               
                $repeat=$_REQUEST['repeat'];		
		$quantity=$_REQUEST['quantity'];
		$datetim=date("Y-m-d h:i:s",time());
		$transpot=$_REQUEST['transpot'];
		$budget=$_REQUEST['budget'];
		$rid=$_SESSION['id'];		
		$img = $_FILES['img']['name'];
		$type = $_FILES['img']['type'];
		$sel=$_SESSION['sel'];
		if((($_FILES['img']['type']=='image/jpeg')
		|| ($_FILES['img']['type']=='image/png')
		|| ($_FILES['img']['type']=='image/jpg')
		|| ($_FILES['img']['type']=='image/gif')))
		{
			if(file_exists('upload/req/'.$_FILES['img']['name']))
			{
				echo "image is exists";
			}
			else
			{
				 $insert = "insert into req values('','$title','$description','$img','$location','$category','$subcategory','$quantity','$repeat','$type','$tags','$transpot','$budget','$rid','Active','$datetim')";
				$query = $con->query($insert);
				$last_id=$con->insert_id;
				$aa=explode(",",$sel);
				$insert ="";
				foreach($aa as $b)
				{
					if($insert == "")
					{
					$insert= "insert into selcted_saler values('','$last_id','$b','Requested');";
					}
					else
					{
					$insert .= "insert into selcted_saler values('','$last_id','$b','Requested');";
					}
				}
				$query1 = $con->multi_query($insert);
				if($query)
				{
					move_uploaded_file($_FILES['img']['tmp_name'],'upload/req/'.$_FILES['img']['name']);
					header('location:req.php');
				}
				else
				{
					echo "image is not insert sucessfully";
                                        header('location:req.php');
				}
				
			}
		}
		else
		{
			echo "file is not an image";
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
  include("./header2.php");
  ?>
    <!-- Page Header -->
    <div class="page-header">
      <div class="page-header-inner">
        <div class="container">
          <h1 class="section-title page-title">
            Step2 : Add Your Requirement
          </h1>
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="page">Left Sidebar</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- Page Header End -->
    <section id="contact">
   
    <div class="contact-form-wrapper1" data-0="background-position:0px -200px;" data-10000="background-position:0px 2000;">
      <div class="container">
        <div class="row">
          <div class="col-md-12 contact-form wow fadeIn" data-wow-delay=".2s" >
              <form  action="#" method="post" enctype="multipart/form-data">
               
                    <div class="col-sm-6">

                      
                        <center><h1><b></b></h1></center>
                      <div class="form-group">
                        <div class="help-block with-errors"></div>
                        <input type="text" class="form-control radius-input" id="title" name="title" placeholder="Enter Title" required data-error="Please enter your title" required>
                      </div>

                      <div class="form-group">
                         <div class="help-block with-errors"></div>
                         <input type="text" class="form-control radius-input" id="description" name="description" placeholder="Description" required data-error="Please enter your Description" required>
                      </div>
                        <div class="form-group">
                         <div class="help-block with-errors"></div>
                         <input type="file" class="form-control radius-input" id="img" name="img" placeholder="Image" required data-error="Please enter your Image" required>
                      </div>
                        
                        <div class="form-group">
                         <div class="help-block with-errors"></div>
                         <select name='catgory' class="form-control radius-input">
                             <option value='-1' style="color:black;" >Select Category</option>
                             <?php
                                        include("config.php");
                                        $sql="select * from category";
					$res=$con->query($sql);
					while($row=$res->fetch_assoc())
					{
			 ?>
                             <option value="<?php echo $row['id'];?>" style="color:black;"><?php echo $row['cname'];?></option>
                             <?php
                             
                                        }
                             ?>
                         </select>
                         
                      </div>
                         <div class="form-group">
                         <div class="help-block with-errors"></div>
                         <select name='subcategory' class="form-control radius-input">
                             <option value='-1' style="color:black;" >Select SubCategory</option>
                             <?php
                             
                             $sql="select * from subcategory";
					$res=$con->query($sql);
					while($row=$res->fetch_assoc())
					{
                                            ?>
                                       
						<option style="color:black;" value="<?php echo $row['id'];?>"><?php echo  $row['sname'];?></option>
						<?php
                                        }
                                        ?>
                         </select>
                         
                      </div>
                         <div class="form-group">
                         <div class="help-block with-errors"></div>
                         <select name='type' class="form-control radius-input">
                             <option value='-1' style="color:black;" >Select type of work</option>
                             <option value="0" style="color:black;">Very Urgent</option>
                             <option value="1" style="color:black;">Urgent</option>
                             <option value="2" style="color:black;">Normal</option>
                         </select>
                         
                      </div>
                         
                        
                         
                        <br>
                         <div class="form-group">
                         <div class="help-block with-errors"></div>
                        
                      </div>
                    </div>
                  <div class="col-sm-6">

                      
                        <center><h1><b></b></h1></center>
                      <div class="form-group">
                         <div class="help-block with-errors"></div>
                         <select name='area' class="form-control radius-input">
                              <option value='-1' style="color:black;" >Select area</option>
                            <?php
                                              include './config.php';
                                        $sql="select * from area";
					$res=$con->query($sql);
					while($row=$res->fetch_assoc())
					{
                                            ?>
                                       
						<option value="<?php echo $row['id'];?>" style="color:black;" ><?php echo$row['name'];?></option>
						<?php
                                        }
                                        ?>
                         </select>
                         
                      </div>
                        <div class="form-group">
                        <div class="help-block with-errors"></div>
                        <input type="job" class="form-control radius-input" id="job" name="job" placeholder="Enter Job Tags" required data-error="Please enter your Job Tags" required>
                      </div>
                      
                      <div class="form-group">
                         <div class="help-block with-errors"></div>
                         <input type="quantity" class="form-control radius-input" id="quantity" name="quantity" placeholder="Quantity" required data-error="Please enter your Quantity" required>
                      </div>
                          <div class="form-group">
                         <div class="help-block with-errors"></div>
                         <input type="text" class="form-control radius-input" id="repeat" name="repeat" placeholder="Repeat" required data-error="Please enter your Repeat" required>
                      </div>
                        <div class="form-group">
                         <div class="help-block with-errors"></div>
                         <input type="text" class="form-control radius-input" id="transpot" name="transpot" placeholder="Transport" required data-error="Please enter your Transport" required>
                      </div>
                         <div class="form-group">
                         <div class="help-block with-errors"></div>
                         <input type="budget" class="form-control radius-input" id="budget" name="budget" placeholder="Budget" required data-error="Please enter your Budget" required>
                      </div>
                        
                         <div class="form-group">
                         <div class="help-block with-errors"></div>
                        
                        
                      </div>
                        <br>
                         <div class="form-group">
                         <div class="help-block with-errors"></div>
                        
                      </div>
                        
                    </div>
                  <center>   <input type="submit" value="Submit" name="submit" class="btn btn-common btn-lg"></center>
                 
            </form>
          </div>
           
        </div>
      </div>
    </div>
  </section>
    <!-- Blog-page Section -->
    
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