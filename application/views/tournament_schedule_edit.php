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
<link rel="stylesheet" type="text/css" media="screen"
      href="">
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
                        <h2 class="page-header-title">Edit Tournament Schedule</h2>
                        <div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard'); ?>"><i class="ti ti-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Schedule</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Page Header -->
            <div class="row flex-row">
                <div class="col-xl-12">
                <?php

                    $attributes = array("class" => "", "id" => "tourscheduleadd", "name" => "tourscheduleform");
                    echo form_open_multipart("update_tournament_schedule", $attributes);

                    ?>
                 
                    <!-- Form -->
                    <div class="widget has-shadow">
                        <div class="widget-header bordered no-actions d-flex align-items-center">
                            <h4>Tournament Schedule Form</h4>
                        </div>
						
                        <div class="widget-body">

                            
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Tournament
                                            *</label>
                                        <div class="col-lg-8">
                                            <input type="hidden" name="tourn_match_id" value="<?php echo $store->tourn_match_id ?>">
                                            <select name="tour_id" class="form-control" id="tour_id">
                                                <option value="">Select Tournament Name</option>
                                                 <?php
                                                if (!empty($data1)) {
                                                    foreach ($data1 as $row) {
                                                        ?>
                                                        <option value="<?php echo $row->tour_id; ?>" <?php if($store->tour_id == $row->tour_id)  { echo "selected";} ?>><?php echo $row->tour_name; ?></option>
                                                    <?php }
                                                } ?>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                            
                             <div id="education_fields"></div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Team A
                                            *</label>
                                        <div class="col-lg-8">
                                            <div class="input-group">
                                                <select name="team_a" class="form-control team_a_options" id="team_a" required>
                                                   <option value="<?php echo $store->team_id1 ?>"><?php echo $store->team_name1 ?></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">
                                            Groups *</label>
                                        <div class="col-lg-8">
                                            <div class="input-group">

                                               <input type="text" name="groups" class="form-control"
                                                       value="<?php echo $store->groups ?>" placeholder="Enter a Groups">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">
                                            Ground Name *</label>
                                        <div class="col-lg-8">
                                            <select name="ground_id" class="form-control ground_id_options" id="ground_id_1" required>
                                                <option value="">Select Ground Name</option>
                                               <?php
                                                if (!empty($data2)) {
                                                    foreach ($data2 as $row) {
                                                        ?>
                                                        <option value="<?php echo $row->ground_id; ?>" <?php if($store->ground_id == $row->ground_id)  { echo "selected";} ?>><?php echo $row->ground_name; ?></option>
                                                    <?php }
                                                } ?>

                                            </select>
                                        </div>
                                    </div>
									
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">
                                            Date *</label>
                                        <div class="col-lg-8">
                                            <input type="date" name="date" id="booking_date_1" class="form-control booking_date_options" value="<?php echo $store->date ?>"
                                                   placeholder="MM/DD/YYYY" required>
                                        </div>
                                    </div>
									
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Team B
                                            *</label>
                                        <div class="col-lg-8">
                                            <select name="team_b" class="form-control team_b_options" id="team_b" required>
                                                <option value="<?php echo $store->team_id2 ?>"><?php echo $store->team_name2 ?></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">
                                            Match No *</label>
                                        <div class="col-lg-8">
                                            <div class="input-group">
                                                <input type="text" value="<?php echo $store->match_number ?>" name="match_number" class="form-control" placeholder="Enter a Match Number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">
                                            Ground Size *</label>
                                            <?php                               
                                     $getlist = $this->football_model->get_ground_size_based_on_ground_id($store->ground_id);                          
                                    ?>
                                        <div class="col-lg-8">
                                            <input type="hidden" name="booking_id" id="booking_id" class="form-control" value='<?php echo $store->booking_id; ?>'/>
                                            <select class="form-control ground_size_options" id="ground_size_1" name="ground_size">
                                                <?php
                                                    if (!empty($getlist)) {
                                                        foreach ($getlist as $row) {
                                                        ?>
                                                        <option value="<?php echo $row->id; ?>" <?php if($store->ground_size == $row->id){ echo 'selected'; } ?>><?php echo $row->size; ?></option>
                                                    <?php }
                                                } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Time</label>
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input style="width: 160%;" id="time" name="time" 
													value="<?php $date = date("H:i", strtotime($store->time)); echo $date; ?>"
													 type="time" class="form-control" placeholder="Enter a Match Time"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							
							<div class="row">
								<div class="col-md-3"></div>
								<div class="col-md-6" style="text-align:center;">
								<label style="font-size:18px;color:darkblue">Match Status</label>
								
								<select style="text-align:center;" class="form-control match_status" id="match_status" name="match_status">            
                                  <option value="1" <?php if($store->match_status == 1){ echo 'selected'; } ?>>Completed</option>
                                  <option value="0" <?php if($store->match_status == 0){ echo 'selected'; } ?>>Not Completed</option>       
                                 </select>
								 
								</div>
								<div class="col-md-3"></div>
							</div><br>
							<div id="hide1">
							<div class="row">
							<div class="col-md-6" style="text-align:center;">
							<?php if($store->team_name1 == ""){?>
							<label style="font-size:18px;color:red">Team A </label>
							<?php } else { ?>
							<label style="font-size:18px;color:red">Team A : <?php echo $store->team_name1; ?></label>
							<?php }  ?>
							</div>
							<div class="col-md-6" style="text-align:center;">
							<?php if($store->team_name1 == ""){?>
							<label style="font-size:18px;color:red">Team B </label>
							<?php } else { ?>
							<label style="font-size:18px;color:red">Team B : <?php echo $store->team_name2; ?></label>
							<?php }  ?>
							</div>
							</div>
							
							<div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Points
                                            </label>
                                        <div class="col-lg-8">
                                            <div class="input-group">
												<?php if(empty($team1_data['points'])){?>
                                                <input required type="number" name="teama_points" class="form-control"
                                                 placeholder="Enter a Team A points">
												<?php } else { ?>
												<input required type="number" name="teama_points" class="form-control"
                                                 value="<?php echo $team1_data['points'] ?>" placeholder="Enter a Team A points">
												<?php } ?>
										   </div>
                                        </div>
                                    </div>
									 <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Status
                                            </label>
                                        <div class="col-lg-8">
                                            <div class="input-group">
                                                <select name="teama_status" required class="form-control teama_status" id="teama_status">
												   <option value="">Select</option>                                                  
												   <?php if(empty($team1_data)){?>
												   <option value="1">Win</option>
												   <option value="2">Loss</option>
												   <option value="3">Tie</option>
													<?php } else { ?>
													<option value="1" <?php if($team1_data['wins'] == 1){ echo 'selected'; } ?>>Win</option>
												   <option value="2" <?php if($team1_data['loss'] == 1){ echo 'selected'; } ?>>Loss</option>
												   <option value="3" <?php if($team1_data['tie'] == 1){ echo 'selected'; } ?>>Tie</option>
													<?php } ?>
												</select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">
                                            Goals Scored </label>
                                        <div class="col-lg-8">
                                            <div class="input-group">
												<?php if(empty($team1_data['goals_scored'])){?>
												<input type="number" required name="teama_goals_scored" class="form-control"
                                                        placeholder="Enter a Team A Goals Scored">
												<?php } else { ?>
												<input type="number" required name="teama_goals_scored" class="form-control"
                                                        value="<?php echo $team1_data['goals_scored'] ?>" placeholder="Enter a Team A Goals Scored">
												<?php }?>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Points
                                            </label>
                                        <div class="col-lg-8">
                                            <div class="input-group">
                                                <?php if(empty($team2_data['points'])){?>
												<input required type="number" name="teamb_points" class="form-control"
                                                       placeholder="Enter a Team B points">
												<?php } else { ?>
												<input required type="number" name="teamb_points" class="form-control"
                                                       value="<?php echo $team2_data['points'] ?>" placeholder="Enter a Team B points">
												<?php } ?>
                                            </div>
                                        </div>
                                    </div>
									<div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Status
                                            </label>
                                        <div class="col-lg-8">
                                            <div class="input-group">
                                                <select name="teamb_status" required class="form-control teamb_status" id="teamb_status">
                                                   <option value="">Select</option>
												    <?php if(empty($team2_data)){?>
												   <option value="1">Win</option>
												   <option value="2">Loss</option>
												   <option value="3">Tie</option>
													<?php } else { ?>
													<option value="1" <?php if($team2_data['wins'] == 1){ echo 'selected'; } ?>>Win</option>
												   <option value="2" <?php if($team2_data['loss'] == 1){ echo 'selected'; } ?>>Loss</option>
												   <option value="3" <?php if($team2_data['tie'] == 1){ echo 'selected'; } ?>>Tie</option>
													<?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">
                                            Goals Scored </label>
                                        <div class="col-lg-8">
                                            <div class="input-group">
											<?php if(empty($team2_data['goals_scored'])){?>
											<input required type="number" name="teamb_goals_scored" class="form-control"
                                                       placeholder="Enter a Team B Goals Scored">
											<?php } else { ?>
                                               <input required type="number" name="teamb_goals_scored" class="form-control"
                                                       value="<?php echo $team2_data['goals_scored'] ?>" placeholder="Enter a Team B Goals Scored">
                                            <?php } ?> 
											</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							
                           </div>
						   <div class="em-separator separator-dashed"></div>
                            <div class="text-right">
                                <button class="btn btn-gradient-01" type="submit">Submit Form</button>
                                <a style="margin-top: 10px;" href="<?php echo base_url('booking_tournament_list') ?>" class="btn btn-warning mr-1 mb-2" role="button">Back</a>
                            </div>
                           
                            </form>
                        </div>
                    </div>
                    <!-- End Form -->
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
<script src="<?php echo base_url(); ?>assets/js/timepicki.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/js/base/core.min.js"></script>
<!-- End Vendor Js -->
<!-- Begin Page Vendor Js -->
<script src="<?php echo base_url(); ?>assets/vendors/js/nicescroll/nicescroll.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/js/app/app.min.js"></script>

<script src="<?php echo base_url() ?>assets/js/jquery.validate.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>


</body>
<script type="text/javascript">
    
    function getDayOfWeek(date) {
      var dayOfWeek = new Date(date).getDay();    
      return isNaN(dayOfWeek) ? null : ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'][dayOfWeek];
    }
	
	/* <?php if($store->match_status == 1){ ?>
	    $('#match_status').attr('disabled', 'disabled'); //Disable
		$('#hide1').css('display','none');
	<?php } else { ?>
		$('#hide1').css('display','none');
	<?php } ?> */
	
	 $(".match_status").on("change", function(){
        var match_status =  $('#match_status').val();
		if(match_status == 1){
			$('#hide1').css('display','block');
		}else{
			$('#hide1').css('display','none');
		}
	 });
    
    $(".booking_date_options").on("change", function(){
        var dateval =  $('#booking_date_1').val();
        var dayOfWeek = getDayOfWeek(dateval);
        var ground_id = $('#ground_id_1').val();
        var ground_size = $('#ground_size_1').val();
        var booking_type = 'edit';
        var booking_time_slot = '30';
        //alert(ground_size);
        
        //var teamVal = $(this).attr('id');
        if(ground_id == ''){
            alert('Please Select Ground Name');
            $('#booking_date_1').val('');
            $('#ground_id_1').focus();
            return false;
        }else if(ground_size == 'Select'){
            alert('Please Select Ground Size Name');
            $('#booking_date_1').val('');
            $('#ground_size_1').focus();
            return false;
        }else{
            $.ajax({
                'type': 'POST',
                'url' : '<?php echo base_url("get_booking_hours") ?>',
                data:{'dayOfWeek':dayOfWeek,'dateval':dateval,'ground_id':ground_id,'booking_time_slot':booking_time_slot,'ground_size':ground_size,'booking_type':booking_type,'rid':'1'},
                success:function(data) {
                    //alert(data);
                    $("#hourscontainer_1").html(data);
                }
            });
        }       
    });
    
    
    function booking_time_fields(rid) {
        var dateval =  $('#booking_date_'+rid).val();
        var dayOfWeek = getDayOfWeek(dateval);
        var ground_id = $('#ground_id_'+rid).val();
        var ground_size = $('#ground_size_'+rid).val();
        var booking_type = 'add';
        var booking_time_slot = '30';
        //alert(ground_size);

        //var teamVal = $(this).attr('id');
        if(ground_id == ''){
            alert('Please Select Ground Name');
            $('#booking_date_'+rid).val('');
            $('#ground_id_'+rid).focus();
            return false;
        }else if(ground_size == 'Select'){
            alert('Please Select Ground Size Name');
            $('#booking_date_'+rid).val('');
            $('#ground_size_'+rid).focus();
            return false;
        }else{
            $.ajax({
                'type': 'POST',
                'url' : '<?php echo base_url("get_booking_hours") ?>',
                data:{'dayOfWeek':dayOfWeek,'dateval':dateval,'ground_id':ground_id,'booking_time_slot':booking_time_slot,'ground_size':ground_size,'booking_type':booking_type,'rid':rid},
                success:function(data) {
                    //alert(data);
                    $("#hourscontainer_"+rid).html(data);
                }
            });
        }
   }

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
        var ground_id = $('#ground_id_1').val();
        var ground_size = $('#ground_size_1').val();
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
                    $("#hourscontainer_1").html(data);
                    var amount = $('#booking_amount').val();
                    var slot = $('#mins_booking_slot').val();
                    var min_am = Math.round(parseFloat(amount/slot));
                    $('#time_slot_amount').val(min_am);
                    $("#hour_amount").text(min_am * 2);
                    
                    
                }
            });
        }
        
        
        
    });

