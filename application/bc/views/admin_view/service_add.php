

<body data-ng-app>
    


  <section class="content">
      
  
   
      <div class="warper container-fluid">
        <div class="page-header"><h1>Add New Services<small></small></h1></div>
          
            
            
    <div class="row">
      <div class="col-md-10">
        <div class="panel panel-default">
          <div class="panel-heading">Add Details</div>
          <div class="panel-body">
          
           <?php  
				  
				 $attributes = array('class' => 'gray-form', 'id' => 'jcForm2c1' ,"name" => "serviceform" );
				 				  
				    echo form_open("admin/add_service", $attributes); ?>         
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                          <label for="">Add Projects</label>
                          <input type="text" class="form-control" name='ser_name' id='ser_name'  >
                        </div>
                    </div>
                    
                    <div class="col-md-2">
                        <div class="form-group">
                          <label for="">Active Status</label>
                          <div>
                          <div class="switch-button success showcase-switch-button">
                            <input id="switch-button-3" value="1" type="checkbox" name='ser_isactive' checked>
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


<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">Summary </div>
      
      <div class="panel-body">
      
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered table-summary" id="basic-datatable">
          <thead>
              <tr>
                  <th>Name</th>
                 
                  <th>Status</th>
                  <th>Options</th>
              </tr>
          </thead>
          <tbody>
          
          <?php foreach ($data as $row1){ ?>
                          <tr class="odd gradeX">
                <td><?php echo $row1->ser_name; ?></td>
                
                <td><span class='text-green'><strong><?php if($row1->ser_isactive =='1'){?> Active</strong></span> <?php }  else if($row1->ser_isactive =='0')  {  ?> <span class='text-red'><strong> In Active <?php } ?></strong></span></td>
                <td><span class='btn-group'>
                <a href="<?php echo site_url('admin/service_edit'); ?>/<?php echo $row1->ser_id; ?>" class='btn btn-small'  style='border:1px solid #ccc'>Edit</a>
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
    

