
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
?>
 

<section class="top-inner-section handyman-section">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<div class="handyman-booking-container">
					<p class="text-center"><img src="<?php echo base_url() ?>assets/images/handyman-icon.jpg" width="50px"></p>
					<h2 class="text-center">BOOK A HANDYMAN</h2>
                    
                    	    	  <?php  
				  
				 $attributes = array('class' => 'gray-form', 'id' => 'jcForm1' ,'method' => "post","name" => "handyman-booking-from" );
				     
				    echo form_open("home/submit_bookstep1", $attributes); ?>
           
						<div class="form-group">
							<input type="text"  value="<?php echo $data['citynmae']; ?>"class="form-control city_search "  name="location_id" id="" placeholder="Enter you City, Locality...">
						</div>
						<div class="form-group">
							<select class="form-control"  name="work_id" title='Choose Professional' >
								<option disabled selected>Select Service</option>
								<option value="1" <?php if($data['choose_profeesionaldata']==1) { echo'Selected';} ?>>Plumbing</option>
								<option value="2" <?php if($data['choose_profeesionaldata']==2) { echo'Selected';} ?>>Electrical</option>
								<option value="3" <?php if($data['choose_profeesionaldata']==3) { echo'Selected';} ?>>Carpentry</option>
								<option value="4" <?php if($data['choose_profeesionaldata']==4) { echo'Selected';} ?>>Cleaning</option>
								<option value="5" <?php if($data['choose_profeesionaldata']==5) { echo'Selected';} ?>>Masonry</option>
								<option value="6" <?php if($data['choose_profeesionaldata']==6) { echo'Selected';} ?> >Pest Control</option>
								<option value="7"<?php if($data['choose_profeesionaldata']==7) { echo'Selected';} ?>>Applances</option>
							</select>
						</div>
						<div class="form-group">
							<select class="form-control" name="work_subid"  title='Choose Professional'>
								<option disabled selected>Select Plumbing Service</option>
								<option value="1">General Plumbing Service</option>
                                	<option value="2">General Plumbing Service2</option>
							</select>
						</div>
						<h3 class="text-center">Your Details</h2>
						<div class="form-group">
							<input type="text" name="customer_name" class="form-control" id="" placeholder="Name">
						</div>
						<div class="form-group">
						  <div class="input-group">
							  <span class="input-group-addon" id="">+91</span>
							  <input type="text"  name="customer_mobile" class="form-control" id="" placeholder="Phone Number">
							</div>
						</div>
						<div class="form-group">
							<input type="text"  name="customer_email" class="form-control" id="" placeholder="Email Address">
						</div>
						<div class="form-group">
							<input type="text" name="customer_pincode" class="form-control" id="" placeholder="Enter Pincode">
						</div>
						<div class="form-group">
							<div class="checkbox">
						    <input type="checkbox" value="1" name="acceptterms" id="acceptterms">
						    <label for="acceptterms">
						        I accept the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a> of CivilCrew.
						    </label>
						  </div>
					  </div>
						<div class="form-group">
							<button class="btn btn-red btn-block btn-lg">Book Now</button>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-7">
				<!-- <h1 class="main-title"><strong>CivilCrew Handyman</strong></h1> -->
			</div>
		</div>
	</div>
</section>