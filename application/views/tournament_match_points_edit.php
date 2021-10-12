<?php
foreach ($data as $store) :

    ?>
    <!-- End Header -->
    <!-- Begin Page Content -->
    <div class="page-content d-flex align-items-stretch">
        <?php include('inc/admin_sidebar.php') ?>
        <!-- End Left Sidebar -->
        <div class="content-inner">
            <div class="container-fluid">
                <!-- Begin Page Header-->
                <div class="row">
                    <div class="page-header">
                        <div class="d-flex align-items-center">
                            <h2 class="page-header-title">Edit Tournament Match Points </h2>
                            <div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard'); ?>"><i class="ti ti-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo site_url('tourn_match_points_list'); ?>">Tournament points</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Page Header -->
                <div class="row flex-row">
                    <div class="col-xl-12">
                        <!-- Form -->
                        <div class="widget has-shadow">
                            <div class="widget-header bordered no-actions d-flex align-items-center">
                                <h4>Tournament Points Form</h4>
                            </div>
                            <div class="widget-body">
                                <?php
                                $attributes = array('class' => 'needs-validation',"id" => "tournamentpoints","name" => "tournamentpointsform" ,"novalidate");echo form_open_multipart("tourn_match_points_update", $attributes);
                                $id=  $this->uri->segment(2);
                                ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Tournament *</label>
                                            <div class="col-lg-8">
                                                <input type="text" name="tour_name" class="form-control" value="<?php echo $store->tour_name ?>" placeholder="Enter Tournament name" disabled>
                                                <input type="hidden" name="id" class="form-control" value="<?php echo $store->id ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Played Games *</label>
                                            <div class="col-lg-8">
                                                <input type="text" name="played_games" value="<?php echo $store->played_games ?>" class="form-control" placeholder="Played Games" required>
                                            </div>
                                        </div>


                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Wins </label>

                                            <div class="col-lg-8">
                                                <input type="text" name="wins" value="<?php echo $store->wins ?>" class="form-control" placeholder="Team Wins" >
                                            </div>
                                        </div>
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Goals Scored * </label>

                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <input type="text" name="goals_scored" value="<?php echo $store->goals_scored ?>" class="form-control" placeholder="Team Goals Scored" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Goals Difference * </label>
                                            <div class="col-lg-8">
                                                <div class="input-group">

                                                    <input type="text" name="goals_differences" value="<?php echo $store->goals_differences ?>" class="form-control" placeholder="Team Goals Difference">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Team Name *</label>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <input type="text" name="team_name" class="form-control" value="<?php echo $store->team_name ?>" placeholder="Enter Team name" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Total Points *</label>

                                            <div class="col-lg-8">
                                                <input type="text" name="points" value="<?php echo $store->points ?>" class="form-control"  placeholder="Enter Team Points" required>
                                            </div>
                                        </div>
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Loss </label>

                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <input type="text" name="loss" value="<?php echo $store->loss ?>" class="form-control" placeholder="Team Loss">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Tie </label>

                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <input type="text" name="tie" class="form-control" value="<?php echo $store->tie ?>" placeholder="Team Tie">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Goals Against * </label>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <input type="text" name="goals_scored_against" value="<?php echo $store->goals_scored_against ?>" class="form-control" placeholder="Goals Scored Against Team" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="em-separator separator-dashed"></div>

                                <div class="text-right">
                                    <button class="btn btn-gradient-01" type="submit">Submit Form</button>
                                    <a style="margin-top: 10px;" href="<?php echo base_url('tourn_match_points_list') ?>" class="btn btn-warning mr-1 mb-2" role="button">Back</a>
                                </div>
                                </form>
                            </div>
                        </div>
                        <!-- End Form -->
                    </div>
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
    </div>
    <!-- End Page Content -->
    </div>
    <!-- Begin Vendor Js -->
    <script src="<?php echo base_url(); ?>assets/vendors/js/base/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/js/base/core.min.js"></script>
    <!-- End Vendor Js -->
    <!-- Begin Page Vendor Js -->
    <script src="<?php echo base_url(); ?>assets/vendors/js/nicescroll/nicescroll.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/js/app/app.min.js"></script>
    <!-- End Page Vendor Js -->
    <!-- Begin Page Snippets -->
    <script src="<?php echo base_url(); ?>assets/js/components/validation/validation.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.validate.js"></script>
    <!-- End Page Snippets -->
    </body>
    <script type="text/javascript">
        $('#tournamentpoints').validate({
            rules: {
                tour_name: "required",
                team_name: "required",
                played_games: "required",
                goals_scored: "required",
                goals_differences: "required",
                points: "required",
                goals_scored_against: "required",
            },
            messages: {
                tour_name: " Please Enter a Tournament Name",
                team_name: " Please Enter a Team Name",
                played_games: "Please Enter a Played Games",
                goals_scored: "Please Enter a Goals Scored",
                goals_differences: "Please Enter a Goals Differences",
                points: "Please Enter a Points",
                goals_scored_against: "Please Enter a Goals Scored Against",
            },
            errorPlacement: function (error, element) {
                if (element.parent('.input-group').length || element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                    error.insertAfter(element.parent());
                } else {
                    error.insertAfter(element);
                }
            }
        });
    </script>
    <style>
        .error {
            color: red;
        }
    </style>
    </html>


<?php endforeach; ?>