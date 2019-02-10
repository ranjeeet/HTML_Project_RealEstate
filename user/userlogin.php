<?php
error_reporting(0);
include('../config.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <title>User Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Lalit Dubey">

    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
    <link href='../admin/bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='../admin/bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='../admin/bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='../admin/bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='../admin/bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='../admin/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='../admin/css/jquery.noty.css' rel='stylesheet'>
    <link href='../admin/css/noty_theme_default.css' rel='stylesheet'>
    <link href='../admin/css/elfinder.min.css' rel='stylesheet'>
    <link href='../admin/css/elfinder.theme.css' rel='stylesheet'>
    <link href='../admin/css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='../admin/css/uploadify.css' rel='stylesheet'>
    <link href='../admin/css/animate.min.css' rel='stylesheet'>
    <link href="../admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="../admin/bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <style type="text/css">
        
        .hi{
            background-image:url(img/bg.jpg);
           background-attachment: fixed;
           min-height: 667px;
           margin-top: 0px;
           margin-bottom: 0px;
		   width: 100%;
        }
    </style>

</head>

<body>
<body>
<form method="post" action="action" enctype="multipart/form-data">
 <div class="modal fade" id="lostpass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H4">Enter Your Register Email</h4>
                                        </div>
                                        <div class="modal-body">
                                           
                                        <div class="form-group">
                                            <label></label>
                                            <input class="form-control" name="t" />
                                            <p class="help-block"></p>
                                        </div>
                                       <!-- <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" />
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                       <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" />
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Retype Password</label>
                                            <input class="form-control" />
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>-->
                                       
                                   
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" name="action"  class="btn btn-primary">OK</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
							</form>
                            					<?php
							if(isset($_POST["action"]))
							{
								$em=$_POST["t"];
								$sub="Your Lost Password";
							    $query_email="select * from useregister where Email='$em'";
								$query_email_exe=mysql_query($query_email);
								$query_row=mysql_num_rows($query_email_exe);
								$query_email_read=mysql_fetch_array($query_email_exe);
								$lost_pass=$query_email_read["passsword"];
								$body="Your Password is:$lost_pass";
								$body1="http://localhost/Xperia%20Project/Batch_11_To_1/Admin/resetpassword.php?email=$em";
								if($query_row>0)
								{
									mail($em,$sub,$body1);
									echo "<script>alert('Please Check Your Mail')</script>";
								}
								else
								{
									echo "<script>alert('Wrong Email Id')</script>";
								}
								
							}
							?>
    <div class="col-lg-12 hi">
<div class="ch-container">
    <div class="row">
        
    <div class="row">
        <div class="col-md-12 center login-header">
            <h2 style="color:rgba(51,153,153,0.9)">Welcome To User Panel</h2>
        </div>
        <!--/span-->
    </div><!--/row-->

    <div class="row">
        <div class="well col-md-5 center login-box" style="background-color:rgba(51,153,153,0.6)">
            <div class="alert alert-info">
                Please login with your E-Mail and Password.
            </div>
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <fieldset>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input type="text" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="clearfix"></div><br>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                        <input type="password" class="form-control" name="pass" placeholder="Password" required>
                    </div>
                    <div class="clearfix"></div>

                    <div class="input-prepend">
                        <label class="remember" for="remember"><input type="checkbox" id="remember"> Remember me</label>
                    </div>
                    <div class="clearfix"></div>

                    <p class="center col-md-5">
                        <button type="submit" class="btn btn-primary" name="login">Login</button>
                    </p>
                </fieldset>
                
                <a href="../UserRegister.php">Create New Account?</a>
                
				<button class="btn btn-warning" data-toggle="modal"  data-target="#lostpass">
                               Forgot Password?
                            </button>
            </form>
			<?php
			if(isset($_POST['login']))
			{
				$email=$_POST["email"];
				$pass=$_POST["pass"];
				
			  $query="select *from useregister where Email='$email' and Password='$pass'";
				$query_exe=mysql_query($query);
				$row=mysql_fetch_array($query_exe);
			if($row>0)
			{
				$_SESSION["x"]=$row["Email"];//store name into session variable xml_error_string
				$_SESSION["img"]=$row["Img"];//store image into session variable img
					echo "<script>window.location.href='Dashboard.php'</script>";
				}
				else
				{
					echo "<script> alert('Worng Email Or Password')</script>";
				}
			}
			?>
        </div>
        <!--/span-->
    </div><!--/row-->
</div><!--/fluid-row-->

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="../admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='../admin/bower_components/moment/min/moment.min.js'></script>
<script src='../admin/bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='../admin/js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="../admin/bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="../admin/bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="../admin/js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="../admin/bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="../admin/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="../admin/js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="../admin/js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="../admin/js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="../admin/js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="../admin/js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="../admin/js/charisma.js"></script>

    </div>
</body>
</html>
