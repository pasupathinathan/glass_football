
	<?php
			$params = array(
			'academy_id' => $academy_view['booking_academy'],
			);								
		$getacademic=$this->football_model->get_academy_list($params);

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
                                                        <div class="counter"><?php echo $getacademic['academy_name']; ?></div>
                                                        <div class="heading"><?php echo get_phrase('Academy');?></div>
                                                    </li>
                                                   
                                                   
                                                </ul>
                                            </div>
                                            <div class="col-xl-3 col-md-4 d-flex justify-content-center">
                                               
                                                <div class="infos">
                                                    <h2><?php echo $getacademic['academy_city']; ?></h2>
                                                    <div class="location"><?php echo get_phrase('City');?></div>
                                                </div>
                                            </div>
                                            <div class="col-xl-5 d-flex ">
                                               
                                               
                                              
                                               
                                               
                                               <div class="follow" style="margin-left: 10%;">
                                                    <a class=" btn btn-gradient-01" href="<?php echo base_url('academy_booking') ?>"><i class="ti-arrow-left"></i><?php echo get_phrase('Back');?></a>
                                                    
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
											 $getplayerlist = $this->football_model->player_view($academy_view['booking_player']);
												if (!empty($getplayerlist)) {
													foreach ($getplayerlist as $row) {
														$playername = $row->player_fname;
														$playermobile = $row->player_mnumber;
														$playeremail = $row->player_email;
													}
												}
											
												if($academy_view['booking_player'] != ''){ 
													echo $playername; 
													echo "<br>";
													echo $playermobile; 
													echo "<br>";
													echo $playeremail; 													
												} else {
													/*echo $store->player_name;
													echo "<br>";
													echo $store->booking_player_number; */													
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
												   <div class="time">  <?php echo $academy_view['booking_code']; ?></div>
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
                                                    <div class="time"> <?php echo date('d-m-Y',strtotime($academy_view['booking_date'])); ?></div>
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
                                                    <div class="time">AED <?php echo $academy_view['booking_amount']; ?></div>
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
												    <?php if($academy_view['booking_cancel'] == 0) {?>
                                                      
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
															<span><?php echo date('h:i A',strtotime($academy_view['booking_time'])); ?></span><br>
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
												   <div class="time"><?php echo $academy_view['payment_type'] ?></div>
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
														<?php $academy_age = $this->football_model->get_academy_price_based_on_id($academy_view['booking_age']); ?>
                                                        <span class="username"><?php echo get_phrase('Age');?></span>
                                                    </div>
                                                    <div class="time">
														<?php echo $academy_age['age_limit']; ?>
													</div>
                                                </div>
                                            </div>
                                             </div>
                                            <div class="col-xl-5">
                                            <div class="widget-header d-flex align-items-center">
                                               <div class="d-flex flex-column mr-auto">
												   <div class="title">
														<span class="username"><?php echo get_phrase('No of Month');?></span>
													</div>
													<div class="time">
														<?php echo $academy_view['no_of_month']; ?>
													</div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                          	<div class="col-xl-6">
                                            <div class="widget-header d-flex align-items-center">
                                                <?php if($academy_view['booking_cancel'] == 1){ ?>
                                               <div class="d-flex flex-column mr-auto">
                                               <div class="title">
                                                        <span class="username"><?php echo get_phrase('Who Cancelled');?></span>
                                                    </div>
												   <div class="time">  <?php echo $academy_view['who_cancelled']; ?></div>
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