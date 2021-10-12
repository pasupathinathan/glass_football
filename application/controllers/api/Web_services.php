<?php
defined('BASEPATH') OR exit('No direct script access allowed');

date_default_timezone_set("Asia/Kolkata");

class Web_services extends CI_Controller {

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

    public function tournament_list()
    {
    
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );

        $this->load->model('api/web_services_model','webservice_model');

        $result = $this->webservice_model->get_all_tournament_list();
        
        $base_url = $this->config->config['base_url'];

        if(empty($result)){
            $this->response->status = 500;
            $this->response->msg = "No Data Found";
            echo json_encode($this->response);
            exit;
        }else{
           
             foreach($result as $row) {
                 if(empty($row['tour_banner'])){
                    $row['tour_banner_url'] = $base_url.'assets/upload/banner.jpg';
                }else{
                    $row['tour_banner_url'] = $base_url.'assets/upload/tournament/'.$row['tour_banner'];
                }
                if(empty($row['tour_trophy'])){
                    $row['tour_trophy_url'] = $base_url.'assets/upload/cup.png';
                }else{
                    $row['tour_trophy_url'] = $base_url.'assets/upload/tournament/'.$row['tour_trophy'];
                }
                $row['start_date'] = date('d-m-Y',strtotime($row['tour_startdate']));
                $row['end_date'] = date('d-m-Y',strtotime($row['tour_enddate']));
                $row['reg_last_date'] = date('d-m-Y',strtotime($row['tour_reglastdate']));
                $tournament_details[] = $row;
            }
            $this->response->status = 200;
            $this->response->data = $tournament_details;
            $this->response->msg = 'Success';
            echo json_encode($this->response);
            exit;
        }
    }
    
    
    public function tournament_list_by_id()
    {
        
         //die('hi');
        $this->load->model('api/web_services_model','webservice_model');
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );

        $params = array(
            "tour_id" => $this->request->tour_id,
        );
        $result = $this->webservice_model->tournament_list_by_id($params);
        $award_ids = $result['award_id'];
        $award_id = explode(',',$award_ids);
        $get_awards_list = $this->webservice_model->get_tourn_awards($award_id);
        //die(print_r($get_awards_list));
        $base_url = $this->config->config['base_url'];
        if(empty($result)){
             $this->response->status = 500;
            $this->response->msg = "No Data Found";
            echo json_encode($this->response);
            exit;
        }else{
         $result['individual_awards'] = $get_awards_list;
            if(empty($result['tour_banner'])){
                $result['tour_banner_url'] = $base_url.'assets/upload/banner.jpg';
            }else{
                $result['tour_banner_url'] = $base_url.'assets/upload/tournament/'.$result['tour_banner'];
            }
            if(empty($result['tour_trophy'])){
                $result['tour_trophy_url'] = $base_url.'assets/upload/cup.png';
            }else{
                $result['tour_trophy_url'] = $base_url.'assets/upload/tournament/'.$result['tour_trophy'];
            }
            $winning_team = $this->webservice_model->get_winning_team_details($params);
            if(empty($winning_team)){
				$result['Winning_team'] = "No Data Found";
			}else{
			    if(empty($winning_team['team_logo'])){
                    $winning_team['team_logo_url'] = $base_url.'assets/upload/logos.png';
				}else{
					$winning_team['team_logo_url'] = $base_url.'assets/upload/teams/'.$winning_team['team_logo'];
			    }
				$result['Winning_team'] = $winning_team;
			}
             $this->response->status = 200;
             $this->response->data[] = $result;
             $this->response->msg = "Success";
             echo json_encode($this->response);
             exit;
           
        }
    }

    public function grounds_list()
    {
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );

        $this->load->model('api/web_services_model','webservice_model');

        $result = $this->webservice_model->get_ground_list();
        $base_url = $this->config->config['base_url'];

        if(empty($result)){
            $this->response->status = 500;
            $this->response->msg = "No Data Found";
            echo json_encode($this->response);
            exit;
        }else{
        foreach($result as $row) {
                if(empty($row['ground_picture'])){
                    $row['ground_picture_url'] = $base_url.'assets/upload/ground.jpg';
                }else{
                     $bg_ground = $row['ground_picture'];
                    $ground_images = explode(',',$bg_ground);
				  $row['ground_picture_url'] = $base_url.'assets/upload/ground/'.$ground_images[0];
                }	
				$ground_id = $row['ground_id'];
			   $res['g_rating'] =  $this->webservice_model->get_ground_rating_based_on_ground_id($ground_id);
				if(empty($res['g_rating']['rating'])){
					$row['ground_rating'] = '0';
				}else{
					$row['ground_rating'] = $res['g_rating']['rating'];
				}
				 $res['g_price'] =  $this->webservice_model->get_ground_start_price($ground_id);    
					//print_r($res['g_price']);
				if(empty($res['g_price']['ground_price'])){
					$row['ground_price'] = '0';
					$row['ground_discount'] = '';
				}else{
					$row['ground_price'] = $res['g_price']['ground_price'];
					$row['ground_discount'] = $res['g_price']['ground_discount'];
					/*$new_width = ($row['ground_discount'] / 100) * $row['ground_price'];
					$toamount = $row['ground_price'] - $new_width;
					$row['discount_price'] = number_format($toamount, 2, '.', '');*/
					
					$row['discount_price'] = $res['g_price']['after_discount_ground_price'];
				}
				if(empty($res['g_price']['slot'])){
					$row['ground_slot'] = 'null';
				}else{					
					if($res['g_price']['slot'] == 60){
						$row['ground_slot'] = '30 min';
					}elseif($res['g_price']['slot'] == 120){
						$row['ground_slot'] = '1 hr';
					}elseif($res['g_price']['slot'] == 180){
						$row['ground_slot'] = '1:30 hr';
					}elseif($res['g_price']['slot'] == 240){
						$row['ground_slot'] = '2 hr';
					}
				}
                  
                $ground_details[] = $row;				
				//print_r($ground_details);
            }
			//exit;
            $this->response->status = 200;
            $this->response->data = $ground_details;
            $this->response->msg = 'Success';
            echo json_encode($this->response);
            exit;
            
        }
    }
    
        public function grounds_list_based_location()
    {
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );
        $params = array(
            "city" => $this->request->location,
        );
        $this->load->model('api/web_services_model','webservice_model');

        $result = $this->webservice_model->get_ground_list_based_on_location($params);
        $base_url = $this->config->config['base_url'];

        if(empty($result)){
           $this->response->status = 500;
            $this->response->msg = "No Data Found";
            echo json_encode($this->response);
            exit;
        }else{
         foreach($result as $row) {
             if(empty($row['ground_picture'])){
                    $row['ground_picture_url'] = $base_url.'assets/upload/ground.jpg';
                }else{
                    $row['ground_picture_url'] = $base_url.'assets/upload/ground/'.$row['ground_picture'];
                }
                
                $ground_details[] = $row;
            }
            $this->response->status = 200;
            $this->response->data = $ground_details;
            $this->response->msg = 'Success';
            echo json_encode($this->response);
            exit;
            
        }
    }
    
    
    public function grounds_details_based_on_id()
    {
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );
        $params = array(
            "ground_id" => $this->request->ground_id,
        );

        $this->load->model('api/web_services_model','webservice_model');

        $result = $this->webservice_model->get_ground_list_based_on_ground_id($params);
        
        if(empty($result)){
            $this->response->status = 500;
            $this->response->msg = "No Data Found";
            echo json_encode($this->response);
            exit;
        }else{
            $ground_facility_ids = $result['ground_facility_id'];
            $ground_id = $result['ground_id'];
            $ground_facility_id = explode(',',$ground_facility_ids);
            $get_ground_facilities = $this->webservice_model->get_ground_facility($ground_facility_id);
            $get_ground_sizes_duration = $this->webservice_model->get_ground_size_duration($ground_id);
            if(empty($get_ground_sizes_duration)){
                $get_ground_sizes_duration1[] = '';
            }else{
                foreach ($get_ground_sizes_duration as $gsd)
                {
                    $row2['ground_price'] = $gsd['ground_price'];
                    $row2['ground_discount'] = $gsd['ground_discount'];
                    /*$new_width2 = ($row2['ground_discount'] / 100) * $row2['ground_price'];
                    $toamount2 = $row2['ground_price'] - $new_width2;
                    $gsd['discount_price'] = number_format($toamount2, 2, '.', '');*/
					$gsd['discount_price'] = $gsd['after_discount_ground_price'];
                    if(empty($gsd['upto_players'])){
                    $gsd['max_players'] = "0";
                    }else{
                    $gsd['max_players'] = $gsd['upto_players'];
                    }
                    if(empty($gsd['slot'])){
						$gsd['time_slot'] = 'null';
					}else{					
						if($gsd['slot'] == 60){
							$gsd['time_slot'] = '30 min';
						}elseif($gsd['slot'] == 120){
							$gsd['time_slot'] = '1 hr';
						}elseif($gsd['slot'] == 180){
							$gsd['time_slot'] = '1:30 hr';
						}elseif($gsd['slot'] == 240){
							$gsd['time_slot'] = '2 hr';
						}
					}	

                    $get_ground_sizes_duration1[]=$gsd;
                }
            }
            $res['g_rating'] =  $this->webservice_model->get_ground_rating_based_on_ground_id($ground_id);
            if(empty($res['g_rating']['rating'])){
                $row['ground_rating'] = '0';
            }else{
                $row['ground_rating'] = $res['g_rating']['rating'];
            }
            $res['g_price'] =  $this->webservice_model->get_ground_start_price($ground_id);            
            if(empty($res['g_price']['ground_price'])){
                $row['ground_price'] = '0';
                $row['ground_discount'] = '';
				$row['discount_price'] = '';
				$groundsizemsg = 'This ground is not available';
				$statusval = 500;
            }else{
                $row['ground_price'] = $res['g_price']['ground_price'];
                $row['ground_discount'] = $res['g_price']['ground_discount'];
                /*$new_width = ($row['ground_discount'] / 100) * $row['ground_price'];
                $toamount = $row['ground_price'] - $new_width;
                $row['discount_price'] = number_format($toamount, 2, '.', '');*/
				$row['discount_price'] = $res['g_price']['after_discount_ground_price'];
				$groundsizemsg = 'Success';
				$statusval = 200;
            }
            if(empty($res['g_price']['slot'])){
				$row['ground_slot'] = 'null';
			}else{					
				if($res['g_price']['slot'] == 60){
					$row['ground_slot'] = '30 min';
				}elseif($res['g_price']['slot'] == 120){
					$row['ground_slot'] = '1 hr';
				}elseif($res['g_price']['slot'] == 180){
					$row['ground_slot'] = '1:30 hr';
				}elseif($res['g_price']['slot'] == 240){
					$row['ground_slot'] = '2 hr';
				}
			}
            
            $base_url = $this->config->config['base_url'];

            $image_ground = explode(',',$result['ground_picture']);
			$ground_banner = array();
            foreach ($image_ground as $gp)
            {
                if(!empty($gp))
                {
                    $result1['ground_picture_url'] = $base_url.'assets/upload/ground/'.$gp;
                    $ground_banner[] = $result1;
                }
                else
                {
                    $result['ground_picture_url'] = $base_url.'assets/upload/ground.jpg';
                }
            }
            $result['rating'] = $row['ground_rating'];
            $result['ground_price'] = $row['ground_price'];
            $result['discount_price'] = $row['discount_price'];
            $result['ground_slot'] = $row['ground_slot'];
            $result['ground_facilities'] = $get_ground_facilities;
            $result['ground_sizes_duration'] = $get_ground_sizes_duration1;
            $result['ground_image_url'] = $ground_banner;
            $this->response->status = $statusval;
            $this->response->data = $result;
            $this->response->msg = $groundsizemsg;
            echo json_encode($this->response);
            exit;
        }

        }
    
     
     public function grounds_list_based_rating(){
       $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );


        $ratings = explode(',',$this->request->rating);
         //die(print_r($ratings));
        $this->load->model('api/web_services_model','webservice_model');

        $result = $this->webservice_model->get_ground_list_based_on_rating($ratings);
        $base_url = $this->config->config['base_url'];

        if(empty($result)){
             $this->response->status = 500;
            $this->response->msg = "No Data Found";
            echo json_encode($this->response);
            exit;
        }else{
        foreach($result as $row) {
                if(empty($row['ground_picture'])){
                    $row['ground_picture_url'] = $base_url.'assets/upload/ground.jpg';
                }else{
                    $row['ground_picture_url'] = $base_url.'assets/upload/ground/'.$row['ground_picture'];
                }
                
                $ground_details[] = $row;
            }
            $this->response->status = 200;
            $this->response->data = $ground_details;
            $this->response->msg = 'Success';
            echo json_encode($this->response);
            exit; 
        }
       
   }
   
    
    
        public function grounds_list_based_price()
    {
        $this->load->model('api/web_services_model','webservice_model');
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );
        $params = array(
            "start_price" => $this->request->start_price,
            "end_price" => $this->request->end_price
        );

        $result = $this->webservice_model->get_ground_list_based_on_price($params);
        $base_url = $this->config->config['base_url'];
