<div class="default-sidebar">
    <!-- Begin Side Navbar -->
    <nav class="side-navbar box-scroll sidebar-scroll" tabindex="1" style="overflow: hidden; outline: none;">
        <!-- Begin Main Navigation -->
        <ul class="list-unstyled">
            <li><a style="color:#bf5252;text-transform: uppercase;" href="<?php echo site_url('dashboard'); ?>"><i
                            class="la la-columns"></i><span><?php echo get_phrase('Dashboard'); ?></span></a>
            </li>
        </ul>

        <?php if ($this->session->userdata['user_role'] == 1) { ?>
            <ul class="list-unstyled">
                <li><a href="#booking_list" aria-expanded="false" data-toggle="collapse" class="collapsed">
                        <i class="la la-th-large"></i><span><?php echo get_phrase('Bookings'); ?></span></a>
                    <ul id="booking_list" class="list-unstyled pt-0 collapse" style="">
                       
                        <li>
                            <a class="<?php if ($this->uri->segment(1) == 'booking_list') {
                                echo 'active';
                            } ?>" href="<?php echo site_url('booking_list'); ?>">
                                <?php echo get_phrase('Ground'); ?>
                            </a>
                        </li>
						<li>
                            <a class="<?php if ($this->uri->segment(1) == 'bulk_booking') {
                                echo 'active';
                            } ?>" href="<?php echo site_url('bulk_booking'); ?>">
                                <?php echo get_phrase('Ground Bulk'); ?>
                            </a>
                        </li>
						<li>
                            <a class="<?php if ($this->uri->segment(1) == 'academy_booking') {
                                echo 'active';
                            } ?>" href="<?php echo site_url('academy_booking'); ?>">
                                <?php echo get_phrase('Academy'); ?>
                            </a>
                        </li>
						<li>
                            <a class="<?php if ($this->uri->segment(1) == 'booking_tournament_list') {
                                echo 'active';
                            } ?>" href="<?php echo site_url('booking_tournament_list'); ?>">
                                <?php echo get_phrase('Tournament'); ?>
                            </a>
                        </li>
                        <li>
                            <a class="<?php if ($this->uri->segment(1) == 'booking_calendar') {
                                echo 'active';
                            } ?>" href="<?php echo site_url('booking_calendar'); ?>">
                                <?php echo get_phrase('Calendar View'); ?>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="list-unstyled">
                <li><a href="#payment_list" aria-expanded="false" data-toggle="collapse" class="collapsed">
                        <i class="la la-money money"></i><span><?php echo get_phrase('Payments'); ?></span></a>
                    <ul id="payment_list" class="list-unstyled pt-0 collapse" style="">
                        <li>
                            <a class="<?php if ($this->uri->segment(1) == 'payment_list') {
                                echo 'active';
                            } ?>" href="<?php echo site_url('payment_list'); ?>">
                                <?php echo get_phrase('Ground Payment'); ?>
                            </a>
                        </li>
                        <li>
                            <a class="<?php if ($this->uri->segment(1) == 'academy_payment') {
                                echo 'active';
                            } ?>" href="<?php echo site_url('academy_payment'); ?>">
                                <?php echo get_phrase('Academy Payment'); ?>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
			<ul class="list-unstyled">
                <li><a href="#tournament_list" aria-expanded="false" data-toggle="collapse" class="collapsed">
                        <i class="la la-server"></i><span> <?php echo get_phrase('Tournaments'); ?></span></a>
                    <ul id="tournament_list" class="list-unstyled pt-0 collapse" style="">
                        <li>
                            <a class="<?php if ($this->uri->segment(1) == 'tournament_list') {
                                echo 'active';
                            } ?>" href="<?php echo site_url('tournament_list'); ?>">
                                <?php echo get_phrase('List'); ?>
                            </a>
                        </li>
                        <li>
                            <a class="<?php if ($this->uri->segment(1) == 'award_list') {
                                echo 'active';
                            } ?>" href="<?php echo site_url('award_list'); ?>">
                                <?php echo get_phrase('Awards List'); ?>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
			<ul class="list-unstyled">
				<li><a href="#ground_list" aria-expanded="false" data-toggle="collapse" class="collapsed">
						<i class="la la-share-alt"></i><span><?php echo get_phrase('Grounds'); ?></span></a>
					<ul id="ground_list" class="list-unstyled pt-0 collapse" style="">
						<li>
							<a class="<?php if ($this->uri->segment(1) == 'ground_list') {
								echo 'active';
							} ?>" href="<?php echo site_url('ground_list'); ?>">
								 <?php echo get_phrase('List'); ?>
							</a>
						</li>
						<li>
                            <a class="<?php if ($this->uri->segment(1) == 'ground_size_duration_list') {
                                echo 'active';
                            } ?>" href="<?php echo site_url('ground_size_duration_list'); ?>">
                                 <?php echo get_phrase('Size/Price List'); ?>
                            </a>
                        </li>
						<li>
                            <a class="<?php if ($this->uri->segment(1) == 'ground_facility_list') {
                                echo 'active';
                            } ?>" href="<?php echo site_url('ground_facility_list'); ?>">
                                 <?php echo get_phrase('Facility List'); ?>
                            </a>
                        </li>
					</ul>
				</li>
			</ul>
			<ul class="list-unstyled">
				<li><a href="#academic_list" aria-expanded="false" data-toggle="collapse" class="collapsed">
						<i class="la la-share-alt"></i><span><?php echo get_phrase('Academies'); ?></span></a>
					<ul id="academic_list" class="list-unstyled pt-0 collapse" style="">
						<li>
							<a class="<?php if ($this->uri->segment(1) == 'academy_list') {
								echo 'active';
							} ?>" href="<?php echo site_url('academy_list'); ?>">
								 <?php echo get_phrase('List'); ?>
							</a>
						</li>
						<li>
							<a class="<?php if ($this->uri->segment(1) == 'coaching_classes') {
								echo 'active';
							} ?>" href="<?php echo site_url('coaching_classes'); ?>">
								 <?php echo get_phrase('Coaching Classes'); ?>
							</a>
						</li>
						<li>
							<a class="<?php if ($this->uri->segment(1) == 'academy_price') {
								echo 'active';
							} ?>" href="<?php echo site_url('academy_price_list'); ?>">
								 <?php echo get_phrase('Price List'); ?>
							</a>
						</li>
					</ul>
				</li>
			</ul>
            <ul class="list-unstyled">
                <li><a href="#ground_owner" aria-expanded="false" data-toggle="collapse" class="collapsed"><i
                                class="la la-user-plus"></i><span><?php echo get_phrase('Owners'); ?></span></a>
                    <ul id="ground_owner" class="list-unstyled pt-0 collapse" style="">
                        <li>
                            <a class="<?php if ($this->uri->segment(1) == 'user_list') {
                                echo 'active';
                            } ?>" href="<?php echo site_url('user_list'); ?>">
                                <?php echo get_phrase('Owner List'); ?>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="list-unstyled">
                <li><a href="#players_list" aria-expanded="false" data-toggle="collapse" class="collapsed">
                        <i class="la la-users"></i><span><?php echo get_phrase('Players'); ?></span></a>
                    <ul id="players_list" class="list-unstyled pt-0 collapse" style="">
                        <li>
                            <a class="<?php if ($this->uri->segment(1) == 'players_list') {
                                echo 'active';
                            } ?>" href="<?php echo site_url('players_list'); ?>">
                                <?php echo get_phrase('Player List'); ?>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="list-unstyled">
                <li><a href="#team_list" aria-expanded="false" data-toggle="collapse" class="collapsed">
                        <i class="la la-list-alt"></i><span><?php echo get_phrase('Teams'); ?></span></a>
                    <ul id="team_list" class="list-unstyled pt-0 collapse" style="">
                        <li>
                            <a class="<?php if ($this->uri->segment(1) == 'team_list') {
                                echo 'active';
                            } ?>" href="<?php echo site_url('team_list'); ?>">
                                <?php echo get_phrase('Team List'); ?>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
