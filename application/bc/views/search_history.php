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
										<img src="images/dp-default.jpg">
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
					<h2 class="trim-top"><strong>Your Search History</strong></h2>
					<hr>
					
					<div class="search-history-container">
						<div class="search-history-box">
                        
							<div class="row">
                                   <?php   
					 			  foreach ($data1 as $row){
									 	  
								
									  
									   ?>
								<div class="col-md-9">
									<h3>Search in
                                    <?php
										   $location=$row->located;
									   
									   $list1=explode(',', $location);
									foreach($list1 as $dta)
									{
										 
									if($dta==1)
									{
										
										echo'Chennai';
						
									}
									else if($dta==2)
									{
											echo' Bangalore';
						
									}
									
									else if($dta==3)
									{
										echo 'Coimbatore';
									}
										
									}
									
									
									 ?>
                                     <small class="text-muted"><?php echo $row->created_at; ?></small></h3>
									<p>
										<strong>Project Type: </strong> 
                                        
                                        <?php
										   $p_type12=$row->p_type;
									   
									   $p_type1=explode(',', $p_type12);
									foreach($p_type1 as $p_type2)
									{
										 
									if($p_type2==1)
									{
										
										echo'Villas,';
						
									}
									else if($p_type2==2)
									{
											echo'  Offices,';
						
									}
									
									else if($p_type2==3)
									{
										echo 'Commercial Buildings,';
									}
									else if($p_type2==4)
									{
										echo 'Multiplexes,';
									}
										else if($p_type2==5)
									{
										echo 'Community Spaces';
									}
										
									}
									
									
									 ?>
                                        
                            
                                        
                                        
                                        
                                        <br>
										<strong>Service Type: </strong>
                                          <?php
										   $s_offered12=$row->s_offered;
									   
									   $s_offered1=explode(',', $s_offered12);
									foreach($s_offered1 as $s_offered2)
									{
										 
									if($s_offered2==1)
									{
										
										echo "New Construction";
						
									}
									else if($s_offered2==2)
									{
											echo"Project Planning";
						
									}
									
									else if($s_offered2==3)
									{
						 
										
												echo" Resuming Project ";
									}
									else if($s_offered2==4)
									{
										echo 'Demoliton,';
															echo" Demoliton ";
									}
										else if($s_offered2==5)
									{
						  	echo"Re-Construction ";
									}
										
									}
									
									
									 ?> <br>
										<strong>SQ.FT. RANGE: </strong> 
                                        
                                        
                                         <?php
										  echo  $sq_range12=$row->sq_range;
								 
									   $sq_range1=explode(',', $sq_range12);
									foreach($sq_range1 as $sq_range2)
									{
										 
									if($sq_range2==1)
									{
										
										echo "1000 - 5000 sqft";
						
									}
									else if($sq_range2==2)
									{
											echo"5001 - 10000 sqft";
						
									}
									
									else if($sq_range2==3)
									{
						  	
												echo" 10001 - 15000 sqft";
									}
									else if($sq_range2==4)
									{
							 
															echo" 15001 - 25000 sqft ";
									}
										 
										
									}
									
									
									 ?>
                                        
                                        
                                         <br>
										<strong>Crew: </strong> Architects, Civil Engineers <br>
									</p>
								</div>
								<div class="col-md-3">
									<a href="#" class="btn btn-block btn-red btn-sm">View Results</a>
									<a href="#" class="btn btn-block btn-default btn-sm">Delete Search</a>
								</div>
                                
                                <?php }  ?>
							</div>
                            
                            
						</div>
						
						
						
						
					</div>
					


				</div>
			</div>
		</div>
	</div>
</div>