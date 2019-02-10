<?php include('config.php');?>

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
    <title>Add New Team Mamber</title>
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
            <a href="ManageTeam.php">Manage Team</a>
        </li>
		/ Add Team Mamber
    </ul>
</div>
            
            <form method="post" enctype="multipart/form-data">
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-plus"></i> Add New Team Mamber Form:</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
   <div style="padding:25px">
                <div class="control-group">
                    <label class="control-label" for="selectError1">Full Name</label>
                  <div class="input-group col-md-4">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="text" class="form-control" placeholder="Your Name" name="Tname">
                </div>
                   
                </div>
				<br/>
				Select Designation:
				  <div class="input-group col-md-4">
					   <select id="selectError" data-rel="chosen" name="Dname">
                            <option>-Select-</option>
							<?php 
							$addteam="select * from jobapplyfor";
							$addteam_exe=mysql_query($addteam);
							while($addteam_data=mysql_fetch_array($addteam_exe))
							{
						    ?>

                            <option value="<?php echo $addteam_data['JobName'];?>"><?php echo $addteam_data['JobName'];?></option>
                           <?php
							}
							?>
                        </select>
						</div>    
                <br>
				
				</div>
              
<!--/row-->
<div class="ch-container">
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-plus"></i> Team Mamber Images</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                
                   
                    <div class="form-group">
                        <label for="exampleInputFile">Select Mamber Image</label>
                        <input type="file" id="exampleInputFile" name="img">

                       
                    </div>
					Profile Picture Preview<br>
					
					<img src="../images/author.png" height="100" width="100"><br>
                     <a class="btn btn-danger" href="ManageTeam.php"><i class="glyphicon glyphicon-arrow-left"></i>&nbsp;&nbsp;Back</a>
                    <button type="submit" class="btn btn-success" name="save">Save</button>
					  
                

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
                $name=$_POST["Tname"];
                $Designation=$_POST["Dname"];
                $file=$_FILES["img"]["name"];    //is used for fetch file name;
                $file_loc=$_FILES["img"]["tmp_name"];
                move_uploaded_file($file_loc, "AdminProfilePic/".$file);
                
                $query="insert into manage_team set name='$name',designation='$Designation',image='$file'";
                $data=mysql_query($query);//execute your query or f5
                        if($data>0)
                        {
                            echo "<script>alert('Your Team Member Submit successful')</script>";
                        }
 else {
     echo "<script>alert('Your Team Member Not Submit successful')</script>";
 }
                
            }
            ?>
             <!--/span-->
            
</div>
</div><!--/row-->
</div>
    
<div class="ch-container">
<div>
<hr>
</div>
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

