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
<title>Realestate | Contact with Us</title>

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
<script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script src="js/script.js"></script>
</head>

<body>
<div class="container">
<!-- Styleswitcher
================================================== -->
<?php include('header.php');?>
<!-- End Navigation Section -->

<!-- Start Breadcrumb Section -->
<div class="row">
  <div class="col-md-12">
    <div class="page-title">
      <div class="page-title-overlay">
        <h2>User Registration</h2>
        <div>
          <ul class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Registration</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Breadcrumb Section -->

<!-- Start Map Section -->

<!-- End Map Section -->

<!-- Start Contact Section -->
<div class="row">
  <div class="col-md-12">
    <div class="contact-section" align="center">
      <h3 class="section-title">User Registation</h3>
      <!-- Start Contact Form -->
      <div id="contact-form" class="contatct-form">
        <div class="loader"></div>
        <form method="post" enctype="multipart/form-data">
          <div class="row">
          <div class="box col-md-12">
          <div class="box-inner">
            <div style="padding:25px">
              <div class="control-group">
                <label class="control-label" for="selectError1">User Name</label>
                <div class="input-group col-md-4"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="text" class="form-control" placeholder="User Name" name="name">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="selectError1">Last Name</label>
                <div class="input-group col-md-4"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="text" class="form-control" placeholder="Last Name" name="lastname">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="selectError1">Password</label>
                <div class="input-group col-md-4"><span class="input-group-addon"><i class="glyphicon glyphicon-fullscreen"></i></span>
                  <input type="password" class="form-control" placeholder="Password" name="pass">
                </div>
              </div>
                 <div class="control-group">
                <label class="control-label" for="selectError1">Re-Password</label>
                <div class="input-group col-md-4"><span class="input-group-addon"><i class="glyphicon glyphicon-fullscreen"></i></span>
                  <input type="password" class="form-control" placeholder="Password" name="repass">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="selectError1">Phone Number</label>
                <div class="input-group col-md-4"><span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                  <input type="text" class="form-control" placeholder="Contact No." name="contact">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="selectError1">E-mail Address</label>
                <div class="input-group col-md-4"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                  <input type="text" class="form-control" placeholder="Enter your E-mail" name="email">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="selectError1"> Address</label>
                <div class="input-group col-md-4"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                  <textarea class="col-md-4" name="address" placeholder="Enter your Address" rows="2"></textarea>
                </div>
              </div>
                   
              <br>
              <div class="box-content">
                <div class="form-group">
                  <label for="exampleInputFile">Select User Image</label>
                  <input type="file" id="exampleInputFile" name="img">
                </div>
                Profile Picture Preview<br>
                <img src="../images/author.png" height="100" width="100"><br>
                <a class="btn btn-danger" href="index.php"><i class="glyphicon glyphicon-arrow-left"></i>&nbsp;&nbsp;Back</a>
                <button type="submit" class="btn btn-success" name="save">Sign Up</button>
              </div>
            </div>
            <div></div>
            
            <!--/row-->
            
          </div>
        </form>
        <?php
					if(isset($_POST['save']))
					{
						$name=$_POST['name'];
						$lname=$_POST['lastname'];
						$pass=$_POST['pass'];
						$email=$_POST['email'];
						$contact=$_POST['contact'];
						$adds=$_POST['address'];
						$file=$_FILES['img']['name'];
						$file_loc=$_FILES["img"]["tmp_name"];
                move_uploaded_file($file_loc, "img/userpic/".$file);
				$date=date('y-m-d');
				
				echo	$query_us="insert into useregister set Name='$name',LastName='$lname',ContactNo='$contact',Password='$pass',Address='$adds',Img='$file',Email='$email'";
					$query_us_exe=mysql_query($query_us);
					
					if($query_us_exe>0)
					{
						echo "<script>alert('Your Registration Successfully Completed')</script>";
						echo "<script>window.location.href='Registerlogin.php'</script>";
					}
					else
					{
						echo "<script>alert('Your Registration failed')</script>";
					}
					}
					?>
      </div>
      <!-- End Contact Form -->
    </div>
  </div>
</div>

<!-- End Contact Section -->

<!-- Start Footer Section -->
<?php include('footer.php');?>
<!-- End Copyright Section --->

</div>
<!-- /.container -->

<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
</div>
</body>
</html>