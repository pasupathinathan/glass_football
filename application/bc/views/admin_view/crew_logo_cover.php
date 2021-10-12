
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
					<h2 class="trim-top title-sub">Update your Logo</h2>
						<form class="form-horizontal gray-form">
						  <div class="row">
						  	<div class="col-md-12">
								  <div class="profile-change-box upload">
										<div class="profile-picture-preview">
											<img src="<?php echo base_url() ?>/assets/images/dp-default.jpg" >
										</div>
										<!-- The Input Field will be generated in below div automaticlly once the image cropped refer main.js (Line 141 ) -->
										<div class="profile-picture-value"></div>
										<hr>
										<div class="profile-change-wraper">
									  <button type="button" class="btn btn-black upload-profile-pop" data-toggle="modal" data-target="#ChangeProfilePopup"> Upload Profile Picture</button>
									</div>
									</div>
									<div class="modal fade" id="ChangeProfilePopup" tabindex="-1" role="dialog" aria-labelledby="">
									  <div class="modal-dialog" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									        <h4 class="modal-title" id="">Change Profile Picture</h4>
									      </div>
									      <div class="modal-body text-center">
									        <div class="profile-wrap upload-profile">
											      <div id="upload-profile"></div>
									          <span class="btn btn-black btn-file">
												      Upload Image <input type="file" class="upload-profile-picture">
												    </span>
													</div>
									      </div>
									      <div class="modal-footer">
									        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									        <button type="button" class="btn btn-red upload-result" data-dismiss="modal">Save changes</button>
									      </div>
									    </div>
									  </div>
									</div>
						  	</div>
						  </div>

					<h2 class="trim-top title-sub">Update your Cover</h2>
						  <div class="row">
						  	<div class="col-md-12">
								  <div class="profile-change-box upload">
										<div class="cover-picture-preview">
											<img src="<?php echo base_url() ?>/assets/images/cover-default.jpg" class="width-full">
										</div>
										<!-- The Input Field will be generated in below div automaticlly once the image cropped refer main.js (Line 141 ) -->
										<div class="cover-picture-value"></div>
										<hr>
										<div class="profile-change-wraper">
									  <button type="button" class="btn btn-black" data-toggle="modal" data-target="#ChangeCoverPopup"> Upload Profile Picture</button>
									</div>
									</div>
									
									<div class="modal fade" id="ChangeCoverPopup" tabindex="-1" role="dialog" aria-labelledby="">
									  <div class="modal-dialog" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									        <h4 class="modal-title" id="">Change Cover Picture</h4>
									      </div>
									      <div class="modal-body text-center">
									        <div class="cover-wrap upload-cover">
											      <div id="upload-cover"></div>
									          <span class="btn btn-black btn-file">
												      Upload Image <input type="file" class="upload-cover-picture">
												    </span>
													</div>
									      </div>
									      <div class="modal-footer">
									        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									        <button type="button" class="btn btn-red upload-result" data-dismiss="modal">Save changes</button>
									      </div>
									    </div>
									  </div>
									</div>
						  	</div>
						  </div>

						  
						  <hr>
						  <div class="form-group">
						    <div class="col-sm-10">
						      <button type="submit" class="btn btn-red btn-lg">Update profile</button>
						    </div>
						  </div>
						</form>


				</div>
			</div>
		</div>
	</div>
</div>
