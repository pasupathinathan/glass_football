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
                        <h2 class="page-header-title"><?php echo get_phrase('Add Ground Size');?></h2>
                        <div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard'); ?>"><i
                                                class="ti ti-home"></i></a></li>
                                <li class="breadcrumb-item"><a
                                            href="<?php echo site_url('ground_size_duration_list'); ?>"><?php echo get_phrase('Ground Size');?></a>
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
                            <h4><?php echo get_phrase('Ground Size Form');?></h4>
                        </div>
                        <div class="widget-body">
                            <?php
                            $failmsg = $this->uri->segment(2);
                            if ($failmsg) {
                                ?>
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                        <div class="alert alert-danger alert-dissmissible fade show" role="alert">
                                            <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close"></button>
                                            <strong><?php echo get_phrase('This! Phone And Email');?></strong><?php echo get_phrase('Already Exists!');?>
                                        </div>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                            <?php } ?>
                            <?php
                            $attributes = array("class" => "needs-validation", "id" => "groundsizedadd", "name" => "groundsizeform", "novalidate");
                            echo form_open_multipart("add_ground_size_dur", $attributes);
                            ?>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Ground Name');?> *</label>
                                        <div class="col-lg-8">
                                            <select name="ground_id" class="form-control" id="ground_id" required>
                                                <option value=""><?php echo get_phrase('Select Ground Name');?></option>
                                                <?php
                                                if (!empty($data1)) {
                                                    foreach ($data1 as $row) {
                                                        ?>
                                                        <option value="<?php echo $row->ground_id; ?>"><?php echo $row->ground_name; ?></option>
                                                    <?php }
                                                } ?>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Ground Size');?> *</label>
                                        <div class="col-lg-5">
                                            <select name="size" class="form-control" id="size" required>
                                                <option value=""><?php echo get_phrase('Select Size');?></option>
                                                <option value="1*1"><?php echo get_phrase('1*1');?></option>
                                                <option value="2*2"><?php echo get_phrase('2*2');?></option>
                                                <option value="3*3"><?php echo get_phrase('3*3');?></option>
                                                <option value="4*4"><?php echo get_phrase('4*4');?></option>
                                                <option value="5*5"><?php echo get_phrase('5*5');?></option>
                                                <option value="6*6"><?php echo get_phrase('6*6');?></option>
                                                <option value="7*7"><?php echo get_phrase('7*7');?></option>
                                                <option value="8*8"><?php echo get_phrase('8*8');?></option>
                                                <option value="9*9"><?php echo get_phrase('9*9');?></option>
                                                <option value="10*10"><?php echo get_phrase('10*10');?></option>
                                                <option value="11*11"><?php echo get_phrase('11*11');?></option>
                                                <option value="12*12"><?php echo get_phrase('12*12');?></option>
                                            </select>
                                        </div>
										<div class="col-lg-3">
                                            <select name="size_number" class="form-control" id="size_validation">
												<option value="0"><?php echo get_phrase('0');?></option>
                                                <option value="1"><?php echo get_phrase('1');?></option>
                                                <option value="2"><?php echo get_phrase('2');?></option>
                                                <option value="3"><?php echo get_phrase('3');?></option>
                                                <option value="4"><?php echo get_phrase('4');?></option>
                                                <option value="5"><?php echo get_phrase('5');?></option>
                                                <option value="6"><?php echo get_phrase('6');?></option>
                                                <option value="7"><?php echo get_phrase('7');?></option>
                                                <option value="8"><?php echo get_phrase('8');?></option>
                                                <option value="9"><?php echo get_phrase('9');?></option>
                                                <option value="10"><?php echo get_phrase('10');?></option>
                                                <option value="11"><?php echo get_phrase('11');?></option>
                                                <option value="12"><?php echo get_phrase('12');?></option>
                                            </select>
                                        </div>
										<label style="margin-left:36%;display:none" id="ground_size_num-error" class="error" for="ground_size_num"> Please choose the another size number</label>
                                    </div>
									
                                    <!--<div class="form-group row d-flex align-items-center mb-5">-->
                                    <!--    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Ground Sq Ft');?> </label>-->
                                    <!--    <div class="col-lg-8">-->
                                    <!--        <input type="text" class="form-control" name="ground_sq_ft"-->
                                    <!--               placeholder=<?php echo get_phrase("Enter a Ground Sq Ft");?>>-->

                                    <!--    </div>-->
                                    <!--</div>-->
									<div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Ground Size');?> *</label>
                                        <div class="col-lg-8">
                                            <select name="slot" class="form-control" required>
                                                <!--<option value=""><?php //echo get_phrase('Select Slot Time');?></option>-->
                                                <option value="60"><?php echo get_phrase('30 Minutes');?></option>
                                                <!--<option value="120"><?php //echo get_phrase('1 Hour');?></option>
                                                <option value="180"><?php //echo get_phrase('1:30 Minutes');?></option>
                                                <option value="240"><?php //echo get_phrase('2 Hour');?></option>-->
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Ground Price');?> *</label>
                                        <div class="col-lg-8">
                                            <input type="number" min="0" class="form-control" name="ground_price"
                                                   placeholder=<?php echo get_phrase("Enter a Ground Price");?> required>

                                        </div>
                                    </div>
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Discount');?> (%)
                                            </label>
                                        <div class="col-lg-8">
                                            <input type="number" min="0" class="form-control" name="ground_discount"
                                                   placeholder=<?php echo get_phrase("Enter a Discount");?>>

                                        </div>
                                    </div>
                                    <!--<div class="form-group row d-flex align-items-center mb-5">-->
                                    <!--    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Upto Players');?></label>-->
                                    <!--    <div class="col-lg-8">-->
                                    <!--        <input type="text" class="form-control" name="upto_players"-->
                                    <!--               placeholder=<?php echo get_phrase("Enter a Upto Players");?>>-->

                                    <!--    </div>-->
                                    <!--</div>-->
                                </div>
                            </div>
                            <div class="em-separator separator-dashed"></div>
                            <div class="text-right">
                                <button id="submit" class="btn btn-gradient-01" type="submit"><?php echo get_phrase('Submit Form');?></button>
                                <a style="margin-top: 10px;" href="<?php echo base_url('ground_size_duration_list') ?>" class="btn btn-warning mr-1 mb-2" role="button"><?php echo get_phrase('Back');?></a>
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
    $('#groundsizedadd').validate({
        rules: {
            ground_id: "required",
            size: "required",
			slot: "required",
            ground_price: "required",
        },
        messages: {
            ground_id: " Please enter a Ground Name",
            size: " Please enter a Ground Size",
			slot: " Please enter a Slot",
            ground_price: " Please enter a Ground Price",
        },
        errorPlacement: function (error, element) {
            if (element.parent('.input-group').length || element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
    });
	
	$("#size_validation").on("change", function(){
		var ground_id = $("#ground_id option:selected").val();
		var size = $("#size option:selected").val();
		var size_number = $("#size_validation option:selected").val();
		    $.ajax({
            'type': 'POST',
            'url' : '<?php echo base_url("ground_size_validation") ?>',
            data:{'ground_id':ground_id,'size':size,'size_number':size_number},
            success:function(data) {
                
				var available = JSON.parse(data);
				console.log(available);
				if(available == 'available'){
					$('#ground_size_num-error').hide();
					$('#submit').prop('disabled', false);
				}else{
					$('#ground_size_num-error').show();
					$('#submit').prop('disabled', true);
				}
            }

        });
	});
</script>

<style>
    .error {
        color: red;
    }

</style>
</body>
</html>