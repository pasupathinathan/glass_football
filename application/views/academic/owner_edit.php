<?php
foreach ($data as $store) :

    ?>

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
            top: 50%;
            left: 50%;
            margin: -66px 0 0 -44px;
            background: url('https://storage.googleapis.com/operations_poligone/iconos/Stick01.png');
            background-size: 88px 66px;
            pointer-events: none;
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
                            <h2 class="page-header-title"><?php echo get_phrase('Edit Academic Owner');?></h2>
                            <div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard'); ?>"><i
                                                    class="ti ti-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo site_url('academic_owner_list'); ?>"><?php echo get_phrase('Academic Owner');?></a></li>

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
                                <h4><?php echo get_phrase('Academic Owner Form');?></h4>
                            </div>
                            <div class="widget-body">

                                <?php
                                $attributes = array('class' => 'needs-validation', "name" => "userform", "id" => "useradd", "novalidate");
                                echo form_open_multipart("academic_owner_update", $attributes);
                                $user_id = $this->uri->segment(2);
                                ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Owner Name');?> *</label>
                                            <div class="col-lg-8">
                                                <input type="text" value='<?php echo $store->user_name; ?>'
                                                       class="form-control" name="user_name"
                                                       placeholder=<?php echo get_phrase("Enter your User Name");?> required>
                                                <input type="hidden" class="form-control" name='user_id'
                                                       value="<?php echo $user_id; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Email Address');?> *</label>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <input type="email" name="user_email"
                                                           value='<?php echo $store->user_email; ?>'
                                                           class="form-control" placeholder=<?php echo get_phrase("Enter User Email");?> required>


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
                                                    <input type="text" class="form-control"
                                                           value='<?php echo $store->user_phone; ?>' name="user_phone"
                                                           placeholder=<?php echo get_phrase("Mobile number");?> required >

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
                                                    <input type="text" class="form-control" name="user_landline"
                                                           placeholder=<?php echo get_phrase("Landline number");?>
                                                           value='<?php echo $store->user_landline; ?>'>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Address');?>
                                                *</label>
                                            <div class="col-lg-7">
                                                <textarea type="text" class="form-control" name="user_address"
                                                          id="user_address" placeholder=<?php echo get_phrase("Address");?>
                                                          required><?php echo $store->user_address; ?></textarea>
                                            </div>
                                            <div class="col-lg-1">
                                                <button class="btn btn-warning" type="button" id="mapdiv"><?php echo get_phrase('Map');?></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Area');?>
                                                *</label>
                                            <div class="col-lg-8">
                                                <input type="text" name="user_state"
                                                       value='<?php echo $store->user_area; ?>' class="form-control"
                                                       placeholder=<?php echo get_phrase("Area");?> required>

                                            </div>
                                        </div>

                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('City');?>
                                                *</label>
                                            <div class="col-lg-8">
                                                <input type="text" name="user_city"
                                                       value='<?php echo $store->user_city; ?>' class="form-control"
                                                       placeholder="City" required>

                                            </div>
                                        </div>

                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Zip');?> </label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control"
                                                       value='<?php echo $store->user_zip; ?>' name="user_zip"
                                                       placeholder=<?php echo get_phrase("Zip");?>>

                                            </div>
                                        </div>
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">
                                            <?php echo get_phrase('Image');?> </label>
                                            <div class="col-lg-8">
                                                <input type="file" name="user_image"
                                                       value=' <?php echo $store->user_image; ?>' class="form-control">
                                                <?php if (!empty($store->user_image)) { ?>

                                                    <img src="<?php echo base_url(); ?>/assets/upload/users/<?php echo $store->user_image; ?>"
                                                         class="img-circle" width="80" height="80">
                                                <?php } else { ?>

                                                    <img src="<?php echo base_url(); ?>/assets/upload/man.png"
                                                         class="avatar rounded-circle d-block mx-auto" width="125px"
                                                         height="125px">

                                                <?php } ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="em-separator separator-dashed"></div>
                                <div class="text-right">
                                    <button class="btn btn-gradient-01" type="submit"><?php echo get_phrase('Submit Form');?></button>
                                    <a style="margin-top: 10px;" href="<?php echo base_url('academic_owner_list') ?>" class="btn btn-warning mr-1 mb-2" role="button"><?php echo get_phrase('Back');?></a>
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


    <div id="map-canvas" style="display:none;" tabindex="-1"></div>


<?php endforeach; ?>
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


<script src="https://maps.googleapis.com/maps/api/js?V=3.exp&key=AIzaSyCw8J3McD9VjiMbJ27KI6SNHVZsqc-wW3A
&libraries=visualization&libraries=places"></script>


<script type="text/javascript">
    $("#mapdiv").on("click", function () {
        //alert('1');
        document.getElementById("map-canvas").style.display = "block";
        jQuery("#map-canvas").attr("tabindex", -1).focus();
    });
    //User Company Page Validation End ************************************


    $('#useradd').validate({
        rules: {
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
            user_city: "required"
        },
        messages: {
            user_name: " Please enter a valid User Name",
            user_email: " Please enter a valid email",
            user_address: "Please enter a valid Address",
            user_phone: {
                required: "Please Enter a valid Mobile Number ",
                number: "Please Enter (0-9) digits only",
                rangelength: "Please Enter 10 digit Mobile Number",
            },
            user_country: "Please enter a valid Country",

            user_state: "Please Enter valid Area",
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


<script>
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


        //Retrive the center location
        google.maps.event.addListener(map, "click", function () {
            var lat = map.getCenter().lat();
            var lng = map.getCenter().lng();
            /*  $('#lat').val(lat);
             $('#lng').val(lng); */
            geocodePosition(map.getCenter())
        });


        // Try HTML5 geolocation
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                var pos = new google.maps.LatLng(position.coords.latitude,
                    position.coords.longitude);
                /* document.getElementById('lat').value = position.coords.latitude;
                 document.getElementById('lng').value = position.coords.longitude; */
                var marker = new google.maps.Marker({
                    map: map,
                    position: pos,
                    title: 'Ubicación GPS',
                    icon: 'https://storage.googleapis.com/operations_poligone/iconos/GPS_P06.png',
                    animation: google.maps.Animation.BOUNCE
                });

                map.setZoom(16);
                map.setCenter(pos);
            }, function () {
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
            pixelOffset: new google.maps.Size(0, -30)
        };

        var infowindow = new google.maps.InfoWindow(options);
        map.setCenter(options.position);

    }

    function geocodePosition(pos) {
        geocoder.geocode({
            latLng: pos
        }, function (responses) {
            if (responses && responses.length > 0) {
                $('#user_address').val(responses[0].formatted_address);
                document.getElementById("map-canvas").style.display = "none";
                jQuery("#user_address").focus();
            } else {
                $('#user_address').val('Cannot determine address at this location.');
            }
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>


<style>
    .error {
        color: red;
    }

</style>

</body>
</html>


