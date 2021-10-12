<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Users extends CI_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        if (empty($this->request)) {
            $this->request = json_decode(file_get_contents("php://input"));
        }

        if (isset($_SERVER['HTTP_ORIGIN'])) {
            
			
            header('Access-Control-Allow-Origin: *');

            header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");

            header('Access-Control-Allow-Credentials: true');

            header('Access-Control-Max-Age: 86400');    // cache for 1 day 
        }

		// Access-Control headers are received during OPTIONS requests

        if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

            if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))

                 
                 header('Access-Control-Allow-Methods: POST, GET, OPTIONS');



            if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))

                header("Access-Control-Allow-Headers:        {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

            exit(0);
        } 
    }

public function users_register()
    {
        date_default_timezone_set("Asia/Dubai");
        $current_date_time = date("Y-m-d H:i:s");
    
        $this->load->model('api/user_model','user_model');
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );
        
        $params = array(
            "player_fname" => $this->request->first_name,
            "player_email" => $this->request->email,
            "player_mnumber" => $this->request->phone_number,
            "player_role" => $this->request->player_role,
            "player_password" => md5($this->request->password),
            "player_status" => 0,
            "device_id" => "sadasdad",
            "created_at" => $current_date_time,
            "updated_at" => $current_date_time
        );

        $registered_users = $this->user_model->save_user_exists($params);
         $registered_email_users = $this->user_model->save_user_email_exists($params);
         if(empty($registered_users || $registered_email_users)){
             $result = $this->user_model->save_user($params);
             if(empty($result)){
                 $this->response->status = 500;
                 $this->response->msg = "Error Occured while adding user";
                 echo json_encode($this->response);
                 exit;
             }else{
                 $this->response->status = 200;
                 $this->response->msg = "Added User Successfully";
                 echo json_encode($this->response);
                 exit;
             }
         }else{
             $this->response->status = 200;
             $this->response->msg = "Already Email or Phone Number Exists";
             echo json_encode($this->response);
             exit;
         }
    }

    public function users_login()
    {
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );

        $params = array(
            "player_email" => $this->request->email,
            "player_password" => md5($this->request->password),
        );
        $this->load->model('api/user_model','user_model');

        $result = $this->user_model->validate_user($params);
        
        $base_url = $this->config->config['base_url'];
        if(empty($result)){
            $this->response->status = 500;
            $this->response->msg = "Invalid Email Or Password";
            echo json_encode($this->response);
            exit;
        }else{
	        $player_id = $result['player_id'];
	        $params2 = array(
                "player_id" => $player_id,
                "login_status" => "0"
            );
            $player_login = $this->user_model->player_login_status_update($params2);
	        $player_rat = $this->user_model->get_player_avg_rating($player_id);
	        $team_id = $result['team_id'];
	        $played_tourn = $this->user_model->get_player_played_tournaments($team_id);
            if(empty($result['player_image'])){
                $result['player_image_url'] = $base_url.'assets/upload/man.png';
            }else{
                $result['player_image_url'] = $base_url.'assets/upload/players/'.$result['player_image'];
            }
            if(empty($player_rat['rating'])){
                $result['player_rating'] = '0';
            }else{
                $result['player_rating'] = round($player_rat['rating'],2);
            }
            if(empty($played_tourn['total_played_tourn'])){
                $result['played_tournments'] = '0';
            }else{
                $result['played_tournments'] = $played_tourn['total_played_tourn'];
            }
            $this->response->status = 200;
            $this->response->data = $result;
            $this->response->msg = "Logged In Successfully";
            echo json_encode($this->response);
            exit;
        }
    }

        public function player_profile(){

        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );

        $params = array(
            "player_id" => $this->request->player_id,

        );
        $this->load->model('api/user_model','user_model');
        $this->load->model('api/web_services_model','webservice_model');

        $result = $this->user_model->player_profile_player_id($params);
        
        $player_rat = $this->user_model->get_player_avg_rating($params['player_id']);
        
        $team_id = $result['team_id'];
	    $played_tourn = $this->user_model->get_player_played_tournaments($team_id);
        
        $played_match1 = $this->user_model->player_played_tournaments_count1($team_id);

        $played_match2 = $this->user_model->player_played_tournaments_count2($team_id);

        

        $base_url = $this->config->config['base_url'];
        if(empty($result['team_id'])){
            
        }else{
             $params = array(
            "team_id" => $result['team_id'],
             );
           $team_details= $this->webservice_model->show_by_id_team_model($params); 
           if(empty($team_details['team_logo'])){
                $result['team_logo_url'] = $base_url.'assets/upload/logos.png';
            }else{
                $result['team_logo_url'] = $base_url.'assets/upload/teams/'.$team_details['team_logo'];
            }
        }
        
        if(empty($result)){
            $this->response->status = 500;
            $this->response->msg = "No Data Found";
            echo json_encode($this->response);
            exit;
        }else{
            if(empty($result['player_image'])){
                $result['player_image_url'] = $base_url.'assets/upload/man.png';
            }else{
                $result['player_image_url'] = $base_url.'assets/upload/players/'.$result['player_image'];
            }
            if(empty($player_rat['rating'])){
                $result['player_rating'] = '0';
            }else{
                $result['player_rating'] = round($player_rat['rating'],2);
            }
            if(empty($played_tourn['total_played_tourn'])){
                $result['played_tournments'] = '0';
            }else{
                $result['played_tournments'] = $played_tourn['total_played_tourn'];
            }
            if(empty($played_match1['total_no_tourn'])){
                $result1['no_of_match1'] = '0';
            }else{
                $result1['no_of_match1'] = $played_match1['total_no_tourn'];
            }
             if(empty($played_match2['total_no_booking'])){
                $result2['no_of_match2'] = '0';
            }else{
                $result2['no_of_match2'] = $played_match2['total_no_booking'];
            }
        $result['no_of_matches'] = $result1['no_of_match1']+$result2['no_of_match2'];
            $this->response->status = 200;
            $this->response->data[] = $result;
            $this->response->msg = "Success";
            echo json_encode($this->response);
            exit;
        }
        
    }


    public function player_update()
    {
        date_default_timezone_set("Asia/Dubai");
        $current_date_time = date("Y-m-d H:i:s");
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );
        $params = array(
            "player_id" => $this->request->player_id,
            "player_fname" => $this->request->player_fname,
            "player_email" => $this->request->player_email,
            "player_mnumber" => $this->request->player_number,
            "player_image" => $this->request->player_image,
            "updated_at" => $current_date_time
        );
        $this->load->model('api/user_model','user_model');
        
         //$registered_users = $this->user_model->save_user_exists($params);
        //$registered_email_users = $this->user_model->save_user_email_exists($params);
        //if(empty($registered_users || $registered_email_users)) {
        $result = $this->user_model->player_profile_update($params);
        //die(print_r($params));
        $base_url = $this->config->config['base_url'];
        if(empty($result)){
            $this->response->status = 500;
            $this->response->msg = "Failed to Update player";
            echo json_encode($this->response);
            exit;
        }else{
            $result2 = $this->user_model->player_profile_player_id($params);
            if(empty($result2['player_image'])){
                $result2['player_image_url'] = $base_url.'assets/upload/man.png';
            }else{
                $result2['player_image_url'] = $base_url.'assets/upload/players/'.$result2['player_image'];
            }

            $this->response->status = 200;
            $this->response->data = $result2;
            $this->response->msg = "Player Updated Succefully";
            echo json_encode($this->response);
            exit;

        }
        
    }
   
