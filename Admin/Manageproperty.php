<?php
include('config.php');
if(isset($_GET['action']) && $_GET['action']=="delete")
{
$var=$_GET['x'];
$query="delete from manageproperty where id='$var'";
$data=mysql_query($query);

header('location:Manageproperty.php');
}
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
    <title>Manage Property</title>
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
	<script>
function del()
{
	var c=confirm('Are You Sure To Delete This?');
	if(c==true)
	{
		return true;
	}
	else
	{
		return false;
	}
}
</script>

</head>

<body>
    <!-- topbar starts -->
    <?php include('header.php');?>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
       <?php include('left_menu.php');?>
        <!--/span-->
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
                / Manage Property
            </li>
        </ul>
    </div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i>Manage Property</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
	<div style="float:right"><a class="btn btn-success" href="AddNewProperty.php" style="height: 53px;">
                <i class="glyphicon glyphicon-plus-sign"></i>
                Add New Property
            </a></div>
    <div class="alert alert-info">Current Display Properties:</a></div>

    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
	
    <thead>
	
    <tr>
	
        <th>S.N</th>
        <th>Property Id</th>
        <th>Property Type</th>
        <th>Property Name</th>
        <th>Area</th>
		<th>Location</th>
		<th>Image</th>
		<th>Action</th>
    </tr>
    </thead>
    <tbody>
	<?php
	$query="select * from manageproperty";
	$query_exe=mysql_query($query);
	$count=1;
	while($data=mysql_fetch_array($query_exe))
	{
	
	?>
	
    <tr>
        <td><?php echo $count ?></td>
        <td class="center"><?php echo $data['propertyid'];?></td>
        <td class="center"><?php echo $data['PropertyType'];?></td>
        <td class="center"><?php echo $data['PropertyName'];?></td>
		 <td class="center"><?php echo $data['Area'];?></td>
		  <td class="center"><?php echo $data['Location'];?></td>
		   <td class="center"><img src="img/<?php echo $data['Image'];?>" height="100" width="100"/></td>
		 
        <td class="center">
           <!-- <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                View
            </a>-->
            <a class="btn btn-info" href="EditProperty.php?x=<?php echo $data['id'];?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
            <a class="btn btn-danger" onclick="return del()" href="Manageproperty.php?x=<?php echo $data['id'];?>&action=delete">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
            </a>
        </td>
    </tr>
	
	<?php
	$count++;
	}
	?>
   
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div><!--/row-->

        <!--/span-->

    </div><!--/row-->

   
    

    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->


<div class="ch-container">
    <hr>

  

      <?php include('footer.php');?>

</div>

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
