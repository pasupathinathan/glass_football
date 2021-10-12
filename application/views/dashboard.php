<?php

$user_id = $this->uri->segment(2);

?>


<style>
    .text-facebook1 {
        color: #366979 !important;
    }

    .text-facebook2 {
        color: #36794b !important;
    }

    .text-facebook3 {
        color: #79363f !important;
    }

    .widget-06 .media .stars i {
        color: #9c4949;
        font-size: 16px;
    }

</style>


<!-- Begin Page Content -->
<div class="page-content d-flex align-items-stretch">
    <?php include('inc/admin_sidebar.php') ?>
    <!-- End Left Sidebar -->
    <div class="content-inner">

        <?php if ($this->session->userdata['user_role'] == 1) { ?>


            <div class="container-fluid">
                <!-- Begin Page Header-->
                <div class="row">
                    <div class="page-header">
                        <div class="d-flex align-items-center">
                            <h2 class="page-header-title"><?php echo $page_data['page_title'] ?></h2>
                            <div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Page Header -->
                <!-- Begin Row -->
                <div class="row flex-row">
                    <!-- Begin Facebook -->
                    <?php
                    $total_ground = $this->football_model->total_ground();
                    $total_academy = $this->football_model->total_academy();
                    $total_team = $this->football_model->total_team();
                    $ground_booking = $this->football_model->ground_booking();
                    $academy_booking_count = $this->football_model->academy_booking_count();
                    $total_player = $this->football_model->total_player();
                    $rating_player = $this->football_model->rating_player();
                    $total_tournament = $this->football_model->total_tournament();
                    ?>
                    <div class="col-xl-4 col-md-6 col-sm-6">
					 <a href="<?php echo base_url('ground_list') ?>">
                        <div class="widget widget-12 has-shadow">
                            <div class="widget-body">
                                <div class="media">
                                    <div class="align-self-center ml-5 mr-5">
                                        <i class="la la-life-saver text-facebook"></i>
                                    </div>
                                    <div class="media-body align-self-center">
										
                                        <div class="title text-facebook "><?php echo get_phrase('Grounds'); ?></div>
                                        <div class="number"><?php echo $total_ground; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
					  </a>
                    </div>
                    <!-- End Facebook -->
					<div class="col-xl-4 col-md-6 col-sm-6">
					 <a href="<?php echo base_url('academy_list') ?>">
                        <div class="widget widget-12 has-shadow">
                            <div class="widget-body">
                                <div class="media">
                                    <div class="align-self-center ml-5 mr-5">
                                        <i class="la la-dribbble text-twitter"></i>
                                    </div>
                                    <div class="media-body align-self-center">
										
                                        <div class="title text-facebook "><?php echo get_phrase('Academy'); ?></div>
                                        <div class="number"><?php echo $total_academy; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
					  </a>
                    </div>
                    <!-- Begin Twitter -->
                    <div class="col-xl-4 col-md-6 col-sm-6">
					<a href="<?php echo base_url('team_list') ?>">
                        <div class="widget widget-12 has-shadow">
                            <div class="widget-body">
                                <div class="media">
                                    <div class="align-self-center ml-5 mr-5">
                                        <i class="la la-soccer-ball-o text-facebook3"></i>
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="title text-twitter"><?php echo get_phrase('Teams'); ?></div>
                                        <div class="number"><?php echo $total_team; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</a>
                    </div>
                    <!-- End Twitter -->
                    <!-- Begin Linkedin -->
                    <div class="col-xl-4 col-md-6 col-sm-6">
					<a href="<?php echo base_url('booking_list') ?>">
                        <div class="widget widget-12 has-shadow">
                            <div class="widget-body">
                                <div class="media">
                                    <div class="align-self-center ml-5 mr-5">
                                        <i class="la la-comment text-facebook"></i>
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="title text-linkedin"><?php echo get_phrase('Ground Bookings'); ?></div>
                                        <div class="number"><?php echo $ground_booking; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
						</a>
                    </div>
					<div class="col-xl-4 col-md-6 col-sm-6">
					<a href="<?php echo base_url('academy_booking') ?>">
                        <div class="widget widget-12 has-shadow">
                            <div class="widget-body">
                                <div class="media">
                                    <div class="align-self-center ml-5 mr-5">
                                        <i class="la la-ge text-linkedin"></i>
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="title text-linkedin"><?php echo get_phrase('Academy Bookings'); ?></div>
                                        <div class="number"><?php echo $academy_booking_count; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
						</a>
                    </div>
					<div class="col-xl-4 col-md-6 col-sm-6">
					<a href="<?php echo base_url('players_list') ?>">
                        <div class="widget widget-12 has-shadow">
                            <div class="widget-body">
                                <div class="media">
                                    <div class="align-self-center ml-5 mr-5">
                                        <i class="ti ti-user text-facebook3"></i>
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="title text-facebook1 "><?php echo get_phrase('Players');?></div>
                                        <div class="number"><?php echo $total_player; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
						</a>
                    </div>
                    <!-- End Linkedin -->
                </div>
                <!-- End Row -->
                <!-- Begin Row -->
                <div class="row flex-row">
                    <!-- Begin Linkedin -->
                    <div class="col-xl-4 col-md-6 col-sm-6">
					<a href="<?php echo base_url('tournament_list') ?>">
                        <div class="widget widget-12 has-shadow">
                            <div class="widget-body">
                                <div class="media">
                                    <div class="align-self-center ml-5 mr-5">
                                        <i class="la la-forumbee text-facebook"></i>
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="title text-facebook3"><?php echo get_phrase('Tournaments');?></div>
                                        <div class="number"><?php echo $total_tournament; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
						</a>
                    </div>
                    <!-- End Linkedin -->
                </div>
                <!-- End Row -->

                    <div class="row flex-row">
                        <div class="col-xl-12">
                            <!-- Sorting -->
                            <!-- End Sorting -->
                            <!-- Export -->
                            <div class="widget has-shadow">
                                <div class="widget-header bordered no-actions d-flex align-items-center">
                                    <div class="col-md-10">
                                        <h4><?php echo get_phrase('Bookings Calendar');?></h4>
                                    </div>
                                </div>
								
								<div class="widget-header bordered no-actions d-flex align-items-center">
									<div class="row">
										<div class="col-md-12">
											<button class="btn btn-gradient-01" style="background:#fb8c00;color:white;cursor:auto;"><?php echo get_phrase('Academic'); ?></button>
											<button class="btn btn-gradient-01" style="background:linear-gradient(to right, #114090, #132866);color:white;cursor:auto;"><?php echo get_phrase('Street League');?></button>
											<button class="btn btn-gradient-01" style="background:#43a047;color:white;cursor:auto;"><?php echo get_phrase('Club');?></button>
											<button class="btn btn-gradient-01" style="background:#00acc1;color:white;cursor:auto;"><?php echo get_phrase('Tournament'); ?></button>
										</div>
										<div class="col-md-12">
											<div class="text-right">
												<a style="margin-top: 10px;" href="<?php echo base_url('booking_add') ?>" class="btn btn-primary mr-1 mb-2" role="button"><?php echo get_phrase('Add Booking');?></a>
											</div>
										</div>
									</div>
								</div>
                                <div class="widget-body">
                                    <div class="row">
                                        <div id="calendar"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Export -->
                        </div>
                    </div>

                <!-- Begin Row -->
            <div class="row flex-row">
                <div class="col-xl-4 col-md-4">
                        <!-- Begin Widget 10 -->
                        <div class="widget widget-06 has-shadow">
                            <!-- Begin Widget Header -->
                            <div class="widget-header bordered d-flex align-items-center">
                                <h2><?php echo get_phrase('Tournament Details');?></h2>
                                <div class="widget-options">

                                </div>
                            </div>
                            <!-- End Widget Header -->
                            <!-- Begin Widget Body -->
							<div class="widget-body p-0">
                                <div id="list-group" class="widget-scroll" style="max-height:490px;">
                                 <ul class="reviews list-group w-100">
                                    <?php
                                    if (!empty($data)) {
                                        foreach ($data as $row) {
                                            ?>
                                            <li class="list-group-item">
                                                <a target="_blank"
                                                   href="<?php echo base_url('tournament_profile'); ?>/<?php echo $row->tour_id; ?>">
                                                    <div class="media">
                                                        <div class="media-left align-self-center pr-4">

                                                            <?php if (!empty($row1->tour_trophy)) { ?>

                                                                <img src="<?php echo base_url(); ?>/assets/upload/tournament/<?php echo $row->tour_trophy; ?>"
                                                                     class="user-img rounded-circle" width="50"
                                                                     height="50">
                                                            <?php } else {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>/assets/upload/cup.png"
                                                                     class="user-img rounded-circle" width="50"
                                                                     height="50">


                                                                <?php
                                                            }
                                                            ?>


                                                        </div>
                                                        <div class="media-body align-self-center">
                                                            <div class="username">
                                                                <h4><?php echo $row->tour_name; ?></h4>
                                                            </div>
                                                            <div class="status"><span
                                                                        class="open mr-2"><?php echo get_phrase('Team Limit');?> : </span> <?php echo $row->tour_teamlimit; ?>
                                                            </div>
                                                            <div class="status"><span class="open mr-2"><?php echo get_phrase('Price');?> : </span>AED <?php echo $row->tour_winner_price; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>


                                        <?php }

                                    } ?>
                                    <!-- End 01 -->
                                    <!-- 02 -->

                                    <!-- End 02 -->
                                    <!-- 03 -->

                                    <!-- End 03 -->
                                </ul>
                            </div>
                            <!-- End Widget Body -->
                        </div>
                        <!-- End Widget 10 -->
                    </div>
					</div>
                    <div class="col-xl-4">
                        <!-- Begin Widget 06 -->
                        <div class="widget widget-06 has-shadow">
                            <!-- Begin Widget Header -->
                            <div class="widget-header bordered d-flex align-items-center">
                                <h2><?php echo get_phrase('Ground Reviews & Ratings'); ?></h2>
                                <div class="widget-options">

                                </div>
                            </div>
                            <!-- End Widget Header -->
                            <!-- Begin Widget Body -->
                            <div class="widget-body p-0">
                                <div id="list-group" class="widget-scroll" style="max-height:490px;">
                                    <ul class="reviews list-group w-100">
                                        <!-- 01 -->

                                        <?php
                                        if (!empty($data1)) {
                                            foreach ($data1 as $row1) {


                                                ?>
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-left align-self-start">

                                                            <?php if (!empty($row1->player_image)) { ?>

                                                                <img src="<?php echo base_url(); ?>/assets/upload/players/<?php echo $row1->player_image; ?>"
                                                                     class="user-img rounded-circle" width="40"
                                                                     height="40">


                                                            <?php } else {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>/assets/upload/man.png"
                                                                     class="user-img rounded-circle" width="40"
                                                                     height="40">


                                                                <?php
                                                            }
                                                            ?>
                                                        </div>
                                                        <div class="media-body align-self-center">
                                                            <div class="username">
                                                                <h4><?php echo $row1->player_fname; ?></h4>
                                                            </div>
                                                            <div class="msg">
                                                                <div class="stars">


                                                                    <?php
                                                                    $rating_count = "$row1->rating";

                                                                    for ($i = 1; $i <= 5; $i++) {
                                                                        if ($i <= $rating_count) {
                                                                            echo '<i class="la la-star"></i>';
                                                                        } else {
                                                                            echo '<i class="la la-star-o"></i>';
                                                                        }
                                                                    }
                                                                    ?>


                                                                </div>
                                                                <p>
                                                                    <?php echo $row1->review; ?>
                                                                </p>
                                                            </div>
                                                            <div class="meta">
                                                                <span class="mr-3"><?php echo date('d-m-Y h:i A',strtotime($row1->created_at)); ?> </span>

                                                            </div>
                                                        </div>
                                                        <div class="media-right pr-3 align-self-center">
                                                            <div class="like text-center">
                                                                <i class="ion-heart"></i>
                                                                <span><?php echo $row1->rating; ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- End 01 -->
                                                <!-- 02 -->
                                            <?php }
                                        } ?>
                                        <!-- End 02 -->
                                        <!-- 03 -->

                                        <!-- End 03 -->
                                        <!-- 04 -->

                                        <!-- End 04 -->
                                        <!-- 05 -->

                                        <!-- End 05 -->
                                    </ul>
                                </div>
                                <!-- End List -->
                            </div>
                            <!-- End Widget Body -->
                        </div>
                        <!-- End Widget 06 -->
                    </div>
					
					 <div class="col-xl-4">
                        <!-- Begin Widget 06 -->
                        <div class="widget widget-06 has-shadow">
                            <!-- Begin Widget Header -->
                            <div class="widget-header bordered d-flex align-items-center">
                                <h2><?php echo get_phrase('Academy Reviews & Ratings'); ?></h2>
                                <div class="widget-options">

                                </div>
                            </div>
                            <!-- End Widget Header -->
                            <!-- Begin Widget Body -->
                            <div class="widget-body p-0">
                                <div id="list-group" class="widget-scroll" style="max-height:490px;">
                                    <ul class="reviews list-group w-100">
                                        <!-- 01 -->

                                        <?php
                                        if (!empty($academmy_review)) {
                                            foreach ($academmy_review as $ar) {


                                                ?>
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-left align-self-start">

                                                            <?php if (!empty($ar->player_image)) { ?>

                                                                <img src="<?php echo base_url(); ?>/assets/upload/players/<?php echo $ar->player_image; ?>"
                                                                     class="user-img rounded-circle" width="40"
                                                                     height="40">


                                                            <?php } else {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>/assets/upload/man.png"
                                                                     class="user-img rounded-circle" width="40"
                                                                     height="40">


                                                                <?php
                                                            }
                                                            ?>
                                                        </div>
                                                        <div class="media-body align-self-center">
                                                            <div class="username">
                                                                <h4><?php echo $ar->player_fname; ?></h4>
                                                            </div>
                                                            <div class="msg">
                                                                <div class="stars">


                                                                    <?php
                                                                    $rating_count = "$ar->rating";

                                                                    for ($i = 1; $i <= 5; $i++) {
                                                                        if ($i <= $rating_count) {
                                                                            echo '<i class="la la-star"></i>';
                                                                        } else {
                                                                            echo '<i class="la la-star-o"></i>';
                                                                        }
                                                                    }
                                                                    ?>


                                                                </div>
                                                                <p>
                                                                    <?php echo $ar->review; ?>
                                                                </p>
                                                            </div>
                                                            <div class="meta">
                                                                <span class="mr-3"><?php echo date('d-m-Y h:i A',strtotime($ar->created_at)); ?> </span>

                                                            </div>
                                                        </div>
                                                        <div class="media-right pr-3 align-self-center">
                                                            <div class="like text-center">
                                                                <i class="ion-heart"></i>
                                                                <span><?php echo $ar->rating; ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- End 01 -->
                                                <!-- 02 -->
                                            <?php }
                                        } ?>
                                        <!-- End 02 -->
                                        <!-- 03 -->

                                        <!-- End 03 -->
                                        <!-- 04 -->

                                        <!-- End 04 -->
                                        <!-- 05 -->

                                        <!-- End 05 -->
                                    </ul>
                                </div>
                                <!-- End List -->
                            </div>
                            <!-- End Widget Body -->
                        </div>
                        <!-- End Widget 06 -->
                    </div>
					
                </div>
                <!-- End Row -->
                <!-- End Row -->
            </div>


        <?php } else { ?>

            <div class="container-fluid">
                <!-- Begin Page Header-->
                <div class="row">
                    <div class="page-header">
                        <div class="d-flex align-items-center">
                            <h2 class="page-header-title"><?php echo get_phrase('Dashboard');?></h2>
                            <div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Page Header -->
                <!-- Begin Row -->
                <div class="row flex-row">
                    <!-- Begin Facebook -->
                   <div class="col-xl-4 col-md-6 col-sm-6">
				   <a href="<?php echo base_url('ground_list') ?>">
                        <div class="widget widget-12 has-shadow">
                            <div class="widget-body">
                                <div class="media">
                                    <div class="align-self-center ml-5 mr-5">
                                        <i class="la la-life-saver text-facebook"></i>
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="title text-facebook "><?php echo get_phrase('Grounds');?></div>
                                        <div class="number"><?php echo $total_ground_for_owener; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
						</a>
                    </div>
                    <!-- End Facebook -->
                    <!-- Begin Linkedin -->
                    <div class="col-xl-4 col-md-6 col-sm-6">
					<a href="<?php echo base_url('booking_list') ?>">
                        <div class="widget widget-12 has-shadow">
                            <div class="widget-body">
                                <div class="media">
                                    <div class="align-self-center ml-5 mr-5">
                                        <i class="la la-comment text-linkedin"></i>
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="title text-linkedin"><?php echo get_phrase('Ground Booking');?></div>
                                        <div class="number"><?php echo $ground_booking_gowner; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
						</a>
                    </div>
                    <!-- End Linkedin -->
               
                <!-- End Row -->
               
                    <!-- Begin Linkedin -->
                    <div class="col-xl-4 col-md-6 col-sm-6">
					<a href="<?php echo base_url('Tournament_list') ?>">
                        <div class="widget widget-12 has-shadow">
                            <div class="widget-body">
                                <div class="media">
                                    <div class="align-self-center ml-5 mr-5">
                                        <i class="la la-futbol-o text-facebook3"></i>
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="title text-facebook3"><?php echo get_phrase('Tournament');?></div>
                                        <div class="number"><?php echo $tournament_total_by_ground_owner; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
						</a>
                    </div>
                    <!-- End Linkedin -->
					
					<div class="col-xl-4 col-md-6 col-sm-6">
				   <a href="<?php echo base_url('academy_list') ?>">
                        <div class="widget widget-12 has-shadow">
                            <div class="widget-body">
                                <div class="media">
                                    <div class="align-self-center ml-5 mr-5">
                                        <i class="la la-dribbble text-facebook"></i>
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="title text-facebook "><?php echo get_phrase('Academy');?></div>
                                        <div class="number"><?php echo $owners_total_academy_count; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
						</a>
                    </div>
					
					<div class="col-xl-4 col-md-6 col-sm-6">
				   <a href="<?php echo base_url('academy_booking') ?>">
                        <div class="widget widget-12 has-shadow">
                            <div class="widget-body">
                                <div class="media">
                                    <div class="align-self-center ml-5 mr-5">
                                        <i class="la la-ge text-linkedin"></i>
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="title text-facebook "><?php echo get_phrase('Academy Booking');?></div>
                                        <div class="number"><?php echo $owners_academy_booking_count; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
						</a>
                    </div>
					
                </div>
                <!-- End Row -->
                    <div class="row flex-row">
                        <div class="col-xl-12">
                            <!-- Sorting -->
                            <!-- End Sorting -->
                            <!-- Export -->
                            <div class="widget has-shadow">
                                <div class="widget-header bordered no-actions d-flex align-items-center">
                                    <div class="col-md-10">
                                        <h4>Bookings Calendar</h4>
                                    </div>
                                </div>
                                <div class="widget-header bordered no-actions d-flex align-items-center">
                                    <div class="col-md-10">
                                        <button class="btn btn-gradient-01" style="background:#fb8c00;color:white;cursor:auto;"><?php echo get_phrase('Academic');?></button>
                                        <button class="btn btn-gradient-01" style="background:linear-gradient(to right, #114090, #132866);color:white;cursor:auto;"><?php echo get_phrase('Street League');?></button>
                                        <button class="btn btn-gradient-01" style="background:#43a047;color:white;cursor:auto;"><?php echo get_phrase('Club');?></button>
                                        <button class="btn btn-gradient-01" style="background:#00acc1;color:white;cursor:auto;"><?php echo get_phrase('Tournament');?></button>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="text-right">
                                            <a style="margin-top: 10px;" href="<?php echo base_url('booking_add') ?>" class="btn btn-primary mr-1 mb-2" role="button"><?php echo get_phrase('Add Booking');?></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-body">
                                    <div class="row">
                                        <div id="calendar"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Export -->
                        </div>
                    </div>
                <!-- Begin Row -->
                <div class="row flex-row">
                    <div class="col-xl-4 col-md-4">
                        <!-- Begin Widget 06 -->
                        <div class="widget widget-06 has-shadow">
                            <!-- Begin Widget Header -->
                            <div class="widget-header bordered d-flex align-items-center">
                                <h2><?php echo get_phrase('Tournament Details');?></h2>
                                 <div class="widget-options">

                                </div>
                            </div>
                            <!-- End Widget Header -->
                            <!-- Begin Widget Body -->
                            <div class="widget-body p-0">
                                <div id="list-group" class="widget-scroll" style="max-height:490px;">
                                 <ul class="reviews list-group w-100">
                                    <?php
                                    if (!empty($data2)) {
                                        foreach ($data2 as $row2) {
                                            ?>
                                            <li class="list-group-item">
                                                <a target="_blank"
                                                   href="<?php echo base_url('tournament_profile'); ?>/<?php echo $row2->tour_id; ?>">
                                                    <div class="media">
                                                        <div class="media-left align-self-center pr-4">

                                                            <?php if (!empty($row2->tour_trophy)) { ?>

                                                                <img src="<?php echo base_url(); ?>/assets/upload/tournament/<?php echo $row2->tour_trophy; ?>"
                                                                     class="user-img rounded-circle" width="50"
                                                                     height="50">
                                                            <?php } else {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>/assets/upload/cup.png"
                                                                     class="user-img rounded-circle" width="50"
                                                                     height="50">


                                                                <?php
                                                            }
                                                            ?>


                                                        </div>
                                                        <div class="media-body align-self-center">
                                                            <div class="username">
                                                                <h4><?php echo $row2->tour_name; ?></h4>
                                                            </div>
                                                            <div class="status"><span
                                                                        class="open mr-2"><?php echo get_phrase('Team Limit');?> : </span> <?php echo $row2->tour_teamlimit; ?>
                                                            </div>
                                                            <div class="status"><span class="open mr-2"><?php echo get_phrase('Price');?> : </span>AED <?php echo $row2->tour_winner_price; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>


                                        <?php }

                                    } ?>
                                    <!-- End 01 -->
                                    <!-- 02 -->

                                    <!-- End 02 -->
                                    <!-- 03 -->

                                    <!-- End 03 -->
                                </ul>
                            </div>
                            <!-- End Widget Body -->
                        </div>
                        <!-- End Widget 10 -->
                    </div>
					</div>

                    <div class="col-xl-4">
                        <!-- Begin Widget 06 -->
                        <div class="widget widget-06 has-shadow">
                            <!-- Begin Widget Header -->
                            <div class="widget-header bordered d-flex align-items-center">
                                <h2><?php echo get_phrase('Ground Reviews & Ratings');?></h2>
                                <div class="widget-options">

                                </div>
                            </div>
                            <!-- End Widget Header -->
                            <!-- Begin Widget Body -->
                            <div class="widget-body p-0">
                                <div id="list-group" class="widget-scroll" style="max-height:490px;">
                                    <ul class="reviews list-group w-100">
                                        <!-- 01 -->

                                        <?php
                                        if (!empty($data3)) {
                                            foreach ($data3 as $row3) {


                                                ?>
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-left align-self-start">

                                                            <?php if (!empty($row3->player_image)) { ?>

                                                                <img src="<?php echo base_url(); ?>/assets/upload/players/<?php echo $row3->player_image; ?>"
                                                                     class="user-img rounded-circle" width="40"
                                                                     height="40">


                                                            <?php } else {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>/assets/upload/man.png"
                                                                     class="user-img rounded-circle" width="40"
                                                                     height="40">


                                                                <?php
                                                            }
                                                            ?>
                                                        </div>
                                                        <div class="media-body align-self-center">
                                                            <div class="username">
                                                                <h4><?php echo $row3->player_fname; ?></h4>
                                                            </div>
                                                            <div class="msg">
                                                                <div class="stars">


                                                                    <?php
                                                                    $rating_count = "$row3->rating";

                                                                    for ($i = 1; $i <= 5; $i++) {
                                                                        if ($i <= $rating_count) {
                                                                            echo '<i class="la la-star"></i>';
                                                                        } else {
                                                                            echo '<i class="la la-star-o"></i>';
                                                                        }
                                                                    }
                                                                    ?>


                                                                </div>
                                                                <p>
                                                                    <?php echo $row3->review; ?>
                                                                </p>
                                                            </div>
                                                            <div class="meta">
                                                                <span class="mr-3"><?php echo date('d-m-Y h:i A',strtotime($row3->created_at)); ?> </span>

                                                            </div>
                                                        </div>
                                                        <div class="media-right pr-3 align-self-center">
                                                            <div class="like text-center">
                                                                <i class="ion-heart"></i>
                                                                <span><?php echo $row3->rating; ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- End 01 -->
                                                <!-- 02 -->
                                            <?php }
                                        } ?>
                                        <!-- End 02 -->
                                        <!-- 03 -->

                                        <!-- End 03 -->
                                        <!-- 04 -->

                                        <!-- End 04 -->
                                        <!-- 05 -->

                                        <!-- End 05 -->
                                    </ul>
                                </div>
                                <!-- End List -->
                            </div>
                            <!-- End Widget Body -->
                        </div>
                        <!-- End Widget 06 -->
                    </div>
					
					<div class="col-xl-4">
                        <!-- Begin Widget 06 -->
                        <div class="widget widget-06 has-shadow">
                            <!-- Begin Widget Header -->
                            <div class="widget-header bordered d-flex align-items-center">
                                <h2><?php echo get_phrase('Academy Reviews & Ratings'); ?></h2>
                                <div class="widget-options">

                                </div>
                            </div>
                            <!-- End Widget Header -->
                            <!-- Begin Widget Body -->
                            <div class="widget-body p-0">
                                <div id="list-group" class="widget-scroll" style="max-height:490px;">
                                    <ul class="reviews list-group w-100">
                                        <!-- 01 -->

                                        <?php
                                        if (!empty($academy_review_a_owner)) {
                                            foreach ($academy_review_a_owner as $aor) {


                                                ?>
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-left align-self-start">

                                                            <?php if (!empty($aor->player_image)) { ?>

                                                                <img src="<?php echo base_url(); ?>/assets/upload/players/<?php echo $aor->player_image; ?>"
                                                                     class="user-img rounded-circle" width="40"
                                                                     height="40">


                                                            <?php } else {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>/assets/upload/man.png"
                                                                     class="user-img rounded-circle" width="40"
                                                                     height="40">


                                                                <?php
                                                            }
                                                            ?>
                                                        </div>
                                                        <div class="media-body align-self-center">
                                                            <div class="username">
                                                                <h4><?php echo $aor->player_fname; ?></h4>
                                                            </div>
                                                            <div class="msg">
                                                                <div class="stars">


                                                                    <?php
                                                                    $rating_count = "$aor->rating";

                                                                    for ($i = 1; $i <= 5; $i++) {
                                                                        if ($i <= $rating_count) {
                                                                            echo '<i class="la la-star"></i>';
                                                                        } else {
                                                                            echo '<i class="la la-star-o"></i>';
                                                                        }
                                                                    }
                                                                    ?>


                                                                </div>
                                                                <p>
                                                                    <?php echo $aor->review; ?>
                                                                </p>
                                                            </div>
                                                            <div class="meta">
                                                                <span class="mr-3"><?php echo date('d-m-Y h:i A',strtotime($aor->created_at)); ?> </span>

                                                            </div>
                                                        </div>
                                                        <div class="media-right pr-3 align-self-center">
                                                            <div class="like text-center">
                                                                <i class="ion-heart"></i>
                                                                <span><?php echo $aor->rating; ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- End 01 -->
                                                <!-- 02 -->
                                            <?php }
                                        } ?>
                                        <!-- End 02 -->
                                        <!-- 03 -->

                                        <!-- End 03 -->
                                        <!-- 04 -->

                                        <!-- End 04 -->
                                        <!-- 05 -->

                                        <!-- End 05 -->
                                    </ul>
                                </div>
                                <!-- End List -->
                            </div>
                            <!-- End Widget Body -->
                        </div>
                        <!-- End Widget 06 -->
                    </div>
					
                </div>
                <!-- End Row -->
            </div>

        <?php } ?>

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

</body>
<script src="<?php echo base_url(); ?>assets/vendors/js/base/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/js/base/core.min.js"></script>
<!-- End Vendor Js -->
<!-- Begin Page Vendor Js -->
<script src="<?php echo base_url(); ?>assets/vendors/js/nicescroll/nicescroll.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/js/chart/chart.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/js/progress/circle-progress.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/js/calendar/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/js/calendar/fullcalendar.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/js/owl-carousel/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/js/app/app.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
<script>
    $(document).ready(function() {
        var idval =  <?php echo json_encode($calendor) ?>;;
        var calendar = $('#calendar').fullCalendar({
            editable:false,
			timeFormat: "H:mm A",
            header:{
                left:'prev,next today',
                center:'title',
                right:'month,agendaWeek,agendaDay'
            },
            events: idval,
            selectable:true,
            selectHelper:true,
            eventRender: function(event, element) {
                element.attr('title', event.status);
            },

        });
    });
</script>
<!-- End Page Vendor Js -->
<!-- Begin Page Snippets -->
</html>