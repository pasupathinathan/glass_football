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
                                    <li class="breadcrumb-item"><a href="db-default.html"><i class="ti ti-home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                    <li class="breadcrumb-item active">Ground User Profile</li>
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
                                    <img src="<?php echo base_url(); ?>/assets/upload/users/<?php echo $store->user_image; ?>"
                                         class="avatar rounded-circle d-block mx-auto" width="100px">
                                </div>
                                <h3 class="text-center mt-3 mb-1"> <?php echo $store->user_name; ?></h3>
                                <p class="text-center"><?php echo $store->user_email; ?></p>
                                <div class="em-separator separator-dashed"></div>
                                <ul class="nav flex-column">
                                   

                                   
                                   
                                </ul>
                            </div>
                        </div>
                        <!-- End Widget -->
                    </div>
                    <div class="col-xl-9">
                        <div class="widget has-shadow">
                            <div class="widget-header bordered no-actions d-flex align-items-center">
                                <h4>Change Password</h4>
                                <h4 style="color: #E13300;margin-left: 5%;"><?php echo $this->session->flashdata('message_name'); ?><h4>
                            </div>
                            <div class="widget-body">
                                <?php

                                $attributes = array("class" => "needs-validation","id" => "changepassword", "name" => "change_password_form","novalidate");
                                echo form_open_multipart("change_password", $attributes);

                                ?>
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-3 form-control-label d-flex justify-content-lg-end">Old Password</label>
                                        <div class="col-lg-6">
                                            <input type="text" name="old_password" class="form-control"
                                                   placeholder="Old Password">
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-3 form-control-label d-flex justify-content-lg-end">New Password</label>
                                        <div class="col-lg-6">
                                            <input type="text" name="new_password" class="form-control"
                                                   placeholder="New Password">
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-3 form-control-label d-flex justify-content-lg-end">Confirm Password</label>
                                        <div class="col-lg-6">
                                            <input type="text" name="confirm_password" class="form-control"
                                                   placeholder="Confirm Password">
                                        </div>
                                    </div>
                                <div class="text-right">
                                    <button class="btn btn-gradient-01" type="submit">Save</button>
                                    <button class="btn btn-shadow" type="reset">Reset</button>
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
    <script src="<?php echo base_url(); ?>assets/js/components/validation/validation.min.js"></script>
    <!-- End Page Snippets -->

    <script src="<?php echo base_url(); ?>assets/js/jquery.validate.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
    <!-- Begin Page Snippets -->
    <script src="<?php echo base_url(); ?>assets/js/app/contact/contact.min.js"></script>
    <!-- End Page Snippets -->
    <script>
        $('#changepassword').validate({
            rules: {
                old_password: {
                    required: true,
                    minlength : 5
                },
                new_password : {
                    required: true,
                    minlength : 5
                },
                confirm_password : {
                    required: true,
                    minlength : 5,
                    equalTo : '[name="new_password"]'
                }
            },
            messages: {

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