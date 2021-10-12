 
<section class="top-inner-section">
	<div class="container">
		<div class="inline-container registration-progress-container">
			<div class="inline-box registration-setup-box ">
				<span class="registration-setup-round">1</span> 
				<span class="registration-setup-title">Basic <br> Information</span>
			</div>
			<div class="inline-box registration-setup-box active">
				<span class="registration-setup-round">2</span>
				<span class="registration-setup-title">Verification <br> Details</span>
			</div>
			<div class="inline-box registration-setup-box">
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
					<h1>Register for your Membership.</h1>
            

				  <?php  
			 
		 	  $u_rec_id  = $this->session->userdata('user_id');
                
 
				  
				 $attributes = array('class' => 'gray-form', 'id' => 'jcForm2c' ,"name" => "registrationform" );
				  
			 
				  
				    echo form_open("home/step1insert1", $attributes); ?>
				
                 
                <input type="hidden" name="umail_id" value="<?php echo $u_rec_id; ?>">
						<div class="form-group">
							<div class="row">
								<div class="col-md-8">
									<label>Company Name</label>
									<input type="text" id="jcCompany" name="jcCompany" class="form-control">	
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-8">
									<label>Company Register No.</label>
									<input type="text" id="jcCompanyReg" name="jcCompanyReg" class="form-control">	
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Registered Date</label>
							<div class="row">
								<div class="col-md-5">
									<input type="text" id="jcCompanyRegDate" name="jcCompanyRegDate" class="form-control datepicker" placeholder="Select Now">	
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-8">
									<label>COA Registration No.</label> <a class="help-tip-icon" tabindex="0" data-container="body" data-toggle="popover" data-trigger="focus" data-placement="right" data-content="COA Number is must for registering as an architect Company"><i class="glyphicon glyphicon-question-sign"></i></a>
									<div class="row">
										<div class="col-md-5">
											<input type="text" id="jcCompanyCOA" name="jcCompanyCOA" class="form-control">
										</div>
									</div>
								</div>
								<div class="col-md-4">
									
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-8">
									<label>Mobile Number</label> <a class="help-tip-icon" tabindex="0" data-container="body" data-toggle="popover" data-trigger="focus" data-placement="right" data-content="Verificarion code will be sent to this Number."><i class="glyphicon glyphicon-question-sign"></i></a>
									<div class="input-group">
									  <span class="input-group-addon">+91</span>
									  <input type="text" id="jcCompanyMobile" name="jcCompanyMobile" class="form-control">
									</div>	
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-8">
									<label>Address</label>
									<textarea class="form-control" id="jcAddress" name="jcAddress"></textarea>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-4">
									<label>State</label>
									<select class="form-control" id="jcState" name="jcState">
										<option selected disabled>Select State</option>
										<option>Andra Pradesh</option>
										<option>Karnataka</option>
										<option>Kerala</option>
										<option>Maharastra</option>
										<option>Tamil Nadu</option>
										<option>Telengana</option>
									</select>	
								</div>
								<div class="col-md-4">
									<label>City</label>
									<select class="form-control" id="jcCity" name="jcCity">
										<option selected disabled></option>
										<option>Andra Pradesh</option>
										<option>Karnataka</option>
										<option>Kerala</option>
										<option>Maharastra</option>
										<option>Tamil Nadu</option>
										<option>Telengana</option>
									</select>	
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-4">
									<label>Zone</label>
									<select class="form-control" id="jcZone" name="jcZone">
										<option selected disabled></option>
										<option>Andra Pradesh</option>
										<option>Karnataka</option>
										<option>Kerala</option>
										<option>Maharastra</option>
										<option>Tamil Nadu</option>
										<option>Telengana</option>
									</select>	
								</div>
								<div class="col-md-4">
									<label>Pincode</label>
									<input type="text" class="form-control" id="jcPincode" name="jcPincode">	
								</div>
							</div>
						</div>
						<div class="form-group form-footer">
							<button type="submit" class="btn btn-red btn-lg">Continue</button>
							<a href="#" class="btn btn-default btn-lg">Back</a>
						</div>

					</form>
					

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
 