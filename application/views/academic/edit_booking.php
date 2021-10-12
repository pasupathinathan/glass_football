<!-- Begin Page Content -->
<div class="page-content d-flex align-items-stretch">
    <div class="content-inner">
        <div class="container-fluid">
            <!-- Begin Page Header-->
            <div class="row">
                <div class="page-header">
                    <div class="d-flex align-items-center">
                        <h2 class="page-header-title"><?php echo get_phrase('Edit Academy Booking');?></h2>
                        <div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard'); ?>"><i class="ti ti-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="<?php echo site_url('academy_booking'); ?>"><?php echo get_phrase('Booking');?></a></li>
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
                        <div class="widget-header borde1hr no-actions d-flex align-items-center">
                            <h4><?php echo get_phrase('Academy Booking Form');?></h4>
                        </div>
                        <div class="widget-body">

                           
                            <?php

                            $attributes = array("class" => "", "id" => "bookingadd", "name" => "bookingaddform");
                            echo form_open_multipart("update_academy_booking", $attributes);

                            ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Academy Name');?>
                                            *</label>
                                        <div class="col-lg-8">
                                            <select name="academy_id" class="form-control" id="academy_id">
                                                <option value=""><?php echo get_phrase('Select Academy Name');?></option>
                                                <?php
                                                if (!empty($academic_list)) {
                                                    foreach ($academic_list as $row) {
                                                        ?>
                                                        <option value="<?php echo $row['academy_id']; ?>" <?php if($edit_booking['booking_academy'] == $row['academy_id']){ echo 'selected'; } ?>><?php echo $row['academy_name']; ?></option>
                                                    <?php }
                                                } ?>

                                            </select>
                                        </div>
                                    </div>
                                </div>
								
								<?php	
									$params = array(
										'academy_id' => $edit_booking['booking_academy'],
									);
									 $getage = $this->football_model->get_age_based_on_academy_id($params);							
									?>
	
								 <div class="col-md-6">
                                     <div class="form-group row d-flex align-items-center mb-5">
                                         <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Age');?> *</label>
                                         <div class="col-lg-8">
                                                      <select class="form-control academy_age_options" id="age" name="age">
                                                        <option value=""><?php echo get_phrase('Select Age');?></option>
												<?php
													if (!empty($getage)) {
														foreach ($getage as $a) {
                                                        ?>
                                                        <option value="<?php echo $a['id']; ?>" <?php if($edit_booking['booking_age'] == $a['id']){ echo 'selected'; } ?>><?php echo $a['age_limit']; ?></option>
                                                    <?php }
                                                } ?>
													</select>
                                             </div>
                                     </div>
								</div>
								 
                            </div>
                            <?php if(!empty($edit_booking['booking_player'])) { ?>
								<?php $playerview=$this->football_model->player_view($edit_booking['booking_player']);?>
								<?php foreach($playerview as $p) { ?>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group row d-flex align-items-center mb-5">
												<label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Player Name');?>
													</label>
												<div class="col-lg-8">
													<div class="input-group">
													 <input type="text" name="player_id" id="player_id" class="form-control" value='<?php echo $p->player_fname; ?>' disabled/>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group row d-flex align-items-center mb-5">
												<label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Player Number');?>
													</label>
												<div class="col-lg-8">
													<div class="input-group">
														 <input type="number" name="player_number" id="player_number" class="form-control" value='<?php echo $p->player_mnumber; ?>' disabled/>
													</div>
												</div>
											</div>
										</div>							
									</div>
								<?php } ?>
							<?php } else { ?>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row d-flex align-items-center mb-5">
											<label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Player Name');?>
												*</label>
											<div class="col-lg-8">
												<div class="input-group">
												 <input type="text" name="player_id" id="player_id" class="form-control" value='<?php echo $store->player_name; ?>' required/>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row d-flex align-items-center mb-5">
											<label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Player Number');?>
												*</label>
											<div class="col-lg-8">
												<div class="input-group">
													 <input type="number" name="player_number" id="player_number" class="form-control" value='<?php echo $store->booking_player_number; ?>' required/>
												</div>
											</div>
										</div>
									</div>							
								</div>
							<?php } ?>
                            <div class="row">  
								<div class="col-md-6">
									<div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Payment Type');?> *</label>
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <select name="payment_type" class="form-control" id="payment_type">
                                                    <option  value=""><?php echo get_phrase('Select Payment Mode');?></option>
                                                    <option value="cash" <?php if($edit_booking['payment_type'] == 'cash'){ echo 'selected'; } ?>><?php echo get_phrase('Cash');?></option>
                                                    <option value="card" <?php  if($edit_booking['payment_type'] == 'card'){ echo 'selected'; } ?>><?php  echo get_phrase('Card');?></option>										
                                                </select>
                                            </div>
                                        </div>
                                    </div>
								</div>
								<div class="col-md-6">
									<div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Payment Status');?> *</label>
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <select name="payment_status" class="form-control" id="payment_status">
                                                    <option  value=""><?php echo get_phrase('Select Payment Status');?></option>
                                                    <option value="1" <?php if($edit_booking['payment_status'] == '1'){ echo 'selected'; } ?>><?php echo get_phrase('Paid');?></option>
                                                    <option value="2" <?php  if($edit_booking['payment_status'] == '2'){ echo 'selected'; } ?>><?php  echo get_phrase('Un Paid');?></option>										
                                                </select>
                                            </div>
                                        </div>
                                    </div>
								</div>
								</div>
								<div class="row">
                                <div class="col-md-6">
									<div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Booking Amount');?> *</label>
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <div class="input-group ">
                                                    <input type="text" name="booking_amount" id="booking_amount" class="form-control" value='<?php echo $edit_booking['booking_amount']; ?>' readonly/>
                                                    <input type="hidden" name="a_booking_id" id="a_booking_id" class="form-control" value='<?php echo $edit_booking['a_booking_id']; ?>'/>
												
                                                </div>
												
                                            </div>
                                        </div>
                                    </div>
								</div>
								<div class="col-md-6">
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">
                                        <?php echo get_phrase('No of month');?>*</label>
                                        <div class="col-lg-8">
											<select name="no_of_month" class="form-control no_of_month" id="no_of_month">
												<option  value=""><?php echo get_phrase('Select No of Month');?></option>
												<option value="1" <?php if($edit_booking['no_of_month'] == '1'){ echo 'selected'; } ?>><?php echo get_phrase('1');?></option>
												<option value="2" <?php  if($edit_booking['no_of_month'] == '2'){ echo 'selected'; } ?>><?php  echo get_phrase('2');?></option>
												<option value="3" <?php  if($edit_booking['no_of_month'] == '3'){ echo 'selected'; } ?>><?php  echo get_phrase('3');?></option>
												<option value="4" <?php  if($edit_booking['no_of_month'] == '4'){ echo 'selected'; } ?>><?php  echo get_phrase('4');?></option>
												<option value="5" <?php  if($edit_booking['no_of_month'] == '5'){ echo 'selected'; } ?>><?php  echo get_phrase('5');?></option>
												<option value="6" <?php  if($edit_booking['no_of_month'] == '6'){ echo 'selected'; } ?>><?php  echo get_phrase('6');?></option>
												<option value="7" <?php  if($edit_booking['no_of_month'] == '7'){ echo 'selected'; } ?>><?php  echo get_phrase('7');?></option>
												<option value="8" <?php  if($edit_booking['no_of_month'] == '8'){ echo 'selected'; } ?>><?php  echo get_phrase('8');?></option>
												<option value="9" <?php  if($edit_booking['no_of_month'] == '9'){ echo 'selected'; } ?>><?php  echo get_phrase('9');?></option>
												<option value="10" <?php  if($edit_booking['no_of_month'] == '10'){ echo 'selected'; } ?>><?php  echo get_phrase('10');?></option>
												<option value="11" <?php  if($edit_booking['no_of_month'] == '11'){ echo 'selected'; } ?>><?php  echo get_phrase('11');?></option>
												<option value="12" <?php  if($edit_booking['no_of_month'] == '12'){ echo 'selected'; } ?>><?php  echo get_phrase('12');?></option>
											</select>
										</div>
                                    </div>
                                </div>
                               </div>
							<div class="row" id="hourscontainer"></div>

                      </div>
                            </div>
                            <div class="em-separator separator-dashed"></div>

                            <div class="text-right">
                               <button class="btn btn-gradient-01" type="submit"><?php echo get_phrase('Submit Form');?></button>
                                 <a style="margin-top: 10px;" href="<?php echo base_url('academy_booking') ?>"
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

        <!-- End Page Footer -->
        <a href="#" class="go-top"><i class="la la-arrow-up"></i></a>
        <!-- Offcanvas Sidebar -->

        <!-- End Offcanvas Sidebar -->
    </div>
