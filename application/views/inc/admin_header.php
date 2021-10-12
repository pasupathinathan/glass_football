
<?php
if ($this->session->userdata['logged_in'] != true) {
    header("location: index");
}


$user_name = $this->session->userdata['user_name'];
$user_role = $this->session->userdata['user_role'];
$user_id = $this->session->userdata['user_id'];
$user_image = $this->session->userdata['user_image'];


//print_r($user_image);
//exit;

if($user_role == '1'){
    $user_list_head=$this->football_model->user_list_header($user_id);
    $datanew = json_decode(json_encode($user_list_head), true);
    $user_image = $datanew[0]['user_image'];
    $userphoto_path = $datanew[0]['user_image'];

}elseif($user_role == '2'){
    $user_list_head=$this->football_model->user_list_header($user_id);
    $datanew = json_decode(json_encode($user_list_head), true);
    $user_image = $datanew[0]['user_image'];
    $userphoto_path = $datanew[0]['user_image'];

}
else{
    $user_list_head=$this->football_model->user_list_header($user_id);
    $datanew = json_decode(json_encode($user_list_head), true);
    $user_image = $datanew[0]['user_image'];
    $userphoto_path = $datanew[0]['user_image'];
}


if($user_image == ''){
    $pro_photo = 'man.png';
}else{
    $pro_photo = $userphoto_path;
}

$this->session->set_userdata("user_image",$pro_photo);

$getlist = $this->football_model->get_logo_settings();
foreach ($getlist as $store){
  $logo_image = $store->logo_image;
}


//print_r($pro_photo);
//exit;


?>


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Street League</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Google Fonts -->
		 <style>
	.alert{
		position:absolute!important;
		right: 93px!important;
	    background: #28a745!important;
		border-color: #28a745!important;
     }	

    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url();?>assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>assets/site_assets/img/favicon.ico">
   <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/css/base/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/css/base/elisyam-1.5.css">
    <?php
    $CI	=&	get_instance();
    $CI->load->database();
    $user_id = $CI->session->userdata['user_id'];
    $current_text_align	=	$CI->db->get_where('yalla_users' , array('user_id' => $user_id))->row()->text_align;
    if($current_text_align == 'ltr') { ?>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/css/base/ltr.css">
    <?php } else if($current_text_align == 'rtl') { ?>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/css/base/rtl.css">
    <?php } ?>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/datatables/datatables.min.css">
</head>
<body id="page-top">
<!-- Begin Preloader -->
 <div id="preloader">
            <div class="canvas">
                <img src="<?php echo base_url(); ?>assets/upload/<?php echo $logo_image; ?>" alt="logo" class="loader-logo">
                <div class="spinner"></div>
            </div>
        </div>
<!-- End Preloader -->
<div class="page">
    <!-- Begin Header -->
    <header class="header">
        <nav class="navbar fixed-top">
            <!-- Begin Search Box-->
            <div class="search-box">
                <button class="dismiss"><i class="ion-close-round"></i></button>
                <form id="searchForm" action="#" role="search">
                    <input type="search" placeholder="Search something ..." class="form-control">
                </form>
            </div>
            <!-- End Search Box-->
            <!-- Begin Topbar -->
            <div class="navbar-holder d-flex align-items-center align-middle justify-content-between">
                <!-- Begin Logo -->
                <div class="navbar-header">
                    <a href="dashboard" class="navbar-brand">
                        <div class="brand-image brand-big">
                            <img src="<?php echo base_url();?>assets/upload/<?php echo $logo_image; ?>" alt="logo" class="logo-big">
                        </div>
                        <div class="brand-image brand-small">
                            <img src="<?php echo base_url();?>assets/upload/<?php echo $logo_image; ?>" alt="logo" class="logo-small">
                        </div>
                    </a>
                    <!-- Toggle Button -->
                    <a id="toggle-btn" href="#" class="menu-btn active">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                    <!-- End Toggle -->
                </div>
                <!-- End Logo -->
                <!-- Begin Navbar Menu -->
<?php if($this->session->flashdata('suceessMessage')){ ?>

				 <div class="alert alert-info alert-dismissible fade show" id='tempAlert' role="alert">
  <strong> <?php echo $this->session->flashdata('suceessMessage'); ?></strong>
</div>
<?php } ?>
                <!-- Begin Navbar Menu -->
<?php if($this->session->flashdata('errorMessage')){ ?>
<div style="background-color:red !important" class="alert alert-danger alert-dismissible fade show" id='tempAlert' role="alert">
  <strong> <?php echo $this->session->flashdata('errorMessage'); ?></strong>
</div>
<?php } ?>
                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center pull-right">
                   
                    <li class="nav-item dropdown"><a id="user" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><img src="<?php echo base_url(); ?>assets/site_assets/img/sllogo.png" alt="..." class="avatar rounded-circle"></a>
                        <ul aria-labelledby="user" class="user-size dropdown-menu">



                            <li class="welcome">

                                <img src="<?php echo base_url(); ?>/assets/upload/users/<?php echo $pro_photo; ?>" alt="..." class="rounded-circle">

                                <a href="" class="dropdown-item text-center">
                                    <?php echo $this->session->userdata['user_name']; ?>
                                </a>
                            </li>
                            <li class="separator"></li>
                            <li>

                                <a href="<?php echo base_url('edit_profile'); ?>?user_id=<?php echo $this->session->userdata['user_id'] ?>" class="dropdown-item text-center
                                         ">
                                    Edit Profile
                                </a>
                            </li>


                            <li class="separator"></li>

                            <li><a rel="" href="<?php echo site_url('logout'); ?>" class=" text-center">Logout</a></li>
                        </ul>
                    </li>
                    <!-- End User -->
                    <!-- Begin Quick Actions -->

                    <!-- End Quick Actions -->
                </ul>
                <!-- End Navbar Menu -->
            </div>
            <!-- End Topbar -->
        </nav>
    </header>

      <script>
window.setTimeout(function() {
    $("#tempAlert").fadeTo(200, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 3000);
</script>
