<html>
<head>
 <!--<style>
      .example-modal .modal {
        position: relative;
        top: auto;
        bottom: auto;
        right: auto;
        left: auto;
        display: block;
        z-index: 1;
      }
      .example-modal .modal {
        background: transparent!important;
      }
    </style>-->
</head>  
<body>
  <div class="colors-switcher">
            <a id="show-panel" class="hide-panel"><i class="fa fa-tint"></i></a>        
                <ul class="colors-list">
                    <li><a title="Light Red" onClick="setActiveStyleSheet('light-red'); return false;" class="light-red"></a></li>
                    <li><a title="Blue" class="blue" onClick="setActiveStyleSheet('blue'); return false;"></a></li>
                    <li class="no-margin"><a title="Light Blue" onClick="setActiveStyleSheet('light-blue'); return false;" class="light-blue"></a></li>
                    <li><a title="Green" class="green" onClick="setActiveStyleSheet('green'); return false;"></a></li>
                    
                    <li class="no-margin"><a title="Black" class="black" onClick="setActiveStyleSheet('black'); return false;"></a></li>
                    <li><a title="Yellow" class="yellow" onClick="setActiveStyleSheet('yellow'); return false;"></a></li>
                    
                </ul>

        </div>  
	
 <!-- Start Loader -->   
<div id="loader">
    <div class="spinner">
        <div class="dot1"></div>
        <div class="dot2"></div>
    </div>
</div>
<!-- End Loader -->
		
 <div class="header-section" style="
    margin-bottom:0px">
       <div class="col-md-5" style="float:left">
                <div class="logo-img">
                    <a href="#"><img src="images/best-Real-Estate-Logo-For-Blogger.jpg" class="img-responsive" alt="" style="
  height: 160px;
  width: 300px;"
></a>
                </div>
             </div>
 <div  style="float:right" >
                <div class="row">
                    <div class="col-md-12">
                    <a class="btn btn-primary btn-lg" href="user/userlogin.php">User Login</a>
					<a class="btn btn-primary btn-lg" href="UserRegister.php">Register</a>
                    <button type="button" class="btn btn-primary btn-lg" onClick="open_container();" > Enquery</button>
				   
				   
                    </div>
                </div>
                <!-- Modal form-->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog ">
                    <div class="modal-content">
                      <div class="modal-header">
					  Enquery Form:
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel"></h4>
                      </div>
                      <div class="modal-body" id="modal-bodyku">
                          
                     <form role="form"  method="post">
                              <div class="form-group">
                                  <label for="exampleInputEmail1"><span style="font-color:black">Full Name<span></label>
                                  <input type="text" class="form-control" id="forms" placeholder="Enter Name" name="name">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1"><span style="color:black;">Contact<span></label>
                                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Contact Number" name="contact">
                              </div>
                              <div class="form-group">
                                   <label for="exampleInputEmail1"><span style="color:black;">Email Address:<span></label>
                                  <input type="email" class="form-control" id="forms" placeholder="Enter Your Email" name="mail">
                              </div>
							  <label><span style="color:black;">Select Enquiry Type:<span></label> 
							  <div>
					   <select data-rel="chosen" name="pt">
                            <option>-Select-</option>
							<?php 
							include('config.php');
							$property_type="select * from enquirytype";
							$property_type_exe=mysql_query($property_type);
							while($property_data=mysql_fetch_array($property_type_exe))
							{
								?>
							
							
                            <option value="<?php echo $property_data['Name'];?>"><?php echo $property_data['Name'];?></option>
                           <?php
							}
							?>
                        </select>
						</div><br/>
						<div>
						<span style="color:black;">Query:<span>
						<textarea class="form-group" placeholder="Type Your Query" style="width:100%;height:100px" name="qy"></textarea>
						</div>
							  
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox"><span style="color:black;"> Check me out<span>
                                  </label>
                              </div>
                              <button type="submit" class="btn btn-primary" name="sub">Submit</button>
                          </form>
						  <?php
					if(isset($_POST['sub']))
					{
						$name=$_POST['name'];
						$contact=$_POST['contact'];
						$email=$_POST['mail'];
						
						$etype=$_POST['pt'];
						$comment=$_POST['qy'];
						
				
					$query_et="insert into manageenquiry set Name='$name',Contact='$contact',Email='$email',EnqiuryType='$etype',Query='$comment'";
					$query_et_exe=mysql_query($query_et);
					
					if($query_et_exe>0)
					{
						echo "<script>alert('Your Message Has Been Sent')</script>";
					}
					else
					{
						echo "<script>alert('Your Message Sending failed')</script>";
					}
					}
					?>
                          
                      </div>
                      <div class="modal-footer" id="modal-footerq">
					  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end of modal ------------------------------>
 </div>
 
        <div class="row">
		  <div class="top-info">
                      <br/><br/>
                    <ul class="top-social" style="margin-right:75px">
                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" class="flickr"><i class="fa fa-flickr"></i></a></li>
                        <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                    <div class="top-phone clearfix" style="margin-right:70px"><i class="fa fa-phone"></i>+880-6878756534</div>
                  
                  
            </div>
        </div>
    <!-- End Header Section -->
    
    <!-- Start Navigation Section -->
    <div class="navigation">
        <div class="navbar navbar-default navbar-top navbar-fix-top" >
            <div class="navbar-header">
                <!-- Stat Toggle Nav Link For Mobiles -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                        
            
            <div class="navbar-collapse collapse">
    
                <!-- Start Navigation List -->
                <ul class="nav navbar-nav">
                    <li>
                        <a class="active" href="index.php">HOME</a>
                    </li>
                    <li>
                        <a href="about.php">ABOUT US</a>
                    </li>
                    <li>
                        <a href="our-team.php">OVER TEAM</a>

                    </li>

                    <li>
                        <a href="fetureproperty.php">FEATURED PROPERTY</a>

                    </li>
                    <li>
                        <a href="contact-full-width.php">CONTACT US</a>
                 
                    </li>
                    <li>
                        <a href="joinus.php">JOIN US</a>
                
                    </li>
                </ul>
                <!-- End Navigation List -->
				</div>
            </div>
			</div>
    </div>
	</div>

        
	<script>
	function open_container()
        {
            var size='standart';
            var content = document.getElementById('forms').value;

		   var title = document.getElementById('myModalLabel').value;
            var footer = document.getElementById('modal-footerq').value;
            setModalBox(title,content,footer,size);
            $('#myModal').modal('show');
        }
        function setModalBox(title,content,footer,$size)
        {
            document.getElementById('modal-bodyku').value;
            document.getElementById('myModalLabel').value;
            document.getElementById('modal-footerq').value;
       
            if($size == 'standart')
            {
                $('#myModal').attr('class', 'modal fade')
                             .attr('aria-labelledby','myModalLabel');
                $('.modal-dialog').attr('class','modal-dialog');
            }
           
        }
        </script>
	
	</body>
	</html>