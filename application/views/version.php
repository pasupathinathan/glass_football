    <!-- End Header -->
    <!-- Begin Page Content -->
    <div class="page-content d-flex align-items-stretch">
        <!-- End Left Sidebar -->
        <div class="content-inner">
            <div class="container-fluid">
                <!-- Begin Page Header-->
                <div class="row">
                    <div class="page-header">
                        <div class="d-flex align-items-center">
                            <h2 class="page-header-title"><?php echo get_phrase('Version Settings');?></h2>
                            <div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard'); ?>"><i
                                                    class="ti ti-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo site_url('version'); ?>"><?php echo get_phrase('Version Settings');?></a>
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
                                <h4 style="color: #ffff;"><?php echo get_phrase('Android Version');?></h4>
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
                                $attributes = array('class' => 'needs-validation', "name" => "android_version", "id" => "android_version", "novalidate");
                                echo form_open_multipart("android_version_update", $attributes);
                                $user_id = $this->uri->segment(2);
                                ?>
                               
							   <div class="form-group row d-flex align-items-center mb-5">
                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Version Code');?> </label>
                                    <div class="col-lg-5">
                                        <input type="hidden" class="form-control" name='id'
                                               value='<?php echo $data->id;?>'>
										<div class="input-group">
											<input type="text" name="version_code"
                                                value='<?php echo $data->version_code; ?>' class="form-control"
                                                placeholder="Enter Feature" required>
										</div>
                                    </div>
                                </div>
                                <div class="form-group row d-flex align-items-center mb-5">
                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Request');?> </label>
                                    <div class="col-lg-5">
                                        <select name="version_request" class="form-control" required>
                                            <option value="">Please Select</option>
                                            <option value="true" <?php if($data->version_request == 'true')  { echo "selected";} ?>>True</option>
                                            <option value="false" <?php if($data->version_request == 'false')  { echo "selected";} ?>>False</option>
                                        </select>
                                    </div>
                                </div>
                                  <div class="form-group row d-flex align-items-center mb-5">
                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Force');?> </label>
                                    <div class="col-lg-5">
                                        <select name="version_force" class="form-control" required>
                                            <option value="">Please Select</option>
                                            <option value="true" <?php if($data->version_force == 'true')  { echo "selected";} ?>>True</option>
                                            <option value="false" <?php if($data->version_force == 'false')  { echo "selected";} ?>>False</option>
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

                    <div class="col-xl-6">
                        <!-- Form -->
                        <div class="widget has-shadow">
                            <div style="background-color: #bf5252;" class="widget-header bordered no-actions d-flex align-items-center">
                                <h4 style="color: #ffff;"><?php echo get_phrase('IOS Version');?></h4>
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
                                $attributes = array('class' => 'needs-validation', "name" => "ios_version", "id" => "ios_version", "novalidate");
                                echo form_open_multipart("ios_version_update", $attributes);
                                $user_id = $this->uri->segment(2);
                                ?>
                                <div class="form-group row d-flex align-items-center mb-5">
                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Version Code');?> </label>
                                    <div class="col-lg-5">
                                        <input type="hidden" class="form-control" name='id'
                                               value='<?php echo $data1->id; ?>'>
										<div class="input-group">
											<input type="text" name="version_code"
                                                value='<?php echo $data1->version_code; ?>' class="form-control"
                                                placeholder="Enter Feature" required>
										</div>
                                    </div>
                                </div>
                                 <div class="form-group row d-flex align-items-center mb-5">
                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Request');?> </label>
                                    <div class="col-lg-5">
                                        <select name="version_request" class="form-control" required>
                                            <option value="">Please Select</option>
                                            <option value="true" <?php if($data1->version_request == 'true')  { echo "selected";} ?>>True</option>
                                            <option value="false" <?php if($data1->version_request == 'false')  { echo "selected";} ?>>False</option>
                                        </select>
                                    </div>
                                </div>
                                  <div class="form-group row d-flex align-items-center mb-5">
                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Force');?> </label>
                                    <div class="col-lg-5">
                                        <select name="version_force" class="form-control" required>
                                            <option value="">Please Select</option>
                                            <option value="true" <?php if($data1->version_force == 'true')  { echo "selected";} ?>>True</option>
                                            <option value="false" <?php if($data1->version_force == 'false')  { echo "selected";} ?>>False</option>
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


