
<?php

$getlist = $this->football_model->get_logo_settings();
foreach ($getlist as $store){
  $logo_image = $store->logo_image;
}



?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Street League - Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Google Fonts -->
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
        <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/css/base/elisyam-1.5.min.css">
       
    </head>
    <body class="bg-white">
        <!-- Begin Preloader -->
        <div id="preloader">
            <div class="canvas">
                <img src="<?php echo base_url();?>assets/upload/<?php echo $logo_image; ?>" alt="logo" class="loader-logo">
                <div class="spinner"></div>   
            </div>
        </div>
        <!-- End Preloader -->
        <!-- Begin Container -->
        <div class="container-fluid no-padding h-100">
            <div class="row flex-row h-100 bg-white">
                <!-- Begin Left Content -->
                <div class="col-xl-8 col-lg-6 col-md-5 no-padding">
                    <div class="elisyam-bg background-01">
                        <div class="elisyam-overlay overlay-01"></div>
                        <div class="authentication-col-content mx-auto">
                            <h1 class="gradient-text-01">
                                Welcome To Street League!
                            </h1>
                            <span class="description">
                                Sports is World and Football is our Nation. 
                            </span>
                        </div>
                    </div>
                </div>
                <!-- End Left Content -->
                <!-- Begin Right Content -->
                <div class="col-xl-4 col-lg-6 col-md-7 my-auto no-padding">
                    <!-- Begin Form -->
                    <div class="authentication-form mx-auto">
                        <div class="logo-centered">
                            <a href="">
                                <img src="<?php echo base_url();?>assets/upload/<?php echo $logo_image; ?>" alt="logo">
                            </a>
                        </div>
                        <h3>Sign In To Street League</h3>
                         <?php 
							$failmsg =  $this->uri->segment(2);
							if($failmsg){
							?>
							<h3 style="color: red;font-size: 16px;" class="text-center">Invalid username and password</h3>
							<?php } ?>
                       
                       
                       <?php  
								$attributes = array( 'method' => 'post', 'id' => 'login-form' ,"name" => "loginform" );echo form_open_multipart("user_login", $attributes);
							?>
                       
                        
                      
                            
                             <div class="form-group row d-flex align-items-center mb-5">
                                               
                                                <div class="col-lg-12">
                                                    <input type="email" class="form-control" name="user_mail" placeholder="Enter your Mail" required>
                                                    
                                                </div>
                                            </div>
                                            
                                             <div class="form-group row d-flex align-items-center mb-5">
                                                
                                                <div class="col-lg-12">
                                                    <input type="password" class="form-control" name="user_password" placeholder="Password" required>
                                                   
                                                </div>
                                            </div>                       
                        <div class="sign-btn text-center">
                         <input type="submit" value="Sign in" class="btn btn-lg btn-gradient-01">                                                            
                        </div>
                        <!--<div class="register">
                            Don't have an account? 
                            <br>
                            <a href="<?php echo site_url('register'); ?>">Create an account</a>
                        </div>-->
                    </div>
                    
                     </form>
                     
                     
                     
                    <!-- End Form -->                        
                </div>
                <!-- End Right Content -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Container -->    
        <!-- Begin Vendor Js -->
        <script src="<?php echo base_url() ?>assets/vendors/js/base/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/vendors/js/base/core.min.js"></script>
        <!-- End Vendor Js -->
        <!-- Begin Page Vendor Js -->
        <script src="<?php echo base_url() ?>assets/vendors/js/app/app.min.js"></script>
         <script src="<?php echo base_url() ?>assets/js/components/validation/validation.min.js"></script>
         
           <script src="<?php echo base_url() ?>assets/js/jquery.validate.js"></script>  
    
         <script src="<?php echo base_url() ?>assets/js/main.js"></script>
        
        <script>

 $('#login-form').validate({
          rules: {
            user_mail: "required",
            user_password: "required",
           
            
          },
          messages: {

              user_mail: " Please enter a valid User Mail Id",
              user_password: " Please enter a valid Password",

          },
          errorPlacement: function (error, element) {
            if (element.parent('.input-group').length || element.prop('type') === 'radio') {
                error.insertAfter(element.parent());
            } else if (element.prop('type') === 'checkbox'){
              error.insertAfter(element.parent().parent().parent());
            }

            else {
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
        <!-- End Page Vendor Js -->
    </body>
</html>