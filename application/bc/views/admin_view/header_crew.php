<?php

 

//Access them like so

 foreach ($data1 as $store1) : 

  

 ?>

<header class="main-header header-profile">
	<div class="container">
		<div class="main-header-inner">
			<div class="main-logo-container">
				<a href="index.php">
					<img src="<?php echo base_url() ?>/assets/images/logo.png" class="logo-lg">
					<img src="<?php echo base_url() ?>/assets/images/cc-logo-mini.png" class="logo-sm">
				</a>
			</div>
			<div class="main-nav-container">
				<ul class="main-nav">
					<li >
						<a href="#" class="link">
							<span class="user-nav">
								<div class="user-pic">
									<img src="<?php echo base_url() ?>/assets/images/company-logo-sm.jpg">
								</div>
								<span class="user-name">
									<?php echo   $store1->reg_company_name; ?> 
								</span>
							</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="#"  class="link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<!-- <span class="main-nav-link"><i class="glyphicon glyphicon-chevron-down"></i></span> -->
							<span class=""><img src="<?php echo base_url() ?>/assets/images/settings-icon.png"></span>
						</a>
						<ul class="dropdown-menu pull-right">
							<li><a href="#">My Profile</a></li>
							<li><a href="#">Account Settings</a></li>
							<li><a href="#">Manage Searches</a></li>
							<li><a href="logout">Logout</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<!-- <span class="main-nav-link"><i class="glyphicon glyphicon-chevron-down"></i></span> -->
							<span class=""><img src="<?php echo base_url() ?>/assets/images/notification-icon.png"></span>
						</a>
						<div class="dropdown-menu drop-down-lg pull-right">
							<h3>Recent Activities</h3>
							<div class="notification-dropdown">
								<a href="#" class="notification-box">
									<h4>R.Ramcharan Reviewed on your Profile.</h4>
								</a>
								<a href="#" class="notification-box">
									<h4>R.Ramcharan Rated Your Profile.</h4>
								</a>
								<a href="#" class="notification-box">
									<h4>You have been Listed in R.Rancharan's Search.</h4>
								</a>
								<a href="#" class="notification-box">
									<h4>R.Ramcharan Reviewed on your Profile.</h4>
								</a>
								<a href="#" class="notification-box">
									<h4>R.Ramcharan Rated Your Profile.</h4>
								</a>
							</div>

						</div>
					</li>
					<li class="dropdown">
						<a href="#" class="link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span ><img src="<?php echo base_url() ?>/assets/images/menu-icon.png"></span>
						</a>
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

<div id="login-dialog" class="zoom-anim-dialog mfp-hide">
	<div class="login-dialog-container">
		<div class="login-dialog-half">
			<h3 class="text-center">Register Yourself</h3>
			<form class="white-form">
				<div class="form-group">
					<label>Your Name</label>
					<input type="text" class="form-control">	
				</div>
				<div class="form-group">
					<label>Your Email</label>
					<input type="text" class="form-control">	
				</div>
				<div class="form-group">
					<label>Mobile Number</label>
					<div class="input-group">
					  <span class="input-group-addon">+91</span>
					  <input type="text" class="form-control">
					</div>	
				</div>
				<div class="form-group">
					<div class="checkbox">
				    <input type="checkbox" id="checkbox1">
				    <label for="checkbox1">
				        I Accept the <a href="#">Terms &amp; Conditions</a> of Civilcrew
				    </label>
				  </div>
				</div>
				<div class="form-group">
					<button class="btn btn-block btn-lg btn-red">Verify &amp; Continue</button>
				</div>
			</form>
		</div>
		<div class="login-dialog-half login-box">
			<h3 class="text-center">Login Now</h3>
			<form class="transparant-form">
				<div class="form-group">
					<label>Your Name</label>
					<input type="text" class="form-control">	
				</div>
				<div class="form-group">
					<label>Your Email</label>
					<input type="text" class="form-control">	
				</div>
				<div class="form-group">
					<label>Forgot your Password? <a href="#" class="link">Click Here</a></label>
				</div>				
				<div class="form-group">
					<button class="btn btn-block btn-red">Login Now</button>
				</div>
			</form>
			<p class="text-center">Are your related to Civil? </p>
			<div class="text-center">
				<a href="#" class="btn btn-outline-wt">Join Our Crew</a>
			</div>
		</div>
	</div>

</div>
<?php endforeach; ?>
