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
    <title>Construction | About Us</title>

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
    <div class="container">
<!-- Styleswitcher
<?php include('header.php');?>
    <!-- End Navigation Section -->
    
    <!-- Start Breadcrumb Section -->
    <div class="row">
        <div class="col-md-12">
            <div class="page-title">
                <div class="page-title-overlay">
                    <h2>About Us</h2>
                    <div>
                        <ul class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">About Us</li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Section -->
        
    
    
    <!-- Start About Us Page -->
    <div class="row">
        <div class="col-md-7">
            <div class="about-slider">
			<?php 
			$query_as="select * from aboutus_slider";
			$query_as_exe=mysql_query($query_as);
			while($data_as=mysql_fetch_array($query_as_exe))
			{
				?>
			
                <div><img src="Admin/img/aboutslider/<?php echo $data_as['slider'];?>" class="img-responsive" alt="" style="height:450px;width:100%"></div>
                <?php
			}
			?>
            </div>
        </div>
		
		<?php 
		$query_mv="select * from ourmissionvision";
		$query_mv_exe=mysql_query($query_mv);
		$data_mv=mysql_fetch_array($query_mv_exe);
		?>
		
		
		
		
        <div class="col-md-5">
            <div class="welcome-text">
                
                <?php
				$query_about="select * from about_us";
				$about_exe=mysql_query($query_about);
				$data_about=mysql_fetch_array($about_exe);
				echo $data_about['Designation'];
				
				?>
            </div>
        </div>
    </div>
        
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <div class="welcome-text">
                <h3 class="section-title">Our Mission</h3>
                <p><?php echo $data_mv['Mission'];?></p>
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="welcome-text">
                <h3 class="section-title">Our Vision</h3>
                <p><?php echo $data_mv['Vision'];?></p>
            </div>
        </div>
    </div>
    <!-- End About Us Page -->
        
    
        
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
                                     
                            <div class="team-member">
                                <img src="Admin/AdminProfilePic/<?php echo $read_team["image"];?>" class="img-responsive" alt="" style="height:250px">
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
									
				</div><!-- /.tab-content -->
                
            </div>
        </div>
    </div>
    <!-- End Team Section -->
        
        
    <!-- Start Progress & Accordion Section --->
    <div class="row">
        <div class="col-md-12">
            <div class="skill-shortcode">
                
                <h3 class="section-title">Our Skill</h3>
                        
                <!-- Progress Bar -->
                <div class="skill">
				
				<?php 
				$query_skill="select * from ourskill";
				$query_skill_exe=mysql_query($query_skill);
				while($data_skill=mysql_fetch_array($query_skill_exe))
				{
					?>

                    <p><?php echo $data_skill['name'];?></p>          
                    <div class="progress">         
                        <div class="progress-bar" role="progressbar"  data-percentage="<?php echo $data_skill['percentage'];?>">
                            <span style="color:white"><?php echo $data_skill['percentage'];?>%</span>
                        </div>
                    </div>  
				<?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- End Progress & Accordion Section --->
        
        
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
                    <div><img src="Admin/AdminProfilePic/<?php echo $data_hc['logo'];?>" class="img-responsive" alt=""></div>
					<?php
				}
				?>
         
                </div>
            </div>
        </div>
    </div>
    <!-- End Clients Section -->
    
    
    
    <!-- Start Footer Section -->
<?php include('footer.php');?>
    <!-- End Copyright Section --->

    
    
    </div><!-- /.container -->
    
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
</body>

</html>