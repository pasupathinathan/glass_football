
<?php
 

//Access them like so

 foreach ($data1 as $store) : 
  
 ?>
<section class="top-section minify">
	<div class="container">
		<div class="project-mini-container text-left">
			<div class="row">
				<div class="col-md-9">
					<div class="row">
						<div class="col-md-4">
							<div class="project-detail-mini">
								<p class="text-muted"><small>Project</small></p>
								<p title="Villa, New Construction, 2000-5000 Sq.ft">Villa, New Construction, 2000-5000 Sq.ft</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="project-detail-mini">
								<p class="text-muted"><small>Location</small></p>
								<p>Coimbatore East, Coimbatore - 641012</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="project-detail-mini">
								<p class="text-muted"><small>Crew</small></p>
								<p title="Architect, Civil Engineer, Structural Engineer, Interior Designer">Architect, Civil Engineer, Structural Engineer, Interior Designer</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<button class="btn btn-block btn-black search-toggle-btn"> Modify Search <span>+</span></button>
				</div>
			</div>
		</div>
		<div class="toggle-search-container">
			<div class="white-over-container">
				<form class="search-form">
					<div class="row">
						<div class="col-md-3 col-sm-3">
						<div class="form-group">
							<!-- <input class="form-control city_search" type="text" placeholder="Choose Your City"> -->
							<select class="form-control city-select select2" placeholder="Your Zone">
								<option></option>
								<option>Chennai</option>
								<option>Bangalore</option>
								<option>Coimbatore</option>
								<option>Hydrabad</option>
							</select>
						</div>
					</div>
					<div class="col-md-3 col-sm-3">
						<div class="form-group">
							<select class="form-control zone-select select2" placeholder="Your Zone">
								<option></option>
								<option>Chennai</option>
								<option>Bangalore</option>
								<option>Coimbatore</option>
								<option>Hydrabad</option>
							</select>
						</div>
					</div>
						<div class="col-md-3 col-sm-3">
							<div class="form-group">
								<input type="text" class="form-control selectpic" placeholder="Pincode (optional)">
							</div>
						</div>
						<div class="col-md-3 col-sm-3">
							<div class="form-group">
								<select class="form-control selectpic" title="Project Sq. Ft. Range">
									<option>Chennai</option>
									<option>Bangalore</option>
									<option>Coimbatore</option>
									<option>Hydrabad</option>
								</select>
							</div>
						</div>
						<div class="col-md-3 col-sm-3">
							<div class="form-group">
								<select class="form-control selectpic" multiple title='Project Type'>
									<option>Chennai</option>
									<option>Bangalore</option>
									<option>Coimbatore</option>
									<option>Hydrabad</option>
								</select>
							</div>
						</div>
						<div class="col-md-3 col-sm-3">
							<div class="form-group">
								<select class="form-control selectpic" multiple title='Service Type'>
									<option>Chennai</option>
									<option>Bangalore</option>
									<option>Coimbatore</option>
									<option>Hydrabad</option>
								</select>
							</div>
						</div>
						<div class="col-md-3 col-sm-3">
							<div class="form-group">
								<select class="form-control selectpic" multiple title='Choose Your Crew'>
									<option>Chennai</option>
									<option>Bangalore</option>
									<option>Coimbatore</option>
									<option>Hydrabad</option>
								</select>
							</div>
						</div>
						<div class="col-md-3 col-sm-3">
							<div class="form-group">
								<input type="submit" class="btn btn-red btn-block" value="Search Again">	
							</div>
						</div>
					</div>
				</form>
			</div>
			
		</div>

	</div>
</section>

