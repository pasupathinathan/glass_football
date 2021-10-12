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
                                                        <div class="counter"><?php echo $academy_payment_view['academy_name']; ?></div>
                                                        <div class="heading"><?php echo get_phrase('Academy');?></div>
                                                    </li>
                                                   
                                                   
                                                </ul>
                                            </div>
                                            <div class="col-xl-3 col-md-4 d-flex justify-content-center">
                                               
                                                <div class="infos">
                                                    <h2><?php echo $academy_payment_view['academy_city']; ?></h2>
                                                    <div class="location"><?php echo get_phrase('City');?></div>
                                                </div>
                                            </div>
											<input type="hidden" class="form-control" name='booking_id'
                                                       value="<?php echo $academy_payment_view['a_booking_id']; ?>">
                                            <div class="col-xl-5 d-flex ">
                                               
                                               <div class="follow" style="margin-left: 10%;">
                                                    <a class=" btn btn-gradient-01" href="<?php echo base_url('academy_payment') ?>"><i class="ti-arrow-left"></i><?php echo get_phrase('Back');?></a>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                                <!-- End Head Profile -->
                                <div class="row">
                                    <div class="col-xl-3 column">
                                        <!-- Begin About -->
                                        <div class="widget has-shadow">
                                            <div class="widget-header bordered no-actions d-flex align-items-center">
                                                <h5><?php echo get_phrase('Player');?></h5>
                                            </div>
                                            <div class="widget-body">
                                                <p>
                                                 <?php 
											 $getplayerlist = $this->football_model->player_view($academy_payment_view['booking_player']);
											 if (!empty($getplayerlist)) {
													
													foreach ($getplayerlist as $row) {
														$playername = $row->player_fname;
														$playermobile = $row->player_mnumber;
														$playeremail = $row->player_email;
														
													}
												}
											
												if($academy_payment_view['booking_player'] != ''){ 
													echo $playername; 
													echo "<br>";
													echo $playermobile; 
													echo "<br>";
													echo $playeremail; 												
												} else {
													echo $academy_payment_view['booking_player'];
												}
											?>
                                                </p>
                                                
                                            </div>
                                        </div>
                                        
                                       </div>
                                    <!-- End Col -->
                                    <!-- Begin Timeline -->
                                    <div class="col-xl-9">
                                        <!-- Begin Widget -->
                                        <div class="widget has-shadow">
                                            <!-- Begin Widget Header -->
                                            <div class="row">
                                            <div class="col-xl-6">
                                            
                                            <div class="widget-header d-flex align-items-center">
                                               
                                                <div class="d-flex flex-column mr-auto">
                                                    <div class="title">
                                                        <span class="username"><?php echo get_phrase('Payment Date');?></span>
                                                    </div>
                                                    <div class="time"> <?php echo $academy_payment_view['payment_date']; ?></div>
                                                </div>
                                               
                                            </div>
                                            <!-- End Widget Header -->
                                            <!-- Begin Widget Body -->
                                             </div>
                                            <div class="col-xl-5">
                                            <div class="widget-header d-flex align-items-center">
                                               <div class="d-flex flex-column mr-auto">
                                               <div class="title">
                                                        <span class="username"><?php echo get_phrase('Payment Amount');?></span>
                                                    </div>
												   <div class="time">AED <?php echo $academy_payment_view['booking_amount'] ?></div>
                                                    </div>
                                               
                                            </div>
                                            <!-- End Widget Body -->
                                            </div>
                                        </div>
                                        <?php
										if($academy_payment_view['payment_mode'] == '2'){
												$mode = 'Offline';
											}else{
												$mode = 'Online';
											}
											
											if($academy_payment_view['payment_status'] == '1'){
												$smode = 'Paid';
											}else{
												$smode = 'Un Paid';
											}
											?>
                                        <div class="row">
                                            <div class="col-xl-6">
                                            
                                            <div class="widget-header d-flex align-items-center">
                                               
                                                <div class="d-flex flex-column mr-auto">
                                                    <div class="title">
                                                        <span class="username"><?php echo get_phrase('Payment Mode');?></span>
                                                    </div>
                                                    <div class="time"><?php echo $mode; ?></div>
                                                </div>
                                               
                                            </div>
                                            <!-- End Widget Header -->
                                            <!-- Begin Widget Body -->
                                             </div>
                                            <div class="col-xl-5">
                                            <div class="widget-header d-flex align-items-center">
                                               <div class="d-flex flex-column mr-auto">
                                               <div class="title">
                                                        <span class="username"><?php echo get_phrase('Payment Status');?> </span>
                                                    </div>
												   <div class="time">
												    <?php echo $smode; ?>
												   </div>
                                                    </div>
                                               
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