</div>
<!-- End Page Content -->
</div>
<script src="<?php echo base_url() ?>assets/vendors/js/base/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/js/base/core.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/timepicki.js"></script>
<!-- End Vendor Js -->
<!-- Begin Page Vendor Js -->
<script src="<?php echo base_url() ?>assets/vendors/js/nicescroll/nicescroll.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/js/app/app.min.js"></script>
<!-- End Page Vendor Js -->
<!-- Begin Page Snippets -->

<script src="<?php echo base_url() ?>assets/js/jquery.validate.js"></script>
<script>
	$('#academy_id').change(function(){
        var academy_id = $(this).val();
        $.ajax({
            type: 'POST',
            url : '<?php echo base_url("get_academy_age_ajax") ?>',
            data:{'academy_id':academy_id},
            success:function(data) {
                console.log(data);
                $('.academy_age_options').empty();
                $('.academy_age_options').append($('<option>').text("Select"));
                $.each(JSON.parse(data), function(k,v){
                    $('.academy_age_options').append($('<option>').text(v.age_limit).attr('value', v.id));
                });
            }

        });
    });
	$('.academy_age_options').change(function(){
        var academy_age_id = $(this).val();
        $.ajax({
            type: 'POST',
            url : '<?php echo base_url("get_academy_price_ajax") ?>',
            data:{'academy_age_id':academy_age_id},
            success:function(data) {
                console.log(data);
                var price_data = JSON.parse(data);
				var min_am = Math.round(parseFloat(price_data.after_discount_price));
				$('#booking_amount').val(min_am);
				$('#no_of_month').val('');
            }

        });
    });
	$('.no_of_month').change(function(){
        var months = $(this).val();
        var academy_age_id = $('#age').val();
        $.ajax({
            type: 'POST',
            url : '<?php echo base_url("get_academy_price_ajax") ?>',
            data:{'academy_age_id':academy_age_id},
            success:function(data) {
                console.log(data);
                var price_data = JSON.parse(data);
				var min_amt = Math.round(parseFloat(price_data.after_discount_price));
		        var total_amount = min_amt * months;
		        $('#booking_amount').val(total_amount);
            }
        });
	});
	$('#bookingadd').validate({
        rules: {
            academy_id: "required",
            age: "required",
            player_id: "required",
            player_number: "required",
            no_of_month: "required",
            payment_status: "required",
            payment_type: "required",
            booking_amount: "required"
        },
        messages: {
            academy_id: " Please select a Academy Name",
            age: " Please select a Age",
            player_id: " Please enter a Player Name",
            player_number: " Please enter a Player Number",
            no_of_month: "Please select a  No of Month",
            payment_status: "Please select a Payment Status",
            payment_type: "Please select a Payment Type",
            booking_amount: "Please Enter a Booking Amount"
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
	.error{
		color:red;
	}
</style>
</html>