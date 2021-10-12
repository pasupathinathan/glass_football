<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/timepicki.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl-carousel/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl-carousel/owl.theme.min.css">
<style type="text/css">
    .nav-tabs {
        border-bottom: none !important;
    }

    .table thead th {
        vertical-align: bottom;
        border-bottom: 2px solid #dee2e6 !important;
    }

    .table td, .table th {
        padding: .75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6 !important;
    }

    .timepicker_wrap {
        top: 50px !important;
    }

    input[type="file"] {
        display: block;
    }

    .imageThumb {
        width: 260px !important;
        height: 205px;
        /* border: 2px solid;*/
        padding: 1px;
        cursor: pointer;
    }

    .pip {
        display: inline-block;
        margin: 3px;
        /* width: 300px;
         height: 300px;*/
    }

    .defaultimg {
        display: inline-block;
        margin: 3px;
        /* width: 300px;
         height: 300px;*/
    }

    .remove {
        display: block;
        background: #444;
        /*border: 1px solid black;*/
        color: white;
        text-align: center;
        cursor: pointer;
    }

    .remove:hover {
        background: white;
        color: black;
    }

    .balaji {
        width: 800px;

    }

    .image-upload > input {
        display: none;
    }

    .nex_close_pic {
        font-size: 16px;
        position: relative;
        top: -20px;
        color: #000;
    }


</style>

