<?php
 foreach ($data as $store) : 

 ?>
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
	                                <h2 class="page-header-title"><?php echo get_phrase('Edit Tournament');?> </h2>
	                                <div>
			                            <ul class="breadcrumb">
			                                <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard'); ?>"><i class="ti ti-home"></i></a></li>
			                                <li class="breadcrumb-item"><a href="<?php echo site_url('tournament_list'); ?>"><?php echo get_phrase('Tournament');?> </a></li>
			                                
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
										$attributes = array('class' => 'needs-validation',"id" => "tournamentadd","name" => "tournamentform" ,"novalidate");echo form_open_multipart("tournament_update", $attributes);
				                        $tour_id=  $this->uri->segment(2);
									?>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row d-flex align-items-center mb-5">
                                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Name');?>
                                                        *</label>
                                                    <div class="col-lg-8">
                                                        <input type="text" name="tour_name" class="form-control" value="<?php echo $store->tour_name ?>" placeholder=<?php echo get_phrase("Enter Tournament name");?> required>
                                                        <input type="hidden" name="tour_id" class="form-control" value="<?php echo $store->tour_id ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row d-flex align-items-center mb-5">
                                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Address');?>
                                                        </label>
                                                    <div class="col-lg-8">
                                                        <div class="input-group">
                                                          <textarea type="text" name="tour_address" class="form-control" placeholder=<?php echo get_phrase("Address");?>><?php echo $store->tour_address ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row d-flex align-items-center mb-5">
                                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('City');?>
                                                        </label>
                                                    <div class="col-lg-8">
                                                        <input type="text" name="tour_city" value="<?php echo $store->tour_city ?>" class="form-control" placeholder=<?php echo get_phrase("Tournament City");?>>
                                                    </div>
                                                </div>
                                                <div class="form-group row d-flex align-items-center mb-5">
                                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Start Date');?> *</label>
                                                    <div class="col-lg-8">
                                                        <input type="date" name="tour_startdate" id="tour_startdate" value="<?php echo $store->tour_startdate ?>" class="form-control"  placeholder="MM/DD/YYYY" required>
                                                    </div>
                                                </div>

                                                <div class="form-group row d-flex align-items-center mb-5">
                                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('End Date');?> *</label>
                                                    <div class="col-lg-8">
                                                        <input type="date" name="tour_enddate" id="tour_enddate" value="<?php echo $store->tour_enddate ?>" class="form-control" placeholder="MM/DD/YYYY" required>
                                                    </div>
                                                </div>

                                                <div class="form-group row d-flex align-items-center mb-5">
                                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Team Limit');?> *</label>
                                                    <div class="col-lg-8">
                                                        <div class="input-group">
                                                            <input type="number" min="0" name="tour_teamlimit" value="<?php echo $store->tour_teamlimit ?>" class="form-control" placeholder=<?php echo get_phrase("Team Limit");?> required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row d-flex align-items-center mb-5">
                                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Team Player Limit');?> *</label>
                                                    <div class="col-lg-8">
                                                        <div class="input-group">

                                                            <input type="number" min="0" name="tour_playerlimit" class="form-control"
                                                                   value="<?php echo $store->tour_playerlimit ?>" placeholder=<?php echo get_phrase("Team Players Limit");?> required>


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
                                                                        <option value="<?php echo $row->ground_id; ?>" <?php if($store->tour_groundname == $row->ground_id)  { echo "selected";} ?> ><?php echo $row->ground_name; ?></option>
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
                                                                <option value="">Select Type</option>
                                                                <option value="league" <?php if($store->tour_type == 'league')  { echo"selected";} ?> ><?php echo get_phrase('League');?></option>
                                                                <option value="knockout" <?php if($store->tour_type == 'knockout')  { echo"selected";} ?> ><?php echo get_phrase('Knock Out');?></option>
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

                                                            <input type="text" name="tour_regfees" value="<?php echo $store->tour_regfees ?>" class="form-control" placeholder=<?php echo get_phrase("Enter The Reg Fees");?>>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row d-flex align-items-center mb-5">
                                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Reg Last Date');?> *</label>
                                                    <div class="col-lg-8">
                                                        <input type="date" name="tour_reglastdate" id="tour_reglastdate" value="<?php echo $store->tour_reglastdate ?>" class="form-control" placeholder="MM/DD/YYYY" required>

                                                    </div>
                                                </div>
                                                <div class="form-group row d-flex align-items-center mb-5">
                                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Winner Price');?> </label>
                                                    <div class="col-lg-8">
                                                        <div class="input-group">

                                                            <input type="text" name="tour_winner_price" value="<?php echo $store->tour_winner_price ?>" class="form-control" placeholder=<?php echo get_phrase("Enter The Winner Price Amount");?>>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row d-flex align-items-center mb-5">
                                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Runner Price');?> </label>
                                                    <div class="col-lg-8">
                                                        <div class="input-group">

                                                            <input type="text" name="tour_runner_price" value="<?php echo $store->tour_runner_price ?>" class="form-control" placeholder=<?php echo get_phrase("Enter The Runner Price Amount");?>>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row d-flex align-items-center mb-5">
                                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Awards');?>
                                                        </label>
                                                    <div class="col-lg-8">
                                                        <?php $award_ids = explode(",",$store->award_id);?>
                                                        <?php foreach ($data3 as $row): { ?>
                                                            <div class="form-check">
                                                                <input type="checkbox" name="award_id[]"
                                                                       id="award_id"
                                                                       value="<?php echo $row->id; ?>"
                                                                       style="margin:10px" <?php if(in_array($row->id,$award_ids)) echo "checked" ;?>/><span
                                                                        class="label-text"><?php echo $row->award_name; ?></span><br>
                                                            </div>
                                                        <?php } ?>
                                                        <?php endforeach; ?>
                                                    </div>
                                                </div>
                                                <div class="form-group row d-flex align-items-center mb-5">
                                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Trophy Picture');?> </label>
                                                    <div class="col-lg-8">
                                                        <input type="file" name="tour_trophy" value="<?php echo $store->tour_trophy ?>" class="form-control">
                                                        <img src="<?php echo base_url(); ?>/assets/upload/tournament/<?php echo $store->tour_trophy; ?>" class="img-circle" width="80" height="80">
                                                    </div>
                                                </div>
                                                <div class="form-group row d-flex align-items-center mb-5">
                                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Tournament Image');?></label>
                                                    <div class="col-lg-8">
                                                        <input type="file" name="tour_banner" value="<?php echo $store->tour_banner ?>" class="form-control">
                                                        <img src="<?php echo base_url(); ?>/assets/upload/tournament/<?php echo $store->tour_banner; ?>" class="img-circle" width="80" height="80">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                            
                                            <div class="em-separator separator-dashed"></div>

                                            <div class="text-right">
                                                <button class="btn btn-gradient-01" type="submit"><?php echo get_phrase('Submit Form');?></button>
                                                <a style="margin-top: 10px;" href="<?php echo base_url('tournament_list') ?>" class="btn btn-warning mr-1 mb-2" role="button"><?php echo get_phrase('Back');?></a>
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
        <script src="<?php echo base_url(); ?>assets/vendors/js/nicescroll/nicescroll.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendors/js/app/app.min.js"></script>
        <!-- End Page Vendor Js -->
        <!-- Begin Page Snippets -->
        <script src="<?php echo base_url(); ?>assets/js/components/validation/validation.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/jquery.validate.js"></script>
        <!-- End Page Snippets -->
    </body>
     <script type="text/javascript">
/* jQuery.validator.addMethod("greaterStart", function (value, element, params) {
    return this.optional(element) || new Date(value) >= new Date($(params).val());
},'Must be greater than start date.');


jQuery.validator.addMethod("lesserStart", function (value, element, params) {
    return this.optional(element) || new Date(value) < new Date($(params).val());
},'Must be less than start date.'); */


    $('#tournamentadd').validate({
        rules: {
            tour_name: "required",
            tour_startdate: "required",
			tour_enddate: "required",
            tour_reglastdate: "required",
            tour_groundname: "required",
            tour_type: "required",
            tour_regfees: "required",
            tour_price: "required",
            tour_gametype: "required"
        },
        messages: {
            tour_name: " Please Enter a Tournament Name",
            tour_startdate: "Please Enter a Start Date",
            tour_groundname: "Please Enter a Ground Name",
            tour_type: "Please Enter a Type",
            tour_regfees: "Please Enter a Fees",
            tour_price: "Please Enter a Price Amount",
            tour_gametype: "Please Enter a Game Type"

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


<?php endforeach; ?>