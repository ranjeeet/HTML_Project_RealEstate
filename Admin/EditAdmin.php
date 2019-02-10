<?php include('config.php');
$var=$_GET['xzy'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
    <meta charset="utf-8">
    <title>Edit Admin profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>
    <!-- topbar starts -->
<?php include('header.php') ?>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
       <?php include('left_menu.php') ?>
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-9 col-sm-9">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="Dashboard.php">Home</a>
        </li>
        <li>
            <a href="AdminProfile.php">AdminProfile</a>
        </li>
    </ul>
</div>
            
            <form method="post" enctype="multipart/form-data">
<div class="row">
    <div class="box col-md-12">
	<div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-plus"></i> Edit Admin Profile Form:</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
        <div class="box-inner" style="padding:25px">
            
			
			<?php 
			$query="select * from admin where id='$var'";
			$query_exe=mysql_query($query);
			$data=mysql_fetch_array($query_exe);
			?>
   
                <div class="control-group">
                    <label class="control-label" for="selectError1">Admin Name</label>
                  <div class="input-group col-md-4">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="text" class="form-control" value="<?php echo $data["name"];?>" placeholder="Admin Name" name="adminname">
                </div>
                   
                </div>
				 <div class="control-group">
                    <label class="control-label" for="selectError1">Last Name</label>
                  <div class="input-group col-md-4">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="text" class="form-control" value="<?php echo $data["lastname"];?>" placeholder="Last Name" name="lastname">
                </div>
                   
                </div>
				 <div class="control-group">
                    <label class="control-label" for="selectError1">Password</label>
                  <div class="input-group col-md-4">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-fullscreen"></i></span>
                    <input type="text" class="form-control" value="<?php echo $data["passsword"];?>" placeholder="Password" name="pass">
                </div>
                   
                </div>
				<div class="control-group">
                    <label class="control-label" for="selectError1">Phone Number</label>
                  <div class="input-group col-md-4">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                    <input type="text" class="form-control" value="<?php echo $data["contact"];?>" placeholder="Contact No." name="contact">
                </div>
                   
                </div>
				<div class="control-group">
                    <label class="control-label" for="selectError1">E-mail Address</label>
                  <div class="input-group col-md-4">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input type="text" class="form-control" value="<?php echo $data["email"];?>" placeholder="Enter your E-mail" name="email">
                </div>
                   
                </div>
			
       
                <br>
				
				</div>
				
				
				</div>
              
<!--/row-->
<div class="ch-container">
<div class="row">
    <div class="box col-md-12">
	<div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-plus"></i> Admin Images</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
        <div class="box-inner" Style="padding:25px">
            
            <div class="box-content">

					Preview Image:<br>
					
					<img src="AdminProfilePic/<?php echo $data['photo'];?>" height="100" width="100"><br>
                     <br/>
                        <label for="exampleInputFile">Select Admin Image</label>
                        <input type="file" id="exampleInputFile" name="img">

                       
                    </div>
					Profile Picture Preview<br>
					
					<img src="../images/author.png" height="100" width="100"><br>
                     <a class="btn btn-danger" href="AdminProfile.php"><i class="glyphicon glyphicon-arrow-left"></i>&nbsp;&nbsp;Back</a>
                    <button type="submit" class="btn btn-success" name="save">Save changes</button>
					  
                

            </div>
        </div>
    </div>
	</div>
</div>
</div>
            </form>
            <?php 
            include('config.php');
            if(isset($_POST["save"]))
            {
                $name=$_POST["adminname"];
                $lastname=$_POST["lastname"];
                $pass=$_POST["pass"];
                $contact=$_POST["contact"];
                $email=$_POST["email"];
                $file=$_FILES["img"]["name"];    //is used ffor fetcch file name;
                $file_loc=$_FILES["img"]["tmp_name"];
                move_uploaded_file($file_loc, "AdminProfilePic/".$file);
				$date=date('y-m-d');
				date_default_timezone_set('Asia/kolkata');
				$time=date('H:i:s');
                
				if($file=="")
				{
					
					$imgs= $data['photo'];
					
				}
				else{
					$imgs=$file;
				}
				
                $query="update admin set name='$name',lastname='$lastname',passsword='$pass',contact='$contact',email='$email',photo='$imgs',Added_date='$date',Added_time='$time' where id='$var'";
                $data=mysql_query($query);//execute your query or f5
                        if($data>0)
                        {
                            echo "<script>alert('your profile Updated successful')</script>";
							header('location:AdminProfile.php');
							
                        }
 else {
     echo "<script>alert('your profile not submit successful')</script>";
 }
                
            }
            ?>
             <!--/span-->
            


   

    <hr>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>
	</div><!--/row-->
	</div>
<div class="ch-container">
<hr>
    <?php include('footer.php'); ?>
</div><!--/.fluid-container-->


<!-- external javascript -->

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='bower_components/moment/min/moment.min.js'></script>
<script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>


</body>
</html>

