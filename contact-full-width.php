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
                    <h2>Contact</h2>
                    <div>
                        <ul class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Contact</li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Section -->
        
    
    <!-- Start Map Section -->
    <div class="row">
        <div class="col-md-12">
            <div class="default-page">
                
                <div><iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/search?q=Gandhi%20Nagar%2C%20Delhi%2C%20India&key=AIzaSyCxSLhYDsOuTbYZdqhhbHto0MfVFcH4yiU" allowfullscreen></iframe></div>
                
                <script>
                    (function ( $ ) {
                    $.fn.CustomMap = function( options ) {

                        var posLatitude = $('#map').data('position-latitude'),
                        posLongitude = $('#map').data('position-longitude');

                        var settings = $.extend({
                            home: { latitude: posLatitude, longitude: posLongitude },
                            icon_url: $('#map').data('marker-img'),	
                            zoom: 15
                        }, options );

                        var coords = new google.maps.LatLng(settings.home.latitude, settings.home.longitude);

                        return this.each(function() {	
                            var element = $(this);

                            var options = {
                                zoom: settings.zoom,
                                center: coords,
                                mapTypeId: google.maps.MapTypeId.ROADMAP,
                                mapTypeControl: false,
                                scaleControl: false,
                                streetViewControl: false,
                                panControl: true,
                                disableDefaultUI: true,
                                zoomControlOptions: {
                                    style: google.maps.ZoomControlStyle.DEFAULT
                                },
                                overviewMapControl: true,	
                            };

                            var map = new google.maps.Map(element[0], options);

                            var icon = { 
                                url: settings.icon_url, 
                                origin: new google.maps.Point(0, 0)
                            };

                            var marker = new google.maps.Marker({
                                position: coords,
                                map: map,
                                icon: icon,
                                draggable: false
                            });

                            var info = new google.maps.InfoWindow({
                                content: settings.text
                            });

                            google.maps.event.addListener(marker, 'click', function() { 
                                info.open(map, marker);
                            });

                            var styles = [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"on"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}];

                            map.setOptions({styles: styles});
                        });

                            };
                            }( jQuery ));

                            jQuery(document).ready(function() {
                                jQuery('#map').CustomMap();
                            });
                    </script>
                
            </div>
        </div>
    </div>
    <!-- End Map Section -->
        
    <!-- Start Contact Section -->
    <div class="row">
        <div class="col-md-8">
            <div class="contact-section">
                <h3 class="section-title">Contact with Us</h3>
                <!-- Start Contact Form -->
				<div id="contact-form" class="contatct-form">
					<div class="loader"></div>
					<form  method="post">
						<div class="row">
							<div class="col-md-4">
								<label for="name">Name<span class="required">*</span></label>
								<input id="name" name="name" type="text" value="" size="30" required />
							</div>
							<div class="col-md-4">
								<label for="e-mail">Email<span class="required">*</span></label>
								<input id="e-mail" name="email" type="text" value="" size="30" required>
							</div>
							<div class="col-md-4">
								<label for="url">Contact</label>
								<input id="" name="contact" type="text" value="" size="30">
	
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="message">Add Your Comment</label>
								<textarea id="message" name="message" cols="45" rows="10" required></textarea>
								<input type="submit" name="sub" class="btn btn-primary" value="Send Message">
							</div>
						</div>
					</form>
					<?php
					if(isset($_POST['sub']))
					{
						$name=$_POST['name'];
						$email=$_POST['email'];
						$contact=$_POST['contact'];
						$comment=$_POST['message'];
						
				
					$query_us="insert into managecontact set name='$name',email='$email',contact='$contact',query='$comment'";
					$query_us_exe=mysql_query($query_us);
					
					if($query_us_exe>0)
					{
						echo "<script>alert('Your Message Has Been Sent')</script>";
						echo "<script>window.location.href='contact-full-width.php'</script>";
					}
					else
					{
						echo "<script>alert('Your Message Sending failed')</script>";
					}
					}
					?>
				</div>
				<!-- End Contact Form -->
            </div>
        </div>
		</div>
        <div class="col-md-4">
            <div class="contact-section">
				
				<h3 class="section-title">Information</h3>
				
				<!-- Some Info -->
				<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
				
				<!-- Info - Icons List -->
				<ul class="icons-list">
					<li><i class="fa fa-globe">  </i> <strong>Address:</strong> 1234 Street Name, Bangladesh.</li>
					<li><i class="fa fa-envelope-o"></i> <strong>Email:</strong> info@yourcompany.com</li>
					<li><i class="fa fa-mobile"></i> <strong>Phone:</strong> +12 345 678 001</li>
				</ul>
				
				
				<h3 class="section-title">Working Hours</h3>
				
				<!-- Info - List -->
				<ul class="list-unstyled">
					<li><strong>Monday - Friday</strong> - 9am to 5pm</li>
					<li><strong>Saturday</strong> - 9am to 2pm</li>
					<li><strong>Sunday</strong> - Closed</li>
				</ul>
				
			</div>
        </div>
    
    <!-- End Contact Section -->
    
    
    
    <!-- Start Footer Section -->
   <?php include('footer.php');?>
    <!-- End Copyright Section --->

    
    
    </div><!-- /.container -->
    
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    </div>
</body>

</html>