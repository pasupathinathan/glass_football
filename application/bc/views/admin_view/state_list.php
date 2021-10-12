

<body data-ng-app>
    


  <section class="content">
      
    
   
      <div class="warper container-fluid">
        <div class="page-header"><h1>State<small></small></h1></div>
          
        

    
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">Summary <a href="<?php echo site_url('admin/state_add') ?>" class='btn btn-success btn-cons pull-right'><i class='icon-plus-sign'></i> Add State</a><br/><br/></div>
              
              <div class="panel-body">
              
                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered table-summary" id="basic-datatable">
                  <thead>
                      <tr>
                          <th>Name</th>
                          <th>&nbsp;</th>
                          <th>Status</th>
                          <th>Options</th>
                      </tr>
                  </thead>
                  <tbody>
                  
                   <?php foreach ($data as $row){ ?>
                                  <tr class="odd gradeX">
                        <td><?php echo $row->ste_name; ?></td>
                        <td><a href='' class='btn btn-small'  style='border:1px solid #ccc'>View &amp; Add City</a></td>
                        <td><span class='text-green'><strong>Active</strong></span></td>
                        <td><span class='btn-group'>
                        <a href="<?php echo site_url('admin/state_edit'); ?>/<?php echo $row->ste_id; ?>" class='btn btn-small'  style='border:1px solid #ccc'>Edit</a>
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
    


