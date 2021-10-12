<!-- End Header -->
<!-- Begin Page Content -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/timepicki.css">

<link rel="stylesheet" type="text/css" media="screen"
      href="">

<style type="text/css">
    .nav-tabs {
        border-bottom: none !important;
    }
    .table thead th {
    vertical-align: middle;
    border: .07rem solid #d8d8d8;
    padding: 20px 12px 20px 12px;
    color: #5d5386;
    font-weight: 600;
}
.table-bordered td {
    border:.07rem solid #d8d8d8;
    color: #2c304d;
}

    .timepicker_wrap {
        top: 50px !important;
    }

    input[type="file"] {
        display: block;
    }

    .imageThumb {
        width: 260px !important;
        height: 205px;
        /* border: 2px solid;*/
        padding: 1px;
    }

    .pip {
        display: inline-block;
        margin: 3px;
        /* width: 300px;
         height: 300px;*/
    }

    .remove {
        display: block;
        background: #444;
        /*border: 1px solid black;*/
        color: white;
        text-align: center;
        cursor: pointer;
    }

    .remove:hover {
        background: white;
        color: black;
    }

    .balaji {
        width: 800px;

    }

    .image-upload > input {
        display: none;
    }

    .nex_close_pic {
        font-size: 16px;
        position: relative;
        top: -20px;
        color: #000;
    }
     .icon {
    color: rgba(0, 0, 0, 0.1);
    position: absolute;
    right: 5px;
    bottom: 5px;
    z-index: 1;
    top: 21px;
}
 .icon i {
    font-size: 85px;
    line-height: 0;
    margin: 0;
    padding: 0;
    vertical-align: bottom;
    color: #b1b5d0;
}
.nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link{
    border: 2px solid #5d5386!important;

}

</style>
<div class="page-content d-flex align-items-stretch">
    <?php include('inc/admin_sidebar.php') ?>
    <!-- End Left Sidebar -->
    <div class="content-inner">
        <div class="container-fluid">
            <!-- Begin Page Header-->
            <div class="row">
                <div class="page-header">
                    <div class="d-flex align-items-center">
                        <h2 class="page-header-title"> <?php echo get_phrase('Manage Language');?></h2>
                       
                    </div>
                </div>
            </div>
            <!-- End Page Header -->
            <div class="row flex-row">
                <div class="col-xl-12">
                    <!-- Form -->
                    <!-- Bootstrap CSS -->
                    <!-- jQuery first, then Bootstrap JS. -->
                    <!-- Nav tabs -->

                   <ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link test" data-toggle="tab" href="#tabs-2" role="tab"> <?php echo get_phrase('Edit Phrase');?></a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"> <?php echo get_phrase('Language List');?></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"> <?php echo get_phrase('Add Phrase');?></a>
						</li>
					</ul>
                   <div class="tab-content">
                <div class="tab-pane active p-3" id="tabs-1" role="tabpanel">
				<div class="col-lg-10 col-sm-12 m-auto">
                <table  class="table table-bordered text-center my-5">
                        <thead>
                        <tr>
                            <th> <?php echo get_phrase('Language');?></th>
                            <th> <?php echo get_phrase('Option');?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td> <?php echo get_phrase('English');?></td>
                            <td>
                                <a class="btn btn-info edit_phrase" id="english" href="#english">
                                <?php echo get_phrase('Edit Phrase');?></a>
                            </td>
                        </tr>
						<tr>
                            <td> <?php echo get_phrase('Arabic');?></td>
                            <td>
                                <a class="btn btn-info edit_phrase" id="arabic" href="#arabic">
                                <?php echo get_phrase('Edit Phrase');?></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                   
                </div>
                <div class="tab-pane p-3" id="tabs-2" role="tabpanel">
				 <?php

                    $attributes = array("class" => "needs-validation", "id" => "phaseedit", "name" => "groundform", "novalidate");
                    echo form_open_multipart("edit_phrase_names", $attributes);

                    ?>
                    <div class="row languagecontainer">
						
                    </div>
					 <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-5">
                                <button type="submit" class="btn btn-info"> <?php echo get_phrase('Edit Phrase');?> </button>
                            </div>
                        </div>
					 </form>
                </div>
                <div class="tab-pane p-3" id="tabs-3" role="tabpanel">
                    <?php

                    $attributes = array("class" => "needs-validation", "id" => "phaseadd", "name" => "groundform", "novalidate");
                    echo form_open_multipart("add_phrase", $attributes);

                    ?>
                   <div class="col-lg-6 mx-auto my-5" style="
    background: aqua;
    background: #efeef1;
    padding-bottom: 10px;
    padding-top: 26px;
    box-shadow: 0 0 13px 4px white;
    border:.07rem solid #d8d8d8;
">
                        <div>
                            <div class="form-group">
                                <label class=" control-label"> <?php echo get_phrase('Phrase');?></label>
                                <div>
                                    <input type="text" class="form-control" name="phrase_name" data-validate="required" data-message-required="Value Required">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="">
                                <button type="submit" class="btn btn-info"> <?php echo get_phrase('Add Phrase');?></button>
                            </div>
                        </div></div>
                    </form>
                </div>
                
            </div>
       
                </div>
            </div>
            <!-- End Row -->
        </div>
        <!-- End Container -->
        <!-- Begin Page Footer-->

    </div>
</div>
<!-- End Page Content -->
</div>
<!-- Begin Vendor Js -->
<script src="<?php echo base_url(); ?>assets/vendors/js/base/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/js/base/core.min.js"></script>
<!-- End Vendor Js -->
<!-- Begin Page Vendor Js -->

<script src="<?php echo base_url(); ?>assets/js/timepicki.js"></script>

<script src="<?php echo base_url(); ?>assets/vendors/js/nicescroll/nicescroll.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/js/app/app.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
<!-- End Page Vendor Js -->
<!-- Begin Page Snippets -->
<script src="<?php echo base_url(); ?>assets/js/components/validation/validation.min.js"></script>
<!-- End Page Snippets -->

<script src="<?php echo base_url(); ?>assets/js/jquery.validate.js"></script>
<script src="<?php echo base_url(); ?>assets/js/tab.js"></script>
<script>
$(document).ready(function() {
    $('.test').not('.active').addClass('disabled');
    $('.test').not('.active').find('a').removeAttr("data-toggle");
    $('.edit_phrase').click(function(){
		var language = $(this).attr('id');
		$.ajax({
				'type': 'POST',
				'url' : '<?php echo base_url("get_phrase_language") ?>',
				data:{'language':language},
				success:function(data) {
					//alert(data);
					$('.test').removeClass('disabled');
					$('.test').find('a').attr("data-toggle","tab")
					$('.nav-tabs [href="#tabs-2"]').tab('show');
					$(".languagecontainer").html(data);
					 
				}
			});
       
    });
});
</script>

</body>
</html>