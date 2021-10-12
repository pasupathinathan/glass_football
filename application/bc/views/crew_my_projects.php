


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
				    <!-- <span class="list-group-item seperator"></span> -->
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
					<div class="row">
						<div class="col-md-7">
							<h2 class="trim-top"><strong>My Projects</strong></h2>	
						</div>
						<div class="col-md-5">
							<div class="text-right">
								<a href="#" class="btn btn-red" data-toggle="modal" data-target="#AddProjectPopup">Add New Project</a>
							</div>
						</div>
					</div>

					<div class="modal fade" id="AddProjectPopup" tabindex="-1" role="dialog" aria-labelledby="">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><!-- <span aria-hidden="true">&times;</span> --><img src="<?php echo base_url() ?>/assets/images/close.png"></button>
					        <h4 class="modal-title" id="">Add New Project</h4>
					      </div>
					      <div class="modal-body ">
					      	<div class="add-project-container">
			 
                    
                    <?php echo form_open_multipart('home/image_upload');?>
                    
                    
					      			<div class="form-group">
					      				<label>Project Title</label>
					      				<input type="text" name="projecttitle" class="form-control">	
					      			</div>
					      			<div class="form-group">
					      				<div class="fileinput fileinput-new" data-provides="fileinput">
												  <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
												  <div>
												    <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="userpic"></span>
												    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
												  </div>
												</div>
					      			</div>
                                    <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        <button type="submit"  class="btn btn-red upload-result">Add Project</button>
					      </div>
                                    
					      		</form>
					      	</div>
					      </div>
					      
					    </div>
					  </div>
					</div>

					<hr>
					<div class="myprojects-container">
						<div class="row">
                        
                         
<?php

 

//Access them like so
 

if(!empty($data1)) {

 foreach ($data1	 as $store) : 

 ?>
 
<div class="col-md-4">
<a href="<?php echo base_url() ?>/assets/uploads/<?php echo   $store->project_image; ?>" class="projects-thumb-box projects-pop" title="lorem ipsim dolar sit amet">
<img src="<?php echo base_url() ?>/assets/uploads/<?php echo   $store->project_image; ?>">
<div class="project-thumb-content">
 <?php echo   $store->prj_name; ?>
</div>
<?php



 ?>
<a href="home/crew_my_projects/<?php echo   $store->prj_id; ?>" class="project-delete"><img src="<?php echo base_url() ?>/assets/images/delete-icon.png"></a>
</a>
</div>
				
						
<?php endforeach; } ?>

						</div>
					</div>


				</div>
			</div>
		</div>
	</div>
</div>