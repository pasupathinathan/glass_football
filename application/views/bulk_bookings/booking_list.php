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
                        <h2 class="page-header-title"><?php echo get_phrase('Bulk Booking');?></h2>
                        <div>
                            <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard'); ?>"><i class="ti ti-home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="<?php echo site_url('bulk_booking'); ?>"><?php echo get_phrase('Bulk Booking');?></a></li>
                                    
                                </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="widget has-shadow">
                        <div class="widget-header bordered no-actions d-flex align-items-center">
                            <div class="col-md-10">
                                <h4><?php echo get_phrase('Bulk Booking List');?></h4>
                            </div>
                            <div class="col-md-2">
                                <div class="text-right">
                                    <a style="margin-top: 10px;" href="<?php echo base_url('bulk_booking_add') ?>" class="btn btn-primary mr-1 mb-2" role="button"><?php echo get_phrase('Add Bulk Booking');?></a>
                                </div>
                            </div>
                        </div>
                        <div class="widget-body">
                            <div class="table-responsive">
                                <table id="export-table" class="table mb-0">
                                    <thead>
                                    <tr>
                                        <th><?php echo get_phrase('S.No');?></th>
                                        <th><?php echo get_phrase('Booking Code');?></th>
                                        <th><?php echo get_phrase('Booking Ground');?></th>
                                        <th><?php echo get_phrase('Player Name');?></th>
                                        <th><?php echo get_phrase('From Date');?></th>
										<th><?php echo get_phrase('To Date');?></th>
										<th><?php echo get_phrase('Days');?></th>
										<th><?php echo get_phrase('Timing');?></th>
                                        <th><?php echo get_phrase('Actions');?></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i = 0;
                                    if (!empty($data)) {
                                        foreach ($data as $row) {
                                            $i++;
                                            ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $row->booking_code; ?></td>
                                                <td><?php echo $row->ground_name; ?></td>
                                                <td><?php echo $row->player_name; ?></td>
												<td><?php echo date('d-m-Y',strtotime($row->booking_from)); ?></td>
												<td><?php echo date('d-m-Y',strtotime($row->booking_to)); ?></td>
												<td><?php echo $row->booking_days; ?></td>
												<td><?php echo $row->booking_time; ?></td>
												
                                                <td class="td-actions ">
                                                    
                                                    <a href="<?php echo base_url('bulk_booking_view'); ?>/<?php echo $row->bulk_booking_id; ?>">
                                                        <i class="la la-eye eye"></i></a> 			
												<a href="<?php echo base_url('edit_bulk_booking'); ?>/<?php echo $row->bulk_booking_id; ?>">
                                                        <i class="la la-edit edit"></i></a>
                                                    <a href="#myModal3<?php echo $row->bulk_booking_id; ?>"
                                                       data-toggle="modal"><i class="la la-close delete"></i></a>

                                                    <div id="myModal3<?php echo $row->bulk_booking_id; ?>" class="modal fade"
                                                         tabindex="-1" role="dialog" aria-labelledby="myModalLabel3"
                                                         aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal"
                                                                            aria-hidden="true"></button>
                                                                    <h4 class="modal-title"><?php echo get_phrase('Delete Confirm');?> </h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>
                                                                    <?php echo get_phrase('Are You Sure To Delete...?');?>
                                                                    </p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button class="btn default" data-dismiss="modal"
                                                                            aria-hidden="true">Close
                                                                    </button>
                                                                    <a href="<?php echo site_url('bulk_booking_delete'); ?>/<?php echo $row->bulk_booking_id?>">
                                                                        <button class="btn red"><?php echo get_phrase('Delete');?></button>
                                                                    </a>

                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </td>


                                            </tr>

                                        <?php }
                                    } ?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End Export -->
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
</body>
</html>