 
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
			<div class="inline-box registration-setup-box ">
				<span class="registration-setup-round">3</span>
				<span class="registration-setup-title">Acedemics <br> &amp; Skills</span>
			</div>
			<div class="inline-box registration-setup-box active">
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
						<h1>Complete Your Registration</h1>
                                    
				  <?php  
				  			 
		 	           $u_rec_id  = $this->session->userdata('user_id');
                
				  
				     $attributes = array('class' => 'gray-form', 'id' => 'jcForm4' ,"name" => "registrationform" );
				  
				     echo form_open("home/step1insert3", $attributes); ?>
                     
	           <input type="hidden" name="umail_id" value="<?php echo $u_rec_id; ?>">
        
						<h3><strong>Service Areas</strong></h3>
						<div class="form-group">
							<div class="row">
								<div class="col-md-12">
									<label>Select Your Service Areas</label>
									<select class="form-control select2" id="jcServArea" name="jcServArea[]" multiple>
										 		<optgroup label="Tamil Nadu">
                                          <option data-subtext="ch">Chennai(All) </option>
								      <option value="1" data-subtext="Chennai"> Chennai North</option>
								      <option value="2"  data-subtext="Chennai"> Chennai West</option>
								      <option  value="3" data-subtext="Chennai"> Chennai East</option>
								      <option  value="4" data-subtext="Chennai"> Chennai South</option>
								      <option  value="5" data-subtext="Chennai"> Chennai Central</option>
                                      	      <option data-subtext="Coimbatore">Coimbatore(All)</option>
								      <option value="6" data-subtext="Coimbatore">Coimbatore North</option>
								      <option value="7"  data-subtext="Coimbatore">Coimbatore West</option>
								      <option value="8"  data-subtext="Coimbatore">Coimbatore East</option>
								      <option value="10"  data-subtext="Coimbatore">Coimbatore South</option>
								      <option  value="11" data-subtext="Coimbatore">Coimbatore Central</option>
								    </optgroup>
								    <optgroup label="Karnataka">
                                    		      <option data-subtext="Bangalore">Bangalore(All)</option>
								      <option value="12"  data-subtext="Bangalore">Bangalore North</option>
								      <option value="13"  data-subtext="Bangalore">Bangalore West</option>
								      <option value="14"  data-subtext="Bangalore">Bangalore East</option>
								      <option value="15"  data-subtext="Bangalore">Bangalore South</option>
								      <option value="16"  data-subtext="Bangalore">Bangalore Central</option>
								    </optgroup>
									</select>	
									<p><small>Note: Ctrl+ Select for Selecting Multiple Cities.</small></p>
									<div class=""></div>
								</div>
							</div>
						</div>
						<hr>
						<div class="form-group">
							<div class="row">
								<div class="col-md-12">
									<label>Tell us more about your company</label>
									<textarea name="aboutcompany" class="form-control"></textarea>	
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-12">
									<div class="checkbox">
                    <input id="checkbox1" name="jcTerms" type="checkbox">
                    <label for="checkbox1">
                        I Accept the <a href="#">Terms &amp; Conditions of Civilcrew.com</a> and <a href="#">Privacy Policy.</a>
                    </label>
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
 