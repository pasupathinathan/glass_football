<?php

foreach($data1 as $store):


  ?>


<body data-ng-app>
    


  <section class="content">
      
  
   
      <div class="warper container-fluid">
        <div class="page-header"><h1>Edit New Categories<small></small></h1></div>
          
            
            
    <div class="row">
      <div class="col-md-10">
        <div class="panel panel-default">
          <div class="panel-heading">Edit Details</div>
          <div class="panel-body">
          
         <?php  
				   
				    $categories_id=  $this->uri->segment(3);
				  
				 $attributes = array('class' => 'gray-form', 'id' => 'jcForm2c1' ,"name" => "cateform" );
				 				  
				    echo form_open("admin/categories_update", $attributes); ?>         
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                          <label for="">Profession</label>
                          <input type="text" class="form-control" name='cate_profession' value='<?php echo $store->cate_profession; ?>' id='cate_profession'  >
                          <input type="hidden" class="form-control" name='categories_id'  value="<?php echo   $categories_id; ?>"  >
                          
                        </div>
                    </div>
                    
                    <div class="col-md-2">
                        <div class="form-group">
                          <label for="">Active Status</label>
                          <div>
                          <div class="switch-button success showcase-switch-button">
                            <input id="switch-button-3" value="1" type="checkbox"  <?php if($store->cate_isactive =='1'){?> checked <?php } ?>  name='cate_isactive' >
                            <label for="switch-button-3"></label>
                          </div>
                          </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-purple btn-lg">Submit</button>
                    </div>
                </div>
                
                                <input type="hidden" name="prfaction" id="prfaction" value="add" />
                
                
              </form>           </div>
          </div>
      </div>
    </div>



          
      </div> 
   
   
  </section>
    

<?php endforeach; ?>