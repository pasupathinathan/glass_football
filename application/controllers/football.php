<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class football extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	
	
	public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
        $this->load->model('football_model');
     
    }
	
	public function index()
	{		
		if ($this->session->userdata('logged_in')) {
			redirect('dashboard');				
		}	else	{
			$this->load->view('login');
		}
		
	}
	
	
	
	/*****************front end******************* */
	
	
	public function partner(){
        $this->load->view('web_site/website_header');
        $this->load->view('web_site/partner');
    }
	
	public function privacy(){
		$this->load->view('web_site/website_header');
        $this->load->view('web_site/privacy');
    }

	public function terms(){
		$this->load->view('web_site/website_header');
        $this->load->view('web_site/terms');
    }
	
	public function about(){
		$this->load->view('web_site/website_header');
        $this->load->view('web_site/about');
    }
	
	public function contact(){
		$this->load->view('web_site/website_header');
        $this->load->view('web_site/contact');
    }
	
	
	 /*****************Login******************* */

    public function user_login() {
		$failmsg =  $this->uri->segment(2);
        $user_mail = $this->input->post('user_mail');
        $user_password = md5($this->input->post('user_password'));
        $userrole = $this->input->post('role_name');
		$user_image = $this->input->post('user_image');
        if ($userrole == '') {
            //die('hi');
            $cus_res1 = $this->football_model->admin_login($user_mail, $user_password);
            if (!empty($cus_res1)) {
                $datanew = json_decode(json_encode($cus_res1), true);
                //die(print_r($datanew));
                $this->session->sess_expiration = '86400';// expires in 1 day
                $this->session->set_userdata("logged_in", true);
                $this->session->set_userdata("user_id", $datanew['user_id']);
                $this->session->set_userdata("user_name", $datanew['user_name']);
                $this->session->set_userdata("user_role",$datanew['user_role']);
				$this->session->set_userdata("user_image",$datanew['user_image']);
				$this->session->set_userdata("language",$datanew['language']);
				$this->session->set_userdata("text_align",$datanew['text_align']);
                //die(print_r($this->session->userdata['user_role']));
                redirect('dashboard');
            } else {
                $this->session->set_userdata("logged_in", false);
                redirect("index/2");
            }
        }
      
    }

    function logout() {
        $this->session->sess_destroy();
        redirect("index");
    }
	
	//*********************** Login ***********************//
	
	//*********************** Dashboard ***********************//
	
	public function dashboard()
	{
		$this->load->model('football_model');
		
		$page_data['page_name']  = 'dashboard';
        $page_data['page_title'] = get_phrase('dashboard');
        
        
     	$total_ground=$this->football_model->total_ground();
		$total_team=$this->football_model->total_team();
        $ground_booking=$this->football_model->ground_booking();
		$total_player=$this->football_model->total_player();
		$rating_player=$this->football_model->rating_player();
		$total_tournament=$this->football_model->total_tournament();
		$tournamentlist = $this->football_model->tournament_list();
		$review_list = $this->football_model->review_list();
		$academy_review_list = $this->football_model->academy_review_list();
        $ground_owner_id = $this->session->userdata['user_id'];
        $total_ground_for_owener = $this->football_model->total_ground_for_owener($ground_owner_id);
        $ground_booking_gowner=$this->football_model->ground_booking_owner($ground_owner_id);
        $ground_total_courts=$this->football_model->ground_total_court($ground_owner_id);
        $tournament_list_by_ground_owner = $this->football_model->tournament_list_by_ground_owner($ground_owner_id);
        $tournament_total_by_ground_owner = $this->football_model->tournament_total_by_ground_owner($ground_owner_id);
        $ground_review_g_owner = $this->football_model->review_list_by_g_ownerid($ground_owner_id);
        $academy_review_a_owner = $this->football_model->academy_review_list_by_a_ownerid($ground_owner_id);
		$owners_total_academy_count = $this->football_model->owners_total_academy_count($ground_owner_id);
        $owners_academy_booking_count=$this->football_model->owners_academy_booking_count($ground_owner_id);
        
        //calendar details
        $user_role = $this->session->userdata['user_role'];
        $user_id = $this->session->userdata['user_id'];
        if($user_role == '1'){
            $getteamlist1=$this->football_model->booking_list_cash();
			$getteamlist2=$this->football_model->booking_list_card();
			if(empty($getteamlist1)){
				$getteamlist1 = array();
			}
			if(empty($getteamlist2)){
				$getteamlist2 = array();
			}
			$getteamlist = array_merge($getteamlist1,$getteamlist2); 
        }else{
			$getteamlist1=$this->football_model->ground_booking_list_cash($user_id);
            $getteamlist2=$this->football_model->ground_booking_list_card($user_id);
            if(empty($getteamlist1)){
				$getteamlist1 = array();
			}
			if(empty($getteamlist2)){
				$getteamlist2 = array();
			}
			$getteamlist = array_merge($getteamlist1,$getteamlist2);
            //die(print_r($getteamlist));
        }
        
        $calendor = array();
        if(empty($getteamlist)){

            $getteamlist = array();

        }else{
            foreach ($getteamlist as $row) {
                if($row->booking_approval == 0){
                    $status = 'Approved';
                }else {
                    $status = 'Cancelled';
                }

                if ($row->booking_type == 'Academic') {
                    $eventColor = '#fb8c00';
                } else if ($row->booking_type == 'Street League') {
                    $eventColor = '#114090';
                } else if ($row->booking_type == 'Club') {
                    $eventColor = '#43a047';
                } else {
                    $eventColor = '#00acc1';
                }

                $bookingtime = explode(',',$row->booking_time);

                foreach ($bookingtime as $btime) {
                    $endtime = strtotime($btime) + 60*60;
                    $duration = date ("h:i", $endtime);
                    $calendor[] = array(
                        'id'   => $row->booking_id,
                        'booking_type'   => $row->booking_type,
                        'title'   => $row->ground_name.' / '.$row->size.' / '.$row->booking_code ,
                        'status'   => $row->ground_name.' / '.$row->size.' / '.$row->booking_code,
                        'start'   => $row->booking_sdate.'T'.$btime,
                        'end'   => $row->booking_sdate.'T'.$duration,
                        'url' => 'booking_view/'.$row->booking_id,
                        "color" => $eventColor
                    );
                }
            }
        }

		$this->load->view('inc/admin_header');
		$this->load->view('dashboard',array('page_data'=>$page_data,'total_ground'=> $total_ground,
		'ground_total_courts'=> $ground_total_courts,'ground_booking_gowner'=> $ground_booking_gowner,
		'total_team'=>$total_team,'ground_booking'=>$ground_booking,
		'total_player'=>$total_player,'rating_player'=>$rating_player,'total_tournament'=>$total_tournament,
		'data'=>$tournamentlist,'data1'=>$review_list,'total_ground_for_owener'=> $total_ground_for_owener,
		'tournament_total_by_ground_owner'=> $tournament_total_by_ground_owner,'calendor' => $calendor,
		'data2'=>$tournament_list_by_ground_owner,'data3'=>$ground_review_g_owner,'academmy_review'=>$academy_review_list,
		'academy_review_a_owner'=>$academy_review_a_owner,'owners_total_academy_count'=>$owners_total_academy_count,
		'owners_academy_booking_count'=>$owners_academy_booking_count));
		$this->load->view('inc/admin_footer');
	}
	
	
	    public function booking_calendar()
    {



        $user_role = $this->session->userdata['user_role'];
        $user_id = $this->session->userdata['user_id'];

        if($user_role == '1'){
            $getteamlist1=$this->football_model->booking_list_cash();
			$getteamlist2=$this->football_model->booking_list_card();
			$getteamlist = array_merge($getteamlist1,$getteamlist2); 
        }else{
			$getteamlist1=$this->football_model->ground_booking_list_cash($user_id);
            $getteamlist2=$this->football_model->ground_booking_list_card($user_id);
			$getteamlist = array_merge($getteamlist1,$getteamlist2);
            //die(print_r($getteamlist));
        }
        $calendor = array();
        if(empty($getteamlist)){

            $getteamlist = array();

        }else{

            foreach ($getteamlist as $row) {
                if($row->booking_approval == 0){
                    $status = 'Approved';
                }else {
                    $status = 'Cancelled';
                }

                if ($row->booking_type == 'Academic') {
                    $eventColor = '#fb8c00';
                } else if ($row->booking_type == 'Street League') {
                    $eventColor = '#114090';
                } else if ($row->booking_type == 'Club') {
                    $eventColor = '#43a047';
                } else {
                    $eventColor = '#00acc1';
                }

                $bookingtime = explode(',',$row->booking_time);

                foreach ($bookingtime as $btime) {
                    $endtime = strtotime($btime) + 60*60;
                    $duration = date ("h:i", $endtime);
                    $calendor[] = array(
                        'id'   => $row->booking_id,
                        'booking_type'   => $row->booking_type,
                        'title'   => $row->ground_name.' / '.$row->size.' / '.$row->booking_code ,
                        'status'   => $row->ground_name.' / '.$row->size.' / '.$row->booking_code,
                        'start'   => $row->booking_sdate.'T'.$btime,
                        'end'   => $row->booking_sdate.'T'.$duration,
                        'url' => 'booking_view/'.$row->booking_id,
                        "color" => $eventColor
                    );
                }
            }


        }

        $this->load->view('inc/admin_header');
        $this->load->view('inc/admin_sidebar');
        $this->load->view('booking_calendar', array('calendor' => $calendor));
        $this->load->view('inc/admin_footer');

    }
	 

	//*********************** End Dashboard ***********************//
	
	
	public function form_basic()
	{
		$this->load->view('form_basic');
	}
	
	public function form_validation()
	{
		$this->load->view('form_validation');
	}
	
	public function form_wizard()
	{
		$this->load->view('form_wizard');
	}
	
	public function form_select()
	{
		$this->load->view('form_select');
	}
	
	public function table_basic()
	{
		$this->load->view('table_basic');
	}
	
	public function table_datatable()
	{
		$this->load->view('table_datatable');
	}
	
	public function table_tabledit()
	{
		$this->load->view('table_tabledit');
	}
	
	public function calendar()
	{
		$this->load->view('calendar');
	}
	
	
	
	public function lock()
	{
		$this->load->view('lock');
	}
	
	public function register()
	{
		$this->load->view('register');
	}
	
	public function page_profile()
	{
		$this->load->view('page_profile');
	}
	
	
	/***************************** TEAM ********************/
	
	public function team_add()
	{
		$this->load->view('inc/admin_header');		
		$this->load->view('team_add');
		$this->load->view('inc/admin_footer');
	}
	
	public function add_team()
	{	
		$image_data = array();
		
		$RandomteamNumber = mt_rand(1, 9999999); 
		
		// load library only once
		$this->load->library('upload');
		// image configuration
		$image_config['upload_path'] = 'assets/upload/teams';
		$image_config['allowed_types'] = 'gif|jpg|png|bmp';
		$image_config['max_size']    = '8200';
		$image_config['max_width']  = '1111024';
		$image_config['max_height']  = '111768';
		$image_config['file_name']  = $RandomteamNumber;

		$this->upload->initialize($image_config);

		// process image upload first
		if ( ! $this->upload->do_upload('team_logo'))
		{
		   $teams_image =  ""; 
		}
		else
		{
		   $image_data = $this->upload->data();
		   $teams_image =  $image_data['file_name']; 
		}		 

		$data = array(
		'team_name' => $this->input->post('team_name'),
		'team_email' => $this->input->post('team_email'),
		'team_city' => $this->input->post('team_city'),
		'team_phone' => $this->input->post('team_phone'),
		'team_date' => $this->input->post('team_date'),
		'team_size' => $this->input->post('team_size'),
		//'team_logo' => $this->input->post('team_logo'),
		'team_slogon' =>$this->input->post('team_slogon'),  	
		'team_logo' => $teams_image); 

		$team1232=$this->football_model->add_team($data);
		 $this->session->set_flashdata('suceessMessage', get_phrase('data_added'));
		redirect("team_list");	
	}
		
		
	public function team_list()
	{
		$teamlist=$this->football_model->team_list();
		$this->load->view('inc/admin_header');
		$this->load->view('inc/admin_sidebar');
		$this->load->view('team_list',array('data' => $teamlist));
		$this->load->view('inc/admin_footer');
	}
	
	
	public function team_update() {
        $image_data = array();
        

        $RandomteamNumber = mt_rand(1, 9999999);
       
        // load library only once
        $this->load->library('upload');
        // image configuration
        $image_config['upload_path'] = 'assets/upload/teams';
        $image_config['allowed_types'] = 'gif|jpg|png|bmp';
        $image_config['max_size'] = '8200';
        $image_config['max_width'] = '1111024';
        $image_config['max_height'] = '111768';
        $image_config['file_name'] = $RandomteamNumber;

        $this->upload->initialize($image_config);

       
        if (!$this->upload->do_upload('team_logo')) {
            $team_logo = "";
        } else {
            $document_data = $this->upload->data();
            $team_logo = $document_data['file_name'];
        }

        $q_data = $this->football_model->edit_team($this->input->post('team_id'));
        $datanew = json_decode(json_encode($q_data), true);       

        if (empty($team_logo)) {
            $team_logo = $datanew[0]['team_logo'];
        }

      //  $schltpt = $this->input->post('staff_transport');        

        $data = array('team_name' => $this->input->post('team_name'),
            'captain_id' => $this->input->post('captain_id'),
            'team_email' => $this->input->post('team_email'),
            'team_city' => $this->input->post('team_city'),
            'team_phone' => $this->input->post('team_phone'),
            'team_date' => $this->input->post('team_date'),
            'team_size' => $this->input->post('team_size'),
            'team_slogon' => $this->input->post('team_slogon'),
            'team_logo' => $team_logo);

        $res1232 = $this->football_model->team_update($data);
          
        
        $this->session->set_flashdata('suceessMessage', get_phrase('data_updated'));
        redirect("team_list");
    }

    public function edit_team() {
        $team_id = $this->uri->segment(2);
        $getlist = $this->football_model->edit_team($team_id);
        $getroutelist = $this->football_model->team_list();
        $playerslist=$this->football_model->players_list();
		$this->load->view('inc/admin_header');
		$this->load->view('inc/admin_sidebar');
        $this->load->view('edit_team', array('data' => $getlist, 'data2' => $getroutelist, 'data3' => $playerslist));
		$this->load->view('inc/admin_footer');
    }

	
	public function team_delete()
	{
		$team_id =  $this->uri->segment(2);		
		$data1 = array('team_status' => '1' );    
		$getprojectslist=$this->football_model->team_delete($team_id,$data1);
		$this->session->set_flashdata('suceessMessage', get_phrase('data_deleted'));
		redirect("team_list");	
	}
	
		public function team_profile()
	{
		$team_id = $this->uri->segment(2);
		$getteamlist = $this->football_model->user_list();
		$userview=$this->football_model->team_view($team_id);
		$this->load->view('inc/admin_header');		
		$this->load->view('team_profile',array('data12' => $userview,'data13' => $getteamlist));
		$this->load->view('inc/admin_footer');
	}
	
	/***************************** GROUND ********************/
	
public function ground_add()
	{
	    $cityname = ['Al Ain - العين', 'Abu Dhabi - أبوظبي', 'Dubai - دبي', 'Sharjah - الشارقة', 'Ajman - عجمان', 'Umm Al Quwain - ام القيوين', 'Ras Al Khaimah - رأس الخيمة', 'Fujairah - الفجيرة', 'Khor Fakkan - خورفكان'];
        $facilitylist=$this->football_model->get_ground_facility_list();
        $groundownerlist=$this->football_model->user_list();
		$this->load->view('inc/admin_header');		
		$this->load->view('ground_add',array('data3' => $facilitylist,'data4' => $groundownerlist, 'data5' => $cityname));
		$this->load->view('inc/admin_footer');
	}

    public function delete_image()
    {
        $grdid = $this->input->post('ground_id');
        $data = array( 'ground_id' => $this->input->post('ground_id'),
            'img_name' => $this->input->post('img_name'));
        $grdpicture = $this->football_model->edit_ground($grdid);
        foreach ($grdpicture as $store) {
            $grgimage = $store->ground_picture;
        }
        $img1 = $data['img_name'];
        $imgarray = explode(",",$grgimage);
        if (($key = array_search($img1, $imgarray)) !== false) {
            unset($imgarray[$key]);
        }
        $imgvalues =  implode(",",$imgarray);

        $params = array( 'ground_id' => $this->input->post('ground_id'),
            'ground_picture' => $imgvalues);
        $grdupdatepicture = $this->football_model->ground_update($params);
    }

