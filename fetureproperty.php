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
<title>Realestate | Featured Property</title>

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
    <!-- End Breadcrumb Section --> 
  
  <!-- Start Service Page -->
  <div class="row">
    <div class="col-md-12">
      <div class="welcome-text"> </div>
    </div
  >
  </div>
  <!-- End Service Page -->
  <label ></label>
  <!-- Start Featured Project Section -->
  <div class="row">
  <div class="col-md-12">
  <div class="project-sect+ion project-4-col">
  
  <!-- Start Portfolio items -->
  <ul id="portfolio-list" data-animated="fadeIn">
  <?php 
		$query_fp="select * from manageproperty";
       $query_fp_exe=mysql_query($query_fp);
while($data_fp=mysql_fetch_array($query_fp_exe))
{
?>

  <li>
  <div class="portfolio-item">
  <img src="Admin/img/<?php echo $data_fp['Image'];?>" class="img-responsive" alt="" style="height:210px"/>
  <div class="figure-caption">
  <h4><?php echo $data_fp["PropertyName"] ;?></h4>
  
  <button id="m1"  href="<?php echo $data_fp['id'] ;?>" onClick="open_container1(this.value);" name="pop">
  show details</button>
  </div>
 
 
  </div>
  </li>
 
  <?php
}
?>
 <script>
  function d()
  {
  var e=document.getElementByName("pop").value;
  }
  </script>
  </ul>
  
  <!-- End Portfolio items -->
  
  </div>
  </div>
  </div>

  <!-- End Featured Project Section --> 
  
  <!-- Start Project Details Section --> 
  <!-- Modal form-->
  <div class="modal fade" id="fModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
  <div class="modal-dialog ">
  <div class="modal-content">
  <div class="modal-header">
  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <h4 class="modal-title" id="myModalLabel1">Property Details:</h4>
</div>
<div class="modal-body" id="modal-bodyku1">

<?php 
$v=$_POST["e"];
	 $query_pp="select * from manageproperty where id='$v'";
       $query_pp_exe=mysql_query($query_pp);
$data_pp=mysql_fetch_array($query_pp_exe);

?>
<form role="form" id='formss' method="post">

 
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
    <!-- Indicators -->
    <ol class="carousel-indicators"> 
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    </ol>
    
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item-active"> <img src="Admin/img/<?php echo $data_pp['Image'];?>" class="img-responsive" alt=""> </div>
    </div>
    
    <!-- Controls --> 
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a> </div>
  <h4>Realestate</h4>
  <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
  <div class="col-md-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Full Specification:</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body no-padding">
        <table class="table">
          <tbody>
            <tr>
			
              <td><strong>Property Id:</strong></td>
              <td><?php echo $data_pp['propertyid'];?></td>
            </tr>
            <tr>
              <td><strong>Property Name :</strong></td>
              <td><?php echo $data_pp['PropertyName'];?></td>
            </tr>
            <tr>
              <td><strong>Property Location :</strong></td>
              <td><?php echo $data_pp['Location'];?></td>
            </tr>
            <tr>
              <td><strong>Property Manager :</strong></td>
              <td><?php echo $data_pp['PropertyName'];?></td>
            </tr>
            <tr>
              <td><strong>Start Date :</strong></td>
              <td><?php echo $data_pp['Date'];?></td>
            </tr>
            <tr>
              <td><strong>Approximate Finish Date :</strong></td>
              <td><span class="badge bg-red">55%</span></td>
            </tr>
            <tr>
              <td><strong>Area (sqr/ft)</strong></td>
              <td><?php echo $data_pp['Area'];?></td>
            </tr>
            <tr>
              <td><strong>Facilites</strong></td>
              <td><?php echo $data_pp['facilites'];?></td>
            </tr>
            <tr>
              <td><strong>Amenities</strong></td>
              <td><?php echo $data_pp['amenities'];?></td>
            </tr>
            <tr>
              <td><strong>Near By</strong></td>
              <td><?php echo $data_pp['nearby'];?></td>
            </tr>
			
          </tbody>
        </table>
      </div>
      <!-- /.box-body --> 
    </div>
    <!-- /.box --> 
    
    <!-- /.box --> 
  </div>
  </div>
</form>
<div class="modal-footer" id="modal-footerq1">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
</div>
<!-- end of modal ------------------------------> 
<!-- End Project Details Section --> 

<!-- Start Footer Section -->
<?php include('footer.php');?>
<!-- End Copyright Section --->

</div>
<!-- /.container --> 

<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a> 
<script>
	function open_container1(x)
        {
            var size='standart';
            var content = document.getElementById('formss').value;
    document.getElementById('t1').innerHTML=x;
		   var title = document.getElementById('myModalLabel1').value;
            var footer = document.getElementById('modal-footerq1').value;
            setModalBox(title,content,footer,size);
            $('#fModal').modal('show');
        }
        function setModalBox(title,content,footer,$size)
        {
             document.getElementById('modal-bodyku1').value;
            document.getElementById('myModalLabel1').value;
            document.getElementById('modal-footerq1').value;
       
            if($size == 'standart')
            {
                $('#fModal').attr('class', 'modal fade')
                             .attr('aria-labelledby','myModalLabel1');
                $('.modal-dialog').attr('class','modal-dialog');
            }
           
        }
        </script>
</body>
</html>