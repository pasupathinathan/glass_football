
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Civil Crew</title>
 
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>/assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/checkbox.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/bootstrap-switch.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>assets/plugins/jasny/css/jasny-bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/plugins/select2/css/select2.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/plugins/boot-select/css/bootstrap-select.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/plugins/datetime/css/jquery.datetimepicker.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/plugins/popup/magnific-popup.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/plugins/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/plugins/colorbox/colorbox.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/plugins/croppie/croppie.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/plugins/scrolltab/scrolltabs.css" rel="stylesheet">

    <!-- Custom styles for this Website -->
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/media.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url() ?>assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>


<header class="main-header">
	<div class="container">
		<div class="main-header-inner">
			<div class="main-logo-container">
				<a href="index">
					<img src="<?php echo base_url() ?>assets/images/logo.png" class="logo-lg">
					<img src="<?php echo base_url() ?>assets/images/cc-logo-mini.png" class="logo-sm">
				</a>
			</div>
			<div class="main-nav-container">
				<ul class="main-nav">
					<li><a href="#main-login" class="btn btn-outline-wt popup-with-zoom-anim"> <img src="<?php echo base_url() ?>assets/images/login-icon.png"> <span>Login</span></a></li>
<li><a href="#main-register" class="btn btn-outline-wt popup-with-zoom-anim"> <img src="<?php echo base_url() ?>assets/images/register-icon.png"> <span>Register</span></a></li>
					<li class="hidden-xs">                   
                    
                    <a href="<?php echo site_url('home/step1') ?>" class="btn btn-red"> <span>Join Crew</span></a></li>
					<li class="dropdown">
						<a href="#"  class="link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url() ?>assets/images/menu-icon.png"></a>
						<ul class="dropdown-menu pull-right">
							<li><a href="#">How it works</a></li>
							<li><a href="#">How to Use</a></li>
							<li><a href="#">About us</a></li>
							<li><a href="#">Contact us</a></li>
							<li><a href="#">FAQ</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
</header>
 

<div id="main-login1" class="zoom-anim-dialog mfp-hide">
	<div class="main-login-container">
    
    
		<h3 class="text-center">Login Now</h3>
	

				  <?php  
				  
  
				  
				 $attributes = array('class' => 'gray-form', 'id' => 'MainLogin' ,"name" => "loginform" );
				  
			 
				  
				    echo form_open("home/checklogin", $attributes); ?>
    
    
			<div class="form-group">
				<label>Your Email</label>
				<input type="text" id="ml_email" name="ml_email" class="form-control">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" id="ml_pass" name="ml_pass" class="form-control">
			</div>
			<div class="form-group">
				<label>Forgot your Password? <a href="#" class="link">Click Here</a></label>
			</div>				
			<div class="form-group">
				<button class="btn btn-block btn-red btn-lg">Login Now</button>
			</div>
		</form>
	</div>
</div>




<div id="main-login" class="zoom-anim-dialog mfp-hide">
	<div class="main-login-container">
    
    
		<h3 class="text-center">Login Now</h3>
	
    
    <?php 

 
if(!empty($res))
 {
 
	 var_dump($res);
 }
 
  
?>


				  <?php  
				     
				 $attributes = array('class' => 'gray-form', 'id' => 'MainLogin' ,"name" => "loginform" );
				   
				  
				    echo form_open("home/checklogin", $attributes); ?>
    
     
			<div class="form-group">
				<label>Your Email</label>
				<input type="text" id="ml_email" name="ml_email" class="form-control">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" id="ml_pass" name="ml_pass" class="form-control">
			</div>
			<div class="form-group">
				<label>Forgot your Password? <a href="#" class="link">Click Here</a></label>
			</div>				
			<div class="form-group">
				<button class="btn btn-block btn-red btn-lg">Login Now</button>
			</div>
		</form>
	</div>
</div>


<div id="main-register" class="zoom-anim-dialog mfp-hide">
	<div class="main-register-container">
		<div class="main-customer-register">
			<h3 class="text-center">Customer Registration</h3>
			<form id="MainRegister" class="gray-form">
				<div class="form-group">
					<label>Your Name</label>
					<input type="text" id="mr_name" name="mr_name" class="form-control">
				</div>
				<div class="form-group">
					<label>Your Email</label>
					<input type="text" id="mr_email" name="mr_email" class="form-control">	
				</div>
				<div class="form-group">
					<label>Mobile Number</label>
					<div class="input-group">
					  <span class="input-group-addon">+91</span>
					  <input type="text" id="mr_mobile" name="mr_mobile" class="form-control">
					</div>	
				</div>
				<div class="form-group">
					<label>Password</label>
				  <input type="password" id="mr_password" name="mr_password" class="form-control">
				</div>
				<div class="form-group">
					<div class="checkbox">
				    <input type="checkbox" id="mr_accept" id="mr_accept" name="">
				    <label for="checkbox1">
				        I Accept the <a href="#">Terms &amp; Conditions</a> of Civilcrew
				    </label>
				  </div>
				</div>
				<div class="form-group">
					<button class="btn btn-block btn-lg btn-red">Register Now</button>
				</div>
			</form>
		</div>
		<div class="main-crew-register">
			<h3 class="">Join with us</h3>
			<ul class="pop-list">
				<li>Architects</li>
				<li>Civil Engineers</li>
				<li>Structural Engineers</li>
				<li>MEP Comsultants</li>
				<li>Interior Designers</li>
				<li>Modular Kitchenists</li>
			</ul>
			<p>Registration available for Companies and Freelancers</p>
			<a href="home/portfolio" class="btn btn-red">Join The Crew</a>
		</div>
	</div>
