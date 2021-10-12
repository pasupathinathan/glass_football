<!-- End Header -->
<!-- Begin Page Content -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/timepicki.css">


<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/form-wizard.css">
<link rel="stylesheet" type="text/css" media="screen"
      href="">
<style>
      html, body, #map-canvas {
        height: 100%;
        width: 100%;
        margin: 0px;        
        padding: 0px
      }
 #map-canvas {
    position: relative;
}

#map-canvas:after {
    width: 66px;
    height: 66px;
    display: block;
    content: ' ';
    position: absolute;
    top: 50%; left: 50%;
    margin: -66px 0 0 -44px;
    background: url('https://storage.googleapis.com/operations_poligone/iconos/Stick01.png');
    background-size: 88px 66px; 
    pointer-events: none; 
}
      
    </style>
            
<style type="text/css">
    .nav-tabs {
        border-bottom: none !important;
    }

    .table thead th {
        vertical-align: bottom;
        border-bottom: 2px solid #dee2e6 !important;
    }

    .table td, .table th {
        padding: .75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6 !important;
    }

    .timepicker_wrap {
        top: 50px !important;
    }

    input[type="file"] {
        display: block;
    }

    .imageThumb {
        width: 260px !important;
        height: 205px;
        /* border: 2px solid;*/
        padding: 1px;
    }

    .pip {
        display: inline-block;
        margin: 3px;
        /* width: 300px;
         height: 300px;*/
    }

    .remove {
        display: block;
        background: #444;
        /*border: 1px solid black;*/
        color: white;
        text-align: center;
        cursor: pointer;
    }

    .remove:hover {
        background: white;
        color: black;
    }

    .balaji {
        width: 800px;

    }

    .image-upload > input {
        display: none;
    }

    .nex_close_pic {
        font-size: 16px;
        position: relative;
        top: -20px;
        color: #000;
    }
	
	.input-error { 
	border-color: #f4848e !important;
	}


