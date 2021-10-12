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
                        <h2 class="page-header-title"><?php echo get_phrase('Report')?></h2>
                        <div>
                            <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard'); ?>"><i class="ti ti-home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="<?php echo site_url('Reports_list'); ?>"><?php echo get_phrase('Report');?></a></li>
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
                                <h4><?php echo get_phrase('Report')?> </h4>
                            </div>
                            <div class="col-md-2">
                                <div class="margin-right">
                                </div>
                            </div>
                        </div>
		        
                        <div class="widget-body">
						<?php

                    $attributes = array("class" => "needs-validation", "id" => "groundadd", "name" => "groundform", "novalidate");
                    echo form_open_multipart("report_list", $attributes);

                    ?>
						 <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Ground Name');?> </label>
                                                <div class="col-lg-8">
                                                    <select name="ground_id" class="form-control" id="ground_id">
														<option value=""><?php echo get_phrase('Select Ground Name');?></option>
														<?php
														if (!empty($data1)) {
															foreach ($data1 as $row) {
																?>
																<option value="<?php echo $row->ground_id; ?>" <?php if($data2['ground_id'] == $row->ground_id){ echo 'selected'; } ?>><?php echo $row->ground_name; ?></option>
															<?php }
														} ?>

													</select>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('To Date');?> </label>
                                                <div class="col-lg-8">
                                                    <div class="input-group">
                                                        <input type="date" id="to_date" name="to_date" class="form-control"
                                                               value="<?php echo $data2['from_date']; ?>" placeholder="MM/DD/YYYY">
                                                    </div>
                                                </div>
                                            </div>

										</div>
										<div class="col-md-6">
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('From Date');?> </label>
                                                <div class="col-lg-8">
                                                    <div class="input-group">
                                                        <input type="date" id="from_date" name="from_date" class="form-control"
                                                               value="<?php echo $data2['to_date']; ?>"  placeholder="MM/DD/YYYY">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">
                                                </label>
                                                <div class="col-lg-8">
                                                   <button class="btn btn-gradient-01" id="uploadBtn" type="submit"><?php echo get_phrase('Generate Report');?></button>
                                                </div>
                                            </div>
										</div>
									</div>
									</form>
	
                            <div class="table-responsive">
                                <table id="export-table" class="table mb-0">
                                    <thead>
                                    <tr>
                                        <th><?php echo get_phrase('S.No');?></th>
                                        <th><?php echo get_phrase('Ground Name')?></th>
                                        <th><?php echo get_phrase('Player Name');?></th>
                                        <th> <?php echo get_phrase('Amount');?></th>
                                        <th><?php echo get_phrase('Date');?></th>
                                        <th> <?php echo get_phrase('Mode');?></th>
                                        <th> <?php echo get_phrase('Approval Status');?></th>
                                        <th><?php echo get_phrase('Status');?></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i = 0;
                                    if (!empty($data)) {
                                        foreach ($data as $row) {
                                            $i++;
											
											if($row->booking_paymenttype == '2'){
												$mode = 'Off Line';
											}else{
												$mode = 'On Line';
											}
											
											if($row->booking_paymenttype == '1'){
												$smode = 'Paid';
											}else{
												$smode = 'Un Paid';
											}
											
											
										if($row->booking_approval == '1'){
												$amode = 'Canceled';
											}else{
												$amode = 'Approved';
											}
											
											
                                            ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $row->ground_name; ?></td>
                                                <td><?php echo $row->player_fname; ?></td>
                                                <td class="text-center">AED <?php echo $row->booking_amount; ?> </td>
                                                <td class="text-center"><?php echo $row->booking_sdate; ?> </td>
                                                <td class="text-center"><?php echo $mode; ?></td>
                                                <td class="text-center"><?php echo $amode; ?></td>
                                                <td class="text-center"><?php echo $smode; ?></td>
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