public function player_profile_upload(){
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );
        $base_url = $this->config->config['base_url'];

        $target_path = "assets/upload/players/";

       /* $target_path = $target_path . basename( $_FILES['file']['name']);
        $image_name = basename( $_FILES['file']['name']);
        $image_url = $base_url.'assets/upload/players/'.$image_name;*/
        
        	$image_name = basename( $_FILES['file']['name']);
        	$extention = strrchr($_FILES['file']['name'], ".");
        	$new_name = time();
        	$new_image_name = $new_name.$extention;
        	
        	$uploaddir = $target_path . $new_image_name;
        	$image_url = $base_url.'assets/upload/players/'.$new_image_name;

        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploaddir)) {

            $this->response = $image_url;
            echo json_encode($this->response);
            exit;
        } else {
            //echo $target_path;
            $this->response = "Image Uploaded Failed";
            echo json_encode($this->response);
            exit;
        }
    }
    
   public function forgot_password_otp()
    {
        $this->load->model('football_model','football_model');
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );

        $params = array(
            "player_email" => $this->request->email
        );
        $this->load->model('api/user_model','user_model');

        $result = $this->user_model->validate_email_user($params);
        
        $base_url = $this->config->config['base_url'];
        if(empty($result)){
            $this->response->status = 500;
            $this->response->msg = "Invalid Email";
            echo json_encode($this->response);
            exit;
        }else{
	        $player_id = $result['player_id'];
	        $emailid = $result['player_email'];
			$rndno=rand(1000, 9999);
			$otpdata = array(
				"create_at" => date("Y-m-d H:i:s"),
				"is_expired" => '0',
				"otp" => $rndno
			);
	        $player_rat = $this->user_model->insert_player_otp($otpdata);
			
			$keyview=$this->user_model->get_smtp_key_settings();
			$db_smtp_from = $keyview['smtp_from'];
			$db_smtp_from_email = $keyview['smtp_from_email'];
			$baseurl =  base_url();
			$getlist = $this->football_model->get_logo_settings();
				foreach ($getlist as $store){
				  $logo_image = $store->logo_image;
				}
				$logo = $logo_image;
			$msgtxt= '<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title></title><link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"><link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">  <style>body{font-family: "Open Sans", sans-serif;}.social-icons {color: #313437;text-align: center;margin: 10px 0;}.social-icons i {font-size: 20px;display: inline-block;color: #d0cccc !important;margin: 0 4px;width: 35px;height: 35px;border: 1px solid #f4848e;text-align: center;border-radius: 50%;line-height: 34px;}.footer-category{background-image: linear-gradient(45deg, #da151ee0 0%, #5e55e2 99%, #6354dd 100%);padding: 10px;}.footer-category ul li {display: inline-block;position: relative;float: inherit;text-align: center;margin: 0 10px;}.footer-category ul li a {color: #f5f4f4;font-size: 17px;word-spacing: 1px;line-height: 1.5;text-decoration: none;}.footer-category ul{width:100%;text-align:center;	} @media screen and (max-width: 600px) {.footer-category ul{width:100%;text-align: -webkit-auto;} }.welcome-reg{font-weight: 600;font-size: 20px;}.register{margin: 0 auto;position: relative;}.btnreg {background: #fd8b8b;width: 180px;padding: 10px;border: 2px solid #ce7d7d;}.btnreg1 {background: #fff;  width: 205px;padding: 10px;border: 2px solid #cab98e;float: right;margin-bottom: 20px;}</style></head><body style="margin:0; padding:0; "><section style="padding: 40px;   font-family: "Open Sans", sans-serif;color: #fff;height: 100vh;"><section style="background: #f5f5f5;width: 100%;box-shadow: 0 0 10px 4px #ecebeb;"><div style="font-size: 30px;color: #000;text-align: center;margin-bottom: 15px;background-image: linear-gradient(45deg, #ffd7d9e0 0%, #dddbff 99%, #c5beff 100%);"><a target="_blank" href="'.$baseurl.'">  <img src="'.$baseurl.'assets/upload/'.$logo.'" alt="logo" style="height: 100px !important;"></a></div></section><section style="margin-top:30px; margin-bottom: 30px"><div style="width: 20%"></div><div style="width: 60%" class="register"><h3 style="font-size: 20px;font-weight: 500;"> Your OTP Number is : '.$rndno.' </h3><p style="font-size: 20px;font-weight: 500;">Cheers! Team Street League</p></div><div style="width: 20%"></div></section></section></body></html>' ;
			
			//$msgtxt= '"OTP is generated .The OTP Number is '.$rndno.' From Street League';
			
			// $msgtxt= $book_id. '"Bookind code is generated .The booking date is '.$params['booking_sdate'].' Please check your notification page';
            $this->load->library('email');
            // FCPATH refers to the CodeIgniter install directory
            // Specifying a file to be attached with the email
            // if u wish attach a file uncomment the script bellow:
            //$file = FCPATH . 'yourfilename.txt';
            // Defines the email details
            $this->email->from($db_smtp_from_email, $db_smtp_from);
            $this->email->to($emailid);
            $this->email->subject('SL - Forgot Password OTP');
            $this->email->message($msgtxt);
            //also this script
            //$this->email->attach($file);
            // The email->send() statement will return a true or false
            // If true, the email will be sent
            if ($this->email->send()) {
                //echo "you are luck!";
            } else {
                //echo $this->email->print_debugger();
            }
			
			$datas = array(
				"player_id" => $player_id,
				"player_email" => $emailid,
				"otp_number" => $rndno
			);
			
            $this->response->status = 200;
			$this->response->data = $datas;
            $this->response->msg = "OTP Sent Successfully";
            echo json_encode($this->response);
            exit;
        }
    }
	
	
	public function otp_verification()
    {
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );

        $params = array(
            "otp" => $this->request->otp
        );
        $this->load->model('api/user_model','user_model');

        $result = $this->user_model->validate_otp_number($params);
        
        $base_url = $this->config->config['base_url'];
        if(empty($result)){
            $this->response->status = 500;
            $this->response->msg = "Invalid OTP!";
            echo json_encode($this->response);
            exit;
        }else{
			$otpdata = array(
				"is_expired" => '1',
				"otp" => $params['otp']
			);
	        $player_rat = $this->user_model->update_player_otp($otpdata);
			
            $this->response->status = 200;
            $this->response->msg = "OTP Verified";
            echo json_encode($this->response);
            exit;
        }
    }
	
	
	public function password_upload()
    {
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );

        $params = array(
            "player_password" => md5($this->request->new_password),
            "player_id" => $this->request->player_id,
        );
        $this->load->model('api/user_model','user_model');

        $result = $this->user_model->update_player_password($params);
        
        $this->response->status = 200;
		$this->response->msg = "Password Updated Successfully";
		echo json_encode($this->response);
		exit;
    }
    
    public function player_logout(){
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );

        $params = array(
            "player_id" => $this->request->player_id,
            "login_status" => "1"
        );
        $this->load->model('api/user_model','user_model');

        $result = $this->user_model->update_player_logout($params);

        $this->response->status = 200;
        $this->response->msg = "LogOut Successfully";
        echo json_encode($this->response);
        exit;
    }





}
