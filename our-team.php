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
    <title>Realestate | Our Team</title>

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
                    <h2>Our Team</h2>
                    <div>
                        <ul class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Team</li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Section -->
        
    
    
    <!-- Start Our Team Page --->
    <div class="row">
        <div class="col-md-12">
            <div class="team-section">
                <h3 class="section-title">Our Developer Team</h3>
                
                <div class="our-team" id="management-team">
                         <?php
						 $query1="select * from manage_team where designation='Developer'";
                            $query1_exe=mysql_query($query1);
							while($data1=mysql_fetch_array($query1_exe))
							{
								?>
                            <div class="team-member">
                                <img src="Admin/AdminProfilePic/<?php echo $data1['image'];?>" class="img-responsive" alt="" Style="height:271px;width:100%">
                                <div class="team-details">
                                    <h4><?php echo $data1['name'];?></h4><br/>
									<h5><?php echo $data1['designation'];?></h5>

                                </div>
                            </div>
                             <?php
							}
?>							
                                    
                        </div>
                
            </div>
        </div>
    </div><!-- /.row -->
    <!-- End Our Team Page --->
        
    
    <!-- Start Our Team Page --->
    <div class="row">
        <div class="col-md-12">
            <div class="team-section">
                <h3 class="section-title">Our Designer Team</h3>
                
                <div class="our-team" id="architect-team">
				<?php
						 $query2="select * from manage_team where designation='designer'";
                            $query2_exe=mysql_query($query2);
							while($data2=mysql_fetch_array($query2_exe))
							{
								?>
                                     
                            <div class="team-member">
                                <img src="Admin/AdminProfilePic/<?php echo $data2['image'];?>" class="img-responsive" alt="" style="height:250px">
                                <div class="team-details">
                                    <h4><?php echo $data2['name'];?></h4>
                                    <p><?php echo $data2['designation'];?></p>
                                    
                                </div>
                            </div>
							<?php
							}
							?>
           
                        </div>
                
            </div>
        </div>
    </div><!-- /.row -->
    <!-- End Our Team Page --->
        
        
        
    <!-- Start Our Team Page --->
    <div class="row">
        <div class="col-md-12">
            <div class="team-section" style="margin-bottom:30px;">
                <h3 class="section-title">Our SEO Team</h3>
                
                <div class="our-team" id="engineer-team">
				<?php
						 $query3="select * from manage_team where designation='SEO'";
                            $query3_exe=mysql_query($query3);
							while($data3=mysql_fetch_array($query3_exe))
							{
								?>
                                     
                            <div class="team-member">
                                <img src="Admin/AdminProfilePic/<?php echo $data3['image'];?>" class="img-responsive" alt="" style="height:250px">
                                <div class="team-details">
                                    <h4><?php echo $data3['name'];?></h4>
                                    <p><?php echo $data3['designation'];?></p>
                                  
                                </div>
                            </div>
							<?php
							}
							?>
        
                        </div>
                
            </div>
        </div>
    </div><!-- /.row -->
    <!-- End Our Team Page --->
    
    
    
    <!-- Start Footer Section -->
    <div class="row">
<?php include('footer.php');?>
    <!-- End Copyright Section --->

    
    
    </div><!-- /.container -->
    </div>
    
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
</body>

</html>