<?php include('Crypto.php')?>
<?php

	error_reporting(0);
	
	$keyview=$this->football_model->get_payment_gateway_key_details();
	
        
	$db_working_key = $keyview['working_key'];

	$workingKey=$db_working_key;		//Working Key should be provided here.
	$encResponse=$_POST["encResp"];			//This is the response sent by the CCAvenue Server
	$rcvdString=decrypt($encResponse,$workingKey);		//Crypto Decryption used as per the specified working key.
	$order_status="";
	$order_id="";
	$tracking_id="";
	$bank_ref_no="";
	$decryptValues=explode('&', $rcvdString);
	$dataSize=sizeof($decryptValues);
	// echo "<center>";

	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
		if($i==0)	$order_id=$information[1];
		if($i==1)	$tracking_id=$information[1];
		if($i==2)	$bank_ref_no=$information[1];
		if($i==3)	$order_status=$information[1];
	}
	
	if($order_status==="Success")
	{
		
		$param = array(
            'payment_status' => '1',
            'tracking_id' => $tracking_id,
            'bank_ref_no' => $bank_ref_no,
            'payment_date' => date('Y-m-d'),
        );
		
       //print_r($param);
        $bdetails = $this->football_model->academy_booikng_payment_update($order_id,$param);
		
		
		
	//	echo $order_id;
		
		$bookview=$this->football_model->academy_booking_view_orderid($order_id);
		
		//echo 'hi'; print_r($bookview);exit;
		
	    foreach($bookview as $val){
			$booking_academy = $val->booking_academy;
			$booking_player = $val->booking_player;
			$bookingdate = $val->booking_date;
			$booking_code = $val->booking_code;
			$no_of_month = $val->no_of_month;
			$booking_time = $val->booking_time;
		}
		
		$params = array(
		"player_id" => $booking_player,
		);
		//echo '1----';
		
		$params2 = array(
		  "academy_id" => $booking_academy
		);
		
		//echo print_r($params);
		
		$player_details = $this->football_model->get_player_mobilenumber($params);
		
	    //echo print_r($player_details);
		$academy_details = $this->football_model->get_academy_owner_details_based_on_academy_id($params2);
		//echo print_r($academy_details);
		$admin_details = $this->football_model->get_admin_details();
		$phonenumbers = array();
		$phonenumbers[] = ltrim($player_details['player_mnumber'], '0');
		$phonenumbers[] = ltrim($admin_details['user_phone'], '0');
		if($academy_details['academy_contact_number'] == $academy_details['user_phone']){
			$phonenumbers[] = ltrim($academy_details['academy_contact_number'], '0');
		}else{
			$phonenumbers[] = ltrim($academy_details['academy_contact_number'], '0');
			$phonenumbers[] = ltrim($academy_details['user_phone'], '0');
		}
		 $emailids[] = $player_details['player_email'];
		 $emailids[] = $admin_details['user_email'];
		 if($academy_details['academy_email'] == $academy_details['user_email']){
			 $emailids[] = $academy_details['academy_email'];		
		 }else{
			$emailids[] = $academy_details['user_email'];
			$emailids[] = $academy_details['academy_email'];		
		 }
		 
	        $sms_details = $this->football_model->get_sms_key_details();
                $api_key = $sms_details['api_key'];
                $sender_id = $sms_details['sender_id'];
				$country_code = $sms_details['country_mobile_code'];
				$text_type = $sms_details['text_type'];
                foreach($phonenumbers as $number){
                    $msgtxt= 'Thank you for registering in the academy with street league. Please wait for confirmation.
								شكراً لتسجيلك في الأكادمية عبر أبلكيشن ستريت ليغ.  لطفاً انتظر للتأكيد. 
								 Booking Code -'.$booking_code.'- رقم الحجز
								 . No.Of Month - '.$no_of_month.' - عدد الأشهر';
								
			$snd = urlencode($sender_id);
			$msg = urlencode($msgtxt);
			$contact = $country_code.$number;
				
			$url ="http://www.elitbuzz-me.com/sms/smsapi?api_key=$api_key&type=$text_type&contacts=$contact&senderid=$snd&msg=$msg";
			  // Set handle
			  $ch = curl_init($url);
			  // Set options
			  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);			  		
			  // Execute curl handle add results to data return array.
			  $result = curl_exec($ch);
			  $returnGroup = ['curlResult' => $result,];
			  curl_close($ch);                 
                }			
		
		 $baseurl =  base_url();
		 $adminlink = $baseurl.'admin/';
		 $getlist = $this->football_model->get_logo_settings();
				foreach ($getlist as $store){
				  $logo_image = $store->logo_image;
				}
				$logo = $logo_image;
		$keyview=$this->football_model->get_smtp_key_settings();
			$db_smtp_from = $keyview['smtp_from'];
			$db_smtp_from_email = $keyview['smtp_from_email'];
			//echo $baseurl.'assets/upload/'.$logo;
			//exit;
			//die(print_r($baseurl.'assets/upload/'.$logo));
        foreach($emailids as $emailid){
			$msgtxt= '<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title></title><link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"><link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">  <style>body{font-family: "Open Sans", sans-serif;}.social-icons {color: #313437;text-align: center;margin: 10px 0;}.social-icons i {font-size: 20px;display: inline-block;color: #d0cccc !important;margin: 0 4px;width: 35px;height: 35px;border: 1px solid #f4848e;text-align: center;border-radius: 50%;line-height: 34px;}.footer-category{background-image: linear-gradient(45deg, #da151ee0 0%, #5e55e2 99%, #6354dd 100%);padding: 10px;}.footer-category ul li {display: inline-block;position: relative;float: inherit;text-align: center;margin: 0 10px;}.footer-category ul li a {color: #f5f4f4;font-size: 17px;word-spacing: 1px;line-height: 1.5;text-decoration: none;}.footer-category ul{width:100%;text-align:center;	} @media screen and (max-width: 600px) {.footer-category ul{width:100%;text-align: -webkit-auto;} }.welcome-reg{font-weight: 600;font-size: 20px;}.register{margin: 0 auto;position: relative;}.btnreg {background: #fd8b8b;width: 180px;padding: 10px;border: 2px solid #ce7d7d;}.btnreg1 {background: #fff;  width: 205px;padding: 10px;border: 2px solid #cab98e;float: right;margin-bottom: 20px;}</style></head><body style="margin:0; padding:0; "><section style="padding: 40px;   font-family: "Open Sans", sans-serif;color: #fff;height: 100vh;"><section style="background: #f5f5f5;width: 100%;box-shadow: 0 0 10px 4px #ecebeb;"><div style="font-size: 30px;color: #000;text-align: center;margin-bottom: 15px;background-image: linear-gradient(45deg, #ffd7d9e0 0%, #dddbff 99%, #c5beff 100%);"><a target="_blank" href="'.$baseurl.'">  <img src="'.$baseurl.'assets/upload/'.$logo.'" alt="logo" style="height: 100px !important;"></a></div></section><section style="margin-top:30px; margin-bottom: 30px"><div style="width: 20%"></div><div style="width: 60%" class="register"><p class="welcome-reg" style="font-size: 20px;font-weight: 500;">Thank you '.ucfirst($player_details['player_fname']).'!<br> We appreciate you registering for academy with Streetleague, your confirmation number is Booking Code : '.$booking_code.'. </p><h3 style="font-size: 20px;font-weight: 500;"> Academy Name : '.$academy_details['academy_name'].' </h3><h3 style="font-size: 20px;font-weight: 500;"> No.Of Month : '.$no_of_month.' </h3><h3 style="font-size: 20px;font-weight: 500;"> LOCATION : '.$academy_details['academy_location'].' </h3><p style="font-size: 16px;font-weight: 500;">Enjoy the other cool features of the app and discover how you can interact with other players and expand your horizon by joining other players and teams in their games!</p><p style="font-size: 16px;font-weight: 500;">We also would like to hear from you your comments and suggestions, and dont worry, we will use them to better enhance our services for you.</p><p style="font-size: 16px;font-weight: 500;">See you on the field and have fun!</p><p style="font-size: 16px;font-weight: 500;">All the best,</p>
				<p style="font-size: 16px;font-weight: 500;">Your Streetleague Team</p><p><button color:linear-gradient(87deg, #ad59ff 0, #7659ff 100%); class="btnreg1"><a target="_blank" style="text-decoration: none;font-size: 18px;color: #000;" href="#">Please check your booking page in mobile app</a></button></p>	</div><div style="width: 20%"></div></section><section><div style="text-align: center; "><img src="'.$baseurl.'assets/img/foot.jpg" style="height: 315px !important;width:100%"></div></section></section></body></html>' ;
			
            $this->load->library('email');
            $this->email->from($db_smtp_from_email, $db_smtp_from);
            $this->email->to($emailid);
            $this->email->subject('SL - Booking Information');
            $this->email->message($msgtxt);
            if ($this->email->send()) {
                //echo "you are luck!";
            } else {
                //echo $this->email->print_debugger();
            }
        }


	}
	else
	{
		//echo "<br>Security Error. Illegal access detected";
	
	}

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Street League</title>
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
</head>

<body>
<div class="success-page"> <img src="<?php echo base_url(); ?>assets/images/logo.png"/>
<?php if($order_status==="Success") { ?>
  <div class="sucessfully">
    <h2 class="success">Payment Successful !</h2>
    <p>We are delighted to inform you that we received your payments</p>
    <img src="<?php echo base_url(); ?>assets/images/checked.png"/></div>
<?php } else { ?>
  <div class="failed">
    <h2 class="fail">Error : Payment was not Declined or Aborted !</h2>
    <p>We are delighted to inform you that we are not received your payments</p>
    <img src="<?php echo base_url(); ?>assets/images/error.png"/></div>
<?php } ?>
</div>
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</body>
</html>