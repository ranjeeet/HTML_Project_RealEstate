<?php
include('../admin/config.php');
$paypal_url='https://www.sandbox.paypal.com/cgi-bin/webscr'; // Test Paypal API URL
$paypal_id='ganesh_merchant@gmail.com'; // Business email ID
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
<title>Add New Property</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
<meta name="author" content="Muhammad Usman">

<!-- The styles -->
<link id="bs-css" href="../admin/css/bootstrap-cerulean.min.css" rel="stylesheet">
<link href="../admin/css/charisma-app.css" rel="stylesheet">
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
<link href="../css/bootstrap.min.css" rel="stylesheet">

<!-- jQuery -->
<script src="../admin/bower_components/jquery/jquery.min.js"></script>
<link rel="shortcut icon" href="img/favicon.ico">
<style type="text/css">
.stepwizard-step p {
	margin-top: 10px;
}
.stepwizard-row {
	display: table-row;
}
.stepwizard {
	display: table;
	width: 100%;
	position: relative;
}
.stepwizard-step button[disabled] {
	opacity: 1 !important;
	filter: alpha(opacity=100) !important;
}
.stepwizard-row:before {
	top: 14px;
	bottom: 0;
	position: absolute;
	content: " ";
	width: 100%;
	height: 1px;
	background-color: #ccc;
	z-order: 0;
	margin-left: -100%
}
.stepwizard-step {
	display: table-cell;
	text-align: center;
	position: relative;
}
.btn-circle {
	width: 30px;
	height: 30px;
	text-align: center;
	padding: 6px 0;
	font-size: 12px;
	line-height: 1.428571429;
	border-radius: 15px;
	margin-left: 45%;
}
</style>
</head>

<body>
<div style="position: fixed; width: 100%; z-index: 1;">
<?php include('header.php') ?>
<!-- topbar ends -->
</div>
<div class="ch-container">
  <div class="row"> 
    <!-- left menu starts -->
    <div style="margin-top:80px">
    <?php include('left_menu.php') ?>
    <div>
    <div id="content" class="col-lg-9 col-sm-9">
      <div class="container" style="
    width: 100%;
