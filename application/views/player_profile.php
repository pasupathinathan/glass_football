<?php
 foreach($data12 as $store) : 
$user_id=  $this->uri->segment(2);
 ?>

    <body id="page-top">
        <!-- Begin Preloader -->
       
        <!-- End Preloader -->
        <div class="page db-social">
            <!-- Begin Header -->
            
            <!-- End Header -->
            <!-- Begin Page Content -->
            <div class="page-content d-flex align-items-stretch">
                <?php include('inc/admin_sidebar.php') ?>
                <!-- End Left Sidebar -->
                <!-- Begin Content -->
                <div class="content-inner">
            <div class="container-fluid">
                    <!-- Begin Jumbotron -->
					<div style="background:url(<?php echo base_url(); ?>assets/img/foot.jpg);"
                         class="jumbotron jumbotron-fluid"></div>
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
                                                        <div class="counter"><?php echo $store->player_mnumber; ?></div>
                                                        <div class="heading"> <?php echo get_phrase('Mobile');?></div>
                                                    </li>
                                                    <li>
                                                        <div class="counter"><?php echo $store->player_ratings; ?></div>
                                                        <div class="heading"> <?php echo get_phrase('Rating');?></div>
                                                    </li>
                                                    <li>
                                                        <div class="counter"><?php echo date('d-m-Y',strtotime($store->created_at)); ?></div>
                                                        <div class="heading"> <?php echo get_phrase('Register Date');?></div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-xl-4 col-md-4 d-flex justify-content-center">
                                                <div class="image-default">
                                                    
                                                    
                                                     <?php if(!empty($store->player_image)){ ?>
                                           
                                           <img  src="<?php echo base_url(); ?>/assets/upload/players/<?php  echo $store->player_image; ?>" class="avatar rounded-circle d-block mx-auto" width="125px" height="125px" >
                                           
                                           <?php } else { ?>
                                           
                                           <img src="<?php echo base_url(); ?>/assets/upload/man.png" class="avatar rounded-circle d-block mx-auto" width="125px" height="125px" >
                                           
                                           <?php } ?>
                                                    
                                                </div>
                                                <div class="infos">
                                                    <h2><?php echo $store->player_fname; ?></h2>
                                                    <h5>(<?php echo $store->player_role; ?>)</h5>
                                                    <div class="location"><?php echo $store->player_email; ?></div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-4 d-flex justify-content-lg-end justify-content-md-end justify-content-center">
                                                <div class="follow">
                                                    <a class="btn btn-gradient-01" href="<?php echo site_url('players_list');  ?>"><i class="ti-arrow-left"></i> <?php echo get_phrase('Back');?></a>
                                                    <div class="actions dark">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                                <!-- <div class="time"><?php  //echo $store->team_role; ?></div> -->
                                <div class="row">
                                 
                                    <!-- End Timeline -->
                                   
                                    <!-- End Column -->
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
        <!-- End Page Vendor Js -->
    </body>
</html>


<?php endforeach; ?>