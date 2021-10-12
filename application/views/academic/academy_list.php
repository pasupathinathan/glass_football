<!-- Begin Page Content -->
<div class="page-content d-flex align-items-stretch">
    <!-- End Left Sidebar -->
    <div class="content-inner">
        <div class="container-fluid">
            <!-- Begin Page Header-->
            <div class="row">
                <div class="page-header">
                    <div class="d-flex align-items-center">
                        <h2 class="page-header-title"><?php echo get_phrase('Academy List');?></h2>
                        <div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard'); ?>"><i
                                                class="ti ti-home"></i></a></li>
                                <li class="breadcrumb-item active"><a href="<?php echo site_url('academy_list'); ?>"><?php echo get_phrase('Academy List');?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Page Header -->
            <div class="row">
                <div class="col-xl-12">
                    <!-- Export -->
                    <div class="widget has-shadow">
                        <div class="widget-header bordered no-actions d-flex align-items-center">
                            <div class="col-md-10">
                                <h4><?php echo get_phrase('Academy List');?></h4>
                            </div>
                            <div class="col-md-2">
                                <div class="margin-right">
                                    <a href="<?php echo site_url('academy_add'); ?>">
                                        <button type="button" class="btn btn-primary mr-1 mb-2 "><?php echo get_phrase('Add Academy');?></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="widget-body">
                            <div class="table-responsive">
                                <table id="export-table" class="table mb-0">
                                    <thead>
                                    <tr>
                                        <th><?php echo get_phrase('SNo');?></th>
                                        <th><?php echo get_phrase('Name');?></th>
										<th><?php echo get_phrase('Owner Name');?></th>
                                        <th><?php echo get_phrase('Contact Number');?></th>
                                        <th><?php echo get_phrase('Availability');?></th>
                                        <th><?php echo get_phrase('Actions');?></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    $i = 0;
                                    if (!empty($academy_list)) {
                                        foreach ($academy_list as $row) {
                                            $i++;
                                            ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $row['academy_name']; ?></td>
												<td><?php echo $row['user_name']; ?></td>
                                                <td><?php echo $row['academy_contact_number']; ?></td>
												  <td class="text-center">
                                                    <?php if ($row['academy_availability'] == 'available') { ?>
                                                        <a class="btn btn-success btn-md"
                                                           href="<?php echo site_url('academy_available'); ?>/<?php echo $row['academy_id']; ?>">Available</a>
                                                    <?php } else { ?>
                                                        <a class="btn btn-danger btn-md"
                                                           href="<?php echo site_url('academy_not_available'); ?>/<?php echo $row['academy_id']; ?>">Not
                                                            Available</a>
                                                    <?php } ?>
                                                </td>
                                                <td class="td-actions ">
                                                    <a href="<?php echo base_url('view_academy'); ?>/<?php echo $row['academy_id']; ?>">
                                                        <i class="la la-eye eye"></i></a>
                                                    <a href="<?php echo site_url('edit_academy'); ?>/<?php echo $row['academy_id']; ?>"><i
                                                                class="la la-edit edit"></i></a>
                                                    <a href="#myModal3<?php echo $row['academy_id']; ?>"
                                                       data-toggle="modal"><i class="la la-close delete"></i></a>

                                                    <div id="myModal3<?php echo $row['academy_id']; ?>" class="modal fade"
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
                                                                            aria-hidden="true"><?php echo get_phrase('Close');?>
                                                                    </button>
                                                                    <a href="<?php echo site_url('academy_delete'); ?>/<?php echo $row['academy_id']; ?>">
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
</body>
</html>