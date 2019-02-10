<?php
error_reporting(0);
include('config.php');
?>

<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">
<head>

<!-- Basic -->
<title>Realestate | Home</title>

<!-- Define Charset -->
<meta charset="utf-8">

<!-- Responsive Metatag -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- Page Description and Author -->
<meta name="description" content="Construction - Responsive HTML5 Template">
<meta name="author" content="iThemesLab">

<!-- Bootstrap CSS  -->
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">

<!-- Font Awesome CSS -->
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">

<!-- SuperFish Navigation -->
<link rel="stylesheet" href="css/superfish.css" type="text/css">

<!-- Owl Carousel CSS -->
<link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="css/owl.theme.css" type="text/css">
<link rel="stylesheet" href="css/owl.transitions.css" type="text/css">

<!-- Light Box CSS -->
<link rel="stylesheet" href="css/lightbox.css" type="text/css">

<!-- Construction CSS Styles  -->
<link rel="stylesheet" type="text/css" href="css/style.css">

<!-- Default Color -->
<link rel="stylesheet" type="text/css" href="css/colors/light-red.css">

<!-- Colors CSS -->
<link rel="stylesheet" type="text/css" href="css/colors/light-red.css" title="light-red">
<link rel="stylesheet" type="text/css" href="css/colors/blue.css" title="blue">
<link rel="stylesheet" type="text/css" href="css/colors/light-blue.css" title="light-blue">
<link rel="stylesheet" type="text/css" href="css/colors/green.css" title="green">
<link rel="stylesheet" type="text/css" href="css/colors/yellow.css" title="yellow">
<link rel="stylesheet" type="text/css" href="css/colors/black.css" title="black">

<!-- Responsive CSS Style -->
<link rel="stylesheet" type="text/css" href="css/responsive.css">

<!-- Css3 Transitions Styles  -->
<link rel="stylesheet" type="text/css" href="css/animate.css">

<!-- Construction JS File -->
<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/lightbox.min.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/jquery.fitvids.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/superfish.min.js"></script>
<script src="js/supersubs.js"></script>
<script src="js/styleswitcher.js"></script>
<script src="js/script.js"></script>
</head>

<body>

<!-- Styleswitcher
================================================== --> 

