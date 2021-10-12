<?php
foreach ($data12 as $store) :
    $user_id = $this->uri->segment(2);
    ?>
    <!-- Begin Header -->

    <!-- End Header -->
    <!-- Begin Page Content -->
    <div class="page-content d-flex align-items-stretch">
        <?php include('inc/admin_sidebar.php') ?>
        <!-- End Left Sidebar -->
        <!-- Begin Content -->
        <div class="content-inner profile">
            <div class="container-fluid">
                <!-- Begin Page Header-->
                <div class="row">
                    <div class="page-header">
                        <div class="d-flex align-items-center">
                            <h2 class="page-header-title">Profile</h2>
                            <div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard'); ?>"><i class="ti ti-home"></i></a>
                                    </li>

                                    <li class="breadcrumb-item active"><a href="<?php echo site_url('user_list'); ?>">Profile</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Page Header -->
                <div class="row flex-row">
                    <div class="col-xl-3">
                        <!-- Begin Widget -->
                        <div class="widget has-shadow">
                            <div class="widget-body">
                                <div class="mt-5">

                                    <?php if(!empty($store->user_image)) { ?>


                                        <img src="<?php echo base_url(); ?>/assets/upload/users/<?php echo $store->user_image; ?>"
                                             class="avatar rounded-circle d-block mx-auto" width="125px" height="125px">

                                    <?php } else { ?>

                                        <img src="<?php echo base_url(); ?>/assets/upload/man.png"
                                             class="avatar rounded-circle d-block mx-auto" width="125px" height="125px">

                                    <?php } ?>

                                </div>
                                <h3 class="text-center mt-3 mb-1"> <?php echo $store->user_name; ?></h3>
                                <p class="text-center"><?php echo $store->user_email; ?></p>
                                <div class="em-separator separator-dashed"></div>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo site_url('forgot_password'); ?>"><i
                                                    class="la la-gears la-2x align-middle pr-2"></i>Change Password</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Widget -->
                    </div>
                    <div class="col-xl-9">
                        <div class="widget has-shadow">
                            <div class="widget-header bordered no-actions d-flex align-items-center">
                                    <div class="col-md-3"><h4><?php echo $store->user_name; ?> Profile</h4></div>
                                <?php if(empty($this->session->flashdata('suceessMessage'))) { ?>
                                    <?php }else { ?>
                                    <div class="col-md-8">
                                        <div class="alert alert-success alert-dissmissible fade show" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                            <strong><?php echo $this->session->flashdata('suceessMessage'); ?></strong>
                                        </div>
                                    </div>
                               <?php } ?>
                                <div class="col-md-1"></div>
                            </div>
                            <div class="widget-body">
                                <?php
                                $attributes = array('class' => 'needs-validation',"name" => "userform" ,"id" => "useradd","novalidate");echo form_open_multipart("profile_update", $attributes);
                                $user_id=  $this->uri->segment(2);
                                ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Name *</label>
                                            <div class="col-lg-8">
                                                <input type="text" value='<?php echo $store->user_name; ?>' class="form-control" name="user_name" placeholder="Enter your User Name" required>
                                                <input type="hidden" class="form-control" name='user_id' value='<?php echo $store->user_id; ?>' >
                                            </div>
                                        </div>
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Email*</label>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <input type="email" name="user_email" value='<?php echo $store->user_email; ?>' class="form-control" placeholder="Enter User Email" required>


                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Mobile *</label>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                                                        <span class="input-group-addon addon-primary">
                                                                                            <i class="la la-phone"></i>
                                                                                        </span>
                                                    <input type="text" class="form-control" value='<?php echo $store->user_phone; ?>' name="user_phone" placeholder="Phone number" required>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Address *</label>
                                            <div class="col-lg-8">
                                                <textarea type="text" class="form-control"  name="user_address" placeholder="Address" required><?php echo $store->user_address; ?></textarea>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Area *</label>
                                            <div class="col-lg-8">
                                                <input type="text" name="user_state" value='<?php echo $store->user_area; ?>' class="form-control" placeholder="Area" required>

                                            </div>
                                        </div>

                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">City *</label>
                                            <div class="col-lg-8">
                                                <input type="text" name="user_city" value='<?php echo $store->user_city; ?>' class="form-control" placeholder="City" required>

                                            </div>
                                        </div>

                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Zip *</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" value='<?php echo $store->user_zip; ?>' name="user_zip" placeholder="Zip" required>

                                            </div>
                                        </div>

                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Image *</label>
                                            <div class="col-lg-8">
                                                <input type="file" name="user_image" value=' <?php echo $store->user_image; ?>' class="form-control" >
                                                <?php if(!empty($store->user_image)) { ?>

                                                    <img src="<?php echo base_url(); ?>/assets/upload/users/<?php  echo $store->user_image; ?>" class="img-circle" width="80" height="80">
                                                <?php } else { ?>

                                                    <img src="<?php echo base_url(); ?>/assets/upload/man.png"
                                                         class="avatar rounded-circle d-block mx-auto" width="125px" height="125px">

                                                <?php } ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="em-separator separator-dashed"></div>
                                <div class="text-right">
                                    <button class="btn btn-gradient-01" type="submit">Save</button>
                                </div>
                                </form>

                            </div>
                        </div>
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
        <!-- End Content -->
    </div>
    <!-- End Page Content -->
    </div>
    <!-- Begin Vendor Js -->
    <script src="<?php echo base_url(); ?>assets/vendors/js/base/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/js/base/core.min.js"></script>
    <!-- End Vendor Js -->
    <!-- Begin Page Vendor Js -->
    <script src="<?php echo base_url(); ?>assets/vendors/js/nicescroll/nicescroll.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/js/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/js/app/app.min.js"></script>
    <!-- End Page Vendor Js -->
    <!-- Begin Page Snippets -->
    <script src="<?php echo base_url(); ?>assets/js/app/contact/contact.min.js"></script>
    <!-- End Page Snippets -->
    <!-- Begin Page Snippets -->
    <script src="<?php echo base_url();?>assets/js/components/validation/validation.min.js"></script>
    <!-- End Page Snippets -->



    <script src="<?php echo base_url(); ?>assets/js/jquery.validate.js"></script>





    <script type="text/javascript">

        //User Company Page Validation End ************************************


        $('#useradd').validate({
            rules: {
                user_name: "required",
                user_email: "required",
                user_address: "required",
                user_phone: {
                    required: true,
                    number: true,
                    rangelength: [10, 10]
                },
                user_country: "required",
                user_state: "required",
                user_city: "required",
                // user_image: "required",
                user_zip: "required",
            },
            messages: {
                user_name: " Please enter a valid User Name",
                user_email: " Please enter a valid email",
                user_address: "Please enter a valid Address",
                user_phone: "Please enter a valid Phone Number",
                user_country: "Please enter a valid Country",

                user_state: "Please Enter valid State",
                user_city: "Please Enter Valid City",
                // user_image: "Please Upload Image",
                user_zip: "Please Enter Pincode",
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
        .error
        {
            color: red;
        }

    </style>
    </body>
    </html>


<?php endforeach; ?>