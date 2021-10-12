
<?php

foreach($data1 as $store):


  ?>
<body data-ng-app>
    


  <section class="content">
      
  
   
      <div class="warper container-fluid">
        <div class="page-header"><h1>Edit New Projects<small></small></h1></div>
          
            
            
    <div class="row">
      <div class="col-md-10">
        <div class="panel panel-default">
          <div class="panel-heading">Edit Details</div>
          <div class="panel-body">
          
           <?php  
				   
				    $projects_id=  $this->uri->segment(3);
				  
				 $attributes = array('class' => 'gray-form', 'id' => 'jcForm2c1' ,"name" => "projectform" );
				 				  
				    echo form_open("admin/projects_update", $attributes); ?>            
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                          <label for="">Add Projects</label>
                          <input type="text" class="form-control" name='prj_name' value='<?php echo $store->prj_name; ?>' id='prj_name'  >
                          
                          <input type="hidden" class="form-control" name='projects_id'  value="<?php echo   $projects_id; ?>"  >
                        </div>
                    </div>
                    
                    <div class="col-md-2">
                        <div class="form-group">
                          <label for="">Active Status</label>
                          <div>
                          <div class="switch-button success showcase-switch-button">
                            <input id="switch-button-3" value="1" type="checkbox" name='prj_isactive' <?php if($store->prj_isactive =='1'){?> checked <?php } ?>  >
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
