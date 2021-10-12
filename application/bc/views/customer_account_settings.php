<?php 
if(!empty($this->uri->segment(3)))
{
   $cid =$this->uri->segment(3);  
  
}
else
{
	$cid=0;
}
 
?>

 
<body>
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
                
                <?php 
				if($cid=='s')
				{
					echo 'updated sccessfully';
				}
				else if( $cid=='er')
				{
					echo 'Error In Update';
				}
					else if( $cid=='m')
				{
					echo 'Password missmatch';
				}
				
				?>
					<h2 class="trim-top"><strong>Account Settings</strong></h2>
                    
                    <?php foreach($data1 as $data):  ?>
                    			  <?php  
			  	  
				 $attributes = array('class' => 'form-horizontal gray-form', 'id' => 'jcForm2c1' ,"name" => "registrationform" );
				     
				    echo form_open("home/customer_password", $attributes); ?>
                     
					  <div class="form-group">
					    <label for="" class="col-sm-3 control-label">Login Email</label>
					    <div class="col-sm-6">
					      <input type="text" class="form-control" id="" disabled>
					    </div>
					  </div>
						<h3><strong>Change Password</strong></h3>
						<hr>
					  <div class="form-group">
					    <label for="" class="col-sm-3 control-label">Your Current Password</label>
					    <div class="col-sm-5">
					      <input type="password" class="form-control" value="" name="current_pssword" id="" >
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="" class="col-sm-3 control-label">New Password</label>
					    <div class="col-sm-5">
					      <input type="password" name="pass1" class="form-control" id="" >
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="" class="col-sm-3 control-label">Retype New Password</label>
					    <div class="col-sm-5">
					      <input type="password"  name="pass2"  class="form-control" id="" >
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-sm-offset-3 col-sm-10">
					      <button type="submit" class="btn btn-red">Save Changes</button>
					    </div>
					  </div>
					</form>
<?php endforeach; ?>

				</div>
			</div>
		</div>
	</div>
</div>