</style>
<div class="page-content d-flex align-items-stretch">
    <?php include('inc/admin_sidebar.php') ?>
    <!-- End Left Sidebar -->
    <div class="content-inner">
        <div class="container-fluid">
            <!-- Begin Page Header-->
            <div class="row">
                <div class="page-header">
                    <div class="d-flex align-items-center">
                        <h2 class="page-header-title"><?php echo get_phrase('Add Ground');?></h2>
                        <div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard'); ?>"><i
                                                class="ti ti-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="<?php echo site_url('ground_list'); ?>"><?php echo get_phrase('Grounds');?></a>
                                </li>
                                <li class="breadcrumb-item active"><a href="<?php echo site_url('ground_add'); ?>"><?php echo get_phrase('Add Ground');?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Page Header -->
           
            <div class="col-md-12 col-sm-12 col-lg-12 animated fadeInRight ddelay-15s">
                    <div class="form-wizard form-header-classic box-shadow">
					<form role="form" action="add_ground" method="post" name="groundform" id="groundadd" enctype="multipart/form-data" >
                     <!-- Form progress -->
                     <div class="form-wizard-steps form-wizard-tolal-steps-3">
                        <div class="form-wizard-progress">
                           <div class="form-wizard-progress-line" data-now-value="33" data-number-of-steps="3" style="width: 33%;"></div>
                        </div>
                        <!-- Step 1 -->
                        <div class="form-wizard-step active">
                           <div class="form-wizard-step-icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                           <p>Ground Info</p>
                        </div>

                        <div class="form-wizard-step">
                           <div class="form-wizard-step-icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                          <p>Working hours </p>
                        </div>
                        <!-- Step 3 -->
                        <!-- Step 4 -->
						<div class="form-wizard-step">
                           <div class="form-wizard-step-icon"><i class="fa fa-briefcase" aria-hidden="true"></i></div>
                           <p>Add Gallery</p>
                        </div>

                     </div>
                     <!-- Form progress -->
                     <!-- Form Step 1 -->
                     <fieldset>
                        <!-- Progress Bar -->
                      
                        <div class="row">
                           <div class="col-lg-12 py-2">
                             
                           </div>
                        </div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group row d-flex align-items-center mb-5">
										<label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Ground Name');?> *</label>
										<div class="col-lg-8">
											<input type="text" class="form-control required" name="ground_name"
												   placeholder=<?php echo get_phrase("Enter your Ground name");?> required>
										</div>
									</div>
									<div class="form-group row d-flex align-items-center mb-5">
										<label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Ground Email');?> *</label>
										<div class="col-lg-8">
											<div class="input-group">
												<input type="email" class="form-control required" name="ground_email"
													   placeholder=<?php echo get_phrase("Enter Team email");?> required>
											</div>
										</div>
									</div>

									<div class="form-group row d-flex align-items-center mb-5">
										<label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Location');?>
											*
										</label>
										<div class="col-lg-6">
									<textarea class="form-control required" name="ground_location"
											  id="ground_location" placeholder=<?php echo get_phrase("Enter Location");?> required></textarea>
										</div>
										<div class="col-lg-2">
											<button class="btn btn-warning" type="button" id="mapdiv"><?php echo get_phrase('Map');?></button>
										</div>
									</div>

                                    <div class="form-group row d-flex align-items-center mb-5">
										<label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Description');?>
											*
										</label>
										<div class="col-lg-6">
									<textarea class="form-control required" name="ground_description"
											  id="ground_description" placeholder=<?php echo get_phrase("Enter Description");?> required></textarea>
										</div>
									</div>

									<div class="form-group row d-flex align-items-center mb-5">
										<label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('City');?> *
										</label>
										<div class="col-lg-8">
											<select name="ground_city" class="form-control required" required>
												<option value=""><?php echo get_phrase('Select City');?></option>
												<?php
												if (!empty($data5)) {
													foreach ($data5 as $row5) {
														?>
														<option value="<?php echo $row5; ?>">
															<?php echo $row5; ?>
														</option>
													<?php }
												} ?>
											</select>
										</div>
									</div>
									<!--<div class="form-group row d-flex align-items-center mb-5">-->
									<!--	<label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('City');?>-->
									<!--		*-->
									<!--	</label>-->
									<!--	<div class="col-lg-8">-->
									<!--		<input type="text" class="form-control required" name="ground_city"-->
									<!--			   placeholder=<?php echo get_phrase("Enter City");?> required>-->
									<!--	</div>-->
									<!--</div>-->
									<div class="form-group row d-flex align-items-center mb-5">
										<label class="col-lg-4 form-control-label d-flex justify-content-lg-end">
											<?php echo get_phrase('Contact Number');?>*</label>
										<div class="col-lg-8">
											<div class="input-group">
										<span class="input-group-addon addon-primary">
											<i class="la la-phone"></i>
										</span>
												<input type="number" class="form-control required" name="ground_phone"
													   placeholder=<?php echo get_phrase("Enter Phone number");?> required>
											</div>
										</div>
									</div>
									<!--<div class="form-group row d-flex align-items-center mb-5">-->
									<!--	<label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('In Year Of Active');?> *</label>-->
									<!--	<div class="col-lg-8">-->
									<!--		<input type="number" class="form-control required" id="datetime" name="ground_year"-->
									<!--			   placeholder=<?php echo get_phrase("YYYY");?> required>-->
									<!--	</div>-->
									<!--</div>-->
									<!--<div class="form-group row d-flex align-items-center mb-5">-->
									<!--	<label class="col-lg-4 form-control-label d-flex justify-content-lg-end">-->
									<!--		<?php echo get_phrase('Description');?></label>-->
									<!--	<div class="col-lg-8">-->
									<!--<textarea type="text" class="form-control " name="ground_desc"-->
									<!--		  placeholder=<?php echo get_phrase("Enter your Ground Description");?> ></textarea>-->
									<!--	</div>-->
									<!--</div>-->
									<?php if ($this->session->userdata['user_role'] == 1) { ?>
										<div class="form-group row d-flex align-items-center mb-5">
											<label class="col-lg-4 form-control-label d-flex justify-content-lg-end">
												<?php echo get_phrase('SL Commission ');?>(%) </label>
											<div class="col-lg-8">
												<input type="number" min="0" class="form-control" name="sl_commission"
													   placeholder=<?php echo get_phrase("Enter SL Commission Rate");?> />
											</div>
										</div>
									<?php } ?>
								</div>
								<div class="col-md-6">
									<?php if ($this->session->userdata['user_role'] == 1) { ?>
										<div class="form-group row d-flex align-items-center mb-5">
											<label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Ground Owner');?> *
											</label>
											<div class="col-lg-8">
												<select name="ground_owner_id" class="form-control required" required>
													<option value=""><?php echo get_phrase('Select Ground Owner');?></option>
													<?php
													if (!empty($data4)) {
														foreach ($data4 as $row4) {
															?>
															<option value="<?php echo $row4->user_id; ?>">
																<?php echo $row4->user_name; ?>
															</option>
														<?php }
													} ?>
												</select>
											</div>
										</div>
									<?php } ?>
									<div class="form-group row d-flex align-items-center mb-5">
										<label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Latitude');?>
											
										</label>
										<div class="col-lg-8">
											<input type="text" class="form-control" name="ground_lat"
												   id="ground_lat" required readonly>
										</div>
									</div>
									<div class="form-group row d-flex align-items-center mb-5">
										<label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Longitude');?>
											
										</label>
										<div class="col-lg-8">
											<input type="text" class="form-control " name="ground_long"
												   id="ground_long" required readonly>
										</div>
									</div>

									<div class="form-group row mb-5">
										<label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Availablity');?>
											</label>
										<div class="col-lg-3">
											<div class="custom-control custom-radio styled-radio mb-4">
												<input class="custom-control-input" type="radio"
													   value="available" name="ground_availablity" id="opt-01"
													   required>
												<label class="custom-control-descfeedback" for="opt-01"><?php echo get_phrase('Available');?></label>

											</div>
										</div>
										<div class="col-lg-3">
											<div class="custom-control custom-radio styled-radio mb-3">
												<input class="custom-control-input" type="radio"
													   value="unavailable" name="ground_availablity" id="opt-02"
													   required>
												<label class="custom-control-descfeedback" for="opt-02"><?php echo get_phrase('UnAvailable');?></label>

											</div>
										</div>
									</div>
									<div class="form-group row d-flex align-items-center mb-5">
										<label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Ground Facilities');?> </label>

										<div class="col-lg-8">
											<?php foreach ($data3 as $row): { ?>
												<div class="form-check">
													<input type="checkbox"  name="ground_facility[]"
														   id="ground_facility"
														   value="<?php echo $row->facility_id; ?>"
														   style="margin:10px"/><span
															class="label-text"><?php echo $row->facility_name; ?></span><br>
												</div>
											<?php } ?>
											<?php endforeach; ?>
										</div>
									</div>
								</div>

							</div>
                        <div class="form-wizard-buttons">
                            <button type="button" class="btn btn-next open1 button-14" name="button1" >Next</button>
                        </div>
                   
                     </fieldset>
                  
                     <fieldset>
                        <!-- Progress Bar -->
                       
                        <!-- Progress Bar -->
                        <div class="widget-body">
							<table class="table table-striped">
								<thead>
								<tr>
									<th scope="col"><?php echo get_phrase('Day of Week');?></th>
									<th scope="col"><?php echo get_phrase('Is open');?></th>
									<th scope="col"><?php echo get_phrase('Open Time');?></th>
									<th scope="col"><?php echo get_phrase('Close Time');?></th>
								</tr>
								</thead>
								<tbody>
								<?php
								for ($i = 1; $i <= 7; $i++) {
									if ($i == 1) {
										$day_val = 'Sunday';
										$day = 'sun';
									} else if ($i == 2) {
										$day_val = 'Monday';
										$day = 'mon';
									} else if ($i == 3) {
										$day_val = 'Tuesday';
										$day = 'tue';
									} else if ($i == 4) {
										$day_val = 'Wednesday';
										$day = 'wed';
									} else if ($i == 5) {
										$day_val = 'Thursday';
										$day = 'thu';
									} else if ($i == 6) {
										$day_val = 'Friday';
										$day = 'fri';
									} else if ($i == 7) {
										$day_val = 'Saturday';
										$day = 'sat';
									}
									?>
									<tr>
										<td scope="row"><?php echo $day_val ?></td>
										<td>
											<input type="checkbox" name="myCheck_<?php echo $day ?>" value="on"
												   onclick="checkOpen('<?php echo $day ?>')"
												   id="myCheck_<?php echo $day ?>"> Open
											<input type="hidden" id="grd_day_<?php echo $day ?>"
												   name="grd_day_<?php echo $day ?>"
												   value="<?php echo $day_val ?>"/>
											<br>
										</td>
										<td>
											<input id="open_time_<?php echo $day ?>"
												   name="open_time_<?php echo $day ?>" type="text"
												   class="form-control  timepicker timepicker-no-seconds" onclick="checkTime('<?php echo $day ?>')"
												   disabled/>
										</td>

										<td>
											<input id="close_time_<?php echo $day ?>"
												   name="close_time_<?php echo $day ?>" type="text"
												   class="form-control timepicker timepicker-no-seconds " onchange="checkTime('<?php echo $day ?>')"
												   disabled/>
										</td>

									</tr>
								<?php } ?>
								</tbody>
							</table>
						</div>
                        <br/>
                        <div class="form-wizard-buttons">
                           <button type="button" class="btn btn-previous back3">Previous</button>
                           <button type="button" class="btn btn-next open3">Next</button>
                        </div>
                     </fieldset>


                     <fieldset>
                     <!-- Progress Bar -->
                
                     <!-- Progress Bar -->
                      <br>
                      <div id="menu2" class="container tab-pane"><br>
						<div class="widget has-shadow">
							<div class="image-upload">
								<label for="files">
									<img src="<?php echo base_url(); ?>assets/img/addnew.png"
										 height="205px" width="260px"
										 height="100px" style="cursor: pointer;"/>
								</label>
								<input type="file" class="files1" id="files" name="ground_picture[]" multiple/>
                                <span style="color:red" class="field-validation-valid" data-valmsg-for="files" data-valmsg-replace="true"></span>

							</div>
						</div>
					</div>
					<div class="form-wizard-buttons">
                     <button type="button" class="btn btn-previous back4">Previous</button>
                     <button type="submit" class="btn btn-next open4" >Submit</button>
                     </div>
                    
                     </fieldset>
                  </form>
                  </div>
                
                    <!-- End Form -->
                </div>
            
        </div>
        <!-- End Container -->
        <!-- Begin Page Footer-->

    </div>