<section class="page-section listing-section bg-gray">
	<div class="container">
		<div class="listing-container-wrapper">
			 

			<div class="profile-section freelancer-profile">
				<div class="profile-header">
					<div class="cover-wraper">
						<img src="<?php echo base_url() ?>assets/images/cover-default.jpg" class="width-full">
					</div>
					<div class="profile-main">
						<div class="profile-picture">
							<img src="<?php echo base_url() ?>assets/images/dp-default.jpg">
						</div>
						<div class="profile-header-details">
							<h1><?php echo   $store->reg_name; ?></h1>
							<h4 class="text-muted"><?php echo   $store->reg_address; ?></h4>
							<h4><span class="label label-lg label-default">Architect</span> <small>- COA No:  <?php echo   $store->reg_address; ?></small></h4>
						</div>
					</div>
				</div>
				<div class="profile-content">
					<div class="row">
						<div class="col-md-4 pull-right">
							<div class="profile-sidebar">
								<article class="icon-text">
									<img src="<?php echo base_url() ?>assets/images/icon-black-id.png"><strong>CCID:</strong> <?php echo   $store->reg_address; ?>
								</article>
								<h4><strong>User Rating : </strong>
                                     </h4>

 
							<hr>
								<h3 class="title-sub">Contact Details</h3>
								<h4><strong>Address</strong></h4>
								<p><?php echo   $store->reg_address; ?></p>
								<article class="icon-text">
									<img src="<?php echo base_url() ?>assets/images/icon-black-phone.png"> <?php echo   $store->reg_phone; ?>
								</article>
								<article class="icon-text">
									<img src="<?php echo base_url() ?>assets/images/icon-black-email.png"> <?php echo   $store->reg_email; ?>
								</article>
								<article class="icon-text">
									<img src="<?php echo base_url() ?>assets/images/icon-black-web.png"> <?php echo   $store->reg_web; ?>
								</article>
							</div>
						</div>
						<div class="col-md-8">
                        
                        
							<h3 class="title-sub">Academic Skills</h3>
							<div class="acedemic-container">
                                                         
                            
								<div class="acedemic-box">
									<h3>Master of Architecture (M.Arch)</h3>
									<h4>Karpagam University, Coimbatore, Tamilnadu</h4>
									<p class="text-muted">2005-2008</p>
								</div>
							 
							</div>
							<h3 class="title-sub">Service Criteria</h3>
							<dl class="dl-horizontal left-dl">
							  <dt>Project Range </dt>
							  <dd><?php echo   $store->reg_sqft; ?> Sq.ft.</dd>
							  <dt>Project Types</dt>
							  <dd><?php echo   $store->reg_profession_type; ?></dd>
							  <dt>Service Types</dt>
							  <dd><?php echo   $store->reg_services; ?></dd>
							  <dt>Locations  </dt>
							  <dd><?php echo   $store->reg_service_areas; ?></dd>
							</dl>
							<h3 class="title-sub">Skill</h3>
							<div class="skill-container">
								<h4>
									<span class="label label-default">Furniture Design</span>
									<span class="label label-default">Industrial Design</span>
									<span class="label label-default">Interior Design</span>
									<span class="label label-default">Property Development</span>
									<span class="label label-default">Urban Planning</span>
									<span class="label label-default">Construction Management</span>
									<span class="label label-default">Furniture Design</span>
									<span class="label label-default">Industrial Design</span>
									<span class="label label-default">Interior Design</span>
									<span class="label label-default">Property Development</span>
									<span class="label label-default">Urban Planning</span>
									<span class="label label-default">Construction Management</span>
								</h4>
							</div>
						</div>
						
					</div>
					<hr>
					<div class="profile-projects-section">
						<h2 class="title-sub text-center">Projects</h2>
						<div class="projects-slider-container">
							<div class="projects-slider">
                            
                            
                            <?php  
							
							
							if(!empty($projectslist))
							{
							
							   foreach ($projectslist as $row){ 
							   
							   $crewvalue=$row->crew_id;
							   
							   ?>
								<div class="item">
									<a href="<?php echo base_url() ?>assets/uploads/<?php echo $row->project_image; ?>" class="projects-thumb-box projects-pop" title="lorem ipsim dolar sit amet">
										<img class="lazyOwl" data-src="<?php echo base_url() ?>assets/uploads/<?php echo $row->project_image; ?>">
										<div class="project-thumb-content">
											<?php echo $row->prj_name; ?>
										</div>
									</a>
								</div>
                                
                                <?php
								
								 } 						
								
						
								
							}
							 else
						 {
							 echo'<h3>There is no projects to Display</h3>';
							 
						 } 
						  
						  
						  
						 	 	?>
							 
						</div>
					</div>
					<hr>
					<div class="review-section">
						<div class="row">
							<div class="col-md-8">
								<h2 class="title-sub trim-top">User Reviews</h2>
								<div class="reviews-container">
									<div class="review-box">
										<div class="row">
											<div class="col-md-3 reviewer-data">
												<p class="text-muted"><small>Reviewer</small></p>
												<h3 class="reviewer-name">Kamalak kannan</h3>
												<p class="reviewer-from">From Coimbatore</p>
												<h4>Rated</h4>
												<p><span class="rating-view" data-score="1"></span></p>
											</div>
											<div class="col-md-9 review-content">
												<h4>Review Title</h4>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
												quis nostru quis nostru.</p>
												<div class="text-right report-comment">
													<a href="#" class="link">Report Abuse</a>
												</div>
											</div>
										</div>
									</div>
									<div class="review-box">
										<div class="row">
											<div class="col-md-3 reviewer-data">
												<p class="text-muted"><small>Reviewer</small></p>
												<h3 class="reviewer-name">Kamalak kannan</h3>
												<p class="reviewer-from">From Coimbatore</p>
												<h4>Rated</h4>
												<p><span class="rating-view" data-score="1"></span></p>
											</div>
											<div class="col-md-9 review-content">
												<h4>Review Title</h4>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
												quis nostru quis nostru.</p>
												<div class="text-right report-comment">
													<a href="#" class="link">Report Abuse</a>
												</div>
											</div>
										</div>
									</div>
									<div class="review-box">
										<div class="row">
											<div class="col-md-3 reviewer-data">
												<p class="text-muted"><small>Reviewer</small></p>
												<h3 class="reviewer-name">Kamalak kannan</h3>
												<p class="reviewer-from">From Coimbatore</p>
												<h4>Rated</h4>
												<p><span class="rating-view" data-score="3.5"></span></p>
											</div>
											<div class="col-md-9 review-content">
												<h4>Review Title</h4>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
												quis nostru quis nostru.</p>
												<div class="text-right report-comment">
													<a href="#" class="link">Report Abuse</a>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
							<div class="col-md-4">
								<h3 class="title-sub trim-top">Write a Review</h3>
                                
                                
				  <?php  
				  
				  if(!empty($sucmsg))
				  {
					  print_r($sucmsg);
					  
				  }
					  
				  
				 $attributes = array('class' => 'white-form', 'id' => 'jcForm11' ,"name" => "registrationform" );
				   
				    echo form_open("home/insertreviews", $attributes);
					 
					 ?>
                    
						 
									<div class="form-group">
                                    
                                    
										<label>Rating</label>
										  
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/rating.min.css">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="/favicon.png">
 
  
 
