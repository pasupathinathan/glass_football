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
                            <h2 class="page-header-title"><?php echo get_phrase('General Settings');?></h2>
                            <div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard'); ?>"><i
                                                    class="ti ti-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo site_url('general_settings'); ?>"><?php echo get_phrase('General Settings');?></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Page Header -->
                <div class="row flex-row">
                    <div class="col-xl-6">
                        <!-- Form -->
                        <div class="widget has-shadow">
                            <div style="background-color: #bf5252;" class="widget-header bordered no-actions d-flex align-items-center">
                                <h4 style="color: #ffff;"><?php echo get_phrase('Profile Setting');?></h4>
                                <?php if(empty($this->session->flashdata('successMessage1'))) { ?>
                                <?php }elseif($this->session->flashdata('successMessage1') == 'Updated Successfully') { ?>
                                    <div class="col-md-8">
                                        <div class="alert alert-success alert-dissmissible fade show" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                            <strong><?php echo $this->session->flashdata('successMessage1'); ?></strong>
                                        </div>
                                    </div>
                                <?php }elseif($this->session->flashdata('errorMessage1') == 'Updated Failed') { ?>
                                    <div class="col-md-8">
                                        <div class="alert alert-danger alert-dissmissible fade show" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                            <strong><?php echo $this->session->flashdata('errorMessage1'); ?></strong>
                                        </div>
                                    </div>
                                <?php } else { ?>

                                <?php } ?>
                            </div>
                            <div class="widget-body">

                                <?php
                                $attributes = array('class' => 'needs-validation', "name" => "userform", "id" => "useradd", "novalidate");
                                echo form_open_multipart("profile_setting_update", $attributes);
                                $user_id = $this->uri->segment(2);
                                ?>
                                <div class="form-group row d-flex align-items-center mb-5">
                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">
                                    </label>
                                    <div class="col-lg-5">
                                        <?php if (!empty($store->user_image)) { ?>

                                            <img src="<?php echo base_url(); ?>/assets/upload/users/<?php echo $store->user_image; ?>"
                                                 class="avatar rounded-circle d-block mx-auto" width="80" height="80">
                                        <?php } else { ?>

                                            <img src="<?php echo base_url(); ?>/assets/upload/man.png"
                                                 class="avatar rounded-circle d-block mx-auto" width="125px"
                                                 height="125px">

                                        <?php } ?>

                                    </div>
                                </div>

                                <div class="form-group row d-flex align-items-center mb-5">
                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Name');?>
                                        </label>
                                    <div class="col-lg-5">
                                        <input type="text" value='<?php echo $store->user_name; ?>' class="form-control"
                                               name="user_name" placeholder="Enter your User Name" required>
                                        <input type="hidden" class="form-control" name='user_id'
                                               value='<?php echo $store->user_id; ?>'>
                                    </div>
                                </div>
                                <div class="form-group row d-flex align-items-center mb-5">
                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Email');?>
                                       </label>
                                    <div class="col-lg-5">
                                        <div class="input-group">
                                            <input type="email" name="user_email"
                                                   value='<?php echo $store->user_email; ?>' class="form-control"
                                                   placeholder="Enter User Email" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row d-flex align-items-center mb-5">
                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Mobile');?></label>
                                    <div class="col-lg-5">
                                        <div class="input-group">
                                                        <span class="input-group-addon addon-primary">
                                                            <i class="la la-phone"></i>
                                                        </span>
                                            <input type="text" class="form-control"
                                                   value='<?php echo $store->user_phone; ?>' name="user_phone"
                                                   placeholder="Phone number" required>

                                        </div>
                                    </div>
                                </div>
                                <div class="em-separator separator-dashed"></div>
                                <div class="text-right">
                                    <button class="btn btn-gradient-01" type="submit"><?php echo get_phrase('Save');?></button>
                                </div>
                                </form>
                            </div>
                        </div>
                        <!-- End Form -->
                    </div>
                    <div class="col-xl-6">
                        <!-- Form -->
                        <div class="widget has-shadow">
                            <div style="background-color: #bf5252;" class="widget-header bordered no-actions d-flex align-items-center">
                                <h4 style="color: #ffff;"><?php echo get_phrase('Change Language');?></h4>
                                <?php if(empty($this->session->flashdata('suceessMessage2'))) { ?>
                                <?php }elseif($this->session->flashdata('suceessMessage2') == 'Changed Successfully') { ?>
                                    <div class="col-md-8">
                                        <div class="alert alert-success alert-dissmissible fade show" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                            <strong><?php echo $this->session->flashdata('suceessMessage2'); ?></strong>
                                        </div>
                                    </div>
                                <?php }elseif($this->session->flashdata('errorMessage2') == 'Failed') { ?>
                                    <div class="col-md-8">
                                        <div class="alert alert-danger alert-dissmissible fade show" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                            <strong><?php echo $this->session->flashdata('errorMessage2'); ?></strong>
                                        </div>
                                    </div>
                                <?php } else { ?>

                                <?php } ?>
                            </div>
                            <div class="widget-body">

                                <?php
                                $attributes = array('class' => 'needs-validation', "name" => "userform", "id" => "useradd", "novalidate");
                                echo form_open_multipart("language_change", $attributes);
                                $user_id = $this->uri->segment(2);
                                ?>
                                <div class="form-group row d-flex align-items-center mb-5">
                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Language');?> </label>
                                    <div class="col-lg-5">
                                        <input type="hidden" class="form-control" name='user_id'
                                               value='<?php echo $store->user_id; ?>'>
                                        <select name="language" class="form-control" required>
                                            <option value=""><?php echo get_phrase('Select Language');?></option>
                                            <?php
                                            if (!empty($data1)) {
                                                array_splice($data1,0,2);
                                                foreach ($data1 as $row) {
                                                    ?>
                                                    <option value="<?php echo $row; ?>" <?php if($store->language == $row)  { echo "selected";} ?>><?php echo $row; ?></option>
                                                <?php }
                                            } ?>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row d-flex align-items-center mb-5">
                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Text Align </label>
                                    <div class="col-lg-5">
                                        <select name="text_align" class="form-control" required>
                                            <option value="">Select Text Align</option>
                                            <option value="ltr" <?php if($store->text_align == 'ltr')  { echo "selected";} ?>>Left to Right</option>
                                            <option value="rtl" <?php if($store->text_align == 'rtl')  { echo "selected";} ?>>Right to Left</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="em-separator separator-dashed"></div>
                                <div class="text-right">
                                    <button class="btn btn-gradient-01" type="submit"><?php echo get_phrase('Save');?></button>
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
<?php endforeach; ?>
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
<!-- End Page Snippets -->
<script src="<?php echo base_url(); ?>assets/js/jquery.validate.js"></script>

<style>
    .error {
        color: red;
    }

</style>

</body>
</html>


