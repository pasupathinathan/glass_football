<?php
foreach ($data as $store) :

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
                                                        <div class="counter"><?php echo $store->ground_name ?></div>
                                                        <div class="heading"><?php echo get_phrase('Ground');?></div>
                                                    </li>
                                                   
                                                   
                                                </ul>
                                            </div>
                                            <div class="col-xl-3 col-md-4 d-flex justify-content-center">
                                                <div class="image-default">
                                                     <?php if(!empty($store->tour_banner)) { ?>
                                               
                                                <img src="<?php echo base_url() . 'assets/upload/tournament/' . $store->tour_banner; ?>" class="rounded-circle" width="90" height="120">
                                                  <?php } else { ?>
                                                  
                                                   <img src="<?php echo base_url(); ?>/assets/upload/ground.jpg ?>" class="rounded-circle" width="90" height="120">
                                                  
                                                   <?php } ?>
                                                </div>
                                                <div class="infos">
                                                    <h2><?php echo $store->tour_name ?></h2>
                                                    <div class="location"><?php echo $store->tour_type; ?></div>
                                                </div>
                                            </div>
                                            <div class="col-xl-5 d-flex ">
                                               
                                               
                                              
                                               
                                               
                                               <div class="follow" style="margin-left: 10%;">
                                                    <a class=" btn btn-gradient-01" href="<?php echo base_url('tournament_list') ?>"><i class="ti-arrow-left"></i><?php echo get_phrase('Back');?></a>
                                                    
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
                                                <h5><?php echo get_phrase('Address');?></h5>
                                            </div>
                                            <div class="widget-body">
                                                <p>
                                                 <?php echo $store->tour_address ?>
                                                </p>
                                                
                                                 <p>
                                                <?php echo $store->tour_city ?>
                                                </p>
                                                
                                                
                                            </div>
                                        </div>
                                        
                                         <div class="widget has-shadow">
                                            <div class="widget-header bordered no-actions d-flex align-items-center">
                                                <h5><?php echo get_phrase('Award');?></h5>
                                            </div>
                                            <div class="widget-body">
                                                <p>
                                                    <?php $award_ids = explode(",",$store->award_id);?>
                                                    <?php foreach ($data3 as $row): { ?>
                                                <div class="form-check">
                                                   <?php if(in_array($row->id,$award_ids)) {?>
                                                   <?php echo $row->award_name; ?></span><br>
												<?php } ?>
                                                </div>
                                                <?php } ?>
                                                <?php endforeach; ?>
                                                </p>
                                                
                                                
                                                
                                            </div>
                                        </div>
                                        <!-- End About -->
                                        <!-- Begin Twitter Feed -->
                                        
                                        <!-- End Twitter Feed -->
                                        <!-- Begin Blog Posts -->
                                        
                                        <!-- End Blog Posts -->
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
                                                        <span class="username"><?php echo get_phrase('Tournament Register Fees');?></span>
                                                    </div>
                                                    <div class="time"> <?php echo $store->tour_regfees; ?></div>
                                                </div>
                                               
                                            </div>
                                            <!-- End Widget Header -->
                                            <!-- Begin Widget Body -->
                                             </div>
                                            <div class="col-xl-6">
                                            <div class="widget-header d-flex align-items-center">
                                               <div class="d-flex flex-column mr-auto">
                                               <div class="title">
                                                        <span class="username"><?php echo get_phrase('Register Last Date');?></span>
                                                    </div>
												   <div class="time"><?php echo $store->tour_reglastdate ?></div>
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
                                                        <span class="username"><?php echo get_phrase('Winner Price');?>  </span>
                                                    </div>
                                                    <div class="time"> <?php echo $store->tour_winner_price; ?></div>
                                                </div>
                                               
                                            </div>
                                            <!-- End Widget Header -->
                                            <!-- Begin Widget Body -->
                                             </div>
                                            <div class="col-xl-6">
                                            <div class="widget-header d-flex align-items-center">
                                               <div class="d-flex flex-column mr-auto">
                                               <div class="title">
                                                        <span class="username"><?php echo get_phrase('Runner Price');?> </span>
                                                    </div>
												   <div class="time"><?php echo $store->tour_runner_price; ?></div>
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
                                                        <span class="username"><?php echo get_phrase('Trophy Picture');?></span>
                                                    </div>
												   <div class="time">  <?php if(!empty($store->tour_trophy)) { ?>
                                               
                                                <img src="<?php echo base_url(); ?>/assets/upload/tournament/<?php echo $store->tour_trophy; ?>" class="img-circle" width="80" height="80">
                                                
                                                 <?php } else { ?>
                                                 
                                                  <img src="<?php echo base_url(); ?>/assets/upload/cup.png ?>" class="img-circle" width="80" height="80">
                                                  
                                                   <?php } ?></div>
                                                    </div>
                                               
                                            </div>
                                            <!-- End Widget Body -->
                                            </div>
                                            
                                            <div class="col-xl-6">
                                            <div class="widget-header d-flex align-items-center">
                                               <div class="d-flex flex-column mr-auto">
                                               <div class="title">
                                                        <span class="username"><?php echo get_phrase('Team Limit');?></span>
                                                    </div>
												   <div class="time">  <?php echo $store->tour_teamlimit; ?></div>
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
                        <!-- End Row -->
                  
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