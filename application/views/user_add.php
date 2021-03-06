<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/timepicki.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/form-wizard.css">
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
	                                <h2 class="page-header-title"><?php echo get_phrase('Add Owner');?></h2>
	                                <div>
			                            <ul class="breadcrumb">
			                                <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard'); ?>"><i class="ti ti-home"></i></a></li>
			                                <li class="breadcrumb-item"><a href="<?php echo site_url('user_list'); ?>"><?php echo get_phrase('Owner');?></a></li>
			                                <li class="breadcrumb-item active"><a href="<?php echo site_url('user_add'); ?>"><?php echo get_phrase('Add Owner');?></a></li>
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
                                        <h4><?php echo get_phrase('Owner Form');?></h4>
                                        
                                    </div>
                                    <div class="widget-body" >
                            
                                  
                               <?php 
							$failmsg =  $this->uri->segment(2);
							if($failmsg){
							?>
							
							<div class="row">
							
								<div class="col-md-3"></div>
								<div class="col-md-6">
							<div class="alert alert-danger alert-dissmissible fade show" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                            <strong>This! Phone And Email</strong> Already Exists!
                                        </div>
                                        </div>
                                        <div class="col-md-3"></div>
							
                                    </div>
                                    <?php } ?>             
                                            
                <?php  
	
				$attributes = array("class" => "needs-validation","id" => "useradd", "name" => "userform","novalidate");
				echo form_open_multipart("add_user", $attributes);
			
				?>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row d-flex align-items-center mb-5">
                                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Owner Name ');?>*</label>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control" name="user_name" placeholder=<?php echo get_phrase("Enter your User Name");?> required>

                                                    </div>
                                                </div>
                                                <div class="form-group row d-flex align-items-center mb-5">
                                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Email Address ');?>*</label>
                                                    <div class="col-lg-8">
                                                        <div class="input-group">
                                                            <input type="email"  name="user_email" class="form-control" placeholder=<?php echo get_phrase("Enter User Email");?> required>


                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row d-flex align-items-center mb-5">
                                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Mobile Number');?> *</label>
                                                    <div class="col-lg-8">
                                                        <div class="input-group">
                                                        <span class="input-group-addon addon-primary">
                                                            <i class="la la-mobile-phone"></i>
                                                        </span>
                                                            <input type="text" class="form-control" name="user_phone" placeholder=<?php echo get_phrase("Mobile number");?> required >

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row d-flex align-items-center mb-5">
                                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Landline Number');?> </label>
                                                    <div class="col-lg-8">
                                                        <div class="input-group">
                                                        <span class="input-group-addon addon-primary">
                                                            <i class="la la-phone"></i>
                                                        </span>
                                                            <input type="text" class="form-control" name="user_landline" placeholder=<?php echo get_phrase("Landline number");?>  >

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row d-flex align-items-center mb-5">
                                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Address');?> *</label>
                                                    <div class="col-lg-7">
                                                        <textarea type="text" class="form-control" name="user_address" id="user_address" placeholder=<?php echo get_phrase("Address");?> required></textarea>
                                                    </div>
                                                    <div class="col-lg-1">
                                                        <button class="btn btn-warning" type="button" id="mapdiv"><?php echo get_phrase('Map');?></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row d-flex align-items-center mb-5">
                                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Owner Type');?> *</label>
                                                    <div class="col-lg-8">
														<select name="role" class="form-control" required>
															<option value=""><?php echo get_phrase('Select Owner Type');?></option>  
															<option value="2"><?php echo get_phrase('Ground Owner');?></option>
															<option value="3"><?php echo get_phrase('Academic Owner');?></option>
															<option value="4"><?php echo get_phrase('Both');?></option>
														</select>
													</div>
                                                </div>
                                                <div class="form-group row d-flex align-items-center mb-5">
                                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Area');?> *</label>
                                                    <div class="col-lg-8">
                                                        <input type="text" name="user_state" class="form-control" placeholder=<?php echo get_phrase("Area");?> required>

                                                    </div>
                                                </div>

                                                <div class="form-group row d-flex align-items-center mb-5">
                                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('City');?> *</label>
                                                    <div class="col-lg-8">
                                                        <input type="text" name="user_city" class="form-control" placeholder=<?php echo get_phrase("City");?> required>

                                                    </div>
                                                </div>

                                                <div class="form-group row d-flex align-items-center mb-5">
                                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Zip');?> </label>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control" name="user_zip" placeholder=<?php echo get_phrase("Zip");?> >

                                                    </div>
                                                </div>
                                                <div class="form-group row d-flex align-items-center mb-5">
                                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"> <?php echo get_phrase('Image');?> </label>
                                                    <div class="col-lg-8">
                                                        <input type="file" id="user_image" name="user_image" class="form-control" >
<span style="color:red" class="field-validation-valid" data-valmsg-for="user_image" data-valmsg-replace="true"></span>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="em-separator separator-dashed"></div>
                                            
                                            
                                            <div class="text-right">
                                                <button class="btn btn-gradient-01" type="submit"><?php echo get_phrase('Submit Form');?></button>
                                                <button class="btn btn-shadow" type="reset"><?php echo get_phrase('Reset')?></button>
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
        title: 'Ubicaci????n GPS',
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
      $('#user_address').val(responses[0].formatted_address);
	  document.getElementById("map-canvas").style.display = "none";
	  document.getElementById("map-canvas").style.display = "none";
	  jQuery("#user_address").focus();
    } else {
      $('#user_address').val('Cannot determine address at this location.');
    }
  });
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
	<script>
	        //User Company Page Validation End ************************************
        $('#useradd').validate({
          rules: {
            user_name: {
              required: true,
              minlength: 2
            },
            
            user_name: "required",
            user_email: "required",
            user_address: "required",
            user_phone: {
              required: true,
              number: true,
              rangelength: [10, 10]
            },
            user_country: "required",
            user_state: "required",
            role: "required",
            user_city: "required"
          },
          messages: {
            user_name: " Please enter a Ground Owner Name",
            user_email: " Please enter a valid email",
            user_address: "Please enter a valid Address",
		   user_phone:{
			required: "Please Enter a valid Mobile Number ",
			number: "Please Enter (0-9) digits only",
			rangelength: "Please Enter 10 digit Mobile Number",
			},
            user_country: "Please enter a valid Country",
           
            user_state: "Please Enter valid Area",
            role: "Please Enter a Owner Type",
            user_city: "Please Enter Valid City"
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
.error
	   {
	    color: red;
	   }

</style>
    </body>
</html>