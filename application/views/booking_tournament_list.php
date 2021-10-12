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
                        <h2 class="page-header-title"><?php echo get_phrase('Booking Tournament List');?></h2>
                        <div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard'); ?>"><i
                                    class="ti ti-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a
                                    href="<?php echo site_url('booking_tournament_list'); ?>"><?php echo get_phrase('Tournament Booking');?></a></li>
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
                                    <h4><?php echo get_phrase('Tournament List');?></h4>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6"></div>
                                        <div class="col-md-3">
                                            <a href="<?php echo site_url('tournament_add'); ?>">
                                                <button type="button" class="btn btn-success mr-1 mb-2 " style="margin-left: -23px;"><?php echo get_phrase('Add Tournament');?>
												</button>
											</a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="<?php echo site_url('tour_schedule_add'); ?>">
                                            <button type="button" class="btn btn-gradient-05"><?php echo get_phrase('Add Schedule');?></button>
                                        </a>
                                    </div>
                                    <!--<div class="col-md-3">
                                        <a href="<?php //echo site_url('tourn_match_points_add'); ?>">
                                            <button type="button" class="btn btn-gradient-03"><?php //echo get_phrase('Add Points');?></button>
                                        </a>
                                    </div>-->
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
                                            <th><?php echo get_phrase('S.No');?></th>
                                            <th><?php echo get_phrase('Tournament Name');?></th>
                                            <th><?php echo get_phrase('Team Limit');?></th>
                                            <th><?php echo get_phrase('Register Teams');?></th>
                                            <th><?php echo get_phrase('Remaining');?></th>
                                            <th><?php echo get_phrase('Actions');?></th>
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
                                                    <td>
                                                        <?php if(!empty($row->tour_cmp_limit)){ ?>
                                                            <?php echo $row->tour_cmp_limit; ?>
                                                            <a href="<?php echo site_url('tournament_register_teams') ?>/<?php echo $row->tour_id; ?>">
                                                                <button style="text-align: center;" type="button"
                                                                class="btn btn-gradient-03"><i
                                                                class="ti ti-eye"></i>
                                                            </button>
                                                        </a>
                                                    <?php } else {?>
                                                        <?php echo 0; ?>

                                                <?php } ?>

                                            </td>
                                            <td><?php
                                            echo $pending;
                                            ?>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xl-3">
                                                    <?php if ($pending == 0) { ?>
                                                        <button type="button" disabled
                                                        class="btn btn-success  change_approval"
                                                        id="<?php echo $row->tour_id; ?>"
                                                        data-toggle="modal"
                                                        data-target="#modal-centered<?php echo $row->tour_id; ?>">
                                                        <?php echo get_phrase('Register');?>
                                                    </button>
                                                <?php } else { ?>
                                                    <button type="button"
                                                    class="btn btn-success  change_approval"
                                                    id="<?php echo $row->tour_id; ?>"
                                                    data-toggle="modal"
                                                    data-target="#modal-centered<?php echo $row->tour_id; ?>">
                                                    <?php echo get_phrase('Register');?>
                                                </button>
                                            <?php } ?>
                                        </div>
                                        <div class="col-xl-3">
                                            <a href="<?php echo site_url('tournament_schedule') ?>/<?php echo $row->tour_id; ?>">
                                                <button style="text-align: center;" type="button"
                                                class="btn btn-gradient-05">
                                                <?php echo get_phrase('Schedule');?>
                                            </button>
                                        </a>
                                    </div>
                                    <div class="col-xl-3">
                                        <a href="<?php echo site_url('tournament_points') ?>/<?php echo $row->tour_id; ?>">
                                            <button style="text-align: center;" type="button"
                                            class="btn btn-gradient-03">
                                            <?php echo get_phrase('Points');?>
                                        </button>
                                    </a>
                                </div>
                                <div class="col-xl-3">
                                    <a href="<?php echo site_url('tournament_bracket') ?>/<?php echo $row->tour_id; ?>">
                                        <button style="text-align: center;" type="button"
                                        class="btn btn-gradient-02 ">
                                        <?php echo get_phrase('Bracket');?>
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div id="modal-centered<?php echo $row->tour_id; ?>"
                         class="modal fade">
                         <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"><?php echo get_phrase('Book Tournament');?></h4>
                                    <button type="button" class="close"
                                    data-dismiss="modal">
                                    <span aria-hidden="true">×</span>
                                    <span class="sr-only"><?php echo get_phrase('close');?></span>
                                </button>
                            </div>
                            <form id="modal_booking" method="post" action="tour_booked_update">
                                <div class="modal-body">
                                    <input type="hidden" class="booking" id="id"
                                    name="id">
                                    <label><?php echo get_phrase('Book Tournament');?></label>
                                    <select name="tour_id" id="id"
                                    class="form-control">
                                    <option value="<?php echo $row->tour_id; ?>"><?php echo $row->tour_name; ?></option>
                                </select>
                                <label><?php echo get_phrase('Booking Team');?></label>
                                <select name="team_id" id="id"
                                class="form-control">
                                <option value="">----<?php echo get_phrase('Select Team');?>----</option>
                                <?php
                                foreach ($data1 as $row) { ?>

                                    <option value="<?php echo $row->team_id; ?>"><?php echo $row->team_name; ?></option>
                                <?php } ?>
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
<script src="<?php echo base_url(); ?>assets/js/jquery.validate.js"></script>
<script>
    $('.change_approval').click(function () {
        var bking_id = $(this).attr('id');
        //alert(bking_id);
        $(".booking").val(bking_id);
    });
</script>
<script type="text/javascript">

    //User Company Page Validation End ************************************


    $('#modal_booking').validate({
        rules: {
            team_id: "required",
        },
        messages: {
            team_id: " Please select a team",
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

<style>
    .error
    {
        color: red;
    }

</style>
</body>
</html>