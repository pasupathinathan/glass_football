<?php

 

//Access them like so

 foreach ($data as $store) : 

 



 ?>


<div class="profile-page-wraper">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="panel panel-profile">
				  <div class="company-profile-box">
						<div class="profile-box-cover" style="background-image: url(<?php echo base_url() ?>/assets/images/cover-default.jpg);">
							<div class="profile-box-logo">
								<div class="logo-small">
									<a href="#">
										<img src="<?php echo base_url() ?>/assets/images/dp-default.jpg">
									</a>
								</div>
								<div class="logobox-company-name">
									<a href="#">
										<h3><?php echo   $store->reg_name; ?></h3>
										<a href="#"></a>
									</a>
								</div>
							</div>
						</div>
					</div>
				  <div class="list-group">
				    <a href="#" class="list-group-item">Listed Searches</a>
				    <!-- <span class="list-group-item seperator"></span> -->
				    <a href="crew_profile_dashboard" class="list-group-item active">Account Dashboard</a>
				    <a href="crew_profile_dashboard" class="list-group-item">View Profile</a>
				    <a href="crew_profile_edit" class="list-group-item ">Edit Profile</a>
				    <a href="crew_logo_cover" class="list-group-item">Logo &amp; Cover</a>
				    <a href="crew_my_projects" class="list-group-item ">My Projects</a>
				    <a href="crew_my_reviews" class="list-group-item">My Reviews</a>
				    <a href="crew_account_settings" class="list-group-item">Account Settings</a>
				    <a href="#" class="list-group-item">Talk to CivilCrew Support</a>
				  </div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="profile-content-container">
					<h2 class="trim-top"><strong>Welcome User</strong></h2>
					<hr>
					<h3>Your Profile Statistics</h3>
					<div class="row">
						<div class="col-md-3">
							<div class="lable-box">
								<p>Your Profile Views</p>
								<h3>1254851</h3>
								<a href="#">View More <i class="glyphicon glyphicon-play-circle"></i></a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="lable-box">
								<p>Ratings &amp; Reviews </p>
								<h3>12</h3>
								<a href="#">View More <i class="glyphicon glyphicon-play-circle"></i></a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="lable-box">
								<p>Projects Uploaded </p>
								<h3>15</h3>
								<a href="#">View More <i class="glyphicon glyphicon-play-circle"></i></a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="lable-box">
								<p>Listed Searched </p>
								<h3>15</h3>
								<a href="#">View More <i class="glyphicon glyphicon-play-circle"></i></a>
							</div>
						</div>
					</div>
					<hr>

				</div>
			</div>
		</div>
	</div>
</div>


<?php endforeach; ?>