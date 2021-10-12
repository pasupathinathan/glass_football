<!-- Begin Page Content -->
<div class="page-content d-flex align-items-stretch">
    <div class="content-inner">
        <div class="container-fluid">
            <!-- Begin Page Header-->
            <div class="row">
                <div class="page-header">
                    <div class="d-flex align-items-center">
                        <h2 class="page-header-title"><?php echo get_phrase('Add Academy Price');?></h2>
                        <div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard'); ?>"><i
                                                class="ti ti-home"></i></a></li>
                                <li class="breadcrumb-item"><a
                                            href="<?php echo site_url('academy_price_list'); ?>"><?php echo get_phrase('Ground Size');?></a>
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
                            <h4><?php echo get_phrase('Academy Price Form');?></h4>
                        </div>
                        <div class="widget-body">
                            <?php
                            $attributes = array("class" => "needs-validation", "id" => "priceadd", "name" => "priceform", "novalidate");
                            echo form_open_multipart("update_academy_price", $attributes);
                            ?>
							<input type="hidden" class="form-control" name="id" value='<?php echo $academy_price['id']; ?>' >
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Academy Name');?> *</label>
                                        <div class="col-lg-8">
                                            <select name="academy_id" class="form-control" id="academy_id" required>
                                                <option value=""><?php echo get_phrase('Select Academy Name');?></option>
                                                <?php
                                                if (!empty($academy)) {
                                                    foreach ($academy as $row) {
                                                        ?>
                                                        <option value="<?php echo $row['academy_id']; ?>" <?php if($academy_price['academy_id'] == $row['academy_id'])  { echo "selected";} ?>><?php echo $row['academy_name']; ?></option>
                                                    <?php }
                                                } ?>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Age');?> *</label>
                                        <div class="col-lg-8">
                                            <select name="age" class="form-control" id="age" required>
                                                <option value=""><?php echo get_phrase('Select Age');?></option>
                                                <option value="3-10" <?php if($academy_price['age_limit'] == "3-10") { echo 'selected'; } ?>><?php echo get_phrase('3-10');?></option>
                                                <option value="11-17" <?php if($academy_price['age_limit'] == "11-17") { echo 'selected'; } ?>><?php echo get_phrase('11-17');?></option>
                                            </select>
                                        </div>
                                    </div>
									
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Month');?> </label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" name="month" value="<?php echo $academy_price['month'];?>"
                                                   placeholder=<?php echo get_phrase("Month");?> readonly required>

                                        </div>
                                    </div>
									<div class="form-group row mb-5">
										<label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Availability');?>
											</label>
										<div class="col-lg-3">
											<div class="custom-control custom-radio styled-radio mb-4">
												<input class="custom-control-input" type="radio"
													   value="0" name="availability" id="opt-01"
													   required <?php echo ($academy_price['availability']=='0')?'checked':'' ?>>
												<label class="custom-control-descfeedback" for="opt-01"><?php echo get_phrase('Available');?></label>

											</div>
										</div>
										<div class="col-lg-3">
											<div class="custom-control custom-radio styled-radio mb-3">
												<input class="custom-control-input" type="radio"
													   value="1" name="availability" id="opt-02"
													   required <?php echo ($academy_price['availability']=='1')?'checked':'' ?>>
												<label class="custom-control-descfeedback" for="opt-02"><?php echo get_phrase('UnAvailable');?></label>

											</div>
										</div>
									</div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Price');?> *</label>
                                        <div class="col-lg-8">
                                            <input type="number" min="0" class="form-control" name="actual_price"
                                                 value="<?php echo $academy_price['actual_price'];?>" placeholder=<?php echo get_phrase("Price");?> required>

                                        </div>
                                    </div>
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Discount');?> (%)
                                            </label>
                                        <div class="col-lg-8">
                                            <input type="number" min="0" class="form-control" name="discount"
                                                  value="<?php echo $academy_price['discount'];?>" placeholder=<?php echo get_phrase("Discount");?>>

                                        </div>
                                    </div>
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Payment Type');?> *</label>
                                        <div class="col-lg-8">
                                            <select name="payment_type" class="form-control" id="payment_type" required>
                                                <option value=""><?php echo get_phrase('Select Payment Type');?></option>
                                                <option value="cash" <?php if($academy_price['payment_type'] == 'cash') { echo 'selected' ;} ?>><?php echo get_phrase('Cash');?></option>
                                                <option value="card" <?php if($academy_price['payment_type'] == 'card') { echo 'selected' ;} ?>><?php echo get_phrase('Card');?></option>
                                                <option value="both" <?php if($academy_price['payment_type'] == 'both') { echo 'selected' ;} ?>><?php echo get_phrase('Both');?></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="em-separator separator-dashed"></div>
                            <div class="text-right">
                                <button id="submit" class="btn btn-gradient-01" type="submit"><?php echo get_phrase('Submit Form');?></button>
                                <a style="margin-top: 10px;" href="<?php echo base_url('academy_price_list') ?>" class="btn btn-warning mr-1 mb-2" role="button"><?php echo get_phrase('Back');?></a>
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
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
<!-- End Page Vendor Js -->
<!-- Begin Page Snippets -->
<script src="<?php echo base_url(); ?>assets/js/components/validation/validation.min.js"></script>
<!-- End Page Snippets -->

<script src="<?php echo base_url(); ?>assets/js/jquery.validate.js"></script>

<script type="text/javascript">

    //User Company Page Validation End ************************************
    $('#priceadd').validate({
        rules: {
            academy_id: "required",
            age: "required",
			month: "required",
            availability: "required",
            actual_price: "required",
            payment_type: "required",
        },
        messages: {
            academy_id: " Please enter academy name",
            age: " Please enter age",
			month: " Please enter month",
            availability: "Enter availability",
            actual_price: " Please enter price",
            payment_type: " Please enter payment type",
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
</body>
</html>