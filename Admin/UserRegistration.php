<?php include('config.php'); 
if(isset($_GET['action']) && $_GET['action']=='delete')
{
	$var=$_GET['x'];
	$query_del="delete from useregister where id='$var'";
	$query_del_exe=mysql_query($query_del);
	header('location:UserRegistration.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<title>User Registration</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
<meta name="author" content="Lalit Dubey">

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
<?php include('header.php') ?>
<!-- topbar ends -->
<div class="ch-container">
<div class="row"> 
  
  <!-- left menu starts -->
  <?php include('left_menu.php') ?>
  <!--/span--> 
  <!-- left menu ends -->
  
  <noscript>
  <div class="alert alert-block col-md-12">
    <h4 class="alert-heading">Warning!</h4>
    <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
  </div>
  </noscript>
  <div id="content" class="col-lg-9 col-sm-9"> 
    <!-- content starts -->
    <div>
      <ul class="breadcrumb">
        <li> <a href="Dashboard.php">Home</a> </li>
        <li> <a href="">User Registraion</a> </li>
      </ul>
    </div>
    <div class="row">
      <div class="box col-md-12">
        <div class="box-inner">
          <div class="box-header well" data-original-title="">
            <h2><i class="glyphicon glyphicon-user"></i> Manage User Registraion</h2>
            <div class="box-icon"> <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a> <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a> <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a> </div>
          </div>
          <div class="box-content">
            <div class="alert alert-info">Current Display Property:</a> </div>
            <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
              <thead>
                <tr>
                  <th>S.N.</th>
                  <th>User Name:</th>
                  <th>Last Name:</th>
                  <th>Password:</th>
                  <th>Email:</th>
                  <th>Contact NO:</th>
                  <th>Address:</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
	$query="select * from useregister";
	$query_exe=mysql_query($query);
	
	$count=1;
	while($data=mysql_fetch_array($query_exe))
    {
		?>
                <tr>
                  <td><?php echo $count ?></td>
                  <td class="center"><?php echo $data['Name'];?></td>
                  <td class="center"><?php echo $data['LastName'];?></td>
                  <td class="center"><?php echo $data['Password'];?></td>
                  <td class="center"><?php echo $data['Email'];?></td>
                  <td class="center"><?php echo $data['ContactNo'];?></td>
                  <td class="center"><?php echo $data['Address'];?></td>
                  <td class="center"><img src="../img/userpic/<?php echo $data['Img'];?>" style="height:100px;width:100px"></td>
                  <td class="center"><a class="btn btn-success" href="#"> <i class="glyphicon glyphicon-search"></i> View </a> <a class="btn btn-danger" onclick="return del()" href="UserRegistration.php?x=<?php echo $data['id'];?> & action=delete"> <i class="glyphicon glyphicon-trash icon-white"></i> Delete </a></td>
                </tr>
                <?php 
	}
	?>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!--/span--> 
      
    </div>
    <!--/row--> 
    
    <!-- Ad ends -->
    
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
          <div class="modal-footer"> <a href="#" class="btn btn-default" data-dismiss="modal">Close</a> <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a> </div>
        </div>
      </div>
    </div>
  </div>
  <hr height="3px">
  <div class="ch-container">
    <?php include('footer.php'); ?>
  </div>
</div>
<!--/.fluid-container--> 

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
