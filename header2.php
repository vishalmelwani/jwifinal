
<!-- Roof area starts -->
    <div id="roof" class="hidden-xs" style="background-color: #083c5a;color: orange;">
        <div class="container">

            <!-- Quick Contacts starts -->
            <div class="quick-contacts pull-left">
              <span>
                <i class="fa fa-map-marker">
                </i>
                Ahmedabad, India
              </span>
              <span>
                <i class="fa fa-mobile-phone">
                </i>
                8866153773
              </span>
              <span>
                <i class="fa fa-envelope">
                </i>
                <a class="__cf_email__" href="http://demo.graygrids.com/cdn-cgi/l/email-protection" data-cfemail="f49199959d98b4918c9599849891da979b99">[email&#160;protected]</a><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script>
              </span>
            </div>
            <!-- Quick Contacts Ends -->

            <!-- Roof Social Links Starts-->
            <div class="social-links text-center pull-right">
              <a href="https://twitter.com/jobworkindia" class="social-link" data-toggle="tooltip" data-placement="bottom" title="Twitter">
                <i class="fa fa-twitter">
                </i>
              </a>
              <a href="https://www.facebook.com/www.jobwork.ind.in/" class="social-link" data-toggle="tooltip" data-placement="bottom" title="Facebook">
                <i class="fa fa-facebook">
                </i>
              </a>
              <a href="#" class="social-link" data-toggle="tooltip" data-placement="bottom" title="Google+">
                <i class="fa fa-google-plus">
                </i>
              </a>
              <a href="#" class="social-link" data-toggle="tooltip" data-placement="bottom" title="LinkedIn">
                <i class="fa fa-linkedin">
                </i>
              </a>
              <a href="#" class="social-link" data-toggle="tooltip" data-placement="bottom" title="YouTube">
                <i class="fa fa-youtube-play">
                </i>
              </a>
            </div>
            <!-- Roof Social Links Ends-->

        </div>
      </div>
      <!-- Roof area Ends -->

      <!-- Header area starts -->
      <section id="header">

        <!-- Nav Menu with Logo area starts -->
        <div class="logo-menu">

          <!-- Navbar Starts -->
          <nav class="navbar navbar-default navbar-plain" role="navigation" data-spy="affix" data-offset-top="50">
            <div class="container">

              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                </button>
                <a class="navbar-brand" href="index.php">
                    <img src="assets/images/log22.png" alt="PLAIN HTML5 Template">
                </a>
              </div>
              <!-- Brand and toggle menu for mobile ends -->

              <!-- Navbar Starts -->
              <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav animated-nav navbar-right">
                  <li class="active dropdown dropdown-toggle">
                    <a href="#" data-toggle="dropdown">
                       Home
                    </a>                    
                    <!--- <ul class="dropdown-menu">
                      <li class="active">
                        <a href="index-2.html">
                          Home v1
                        </a>
                      </li>   
                      <li>
                        <a href="index-1.html">
                          Home v2
                        </a>
                      </li>                   
                    </ul>                    --->
                  </li>                                    
                  <li class="dropdown dropdown-toggle">
                    <a href="#" data-toggle="dropdown">
                      Categories
                    </a>
                    <ul class="dropdown-menu">
                        
                        
                        <?php
                                        include './config.php';
                                        $sql="select * from category";
					$res=$con->query($sql);
					while($row=$res->fetch_assoc())
					{
                        
                        
                        ?>
                      <li class="dropdown">
                        <a href="#">
                          <?php  echo $row['cname']; ?>
                        </a>
                          <?php
                                
                                $sql1="select * from subcategory where cid='$row[id]'";
                                $res1 = $con->query($sql1);
                                if ($res1->num_rows > 0) 
                                {
                          
                          ?>
                        <ul class="dropdown-menu sub-menu">
                            <?php 
                            while($row1=$res1->fetch_assoc())
			{
                                ?>
                            
                          <li>
                            <a href="search.php?id=<?php echo $row1['id'];?>">
                              <?php  echo $row1['sname']; ?>
                            </a>
                          </li>
                          
                          <?php
                        }
                          ?>
                          
                        </ul>
                          
                          <?php
                                }
                          ?>
                      </li>
                      
                      <?php
                      
                                        }
                      ?>
                     
                    </ul>
                  </li>             
                  <li class="dropdown dropdown-toggle">
                    <a href="#" data-toggle="dropdown">
                      Pricing 
                    </a>
                    
                  <!---  <ul class="dropdown-menu">
                      <li>
                        <a href="accordions.html">
                          Accordions
                        </a>
                      </li>
                      <li>
                        <a href="buttons.html">
                          Buttons
                        </a>
                      </li>
                      <li>
                        <a href="social-icons.html">
                          Social Icons
                        </a>
                      </li>
                      <li>
                        <a href="map.html">
                          Google Map
                        </a>
                      </li>
                      <li>
                        <a href="media.html">
                          Media
                        </a>
                      </li>
                      <li>
                        <a href="progress.html">
                          Progress Bar
                        </a>
                      </li>
                      <li>
                        <a href="portfolio.html">
                          Portfolio
                        </a>
                      </li>
                      <li>
                        <a href="carousel.html">
                          Carousel Slider
                        </a>
                      </li>
                      <li>
                        <a href="pricing.html">
                          Pricing Tables
                        </a>
                      </li>
                      <li>
                        <a href="notification.html">
                          Notification
                        </a>
                      </li>
                      <li>
                        <a href="tabs.html">
                          Tabs
                        </a>
                      </li>                        
                    </ul>                  --->
                    
                  </li>
                  <li class="dropdown dropdown-toggle">
                    <a href="#" data-toggle="dropdown">
                      Post Requirements
                    </a>
                    
                    <!--- <ul class="dropdown-menu">
                      <li>
                        <a href="portfolio-col-3.html">
                          Portfolio (3 column)
                        </a>
                      </li>
                      <li>
                        <a href="portfolio-col-4.html">
                          Portfolio (4 column)
                        </a>
                      </li>
                      <li>
                        <a href="portfolio-item.html">
                          Single Project
                        </a>
                      </li>
                      
                    </ul>--->
                    
                  </li>

                  <li class="dropdown dropdown-toggle">
                    <a href="#" data-toggle="dropdown">
                      Contact Us
                    </a>
                    
                    <!---<ul class="dropdown-menu">
                      <li>
                        <a href="contact1.html">
                          Contact us Page 1
                        </a>
                      </li>
                      <li>
                        <a href="contact2.html">
                          Contact us Page 2
                        </a>
                      </li>                      
                    </ul--->
                    
                  </li>
                  <?php
                  include './config.php';
                  if(isset($_SESSION['email']))
                  {
                  $email=$_SESSION['email'];
                    $sql="select * from registration where email='$email'";
                    $res = $con->query($sql);
                    if ($res->num_rows > 0) 
                    {
                        while($row=$res->fetch_assoc())
                        {
                                $name=$row['fname']." ".$row['lname'];
                        }
                    
                  
                  ?>
                   <li class="dropdown dropdown-toggle">
                    <a href="#" data-toggle="dropdown">
                      <?php echo $name;  ?>
                    </a>
                       <ul class="dropdown-menu">
                      <li>
                        <a href="profile.php">
                          My Profile                       </a>
                      </li>
                      
                      <li>
                        <a href="logout.php">
                          Logout
                        </a>
                      </li>
                       </ul>
                   </li>
                   
                   
                   <?php
                   
                  }}
                    else
                    {
                   ?>
                  <li class="dropdown dropdown-toggle">
                    <a href="login.php" >
                      Login/Register
                    </a>
                    
                    <!---<ul class="dropdown-menu">
                      <li>
                        <a href="sidebar-blog.html">
                          Blog View
                        </a>
                      </li>
                      <li>
                        <a href="blog-single.html">
                          Single Post
                        </a>
                      </li>
                      <li>
                        <a href="imagepost.html">
                          Image Post
                        </a>
                      </li>
                      <li>
                        <a href="gallery.html">
                          Gallery Post
                        </a>
                      </li>
                      <li>
                        <a href="video.html">
                          Video Post
                        </a>
                      </li>
                      <li>
                        <a href="quote.html">
                          Quote Post
                        </a>
                      </li>   
                    </ul>                    --->
                  </li>
                  <?php
                  
                  }
                  ?>
                  <!-- Search in right of nav -->
                  <li class="search">
                    <a href="#" class="open-search">
                      <i class="fa fa-search">
                      </i>
                    </a>
                  </li>
                  <!-- Search Ends -->
                  
                </ul>
                
                <!-- Form for navbar search area -->
                <form class="full-search">
                  <div class="container">
                    <input type="text" placeholder="Type to Search">
                    <a href="#" class="close-search">
                      <span class="fa fa-times fa-2x">
                      </span>
                    </a>
                  </div>
                </form>
                <!-- Search form ends -->
                
              </div>
            </div>

            <!-- Mobile Menu Start -->
            <ul class="wpb-mobile-menu">
              <li class="active">
                <a href="index-2.html">
                  Home
                </a>
              </li>                                    
              <li>
                <a href="#">
                  Categories
                </a>
                <ul>
                  <li>
                    <a href="#">
                      Mechanical
                    </a>
                    <ul>
                      <li>
                        <a href="about.html">
                          Turning
                        </a>
                      </li>
                      <li>
                        <a href="about2.html">
                          Example 2
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="services.html">
                      Electrical
                    </a>
                    <ul>
                      <li>
                        <a href="services.html">
                          services 1
                        </a>
                      </li>
                      <li>
                        <a href="services2.html">
                          Services 2
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="team.html">
                      Civil Service
                    </a>
                    <ul>
                      <li>
                        <a href="team1.html">
                          Service 1
                        </a>
                      </li>
                      <li>
                        <a href="team2.html">
                          Service 2
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!---<li>
                    <a href="pricing.html">
                      Pricing Tables
                    </a>
                  </li>
                   <li>
                    <a href="faq.html">
                      FAQ Page
                    </a>
                  </li> 
                  <li>
                    <a href="#">
                      Sidebar
                    </a>
                    <ul>
                      <li>
                        <a href="blog-full.html">
                          Full width
                        </a>
                      </li>
                      <li>
                        <a href="blog-sidebar.html">
                          Left Sidebar
                        </a>
                      </li>
                      <li>
                        <a href="sidebar-blog.html">
                          Right Sidebar
                        </a>
                      </li>
                    </ul>
                  </li>                      
                  <li>
                    <a href="404.html">
                      Page 404
                    </a>
                  </li>--->    
                </ul>
              </li>             
              <li>
                  <a href="procing.php">
                  Pricing 
                </a>
                
               <!--- <ul>
                  <li>
                    <a href="accordions.html">
                      Accordions
                    </a>
                  </li>
                  <li>
                    <a href="buttons.html">
                      Buttons
                    </a>
                  </li>
                  <li>
                    <a href="social-icons.html">
                      Social Icons
                    </a>
                  </li>
                  <li>
                    <a href="map.html">
                      Google Map
                    </a>
                  </li>
                  <li>
                    <a href="media.html">
                      Media
                    </a>
                  </li>
                  <li>
                    <a href="progress.html">
                      Progress Bar
                    </a>
                  </li>
                  <li>
                    <a href="portfolio.html">
                      Portfolio
                    </a>
                  </li>
                  <li>
                    <a href="carousel.html">
                      Carousel Slider
                    </a>
                  </li>
                  <li>
                    <a href="pricing.html">
                      Pricing Tables
                    </a>
                  </li>
                  <li>
                    <a href="notification.html">
                      Notification
                    </a>
                  </li>
                  <li>
                    <a href="tabs.html">
                      Tabs
                    </a>
                  </li>                   
                </ul>     --->                  
                
              </li>
              <li>
                  <a href="req.php">
                  Post Requirments
                </a>
                
              <!---  <ul>
                  <li>
                    <a href="portfolio-col-3.html">
                      Portfolio (3 column)
                    </a>
                  </li>
                  <li>
                    <a href="portfolio-col-4.html">
                      Portfolio (4 column)
                    </a>
                  </li>
                  <li>
                    <a href="portfolio-item.html">
                      Single Project
                    </a>
                  </li>
                  
                </ul>
                --->
              </li>

              <li>
                <a href="#">
                  Contact Us
                </a>
                
              <!---  <ul>
                  <li>
                    <a href="contact1.html">
                      Contact us Page 1
                    </a>
                  </li>
                  <li>
                    <a href="contact2.html">
                      Contact us Page 2
                    </a>
                  </li>                      
                </ul>--->
                
              </li>
              
              <li>
                <a href="#">
                  Login/Register
                </a>
                
             <!---   <ul>
                  <li>
                    <a href="sidebar-blog.html">
                      Blog View
                    </a>
                  </li>
                  <li>
                    <a href="blog-single.html">
                      Single Post
                    </a>
                  </li>
                  <li>
                    <a href="imagepost.html">
                      Image Post
                    </a>
                  </li>
                  <li>
                    <a href="gallery.html">
                      Gallery Post
                    </a>
                  </li>
                  <li>
                    <a href="video.html">
                      Video Post
                    </a>
                  </li>
                  <li>
                    <a href="quote.html">
                      Quote Post
                    </a>
                  </li>   
                </ul>                    --->
              </li>       
            </ul>
            <!-- Mobile Menu End -->

          </nav>
          <!-- Navbar Ends -->

        </div>
        <!-- Nav Menu and logo area ends -->