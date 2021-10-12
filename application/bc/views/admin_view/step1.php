 
<section class="top-inner-section">
	<div class="container">
		<div class="inline-container registration-progress-container">
			<div class="inline-box registration-setup-box active">
				<span class="registration-setup-round">1</span> 
				<span class="registration-setup-title">Basic <br> Information</span>
			</div>
			<div class="inline-box registration-setup-box">
				<span class="registration-setup-round">2</span>
				<span class="registration-setup-title">Verification <br> Details</span>
			</div>
			<div class="inline-box registration-setup-box">
				<span class="registration-setup-round">3</span>
				<span class="registration-setup-title">Acedemics <br> &amp; S  kills</span>
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
					<h1>Register for your Membership.</h1>
            

				  <?php  
				  
				 $attributes = array('class' => 'gray-form', 'id' => 'jcForm11' ,"name" => "registrationform" );
				  
			 
				  
				    echo form_open("home/step1insert", $attributes); ?>
						<div class="form-group">
							<div class="row">
								<div class="col-md-8">
									<label>Your Name</label>
									<input type="text" id="jcName" name="jcName" class="form-control">	
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-8">
									<label>Your Email</label>
									<input type="text" id="jcEmail" name="jcEmail" class="form-control">	
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label>Choose Password</label>
									<input type="password" id="jcPassword" name="jcPassword" class="form-control">	
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label>Repeat Password</label>
									<input type="password" id="jsRepeatpass" name="jsRepeatpass" class="form-control">	
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Date of Birth</label>
							<div class="row">
								<div class="col-md-5">
									<input type="text" id="jcDob" name="jcDob" class="form-control datepicker" placeholder="Select Now">	
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-8">
									<label>Professional Type</label>
									<div class="row">
										<div class="col-md-4">
											<div class="radio">
	                      <input type="radio" name="radio1" id="radio1" class="prof_type1" value="1">
	                      <label for="radio1">
	                        Company
	                      </label>
	                    </div>
										</div>
										<div class="col-md-4">
											<div class="radio">
	                      <input type="radio" name="radio1" id="radio2" class="prof_type2"  value="2">
	                      <label for="radio2">
	                        Freelancer
	                      </label>
	                    </div>
										</div>
										<div class="col-md-4">
											<div class="radio">
	                      <input type="radio" name="radio1" id="radio3" class="prof_type3" value="3">
	                      <label for="radio3">
	                        Supplier
	                      </label>
	                    </div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="form-group company_select">
							<div class="row">
								<div class="col-md-12">
									<label>Select Your Profession</label>
									<div class="row">
										<div class="col-md-3">
											<div class="checkbox">
										    <input type="checkbox" name="jcCheckProf" id="checkprof1">
										    <label for="checkprof1">
										        Architect
										    </label>
										  </div>
										</div>
										<div class="col-md-3">
											<div class="checkbox">
										    <input type="checkbox" name="jcCheckProf" id="checkprof2">
										    <label for="checkprof2">
										        Civil Engineer
										    </label>
										  </div>
										</div>
										<div class="col-md-3">
											<div class="checkbox">
										    <input type="checkbox" name="jcCheckProf" id="checkprof3">
										    <label for="checkprof3">
										        Structural Engineer
										    </label>
										  </div>
										</div>
										<div class="col-md-3">
											<div class="checkbox">
										    <input type="checkbox" name="jcCheckProf" id="checkprof4">
										    <label for="checkprof4">
										        Interior Designer
										    </label>
										  </div>
										</div>
										<div class="col-md-3">
											<div class="checkbox">
										    <input type="checkbox" name="jcCheckProf" id="checkprof5">
										    <label for="checkprof5">
										        MEP Consultant
										    </label>
										  </div>
										</div>
										<div class="col-md-3">
											<div class="checkbox">
										    <input type="checkbox" name="jcCheckProf" id="checkprof6">
										    <label for="checkprof6">
										        Modual Kitchen
										    </label>
										  </div>
										</div>
									</div>

								</div>
							</div>
						</div>
						<div class="form-group freelance_select">
							<div class="row">
								<div class="col-md-12">
									<label>Select Your Profession</label>
									<div class="row">
										<div class="col-md-3">
											<div class="radio">
										    <input type="radio" name="jcRadioProf" id="radioprof1">
										    <label for="radioprof1">
										        Architect
										    </label>
										  </div>
										</div>
										<div class="col-md-3">
											<div class="radio">
										    <input type="radio" name="jcRadioProf" id="radioprof2">
										    <label for="radioprof2">
										        Civil Engineer
										    </label>
										  </div>
										</div>
										<div class="col-md-3">
											<div class="radio">
										    <input type="radio" name="jcRadioProf" id="radioprof3">
										    <label for="radioprof3">
										        Structural Engineer
										    </label>
										  </div>
										</div>
										<div class="col-md-3">
											<div class="radio">
										    <input type="radio" name="jcRadioProf" id="radioprof4">
										    <label for="radioprof4">
										        Interior Designer
										    </label>
										  </div>
										</div>
										<div class="col-md-3">
											<div class="radio">
										    <input type="radio" name="jcRadioProf" id="radioprof5">
										    <label for="radioprof5">
										        MEP Consultant
										    </label>
										  </div>
										</div>
										<div class="col-md-3">
											<div class="radio">
										    <input type="radio" name="jcRadioProf" id="radioprof6">
										    <label for="radioprof6">
										        Modual Kitchen
										    </label>
										  </div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group supplier_select">
							<div class="row">
								<div class="col-md-12">
									<label>Select Your Supplies</label>
									<div class="row">
										<div class="col-md-3">
											<div class="checkbox">
										    <input type="checkbox" name="jcCheckProf" id="checSupply1">
										    <label for="checSupply1">
										        Brick Supply
										    </label>
										  </div>
										</div>
										<div class="col-md-3">
											<div class="checkbox">
										    <input type="checkbox" name="jcCheckProf" id="checSupply2">
										    <label for="checSupply2">
										        Steel Supply
										    </label>
										  </div>
										</div>
										<div class="col-md-3">
											<div class="checkbox">
										    <input type="checkbox" name="jcCheckProf" id="checSupply3">
										    <label for="checSupply3">
										        Sand Supply
										    </label>
										  </div>
										</div>
										<div class="col-md-3">
											<div class="checkbox">
										    <input type="checkbox" name="jcCheckProf" id="checSupply4">
										    <label for="checSupply4">
										        Centering Materials
										    </label>
										  </div>
										</div>
										<div class="col-md-3">
											<div class="checkbox">
										    <input type="checkbox" name="jcCheckProf" id="checSupply5">
										    <label for="checSupply5">
										        Tiles &amp; Granites
										    </label>
										  </div>
										</div>
										<div class="col-md-3">
											<div class="checkbox">
										    <input type="checkbox" name="jcCheckProf" id="checSupply6">
										    <label for="checSupply6">
										        Sanitary Ware
										    </label>
										  </div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group form-footer">
							<!-- <a href="#" class="btn btn-red btn-lg">Continue</a> -->
							<button type="submit" class="btn btn-red btn-lg">Continue</button>
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
 