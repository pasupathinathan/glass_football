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
                        <h2 class="page-header-title"><?php echo get_phrase('Bookings List');?></h2>
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

            <div class="row">
                <div class="col-xl-12">
                    <div class="widget has-shadow">
                        <div class="widget-header bordered no-actions d-flex align-items-center">
                            <div class="col-md-10">
                                <h4><?php echo get_phrase('Bookings Status List');?></h4>
                            </div>
                            <div class="col-md-2">
                                <div class="text-right">
                                    <a style="margin-top: 10px;" href="<?php echo base_url('booking_add') ?>" class="btn btn-primary mr-1 mb-2" role="button"><?php echo get_phrase('Add Booking');?></a>
                                </div>
                            </div>
                        </div>
                        <div class="widget-body">
                            <div class="table-responsive">
                                <table id="ground_booking" class="table mb-0">
                                    <thead>
                                    <tr>
                                        <th><?php echo get_phrase('Booking Code');?></th>
                                        <th><?php echo get_phrase('Booking Ground');?></th>
                                        <th><?php echo get_phrase('Booking City');?></th>
                                        <th><?php echo get_phrase('Payment Type');?></th>
                                        <th><?php echo get_phrase('Status');?></th>
                                        <th><?php echo get_phrase('Cancel Booking');?></th>
                                        <th><?php echo get_phrase('Actions');?></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                
                                    if (!empty($data)) {
                                        foreach ($data as $row) {
                                    
                                            ?>
                                            <tr>
                                                <td><?php echo $row->booking_code; ?></td>
                                                <td><?php echo $row->ground_name; ?></td>
                                                <td><?php echo $row->ground_city; ?></td>
                                                <td align="center">
                                                    <?php if ($row->booking_paymenttype == 'cash') { ?>
														<span style="font-size: 14px;color:white;" class="badge badge-warning">Cash</span>
													<?php } else { ?>
														<span style="font-size: 14px;" class="badge badge-primary">Card</span>
													<?php } ?>
												</td>
												<td>
													<?php if ($row->payment_status == '1') { ?>
														<button type="button" class="btn btn-success btn-md" style="cursor:auto"><?php echo get_phrase('Paid');?></button>
													<?php } else { ?>
														<button type="button" class="btn btn-danger btn-md" style="cursor:auto"><?php echo get_phrase('Unpaid');?></button>
													<?php } ?>
												</td>
                                                <td>
													 <?php if ($row->booking_approval == 0) { ?>                                                                                                                                                                       
                                                            <button type="button" class="btn btn-warning btn-md change_approval" id="<?php echo $row->booking_id; ?>"
                                                                    data-toggle="modal"
                                                                    data-target="#modal-centered<?php echo $row->booking_id; ?>">
                                                                    <?php echo get_phrase('Cancel');?></button>
                                                       
                                                 
													
                                                    <div id="modal-centered<?php echo $row->booking_id; ?>"
                                                         class="modal fade">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title"> <?php echo get_phrase('Cancel Booking');?></h4>
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal">
                                                                        <span aria-hidden="true">×</span>
                                                                        <span class="sr-only"><?php echo get_phrase('close');?></span>
                                                                    </button>
                                                                </div>
                                                                <?php
                                                                //$attributes = array('class' => '');
                                                                echo form_open_multipart("approval_update");
                                                                // $approval_id=  $this->uri->segment(2);
                                                                ?>
                                                                <div class="modal-body">
                                                                    <input type="hidden" class="booking" id="booking_id" name="booking_id">

                                                                    <label><?php echo get_phrase('Booking Status');?></label>
                                                                    <select name="booking_approval" id="booking_id"
                                                                            class="form-control">
                                                                        <option value="1"><?php echo get_phrase('Cancelled');?></option>

                                                                    </select>
																	<label><?php echo get_phrase('Reason');?></label>
                                                                    <input type="text" required name="cancel_reason" id="cancel_reason"
                                                                            class="form-control" />
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-shadow"
                                                                                data-dismiss="modal"><?php echo get_phrase('Close');?>
                                                                        </button>

                                                                        <a href="">
                                                                            <button class="btn btn-primary "><?php echo get_phrase('Save');?>
                                                                            </button>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php } elseif ($row->booking_approval == 1) { ?>
                                                        <button type="button" class="btn btn-danger btn-md" style="cursor:auto"><?php echo get_phrase('Cancelled');?></button>
                                                    <?php } ?>
                                                     
                                                </td>
                                                
												
                                                <td class="td-actions ">
                                                    
                                                    <a href="<?php echo base_url('booking_view'); ?>/<?php echo $row->booking_id; ?>">
                                                        <i class="la la-eye eye"></i></a>
											<?php if ($row->booking_approval == 0) { ?> 			
												<a href="<?php echo base_url('edit_booking'); ?>/<?php echo $row->booking_id; ?>">
                                                        <i class="la la-edit edit"></i></a>
<?php } ?>
                                                    <a href="#myModal3<?php echo $row->booking_id; ?>"
                                                       data-toggle="modal"><i class="la la-close delete"></i></a>

                                                    <div id="myModal3<?php echo $row->booking_id; ?>" class="modal fade"
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
                                                                    <a href="<?php echo site_url('booking_delete'); ?>/<?php echo $row->booking_id; ?>/<?php echo $row->book_code; ?>">
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

<script>
    $('.change_approval').click(function () {
        var bking_id = $(this).attr('id');
        //alert(bking_id);
        $(".booking").val(bking_id);
    });
</script>
</body>
</html>