foreach($result as $row) {
                if(empty($row['ground_picture'])){
                    $row['ground_picture_url'] = $base_url.'assets/upload/ground.jpg';
                }else{
                    $row['ground_picture_url'] = $base_url.'assets/upload/ground/'.$row['ground_picture'];
                }
                $ground_details[] = $row;
            }
        if(empty($result)){
            $this->response->status = 500;
            $this->response->msg = "No Data Found";
            echo json_encode($this->response);
            exit;
            
        }else{
        $this->response->status = 200;
            $this->response->data = $ground_details;
            $this->response->msg = 'Success';
            echo json_encode($this->response);
            exit;
            
        }
    }
    
    public function tournament_register(){
        $this->load->model('api/web_services_model','webservice_model');
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );

        $params = array(
            "tour_id" => $this->request->tour_id,
            "team_id" => $this->request->team_id,
            "status" => 1
           );

   $team_check_exist = $this->webservice_model->team_exist_tour($params);

   $team_player_list = $this->webservice_model->tournament_team_limit($params);
   $reg_team_limit = $team_player_list['total_palyers'];

   $get_player_limit = $this->webservice_model->get_tour_team_limit($params);
   $get_team_limit = $get_player_limit['tour_playerlimit'];

 //die(print_r($team_check_exist));
   if($team_check_exist > 0){
     $this->response->status = 500;
     $this->response->msg = "Team Already registered";
     echo json_encode($this->response);
     exit;
   }else{
    // if($team_player_list['total_palyers'] >= $get_player_limit['tour_playerlimit']){

      $val_team_limit = $this->webservice_model->tournament_list_by_id($params);
      $team_limit = $val_team_limit['tour_teamlimit'];
      $cmpl_team_limit = $val_team_limit['tour_cmp_limit'];
      //die(print_r($cmpl_team_limit));
      if($team_limit <= $cmpl_team_limit){
          $this->response->status = 500;
          $this->response->msg = "Not Available Tournament";
          echo json_encode($this->response);
          exit;
      }else{
          $cmplt_limit = array(
              "tour_cmp_limit" => $cmpl_team_limit + 1
          );
          $team_cmplt_limit = $this->webservice_model->update_limit_cmplt_limit($params,$cmplt_limit);
          $result = $this->webservice_model->register_tornament($params);
          if(empty($result)){
              $this->response->status = 500;
              $this->response->msg = "No Data Found";
              echo json_encode($this->response);
              exit;
          }else{
              $this->response->status = 200;
              $this->response->msg = "Success";
              echo json_encode($this->response);
              exit;
          }
      }
    // }else {
    //   $this->response->status = 500;
    //   $this->response->msg = "Less Players";
    //   echo json_encode($this->response);
    //   exit;
    // }
    }
   
  }
    
    public function booked_tournaments(){
        $this->load->model('api/web_services_model','webservice_model');
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );
        $params = array(
            "team_id" => $this->request->team_id,
            "player_id" => $this->request->player_id,
        );

        $result = $this->webservice_model->tournament_list_based_team_player_id($params);

        $base_url = $this->config->config['base_url'];
        if(empty($result)){
            $this->response->status = 500;
            $this->response->msg = "No Data Found";
            echo json_encode($this->response);
            exit;
        }else{
            foreach($result as $row) {
               if(empty($row['tour_banner'])){
                    $row['tournament_banner_url'] = $base_url.'assets/upload/banner.jpg';
                }else{
                    $row['tournament_banner_url'] = $base_url.'assets/upload/tournament/'.$row['tour_banner'];
                }  
                $booked_tournament[] = $row;
            }
            $this->response->status = 200;
            $this->response->data = $booked_tournament;
            $this->response->msg = 'Success';
            echo json_encode($this->response);
            exit;
        }
    }

    public function two_team_match_details(){
       $this->load->model('api/web_services_model','webservice_model');
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );
        $team_ids = explode(',',$this->request->team_id);
        $team1_id = $team_ids[0];
        $team2_id = $team_ids[1];
        $result1 = $this->webservice_model->get_first_team_match_details($team1_id);
        $result2 = $this->webservice_model->get_second_team_match_details($team2_id);
        //die(print_r($result1));
        $base_url = $this->config->config['base_url'];
        if(empty($result1)){
            $this->response->status = 500;
            $this->response->msg = "No Data Found";
            echo json_encode($this->response);
            exit;
        }else{
            foreach($result1 as $row1) {
            if(empty($row1['player_image'])){
                    $row1['player_image1_url'] = $base_url.'assets/upload/man.png';
                }else{
                   $row1['player_image1_url'] = $base_url.'assets/upload/players/'.$row1['player_image'];
                }
                
                $two_team_details1[] = $row1;
            }
            foreach($result2 as $row2) {
            if(empty($row2['player_image'])){
                    $row2['player_image2_url'] = $base_url.'assets/upload/man.png';
                }else{
                    $row2['player_image2_url'] = $base_url.'assets/upload/players/'.$row2['player_image'];
                }
                
                $two_team_details2[] = $row2;
            }

            $two_team_details['team1']= $two_team_details1;
            $two_team_details['team2']= $two_team_details2;
            $this->response->status = 200;
            $this->response->data = $two_team_details;
            $this->response->msg = 'Success';
            echo json_encode($this->response);
            exit;
        }
    }
    
         public function after_booked_tournament_details(){
        $this->load->model('api/web_services_model','webservice_model');
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );

        $params = array(
            "tour_id" => $this->request->tour_id,
        );
        $result = $this->webservice_model->tournament_list_by_id($params);

        $tour_team_schedule = $this->webservice_model->tournament_schedule_goals_based_tour_id($params);
        
        $tour_team_past_schedule = $this->webservice_model->get_past_tournament_schedule_based_tour_id($params);
        
        $tour_team_upcoming_schedule = $this->webservice_model->get_upcoming_tournament_schedule_based_tour_id($params);

        $tour_match_result = $this->webservice_model->get_tournament_match_result_based_on_tour_id($params);

        $base_url = $this->config->config['base_url'];
        if(empty($result)){
            $this->response->status = 500;
            $this->response->msg = "No Data Found";
            echo json_encode($this->response);
            exit;
        }else{
         if(empty($result['tour_banner'])){
                $result['tour_banner_url'] = $base_url.'assets/upload/banner.jpg';
            }else{
                $result['tour_banner_url'] = $base_url.'assets/upload/tournament/'.$result['tour_banner'];
            }
            if(empty($result['tour_trophy'])){
                $result['tour_trophy_url'] = $base_url.'assets/upload/cup.png';
            }else{
                $result['tour_trophy_url'] = $base_url.'assets/upload/tournament/'.$result['tour_trophy'];
            }
            if(empty($tour_team_schedule)){
            $result['team_schedule'] = "Not Scheduled";
			 }else{
			foreach($tour_team_schedule as $row) {
                $row['two_team_ids'] = $row['team1'].','. $row['team2'];
				
                if(empty($row['team_logo1'])){
                $row['team_logo1_url'] = $base_url.'assets/upload/logos.png';
				}else{
					$row['team_logo1_url'] = $base_url.'assets/upload/teams/'.$row['team_logo1'];
				}
				if(empty($row['team_logo2'])){
					 $row['team_logo2_url'] = $base_url.'assets/upload/logos.png';
				}else{
					$row['team_logo2_url'] = $base_url.'assets/upload/teams/'.$row['team_logo2'];
				} 
				$row['Scheduled_date'] = date("l d F Y" , strtotime($row['date']));
				$row['Scheduled_time'] = date("H:i" , strtotime($row['time']));
				
				$menus = explode(',', $row['two_team_ids']);
				$tour_team_points = $this->webservice_model->current_tourn_teams_points($row,$menus);
				if(empty($tour_team_points)){
				    $row['team1_goals'] = 0;
					$row['team1_win'] = 0;
					$row['team2_goals'] = 0;
					$row['team2_win'] = 0;
					$row['team1_goal'] = 'null';
					$row['team1_wins'] = 'null';
					$row['team2_goal'] = 'null';
					$row['team2_wins'] = 'null';
				}else{
				 foreach($tour_team_points as $ttp){
				    if($row['team1'] == $ttp['team_id']){
						if($ttp['tie'] == 1){
							$row['team1_goal'] = $ttp['goals_scored'];
							$row['team1_goals'] = $ttp['goals_scored'];
				        	$row['team1_win'] = $ttp['tie'];
				        	$row['team1_wins'] = $ttp['tie'];
						}else{
							if(empty($ttp['goals_scored'] || $ttp['wins'])){
				                $row['team1_goal'] = 0;
				                $row['team1_goals'] = 0;
					            $row['team1_win'] = 0;
					            $row['team1_wins'] = 0;
				            }else{
				                $row['team1_goal'] = $ttp['goals_scored'];
				                $row['team1_goals'] = $ttp['goals_scored'];
				        	    $row['team1_win'] = $ttp['wins'];
				        	    $row['team1_wins'] = $ttp['wins'];
				            }  
						}
				            
							
				    }
				     if($row['team2'] == $ttp['team_id']){
						 if($ttp['tie'] == 1){
						    $row['team2_goal'] = $ttp['goals_scored'];
							$row['team2_goals'] = $ttp['goals_scored'];
				        	$row['team2_win'] = $ttp['tie'];
				        	$row['team2_wins'] = $ttp['tie'];
						  }else{
				            if(empty($ttp['goals_scored'] || $ttp['wins'])){
				                $row['team2_goal'] = 0;
				                $row['team2_goals'] = 0;
					            $row['team2_win'] = 0;
					            $row['team2_wins'] = 0;
				            }else{
				                $row['team2_goal'] = $ttp['goals_scored'];
				                $row['team2_goals'] = $ttp['goals_scored'];
				        	    $row['team2_win'] = $ttp['wins'];
				        	    $row['team2_wins'] = $ttp['wins'];
				            } 
						  }							
				        }
				    
                    }  
				}
				
                $tour_team_schedule_details[] = $row;
            }
            
            $result['team_schedule'] = $tour_team_schedule_details;
			}
			
			if(empty($tour_match_result)){
			   $result['team_match_results'] = "Not Played Yet"; 
			}else{
			    $result['team_match_results'] = $tour_match_result;	
			}
			
			if(empty($tour_team_past_schedule)){
            $result['team_past_schedule'] = "Not Scheduled";
			 }else{
			foreach($tour_team_past_schedule as $row) {
                $row['two_team_ids'] = $row['team1'].','. $row['team2'];
                if(empty($row['team_logo1'])){
                $row['team_logo1_url'] = $base_url.'assets/upload/logos.png';
            }else{
                $row['team_logo1_url'] = $base_url.'assets/upload/teams/'.$row['team_logo1'];
            }
            if(empty($row['team_logo2'])){
                 $row['team_logo2_url'] = $base_url.'assets/upload/logos.png';
            }else{
                $row['team_logo2_url'] = $base_url.'assets/upload/teams/'.$row['team_logo2'];
            }     
                $tour_team_past_schedule_details[] = $row;
            }
            
            $result['team_past_schedule'] = $tour_team_past_schedule_details;
			}
			
			
				if(empty($tour_team_upcoming_schedule)){
            $result['team_upcoming_schedule'] = "Not Scheduled";
			 }else{
			foreach($tour_team_upcoming_schedule as $row) {
                $row['two_team_ids'] = $row['team1'].','. $row['team2'];
                if(empty($row['team_logo1'])){
                $row['team_logo1_url'] = $base_url.'assets/upload/logos.png';
            }else{
                $row['team_logo1_url'] = $base_url.'assets/upload/teams/'.$row['team_logo1'];
            }
            if(empty($row['team_logo2'])){
                 $row['team_logo2_url'] = $base_url.'assets/upload/logos.png';
            }else{
                $row['team_logo2_url'] = $base_url.'assets/upload/teams/'.$row['team_logo2'];
            }     
                $tour_team_upcoming_schedule_details[] = $row;
            }
            
            $result['team_upcoming_schedule'] = $tour_team_upcoming_schedule_details;
			}
			
			
			$tour_team_total_points = $this->webservice_model->get_tournament_total_points_based_on_tour_id($params);
			if(empty($tour_team_total_points)){
				$result['A'] = [];
				$result['B'] = [];
				$result['C'] = [];
				$result['D'] = [];
				$result['E'] = [];
				$result['F'] = [];
				$result['QuaterF'] = [];
				$result['SemiF'] = [];
				$result['Finals'] = [];
			}else{
				$A = array();
				foreach($tour_team_total_points as $row_data){
					if('A' == $row_data['team_group']){
					  $A[] = $row_data;
				    }
				}
				$B = array();
				foreach($tour_team_total_points as $row_data){
					if('B' == $row_data['team_group']){
					  $B[] = $row_data;
				    }
				}
				$C = array();
				foreach($tour_team_total_points as $row_data){
					if('C' == $row_data['team_group']){
					  $C[] = $row_data;
				    }
				}
				$D = array();
				foreach($tour_team_total_points as $row_data){
					if('D' == $row_data['team_group']){
					  $D[] = $row_data;
				    }
				}
				$E = array();
				foreach($tour_team_total_points as $row_data){
					if('E' == $row_data['team_group']){
					  $E[] = $row_data;
				    }
				}
				$F = array();
				foreach($tour_team_total_points as $row_data){
					if('F' == $row_data['team_group']){
					  $F[] = $row_data;
				    }
				}
				$QuaterF = array();
				foreach($tour_team_total_points as $row_data){
					if('QuaterF' == $row_data['team_group']){
					  $QuaterF[] = $row_data;
				    }
				}
				$SemiF = array();
				foreach($tour_team_total_points as $row_data){
					if('SemiF' == $row_data['team_group']){
					  $SemiF[] = $row_data;
				    }
				}
				$Finals = array();
				foreach($tour_team_total_points as $row_data){
					if('Finals' == $row_data['team_group']){
					  $Finals[] = $row_data;
				    }
				}
				
				$result['A'] = $A;
				$result['B'] = $B;
				$result['C'] = $C;
				$result['D'] = $D;
				$result['E'] = $E;
				$result['F'] = $F;
				$result['QuaterF'] = $QuaterF;
				$result['SemiF'] = $SemiF;
				$result['Finals'] = $Finals;
			}
            $this->response->status = 200;
            $this->response->data[] = $result;
            $this->response->msg = "Success";
            echo json_encode($this->response);
            exit;
        }
    }

    public function two_team_match_statistics(){
        $this->load->model('api/web_services_model','webservice_model');
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );
        $tour_id = $this->request->tour_id;
        $team_ids = explode(',',$this->request->team_id);
        $team1_id = $team_ids[0];
        $team2_id = $team_ids[1];
        $result1 = $this->webservice_model->get_first_team_match_statistics($tour_id,$team1_id);
        $result2 = $this->webservice_model->get_second_team_match_statistics($tour_id,$team2_id);
        $base_url = $this->config->config['base_url'];
        if(empty($result1)){
            $this->response->status = 500;
            $this->response->msg = "No Data Found";
            echo json_encode($this->response);
            exit;
        }else{
            foreach($result1 as $row1) {
             if(empty($row1['team_logo'])){
                    $row1['player_logo1_url'] = $base_url.'assets/upload/logos.png';
                }else{
                   $row1['player_logo1_url'] = $base_url.'assets/upload/teams/'.$row1['team_logo'];
                }
                
                $two_team_statistics1[] = $row1;
            }
            foreach($result2 as $row2) {
             if(empty($row2['team_logo'])){
                    $row2['player_logo2_url'] = $base_url.'assets/upload/logos.png';
                }else{
                   $row2['player_logo2_url'] = $base_url.'assets/upload/teams/'.$row2['team_logo'];
                }
                
                $two_team_statistics2[] = $row2;
            }
            $two_team_statistics['team1']= $two_team_statistics1;
            $two_team_statistics['team2']= $two_team_statistics2;
            $this->response->status = 200;
            $this->response->data = $two_team_statistics;
            $this->response->msg = 'Success';
            echo json_encode($this->response);
            exit;
        }
    }
         
    
    
    
    
    
    
    
        /*Mayavel Coding Starts*/
    
      public function show_team_ci()
        {

        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );
       
         $this->load->model('api/web_services_model','webservice_model');
        $params = array(
            "player_id" => $this->request->playr_id,
        );
        $result2=$this->webservice_model->show_team_model($params);
        
        $base_url = $this->config->config['base_url'];

        if(empty($result2)){
            $this->response->status = 500;
            $this->response->msg = "No Data Found";
            echo json_encode($this->response);
            exit;
        }else{
            foreach($result2 as $row){
                if(empty($row['team_logo'])){
                    $row['team_logo_url'] = $base_url.'assets/upload/logos.png';
                }else{
                    $row['team_logo_url'] = $base_url.'assets/upload/teams/'.$row['team_logo'];
                }
                $team_id = $row['team_id'];
                $res['t_rating'] =  $this->webservice_model->get_team_rating_based_on_team_id($team_id);
                if(empty($res['t_rating']['rating'])){
                    $row['team_rating'] = '0';
                }else{
                    $row['team_rating'] = $res['t_rating']['rating'];
                }

                $team_details[] = $row;
            }

            $this->response->status = 200;
            $this->response->data = $team_details;
            $this->response->msg = 'Success';
            echo json_encode($this->response);
            exit;

        }
    }
    

        public function by_id_team_ci()
    {
        $this->load->model('api/web_services_model', 'webservice_model');
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );
        $params = array(
            "team_id" => $this->request->team_id,
        );
        $result4 = $this->webservice_model->show_by_id_team_model($params);
        //die(print_r($result4));
        if(empty($result4['team_id'])){
                $this->response->status = 500;
                $this->response->msg = "No team in this id";
                echo json_encode($this->response);
                exit;
        }else{
        $team_players = $this->webservice_model->show_players_based_on_team_id($params);
        $forwarder = $this->webservice_model->show_players_forwarder_on_team_id($params);
        $mid_fielder = $this->webservice_model->show_players_mid_fielder_on_team_id($params);
        $defender = $this->webservice_model->show_players_defender_on_team_id($params);
        $goal_keeper = $this->webservice_model->show_players_goal_keeper_on_team_id($params);
        $friendly_games = $this->webservice_model->show_friendly_games_count_on_team_id($params);
         $res['t_rating'] =  $this->webservice_model->get_team_rating_based_on_team_id($params['team_id']);
        $base_url = $this->config->config['base_url'];
        
        if (empty($result4)) {
            $this->response->status = 500;
            $this->response->msg = "No Data Found";
            echo json_encode($this->response);
            exit;
        } else {
            if (empty($result4['team_logo'])) {
                $result4['team_logo_url'] = $base_url . 'assets/upload/logos.png';
            } else {
                $result4['team_logo_url'] = $base_url . 'assets/upload/teams/' . $result4['team_logo'];
            }
            if (empty($result4['tourn_wins'])) {
                $result4['team_wins'] = 0;
            } else {
                $result4['team_wins'] = $result4['tourn_wins'];
            }
            if (empty($result4['scores'])) {
                $result4['team_scores'] = 0;
            } else {
                $result4['team_scores'] = $result4['scores'];
            }
            if (empty($friendly_games['friendly_count'])) {
                $result4['friendly_count'] = 0;
            } else {
                $result4['friendly_count'] = $friendly_games['friendly_count'];
            }
            if(empty($res['t_rating']['rating'])){
                $result4['team_rating'] = '0';
            }else{
                $result4['team_rating'] = $res['t_rating']['rating'];
            }
            foreach ($team_players as $row) {
                if (empty($row['player_image'])) {
                    $row['player_image_url'] = $base_url . 'assets/upload/man.png';
                } else {
                    $row['player_image_url'] = $base_url . 'assets/upload/players/' . $row['player_image'];
                }
                $team_players_details[] = $row;
            }
            if (empty($team_players_details)) {
                $this->response->status = 500;
                $this->response->data = $result4;
                $this->response->msg = "Doesn't have any players in these team";
                echo json_encode($this->response);
                exit;
            } else {
                $result4['team_players_details'] = $team_players_details;
                $result4['forwarder'] = $forwarder;
                $result4['mid_fielder'] = $mid_fielder;
                $result4['defender'] = $defender;
                $result4['goal_keeper'] = $goal_keeper;

                $this->response->status = 200;
                $this->response->data = $result4;
                $this->response->msg = "Success";
                echo json_encode($this->response);
                exit;
            }
        }
        }
        
        
    }
    
    public function grounds_list_based_on_location()
    {
        $this->load->model('api/web_services_model','webservice_model');
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );
        $data = explode(',',$this->request->ground_city);

        $result = $this->webservice_model->get_ground_list_based_on_ground_location_name($data);

        $base_url = $this->config->config['base_url'];
        if(empty($result)){
            $this->response->status = 500;
            $this->response->msg = "No Data Found";
            echo json_encode($this->response);
            exit;
        }else{
            foreach($result as $row) {
                if(empty($row['ground_picture'])){
                    $row['ground_picture_url'] = $base_url.'assets/upload/ground.jpg';
                }else{
                    $bg_ground = $row['ground_picture'];
                    $ground_images = explode(',',$bg_ground);
                    $ground_id = $row['ground_id'];
                    $res['g_rating'] =  $this->webservice_model->get_ground_rating_based_on_ground_id($ground_id);
                    if(empty($res['g_rating']['rating'])){
                        $row['ground_rating'] = '0';
                    }else{
                        $row['ground_rating'] = $res['g_rating']['rating'];
                    }
                    $res['g_price'] =  $this->webservice_model->get_ground_start_price($ground_id);
                    if(empty($res['g_price']['ground_price'])){
                        $row['ground_price'] = '0';
                        $row['ground_discount'] = '';
                    }else{
                        $row['ground_price'] = $res['g_price']['ground_price'];
                        $row['ground_discount'] = $res['g_price']['ground_discount'];
                        /*$new_width = ($row['ground_discount'] / 100) * $row['ground_price'];
						$toamount = $row['ground_price'] - $new_width;
						$row['discount_price'] = number_format($toamount, 2, '.', '');*/
						$row['discount_price'] = $res['g_price']['after_discount_ground_price'];
						if(empty($res['g_price']['slot'])){
        					$row['ground_slot'] = 'null';
        				}else{					
        					if($res['g_price']['slot'] == 60){
        						$row['ground_slot'] = '30 min';
        					}elseif($res['g_price']['slot'] == 120){
        						$row['ground_slot'] = '1 hr';
        					}elseif($res['g_price']['slot'] == 180){
        						$row['ground_slot'] = '1:30 hr';
        					}elseif($res['g_price']['slot'] == 240){
        						$row['ground_slot'] = '2 hr';
        					}
        				}
                    }
                    $row['ground_picture_url'] = $base_url.'assets/upload/ground/'.$ground_images[0];
                }
                $ground_details[] = $row;
            }
            $this->response->status = 200;
            $this->response->data = $ground_details;
            $this->response->msg = 'Success';
            echo json_encode($this->response);
            exit;

        }

    }

