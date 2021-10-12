<link href="<?php echo base_url() ?>assets/css/select2.min.css" rel="stylesheet"/>
<!-- End Header -->
<!-- Begin Page Content -->
<div class="page-content d-flex align-items-stretch">
    <?php include('inc/admin_sidebar.php') ?>
    <!-- End Left Sidebar -->
    <div class="content-inner">
        <div class="container-fluid">
            <!-- Begin Page Header-->
            <div class="row">
                <div class="page-header">
                    <div class="d-flex align-items-center">
                        <h2 class="page-header-title"><?php echo get_phrase('Add Tournament');?></h2>
                        <div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard'); ?>"><i
                                                class="ti ti-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="<?php echo site_url('tournament_list'); ?>"><?php echo get_phrase('Tournament');?></a>
                                </li>
                                <li class="breadcrumb-item active"><a href="<?php echo site_url('dashboard'); ?>"><?php echo get_phrase('Add Tournament');?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Page Header -->
            <div class="row flex-row">
                <div class="col-xl-12">
                    <!-- Form -->
                    <div class="widget has-shadow">
                        <div class="widget-header bordered no-actions d-flex align-items-center">
                            <h4><?php echo get_phrase('Tournament Form');?></h4>
                        </div>
                        <div class="widget-body">
                            <?php
                            $failmsgtournament = $this->uri->segment(2);
                            if ($failmsgtournament) {
                                ?>
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                        <div class="alert alert-danger alert-dissmissible fade show" role="alert">
                                            <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close"></button>
                                            <strong><?php echo get_phrase('This! Phone And Email');?></strong> <?php echo get_phrase('Already Exists!');?>
                                        </div>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                            <?php } ?>
                            <?php
                            $attributes = array("class" => "", "id" => "tournamentadd", "name" => "tournamentform");
                            echo form_open_multipart("add_tournament", $attributes);
                            ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Name');?>
                                            *</label>
                                        <div class="col-lg-8">
                                            <input type="text" name="tour_name" class="form-control"
                                                   placeholder=<?php echo get_phrase("Enter Tournament name");?> required>
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Address');?>
                                            </label>
                                        <div class="col-lg-8">
                                            <div class="input-group">
                                                <textarea type="text" rows="1" name="tour_address" class="form-control"
                                                          placeholder=<?php echo get_phrase("Address");?>></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('City');?>
                                            </label>
                                        <div class="col-lg-8">
                                            <input type="text" name="tour_city" class="form-control"
                                                   placeholder=<?php echo get_phrase("Tournament City");?>>
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Start Date');?> *</label>
                                        <div class="col-lg-8">
                                            <input type="date" name="tour_startdate" id="tour_startdate" class="form-control"
                                                   placeholder="MM/DD/YYYY" required>
                                        </div>
                                    </div>

                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('End Date');?>*</label>
                                        <div class="col-lg-8">
                                            <input type="date" name="tour_enddate" id="tour_enddate" class="form-control"
                                                   placeholder="MM/DD/YYYY" required>
                                        </div>
                                    </div>

                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Team Limit');?> *</label>
                                        <div class="col-lg-8">
                                            <div class="input-group">
                                                <input type="number" min="1" name="tour_teamlimit" class="form-control"
                                                       placeholder=<?php echo get_phrase("Team Limit");?> required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Team Player Limit');?> *</label>
                                        <div class="col-lg-8">
                                            <div class="input-group">
                                                <input type="number" min="1" name="tour_playerlimit" class="form-control"
                                                       placeholder=<?php echo get_phrase("Team Players Limit");?> required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Ground Name');?> * </label>
                                        <div class="col-lg-8">
                                            <div class="input-group">
                                                <select name="tour_groundname" class="form-control">
                                                    <option value=""><?php echo get_phrase('Select Ground Name');?></option>
                                                    <?php
                                                    if (!empty($data2)) {
                                                        foreach ($data2 as $row) {
                                                            ?>
                                                            <option value="<?php echo $row->ground_id; ?>"><?php echo $row->ground_name; ?></option>
                                                        <?php }
                                                    } ?>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Tournament Type');?> * </label>
                                        <div class="col-lg-8">
                                            <div class="input-group">
                                                <select name="tour_type" class="form-control">
                                                    <option value=""><?php echo get_phrase('Select Type');?></option>
                                                    <option value="league"><?php echo get_phrase('League');?></option>
                                                    <option value="knockout"><?php echo get_phrase('Knock Out');?></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Reg Fees');?> *</label>
                                        <div class="col-lg-8">
                                            <div class="input-group">

                                                <input type="text" name="tour_regfees" class="form-control"
                                                       placeholder=<?php echo get_phrase("Enter The Reg Fees");?>>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Reg Last Date');?> *</label>
                                        <div class="col-lg-8">
                                            <input type="date" name="tour_reglastdate" id="tour_reglastdate" class="form-control"
                                                   placeholder="MM/DD/YYYY" required>
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Winner Price');?> </label>
                                        <div class="col-lg-8">
                                            <div class="input-group">

                                                <input type="text" name="tour_winner_price" class="form-control"
                                                       placeholder=<?php echo get_phrase("Enter The Winner Price Amount");?>>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Runner Price');?> </label>
                                        <div class="col-lg-8">
                                            <div class="input-group">
                                                <input type="text" name="tour_runner_price" class="form-control"
                                                       placeholder=<?php echo get_phrase("Enter The Runner Price Amount");?>>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Trophy Picture');?> *</label>
                                        <div class="col-lg-8">
                                            <input type="file" id="tour_trophy" name="tour_trophy" class="form-control">
											<span style="color:red" class="field-validation-valid" data-valmsg-for="tour_trophy" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Tournament Image');?>*</label>
                                        <div class="col-lg-8">
                                            <input type="file" id="tour_banner" name="tour_banner" class="form-control">
											<span style="color:red" class="field-validation-valid" data-valmsg-for="tour_banner" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
									<?php if (!empty($data3)) { ?>
                                    <div class="form-group row d-flex align-items-center mb-5">
                                        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Awards');?>
                                             </label>
                                        <div class="col-lg-8">
                                            <?php foreach ($data3 as $row): { ?>
                                                <div class="form-check">
                                                    <input type="checkbox" name="award_id[]"
                                                           id="award_id"
                                                           value="<?php echo $row->id; ?>"
                                                           style="margin:10px"/><span
                                                            class="label-text"><?php echo $row->award_name; ?></span><br>
                                                </div>
                                            <?php } ?>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
									<?php } ?>
                                </div>
                            </div>
                            <div class="em-separator separator-dashed"></div>
                            <div class="text-right">
                                <button class="btn btn-gradient-01" type="submit"><?php echo get_phrase('Submit Form');?></button>
                                <button class="btn btn-shadow" type="reset"><?php echo get_phrase('Reset');?></button>
                            </div>
                            </form>
                        </div>
                    </div>
                    <!-- End Form -->
                </div>
            </div>
            <!-- End Row -->
        </div>
        <!-- End Container -->
        <a href="#" class="go-top"><i class="la la-arrow-up"></i></a>
    </div>