">
        <div class="stepwizard" >
          <div class="stepwizard-row setup-panel">
            <div class="col-xs-4"> <a href="#step-1" type="button" class="btn btn-primary btn-circle center">1</a>
              <p class="center">Property Detail</p>
            </div>
            <div class="col-xs-4"> <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
              <p class="center">Payment Detail</p>
            </div>
            <div class="col-xs-4"> <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
              <p class="center">Receipt</p>
            </div>
          </div>
        </div>
      </div>
      <form role="form" action="<?php echo $paypal_url ?>" method="post" name="frmPayPal1" target="_blank">
        <div class="row setup-content" id="step-1">
          <div class="col-sm-6">
            <div class="col-md-12"  >
              <h3> Enter Your Property Details:</h3>
              <div class="form-group">
                <label class="control-label" for="selectError1">Property Name</label>
                <input type="text" class="form-control" required placeholder="" name="pn">
              </div>
              <div class="form-group">
                <label class="control-label" for="selectError1">Property Types</label>
                <br>
                <select id="selectError" data-rel="chosen" name="pt" class="form-control">
                  <option>-Select-</option>
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
              <div class="form-group">
                <label class="control-label" for="selectError1">Property Area(sqt.ft.)</label>
                <input type="text" class="form-control" placeholder="" name="pa">
              </div>
              <div class="form-group">
                <label class="control-label" for="selectError1">Property Location</label>
                <textarea class="form-control id="textarea"rows="3" cols="35" name="pl"></textarea>
              </div>
              <div class="form-group">
                <label class="control-label" for="selectError1" >Facilities</label>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="Park" name="fa[]">
                    Park </label>
                  <label>
                    <input type="checkbox" value="Metro" name="fa[]">
                    Metro </label>
                  <label>
                    <input type="checkbox" value="Parking" name="fa[]">
                    Parking </label>
                  <label>
                    <input type="checkbox" value="Gym" name="fa[]">
                    Gym </label>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label" for="selectError1">Amenities</label>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="WoodWork" name="am[]">
                    Wood Work </label>
                  <label>
                    <input type="checkbox" value="Sofa" name="am[]">
                    Sofa </label>
                  <label>
                    <input type="checkbox" value="Kitchen" name="am[]">
                    Kitchen </label>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label" for="selectError1">Property Floor</label>
                <br>
                <div class="input-group col-md-4">
                  <select id="selectError" data-rel="chosen" name="floor">
                    <option>-Select-</option>
                    <option>Ground</option>
                    <option>First</option>
                    <option>Second</option>
                    <option>Third</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label" for="selectError1">Near By</label>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="RailwayStation" name="nb[]">
                    Railway Station </label>
                  <label>
                    <input type="checkbox" value="Metro" name="nb[]">
                    Metro </label>
                  <label>
                    <input type="checkbox" value="Airport" name="nb[]">
                    Airport </label>
                  <label>
                    <input type="checkbox" value="Hospital" name="nb[]">
                    Hospital </label>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label" for="selectError1">Feature Property</label>
                <label class="radio-inline">
                  <input type="radio" name="fp" id="fp" value="yes">
                  YES </label>
                <label class="radio-inline">
                  <input type="radio" name="fp" id="fp" value="no">
                  NO </label>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Select Property Image</label>
                <input type="file" id="exampleInputFile"  name="newimg">
              </div>
              <div class="form-group"> <a class="btn btn-danger" href="ManageProperty.php"><i class="glyphicon glyphicon-arrow-left"></i>&nbsp;&nbsp;Back</a>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row setup-content" id="step-2">
          <div class="col-xs-6 center">
            <div class="col-md-12">
              <h3> Payment Detail:</h3>
              <h4>Welcome, Guest</h4>
              <div class="product">
                <div class="image"> <img src="http://www.phpgang.com/wp-content/uploads/gang.jpg" /> </div>
                <div class="name"> PHPGang Payment </div>
                <div class="price"> Enter Amount(USD): </div>
                <div>
                  <input type="hidden" name="business" value="<?php echo $paypal_id ?>">
                  <input type="hidden" name="cmd" value="_xclick">
                  <input type="hidden" name="item_name" value="Item List">
                  <input type="hidden" name="item_number" value="4">
                  <!-- <input type="hidden" name="credits" value="510">-->
                  <input type="hidden" name="userid" value="1">
                  <input type="text" name="amount">
                  <input type="heddin" name="cpp_header_image" value="http://localhost/Reference%20Notes/payment_with_paypal/payment_with_paypal/BridgeEcommerce1.jpg">
                  <input type="hidden" name="currency_code" value="USD">
                  <input type="hidden" name="handling" value="0">
                  <input type="hidden" name="cancel_return" value="http://localhost/RealEstate/user/cancel.php">
                  <input type="hidden" name="return" value="http://localhost/RealEstate/user/success.php">
                  <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                  <img alt="" hidden="true" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1"> </div>
              </div>
              <?php
