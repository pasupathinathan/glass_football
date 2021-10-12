<?php
//Access them like so

 foreach ($data1 as $store) : 

 ?>

<body data-ng-app>
    


  <section class="content">
      
  
   
      <div class="warper container-fluid">
        <div class="page-header"><h1>Edit Technician<small></small></h1></div>
          
        

                
        
            <div class="row">
              <div class="col-md-10">
                <div class="panel panel-default">
                  <div class="panel-heading">Add Technician  for Andhra Pradesh</div>
                  <div class="panel-body">
                  
                  <?php 
				  
				  
				  $profile_id=  $this->uri->segment(3); 
				  
				 $attributes = array('class' => 'gray-form', 'id' => 'jcForm2c1' ,"name" => "technicianform" );
				  
			 
				  
				    echo form_open("admin/technision_update", $attributes); ?>         
                
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                  <label for="">Name</label>
                                  <input type="text" class="form-control" name='tech_name'  value="<?php echo   $store->tech_name; ?>"  >
                                  
                                  <input type="hidden" class="form-control" name='user_id'  value="<?php echo   $profile_id; ?>"  >
                                </div>
                            </div>
                            
                            
                            
                            
                        </div>
                        
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                  <label for="">Email</label>
                                  <input type="text" class="form-control" name='tech_email'  value="<?php echo   $store->tech_email; ?>"  >
                                </div>
                            </div>
                            
                            
                            
                          
                        </div>
                        
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                  <label for="">Phone Number</label>
                                  <input type="text" class="form-control" name='tech_phone'  value="<?php echo   $store->tech_phone; ?>"  >
                                </div>
                            </div>
                            
                            
                            
                            
                        </div>
                        
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                  <label for="">Address</label>
                                  <input type="text" class="form-control" name='tech_address'  value="<?php echo   $store->tech_address; ?>"  >
                                </div>
                            </div>
                            
                            
                            
                            
                        </div>
                        
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                  <label for="">Service Area</label>
                                  
                                  <select class="form-control" name="tech_servicearea">
                                  <option value="0">Select</option>
                                  
                                   <option value="1" <?php if($store->tech_servicearea =='1') { ?> selected <?php } ?>>1</option>
                                   
                                    <option value="2"  <?php if($store->tech_servicearea =='2') { ?> selected <?php } ?>>2</option>
                                    
                                     
                                     </select>
                                </div>
                            </div>
                            
                            
                            
                           
                        </div>
                        
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                  <label for="">Profesional</label>
                                  <input type="text" class="form-control" name='tech_profesional' value="<?php echo   $store->tech_profesional; ?>"  >
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