</script>
<script>

 $('.ground_id_options').change(function(){
        var ground_id = $(this).val();
        $.ajax({
            'type': 'POST',
            'url' : '<?php echo base_url("get_ground_size") ?>',
            data:{'ground_id':ground_id},
            success:function(data) {
                console.log(data);
                $('#ground_size_1').empty();
                $('#ground_size_1').append($('<option>').text("Select"));
                $.each(JSON.parse(data), function(i, obj){
                    $('#ground_size_1').append($('<option>').text(obj.size).attr('value', obj.id));
                });
            }

        });
    });
    
    
    function ground_size_fields(rid) {
        var ground_id = $("#ground_id_"+rid).val();
        $.ajax({
            'type': 'POST',
            'url' : '<?php echo base_url("get_ground_size") ?>',
            data:{'ground_id':ground_id},
            success:function(data) {
                console.log(data);
                $('#ground_size_'+rid).empty();
                $('#ground_size_'+rid).append($('<option>').text("Select"));
                $.each(JSON.parse(data), function(i, obj){
                    $('#ground_size_'+rid).append($('<option>').text(obj.size).attr('value', obj.id));
                });
            }

        });
   }
    
</script>
<!-- <script>
var room = 1;
function education_fields() {
      $('#tour_id').val('');
    room++;
    var objTo = document.getElementById('education_fields')
    var divtest = document.createElement("div");
    divtest.setAttribute("class", "form-group removeclass"+room);
    var rdiv = 'removeclass'+room;
    divtest.innerHTML = ' <div class="row"> <div class="col-md-6"><div class="form-group row d-flex align-items-center mb-5"><label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Team A*</label><div class="col-lg-8"><div class="input-group">  <select name="team_a[]" class="form-control team_a_options" id="team_a" required> <option value="">Select Team A Name</option>  </select></div></div></div><div class="form-group row d-flex align-items-center mb-5"><label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Groups *</label><div class="col-lg-8"><div class="input-group">  <input type="text" required name="groups[]" class="form-control" placeholder="Enter a Groups"></div></div></div><div class="form-group row d-flex align-items-center mb-5"><label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Ground Name *</label><div class="col-lg-8"><select name="ground_id[]" class="form-control" id="ground_id_'+ room +'" required onchange="ground_size_fields('+ room +');">  <option value="">Select Ground Name</option>  <?php  if (!empty($data2)) { foreach ($data2 as $row) {?><option value="<?php echo $row->ground_id; ?>"><?php echo $row->ground_name; ?></option> <?php }  } ?></select></div></div> <div class="form-group row d-flex align-items-center mb-5"><label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Date *</label><div class="col-lg-8"><input type="date" id="booking_date_'+ room +'" name="date[]" class="form-control" placeholder="MM/DD/YYYY" onchange="booking_time_fields('+ room +');" required></div></div></div> <div class="col-md-6"><div class="form-group row d-flex align-items-center mb-5"><label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Team B*</label><div class="col-lg-8"><select name="team_b[]" required class="form-control team_b_options" id="team_b">  <option value="">Select Team B Name</option></select></div></div><div class="form-group row d-flex align-items-center mb-5"><label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Match No *</label><div class="col-lg-8"><div class="input-group">  <input type="text" name="match_number[]" required class="form-control" placeholder="Enter a Match Number"></div></div></div><div class="form-group row d-flex align-items-center mb-5"> <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">     Ground Size *</label> <div class="col-lg-8">     <select class="form-control ground_size_options" id="ground_size_'+ room +'" name="ground_size[]"><option value="">Select Ground Size</option></select> </div> </div> <div class="form-group row d-flex align-items-center mb-5"><label class="col-lg-4 form-control-label d-flex justify-content-lg-end"></label><div class="col-lg-8"><button class="btn btn-gradient-01" type="button"   onclick="remove_education_fields('+ room +');"> Remove </button></div></div></div><div class="row" id="hourscontainer_'+ room +'"></div><div class="em-separator separator-dashed"></div></div><div class="em-separator separator-dashed"></div>';
    
    objTo.appendChild(divtest)
}
   function remove_education_fields(rid) {
       $('.removeclass'+rid).remove();
   }
