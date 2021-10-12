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
                        <h2 class="page-header-title">Booking Tournament List</h2>
                        <div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard'); ?>"><i
                                                class="ti ti-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a
                                            href="<?php echo site_url('booking_tournament_list'); ?>">Tournament
                                        Booking</a></li>
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
                            <div class="col-md-6">
                                <h4>Tournament List</h4>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-3">
                                        <a href="<?php echo site_url('tournament_add'); ?>">
                                            <button type="button" class="btn btn-success mr-1 mb-2 ">Add Tournament
                                            </button>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="<?php echo site_url('tour_schedule_add'); ?>">
                                            <button type="button" class="btn btn-gradient-05">Add Schedule</button>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="<?php echo site_url('tourn_match_points_add'); ?>">
                                            <button type="button" class="btn btn-gradient-03">Add Points</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        if($this->session->flashdata('true')) {
                        ?>
                            <div class="col-md-12">
                                <div class="alert alert-danger alert-dissmissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                    <strong><?php  echo $this->session->flashdata('true'); ?></strong>
                                </div>
                            </div>
                            <?php } else if($this->session->flashdata('err')){ ?>
                                <div class="col-md-12">
                                    <div class="alert alert-danger alert-dissmissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                        <strong><?php  echo $this->session->flashdata('true'); ?></strong>
                                    </div>
                                </div>
                        <?php } else if($this->session->flashdata('success')){?>
                            <div class="col-md-12">
                                <div class="alert alert-success alert-dissmissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                    <strong><?php  echo $this->session->flashdata('success'); ?></strong>
                                </div>
                            </div>
                        <?php } ?>


                        <div class="widget-body">
                            <div class="table-responsive">
                                <table id="export-table" class="table mb-0">
                                    <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th> Tournament Name</th>
                                        <th> Limit</th>
                                        <th> Booked</th>
                                        <th> Pending</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i = 0;
                                    if (!empty($data)) {
                                        foreach ($data as $row) {
                                            $i++;
                                            $pending = $row->tour_teamlimit - $row->tour_cmp_limit;
                                            ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $row->tour_name; ?></td>
                                                <td><?php echo $row->tour_teamlimit; ?></td>
                                                <td><?php echo $row->tour_cmp_limit; ?></td>
                                                <td><?php
                                                    echo $pending;
                                                    ?>
                                                </td>
                                                <td>
                                                    <div class="row">
                                                        <div style="margin: 5px;" class="col-xl-3">
                                                            <?php if ($pending == 0) { ?>
                                                                <button type="button" disabled
                                                                        class="btn btn-success  change_approval"
                                                                        id="<?php echo $row->tour_id; ?>"
                                                                        data-toggle="modal"
                                                                        data-target="#modal-centered<?php echo $row->tour_id; ?>">
                                                                    Book
                                                                </button>
                                                            <?php } else { ?>
                                                                <button type="button"
                                                                        class="btn btn-success  change_approval"
                                                                        id="<?php echo $row->tour_id; ?>"
                                                                        data-toggle="modal"
                                                                        data-target="#modal-centered<?php echo $row->tour_id; ?>">
                                                                    Book
                                                                </button>
                                                            <?php } ?>
                                                        </div>


                                                        <div style="margin: 5px;" class="col-xl-4 ">
                                                            <a href="<?php echo site_url('tournament_schedule') ?>/<?php echo $row->tour_id; ?>">
                                                                <button style="text-align: center;" type="button"
                                                                        class="btn btn-gradient-05 ">
                                                                    Schedule
                                                                </button>
                                                            </a>
                                                        </div>
                                                        <div class="col-xl-3 " style="margin: 5px;">
                                                            <a href="<?php echo site_url('tournament_points') ?>/<?php echo $row->tour_id; ?>">
                                                                <button style="text-align: center;" type="button"
                                                                        class="btn btn-gradient-03">
                                                                    Points
                                                                </button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div id="modal-centered<?php echo $row->tour_id; ?>"
                                                         class="modal fade">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title"> Book Tournament</h4>
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal">
                                                                        <span aria-hidden="true">×</span>
                                                                        <span class="sr-only">close</span>
                                                                    </button>
                                                                </div>
                                                                <?php
                                                                //$attributes = array('class' => '');
                                                                echo form_open_multipart("tour_booked_update");
                                                                // $approval_id=  $this->uri->segment(2);
                                                                ?>
                                                                <div class="modal-body">
                                                                    <input type="hidden" class="booking" id="id"
                                                                           name="id">
                                                                    <label>Book Tournament</label>
                                                                    <select name="tour_id" id="id"
                                                                            class="form-control">
                                                                        <option value="<?php echo $row->tour_id; ?>"><?php echo $row->tour_name; ?></option>
                                                                    </select>
                                                                    <label>Booking Team</label>
                                                                    <select name="team_id" id="id"
                                                                            class="form-control">
                                                                        <option value="0">----Select Team----</option>
                                                                        <?php
                                                                        foreach ($data1 as $row) { ?>

                                                                            <option value="<?php echo $row->team_id; ?>"><?php echo $row->team_name; ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-shadow"
                                                                                data-dismiss="modal">Close
                                                                        </button>
                                                                        <a href="">
                                                                            <button class="btn btn-primary ">Save
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