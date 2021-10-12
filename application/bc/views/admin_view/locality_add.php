

<body data-ng-app>
    

  <section class="content">
      
   
   
      <div class="warper container-fluid">
        <div class="page-header"><h1>Locality<small></small></h1></div>
          
        

        
        
        
            <div class="row">
              <div class="col-md-10">
                <div class="panel panel-default">
                  <div class="panel-heading">Add Locality </div>
                  <div class="panel-body">
                  
                    <?php  
					
					$city_id=  $this->uri->segment(3);	
				  
				 $attributes = array('class' => 'gray-form', 'id' => 'jcForm2c1' ,"name" => "localityform" );
				 				  
				    echo form_open("admin/add_locality", $attributes); ?>      
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                  <label for="">Locality</label>
                                  <input type="text" class="form-control" name='zne_name' >
                                </div>
                            </div>
                            
                             <div class="col-md-4">
                                <div class="form-group">
                                  <label for="">Locality City</label>
                                  
                                  <select name="zne_city" class="form-control">
<option value="none" selected="selected">------------Select City------------</option>

 <?php foreach ($data as $row){	  ?>
 


<option value="<?php echo $row->cty_id; ?> " <?php if($row->cty_id == $city_id) { ?> selected <?php } ?> ><?php echo $row->cty_name; ?></option>
      <?php } ?>  
</select>
                                   
                                </div>
                            </div>
                            
                            <div class="col-md-2">
                                <div class="form-group">
                                  <label for="">Active Status</label>
                                  <div>
                                  <div class="switch-button success showcase-switch-button">
                                    <input id="switch-button-3" type="checkbox" value="1" name='zne_isactive' checked >
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


        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">Summary </div>
              
              <div class="panel-body">
              
                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered table-summary" id="basic-datatable">
                  <thead>
                      <tr>
                          <th>Locality</th>
                          <th>City</th>
                          <th>Status</th>
                          <th>Options</th>
                      </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($data1 as $row1){ ?>
                  
                                              <tr class="odd gradeX">
                        <td><?php echo $row1->zne_name; ?></td>
                        <td><?php echo $row1->cty_name; ?></td>
                        <td><span class='text-green'><strong><?php if($row1->zne_isactive =='1'){?> Active</strong></span> <?php }  else if($row1->zne_isactive =='0')  {  ?> <span class='text-red'><strong> In Active <?php } ?></strong></span></td>
                        <td><span class='btn-group'>
                        <a href="<?php echo site_url('admin/locality_edit'); ?>/<?php echo $row1->zne_id; ?>" class='btn btn-small'  style='border:1px solid #ccc'>Edit</a>
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
    


