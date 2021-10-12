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
                        <h2 class="page-header-title"><?php echo get_phrase('Edit Awards');?></h2>
                        <div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard'); ?>"><i class="ti ti-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="<?php echo site_url('award_list'); ?>"><?php echo get_phrase('Awards');?></a></li>
                                
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
                            <h4><?php echo get_phrase('Awards Form');?></h4>

                        </div>
                        <div class="widget-body" >

                            <?php

                            $attributes = array("class" => "needs-validation","id" => "awardadd", "name" => "awardform","novalidate");
                            echo form_open_multipart("edit_awards", $attributes);

                            ?>

                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"><?php echo get_phrase('Award Name');?> *</label>
                                <div class="col-lg-5">
                                    <input type="hidden" class="form-control" value="<?php echo $store->id; ?>" name="award_id">
                                    <input type="text" class="form-control" value="<?php echo $store->award_name; ?>" name="award_name" placeholder=<?php echo get_phrase("Enter your User Name");?> required>

                                </div>
                            </div>

                            <div class="em-separator separator-dashed"></div>


                            <div class="text-right">
                                <button class="btn btn-gradient-01" type="submit"><?php echo get_phrase('Submit Form');?></button>
                                <a style="margin-top: 10px;" href="<?php echo base_url('award_list') ?>"
                                       class="btn btn-warning mr-1 mb-2" role="button">Back</a>
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
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
<!-- End Page Vendor Js -->
<!-- Begin Page Snippets -->
<script src="<?php echo base_url(); ?>assets/js/components/validation/validation.min.js"></script>
<!-- End Page Snippets -->

<script src="<?php echo base_url(); ?>assets/js/jquery.validate.js"></script>





<script type="text/javascript">

    //User Company Page Validation End ************************************


    $('#awardadd').validate({
        rules: {
            award_name: "required",
        },
        messages: {
            award_name: " Please enter a Award Name",
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

<?php endforeach; ?>