public function add_team()
    {
        $this->load->model('api/web_services_model','webservice_model');
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );
     
         $params=array(
            'team_name'=> $this->request->team_name,
            'captain_id'=> $this->request->captain_id,
            'team_size'=> $this->request->team_size,
            'team_city'=> $this->request->team_city,
            'team_date'=> date('Y/m/d'),
            'created_at'=> date('Y/m/d H:i:s'),
            'team_logo' => $this->request->team_logo
        );
     

        $team_name_exists = $this->webservice_model->team_name_already($params);
        //die(print_r($team_name_exists));
        if(empty($team_name_exists)){
            $result = $this->webservice_model->save_team($params);
            $player_data = array(
                "player_id" => $params['captain_id'],
                "team_id" => $result,
                "team_role" => 'Captain'
            );
            $player_update = $this->webservice_model->get_update_player_team_id($player_data);
             $team_details = $this->webservice_model->get_team_details_based_on_team_id($result);
            if(empty($result)){
                $this->response->status = 500;
                $this->response->msg = "Error Occured while adding user";
                echo json_encode($this->response);
                exit;
            }else{
                $this->response->status = 200;
                $this->response->msg = "Added Team Successfully";
                $this->response->data = $team_details;
                echo json_encode($this->response);
                exit;

            }
        }else{
            $this->response->status = 500;
            $this->response->msg = "Team name is not available";
            echo json_encode($this->response);
            exit;
        }
    }
    
    public function team_update()
    {
		$this->load->model('api/web_services_model','webservice_model');
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );
        if($this->request->team_id == ''){
			$this->response->status = 500;
            $this->response->msg = "Team id is required";
            echo json_encode($this->response);
            exit;
		}
		if($this->request->team_name == ''){
			$this->response->status = 500;
            $this->response->msg = "Team id is required";
            echo json_encode($this->response);
            exit;
		}
		if($this->request->captain_id == ''){
			$this->response->status = 500;
            $this->response->msg = "Captain id is required";
            echo json_encode($this->response);
            exit;
		}
		if($this->request->team_size == ''){
			$this->response->status = 500;
            $this->response->msg = "Team size is required";
            echo json_encode($this->response);
            exit;
		}
		if($this->request->team_city == ''){
			$this->response->status = 500;
            $this->response->msg = "Team city is required";
            echo json_encode($this->response);
            exit;
		}
		if($this->request->team_logo == ''){
			$this->response->status = 500;
            $this->response->msg = "Team logo is required";
            echo json_encode($this->response);
            exit;
		}
        $params = array(
            "team_id" => $this->request->team_id,
            'team_name'=> $this->request->team_name,
            'captain_id'=> $this->request->captain_id,
            'team_size'=> $this->request->team_size,
            'team_city'=> $this->request->team_city,
            'team_logo' => $this->request->team_logo
        );
        $result = $this->webservice_model->team_update($params);
        $base_url = $this->config->config['base_url'];
        if(empty($result)){
            $this->response->status = 500;
            $this->response->msg = "Failed to update team";
            echo json_encode($this->response);
            exit;
        }else{
            $result2 = $this->webservice_model->get_team_based_on_team_id($params);
            if(empty($result2['team_logo'])){
                $result2['team_logo_url'] = $base_url.'assets/upload/logos.png';
            }else{
                $result2['team_logo_url'] = $base_url.'assets/upload/teams/'.$result2['team_logo'];
            }

            $this->response->status = 200;
            $this->response->data = $result2;
            $this->response->msg = "Team updated Succefully";
            echo json_encode($this->response);
            exit;

        }
        
    }

public function get_players()
{
    $this->load->model('api/web_services_model','webservice_model');

    $this->response = (Object)array(
        "status" => 500,
        "msg" => "error"
    );

    $result=$this->webservice_model->get_player_list();
    $base_url = $this->config->config['base_url'];
 
    if(empty($result)){
        $this->response->status = 500;
        $this->response->msg = "No Data Found";
        echo json_encode($this->response);
        exit;
    }else{
    foreach($result as $row){
           if(empty($row['player_image'])){
                $row['player_image_url'] = $base_url.'assets/upload/man.png';
            }else{
                $row['player_image_url'] = $base_url.'assets/upload/players/'.$row['player_image'];
            }
            $player_details[] = $row;
        }

        $this->response->status = 200;
        $this->response->data = $player_details;
        $this->response->msg = 'Success';
        echo json_encode($this->response);
        exit;  
    }

}

public function post_logo_url()
{
    $this->load->model('api/web_services_model','webservice_model');

    $this->response = (Object)array(
        "status" => 500,
        "msg" => "error"
    );

    $base_url = $this->config->config['base_url'];
    $result = $base_url.'assets/upload/teams/';

    if($result){

        $this->response->status = 200;
        $this->response->url = $result;
        $this->response->msg = "Success";
        echo json_encode($this->response);
        exit;
    }else{
        $this->response->status = 500;
        $this->response->msg = "No Data Found";
        echo json_encode($this->response);
        exit;
    }

}



