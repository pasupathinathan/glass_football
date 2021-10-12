 
<?php

 
 foreach ($data1 as $store) : 
 
 ?>

<body data-ng-app>
    


  <section class="content">
      

   
      <div class="warper container-fluid">
        <div class="page-header"><h1>Edit New Skill<small></small></h1></div>
          
            
        
    
            
        
    <div class="row">
      <div class="col-md-10">
        <div class="panel panel-default">
          <div class="panel-heading">Add Skill  for Architect</div>
          <div class="panel-body">
          
           <?php  
			 
			 	  $skills_id=  $this->uri->segment(3); 				  
				 $attributes = array('class' => 'gray-form', 'id' => 'jcForm2c1' ,"name" => "skillsform" );
			 
				  
				    echo form_open("admin/skills_update", $attributes); ?>         
                
                
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                          <label for="">Skills</label>
                          <input type="text" class="form-control" name="skl_name"  value="<?php echo   $store->skl_name; ?>" >
                          
                          <input type="hidden" class="form-control" name='skills_id'  value="<?php echo   $skills_id; ?>"  >
                          
                        </div>
                    </div>
                    
                   
                    
                    
                </div>
                
                <div class="row">
                <div class="col-md-5">
                        <div class="form-group"> 
                          <label for="">Professional Categories</label>
                         
                         <select name="skl_profid" class="form-control">
<option value="none" selected="selected">--------Select City--------</option>
 

 <?php


  foreach ($data2 as $row){	   
  ?>

<option value="<?php echo $row->cate_id; ?>" <?php if($row->cate_id == $store->skl_profid) { ?> selected <?php } ?> >
<?php echo $row->cate_profession; ?></option>
      <?php } ?>  
</select>
                         
                        </div>
                    </div>
                    
                
                
                </div>
                
                
                <div class="row">
                <div class="col-md-2">
                        <div class="form-group">
                          <label for="">Active Status</label>
                          <div>
                          <div class="switch-button success showcase-switch-button">
                            <input id="switch-button-3" type="checkbox" value="1" <?php if($store->skl_isactive =='1'){?> checked <?php } ?> name='skl_isactive'   >
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