$title = "PayPal Payment in PHP";
$heading = "Welcome to PayPal Payment PHP example.";
//include('html.inc');
?>
              <div class="form-group">
                <label class="control-label">Company Name</label>
                <input maxlength="200" type="text" required class="form-control" placeholder="Enter Company Name" />
              </div>
              <div class="form-group">
                <label class="control-label">Company Address</label>
                <input maxlength="200" type="text" required class="form-control" placeholder="Enter Company Address"  />
              </div>
              <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
          </div>
        </div>
        <div class="row setup-content" id="step-3">
          <div class="col-xs-12">
            <div class="col-md-12">
              <h3> Receipt</h3>
              <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3" style="width:100%;margin-left:0px">
                <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                    <strong>Elf Cafe</strong> <br>
                    2135 Sunset Blvd <br>
                    Los Angeles, CA 90026 <br>
                    <abbr title="Phone">P:</abbr> (213) 484-6829
                    </address>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p> <em>Date: 1st November, 2013</em> </p>
                    <p> <em>Receipt #: 34522677W</em> </p>
                  </div>
                </div>
                <div class="row">
                  <div class="text-center">
                    <h1>Receipt</h1>
                  </div>
                  </span>
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Product</th>
                        <th>#</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="col-md-9"><em>Baked Rodopa Sheep Feta</em>
                          </h4></td>
                        <td class="col-md-1" style="text-align: center"> 2 </td>
                        <td class="col-md-1 text-center">$13</td>
                        <td class="col-md-1 text-center">$26</td>
                      </tr>
                      <tr>
                        <td class="col-md-9"><em>Lebanese Cabbage Salad</em>
                          </h4></td>
                        <td class="col-md-1" style="text-align: center"> 1 </td>
                        <td class="col-md-1 text-center">$8</td>
                        <td class="col-md-1 text-center">$8</td>
                      </tr>
                      <tr>
                        <td class="col-md-9"><em>Baked Tart with Thyme and Garlic</em>
                          </h4></td>
                        <td class="col-md-1" style="text-align: center"> 3 </td>
                        <td class="col-md-1 text-center">$16</td>
                        <td class="col-md-1 text-center">$48</td>
                      </tr>
                      <tr>
                        <td>   </td>
                        <td>   </td>
                        <td class="text-right"><p> <strong>Subtotal: </strong> </p>
                          <p> <strong>Tax: </strong> </p></td>
                        <td class="text-center"><p> <strong>$6.94</strong> </p>
                          <p> <strong>$6.94</strong> </p></td>
                      </tr>
                      <tr>
                        <td>   </td>
                        <td>   </td>
                        <td class="text-right"><h4><strong>Total: </strong></h4></td>
                        <td class="text-center text-danger"><h4><strong>$31.53</strong></h4></td>
                      </tr>
                    </tbody>
                  </table>
                  <button type="button" class="btn btn-success btn-lg btn-block"> Pay Now   <span class="glyphicon glyphicon-chevron-right"></span> </button>
                  </td>
                </div>
              </div>
            </div>
            <button class="btn btn-success btn-lg pull-right" type="submit">Submit</button>
          </div>
        </div>
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
$date=date('y-m-d');
 echo $property_insert="insert into manageproperty set PropertyType='$property_type',PropertyName='$property_name',Area='$property_Area',Location='$property_Location',facilites='$property_Facilities',amenities='$property_Amenities',floor='$property_floor',nearby='$property_near_by',featureproperty='$property_feture',image='$property_img_name',Date='$date'";
$propety_exe=mysql_query($property_insert);
if($propety_exe>0)
{
	echo "<script>alert('Property Added Successfully')</script>";
}
else
{
	echo "<script>alert('Property Not Added Successfully')</script>";
}

}
?>
    </div>
  </div>
  
  <!-- left menu ends -->
  <div class="ch-container">
    <?php include('footer.php'); ?>
  </div>
</div>

<!-- external javascript --> 

<script src="../admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script> 

<!-- library for cookie management --> 
<script src="../admin/js/jquery.cookie.js"></script> 
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
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script> 
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> 
<script type="text/javascript">
  $(document).ready(function () {
  var navListItems = $('div.setup-panel div a'),
          allWells = $('.setup-content'),
          allNextBtn = $('.nextBtn');

  allWells.hide();

  navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
              $item = $(this);

      if (!$item.hasClass('disabled')) {
          navListItems.removeClass('btn-primary').addClass('btn-default');
          $item.addClass('btn-primary');
          allWells.hide();
          $target.show();
          $target.find('input:eq(0)').focus();
      }
  });

  allNextBtn.click(function(){
      var curStep = $(this).closest(".setup-content"),
          curStepBtn = curStep.attr("id"),
          nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
          curInputs = curStep.find("input[type='text'],input[type='url']"),
          isValid = true;

      $(".form-group").removeClass("has-error");
      for(var i=0; i<curInputs.length; i++){
          if (!curInputs[i].validity.valid){
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
          }
      }

      if (isValid)
          nextStepWizard.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel div a.btn-primary').trigger('click');
});
  </script>
  
</body>
</html>
