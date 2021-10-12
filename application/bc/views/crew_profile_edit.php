 
<?php

 

//Access them like so

 foreach ($data1 as $store) : 
 
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
										<h3>Lorem ipsum dolor sit amet</h3>
										<a href="#"></a>
									</a>
								</div>
							</div>
						</div>
					</div>
				  <div class="list-group">
				   
		 
				    <a href="crew_profile_dashboard" class="list-group-item active">Account Dashboard</a>
				    <a href="crew_profile_dashboard" class="list-group-item">View Profile</a>
				    <a href="crew_profile_edit" class="list-group-item ">Edit Profile</a>
				    <a href="crew_logo_cover" class="list-group-item">Logo &amp; Cover</a>
				    <a href="crew_my_projects" class="list-group-item ">My Projects</a>
				    <a href="crew_my_reviews" class="list-group-item">My Reviews</a>
				    <a href="crew_account_settings" class="list-group-item">Account Settings</a>
				    <a href="crew_feedback" class="list-group-item">Talk to CivilCrew Support</a>
				  </div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="profile-content-container">
					<h3 class="trim-top title-sub">Profile Details</h3>
						<form class="form-horizontal gray-form">
						  <div class="form-group">
						    <label for="" class="col-sm-3 control-label">Your Name</label>
						    <div class="col-sm-6">
						      <input type="text" value="<?php echo   $store->reg_name; ?>" class="form-control" id="" >
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="" class="col-sm-3 control-label">Your Email <small>(User Name)</small></label>
						    <div class="col-sm-5">
						      <input type="text" class="form-control" id="" value="<?php echo   $store->reg_email; ?>" disabled>
						    </div>
						    <div class="col-sm-3">
						      <!-- <a class="help-tip-icon" tabindex="0" data-container="body" data-toggle="popover" data-trigger="focus" data-placement="right" data-content="Email Verification Will be Required to change the Account Email"><i class="glyphicon glyphicon-question-sign"></i></a> -->
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="" class="col-sm-3 control-label">Your Date of Birth</label>
						    <div class="col-sm-4">
						      <input type="text" class="form-control datepicker" placeholder="Select Now">	
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="" class="col-sm-3 control-label">Available Crew</label>
						    <div class="col-sm-6">
						      <select class="form-control selectpic" multiple="true">
										<option>Artchitects</option>
										<option>Civil Engineering</option>
										<option selected>Interior Designering</option>
										<option selected>Structural Engineering</option>
										<option>MEP Consulting</option>
										<option>Modular Kitchen Designering</option>
									</select>	
						    </div>
						  </div>
						  <hr>
						  <div class="alert alert-warning" role="alert"> <strong>Note:</strong> You cant edit the core details of the Profile. If u want to change something contact our <a href="#" class="alert-link">CivilCrew Support.</a></div>
						  <div class="form-group">
						    <label for="" class="col-sm-3 control-label">Company Name</label>
						    <div class="col-sm-6">
						      <input type="text" class="form-control" value="<?php echo   $store->reg_company_name; ?>"  id="" disabled>
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="" class="col-sm-3 control-label">Company Reg. No.</label>
						    <div class="col-sm-4">
						      <input type="text" class="form-control" value="<?php echo   $store->reg_company_regno; ?>"   id="" disabled>
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="" class="col-sm-3 control-label">Company Reg. Date</label>
						    <div class="col-sm-4">
						      <input type="text" class="form-control" value="<?php echo   $store->reg_year; ?>" id="" disabled>
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="" class="col-sm-3 control-label">Company Reg. Date</label>
						    <div class="col-sm-6">
						      <input type="text" class="form-control" value="<?php echo   $store->reg_year; ?>"  id="" disabled>
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="" class="col-sm-3 control-label">COA No.</label>
						    <div class="col-sm-3">
						      <input type="text" class="form-control" value="<?php echo   $store->reg_coa; ?>"   id="" disabled>
						    </div>
						  </div>
						  <hr>
						  <div class="alert alert-warning" role="alert"> <strong>Note:</strong> Changing Main Mobile Number and Address will have the Verfication process, until no data will be changed. </div>
						  <div class="form-group">
						    <label for="" class="col-sm-3 control-label">Account Mobile Number </label>
						    <div class="col-sm-4">
						      <input type="text" class="form-control" value="<?php echo   $store->reg_phone; ?>"  id="" disabled>
						    </div>
						    <div class="col-sm-2">
						      <a href="#" class="btn btn-default">Change</a>
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="" class="col-sm-3 control-label">Display Mobile Number <a class="help-tip-icon" tabindex="0" data-container="body" data-toggle="popover" data-trigger="focus" data-placement="top" data-content="This will Number will be displayed in your Profile Page"><i class="glyphicon glyphicon-question-sign"></i></a></label>
						    <div class="col-sm-4">
						      <input type="text" class="form-control" id="" value="<?php echo   $store->reg_display_phone; ?>">
						    </div>
						    <div class="col-sm-3">
						      
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="" class="col-sm-3 control-label">Address</label>
						    <div class="col-sm-6">
						      <p>Lorem ipsum dolor sit amet, <br>
						      consectetur adipisicing elit,<br>
					       	sed do eiusmod  incididunt ut, <br>
					       	labore et dolore magna aliqua.</p>
					       	<p><strong>State:</strong> Tamil nadu</p>
					       	<p><strong>City:</strong> Chennai</p>
					       	<p><strong>Zone:</strong> Mylapore</p>
					       	<p><strong>Pincode:</strong> 6000028</p>
					       	<a href="#" class="btn btn-sm btn-default">Change Address</a>
						    </div>
						  </div>
						  <hr>
						  <div class="form-group">
						    <div class="col-sm-offset-3 col-sm-10">
						      <button type="submit" class="btn btn-red btn-lg">Sign in</button>
						    </div>
						  </div>
						</form>


				</div>
			</div>
		</div>
	</div>
</div>

<?php endforeach; ?>