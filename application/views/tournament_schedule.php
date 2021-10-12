    <style>
.margin_top 
		{
			margin-top: 65px;
			text-align: center;
			font-weight: bold;
		}
</style>
            <!-- Begin Page Content -->
            <div class="page-content d-flex align-items-stretch">
                 <?php include('inc/admin_sidebar.php') ?>
                <!-- End Left Sidebar -->
                <div class="content-inner">
                    <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title"><?php echo $data1->tour_name; ?></h2>
	                                <div>
			                            <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <div>
                                                    <a href="<?php echo base_url('booking_tournament_list') ?>" class="btn btn-warning mr-1 mb-2" role="button">Back</a>
                                                </div>
                                            </li>
			                            </ul>
	                                </div>
	                            </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <div class="row flex-row">
                            <?php $tourn_schedule = $this->uri->segment(2); ?>
                          <?php if(empty($data)) { ?>
                              <div class="alert alert-primary" role="alert" style="width: 70%;background-color: #00acc1 !important;margin-top: -2%;">
                                  No Data Available in Schedule
                              </div>
                          <?php } else { ?>
                              <?php foreach ($data as $store) { ?>
                                  <div class="col-xl-6 col-md-4 col-sm-6 col-remove">
                                      <!-- Begin Card -->
                                      <div class="widget-image has-shadow">
                                          <div class="contact-card">
                                              <!-- Begin Widget Image -->
                                              <div class="row">
                                                  <div class="col-xl-5 col-md-4 col-sm-6 ">
                                                      <div class="cover-image mx-auto" style="text-align: center !important;">
                                                        <?php if(!empty($store->team_logo1)){ ?>
                                                        <img width="90px" height="120px" src="<?php echo base_url() ?>assets/upload/teams/<?php  echo $store->team_logo1; ?>" alt="..." class="rounded-circle mx-auto"><br>
                                                          <?php } else { ?>
                                                              <img
                                                            src="<?php echo base_url(); ?>/assets/upload/logos.png"
                                                            width="90px" height="120px" alt="..." class="rounded-circle mx-auto"><br>
                                                            <?php } ?>
                                                          <span>
                                                              <?php if(!empty($store->team_name1)){ ?>
                                                                <?php echo $store->team_name1 ?>
                                                              <?php } ?>
                                                            </span>
                                                      </div>
                                                  </div>
                                                  <div class="col-xl-1 ">
                                                      <h2 class="margin_top">VS</h2>
                                                  </div>
                                                  <div class="col-xl-5 col-md-4 col-sm-6">
                                                      <div class="cover-image mx-auto" style="float: right;position: relative;text-align: center !important;">
                                                        <?php if(!empty($store->team_logo2)){ ?>
                                                        <img width="90px" height="120px" src="<?php echo base_url() ?>assets/upload/teams/<?php echo $store->team_logo2; ?>" alt="..." class="rounded-circle mx-auto"><br>
                                                          <?php } else { ?>
                                                              <img
                                                            src="<?php echo base_url(); ?>/assets/upload/logos.png"
                                                            alt="..." class="rounded-circle mx-auto" width="90px" height="120px" ><br>
                                                            <?php } ?>
                                                         <span>
                                                              <?php if(!empty($store->team_name2)){ ?>
                                                                <?php echo $store->team_name2 ?>
                                                              <?php } ?>
                                                            </span>
                                                      </div>
                                                  </div>
                                              </div>
                                              <!-- Begin Widget Body -->
                                              <div class="widget-body">
                                                  <div class="job">Match <?php echo $store->match_number; ?></div>
												  <h5 class="name"><a style="color: darkturquoise;" href="#"><?php echo 'Group '. $store->groups; ?></a></h5>
												  <h4 class="name"><a href="#"><?php echo $store->ground_name; ?></a></h4>
                                                  <div class="reviews owl-carousel">
                                                      <div class="item">
                                                          <div class="stats">
                                                              <div class="row d-flex justify-content-between">
                                                                  <div class="col">
                                                                      <span class="counter"><?php echo date('l', strtotime($store->date)) ?></span>
                                                                      <span class="text"><?php echo date("d-m-Y", strtotime($store->date));; ?></span>
                                                                  </div>

                                                                  <div class="col">
                                                                      <span class="counter">
											<?php
											$bookingtime = explode(',',$store->time);
											$i = 1;
											foreach ($bookingtime as $btime) {
												if($i != 1){
													echo ',';
												}
												echo date ('h:i A',strtotime($btime)); 
												$i++;
											} 
											?>
											
																	  </span>
                                                                      <span class="text"><?php echo $store->ground_city; ?></span><br>
                                                                      <span>
                                                                        <a href="<?php echo base_url('edit_tournament_schedule') ?>/<?php echo $store->tourn_match_id; ?>" class="btn btn-success mr-1 mb-2" role="button">Edit</a>
                                                                        <?php if($store->match_status == 0) { ?>
                                                                            <a href="<?php echo base_url('match_schedule_delete')?>/<?php echo $store->tourn_match_id; ?>" class="btn btn-danger mr-1 mb-2" role="button">Remove</a>
                                                                        <?php } else { ?>
                                                                            <a href="<?php echo base_url('match_schedule_delete')?>/<?php echo $store->tourn_match_id; ?>" class="btn btn-danger mr-1 mb-2" role="button">Remove</a>
                                                                        <?php } ?>
                                                                        <!--<a href="<?php echo base_url('match_schedule_delete')?>/<?php echo $store->booking_id;?>/<?php echo $store->book_code; ?>/<?php echo $store->tourn_match_id; ?>" class="btn btn-danger mr-1 mb-2" role="button">Remove</a>-->
                                                                      </span>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>

                                                  </div>

                                              </div>
                                              <!-- End Widget Body -->
                                          </div>
                                      </div>
                                      <!-- End Card -->
                                  </div>
                              <?php } ?>
                         <?php } ?>
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Container -->
                    <!-- Begin Page Footer-->
                    
                    <!-- End Page Footer -->
                    <a href="#" class="go-top"><i class="la la-arrow-up"></i></a>
                    <!-- Offcanvas Sidebar -->
                    
                    <!-- End Offcanvas Sidebar -->
                </div>
            </div>
            <!-- End Page Content -->
        </div>
        <!-- Begin Vendor Js -->
        <script src="<?php echo base_url(); ?>assets/vendors/js/base/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendors/js/base/core.min.js"></script>
        <!-- End Vendor Js -->
        <!-- Begin Page Vendor Js -->
        <script src="<?php echo base_url(); ?>assets/vendors/js/nicescroll/nicescroll.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendors/js/app/app.min.js"></script>
        
        <script src="<?php echo base_url(); ?>assets/vendors/js/tabledit/jquery.tabledit.min.js"></script>
               <script src="<?php echo base_url(); ?>assets/js/components/tabledit/tabledit.js"></script>
        <!-- End Page Vendor Js -->
    </body>
</html>