public function add_ground()
    {
        $error=array();
		$imagelist=array();
		$extension=array("jpeg","jpg","png","gif");
		foreach($_FILES["ground_picture"]["tmp_name"] as $key=>$tmp_name)
		{
			$file_name=$_FILES["ground_picture"]["name"][$key];
			$file_tmp=$_FILES["ground_picture"]["tmp_name"][$key];
			$ext=pathinfo($file_name,PATHINFO_EXTENSION);
			if(in_array($ext,$extension))
			{
				//$dt = date("YmdHis", time());
				$random = rand(100000,999999);
				$fnm = $file_name;
				$string = strtolower($fnm);
				$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
				$string = preg_replace("/[\s-]+/", "", $string);
				$string = preg_replace("/[\s_]/", "_", $string);
				$ok = substr("$string", 0, -3);
				$fnl = "$random$ok";
				$filename=basename($file_name,$ext);
				$newFileName=$fnl.".jpg";
				
				if (move_uploaded_file($file_tmp=$_FILES["ground_picture"]["tmp_name"][$key],"assets/upload/ground/".$newFileName)) {
					echo "Uploaded";
				} else {
				   echo "File was not uploaded";
				}
				$imagelist[] =$newFileName;

			 }
			else
			{
				array_push($error,"$file_name, ");
			} 
		}
		 $imagelistaray = implode(',', $imagelist);
		
		//extract($_POST);
        // $flr_subcategory=implode(',',$this->input->post('gallery_image'));
       /*  if (1 != 1) {
            $data['imageError'] = $this->upload->display_errors();
            echo 'Please try again';
        } else {
            //image_start
            $count = count($_FILES['ground_picture']['size']);
            $config['upload_path'] = 'assets/upload/ground/';
            $config['allowed_types'] = 'gif|jpg|png|bmp';
            $config['max_size']    = '8200';
			$config['max_width']  = '1111024';
			$config['max_height']  = '111768';
            $config['image_library'] = 'gd2';
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = FALSE; 
            $config['width'] = 50;
            $config['height'] = 50;   
			} */
 

           // foreach ($_FILES as $key => $value) {
                $available = $this->input->post('ground_availablity');
                if($available == 'available'){
                    $available_code = 0;
                }else{
                    $available_code = 1;
                }
			   $groundfac[] = $this->input->post('ground_facility');
               if (empty($groundfac)) {
					$ground_facility = "";
				}else{
					$ground_facility = implode(',', $this->input->post('ground_facility'));
				}
                if ($this->session->userdata['user_role'] == 2 || $this->session->userdata['user_role'] == 3 || $this->session->userdata['user_role'] == 4) {
                    $data = array(
                        "ground_owner_id" => $this->session->userdata['user_id'],
                        'ground_name' => $this->input->post('ground_name'),
                        'ground_email' => $this->input->post('ground_email'),
                        'ground_location' => $this->input->post('ground_location'),
                        'description' => $this->input->post('ground_description'),
                        'ground_city' => $this->input->post('ground_city'),
                        'ground_phone' => $this->input->post('ground_phone'),
                        'ground_year' => $this->input->post('ground_year'),
                        'ground_facility_id' => $ground_facility,
                        'ground_availablity' => $this->input->post('ground_availablity'),
                        'online_booking' => $available_code,
                        'ground_lat' => $this->input->post('ground_lat'),
                        'ground_long' => $this->input->post('ground_long'),
                        'ground_about' => $this->input->post('ground_desc'),
                        'ground_sl_commission' => $this->input->post('sl_commission'),
                        // 'created_at' => date(),
                        'ground_picture' => $imagelistaray);

                    $ground_id = $this->football_model->add_ground($data);
                } else {
                    $data = array(
                        "ground_owner_id" => $this->input->post('ground_owner_id'),
                        'ground_name' => $this->input->post('ground_name'),
                        'ground_email' => $this->input->post('ground_email'),
                        'ground_location' => $this->input->post('ground_location'),
                        'description' => $this->input->post('ground_description'),
                        'ground_city' => $this->input->post('ground_city'),
                        'ground_phone' => $this->input->post('ground_phone'),
                        'ground_year' => $this->input->post('ground_year'),
                        'ground_facility_id' => $ground_facility,
                        'ground_availablity' => $this->input->post('ground_availablity'),
                        'online_booking' => $available_code,
                         'ground_lat' => $this->input->post('ground_lat'),
                        'ground_long' => $this->input->post('ground_long'),
                        'ground_about' => $this->input->post('ground_desc'),
                        'ground_sl_commission' => $this->input->post('sl_commission'),
                        // 'created_at' => date(),
                        'ground_picture' => $imagelistaray);

                    $ground_id = $this->football_model->add_ground($data);
                }

                //ground hours

                for($i=1;$i<=7;$i++){
                    if($i == 1){
                        $day_value = $this->input->post('grd_day_sun');
                        $ckb_val = $this->input->post('myCheck_sun');
                        if($ckb_val == 'on'){
                            $open_time = $this->input->post('open_time_sun');
                            $close_time = $this->input->post('close_time_sun');
                        }
                    } else if($i == 2){
                        $day_value = $this->input->post('grd_day_mon');
                        $ckb_val = $this->input->post('myCheck_mon');
                        if($ckb_val == 'on'){
                            $open_time = $this->input->post('open_time_mon');
                            $close_time = $this->input->post('close_time_mon');
                        }
                    } else if($i == 3){
                        $day_value = $this->input->post('grd_day_tue');
                        $ckb_val = $this->input->post('myCheck_tue');
                        if($ckb_val == 'on'){
                            $open_time = $this->input->post('open_time_tue');
                            $close_time = $this->input->post('close_time_tue');
                        }
                    } else if($i == 4){
                        $day_value = $this->input->post('grd_day_wed');
                        $ckb_val = $this->input->post('myCheck_wed');
                        if($ckb_val == 'on'){
                            $open_time = $this->input->post('open_time_wed');
                            $close_time = $this->input->post('close_time_wed');
                        }
                    } else if($i == 5){
                        $day_value = $this->input->post('grd_day_thu');
                        $ckb_val = $this->input->post('myCheck_thu');
                        if($ckb_val == 'on'){
                            $open_time = $this->input->post('open_time_thu');
                            $close_time = $this->input->post('close_time_thu');
                        }
                    }else if($i == 6){
                        $day_value = $this->input->post('grd_day_fri');
                        $ckb_val = $this->input->post('myCheck_fri');
                        if($ckb_val == 'on'){
                            $open_time = $this->input->post('open_time_fri');
                            $close_time = $this->input->post('close_time_fri');
                        }
                    }else if($i == 7){
                        $day_value = $this->input->post('grd_day_sat');
                        $ckb_val = $this->input->post('myCheck_sat');
                        if($ckb_val == 'on'){
                            $open_time = $this->input->post('open_time_sat');
                            $close_time = $this->input->post('close_time_sat');
                        }
                    }

                    if($ckb_val == 'on'){
                        $ckb_day_val = $ckb_val;
                    }else{
                        $ckb_day_val = 'off';
                        $open_time = '';
                        $close_time = '';
                    }
                    $params = array(
                        "day_value" => $day_value,
                        'day_on_off' => $ckb_day_val,
                        'open_time' => $open_time,
                        'close_time' => $close_time,
                        'ground_id' => $ground_id
                    );


                    $groundhours = $this->football_model->add_groundhours($params);
                }
				$this->session->set_flashdata('suceessMessage', get_phrase('data_added'));
                redirect("ground_list");
            //}
        }


    public function ground_list()
    {
        if($this->session->userdata['user_role'] == 2 || $this->session->userdata['user_role'] == 3 || $this->session->userdata['user_role'] == 4) {
            $params= array(
                'ground_owner_id' => $this->session->userdata['user_id'],
            );
            $groundlist=$this->football_model->ground_list($params);
        }else{
            $groundlist=$this->football_model->ground_list();
        }

        $this->load->view('inc/admin_header');
        $this->load->view('inc/admin_sidebar');
        $this->load->view('ground_list',array('data' => $groundlist));
        $this->load->view('inc/admin_footer');
    }



    	 public function ground_update() {
		
        $grdid = $this->input->post('ground_id');
        if (1 != 1) {
            $data['imageError'] = $this->upload->display_errors();
            echo 'Please try again';
        } else {
			$error=array();
		$imglist=array();
		$extension=array("jpeg","jpg","png","gif");
		foreach($_FILES["ground_picture"]["tmp_name"] as $key=>$tmp_name)
		{
			$file_name=$_FILES["ground_picture"]["name"][$key];
			$file_tmp=$_FILES["ground_picture"]["tmp_name"][$key];
			$ext=pathinfo($file_name,PATHINFO_EXTENSION);
			if(in_array($ext,$extension))
			{
				//$dt = date("YmdHis", time());
				$random = rand(100000,999999);
				$fnm = $file_name;
				$string = strtolower($fnm);
				$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
				$string = preg_replace("/[\s-]+/", "", $string);
				$string = preg_replace("/[\s_]/", "_", $string);
				$ok = substr("$string", 0, -3);
				$fnl = "$random$ok";
				$filename=basename($file_name,$ext);
				$newFileName=$fnl.".jpg";
				
				if (move_uploaded_file($file_tmp=$_FILES["ground_picture"]["tmp_name"][$key],"assets/upload/ground/".$newFileName)) {
					echo "Uploaded";
				} else {
				   echo "File was not uploaded";
				}
				$imglist[] =$newFileName;

			 }
			else
			{
				array_push($error,"$file_name, ");
			} 
		}
		 //$imagelistaray = implode(',', $imglist);
					$grdpicture = $this->football_model->edit_ground($grdid);
					foreach ($grdpicture as $store) {
                        $grgimage = $store->ground_picture;
                    }
                    $dbimg = explode(",",$grgimage);


                    //$imglist[] = $_FILES['ground_picture']['name'];

                    $totalimg = array_merge($dbimg, $imglist);

                    $imagelist = implode(',', $totalimg);

			
        //    foreach ($_FILES as $key => $value) {
               /*  for ($s = 0; $s <= $count - 1; $s++) {
                    $_FILES['ground_picture']['name'] = $value['name'][$s];
                    //old image filesodel->edit_ground($grdid);

                   

                    //die(print_r($imagelist));
                    $_FILES['ground_picture']['type'] = $value['type'][$s];
                    $_FILES['ground_picture']['tmp_name'] = $value['tmp_name'][$s];
                    $_FILES['ground_picture']['error'] = $value['error'][$s];
                    $_FILES['ground_picture']['size'] = $value['size'][$s];

                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('ground_picture')) {
                        $data['ground_picture'][$s] = $this->upload->data();


                        $config['ground_picture'] = './assets/upload/ground/';

                        $this->load->library('image_lib', $config);
                        $this->image_lib->resize();
                        $this->image_lib->clear();

                    } else {
                        $data['upload_errors'][$s] = $this->upload->display_errors();
                    }
                } */


                $q_data = $this->football_model->edit_ground($this->input->post('ground_id'));
                $datanew = json_decode(json_encode($q_data), true);

                // if (empty($ground_picture)) {
                if($_FILES["ground_picture"]["error"] == 4) {
                    //die('ji');
                    $imagelist = $datanew[0]['ground_picture'];
                }

                //  $schltpt = $this->input->post('staff_transport');
                $available = $this->input->post('ground_availablity');
                if($available == 'available'){
                    $available_code = 0;
                }else{
                    $available_code = 1;
                }
                $groundfac[] = $this->input->post('ground_facility');
               if (empty($groundfac)) {
					$ground_facility = "";
				}else{
					$ground_facility = implode(',', $this->input->post('ground_facility'));
				}
                if ($this->session->userdata['user_role'] == 2 || $this->session->userdata['user_role'] == 3 || $this->session->userdata['user_role'] == 4) {
                    $data = array(
                        'ground_name' => $this->input->post('ground_name'),
                        'ground_email' => $this->input->post('ground_email'),
                        'ground_location' => $this->input->post('ground_location'),
                        'description' => $this->input->post('ground_description'),
                        'ground_city' => $this->input->post('ground_city'),
                        'ground_phone' => $this->input->post('ground_phone'),
                        'ground_year' => $this->input->post('ground_year'),
                        'ground_facility_id' => $ground_facility,
                        'ground_availablity' => $this->input->post('ground_availablity'),
                        'online_booking' => $available_code,
                        'ground_lat' => $this->input->post('ground_lat'),
                        'ground_long' => $this->input->post('ground_long'),
                        'ground_about' => $this->input->post('ground_desc'),
						'ground_sl_commission' => $this->input->post('sl_commission'),
                        'ground_picture' => $imagelist);
                    //die(print_r($data));
                    $res1232 = $this->football_model->ground_update($data);
                } else {
                    $data = array(
                        "ground_owner_id" => $this->input->post('ground_owner_id'),
                        'ground_name' => $this->input->post('ground_name'),
                        'ground_email' => $this->input->post('ground_email'),
                        'ground_location' => $this->input->post('ground_location'),
                        'description' => $this->input->post('ground_description'),
                        'ground_city' => $this->input->post('ground_city'),
                        'ground_phone' => $this->input->post('ground_phone'),
                        'ground_year' => $this->input->post('ground_year'),
                        'ground_facility_id' => $ground_facility,
                        'ground_availablity' => $this->input->post('ground_availablity'),
                        'online_booking' => $available_code,
                         'ground_lat' => $this->input->post('ground_lat'),
                        'ground_long' => $this->input->post('ground_long'),
                        'ground_about' => $this->input->post('ground_desc'),
						'ground_sl_commission' => $this->input->post('sl_commission'),
                        'ground_picture' => $imagelist);
                    //die(print_r($data));
                    $res1232 = $this->football_model->ground_update($data);
                }

                //ground hours

                for($i=1;$i<=7;$i++){
                    if($i == 1){
                        $day_value = $this->input->post('grd_day_sun');
                        $ckb_val = $this->input->post('myCheck_sun');
                        if($ckb_val == 'on'){
                            $open_time = $this->input->post('open_time_sun');
                            $close_time = $this->input->post('close_time_sun');
                        }
                        $work_hour_id = $this->input->post('work_hour_id_sun');
                    } else if($i == 2){
                        $day_value = $this->input->post('grd_day_mon');
                        $ckb_val = $this->input->post('myCheck_mon');
                        if($ckb_val == 'on'){
                            $open_time = $this->input->post('open_time_mon');
                            $close_time = $this->input->post('close_time_mon');
                        }
                        $work_hour_id = $this->input->post('work_hour_id_mon');
                    } else if($i == 3){
                        $day_value = $this->input->post('grd_day_tue');
                        $ckb_val = $this->input->post('myCheck_tue');
                        if($ckb_val == 'on'){
                            $open_time = $this->input->post('open_time_tue');
                            $close_time = $this->input->post('close_time_tue');
                        }
                        $work_hour_id = $this->input->post('work_hour_id_tue');
                    } else if($i == 4){
                        $day_value = $this->input->post('grd_day_wed');
                        $ckb_val = $this->input->post('myCheck_wed');
                        if($ckb_val == 'on'){
                            $open_time = $this->input->post('open_time_wed');
                            $close_time = $this->input->post('close_time_wed');
                        }
                        $work_hour_id = $this->input->post('work_hour_id_wed');
                    } else if($i == 5){
                        $day_value = $this->input->post('grd_day_thu');
                        $ckb_val = $this->input->post('myCheck_thu');
                        if($ckb_val == 'on'){
                            $open_time = $this->input->post('open_time_thu');
                            $close_time = $this->input->post('close_time_thu');
                        }
                        $work_hour_id = $this->input->post('work_hour_id_thu');
                    }else if($i == 6){
                        $day_value = $this->input->post('grd_day_fri');
                        $ckb_val = $this->input->post('myCheck_fri');
                        if($ckb_val == 'on'){
                            $open_time = $this->input->post('open_time_fri');
                            $close_time = $this->input->post('close_time_fri');
                        }
                        $work_hour_id = $this->input->post('work_hour_id_fri');
                    }else if($i == 7){
                        $day_value = $this->input->post('grd_day_sat');
                        $ckb_val = $this->input->post('myCheck_sat');
                        if($ckb_val == 'on'){
                            $open_time = $this->input->post('open_time_sat');
                            $close_time = $this->input->post('close_time_sat');
                        }
                        $work_hour_id = $this->input->post('work_hour_id_sat');
                    }

                    if($ckb_val == 'on'){
                        $ckb_day_val = $ckb_val;
                    }else{
                        $ckb_day_val = 'off';
                        $open_time = '';
                        $close_time = '';
                    }
                    $params = array(
                        "day_value" => $day_value,
                        'day_on_off' => $ckb_day_val,
                        'open_time' => $open_time,
                        'close_time' => $close_time,
                        'work_hour_id' => $work_hour_id
                    );


                    $groundhours = $this->football_model->update_groundhours($params);
                }


                $this->session->set_flashdata('suceessMessage', get_phrase('data_updated'));
                redirect("ground_list");
            //}
        }
    }

    public function edit_ground() {
        $cityname = ['Al Ain - العين', 'Abu Dhabi - أبوظبي', 'Dubai - دبي', 'Sharjah - الشارقة', 'Ajman - عجمان', 'Umm Al Quwain - ام القيوين', 'Ras Al Khaimah - رأس الخيمة', 'Fujairah - الفجيرة', 'Khor Fakkan - خورفكان'];
        $ground_id = $this->uri->segment(2);
        $groundownerlist=$this->football_model->user_list();
        $getlist = $this->football_model->edit_ground($ground_id);
        $getroutelist = $this->football_model->ground_list();
        $facilitylist=$this->football_model->get_ground_facility_list();
        $hourlist=$this->football_model->get_ground_hour_list($ground_id);
        //die(print_r($hourlist));
        $this->load->view('inc/admin_header');
        $this->load->view('inc/admin_sidebar');
        $this->load->view('edit_ground', array('data' => $getlist, 'data2' => $getroutelist, 'data3' => $facilitylist, 'data4' => $hourlist , 'data5' => $groundownerlist, 'data6' => $cityname));
        $this->load->view('inc/admin_footer');
    }


	public function ground_delete()
	{
		$ground_id =  $this->uri->segment(2);		
		$data1 = array('ground_status' => '1' );    
		$getprojectslist=$this->football_model->ground_delete($ground_id,$data1);
		$this->session->set_flashdata('suceessMessage', get_phrase('data_deleted'));
		redirect("ground_list");	
	}

    public function ground_profile()
    {
        $ground_id = $this->uri->segment(2);
        $getgroundlist = $this->football_model->ground_list();
        $groundview=$this->football_model->ground_view($ground_id);
        $facilitylist=$this->football_model->get_ground_facility_list();
        $hourlist=$this->football_model->get_ground_hour_list($ground_id);
        $this->load->view('inc/admin_header');
        $this->load->view('ground_profile',array('data12' => $groundview,'data13' => $getgroundlist, 'data3' => $facilitylist, 'data4' => $hourlist));
        $this->load->view('inc/admin_footer');
    }
	
	/****************************** USERS PART*********************/
	
	public function user_add()
	{
		$this->load->view('inc/admin_header');		
		$this->load->view('user_add');
		$this->load->view('inc/admin_footer');
	}
	
	public function dummy()
	{
		$this->load->view('inc/admin_header');		
		$this->load->view('dummy');
		$this->load->view('inc/admin_footer');
	}
	
	
	public function add_dummy()
	{	

		$data = array(
		'user_name' => $this->input->post('user_name'),		
		'user_zip' =>$this->input->post('user_zip'),  	
		); 
		$res1232=$this->football_model->add_dummy($data);
		$this->session->set_flashdata('suceessMessage', get_phrase('data_added'));
		redirect("user_list");	
	}
	
	
