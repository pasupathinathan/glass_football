
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
					<h2 class="trim-top">
						<strong>My Ratings &amp; Reviews</strong>
					</h2>
					
					<div class="review-section">
						<div class="reviews-container">
                        
                        

<?php
   
  
foreach($data1 as $data):
  
 ?>
							<div class="review-box">
								<div class="row">
									<div class="col-md-3 reviewer-data">
										<p class="text-muted"><small>Commented on</small></p>
										<h3 class="reviewer-name"><?php echo $data->usr_name; ?></h3>
										<p class="reviewer-from"><?php echo $data->usr_address; ?></p>
										<h4>Rated</h4>
										<p><span class="rating-view" data-score="<?php echo $data->rev_rating; ?>"></span></p>
									</div>
									<div class="col-md-9 review-content">
										<h4><?php echo $data->rev_title; ?></h4>
										<p> <?php echo $data->rev_comment; ?></p>
										<div class="text-right report-comment">
											<a href="#" class="link">Report Abuse</a>
										</div>
									</div>
								</div>
							</div>
							 
						
                      <?php endforeach; ?>
							 
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>
</div>