public function get_all_ground_locations(){
   $this->response = (Object)array(
          "status" => 500,
          "msg" => "error"
      );

      $this->load->model('api/web_services_model','webservice_model');

      $result = $this->webservice_model->get_ground_city();
      $result1 = array_values(array_column($result,NULL,'ground_city'));
      if(empty($result1)){
          $this->response->status = 500;
          $this->response->msg = "No Data Found";
          echo json_encode($this->response);
          exit;
      }else{
          $this->response->status = 200;
          $this->response->data = $result1;
          $this->response->msg = 'Success';
          echo json_encode($this->response);
          exit;

      }
  }
  
  public function player_rating()
  {
    $this->load->model('api/web_services_model','webservice_model');
    $this->response = (Object)array(
        "status" => 500,
        "msg" => "error"   );

        $params = array(
            "player_id" => $this->request->player_id,
            "given_player_id" => $this->request->given_player_id,
            "review" => $this->request->review,
            "rating" => $this->request->rating,
            "status" => 1
           );
  $result = $this->webservice_model->player_evaluation($params);

  if(empty($result)){
      $this->response->status = 500;
      $this->response->msg = "Error Occured";
      echo json_encode($this->response);
      exit;
  }else{
      $this->response->status = 200;
      $this->response->msg = "Review Added Successfully";
    //  $this->response->data = $result;
      echo json_encode($this->response);
      exit;

  }
  }

  
	public function get_ground_openclose_time()
    {
        $this->load->model('api/web_services_model','webservice_model');
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );
        $params=array(
            'ground_id'=> $this->request->ground_id,
            'ground_size_id'=>$this->request->ground_size_id,
            'booking_date'=>$this->request->booking_date
        );

        $time_details = $this->webservice_model->ground_hour_details($params);
        $getslot = $this->webservice_model->ground_slot_details_based_size($params);
        
        if(empty($time_details)){
            $this->response->status = 500;
            $this->response->msg = "Not available ground timings";
            echo json_encode($this->response);
            exit;
        }else{
            if($time_details['day_on_off'] == 'off'){
                $this->response->status = 500;
                $this->response->msg = "Selected day is Holiday. Please choose another date to select time slot.";
                echo json_encode($this->response);
                exit;
            }else{
                $starttime  = date("H:i", strtotime($time_details['open_time']));
                $endtime  = date("H:i", strtotime($time_details['close_time']));
                $duration = '30';  // split by 60 mins
                $start_time    = strtotime ($starttime); 
                $end_time      = strtotime ($endtime);
                $add_mins  = $duration * 60; //30mins slot 
                //$add_mins  = $duration * ($getslot['slot']);
                $i = 0;
				$bookingtime = '';
				$temparray = array();
				$time_details_booking = $this->webservice_model->ground_hour_detail_based_bookings($params);
				$time_details_bulk_booking = $this->webservice_model->bulk_ground_hour_detail_based_bookings($params);
				
				$temparray1 = array();				
				 if (!empty($time_details_bulk_booking)) {
					foreach ($time_details_bulk_booking as $row1){
						 /*10 mins interval slots free */
                        $seconds = strtotime(date('Y-m-d H:i:s')) - strtotime($row1['created_at']);
                        
                        $hours = floor($seconds / 3600);
                        $mins = floor(($seconds - ($hours * 3600)) / 60);
                        //$mins = floor(($seconds - ($hours * 3600)) / ($getslot['slot']));
                        $time = $mins;
                        if ($seconds < ($getslot['slot']) * 60) {
                        //if ($seconds < ($getslot['slot']) * ($getslot['slot'])) {
                            $time = $mins;
                        }
                        /*10 mins interval slots free */
						if($bookingtime ==  ''){
						$bookingtime = $row1['booking_time'];
						}else{
							$bookingtime .= ','.$row1['booking_time'];
						}
					}					
					$temparray1 =explode(',',$bookingtime);
				}
				
				$temparray2 = array();
				 if (!empty($time_details_booking)) {
					foreach ($time_details_booking as $row){
						 /*10 mins interval slots free */
                        $seconds = strtotime(date('Y-m-d H:i:s')) - strtotime($row['created_at']);
                        
                        $hours = floor($seconds / 3600);
                        $mins = floor(($seconds - ($hours * 3600)) / 60);
                        //$mins = floor(($seconds - ($hours * 3600)) / ($getslot['slot']));
                        $time = $mins;
                        if ($seconds < ($getslot['slot']) * 60) {
                        //if ($seconds < ($getslot['slot']) * ($getslot['slot'])) {
                            $time = $mins;
                        }
                        
                        if ($time > 5 && $row['booking_paymenttype'] == 'card' && $row['payment_status'] == 2) {
                            $bking_id = $row['booking_id'];                           
                            $booking_code = $row['booking_code'];
                            $del_payment = $this->webservice_model->ground_payment_delete($booking_code);
                            $del_booking = $this->webservice_model->ground_booking_delete($bking_id);
                        }
                        /*10 mins interval slots free */
						if($bookingtime ==  ''){
						$bookingtime = $row['booking_time'];
						}else{
							$bookingtime .= ','.$row['booking_time'];
						}
					}					
					$temparray2 =explode(',',$bookingtime);
				}
				$temparray = array_merge($temparray1,$temparray2);
				
				if($start_time < $end_time){
				    // $hour_time = date ("H:i", $start_time);
				    // $hours_ti = date ("H:i", $end_time);
				    // echo $start_time,"<br>", $end_time,"<br>",$hour_time,"<br>",$hours_ti; exit;
    				while ($start_time < $end_time)	{
    					$hours_time = date ("H:i", $start_time);
    					$start_time += $add_mins;
    					if(in_array($hours_time, $temparray)) {						
    						$booking_time_slots['time_slot'] = $hours_time;
    						$booking_time_slots['colour'] = 'red';
    				// 		$booking_time_slots['end_slot'] = date("H:i", strtotime($hours_time)+(30*60));
    						$booking_time_slots['end_slot'] = date("H:i", strtotime($hours_time)+(30*($getslot['slot'])));
    					} else {					
    						$booking_time_slots['time_slot'] = $hours_time;
    						$booking_time_slots['colour'] = 'green';
    				// 		$booking_time_slots['end_slot'] = date("H:i", strtotime($hours_time)+(30*60));
    						$booking_time_slots['end_slot'] = date("H:i", strtotime($hours_time)+(30*($getslot['slot'])));
    					}					
    					$time_slot_array[] = $booking_time_slots;
    				}
				}else{
				    $start_tim  = date("H:i", strtotime('11:30 PM'));
                    $end_tim  = date("H:i", strtotime('12:00 AM'));
                    $_11_30PM    = strtotime ($start_tim); 
                    $_12AM      = strtotime ($end_tim);
                    // echo $start_time,"<br>",$end_time,"<br>",$_11_30PM,"<br>",$_12AM;exit;
				    // $hour_time = date ("H:i", $start_time);
				    // $hours_ti = date ("H:i", $_11_30);
				    // echo $start_time,"<br>", $_11_30,"<br>",$hour_time,"<br>",$hours_ti;
				    while ($start_time <= $_11_30PM)	{
    					$hours_time = date ("H:i", $start_time);
    					$start_time += $add_mins;
    					if(in_array($hours_time, $temparray)) {						
    						$booking_time_slots['time_slot'] = $hours_time;
    						$booking_time_slots['colour'] = 'red';
    				// 		$booking_time_slots['end_slot'] = date("H:i", strtotime($hours_time)+(30*60));
    						$booking_time_slots['end_slot'] = date("H:i", strtotime($hours_time)+(30*($getslot['slot'])));
    					} else {					
    						$booking_time_slots['time_slot'] = $hours_time;
    						$booking_time_slots['colour'] = 'green';
    				// 		$booking_time_slots['end_slot'] = date("H:i", strtotime($hours_time)+(30*60));
    						$booking_time_slots['end_slot'] = date("H:i", strtotime($hours_time)+(30*($getslot['slot'])));
    					}					
    					$time_slot_array1[] = $booking_time_slots;
				    }
				    while ($_12AM < $end_time)	{
    					$hours_time = date ("H:i", $_12AM);
    					$_12AM += $add_mins;
    					if(in_array($hours_time, $temparray)) {						
    						$booking_time_slots['time_slot'] = $hours_time;
    						$booking_time_slots['colour'] = 'red';
    				// 		$booking_time_slots['end_slot'] = date("H:i", strtotime($hours_time)+(30*60));
    						$booking_time_slots['end_slot'] = date("H:i", strtotime($hours_time)+(30*($getslot['slot'])));
    					} else {					
    						$booking_time_slots['time_slot'] = $hours_time;
    						$booking_time_slots['colour'] = 'green';
    				// 		$booking_time_slots['end_slot'] = date("H:i", strtotime($hours_time)+(30*60));
    						$booking_time_slots['end_slot'] = date("H:i", strtotime($hours_time)+(30*($getslot['slot'])));
    					}					
    					$time_slot_array2[] = $booking_time_slots;
				    }
				    $time_slot_array = array_merge($time_slot_array1,$time_slot_array2);
				}
                             
                $this->response->status = 200;
                $this->response->msg = "Time Details Displayed Successfully";
                $this->response->data = $time_slot_array;
                echo json_encode($this->response);
                exit;
            }
        }
    }
    public function upcoming_booked_tournaments(){
        $this->load->model('api/web_services_model','webservice_model');
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );
        $params = array(
            "team_id" => $this->request->team_id,
            "player_id" => $this->request->player_id,
        );

        $result = $this->webservice_model->upcoming_tournament_list_based_team_player_id($params);

        $base_url = $this->config->config['base_url'];
        if(empty($result)){
            $this->response->status = 500;
            $this->response->msg = "No Data Found";
            echo json_encode($this->response);
            exit;
        }else{
            foreach($result as $row) {
               if(empty($row['tour_banner'])){
                    $row['tournament_banner_url'] = $base_url.'assets/upload/banner.jpg';
                }else{
                    $row['tournament_banner_url'] = $base_url.'assets/upload/tournament/'.$row['tour_banner'];
                }  
                $booked_tournament[] = $row;
            }
            $this->response->status = 200;
            $this->response->data = $booked_tournament;
            $this->response->msg = 'Success';
            echo json_encode($this->response);
            exit;
        }
    }
	
	
	public function past_booked_tournaments(){
        $this->load->model('api/web_services_model','webservice_model');
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );
        $params = array(
            "team_id" => $this->request->team_id,
            "player_id" => $this->request->player_id,
        );

        $result = $this->webservice_model->past_tournament_list_based_team_player_id($params);

        $base_url = $this->config->config['base_url'];
        if(empty($result)){
            $this->response->status = 500;
            $this->response->msg = "No Data Found";
            echo json_encode($this->response);
            exit;
        }else{
            foreach($result as $row) {
               if(empty($row['tour_banner'])){
                    $row['tournament_banner_url'] = $base_url.'assets/upload/banner.jpg';
                }else{
                    $row['tournament_banner_url'] = $base_url.'assets/upload/tournament/'.$row['tour_banner'];
                }  
                $booked_tournament[] = $row;				
            }
            $this->response->status = 200;
            $this->response->data = $booked_tournament;
            $this->response->msg = 'Success';
            echo json_encode($this->response);
            exit;
        }
    }
	
	
    public function addplayer_send_sms()
    {
        $this->load->model('api/web_services_model', 'webservice_model');
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );
        $params = array(
            'team_id' => $this->request->team_id,
            'player_id' => $this->request->player_id
        );
        for($i=0;$i<count($params['player_id']);$i++){
            $data['player_id'] = $params['player_id'][$i];
            $data['team_id'] = $params['team_id'];
            $player_request_send = $this->webservice_model->add_team_request_exists_or_not($data);
            if(isset($player_request_send['player_id']) == isset($data['player_id'])){

            }else{
                $noti_save = $this->webservice_model->save_add_team_notification($data);
                $team_details = $this->webservice_model->get_player_teamname($params);
                /*** Push Notification For Invite Player For Team   STARTS ***/
                $this->load->library(['FirebaseNotification', 'Firebase']);
                $this->firebasenotification->setTitle('Player Invite From Team');
                $this->firebasenotification->setMessageBody('* ' . ucfirst($team_details['team_name']) . ' * has invited you to join their team. Log in to Street League now to accept / deny their invitation');
                $resp = $this->firebase->sendNotification($this->webservice_model->get_user_device_token($params['player_id']), $this->firebasenotification);
                /*** Push Notification For Invite Player For Team  ENDS ***/
            }
        }
        $this->response->status = 200;
        $this->response->msg = "SMS sent Successfully";
        echo json_encode($this->response);
        exit;
    }

    public function get_add_player_notification(){
        $this->load->model('api/web_services_model','webservice_model');
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );
        $params = array(
            "player_id" => $this->request->player_id,
        );

        $result = $this->webservice_model->get_add_player_notification_based_player_id($params);
        $base_url = $this->config->config['base_url'];
        
		if(empty($result)){
            $this->response->status = 500;
            $this->response->msg = "No Data Found";
            echo json_encode($this->response);
            exit;
        }else {
            foreach($result as $row) {
					if(empty($result['team_logo'])){
						$row['team_logo_url'] = $base_url.'assets/upload/logos.png';
					}else{
						$row['team_logo_url'] = $base_url.'assets/upload/teams/'.$row['team_logo'];
					}
					$add_player_notification[] = $row;	
            }
        }
		

            $this->response->status = 200;
            $this->response->data = $add_player_notification;
            $this->response->msg = 'Success';
            echo json_encode($this->response);
            exit;
    }

   public function addplayer_accept()
    {
        $this->load->model('api/web_services_model','webservice_model');
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );
        $params=array(
            'team_id'=> $this->request->team_id,
            'player_id'=>$this->request->player_id,
            'noti_status'=>$this->request->noti_status,
            'at_noti_id'=>$this->request->at_noti_id
        );
        $params2=array(
            'team_id'=> $this->request->team_id,
            'player_id'=>$this->request->player_id,
        );
        $team_player_size1 = $this->webservice_model->get_player_team_size($params2);
        $team_player_size2 = $this->webservice_model->get_join_team_size($params2);
        $a1 = $team_player_size1['total_player'];
        $a2 = $team_player_size2['total_player'];
        //echo ($a1+$a2);
        $a3 = $a1+$a2;
        $team_size = $this->webservice_model->get_team_size($params2);
        //die(print_r($team_player_size));
        if(empty($team_size)){
            $this->response->status = 500;
            $this->response->msg = "Team size not available";
            echo json_encode($this->response);
            exit;
        }
       
        if($team_size['team_size'] > $a3){
            $noti_save = $this->webservice_model->add_player_accepted($params);
            $player_details = $this->webservice_model->get_player_mobilenumber($params);
            $captain_details = $this->webservice_model->get_captain_details($params2);
            //print_r($captain_details);
            //exit;
            if($this->request->noti_status == 1){
                $player_update_team = $this->webservice_model->added_player_in_current_team($params2);
                /*** Push Notification Accept Invitation form Player  STARTS ***/
                $this->load->library(['FirebaseNotification','Firebase']);
                $this->firebasenotification->setTitle('Player Invite From Team');
                $this->firebasenotification->setMessageBody('* '.ucfirst($player_details['player_fname']).' * has accepted to join your team! Have fun with your squad!');
                $this->firebase->sendNotification($this->webservice_model->get_user_device_token([$captain_details['player_id']]), $this->firebasenotification);
                /*** Push Notification Accept Invitation form Player ***/
                $this->response->status = 200;
                $this->response->msg = "Player Accepted";
                echo json_encode($this->response);
                exit;
            }else{
                /*** Push Notification Accept Invitation form Player  STARTS ***/
                $this->load->library(['FirebaseNotification','Firebase']);
                $this->firebasenotification->setTitle('Player Invite From Team');
                $this->firebasenotification->setMessageBody('* '.ucfirst($player_details['player_fname']).' * has rejected to join your team!');
                $this->firebase->sendNotification($this->webservice_model->get_user_device_token([$captain_details['player_id']]), $this->firebasenotification);
                /*** Push Notification Accept Invitation form Player ***/
                $this->response->status = 200;
                $this->response->msg = "Player Rejected";
                echo json_encode($this->response);
                exit;
            }
        }else{
            $res = $this->webservice_model->player_team_noti_exit($params2);
            $this->response->status = 500;
            $this->response->msg = "Sorry Team has reached maximum count";
            echo json_encode($this->response);
            exit;
        }

    }
	
	
	public function jointeam_send_sms()
    {
        $this->load->model('api/web_services_model','webservice_model');
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );
        //echo json_encode($this->request->team_id);die();
        $params=array(
            'team_id'=> $this->request->team_id,
            'player_id'=>$this->request->player_id,
            'captain_id'=>$this->request->captain_id
        );
		
		$join_team_request_sent = $this->webservice_model->join_team_exists_or_not($params);

        if(empty($join_team_request_sent)){
			$jt_noti_save = $this->webservice_model->save_join_team_notification($params);

			$team_details1 = $this->webservice_model->get_players_captainmobile($params);
			if(empty($team_details1)){
				$this->response->status = 200;
				$this->response->msg = "Not Found Data";
				echo json_encode($this->response);
				exit;
			}else{
				$player_details1 = $this->webservice_model->get_player_mobilenumber($params);       
				/*** Push Notification For Join Player Accept  STARTS ***/
				$this->load->library(['FirebaseNotification','Firebase']);
				$this->firebasenotification->setTitle('Join Player');
				$this->firebasenotification->setMessageBody('* '.ucfirst($player_details1['player_fname']).' * has requested to join your team. Log in to Street League now to accept / deny their request.');
				$this->firebasenotification->setPayload(array());
				$this->firebase->sendNotification($this->webservice_model->get_user_device_token([$team_details1['player_id']]), $this->firebasenotification);

				/*** Push Notification For Join Player Accept  ENDS ***/

				$this->response->status = 200;
				$this->response->msg = "SMS sent Successfully";
				echo json_encode($this->response);
				exit;
			}
		}else{
			 $this->response->status = 200;
            $this->response->msg = "Already Request Sent";
            echo json_encode($this->response);
            exit;
		}
		

    }

    public function get_join_team_notification(){
        $this->load->model('api/web_services_model','webservice_model');
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );
        $params = array(
            "captain_id" => $this->request->captain_id,
            "team_id" => $this->request->team_id,
        );

        $result = $this->webservice_model->get_join_team_notification_based_player_id($params);
        $base_url = $this->config->config['base_url'];
         
        if(empty($result)){
            $this->response->status = 500;
            $this->response->msg = "No Data Found";
            echo json_encode($this->response);
            exit;
        }else {
                  foreach($result as $row) {
                      if(empty($row['player_image'])){
                		$row['player_image_url'] = $base_url.'assets/upload/player.png';
                		}else{
                			$row['player_image_url'] = $base_url.'assets/upload/players/'.$row['player_image'];
                		}
                		if(empty($row['player_ratings'])){
                		    $row['player_ratings'] = "0";
                		}else{
                			$row['player_ratings'] = $row['player_ratings'];
                		}
                		$add_player_notification[] = $row;
                  }
            
        }

        $this->response->status = 200;
        $this->response->data = $add_player_notification;
        $this->response->msg = 'Success';
        echo json_encode($this->response);
        exit;
    }

   public function join_player_accept(){

        $this->load->model('api/web_services_model','webservice_model');
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );
        $params=array(
            'team_id'=> $this->request->team_id,
            'player_id'=>$this->request->player_id,
            'jt_noti_status'=>$this->request->jt_noti_status,
            'jt_noti_id'=>$this->request->jt_noti_id
        );
        $params2=array(
            'team_id'=> $this->request->team_id,
            'player_id'=>$this->request->player_id,
        );
         $team_player_size1 = $this->webservice_model->get_player_team_size($params2);
        $team_player_size2 = $this->webservice_model->get_join_team_size($params2);
        $a1 = $team_player_size1['total_player'];
        $a2 = $team_player_size2['total_player'];
        //echo ($a1+$a2);
        $a3 = $a1+$a2;
        $team_size = $this->webservice_model->get_team_size($params2);
        if(empty($team_size)){
            $this->response->status = 500;
            $this->response->msg = "Team size not available";
            echo json_encode($this->response);
            exit;
        }
       
        if($team_size['team_size'] > $a3) {
            $noti_join_player_save = $this->webservice_model->join_team_player_accepted($params);
            $player_details = $this->webservice_model->get_player_mobilenumber($params2);
            $team_details = $this->webservice_model->get_player_teamname($params2);
            if ($this->request->jt_noti_status == 1) {

                $join_player_update_team = $this->webservice_model->join_team_player_in_current_team($params2);
                /*** Push Notification For Join Player Accept  STARTS ***/

                $this->load->library(['FirebaseNotification', 'Firebase']);
                $this->firebasenotification->setTitle('Join Player Accept');
                $this->firebasenotification->setMessageBody('* ' . ucfirst($team_details['team_name']) . ' * has accepted your request to join their team! Have fun with your squad!');
                $this->firebase->sendNotification($this->webservice_model->get_user_device_token([$player_details['player_id']]), $this->firebasenotification);

                /*** Push Notification For Join Player Accept  ENDS ***/

                $this->response->status = 200;
                $this->response->msg = "Captain Accepted";
                echo json_encode($this->response);
                exit;
            } else {
                /*** Push Notification For Join Player Accept  STARTS ***/

                $this->load->library(['FirebaseNotification', 'Firebase']);
                $this->firebasenotification->setTitle('Join Player Accept');
                $this->firebasenotification->setMessageBody('* ' . ucfirst($team_details['team_name']) . ' * has rejected your request to join their team!');
                $this->firebase->sendNotification($this->webservice_model->get_user_device_token([$player_details['player_id']]), $this->firebasenotification);

                /*** Push Notification For Join Player Accept  ENDS ***/
                $this->response->status = 200;
                $this->response->msg = "Captain Rejected";
                echo json_encode($this->response);
                exit;
            }
        }else{
            $res = $this->webservice_model->player_join_team_noti_exit($params2);
            $this->response->status = 500;
            $this->response->msg = "Sorry Team has reached maximum count";
            echo json_encode($this->response);
            exit;
        }
    }
    
   public function ground_filter_options(){
        $this->load->model('api/web_services_model','webservice_model');
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );
        $params = array(
            "rating_filter" => $this->request->rating_filter,
            "min_price" => 0,
            "max_price" => $this->request->price_filter,
        );

        $result = $this->webservice_model->display_ground_filter($params);

        $base_url = $this->config->config['base_url'];
        if(empty($result)){
            $this->response->status = 500;
            $this->response->msg = "No Data Found";
            echo json_encode($this->response);
            exit;
        }else{
            foreach($result as $row) {
                if(empty($row['ground_picture'])){
                    $row['ground_picture_url'] = $base_url.'assets/upload/ground.jpg';
                }else{
                    $bg_ground = $row['ground_picture'];
                    $ground_images = explode(',',$bg_ground);
                    $ground_id = $row['ground_id'];
                    $res['g_rating'] =  $this->webservice_model->get_ground_rating_based_on_ground_id($ground_id);
                    if(empty($res['g_rating']['rating'])){
                        $row['ground_rating'] = '0';
                    }else{
                        $row['ground_rating'] = $res['g_rating']['rating'];
                    }
                    $res['g_price'] =  $this->webservice_model->get_ground_start_price($ground_id);
                    if(empty($res['g_price']['ground_price'])){
                        $row['ground_price'] = '0';
                    }else{
                        $row['ground_price'] = $res['g_price']['ground_price'];
                    }
                    $row['ground_picture_url'] = $base_url.'assets/upload/ground/'.$ground_images[0];
                }
                $ground_details[] = $row;
            }
            $this->response->status = 200;
            $this->response->data = $ground_details;
            $this->response->msg = 'Success';
            echo json_encode($this->response);
            exit;

        }
    }
    
