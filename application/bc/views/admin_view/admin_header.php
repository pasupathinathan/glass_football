<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php    $menu_id=  $this->uri->segment(3);  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>CivilCrew Admin Panel</title>

	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets1/css/bootstrap/bootstrap.css" /> 

	<!-- Calendar Styling  -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets1/css/plugins/calendar/calendar.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets1/css/plugins/datatables/jquery.dataTables.css" />
    <!-- Typeahead Styling  -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets1/css/plugins/typeahead/typeahead.css" />
    
    <!-- TagsInput Styling  -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets1/css/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" />
    
    <!-- Chosen Select  -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets1/css/plugins/bootstrap-chosen/chosen.css" />
    
    <!-- DateTime Picker  -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets1/css/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.css" />
    
    <!-- Switch Buttons  -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets1/css/switch-buttons/switch-buttons.css" />
    
    <!-- Fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300' rel='stylesheet' type='text/css'>
    
    <!-- Base Styling  -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets1/css/app/app.v1.css" />

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body data-ng-app>

	
    <!-- Preloader -->
    <div class="loading-container">
      <div class="loading">
        <div class="l1">
          <div></div>
        </div>
        <div class="l2">
          <div></div>
        </div>
        <div class="l3">
          <div></div>
        </div>
        <div class="l4">
          <div></div>
        </div>
      </div>
    </div>
    <!-- Preloader -->
    
    <aside class="left-panel">
    		
            <div class="user text-center">
              <img src="<?php echo base_url() ?>assets1/images/avtar/user.png" class="img-circle" alt="...">
              <h4 class="user-name">Civil Crew Admin</h4>
              <h4 class="user-state"><strong>INDIA</strong></h4>
            </div>
            
            
            
            <nav class="navigation">
            	<ul class="list-unstyled">
                
              	<li class="active"><a href="#"><i class="glyphicon glyphicon-dashboard"></i> <span class="nav-label">Dashboard</span></a></li>
                <?php if($menu_id==1) { ?>


                <li class="has-submenu"><a href="#"><i class="glyphicon glyphicon-star-empty"></i> <span class="nav-label">Crew Professionals</span></a>
                	<ul class="list-unstyled">
                    <li><a href="<?php echo site_url('admin/crew_profile_list') ?>">Crew Profiles</a></li>
                    <li><a href="<?php echo site_url('admin/new_requests') ?>">New Requests</a></li>
                    <li><a href="#">Reported Profiles</a></li>
                    <li><a href="#">Verified Profiles</a></li>
                    <li><a href="#">Non-Verified Profiles</a></li>
                    <li class="seperator"><a></a></li>
                    <li><a href="#">View All Companies</a></li>
                    <li><a href="#">View All Freelancers</a></li>
                    <li><a href="#">View All </a></li>
                    <li><a href="#">Reports &amp; Downloads</a></li>
                    </ul>
                </li>
                <?php } ?>
                <!--<li class="has-submenu"><a href="#"><i class="glyphicon glyphicon-star-empty"></i> <span class="nav-label">Crew Suppliers</span></a>
                  <ul class="list-unstyled">
                    <li><a href="#">New Requests</a></li>
                    <li><a href="#">Reported Profiles</a></li>
                    <li><a href="#">Verified Profiles</a></li>
                    <li><a href="#">Non-Verified Profiles</a></li>
                    <li><a href="#">View All</a></li>
                    <li><a href="#">Reports &amp; Downloads</a></li>
                    </ul>
                </li>-->
                       <?php if($menu_id==3) { ?>
                <li class="has-submenu"><a href="#"><i class="glyphicon glyphicon-user"></i><span class="nav-label">Customers</span></a>
                  <ul class="list-unstyled">
                    <li><a href="#">New Entries</a></li>
                    <li><a href="#">Reported Cutomers</a></li>
                    <li><a href="#">Verified Customers</a></li>
                    <li><a href="#">Non-Verified Customers</a></li>
                    <li><a href="#">All Customers</a></li>
                  </ul>
                </li>
                
                <?php } ?>
                
                             <?php if($menu_id==11) { ?>
                <li class="has-submenu"><a href="#"><span class="nav-label">Categories</span></a>
                  <ul class="list-unstyled">
                    <li><a href="<?php echo site_url('admin/categories_add') ?>">Professional Categories</a></li>
                    <li><a href="#">Supplier Catergories</a></li>
                    </ul>
                </li>
                                <?php } ?>
                                   <?php if($menu_id==10) { ?>
                <li class="has-submenu"><a href="#"><span class="nav-label">Pro. Attributes</span></a>
                  <ul class="list-unstyled">
                    <li><a href="<?php echo site_url('admin/skills_add') ?>">Skills</a></li>
                    <li><a href="<?php echo site_url('admin/projects_type') ?>">Project Types</a></li>
                    <li><a href="<?php echo site_url('admin/service_add') ?>">Service Offered</a></li>
                    <li><a href="<?php echo site_url('admin/area_square_add') ?>">Area in Sq.Ft</a></li>
                    </ul>
                </li>
                    <?php } ?>
                <!--<li class="has-submenu"><a href="#"><span class="nav-label">Sup. Attributes</span></a>
                  <ul class="list-unstyled">
                    <li><a href="#">Coming Soon</a></li>
                    <li><a href="#">Coming Soon</a></li>
                    </ul>
                </li>-->
                   <?php if($menu_id==7) { ?>
                <li class="has-submenu"><a href="#"><span class="nav-label">Locations</span></a>
                  <ul class="list-unstyled">
                    <li><a href="<?php echo site_url('admin/state_add') ?>">State</a></li>
                    <li><a href="<?php echo site_url('admin/city_add') ?>">City</a></li>
                    <li><a href="<?php echo site_url('admin/locality_add') ?>">Locality</a></li>
                  </ul>
                </li>
                  <?php } ?>
                   <?php if($menu_id==6) { ?>
                
                <li class="has-submenu"><a href="#"><span class="nav-label">Admin User Management</span></a>
                  <ul class="list-unstyled">
                    <li><a href="#">Add New User</a></li>
                    <li><a href="#">Modify Users</a></li>
                    <li><a href="#">View All Users</a></li>
                  </ul>
                </li>
  <?php } ?>
                
              </ul>
            </nav>
            
    </aside>
    
    <section class="content">
    
           <header class="top-head container-fluid">
            <button type="button" class="navbar-toggle hidden-md hidden-lg pull-left">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
          
            
           
            
            <ul class="nav-toolbar">
            	
                <li class="dropdown"><a href="#" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                	<div class="dropdown-menu pull-right arrow panel panel-default list-group arrow-top-right">
                    <!-- <div class="panel-body text-center"> -->
                    <a href="#" class="list-group-item">Change Password</a>   
                    <a href="#" class="list-group-item">Account Settings</a>   
                    <a href="#" class="list-group-item">Logout</a>  	
                    <!-- </div> -->
                  </div>
                </li>
            </ul>
        </header>
        <!-- Header Ends -->
        
       </section> 