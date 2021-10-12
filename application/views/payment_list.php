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
                        <h2 class="page-header-title"><?php echo get_phrase('Ground Payment List')?></h2>
                        <div>
                            <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard'); ?>"><i class="ti ti-home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="<?php echo site_url('payment_list'); ?>"><?php echo get_phrase('Payment')?></a></li>
							</ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Page Header -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="widget has-shadow">
                        <div class="widget-header bordered no-actions d-flex align-items-center">
                            <div class="col-md-10">
                                <h4><?php echo get_phrase('Ground Payment List')?></h4>
                            </div>
                            <div class="col-md-2">
                                <div class="margin-right">
                                </div>
                            </div>
                        </div>
                        <div class="widget-body">
                            <div class="table-responsive">
                                <table id="export-table" class="table mb-0">
                                    <thead>
                                    <tr>
										<th><?php echo get_phrase('SNo');?></th>
                                        <th><?php echo get_phrase('Book Code');?></th>
                                        <th><?php echo get_phrase('Ground Name');?></th>
                                        <th><?php echo get_phrase('Amount');?></th>
                                        <th><?php echo get_phrase('Ground Owner Amount');?></th>
                                        <th><?php echo get_phrase('SL Commission');?></th>
                                        <th><?php echo get_phrase('Date');?></th>
                                        <th><?php echo get_phrase('Mode');?></th>
                                        <th><?php echo get_phrase('Status');?></th>
                                        <th><?php echo get_phrase('Cancel');?></th>
                                        <th><?php echo get_phrase('Action');?></th>
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
                                                <td><?php echo $row->booking_id; ?></td>
                                                <td><?php echo $row->ground_name; ?></td>
                                              <!--  <td><?php // echo $row->player_fname; ?></td>-->
                                                <td class="text-center">AED <?php echo $row->payment_amount; ?> </td>
                                                <td class="text-center">AED <?php echo $row->groundowner_amount; ?> </td>
                                                <td class="text-center">AED <?php echo $row->sl_amount; ?> </td>
                                                <td class="text-center"><?php echo $row->payment_date; ?> </td>
                                                <td class="text-center">
    												<?php if ($row->payment_mode == '1') { ?>
    														<span style="font-size: 14px;color:white;" class="badge badge-info"><?php echo get_phrase('Online');?></span>
    													<?php } else { ?>
    														<span style="font-size: 14px;color:white;" class="badge badge-warning"><?php echo get_phrase('Offline');?></span>
    												<?php } ?>
												</td>
                                                <td class="text-center">
    												<?php if ($row->payment_status == '1') { ?>
    														<span style="font-size: 14px;color:white;" class="badge badge-success"><?php echo get_phrase('paid');?></span>
    													<?php } else { ?>
    														<span style="font-size: 14px;color:white;" class="badge badge-danger"><?php echo get_phrase('Unpaid');?></span>
    												<?php } ?>                                                                                                          
												</td>
                                                <td class="text-center">	
                                                    <?php if ($row->cancel_status == '0') { ?>
														<span style="font-size: 14px;color:white;" class="badge badge-success"><?php echo get_phrase('Booked');?></span>
													<?php } else { ?>
														<span style="font-size: 14px;color:white;" class="badge badge-danger"><?php echo get_phrase('Cancelled');?></span>
													<?php } ?>
													</td>
                                                <td>
															<a href="<?php echo base_url('payment_view'); ?>/<?php echo $row->pay_id; ?>">
                                                        <button style="background-color:blue;color:#ffffff" type="button" class="btn btn-xs"><?php echo get_phrase('View');?></button></a>
														<?php if($row->cancel_status == '0' && $row->payment_status == '2'){ ?>
                                                            <button type="button" class="btn btn-danger change_approval"
                                                                    id="<?php echo $row->pay_id; ?>"
                                                                    data-toggle="modal"
                                                                    data-target="#modal-centered<?php echo $row->pay_id; ?>">
                                                                    <?php echo get_phrase('Payment');?>
                                                            </button>
														<?php } ?>
                                                    </div>

                                                    <div id="modal-centered<?php echo $row->pay_id; ?>"
                                                         class="modal fade">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title"> Payment</h4>
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal">
                                                                        <span aria-hidden="true">x</span>
                                                                        <span class="sr-only">close</span>
                                                                    </button>
                                                                </div>
                                                                <?php
                                                                //$attributes = array('class' => '');
                                                                echo form_open_multipart("payment_update");
                                                                // $approval_id=  $this->uri->segment(2);
                                                                ?>
                                                                <div class="modal-body">
                                                                    <input type="hidden" class="booking" id="pay_id" name="pay_id">

                                                                    <label><?php echo get_phrase('Total Amount');?></label>
																	<input type="text" name="payment_amount" id="payment_amount"
                                                                            class="form-control" disabled value="<?php echo $row->payment_amount; ?> "/>
                                                                      <label><?php echo get_phrase('Payment Mode');?></label>  
                                                                    <select name="payment_mode" id="payment_mode"
                                                                            class="form-control">
                                                                        <option value="1" <?php if($row->payment_mode == 1) { echo 'selected'; } ?>><?php echo get_phrase('Online');?></option>
                                                                        <option value="2" <?php if($row->payment_mode == 2) { echo 'selected'; } ?>><?php echo get_phrase('Offline');?></option>

                                                                    </select>
																	<label><?php echo get_phrase('Status');?></label>  
                                                                    <select name="status" id="status"
                                                                            class="form-control">
                                                                        <option value="1" <?php if($row->payment_status == 1) { echo 'selected'; } ?>> <?php echo get_phrase('Paid');?></option>
                                                                        <option value="2" <?php if($row->payment_status == 2) { echo 'selected'; } ?>><?php echo get_phrase('Unpaid');?></option>

                                                                    </select>
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

            </div>

        <a href="#" class="go-top"><i class="la la-arrow-up"></i></a>

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