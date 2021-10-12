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
    <div class="content-inner">
        <div class="container-fluid">
            <!-- Begin Page Header-->
            <div class="row">
                <div class="page-header">
                    <div class="d-flex align-items-center">
                        <h2 class="page-header-title"><?php echo get_phrase('Edit Bulk Booking');?></h2>
                        <div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard'); ?>"><i class="ti ti-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="<?php echo site_url('bulk_booking'); ?>"><?php echo get_phrase('Booking');?></a></li>
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
                            <h4><?php echo get_phrase('Bulk Booking Form');?></h4>
                        </div>
                        <div class="widget-body">

                           
                            <?php

                            $attributes = array("class" => "", "id" => "bookingadd", "name" => "bookingaddform");
                            echo form_open_multipart("update_bulk_booking", $attributes);

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

                            <div class="row">
							<div class="col-md-6">
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Player Name');?>
                                            *</label>
                                        <div class="col-lg-8">
                                            <div class="input-group">
											 <input type="text" name="player_name" id="player_name" class="form-control" value='<?php echo $store->player_name; ?>' required/>
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
                           
								<div class="row">
								<div class="col-md-6">
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">
                                        <?php echo get_phrase('Booking Date');?>*</label>
                                        <div class="col-lg-8">
                                            <input type="date" id="booking_date" name="booking_date" class="form-control"
                                                   placeholder="MM/DD/YYYY" required value='<?php echo $store->booking_from; ?>'>
                                        <input type="hidden" name="bulk_booking_id" id="bulk_booking_id" class="form-control" value='<?php echo $store->bulk_booking_id; ?>'/>
										</div>
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">
                                        <?php echo get_phrase('Booking Date');?>*</label>
                                        <div class="col-lg-8">
                                            <input type="date" id="to_date" name="to_date" class="form-control"
                                                   placeholder="MM/DD/YYYY" required value='<?php echo $store->booking_to; ?>'>
                                        </div>
                                    </div>
                                </div>
                               </div>
							   <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Days');?>
                                            *</label>
                                        <div class="col-lg-8">
											<?php $days = explode(",",$store->booking_days); ?>
                                            <select name="days[]" class="form-control" id="day" required multiple>
                                                <option value=""><?php echo get_phrase('Select Multiple Days');?></option>
                                                <option value="Monday" <?php if(in_array("Monday", $days)){echo "selected='selected'";}else{echo "";}?> ><?php echo get_phrase('Monday');?></option>
												<option value="Tuesday" <?php if(in_array("Tuesday", $days)){echo "selected='selected'";}else{echo "";}?> ><?php echo get_phrase('Tuesday');?></option>
												<option value="Wednesday" <?php if(in_array("Wednesday", $days)){echo "selected='selected'";}else{echo "";}?> ><?php echo get_phrase('Wednesday');?></option>
												<option value="Thursday" <?php if(in_array("Thursday", $days)){echo "selected='selected'";}else{echo "";}?> ><?php echo get_phrase('Thursday');?></option>
												<option value="Friday" <?php if(in_array("Friday", $days)){echo "selected='selected'";}else{echo "";}?> ><?php echo get_phrase('Friday');?></option>
												<option value="Saturday" <?php if(in_array("Saturday", $days)){echo "selected='selected'";}else{echo "";}?> ><?php echo get_phrase('Saturday');?></option>
												<option value="Sunday" <?php if(in_array("Sunday", $days)){echo "selected='selected'";}else{echo "";}?> ><?php echo get_phrase('Sunday');?></option>
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
                                 <a style="margin-top: 10px;" href="<?php echo base_url('bulk_booking') ?>"
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
	
	$("#day").on("change", function(){
		var dateval =  $('#booking_date').val();
		var to_date =  $('#to_date').val();
		var dayOfWeek = getDayOfWeek(dateval);
		var ground_id = $('#ground_id').val();
		var ground_size = $('#ground_size').val();
		var day = $('#day').val();
		var booking_type = 'add';
		var booking_time_slot = '30';
		//alert(dateval);
		
		//var teamVal = $(this).attr('id');
		if(ground_id == ''){
			alert('Please Select Ground Name');
			$('#day').val('');
			$('#ground_id').focus();
			return false;
		}else if(ground_size == 'Select'){
			alert('Please Select Ground Size Name');
			$('#day').val('');
			$('#ground_size').focus();
			return false;
		}else{
			$.ajax({
				'type': 'POST',
				'url' : '<?php echo base_url("get_bulk_booking_hours") ?>',
				data:{'dayOfWeek':dayOfWeek,'dateval':dateval,'to_date':to_date,'ground_id':ground_id,'booking_time_slot':booking_time_slot,'ground_size':ground_size,'booking_type':booking_type,'day':day},
				success:function(data) {
					//alert(data);
					$("#hourscontainer").html(data);
				}
			});
		}		
	});
	
	
	$("#ground_id").on("change", function(){
		$('#day').val("");
		$("#hourscontainer").html('');		
	});
	
	
	$("#ground_size").on("change", function(){
		$('#day').val("");
		$("#hourscontainer").html('');		
	});
	
	
	$(document).ready(function() {
		var dateval =  $('#booking_date').val();
		var to_date =  $('#to_date').val();
		var dayOfWeek = getDayOfWeek(dateval);
		var ground_id = $('#ground_id').val();
		var ground_size = $('#ground_size').val();
		var day = $('#day').val();
		var bulk_booking_id = $('#bulk_booking_id').val();
		var booking_time_slot = '30';
		var booking_type = 'edit_'+bulk_booking_id;
		
		//alert(booking_type);
		
		//var teamVal = $(this).attr('id');
		if(ground_id == ''){
			alert('Please Select Ground Name');
			$('#day').val('');
			$('#ground_id').focus();
			return false;
		}else if(ground_size == ''){
			alert('Please Select Ground Size Name');
			$('#day').val('');
			$('#ground_size').focus();
			return false;
		}else{
			$.ajax({
				'type': 'POST',
				'url' : '<?php echo base_url("get_bulk_booking_hours") ?>',
				data:{'dayOfWeek':dayOfWeek,'dateval':dateval,'to_date':to_date,'ground_id':ground_id,'booking_time_slot':booking_time_slot,'ground_size':ground_size,'booking_type':booking_type,'day':day},
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
	
	
/* 	 $('.ground_size_options').change(function(){
        var ground_size_id = $(this).val();
        $.ajax({
            'type': 'POST',
            'url' : '<?php echo base_url("get_booking_amount") ?>',
            data:{'ground_size_id':ground_size_id},
            success:function(data) {
                //alert(data);
                $.each(JSON.parse(data), function(i, obj){
					//alert(obj.amount);
					var min_am = Math.round(parseFloat(obj.amount/2));
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
	} */


</script>

<script type="text/javascript">
    $('#bookingadd').validate({
        rules: {
            ground_id: "required",
            ground_size: "required",
            player_name: "required",
            player_number: "required",
            booking_date: "required",
			to_date: "required",
			'time_slot[]': {required: true}
        },
        messages: {
            ground_id: " Please select a Ground Name",
            ground_size: " Please select a Ground Size",
            player_name: " Please enter a Player Name",
            player_number: " Please enter a Player Number",
            booking_date: "Please select a  Booking Date",
			to_date: "Please select a  To Date",
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