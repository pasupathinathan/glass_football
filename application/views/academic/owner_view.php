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
                                            <div class="col-xl-4 col-md-6 d-flex justify-content-lg-start justify-content-md-start justify-content-center">
                                                <ul>                                                  
                                                    <li>
                                                        <div class="counter"><?php echo $store->user_phone; ?></div>
                                                        <div class="heading"><?php echo get_phrase('Mobile');?></div>
                                                    </li>
                                                    <li>
                                                        <div class="counter"><?php echo $store->user_email; ?></div>
                                                        <div class="heading"><?php echo get_phrase('Email');?></div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-xl-4 col-md-4 d-flex justify-content-center">
                                                <div class="image-default">
                                                    
                                                    
                                                     <?php if(!empty($store->user_image)){ ?>
                                           
                                           <img  src="<?php echo base_url(); ?>/assets/upload/users/<?php  echo $store->user_image; ?>" class="avatar rounded-circle d-block mx-auto" width="125px" height="125px" >
                                           
                                           <?php } else { ?>
                                           
                                           <img src="<?php echo base_url(); ?>/assets/upload/man.png" class="avatar rounded-circle d-block mx-auto" width="125px" height="125px" >
                                           
                                           <?php } ?>
                                                    
                                                </div>
                                                <div class="infos">
                                                    <h2><?php echo $store->user_name; ?></h2>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-4 d-flex justify-content-lg-end justify-content-md-end justify-content-center">
                                                <div class="follow">
                                                    <a class="btn btn-gradient-01" href="<?php echo site_url('academic_owner_list');  ?>"><i class="ti-arrow-left"></i><?php echo get_phrase('Back');?></a>
                                                    <div class="actions dark">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                                <!-- End Head Profile -->
                                <div class="row">
                                    <div class="col-xl-6 column">
                                        <!-- Begin About -->
                                        <div class="widget has-shadow">
                                            <div class="widget-header bordered no-actions d-flex align-items-center">
                                                <h5><?php echo get_phrase('Address');?></h5>
                                            </div>
                                            <div class="widget-body">
                                                <p>
                                                    <?php echo $store->user_address; ?>
                                                </p>
<!--                                                <p>--><?php //echo $store->user_area; ?><!--</p>-->
<!--                                                <p>--><?php //echo $store->user_city; ?><!--</p>-->
<!--                                                <p>--><?php //echo $store->user_zip; ?><!--</p>-->
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
                                    <div class="col-xl-6">
                                        <!-- Begin Widget -->
                                        <div class="widget has-shadow">
                                            <!-- Begin Widget Header -->
                                            <div class="widget-header d-flex align-items-center">
                                               
                                                <div class="d-flex flex-column mr-auto">
                                                    <div class="title">
                                                        <span class="username">
                                                       
                                                        <?php echo get_phrase('Academic Owner');?>
                                                        
                                                        </span>
                                                    </div>
                                                   
                                                </div>
                                               
                                            </div>
                                            <!-- End Widget Header -->
                                            <!-- Begin Widget Body -->
                                            <div class="widget-body">
                                                <p>
                                                   
                                                </p>
                                            </div>
                                            <!-- End Widget Body -->
                                            <!-- Begin Widget Footer -->
                                            
                                            
                                        </div>
                                        <!-- End Widget -->
                                        <!-- Begin Widget -->
                                        
                                        <!-- End Widget -->
                                    </div>
                                    <!-- End Timeline -->
                                    <!-- Begin Column -->
                                    <!-- <div class="col-xl-3 column">
                                        
                                        <div class="widget has-shadow">
                                            <div class="new-badge text-center">
                                                <div class="badge-img">
                                                    <i class="ion-fireball"></i>
                                                </div>
                                                <div class="title">
                                                    <div class="heading"><?php //echo get_phrase('Congratulation');?></div>
                                                    <div class="text"><?php //cho get_phrase('You have got a new badge');?></div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="widget no-bg text-center">
                                            <ul class="social-network">
                                                <li>
                                                    <a href="#" class="ico-facebook" title="Facebook">
                                                        <i class="ion-social-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="ico-twitter" title="Twitter">
                                                        <i class="ion-social-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="ico-youtube" title="Youtube">
                                                        <i class="ion-social-youtube"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="ico-linkedin" title="Linkedin">
                                                        <i class="ion-social-linkedin"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>                                        
                                    </div> -->
                                    
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
