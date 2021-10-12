<?php
//Access them like so

 foreach ($data1 as $store) : 

 ?>
 
<body data-ng-app>
    


  <section class="content">
      
   
   
      <div class="warper container-fluid">
        <div class="page-header"><h1>State<small></small></h1></div>
          
        

    
        
        
            <div class="row">
              <div class="col-md-10">
                <div class="panel panel-default">
                  <div class="panel-heading">Add Details</div>
                  <div class="panel-body">
                  
                   <?php  
				   
				    $state_id=  $this->uri->segment(3);
				  
				 $attributes = array('class' => 'gray-form', 'id' => 'jcForm2c1' ,"name" => "stateform" );
				 				  
				    echo form_open("admin/state_update", $attributes); ?>         
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                  <label for="">State</label>
                                  <input type="text" class="form-control" name='ste_name'  value='<?php echo $store->ste_name; ?>' >
                                  <input type="hidden" class="form-control" name='state_id'  value="<?php echo   $state_id; ?>"  >
                          
                                  
                                </div>
                            </div>
                            
                            <div class="col-md-2">
                                <div class="form-group">
                                  <label for="">Code</label>
                                  <input type="text" class="form-control" name='ste_code'  value="<?php echo $store->ste_code; ?>" >
                                </div>
                            </div>
                            
                            <div class="col-md-2">
                                <div class="form-group">
                                  <label for="">Active Status</label>
                                  <div>
                                  <div class="switch-button success showcase-switch-button">
                                    <input id="switch-button-3" type="checkbox" value="1" <?php if($store->ste_isactive =='1'){?> checked <?php } ?>  name='ste_isactive' >
                                    <label for="switch-button-3"></label>
                                  </div>
                                  </div>
                                </div>
                            </div>
                            
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-purple btn-lg">Submit</button>
                            </div>
                        </div>
                        
                                        <input type="hidden" name="steaction" id="steaction" value="add" />
                        
                    </form>         </div>
                  </div>
              </div>
            </div>


        
        

          
      </div> 
   
   
  
  </section>
    
<?php endforeach; ?>
