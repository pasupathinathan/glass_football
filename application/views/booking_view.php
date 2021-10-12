<?php
foreach ($data12 as $store) :
 $booking_id = $this->uri->segment(2);
    ?>
	
	<?php
											
		$getgroundlist=$this->football_model->edit_ground($store->booking_ground);
		foreach ($getgroundlist as $row) {
			$groundname = $row->ground_name;
		}

?>
    <body id="page-top">
        <!-- Begin Preloader -->
      
        <!-- End Preloader -->
        <div class="page db-social">
            <!-- Begin Header -->
            
            <!-- End Header -->
            <!-- Begin Page Content -->
            <div class="page-content d-flex align-items-stretch">
                <div class="compact-sidebar light-sidebar has-shadow">
                    <!-- Begin Side Navbar -->
                     <?php include('inc/admin_sidebar.php') ?>
                    <!-- End Side Navbar -->
                </div>
                <!-- End Left Sidebar -->
                <!-- Begin Content -->
                <div class="content-inner">
            <div class="container-fluid">
                    <!-- Begin Jumbotron -->
					<div style="background:url(<?php echo base_url(); ?>assets/img/foot.jpg);" class="jumbotron jumbotron-fluid"></div>
                    <!-- End Jumbotron -->
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-xl-11">
                                <!-- Start Head Profile -->
                                <div class="widget head-profile has-shadow">
                                    <div class="widget-body pb-0">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-xl-4 col-md-4 d-flex justify-content-lg-start justify-content-md-start justify-content-center">
                                                <ul>
                                                    <li>
                                                        <div class="counter"><?php echo $groundname; ?></div>
                                                        <div class="heading"><?php echo get_phrase('Ground');?></div>
                                                    </li>
                                                   
                                                   
                                                </ul>
                                            </div>
                                            <div class="col-xl-3 col-md-4 d-flex justify-content-center">
                                               
                                                <div class="infos">
                                                    <h2><?php echo $store->booking_groundcity; ?></h2>
                                                    <div class="location"><?php echo get_phrase('City');?></div>
                                                </div>
                                            </div>
											<input type="hidden" class="form-control" name='booking_id'
                                                       value="<?php echo $booking_id; ?>">
                                            <div class="col-xl-5 d-flex ">
                                               
                                               
                                              
                                               
                                               
                                               <div class="follow" style="margin-left: 10%;">
                                                    <a class=" btn btn-gradient-01" href="<?php echo base_url('booking_list') ?>"><i class="ti-arrow-left"></i><?php echo get_phrase('Back');?></a>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                                <!-- End Head Profile -->
                                <div class="row">
                                    <div class="col-xl-4 column">
                                        <!-- Begin About -->
                                        <div class="widget has-shadow">
                                            <div class="widget-header bordered no-actions d-flex align-items-center">
                                                <h5><?php echo get_phrase('Player');?></h5>
                                            </div>
                                            <div class="widget-body"> <p>
											<?php 
											 $getplayerlist = $this->football_model->player_view($store->booking_player);
												if (!empty($getplayerlist)) {
													foreach ($getplayerlist as $row) {
														$playername = $row->player_fname;
														$playermobile = $row->player_mnumber;
														$playeremail = $row->player_email;
													}
												}
											
												if($store->booking_player != ''){ 
													echo $playername; 
													echo "<br>";
													echo $playermobile; 
													echo "<br>";
													echo $playeremail; 													
												} else {
													echo $store->player_name;
													echo "<br>";
													echo $store->booking_player_number; 													
												}
											?>
                                                </p>
                                                
                                            </div>
											
                                        </div>
                                        
                                       </div>
                                    <!-- End Col -->
                                    <!-- Begin Timeline -->
                                    <div class="col-xl-8">
                                        <!-- Begin Widget -->
                                        <div class="widget has-shadow">
                                            <!-- Begin Widget Header -->
                                            <div class="row">
                                            <div class="col-xl-6">
                                            <div class="widget-header d-flex align-items-center">
                                               <div class="d-flex flex-column mr-auto">
                                               <div class="title">
                                                        <span class="username"><?php echo get_phrase('Booking Code');?></span>
                                                    </div>
												   <div class="time">  <?php echo $store->booking_code; ?></div>
                                                    </div>
                                               
                                            </div>
                                            <!-- End Widget Body -->
                                            </div>
                                            
                                            <div class="col-xl-6">
                                            
                                            <div class="widget-header d-flex align-items-center">
                                               
                                                <div class="d-flex flex-column mr-auto">
                                                    <div class="title">
                                                        <span class="username"><?php echo get_phrase('Booking Date');?></span>
                                                    </div>
                                                    <div class="time"> <?php echo $store->booking_sdate; ?></div>
                                                </div>
                                               
                                            </div>
                                            <!-- End Widget Header -->
                                            <!-- Begin Widget Body -->
                                             </div>

                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-xl-6">
                                            
                                            <div class="widget-header d-flex align-items-center">
                                               
                                                <div class="d-flex flex-column mr-auto">
                                                    <div class="title">
                                                        <span class="username"><?php echo get_phrase('Booking Amount');?> </span>
                                                    </div>
                                                    <div class="time">AED <?php echo $store->booking_amount; ?></div>
                                                </div>
                                               
                                            </div>
                                            <!-- End Widget Header -->
                                            <!-- Begin Widget Body -->
                                             </div>
                                            <div class="col-xl-5">
                                            <div class="widget-header d-flex align-items-center">
                                               <div class="d-flex flex-column mr-auto">
                                               <div class="title">
                                                        <span class="username"><?php echo get_phrase('Status');?></span>
                                                    </div>
												   <div class="time">
												    <?php if($store->booking_approval == 0) {?>
                                                      
                                                      <button type="button" class="btn btn-success btn-sm mr-1 mb-2"><?php echo get_phrase('Booked');?></button>
                                                      
                                                      <?php } else {?>
                                                       <button type="button" class="btn btn-danger btn-sm mr-1 mb-2"><?php echo get_phrase('Cancelled');?></button>
                                                       <?php }  ?>
                                                      
												   </div>
                                                    </div>
                                               
                                            </div>
                                            <!-- End Widget Body -->
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="row">
                                            
                                            <div class="col-xl-6">
                                            <div class="widget-header d-flex align-items-center">
                                               <div class="d-flex flex-column mr-auto">
                                               <div class="title">
                                                        <span class="username"><?php echo get_phrase('Booking Time');?></span>
                                                    </div>
												        <div class="time">
    														<?php 
    														    $bookin_time = explode(",",$store->booking_time); 
    														    foreach($bookin_time as $time){
    															$starting_time = strtotime($time);
    															$array_of_end_time = date("h:i", $starting_time+(30 * $store->slot));
    															$array_of_start_time = date('h:i ',strtotime($time));
    															$array_of_ampm = date ("A", $starting_time);
    														 ?>
    															    <span><?php echo  $array_of_start_time.' - '.$array_of_end_time; ?> <sup><?php echo $array_of_ampm; ?> </sup></span><br>
    														<?php } ?>
												        </div>
                                                    </div>
                                               
                                            </div>
                                            <!-- End Widget Body -->
                                            </div>
											
                                            <div class="col-xl-6">
                                            <div class="widget-header d-flex align-items-center">
                                               <div class="d-flex flex-column mr-auto">
                                               <div class="title">
                                                        <span class="username"><?php echo get_phrase('Booking Payment');?></span>
                                                    </div>
												   <div class="time"><?php echo $store->booking_paymenttype ?></div>
                                                    </div>
                                               
                                            </div>
                                            <!-- End Widget Body -->
                                            </div>
                                          
                                        </div>
                                            <div class="row">
                                            <div class="col-xl-6">
                                            
                                            <div class="widget-header d-flex align-items-center">
                                               
                                                <div class="d-flex flex-column mr-auto">
                                                    <div class="title">
                                                        <span class="username"><?php echo get_phrase('Size');?></span>
                                                    </div>
                                                    <div class="time"> <?php echo $store->size; ?></div>
                                                </div>
                                               
                                            </div>
                                            <!-- End Widget Header -->
                                            <!-- Begin Widget Body -->
                                             </div>
                                            <div class="col-xl-5">
                                            <div class="widget-header d-flex align-items-center">
                                               <div class="d-flex flex-column mr-auto">
                                               <div class="title">
                                                        <span class="username"><?php echo get_phrase('Slot');?></span>
                                                    </div>
												   <div class="time">
												<?php if($store->slot == 60) { ?>
													<?php echo '30 mins' ?>
												  <?php } elseif($store->slot == 120){ ?>
													<?php echo '1 hr' ?>
												  <?php } elseif($store->slot == 180){ ?>
													<?php echo '1:30 hr' ?>
												  <?php } elseif($store->slot == 240){ ?>
													<?php echo '2 hr' ?>
												<?php } ?>
												    </div>
                                                    </div>
                                               
                                            </div>
                                            <!-- End Widget Body -->
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-xl-6">
                                            
                                            <div class="widget-header d-flex align-items-center">
                                               
                                                <div class="d-flex flex-column mr-auto">
                                                    <div class="title">
                                                        <span class="username"><?php echo get_phrase('Ground Sq Ft');?> </span>
                                                    </div>
                                                    <div class="time"><?php echo $store->ground_sq_ft; ?></div>
                                                </div>
                                               
                                            </div>
                                            <!-- End Widget Header -->
                                            <!-- Begin Widget Body -->
                                             </div>
                                          	<div class="col-xl-6">
                                            <div class="widget-header d-flex align-items-center">
                                                <?php if($store->booking_approval == 1){ ?>
                                               <div class="d-flex flex-column mr-auto">
                                               <div class="title">
                                                        <span class="username"><?php echo get_phrase('Who Cancelled');?></span>
                                                    </div>
												   <div class="time">  <?php echo $store->who_cancelled; ?></div>
                                                    </div>
                                               <?php } ?>
                                            </div>
                                            <!-- End Widget Body -->
                                            </div>
                                        </div>
                                         
											
                                         </div>
                                        <!-- End Widget -->
                                        <!-- Begin Widget -->
                                        
                                        <!-- End Widget -->
                                    </div>
                                    <!-- End Timeline -->
                                   
                                </div>
                                <!-- End Row -->
								
								<!-- End Head Profile -->
                                
                                <!-- End Row -->
								
								
                            </div>
                            <!-- End Col -->
                        </div>
                       
                    </div>
                    <!-- End Container -->
                    <!-- Begin Page Footer-->
                    
                    <!-- End Page Footer -->
                    <a href="#" class="go-top"><i class="la la-arrow-up"></i></a>
                    <!-- Offcanvas Sidebar -->
                    
                    <!-- End Offcanvas Sidebar -->
                </div>
                <!-- End Content -->
            </div>
            <!-- End Page Content -->
        </div>
        <!-- Begin Vendor Js -->
    <!-- Begin Vendor Js -->
    <script src="<?php echo base_url(); ?>assets/vendors/js/base/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/js/base/core.min.js"></script>
    <!-- End Vendor Js -->
    <script src="<?php echo base_url(); ?>assets/js/timepicki.js"></script>
    <!-- Begin Page Vendor Js -->
    <script src="<?php echo base_url(); ?>assets/vendors/js/nicescroll/nicescroll.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/js/app/app.min.js"></script>
    <!-- End Page Vendor Js -->
    <!-- Begin Page Snippets -->
    <script src="<?php echo base_url(); ?>assets/js/components/validation/validation.min.js"></script>
    <!-- End Page Snippets -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.validate.js"></script>
         
    <script>
        $(document).ready(function(){
            $(".nav-tabs a").click(function(){
                $(this).tab('show');
            });
        });
    </script>
        <!-- End Page Vendor Js -->
    </body>
</html>
<?php endforeach; ?>