public function insert_booking_data(){
    $this->load->model('api/web_services_model','webservice_model');
    $this->load->model('football_model','football_model');
    $this->response = (Object)array(
      "status" => 500,
      "msg" => "error"
    );

    $code_details = $this->webservice_model->get_booking_code();

    if($code_details['book_code'] == 0){
      $bookid = 1000;
    }else{
      $bookid = $code_details['book_code']  + 1;
    }

    $book_id = 'SL-'.$bookid;
	

    
   $params = array(
    "player_id" => $this->request->booking_player,
    );
	
	$groundarr = array(
      "ground_id" => $this->request->booking_ground
    );
    
   
    $player_details = $this->webservice_model->get_player_mobilenumber($params);
    $ground_details = $this->webservice_model->get_ground_list_based_on_ground_id($groundarr);
    $admin_details = $this->webservice_model->get_admin_details();
	$phonenumbers = array();
	$phonenumbers[] = ltrim($player_details['player_mnumber'], '0');
	$phonenumbers[] = ltrim($ground_details['ground_phone'], '0');
	$phonenumbers[] = ltrim($admin_details['user_phone'], '0');
	$phonenumbers[] = ltrim($ground_details['user_phone'], '0');
	
	 $emailids[] = $player_details['player_email'];
	 $emailids[] = $admin_details['user_email'];
	 $emailids[] = $ground_details['ground_email'];
	 $emailids[] = $ground_details['user_email'];
	 
	 $ground_name = $ground_details['ground_name'];
	 	
    $data = array(
      "booking_code" => $book_id,
      "book_code" => $bookid,
      "booking_ground" => $this->request->booking_ground,
      "booking_ground_size" => $this->request->ground_size,
      "booking_groundcity" => $ground_details['ground_city'],
      "booking_player" => $this->request->booking_player,
      "booking_team" => $player_details['team_id'],
      "booking_sdate" => $this->request->booking_sdate,
      "booking_time" => $this->request->booking_time,
      "booking_paymenttype" => $this->request->booking_paymenttype,
      "booking_amount" => $this->request->booking_amount,
	"booking_type" => 'App',
      "booking_approval" => '0',
      "booking_status" => '0',
      "payment_status" => '2',
      "created_at" => date('Y-m-d H:i:s'),
    );

	
	 //payment module
        if($this->request->booking_paymenttype == 'card'){
            $mode = 1;
        }else{
            $mode = 2;
        }
        $sl_commission = $ground_details['ground_sl_commission'];
        $grandtotal = $this->request->booking_amount;
        $new_amount = ($sl_commission / 100) * $grandtotal;
        $groundamount = $grandtotal - $new_amount;
        $paymentparams = array(
            "booking_id" =>  $book_id,
            "ground_id" =>  $this->request->booking_ground,
            "player_id" =>  $this->request->booking_player,
            "ground_owner_id" =>$ground_details['ground_owner_id'],
            "payment_mode" =>  $mode,
            "payment_amount" =>  $this->request->booking_amount,
            "groundowner_amount" =>  $groundamount,
            "sl_amount" =>  $new_amount,
            "payment_status" => '2'
        );


      $result = $this->webservice_model->save_booking_details($data);

	  $result2 = $this->webservice_model->save_payment_details($paymentparams);
	  
	  if($this->request->booking_paymenttype == 'cash'){
	  //sms configuration
	        $sms_details = $this->webservice_model->get_sms_key_details();
                $api_key = $sms_details['api_key'];
                $sender_id = $sms_details['sender_id'];
				$country_code = $sms_details['country_mobile_code'];
				$text_type = $sms_details['text_type'];
				$data_arr = explode(',',$data['booking_time']);
                 foreach($data_arr as $time){
                 	$ti = strtotime($time);
                    $addtime = date("H:i", strtotime('+30 minutes', $ti));
                    $time_arr[] = $time.' to '.$addtime;
                 }
                 $time_str = implode(',', $time_arr);
                foreach($phonenumbers as $number){
                    $msgtxt='Thank you for booking with street league in '.$ground_name.'. Please wait for confirmation.
                    يرجى الانتظار .. سوف يتم تأكيد حجز ملعب '.$ground_name.' عبر أبلكيشن Street League بعد لحظات
							 Booking Code -'.$book_id.'- رقم الحجز
							 . Date -'.date("d-m-Y",strtotime($data['booking_sdate'])).'- تاريخ الحجز 
							 . Time -'.$time_str.'-وقت الحجز';
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
		$keyview=$this->webservice_model->get_smtp_key_details();
			$db_smtp_from = $keyview['smtp_from'];
			$db_smtp_from_email = $keyview['smtp_from_email'];
			
        foreach($emailids as $emailid){
			$msgtxt= '<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title></title><link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"><link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">  <style>body{font-family: "Open Sans", sans-serif;}.social-icons {color: #313437;text-align: center;margin: 10px 0;}.social-icons i {font-size: 20px;display: inline-block;color: #d0cccc !important;margin: 0 4px;width: 35px;height: 35px;border: 1px solid #f4848e;text-align: center;border-radius: 50%;line-height: 34px;}.footer-category{background-image: linear-gradient(45deg, #da151ee0 0%, #5e55e2 99%, #6354dd 100%);padding: 10px;}.footer-category ul li {display: inline-block;position: relative;float: inherit;text-align: center;margin: 0 10px;}.footer-category ul li a {color: #f5f4f4;font-size: 17px;word-spacing: 1px;line-height: 1.5;text-decoration: none;}.footer-category ul{width:100%;text-align:center;	} @media screen and (max-width: 600px) {.footer-category ul{width:100%;text-align: -webkit-auto;} }.welcome-reg{font-weight: 600;font-size: 20px;}.register{margin: 0 auto;position: relative;}.btnreg {background: #fd8b8b;width: 180px;padding: 10px;border: 2px solid #ce7d7d;}.btnreg1 {background: #fff;  width: 205px;padding: 10px;border: 2px solid #cab98e;float: right;margin-bottom: 20px;}</style></head><body style="margin:0; padding:0; "><section style="padding: 40px;   font-family: "Open Sans", sans-serif;color: #fff;height: 100vh;"><section style="background: #f5f5f5;width: 100%;box-shadow: 0 0 10px 4px #ecebeb;"><div style="font-size: 30px;color: #000;text-align: center;margin-bottom: 15px;background-image: linear-gradient(45deg, #ffd7d9e0 0%, #dddbff 99%, #c5beff 100%);"><a target="_blank" href="'.$baseurl.'">  <img src="'.$baseurl.'assets/upload/'.$logo.'" alt="logo" style="height: 100px !important;"></a></div></section><section style="margin-top:30px; margin-bottom: 30px"><div style="width: 20%"></div><div style="width: 60%" class="register"><p class="welcome-reg" style="font-size: 20px;font-weight: 500;">Thank you '.ucfirst($player_details['player_fname']).'!<br> We appreciate you booking with Streetleague, your confirmation number is Booking Code : '.$book_id.'. </p><h3 style="font-size: 20px;font-weight: 500;"> Date : '.$data['booking_sdate'].' </h3><h3 style="font-size: 20px;font-weight: 500;"> Time : '.$data['booking_time'].' </h3><h3 style="font-size: 20px;font-weight: 500;"> LOCATION : '.$ground_details['ground_location'].' </h3><p style="font-size: 16px;font-weight: 500;">Enjoy the other cool features of the app and discover how you can interact with other players and expand your horizon by joining other players and teams in their games!</p><p style="font-size: 16px;font-weight: 500;">We also would like to hear from you your comments and suggestions, and dont worry, we will use them to better enhance our services for you.</p><p style="font-size: 16px;font-weight: 500;">See you on the field and have fun!</p><p style="font-size: 16px;font-weight: 500;">All the best,</p>
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
      if(empty($result)){
        $this->response->status = 500;
        $this->response->msg = "No Data Found";
        echo json_encode($this->response);
        exit;
      }else{
        $this->response->status = 200;
        $this->response->msg = "Success";
        $this->response->data = $data;
        echo json_encode($this->response);
        exit;
      }


  }
  
    
    public function delete_team()
	{
	  $this->response = (Object)array(
	      "status" => 500,
	      "msg" => "error"
	  );
	  $this->load->model('api/web_services_model','webservice_model');
	
	  $params = array(
	      "team_id" => $this->request->team_id,
	  );
	$tourn_team = $this->webservice_model->check_team_exist($params);
	//die(print_r($tourn_team));
	if(empty($tourn_team)) {
	$result = array(
	 $this->webservice_model->delete_player($params),
	 $this->webservice_model->delete_team($params));
	 if($result > 0){
	      $this->response->status = 200;
	      $this->response->msg = "Delete Successfully";
	      echo json_encode($this->response);
	      exit;
	  }else{
	      $this->response->status = 500;
	      $this->response->msg = "Error Occured while deleting";
	      echo json_encode($this->response);
	      exit;
	  }
	}
	else {
	  $this->response->status = 500;
	  $this->response->msg = "Your team is registered to an tournament. So you can't delete your team now";
	  echo json_encode($this->response);
	  exit;
	}
	  
	}
	
	public function image_upload(){
	    $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );
        $base_url = $this->config->config['base_url'];
        
       $target_path = "assets/upload/teams/";
	 
/*	$target_path = $target_path . basename( $_FILES['file']['name']);
	$image_name = basename( $_FILES['file']['name']);
	$image_url = $base_url.'assets/upload/teams/'.$image_name;*/
	
	$image_name = basename( $_FILES['file']['name']);
	$extention = strrchr($_FILES['file']['name'], ".");
	$new_name = time();
	$new_image_name = $new_name.$extention;
	
	$uploaddir = $target_path . $new_image_name;
	$image_url = $base_url.'assets/upload/teams/'.$new_image_name;
	
	 
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
	
	public function price_sorting(){
        $this->load->model('api/web_services_model','webservice_model');
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );
        $params=array(
            'sort_price'=> $this->request->sort_price,
        );

        if($params['sort_price'] == 1){
            //$result = $this->webservice_model->get_sorting_price_low_details($params);
            $result =  $this->webservice_model->get_ground_low_price();
			$base_url = $this->config->config['base_url'];
            if(empty($result)){
                $this->response->status = 500;
                $this->response->msg = "No Data Found";
                echo json_encode($this->response);
                exit;
            }else{
                foreach($result as $row) {

                    if(empty($row['ground_picture'])){
                        $row['ground_picture_url'] = $base_url.'assets/upload/ground.jpg';
                    }else{
                        $bg_ground = $row['ground_picture'];
                        $ground_images = explode(',',$bg_ground);
                        $ground_id = $row['ground_id'];
                        $res['g_rating'] =  $this->webservice_model->get_ground_rating_based_on_ground_id($ground_id);
                        if(empty($res['g_rating']['rating'])){
                            $row['ground_rating'] = '0';
                        }else{
                            $row['ground_rating'] = $res['g_rating']['rating'];
                        }
                        
                        if($row['after_discount_ground_price'] > 0){
                            $row['ground_price'] = $row['g_price'];
                            $row['ground_discount'] = $row['g_discount'];
							$row['discount_price'] = $row['after_discount_ground_price'];
                        }else{
							$row['ground_price'] = '0';
							$row['discount_price'] = '0';
                        }
						if($row['g_discount'] > 0){
                            $row['ground_discount'] = $row['g_discount'];
                        }else{
                            $row['ground_discount'] = '';
                        }
                        if(empty($row['slot'])){
        					$row['ground_slot'] = 'null';
        				}else{					
        					if($row['slot'] == 60){
        						$row['ground_slot'] = '30 min';
        					}elseif($row['slot'] == 120){
        						$row['ground_slot'] = '1 hr';
        					}elseif($row['slot'] == 180){
        						$row['ground_slot'] = '1:30 hr';
        					}elseif($row['slot'] == 240){
        						$row['ground_slot'] = '2 hr';
        					}
        				}
                        $row['ground_picture_url'] = $base_url.'assets/upload/ground/'.$ground_images[0];
                    }
                    $ground_details[] = $row;
                }
				
                $this->response->status = 200;
                $this->response->data = $ground_details;
                $this->response->msg = 'Success';
                echo json_encode($this->response);
                exit;
            }
        }elseif($params['sort_price'] == 2){
            //$result = $this->webservice_model->get_sorting_price_high_details($params);
			$result =  $this->webservice_model->get_ground_high_price();
			//die(print_r($result));
            $base_url = $this->config->config['base_url'];
            if(empty($result)){
                $this->response->status = 500;
                $this->response->msg = "No Data Found";
                echo json_encode($this->response);
                exit;
            }else{
                foreach($result as $row) {
                    if(empty($row['ground_picture'])){
                        $row['ground_picture_url'] = $base_url.'assets/upload/ground.jpg';
                    }else{
                        $bg_ground = $row['ground_picture'];
                        $ground_images = explode(',',$bg_ground);
                        $ground_id = $row['ground_id'];
                        $res['g_rating'] =  $this->webservice_model->get_ground_rating_based_on_ground_id($ground_id);
                        if(empty($res['g_rating']['rating'])){
                            $row['ground_rating'] = '0';
                        }else{
                            $row['ground_rating'] = $res['g_rating']['rating'];
                        }
    
                        if($row['after_discount_ground_price'] > 0){
                            $row['ground_price'] = $row['g_price'];
							$row['discount_price'] = $row['after_discount_ground_price'];
                        }else{
							$row['ground_price'] = '0';
							$row['discount_price'] = '0';
                        }
						if($row['g_discount'] > 0){
                            $row['ground_discount'] = $row['g_discount'];
                        }else{
                            $row['ground_discount'] = '';
                        }
                        if(empty($row['slot'])){
        					$row['ground_slot'] = 'null';
        				}else{					
        					if($row['slot'] == 60){
        						$row['ground_slot'] = '30 min';
        					}elseif($row['slot'] == 120){
        						$row['ground_slot'] = '1 hr';
        					}elseif($row['slot'] == 180){
        						$row['ground_slot'] = '1:30 hr';
        					}elseif($row['slot'] == 240){
        						$row['ground_slot'] = '2 hr';
        					}
        				}
                        $row['ground_picture_url'] = $base_url.'assets/upload/ground/'.$ground_images[0];
                    }
                    $ground_details[] = $row;
                }
                $this->response->status = 200;
                $this->response->data = $ground_details;
                $this->response->msg = 'Success';
                echo json_encode($this->response);
                exit;
            }
        }
        elseif($params['sort_price'] == 3){
            $result = $this->webservice_model->get_sorting_rating_high_details($params);
            $base_url = $this->config->config['base_url'];
            if(empty($result)){
                $this->response->status = 500;
                $this->response->msg = "No Data Found";
                echo json_encode($this->response);
                exit;
            }else{
                foreach($result as $row) {
                    if(empty($row['ground_picture'])){
                        $row['ground_picture_url'] = $base_url.'assets/upload/ground.jpg';
                    }else{
                        $bg_ground = $row['ground_picture'];
                        $ground_images = explode(',',$bg_ground);
                        $ground_id = $row['ground_id'];
                        $res['g_price'] =  $this->webservice_model->get_ground_price_based_on_ground_id($ground_id);
                        if(empty($res['g_price']['ground_price'])){
                            $row['ground_price'] = '0';
                            $row['ground_discount'] = '';
                        }else{
                            $row['ground_price'] = $res['g_price']['ground_price'];
                            $row['ground_discount'] = $res['g_price']['ground_discount'];
                            /*$new_width = ($row['ground_discount'] / 100) * $row['ground_price'];
						    $toamount = $row['ground_price'] - $new_width;
					       	$row['discount_price'] = number_format($toamount, 2, '.', '');*/
						    $row['discount_price'] = $res['g_price']['after_discount_ground_price'];
                        }
                        if(empty($res['g_price']['slot'])){
        					$row['ground_slot'] = 'null';
        				}else{					
        					if($res['g_price']['slot'] == 60){
        						$row['ground_slot'] = '30 min';
        					}elseif($res['g_price']['slot'] == 120){
        						$row['ground_slot'] = '1 hr';
        					}elseif($res['g_price']['slot'] == 180){
        						$row['ground_slot'] = '1:30 hr';
        					}elseif($res['g_price']['slot'] == 240){
        						$row['ground_slot'] = '2 hr';
        					}
        				}
                        $res['g_rating'] =  $this->webservice_model->get_ground_rating_based_popularity($ground_id);
                        if(empty($res['g_rating']['ground_rating'])){
                            $row['ground_rating'] = '0';
                        }else{
                            $row['ground_rating'] = $res['g_rating']['ground_rating'];
                        }
                        $row['ground_picture_url'] = $base_url.'assets/upload/ground/'.$ground_images[0];
                    }
                    $ground_details[] = $row;
                }
                $this->response->status = 200;
                $this->response->data = $ground_details;
                $this->response->msg = 'Success';
                echo json_encode($this->response);
                exit;
            }
        }
        elseif($params['sort_price'] == 4){
            $current_location = array(
                "ground_lat" => $this->request->lat,
                "ground_long" => $this->request->long
            );
            $result = $this->webservice_model->nearest_ground($current_location);

            $base_url = $this->config->config['base_url'];
            if(empty($result)){
                $this->response->status = 500;
                $this->response->msg = "No Data Found";
                echo json_encode($this->response);
                exit;
            }else{
                foreach($result as $row) {
                    if(empty($row['ground_picture'])){
                        $row['ground_picture_url'] = $base_url.'assets/upload/ground.jpg';
                    }else{
                        $bg_ground = $row['ground_picture'];
                        $ground_images = explode(',',$bg_ground);
                        $ground_id = $row['ground_id'];
                        $res['g_price'] =  $this->webservice_model->get_ground_price_based_on_ground_id($ground_id);
                        if(empty($res['g_price']['ground_price'])){
                            $row['ground_price'] = '0';
                            $row['ground_discount'] = '';
                        }else{
                            $row['ground_price'] = $res['g_price']['ground_price'];
                            $row['ground_discount'] = $res['g_price']['ground_discount'];
                            /*$new_width = ($row['ground_discount'] / 100) * $row['ground_price'];
						    $toamount = $row['ground_price'] - $new_width;
					       	$row['discount_price'] = number_format($toamount, 2, '.', '');*/
						    $row['discount_price'] = $res['g_price']['after_discount_ground_price'];
                        }
                        if(empty($res['g_price']['slot'])){
        					$row['ground_slot'] = 'null';
        				}else{					
        					if($res['g_price']['slot'] == 60){
        						$row['ground_slot'] = '30 min';
        					}elseif($res['g_price']['slot'] == 120){
        						$row['ground_slot'] = '1 hr';
        					}elseif($res['g_price']['slot'] == 180){
        						$row['ground_slot'] = '1:30 hr';
        					}elseif($res['g_price']['slot'] == 240){
        						$row['ground_slot'] = '2 hr';
        					}
        				}
                        $res['g_rating'] =  $this->webservice_model->get_ground_rating_based_popularity($ground_id);
                        if(empty($res['g_rating']['ground_rating'])){
                            $row['ground_rating'] = '0';
                        }else{
                            $row['ground_rating'] = $res['g_rating']['ground_rating'];
                        }
                        $row['ground_picture_url'] = $base_url.'assets/upload/ground/'.$ground_images[0];
                    }
                    $ground_details[] = $row;
                }
                $this->response->status = 200;
                $this->response->data = $ground_details;
                $this->response->msg = 'Success';
                echo json_encode($this->response);
                exit;
            }
        }
        else{
        }
    }

Public function exit_team()
   {
   $this->load->model('api/web_services_model','webservice_model');
   $this->response = (Object)array(
       "status" => 500,
       "msg" => "error"   );

   $params = array(
           "player_id" => $this->request->player_id,
          );

   $result=$this->webservice_model->player_team_exit($params);
   $result2=$this->webservice_model->player_team_noti_exit($params);
   $result3=$this->webservice_model->player_join_team_noti_exit($params);

   if(empty($result)){
       $this->response->status = 500;
       $this->response->msg = "Error Occured";
       echo json_encode($this->response);
       exit;
   }else{
       $this->response->status = 200;
       $this->response->msg = "player exit Successfully";
       echo json_encode($this->response);
       exit;
   }
   }
   
  public function popularity_sorting(){
   $this->load->model('api/web_services_model','webservice_model');
   $this->response = (Object)array(
       "status" => 500,
       "msg" => "error"
   );

   $params=array(
       'rating_high'=> $this->request->rating_high,
   );

 if($params['rating_high'] == 5)
 {
  $result = $this->webservice_model->sorting_popularity($params);
  $base_url = $this->config->config['base_url'];

  if(empty($result))
  {
      $this->response->status = 500;
      $this->response->msg = "No Data Found";
      echo json_encode($this->response);
      exit;
  }
  else
  {
  foreach($result as $row)
  {
         if(empty($row['ground_picture']))
         {
              $row['ground_picture_url'] = $base_url.'assets/upload/ground.jpg';
          }else
          {
          $row['ground_picture_url'] = $base_url.'assets/upload/ground/'.$row['ground_picture'];
          }
          
          if(empty($res['g_price']['ground_price'])){
              $row['ground_price'] = '0';
          }else{
              $row['ground_price'] = $res['g_price']['ground_price'];
          }
          
          $player_details[] = $row;
      }
      $this->response->status = 200;
      $this->response->data = $player_details;
      $this->response->msg = 'Success';
      echo json_encode($this->response);
      exit;
      }
}
else {
  $this->response->status = 500;
  $this->response->msg = "give input value 5";
  echo json_encode($this->response);
  exit;
}
}

public function insert_team_rating(){
    $this->load->model('api/web_services_model','webservice_model');
    $this->response = (Object)array(
        "status" => 500,
        "msg" => "error"
    );
    $params = array(
        "team_id" => $this->request->team_id,
        "team_rating" => $this->request->team_rating,
        "team_review" => $this->request->team_review
    );
        $result = $this->webservice_model->save_team_rating($params);
        if(empty($result)){
            $this->response->status = 500;
            $this->response->msg = "Error Occured while adding team rating";
            echo json_encode($this->response);
            exit;
        }else{
            $this->response->status = 200;
            $this->response->msg = "Added Team Rating Successfully";
            echo json_encode($this->response);
            exit;
        }
    }
    
    
    public function booking_history_based_on_player()
    {
        $this->load->model('api/web_services_model', 'webservice_model');
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );
        $params = array(
            "player_id" => $this->request->player_id,
        );
	
		$result1 = $this->webservice_model->booking_history_past_based_on_player_id($params);
		
		$result2 = $this->webservice_model->booking_history_upcomin_based_on_player_id($params);
		if (empty($result1)) {
            
        } else {			
					$bookingsval['pastevents'] = $result1;							
		}
		if (empty($result2)) {
            
        } else {		
					$bookingsval['upcomingevents'] = $result2;						
		}
        if (empty($result1 || $result2)) {
            $this->response->status = 500;
            $this->response->msg = "No Data Found";
            echo json_encode($this->response);
            exit;
        } else {
            $this->response->status = 200;
            $this->response->data = $bookingsval;
            $this->response->msg = "Success";
            echo json_encode($this->response);
            exit;
        }
    }
    
    public function insert_ground_rating()
    {
        $this->load->model('api/web_services_model', 'webservice_model');
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );
        $params = array(
            "player_id" => $this->request->player_id,
            "ground_id" => $this->request->ground_id,
            "review" => $this->request->review,
            "rating" => $this->request->rating,
            "status" => 0
        );
       $ground_rating = $this->webservice_model->get_ground_ration_based_on_id($params);
       if(empty($ground_rating)){
           $result = $this->webservice_model->save_ground_rating($params);
           if (empty($result)) {
               $this->response->status = 500;
               $this->response->msg = "Error Occured while adding ground rating";
           } else {
               $this->response->status = 200;
               $this->response->msg = "Added Ground Rating Successfully";
           }
       }else{
           $result1 = $this->webservice_model->update_ground_rating($params);
           if (empty($result1)) {
               $this->response->status = 500;
               $this->response->msg = "Error Occured while adding ground rating";
           } else {
               $this->response->status = 200;
               $this->response->msg = "Added Ground Rating Successfully";
           }
       }
        echo json_encode($this->response);
        exit;
    }
    
        public function invite_team_send_sms()
    {
        $this->load->model('api/web_services_model','webservice_model');
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );
        $params=array(
            'req_team_id'=> $this->request->req_team_id,
            'res_captain_id'=>$this->request->res_captain_id,
            'res_team_id'=>$this->request->res_team_id
        );
		
		$request_already_send = $this->webservice_model->friendly_game_exists_or_not($params);
        if(empty($request_already_send)){
			 $jt_noti_save = $this->webservice_model->save_friendly_game_notification($params);
			 $team_player_details1 = $this->webservice_model->get_response_team_details($params);
				if(empty($team_player_details1)){
					$this->response->status = 200;
					$this->response->msg = "Not Found Data";
					echo json_encode($this->response);
					exit;
				 }else{
					$req_team_details1 = $this->webservice_model->get_req_team_name($params);
		   
					/*** Push Notification For Team Invite Send  STARTS ***/
					
					$this->load->library(['FirebaseNotification','Firebase']);
					$this->firebasenotification->setTitle('Team Invite');
					$this->firebasenotification->setMessageBody('* '.ucfirst($req_team_details1['team_name']).' * has challenged your team for a friendly football match! Log in to Street League now to accept the invitation and see details of the match. All the best.');
					$this->firebase->sendNotification($this->webservice_model->get_user_device_token([$team_player_details1['player_id']]), $this->firebasenotification);

					/*** Push Notification For Team Invite Send  ENDS ***/
				
					$this->response->status = 200;
					$this->response->msg = "SMS sent Successfully";
					echo json_encode($this->response);
					exit;
					}    
		}else{
			 $this->response->status = 200;
            $this->response->msg = "Already Request Sent";
            echo json_encode($this->response);
            exit; 
        }
	}

    public function invite_team_notification(){
        $this->load->model('api/web_services_model','webservice_model');
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );
        $params=array(
            'res_captain_id'=>$this->request->res_captain_id,
            'res_team_id'=>$this->request->res_team_id
        );

        $result = $this->webservice_model->get_friendly_game_notification_based_captain_id($params);
        $base_url = $this->config->config['base_url'];
        if(empty($result)){
            $this->response->status = 500;
            $this->response->msg = "No Data Found";
            echo json_encode($this->response);
            exit;
        }else {
             foreach($result as $row) {
					if(empty($result['team_logo'])){
						$row['team_logo_url'] = $base_url.'assets/upload/logos.png';
					}else{
						$row['team_logo_url'] = $base_url.'assets/upload/teams/'.$row['team_logo'];
					}
            $add_player_notification[] = $row;
             }
        }

        $this->response->status = 200;
        $this->response->data = $add_player_notification;
        $this->response->msg = 'Success';
        echo json_encode($this->response);
        exit;
    }

    public function invite_team_accept(){
        
        $this->load->model('api/web_services_model','webservice_model');
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );
        $params=array(
            'req_team_id'=> $this->request->req_team_id,
            'res_captain_id'=>$this->request->res_captain_id,
            'res_team_id'=>$this->request->res_team_id,
            'if_game_id'=>$this->request->if_game_id,
            'res_status'=>$this->request->res_status
        );
        $params2=array(
            'team_id'=> $this->request->req_team_id,
        );
        $params3=array(
            'team_id'=> $this->request->res_team_id,
        );
        $captain_details = $this->webservice_model->get_captain_details($params2);
        $team_details = $this->webservice_model->get_player_teamname($params3);

        $noti_friendly_game_update = $this->webservice_model->invice_friendly_game_accepted($params);
        if($this->request->res_status == 1){
        // $msgtxt= ''.ucfirst($team_details['team_name']). ' Accepted your request';

        //     $curl = curl_init();
        //     curl_setopt_array($curl, array(
        //         CURLOPT_URL => "http://www.elitbuzz-me.com/sms/smsapi",
        //         CURLOPT_RETURNTRANSFER => true,
        //         CURLOPT_CUSTOMREQUEST => "POST",
        //         CURLOPT_POSTFIELDS => '{"api_key":"C20023945cdaa05feb7163.74004062","type":"text","contacts":"91'.$captain_details['player_mnumber'].'","senderid":"SMSinfo","msg":"'.$msgtxt.'"}',
        //         CURLOPT_HTTPHEADER => array(
        //             "content-type: application/json"
        //         ),
        //     ));
        //     $response = curl_exec($curl);
        //     $err = curl_error($curl);
        //     curl_close($curl);
            
            /*** Push Notification For Invite TEAM  Accept  STARTS ***/
            $this->load->library(['FirebaseNotification','Firebase']);
            $this->firebasenotification->setTitle('Team Invite Accept');
            $this->firebasenotification->setMessageBody('* '.ucfirst($team_details['team_name']).' * has accepted your challenge for a friendly football match. All the best!');
            $this->firebase->sendNotification($this->webservice_model->get_user_device_token([$captain_details['player_id']]), $this->firebasenotification);

            /*** Push Notification For Invite Team Accept  ENDS ***/
            
            $this->response->status = 200;
            $this->response->msg = "Accepted Succefully";
            echo json_encode($this->response);
            exit;
        }else{
        //  $msgtxt= ''.ucfirst($team_details['team_name']). ' Rejected your request';

        //     $curl = curl_init();
        //     curl_setopt_array($curl, array(
        //         CURLOPT_URL => "http://www.elitbuzz-me.com/sms/smsapi",
        //         CURLOPT_RETURNTRANSFER => true,
        //         CURLOPT_CUSTOMREQUEST => "POST",
        //         CURLOPT_POSTFIELDS => '{"api_key":"C20023945cdaa05feb7163.74004062","type":"text","contacts":"91'.$captain_details['player_mnumber'].'","senderid":"SMSinfo","msg":"'.$msgtxt.'"}',
        //         CURLOPT_HTTPHEADER => array(
        //             "content-type: application/json"
        //         ),
        //     ));
        //     $response = curl_exec($curl);
        //     $err = curl_error($curl);
        //     curl_close($curl);
            /*** Push Notification For Invite TEAM  Accept  STARTS ***/
            $this->load->library(['FirebaseNotification','Firebase']);
            $this->firebasenotification->setTitle('Team Invite Accept');
            $this->firebasenotification->setMessageBody('* '.ucfirst($team_details['team_name']).' * has rejected your invitation to play a friendly game against!');
            $this->firebase->sendNotification($this->webservice_model->get_user_device_token([$captain_details['player_id']]), $this->firebasenotification);

            /*** Push Notification For Invite Team Accept  ENDS ***/
            $this->response->status = 200;
            $this->response->msg = "Rejected";
            echo json_encode($this->response);
            exit;
        }
    }
    
    /*Split Payment starts*/
    public function split_payment_send_sms()
    {
        $this->load->model('api/web_services_model','webservice_model');
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );
        $params=array(
            'amount_spliter_id'=> $this->request->amount_spliter_id,
            'split_amount'=>$this->request->split_amount,
            'sp_player_id'=>$this->request->sp_player_id
        );
        $params_player = array(
            'player_id'=>$this->request->sp_player_id
        );