</div>
<!-- End Page Content -->
</div>

<input id="pac-input" class="controls" type="text" placeholder="Search Box" style="margin-left:40%;margin-top:8%;display:none">
<div id="map-canvas" style="display:none;" tabindex="-1">

<!-- Begin Vendor Js -->
<script src="<?php echo base_url(); ?>assets/vendors/js/base/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/js/base/core.min.js"></script>
<!-- End Vendor Js -->
<!-- Begin Page Vendor Js -->

<script src="<?php echo base_url(); ?>assets/js/timepicki.js"></script>

<script src="<?php echo base_url(); ?>assets/js/form-wizard.js"></script>

<script src="<?php echo base_url(); ?>assets/vendors/js/nicescroll/nicescroll.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/js/app/app.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
<!-- End Page Vendor Js -->
<!-- Begin Page Snippets -->
<script src="<?php echo base_url(); ?>assets/js/components/validation/validation.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/components/datepicker/datepicker.js"></script>
<!-- End Page Snippets -->

<script src="<?php echo base_url(); ?>assets/js/jquery.validate.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?V=3.exp&key=AIzaSyCw8J3McD9VjiMbJ27KI6SNHVZsqc-wW3A
&libraries=visualization&libraries=places"></script> 


 <script>
/*   function checkTime(val) {
      //alert(val);
	   var start_time =document.getElementById("open_time_" + val).value;
        var end_time = document.getElementById("close_time_" + val).value;
		// alert(end_time);

		var stt = new Date("November 13, 2013 " + start_time);
		stt = stt.getTime();

		var endt = new Date("November 13, 2013 " + end_time);
		endt = endt.getTime();
		
		if(start_time != '' && end_time != ''){
			if(stt > endt) {
				alert("End-time must be bigger then Start-time.");
				document.getElementById("close_time_" + val).value = ''
				return false;
			}
		}
    } */ 
 
 
 
  $("#mapdiv").on("click", function(){
			document.getElementById("map-canvas").style.display = "block";
			document.getElementById("pac-input").style.display = "block";
			jQuery("#map-canvas").attr("tabindex",-1).focus();
	});
	
	
  var map;
