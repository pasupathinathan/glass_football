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
                        <h2 class="page-header-title"><?php echo $data2->tour_name; ?></h2>
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
                                        <th><?php echo get_phrase('Grp');?></th>
                                        <!--<th><?php echo get_phrase('POS');?></th>-->
                                        <th><?php echo get_phrase('PLD');?></th>
                                        <th><?php echo get_phrase('WON');?></th>
                                        <th><?php echo get_phrase('LOSS');?></th>
                                        <th><?php echo get_phrase('TIE');?></th>
										<th><?php echo get_phrase('F');?></th>
										<th><?php echo get_phrase('A');?></th>
										<th><?php echo get_phrase('Diff');?></th>
                                        <th><?php echo get_phrase('PTS');?></th>
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
                                                <td><?php echo $row->team_group; ?></td>
                                                <!--<td><?php echo $row->position; ?></td>-->
                                                <td><?php echo $row->played_games;?></td>
                                                <td><?php echo $row->wins; ?></td>
                                                <td><?php echo $row->loss; ?></td>
                                                <td><?php echo $row->tie; ?></td>
												<td><?php echo $row->goals_scored; ?></td>
												<td><?php echo $row->goals_scored_against; ?></td>
												<td><?php echo $row->goals_differences; ?></td>
                                                <td><?php echo $row->points; ?></td>
                                               <td class="td-actions ">
                                                    <button type="button"
                                                            class="btn btn-success  change_approval"
                                                            id="<?php echo $row->id;?>,<?php echo $row->team_name;?>,<?php echo $row->played_games;?>,<?php echo $row->wins;?>,<?php echo $row->loss;?>,<?php echo $row->tie;?>,<?php echo $row->points;?>,<?php echo $row->goals_scored;?>,<?php echo $row->goals_scored_against;?>,<?php echo $row->goals_differences;?>,<?php echo $row->position;?>,<?php echo $row->team_group;?>,<?php echo $row->sno;?>"
                                                            data-toggle="modal"
                                                            data-target="#modal-centered<?php echo $row->id; ?>">
                                                            <?php echo get_phrase('Edit');?>
                                                    </button>

                                                    <div id="modal-centered<?php echo $row->id; ?>"
                                                         class="modal fade">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header" style="background: #bf5252;">
                                                                    <h4 class="modal-title" style="color: #FFFFFF;"><?php echo $data2->tour_name; ?></h4>
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal">
                                                                        <span aria-hidden="true">×</span>
                                                                        <span class="sr-only">close</span>
                                                                    </button>
                                                                </div>
                                                                <?php
                                                                $attributes = array('class' => '');
                                                                echo form_open_multipart("tour_book_update");
                                                                $approval_id=  $this->uri->segment(2);
                                                                ?>
                                                                <div class="modal-body">
                                                                    <input type="hidden" class="point" id="res_point_id" name="res_point_id">
                                                                    <input type="hidden" id="tour_id" name="tour_id" value="<?php echo $data2->tour_id; ?>">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                             <!--<div class="form-group">
                                                                                <label for="recipient-name" class="col-form-label"><?php //echo get_phrase('SNO:');?></label>
                                                                                <input type="text" class="form-control sno" id="sno" name="sno">
                                                                            </div>-->
                                                                            <div class="form-group">
                                                                                <label for="recipient-name" class="col-form-label"><?php echo get_phrase('Team:');?></label>
                                                                                <input type="text" class="form-control team_name" id="team_name" name="team_name">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="recipient-name" class="col-form-label"><?php echo get_phrase('team_group');?>:</label>
                                                                                <input type="text" class="form-control team_group" id="team_group" name="team_group">
                                                                            </div>
                                                                            <!--<div class="form-group">
                                                                                <label for="recipient-name" class="col-form-label"><?php //echo get_phrase('Position');?>:</label>
                                                                                <input type="text" class="form-control position" id="position" name="position">
                                                                            </div>-->
                                                                            <div class="form-group">
                                                                                <label for="recipient-name" class="col-form-label"><?php echo get_phrase('Wins');?>:</label>
                                                                                <input type="text" class="form-control wins" id="wins" name="wins">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="recipient-name" class="col-form-label"><?php echo get_phrase('Tie');?>:</label>
                                                                                <input type="text" class="form-control tie" id="tie" name="tie">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="recipient-name" class="col-form-label"><?php echo get_phrase('Goals Scored Against');?>:</label>
                                                                                <input type="text" class="form-control goals_scored_against" id="goals_scored_against" name="goals_scored_against">
                                                                            </div>
                                                                            
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="recipient-name" class="col-form-label"><?php echo get_phrase('Played Games');?>:</label>
                                                                                <input type="text" class="form-control played_games" id="played_games" name="played_games">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="recipient-name" class="col-form-label"><?php echo get_phrase('Loss');?>:</label>
                                                                                <input type="text" class="form-control loss" id="loss" name="loss">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="recipient-name" class="col-form-label"><?php echo get_phrase('Points');?>:</label>
                                                                                <input type="text" class="form-control points" id="points" name="points">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="recipient-name" class="col-form-label"><?php echo get_phrase('Goals Scored');?>:</label>
                                                                                <input type="text" class="form-control goals_scored" id="goals_scored" name="goals_scored">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="recipient-name" class="col-form-label"><?php echo get_phrase('Goals Differences');?>:</label>
                                                                                <input type="text" class="form-control goals_differences" id="goals_differences" name="goals_differences">
                                                                            </div>
                                                                        </div>
                                                                    </div>
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
<script>
    $('.change_approval').click(function () {
        var points_id = $(this).attr('id');
        var new_data = points_id.split(",");
        var point_id = new_data[0];
        var team_name = new_data[1];
        var played_games = new_data[2];
        var wins = new_data[3];
        var loss = new_data[4];
        var tie = new_data[5];
        var points = new_data[6];
        var goals_scored = new_data[7];
        var goals_scored_against = new_data[8];
        var goals_differences = new_data[9];
        var position = new_data[10];
        var team_group = new_data[11];
        var sno = new_data[12];
        //alert(position);
        $(".point").val(point_id);
        $(".team_name").val(team_name);
        $(".played_games").val(played_games);
        $(".position").val(position);
        $(".wins").val(wins);
        $(".loss").val(loss);
        $(".tie").val(tie);
        $(".points").val(points);
        $(".goals_scored").val(goals_scored);
        $(".goals_scored_against").val(goals_scored_against);
        $(".goals_differences").val(goals_differences);
        $(".team_group").val(team_group);
        $(".sno").val(sno);
    });
</script>
</body>
</html>