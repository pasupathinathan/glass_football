<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/timepicki.css">

<?php
foreach ($data as $store) :

    ?>

<style type="text/css">
    
    #ck-button {
    margin:10px;
    background-color:#EFEFEF;
    border-radius:4px;
    border:1px solid #D0D0D0;
    overflow:auto;
    float:left;
}
#select{
    background-color: #ccc;
}
#ck-button:hover {
    background:1hr;
}

#ck-button label {
    float:left;
    width:6.0em;
    margin-bottom: 0px;
}

#ck-button label span {
    text-align:center;
    padding:3px 0px;
    display:block;
}

#ck-button label input {
    position:absolute;
    top:-20px;
    visibility: hidden;
}

#ck-button input:checked + span {
    background-color:#11994e;
    color:#fff;
}
</style>
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
                        <h2 class="page-header-title"><?php echo get_phrase('Edit Booking');?></h2>
                        <div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard'); ?>"><i class="ti ti-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="<?php echo site_url('booking_list'); ?>"><?php echo get_phrase('Booking');?></a></li>
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
                            <h4><?php echo get_phrase('Booking Form');?></h4>
                        </div>
                        <div class="widget-body">

                           
                            <?php

                            $attributes = array("class" => "", "id" => "bookingadd", "name" => "bookingaddform");
                            echo form_open_multipart("update_booking", $attributes);

                            ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Ground Name');?>
                                            *</label>
                                        <div class="col-lg-8">
                                            <select name="ground_id" class="form-control" id="ground_id">
                                                <option value=""><?php echo get_phrase('Select Ground Name');?></option>
                                                <?php
                                                if (!empty($data1)) {
                                                    foreach ($data1 as $row) {
                                                        ?>
                                                        <option value="<?php echo $row->ground_id; ?>" <?php if($store->booking_ground == $row->ground_id){ echo 'selected'; } ?>><?php echo $row->ground_name; ?></option>
                                                    <?php }
                                                } ?>

                                            </select>
                                        </div>
                                    </div>
                                </div>
								
								<?php								
									 $getlist = $this->football_model->get_ground_size_based_on_ground_id($store->booking_ground);							
									?>
	
								 <div class="col-md-6">
                                     <div class="form-group row d-flex align-items-center mb-5">
                                         <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Ground Size');?> *</label>
                                         <div class="col-lg-8">
                                                      <select class="form-control ground_size_options" id="ground_size" name="ground_size">
                                                        <option value=""><?php echo get_phrase('Select Ground Size');?></option>
												<?php
													if (!empty($getlist)) {
														foreach ($getlist as $row) {
                                                        ?>
                                                        <option value="<?php echo $row->id; ?>" <?php if($store->booking_ground_size == $row->id){ echo 'selected'; } ?>><?php echo $row->size; ?></option>
                                                    <?php }
                                                } ?>
													</select>
                                             </div>
                                     </div>
								</div>
								 
                            </div>
                            <?php if(!empty($store->booking_player)) { ?>
								<?php $playerview=$this->football_model->player_view($store->booking_player);?>
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
								<?php if(!empty($store->booking_player)) { ?>
								<div class="col-md-6">
									<div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Booking Type');?> *</label>
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <select name="booking_type" class="form-control" id="booking_type" readonly>
                                                    <option  value=""><?php echo get_phrase('Select Booking Type');?></option>
                                                    <option value="App" <?php if($store->booking_type == 'App'){ echo 'selected'; } ?>><?php echo get_phrase('App');?></option>
												</select>
                                            </div>
                                        </div>
                                    </div>
								</div>
							<?php } else { ?>
								<div class="col-md-6">
									<div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Booking Type');?> *</label>
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <select name="booking_type" class="form-control" id="booking_type" required>
                                                    <option  value=""><?php echo get_phrase('Select Booking Type');?></option>
                                                    <option value="Academic" <?php if($store->booking_type == 'Academic'){ echo 'selected'; } ?>><?php echo get_phrase('Academic');?></option>
                                                    <option value="Street League" <?php if($store->booking_type == 'Street League'){ echo 'selected'; } ?>><?php echo get_phrase('Street League');?></option>
                                                    <option value="Club" <?php if($store->booking_type == 'Club'){ echo 'selected'; } ?>><?php echo get_phrase('Club');?></option>
                                                    <option value="Tournament" <?php if($store->booking_type == 'Tournament'){ echo 'selected'; } ?>><?php echo get_phrase('Tournament');?></option>
												</select>
                                            </div>
                                        </div>
                                    </div>
								</div>
							<?php } ?>
								<div class="col-md-6">
									<div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Payment Type');?> *</label>
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <select name="payment_type" class="form-control" id="payment_type">
                                                    <option  value=""><?php echo get_phrase('Select Payment Mode');?></option>
                                                    <option value="cash" <?php if($store->booking_paymenttype == 'cash'){ echo 'selected'; } ?>><?php echo get_phrase('Cash');?></option>
                                                    <option value="card" <?php if($store->booking_paymenttype == 'card'){ echo 'selected'; } ?>><?php  echo get_phrase('Card');?></option>
													
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
                                                    <input type="text" name="booking_amount" id="booking_amount" class="form-control" value='<?php echo $store->booking_amount; ?>'/>
                                                    <input type="hidden" name="booking_id" id="booking_id" class="form-control" value='<?php echo $store->booking_id; ?>'/>
													<input type="hidden" name="time_slot_amount" id="time_slot_amount" class="form-control" />
                                                </div>
												
                                            </div>
                                        </div>
                                    </div>
								</div>
								<div class="col-md-6">
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">
                                        <?php echo get_phrase('Booking Date');?>*</label>
                                        <div class="col-lg-8">
                                            <input type="date" id="booking_date" name="booking_date" class="form-control"
                                                   placeholder="MM/DD/YYYY" required value='<?php echo $store->booking_sdate; ?>'>
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
                                 <a style="margin-top: 10px;" href="<?php echo base_url('booking_list') ?>"
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
<!-- Begin Vendor Js -->
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



<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>


<!-- End Page Snippets -->
</body>
<script type="text/javascript">
	
	function getDayOfWeek(date) {
      var dayOfWeek = new Date(date).getDay();    
      return isNaN(dayOfWeek) ? null : ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'][dayOfWeek];
    }
	
	$("#booking_date").on("change", function(){
		var dateval =  $('#booking_date').val();
		var dayOfWeek = getDayOfWeek(dateval);
		var ground_id = $('#ground_id').val();
		var ground_size = $('#ground_size').val();
		var booking_time_slot = '30';
		var booking_type = 'edit';
		//alert(dateval);
		
		//var teamVal = $(this).attr('id');
		if(ground_id == ''){
			alert('Please Select Ground Name');
			$('#booking_date').val('');
			$('#ground_id').focus();
			return false;
		}else if(ground_size == 'Select'){
			alert('Please Select Ground Size Name');
			$('#booking_date').val('');
			$('#ground_size').focus();
			return false;
		}else{
			$.ajax({
				'type': 'POST',
				'url' : '<?php echo base_url("get_booking_hours") ?>',
				data:{'dayOfWeek':dayOfWeek,'dateval':dateval,'ground_id':ground_id,'booking_time_slot':booking_time_slot,'ground_size':ground_size,'booking_type':booking_type},
				success:function(data) {
					//alert(data);
					$("#hourscontainer").html(data);
				}
			});
		}		
	});
	
	
	$("#ground_id").on("change", function(){
		$('#booking_date').val("");
		$("#hourscontainer").html('');		
	});
	
	
	$("#ground_size").on("change", function(){
		$('#booking_date').val("");
		$("#hourscontainer").html('');		
	});
	
	
	$(document).ready(function() {
		var dateval =  $('#booking_date').val();
		var dayOfWeek = getDayOfWeek(dateval);
		var ground_id = $('#ground_id').val();
		var ground_size = $('#ground_size').val();
		var booking_id = $('#booking_id').val();
		var booking_time_slot = '30';
		var booking_type = 'edit_'+booking_id;
		
		//alert(booking_type);
		
		//var teamVal = $(this).attr('id');
		if(ground_id == ''){
			alert('Please Select Ground Name');
			$('#booking_date').val('');
			$('#ground_id').focus();
			return false;
		}else if(ground_size == ''){
			alert('Please Select Ground Size Name');
			$('#booking_date').val('');
			$('#ground_size').focus();
			return false;
		}else{
			$.ajax({
				'type': 'POST',
				'url' : '<?php echo base_url("get_booking_hours") ?>',
				data:{'dayOfWeek':dayOfWeek,'dateval':dateval,'ground_id':ground_id,'booking_time_slot':booking_time_slot,'ground_size':ground_size,'booking_type':booking_type},
				success:function(data) {
					//alert(data);
					$("#hourscontainer").html(data);
					var amount = $('#booking_amount').val();
					var slot = $('#mins_booking_slot').val();
					var min_am = Math.round(parseFloat(amount/slot));
					$('#time_slot_amount').val(min_am);
					$("#hour_amount").text(min_am * 2);
					
					
				}
			});
		}
		
		
		
	});
	
	
	
	
	
	
/* 		$("#ground_size").on("change", function(){
		var dateval =  $('#booking_date').val();
		var dayOfWeek = getDayOfWeek(dateval);
		var ground_id = $('#ground_id').val();
		var ground_size = $('#ground_size').val();
		var booking_time_slot = '60';
		//alert(dateval);
		
		//var teamVal = $(this).attr('id');
		if(ground_id == ''){
			//alert('Please Select Ground Name');
			$('#booking_date').val('');
			$('#ground_id').focus();
			return false;
		}else{
			$.ajax({
				'type': 'POST',
				'url' : '<?php echo base_url("get_booking_hours") ?>',
				data:{'dayOfWeek':dayOfWeek,'dateval':dateval,'ground_id':ground_id,'booking_time_slot':booking_time_slot,'ground_size':ground_size},
				success:function(data) {
					//alert(data);
					$("#hourscontainer").html(data);
				}
			});
		}		
	}); */
	 
 $('#ground_id').change(function(){
        var ground_id = $(this).val();
        $.ajax({
            'type': 'POST',
            'url' : '<?php echo base_url("get_ground_size") ?>',
            data:{'ground_id':ground_id},
            success:function(data) {
                console.log(data);
                $('.ground_size_options').empty();
                $('.ground_size_options').append($('<option>').text("Select"));
                $.each(JSON.parse(data), function(i, obj){
                    $('.ground_size_options').append($('<option>').text(obj.size).attr('value', obj.id));
                });
            }

        });
    });
	
	
	 $('.ground_size_options').change(function(){
        var ground_size_id = $(this).val();
        $.ajax({
            'type': 'POST',
            'url' : '<?php echo base_url("get_booking_amount") ?>',
            data:{'ground_size_id':ground_size_id},
            success:function(data) {
                //alert(data);
                $.each(JSON.parse(data), function(i, obj){
					//alert(obj.amount);
					var min_am = Math.round(parseFloat(obj.amount));
					//alert(min_am);
					$('#booking_amount').val(min_am);
					$("#hour_amount").text(obj.amount);
					$('#time_slot_amount').val(min_am);
                });
            }

        });
    });
	
	function checkedCount(){     
		var checkbox = document.getElementsByName('time_slot[]');
		var ln = 0;
		for(var i=0; i< checkbox.length; i++) {
			if(checkbox[i].checked)
				ln++
		}
		var minval = $('#time_slot_amount').val();
		var slot = minval * ln;
		$('#booking_amount').val(slot);
	}


</script>

<script type="text/javascript">
    $('#bookingadd').validate({
        rules: {
            ground_id: "required",
            ground_size: "required",
            player_id: "required",
            player_number: "required",
            booking_date: "required",
            booking_type: "required",
            payment_type: "required",
            booking_amount: "required",
			'time_slot[]': {required: true}
        },
        messages: {
            ground_id: " Please select a Ground Name",
            ground_size: " Please select a Ground Size",
            player_id: " Please enter a Player Name",
            player_number: " Please enter a Player Number",
            booking_date: "Please select a  Booking Date",
            payment_type: "Please select a Payment Type",
            booking_amount: "Please Enter a Booking Amount",
             "time_slot[]": "You must check at least 1 ",
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