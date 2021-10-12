<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  foreach ($data1 as $store) : 
?>
<body>
<div class="profile-page-wraper">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="panel panel-profile">
				  <div class="company-profile-box">
						<div class="profile-box-cover" style="background-image: url(images/cover-default.jpg);">
							<div class="profile-box-logo">
								<div class="logo-small">
									<a href="#">
										<img src="<?php echo base_url() ?>/assets/images/dp-default.jpg">
									</a>
								</div>
								<div class="logobox-company-name">
									<a href="#">
										<h3>Lorem ipsum dolor sit amet</h3>
									 
									</a>
								</div>
							</div>
						</div>
					</div>
				  <div class="list-group">
				    <a href="search_history" class="list-group-item">Search History</a>
				    <!-- <span class="list-group-item seperator"></span> -->
				    <a href="customer_profile" class="list-group-item active">Edit Profile</a>
				    <a href="cusotmer_logo_cover" class="list-group-item">Logo &amp; Cover</a>
		
				    <a href="customer_my_reviews " class="list-group-item">My Reviews</a>
				    <a href="customer_account_settings" class="list-group-item">Account Settings</a>
				    <a href="feedback" class="list-group-item">Talk to CivilCrew Support</a>
				  </div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="profile-content-container">
					<h3 class="trim-top title-sub">Profile Details</h3>
	 
                        
                        
				  <?php  
				  
				 $attributes = array('class' => 'form-horizontal gray-form', 'id' => 'jcForm11' ,"name" => "registrationform" );
				  
			 
				  
				    echo form_open("home/customer_profile_edit", $attributes); ?>
                    
                    
						  <div class="form-group">
						    <label for="" class="col-sm-3 control-label">Your Name </label>
						    <div class="col-sm-6">
						      <input type="text" value="<?php echo   $store->usr_name; ?>" name="c_name" class="form-control" id="" >
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="" class="col-sm-3 control-label">Your Email <small>(User Name)</small></label>
						    <div class="col-sm-5">
						      <input type="text"   value="<?php echo   $store->usr_email; ?>"  lang="c_mail"class="form-control" id="" disabled>
						    </div>
						    <div class="col-sm-3">
						      <!-- <a class="help-tip-icon" tabindex="0" data-container="body" data-toggle="popover" data-trigger="focus" data-placement="right" data-content="Email Verification Will be Required to change the Account Email"><i class="glyphicon glyphicon-question-sign"></i></a> -->
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="" class="col-sm-3 control-label">Your Date of Birth</label>
						    <div class="col-sm-4">
						      <input type="text" value="<?php echo   $store->usr_dob; ?>"  name="c_dob" class="form-control datepicker" placeholder="Select Now">	
						    </div>
						  </div>

						  <hr>
						  <div class="alert alert-warning" role="alert"> <strong>Note:</strong> Changing Main Mobile Number will have the Verfication process, until no data will be changed. </div>
						  <div class="form-group">
						    <label for="" class="col-sm-3 control-label">Account Mobile Number </label>
						    <div class="col-sm-4">
						      <input type="text"  value="<?php echo   $store->usr_contactno; ?>" name="c_mobile"  class="form-control" id="" disabled>
						    </div>
						    <div class="col-sm-2">
						      <a href="#" class="btn btn-default">Change</a>
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="" class="col-sm-3 control-label">Address</label>
						    <div class="col-sm-6">
						      <textarea class="form-control" name="c_address"> <?php echo   $store->usr_address; ?></textarea>
						      <div class="row">
						      	<div class="col-md-6">
						      		<label>State</label>
						      		<input type="text"   name="c_state" value="<?php echo   $store->usr_state; ?>"   class="form-control" id="" >
						      	</div>
						      	<div class="col-md-6">
						      		<label>City</label>
						      		<input type="text" name="c_city"  value="<?php echo   $store->usr_city; ?>"  class="form-control" id="" >
						      	</div>
						      </div>
						      <div class="row">
						      	<div class="col-md-6">
						      		<label>Zone</label>
						      		<input type="text"  name="c_zone" value="<?php echo   $store->usr_zone; ?>"   class="form-control" id="" >
						      	</div>
						      	<div class="col-md-6">
						      		<label>Pincode</label>
						      		<input type="text" name="c_pincode"  value="<?php echo   $store->usr_zipcode; ?>"  class="form-control" id="" >
						      	</div>
						      </div>
						    </div>
						  </div>
						  <hr>

						  <div class="form-group">
						    <div class="col-sm-offset-3 col-sm-10">
						      <button type="submit" class="btn btn-red btn-lg">Update Profile</button>
						    </div>
						  </div>
						</form>


				</div>
			</div>
		</div>
	</div>
</div>
</body>
<?php endforeach; ?>