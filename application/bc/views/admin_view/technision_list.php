

<body data-ng-app>
    


  <section class="content">
      
   
      <div class="warper container-fluid">
      
      <div class="row">
          <div class="col-md-10">
        <div class="page-header"><h1> Technician List<small></small></h1>
        
       
        </div>
          </div>
          <div class="col-md-2">
           <a href='<?php echo site_url('admin/technision'); ?>' ><button class="btn btn-green">Add Technicion</button></a>
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
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Address</th>
                          <th>Service Area</th>
                          <th>Professional</th>
                          <th>Status</th>
                          <th>Option</th>
                      </tr>
                  </thead>
                  <tbody>
                  <?php   
			 
					 			  foreach ($data as $row){ ?>
                                              <tr class="odd gradeX">
                        <td><?php echo $row->tech_name; ?></td>
                        <td><?php echo $row->tech_email; ?></td>
                        <td><?php echo $row->tech_phone; ?></td>
                        <td><?php echo $row->tech_address; ?></td>
                         <td><?php echo $row->tech_servicearea; ?></td>
                        <td><?php echo $row->tech_profesional; ?></td>
                        <td><span class='text-green'><strong>Active</strong></span></td>
                        <td><span class='btn-group'>
                        <a href='<?php echo site_url('admin/technision_edit'); ?>/<?php echo $row->id;?>' class='btn btn-small'  style='border:1px solid #ccc'>Edit</a>
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
    