</div>
<!-- End Page Content -->
</div>
<!-- Begin Vendor Js -->
<script src="<?php echo base_url() ?>assets/vendors/js/base/jquery.min.js"></script>
<script src="--><?php //echo base_url() ?><!--assets/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" language="javascript"
        src="<?php echo base_url() ?>assets/js/dataTables.bootstrap.js"></script>
<script type="text/javascript" language="javascript"
        src="<?php echo base_url() ?>assets/js/jquery.nestable.js"></script>
<script type="text/javascript" language="javascript"
        src="<?php echo base_url() ?>assets/js/dataTables.responsive.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/pages/main.js"></script>


<script src="<?php echo base_url() ?>assets/vendors/js/base/core.min.js"></script>
<!-- End Vendor Js -->
<!-- Begin Page Vendor Js -->
<script src="<?php echo base_url() ?>assets/vendors/js/nicescroll/nicescroll.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/js/app/app.min.js"></script>
<!-- End Page Vendor Js -->
<!-- Begin Page Snippets -->
<script src="<?php echo base_url() ?>assets/js/components/validation/validation.min.js"></script>

<script src="<?php echo base_url() ?>assets/js/jquery.validate.js"></script>


<script src="<?php echo base_url() ?>assets/js/select2.min.js"></script>


<script src="<?php echo base_url() ?>assets/js/main.js"></script>


<!-- End Page Snippets -->
</body>


<script type="text/javascript">
 jQuery.validator.addMethod("greaterStart", function (value, element, params) {
    return this.optional(element) || new Date(value) >= new Date($(params).val());
},'Must be greater than start date.');


jQuery.validator.addMethod("lesserStart", function (value, element, params) {
    return this.optional(element) || new Date(value) < new Date($(params).val());
},'Must be less than start date.');

$(function() {
    $('#tour_trophy').change(function() {
        $(this).removeClass('input-validation-error').next('span').text('');
        if (this.files[0].size > 8388608) {
            $(this).addClass('input-validation-error').
            next('span').text('File size must 8mb or below');
        }
    });
	$('#tour_banner').change(function() {
        $(this).removeClass('input-validation-error').next('span').text('');
        if (this.files[0].size > 8388608) {
            $(this).addClass('input-validation-error').
            next('span').text('File size must 8mb or below');
        }
    });
});

    $('#tournamentadd').validate({
        rules: {
            tour_name: "required",
            tour_startdate: "required",
			"tour_enddate": {
				required: function(element) {return ($("#tour_enddate").val()!="");},
				greaterStart: "#tour_startdate"
			 },
            /* "tour_reglastdate": {
				required: function(element) {return ($("#tour_reglastdate").val()!="");},
				lesserStart: "#tour_startdate"
			 }, */
			 tour_reglastdate:"required",
            tour_groundname: "required",
            tour_type: "required",
            tour_regfees: "required",
            tour_price: "required",
            tour_gametype: "required",
            tour_trophy: "required",
            tour_banner: "required"

        },
        messages: {
            tour_name: " Please Enter a Tournament Name",
            tour_startdate: "Please Enter a Start Date",
            tour_groundname: "Please Enter a Ground Name",
            tour_type: "Please Enter a Type",
            tour_regfees: "Please Enter a Fees",
            tour_price: "Please Enter a Price Amount",
            tour_gametype: "Please Enter a Game Type",
            tour_trophy: "Please Enter a Trophy",
            tour_banner: "Please Enter a Banner"

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
    .error {
        color: red;
    }
</style>


</html>