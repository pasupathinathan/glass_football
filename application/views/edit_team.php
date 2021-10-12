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
                            <h2 class="page-header-title"><?php echo get_phrase('Edit Team');?></h2>
                            <div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard'); ?>"><i class="ti ti-home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="<?php echo site_url('team_list'); ?>"><?php echo get_phrase('Team');?></a></li>
                                   
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
                                <h4><?php echo get_phrase('Team Form');?></h4>
                            </div>
                            <div class="widget-body">
                                <?php
                                $attributes = array('class' => 'needs-validation',"id"=>"teamadd", "name" => "teamform", "novalidate");
                                echo form_open_multipart("team_update", $attributes);
                                $team_id = $this->uri->segment(2);
                                ?>
                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Team Name');?> *</label>
                                            <div class="col-lg-8">
                                                <input type="text" name="team_name"
                                                       value='<?php echo $store->team_name; ?>' class="form-control"
                                                       placeholder=<?php echo get_phrase("Enter your Team name");?> required>

                                                <input type="hidden" class="form-control" name='team_id'
                                                       value="<?php echo $team_id; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Team Captain ');?>* </label>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <select name="captain_id" class="form-control">
                                                        <option value="">Select Team Captain</option>
                                                        <?php
                                                        if (!empty($data3)) {
                                                            foreach ($data3 as $row) {
                                                                ?>
                                                                <option value="<?php echo $row->player_id; ?>" <?php if($store->captain_id == $row->player_id)  { echo "selected";} ?> ><?php echo $row->player_fname; ?></option>
                                                            <?php }
                                                        } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Email Address');?> *</label>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <input type="email" value='<?php echo $store->team_email; ?>'
                                                           name="team_email" class="form-control"
                                                           placeholder=<?php echo get_phrase("Enter Team email");?> required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('City');?>
                                                *</label>
                                            <div class="col-lg-8">
                                                <input type="text" value='<?php echo $store->team_city; ?>'
                                                       name="team_city" class="form-control" placeholder=<?php echo get_phrase("City");?>
                                                       required>
                                            </div>
                                        </div>
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Phone Number');?> *</label>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                            <span class="input-group-addon addon-primary">
                                                                <i class="la la-phone"></i>
                                                            </span>
                                                    <input type="text" name="team_phone"
                                                           value='<?php echo $store->team_phone; ?>'
                                                           class="form-control" placeholder=<?php echo get_phrase("Phone number");?> required>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Date');?>
                                                *</label>
                                            <div class="col-lg-8">
                                                <input type="date" name="team_date"
                                                       value='<?php echo $store->team_date; ?>' class="form-control"
                                                       placeholder="MM/DD/YYYY" required>
                                            </div>
                                        </div>
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Team')?>
                                                Size *</label>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <input type="number" name="team_size"
                                                           value='<?php echo $store->team_size; ?>' class="form-control"
                                                           placeholder=<?php echo get_phrase("Team Size");?> required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Team Slogon');?> </label>
                                            <div class="col-lg-8">
                                                <div class="input-group">

                                                    <input type="text" name="team_slogon"
                                                           value='<?php echo $store->team_slogon; ?>'
                                                           class="form-control" placeholder=<?php echo get_phrase("Enter The Team Slogon");?>>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Team Logo');?> </label>
                                            <div class="col-lg-8">
                                                <input type="file" value='<?php echo $store->team_logo; ?>' name="team_logo" class="form-control">
                                                
                                                 <?php if(!empty($store->team_logo)){ ?>
                                                
                                                <img src="<?php echo base_url(); ?>/assets/upload/teams/<?php echo $store->team_logo; ?>" class="img-circle" width="80" height="80">
                                                
                                                
                                                 <?php } else { ?>
                                                      
                                                       <img src="<?php echo base_url(); ?>/assets/upload/logos.png"   class="img-circle" width="80" height="80" >
                                                       <?php } ?>
                                                
                                                
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="em-separator separator-dashed"></div>

                                <div class="text-right">
                                    <button class="btn btn-gradient-01" type="submit"><?php echo get_phrase('Submit Form');?></button>
                                    <a style="margin-top: 10px;" href="<?php echo base_url('team_list') ?>" class="btn btn-warning mr-1 mb-2" role="button"><?php echo get_phrase('Back');?></a>
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
        </div>
    </div>
    <!-- End Page Content -->
    <!-- Begin Vendor Js -->
    <script src="<?php echo base_url(); ?>assets/vendors/js/base/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/js/base/core.min.js"></script>
    <!-- End Vendor Js -->
    <!-- Begin Page Vendor Js -->
    <script src="<?php echo base_url(); ?>assets/vendors/js/nicescroll/nicescroll.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/js/app/app.min.js"></script>
    <!-- End Page Vendor Js -->
    <script src="<?php echo base_url() ?>assets/js/jquery.validate.js"></script>
    <!-- End Page Snippets -->
    </body>
    <script type="text/javascript">
        $('#teamadd').validate({
            rules: {
                team_name: "required",
                team_email: "required",
                team_city: "required",
                team_phone: "required",
                team_date: "required",
                team_size: "required",
                captain_id: "required"
            },
            messages: {
                team_name: " Please Enter a Team Name",
                team_email: " Please Enter a Team Email",
                team_city: "Please Enter a  Team City",
                team_phone: "Please Enter a Phone Number",
                team_date: "Please Enter a Date",
                team_size: "Please Enter a Team Size",
                captain_id: "Please Enter a Team Captain"
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