<main class="o-content">
  <div class="o-container">
    <div class="o-section">
      <div id="shop"></div>
    </div>
    <div class="o-section">
      <div id="github-icons"> </div>
    </div>
  </div>
</main>

 

<script src="<?php echo base_url() ?>assets/js/rating.min.js"></script>


<script>

  /**
   * Demo in action!
   */
  (function() {

    'use strict';

    // SHOP ELEMENT
    var shop = document.querySelector('#shop');

    // DUMMY DATA
    var data = [
      {
        title: "",
        description: "",
        rating: 3
      }
     
    ];

    // INITIALIZE
    (function init() {
      for (var i = 0; i < data.length; i++) {
        addRatingWidget(buildShopItem(data[i]), data[i]);
      }
    })();

    // BUILD SHOP ITEM
    function buildShopItem(data) {
      var shopItem = document.createElement('div');

      var html = '<div class="c-shop-item__img"></div>' +
        '<div class="c-shop-item__details">' +
          '<h3 class="c-shop-item__title">' + data.title + '</h3>' +
          '<p class="c-shop-item__description">' + data.description + '</p>' +
          '<ul class="c-rating"></ul>' +
        '</div>';

      shopItem.classList.add('c-shop-item');
      shopItem.innerHTML = html;
      shop.appendChild(shopItem);

      return shopItem;
    }

    // ADD RATING WIDGET
    function addRatingWidget(shopItem, data) {
		
      var ratingElement = shopItem.querySelector('.c-rating');
      var currentRating = data.rating;
      var maxRating = 5;
      var callback = function(rating) { 
	  
 
	  
	document.getElementById("rating_value").value =rating;
	   };	   

	  
      var r = rating(ratingElement, currentRating, maxRating, callback);
	  
	 
    }

  })();

</script>	

 </div>
               
               <?php $cid =$this->uri->segment(3);    ?>
                                    					
	 
                     <input type="hidden"    id="cre_id" name="crew_id" value="<?php echo $cid; ?>" class="form-control">	
                    
                                    <input type="hidden" value=""  id="rating_value" name="rating_value" class="form-control">	
									<div class="form-group">
										<label>Review Title</label>
										<input type="text"  name="review_title"class="form-control">	
									</div>
									<div class="form-group">
										<label>Your Review</label>
										<textarea class="form-control" name="your_review"></textarea>	
									</div>
									<div class="form-group text-right">
										<button type="submit" class="btn btn-red">Submit Review</button>
									</div>
								</form>
							</div>
						</div>
					</div>


				</div>
			</div>
			
		</div>
	</div>
</section>

<?php endforeach; ?>