    <style>
	.textalign {
		text-align : center
	}
	</style>
	<body id="page-top">
    <div class="page db-social">
        <div class="page-content d-flex align-items-stretch">
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
                                                        <div class="counter"><?php echo $academy['academy_contact_number']; ?></div>
                                                        <div class="heading"><?php echo get_phrase('Mobile');?></div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-xl-3 col-md-4 d-flex justify-content-center">
                                                <div class="image-default">
                                                    <?php if (!empty($academy['academy_images'])) { ?>
                                                          <?php $image_academy = explode(',', $academy['academy_images']); ?>
                                                        <img src="<?php echo base_url() . 'assets/upload/academy/' . $image_academy[0]; ?>"
                                                             class="rounded-circle" width="90" height="120">

                                                    <?php } else { ?>

                                                        <img src="<?php echo base_url(); ?>/assets/upload/ground.jpg"
                                                             class="rounded-circle" width="90" height="120">
                                                    <?php } ?>
                                                </div>
                                                <div class="infos">
                                                    <h2><?php echo $academy['academy_name']; ?></h2>
                                                    <div class="location"><?php echo $academy['academy_email']; ?></div>
                                                </div>
                                            </div>
                                            <div class="col-xl-5 d-flex ">


                                                <ul>

                                                    <li>
                                                        <div class="counter"><?php echo $academy['academy_latitude']; ?></div>
                                                        <div class="heading"><?php echo get_phrase('Latitude');?></div>
                                                    </li>
                                                    <li>
                                                        <div class="counter"><?php echo $academy['academy_longitude']; ?></div>
                                                        <div class="heading"><?php echo get_phrase('Longitude');?></div>
                                                    </li>


                                                </ul>


                                                <div class="follow" style="margin-left: 10%;">
                                                    <a class=" btn btn-gradient-01"
                                                       href="<?php echo base_url('academy_list') ?>"><i
                                                                class="ti-arrow-left"></i><?php echo get_phrase('Back');?></a>

                                                </div>
                                            </div>
                                        </div>
                                     
                                    </div>
                                </div>
								<div class="row">
                                    <div class="col-xl-12 column">
										<div><?php echo $academy['academy_description']; ?></div>
									</div>
								</div>
								<br/>
								
								<div class="row">
                                    <div class="col-xl-12">
										<div class="widget has-shadow">
                                            <div class="row">
                                                <div class="col-xl-4">
                                                    <div class="widget-header d-flex align-items-center">
                                                        <div class="d-flex flex-column mr-auto">
                                                            <div class="title">
                                                                <span class="username"><?php echo get_phrase('From Date');?></span>
                                                            </div>
                                                            <div class="textalign"><span class="label-text"><?php echo date('d-m-Y',strtotime($academy['from_date'])); ?></span></div>
                                                        </div>
														
														<div class="d-flex flex-column mr-auto">
                                                            <div class="title">
                                                                <span class="username"><?php echo get_phrase('To Date');?></span>
                                                            </div>
                                                            <div class="textalign"><span class="label-text"><?php echo date('d-m-Y',strtotime($academy['to_date'])); ?></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="widget-header d-flex align-items-center">
                                                        <div class="d-flex flex-column mr-auto">
                                                            <div class="title">
                                                                <span class="username"><?php echo get_phrase('Start Time');?></span>
                                                            </div>
                                                            <div class="textalign"><span class="label-text"><?php echo date('h:i A',strtotime($academy['start_time'])); ?></span></div>
                                                        </div>
														<div class="d-flex flex-column mr-auto">
                                                            <div class="title">
                                                                <span class="username"><?php echo get_phrase('End Time');?></span>
                                                            </div>
                                                            <div class="textalign"><span class="label-text"><?php echo date('h:i A',strtotime($academy['end_time'])); ?></span></div>
                                                        </div>
                                                    </div>
                                                </div>
												<div class="col-xl-4">
                                                    <div class="widget-header d-flex align-items-center">
                                                        <div class="d-flex flex-column mr-auto">
                                                            <div class="title">
                                                                <span class="username"><?php echo get_phrase('Starting Age');?></span>
                                                            </div>
                                                            <div class="textalign"><span class="label-text"><?php echo $academy['starting_age']; ?></span></div>
                                                        </div>
														<div class="d-flex flex-column mr-auto">
                                                            <div class="title">
                                                                <span class="username"><?php echo get_phrase('Ending Age');?></span>
                                                            </div>
                                                            <div class="textalign"><span class="label-text"><?php echo $academy['ending_age']; ?></span></div>
                                                        </div>
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
                                                    <?php echo $academy['academy_location']; ?>
                                                </p>

                                                <p>
                                                    <?php echo $academy['academy_city']; ?>
                                                </p>                                          
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="widget has-shadow">
                                            <div class="row">
                                                <div class="col-xl-5">

                                                    <div class="widget-header d-flex align-items-center">

                                                        <div class="d-flex flex-column mr-auto">
                                                            <div class="title">
                                                                <span class="username"><?php echo get_phrase('Academy Availability');?></span>
                                                            </div>
                                                            <div class="time"> <?php if ($academy['academy_availability'] == 'available') { ?>

                                                                    <h4 style="color: green;"><?php echo get_phrase('Available');?></h4>

                                                                <?php } elseif ($academy['academy_availability'] == 'unavailable') { ?>

                                                                    <h4 style="color: red;"><?php echo get_phrase('Not Available');?></h4>

                                                                <?php } ?></div>
                                                        </div>

                                                    </div>
                                                    <!-- End Widget Header -->
                                                    <!-- Begin Widget Body -->
                                                </div>
                                                <div class="col-xl-5">
                                                    <div class="widget-header d-flex align-items-center">
                                                        <div class="d-flex flex-column mr-auto">
                                                            <div class="title">
                                                                <span class="username"><?php echo get_phrase('Coaching Classes');?></span>
                                                            </div>
                                                            <div class="col-lg-20">
                                                                <?php $coaching_ids = explode(",",$academy['coaching_classes_id']);?>
                                                                <?php foreach ($coaching_classes as $row): { ?>
                                                                    <div class="form-check">
																	<?php if(in_array($row['coaching_id'],$coaching_ids)){ ?>
																			<span class="label-text"><?php echo $row['coaching_name']; ?></span>
																	<?php } ?>
                                                                    </div>
                                                                <?php } ?>
                                                                <?php endforeach; ?>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <!-- End Widget Body -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Row -->
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Row -->

                        <div class="row justify-content-center">
                            <div class="col-xl-11">
                                <!-- Begin Page Header-->
                                <div class="page-header pr-0 pl-0">
                                    <div class="d-flex align-items-center">
                                        <h2 class="page-header-title"><?php echo get_phrase('Albums');?></h2>
                                        <div>

                                        </div>
                                    </div>
                                </div>
                                <!-- End Page Header -->

                                <div class="row">

                                    <?php
                                    $image_academy = explode(',', $academy['academy_images']);
                                    $val = 1;


                                    foreach ($image_academy as $gp) {
                                        ?>

                                        <div class="col-xl-3 col-md-4 col-sm-6">
                                            <div style="background: none !important;" class="widget">


                                                <figure style="background: none !important;" class="img-hover-01">

                                                    <?php if (!empty($gp)){ ?>

                                                    <img width="220px" height="120px"
                                                         src="<?php echo base_url() . 'assets/upload/academy/' . $gp; ?>"
                                                         class="" alt="...">


                                                </figure>
                                                <?php } else { ?>

                                                    <img src="<?php echo base_url(); ?>/assets/upload/logos.png"
                                                         width="220" height="120">
                                                <?php } ?>

                                            </div>
                                        </div>

                                        <?php $val++;
                                    } ?>


                                </div>
                                <!-- End Row -->

                            </div>
                            <!-- End Col -->
                        </div>
                    </div>
                    <a href="#" class="go-top"><i class="la la-arrow-up"></i></a>
                </div>
                <!-- End Content -->
            </div>
            <!-- End Page Content -->
        </div>
        <script src="<?php echo base_url(); ?>assets/vendors/js/base/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendors/js/base/core.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendors/js/nicescroll/nicescroll.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendors/js/app/app.min.js"></script>
    </body>
    </html>