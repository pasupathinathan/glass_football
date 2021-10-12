

<body data-ng-app>
    


  <section class="content">
      
    
   
      <div class="warper container-fluid">
        <div class="page-header"><h1>Profile<small></small></h1></div>
          
        

    
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">Summary <br/><br/></div>
              
              <div class="panel-body">
              
                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered table-summary" id="basic-datatable">
                  <thead>
                      <tr>
                          <th>Name</th>
                          <th>CCID</th>
                          <th>Profession Type</th>
                          <th>Personal Detail</th>
                          <th>Academics</th>
                          <th>Skills</th>
                          <th>Is Reported?</th>
                          <th>Options</th>
                      </tr>
                  </thead>
                  <tbody>
                  
                   <?php foreach ($data as $row){ ?>
                                  <tr class="odd gradeX">
                        <td><?php echo $row->reg_name; ?></td>
                        <td><?php echo $row->reg_id; ?></td>
                        <td><?php echo $row->reg_profession_type; ?></td>
                        <td><span class='text-green'><strong><?php if($row->reg_personalverify =='1'){?> Verified</strong></span> <?php }  else if($row->reg_personalverify =='0')  {  ?> <span class='text-red'><strong> Not Verified <?php } ?></strong></span></td>
                        <td><span class='text-green'><strong><?php if($row->reg_academicverify =='1'){?> Verified</strong></span> <?php }  else if($row->reg_academicverify =='0')  {  ?> <span class='text-red'><strong> Not Verified <?php } ?></strong></span></td>
                        <td><span class='text-green'><strong><?php if($row->reg_skillverify =='1'){?> Verified</strong></span> <?php }  else if($row->reg_skillverify =='0')  {  ?> <span class='text-red'><strong> Not Verified <?php } ?></strong></span></td>
                        
                        <td></td>
                        <td><span class='btn-group'>
                        <a href="<?php echo site_url('admin/crew_profile_edit'); ?>/<?php echo $row->reg_id; ?>" class='btn btn-small'  style='border:1px solid #ccc'>Edit</a>
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
    