<?php
foreach ($data12 as $store) :

    ?>
    <body id="page-top">
    <!-- Begin Preloader -->
    <!-- End Preloader -->
    <div class="page db-social">
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
                                                        <div class="counter"><?php echo $store->ground_phone; ?></div>
                                                        <div class="heading"><?php echo get_phrase('Mobile');?></div>
                                                    </li>
                                                    <li>
                                                        <div class="counter"><?php echo $store->ground_year; ?></div>
                                                        <div class="heading"><?php echo get_phrase('In Year Of Active');?></div>
                                                    </li>

                                                </ul>
                                            </div>
                                            <div class="col-xl-3 col-md-4 d-flex justify-content-center">
                                                <div class="image-default">
                                                    <?php if (!empty($store->ground_picture)) { ?>
                                                          <?php $image_ground = explode(',', $store->ground_picture); ?>
                                                        <img src="<?php echo base_url() . 'assets/upload/ground/' . $image_ground[0]; ?>"
                                                             class="rounded-circle" width="90" height="120">

                                                    <?php } else { ?>

                                                        <img src="<?php echo base_url(); ?>/assets/upload/ground.jpg"
                                                             class="rounded-circle" width="90" height="120">
                                                    <?php } ?>
                                                </div>
                                                <div class="infos">
                                                    <h2><?php echo $store->ground_name; ?></h2>
                                                    <div class="location"><?php echo $store->ground_email; ?></div>
                                                </div>
                                            </div>
                                            <div class="col-xl-5 d-flex ">


                                                <ul>

                                                    <li>
                                                        <div class="counter"><?php echo $store->ground_lat; ?></div>
                                                        <div class="heading"><?php echo get_phrase('Latitude');?></div>
                                                    </li>
                                                    <li>
                                                        <div class="counter"><?php echo $store->ground_long; ?></div>
                                                        <div class="heading"><?php echo get_phrase('Longitude');?></div>
                                                    </li>


                                                </ul>


                                                <div class="follow" style="margin-left: 10%;">
                                                    <a class=" btn btn-gradient-01"
                                                       href="<?php echo base_url('ground_list') ?>"><i
                                                                class="ti-arrow-left"></i><?php echo get_phrase('Back');?></a>

                                                </div>
                                            </div>
                                        </div>
                                     
                                    </div>
                                </div>
								<div class="row">
                                    <div class="col-xl-12 column">
									<div><?php echo $store->ground_about; ?></div>
									</div>
								</div><br/>
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
                                                    <?php echo $store->ground_location; ?>
                                                </p>

                                                <p>
                                                    <?php echo $store->ground_city; ?>
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
                                    <div class="col-xl-6">
                                        <!-- Begin Widget -->
                                        <div class="widget has-shadow">
                                            <!-- Begin Widget Header -->
                                            <div class="row">
                                                <div class="col-xl-5">

                                                    <div class="widget-header d-flex align-items-center">

                                                        <div class="d-flex flex-column mr-auto">
                                                            <div class="title">
                                                                <span class="username"><?php echo get_phrase('Ground Availablity');?></span>
                                                            </div>
                                                            <div class="time"> <?php if ($store->ground_availablity == 'available') { ?>

                                                                    <h4 style="color: green;"><?php echo get_phrase('Available');?></h4>

                                                                <?php } elseif ($store->ground_availablity == 'unavailable') { ?>

                                                                    <h4 style="color: red;"><?php echo get_phrase('UnAvailable');?></h4>

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
                                                                <span class="username"><?php echo get_phrase('Ground Facility');?></span>
                                                            </div>
                                                            <div class="col-lg-20">
                                                                <?php $facility_ids = explode(",",$store->ground_facility_id);?>
                                                                <?php foreach ($data3 as $row): { ?>
                                                                    <div class="form-check">
																	<?php if(in_array($row->facility_id,$facility_ids)){ ?>
																			<span class="label-text"><?php echo $row->facility_name; ?></span>
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
                                        <!-- End Widget -->
                                        <!-- Begin Widget -->

                                        <!-- End Widget -->
                                    </div>
                                    <!-- End Timeline -->
                                    <!-- Begin Column -->
                                    <!--<div class="col-xl-3 column">
                                        <div class="widget has-shadow">
                                            <div class="new-badge text-center">
                                                <div class="badge-img">
                                                    <i class="ion-fireball"></i>
                                                </div>
                                                <div class="title">
                                                    <div class="heading"><?php echo get_phrase('Congratulation');?></div>
                                                    <div class="text"><?php echo get_phrase('You have got a new badge');?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget no-bg text-center">
                                            <ul class="social-network">
                                                <li>
                                                    <a href="javascript:void(0);" class="ico-facebook" title="Facebook">
                                                        <i class="ion-social-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="ico-twitter" title="Twitter">
                                                        <i class="ion-social-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="ico-youtube" title="Youtube">
                                                        <i class="ion-social-youtube"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="ico-linkedin" title="Linkedin">
                                                        <i class="ion-social-linkedin"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>                                      
                                    </div>-->
									
                                    <!-- End Column -->
                                </div>
                                <!-- End Row -->
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Row -->


                        <div class="col-xl-12 desc-tables">

                            <div class="page-header pr-0 pl-0">
                                <div class="d-flex align-items-center">
                                    <h2 class="page-header-title"><?php echo get_phrase('Working Hours');?></h2>
                                    <div>

                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="text-left"><?php echo get_phrase('Day of Week');?></th>
                                        <th class="text-center"><?php echo get_phrase('Is open');?></th>
                                        <th class="text-center"><?php echo get_phrase('Open Time');?></th>
                                        <th class="text-center"><?php echo get_phrase('Close Time');?></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    //for($i=1;$i<=7;$i++){
                                    $i = 1;
                                    foreach ($data4 as $hourrow) {

                                        if ($i == 1) {
                                            $day_val = 'Sunday';
                                            $day = 'sun';
                                        } else if ($i == 2) {
                                            $day_val = 'Monday';
                                            $day = 'mon';
                                        } else if ($i == 3) {
                                            $day_val = 'Tuesday';
                                            $day = 'tue';
                                        } else if ($i == 4) {
                                            $day_val = 'Wednesday';
                                            $day = 'wed';
                                        } else if ($i == 5) {
                                            $day_val = 'Thursday';
                                            $day = 'thu';
                                        } else if ($i == 6) {
                                            $day_val = 'Friday';
                                            $day = 'fri';
                                        } else if ($i == 7) {
                                            $day_val = 'Saturday';
                                            $day = 'sat';
                                        }
                                        ?>

                                        <tr>
                                            <td class="text-center"><?php echo $day_val ?></td>
                                            <td class="text-left">
                                                <input type="hidden" name="myCheck_<?php echo $day ?>"
                                                       value="on" <?php if ($hourrow->day_on_off == 'on') {
                                                    echo 'checked';
                                                } ?> onclick="checkOpen('<?php echo $day ?>')"
                                                       id="myCheck_<?php echo $day ?>" disabled> Open
                                                <input type="hidden" id="grd_day_<?php echo $day ?>"
                                                       name="grd_day_<?php echo $day ?>"
                                                       value="<?php echo $day_val ?>"/>
                                                <input type="hidden" id="work_hour_id_<?php echo $day ?>"
                                                       name="work_hour_id_<?php echo $day ?>"
                                                       value="<?php echo $hourrow->work_hour_id; ?>"/>

                                            </td>
                                            <td class="text-center"><input id="open_time_<?php echo $day ?>"
                                                                           name="open_time_<?php echo $day ?>"
                                                                           type="text"
                                                                           class="form-control timepicker timepicker-no-seconds"
                                                                           disabled
                                                                           value="<?php echo $hourrow->open_time; ?>"/>
                                            </td>
                                            <td class="text-center"><input id="close_time_<?php echo $day ?>"
                                                                           name="close_time_<?php echo $day ?>"
                                                                           type="text"
                                                                           class="form-control timepicker timepicker-no-seconds"
                                                                           disabled
                                                                           value="<?php echo $hourrow->close_time; ?>"/>
                                            </td>

                                        </tr>
                                        <?php $i++;
                                    } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>

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
                                    $image_ground = explode(',', $store->ground_picture);
                                    $val = 1;


                                    foreach ($image_ground as $gp) {
                                        ?>

                                        <div class="col-xl-3 col-md-4 col-sm-6">
                                            <div style="background: none !important;" class="widget">


                                                <figure style="background: none !important;" class="img-hover-01">

                                                    <?php if (!empty($gp)){ ?>

                                                    <img width="220px" height="120px"
                                                         src="<?php echo base_url() . 'assets/upload/ground/' . $gp; ?>"
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


                        <!-- End Widget 20 -->


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
            $(document).ready(function () {
                $(".nav-tabs a").click(function () {
                    $(this).tab('show');
                });
            });
        </script>
        <!-- End Page Vendor Js -->
    </body>
    </html>
<?php endforeach; ?>