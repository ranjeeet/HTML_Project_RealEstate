<?php
include('config.php');
$var=$_GET["x"]; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Edit New Property</title>
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
<?php include('header.php');?>
<!-- topbar ends -->
<div class="ch-container">
  <div class="row">
    <form method="post" enctype="multipart/form-data">
      
      <!-- left menu starts -->
      <?php include('left_menu.php');?>
      <!--/span--> 
      <!-- left menu ends -->
      
      <noscript>
      <div class="alert alert-block col-md-12">
        <h4 class="alert-heading">Warning!</h4>
        <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
      </div>
      </noscript>
      <div id="content" class="col-lg-9 col-sm-9"><!-- content starts -->
        <div>
          <ul class="breadcrumb">
            <li> <a href="Dashboard.php">Home</a> </li>
            <li> <a href="ManageProperty.php">Manage Property</a> </li>
          </ul>
        </div>
        <?php
$query_pro="select * from manageproperty where id='$var'";
$query_pro_exe=mysql_query($query_pro);
$pro_data=mysql_fetch_array($query_pro_exe);
?>
        <div class="row">
          <div class="box col-md-12">
            <div class="box-inner">
              <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i>Edit Property Details</h2>
                <div class="box-icon"> <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a> <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a> <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a> </div>
              </div>
              <div class="box-content">
                <div class="control-group">
                  <label class="control-label" for="selectError1" >Property Types</label>
                  <br>
                  <div class="input-group col-md-4">
                    <select id="selectError" data-rel="chosen" name="Type">
                      <option><?php echo $pro_data["PropertyType"];?></option>
                      <?php
							$Type="select * from propertytype";
							$Type_exe = mysql_query($Type);
							while($Data=mysql_fetch_array($Type_exe))
							{
								?>
                      <option value="<?php echo $Data["Name"];?>"><?php echo $Data["Name"];?></option>
                      <?php
							}
							?>
                    </select>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label" for="selectError1" >Property Name</label>
                  <div class="input-group col-md-4"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                    <input type="text" class="form-control" placeholder="" name="Name" value="<?php echo $pro_data["PropertyName"];?>">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label" for="selectError1" >Property Area(sqt.ft.)</label>
                  <div class="input-group col-md-4"> <span class="input-group-addon"><i class="glyphicon glyphicon-fullscreen"></i></span>
                    <input type="text" class="form-control" placeholder="" name="Area" value="<?php echo $pro_data["Area"];?>">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label" for="selectError1" >Property Location</label>
                  <div class="input-group col-md-4"> <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                    <textarea rows="3" cols="25" name="Location" class="form-control">
					<?php echo $pro_data["Location"];?>
					</textarea>
                    <!-- <input type="text" class="form-control" placeholder="">--> 
                  </div>
                </div>
                <br>
                <?php
$fac=explode(",",$pro_data["facilites"]);
?>
                <div class="control-group">
                  <label class="control-label" for="selectError1" name="Fa[]" >Facilities</label>
                  <div class="checkbox">
                    <?php 
				if(in_array("Park",$fac))
				{
					?>
                    <label>
                      <input type="checkbox" value="Park" name="Fa[]" checked>
                      Park </label>
                    <?php 
				} 
				
				else
				{
					?>
                    <label>
                      <input type="checkbox" value="Park" name="Fa[]" >
                      Park </label>
                    <?php }
				?>
                    <?php 
				if(in_array("Metro",$fac))
				{
					?>
                    <label>
                      <input type="checkbox" value="Metro" name="Fa[]" checked>
                      Metro </label>
                    <?php 
				} 
				
				else
				{
					?>
                    <label>
                      <input type="checkbox" value="Metro" name="Fa[]" >
                      Metro </label>
                    <?php 
				}
				 ?>
                    <?php 
				if(in_array("Parking",$fac))
				{
					?>
                    <label>
                      <input type="checkbox" value="Parking" name="Fa[]">
                      Parking </label>
                    <?php 
				} 
				
				else
				{
					?>
                    <label>
                      <input type="checkbox" value="Parking" name="Fa[]">
                      Parking </label>
                    <?php }
				?>
                    <?php 
				if(in_array("Gym",$fac))
				{
					?>
                    <label>
                      <input type="checkbox" value="Gym" name="Fa[]" checked>
                      Gym </label>
                    <?php 
				} 
				
				else
				{
					?>
                    <label>
                      <input type="checkbox" value="Gym" name="Fa[]" >
                      Gym </label>
                    <?php
				}
				?>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label" for="selectError1" >Amenities</label>
                  <div class="checkbox">
                    <?php
				$am=explode(",",$pro_data["amenities"]);
				
				if(in_array("WoodWork",$am))
				{
					?>
                    <label>
                      <input type="checkbox" value="WoodWork" name="Am[]" checked>
                      Wood Work </label>
                    <?php
					} 
					else
					{
					?>
                    <label>
                      <input type="checkbox" value="WoodWork" name="Am[]" >
                      Wood Work </label>
                    <?php 
					}
					if(in_array("Sofa",$am)){
					?>
                    <label>
                      <input type="checkbox" value="Sofa" name="Am[]" checked>
                      Sofa </label>
                    <?php
					
				}
				else
				{
                     ?>
                    <label>
                      <input type="checkbox" value="Sofa" name="Am[]" >
                      Sofa </label>
                    <?php }
                 if(in_array("Kitchen",$am)){
				?>
                    <label>
                      <input type="checkbox" value="Kitchen" name="Am[]" checked >
                      Kitchen </label>
                    <?php }
                     else{
				 ?>
                    <label>
                      <input type="checkbox" value="Kitchen" name="Am[]" >
                      Kitchen </label>
                    <?php
			}
				?>
                  </div>
                </div>
                <div class="box-content">
                  <div class="control-group">
                    <label class="control-label" for="selectError1" >Property Floor</label>
                    <br>
                    <div class="input-group col-md-4">
                      <select id="selectError" data-rel="chosen" name="Floor" >
                        <option><?php echo $pro_data["floor"];?></option>
                        <option name="Basement">Basement</option>
                        <option name="GroundFloor">Ground Floor</option>
                        <option name="1">1</option>
                        <option name="2">2</option>
                        <option name="3">3</option>
                        <option name="4">4</option>
                        <option name="5">5</option>
                        <option name="6">6</option>
                        <option name="7">7</option>
                        <option name="8">8</option>
                        <option name="9">9</option>
                        <option name="10">10</option>
                        <option name="Roof">Roof</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label" for="selectError1" name="Near[]">Near By</label>
                  <div class="checkbox">
                    <?php 
				$nb=explode(",",$pro_data["nearby"]);
				if(in_array("RailwayStation",$nb))
				{
					?>
                    <label>
                      <input type="checkbox" value="RailwayStation" name="Near[]" checked>
                      Railway Station </label>
                    <?php 
				}
				else
				{
					?>
                    <label>
                      <input type="checkbox" value="RailwayStation" name="Near[]">
                      Railway Station </label>
                    <?php 
				}
				if(in_array("Metro",$nb))
				{
				?>
                    <label>
                      <input type="checkbox" value="Metro" name="Near[]" checked>
                      Metro </label>
                    <?php
				}
				else
				{
					?>
                    <label>
                      <input type="checkbox" value="Metro" name="Near[]">
                      Metro </label>
                    <?php
				}
				if(in_array("Airport",$nb))
				{
					?>
                    <label>
                      <input type="checkbox" value="Airport" name="Near[]" checked>
                      Airport </label>
                    <?php
				}
				else		
				{
					?>
                    <label>
                      <input type="checkbox" value="Airport" name="Near[]">
                      Airport </label>
                    <?php
				}
				if(in_array("Hospital",$nb))
				{
?>
                    <label>
                      <input type="checkbox" value="Hospital" name="Near[]" checked>
                      Hospital </label>
                    <?php
				}
				else
				{
					?>
                    <label>
                      <input type="checkbox" value="Hospital" name="Near[]">
                      Hospital </label>
                    <?php
				}
				?>
                  </div>
                </div>
                <?php