//        foreach($params['sp_player_id'] as $players){
//            $data['sp_player_id'] = $players;
//            $data['amount_spliter_id'] = $params['amount_spliter_id'];
//            $data['split_amount'] = $params['split_amount'];
//            $split_payment_save = $this->webservice_model->save_split_payment_notification($data);
//        }
        $split_payment_save = $this->webservice_model->save_split_payment_notification($params);
        $amount_spliter_name = $this->webservice_model->get_amount_spliter_name($params);
//        $sp_player_mobilenumber = $this->webservice_model->get_sp_player_mobilenumber($params);
//        $players_contact = implode(',', array_column($sp_player_mobilenumber, 'player_mnumber'));
//        foreach ($sp_player_mobilenumber as $player) {

            $sp_player_mobilenumber = $this->webservice_model->get_player_mobilenumber($params_player);
            // $msgtxt= 'Payment message : '.ucfirst($amount_spliter_name['player_fname']). ' sent a payment request to you. please check your notification page';
            // $curl = curl_init();
            // curl_setopt_array($curl, array(
            //     CURLOPT_URL => "http://www.elitbuzz-me.com/sms/smsapi",
            //     CURLOPT_RETURNTRANSFER => true,
            //     CURLOPT_CUSTOMREQUEST => "POST",
            //     CURLOPT_POSTFIELDS => '{"api_key":"C20023945cdaa05feb7163.74004062","type":"text","contacts":"91'.$sp_player_mobilenumber["player_mnumber"].'","senderid":"SMSinfo","msg":"'.$msgtxt.'"}',
            //     CURLOPT_HTTPHEADER => array(
            //         "content-type: application/json"
            //     ),
            // ));
            // $response = curl_exec($curl);
            // $err = curl_error($curl);
            // curl_close($curl);
            
            /*** Push Notification For Split Payment  STARTS ***/
                $this->load->library(['FirebaseNotification','Firebase']);
                $this->firebasenotification->setTitle('Split Payment Invite');
                $this->firebasenotification->setMessageBody('* '.ucfirst($amount_spliter_name['player_fname']).' * has invited you to split payment for football booking. Log in to Street League now to complete payment and confirm the booking.');
                $this->firebase->sendNotification($this->webservice_model->get_user_device_token([$sp_player_mobilenumber['player_id']]), $this->firebasenotification);
    
            /*** Push Notification For Split Payment  ENDS ***/
                
//        }
        $this->response->status = 200;
        $this->response->msg = "SMS sent Successfully";
        echo json_encode($this->response);
        exit;
    }

    public function players_split_payment_notification(){
        $this->load->model('api/web_services_model','webservice_model');
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );
        $params = array(
            "player_id" => $this->request->player_id,
        );

        $result = $this->webservice_model->get_split_payment_notification_based_player_id($params);
       
        if(empty($result)){
            $this->response->status = 500;
            $this->response->msg = "No Data Found";
            echo json_encode($this->response);
            exit;
        }else {
            $add_player_notification = $result;
        }
        $this->response->status = 200;
        $this->response->data = $add_player_notification;
        $this->response->msg = 'Success';
        echo json_encode($this->response);
        exit;
    }

    public function split_payment_accept(){
        $this->load->model('api/web_services_model','webservice_model');
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );
        $params=array(
            'amount_spliter_id'=> $this->request->amount_spliter_id,
            'split_amount'=>$this->request->split_amount,
            'sp_player_id'=>$this->request->sp_player_id,
            'sp_id'=>$this->request->sp_id,
            'sp_status'=>$this->request->sp_status
        );
$params1=array(
            'player_id'=> $this->request->amount_spliter_id,
        );
        $params2=array(
            'player_id'=> $this->request->sp_player_id,
        );
        $amount_spliter_details = $this->webservice_model->get_player_mobilenumber($params1);
        $player_details = $this->webservice_model->get_player_mobilenumber($params2);
        $noti_split_payment_update = $this->webservice_model->split_payment_accepted($params);
        if($this->request->sp_status == 1){
         $msgtxt= ''.ucfirst($player_details['player_fname']). ' Accepted your request';

            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => "http://www.elitbuzz-me.com/sms/smsapi",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => '{"api_key":"C20023945cdaa05feb7163.74004062","type":"text","contacts":"91'.$amount_spliter_details['player_mnumber'].'","senderid":"SMSinfo","msg":"'.$msgtxt.'"}',
                CURLOPT_HTTPHEADER => array(
                    "content-type: application/json"
                ),
            ));
            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
            $this->response->status = 200;
            $this->response->msg = "Accepted Succefully";
            echo json_encode($this->response);
            exit;
        }else{
        $msgtxt= ''.ucfirst($player_details['player_fname']). ' Rejected your request';

            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => "http://www.elitbuzz-me.com/sms/smsapi",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => '{"api_key":"C20023945cdaa05feb7163.74004062","type":"text","contacts":"91'.$amount_spliter_details['player_mnumber'].'","senderid":"SMSinfo","msg":"'.$msgtxt.'"}',
                CURLOPT_HTTPHEADER => array(
                    "content-type: application/json"
                ),
            ));
            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
            $this->response->status = 200;
            $this->response->msg = "Rejected";
            echo json_encode($this->response);
            exit;
        }
    }



