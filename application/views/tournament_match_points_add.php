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
                            <h2 class="page-header-title"><?php echo get_phrase('Add Tournament Match Points');?></h2>
                            <div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard'); ?>"><i class="ti ti-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo site_url('booking_tournament_list'); ?>"><?php echo get_phrase('Tournament points');?></a></li>
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
                                <h4><?php echo get_phrase('Tournament Points Form');?></h4>
                            </div>
                            <div class="widget-body">
                                <?php
                                $attributes = array('class' => 'needs-validation',"id" => "tournamentpoints","name" => "tournamentpointsform" ,"novalidate");echo form_open_multipart("tourn_match_points_save", $attributes);
                                $id=  $this->uri->segment(2);
                                ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Tournament');?> *</label>
                                            <div class="col-lg-8">
                                                <select name="tour_id" class="form-control" id="tour_id">
                                                    <option value=""><?php echo get_phrase('Select Tournament Name');?></option>
                                                    <?php
                                                    if (!empty($data1)) {
                                                        foreach ($data1 as $row) {
                                                            ?>
                                                            <option value="<?php echo $row->tour_id; ?>"><?php echo $row->tour_name; ?></option>
                                                        <?php }
                                                    } ?>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('S.NO');?> *</label>
                                            <div class="col-lg-8">
                                                <input type="text" name="sno"  class="form-control" placeholder=<?php echo get_phrase("SNO");?> required>
                                            </div>
                                        </div>
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Played Games');?> *</label>
                                            <div class="col-lg-8">
                                                <input type="text" name="played_games"  class="form-control" placeholder=<?php echo get_phrase("PlayedGames");?> required>
                                            </div>
                                        </div>

                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Position');?> </label>

                                            <div class="col-lg-8">
                                                <input type="text" name="position"  class="form-control" placeholder=<?php echo get_phrase("Position");?>>
                                            </div>
                                        </div>

                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Wins');?> </label>

                                            <div class="col-lg-8">
                                                <input type="text" name="wins"  class="form-control" placeholder=<?php echo get_phrase("Wins");?>>
                                            </div>
                                        </div>
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Goals Scored');?> * </label>

                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <input type="text" name="goals_scored"  class="form-control" placeholder=<?php echo get_phrase("Scored");?> required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Goals Difference');?> * </label>
                                            <div class="col-lg-8">
                                                <div class="input-group">

                                                    <input type="text" name="goals_differences" class="form-control" placeholder=<?php echo get_phrase("Difference");?>>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Team Name');?> *</label>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <select name="team_id" class="form-control" id="team_id">
                                                        <option value=""><?php echo get_phrase('Select Team Name');?></option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Group');?> *</label>

                                            <div class="col-lg-8">
                                                <input type="text" name="team_group" class="form-control"  placeholder=<?php echo get_phrase("Enter Group");?> required>
                                            </div>
                                        </div>
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Total Points');?> *</label>

                                            <div class="col-lg-8">
                                                <input type="text" name="points" class="form-control"  placeholder=<?php echo get_phrase("Points");?> required>
                                            </div>
                                        </div>
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Loss');?> </label>

                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <input type="text" name="loss" class="form-control" placeholder=<?php echo get_phrase("Loss");?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Tie');?> </label>

                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <input type="text" name="tie" class="form-control" placeholder=<?php echo get_phrase("Tie");?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Against');?> * </label>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <input type="text" name="goals_scored_against" class="form-control" placeholder=<?php echo get_phrase("Goals Scored Against Team");?> required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="em-separator separator-dashed"></div>

                                <div class="text-right">
                                    <button class="btn btn-gradient-01" type="submit"><?php echo get_phrase('Submit Form');?></button>
                                    <a style="margin-top: 10px;" href="<?php echo base_url('booking_tournament_list') ?>" class="btn btn-warning mr-1 mb-2" role="button"><?php echo get_phrase('Back');?></a>
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
                 sno: "required",
                tour_name: "required",
                team_name: "required",
                played_games: "required",
                goals_scored: "required",
                goals_differences: "required",
                team_group: "required",
                points: "required",
                goals_scored_against: "required",
            },
            messages: {
                tour_name: " Please Enter a Serial Number",
                tour_name: " Please Enter a Tournament Name",
                team_name: " Please Enter a Team Name",
                played_games: "Please Enter a Played Games",
                team_group:"Please Enter a Group",
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
    <script>
        $('#tour_id').change(function(){
            var tour_id = $(this).val();
            $.ajax({
                'type': 'POST',
                'url' : '<?php echo base_url("get_team_names") ?>',
                data:{'tour_id':tour_id},
                success:function(data) {
                    console.log(data);
                    $('#team_id').empty();
                    $('#team_id').append($('<option>').text("Select"));
                    $.each(JSON.parse(data), function(i, obj){
                        $('#team_id').append($('<option>').text(obj.team_name).attr('value', obj.t_id));
                    });
                }

            });
        });
    </script>
    <style>
        .error {
            color: red;
        }
    </style>
    </html>