<!-- Styleswitcher End
================================================== --> 
<div class="container">
<!-- Start Header Section -->
<?php include('header.php');?>
<!-- End Navigation Section -->
</div>
<div class="container">
  <!-- Start Main Slider Section -->
  <div class="row">
    <div class="col-md-12">
      <div class="main-slider hidden-sm hidden-xs" id="main-slider">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          
          <!-- Indicators -->
          <?php 
					$slider_count="select count(image) as no_of_image from slider";
					$slider_count_exe=mysql_query($slider_count);
					$slider_count_read=mysql_fetch_array($slider_count_exe);
					$slider_length=$slider_count_read["no_of_image"];
					?>
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <?php
						for($i=1;$i<=$slider_length;$i++)
						{
                        echo '<li data-target="#carousel-example-generic" data-slide-to="$i"></li>';
						}?>
          </ol>
          
          <!-- Wrapper for slides -->
          
          <div class="carousel-inner" role="listbox">
            <div class="item active"><img src="Admin/img/bgpic.jpg" class="img-responsive" alt="Slider images 1" style="height:500px">
              <div class="carousel-caption">
                <h1>Welcome</h1>
                <p>
                  <?php //echo $data_slider['para'];?>
                </p>
              </div>
            </div>
            <?php
					$query_slider="select * from slider";
					$query_slider_exe=mysql_query($query_slider);
					
					while($data_slider=mysql_fetch_array($query_slider_exe))
					{
					?>
            <div class="item"><img src="Admin/img/<?php echo $data_slider['image'];?>" class="img-responsive" alt="Slider images 1" style="height:500px">
              <div class="carousel-caption">
                <h1><?php echo $data_slider['heading'];?></h1>
                <p><?php echo $data_slider['para'];?></p>
              </div>
            </div>
            <?php
					
					}
					?>
          </div>
          
          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"><i class="fa fa-angle-left"></i><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"><i class="fa fa-angle-right" aria-hidden="true"></i><span class="sr-only">Next</span></a></div>
      </div>
    </div>
  </div>
  <!-- End Main Slider Section -->
  
  <!-- Start Service Section -->
  <div id="service" class="services-section">
    <div class="row">
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="feature-2"><i class="fa fa-bank"></i>
          <h4>Building Construction</h4>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
        </div>
      </div>
      <!-- /.col-md-4 -->
      
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="feature-2"><i class="fa fa-plug"></i>
          <h4>Kitchen & Bathroom Fittings</h4>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="feature-2"><i class="fa fa-shield"></i>
          <h4>Plastering & Tiling</h4>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
        </div>
      </div>
      <!-- /.col-md-4 -->
      
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="feature-2"><i class="fa fa-home"></i>
          <h4>Home Decorating</h4>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="feature-2"><i class="fa fa-cube"></i>
          <h4>Carpentry & Plumbinf</h4>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
        </div>
      </div>
      <!-- /.col-md-4 -->
      
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="feature-2"><i class="fa fa-truck"></i>
          <h4>Handyman Service</h4>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
        </div>
      </div>
      <!-- /.col-md-4 -->
      
    </div>
    <!-- /.row -->
    
  </div>
  <!-- End Services Section -->
  
  <!-- Start About Us Section -->
  <div class="row">
    <div class="col-md-5">
      <div class="home-about-us">
        <?php
				$query_about="select * from about_us";
				$about_exe=mysql_query($query_about);
				$data_about=mysql_fetch_array($about_exe);
				echo $data_about['Designation'];
				
				?>
        <!--    <img src="images/about.jpg" class="img-responsive" alt="">
                <p>Vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident praesentium voluptatum deleniti atque corrupti quos non provident.</p>
                <ul>
                    <li><i class="fa fa-check-square-o"></i>At vero eos et accusamus et iusto odio</li>
                    <li><i class="fa fa-check-square-o"></i>Nam libero tempore cum soluta nobis est</li>
                    <li><i class="fa fa-check-square-o"></i>Temporibus autem quibusdam et aut officiis </li>
                    <li><i class="fa fa-check-square-o"></i>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</li>
                </ul>-->
        <a href="about.php" class="btn btn-primary">Read More</a></div>
    </div>
    <div class="col-md-7">
      <div class="running-project">
        <h3 class="section-title">Latest Newest Properties</h3>
        <div class="row">
          <?php
				$query_newest_pro="SELECT * FROM manageproperty order by id desc limit 4";
				$newest_pro_exe=mysql_query($query_newest_pro);
				while($read_newest_pro=mysql_fetch_array($newest_pro_exe))
				{	
			
				?>
          <div class="col-md-6">
            <div class="project"><img src="Admin/img/<?php echo $read_newest_pro["Image"]; ?>" style="width:100%; height:200px" class="img-responsive" alt="">
              <div class="project-details">
                <ul>
                  <li><strong>Property Type :</strong><?php echo $read_newest_pro["PropertyType"]; ?></li>
                  <li><strong>Property Location :</strong><?php echo $read_newest_pro["Location"]; ?></li>
                </ul>
              </div>
            </div>
          </div>
          <?php
				}
				?>
        </div>
      </div>
    </div>
  </div>
  <!-- End About Us Section -->
  
  <!-- Start Team Section -->
  <div class="row">
    <div class="col-md-12">
      <div class="team-section">
        <h3 class="section-title">Our Expert Team</h3>
        <div class="tab-content">
          <div class="tab-pane active" id="management">
            <div class="our-team" id="our-team">
              <?php
				$query_team="SELECT * FROM manage_team";
				$team_exe=mysql_query($query_team);
				while($read_team=mysql_fetch_array($team_exe))
				{	
			
				?>
              <div class="team-member"><img src="Admin/AdminProfilePic/<?php echo $read_team["image"];?>" class="img-responsive" alt="" style="height:250px">
                <div class="team-details">
                  <h4><?php echo $read_team["name"];?></h4>
                  <p><?php echo $read_team["designation"];?></p>
                </div>
              </div>
              <?php
				}
				?>
            </div>
          </div>
        </div>
        <!-- /.tab-content -->
        
      </div>
    </div>
  </div>
  <!-- End Team Section -->
  
  <!-- Start Call To Action Section -->
  <div class="row">
    <div class="col-md-12">
      <div class="call-to-action">
        <div class="overlay">
          <h1>We Can Build Your Dream House</h1>
          <p>Tell Us About Your Need</p>
          <a class="custom-btn" href="contact-full-width.php" role="button">Contact Us</a></div>
      </div>
    </div>
  </div>
  <!-- End Call To Action Section -->
  
  <!-- Start Latest News & Testimonial Section -->
  <div class="row">
    
    <!-- Start Latest News Section -->
    <div class="col-md-8">
      <div class="latest-news">
        <h3 class="section-title">Featured Property</h3>
        <div id="latest-news">
          <?php 
				$query_fp="select * from manageproperty where featureproperty='yes'";
				$query_fp_exe=mysql_query($query_fp);
				
				while($data_fp=mysql_fetch_array($query_fp_exe))
				{
                ?>
          <div class="latest-post"><img src="Admin/img/<?php echo $data_fp['Image'];?>" class="img-responsive" alt="" style="height:220px; width:100%">
            <div class="news-details">
              <ul>
                <li><i class="fa fa-calendar"></i><?php echo $data_fp['Date'];?></li>
                <li><i class="fa fa-bookmark"></i>Realestate</li>
                <br>
                <label>Location:<?php echo $data_fp['Location'];?></label>
                <br>
                Property Type:<?php echo $data_fp['PropertyType'];?><br>
                Property Name:<?php echo $data_fp['PropertyName'];?><br>
                Facilities:<?php echo $data_fp['facilites'];?>
              </ul>
            </div>
            <a href="fetureproperty.php" class="btn btn-primary">Read More</a></div>
          <?php 
				}
					?>
        </div>
      </div>
    </div>
    <!-- End Latest News Section -->
    
    <!-- Start Testimonial Section -->
    <div class="col-md-4">
      <div class="testimonial-section">
        <h3 class="section-title">Client's Speech About Us</h3>
        <div id="testimonials">
          <?php
				$query_speech="select * from manage_client";
				$query_speech_exe=mysql_query($query_speech);
