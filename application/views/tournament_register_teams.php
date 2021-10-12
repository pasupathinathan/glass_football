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
                        <h2 class="page-header-title"><?php echo $data1->tour_name; ?></h2>
                        <div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <div>
                                        <a href="<?php echo base_url('booking_tournament_list') ?>" class="btn btn-warning mr-1 mb-2" role="button">Back</a>
                                    </div>
                                </li>
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

                        <div class="widget-body">
                            <div class="table-responsive">
                                <table id="export-table" class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th><?php echo get_phrase('SNo');?></th>
                                            <th><?php echo get_phrase('Team');?></th>
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
                                                    <td><?php echo $row->team_name; ?></td>
                                                    <td class="td-actions ">
                                                       <a href="#myModal3<?php echo $row->id; ?>" data-toggle="modal"><i
                                                                class="la la-close delete"></i></a>
                                                                <div id="myModal3<?php echo $row->id; ?>" class="modal fade"
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
                                                                    <a href="<?php echo site_url('team_unregister'); ?>/<?php echo $row->id; ?>/<?php echo $row->tour_id; ?>/<?php echo $row->team_id; ?>">
                                                                        <button class="btn red"><?php echo get_phrase('Delete');?></button>
                                                                    </a>

                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div> 
                                                    </td>
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
<script src="<?php echo base_url(); ?>assets/vendors/js/base/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/js/base/core.min.js"></script>
<!-- End Vendor Js -->
<!-- Begin Page Vendor Js -->
<script src="<?php echo base_url(); ?>assets/vendors/js/datatables/datatables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/js/datatables/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/js/datatables/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/js/datatables/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/js/datatables/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/js/datatables/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/js/datatables/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/js/nicescroll/nicescroll.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/js/app/app.min.js"></script>
<!-- End Page Vendor Js -->
<!-- Begin Page Snippets -->
<script src="<?php echo base_url(); ?>assets/js/components/tables/tables.js"></script>
<!-- End Page Snippets -->
</body>
</html>