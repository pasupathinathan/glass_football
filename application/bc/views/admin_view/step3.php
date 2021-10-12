 
<section class="top-inner-section">
	<div class="container">
		<div class="inline-container registration-progress-container">
			<div class="inline-box registration-setup-box ">
				<span class="registration-setup-round">1</span> 
				<span class="registration-setup-title">Basic <br> Information</span>
			</div>
			<div class="inline-box registration-setup-box ">
				<span class="registration-setup-round">2</span>
				<span class="registration-setup-title">Verification <br> Details</span>
			</div>
			<div class="inline-box registration-setup-box active">
				<span class="registration-setup-round">3</span>
				<span class="registration-setup-title">Acedemics <br> &amp; Skills</span>
			</div>
			<div class="inline-box registration-setup-box">
				<span class="registration-setup-round"><i class="glyphicon glyphicon-ok text-success"></i></span>
				<span class="registration-setup-title">Complete <br> Registration</span>
			</div>
		</div>
	</div>
</section>

<div class="registration-wraper">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="register-container">
						<h1>Company Profile</h1>
                                    
				  <?php  
				  			 
		 	           $u_rec_id  = $this->session->userdata('user_id');
                
				  
				     $attributes = array('class' => 'gray-form', 'id' => 'jcForm3c1' ,"name" => "registrationform" );
				  
				     echo form_open("home/step1insert2", $attributes); ?>
                     
	           <input type="text" name="umail_id" value="<?php echo $u_rec_id; ?>">
       
						<h3><strong>Chief Personnel <small>*Optional</small></strong></h3>
						<div class="form-group">
							<div class="row">
								<div class="col-md-8">
									<label>Name</label>
									<input type="text" name="cp_name" id="" class="form-control">	
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-8">
									<label>Designation</label>
									<input type="text" name="cp_designation" id="" class="form-control">	
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-8">
									<label>Contact No</label>
									<input type="text" name="cp_contactno" id="" class="form-control">	
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-8">
									<label>Email</label>
									<input type="text" name="cp_email" id="" class="form-control">	
								</div>
							</div>
						</div>
						<hr>
						<div class="form-group">
							<div class="row">
								<div class="col-md-12">
									<label>Company Skills</label>
									<select class="form-control select2" name="jcCompSkills" id="jcCompSkills" multiple></select>	
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-12">
									<label>Sq.ft. Range</label>
									<div class="row">
										<div class="col-md-3">
											<div class="checkbox">
										    <input type="checkbox" name="jcCheckSq" id="checksq1">
										    <label for="checksq1">
										        1000 - 5000 sqft
										    </label>
										  </div>
										</div>
										<div class="col-md-3">
											<div class="checkbox">
										    <input type="checkbox" name="jcCheckSq" id="checksq2">
										    <label for="checksq2">
										        5001 - 10000 sqft
										    </label>
										  </div>
										</div>
										<div class="col-md-3">
											<div class="checkbox">
										    <input type="checkbox" name="jcCheckSq" id="checksq3">
										    <label for="checksq3">
										        10001  - 15000 sqft
										    </label>
										  </div>
										</div>
										<div class="col-md-3">
											<div class="checkbox">
										    <input type="checkbox" name="jcCheckSq" id="checksq4">
										    <label for="checksq4">
										        15001 - 25000 sqft
										    </label>
										  </div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-12">
									<label>Select Project Types your Offer</label>

									<div class="row">
										<div class="col-md-3">
											<div class="checkbox">
										    <input type="checkbox" name="jcCheckProj" id="checkproj1">
										    <label for="checkproj1">
										        Villas
										    </label>
										  </div>
										</div>
										<div class="col-md-3">
											<div class="checkbox">
										    <input type="checkbox" name="jcCheckProj" id="checkproj2">
										    <label for="checkproj2">
										        Offices
										    </label>
										  </div>
										</div>
										<div class="col-md-3">
											<div class="checkbox">
										    <input type="checkbox" name="jcCheckProj" id="checkproj3">
										    <label for="checkproj3">
										        Commercial Buildings
										    </label>
										  </div>
										</div>
										<div class="col-md-3">
											<div class="checkbox">
										    <input type="checkbox" name="jcCheckProj" id="checkproj4">
										    <label for="checkproj4">
										        Multiplexes
										    </label>
										  </div>
										</div>
										<div class="col-md-3">
											<div class="checkbox">
										    <input type="checkbox" name="jcCheckProj" id="checkproj5">
										    <label for="checkproj5">
										        Community Spaces
										    </label>
										  </div>
										</div>

									</div>

								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-12">
									<label>Services You cover</label>
									
									<div class="row">
										<div class="col-md-3">
											<div class="checkbox">
										    <input type="checkbox" name="jcCheckServ" id="checkser1">
										    <label for="checkser1">
										        New Construction
										    </label>
										  </div>
										</div>
										<div class="col-md-3">
											<div class="checkbox">
										    <input type="checkbox" name="jcCheckServ" id="checkser2">
										    <label for="checkser2">
										        Resume Construction
										    </label>
										  </div>
										</div>
										<div class="col-md-3">
											<div class="checkbox">
										    <input type="checkbox" name="jcCheckServ" id="checkser3">
										    <label for="checkser3">
										        Demolition
										    </label>
										  </div>
										</div>
										<div class="col-md-3">
											<div class="checkbox">
										    <input type="checkbox" name="jcCheckServ" id="checkser4">
										    <label for="checkser4">
										        Re-Construction
										    </label>
										  </div>
										</div>

									</div>

								</div>
							</div>
						</div>
						
						<div class="form-group form-footer">
							<button type="submit" class="btn btn-red btn-lg">Continue</button>
							<a href="#" class="btn btn-default btn-lg">Back</a>
						</div>

					</form>
				 

				</div>
			</div>
			<div class="col-md-4">
				<div class="registration-note-container">
					<h3>Once you join civil crew you will get :</h3>
					<div class="registration-note">
						<span><img src="<?php echo base_url() ?>assets/images/icon-cloud.png" height="40px"></span>
						<span>Showoff your Skillfull Profile</span>
					</div>
					<div class="registration-note">
						<span><img src="<?php echo base_url() ?>assets/images/icon-platform.png" height="40px"></span>
						<span>Get instant leads via E-mail &amp; SMS</span>
					</div>
					<div class="registration-note">
						<span><img src="<?php echo base_url() ?>assets/images/icon-conjoin.png" height="40px"></span>
						<span>Conjoin with your customers directly</span>
					</div>
					<div class="registration-note">
						<span><img src="<?php echo base_url() ?>assets/images/icon-track.png" height="40px"></span>
						<span>Track customer search history</span>
					</div>
					<div class="registration-note">
						<span><img src="<?php echo base_url() ?>assets/images/icon-reach.png" height="40px"></span>
						<span>Manage your Membership to Reach more People.</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 