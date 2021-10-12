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
                        <h2 class="page-header-title">Tournament Points Table</h2>
                        <div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard'); ?>"><i class="ti ti-home"></i></a>
                                </li>
                                <li class="breadcrumb-item active"><a href="<?php echo site_url('tourn_match_points_list'); ?>">Tournament Points Tablet</a></li>
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
                                <h4>Tournament Points List</h4>
                            </div>
                            <div class="col-md-2">
                                <div class="margin-right">

<a href="<?php echo site_url('tourn_match_points_add'); ?>">
                                        <button type="button" class="btn btn-primary mr-1 mb-2 ">Add Points</button>
                                    </a>

                                </div>
                            </div>
                        </div>


                        <div class="widget-body">
                            <div class="table-responsive">
                                <table id="export-table" class="table mb-0">
                                    <thead>
                                    <tr>
                                        <th>S No</th>
                                        <th>Tournament Name</th>
                                        <th>Team Name</th>
                                        <th>Games</th>
                                        <th>Points</th>
                                        <th>Wins</th>
                                        <th>Loss</th>
                                        <th>Tie</th>
                                        <th>Actions</th>
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
                                                <td><?php echo $row->tour_name; ?></td>
                                                <td><?php echo $row->team_name; ?></td>
                                                <td><?php echo $row->played_games; ?></td>
                                                <td><?php echo $row->points; ?></td>
                                                <td><?php echo $row->wins; ?></td>
                                                <td><?php echo $row->loss; ?></td>
                                                <td><?php echo $row->tie; ?></td>
                                                <td class="td-actions ">
                                                    <a href="<?php echo base_url('tourn_match_points_view'); ?>/<?php echo $row->id; ?>">
                                                        <i class="la la-eye eye"></i></a>
                                                    <a href="<?php echo site_url('tourn_match_points_edit'); ?>/<?php echo $row->id; ?>"><i
                                                            class="la la-edit edit"></i></a>
<!--                                                    <a href="#myModal3--><?php //echo $row->tour_id; ?><!--" data-toggle="modal"><i-->
<!--                                                            class="la la-close delete"></i></a>-->

<!--                                                    <div id="myModal3--><?php //echo $row->tour_id; ?><!--" class="modal fade"-->
<!--                                                         tabindex="-1" role="dialog" aria-labelledby="myModalLabel3"-->
<!--                                                         aria-hidden="true">-->
<!--                                                        <div class="modal-dialog">-->
<!--                                                            <div class="modal-content">-->
<!--                                                                <div class="modal-header">-->
<!--                                                                    <button type="button" class="close"-->
<!--                                                                            data-dismiss="modal"-->
<!--                                                                            aria-hidden="true"></button>-->
<!--                                                                    <h4 class="modal-title">Delete Confirm </h4>-->
<!--                                                                </div>-->
<!--                                                                <div class="modal-body">-->
<!--                                                                    <p>-->
<!--                                                                        Are You Sure To Delete...?-->
<!--                                                                    </p>-->
<!--                                                                </div>-->
<!--                                                                <div class="modal-footer">-->
<!--                                                                    <button class="btn default" data-dismiss="modal"-->
<!--                                                                            aria-hidden="true">Close-->
<!--                                                                    </button>-->
<!--                                                                    <a href="--><?php //echo site_url('tournament_delete'); ?><!--/--><?php //echo $row->tour_id; ?><!--">-->
<!--                                                                        <button class="btn red">Delete</button>-->
<!--                                                                    </a>-->
<!---->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!---->
<!--                                                    </div>-->

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