<style>
    .error
    {
        color: red;
    }

</style>
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
						<h2 class="page-header-title"><?php echo get_phrase('Add Coaching');?></h2>
						<div>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?php echo site_url('dashboard'); ?>"><i class="ti ti-home"></i></a></li>
								<li class="breadcrumb-item active"><a href="<?php echo site_url('coaching_classes'); ?>"><?php echo get_phrase('Coaching Classes List');?></a></li>
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
							<h4><?php echo get_phrase('Coaching Classes Form');?></h4>
						</div>
						<div class="widget-body">
						
							<?php

							$attributes = array("class" => "needs-validation","id" => "coachingadd", "name" => "coachingform","novalidate");
							echo form_open_multipart("save_coaching", $attributes);

							?>
								<div class="form-group row d-flex align-items-center mb-5">
									<label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Coaching Name');?> *</label>
									<div class="col-lg-5">
										<input type="text" class="form-control" name="coaching_name" placeholder=<?php echo get_phrase("Enter Coaching Name");?> required>

									</div>
								</div>

					
								<div class="em-separator separator-dashed"></div>
								
								
								<div class="text-right">
									<button class="btn btn-gradient-01" type="submit"><?php echo get_phrase('Submit Form');?></button>
									<a style="margin-top: 10px;" href="<?php echo base_url('coaching_classes') ?>"
                                       class="btn btn-warning mr-1 mb-2" role="button"><?php echo get_phrase('Back');?></a>
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
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
<!-- End Page Vendor Js -->
<!-- Begin Page Snippets -->
<script src="<?php echo base_url(); ?>assets/js/components/validation/validation.min.js"></script>
<!-- End Page Snippets -->

<script src="<?php echo base_url(); ?>assets/js/jquery.validate.js"></script>





<script type="text/javascript">
    //User Company Page Validation End ************************************
    $('#coachingadd').validate({
        rules: {
            coaching_name: "required",
        },
        messages: {
            coaching_name: " Please enter coaching name",
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
</body>
</html>