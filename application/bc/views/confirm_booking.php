<?php 
  
 
  $nation_id12121 = $this->session->userdata('nation');

?>


<section class="top-inner-section handyman-section">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<div class="handyman-booking-container">
					<p class="text-center"><img src="<?php echo base_url() ?>assets/images/plumber-icon.png" width="50px"></p>
					<h2 class="text-center">BOOK PLUMBING <br> <small>General Plumbing Service</small></h2>
					    	  <?php  
				  
				 $attributes = array('class' => 'andyman-booking-from', 'id' => 'jcForm1' ,'method' => "post","name" => "handyman-booking-from" );
				     
				    echo form_open("home/submit_bookstep2", $attributes); ?>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="label-lg">Select Quantity</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
                            
									<div id="numberPicker"></div>
								</div>
							</div>
						</div>

						<h4 class="text-center">When would you like us to come?</h4>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<select class="form-control" name="fromhour">
										<option>Select Date</option>
										<option>Wed 25th May</option>
										<option>Thu 26th May</option>
										<option>Fri 27th May</option>
										<option>Sat 28th May</option>
										<option>Sun 28th May</option>
										<option>Mon 29th May</option>
										<option>Tue 30th May</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<select class="form-control" name="tohour">
										<option>Select Timing</option>
										<option>9AM to 12PM</option>
										<option>12PM to 3PM</option>
										<option>3PM to 6PM</option>
										<option>6PM to 9PM</option>
									</select>
								</div>
							</div>
						</div>
						<h4 class="text-center">Your Address</h4>
						<div class="form-group">
							<input type="text" class="form-control" name="addressline1" placeholder="Address Line 1">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="addressline2" placeholder="Address Line 2">
						</div>
						<div class="row">
							<div class="col-md-7">
								<div class="form-group">
									<input type="text" class="form-control" name="city" placeholder="City">
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-group">
									<input type="text" class="form-control" name="pincode" placeholder="Pincode">
								</div>
							</div>
						</div>
						<h4 class="text-center">Instruction / Description</h4>
						<div class="form-group">
							<textarea class="form-control" name="instruction" placeholder="" rows="3"></textarea>
						</div>
						<h4 class="text-center">Verify your Mobile</h4>
						<div class="row">
							<div class="col-md-7">
								<div class="form-group">
									<input type="text" class="form-control" name="verify" placeholder="Enter OTP">
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-group">
				        <button class="btn btn-block btn-outline-bk" type="button">Re-send OTP</button>
								</div>
							</div>
						</div>
						<p class="text-muted text-center"><small>Enter the 4 digit OTP sent as SMS to 9874561230</small></p>
						<hr>
				    <div class="form-group">
							<div class="input-group">
					      <input type="text" class="form-control" name="cupon_code" placeholder="Coupon Code">
					      <span class="input-group-btn">
					        <button class="btn btn-red" type="button">Apply</button>
					      </span>
					    </div>
				    </div>
				    <div class="form-group">
				    	<div class="row">
				    		<div class="col-md-8">
				    			<h2 class="">Total Price <br><small>(Inclusive of all Taxes)</small></h2>
				    		</div>
				    		<div class="col-md-4">
				    			<h2 class="text-right">Rs. 300</h2>
				    		</div>
				    	</div>
				    </div>
				    <div class="form-group">
							<div class="checkbox">
						    <input type="checkbox" name="accpetterm1" value="1" name="acceptterms" id="acceptterms">
						    <label for="acceptterms">
						        I accept the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a> of CivilCrew.
						    </label>
						  </div>
					  </div>
				    <div class="form-group">
							<button class="btn btn-red btn-block btn-lg">Confirm Book</button>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-7">
				<h1 class="main-title"><strong>General Plumbing Service</strong></h1>
				<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
			</div>
		</div>
	</div>
</section>