
            <!-- End Header -->
            <!-- Begin Page Content -->
            <div class="page-content d-flex align-items-stretch">
                 <?php include('inc/admin_sidebar.php') ?>
                <!-- End Left Sidebar -->
                <div class="content-inner">
                    <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title">Add Team</h2>
	                                <div>
			                            <ul class="breadcrumb">
			                                <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard'); ?>"><i class="ti ti-home"></i></a></li>
			                                <li class="breadcrumb-item"><a href="<?php echo site_url('team_list'); ?>">Team</a></li>
			                                <li class="breadcrumb-item active"><a href="<?php echo site_url('team_add'); ?>">Add Team</a></li>
			                            </ul>
	                                </div>
	                            </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <div class="row flex-row">
                            <div class="col-xl-12">
                                <!-- Form -->
                                <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Team Form</h4>
                                    </div>
                                    <div class="widget-body">
                                        
										
										    
                               <?php 
							$failmsgteam =  $this->uri->segment(2);
							if($failmsgteam){
							?>
							
							<div class="row">
							
								<div class="col-md-3"></div>
								<div class="col-md-6">
							<div class="alert alert-danger alert-dissmissible fade show" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                            <strong>This! Phone And Email</strong> Already Exists!
                                        </div>
                                        </div>
                                        <div class="col-md-3"></div>
							
                                    </div>
                                    <?php } ?>  
										
										 <?php  
	
				$attributes = array("class" => "","id" => "teamadd", "name" => "teamform","novalidate");
				echo form_open_multipart("add_team", $attributes);
			
				?>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Team Name *</label>
                                                <div class="col-lg-5">
                                                    <input type="text" name="team_name" class="form-control" placeholder="Enter your Team name" required>
                                                     
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Email Address *</label>
                                                <div class="col-lg-5">
                                                    <div class="input-group">
                                                        <input type="email" name="team_email" class="form-control" placeholder="Enter Team email" required>
                                                       
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">City *</label>
                                                <div class="col-lg-5">
                                                    <input type="text" name="team_city" class="form-control" placeholder="City" required>
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Phone Number *</label>
                                                <div class="col-lg-5">
                                                    <div class="input-group">
                                                        <span class="input-group-addon addon-primary">
                                                            <i class="la la-phone"></i>
                                                        </span>
                                                        <input type="text" name="team_phone" class="form-control" placeholder="Phone number" required>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Date *</label>
                                                <div class="col-lg-5">
                                                    <input type="date" name="team_date" class="form-control" placeholder="MM/DD/YYYY" required>
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Team Size *</label>
                                                <div class="col-lg-5">
                                                    <div class="input-group">
                                                       
                                                        <input type="number" name="team_size" class="form-control" placeholder="Team Size" required>
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Team Logo *</label>
                                                <div class="col-lg-5">
                                                    <input type="file" name="team_logo" class="form-control" required>
                                                    
                                                     
                                                </div>
                                            </div>
                                            
                                             <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Team Slogon </label>
                                                <div class="col-lg-5">
                                                    <div class="input-group">
                                                       
                                                        <input type="text" name="team_slogon" class="form-control" placeholder="Enter The Team Slogon">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="em-separator separator-dashed"></div>
                                            
                                            
                                            <div class="text-right">
                                                <button class="btn btn-gradient-01" type="submit">Submit Form</button>
                                                <button class="btn btn-shadow" type="reset">Reset</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- End Form -->
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Container -->
                    <!-- Begin Page Footer-->
                    
                    <!-- End Page Footer -->
                    <a href="#" class="go-top"><i class="la la-arrow-up"></i></a>
                    <!-- Offcanvas Sidebar -->
                    
                    <!-- End Offcanvas Sidebar -->
                </div>
            </div>
            <!-- End Page Content -->
        </div>
        <!-- Begin Vendor Js -->
        <script src="<?php echo base_url() ?>assets/vendors/js/base/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/vendors/js/base/core.min.js"></script>
        <!-- End Vendor Js -->
        <!-- Begin Page Vendor Js -->
        <script src="<?php echo base_url() ?>assets/vendors/js/nicescroll/nicescroll.min.js"></script>
        <script src="<?php echo base_url() ?>assets/vendors/js/app/app.min.js"></script>
        <!-- End Page Vendor Js -->
        <!-- Begin Page Snippets -->
        <script src="<?php echo base_url() ?>assets/js/components/validation/validation.min.js"></script>
        
         <script src="<?php echo base_url() ?>assets/js/jquery.validate.js"></script>
  
         <script src="<?php echo base_url() ?>assets/js/main.js"></script>
        
        <!-- End Page Snippets -->
    </body>
    
    
    
    <script type="text/javascript">

        //Team Company Page Validation End ************************************


        $('#teamadd').validate({
          rules: {
            team_name: "required",
            team_email: "required",
            team_city: "required",
            team_phone: {
              required: true,
              number: true,
              rangelength: [10, 10]
            },
            team_date: "required",
            team_size: "required",            
            team_logo: "required",
            
          },
          messages: {
            team_name: " Please Enter a valid Team Name",            
            team_email: " Please Enter a valid Email",
            team_city: "Please Enter a valid City",
			team_phone: "Please Enter a valid Phone Number",
            team_date: "Please Enter a valid Date",           
            team_size: "Please Enter Team Size",            
            team_logo: "Please Upload Image",
            
          },
          errorPlacement: function (error, element) {
            if (element.parent('.input-group').length || element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
          }
        });



     

    </script>
    
    <style>
.error
	   {
	    color: red;
	   }

</style>
    
    
</html>