/*Split Payment ends*/

 /*Cancel booking starts*/
    public function cancel_booking(){
        $this->load->model('api/web_services_model','webservice_model');
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );
        $params = array(
            "booking_id" => $this->request->booking_id,
            "cancel_date" => date('Y-m-d',strtotime($this->request->cancel_date)),
            "cancel_time" => date('H:i',strtotime($this->request->cancel_time)),
            "booking_approval" => 1,
            "who_cancelled" => 'Player',
        );

        $result = $this->webservice_model->cancel_booking_by_player($params);
		
		
		$approval_id = $this->request->booking_id;
		 $book_details = $this->webservice_model->booking_view($approval_id);
        foreach ($book_details as $store) {
            $booking_id = $store->booking_code;
        }
		
		$param = array(
            'cancel_status' => '1'
        );
		
		
		$details = $this->webservice_model->payment_cancel_update($booking_id,$param);

        if(empty($result)){
            $this->response->status = 500;
            $this->response->msg = "Error Occured while cancel the booking";
            echo json_encode($this->response);
            exit;
        }else {
            $this->response->status = 200;
            $this->response->msg = 'Booking Cancelled Successfully';
            echo json_encode($this->response);
            exit;
        }

    }
    /*Cancel booking ends*/
    
    /*** Add Firebase Device Id for PushNotifications ***/

    public function add_firebase_token()
    {
        $this->response = (Object) array(
            "status" => 500,
            "msg" => "error"
        );
        $this->load->model('api/web_services_model','webservice_model');
    
        $user_id = $this->request->user_id;
        $token = $this->request->token;
        $params = array(
            'fcm_token' => $token,
            'user_id' => $user_id
        );

        $record = $this->webservice_model->check_token_exist_for_user($user_id);

        if (empty($record)) {
            $this->webservice_model->insert_firebase_token($params);
            $this->response->status = 200;
            $this->response->msg = "Token Added Successfully";
            echo json_encode($this->response);
            exit;
        } else {
            $this->webservice_model->update_firebase_token($params);
            $this->response->status = 200;
            $this->response->msg = "Token Updated Successfully";
            echo json_encode($this->response);
            exit;
        }
    }
    
    /*** Send Multicast Notification ***/
    
    public function send_multicast_notifications()
    {
		//die('hi');
        $this->response = (Object) array(
            "status" => 500,
            "msg" => "error"
        );
		
        $this->load->model('api/web_services_model','webservice_model');
        $title = $this->request->title;
        $body = $this->request->body;
        
        $this->load->library(['FirebaseNotification','Firebase']);
        $this->firebasenotification->setTitle($title);
        $this->firebasenotification->setMessageBody($body);
        $resp = $this->firebase->sendNotification($this->webservice_model->get_active_users_token(), $this->firebasenotification);
        if ($resp) {
            echo $resp;
            exit;
        } else {
            echo json_encode($this->response);
            exit;
        }    
    }
    
       /*Notification Count Starts*/
    public function notification_count(){
        $this->load->model('api/web_services_model','webservice_model');
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );

        $params1 = array(
            "player_id" => $this->request->player_id,
        );

        $params2 = array(
            "captain_id" => $this->request->captain_id,
            "team_id" => $this->request->team_id,
        );

        $params3=array(
            'res_captain_id'=>$this->request->res_captain_id,
            'res_team_id'=>$this->request->res_team_id
        );

        $result1 = $this->webservice_model->get_add_player_notification_count($params1);
        $result2 = $this->webservice_model->get_join_team_notification_count($params2);
        $result3 = $this->webservice_model->get_friendly_game_notification_count($params3);
        $result = $result1+$result2+$result3;
        //die(print_r(array("1"=>$result1,"2"=>$result2,"3"=>$result3)));
        if(empty($result)){
            $this->response->status = 500;
            $this->response->msg = "No Data Found";
            $this->response->data = 0;
            echo json_encode($this->response);
            exit;
        }else {
            $this->response->status = 200;
            $this->response->data = $result;
            $this->response->msg = 'Success';
            echo json_encode($this->response);
            exit;
        }

    }
   public function notification_count_update(){
        $this->load->model('api/web_services_model','webservice_model');
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );
        $params = array(
            "at_noti_id"=>$this->request->at_noti_id,
            "jt_noti_id"=>$this->request->jt_noti_id,
            "if_game_id"=>$this->request->if_game_id,
        );
        $data = array(
            "notification_status"=>1,
        );
        $notification_status1 = $this->webservice_model->update_add_player_notification_status($params,$data);
        $notification_status2 = $this->webservice_model->update_join_team_notification_status($params,$data);
        $notification_status3 = $this->webservice_model->update_friendly_game_notification_status($params,$data);
        if(empty($notification_status1&&$notification_status2&&$notification_status3)){
            $this->response->status = 500;
            $this->response->msg = "Error Occured!";
            echo json_encode($this->response);
            exit;
        }else{
            $this->response->status = 200;
            $this->response->msg = "Updated Successfully";
            echo json_encode($this->response);
            exit;
        }

    }
    /*Notification Count Ends*/
    

	
	public function live_tournament_schedule(){
        $this->load->model('api/web_services_model','webservice_model');
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );
        $tour_team_schedule = $this->webservice_model->live_tournament_schedule_goals_based_tour_id();
		
		$base_url = $this->config->config['base_url'];
        if(empty($tour_team_schedule)){
            $this->response->status = 500;
            $this->response->msg = "No Data Found";
            echo json_encode($this->response);
            exit;
        }else{
			//die(print_r($tour_team_schedule));
			foreach($tour_team_schedule as $row){
			    $row['two_team_ids'] = $row['team1'].','. $row['team2'];
				$row['Scheduled_date'] = date("l d F Y" , strtotime($row['date']));
				$row['Scheduled_time'] = date("H:i" , strtotime($row['time']));
				$menus = explode(',', $row['two_team_ids']);
				$tour_team_points = $this->webservice_model->current_tourn_teams_points($row,$menus);
				if(empty($tour_team_points)){
				    $row['team1_goals'] = 0;
					$row['team1_win'] = 0;
					$row['team2_goals'] = 0;
					$row['team2_win'] = 0;
					$row['team1_goal'] = 'null';
					$row['team1_wins'] = 'null';
					$row['team2_goal'] = 'null';
					$row['team2_wins'] = 'null';
				}else{
				  foreach($tour_team_points as $ttp){
				    if($row['team1'] == $ttp['team_id']){
				            if($ttp['tie'] == 1){
							$row['team1_goal'] = $ttp['goals_scored'];
							$row['team1_goals'] = $ttp['goals_scored'];
				        	$row['team1_win'] = $ttp['tie'];
				        	$row['team1_wins'] = $ttp['tie'];
						}else{
							if(empty($ttp['goals_scored'] || $ttp['wins'])){
				                $row['team1_goal'] = 0;
				                $row['team1_goals'] = 0;
					            $row['team1_win'] = 0;
					            $row['team1_wins'] = 0;
				            }else{
				                $row['team1_goal'] = $ttp['goals_scored'];
				                $row['team1_goals'] = $ttp['goals_scored'];
				        	    $row['team1_win'] = $ttp['wins'];
				        	    $row['team1_wins'] = $ttp['wins'];
				            }  
						}
				    }
				     if($row['team2'] == $ttp['team_id']){
				            if($ttp['tie'] == 1){
						    $row['team2_goal'] = $ttp['goals_scored'];
							$row['team2_goals'] = $ttp['goals_scored'];
				        	$row['team2_win'] = $ttp['tie'];
				        	$row['team2_wins'] = $ttp['tie'];
						  }else{
				            if(empty($ttp['goals_scored'] || $ttp['wins'])){
				                $row['team2_goal'] = 0;
				                $row['team2_goals'] = 0;
					            $row['team2_win'] = 0;
					            $row['team2_wins'] = 0;
				            }else{
				                $row['team2_goal'] = $ttp['goals_scored'];
				                $row['team2_goals'] = $ttp['goals_scored'];
				        	    $row['team2_win'] = $ttp['wins'];
				        	    $row['team2_wins'] = $ttp['wins'];
				            } 
						  }				
				        }
				    
                    }  
				}
			  $res[] = $row;
			}
			  
			 $tour_team_schedule  = $res;
					
		}
			$this->response->status = 200;
            $this->response->data = $tour_team_schedule;
            $this->response->msg = "Success";
            echo json_encode($this->response);
            exit;
	}
	
	public function app_update_version()
    {
		$this->load->model('api/web_services_model','webservice_model');
        $this->response = (Object) array(
            "status" => 500,
            "msg" => "error"
        );
        $result = $this->webservice_model->app_update_version();
        if (empty($result)) {
            $this->response->status = 500;
            $this->response->msg = "No data found";
            echo json_encode($this->response);
            exit;
        } else {
            $this->response->status = 200;
            $this->response->data = $result;
            $this->response->msg = "Success";
            echo json_encode($this->response);
            exit;
        }    
    }

    public function academy_details()
    {
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );

        $this->load->model('api/web_services_model','webservice_model');

        $result = $this->webservice_model->get_all_academy_details();
        $base_url = $this->config->config['base_url'];

        if(empty($result)){
            $this->response->status = 500;
            $this->response->msg = "No Data Found";
            echo json_encode($this->response);
            exit;
        }else{
        foreach($result as $row) {
                if(empty($row['academy_images'])){
                    $row['academy_picture_url'] = $base_url.'assets/upload/ground.jpg';
                }else{
                    $bg_academy = $row['academy_images'];
                    $ground_images = explode(',',$bg_academy);
					$row['academy_picture_url'] = $base_url.'assets/upload/academy/'.$ground_images[0];
                }	
				$academy_id = $row['academy_id'];
				$res['a_rating'] =  $this->webservice_model->get_academy_rating_based_on_ground_id($academy_id);
				if(empty($res['a_rating']['rating'])){
					$row['academy_rating'] = '0';
				}else{
					$row['academy_rating'] = $res['a_rating']['rating'];
				}
				$res['a_price'] =  $this->webservice_model->get_academy_start_price($academy_id);
				if(empty($res['a_price']['after_discount_price'])){
					$row['price'] = '0';
					$row['discount'] = '';
					$row['discount_price'] = '0';
				}else{
					$row['price'] = $res['a_price']['actual_price'];
					$row['discount'] = $res['a_price']['discount'];
					$row['discount_price'] = $res['a_price']['after_discount_price'];
				} 
                $academy_details[] = $row;
            }
			//exit;
            $this->response->status = 200;
            $this->response->data = $academy_details;
            $this->response->msg = 'Success';
            echo json_encode($this->response);
            exit;
            
        }
    }
	
	public function academy_details_based_on_id()
    {
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );
        $params = array(
            "academy_id" => $this->request->academy_id,
        );

        $this->load->model('api/web_services_model','webservice_model');

        $result = $this->webservice_model->get_academy_details_based_on_academy_id($params);
        
        if(empty($result)){
            $this->response->status = 500;
            $this->response->msg = "No Data Found";
            echo json_encode($this->response);
            exit;
        }else{
            $coaching_classes_ids = $result['coaching_classes_id'];
            $academy_id = $result['academy_id'];
            $coaching_id = explode(',',$coaching_classes_ids);
            $get_academy_coaching_classes = $this->webservice_model->get_all_coaching_classes($coaching_id);
            $get_all_academy_price = $this->webservice_model->get_all_academy_price($academy_id);
            if(empty($get_all_academy_price)){
                $get_academy_price[] = '';
            }else{
                foreach ($get_all_academy_price as $apd)
                {
                    $row2['price'] = $apd['actual_price'];
                    $row2['discount'] = $apd['discount'];
					$apd['discount_price'] = $apd['after_discount_price'];
                   	
                    $get_academy_price[]=$apd;
                }
            }
            $res['a_rating'] =  $this->webservice_model->get_academy_rating_based_on_ground_id($academy_id);
			if(empty($res['a_rating']['rating'])){
				$row['academy_rating'] = '0';
			}else{
				$row['academy_rating'] = $res['a_rating']['rating'];
			}
			$res['a_price'] =  $this->webservice_model->get_academy_start_price($academy_id);
			if(empty($res['a_price']['after_discount_price'])){
				$row['price'] = '0';
				$row['discount'] = '';
				$row['discount_price'] = '0';
				$academypricemsg = 'This academy is not available';
				$statusval = 500;
			}else{
				$row['price'] = $res['a_price']['actual_price'];
				$row['discount'] = $res['a_price']['discount'];
				$row['discount_price'] = $res['a_price']['after_discount_price'];
				$academypricemsg = 'Success';
				$statusval = 200;
			} 
            
            $base_url = $this->config->config['base_url'];

            $image_academy = explode(',',$result['academy_images']);
			$academy_banner = array();
            foreach ($image_academy as $gp)
            {
                if(!empty($gp))
                {
                    $result1['academy_picture_url'] = $base_url.'assets/upload/academy/'.$gp;
                    $academy_banner[] = $result1;
                }
                else
                {
                    $result['academy_picture_url'] = $base_url.'assets/upload/ground.jpg';
                }
            }
            $result['start_time'] = date('h:ia',strtotime($result['start_time']));
			$result['end_time'] = date('h:ia',strtotime($result['end_time']));
            $result['academy_rating'] = $row['academy_rating'];
            $result['price'] = $row['price'];
            $result['discount'] = $row['discount'];
            $result['discount_price'] = $row['discount_price'];
            $result['coaching_classes'] = $get_academy_coaching_classes;
            $result['academy_price_details'] = $get_academy_price;
            $result['academy_picture_url'] = $academy_banner;
            $this->response->status = $statusval;
            $this->response->data = $result;
            $this->response->msg = $academypricemsg;
            echo json_encode($this->response);
            exit;
        }
	}
	
	public function get_all_academy_locations(){
		$this->response = (Object)array(
			  "status" => 500,
			  "msg" => "error"
		  );

		$this->load->model('api/web_services_model','webservice_model');

		$result = $this->webservice_model->get_academy_city();
		$result1 = array_values(array_column($result,NULL,'academy_city'));
		if(empty($result1)){
			$this->response->status = 500;
			$this->response->msg = "No Data Found";
			echo json_encode($this->response);
			exit;
		}else{
			$this->response->status = 200;
			$this->response->data = $result1;
			$this->response->msg = 'Success';
			echo json_encode($this->response);
			exit;
		 }
	}
	
	public function academy_details_based_on_location()
    {
        $this->load->model('api/web_services_model','webservice_model');
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );
        $data = explode(',',$this->request->academy_city);

        $result = $this->webservice_model->get_academy_list_based_on_ground_location_name($data);

        $base_url = $this->config->config['base_url'];
        if(empty($result)){
            $this->response->status = 500;
            $this->response->msg = "No Data Found";
            echo json_encode($this->response);
            exit;
        }else{
            foreach($result as $row) {
                if(empty($row['academy_images'])){
                    $row['academy_picture_url'] = $base_url.'assets/upload/ground.jpg';
                }else{
                    $bg_academy = $row['academy_images'];
                    $ground_images = explode(',',$bg_academy);
					$row['academy_picture_url'] = $base_url.'assets/upload/academy/'.$ground_images[0];
                }
				$academy_id = $row['academy_id'];
				$res['a_rating'] =  $this->webservice_model->get_academy_rating_based_on_ground_id($academy_id);
				if(empty($res['a_rating']['rating'])){
					$row['academy_rating'] = '0';
				}else{
					$row['academy_rating'] = $res['a_rating']['rating'];
				}
				$res['a_price'] =  $this->webservice_model->get_academy_start_price($academy_id);
				if(empty($res['a_price']['after_discount_price'])){
					$row['price'] = '0';
					$row['discount'] = '';
					$row['discount_price'] = '0';
				}else{
					$row['price'] = $res['a_price']['actual_price'];
					$row['discount'] = $res['a_price']['discount'];
					$row['discount_price'] = $res['a_price']['after_discount_price'];
				}
                $academy_details[] = $row;
            }
            $this->response->status = 200;
            $this->response->data = $academy_details;
            $this->response->msg = 'Success';
            echo json_encode($this->response);
            exit;
        }
    }
	
	public function insert_academy_rating()
    {
        $this->load->model('api/web_services_model', 'webservice_model');
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );
        $params = array(
            "player_id" => $this->request->player_id,
            "academy_id" => $this->request->academy_id,
            "review" => $this->request->review,
            "rating" => $this->request->rating,
            "del_status" => 0,
            "created_at" => date('Y-m-d h:i:s'),
        );
       $academy_rating = $this->webservice_model->get_academy_rating_based_on_id($params);
       if(empty($academy_rating)){
           $result = $this->webservice_model->save_academy_rating($params);
           if (empty($result)) {
               $this->response->status = 500;
               $this->response->msg = "Error Occured while adding ground rating";
           } else {
               $this->response->status = 200;
               $this->response->msg = "Added Academy Rating Successfully";
           }
       }else{
           $result1 = $this->webservice_model->update_academy_rating($params);
           if (empty($result1)) {
               $this->response->status = 500;
               $this->response->msg = "Error Occured while adding ground rating";
           } else {
               $this->response->status = 200;
               $this->response->msg = "Added Academy Rating Successfully";
           }
       }
        echo json_encode($this->response);
        exit;
    }
    
    public function academy_price_sorting(){
        $this->load->model('api/web_services_model','webservice_model');
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );
        $params=array(
            'sort_price'=> $this->request->sort_price,
        );

        if($params['sort_price'] == 1){
            $result =  $this->webservice_model->get_academy_low_price();
			$base_url = $this->config->config['base_url'];
            if(empty($result)){
                $this->response->status = 500;
                $this->response->msg = "No Data Found";
                echo json_encode($this->response);
                exit;
            }else{
                foreach($result as $row) {
					if(empty($row['academy_images'])){
						$row['academy_picture_url'] = $base_url.'assets/upload/ground.jpg';
					}else{
						$bg_academy = $row['academy_images'];
						$ground_images = explode(',',$bg_academy);
						$row['academy_picture_url'] = $base_url.'assets/upload/academy/'.$ground_images[0];
					}
					$academy_id = $row['academy_id'];
					$res['a_rating'] =  $this->webservice_model->get_academy_rating_based_on_ground_id($academy_id);
					if(empty($res['a_rating']['rating'])){
						$row['academy_rating'] = '0';
					}else{
						$row['academy_rating'] = $res['a_rating']['rating'];
					}
                        
					if($row['after_discount_price'] > 0){
						$row['price'] = $row['a_price'];
						$row['discount_price'] = $row['after_discount_price'];
					}else{
						$row['price'] = '0';
						$row['discount_price'] = '0';
					}
					if($row['a_discount'] > 0){
						$row['discount'] = $row['a_discount'];
					}else{
						$row['discount'] = '0';
					}
					$academy_details[] = $row;
				}
			}
			
			$this->response->status = 200;
			$this->response->data = $academy_details;
			$this->response->msg = 'Success';
			echo json_encode($this->response);
			exit;
        }elseif($params['sort_price'] == 2){
            //$result = $this->webservice_model->get_sorting_price_high_details($params);
			$result =  $this->webservice_model->get_academy_high_price();
			//die(print_r($result));
            $base_url = $this->config->config['base_url'];
            if(empty($result)){
                $this->response->status = 500;
                $this->response->msg = "No Data Found";
                echo json_encode($this->response);
                exit;
            }else{
                foreach($result as $row) {
					if(empty($row['academy_images'])){
						$row['academy_picture_url'] = $base_url.'assets/upload/ground.jpg';
					}else{
						$bg_academy = $row['academy_images'];
						$ground_images = explode(',',$bg_academy);
						$row['academy_picture_url'] = $base_url.'assets/upload/academy/'.$ground_images[0];
					}
					$academy_id = $row['academy_id'];
					$res['a_rating'] =  $this->webservice_model->get_academy_rating_based_on_ground_id($academy_id);
					if(empty($res['a_rating']['rating'])){
						$row['academy_rating'] = '0';
					}else{
						$row['academy_rating'] = $res['a_rating']['rating'];
					}
                        
					if($row['after_discount_price'] > 0){
						$row['price'] = $row['a_price'];
						$row['discount_price'] = $row['after_discount_price'];
					}else{
						$row['price'] = '0';
						$row['discount_price'] = '0';
					}
					if($row['a_discount'] > 0){
						$row['discount'] = $row['a_discount'];
					}else{
						$row['discount'] = '0';
					}
					$academy_details[] = $row;
				}
                $this->response->status = 200;
                $this->response->data = $academy_details;
                $this->response->msg = 'Success';
                echo json_encode($this->response);
                exit;
            }
        }
        elseif($params['sort_price'] == 3){
            $result = $this->webservice_model->get_sorting_rating_high_academy_details($params);
            $base_url = $this->config->config['base_url'];
            if(empty($result)){
                $this->response->status = 500;
                $this->response->msg = "No Data Found";
                echo json_encode($this->response);
                exit;
            }else{
                foreach($result as $row) {
					if(empty($row['academy_images'])){
						$row['academy_picture_url'] = $base_url.'assets/upload/ground.jpg';
					}else{
						$bg_academy = $row['academy_images'];
						$ground_images = explode(',',$bg_academy);
						$row['academy_picture_url'] = $base_url.'assets/upload/academy/'.$ground_images[0];
					}
					$academy_id = $row['academy_id'];
					$res['a_price'] =  $this->webservice_model->get_academy_price_based_on_academy_id($academy_id);
                        if(empty($res['a_price']['after_discount_price'])){
                            $row['price'] = '0';
							$row['discount'] = '0';
							$row['discount_price'] = '0';
                        }else{
                            $row['price'] = $res['a_price']['actual_price'];
							$row['discount'] = $res['a_price']['discount'];
							$row['discount_price'] = $res['a_price']['after_discount_price'];
                        }
					$res['a_rating'] =  $this->webservice_model->get_academy_rating_based_popularity($academy_id);
					if(empty($res['a_rating']['academy_rating'])){
						$row['academy_rating'] = '0';
					}else{
						$row['academy_rating'] = $res['a_rating']['academy_rating'];
					}
                    $academy_details[] = $row;
                }
                $this->response->status = 200;
                $this->response->data = $academy_details;
                $this->response->msg = 'Success';
                echo json_encode($this->response);
                exit;
            }
        }
        elseif($params['sort_price'] == 4){
            $current_location = array(
                "academy_latitude" => $this->request->lat,
                "academy_longitude" => $this->request->long
            );
            $result = $this->webservice_model->get_nearest_academy($current_location);
        
            $base_url = $this->config->config['base_url'];
            if(empty($result)){
                $this->response->status = 500;
                $this->response->msg = "No Data Found";
                echo json_encode($this->response);
                exit;
            }else{
                foreach($result as $row) {
					if(empty($row['academy_images'])){
						$row['academy_picture_url'] = $base_url.'assets/upload/ground.jpg';
					}else{
						$bg_academy = $row['academy_images'];
						$ground_images = explode(',',$bg_academy);
						$row['academy_picture_url'] = $base_url.'assets/upload/academy/'.$ground_images[0];
					}
					$academy_id = $row['academy_id'];
					$res['a_price'] =  $this->webservice_model->get_academy_price_based_on_academy_id($academy_id);
                        if(empty($res['a_price']['after_discount_price'])){
                            $row['price'] = '0';
							$row['discount'] = '0';
							$row['discount_price'] = '0';
                        }else{
                            $row['price'] = $res['a_price']['actual_price'];
							$row['discount'] = $res['a_price']['discount'];
							$row['discount_price'] = $res['a_price']['after_discount_price'];
                        }
					$res['a_rating'] =  $this->webservice_model->get_academy_rating_based_popularity($academy_id);
					if(empty($res['a_rating']['academy_rating'])){
						$row['academy_rating'] = '0';
					}else{
						$row['academy_rating'] = $res['a_rating']['academy_rating'];
					}
                    $academy_details[] = $row;
                }
                $this->response->status = 200;
                $this->response->data = $academy_details;
                $this->response->msg = 'Success';
                echo json_encode($this->response);
                exit;
            }
        }
        else{
        }
    }
    
    public function insert_academy_booking(){
		$this->load->model('api/web_services_model','webservice_model');
		$this->load->model('football_model','football_model');
		$this->response = (Object)array(
		  "status" => 500,
		  "msg" => "error"
		);

		$code_details = $this->webservice_model->get_academy_booking_code();

		if($code_details['book_code'] == 0){
		  $bookid = 1000;
		}else{
		  $bookid = $code_details['book_code']  + 1;
		}

		$book_id = 'SLA-'.$bookid;
			
		$params = array(
		"player_id" => $this->request->booking_player,
		);

		$params2 = array(
		  "academy_id" => $this->request->booking_academy
		);
		$player_details = $this->webservice_model->get_player_mobilenumber($params);
		$academy_details = $this->webservice_model->get_academy_owner_details_based_on_academy_id($params2);
		//die(print_r($academy_details));
		$admin_details = $this->webservice_model->get_admin_details();
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
		 
		if($this->request->payment_type == 'card'){
            $mode = 1;
        }else{
            $mode = 2;
        }
			
		$data = array(
			"booking_code" => $book_id,
			"book_code" => $bookid,
			"booking_academy" => $this->request->booking_academy,
			"booking_city" => $academy_details['academy_city'],
			"booking_player" => $this->request->booking_player,
			"booking_player_number" => $player_details['player_mnumber'],
			"booking_date" => date('Y-m-d'),
			"booking_time" => date('H:i'),
			"booking_amount" => $this->request->booking_amount,
			"booking_age" => $this->request->booking_age,
			"no_of_month" => $this->request->no_of_month,
			"booking_type" => 'App',
			"payment_type" => $this->request->payment_type,
			"payment_status" => $this->request->payment_status,
			"payment_mode" => $mode,
			"booking_cancel" => '0',
			"del_status" => '0',
			"created_at" => date('Y-m-d H:i:s'),
		);

		  $result = $this->webservice_model->save_academy_booking_details($data);
		  if($this->request->payment_type == 'cash'){
		  //sms configuration
				$sms_details = $this->webservice_model->get_sms_key_details();
					$api_key = $sms_details['api_key'];
					$sender_id = $sms_details['sender_id'];
					$country_code = $sms_details['country_mobile_code'];
					$text_type = $sms_details['text_type'];
					foreach($phonenumbers as $number){
						$msgtxt='Thank you for registering in the academy with street league. Please wait for confirmation.
								شكراً لتسجيلك في الأكادمية عبر أبلكيشن ستريت ليغ.  لطفاً انتظر للتأكيد. 
								 Booking Code -'.$book_id.'- رقم الحجز
								 . No.Of Month - '.$data['no_of_month'].' - عدد الأشهر';
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
			$keyview=$this->webservice_model->get_smtp_key_details();
				$db_smtp_from = $keyview['smtp_from'];
				$db_smtp_from_email = $keyview['smtp_from_email'];
				
			foreach($emailids as $emailid){
				$msgtxt= '<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title></title><link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"><link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">  <style>body{font-family: "Open Sans", sans-serif;}.social-icons {color: #313437;text-align: center;margin: 10px 0;}.social-icons i {font-size: 20px;display: inline-block;color: #d0cccc !important;margin: 0 4px;width: 35px;height: 35px;border: 1px solid #f4848e;text-align: center;border-radius: 50%;line-height: 34px;}.footer-category{background-image: linear-gradient(45deg, #da151ee0 0%, #5e55e2 99%, #6354dd 100%);padding: 10px;}.footer-category ul li {display: inline-block;position: relative;float: inherit;text-align: center;margin: 0 10px;}.footer-category ul li a {color: #f5f4f4;font-size: 17px;word-spacing: 1px;line-height: 1.5;text-decoration: none;}.footer-category ul{width:100%;text-align:center;	} @media screen and (max-width: 600px) {.footer-category ul{width:100%;text-align: -webkit-auto;} }.welcome-reg{font-weight: 600;font-size: 20px;}.register{margin: 0 auto;position: relative;}.btnreg {background: #fd8b8b;width: 180px;padding: 10px;border: 2px solid #ce7d7d;}.btnreg1 {background: #fff;  width: 205px;padding: 10px;border: 2px solid #cab98e;float: right;margin-bottom: 20px;}</style></head><body style="margin:0; padding:0; "><section style="padding: 40px;   font-family: "Open Sans", sans-serif;color: #fff;height: 100vh;"><section style="background: #f5f5f5;width: 100%;box-shadow: 0 0 10px 4px #ecebeb;"><div style="font-size: 30px;color: #000;text-align: center;margin-bottom: 15px;background-image: linear-gradient(45deg, #ffd7d9e0 0%, #dddbff 99%, #c5beff 100%);"><a target="_blank" href="'.$baseurl.'">  <img src="'.$baseurl.'assets/upload/'.$logo.'" alt="logo" style="height: 100px !important;"></a></div></section><section style="margin-top:30px; margin-bottom: 30px"><div style="width: 20%"></div><div style="width: 60%" class="register"><p class="welcome-reg" style="font-size: 20px;font-weight: 500;">Thank you '.ucfirst($player_details['player_fname']).'!<br> We appreciate you registering for academy with Streetleague, your confirmation number is Booking Code : '.$book_id.'. </p><h3 style="font-size: 20px;font-weight: 500;"> Academy Name : '.$academy_details['academy_name'].' </h3><h3 style="font-size: 20px;font-weight: 500;"> No.Of Month : '.$data['no_of_month'].' </h3><h3 style="font-size: 20px;font-weight: 500;"> LOCATION : '.$academy_details['academy_location'].' </h3><p style="font-size: 16px;font-weight: 500;">Enjoy the other cool features of the app and discover how you can interact with other players and expand your horizon by joining other players and teams in their games!</p><p style="font-size: 16px;font-weight: 500;">We also would like to hear from you your comments and suggestions, and dont worry, we will use them to better enhance our services for you.</p><p style="font-size: 16px;font-weight: 500;">See you on the field and have fun!</p><p style="font-size: 16px;font-weight: 500;">All the best,</p>
				<p style="font-size: 16px;font-weight: 500;">Your Streetleague Team</p><p><button color:linear-gradient(87deg, #ad59ff 0, #7659ff 100%); class="btnreg1"><a target="_blank" style="text-decoration: none;font-size: 18px;color: #000;" href="#">Please check your booking page in mobile app</a></button></p>	</div><div style="width: 20%"></div></section><section><div style="text-align: center; "><img src="'.$baseurl.'assets/img/foot.jpg" style="height: 315px !important;width:100%"></div></section></section></body></html>' ;
				
				$this->load->library('email');
				$this->email->from($db_smtp_from_email, $db_smtp_from);
				$this->email->to($emailid);
				$this->email->subject('SLA - Booking Information');
				$this->email->message($msgtxt);
				if ($this->email->send()) {
					//echo "you are luck!";
				} else {
					//echo $this->email->print_debugger();
				}
			}
          }
		  if(empty($result)){
			$this->response->status = 500;
			$this->response->msg = "No Data Found";
			echo json_encode($this->response);
			exit;
		  }else{
			$this->response->status = 200;
			$this->response->msg = "Success";
			$this->response->data = $data;
			echo json_encode($this->response);
			exit;
		  }
	}
	
	public function academy_booking_history_based_on_player()
    {
        $this->load->model('api/web_services_model', 'webservice_model');
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );
        $params = array(
            "player_id" => $this->request->player_id,
        );
	
		$result1 = $this->webservice_model->academy_booking_history_past_based_on_player_id($params);
		
		$result2 = $this->webservice_model->academy_booking_history_upcomin_based_on_player_id($params);
		if (empty($result1)) {
            
        } else {			
					$bookingsval['past_academy_booking'] = $result1;							
		}
		if (empty($result2)) {
            
        } else {		
					$bookingsval['upcoming_academy_booking'] = $result2;						
		}
        if (empty($result1 || $result2)) {
            $this->response->status = 500;
            $this->response->msg = "No Data Found";
            echo json_encode($this->response);
            exit;
        } else {
            $this->response->status = 200;
            $this->response->data = $bookingsval;
            $this->response->msg = "Success";
            echo json_encode($this->response);
            exit;
        }
    }
    
    public function academy_booking_cancel(){
        $this->load->model('api/web_services_model','webservice_model');
        $this->response = (Object)array(
            "status" => 500,
            "msg" => "error"
        );
        $params = array(
            "a_booking_id" => $this->request->a_booking_id,
            "cancel_date" => date('Y-m-d',strtotime($this->request->cancel_date)),
            "cancel_time" => date('H:i',strtotime($this->request->cancel_time)),
            "booking_cancel" => 1,
            "who_cancelled" => 'Player',
        );
        $result = $this->webservice_model->academy_booking_cancel_by_player($params);
        if(empty($result)){
            $this->response->status = 500;
            $this->response->msg = "Error Occured while cancel the booking";
            echo json_encode($this->response);
            exit;
        }else {
            $this->response->status = 200;
            $this->response->msg = 'Booking Cancelled Successfully';
            echo json_encode($this->response);
            exit;
        }
    }
	

}