var geocoder;

function initialize() {
  geocoder = new google.maps.Geocoder();
  var mapOptions = {
    zoom: 11,
    scrollwheel: true,
    panControl: true,
    zoomControl: true,
    scaleControl: false,
    disableDefaultUI: true,
    center: new google.maps.LatLng(19.038235, -98.219530),
    mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
    }
  };

  map = new google.maps.Map(document.getElementById('map-canvas'),
    mapOptions);
	
	// Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
    
  //Retrive the center location
  google.maps.event.addListener(map, "click", function() {
    var lat = map.getCenter().lat();
    var lng = map.getCenter().lng();
   $('#ground_lat').val(lat);
    $('#ground_long').val(lng); 
    geocodePosition(map.getCenter())
  });


  // Try HTML5 geolocation
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = new google.maps.LatLng(position.coords.latitude,
        position.coords.longitude);
      /* document.getElementById('lat').value = position.coords.latitude;
      document.getElementById('lng').value = position.coords.longitude; */
      var marker = new google.maps.Marker({
        map: map,
        position: pos,
        title: 'Ubicaci��n GPS',
        icon: icon,
        animation: google.maps.Animation.BOUNCE
      });

      map.setZoom(16);
      map.setCenter(pos);
    }, function() {
      handleNoGeolocation(true);
    });
  } else {
    // Browser doesn't support Geolocation
    handleNoGeolocation(false);
  }
}

