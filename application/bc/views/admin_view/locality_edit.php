
<?php

foreach($data1 as $store):


  ?>
<body data-ng-app>
    

  <section class="content">
      
   
   
      <div class="warper container-fluid">
        <div class="page-header"><h1>Locality<small></small></h1></div>
          
        

        
        
        
            <div class="row">
              <div class="col-md-10">
                <div class="panel panel-default">
                  <div class="panel-heading">Edit Locality </div>
                  <div class="panel-body">
                  
                     <?php  
				   
				    $locality_id=  $this->uri->segment(3);
				  
				 $attributes = array('class' => 'gray-form', 'id' => 'jcForm2c1' ,"name" => "stateform" );
				 				  
				    echo form_open("admin/locality_update", $attributes); ?>    
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                  <label for="">Locality</label>
                                  <input type="text" class="form-control" name='zne_name' value='<?php echo $store->zne_name; ?>'>
                                  <input type="hidden" class="form-control" name='locality_id'  value="<?php echo   $locality_id; ?>"  >
                                </div>
                            </div>
                            
                             <div class="col-md-4">
                                <div class="form-group">
                                  <label for="">Locality City</label>
                                  
                                  <select name="zne_city" class="form-control">
<option value="0" selected="selected">--------Select City--------</option>

 <?php 
  foreach ($data2 as $row){	  ?>
 
<option value="<?php echo $row->cty_id; ?>" <?php if($row->cty_id == $store->zne_city) { ?> selected <?php } ?> ><?php echo $row->cty_name; ?></option>
      <?php } ?>  
</select>
                                   
                                </div>
                            </div>
                            
                            <div class="col-md-2">
                                <div class="form-group">
                                  <label for="">Active Status</label>
                                  <div>
                                  <div class="switch-button success showcase-switch-button">
                                    <input id="switch-button-3" type="checkbox" value="1"  <?php if($store->zne_isactive =='1'){?> checked <?php } ?>  name='zne_isactive'  >
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