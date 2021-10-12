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
                        <h2 class="page-header-title"><?php echo get_phrase('Academic Owner List');?></h2>
                        <div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard'); ?>"><i class="ti ti-home"></i></a></li>
                                <li class="breadcrumb-item active"><a href="<?php echo site_url('academic_owner_list'); ?>"><?php echo get_phrase('Academic Owner List');?></a></li>
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
                                <h4><?php echo get_phrase('Academic Owner List');?></h4>
                            </div>
                            <div class="col-md-2">
                                <div class="margin-right">

                                    <a href="academic_owner_add">
                                        <button type="button" class="btn btn-primary mr-1 mb-2 "><?php echo get_phrase('Add Academic Owner');?>
                                        </button>
                                    </a>

                                </div>
                            </div>
                        </div>


                        <div class="widget-body">
                            <div class="table-responsive">
                                <table id="export-table" class="table mb-0">
                                    <thead>
                                    <tr>
                                        <th><?php echo get_phrase('S.No');?></th>
                                        <th><?php echo get_phrase('Owner Name');?></th>

                                        <th><?php echo get_phrase('City');?></th>

                                        <th><?php echo get_phrase('Profile Image');?></th>
                                        <th><?php echo get_phrase('Status')?></th>
                                        <th><?php echo get_phrase('Actions')?></th>
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
                                                <td><?php echo $row->user_name; ?></td>

                                                <td><?php echo $row->user_city; ?></td>
                                                
                                                <?php if(!empty($row->user_image)){ ?>

                                                <td class="text-center"><img
                                                            src="<?php echo base_url(); ?>/assets/upload/users/<?php echo $row->user_image; ?>"
                                                            class="img-circle" width="40" height="40"></td>
                                                            <?php } else { ?>
                                                            
                                                             <td class="text-center">
                                                             <img
                                                            src="<?php echo base_url(); ?>/assets/upload/man.png" 
                                                            class="img-circle" width="40" height="40"></td>
                                                            
                                                            <?php } ?>
                                                            
                                                <td class="text-right">
                                                    <?php if ($row->disp_status == '0') { ?>
                                                        <a class="btn btn-success btn-md"
                                                           href="<?php echo site_url('disable_academic_owner'); ?>/<?php echo $row->user_id; ?>"><?php echo get_phrase('Active');?></a>
                                                    <?php } else { ?>
                                                        <a class="btn btn-danger btn-md"
                                                           href="<?php echo site_url('enable_academic_owner'); ?>/<?php echo $row->user_id; ?>"><?php echo get_phrase('In
                                                            Active');?></a>
                                                    <?php } ?>
                                                </td>

                                                <td class="td-actions ">
                                                    <a href="<?php echo base_url('view_academic_owner'); ?>?user_id=<?php echo $row->user_id; ?>">
                                                        <i class="la la-eye eye"></i></a>
                                                    <a href="<?php echo site_url('edit_academic_owner'); ?>/<?php echo $row->user_id; ?>"><i
                                                                class="la la-edit edit"></i></a>
                                                    <a href="#myModal3<?php echo $row->user_id; ?>" data-toggle="modal"><i
                                                                class="la la-close delete"></i></a>

                                                    <div id="myModal3<?php echo $row->user_id; ?>" class="modal fade"
                                                         tabindex="-1" role="dialog" aria-labelledby="myModalLabel3"
                                                         aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal"
                                                                            aria-hidden="true"></button>
                                                                    <h4 class="modal-title"><?php echo get_phrase('Delete Confirm');?></h4>
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
                                                                    <a href="<?php echo site_url('academic_owner_delete'); ?>/<?php echo $row->user_id; ?>">
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
        <!-- Begin Page Footer-->

        <!-- End Page Footer -->
        <a href="#" class="go-top"><i class="la la-arrow-up"></i></a>
        <!-- Offcanvas Sidebar -->
        <div class="off-sidebar from-right">
            <div class="off-sidebar-container">
                <header class="off-sidebar-header">
                    <ul class="button-nav nav nav-tabs mt-3 mb-3 ml-3" role="tablist" id="weather-tab">
                        <li><a class="active" data-toggle="tab" href="#messenger" role="tab"
                               id="messenger-tab">Messages</a></li>
                        <li><a data-toggle="tab" href="#today" role="tab" id="today-tab">Today</a></li>
                    </ul>
                    <a href="#off-canvas" class="off-sidebar-close"></a>
                </header>
                <div class="off-sidebar-content offcanvas-scroll auto-scroll">
                    <div class="tab-content">
                        <!-- Begin Messenger -->
                        <div role="tabpanel" class="tab-pane show active fade" id="messenger"
                             aria-labelledby="messenger-tab">
                            <!-- Begin Chat Message -->
                            <span class="date">Today</span>
                            <div class="messenger-message messenger-message-sender">
                                <img class="messenger-image messenger-image-default"
                                     src="assets/img/avatar/avatar-02.jpg" alt="...">
                                <div class="messenger-message-wrapper">
                                    <div class="messenger-message-content">
                                        <p>
                                            <span class="mb-2">Brandon wrote</span>
                                            Hi David, what's up?
                                        </p>
                                    </div>
                                    <div class="messenger-details">
                                        <span class="messenger-message-localization font-size-small">2 minutes ago</span>
                                    </div>
                                </div>
                            </div>
                            <div class="messenger-message messenger-message-recipient">
                                <div class="messenger-message-wrapper">
                                    <div class="messenger-message-content">
                                        <p>
                                            Hi Brandon, fine and you?
                                        </p>
                                        <p>
                                            I'm working on the next update of Elisyam
                                        </p>
                                    </div>
                                    <div class="messenger-details">
                                        <span class="messenger-message-localisation font-size-small">3 minutes ago</span>
                                    </div>
                                </div>
                            </div>
                            <div class="messenger-message messenger-message-sender">
                                <img class="messenger-image messenger-image-default"
                                     src="assets/img/avatar/avatar-02.jpg" alt="...">
                                <div class="messenger-message-wrapper">
                                    <div class="messenger-message-content">
                                        <p>
                                            <span class="mb-2">Brandon wrote</span>
                                            I can't wait to see
                                        </p>
                                    </div>
                                    <div class="messenger-details">
                                        <span class="messenger-message-localization font-size-small">5 minutes ago</span>
                                    </div>
                                </div>
                            </div>
                            <div class="messenger-message messenger-message-recipient">
                                <div class="messenger-message-wrapper">
                                    <div class="messenger-message-content">
                                        <p>
                                            I'm almost done
                                        </p>
                                    </div>
                                    <div class="messenger-details">
                                        <span class="messenger-message-localisation font-size-small">10 minutes ago</span>
                                    </div>
                                </div>
                            </div>
                            <span class="date">Yesterday</span>
                            <div class="messenger-message messenger-message-sender">
                                <img class="messenger-image messenger-image-default"
                                     src="assets/img/avatar/avatar-05.jpg" alt="...">
                                <div class="messenger-message-wrapper">
                                    <div class="messenger-message-content">
                                        <p>
                                            I updated the server tonight
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="messenger-message messenger-message-recipient">
                                <div class="messenger-message-wrapper">
                                    <div class="messenger-message-content">
                                        <p>
                                            Didn't you have any problems?
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="messenger-message messenger-message-sender">
                                <img class="messenger-image messenger-image-default"
                                     src="assets/img/avatar/avatar-05.jpg" alt="...">
                                <div class="messenger-message-wrapper">
                                    <div class="messenger-message-content">
                                        <p>
                                            No!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="messenger-message messenger-message-recipient">
                                <div class="messenger-message-wrapper">
                                    <div class="messenger-message-content">
                                        <p>
                                            Great!
                                        </p>
                                        <p>
                                            See you later!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Chat Message -->
                            <!-- Begin Message Form -->
                            <div class="enter-message">
                                <div class="enter-message-form">
                                    <input type="text" placeholder="Enter your message..."/>
                                </div>
                                <div class="enter-message-button">
                                    <a href="#" class="send"><i class="ion-paper-airplane"></i></a>
                                </div>
                            </div>
                            <!-- End Message Form -->
                        </div>
                        <!-- End Messenger -->
                        <!-- Begin Today -->
                        <div role="tabpanel" class="tab-pane fade" id="today" aria-labelledby="today-tab">
                            <!-- Begin Today Stats -->
                            <div class="sidebar-heading pt-0">Today</div>
                            <div class="today-stats mt-3 mb-3">
                                <div class="row">
                                    <div class="col-4 text-center">
                                        <i class="la la-users"></i>
                                        <div class="counter">264</div>
                                        <div class="heading">Clients</div>
                                    </div>
                                    <div class="col-4 text-center">
                                        <i class="la la-cart-arrow-down"></i>
                                        <div class="counter">360</div>
                                        <div class="heading">Sales</div>
                                    </div>
                                    <div class="col-4 text-center">
                                        <i class="la la-money"></i>
                                        <div class="counter">$ 4,565</div>
                                        <div class="heading">Earnings</div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Today Stats -->
                            <!-- Begin Friends -->
                            <div class="sidebar-heading">Friends</div>
                            <div class="quick-friends mt-3 mb-3">
                                <ul class="list-group w-100">
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left align-self-center mr-3">
                                                <img src="assets/img/avatar/avatar-02.jpg" alt="..."
                                                     class="img-fluid rounded-circle" style="width: 35px;">
                                            </div>
                                            <div class="media-body align-self-center">
                                                <a href="javascript:void(0);">Brandon Smith</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left align-self-center mr-3">
                                                <img src="assets/img/avatar/avatar-03.jpg" alt="..."
                                                     class="img-fluid rounded-circle" style="width: 35px;">
                                            </div>
                                            <div class="media-body align-self-center">
                                                <a href="javascript:void(0);">Louis Henry</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left align-self-center mr-3">
                                                <img src="assets/img/avatar/avatar-04.jpg" alt="..."
                                                     class="img-fluid rounded-circle" style="width: 35px;">
                                            </div>
                                            <div class="media-body align-self-center">
                                                <a href="javascript:void(0);">Nathan Hunter</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left align-self-center mr-3">
                                                <img src="assets/img/avatar/avatar-05.jpg" alt="..."
                                                     class="img-fluid rounded-circle" style="width: 35px;">
                                            </div>
                                            <div class="media-body align-self-center">
                                                <a href="javascript:void(0);">Megan Duncan</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left align-self-center mr-3">
                                                <img src="assets/img/avatar/avatar-06.jpg" alt="..."
                                                     class="img-fluid rounded-circle" style="width: 35px;">
                                            </div>
                                            <div class="media-body align-self-center">
                                                <a href="javascript:void(0);">Beverly Oliver</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Friends -->
                            <!-- Begin Settings -->
                            <div class="sidebar-heading">Settings</div>
                            <div class="quick-settings mt-3 mb-3">
                                <ul class="list-group w-100">
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-body align-self-center">
                                                <p class="text-dark">Notifications Email</p>
                                            </div>
                                            <div class="media-right align-self-center">
                                                <label>
                                                    <input class="toggle-checkbox" type="checkbox" checked>
                                                    <span>
                                                                    <span></span>
                                                                </span>
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-body align-self-center">
                                                <p class="text-dark">Notifications Sound</p>
                                            </div>
                                            <div class="media-right align-self-center">
                                                <label>
                                                    <input class="toggle-checkbox" type="checkbox">
                                                    <span>
                                                                    <span></span>
                                                                </span>
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-body align-self-center">
                                                <p class="text-dark">Chat Message Sound</p>
                                            </div>
                                            <div class="media-right align-self-center">
                                                <label>
                                                    <input class="toggle-checkbox" type="checkbox" checked>
                                                    <span>
                                                                    <span></span>
                                                                </span>
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Settings -->
                        </div>
                        <!-- End Today -->
                    </div>
                </div>
                <!-- End Offcanvas Container -->
            </div>
            <!-- End Offsidebar Container -->
        </div>
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
</body>
</html>