while($data_speech=mysql_fetch_array($query_speech_exe))
{
?>
          <div class="testimonial"><img src="Admin/AdminProfilePic/<?php echo $data_speech['image'];?>" class="img-responsive" alt="">
            <h4><?php echo $data_speech['name'];?></h4>
            <p><?php echo $data_speech['comment'];?></p>
          </div>
          <?php }
?>
        </div>
      </div>
    </div>
    <!-- End Testimonial Section -->
    
  </div>
  <!-- End Latest News & Testimonial Section -->
  
  <!-- Start Clients Section -->
  <div class="row">
    <div class="col-md-12">
      <div class="clients-section">
        <h3 class="section-title">Our Honourable Client</h3>
        <div id="clients">
          <?php 
				$query_hc="select * from honourable_client";
				$query_hc_exe=mysql_query($query_hc);
				while($data_hc=mysql_fetch_array($query_hc_exe))
				{
			
				?>
          <a href="<?php echo $data_hc['url'];?>" target="_blank">
          <div><img src="Admin/AdminProfilePic/<?php echo $data_hc['logo'];?>" class="img-responsive" alt="" ></div>
          </a>
          <?php
				}
				?>
        </div>
      </div>
    </div>
  </div>
  <!-- End Clients Section -->
  
  <?php include('footer.php');?>
</div>
<!-- /.container -->

<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
</body>
</html>