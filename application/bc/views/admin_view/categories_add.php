

<body data-ng-app>
    


  <section class="content">
      
  
   
      <div class="warper container-fluid">
        <div class="page-header"><h1>Add New Categories<small></small></h1></div>
          
            
            
    <div class="row">
      <div class="col-md-10">
        <div class="panel panel-default">
          <div class="panel-heading">Add Details</div>
          <div class="panel-body">
          
           <?php  
				  
				 $attributes = array('class' => 'gray-form', 'id' => 'jcForm2c1' ,"name" => "categoryform" );
				 				  
				    echo form_open("admin/add_categories", $attributes); ?>         
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                          <label for="">Profession</label>
                          <input type="text" class="form-control" name='cate_profession' id='cate_profession'  >
                        </div>
                    </div>
                    
                    <div class="col-md-2">
                        <div class="form-group">
                          <label for="">Active Status</label>
                          <div>
                          <div class="switch-button success showcase-switch-button">
                            <input id="switch-button-3" value="1" type="checkbox" name='cate_isactive' checked>
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


<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">Summary </div>
      
      <div class="panel-body">
      
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered table-summary" id="basic-datatable">
          <thead>
              <tr>
                  <th>Name</th>
                  <th>Skills</th>
                  <th>Status</th>
                  <th>Options</th>
              </tr>
          </thead>
          <tbody>
          
          <?php foreach ($data as $row1){ ?>
                          <tr class="odd gradeX">
                <td><?php echo $row1->cate_profession; ?></td>
                <td><a href="<?php echo site_url('admin/skills_add1'); ?>/<?php echo $row1->cate_id; ?>" class='btn btn-small'  style='border:1px solid #ccc'>Add Skills</a></td>
                <td><span class='text-green'><strong><?php if($row1->cate_isactive =='1'){?> Active</strong></span> <?php }  else if($row1->cate_isactive =='0')  {  ?> <span class='text-red'><strong> In Active <?php } ?></strong></span></td>
                <td><span class='btn-group'>
                <a href="<?php echo site_url('admin/categories_edit'); ?>/<?php echo $row1->cate_id; ?>" class='btn btn-small'  style='border:1px solid #ccc'>Edit</a>
                </span></td>
              </tr>
                         
             <?php } ?>
                      </tbody>
      </table>
        
      </div>
    </div>
  </div>
</div>
          
      </div> 
   
   
  </section>
    