</div>


<section class="top-section">
	<div class="container">
		<h1 class="main-title">Find your <strong>Perfect Crew</strong> for <strong>Your Project</strong></h1>
		<h3 class="main-title-sub">Verified Architects, Civil Engineers, Structural Engineers, Interior Designers, Modular Kitchen Desginers,<br> MEP Consultants and Suppliers.</h3>
		

		<div class="search-bar-container">
			

			<!-- Nav tabs -->
			  <ul class="searchbar-tab-nav" role="tablist">
			    <li class="active">
			    	<a href="#professionals" aria-controls="home" role="tab" data-toggle="tab">Professionals</a>
			    </li>
			    <li>
			    	<a href="#suppliers" aria-controls="profile" role="tab" data-toggle="tab">Suppliers</a>
			    </li>
			    <li>
			    	<a href="#handyman" aria-controls="profile" role="tab" data-toggle="tab">HandyMan</a>
			    </li>
			  </ul>

			  <!-- Tab panes -->
			  <div class="tab-content">
			    <div role="tabpanel" class="tab-pane active" id="professionals">
			    	<div class="main-search-bar">
			    		<form class="form-inline">
			    			<div class="srch-location">
			    				<div class="from-group srch-city">
			    					<select class="form-control city-select select2" name="search_city" placeholder="Select Your City*">
											<option></option>
											<option>Chennai</option>
											<option>Bangalore</option>
											<option>Coimbatore</option>
											<option>Hydrabad</option>
										</select>
			    				</div>
			    				<div class="from-group srch-city">
			    					<select class="form-control zone-select select2" name="search_zone" placeholder="Select Your Zone*">
											<option></option>
											<option>Chennai</option>
											<option>Bangalore</option>
											<option>Coimbatore</option>
											<option>Hydrabad</option>
										</select>
			    				</div>
			    			</div>
			    			<div class="form-group srch-category">
			    				<select class="form-control selectpic" multiple title='Choose Professional'>
										<option>Companies</option>
										<option>Architects</option>
										<option>Civil Engineers</option>
										<option>Structural Engineers</option>
										<option>Interior Designers</option>
										<option>Modular Kitchens</option>
										<option>M.E.P. Consultants </option>
									</select>
			    			</div>
			    			<div class="form-group srch-button">
			    				<button class="btn btn-block btn-red"> <i class="glyphicon glyphicon-search"></i> Search</button>
			    			</div>
			    		</form>
			    	</div>
			    </div>
			    <div role="tabpanel" class="tab-pane" id="suppliers">
			    	<div class="main-search-bar">
			    		<form class="form-inline">
			    			<div class="form-group srch-location">
			    				<input type="text" class="form-control" placeholder="Enter your Location or City">
			    			</div>
			    			<div class="form-group srch-category">
			    				<select class="form-control selectpic" multiple title='Choose Supplier'>
										<option>Brick Suppliers </option>
										<option>Hardware shop </option>
										<option>Sanitary ware </option>
										<option>Tiles shop </option>
										<option>Light Shop </option>
										<option>Sand Suppliers </option>
										<option>Steel Suppliers </option>
										<option>Centring Materials</option>
										<option>UPVC Windows</option>
										<option>Electrical Shop </option>
									</select>
			    			</div>
			    			<div class="form-group srch-button">
			    				<button class="btn btn-block btn-red"> <i class="glyphicon glyphicon-search"></i> Search</button>
			    			</div>
			    		</form>
			    	</div>
			    </div>
			    <div role="tabpanel" class="tab-pane" id="handyman">
			    	<div class="main-search-bar">
			    		<form class="form-inline">
			    			<div class="form-group srch-location">
			    				<input type="text" class="form-control" placeholder="Enter your Location or City">
			    			</div>
			    			<div class="form-group srch-category">
			    				<select class="form-control selectpic" multiple title='Choose Service'>
										<option>Plumber</option>
										<option>Electrician</option>
										<option>Carpentry</option>
										<option>Cleaning</option>
										<option>Masonry</option>
									</select>
			    			</div>
			    			<div class="form-group srch-button">
			    				<button class="btn btn-block btn-red"> <i class="glyphicon glyphicon-time"></i> Proceed</button>
			    			</div>
			    		</form>
			    	</div>
			    </div>
			  </div>

		</div>

	</div>
</section>

 
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>

  <script>
      $(document).ready(function() {
		  
        $('.popup-with-zoom-anim[href="#main-login"]').click();
      });
    </script>

 
