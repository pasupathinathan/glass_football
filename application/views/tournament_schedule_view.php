<?php
foreach ($data as $store) :

    ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/timepicki.css">

    <link rel="stylesheet" type="text/css" media="screen"
          href="">
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
                            <h2 class="page-header-title">View Tournament Schedule</h2>
                            <div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard'); ?>"><i class="ti ti-home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="<?php echo site_url('tournament_list'); ?>">Tournament</a></li>
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
                                <h4>Tournament Schedule Form</h4>
                            </div>
                            <div class="widget-body">



                                <?php

                                $attributes = array("class" => "", "id" => "tourscheduleadd", "name" => "tourscheduleform");
                                echo form_open_multipart("update_tournament_schedule", $attributes);

                                ?>
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Tournament
                                                </label>
                                            <div class="col-lg-8">
                                                <select name="tour_id" class="form-control" id="tour_id" disabled>
                                                    <option value="">Select Tournament Name</option>
                                                    <?php
                                                    if (!empty($data1)) {
                                                        foreach ($data1 as $row) {
                                                            ?>
                                                            <option value="<?php echo $row->tour_id; ?>" <?php if($store->tour_id == $row->tour_id)  { echo "selected";} ?>><?php echo $row->tour_name; ?></option>
                                                        <?php }
                                                    } ?>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Team A
                                                </label>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <select name="team_a" class="form-control" id="team_a" disabled>
                                                        <option value="<?php echo $store->team_id1 ?>"><?php echo $store->team_name1 ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">
                                                Groups </label>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <input type="text" name="groups" class="form-control" disabled
                                                           value="<?php echo $store->groups ?>" placeholder="Enter a Groups">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">
                                                Date </label>
                                            <div class="col-lg-8">
                                                <input type="date" name="date" class="form-control" value="<?php echo $store->date ?>"
                                                       placeholder="MM/DD/YYYY" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">
                                                Ground Name </label>
                                            <div class="col-lg-8">
                                                <select name="ground_id" class="form-control" id="ground_id" disabled>
                                                    <option value="">Select Tournament Name</option>
                                                    <?php
                                                    if (!empty($data2)) {
                                                        foreach ($data2 as $row) {
                                                            ?>
                                                            <option value="<?php echo $row->ground_id; ?>" <?php if($store->ground_id == $row->ground_id)  { echo "selected";} ?>><?php echo $row->ground_name; ?></option>
                                                        <?php }
                                                    } ?>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Team B
                                                </label>
                                            <div class="col-lg-8">
                                                <select name="team_b" class="form-control" id="team_b" disabled>
                                                    <option value="<?php echo $store->team_id2 ?>"><?php echo $store->team_name2 ?></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">
                                                Match No </label>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <input type="text" value="<?php echo $store->match_number ?>" name="match_number" class="form-control" placeholder="Enter a Match Number" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Time </label>
                                            <div class="col-lg-8">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input style="width: 160%;" value="<?php echo date('h:i A',strtotime($store->time)) ?>" id="time" name="time" type="text" class="form-control timepicker timepicker-no-seconds" placeholder="Enter a Match Time" disabled/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="em-separator separator-dashed"></div>

                                <div class="text-right">
                                    <a style="margin-top: 10px;" href="<?php echo base_url('tournament_schedule_list') ?>" class="btn btn-warning mr-1 mb-2" role="button">Back</a>
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
    <script src="<?php echo base_url() ?>assets/vendors/js/base/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/timepicki.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/js/base/core.min.js"></script>
    <!-- End Vendor Js -->
    <!-- Begin Page Vendor Js -->
    <script src="<?php echo base_url(); ?>assets/vendors/js/nicescroll/nicescroll.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/js/app/app.min.js"></script>

    <script src="<?php echo base_url() ?>assets/js/jquery.validate.js"></script>
    </body>


    <script type="text/javascript">
        $('#tourscheduleadd').validate({
            rules: {
                tour_id: "required",
                team_a: "required",
                groups: "required",
                time: "required",
                match_number: "required",
                team_b: "required",
                date: "required",
                ground_id: "required"
            },
            messages: {
                tour_id: " Please Enter a Tournament Name",
                team_a: " Please Enter a Team A",
                groups: "Please Enter a  Groups or Levels",
                time: "Please Enter a Time",
                match_number: "Please Enter a Match Number",
                team_b: "Please Enter a Team B",
                date: "Please Enter a Date",
                ground_id: "Please Enter a Ground Name",
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
    <script>
        $('#tour_id').change(function(){
            var tour_id = $(this).val();
            $.ajax({
                'type': 'POST',
                'url' : '<?php echo base_url("get_team_names") ?>',
                data:{'tour_id':tour_id},
                success:function(data) {
                    console.log(data);
                    $('#team_a').empty();
                    $('#team_b').empty();
                    $('#team_a').append($('<option>').text("Select"));
                    $('#team_b').append($('<option>').text("Select"));
                    $.each(JSON.parse(data), function(i, obj){
                        $('#team_a').append($('<option>').text(obj.team_name).attr('value', obj.t_id));
                        $('#team_b').append($('<option>').text(obj.team_name).attr('value', obj.t_id));
                    });
                }

            });
        });
    </script>
    <script type='text/javascript' >
        $('#time').timepicki();
    </script>

    </html>
<?php endforeach; ?>