</script> -->

<script type="text/javascript">
    $('#tourscheduleadd').validate({
        rules: {
            tour_id: "required",
            team_a: "required",
            groups: "required",
            time: "required",
            match_number: "required",
            team_b: "required",
            date: "required",
            ground_id: "required"
        },
        messages: {
            tour_id: " Please Enter a Tournament Name",
            team_a: " Please Enter a Team A",
            groups: "Please Enter a  Groups or Levels",
            time: "Please Enter a Time",
            match_number: "Please Enter a Match Number",
            team_b: "Please Enter a Team B",
            date: "Please Enter a Date",
            ground_id: "Please Enter a Ground Name",
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
<script>
    $('#tour_id').change(function(){
        var tour_id = $(this).val();
        $.ajax({
            'type': 'POST',
            'url' : '<?php echo base_url("get_team_names") ?>',
            data:{'tour_id':tour_id},
            success:function(data) {
                console.log(data);
                $('.team_a_options').empty();
                $('.team_b_options').empty();
                $('.team_a_options').append($('<option>').text("Select"));
                $('.team_b_options').append($('<option>').text("Select"));
                $.each(JSON.parse(data), function(i, obj){
                    $('.team_a_options').append($('<option>').text(obj.team_name).attr('value', obj.t_id));
                    $('.team_b_options').append($('<option>').text(obj.team_name).attr('value', obj.t_id));
                });
            }

        });
    });
</script>
<script type='text/javascript' >
    $('.matchtime').timepicki();
</script>

</html>
<?php endforeach; ?>