public function add_user()
	{	
		$failmsg =  $this->uri->segment(2);
		$image_data = array();
		
		$RandomteacherNumber = mt_rand(1, 9999999); 
		
		// load library only once
		$this->load->library('upload');
		// image configuration
		$image_config['upload_path'] = 'assets/upload/users';
		$image_config['allowed_types'] = 'gif|jpg|png|bmp';
		$image_config['max_size']    = '8200';
		$image_config['max_width']  = '1111024';
		$image_config['max_height']  = '111768';
		$image_config['file_name']  = $RandomteacherNumber;

		$this->upload->initialize($image_config);
         //echo '2-----';
		// process image upload first
		if ( ! $this->upload->do_upload('user_image'))
		{
		   $users_image =  ""; 
		   //echo '3-----';
		}
		else
		{
		   $image_data = $this->upload->data();
		   
		   $users_image =  $image_data['file_name']; 
		   //echo '1-----'.$users_image;
		}
		//exit;
		$data = array(
            'user_name' => $this->input->post('user_name'),
            'user_email' => $this->input->post('user_email'),
            'user_phone' => $this->input->post('user_phone'),
            'user_password' => md5($this->input->post('user_phone')),
			'user_landline' => $this->input->post('user_landline'),
            'user_address' => $this->input->post('user_address'),
            'user_country' => $this->input->post('user_country'),
            'user_area' => $this->input->post('user_state'),
            'user_city' => $this->input->post('user_city'),
            'user_zip' => $this->input->post('user_zip'),
            'user_role' => $this->input->post('role'),
            'user_image' => $users_image);
		
		 $user_phone_email = $this->football_model->validation_checks($data);
         $baseurl =  base_url();
		 $adminlink = $baseurl.'admin/';
		 
         if($user_phone_email > 0)
             {
				 //die(print_r('ji'));
               //$this->session->set_flashdata('errorMessage', 'User Already Exists !');
               redirect("user_add/2");	
			 }
            else
            {
				$getlist = $this->football_model->get_logo_settings();
				foreach ($getlist as $store){
				  $logo_image = $store->logo_image;
				}
				$logo = $logo_image;
			$keyview=$this->football_model->get_smtp_key_settings();
			$db_smtp_from = $keyview['smtp_from'];
			$db_smtp_from_email = $keyview['smtp_from_email'];
			
			
			$msgtxt= '<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title></title><link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"><link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">  <style>body{font-family: "Open Sans", sans-serif;}.social-icons {color: #313437;text-align: center;margin: 10px 0;}.social-icons i {font-size: 20px;display: inline-block;color: #d0cccc !important;margin: 0 4px;width: 35px;height: 35px;border: 1px solid #f4848e;text-align: center;border-radius: 50%;line-height: 34px;}.footer-category{background-image: linear-gradient(45deg, #da151ee0 0%, #5e55e2 99%, #6354dd 100%);padding: 10px;}.footer-category ul li {display: inline-block;position: relative;float: inherit;text-align: center;margin: 0 10px;}.footer-category ul li a {color: #f5f4f4;font-size: 17px;word-spacing: 1px;line-height: 1.5;text-decoration: none;}.footer-category ul{width:100%;text-align:center;	} @media screen and (max-width: 600px) {.footer-category ul{width:100%;text-align: -webkit-auto;} }.welcome-reg{font-weight: 600;font-size: 20px;}.register{margin: 0 auto;position: relative;}.btnreg {background: #fd8b8b;width: 180px;padding: 10px;border: 2px solid #ce7d7d;}.btnreg1 {background: #fff;  width: 205px;padding: 10px;border: 2px solid #cab98e;float: right;margin-bottom: 20px;}</style></head><body style="margin:0; padding:0; "><section style="padding: 40px;   font-family: "Open Sans", sans-serif;color: #fff;height: 100vh;"><section style="background: #f5f5f5;width: 100%;box-shadow: 0 0 10px 4px #ecebeb;"><div style="font-size: 30px;color: #000;text-align: center;margin-bottom: 15px;background-image: linear-gradient(45deg, #ffd7d9e0 0%, #dddbff 99%, #c5beff 100%);"><a target="_blank" href="'.$baseurl.'">  <img src="'.$baseurl.'assets/upload/'.$logo.'" alt="logo" style="height: 100px !important;"></a></div></section><section style="margin-top:30px; margin-bottom: 30px"><div style="width: 20%"></div><div style="width: 60%" class="register"><h3 style="font-size: 20px;font-weight: 500;">Dear '.$data['user_name'].'</h3><p class="welcome-reg" style="font-size: 16px;font-weight: 500;">Thank you for being a part of our growing team! let us help players out there love the sport we also cherish and provide them with the best there is in football!<br> As part of the team, you will be getting your own unique username and password that is:</p><h3 style="font-size: 20px;font-weight: 500;"> USERNAME : '.$data['user_email'].' </h3><h3 style="font-size: 20px;font-weight: 500;">PASSWORD : '.$data['user_phone'].' </h3><p style="font-size: 16px;font-weight: 500;">Please keep in mind that the dashboard is at your disposal and you can always print out valuable information for you business records. 
Of course nothing is perfect, and we are always welcoming any comments and suggestions from your side, and we take complains seriously and use them to enhance the dashboard not just for you but for the players as well.</p><p style="font-size: 16px;font-weight: 500;">If you have any concerns, feel free to send an email to us at streetleague.me@gmail.com and we will surely get back to you in any way possible, as soon as possible.</p><p style="font-size: 16px;font-weight: 500;">Again, we are very pleased that you joined our team and let us see each other in the field someday!</p><p style="font-size: 16px;font-weight: 500;">In Happiness,</p><p style="font-size: 16px;font-weight: 500;">Your Streetleague Team</p><p><button color:linear-gradient(87deg, #ad59ff 0, #7659ff 100%); class="btnreg1"><a target="_blank" style="text-decoration: none;font-size: 18px;color: #000;" href="'.$adminlink.'">Visit Our Web Portal</a></button></p>	</div><div style="width: 20%"></div></section><section><div style="text-align: center; "><a target="_blank" href="'.$adminlink.'"> <img src="'.$baseurl.'assets/img/foot.jpg" style="height: 315px !important;width:100%"></a></div></section></section></body></html>' ;
            $this->load->library('email');
            $this->email->from($db_smtp_from_email, $db_smtp_from);
            $this->email->to($data['user_email']);
            $this->email->subject('SL - Ground Owner Information');
            $this->email->message($msgtxt);
            
            if ($this->email->send()) {
                //echo "you are luck!";
            } else {
                //echo $this->email->print_debugger();
            }
            
		$res1232=$this->football_model->add_user($data);
		$this->session->set_flashdata('suceessMessage', get_phrase('data_added'));
		redirect("user_list");	
	  }
	}
		
	public function user_list()
	{
		$userlist=$this->football_model->user_list();
		$this->load->view('inc/admin_header');
		$this->load->view('inc/admin_sidebar');
		$this->load->view('user_list',array('data' =>$userlist));
		$this->load->view('inc/admin_footer');
	}
	
	public function user_update() {
        $image_data = array();
        

        $RandomteacherNumber = mt_rand(1, 9999999);
       
        // load library only once
        $this->load->library('upload');
        // image configuration
        $image_config['upload_path'] = 'assets/upload/users';
        $image_config['allowed_types'] = 'gif|jpg|png|bmp';
        $image_config['max_size'] = '8200';
        $image_config['max_width'] = '1111024';
        $image_config['max_height'] = '111768';
        $image_config['file_name'] = $RandomteacherNumber;

        $this->upload->initialize($image_config);

       
        if (!$this->upload->do_upload('user_image')) {
            $user_resume = "";
        } else {
            $document_data = $this->upload->data();
            $user_resume = $document_data['file_name'];
        }

        $q_data = $this->football_model->edit_user($this->input->post('user_id'));
        $datanew = json_decode(json_encode($q_data), true);

       

        if (empty($user_resume)) {
            $user_resume = $datanew[0]['user_image'];
        }

      //  $schltpt = $this->input->post('staff_transport');

        

        $data = array('user_name' => $this->input->post('user_name'),
		'user_email' => $this->input->post('user_email'),
		'user_phone' => $this->input->post('user_phone'),
		'user_landline' => $this->input->post('user_landline'),
		'user_address' => $this->input->post('user_address'),
		'user_country' => $this->input->post('user_country'),
		'user_area' => $this->input->post('user_state'),
		'user_city' => $this->input->post('user_city'),
		'user_zip' =>$this->input->post('user_zip'),
		'user_role' => $this->input->post('role'),
		'user_image' => $user_resume);

        $res1232 = $this->football_model->user_update($data);
          
        
        $this->session->set_flashdata('suceessMessage', get_phrase('data_updated'));
        redirect("user_list");
    }

    public function edit_user() {
        $user_id = $this->uri->segment(2);
        $getlist = $this->football_model->edit_user($user_id);
        $getroutelist = $this->football_model->user_list();
		$this->load->view('inc/admin_header');
		$this->load->view('inc/admin_sidebar');
        $this->load->view('edit_user', array('data' => $getlist, 'data2' => $getroutelist));
		$this->load->view('inc/admin_footer');
    }

	
	
	public function user_delete()
	{
		$id =  $this->uri->segment(2);		
		$data1 = array('user_status' => '1' );    
		$getprojectslist=$this->football_model->user_delete($id,$data1);
		$this->session->set_flashdata('suceessMessage', get_phrase('data_deleted'));
		redirect("user_list");	
	}
	
	
	public function disable_user()
	{
		$id =  $this->uri->segment(2);		
		$data1 = array('disp_status' => '1' );    
		$getprojectslist=$this->football_model->disable_user($id,$data1);	
		redirect("user_list");	
	}
	
	public function enable_user()
	{
		$id =  $this->uri->segment(2);		
		$data1 = array('disp_status' => '0' );    
		$getprojectslist=$this->football_model->enable_user($id,$data1);	
		redirect("user_list");	
	}
	
	
	public function user_profile()
	{
		$user_id = $_GET['user_id'];
		$getroutelist1 = $this->football_model->user_list();
		$userview=$this->football_model->user_view($user_id);
		$this->load->view('inc/admin_header');		
		$this->load->view('user_profile',array('data12' => $userview,'data13' => $getroutelist1));
		$this->load->view('inc/admin_footer');
	}
	
	

	
	public function forgot_password()
	{
        $user_id = $this->session->userdata("user_id");
        $getroutelist1 = $this->football_model->user_list();
        $userview=$this->football_model->user_view($user_id);
        $this->load->view('inc/admin_header');
		$this->load->view('forgot_password',array('data12' => $userview,'data13' => $getroutelist1));
        $this->load->view('inc/admin_footer');
	}


	public function change_password(){
        $newpassword = md5($_POST['new_password']);
        $oldpassword = md5($_POST['old_password']);
        $confirmpassword = md5($_POST['confirm_password']);
        $id = $this->session->userdata("user_id");
        //die($id);
            if ($newpassword != $oldpassword) {
                $data['row'] = $this->football_model->update_password($id, $newpassword, $oldpassword, $confirmpassword);
                if ($data['row'] >= 1) {
                    $this->session->set_flashdata('message_name', 'Password has been chaged success fully');
                    redirect("index");
                } else {
                    $this->session->set_flashdata('message_name', 'Old password is incorrect');
                    redirect("forgot_password");
                }
            } else {
                $this->session->set_flashdata('message_name', 'Old password and New password can not be same');
                redirect("forgot_password?user_id='".$id."' ");
            }
    }
    
       public function edit_profile()
    {
        $user_id = $_GET['user_id'];
        $userview=$this->football_model->user_view($user_id);
        $this->load->view('inc/admin_header');
        $this->load->view('update_profile',array('data12' => $userview));
        $this->load->view('inc/admin_footer');
    }

    public function profile_update() {
        $image_data = array();


        $RandomteacherNumber = mt_rand(1, 9999999);

        // load library only once
        $this->load->library('upload');
        // image configuration
        $image_config['upload_path'] = 'assets/upload/users';
        $image_config['allowed_types'] = 'gif|jpg|png|bmp';
        $image_config['max_size'] = '8200';
        $image_config['max_width'] = '1111024';
        $image_config['max_height'] = '111768';
        $image_config['file_name'] = $RandomteacherNumber;

        $this->upload->initialize($image_config);


        if (!$this->upload->do_upload('user_image')) {
            $user_resume = "";
        } else {
            $document_data = $this->upload->data();
            $user_resume = $document_data['file_name'];
        }

        $q_data = $this->football_model->edit_user($this->input->post('user_id'));
        $datanew = json_decode(json_encode($q_data), true);



        if (empty($user_resume)) {
            $user_resume = $datanew[0]['user_image'];
        }

        //  $schltpt = $this->input->post('staff_transport');
        $user_id = $this->input->post('user_id');


        $data = array('user_name' => $this->input->post('user_name'),
            'user_email' => $this->input->post('user_email'),
            'user_phone' => $this->input->post('user_phone'),
            'user_address' => $this->input->post('user_address'),
            'user_country' => $this->input->post('user_country'),
            'user_area' => $this->input->post('user_state'),
            'user_city' => $this->input->post('user_city'),
            'user_zip' =>$this->input->post('user_zip'),
            'user_image' => $user_resume);

        $res1232 = $this->football_model->user_update($data);


        $this->session->set_flashdata('suceessMessage', get_phrase('data_updated'));
        redirect("edit_profile?user_id=$user_id");
    }
	
	
	/****************************** TOURNAMENT PART*********************/
	
	public function tournament_add()
	{
		
		$this->load->view('inc/admin_header');	
		if($this->session->userdata['user_role'] == 2 || $this->session->userdata['user_role'] == 3 || $this->session->userdata['user_role'] == 4) {
            $params= array(
                'ground_owner_id' => $this->session->userdata['user_id'],
            );
            $groundlist=$this->football_model->ground_list($params);
        }else{
            $groundlist=$this->football_model->ground_list();
        }
                $awardlist=$this->football_model->awards_list();
		$this->load->view('tournament_add',array('data2' => $groundlist,'data3' => $awardlist));
		$this->load->view('inc/admin_footer');
	}

	public function add_tournament(){

		
		$image_data = array();
		
		$RandomteacherNumber = mt_rand(1, 9999999); 
		
		// load library only once
		$this->load->library('upload');
		// image configuration
		$image_config['upload_path'] = 'assets/upload/tournament';
		$image_config['allowed_types'] = 'gif|jpg|png|bmp';
		$image_config['max_size']    = '8200';
		$image_config['max_width']  = '1111024';
		$image_config['max_height']  = '111768';
		$image_config['file_name']  = $RandomteacherNumber;

		$this->upload->initialize($image_config);

		// process image upload first
		if ( ! $this->upload->do_upload('tour_trophy'))
		{
		   $trophy_image =  ""; 
		}
		else
		{
		   $image_data = $this->upload->data();
		   $trophy_image =  $image_data['file_name']; 
		}
		
		
		$image_data = array();
		
		$RandombannerNumber = mt_rand(1, 999999); 
		
		// load library only once
		$this->load->library('upload');
		// image configuration
		$image_config['upload_path'] = 'assets/upload/tournament';
		$image_config['allowed_types'] = '*';
		$image_config['max_size']    = '8200';
		$image_config['max_width']  = '1111024';
		$image_config['max_height']  = '111768';
		$image_config['file_name']  = $RandombannerNumber;

		$this->upload->initialize($image_config);

		// process image upload first
		if ( ! $this->upload->do_upload('tour_banner'))
		{
		   $banner_image =  ""; 
		}
		else
		{
		   $image_data = $this->upload->data();
		   $banner_image =  $image_data['file_name']; 
		}
           $awardlist = $this->input->post('award_id');
		if (empty($awardlist)) {
			 $award_ids = '';
		}else{
			 $award_ids = implode(',',$this->input->post('award_id'));
		}
		$data = array(
			'tour_name' => $this->input->post('tour_name'),
			'tour_city' => $this->input->post('tour_city'),
			'tour_address' => $this->input->post('tour_address'),
			'tour_startdate' => $this->input->post('tour_startdate'),
			'tour_enddate' => $this->input->post('tour_enddate'),
			'tour_teamlimit' => $this->input->post('tour_teamlimit'),
			'tour_playerlimit' => $this->input->post('tour_playerlimit'),
			'tour_groundname' => $this->input->post('tour_groundname'),
			'tour_type' => $this->input->post('tour_type'),
			'tour_regfees' =>$this->input->post('tour_regfees'), 
			'tour_reglastdate' =>$this->input->post('tour_reglastdate'),
			'tour_winner_price' =>$this->input->post('tour_winner_price'),
            'tour_runner_price' =>$this->input->post('tour_runner_price'),
            'award_id' => $award_ids,
			'tour_trophy' =>$trophy_image,
			'tour_banner' =>$banner_image
		);

		$res1232=$this->football_model->add_tournament($data);
		$this->session->set_flashdata('suceessMessage', get_phrase('data_added'));
		redirect("tournament_list");	
	}
	
	
	public function tournament_update() {
      
      $image_data = array();
        

        $RandomteacherNumber = mt_rand(1, 9999999);
       
        // load library only once
        $this->load->library('upload');
        // image configuration
        $image_config['upload_path'] = 'assets/upload/tournament';
        $image_config['allowed_types'] = 'gif|jpg|png|bmp';
        $image_config['max_size'] = '8200';
        $image_config['max_width'] = '1111024';
        $image_config['max_height'] = '111768';
        $image_config['file_name'] = $RandomteacherNumber;

        $this->upload->initialize($image_config);

       
        if (!$this->upload->do_upload('tour_trophy')) {
            $tour_trophy = "";
        } else {
            $document_data = $this->upload->data();
            $tour_trophy = $document_data['file_name'];
        }

        $q_data = $this->football_model->edit_tournament($this->input->post('tour_id'));
        $datanew = json_decode(json_encode($q_data), true);

       

        if (empty($tour_trophy)) {
            $tour_trophy = $datanew[0]['tour_trophy'];
        }

      //  $schltpt = $this->input->post('staff_transport');

        $RandomteacherNumber1 = mt_rand(1, 999999);
       
        // load library only once
        $this->load->library('upload');
        // image configuration
        $image_config['upload_path'] = 'assets/upload/tournament';
        $image_config['allowed_types'] = 'gif|jpg|png|bmp';
        $image_config['max_size'] = '8200';
        $image_config['max_width'] = '1111024';
        $image_config['max_height'] = '111768';
        $image_config['file_name'] = $RandomteacherNumber1;

        $this->upload->initialize($image_config);

       
        if (!$this->upload->do_upload('tour_banner')) {
            $tour_banner = "";
        } else {
            $document_data = $this->upload->data();
            $tour_banner = $document_data['file_name'];
        }

        $q_data = $this->football_model->edit_tournament($this->input->post('tour_id'));
        $datanew = json_decode(json_encode($q_data), true);

       

        if (empty($tour_banner)) {
            $tour_banner = $datanew[0]['tour_banner'];
        }
         $awardlist = $this->input->post('award_id');
		if (empty($awardlist)) {
			 $award_ids = '';
		}else{
			 $award_ids = implode(',',$this->input->post('award_id'));
		}
        $data = array(
            'tour_name' => $this->input->post('tour_name'),
            'tour_city' => $this->input->post('tour_city'),
            'tour_address' => $this->input->post('tour_address'),
            'tour_startdate' => $this->input->post('tour_startdate'),
            'tour_enddate' => $this->input->post('tour_enddate'),
            'tour_teamlimit' => $this->input->post('tour_teamlimit'),
            'tour_playerlimit' => $this->input->post('tour_playerlimit'),
            'tour_groundname' => $this->input->post('tour_groundname'),
            'tour_type' => $this->input->post('tour_type'),
            'tour_regfees' =>$this->input->post('tour_regfees'),
            'tour_reglastdate' =>$this->input->post('tour_reglastdate'),
            'tour_winner_price' =>$this->input->post('tour_winner_price'),
            'tour_runner_price' =>$this->input->post('tour_runner_price'),
            'award_id' => $award_ids,
            'tour_trophy' =>$tour_trophy,
            'tour_banner' =>$tour_banner
        );

        $res1232 = $this->football_model->tournament_update($data);
		 $this->session->set_flashdata('suceessMessage', get_phrase('data_updated'));
        redirect("tournament_list");
		
	
    }

    public function edit_tournament() {
        $tour_id = $this->uri->segment(2);
        $getlist = $this->football_model->edit_tournament($tour_id);
        if($this->session->userdata['user_role'] == 2 || $this->session->userdata['user_role'] == 3 || $this->session->userdata['user_role'] == 4) {
            $params= array(
                'ground_owner_id' => $this->session->userdata['user_id'],
            );
            
            $gettournamentlist=$this->football_model->ground_list($params);
        }else{
            $gettournamentlist=$this->football_model->ground_list();
        }
        
        $awardlist=$this->football_model->awards_list();
		$this->load->view('inc/admin_header');
		$this->load->view('inc/admin_sidebar');
        $this->load->view('edit_tournament', array('data' => $getlist, 'data2' => $gettournamentlist,'data3' => $awardlist));
		$this->load->view('inc/admin_footer');
    }

	

	public function tournament_list(){
		if($this->session->userdata['user_role'] == 2 || $this->session->userdata['user_role'] == 3 || $this->session->userdata['user_role'] == 4) {
            $params= array(
                'ground_owner_id' => $this->session->userdata['user_id'],
            );           
            $tournamentlist = $this->football_model->tournament_list_ground($params);
            
        }else{
            $tournamentlist = $this->football_model->tournament_list();
        }
		$this->load->view('inc/admin_header');
		$this->load->view('inc/admin_sidebar');
		$this->load->view('tournament_list',array('data' =>$tournamentlist));
		$this->load->view('inc/admin_footer');
	}

	public function tournament_profile() {
        $tour_id = $this->uri->segment(2);
		$getlist = $this->football_model->view_tournament($tour_id);
        $awardlist=$this->football_model->awards_list();
		$this->load->view('inc/admin_header');
		//$this->load->view('inc/admin_sidebar');
        $this->load->view('tournament_profile', array('data' => $getlist,'data3' => $awardlist));
		$this->load->view('inc/admin_footer');
    }
	
	public function tournament_delete()
	{
		$tour_id =  $this->uri->segment(2);
		$getlist=$this->football_model->get_delete_tournament_schedule($tour_id);
		if($getlist > 0){
		    $this->session->set_flashdata('errorMessage', get_phrase("First remove the scheduled match.After delete the tournament"));
		    redirect("tournament_list"); 
		}else{
    		$data1 = array('tour_delstatus' => '1' );    
    		$getprojectslist=$this->football_model->tournament_delete($tour_id,$data1);
    		$delete_tourn_register=$this->football_model->tournament_register_delete($tour_id);
    		$this->session->set_flashdata('suceessMessage', get_phrase('data_deleted'));
    		redirect("tournament_list");  
		}
			
	}

 //************************************TOURNAMENT PART*********************************//

	//*********************** PLAYER ***************************//
	
	public function players_list()
	{
		$userlist=$this->football_model->players_list();
		$this->load->view('inc/admin_header');
		$this->load->view('inc/admin_sidebar');
		$this->load->view('players_list',array('data' =>$userlist));
		$this->load->view('inc/admin_footer');
	}
	
	public function player_delete()
	{
		$id =  $this->uri->segment(2);		
		$data1 = array('player_status' => '1' );    
		$getprojectslist=$this->football_model->player_delete($id,$data1);
		 $this->session->set_flashdata('suceessMessage', get_phrase('data_deleted'));
		redirect("players_list");	
	}
	
	
	public function disable_player()
	{
		$id =  $this->uri->segment(2);		
		$data1 = array('player_display' => '1' );    
		$getprojectslist=$this->football_model->disable_player($id,$data1);	
		redirect("players_list");	
	}
	
	public function enable_player()
	{
		$id =  $this->uri->segment(2);		
		$data1 = array('player_display' => '0' );    
		$getprojectslist=$this->football_model->enable_player($id,$data1);	
		redirect("players_list");	
	}
	
	
	
	
	public function player_profile()
	{
		$player_id = $this->uri->segment(2);
		$getplayerlist1 = $this->football_model->players_list_all();
		$playerview=$this->football_model->player_view($player_id);
		$this->load->view('inc/admin_header');		
		$this->load->view('player_profile',array('data12' => $playerview,'data13' => $getplayerlist1));
		$this->load->view('inc/admin_footer');
	}
	
	
	//*********************** BOOKINGS ***************************//
	
public function booking_list()
	{
	    if($this->session->userdata['user_role'] == 2 || $this->session->userdata['user_role'] == 3 || $this->session->userdata['user_role'] == 4) {
            $params= array(
                'ground_owner_id' => $this->session->userdata['user_id'],
            );
       
			$bookinglist1=$this->football_model->booking_list_all_cash($params);
			$bookinglist2=$this->football_model->booking_list_all_card($params);
			if(empty($bookinglist1)){
				$bookinglist1 = array();
			}
			if(empty($bookinglist2)){
				$bookinglist2 = array();
			}
			$bookinglist = array_merge($bookinglist1,$bookinglist2); 
        }else{
            $bookinglist1=$this->football_model->booking_list_all_cash();
			$bookinglist2=$this->football_model->booking_list_all_card();
			$bookinglist = array_merge($bookinglist1,$bookinglist2); 
        }
		
		$this->load->view('inc/admin_header');
		$this->load->view('inc/admin_sidebar');
		$this->load->view('booking_list',array('data' =>$bookinglist));
		$this->load->view('inc/admin_footer');
	}




  public function approval_update(){
        $approval_id = $this->input->post('booking_id');
		 $book_details = $this->football_model->booking_view($approval_id);
        foreach ($book_details as $store) {
            $booking_id = $store->booking_code;
        }
        $user_role = $this->session->userdata['user_role'];
        if($user_role == 1){
            $user_name = 'Admin';
        }else{
            $user_name = 'Ground Owner';
        }
        $data = array(
            'booking_approval' => $this->input->post('booking_approval'),
            'cancel_reason' => $this->input->post('cancel_reason'),
            'cancel_date' => date('Y-m-d'),
            'cancel_time' => date('H:i'),
            'who_cancelled' => $user_name
        );
		
		$param = array(
            'cancel_status' => '1'
        );
		
        $details = $this->football_model->payment_cancel_update($booking_id,$param);

        $res1232 = $this->football_model->approval_update($approval_id,$data);
        $this->session->set_flashdata('suceessMessage', get_phrase('data_updated'));
        redirect("booking_list");
    }
	

	
	 public function booking_delete()
    {
        $id =  $this->uri->segment(2);
        $book_code =  $this->uri->segment(3);
        $booking_code = 'SL-'.$book_code;
        $getprojectslist=$this->football_model->booking_delete($id);
        $getprojectslist=$this->football_model->ground_payment_delete($booking_code);
        //$getprojectslist=$this->football_model->match_schedule_delete($booking_code);
        $this->session->set_flashdata('suceessMessage', get_phrase('data_deleted'));
        redirect("booking_list");
    }
    
    /*Time slot starts*/

 	public function get_booking_hours(){

        $data = array(
            'dayOfWeek' => $this->input->post('dayOfWeek'),
            'ground_id' => $this->input->post('ground_id'),
            'dateval' => $this->input->post('dateval'),
            'booking_time_slot' => $this->input->post('booking_time_slot'),
            'ground_size' => $this->input->post('ground_size'),
            'booking_type' => $this->input->post('booking_type'),
            'rid' => $this->input->post('rid')
        );

       $gethourslist=$this->football_model->time_slot_hours($data);
		$getbulkbooking_hours=$this->football_model->bulk_booking_time_slot_hours($data);
        $getlist = $this->football_model->ground_open_close_booking_hours($data);
        $getslot = $this->football_model->ground_slot_details_based_size($data);
		//die(print_r($getslot));
        $this->load->view('booking_hours_slots', array('data1' => $getlist,'data2' => $data,'data3' => $gethourslist,'data4' => $getbulkbooking_hours,'data5' => $getslot));
    }

    public function get_ground_size(){
        $ground_id = $this->input->post('ground_id');
        $getlist = $this->football_model->get_ground_size_based_on_ground_id($ground_id);
        echo json_encode($getlist);
    }


    public function get_booking_amount(){
        $ground_size_id = $this->input->post('ground_size_id');
        $getlist = $this->football_model->get_booking_amount_based_on_ground_id($ground_size_id);

        foreach ($getlist as $row) {
            $percentage = $row->ground_discount;
            $totalWidth = $row->ground_price;
        }


        $new_width = ($percentage / 100) * $totalWidth;

        $toamount = $totalWidth - $new_width;

        $data[] = array(
            'amount' => number_format($toamount, 2, '.', '')
        );
        

        echo json_encode($data);
    }

    /*time slot ends*/
	
	
	public function booking_view()
	{
		$booking_id = $this->uri->segment(2);
		$bookingapplist=$this->football_model->booking_approval_list_view();
		//$bookinglist=$this->football_model->booking_list_all();
		$playerview=$this->football_model->booking_view($booking_id);
		$this->load->view('inc/admin_header');		
		$this->load->view('booking_view',array('data12' => $playerview,'data13' => $bookingapplist));
		$this->load->view('inc/admin_footer');
	}

    public function booking_add(){
		if($this->session->userdata['user_role'] == 2 || $this->session->userdata['user_role'] == 3 || $this->session->userdata['user_role'] == 4) {
            $params= array(
                'ground_owner_id' => $this->session->userdata['user_id'],
            );
            $groundlist=$this->football_model->ground_list($params);
        }else{
            $groundlist=$this->football_model->ground_list();
        }
        $playerlist = $this->football_model->players_list();
        $this->load->view('inc/admin_header');
        $this->load->view('add_booking', array('data1' => $groundlist, 'data2' => $playerlist));
        $this->load->view('inc/admin_footer');
    }
	
	
public function add_booking(){
        $phonenumbers = array();
        $emailids = array();
        $code_details = $this->football_model->get_booking_code();

        if($code_details['book_code'] == 0){
            $bookid = 1000;
        }else{
            $bookid = $code_details['book_code']  + 1;
        }

        $book_id = 'SL-'.$bookid;

        $player_id = $this->input->post('player_id');
        $ground_id = $this->input->post('ground_id');
        /* $player_details = $this->football_model->player_view($player_id);

        foreach ($player_details as $store) {
            $teamid = $store->team_id;
            $emailids[] = $store->player_email;
        } */
		
		
         $phonenumbers[] = ltrim($this->input->post('player_number'), '0');


        $ground_details = $this->football_model->edit_ground($ground_id);
        foreach ($ground_details as $store) {
			$ground_location = $store->ground_location;
            $groundcity = $store->ground_city;
            $ground_owner_id = $store->ground_owner_id;
            $sl_commission = $store->ground_sl_commission;
        }
        $user_details = $this->football_model->get_user_details($ground_owner_id);
        foreach ($user_details as $store) {
            $phonenumbers[] = ltrim($store->user_phone, '0');
            $emailids[] = $store->user_email;
        }

        $admin_id = 1;
        $admin_details = $this->football_model->get_user_details($admin_id);
        foreach ($admin_details as $store) {
            $phonenumbers[] = ltrim($store->user_phone, '0');
            $emailids[] = $store->user_email;
        }


        $timearray = $this->input->post('time_slot');
        $booking_time =  implode(",",$timearray);


        $params = array(
            "booking_code" => $book_id,
            "book_code" => $bookid,
            "booking_ground" =>  $this->input->post('ground_id'),
            "booking_groundcity" => $groundcity,
            "player_name" =>  $this->input->post('player_id'),
            "booking_player_number" =>  $this->input->post('player_number'),
            "booking_sdate" =>  $this->input->post('booking_date'),
            "booking_ground_size" =>  $this->input->post('ground_size'),
            "booking_time" =>  $booking_time,
            "booking_paymenttype" =>  $this->input->post('payment_type'),
            "booking_type" =>  $this->input->post('booking_type'),
            "booking_amount" =>  $this->input->post('booking_amount'),
            "booking_approval" => '0',
            "booking_status" => '0',
            "payment_status" => '2',
            "created_at" => date('Y-m-d H:i:s'),
        );
        $bking_id = $this->football_model->save_booking_details($params);

        //sms integration
        $this->load->model('api/web_services_model','webservice_model');
         $sms_details = $this->webservice_model->get_sms_key_details();
                $api_key = $sms_details['api_key'];
                $sender_id = $sms_details['sender_id'];
				$country_code = $sms_details['country_mobile_code'];
				$text_type = $sms_details['text_type'];
        foreach($phonenumbers as $number){
                    $msgtxt= 'Thank you for booking with street league. Please wait for confirmation.
							يرجى الانتظار .. سوف يتم تأكيد حجز ملعبك عبر أبلكيشن Street League بعد لحظات
							 Booking Code -'.$book_id.'- رقم الحجز
							 . Date -'.date("d-m-Y",strtotime($params['booking_sdate'])).'-تاريخ الحجز 
							 . Time -'.$params['booking_time'].'-وقت الحجز';
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

        //email configurtion
		$getlist = $this->football_model->get_logo_settings();
				foreach ($getlist as $store){
				  $logo_image = $store->logo_image;
				}
				$logo = $logo_image;
		$keyview=$this->football_model->get_smtp_key_settings();
			$db_smtp_from = $keyview['smtp_from'];
			$db_smtp_from_email = $keyview['smtp_from_email'];
			
        foreach($emailids as $emailid){
			$msgtxt= '<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title></title><link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"><link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">  <style>body{font-family: "Open Sans", sans-serif;}.social-icons {color: #313437;text-align: center;margin: 10px 0;}.social-icons i {font-size: 20px;display: inline-block;color: #d0cccc !important;margin: 0 4px;width: 35px;height: 35px;border: 1px solid #f4848e;text-align: center;border-radius: 50%;line-height: 34px;}.footer-category{background-image: linear-gradient(45deg, #da151ee0 0%, #5e55e2 99%, #6354dd 100%);padding: 10px;}.footer-category ul li {display: inline-block;position: relative;float: inherit;text-align: center;margin: 0 10px;}.footer-category ul li a {color: #f5f4f4;font-size: 17px;word-spacing: 1px;line-height: 1.5;text-decoration: none;}.footer-category ul{width:100%;text-align:center;	} @media screen and (max-width: 600px) {.footer-category ul{width:100%;text-align: -webkit-auto;} }.welcome-reg{font-weight: 600;font-size: 20px;}.register{margin: 0 auto;position: relative;}.btnreg {background: #fd8b8b;width: 180px;padding: 10px;border: 2px solid #ce7d7d;}.btnreg1 {background: #fff;  width: 205px;padding: 10px;border: 2px solid #cab98e;float: right;margin-bottom: 20px;}</style></head><body style="margin:0; padding:0; "><section style="padding: 40px;   font-family: "Open Sans", sans-serif;color: #fff;height: 100vh;"><section style="background: #f5f5f5;width: 100%;box-shadow: 0 0 10px 4px #ecebeb;"><div style="font-size: 30px;color: #000;text-align: center;margin-bottom: 15px;background-image: linear-gradient(45deg, #ffd7d9e0 0%, #dddbff 99%, #c5beff 100%);"><a target="_blank" href="'.$baseurl.'">  <img src="'.$baseurl.'assets/upload/'.$logo.'" alt="logo" style="height: 100px !important;"></a></div></section><section style="margin-top:30px; margin-bottom: 30px"><div style="width: 20%"></div><div style="width: 60%" class="register"><p class="welcome-reg" style="font-size: 20px;font-weight: 500;">Thank you '.ucfirst($params['player_name']).'!<br> We appreciate you booking with Streetleague, your confirmation number is Booking Code : '.$book_id.'. </p><h3 style="font-size: 20px;font-weight: 500;"> Date : '.$params['booking_sdate'].' </h3><h3 style="font-size: 20px;font-weight: 500;"> Time : '.$params['booking_time'].' </h3><h3 style="font-size: 20px;font-weight: 500;"> LOCATION : '.$ground_location.' </h3><p style="font-size: 16px;font-weight: 500;">Enjoy the other cool features of the app and discover how you can interact with other players and expand your horizon by joining other players and teams in their games!</p><p style="font-size: 16px;font-weight: 500;">We also would like to hear from you your comments and suggestions, and dont worry, we will use them to better enhance our services for you.</p><p style="font-size: 16px;font-weight: 500;">See you on the field and have fun!</p><p style="font-size: 16px;font-weight: 500;">All the best,</p>
			<p style="font-size: 16px;font-weight: 500;">Your Streetleague Team</p><p><button color:linear-gradient(87deg, #ad59ff 0, #7659ff 100%); class="btnreg1"><a target="_blank" style="text-decoration: none;font-size: 18px;color: #000;" href="#">Please check your booking page in mobile app</a></button></p>	</div><div style="width: 20%"></div></section><section><div style="text-align: center; "><img src="'.$baseurl.'assets/img/foot.jpg" style="height: 315px !important;width:100%"></div></section></section></body></html>' ;
			
			// $msgtxt= $book_id. '"Bookind code is generated .The booking date is '.$params['booking_sdate'].' Please check your notification page';
            $this->load->library('email');
            // FCPATH refers to the CodeIgniter install directory
            // Specifying a file to be attached with the email
            // if u wish attach a file uncomment the script bellow:
            //$file = FCPATH . 'yourfilename.txt';
            // Defines the email details
            $this->email->from($db_smtp_from_email, $db_smtp_from);
            $this->email->to($emailid);
            $this->email->subject('SL - Booking Information');
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
        }

        //payment module
        if($this->input->post('payment_type') == 'card'){
            $mode = 1;
        }else{
            $mode = 2;
        }
		
		$grandtotal = $this->input->post('booking_amount');
		$new_amount = ($sl_commission / 100) * $grandtotal;
		$groundamount = $grandtotal - $new_amount;

        $paymentparams = array(
            "booking_id" =>  $bking_id,
            "ground_id" =>  $this->input->post('ground_id'),
            "player_id" =>  $this->input->post('player_id'),
            "ground_owner_id" =>  $ground_owner_id,
            "payment_mode" =>  $mode,
            "payment_amount" =>  $this->input->post('booking_amount'),
            "groundowner_amount" =>  $groundamount,
            "sl_amount" =>  $new_amount,
            "payment_status" => '2'
        );

        $result = $this->football_model->save_payment_details($paymentparams);
		 $this->session->set_flashdata('suceessMessage', get_phrase('data_added'));
        redirect("booking_list");
    }
    
    
    public function edit_booking(){

        $booking_id = $this->uri->segment(2);

        $playerview=$this->football_model->booking_view($booking_id);
        if($this->session->userdata['user_role'] == 2 || $this->session->userdata['user_role'] == 3 || $this->session->userdata['user_role'] == 4) {
            $params= array(
                'ground_owner_id' => $this->session->userdata['user_id'],
            );
            $groundlist=$this->football_model->ground_list($params);
        }else{
            $groundlist=$this->football_model->ground_list();
        }
        $playerlist = $this->football_model->players_list();

        $this->load->view('inc/admin_header');
        $this->load->view('edit_booking', array('data' => $playerview,'data1' => $groundlist,'data2' => $playerlist));
        $this->load->view('inc/admin_footer');
    }

   public function update_booking(){

        $player_id = $this->input->post('player_id');
        $ground_id = $this->input->post('ground_id');
        /* $player_details = $this->football_model->player_view($player_id);

        foreach ($player_details as $store) {
            $teamid = $store->team_id;
        } */


        $ground_details = $this->football_model->edit_ground($ground_id);
        foreach ($ground_details as $store) {
            $groundcity = $store->ground_city;
            $ground_owner_id = $store->ground_owner_id;
            $sl_commission = $store->ground_sl_commission;
        }

        $timearray = $this->input->post('time_slot');
        $booking_time =  implode(",",$timearray);

        $params = array(
            "booking_ground" =>  $this->input->post('ground_id'),
            "booking_groundcity" => $groundcity,
            "player_name" =>  $this->input->post('player_id'),
			 "booking_player_number" =>  $this->input->post('player_number'),
            "booking_sdate" =>  $this->input->post('booking_date'),
            "booking_ground_size" =>  $this->input->post('ground_size'),
            "booking_time" =>  $booking_time,
            "booking_paymenttype" =>  $this->input->post('payment_type'),
            "booking_type" =>  $this->input->post('booking_type'),
            "booking_amount" =>  $this->input->post('booking_amount')
        );
        //die(print_r($params));
        $result = $this->football_model->update_booking_details($params);

        if($this->input->post('payment_type') == 'card'){
            $mode = 1;
        }else{
            $mode = 2;
        }
		
		$grandtotal = $this->input->post('booking_amount');
		$new_amount = ($sl_commission / 100) * $grandtotal;
		$groundamount = $grandtotal - $new_amount;

        $paymentparams = array(
            "ground_id" =>  $this->input->post('ground_id'),
            "player_id" =>  $this->input->post('player_id'),
            "ground_owner_id" =>  $ground_owner_id,
            "payment_mode" =>  $mode,
            "payment_amount" =>  $this->input->post('booking_amount'),
			"groundowner_amount" =>  $groundamount,
            "sl_amount" =>  $new_amount
        );

        $result = $this->football_model->update_payment_details($paymentparams);

		 $this->session->set_flashdata('suceessMessage', get_phrase('data_updated'));
        redirect("booking_list");
    }
	


public function payment_list()
	{
		if($this->session->userdata['user_role'] == 2 || $this->session->userdata['user_role'] == 3 || $this->session->userdata['user_role'] == 4) {
            $params= array(
                'ground_owner_id' => $this->session->userdata['user_id'],
            );
       
			$bookinglist=$this->football_model->payment_list_all($params);
        }else{
            $bookinglist=$this->football_model->payment_list_all();
        }
		
		
		$this->load->view('inc/admin_header');
		$this->load->view('inc/admin_sidebar');
		$this->load->view('payment_list',array('data' =>$bookinglist));
		$this->load->view('inc/admin_footer');
	}
	
	
	public function payment_update(){
        $pay_id = $this->input->post('pay_id');
        $book_details = $this->football_model->view_payment($pay_id);
        foreach ($book_details as $store) {
            $booking_code = $store->booking_id;
        }
		$dayval = date('Y-m-d');
        $data = array(
            'payment_mode' => $this->input->post('payment_mode'),
            'payment_status' => $this->input->post('status'),
            'payment_date' => $dayval
        );
		
		$param = array(
            'payment_status' => $this->input->post('status')
        );

        $res1232 = $this->football_model->payment_update($pay_id,$data);
        $details = $this->football_model->booking_payment_update($booking_code,$param);
         $this->session->set_flashdata('suceessMessage', get_phrase('data_updated'));
        redirect("payment_list");
    }
	
	public function payment_view()
	{
		$booking_id = $this->uri->segment(2);
		
		$playerview=$this->football_model->payment_view($booking_id);
		$this->load->view('inc/admin_header');		
		$this->load->view('payment_view',array('data12' => $playerview));
		$this->load->view('inc/admin_footer');
	}
	
    //****************************BOOKING END **************//


	/* starts*/  

    public function award_add() 
    {
        $this->load->view('inc/admin_header');
        $this->load->view('awards_add');
        $this->load->view('inc/admin_footer');
    }

    public function add_awards(){
        $data = array(
            'award_name' => $this->input->post('award_name'),
        );

        $res1232 = $this->football_model->awards_add($data);
		 $this->session->set_flashdata('suceessMessage', get_phrase('data_added'));
        redirect("award_list");
    }


    public function award_list(){
        $awardlist=$this->football_model->awards_list();
        //die(print_r($awardlist));
        $this->load->view('inc/admin_header');
        $this->load->view('inc/admin_sidebar');
        $this->load->view('awards_list',array('data' =>$awardlist));
        $this->load->view('inc/admin_footer');
    }

    public function edit_award(){
        $award_id = $this->uri->segment(2);
        $getlist = $this->football_model->edit_award($award_id);
        $this->load->view('inc/admin_header');
        $this->load->view('inc/admin_sidebar');
        $this->load->view('awards_edit', array('data' => $getlist));
        $this->load->view('inc/admin_footer');
    }

    public function edit_awards(){
        $award_id = $this->input->post('award_id');
        $data = array(
            'award_name' => $this->input->post('award_name')
        );

        $res1232 = $this->football_model->awards_update($award_id,$data);
        $this->session->set_flashdata('suceessMessage', get_phrase('data_updated'));
        redirect("award_list");
    }

    public function award_delete()
    {
        $id =  $this->uri->segment(2);
        $data1 = array('del_status' => '1' );
        $getprojectslist=$this->football_model->awards_delete($id,$data1);
        $this->session->set_flashdata('suceessMessage', get_phrase('data_deleted'));
        redirect("award_list");
    }

	/* Ends*/
    /*--------------Ground Facility--------------*/

    public function ground_facility_add()
    {
        $this->load->view('inc/admin_header');
        $this->load->view('add_ground_facility');
        $this->load->view('inc/admin_footer');

    }

    public function add_ground_facility()
    {
        $params=array(
            'facility_name' => $this->input->post('ground_facility'),
        );
        $res1232=$this->football_model->save_ground_facility($params);
        $this->session->set_flashdata('suceessMessage', get_phrase('data_added'));
        redirect("ground_facility_list");
    }

    public function ground_facility_list()
    {
        $facilitylist=$this->football_model->get_ground_facility_list();
        $this->load->view('inc/admin_header');
        $this->load->view('inc/admin_sidebar');
        $this->load->view('ground_facility_list',array('data' =>$facilitylist));
        $this->load->view('inc/admin_footer');

    }

    public function facility_delete()
    {
        $facility_id =  $this->uri->segment(2);
        $data1 = array('del_status' => '1' );
        $getprojectslist=$this->football_model->facility_delete($facility_id,$data1);
         $this->session->set_flashdata('suceessMessage', get_phrase('data_deleted'));
        redirect("ground_facility_list");
    }


    public function edit_facilitys(){
        $facility_id = $this->uri->segment(2);
        //die(print_r($facility_id));
        $getlist = $this->football_model->change_facility($facility_id);

        $this->load->view('inc/admin_header');
        $this->load->view('inc/admin_sidebar');
        $this->load->view('edit_facility', array('data' => $getlist));
        $this->load->view('inc/admin_footer');
    }

    public function edit_facilityss(){
        $facility_id = $this->input->post('facility_id');
        $data = array(
            'facility_name' => $this->input->post('facility_name')
        );

        $res1232 = $this->football_model->facility_update($facility_id,$data);
         $this->session->set_flashdata('suceessMessage', get_phrase('data_updated'));
        redirect("ground_facility_list");
    }
    /*-----------End  code-------*/
	
	
	/* Coding Starts */
	
	    public function tourn_match_points_add(){
        if($this->session->userdata['user_role'] == 2 || $this->session->userdata['user_role'] == 3 || $this->session->userdata['user_role'] == 4) {
            $params= array(
                'ground_owner_id' => $this->session->userdata['user_id'],
            );           
            $tournamentlist = $this->football_model->tournament_list_ground($params);
            
        }else{
            $tournamentlist = $this->football_model->tournament_list();
        }
        $this->load->view('inc/admin_header');
        $this->load->view('inc/admin_sidebar');
        $this->load->view('tournament_match_points_add',array('data1' => $tournamentlist));
        $this->load->view('inc/admin_footer');
    }

    public function tourn_match_points_save(){
        $data = array(
        	'sno' => $this->input->post('sno'),
            'tour_id' => $this->input->post('tour_id'),
            'team_id' => $this->input->post('team_id'),
            'team_group' => $this->input->post('team_group'),
            'played_games' => $this->input->post('played_games'),
            'points' => $this->input->post('points'),
            'wins' => $this->input->post('wins'),
            'position' => $this->input->post('position'),
            'loss' => $this->input->post('loss'),
            'tie' => $this->input->post('tie'),
            'goals_scored' => $this->input->post('goals_scored'),
            'goals_scored_against' => $this->input->post('goals_scored_against'),
            'goals_differences' => $this->input->post('goals_differences'),
        );
        $res1232 = $this->football_model->add_tourn_match_points($data);
         $this->session->set_flashdata('suceessMessage', get_phrase('data_added'));
        redirect("booking_tournament_list");
    }

    public function tourn_match_points_list()
    {
        $pointslist=$this->football_model->get_tourn_match_points_list();
        $this->load->view('inc/admin_header');
        $this->load->view('inc/admin_sidebar');
        $this->load->view('tournament_match_points_list',array('data' =>$pointslist));
        $this->load->view('inc/admin_footer');
    }

    public function tourn_match_points_edit(){
        $id = $this->uri->segment(2);
        $getlist = $this->football_model->edit_tourn_match_points($id);
        $this->load->view('inc/admin_header');
        $this->load->view('inc/admin_sidebar');
        $this->load->view('tournament_match_points_edit', array('data' => $getlist));
        $this->load->view('inc/admin_footer');
    }

    public function tourn_match_points_update(){
        $id = $this->input->post('id');
        $data = array(
            'played_games' => $this->input->post('played_games'),
            'points' => $this->input->post('points'),
            'wins' => $this->input->post('wins'),
            'loss' => $this->input->post('loss'),
            'tie' => $this->input->post('tie'),
            'goals_scored' => $this->input->post('goals_scored'),
            'goals_scored_against' => $this->input->post('goals_scored_against'),
            'goals_differences' => $this->input->post('goals_differences'),
        );

        $res1232 = $this->football_model->update_tourn_match_points($id,$data);         
		$this->session->set_flashdata('suceessMessage', get_phrase('data_updated'));
        redirect("tourn_match_points_list");
    }

    public function tourn_match_points_view(){
        $id = $this->uri->segment(2);
        $getlist = $this->football_model->edit_tourn_match_points($id);
        $this->load->view('inc/admin_header');
        $this->load->view('inc/admin_sidebar');
        $this->load->view('tournament_match_points_view', array('data' => $getlist));
        $this->load->view('inc/admin_footer');
    }

  public function tour_schedule_add(){
  if($this->session->userdata['user_role'] == 2 || $this->session->userdata['user_role'] == 3 || $this->session->userdata['user_role'] == 4) {
            $params= array(
                'ground_owner_id' => $this->session->userdata['user_id'],
            );           
            $tournamentlist = $this->football_model->tournament_list_ground($params);
            
        }else{
            $tournamentlist = $this->football_model->tournament_list();
        }
        
        $groundlist = $this->football_model->ground_list();
        $this->load->view('inc/admin_header');
        $this->load->view('tournament_schedule_add', array('data1' => $tournamentlist,'data2' => $groundlist));
        $this->load->view('inc/admin_footer');
    }

    public function get_team_names(){
        $tour_id = $this->input->post('tour_id');
        $getlist = $this->football_model->get_team_names_based_on_tour_id($tour_id);
        echo json_encode($getlist);
    }

 
    public function add_tournament_schedule(){


       $x = 1;
        $countsize = count($this->input->post('team_a'));
        for ($i=0; $i<$countsize ; $i++)
        {
            $code_details = $this->football_model->get_tourn_booking_code();

            if($code_details['book_code'] == 0){
                $bookid = 1000;
            }else{
                $bookid = $code_details['book_code']  + 1;
            }

            $book_id = 'SLT-'.$bookid;


            /* $timearray = $this->input->post('time_slot'.$x);
            $booking_time =  implode(",",$timearray); */

            $data = array(
                'tour_id' => $this->input->post('tour_id'),
                'groups' => $this->input->post('groups')[$i],
                'team1' => $this->input->post('team_a')[$i],
                'match_number' => $this->input->post('match_number')[$i],
                'time' => date ('h:i A',strtotime($this->input->post('time')[$i])),
                "booking_code" => $book_id,
				"book_code" => $bookid,
                'team2' => $this->input->post('team_b')[$i],
                'date' => $this->input->post('date')[$i],
                'ground_id' => $this->input->post('ground_id')[$i],
                'ground_size' => $this->input->post('ground_size')[$i],
            );
			/* die(print_r($data)); */
            $res1232 = $this->football_model->tournament_schedule_add($data);
             /* $data2 = array(
                'booking_tour_id' => $this->input->post('tour_id'),
                "booking_code" => $book_id,
                "book_code" => $bookid,
                'booking_time' => $booking_time,
                'booking_sdate' => $this->input->post('date')[$i],
                'booking_ground' => $this->input->post('ground_id')[$i],
                'booking_ground_size' => $this->input->post('ground_size')[$i],
                'booking_type' => 'Tournament',
                "booking_approval" => '0',
                "booking_status" => '0',
                "payment_status" => '0'
            );
            $bking_id123 = $this->football_model->save_booking_details($data2); */ 
            $x++;
        }
        $this->session->set_flashdata('suceessMessage', get_phrase('data_added'));
        redirect("booking_tournament_list");
    }

    public function tournament_schedule_list()
    {
        $getlist=$this->football_model->get_tournament_schedule_list();
        //die(print_r($getlist));
        $this->load->view('inc/admin_header');
        $this->load->view('inc/admin_sidebar');
        $this->load->view('tournament_schedule_list', array('data' => $getlist));
        $this->load->view('inc/admin_footer');
    }

    public function edit_tournament_schedule(){
        $tournamentlist = $this->football_model->tournament_list();
        $tourn_match_id = $this->uri->segment(2);
        $groundlist = $this->football_model->ground_list();
        $getlist=$this->football_model->get_edit_tournament_schedule($tourn_match_id);
		$team_id1 = $getlist[0]->team_id1;
		$team_id2 = $getlist[0]->team_id2;
		$tour_team1_points = $this->football_model->current_tourn_team1_points($getlist,$team_id1);
		$tour_team2_points = $this->football_model->current_tourn_team2_points($getlist,$team_id2);
        $this->load->view('inc/admin_header');
        $this->load->view('inc/admin_sidebar');
        $this->load->view('tournament_schedule_edit', array('data' => $getlist,
		'data1' => $tournamentlist,'data2' => $groundlist,'team1_data'=>$tour_team1_points,'team2_data'=>$tour_team2_points));
        $this->load->view('inc/admin_footer');
    }

     public function update_tournament_schedule(){
        $tourn_match_id = $this->input->post('tourn_match_id');
        $data = array(
            'tour_id' => $this->input->post('tour_id'),
            'team1' => $this->input->post('team_a'),
            'groups' => $this->input->post('groups'),
            'match_number' => $this->input->post('match_number'),
            'time' => date ('h:i A',strtotime($this->input->post('time'))),
            'team2' => $this->input->post('team_b'),
            'date' => $this->input->post('date'),
            'ground_id' => $this->input->post('ground_id'),
			'match_status' => $this->input->post('match_status'),
        );
        $res1 = $this->football_model->tournament_schedule_update($tourn_match_id,$data);
		    if($this->input->post('teama_status') == 1){
			$teama_wins = 1;
			$teama_loss = 0;
			$teama_tie = 0;
			 }
			if($this->input->post('teama_status') == 2){
			$teama_wins = 0;
			$teama_loss = 1;
			$teama_tie = 0;
			 }
			 if($this->input->post('teama_status') == 3){
			$teama_wins = 0;
			$teama_loss = 0;
			$teama_tie = 1;
			 }
			if($this->input->post('teamb_status') == 1){
			$teamb_wins = 1;
			$teamb_loss = 0;
			$teamb_tie = 0;
			 }
			 if($this->input->post('teamb_status') == 2){
			$teamb_wins = 0;
			$teamb_loss = 1;
			$teamb_tie = 0;
			 }
			if($this->input->post('teamb_status') == 3){
			$teamb_wins = 0;
			$teamb_loss = 0;
			$teamb_tie = 1;
			 }
			 if($this->input->post('teama_status') == 1){
				$goals_diff_teama = $this->input->post('teama_goals_scored') - $this->input->post('teamb_goals_scored');
			}elseif($this->input->post('teama_status') == 2){
				$goals_diff_teama = $this->input->post('teama_goals_scored') - $this->input->post('teamb_goals_scored');
			}elseif($this->input->post('teama_status') == 3){
				$goals_diff_teama = $this->input->post('teama_goals_scored') - $this->input->post('teamb_goals_scored');
			}
			if($this->input->post('teamb_status') == 1){
				$goals_diff_teamb = $this->input->post('teamb_goals_scored') - $this->input->post('teama_goals_scored');
			}elseif($this->input->post('teamb_status') == 2){
				$goals_diff_teamb = $this->input->post('teamb_goals_scored') - $this->input->post('teama_goals_scored');
			}elseif($this->input->post('teamb_status') == 3){
				$goals_diff_teamb = $this->input->post('teama_goals_scored') - $this->input->post('teamb_goals_scored');
			}
		
			 
		if($this->input->post('match_status') == 1){
			$team_id1 = $this->input->post('team_a');
			$team_id2 = $this->input->post('team_b');
			$getlist = array(
				"tour_id"=>$this->input->post('tour_id'),
				"team_group"=>$this->input->post('groups'),
				"match_number"=>$this->input->post('match_number'),
			);
			
			$tour_teama_points = $this->football_model->current_tourn_team1_points_exists_or_not($getlist,$team_id1);
		    if(empty($tour_teama_points)){
					$data1 = array(
						'tour_id' => $this->input->post('tour_id'),
						'team_id' => $this->input->post('team_a'),
						'team_group' => $this->input->post('groups'),
						'match_no' => $this->input->post('match_number'),
						'played_games' => 1,
						'points' => $this->input->post('teama_points'),
						'wins' => $teama_wins,
						'loss' => $teama_loss,
						'tie' => $teama_tie,
						'goals_scored' => $this->input->post('teama_goals_scored'),
						'goals_scored_against' => $this->input->post('teamb_goals_scored'),
						'goals_differences' => $goals_diff_teama,
						);
						$res2 = $this->football_model->save_current_tournament_points($data1);
						$tot_points1 = $this->football_model->tournament_tot_points_exixts_or_not($data1);
						if(empty($tot_points1)){
							$res4 = $this->football_model->add_tourn_match_points($data1);
						}else{
							$data3 = array(
							'id' => $tot_points1->id,
							'tour_id' => $this->input->post('tour_id'),
							'team_id' => $this->input->post('team_a'),
							'match_no' => $this->input->post('match_number'),
							'played_games' => $tot_points1->played_games + 1,
							'points' => $tot_points1->points + $this->input->post('teama_points'),
							'wins' => $tot_points1->wins + $teama_wins,
							'loss' => $tot_points1->loss + $teama_loss,
							'tie' => $tot_points1->tie + $teama_tie,
							'goals_scored' => $tot_points1->goals_scored + $this->input->post('teama_goals_scored'),
							'goals_scored_against' => $tot_points1->goals_scored_against + $this->input->post('teamb_goals_scored'),
							'goals_differences' => (($tot_points1->goals_differences) + ($goals_diff_teama)),
							);
							$res5 = $this->football_model->tour_book_update($data3);
						}
			}else{
				$teama_data=array(
				"tour_id"=>$this->input->post('tour_id'),
				"team_id"=>$this->input->post('team_a'),
				"team_group"=>$this->input->post('groups'),
				);
				$tot_points1 = $this->football_model->tournament_tot_points_exixts_or_not($teama_data);
				$data13 = array(
				'id' => $tot_points1->id,
				'tour_id' => $this->input->post('tour_id'),
				'team_id' => $this->input->post('team_a'),
				'match_no' => $this->input->post('match_number'),
				'played_games' => $tot_points1->played_games,
				'points' => $tot_points1->points - $tour_teama_points['points'],
				'wins' => $tot_points1->wins - $tour_teama_points['wins'],
				'loss' => $tot_points1->loss - $tour_teama_points['loss'],
				'tie' => $tot_points1->tie - $tour_teama_points['tie'],
				'goals_scored' => $tot_points1->goals_scored - $tour_teama_points['goals_scored'],
				'goals_scored_against' => $tot_points1->goals_scored_against - $tour_teama_points['goals_scored_against'],
				'goals_differences' => (($tot_points1->goals_differences) - ($tour_teama_points['goals_differences'])),
				);
				$res15 = $this->football_model->tour_book_update($data13);
				$delete_ctp1=$this->football_model->current_tourn_team1_points_delete($tour_teama_points['ctp_id']);

					$data1 = array(
						'tour_id' => $this->input->post('tour_id'),
						'team_id' => $this->input->post('team_a'),
						'team_group' => $this->input->post('groups'),
						'match_no' => $this->input->post('match_number'),
						'played_games' => 1,
						'points' => $this->input->post('teama_points'),
						'wins' => $teama_wins,
						'loss' => $teama_loss,
						'tie' => $teama_tie,
						'goals_scored' => $this->input->post('teama_goals_scored'),
						'goals_scored_against' => $this->input->post('teamb_goals_scored'),
						'goals_differences' => $goals_diff_teama,
						);
						$res2 = $this->football_model->save_current_tournament_points($data1);
						$tot_points1 = $this->football_model->tournament_tot_points_exixts_or_not($data1);
						if(empty($tot_points1)){
							$res4 = $this->football_model->add_tourn_match_points($data1);
						}else{
							$data3 = array(
							'id' => $tot_points1->id,
							'tour_id' => $this->input->post('tour_id'),
							'team_id' => $this->input->post('team_a'),
							'match_no' => $this->input->post('match_number'),
							'played_games' => $tot_points1->played_games + 1,
							'points' => $tot_points1->points + $this->input->post('teama_points'),
							'wins' => $tot_points1->wins + $teama_wins,
							'loss' => $tot_points1->loss + $teama_loss,
							'tie' => $tot_points1->tie + $teama_tie,
							'goals_scored' => $tot_points1->goals_scored + $this->input->post('teama_goals_scored'),
							'goals_scored_against' => $tot_points1->goals_scored_against + $this->input->post('teamb_goals_scored'),
							'goals_differences' => (($tot_points1->goals_differences) + ($goals_diff_teama)),
							);
							$res5 = $this->football_model->tour_book_update($data3);
						}

			
			}
			$tour_teamb_points = $this->football_model->current_tourn_team2_points_exists_or_not($getlist,$team_id2);
			if(empty($tour_teamb_points)){
				$data2 = array(
				'tour_id' => $this->input->post('tour_id'),
				'team_id' => $this->input->post('team_b'),
				'team_group' => $this->input->post('groups'),
				'match_no' => $this->input->post('match_number'),
				'played_games' => 1,
				'points' => $this->input->post('teamb_points'),
				'wins' => $teamb_wins,
				'loss' => $teamb_loss,
				'tie' => $teamb_tie,
				'goals_scored' => $this->input->post('teamb_goals_scored'),
				'goals_scored_against' => $this->input->post('teama_goals_scored'),
				'goals_differences' => $goals_diff_teamb,
				);
				$res3 = $this->football_model->save_current_tournament_points($data2);
				$tot_points2 = $this->football_model->tournament_tot_points_exixts_or_not($data2);
				if(empty($tot_points2)){
					$res6 = $this->football_model->add_tourn_match_points($data2);
				}else{
					$data4 = array(
					'id' => $tot_points2->id,
					'tour_id' => $this->input->post('tour_id'),
					'team_id' => $this->input->post('team_b'),
					'match_no' => $this->input->post('match_number'),
					'played_games' => $tot_points2->played_games + 1,
					'points' => $tot_points2->points + $this->input->post('teamb_points'),
					'wins' => $tot_points2->wins + $teamb_wins,
					'loss' => $tot_points2->loss + $teamb_loss,
					'tie' => $tot_points2->tie + $teamb_tie,
					'goals_scored' => $tot_points2->goals_scored + $this->input->post('teamb_goals_scored'),
					'goals_scored_against' => $tot_points2->goals_scored_against + $this->input->post('teama_goals_scored'),
					'goals_differences' => (($tot_points2->goals_differences) + ($goals_diff_teamb)),
					);
					$res1232 = $this->football_model->tour_book_update($data4);
				}
			}else{
				$teamb_data=array(
				"tour_id"=>$this->input->post('tour_id'),
				"team_id"=>$this->input->post('team_b'),
				"team_group"=>$this->input->post('groups'),
				);
				$tot_points2 = $this->football_model->tournament_tot_points_exixts_or_not($teamb_data);
				$data14 = array(
				'id' => $tot_points2->id,
				'tour_id' => $this->input->post('tour_id'),
				'team_id' => $this->input->post('team_b'),
				'match_no' => $this->input->post('match_number'),
				'played_games' => $tot_points2->played_games,
				'points' => $tot_points2->points - $tour_teamb_points['points'],
				'wins' => $tot_points2->wins - $tour_teamb_points['wins'],
				'loss' => $tot_points2->loss - $tour_teamb_points['loss'],
				'tie' => $tot_points2->tie - $tour_teamb_points['tie'],
				'goals_scored' => $tot_points2->goals_scored - $tour_teamb_points['goals_scored'],
				'goals_scored_against' => $tot_points2->goals_scored_against - $tour_teamb_points['goals_scored_against'],
				'goals_differences' => (($tot_points2->goals_differences) - ($tour_teamb_points['goals_differences'])),
				);
				$res16 = $this->football_model->tour_book_update($data14);
				$delete_ctp2=$this->football_model->current_tourn_team1_points_delete($tour_teamb_points['ctp_id']);
				$data2 = array(
				'tour_id' => $this->input->post('tour_id'),
				'team_id' => $this->input->post('team_b'),
				'team_group' => $this->input->post('groups'),
				'match_no' => $this->input->post('match_number'),
				'played_games' => 1,
				'points' => $this->input->post('teamb_points'),
				'wins' => $teamb_wins,
				'loss' => $teamb_loss,
				'tie' => $teamb_tie,
				'goals_scored' => $this->input->post('teamb_goals_scored'),
				'goals_scored_against' => $this->input->post('teama_goals_scored'),
				'goals_differences' => $goals_diff_teamb,
				);
				$res3 = $this->football_model->save_current_tournament_points($data2);
				$tot_points2 = $this->football_model->tournament_tot_points_exixts_or_not($data2);
				if(empty($tot_points2)){
					$res6 = $this->football_model->add_tourn_match_points($data2);
				}else{
					$data4 = array(
					'id' => $tot_points2->id,
					'tour_id' => $this->input->post('tour_id'),
					'team_id' => $this->input->post('team_b'),
					'match_no' => $this->input->post('match_number'),
					'played_games' => $tot_points2->played_games + 1,
					'points' => $tot_points2->points + $this->input->post('teamb_points'),
					'wins' => $tot_points2->wins + $teamb_wins,
					'loss' => $tot_points2->loss + $teamb_loss,
					'tie' => $tot_points2->tie + $teamb_tie,
					'goals_scored' => $tot_points2->goals_scored + $this->input->post('teamb_goals_scored'),
					'goals_scored_against' => $tot_points2->goals_scored_against + $this->input->post('teama_goals_scored'),
					'goals_differences' => (($tot_points2->goals_differences) + ($goals_diff_teamb)),
					);
					$res1232 = $this->football_model->tour_book_update($data4);
				
			}

		}
		}
         $this->session->set_flashdata('suceessMessage', get_phrase('data_updated'));
        redirect("booking_tournament_list");
    }


    public function view_tournament_schedule(){
        $tournamentlist = $this->football_model->tournament_list();
        $tourn_match_id = $this->uri->segment(2);
        $groundlist = $this->football_model->ground_list();
        $getlist=$this->football_model->get_edit_tournament_schedule($tourn_match_id);
        $this->load->view('inc/admin_header');
        $this->load->view('inc/admin_sidebar');
        $this->load->view('tournament_schedule_view', array('data' => $getlist,'data1' => $tournamentlist,'data2' => $groundlist));
        $this->load->view('inc/admin_footer');
    }

    public function match_schedule_delete()
    {
        // $id =  $this->uri->segment(2);
        // $book_code =  $this->uri->segment(3);
        // $booking_code = 'SL-'.$book_code;
        $tourn_match_id =  $this->uri->segment(2);
        
        $getlist=$this->football_model->get_edit_tournament_schedule($tourn_match_id);
        //die(print_r($getlist));
        
		$team_id1 = $getlist[0]->team1;
		$team_id2 = $getlist[0]->team2;
		$tour_team1_points = $this->football_model->current_tourn_team1_points($getlist,$team_id1);
		$tour_team2_points = $this->football_model->current_tourn_team2_points($getlist,$team_id2);
		if(isset($tour_team2_points) && !empty($tour_team2_points)){
			$teama_data=array(
				"tour_id"=>$tour_team1_points['tour_id'],
				"team_id"=>$tour_team1_points['team_id'],
				"team_group"=>$tour_team1_points['team_group'],
			);
			$tot_points1 = $this->football_model->tournament_tot_points_exixts_or_not($teama_data);
			$data13 = array(
				'id' => $tot_points1->id,
				'tour_id'=> $tour_team1_points['tour_id'],
				'team_id'=> $tour_team1_points['team_id'],
				'match_no' => $tour_team1_points['match_no'],
				'played_games' => $tot_points1->played_games - 1,
				'points' => $tot_points1->points - $tour_team1_points['points'],
				'wins' => $tot_points1->wins - $tour_team1_points['wins'],
				'loss' => $tot_points1->loss - $tour_team1_points['loss'],
				'tie' => $tot_points1->tie - $tour_team1_points['tie'],
				'goals_scored' => $tot_points1->goals_scored - $tour_team1_points['goals_scored'],
				'goals_scored_against' => $tot_points1->goals_scored_against - $tour_team1_points['goals_scored_against'],
				'goals_differences' => (($tot_points1->goals_differences) - ($tour_team1_points['goals_differences'])),
				);
			$res15 = $this->football_model->tour_book_update($data13);
			$delete_ctp1=$this->football_model->current_tourn_team1_points_delete($tour_team1_points['ctp_id']);
		}
		if(isset($tour_team2_points) && !empty($tour_team2_points)){
			$teamb_data=array(
				"tour_id"=>$tour_team2_points['tour_id'],
				"team_id"=>$tour_team2_points['team_id'],
				"team_group"=>$tour_team2_points['team_group'],
			);
			$tot_points2 = $this->football_model->tournament_tot_points_exixts_or_not($teamb_data);
			$data14 = array(
				'id' => $tot_points2->id,
				'tour_id' => $tour_team2_points['tour_id'],
				'team_id' => $tour_team2_points['team_id'],
				'match_no' => $tour_team2_points['match_no'],
				'played_games' => $tot_points2->played_games - 1,
				'points' => $tot_points2->points - $tour_team2_points['points'],
				'wins' => $tot_points2->wins - $tour_team2_points['wins'],
				'loss' => $tot_points2->loss - $tour_team2_points['loss'],
				'tie' => $tot_points2->tie - $tour_team2_points['tie'],
				'goals_scored' => $tot_points2->goals_scored - $tour_team2_points['goals_scored'],
				'goals_scored_against' => $tot_points2->goals_scored_against - $tour_team2_points['goals_scored_against'],
				'goals_differences' => (($tot_points2->goals_differences) - ($tour_team2_points['goals_differences'])),
			);
			$res16 = $this->football_model->tour_book_update($data14);
			$delete_ctp2=$this->football_model->current_tourn_team1_points_delete($tour_team2_points['ctp_id']);
		}
        //$getprojectslist=$this->football_model->booking_delete($id);
        //$getprojectslist=$this->football_model->ground_payment_delete($booking_code);
        $getprojectslist=$this->football_model->match_schedule_delete($tourn_match_id);
        $this->session->set_flashdata('suceessMessage', get_phrase('data_deleted'));
        redirect('tournament_schedule/'.$getlist[0]->tour_id);
    }


    /* Coding Ends */
	
	
	/*02- Ground size and duration module start*/

    public function ground_size_duration_add(){
        if($this->session->userdata['user_role'] == 2 || $this->session->userdata['user_role'] == 3 || $this->session->userdata['user_role'] == 4) {
            $params= array(
                'ground_owner_id' => $this->session->userdata['user_id'],
            );
            $groundlist=$this->football_model->ground_list($params);
        }else{
            $groundlist=$this->football_model->ground_list();
        }
        $this->load->view('inc/admin_header');
        $this->load->view('ground_size_dur_add', array('data1' => $groundlist));
        $this->load->view('inc/admin_footer');
    }

    public function ground_size_duration_list(){
        if($this->session->userdata['user_role'] == 2 || $this->session->userdata['user_role'] == 3 || $this->session->userdata['user_role'] == 4) {
            $params= array(
                'ground_owner_id' => $this->session->userdata['user_id'],
            );
            $pointslist=$this->football_model->get_ground_size_dur_list($params);
        }else{
            $pointslist=$this->football_model->get_ground_size_dur_list();
        }
        $this->load->view('inc/admin_header');
        $this->load->view('inc/admin_sidebar');
        $this->load->view('ground_size_dur_list',array('data' =>$pointslist));
        $this->load->view('inc/admin_footer');
    }

    public function add_ground_size_dur(){
            if($this->input->post('size_number') == 0){
				$size = $this->input->post('size');
			}else{
				$size = $this->input->post('size').'(' . $this->input->post('size_number') . ')';
			}
			$after_disc_amount = ($this->input->post('ground_discount') / 100) * $this->input->post('ground_price');
			$after_disc_price = $this->input->post('ground_price') - $after_disc_amount;
            $data = array(
                'ground_id' => $this->input->post('ground_id'),
                'size' => $size,
                'slot' => $this->input->post('slot'),
                'ground_sq_ft' => $this->input->post('ground_sq_ft'),
                'ground_price' => $this->input->post('ground_price'),
                'ground_discount' => $this->input->post('ground_discount'),
                'after_discount_ground_price' => $after_disc_price,
                'upto_players' => $this->input->post('upto_players'),
            );
            $size_exists=$this->football_model->ground_size_num_validation($data);
			if($size_exists > 0){
				$this->session->set_flashdata('errorMessage', get_phrase('Please select another ground size'));
				redirect("ground_size_duration_list");

			}else{
				$res1232 = $this->football_model->ground_size_dur_add($data);
				$this->session->set_flashdata('suceessMessage', get_phrase('data_added'));
				redirect("ground_size_duration_list");
			}
    }

    public function edit_ground_size_dur(){
        $id = $this->uri->segment(2);
        $getlist1 = $this->football_model->ground_size_dur_edit($id);
        if($this->session->userdata['user_role'] == 2 || $this->session->userdata['user_role'] == 3 || $this->session->userdata['user_role'] == 4) {
            $params= array(
                'ground_owner_id' => $this->session->userdata['user_id'],
            );
            $groundlist=$this->football_model->ground_list($params);
        }else{
            $groundlist=$this->football_model->ground_list();
        }
        $this->load->view('inc/admin_header');
        $this->load->view('ground_size_dur_edit', array('data' => $getlist1,'data1' => $groundlist));
        $this->load->view('inc/admin_footer');
    }
    
    public function ground_size_validation(){
		if($this->input->post('size_number') == 0){
				$size = $this->input->post('size');
			}else{
				$size = $this->input->post('size').'(' . $this->input->post('size_number') . ')';
			}
            $data = array(
                'ground_id' => $this->input->post('ground_id'),
                'size' => $size,
            );
			$validation_data=$this->football_model->ground_size_num_validation($data);
			if(empty($validation_data)){
				$data = 'available';
			}else{
				$data = 'not_available';
			}
		echo json_encode($data);
	}

    public function update_ground_size_dur(){
        $id=$this->input->post('id');
        if($this->input->post('size_number') == 0){
			$size = $this->input->post('size');
		}else{
			$size = $this->input->post('size').'(' . $this->input->post('size_number') . ')';
		}
		$after_disc_amount = ($this->input->post('ground_discount') / 100) * $this->input->post('ground_price');
		$after_disc_price = $this->input->post('ground_price') - $after_disc_amount;
        $data = array(
            'ground_id' => $this->input->post('ground_id'),
            'size' => $size,
            'slot' => $this->input->post('slot'),
            'ground_sq_ft' => $this->input->post('ground_sq_ft'),
            'ground_price' => $this->input->post('ground_price'),
            'ground_discount' => $this->input->post('ground_discount'),
            'after_discount_ground_price' => $after_disc_price,
            'upto_players' => $this->input->post('upto_players'),
        );
        
			$res1232 = $this->football_model->ground_size_dur_update($id,$data);
			$this->session->set_flashdata('suceessMessage', get_phrase('data_updated'));
			redirect("ground_size_duration_list");
		
    }

    public function ground_size_dur_delete()
    {
        $id =  $this->uri->segment(2);
        $data1 = array('del_status' => '1' );
        $getprojectslist=$this->football_model->delete_ground_size_dur($id,$data1);
        $this->session->set_flashdata('suceessMessage', 'Successfully Deleted');
        redirect("ground_size_duration_list");
    }

    /*02- Ground size and duration module end*/
   
    //*********************** BOOKINGS TOURNAMENT***************************//

    public function booking_tournament_list()
    {
        $teamlist=$this->football_model->team_list();
        if($this->session->userdata['user_role'] == 2 || $this->session->userdata['user_role'] == 3 || $this->session->userdata['user_role'] == 4) {
            $params= array(
                'ground_owner_id' => $this->session->userdata['user_id'],
            );
       
	$bookinglist=$this->football_model->booking_tournament_list($params);
        }else{
            $bookinglist=$this->football_model->booking_tournament_list();
        }
        
        
        //$ground_owner_id = $this->session->userdata['user_id'];
        $booked_team=$this->football_model->booked_team();

        $this->load->view('inc/admin_header');
        $this->load->view('inc/admin_sidebar');
        $this->load->view('booking_tournament_list',array('data' =>$bookinglist,'data1'=>$teamlist,'booked_team'=> $booked_team));
        $this->load->view('inc/admin_footer');
    }



    public function tournament_schedule(){
        $tourn_schedule = $this->uri->segment(2);
        $tournamentlist = $this->football_model->tournament_list_view($tourn_schedule);
        $getlist=$this->football_model->tournament_schedule($tourn_schedule);
        //die(print_r($getlist));
        $this->load->view('inc/admin_header');
        $this->load->view('inc/admin_sidebar');
        $this->load->view('tournament_schedule', array('data' => $getlist,'data1' => $tournamentlist));
        //print_r($tournamentlist);
        // exit;
        $this->load->view('inc/admin_footer');
    }



    public function tour_book_update(){
        $data = array(
        	'sno' => $this->input->post('sno'),
            'tour_id' => $this->input->post('tour_id'),
            'id' => $this->input->post('res_point_id'),
            'played_games' => $this->input->post('played_games'),
            'team_group' => $this->input->post('team_group'),
            'position' => $this->input->post('position'),
            'wins' => $this->input->post('wins'),
            'loss' => $this->input->post('loss'),
            'tie' => $this->input->post('tie'),
            'points' => $this->input->post('points'),
            'goals_scored' => $this->input->post('goals_scored'),
            'goals_scored_against' => $this->input->post('goals_scored_against'),
            'goals_differences' => $this->input->post('goals_differences'),
        );

        $res1232 = $this->football_model->tour_book_update($data);
         $this->session->set_flashdata('suceessMessage', get_phrase('data_updated'));
        redirect('tournament_points/'.$data['tour_id']);
    }

    public function tour_booked_update(){
        $data = array(
            'tour_id' => $this->input->post('tour_id'),
            'team_id' => $this->input->post('team_id'),
        );
        $res1 = $this->football_model->get_team_register_tour_id($data);
            if(empty($res1)){
                $res2 = $this->football_model->save_tourn_register_teams($data);
                if($res2 > 0){
                    $res3 = $this->football_model->get_all_tournament_list_by_tour_id($data);
                    $team_count = 1;
                    $tourn_count = $res3['tour_cmp_limit'];
                    $tour_cmpl_count = $tourn_count + $team_count;
                    $data1 = array(
                        'tour_cmp_limit' => $tour_cmpl_count
                    );
                    $res1232 = $this->football_model->tour_booked_update($data,$data1);
					 $this->session->set_flashdata('suceessMessage', get_phrase('data_added'));
                   // $this->session->set_flashdata('success', 'Successfully Registered');
                    redirect('booking_tournament_list');
                }else{
					 $this->session->set_flashdata('errorMessage', get_phrase('Error_Occured_While_Register_team'));
                   // $this->session->set_flashdata('err', 'Error Occured While Register team');
                    redirect('booking_tournament_list');
                }
            }else{
				 $this->session->set_flashdata('errorMessage', get_phrase('Already_Team_Exists'));
                redirect('booking_tournament_list');
            }


    }

    public function tournament_points(){
        $id = $this->uri->segment(2);
        $tournamentlist = $this->football_model->tournament_list_view($id);
        $getlist=$this->football_model->tournament_points($id);
        //die(print_r($getlist));
        $this->load->view('inc/admin_header');
        $this->load->view('inc/admin_sidebar');
        $this->load->view('tournament_points', array('data' => $getlist,'data2' => $tournamentlist));
        // print_r($getlist);
        // exit;
        $this->load->view('inc/admin_footer');
    }

  

    //****************************BOOKING TOURNAMENT END **************//
    
    //****************************Report Starts*************************//
    public function report_list()
	{
		
		$this->load->view('inc/admin_header');
		$this->load->view('inc/admin_sidebar');
		
		
		if($this->session->userdata['user_role'] == 2 || $this->session->userdata['user_role'] == 3 || $this->session->userdata['user_role'] == 4) {
            $params= array(
                'ground_owner_id' => $this->session->userdata['user_id'],
            );
            $groundlist=$this->football_model->ground_list($params);
        }else{
            $groundlist=$this->football_model->ground_list();
        }
		
		$dataval = array(
            'ground_id' => $this->input->post('ground_id'),
            'from_date' => $this->input->post('from_date'),
            'to_date' => $this->input->post('to_date'),
        );
		
		$bookinglist=$this->football_model->report_list_all($dataval);
	
		
		$this->load->view('reports_list',array('data' =>$bookinglist, 'data1' => $groundlist, 'data2' => $dataval));
		$this->load->view('inc/admin_footer');
	}
    //****************************Report Ends*************************//
    
     //************Tournament Bracket Starts****************************//
    public function tournament_bracket(){
        $id = $this->uri->segment(2);
        $tournamentlist = $this->football_model->tournament_list_view($id);
        $getlist=$this->football_model->tournament_schedule_bracket($id);
        //die(print_r($getlist));
        $this->load->view('inc/admin_header');
        $this->load->view('inc/admin_sidebar');
        $this->load->view('tournament_bracket',array('data' => $getlist,'data2' => $tournamentlist));
        $this->load->view('inc/admin_footer');
    }

    //************Tournament Bracket Ends****************************//
	
	//************Language Settings Starts****************************//
   public function general_settings(){
       $user_id = $this->session->userdata['user_id'];
       $getlist = $this->football_model->edit_user($user_id);
       $getlanguage = $this->football_model->get_language_fields();
       //die(print_r($getlanguage));
       $this->load->view('inc/admin_header');
       $this->load->view('inc/admin_sidebar');
       $this->load->view('general_settings', array('data' => $getlist,'data1' => $getlanguage));
       $this->load->view('inc/admin_footer');
   }

   public function profile_setting_update(){
       $data = array(
           'user_id' => $this->input->post('user_id'),
           'user_name' => $this->input->post('user_name'),
           'user_email' => $this->input->post('user_email'),
           'user_phone' => $this->input->post('user_phone'),
           );
        $res1232 = $this->football_model->update_general_set_profile($data);
        if($res1232 > 0){
			$this->session->set_flashdata('suceessMessage', get_phrase('data_updated'));
            redirect("general_settings");
        }else{
			 $this->session->set_flashdata('errorMessage', get_phrase('update_failed'));
            redirect("general_settings");
        }

   }

   public function language_change(){
       $data = array(
           'user_id' => $this->input->post('user_id'),
           'language' => $this->input->post('language'),
           'text_align' => $this->input->post('text_align')
       );
       $res1232 = $this->football_model->update_general_language($data);
       if($res1232 > 0){
           $this->session->set_flashdata('suceessMessage', get_phrase('data_updated'));
           redirect("general_settings");
       }else{
           $this->session->set_flashdata('errorMessage', get_phrase('update_failed'));
           redirect("general_settings");
       }
   }


	public function language_settings()
	{
		$this->load->view('inc/admin_header');		
		$this->load->view('manage_language');
		$this->load->view('inc/admin_footer');
	}
	
	
	public function add_phrase()
	{	
		$data = array(
		'phrase' => $this->input->post('phrase_name')
		); 
		$res1232=$this->football_model->add_phrase_name($data);
		 $this->session->set_flashdata('suceessMessage', get_phrase('data_added'));
		redirect("language_settings");	
	}
	
	
	public function get_phrase_language(){

        $data = array(
            'edit_language' => $this->input->post('language')
        );
        $getlist = $this->football_model->get_phrase_language();

        $this->load->view('language_phrase', array('data1' => $getlist,'data2' => $data));
    }
	
	
	public function edit_phrase_names()
	{	
		$count = count($this->input->post('phrase_id'));  
		$lan = $this->input->post('language');  
		for ($i=0; $i<$count ; $i++) 	
		{
			if($lan == 'english'){
				$data = array(
				'phrase_id' => $this->input->post('phrase_id')[$i],
				'english' => $this->input->post('phrase')[$i]
				);
			}else{
				$data = array(
				'phrase_id' => $this->input->post('phrase_id')[$i],
				'arabic' => $this->input->post('phrase')[$i]
				); 
			}			
			$res1232=$this->football_model->edit_phrase_name($data);
		}
		
		 $this->session->set_flashdata('suceessMessage', get_phrase('data_updated'));
		redirect("language_settings");	
	}

    //************Language Settings Ends****************************//
    //************Push Notification Settings starts****************************//
	 
	 public function push_notification_settings()
	{
		$this->load->view('inc/admin_header');		
		$this->load->view('push_notification_settings');
		$this->load->view('inc/admin_footer');
	}
	
	public function add_input_field_smscontent()
	{	
		$data = array(
		'sms_content_field_name' => $this->input->post('sms_content_field_name')
		); 
		$res1232=$this->football_model->add_smscontent_name($data);
		 $this->session->set_flashdata('suceessMessage', get_phrase('data_added'));
		redirect("push_notification_settings");	
	}
	
	
	public function get_sms_content_field(){

        $data = array(
            'edit_language' => $this->input->post('language')
        );
        $getlist = $this->football_model->get_sms_content_language();

        $this->load->view('sms_content_field', array('data1' => $getlist,'data2' => $data));
    }
	
	
	public function edit_input_field_smscontent()
	{	
		$count = count($this->input->post('sms_content_field_id'));  
		$lan = $this->input->post('language');  
		for ($i=0; $i<$count ; $i++) 	
		{
			if($lan == 'english'){
				$data = array(
				'sms_content_field_id' => $this->input->post('sms_content_field_id')[$i],
				'english' => $this->input->post('sms_content_field_content')[$i]
				);
			}else{
				$data = array(
				'sms_content_field_id' => $this->input->post('sms_content_field_id')[$i],
				'arabic' => $this->input->post('sms_content_field_content')[$i]
				); 
			}			
			$res1232=$this->football_model->edit_smscontent_name($data);
		}
		
		 $this->session->set_flashdata('suceessMessage', get_phrase('data_updated'));
		redirect("push_notification_settings");	
	}
	
	
	//************Push Notification Settings ends****************************//
	
	  public function online_booking_available()
    {
        $id =  $this->uri->segment(2);
        $data1 = array('online_booking' => '1', 'ground_availablity' => 'unavailable' );
        $getprojectslist=$this->football_model->ground_online_booking($id,$data1);
        redirect("ground_list");
    }

    public function online_booking_not_available()
    {
        $id =  $this->uri->segment(2);
        $data1 = array('online_booking' => '0', 'ground_availablity' => 'available' );
        $getprojectslist=$this->football_model->ground_online_booking($id,$data1);
        redirect("ground_list");
    }
    
    
    public function notifications()
	{
		$this->load->view('inc/admin_header');		
		$this->load->view('notifications');
		$this->load->view('inc/admin_footer');
	}
    
    
     public function send_multicast_notifications()
    {
        $this->response = (Object) array(
            "status" => 500,
            "msg" => "error"
        );
       
        $title = $this->input->post('title');
        $body = $this->input->post('body_message');			
        $this->load->library(['FirebaseNotification','Firebase']);
        $this->firebasenotification->setTitle($title);
        $this->firebasenotification->setMessageBody($body);
        $resp = $this->firebase->sendNotification($this->football_model->get_active_users_token(), $this->firebasenotification);		       
		if ($resp) {
			 $this->session->set_flashdata('suceessMessage', get_phrase('notification_sent'));
			redirect("notifications");	
			echo $resp;
           exit;
        } else {
			$this->session->set_flashdata('errorMessage', get_phrase('Error Occured while sending push notification'));
			redirect("notifications");	
            echo $resp;
            exit;
        }     
    }
    
    
    
	//************SMS Settings starts****************************//
	 
	 public function sms_settings()
	{
		
		 $getlist = $this->football_model->get_sms_settings();

		
		$this->load->view('inc/admin_header');	
		
		$this->load->view('sms_settings', array('data1' => $getlist));
		$this->load->view('inc/admin_footer');
	}
	

	
	public function sms_setting_update()
	{	  
		$data = array(
			'api_key' => $this->input->post('api_key'),
			'sender_id' => $this->input->post('sender_id'),
			'text_type' => $this->input->post('text_type'),
			'country_mobile_code' => $this->input->post('country_mobile_code')
			); 
		$res1232=$this->football_model->edit_sms_setting($data);
		 $this->session->set_flashdata('suceessMessage', get_phrase('data_updated'));
		redirect("sms_settings");	
	} 
	
	
	//************SMS Settings ends****************************//
	
	//************Payment Gateway Settings starts****************************//

	public function payment_gateway_settings()
	{		
		$getlist = $this->football_model->get_payment_gateway_settings();
		$this->load->view('inc/admin_header');
		$this->load->view('payment_gateway_settings', array('data1' => $getlist));
		$this->load->view('inc/admin_footer');
	}
	
	
	public function payment_gateway_setting_update()
	{	  
		$data = array(
			'working_key' => $this->input->post('working_key'),
			'access_code' => $this->input->post('access_code'),
			'merchant_id' => $this->input->post('merchant_id')
			); 
		$res1232=$this->football_model->edit_payment_gateway_setting($data);
		 $this->session->set_flashdata('suceessMessage', get_phrase('data_updated'));
		redirect("payment_gateway_settings");	
	}
	
	
	//************SMTP Settings starts****************************//

	public function smtp_settings()
	{		
		$getlist = $this->football_model->get_smtp_settings();
		$this->load->view('inc/admin_header');
		$this->load->view('smtp_settings', array('data1' => $getlist));
		$this->load->view('inc/admin_footer');
	}
	
	
	public function smtp_setting_update()
	{	  
		$data = array(
			'smtp_host' => $this->input->post('smtp_host'),
			'smtp_username' => $this->input->post('smtp_username'),
			'smtp_password' => $this->input->post('smtp_password'),
			'smtp_port' => $this->input->post('smtp_port'),
			'smtp_from' => $this->input->post('smtp_from'),
			'smtp_from_email' => $this->input->post('smtp_from_email')
			); 
		$res1232=$this->football_model->edit_smtp_setting($data);
		 $this->session->set_flashdata('suceessMessage', get_phrase('data_updated'));
		redirect("smtp_settings");	
	}
	
	
	//************LOGO Settings starts****************************//

	public function logo_settings()
	{		
		$getlist = $this->football_model->get_logo_settings();
		$this->load->view('inc/admin_header');
		$this->load->view('logo_settings', array('data1' => $getlist));
		$this->load->view('inc/admin_footer');
	}
	
	
	public function logo_setting_update()
	{	  
	
			if (empty($_FILES['sl_logo']['name'])) {
				$sl_logo = $this->input->post('logo_img');
			}else{
				$RandomteacherNumber = mt_rand(1, 9999999);

				// load library only once
				$this->load->library('upload');
				// image configuration
				$image_config['upload_path'] = 'assets/upload';
				$image_config['allowed_types'] = 'gif|jpg|png|bmp';
				$image_config['max_size'] = '8200';
				$image_config['max_width'] = '1111024';
				$image_config['max_height'] = '111768';
				$image_config['file_name'] = $RandomteacherNumber;

				$this->upload->initialize($image_config);


				if (!$this->upload->do_upload('sl_logo')) {
					//$sl_logo = "";
				} else {
					$document_data = $this->upload->data();
					$sl_logo = $document_data['file_name'];
				}
			}
		$data = array(
			'logo_image' => $sl_logo
			); 
		$res1232=$this->football_model->edit_logo_setting($data);
		 $this->session->set_flashdata('suceessMessage', get_phrase('data_updated'));
		redirect("logo_settings");	
	}
	
	
	// payment gateway
	
	public function open_ccavenueform()
    {
        $this->load->view("ccavenueform_view");   		
    }
	 
	 
	public function sendRequest(){
		$this->load->view("request_view");
	}
   
   public function getResponse() {
		$this->load->view("response_view");
	}

	public function tournament_register_teams(){
		$tourn_id = $this->uri->segment(2);
        $tournamentlist = $this->football_model->tournament_list_view($tourn_id);
        $getlist=$this->football_model->tournament_register_teams($tourn_id);
        //die(print_r($getlist));
        $this->load->view('inc/admin_header');
        $this->load->view('inc/admin_sidebar');
        $this->load->view('tournament_register_teams', array('data' => $getlist,'data1' => $tournamentlist));
        //print_r($tournamentlist);
        // exit;
        $this->load->view('inc/admin_footer');
	}
	
public function team_unregister(){
        $data = array(
            'id' =>  $this->uri->segment(2),
            'tour_id' =>  $this->uri->segment(3),
		    'team_id' =>  $this->uri->segment(4)
		);
		$res4 = $this->football_model->get_schedule_team($data['tour_id'],$data['team_id']);
		if($res4 > 0){
			$this->session->set_flashdata('errorMessage', get_phrase("First remove the scheduled match.After Unregister the team"));
		}else{
			$res3 = $this->football_model->get_all_tournament_list_by_tour_id($data);
                    $team_count = 1;
                    $tourn_count = $res3['tour_cmp_limit'];
                    $tour_cmpl_count = $tourn_count - $team_count;
                    $data1 = array(
                        'tour_cmp_limit' => $tour_cmpl_count
                    );
                    
                    $res1232 = $this->football_model->tour_booked_update($data,$data1);	
		//$data1 = array('status' => '2' );    
		$getprojectslist=$this->football_model->unregister_team($data['id']);
		$this->session->set_flashdata('suceessMessage', get_phrase('data_deleted'));
		}  
		redirect("booking_tournament_list");
}
   /*
Bulk Bookings module Starts
*/
		public function bulk_booking()
	{
		if($this->session->userdata['user_role'] == 2 || $this->session->userdata['user_role'] == 3 || $this->session->userdata['user_role'] == 4) {
            $params= array(
                'ground_owner_id' => $this->session->userdata['user_id'],
            );
            $bulk_bookiong_list = $this->football_model->bulk_booking_list($params);
        }else{
            $bulk_bookiong_list = $this->football_model->bulk_booking_list();
        }
		$this->load->view('inc/admin_header');	
		$this->load->view('inc/admin_sidebar');		
		$this->load->view('bulk_bookings/booking_list',array('data' => $bulk_bookiong_list));
		$this->load->view('inc/admin_footer');
	}
	
	public function bulk_booking_add(){
		if($this->session->userdata['user_role'] == 2 || $this->session->userdata['user_role'] == 3 || $this->session->userdata['user_role'] == 4) {
            $params= array(
                'ground_owner_id' => $this->session->userdata['user_id'],
            );
            $groundlist=$this->football_model->ground_list($params);
        }else{
            $groundlist=$this->football_model->ground_list();
        }
        $playerlist = $this->football_model->players_list();
        $this->load->view('inc/admin_header');
		$this->load->view('inc/admin_sidebar');		
        $this->load->view('bulk_bookings/add_booking', array('data1' => $groundlist, 'data2' => $playerlist));
        $this->load->view('inc/admin_footer');
    }
	
	
    public function add_bulk_booking(){
        $phonenumbers = array();
        $emailids = array();
        $code_details = $this->football_model->get_bulk_booking_code();

        if($code_details['book_code'] == 0){
            $bookid = 1000;
        }else{
            $bookid = $code_details['book_code']  + 1;
        }

        $book_id = 'SLB-'.$bookid;

        $player_id = $this->input->post('player_id');
        $ground_id = $this->input->post('ground_id');
        /* $player_details = $this->football_model->player_view($player_id);

        foreach ($player_details as $store) {
            $teamid = $store->team_id;
            $emailids[] = $store->player_email;
        } */
		
		
         $phonenumbers[] = $this->input->post('player_number');


        $ground_details = $this->football_model->edit_ground($ground_id);
        foreach ($ground_details as $store) {
			$ground_location = $store->ground_location;
            $groundcity = $store->ground_city;
            $ground_owner_id = $store->ground_owner_id;
            //$sl_commission = $store->ground_sl_commission;
        }
        $user_details = $this->football_model->get_user_details($ground_owner_id);
        foreach ($user_details as $store) {
            $phonenumbers[] = $store->user_phone;
            $emailids[] = $store->user_email;
        }

        $admin_id = 1;
        $admin_details = $this->football_model->get_user_details($admin_id);
        foreach ($admin_details as $store) {
            $phonenumbers[] = $store->user_phone;
            $emailids[] = $store->user_email;
        }


        $timearray = $this->input->post('time_slot');
        $booking_time =  implode(",",$timearray);

		
		$booking_days =  implode(",",$this->input->post('days'));
        $params = array(
            "booking_code" => $book_id,
            "book_code" => $bookid,
            "booking_ground" =>  $this->input->post('ground_id'),
            "booking_groundcity" => $groundcity,
            "player_name" =>  $this->input->post('player_id'),
            "booking_player_number" =>  $this->input->post('player_number'),
            "booking_from" =>  $this->input->post('booking_date'),
			"booking_to" =>  $this->input->post('to_date'),
            "booking_ground_size" =>  $this->input->post('ground_size'),
            "booking_days" =>  $booking_days,
            "booking_time" =>  $booking_time,
            //"booking_paymenttype" =>  $this->input->post('payment_type'),
            //"booking_type" =>  $this->input->post('booking_type'),
            //"booking_amount" =>  $this->input->post('booking_amount'),
            //"booking_approval" => '0',
            //"booking_status" => '0',
            //"payment_status" => '2',
            "created_at" => date('Y-m-d H:i:s'),
        );
        $bking_id = $this->football_model->save_bulk_booking_details($params);

       
		 $this->session->set_flashdata('suceessMessage', get_phrase('data_added'));
        redirect("bulk_booking");
    }
	
	public function bulk_booking_view()
	{
		$bulk_booking_id = $this->uri->segment(2);
		$bookingapplist=$this->football_model->bulk_booking_ground_details();
		$playerview=$this->football_model->bulk_booking_view($bulk_booking_id);
		$this->load->view('inc/admin_header');	
		$this->load->view('inc/admin_sidebar');		
		$this->load->view('bulk_bookings/booking_view',array('data12' => $playerview,'data13' => $bookingapplist));
		$this->load->view('inc/admin_footer');
	}
	
	public function edit_bulk_booking(){

        $bulk_booking_id = $this->uri->segment(2);

        $playerview=$this->football_model->bulk_booking_view($bulk_booking_id);
        if($this->session->userdata['user_role'] == 2 || $this->session->userdata['user_role'] == 3 || $this->session->userdata['user_role'] == 4) {
            $params= array(
                'ground_owner_id' => $this->session->userdata['user_id'],
            );
            $groundlist=$this->football_model->ground_list($params);
        }else{
            $groundlist=$this->football_model->ground_list();
        }

        $this->load->view('inc/admin_header');
		$this->load->view('inc/admin_sidebar');
        $this->load->view('bulk_bookings/edit_booking', array('data' => $playerview,'data1' => $groundlist));
        $this->load->view('inc/admin_footer');
    }

   public function update_bulk_booking(){
        $ground_id = $this->input->post('ground_id');
        /* $player_details = $this->football_model->player_view($player_id);

        foreach ($player_details as $store) {
            $teamid = $store->team_id;
        } */


        $ground_details = $this->football_model->edit_ground($ground_id);
        foreach ($ground_details as $store) {
            $groundcity = $store->ground_city;
            $ground_owner_id = $store->ground_owner_id;
            $sl_commission = $store->ground_sl_commission;
        }

        $timearray = $this->input->post('time_slot');
        $booking_time =  implode(",",$timearray);

		$booking_days =  implode(",",$this->input->post('days'));
        $params = array(
            "booking_ground" =>  $this->input->post('ground_id'),
            "booking_groundcity" => $groundcity,
            "player_name" =>  $this->input->post('player_name'),
			"booking_player_number" =>  $this->input->post('player_number'),
            "booking_from" =>  $this->input->post('booking_date'),
			"booking_to" =>  $this->input->post('to_date'),
            "booking_ground_size" =>  $this->input->post('ground_size'),
			"booking_days" =>  $booking_days,
            "booking_time" =>  $booking_time,
        );
        //die(print_r($params));
        $result = $this->football_model->update_bulk_booking_details($params);
		$this->session->set_flashdata('suceessMessage', get_phrase('data_updated'));
        redirect("bulk_booking");
    }
	
    public function get_bulk_booking_hours(){

        $data = array(
            'dayOfWeek' => $this->input->post('dayOfWeek'),
            'ground_id' => $this->input->post('ground_id'),
            'dateval' => $this->input->post('dateval'),
            'to_date' => $this->input->post('to_date'),
            'day' => $this->input->post('day'),
            'booking_time_slot' => $this->input->post('booking_time_slot'),
            'ground_size' => $this->input->post('ground_size'),
            'booking_type' => $this->input->post('booking_type'),
            'rid' => $this->input->post('rid')
        );
        $gethourslist=$this->football_model->time_slot_hours($data);
        $getbulkbooking_hours=$this->football_model->bulk_booking_time_slot_hours($data);
		//die(print_r($getbulkbooking_hours));
        $getlist = $this->football_model->ground_open_close_booking_hours($data);
        
		$this->load->view('bulk_bookings/bulk_booking_hours_slots', array('data1' => $getlist,'data2' => $data,'data3' => $gethourslist,'data4' => $getbulkbooking_hours));
    }
	public function bulk_booking_delete()
    {
        $id =  $this->uri->segment(2);
        $getprojectslist=$this->football_model->bulk_booking_delete($id);
        $this->session->set_flashdata('suceessMessage', get_phrase('data_deleted'));
        redirect("bulk_booking");
    }
/*
Bulk Bookings module Ends
*/
/*
Version Starts
*/
	public function version()
	{
       $android = 'android';
       $ios = 'ios';
       $android_version = $this->football_model->get_android_version($android);
       $ios_version = $this->football_model->get_ios_version($ios);
       //die(print_r($getlanguage));
       $this->load->view('inc/admin_header');
       $this->load->view('inc/admin_sidebar');
       $this->load->view('version', array('data' => $android_version,'data1' => $ios_version));
       $this->load->view('inc/admin_footer');
   }
   
   public function android_version_update(){
       $data = array(
           'id' => $this->input->post('id'),
           'version_code' => $this->input->post('version_code'),
		   'version_request' => $this->input->post('version_request'),
           'version_force' => $this->input->post('version_force'),
       );
        $res1232 = $this->football_model->update_version_feature($data);
        if($res1232 > 0){
			$this->session->set_flashdata('suceessMessage', get_phrase('data_updated'));
            redirect("version");
        }else{
			 $this->session->set_flashdata('errorMessage', get_phrase('update_failed'));
            redirect("version");
        }

   }

   public function ios_version_update(){
       $data = array(
           'id' => $this->input->post('id'),
           'version_code' => $this->input->post('version_code'),
           'version_request' => $this->input->post('version_request'),
           'version_force' => $this->input->post('version_force'),
       );
       $res1232 = $this->football_model->update_version_feature($data);
       if($res1232 > 0){
           $this->session->set_flashdata('suceessMessage', get_phrase('data_updated'));
           redirect("version");
       }else{
           $this->session->set_flashdata('errorMessage', get_phrase('update_failed'));
           redirect("version");
       }
   }
/*
Version Ends
*/
/*
Academy Starts
*/
	public function academy_list()
    {
        if($this->session->userdata['user_role'] == 3 || $this->session->userdata['user_role'] == 4 || $this->session->userdata['user_role'] == 2) {
            $params= array(
                'academy_owner_id' => $this->session->userdata['user_id'],
            );
            $data['academy_list']=$this->football_model->academy_list($params);
        }else{
            $data['academy_list']=$this->football_model->academy_list();
        }

        $this->load->view('inc/admin_header');
        $this->load->view('inc/admin_sidebar');
        $this->load->view('academic/academy_list',$data);
        $this->load->view('inc/admin_footer');
    }
    
	public function academy_add()
	{
        $data['academy_owners']=$this->football_model->academy_owners();
        $data['coaching_classes']=$this->football_model->get_all_coaching_classes();
		$this->load->view('inc/admin_header');	
		$this->load->view('inc/admin_sidebar');		
		$this->load->view('academic/academy_add',$data);
		$this->load->view('inc/admin_footer');
	}
	
	public function add_academy()
	{
		$error=array();
		$imagelist=array();
		$extension=array("jpeg","jpg","png","gif");
		foreach($_FILES["academy_images"]["tmp_name"] as $key=>$tmp_name)
		{
			$file_name=$_FILES["academy_images"]["name"][$key];
			$file_tmp=$_FILES["academy_images"]["tmp_name"][$key];
			$ext=pathinfo($file_name,PATHINFO_EXTENSION);
			if(in_array($ext,$extension))
			{
				//$dt = date("YmdHis", time());
				$random = rand(100000,999999);
				$fnm = $file_name;
				$string = strtolower($fnm);
				$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
				$string = preg_replace("/[\s-]+/", "", $string);
				$string = preg_replace("/[\s_]/", "_", $string);
				$ok = substr("$string", 0, -3);
				$fnl = "$random$ok";
				$filename=basename($file_name,$ext);
				$newFileName=$fnl.".jpg";
				
				if (move_uploaded_file($file_tmp=$_FILES["academy_images"]["tmp_name"][$key],"assets/upload/academy/".$newFileName)) {
					echo "Uploaded";
				} else {
				   echo "File was not uploaded";
				}
				$imagelist[] =$newFileName;

			 }
			else
			{
				array_push($error,"$file_name, ");
			} 
		}
		 $imagelistaray = implode(',', $imagelist);
		   $coaching[] = $this->input->post('coaching_classes');
		   if (empty($coaching)) {
				$coaching_classes = "";
			}else{
				$coaching_classes = implode(',', $this->input->post('coaching_classes'));
			}
			if ($this->session->userdata['user_role'] == 3 || $this->session->userdata['user_role'] == 4 || $this->session->userdata['user_role'] == 2) {
				$data = array(
					'academy_owner_id' => $this->session->userdata['user_id'],
					'academy_name' => $this->input->post('academy_name'),
					'academy_email' => $this->input->post('academy_email'),
					'academy_location' => $this->input->post('academy_location'),
					'academy_latitude' => $this->input->post('academy_lat'),
					'academy_longitude' => $this->input->post('academy_long'),
					'academy_city' => $this->input->post('academy_city'),
					'academy_availability' => $this->input->post('academy_availability'),
					'academy_contact_number' => $this->input->post('academy_contact_number'),
					'academy_description' => $this->input->post('academy_description'),
					'sl_commission' => $this->input->post('sl_commission'),
					'coaching_classes_id' => $coaching_classes,
					'academy_images' => $imagelistaray,
					'free_transpotation' => $this->input->post('free_transpotation'),
					'from_date' => $this->input->post('from_date'),
					'to_date' => $this->input->post('to_date'),
					'start_time' => $this->input->post('start_time'),
					'end_time' => $this->input->post('end_time'),
					'starting_age' => $this->input->post('starting_age'),
					'ending_age' => $this->input->post('ending_age'),
					'created_at' => date('Y-m-d'),
					);

				$academy_id = $this->football_model->save_academy($data);
			} else {
				$data = array(
					'academy_owner_id' => $this->input->post('academy_owner_id'),
					'academy_name' => $this->input->post('academy_name'),
					'academy_email' => $this->input->post('academy_email'),
					'academy_location' => $this->input->post('academy_location'),
					'academy_latitude' => $this->input->post('academy_lat'),
					'academy_longitude' => $this->input->post('academy_long'),
					'academy_city' => $this->input->post('academy_city'),
					'academy_availability' => $this->input->post('academy_availability'),
					'academy_contact_number' => $this->input->post('academy_contact_number'),
					'academy_description' => $this->input->post('academy_description'),
					'sl_commission' => $this->input->post('sl_commission'),
					'coaching_classes_id' => $coaching_classes,
					'academy_images' => $imagelistaray,
					'free_transpotation' => $this->input->post('free_transpotation'),
					'from_date' => $this->input->post('from_date'),
					'to_date' => $this->input->post('to_date'),
					'start_time' => $this->input->post('start_time'),
					'end_time' => $this->input->post('end_time'),
					'starting_age' => $this->input->post('starting_age'),
					'ending_age' => $this->input->post('ending_age'),
					'created_at' => date('Y-m-d'),
					);
				$academy_id = $this->football_model->save_academy($data);
			}
		$this->session->set_flashdata('suceessMessage', get_phrase('data_added'));
		redirect("academy_list");
	}
	
	public function edit_academy() {
       
		$params = array(
		 'academy_id' => $this->uri->segment(2)
		);
        $data['academy'] = $this->football_model->get_academy_list($params);
        $data['academy_owners']=$this->football_model->academy_owners();
        $data['coaching_classes']=$this->football_model->get_all_coaching_classes();
        //die(print_r($academy));
        $this->load->view('inc/admin_header');
        $this->load->view('inc/admin_sidebar');
        $this->load->view('academic/academy_edit',$data); 
        $this->load->view('inc/admin_footer');
    }
    
	public function academy_update(){
		$grdid = $this->input->post('academy_id');
        if (1 != 1) {
            $data['imageError'] = $this->upload->display_errors();
            echo 'Please try again';
        } else {
		$error=array();
		$imglist=array();
		$extension=array("jpeg","jpg","png","gif");
		foreach($_FILES["academy_images"]["tmp_name"] as $key=>$tmp_name)
		{
			$file_name=$_FILES["academy_images"]["name"][$key];
			$file_tmp=$_FILES["academy_images"]["tmp_name"][$key];
			$ext=pathinfo($file_name,PATHINFO_EXTENSION);
			if(in_array($ext,$extension))
			{
				//$dt = date("YmdHis", time());
				$random = rand(100000,999999);
				$fnm = $file_name;
				$string = strtolower($fnm);
				$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
				$string = preg_replace("/[\s-]+/", "", $string);
				$string = preg_replace("/[\s_]/", "_", $string);
				$ok = substr("$string", 0, -3);
				$fnl = "$random$ok";
				$filename=basename($file_name,$ext);
				$newFileName=$fnl.".jpg";
				
				if (move_uploaded_file($file_tmp=$_FILES["academy_images"]["tmp_name"][$key],"assets/upload/academy/".$newFileName)) {
					echo "Uploaded";
				} else {
				   echo "File was not uploaded";
				}
				$imglist[] =$newFileName;

			 }
			else
			{
				array_push($error,"$file_name, ");
			} 
		}
		 //$imagelistaray = implode(',', $imglist);
			$grdpicture = $this->football_model->get_academy_list($grdid);
			//foreach ($grdpicture as $store) {
				$grgimage = $grdpicture['academy_images'];
			//}
			$dbimg = explode(",",$grgimage);


			//$imglist[] = $_FILES['ground_picture']['name'];

			$totalimg = array_merge($dbimg, $imglist);

			$imagelist = implode(',', $totalimg);

			$q_data = $this->football_model->get_academy_list($this->input->post('academy_id'));
			$datanew = json_decode(json_encode($q_data), true);

			// if (empty($ground_picture)) {
			if($_FILES["academy_images"]["error"] == 4) {
				//die('ji');
				$imagelist = $datanew['academy_images'];
			}

            // $schltpt = $this->input->post('staff_transport');
            $coaching[] = $this->input->post('coaching_classes');
			if (empty($coaching)) {
				$coaching_classes = "";
			}else{
				$coaching_classes = implode(',', $this->input->post('coaching_classes'));
			}
			if ($this->session->userdata['user_role'] == 3 || $this->session->userdata['user_role'] == 4 || $this->session->userdata['user_role'] == 2) {
				$data = array(
					'academy_id' => $this->input->post('academy_id'),
					'academy_owner_id' => $this->session->userdata['user_id'],
					'academy_name' => $this->input->post('academy_name'),
					'academy_email' => $this->input->post('academy_email'),
					'academy_location' => $this->input->post('academy_location'),
					'academy_latitude' => $this->input->post('academy_lat'),
					'academy_longitude' => $this->input->post('academy_long'),
					'academy_city' => $this->input->post('academy_city'),
					'academy_availability' => $this->input->post('academy_availability'),
					'academy_contact_number' => $this->input->post('academy_contact_number'),
					'academy_description' => $this->input->post('academy_description'),
					'sl_commission' => $this->input->post('sl_commission'),
					'coaching_classes_id' => $coaching_classes,
					'academy_images' => $imagelist,
					'free_transpotation' => $this->input->post('free_transpotation'),
					'from_date' => $this->input->post('from_date'),
					'to_date' => $this->input->post('to_date'),
					'start_time' => $this->input->post('start_time'),
					'end_time' => $this->input->post('end_time'),
					'starting_age' => $this->input->post('starting_age'),
					'ending_age' => $this->input->post('ending_age'),
					);
				//die(print_r($data));
				$res1232 = $this->football_model->academy_update($data);
			} else {
				$data = array(
					'academy_id' => $this->input->post('academy_id'),
					'academy_owner_id' => $this->input->post('academy_owner_id'),
					'academy_name' => $this->input->post('academy_name'),
					'academy_email' => $this->input->post('academy_email'),
					'academy_location' => $this->input->post('academy_location'),
					'academy_latitude' => $this->input->post('academy_lat'),
					'academy_longitude' => $this->input->post('academy_long'),
					'academy_city' => $this->input->post('academy_city'),
					'academy_availability' => $this->input->post('academy_availability'),
					'academy_contact_number' => $this->input->post('academy_contact_number'),
					'academy_description' => $this->input->post('academy_description'),
					'sl_commission' => $this->input->post('sl_commission'),
					'coaching_classes_id' => $coaching_classes,
					'academy_images' => $imagelist,
					'free_transpotation' => $this->input->post('free_transpotation'),
					'from_date' => $this->input->post('from_date'),
					'to_date' => $this->input->post('to_date'),
					'start_time' => $this->input->post('start_time'),
					'end_time' => $this->input->post('end_time'),
					'starting_age' => $this->input->post('starting_age'),
					'ending_age' => $this->input->post('ending_age'),
					);
				//die(print_r($data));
				$res1232 = $this->football_model->academy_update($data);
			}

		$this->session->set_flashdata('suceessMessage', get_phrase('data_updated'));
		redirect("academy_list");
        }
	}
	
	public function delete_academy_image(){
		$grdid = $this->input->post('academy_id');
        $data = array( 'academy_id' => $this->input->post('academy_id'),
            'img_name' => $this->input->post('img_name'));
        $grdpicture = $this->football_model->get_academy_list($grdid);
        
        $grgimage = $grdpicture['academy_images'];
        
        $img1 = $data['img_name'];
        $imgarray = explode(",",$grgimage);
        if (($key = array_search($img1, $imgarray)) !== false) {
            unset($imgarray[$key]);
        }
        $imgvalues =  implode(",",$imgarray);

        $params = array( 'academy_id' => $this->input->post('academy_id'),
            'academy_images' => $imgvalues);
        $grdupdatepicture = $this->football_model->academy_update($params);
	}
	
	public function view_academy()
    {
        $params = array(
		 'academy_id' => $this->uri->segment(2)
		);
        $data['academy'] = $this->football_model->get_academy_list($params);
        $data['academy_owners']=$this->football_model->academy_owners();
        $data['coaching_classes']=$this->football_model->get_all_coaching_classes();
        //die(print_r($academy));
        $this->load->view('inc/admin_header');
        $this->load->view('inc/admin_sidebar');
        $this->load->view('academic/academy_view',$data);
        $this->load->view('inc/admin_footer');
    }
    
	public function academy_delete()
	{
		$academy_id =  $this->uri->segment(2);		
		$data1 = array('del_status' => '1' );    
		$getprojectslist=$this->football_model->academy_delete($academy_id,$data1);
		$this->session->set_flashdata('suceessMessage', get_phrase('data_deleted'));
		redirect("academy_list");	
	}
	
	public function academy_available()
    {
        $academy_id =  $this->uri->segment(2);
        $data1 = array('academy_availability' => 'unavailable' );
        $getprojectslist=$this->football_model->academy_delete($academy_id,$data1);
		$this->session->set_flashdata('suceessMessage', get_phrase('data_updated'));
        redirect("academy_list");
    }
    
    public function academy_not_available()
    {
        $academy_id =  $this->uri->segment(2);
        $data1 = array('academy_availability' => 'available' );
        $getprojectslist=$this->football_model->academy_delete($academy_id,$data1);
		$this->session->set_flashdata('suceessMessage', get_phrase('data_updated'));
        redirect("academy_list");
    }
	
	 public function coaching_classes()
    {
        $data['coaching_classes']=$this->football_model->get_all_coaching_classes();
        $this->load->view('inc/admin_header');
        $this->load->view('inc/admin_sidebar');
        $this->load->view('academic/coaching_list',$data);
        $this->load->view('inc/admin_footer');

    }
	
	public function add_coaching()
    {
        $this->load->view('inc/admin_header');
        $this->load->view('inc/admin_sidebar');
        $this->load->view('academic/coaching_add');
        $this->load->view('inc/admin_footer');

    }

    public function save_coaching()
    {
        $data=array(
            'coaching_name' => $this->input->post('coaching_name'),
        );
        $res1232=$this->football_model->coaching_save($data);
        $this->session->set_flashdata('suceessMessage', get_phrase('data_added'));
        redirect("coaching_classes");
    }
	
    public function edit_coaching(){
        $coaching_id = $this->uri->segment(2);
        //die(print_r($facility_id));
        $data['coaching_class'] = $this->football_model->get_coaching_class($coaching_id);
        $this->load->view('inc/admin_header');
        $this->load->view('inc/admin_sidebar');
        $this->load->view('academic/coaching_edit', $data);
        $this->load->view('inc/admin_footer');
    }

    public function update_coaching(){
        
        $data = array(
			'coaching_id' => $this->input->post('coaching_id'),
            'coaching_name' => $this->input->post('coaching_name')
        );

        $res1232 = $this->football_model->coaching_update($data);
        $this->session->set_flashdata('suceessMessage', get_phrase('data_updated'));
        redirect("coaching_classes");
    }
	
	public function delete_coaching()
    {
		$data = array(
			'coaching_id' => $this->uri->segment(2),
            'del_status' => '1'
        );
        $getprojectslist=$this->football_model->coaching_delete($data);
        $this->session->set_flashdata('suceessMessage', get_phrase('data_deleted'));
        redirect("coaching_classes");
    }
    
    public function academy_price_list()
    {
        if($this->session->userdata['user_role'] == 3 || $this->session->userdata['user_role'] == 4 || $this->session->userdata['user_role'] == 2) {
            $params= array(
                'academy_owner_id' => $this->session->userdata['user_id'],
            );
            $data['price_list']=$this->football_model->get_all_academy_price_list($params);
        }else{
            $data['price_list']=$this->football_model->get_all_academy_price_list();
        }

        $this->load->view('inc/admin_header');
        $this->load->view('inc/admin_sidebar');
        $this->load->view('academic/price_list',$data);
        $this->load->view('inc/admin_footer');
    }
	public function add_academy_price()
	{
		if($this->session->userdata['user_role'] == 3 || $this->session->userdata['user_role'] == 4 || $this->session->userdata['user_role'] == 2) {
            $params= array(
                'academy_owner_id' => $this->session->userdata['user_id'],
            );
            $data['academy']=$this->football_model->academy_list($params);
        }else{
            $data['academy']=$this->football_model->academy_list();
        }
        
		$this->load->view('inc/admin_header');	
		$this->load->view('inc/admin_sidebar');		
		$this->load->view('academic/price_add',$data);
		$this->load->view('inc/admin_footer');
	}
	public function save_academy_price(){
		$after_disc_amount = ($this->input->post('discount') / 100) * $this->input->post('actual_price');
		$after_discount_price = $this->input->post('actual_price') - $after_disc_amount;
		$data = array(
			'academy_id' => $this->input->post('academy_id'),
			'age_limit' => $this->input->post('age'),
			'month' => $this->input->post('month'),
			'availability' => $this->input->post('availability'),
			'actual_price' => $this->input->post('actual_price'),
			'discount' => $this->input->post('discount'),
			'after_discount_price' => $after_discount_price,
			'payment_type' => $this->input->post('payment_type'),
		);
		$res1232 = $this->football_model->academy_price_save($data);
		$this->session->set_flashdata('suceessMessage', get_phrase('data_added'));
		redirect("academy_price_list");
    }

    public function edit_academy_price(){
        $id = $this->uri->segment(2);
		if($this->session->userdata['user_role'] == 3 || $this->session->userdata['user_role'] == 4 || $this->session->userdata['user_role'] == 2) {
            $params= array(
                'academy_owner_id' => $this->session->userdata['user_id'],
            );
            $data['academy']=$this->football_model->academy_list($params);
        }else{
            $data['academy']=$this->football_model->academy_list();
        }
        $data['academy_price'] = $this->football_model->get_academy_price_based_on_id($id);
		$this->load->view('inc/admin_header');	
		$this->load->view('inc/admin_sidebar');		
		$this->load->view('academic/price_edit',$data);
		$this->load->view('inc/admin_footer');
    }
	
	public function update_academy_price(){
		$after_disc_amount = ($this->input->post('discount') / 100) * $this->input->post('actual_price');
		$after_discount_price = $this->input->post('actual_price') - $after_disc_amount;
		$data = array(
			'id' => $this->input->post('id'),
			'academy_id' => $this->input->post('academy_id'),
			'age_limit' => $this->input->post('age'),
			'month' => $this->input->post('month'),
			'availability' => $this->input->post('availability'),
			'actual_price' => $this->input->post('actual_price'),
			'discount' => $this->input->post('discount'),
			'after_discount_price' => $after_discount_price,
			'payment_type' => $this->input->post('payment_type'),
		);
		$res1232 = $this->football_model->academy_price_update($data);
		$this->session->set_flashdata('suceessMessage', get_phrase('data_updated'));
		redirect("academy_price_list");
		
    }

    public function delete_academy_price()
    {
        $data = array(
			'id' => $this->uri->segment(2)
        );
        $getprojectslist=$this->football_model->academy_price_delete($data);
        $this->session->set_flashdata('suceessMessage', 'Successfully Deleted');
        redirect("academy_price_list");
    }
    
    public function academy_price_available()
    {
        $data = array(
			'id' => $this->uri->segment(2),
            'availability' => '1'
        );
        $getprojectslist=$this->football_model->academy_price_update($data);
		$this->session->set_flashdata('suceessMessage', get_phrase('data_updated'));
        redirect("academy_price_list");
    }
    
    public function academy_price_not_available()
    {
        $data = array(
			'id' => $this->uri->segment(2),
            'availability' => '0'
        );
        $getprojectslist=$this->football_model->academy_price_update($data);
		$this->session->set_flashdata('suceessMessage', get_phrase('data_updated'));
        redirect("academy_price_list");
    }
    
    public function academy_booking(){
	    if($this->session->userdata['user_role'] == 3 || $this->session->userdata['user_role'] == 4 || $this->session->userdata['user_role'] == 2) {
            $params= array(
                'academy_owner_id' => $this->session->userdata['user_id'],
            );
			$booking_list1=$this->football_model->academy_booking_list_all_cash($params);
			$booking_list2=$this->football_model->academy_booking_list_all_card($params);
        }else{
            $booking_list1=$this->football_model->academy_booking_list_all_cash();
			$booking_list2=$this->football_model->academy_booking_list_all_card();
        }
        if(empty($booking_list1)){
				$booking_list1 = array();
			}
			if(empty($booking_list2)){
				$booking_list2 = array();
			}
			$data['bookinglist'] = array_merge($booking_list1,$booking_list2);
		
		$this->load->view('inc/admin_header');
		$this->load->view('inc/admin_sidebar');
		$this->load->view('academic/booking_list',$data);
		$this->load->view('inc/admin_footer');
	}
	
	public function cancel_academy_booking(){
        $user_role = $this->session->userdata['user_role'];
        if($user_role == 1){
            $user_name = 'Admin';
        }else{
            $user_name = 'Academy Owner';
        }
        $data = array(
			'a_booking_id' => $this->input->post('a_booking_id'),
            'booking_cancel' => $this->input->post('booking_cancel'),
            'cancel_reason' => $this->input->post('cancel_reason'),
            'cancel_date' => date('Y-m-d'),
            'cancel_time' => date('H:i'),
            'who_cancelled' => $user_name
        );

        $res1232 = $this->football_model->cancel_academy_booking($data);
        $this->session->set_flashdata('suceessMessage', get_phrase('data_updated'));
        redirect("academy_booking");
    }
	
	public function edit_academy_booking(){

        $a_booking_id = $this->uri->segment(2);

        $data['edit_booking']=$this->football_model->academy_booking_view($a_booking_id);
        if($this->session->userdata['user_role'] == 2) {
            $params= array(
                'ground_owner_id' => $this->session->userdata['user_id'],
            );
            $data['academic_list']=$this->football_model->academy_list($params);
        }else{
            $data['academic_list']=$this->football_model->academy_list();
        }
        $data['player_list'] = $this->football_model->players_list();

        $this->load->view('inc/admin_header');
        $this->load->view('inc/admin_sidebar');
        $this->load->view('academic/edit_booking', $data);
        $this->load->view('inc/admin_footer');
    }
	
	public function delete_academy_booking(){
		$id =  $this->uri->segment(2);
        $getprojectslist=$this->football_model->academy_booking_delete($id);
        $this->session->set_flashdata('suceessMessage', get_phrase('data_deleted'));
        redirect("academy_booking");
	}
	
	public function view_academy_booking()
	{
		$a_booking_id = $this->uri->segment(2);
		$data['academy_view']=$this->football_model->academy_booking_view($a_booking_id);
		$this->load->view('inc/admin_header');		
		$this->load->view('inc/admin_sidebar');		
		$this->load->view('academic/booking_view',$data);
		$this->load->view('inc/admin_footer');
	}
	
	public function get_academy_age_ajax(){
		$params = array(
			'academy_id' => $this->input->post('academy_id')
		);
        $academy_age = $this->football_model->get_age_based_on_academy_id($params);
		echo json_encode($academy_age);
    }
	public function get_academy_price_ajax(){
        $id = $this->input->post('academy_age_id');
        $academy_price = $this->football_model->get_academy_price_based_on_id($id);
		echo json_encode($academy_price);
    }
	
	public function update_academy_booking(){
		$params = array(
			'academy_id' => $this->input->post('academy_id')
		);
        $academy_details = $this->football_model->get_academy_list($params);  
        $data = array(
            "a_booking_id" =>  $this->input->post('a_booking_id'),
            "booking_academy" =>  $this->input->post('academy_id'),
            "booking_city" => $academy_details['academy_city'],
            "booking_age" =>  $this->input->post('age'),
            "payment_type" =>  $this->input->post('payment_type'),
            "payment_status" =>  $this->input->post('payment_status'),
            "booking_amount" =>  $this->input->post('booking_amount'),
            "no_of_month" =>  $this->input->post('no_of_month'),
        );
        //die(print_r($data));
        $result = $this->football_model->update_academy_booking($data);
		 $this->session->set_flashdata('suceessMessage', get_phrase('data_updated'));
        redirect("academy_booking");
    }
    
    public function academy_payment(){
		if($this->session->userdata['user_role'] == 3 || $this->session->userdata['user_role'] == 4 || $this->session->userdata['user_role'] == 2) {
            $params= array(
                'academy_owner_id' => $this->session->userdata['user_id'],
            );
       
			$data['bookinglist']=$this->football_model->academy_booking_list_all_payments($params);
        }else{
            $data['bookinglist']=$this->football_model->academy_booking_list_all_payments();
        }
		
		$this->load->view('inc/admin_header');
		$this->load->view('inc/admin_sidebar');
		$this->load->view('academic/academy_payment',$data);
		$this->load->view('inc/admin_footer');
	}
	
	public function academy_payment_update(){
        $data = array(
			'a_booking_id' => $this->input->post('a_booking_id'),
            'payment_mode' => $this->input->post('payment_mode'),
            'payment_status' => $this->input->post('status'),
            'payment_date' => date('Y-m-d')
        );
		
        $result = $this->football_model->update_academy_booking($data);
		$this->session->set_flashdata('suceessMessage', get_phrase('data_updated'));
        redirect("academy_payment");
	}
	
	public function academy_payment_view(){
        $a_booking_id = $this->uri->segment(2);
		$data['academy_payment_view']=$this->football_model->academy_payment_view($a_booking_id);
		$this->load->view('inc/admin_header');		
		$this->load->view('inc/admin_sidebar');		
		$this->load->view('academic/academy_payment_view',$data);
		$this->load->view('inc/admin_footer');
    }
    
    public function academy_open_ccavenueform()
    {
        $this->load->view("academic/academy_ccavenueform_view");   		
    }
	 
	 
	public function academySendRequest(){
		$this->load->view("academic/academy_request_view");
	}
   
   public function academyGetResponse() {
		$this->load->view("academic/academy_response_view");
	}
/*
Academy Ends
*/
	
}
