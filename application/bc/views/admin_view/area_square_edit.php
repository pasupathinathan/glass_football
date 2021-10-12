
<?php

foreach($data1 as $store):


  ?>
<body data-ng-app>
    


  <section class="content">
      
  
   
      <div class="warper container-fluid">
        <div class="page-header"><h1>Edit Square<small></small></h1></div>
          
            
            
    <div class="row">
      <div class="col-md-10">
        <div class="panel panel-default">
          <div class="panel-heading">Edit Details</div>
          <div class="panel-body">
          
           <?php  
				   
				    $square_id=  $this->uri->segment(3);
				  
				 $attributes = array('class' => 'gray-form', 'id' => 'jcForm2c1' ,"name" => "squareform" );
				 				  
				    echo form_open("admin/area_square_update", $attributes); ?>            
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                          <label for="">Add Projects</label>
                          <input type="text" class="form-control" name='sqt_name' value='<?php echo $store->sqt_name; ?>' id='sqt_name'  >
                          
                          <input type="hidden" class="form-control" name='square_id'  value="<?php echo   $square_id; ?>"  >
                        </div>
                    </div>
                    
                    <div class="col-md-2">
                        <div class="form-group">
                          <label for="">Active Status</label>
                          <div>
                          <div class="switch-button success showcase-switch-button">
                            <input id="switch-button-3" value="1" type="checkbox" name='sqt_isactive' <?php if($store->sqt_isactive =='1'){?> checked <?php } ?>  >
                            <label for="switch-button-3"></label>
                          </div>
                          </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-purple btn-lg">Submit</button>
                    </div>
                </div>
                
                             
                
              </form>           </div>
          </div>
      </div>
    </div>



          
      </div> 
   
   
  </section>
    
<?php endforeach; ?>