function handleNoGeolocation(errorFlag) {
  if (errorFlag) {
    var content = 'Turn GPS on';
  } else {
    var content = 'Try with your fingers';
  }

  var options = {
    map: map,
    position: new google.maps.LatLng(19.038235, -98.219530),
    content: content,
    pixelOffset: new google.maps.Size(0, -30),
  };

  var infowindow = new google.maps.InfoWindow(options);
  map.setCenter(options.position);

}

function geocodePosition(pos) {
  geocoder.geocode({
    latLng: pos
  }, function(responses) {
    if (responses && responses.length > 0) {
      $('#ground_location').val(responses[0].formatted_address);
	  document.getElementById("map-canvas").style.display = "none";
	  document.getElementById("map-canvas").style.display = "none";
	  jQuery("#ground_location").focus();
    } else {
      $('#ground_location').val('Cannot determine address at this location.');
    }
  });
}
google.maps.event.addDomListener(window, 'load', initialize);
    </script>

<script>
    $(function () {
        $('.multi-field-wrapper').each(function () {
            var $wrapper = $('.multi-fields', this);
            $(".add-field", $(this)).click(function (e) {
                $('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find('input').val('').focus();
            });
            $('.multi-field .remove-field', $wrapper).click(function () {
                if ($('.multi-field', $wrapper).length > 1)
                    $(this).parent('.multi-field').remove();
            });
        });
    });
	
	
 /*    $(document).ready(function () {
        $("#ground_location").on("change", function (e) {
            var city = $('#ground_location').val();
            $.getJSON("https://maps.googleapis.com/maps/api/geocode/json?address=" + encodeURIComponent(city) + "&key=AIzaSyDIDsi_z-G2dkpIaJrnfwC1xdqucTroN8k", function (val) {
                if (val.results.length) {
                    var location = val.results[0].geometry.location;
                    $('#ground_lat').val(location.lat);
                    $('#ground_long').val(location.lng);
                }
            });
        });
    }); */
</script>


<script type="text/javascript">

    $('#groundadd').validate({
        rules: {
            ground_name: "required",
            ground_email: "required",
            ground_location: "required",
            ground_description: "required",
            ground_city: "required",
            ground_phone: {
                required: true,
                number: true,
                rangelength: [10, 10]
            },
            ground_year: "required",
            ground_picture: "required",
            ground_availablity: "required",
        },
        messages: {
            ground_name: " Please Enter a Ground Name",
            ground_email: " Please Enter a Email",
            ground_location: "Please Enter a  Location",
            ground_city: "Please Enter a City",
            ground_phone: "Please Enter a Contact Number",
            ground_year: "Please Enter a Year",
            ground_picture: "Please Enter a Picture",
            ground_availablity: "Please Enter a Availability",
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

<script type='text/javascript'>
    $('#open_time_sun,#close_time_sun,#open_time_mon,#close_time_mon,#open_time_tue,#close_time_tue,#open_time_wed,#close_time_wed,#open_time_thu,#close_time_thu,#open_time_fri,#close_time_fri,#open_time_sat,#close_time_sat').timepicki();
	
	/* $('#open_time_sun,#open_time_mon,#open_time_tue,#open_time_wed,#open_time_thu,#open_time_fri,#open_time_sat').timepicki({
		start_time: ["00", "00"],
		max_hour_value:12,
		show_meridian:false,
		reset: true
	});
	
		$('#close_time_sun,#close_time_mon,#close_time_tue,#close_time_wed,#close_time_thu,#close_time_fri,#close_time_sat').timepicki({
		start_time: ["13", "00"],
		min_hour_value:13,
		max_hour_value:24,
		show_meridian:false,
		reset: true
	}); */
	$(function() {
    $('.files1').change(function() {
        $(this).removeClass('input-validation-error').next('span').text('');
        if (this.files[0].size > 8388608) {
            $(this).addClass('input-validation-error').
            next('span').text('File size must 8mb or below');
        }
    });
});
</script>


<script>
    $(document).ready(function () {
        $(".nav-tabs a").click(function () {
            $(this).tab('show');
        });
    });
</script>

<script>
    function checkOpen(val) {
        //alert(val);
        if (document.getElementById("myCheck_" + val).checked == true) {
            document.getElementById("open_time_" + val).disabled = false;
            document.getElementById("close_time_" + val).disabled = false;
			$("#open_time_" + val).addClass('required');
			$("#close_time_" + val).addClass('required');
        } else {
			//alert(val);
            document.getElementById("open_time_" + val).disabled = true;
            document.getElementById("close_time_" + val).disabled = true;
			$("#open_time_" + val).removeClass('required');
			$("#close_time_" + val).removeClass('required');
			$("#open_time_" + val).removeClass('input-error');
			$("#close_time_" + val).removeClass('input-error');
        }
    }

</script>

<script type="text/javascript">
    $(document).ready(function () {
        if (window.File && window.FileList && window.FileReader) {
            $("#files").on("change", function (e) {
                var spans = $('.pip');
                spans.hide();
                var files = e.target.files,
                    filesLength = files.length;
                for (var i = 0; i < filesLength; i++) {
                    var f = files[i]
                    var fileReader = new FileReader();
                    fileReader.onload = (function (e) {
                        var file = e.target;
                        $("<span class=\"pip\">" +
                            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" />" +
                            "<br/>" +
                            "</span>").insertAfter("#files");
                        $(".remove").click(function () {
                            $(this).parent(".pip").remove();
                        });

                        // Old code here
                        /*$("<img></img>", {
                         class: "imageThumb",
                         src: e.target.result,
                         title: file.name + " | Click to remove"
                         }).insertAfter("#files").click(function(){$(this).remove();});*/

                    });
                    fileReader.readAsDataURL(f);
                }
            });
        } else {
            alert("Your browser doesn't support to File API");
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