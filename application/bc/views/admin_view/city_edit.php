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
				   
				    $city_id=  $this->uri->segment(3);
				  
				 $attributes = array('class' => 'gray-form', 'id' => 'jcForm2c1' ,"name" => "stateform" );
				 				  
				    echo form_open("admin/city_update", $attributes); ?>        
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                  <label for="">City</label>
                                  <input type="text" class="form-control" name='cty_name'  value='<?php echo $store->cty_name; ?>' >
                                  <input type="hidden" class="form-control" name='city_id'  value="<?php echo   $city_id; ?>"  >
                                </div>
                            </div>
                            
                             <div class="col-md-3">
                                <div class="form-group">
                                  <label for="">State</label>
                                <select name="cty_state" class="form-control">
<option value="0" selected="selected">--------Select City--------</option>

 <?php 
  foreach ($data2 as $row){	  ?>
 
<option value="<?php echo $row->ste_id; ?>" <?php if($row->ste_id == $store->cty_id) { ?> selected <?php } ?> ><?php echo $row->ste_name; ?></option>
      <?php } ?>  
</select>
                                </div>
                            </div>
                            
                            <div class="col-md-2">
                                <div class="form-group">
                                  <label for="">Active Status</label>
                                  <div>
                                  <div class="switch-button success showcase-switch-button">
                                    <input id="switch-button-3" type="checkbox" value="1" <?php if($store->cty_isactive =='1'){?> checked <?php } ?>  name='cty_isactive'  >
                                    <label for="switch-button-3"></label>
                                  </div>
                                  </div>
                                </div>
                            </div>
                            
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