

<body data-ng-app>
    


  <section class="content">
      
  
   
      <div class="warper container-fluid">
        <div class="page-header"><h1>Add Technician<small></small></h1></div>
          
        

                
        
            <div class="row">
              <div class="col-md-10">
                <div class="panel panel-default">
                  <div class="panel-heading">Add Technician  for Andhra Pradesh</div>
                  <div class="panel-body">
                  
                  <?php  
				  
				 $attributes = array('class' => 'gray-form', 'id' => 'jcForm2c1' ,"name" => "technicianform" );
				 				  
				    echo form_open("admin/technician_add", $attributes); ?>         
                
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                  <label for="">Name</label>
                                  <input type="text" class="form-control" name='tech_name'  value='' >
                                </div>
                            </div>
                            
                            
                            
                            
                        </div>
                        
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                  <label for="">Email</label>
                                  <input type="text" class="form-control" name='tech_email'  value='' >
                                </div>
                            </div>
                            
                            
                            
                          
                        </div>
                        
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                  <label for="">Phone Number</label>
                                  <input type="text" class="form-control" name='tech_phone'  value='' >
                                </div>
                            </div>
                            
                            
                            
                            
                        </div>
                        
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                  <label for="">Address</label>
                                  <input type="text" class="form-control" name='tech_address' id='cty_name' value='' >
                                </div>
                            </div>
                            
                            
                            
                            
                        </div>
                        
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                  <label for="">Service Area</label>
                                  
                                  <select class="form-control" name="tech_servicearea">
                                  <option value="0">Select</option>
                                  
                                   <option value="1">1</option>
                                   
                                    <option value="2">2</option>
                                    
                                     <option value="3">3</option>
                                     </select>
                                </div>
                            </div>
                            
                            
                            
                           
                        </div>
                        
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                  <label for="">Profesional</label>
                                  <input type="text" class="form-control" name='tech_profesional'  value='' >
                                </div>
                            </div>
                            
                            
                            
                           
                        </div>
                        
                        <div class="row">
                          
                            
                            
                            
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-purple btn-lg">Submit</button>
                            </div>
                        </div>
                        
                                        <input type="hidden" name="ctyaction" id="ctyaction" value="add" />
                        <input type="hidden" name="cty_state" id="cty_state" value="1" />
                                        
                    </form>         
                    </div>
                  </div>
              </div>
            </div>


        
    
        


          
      </div> 
   
  
  </section>
    