$fp=$pro_data["featureproperty"];			  
			  ?>
                <div class="control-group">
                  <label class="control-label" for="selectError1" name="FeatureProperty">Feature Property</label>
                  <label class="radio-inline">
                    <?php
				if($fp=="yes")
				{
				?>
                    <input type="radio" name="fp" id="fp" value="yes" checked >
                    YES
                    <?php 
				} 
				else
				{
				?>
                    <input type="radio" name="fp" id="fp" value="yes"  >
                    YES
                    <?php }
				?>
                  </label>
                  <label class="radio-inline">
                    <?php
				if($fp=="no")
				{
				?>
                    <input type="radio" name="fp" id="fp" value="no" checked>
                    NO
                    <?php 
				} 
				else
				{
				?>
                    <input type="radio" name="fp" id="fp" value="no">
                    NO
                    <?php
				}
				 ?>
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/row-->
        
        <div class="row">
          <div class="box col-md-12">
            <div class="box-inner">
              <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i>Edit Property Images</h2>
                <div class="box-icon"> <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a> <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a> <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a> </div>
              </div>
              <div class="box-content">
                <div class="form-group"> Preview Image <br>
                  <img src="img/<?php echo $pro_data['Image'];?>" height="200px" width="200px"> <br>
                  <label for="exampleInputFile" >Select Property Image</label>
                  <input type="file" id="exampleInputFile" name="image">
                </div>
                <a class="btn btn-danger" href="ManageProperty.php"><i class="glyphicon glyphicon-arrow-left"></i>&nbsp;&nbsp;Back</a>
                <button type="submit" class="btn btn-success" name="SaveThisProperty">Save This Property</button>
              </div>
            </div>
          </div>
          <!--/span--> 
          
        </div>
        <!--/row--> 
      </div>
      <!-- content ends -->
      
    </form>
  </div>
  <!--/#content.col-md-0--> 
</div>
<!--/fluid-row-->
<?php
include('config.php');
	if(isset($_POST["SaveThisProperty"]))
	{
		$type=$_POST["Type"];
		$name=$_POST["Name"];
		$area=$_POST["Area"];
		$location=$_POST["Location"];
		$facilities=Implode(",",$_POST["Fa"]);
		$amenities=Implode(",",$_POST["Am"]);
		$floor=$_POST["Floor"];
		$nearby=Implode(",",$_POST["Near"]);
		$featuredproperty=$_POST["fp"];
		$image=$_FILES["image"]["name"];
		$image_loc=$_FILES["image"]["tmp_name"];
		move_uploaded_file($image_loc,"img/".$image);
		$date=date('y-m-d');
		if($image=="")
		{
			$imgs= $pro_data['Image'];
		}
		else
		{
			$imgs=$image;
		}
		
		echo $query="update manageproperty set PropertyType='$type',PropertyName='$name', Area='$area', Location='$location',facilites='$facilities',amenities='$amenities',floor='$floor',nearby='$nearby',featureproperty='$featuredproperty',Image='$imgs',Date='$date' where id='$var'";
		$data= mysql_query($query);
		if($data>0)
		{
			echo "<script>alert('Successfully Submit')</script>";
			header('location:ManageProperty.php');
		}
		else{
			echo"<script>alert('Not Successfully Submit')</script>";
		}
	}
?>
<div class="ch-container">
  <hr>
  <?php
	include('footer.php');
	?>
</div>
</div>
<!--/.fluid-container-->
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