<!--            <ul class="list-unstyled">-->
<!--                <li><a href="#tour_schedule_list" aria-expanded="false" data-toggle="collapse" class="collapsed">-->
<!--                        <i class="la la-calendar-o"></i><span><?php echo get_phrase('Tournament Schedule'); ?></span></a>-->
<!--                    <ul id="tour_schedule_list" class="list-unstyled pt-0 collapse" style="">-->
<!--                        <li>-->
<!--                            <a class="--><?php //if ($this->uri->segment(1) == 'tour_schedule_add') {
//                                echo 'active';
//                            } ?><!--" href="--><?php //echo site_url('tour_schedule_add'); ?><!--">-->
<!--                                Schedule Add-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a class="--><?php //if ($this->uri->segment(1) == 'tournament_schedule_list') {
//                                echo 'active';
//                            } ?><!--" href="--><?php //echo site_url('tournament_schedule_list'); ?><!--">-->
<!--                                Schedule List-->
<!--                            </a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--            </ul>-->
<!--             <ul class="list-unstyled">-->
<!--                <li><a href="#tour_points_list" aria-expanded="false" data-toggle="collapse" class="collapsed">-->
<!--                        <i class="la la-flag-o"></i><span>Tournament Points</span></a>-->
<!--                    <ul id="tour_points_list" class="list-unstyled pt-0 collapse" style="">-->
<!--                        <li>-->
<!--                            <a class="--><?php //if ($this->uri->segment(1) == 'tourn_match_points_add') {
//                                echo 'active';
//                            } ?><!--" href="--><?php //echo site_url('tourn_match_points_add'); ?><!--">-->
<!--                                Points Add-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a class="--><?php //if ($this->uri->segment(1) == 'tourn_match_points_list') {
//                                echo 'active';
//                            } ?><!--" href="--><?php //echo site_url('tourn_match_points_list'); ?><!--">-->
<!--                                Points List-->
<!--                            </a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--            </ul>-->
            
            <ul class="list-unstyled">
                <li><a href="#general_settings" aria-expanded="false" data-toggle="collapse" class="collapsed">
                        <i class="la la-language "></i><span><?php echo get_phrase('Settings'); ?></span></a>
                    <ul id="general_settings" class="list-unstyled pt-0 collapse" style="">
                        <li>
                            <a class="<?php if ($this->uri->segment(1) == 'general_settings') {
                                echo 'active';
                            } ?>" href="<?php echo site_url('general_settings'); ?>">
                                <?php echo get_phrase('General'); ?>
                            </a>
                        </li>
						<li>
                            <a class="<?php if ($this->uri->segment(1) == 'version') {
                                echo 'active';
                            } ?>" href="<?php echo site_url('version'); ?>">
                               <?php echo get_phrase('Version'); ?>
                            </a>
                        </li>
                        <li>
                            <a class="<?php if ($this->uri->segment(1) == 'language_settings') {
                                echo 'active';
                            } ?>" href="<?php echo site_url('language_settings'); ?>">
                               <?php echo get_phrase('Language'); ?>
                            </a>
                        </li>
                       <!-- <li>
                            <a class="<?php // if ($this->uri->segment(1) == 'push_notification_settings') {
                               // echo 'active';
                          //  } ?>" href="<?php // echo site_url('push_notification_settings'); ?>">
                               <?php // echo get_phrase('Push Notification Settings'); ?>
                            </a>
                        </li> -->
						
                       <li>
                            <a class="<?php if ($this->uri->segment(1) == 'sms_settings') {
                                echo 'active';
                            } ?>" href="<?php echo site_url('sms_settings'); ?>">
                               <?php echo get_phrase('SMS Gateway'); ?>
                            </a>
                        </li>
                        
                        <li>
                            <a class="<?php if ($this->uri->segment(1) == 'payment_gateway_settings') {
                                echo 'active';
                            } ?>" href="<?php echo site_url('payment_gateway_settings'); ?>">
                               <?php echo get_phrase('Payment Gateway'); ?>
                            </a>
                        </li>
                        
                     <!--   <li>
                            <a class="<?php if ($this->uri->segment(1) == 'smtp_settings') {
                                echo 'active';
                            } ?>" href="<?php echo site_url('smtp_settings'); ?>">
                               <?php echo get_phrase('SMTP'); ?>
                            </a>
                        </li> -->
						<li>
                            <a class="<?php if ($this->uri->segment(1) == 'logo_settings') {
                                echo 'active';
                            } ?>" href="<?php echo site_url('logo_settings'); ?>">
                               <?php echo get_phrase('Logo'); ?>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="list-unstyled">
                <li><a href="#report_list" aria-expanded="false" data-toggle="collapse" class="collapsed">
                        <i class="la la-list-alt"></i><span><?php echo get_phrase('Reports'); ?></span></a>
                    <ul id="report_list" class="list-unstyled pt-0 collapse" style="">
                        <li>
                            <a class="<?php if ($this->uri->segment(1) == 'report_list') {
                                echo 'active';
                            } ?>" href="<?php echo site_url('report_list'); ?>">
                                <?php echo get_phrase('Report List'); ?>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="list-unstyled">
                <li><a href="#notification_list" aria-expanded="false" data-toggle="collapse" class="collapsed">
                        <i class="la la-hand-o-up"></i><span><?php  echo get_phrase('Notification'); ?></span></a>
                    <ul id="notification_list" class="list-unstyled pt-0 collapse" style="">
                        <li>
                            <a class="<?php  if ($this->uri->segment(1) == 'notifications') {
                                echo 'active';
                            } ?>" href="<?php  echo site_url('notifications'); ?>">
                                <?php  echo get_phrase('notification'); ?>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

        <?php } else { ?> 
			<ul class="list-unstyled">
                <li><a href="#booking_list" aria-expanded="false" data-toggle="collapse" class="collapsed">
                        <i class="la la-th-large"></i><span><?php echo get_phrase('Bookings'); ?></span></a>
                    <ul id="booking_list" class="list-unstyled pt-0 collapse" style="">
                       
                        <li>
                            <a class="<?php if ($this->uri->segment(1) == 'booking_list') {
                                echo 'active';
                            } ?>" href="<?php echo site_url('booking_list'); ?>">
                                <?php echo get_phrase('Ground'); ?>
                            </a>
                        </li>
                        
                        <li>
                            <a class="<?php if ($this->uri->segment(1) == 'bulk_booking') {
                                echo 'active';
                            } ?>" href="<?php echo site_url('bulk_booking'); ?>">
                                <?php echo get_phrase('Ground Bulk'); ?>
                            </a>
                        </li>
                        <li>
                            <a class="<?php if ($this->uri->segment(1) == 'academy_booking') {
                                echo 'active';
                            } ?>" href="<?php echo site_url('academy_booking'); ?>">
                                <?php echo get_phrase('Academy'); ?>
                            </a>
                        </li>
						<li>
                            <a class="<?php if ($this->uri->segment(1) == 'booking_tournament_list') {
                                echo 'active';
                            } ?>" href="<?php echo site_url('booking_tournament_list'); ?>">
                                <?php echo get_phrase('Tournament'); ?>
                            </a>
                        </li>
						<li>
                            <a class="<?php if ($this->uri->segment(1) == 'booking_calendar') {
                                echo 'active';
                            } ?>" href="<?php echo site_url('booking_calendar'); ?>">
                                <?php echo get_phrase('Calendar View'); ?>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
			<ul class="list-unstyled">
                <li><a href="#payment_list" aria-expanded="false" data-toggle="collapse" class="collapsed">
                        <i class="la la-money money"></i><span><?php echo get_phrase('Payments'); ?></span></a>
                    <ul id="payment_list" class="list-unstyled pt-0 collapse" style="">
                        <li>
                            <a class="<?php if ($this->uri->segment(1) == 'payment_list') {
                                echo 'active';
                            } ?>" href="<?php echo site_url('payment_list'); ?>">
                                <?php echo get_phrase('Ground Payment'); ?>
                            </a>
                        </li>
                        <li>
                            <a class="<?php if ($this->uri->segment(1) == 'academy_payment') {
                                echo 'active';
                            } ?>" href="<?php echo site_url('academy_payment'); ?>">
                                <?php echo get_phrase('Academy Payment'); ?>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
			<ul class="list-unstyled">
                <li><a href="#tournament_list" aria-expanded="false" data-toggle="collapse" class="collapsed">
                        <i class="la la-server"></i><span> <?php echo get_phrase('Tournament'); ?></span></a>
                    <ul id="tournament_list" class="list-unstyled pt-0 collapse" style="">
                        <li>
                            <a class="<?php if ($this->uri->segment(1) == 'tournament_list') {
                                echo 'active';
                            } ?>" href="<?php echo site_url('tournament_list'); ?>">
                                <?php echo get_phrase('List'); ?>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
			<ul class="list-unstyled">
                <li><a href="#ground_list" aria-expanded="false" data-toggle="collapse" class="collapsed">
                        <i class="la la-share-alt"></i><span><?php echo get_phrase('Grounds'); ?></span></a>
                    <ul id="ground_list" class="list-unstyled pt-0 collapse" style="">
                        <li>
                            <a class="<?php if ($this->uri->segment(1) == 'ground_list') {
                                echo 'active';
                            } ?>" href="<?php echo site_url('ground_list'); ?>">
                                <?php echo get_phrase('List'); ?>
                            </a>
                        </li>
						<li>
                            <a class="<?php if ($this->uri->segment(1) == 'ground_size_duration_list') {
                                echo 'active';
                            } ?>" href="<?php echo site_url('ground_size_duration_list'); ?>">
                                 <?php echo get_phrase('Size/Price List'); ?>
                            </a>
                        </li>
						<li>
                            <a class="<?php if ($this->uri->segment(1) == 'ground_facility_list') {
                                echo 'active';
                            } ?>" href="<?php echo site_url('ground_facility_list'); ?>">
                                <?php echo get_phrase('Facility List'); ?>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="list-unstyled">
				<li><a href="#academic_list" aria-expanded="false" data-toggle="collapse" class="collapsed">
						<i class="la la-share-alt"></i><span><?php echo get_phrase('Academies'); ?></span></a>
					<ul id="academic_list" class="list-unstyled pt-0 collapse" style="">
						<li>
							<a class="<?php if ($this->uri->segment(1) == 'academy_list') {
								echo 'active';
							} ?>" href="<?php echo site_url('academy_list'); ?>">
								 <?php echo get_phrase('List'); ?>
							</a>
						</li>
						<li>
							<a class="<?php if ($this->uri->segment(1) == 'coaching_classes') {
								echo 'active';
							} ?>" href="<?php echo site_url('coaching_classes'); ?>">
								 <?php echo get_phrase('Coaching Classes'); ?>
							</a>
						</li>
						<li>
							<a class="<?php if ($this->uri->segment(1) == 'academy_price') {
								echo 'active';
							} ?>" href="<?php echo site_url('academy_price_list'); ?>">
								 <?php echo get_phrase('Price List'); ?>
							</a>
						</li>
					</ul>
				</li>
			</ul>
            <ul class="list-unstyled">
                <li><a href="#general_settings" aria-expanded="false" data-toggle="collapse" class="collapsed">
                        <i class="la la-language "></i><span><?php echo get_phrase('Settings'); ?></span></a>
                    <ul id="general_settings" class="list-unstyled pt-0 collapse" style="">
                        <li>
                            <a class="<?php if ($this->uri->segment(1) == 'general_settings') {
                                echo 'active';
                            } ?>" href="<?php echo site_url('general_settings'); ?>">
                                <?php echo get_phrase('General Settings'); ?>
                            </a>
                        </li>
                       
                    </ul>
                </li>
            </ul>
            <ul class="list-unstyled">
                <li><a href="#report_list" aria-expanded="false" data-toggle="collapse" class="collapsed">
                        <i class="la la-list-alt"></i><span><span><?php echo get_phrase('Reports'); ?></span></a>
                    <ul id="report_list" class="list-unstyled pt-0 collapse" style="">
                        <li>
                            <a class="<?php if ($this->uri->segment(1) == 'report_list') {
                                echo 'active';
                            } ?>" href="<?php echo site_url('report_list'); ?>">
                                <?php echo get_phrase('Report List'); ?>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        <?php } ?>
    </nav>

    <div id="ascrail2000" class="nicescroll-rails nicescroll-rails-vr"
         style="width: 6px; z-index: 999; cursor: default; position: absolute; top: 0px; left: 234px; height: 276px; display: block;">
        <div class="nicescroll-cursors"
             style="position: relative; top: 0px; float: right; width: 6px; height: 80px; background-color: transparent; border: transparent; background-clip: padding-box; border-radius: 5px;"></div>
    </div>
    <div id="ascrail2000-hr" class="nicescroll-rails nicescroll-rails-hr"
         style="height: 6px; z-index: 999; top: 270px; left: 0px; position: absolute; display: none; cursor: default; width: 234px;">
        <div class="nicescroll-cursors"
             style="position: absolute; top: 0px; height: 6px; width: 80px; background-color: transparent; border: transparent; background-clip: padding-box; border-radius: 5px; left: 0px;"></div>
    </div>
</div>