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
                        <h2 class="page-header-title"><?php echo get_phrase('Bookings Calendar');?></h2>
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
            <div class="row">
                <div class="col-xl-12">
                    <!-- Sorting -->
                    <!-- End Sorting -->
                    <!-- Export -->
                    <div class="widget has-shadow">
                        <div class="widget-header bordered no-actions d-flex align-items-center">
                            <div class="col-md-10">
                                <h4><?php echo get_phrase('Bookings Calendar');?></h4>
                            </div>
                        </div>
                        <div class="widget-header bordered no-actions d-flex align-items-center">
                            <div class="col-md-10">
                                <button class="btn btn-gradient-01" style="background:#fb8c00;color:white;cursor:auto;"><?php echo get_phrase('Academic');?></button>
                                <button class="btn btn-gradient-01" style="background:linear-gradient(to right, #114090, #132866);color:white;cursor:auto;"><?php echo get_phrase('Street League');?></button>
                                <button class="btn btn-gradient-01" style="background:#43a047;color:white;cursor:auto;"><?php echo get_phrase('Club');?></button>
                                <button class="btn btn-gradient-01" style="background:#00acc1;color:white;cursor:auto;"><?php echo get_phrase('Tournament');?></button>
                            </div>
                            <div class="col-md-2">
                                <div class="text-right">
                                    <a style="margin-top: 10px;" href="<?php echo base_url('booking_add') ?>" class="btn btn-primary mr-1 mb-2" role="button"><?php echo get_phrase('Add Booking');?></a>
                                </div>
                            </div>
                        </div>
						
                        <div class="widget-body">
                            <div class="row">
							   <div id="calendar"></div>
							 </div>
                        </div>
                    </div>
                    <!-- End Export -->
                </div>
            </div>

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
   
<script src="assets/vendors/js/base/jquery.min.js"></script>
<script src="assets/vendors/js/base/core.min.js"></script>
<!-- End Vendor Js -->
<!-- Begin Page Vendor Js -->
<script src="assets/vendors/js/datatables/datatables.min.js"></script>
<script src="assets/vendors/js/datatables/dataTables.buttons.min.js"></script>
<script src="assets/vendors/js/datatables/jszip.min.js"></script>
<script src="assets/vendors/js/datatables/buttons.html5.min.js"></script>
<script src="assets/vendors/js/datatables/pdfmake.min.js"></script>
<script src="assets/vendors/js/datatables/vfs_fonts.js"></script>
<script src="assets/vendors/js/datatables/buttons.print.min.js"></script>
<script src="assets/vendors/js/nicescroll/nicescroll.min.js"></script>
<script src="assets/vendors/js/app/app.min.js"></script>
<!-- End Page Vendor Js -->
<!-- Begin Page Snippets -->
<script src="assets/js/components/tables/tables.js"></script>
<!-- End Page Snippets -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
 
    <script>
 $(document).ready(function() {
var idval =  <?php echo json_encode($calendor) ?>;;
   var calendar = $('#calendar').fullCalendar({
    editable:false,
	timeFormat: "H:mm",
    header:{
     left:'prev,next today',
     center:'title',
     right:'month,agendaWeek,agendaDay'
    },
	events: idval,
    selectable:true,
	 color: 'yellow',   // an option!
  textColor: 'black',
    selectHelper:true,
	 eventRender: function(event, element) {
        element.attr('title', event.status);
		
    },

   });
  }); 
  </script>
</body>
</html>