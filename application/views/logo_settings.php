<?php
foreach ($data1 as $store) :

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
                            <h2 class="page-header-title"><?php echo get_phrase('logo_settings');?></h2>
                            <div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard'); ?>"><i
                                                    class="ti ti-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo site_url('logo_settings'); ?>"><?php echo get_phrase('logo_settings');?></a>
                                    </li>

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
                                        <h4><?php echo get_phrase('Logo_settings_form');?></h4>
                                    </div>
                                    <div class="widget-body">
							<?php
                                $attributes = array('class' => 'needs-validation', "name" => "userform", "id" => "useradd", "novalidate");
                                echo form_open_multipart("logo_setting_update", $attributes);
                                $user_id = $this->uri->segment(2);
                                ?>
                              <div class="form-group row d-flex align-items-center mb-5">
                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Logo Image');?>
                                        </label>
                                    <div class="col-lg-5">
                                        <input type="file" class="form-control" name="sl_logo" required onchange="readURL(this);"><?php  echo $store->logo_image; ?>
                                    </div>
                                </div>
								
								   <div class="form-group row d-flex align-items-center mb-5">
                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Image Preview');?>
                                        </label>
										<img  src="<?php echo base_url(); ?>/assets/upload/<?php  echo $store->logo_image; ?>" alt="" name="preview_image" id="preview_image" class="img-responsive" width="200px" height="200px">
										<input type="text" id="logo_img" name="logo_img" class="form-control" style="display:none;" value="<?php  echo $store->logo_image; ?>"/>
									 </div>
                                </div>
                               
								<div class="em-separator separator-dashed"></div>
								<div class="text-right">
									<button class="btn btn-gradient-01" type="submit"><?php echo get_phrase('Submit');?></button>
								</div>
                                        </form>
                                    </div>
                                </div>
                                <!-- End Form -->
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
    </div>
    <!-- End Page Content -->
    </div>
<?php  endforeach; ?>
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
<script type="text/javascript">
	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				$('#preview_image')
					.attr('src', e.target.result)
			};
			reader.readAsDataURL(input.files[0]);
		}
	}
</script> 
<style>
    .error {
        color: red;
    }

</style>

</body>
</html>


