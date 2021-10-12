<?php

$getlist = $this->football_model->get_logo_settings();
foreach ($getlist as $store){
  $logo_image = $store->logo_image;
}

?>
<!DOCTYPE html>
<html lang="en">
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
   <head>
      <title>Street League</title>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
      <link rel="shortcut icon" href="<?php echo base_url();?>assets/site_assets/img/favicon.ico" type="image/png" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,700|Montserrat:700" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Lato|Roboto&display=swap" rel="stylesheet">
      <link href="<?php echo base_url();?>assets/site_assets/style.css" rel="stylesheet" />
   </head>
   <body>
      <div class="partner">
      <nav>
         <div id="logo" class="navbar-brand"><a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/upload/<?php echo $logo_image; ?>" alt="logo"></a></div>
         <input type="checkbox" id="drop" />
         <ul class="menu">
            <li>
               <!-- First Tier Drop Down -->
               <a href="#"><img src="<?php echo base_url();?>assets/site_assets/img/burger_menu.png" class="menu_icon"></a>
               <input type="checkbox" id="drop-1"/>
               <ul class="menu_dropdown">
                  <li><a href="<?php echo base_url();?>" class="<?php if ($this->uri->segment(1) == '') { echo 'active'; } ?>">Home</a></li>
                  <li><a href="<?php echo site_url('about'); ?>" class="<?php if ($this->uri->segment(1) == 'about') { echo 'active'; } ?>">About us</a></li>
                  <li><a href="<?php echo site_url('partner'); ?>" class="<?php if ($this->uri->segment(1) == 'partner') { echo 'active'; } ?>">Partner With Us</a></li>
                  <li><a href="<?php echo site_url('privacy'); ?>" class="<?php if ($this->uri->segment(1) == 'privacy') { echo 'active'; } ?>">Privacy & Policy</a></li>
                  <li><a href="<?php echo site_url('terms'); ?>" class="<?php if ($this->uri->segment(1) == 'terms') { echo 'active'; } ?>">Terms & Conditions</a></li>
                  <li><a href="<?php echo site_url('contact'); ?>" class="<?php if ($this->uri->segment(1) == 'contact') { echo 'active'; } ?>">Contact US</a></li>
               </ul>
            </li>
         </ul>
      </nav>