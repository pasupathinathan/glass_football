 


<body data-ng-app>
 
  <section class="content">
   
      <div class="warper container-fluid">
        <div class="page-header"><h1>Handyman List<small></small></h1></div>
          
        

        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">Summary <a href="<?php echo site_url('admin/locality_add') ?>" class='btn btn-success btn-cons pull-right'><i class='icon-plus-sign'></i> Add Locality</a><br/><br/></div>
              
              <div class="panel-body">
              
                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered table-summary" id="basic-datatable">
                  <thead>
                      <tr>
                          <th>Bookind Id</th>
                          <th>Customer Name</th>
                          <th>Customer Mobile</th>
                          <th>Address</th>
                      </tr>
                  </thead>
                  <tbody>
                   <?php foreach ($data as $row){ ?>
                                              <tr class="odd gradeX">
                        <td>ID.<?php echo $row->book_id; ?></td>
                        <td><?php echo $row->customer_name; ?></td>
                        <td><?php echo $row->customer_mobile; ?></td>
                        <td>
                        <?php echo $row->addressline1; ?>
                        
                        </td>
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
    

