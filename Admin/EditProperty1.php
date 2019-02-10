<?php
include('config.php');
$var=$_GET['x'];
?>

<!DOCTYPE html>

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
    <title>Edit Property</title>
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
            <a href="Deshboard.php">Home</a>
        </li>
        <li>
            <a href="Manageproperty.php">Manage Property</a>
        </li>
		/ Edit Property
    </ul>
</div>

<?php 
$query="select * from manageproperty where id='$var'";
$query_exe=mysql_query($query);
$data=mysql_fetch_array($query_exe);


?>
<form role="form" method="post" enctype="multipart/form-data">
<div class="row">
    <div class="box col-md-12">
	<div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-Edit"></i> Edit Property Details:</h2>

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
            
           
             <div class="box-content">
                <div class="control-group">
                    <label class="control-label" for="selectError1">Property Types</label><br>
                        <div class="input-group col-md-4">
					   <select id="selectError" data-rel="chosen" name="pt" value="<?php echo $data['PropertyType']; ?>">
                            <option><?php echo $data['PropertyType'];?></option>
							<?php 
							$property_type="select * from propertytype";
							$property_type_exe=mysql_query($property_type);
							while($property_data=mysql_fetch_array($property_type_exe))
							{
								?>
							
							
                            <option value="<?php echo $property_data['Name'];?>"><?php echo $property_data['Name'];?></option>
                           <?php
							}
							?>
                        </select>
						</div>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="selectError1">Property Name</label>
                  <div class="input-group col-md-4">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                    <input type="text" class="form-control" placeholder="" name="pn" value="<?php echo $data['PropertyName']; ?>">
                </div>
                   
                </div>
				 <div class="control-group">
                    <label class="control-label" for="selectError1">Property Area(sqt.ft.)</label>
                  <div class="input-group col-md-4">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-fullscreen"></i></span>
                    <input type="text" class="form-control" placeholder="" name="pa" value="<?php echo $data['Area']; ?>">
                </div>
                   
                </div>
				 <div class="control-group">
                    <label class="control-label" for="selectError1">Property Location</label>
                  <div class="input-group col-md-4">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
					
				 <!--	 <textarea class="form-control id="textarea"rows="3" cols="35" name="pl"><?php echo $data['Location']; ?></textarea>
                   <input type="text" class="form-control" placeholder="">-->
                </div>
                   
                </div>
       
                <br>
				<?php 
				$fac=explode(",",$data["facilites"]);
				?>

              <div class="control-group">
                    <label class="control-label" for="selectError1" >Facilities</label>
                <div class="checkbox">
				
				<?php 
                  if(in_array("Park",$fac))
				  {
                   ?>
			   <label>
                        <input type="checkbox" value="Park" name="fa[]" value="<?php echo $data['facilites']; ?>">
                       Park
                    </label>
					
					<?php 
				  }
				  else{
					  ?>
					 <label>
                        <input type="checkbox" value="Metro" name="fa[]" value="<?php echo $data['facilites'];?>">
                       Metro
                    </label>
					 <label>
                        <input type="checkbox" value="Parking" name="fa[]" value="<?php echo $data['facilites'];?>">
                       Parking
                    </label>
					 <label>
                        <input type="checkbox" value="Gym" name="fa[]" value="<?php echo $data['facilites'];?>">
                       Gym
                    </label>
                </div>
				
				</div>
                  <div class="control-group">
                    <label class="control-label" for="selectError1">Amenities</label>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="WoodWork" name="am[]" value="<?php echo $data['amenities'];?>">
                       Wood Work
                    </label>
					 <label>
                        <input type="checkbox" value="Sofa" name="am[]" value="<?php echo $data['amenities'];?>">
                       Sofa
                    </label>
					 <label>
                        <input type="checkbox" value="Kitchen" name="am[]" value="<?php echo $data['amenities'];?>">
                       Kitchen
                    </label>
					
                </div>
				
				</div>
				 <div class="box-content">
                <div class="control-group">
                    <label class="control-label" for="selectError1">Property Floor</label><br>
                        <div class="input-group col-md-4">
					   <select id="selectError" data-rel="chosen" name="floor" value="<?php echo $data['floor'];?>">
                            <option>-Select-</option>
                            <option>Ground</option>
                            <option>First</option>
                            <option>Second</option>
                            <option>Third</option>
                        </select>
						</div>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="selectError1">Near By</label>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="RailwayStation" name="nb[]" value="<?php echo $data['nearby'];?>">
                       Railway Station
                    </label>
					 <label>
                        <input type="checkbox" value="Metro" name="nb[]" value="<?php echo $data['nearby'];?>">
                       Metro
                    </label>
					 <label>
                        <input type="checkbox" value="Airport" name="nb[]" value="<?php echo $data['nearby'];?>">
                       Airport
                    </label>
					 <label>
                        <input type="checkbox" value="Hospital" name="nb[]" value="<?php echo $data['nearby'];?>">
                       Hospital
                    </label>
                </div>
				
				</div>
               
              
               <div class="control-group">
                    <label class="control-label" for="selectError1">Feature Property</label>
                <label class="radio-inline">
                    <input type="radio" name="fp" id="fp" value="yes">YES
                </label>
                <label class="radio-inline">
                    <input type="radio" name="fp" id="fp" value="no">NO
                </label>
                
    </div>
                

</div><!--/row-->

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
			
			
			
                <h2><i class="glyphicon glyphicon-plus"></i> Property Images</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
			  Perview Image
			<img  src="img\<?php echo $data['Image'];?>" " height="200px" width="200px" />
			<br>
			
            <div class="box-content">
                
                   
                    <div class="form-group">
                        <label for="exampleInputFile">Select Property Image</label>
                        <input type="file" id="exampleInputFile" name="newimg">

                       
                    </div>
                     <a class="btn btn-danger" href="ManageProperty.php"><i class="glyphicon glyphicon-arrow-left"></i>&nbsp;&nbsp;Back</a>
                    <button type="submit" class="btn btn-success" name="save">Save This Property</button>
					  
            </div>
        </div>
    </div>
</div><!--/row-->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->
</form>

<?php
if(isset($_POST["save"]))
{
$property_type=$_POST["pt"];
$property_name=$_POST["pn"];
$property_Area=$_POST["pa"];
$property_Location=$_POST["pl"];
$property_fac=$_POST["fa"];
$property_Facilities=implode(",",$property_fac);
$property_Amen=$_POST["am"];
$property_Amenities=implode(",",$property_Amen);
$property_floor=$_POST["floor"];
$property_ner=$_POST["nb"];
$property_near_by=implode(",",$property_ner);
$property_feture=$_POST["fp"];
$property_img_name=$_FILES["newimg"]["name"];
$property_img_loc=$_FILES["newimg"]["tmp_name"];
move_uploaded_file($property_img_loc,"img/".$property_img_name);
  $property_insert="update manageproperty set PropertyType='$property_type',PropertyName='$property_name',Area='$property_Area',Location='$property_Location',facilites='$property_Facilities',amenities='$property_Amenities',floor='$property_floor',nearby='$property_near_by',featureproperty='$property_feture',image='$property_img_name'";
$propety_exe=mysql_query($property_insert);
if($propety_exe>0)
{
	echo "<script>alert('Property Edit Successfully')</script>";
}
else
{
	echo "<script>alert('Property Not Edit Successfully')</script>";
}

}
?>
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
	</div>
<div class="ch-container">
     <?php include('footer.php'); ?>
</div>

<!--/.fluid-container-->
</div>
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