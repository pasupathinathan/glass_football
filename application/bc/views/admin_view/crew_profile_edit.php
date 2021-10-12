<?php

foreach($data1 as $store):


  ?>

<body data-ng-app>
    


  <section class="content">
      

   
      <div class="warper container-fluid">
        <div class="page-header"><h1>Add City<small></small></h1></div>
          
        

                
        
            <div class="row">
              <div class="col-md-10">
                <div class="panel panel-default">
                  <div class="panel-heading">Add City  for Andhra Pradesh</div>
                  <div class="panel-body">
                  
                   <?php  
				   
				    $profile_id=  $this->uri->segment(3);
				  
				 $attributes = array('class' => 'gray-form', 'id' => 'jcForm2c1' ,"name" => "profileform" );
				 				  
				    echo form_open("admin/crew_profile_update", $attributes); ?>  
                    
                           
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                  <label for="">Registrant Name</label>
                                  <input type="text" class="form-control" name='reg_name'  value='<?php echo $store->reg_name; ?>' >
                                  <input type="hidden" class="form-control" name='profile_id'  value="<?php echo   $profile_id; ?>"  >
                                </div>
                            </div>
                            
                             <div class="col-md-3">
                                <div class="form-group">
                                  <label for="">E-mail</label>
                                  <input type="text" class="form-control" name='reg_email' id='reg_email' value='<?php echo $store->reg_email; ?>' >
                                </div>
                            </div>
                            
                            
                            
                            
                        </div>
                        
                        <div class="row">
                        
                        
                            <div class="col-md-4">
                                <div class="form-group">
                                  <label for="">Personal Details Verification Status</label>
                                  <div>
                                  <div class="switch-button success showcase-switch-button">
                                    <input id="switch-button-3" type="checkbox" value="1"  <?php if($store->reg_personalverify =='1'){?> checked <?php } ?>   name='reg_personalverify'  >
                                    <label for="switch-button-3"></label>
                                  </div>
                                  </div>
                                </div>
                            </div>
                            
                            
                           <div class="col-md-4">
                                <div class="form-group">
                                  <label for="">Academics Verification Status</label>
                                  <div>
                                  <div class="switch-button success showcase-switch-button">
                                    <input id="switch-button-4" type="checkbox" value="1"   <?php if($store->reg_academicverify =='1'){?> checked <?php } ?>    name='reg_academicverify'  >
                                    <label for="switch-button-4"></label>
                                  </div>
                                  </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                  <label for="">Skills Verification Status</label>
                                  <div>
                                  <div class="switch-button success showcase-switch-button">
                                    <input id="switch-button-5" type="checkbox" value="1"   <?php if($store->reg_skillverify =='1'){?> checked <?php } ?>   name='reg_skillverify'  >
                                    <label for="switch-button-5"></label>
                                  </div>
                                  </div>
                                </div>
                            </div>
                            
                            
                        </div>
                        
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                  <label for="">DOB</label>
                                  <input type="date" class="form-control" name='reg_dob'  value='<?php echo $store->reg_dob; ?>' >
                                 
                                </div>
                            </div>
                            
                             <div class="col-md-3">
                                <div class="form-group">
                                  <label for="">Profession Type</label>
                                  <input type="text" class="form-control" name='reg_profession_type'  value='<?php echo $store->reg_profession_type; ?>' >
                                </div>
                            </div>
                            
                            
                            
                            <div class="col-md-3">
                                <div class="form-group">
                                  <label for="">Profession </label>
                                 <textarea class="form-control" name='reg_profession'  value=''><?php echo $store->reg_profession; ?></textarea>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                  <label for="">Company Name</label>
                                  <input type="text" class="form-control" name='reg_company_name'  value='<?php echo $store->reg_company_name; ?>' >
                                 
                                </div>
                            </div>
                            
                             <div class="col-md-3">
                                <div class="form-group">
                                  <label for="">Company Register No.</label>
                                  <input type="text" class="form-control" name='reg_company_regno'  value='<?php echo $store->reg_company_regno; ?>' >
                                </div>
                            </div>
                            
                            
                            
                            <div class="col-md-3">
                                <div class="form-group">
                                  <label for="">Registered Date </label>
                                  <input type="date" class="form-control" name='reg_year'  value='<?php echo $store->reg_year; ?>' >
                                </div>
                            </div>
                            
                            <div class="col-md-3">
                                <div class="form-group">
                                  <label for="">COA Registration No. </label>
                                  <input type="text" class="form-control" name='reg_coa'  value='<?php echo $store->reg_coa; ?>' >
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                  <label for="">Mobile Number</label>
                                  <input type="text" class="form-control" name='reg_display_phone'  value='<?php echo $store->reg_display_phone; ?>' >
                                 
                                </div>
                            </div>
                            
                             <div class="col-md-3">
                                <div class="form-group">
                                  <label for="">Address</label>
                                  <input type="text" class="form-control" name='reg_address'  value='<?php echo $store->reg_address; ?>' >
                                </div>
                            </div>
                            
                            
                            
                            <div class="col-md-3">
                                <div class="form-group">
                                  <label for="">City </label>
                                  <input type="text" class="form-control" name='reg_city'  value='<?php echo $store->reg_city; ?>' >
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                  <label for="">State</label>
                                  <input type="text" class="form-control" name='reg_state'  value='<?php echo $store->reg_state; ?>' >
                                 
                                </div>
                            </div>
                            
                             <div class="col-md-3">
                                <div class="form-group">
                                  <label for="">Zone</label>
                                  <input type="text" class="form-control" name='reg_zone'  value='<?php echo $store->reg_zone; ?>' >
                                </div>
                            </div>
                            
                            
                            
                            <div class="col-md-3">
                                <div class="form-group">
                                  <label for="">Pincode </label>
                                  <input type="text" class="form-control" name='reg_zipcode'  value='<?php echo $store->reg_zipcode; ?>' >
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                  <label for="">Chief Personnel Name</label>
                                  <input type="text" class="form-control" name='reg_chief_name'  value='<?php echo $store->reg_chief_name; ?>' >
                                 
                                </div>
                            </div>
                            
                             <div class="col-md-3">
                                <div class="form-group">
                                  <label for="">Chief Personnel Designation</label>
                                  <input type="text" class="form-control" name='reg_chief_designation'  value='<?php echo $store->reg_chief_designation; ?>' >
                                </div>
                            </div>
                            
                            
                            
                            <div class="col-md-3">
                                <div class="form-group">
                                  <label for="">Chief Personnel Contact No.</label>
                                  <input type="text" class="form-control" name='reg_chief_phone' value='<?php echo $store->reg_chief_phone; ?>' >
                                </div>
                            </div>
                            
                            <div class="col-md-3">
                                <div class="form-group">
                                  <label for="">Chief Personnel E-mail</label>
                                  <input type="text" class="form-control" name='reg_chief_email'  value='<?php echo $store->reg_chief_email; ?>' >
                                </div>
                            </div>
                            
                        </div>
                        
                        
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                  <label for="">Skillset</label>
                                  <textarea class="form-control" name='reg_skills'  value=''><?php echo $store->reg_skills; ?></textarea>
                                 
                                </div>
                            </div>
                            
                             <div class="col-md-3">
                                <div class="form-group">
                                  <label for="">Area in sq. ft</label>
                                 <textarea class="form-control" name='reg_sqft'  value=''><?php echo $store->reg_sqft; ?></textarea>
                                </div>
                            </div>
                            
                            
                            
                            <div class="col-md-3">
                                <div class="form-group">
                                  <label for="">Project Types</label>
                                  <textarea class="form-control" name='reg_projects'  value=''><?php echo $store->reg_projects; ?></textarea>
                                </div>
                            </div>
                            
                            <div class="col-md-3">
                                <div class="form-group">
                                  <label for="">Services covered</label>
                                   <textarea class="form-control" name='reg_services'  value=''><?php echo $store->reg_services; ?></textarea>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label for="">Services Areas covered</label>
                                 <textarea class="form-control" name='reg_service_areas' value=''><?php echo $store->reg_service_areas; ?></textarea>
                                 
                                </div>
                            </div>
                            
                             <div class="col-md-6">
                                <div class="form-group">
                                  <label for="">Additional details about the company</label>
                                    <textarea class="form-control" name='aboutcompany'  value=''><?php echo $store->aboutcompany; ?></textarea>
                                </div>
                            </div>
                            
                            
                            
                           
                            
                            
                            
                        </div>
                        
                         
                            
                            <div class="row">
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-purple btn-lg">Submit</button>
                            </div>
                            
                            </div>
                        
                                       
                    </form>         
                    </div>
                  </div>
              </div>
            </div>


        
    
        


          
      </div> 
   
   
  
  </section>
<?php endforeach; ?>