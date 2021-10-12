<?php
class football_model extends CI_Model
{
    public function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }


    //************USER LOGIN****************//

    function admin_login($user_mail,$user_password)
    {
        $this -> db -> select('*');
        $this -> db -> from('yalla_users');
        $chh="user_email = '$user_mail' AND user_password = '$user_password' and disp_status = 0 and user_status = 0";
        $this -> db -> where($chh);
        $this -> db -> limit(1);
        $query= $this -> db -> get();
        //die(print_r($this->db->last_query));
        $row = $query->row_array();
        return $row;
    }





    //**************USER PART***************//




    //**************DASHBOARD PART***************//


    function total_ground_for_owener($ground_owner_id)
    {
		$this->db->select('ground_id, COUNT(ground_id) AS count', false);
        $this->db->from('yalla_ground');
        $this->db->group_by('ground_id');
        $this ->db->where('ground_status',0);
		
        /* $this->db->select ( 'yg.ground_id,COUNT(sg.id) AS count', false ); 
        $this->db->from ( 'yalla_ground yg' );
        $this->db->join ( 'sleague_ground_size_duration sg', 'sg.id = yg.ground_id' , 'left' ); */
		
        $this->db->where('ground_owner_id', $ground_owner_id);
		
        $query = $this->db->get();
		
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
     }
   

    function ground_booking_owner($ground_owner_id)
    {
	
		$sql = "select g.ground_id, COUNT(sb.booking_id) AS countval  
                from yalla_ground as g
                 inner join sleague_bookings as sb
                    on g.ground_id = sb.booking_ground where g.ground_owner_id = '".$ground_owner_id."' and sb.booking_status = '0' and sb.booking_approval = '0'";
		$val = $this->db->query($sql)->result();
		foreach($val as $s){
			$countval = $s->countval;
		}
		 
		 if ($countval > 0) {
            return $countval;
        } else {
            return 0;
        }
       /*  $query = $this->db->get();
		die(print_r($this->db->last_query));
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        } */

    }

    function ground_total_court($ground_owner_id)
    {
        $this->db->select('sz.id, COUNT(sz.id) AS count', false);
        $this->db->from('sleague_ground_size_duration sz');
        $this->db->join('yalla_ground g', 'sz.ground_id = g.ground_id');
        $this->db->group_by('sz.id');
        $this->db->where('g.ground_owner_id', $ground_owner_id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    function tournament_total_by_ground_owner($ground_owner_id)
    {
        $this->db->select('yalla_tournament.tour_id, COUNT(yalla_tournament.tour_id) AS tour_count', false);
        $this->db->from('yalla_tournament');
        $this->db->join('yalla_ground', 'yalla_ground.ground_id  = yalla_tournament.tour_groundname');
        $this->db->where('yalla_tournament.tour_delstatus', 0);
        $this->db->where('yalla_ground.ground_owner_id', $ground_owner_id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    function tournament_list_by_ground_owner($ground_owner_id)
    {
        $this->db->select('*');
        $this->db->from('yalla_tournament');
        $this->db->join('yalla_ground', 'yalla_ground.ground_id  = yalla_tournament.tour_groundname');
        $this->db->where('yalla_tournament.tour_delstatus', 0);
        $this->db->where('yalla_ground.ground_owner_id', $ground_owner_id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return 0;
        }
    }


    function total_ground()
    {

        $this->db->select('ground_id, COUNT(ground_id) AS count', false);
        $this->db->from('yalla_ground');
        $this->db->group_by('ground_id');
        $this ->db->where('ground_status',0);
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query -> num_rows();
        }
        else
        {
            return 0;
        }

    }

    function total_team()
    {

        $this->db->select('team_id, COUNT(team_id) AS count', false);
        $this->db->from('yalla_team');
        $this->db->group_by('team_id');
        $this ->db->where('team_status',0);
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query -> num_rows();
        }
        else
        {
            return 0;
        }

    }

    function ground_booking()
    {

        $this->db->select('booking_id, COUNT(booking_id) AS count', false);
        $this->db->from('sleague_bookings');
        $this->db->group_by('booking_id');
        $this->db->where('booking_status', '0');
        $this->db->where('booking_approval', '0');
        // $this ->db->where('presentstatus','A');
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query -> num_rows();
        }
        else
        {
            return 0;
        }

    }

    function total_player()
    {

        $this->db->select('player_id, COUNT(player_id) AS count', false);
        $this->db->from('sleague_players');
        $this->db->group_by('player_id');
        // $this ->db->where('presentstatus','A');
        $this ->db->where('player_status','0');
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query -> num_rows();
        }
        else
        {
            return 0;
        }

    }

    function rating_player()
    {

        $this->db->select('id, COUNT(id) AS count', false);
        $this->db->from('sleague_review_rating');
        $this->db->group_by('id');
        $this ->db->where('rating','5');
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query -> num_rows();
        }
        else
        {
            return 0;
        }

    }

    function total_tournament()
    {

        $this->db->select('tour_id, COUNT(tour_id) AS count', false);
        $this->db->from('yalla_tournament');
        $this->db->group_by('tour_id');
        $this ->db->where('tour_delstatus','0');
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query -> num_rows();
        }
        else
        {
            return 0;
        }

    }


    function review_list()
    {

        $this -> db -> select('sleague_review_rating.*,sleague_review_rating.id,sleague_review_rating.player_id,sleague_review_rating.ground_id,sleague_review_rating.status,,sleague_review_rating.rating,sleague_players.player_id,sleague_players.player_fname,sleague_players.player_image,sleague_players.player_image');
        $this -> db -> from('sleague_review_rating');
        $this->db->join('sleague_players', 'sleague_review_rating.player_id  = sleague_players.player_id');

        $this ->db->where('sleague_review_rating.status',0);

        $query= $this -> db -> get();
		//die(print_r($this->db->last_query()));
        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }

    }
    
    function review_list_by_g_ownerid($ground_owner_id)
    {

        $this -> db -> select('sleague_review_rating.*,sleague_review_rating.id,sleague_review_rating.player_id,sleague_review_rating.ground_id,sleague_review_rating.status,,sleague_review_rating.rating,sleague_players.player_id,sleague_players.player_fname,sleague_players.player_image,sleague_players.player_image');
        $this -> db -> from('sleague_review_rating');
        $this->db->join('sleague_players', 'sleague_review_rating.player_id  = sleague_players.player_id');
        $this->db->join('yalla_ground', 'sleague_review_rating.ground_id  = yalla_ground.ground_id');
        $this ->db->where('sleague_review_rating.status',0);
        $this ->db->where('yalla_ground.ground_owner_id',$ground_owner_id);
        $query= $this -> db -> get();
		//die(print_r($this->db->last_query()));
        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }

    }
    
    public function academy_review_list()
    {
        $this -> db -> select('*');
        $this -> db -> from('academy_rating ar');
        $this->db->join('sleague_players p', 'ar.player_id  = p.player_id');
        $this ->db->where('ar.del_status',0);
        $query= $this -> db -> get();
        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }

    }
    
    public function academy_review_list_by_a_ownerid($owner_id)
    {
        $this -> db -> select('*');
        $this -> db -> from('academy_rating ar');
        $this->db->join('sleague_players p', 'ar.player_id  = p.player_id');
        $this->db->join('academy a', 'ar.academy_id  = a.academy_id');
        $this ->db->where('ar.del_status',0);
        $this ->db->where('a.academy_owner_id',$owner_id);
        $query= $this -> db -> get();
		//die(print_r($this->db->last_query()));
        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }
	
	public function academy_booking_count()
    {
        $this->db->select('a_booking_id, COUNT(a_booking_id) AS count', false);
        $this->db->from('academy_booking');
		$this->db->group_by('a_booking_id');
        $this->db->where('del_status', '0');
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query -> num_rows();
        }
        else
        {
            return 0;
        }

    }
    
    public function owners_total_academy_count($owner_id)
    {
		$this->db->select('academy_id, COUNT(academy_id) AS count', false);
        $this->db->from('academy');
        $this->db->group_by('academy_id');
        $this ->db->where('del_status',0);
        $this->db->where('academy_owner_id', $owner_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
     }
   

    public function owners_academy_booking_count($owner_id)
    {
		$sql = "select a.academy_id, COUNT(sb.a_booking_id) AS countval  
                from academy as a
                 inner join academy_booking as sb
                    on a.academy_id = sb.booking_academy where a.academy_owner_id = '".$owner_id."' and sb.del_status = '0'";
		$val = $this->db->query($sql)->result();
		foreach($val as $s){
			$countval = $s->countval;
		}
		if ($countval > 0) {
            return $countval;
        } else {
            return 0;
        }
    }
	
	public function total_academy()
    {
        $this->db->select('academy_id, COUNT(academy_id) AS count', false);
        $this->db->from('academy');
        $this->db->group_by('academy_id');
        $this ->db->where('del_status',0);
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query -> num_rows();
        }
        else
        {
            return 0;
        }
    }



    //**************DASHBOARD PART***************//



    function add_dummy($data)
    {
        return $this->db->insert('dummy', $data);
    }

    function add_user($data)
    {
        return $this->db->insert('yalla_users', $data);
    }

    function user_list()
    {
        $this->db->select('*');
        $this->db->from('yalla_users');
        $this->db->where('user_role <>',1);
        $this->db->where('user_role <>',5);
        $this->db->where('user_status',0);
        $this->db->order_by('user_id','DESC');
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }

    function user_list_header($user_id)
    {
        $this -> db -> select('*');
        $this -> db -> from('yalla_users');
        $this ->db->where('user_id',$user_id);
        $this ->db->where('user_status',0);
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }

    function validation_checks($arraylist){
        $this -> db -> select('*');
        $this -> db -> from('yalla_users');
        $this -> db ->where("user_phone",$arraylist['user_phone']);
        $this -> db ->where("user_email",$arraylist['user_email']);
        $query= $this -> db -> get();
        //die(print_r($this->db->last_query()));
        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }

    }

    function edit_user($user_id)	{
        $this -> db -> select('*');
        $this -> db -> from('yalla_users');
        $this ->db->where('user_id',$user_id);
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }

    function user_update($data)
    {
        $user_id = $this->input->post('user_id');
        $this ->db->where('user_id',$user_id);
        return $this->db->update('yalla_users', $data);
    }


    function user_delete($data_id,$data1)
    {
        $this ->db->where('user_id',$data_id);
        return $this->db->update('yalla_users',$data1);
    }

    function disable_user($data_id,$data)
    {
        $this ->db->where('user_id',$data_id);
        return $this->db->update('yalla_users',$data);
    }

    function enable_user($data_id,$data)
    {
        $this ->db->where('user_id',$data_id);
        return $this->db->update('yalla_users',$data);
    }

    function user_view($user_id)
    {
        $this -> db -> select('*');
        $this -> db -> from('yalla_users');
        $this ->db->where('user_id',$user_id);
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }

    //***************************USER END********************************************************//

    //***************************TEAM PART*******************************************************//


    function add_team($data)
    {
        return $this->db->insert('yalla_team', $data);
    }

    function team_list()
    {
        $this -> db -> select('te.*,p.player_fname');
        $this -> db -> from('yalla_team te');
        $this -> db -> join('sleague_players p','te.captain_id = p.player_id','left');
        $this ->db->where('te.team_status',0);
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }


    function edit_team($team_id)	{
        $this -> db -> select('*');
        $this -> db -> from('yalla_team');
        $this ->db->where('team_id',$team_id);
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }

    function team_update($data)
    {
        $team_id = $this->input->post('team_id');
        $this ->db->where('team_id',$team_id);
        return $this->db->update('yalla_team', $data);
    }



    function team_view($team_id)
    {
        $this -> db -> select('te.*,p.player_fname,p.player_mnumber');
        $this -> db -> from('yalla_team te');
        $this -> db -> join('sleague_players p','te.captain_id = p.player_id','left');
        $this ->db->where('te.team_id',$team_id);
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }


    function team_delete($data_id,$data)
    {
        $this ->db->where('team_id',$data_id);
        return $this->db->update('yalla_team',$data);
    }

//************************************GROUND PART*********************************//

    function add_ground($data)
    {
        $this->db->insert('yalla_ground',$data);
        // $this->db->trans_complete();
        return $this->db->insert_id();
    }

    function add_groundhours($data)
    {
        return $this->db->insert('ground_working_hours',$data);
    }


    function get_ground_hour_list($ground_id)	{
        $this -> db -> select('*');
        $this -> db -> from('ground_working_hours');
        $this ->db->where('ground_id',$ground_id);
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }


    function update_groundhours($data)
    {
        $this ->db->where('work_hour_id',$data['work_hour_id']);
        return $this->db->update('ground_working_hours', $data);
    }



    function ground_list($params = array())
    {
        $this -> db -> select('*');
        $this -> db -> from('yalla_ground');
        if (!empty($params['ground_owner_id'])) {
            $this->db->where('ground_owner_id', $params['ground_owner_id']);
        }
        $this ->db->where('ground_status',0);
        $this ->db->order_by('ground_id','DESC');
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }

    function edit_ground($ground_id)	{
        $this -> db -> select('*');
        $this -> db -> from('yalla_ground');
        $this ->db->where('ground_id',$ground_id);
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }

    function ground_update($data)
    {
        $ground_id = $this->input->post('ground_id');
        $this ->db->where('ground_id',$ground_id);
        return $this->db->update('yalla_ground', $data);
    }

    function ground_delete($data_id,$data)
    {
        $this ->db->where('ground_id',$data_id);
        return $this->db->update('yalla_ground',$data);
    }

    function ground_view($ground_id)
    {
        $this -> db -> select('*');
        $this -> db -> from('yalla_ground');
        $this ->db->where('ground_id',$ground_id);
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }

    //************************************TOURNAMENT PART*********************************//

    public function add_tournament($data){
        return $this->db->insert('yalla_tournament',$data);
    }



    function tournament_list()
    {

        $this -> db -> select('*');
        $this -> db -> from('yalla_tournament');
        $this->db->join('yalla_ground', 'yalla_ground.ground_id  = yalla_tournament.tour_groundname','left');
        $this ->db->where('yalla_tournament.tour_delstatus',0);

        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }
    
    function tournament_list_ground($params)
    {

        $this -> db -> select('*');
        $this -> db -> from('yalla_tournament');
        $this->db->join('yalla_ground', 'yalla_ground.ground_id  = yalla_tournament.tour_groundname','left');

        if (!empty($params['ground_owner_id'])) {
            $this->db->where('yalla_ground.ground_owner_id', $params['ground_owner_id']);
        }
        $this ->db->where('yalla_tournament.tour_delstatus',0);

        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }

    function edit_tournament($ground_id)	{
        $this -> db -> select('*');
        $this -> db -> from('yalla_tournament');
        $this ->db->where('tour_id',$ground_id);
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }

    function tournament_update($data)
    {
        $tour_id = $this->input->post('tour_id');
        $this ->db->where('tour_id',$tour_id);
        return $this->db->update('yalla_tournament', $data);
    }


    function tournament_delete($data_id,$data)
    {
        $this ->db->where('tour_id',$data_id);
        return $this->db->update('yalla_tournament',$data);
    }

    //***************** PLAYER ***********************//

    function players_list()
    {
        $this -> db -> select('*');
        $this -> db -> from('sleague_players');
        $this ->db->where('player_status',0);
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }

    function players_list_all()
    {

        $this -> db -> select('sleague_players.*,sleague_players.player_id,sleague_players.team_id,sleague_players.player_fname,sleague_players.player_lname,sleague_players.player_mnumber,sleague_players.player_email,sleague_players.player_image,sleague_players.player_city,sleague_players.player_address,sleague_players.player_ratings,sleague_players.player_status,yalla_team.team_id,yalla_team.team_name');
        $this -> db -> from('sleague_players');
        $this->db->join('yalla_team', 'sleague_players.player_id  = yalla_team.team_id');

        $this ->db->where('sleague_players.player_status',0);

        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }


    function disable_player($data_id,$data)
    {
        $this ->db->where('player_id',$data_id);
        return $this->db->update('sleague_players',$data);
    }

    function enable_player($data_id,$data)
    {
        $this ->db->where('player_id',$data_id);
        return $this->db->update('sleague_players',$data);
    }

    function player_delete($data_id,$data)
    {
        $this ->db->where('player_id',$data_id);
        return $this->db->update('sleague_players',$data);
    }

    function player_view($player_id)
    {
        $this -> db -> select('*');
        $this -> db -> from('sleague_players');
        $this ->db->where('player_id',$player_id);
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }

    //************** BOOKING **************************//

    function booking_list()
    {
        $this -> db -> select('sleague_bookings.*,yalla_ground.ground_name,sd.size');
        $this -> db -> from('sleague_bookings');
        $this->db->join('yalla_ground', 'yalla_ground.ground_id  = sleague_bookings.booking_ground ');
        $this->db->join('sleague_ground_size_duration sd', 'sd.id  = sleague_bookings.booking_ground_size ');
        $this ->db->where('sleague_bookings.booking_status',0);
		$this ->db->where('sleague_bookings.booking_approval',0);
		$this ->db->where('yalla_ground.ground_status',0);
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }
    
    	function booking_list_cash()
    {
        $this -> db -> select('sleague_bookings.*,yalla_ground.ground_name,sd.size');
        $this -> db -> from('sleague_bookings');
        $this->db->join('yalla_ground', 'yalla_ground.ground_id  = sleague_bookings.booking_ground ');
        $this->db->join('sleague_ground_size_duration sd', 'sd.id  = sleague_bookings.booking_ground_size ');
        $this ->db->where('sleague_bookings.booking_status',0);
		$this ->db->where('sleague_bookings.booking_approval',0);
		$this ->db->where('yalla_ground.ground_status',0);
		$this ->db->where('sleague_bookings.booking_paymenttype','cash');
        $query= $this -> db -> get();
        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }
	
	function booking_list_card()
    {
        $this -> db -> select('sleague_bookings.*,yalla_ground.ground_name,sd.size');
        $this -> db -> from('sleague_bookings');
        $this->db->join('yalla_ground', 'yalla_ground.ground_id  = sleague_bookings.booking_ground ');
        $this->db->join('sleague_ground_size_duration sd', 'sd.id  = sleague_bookings.booking_ground_size ');
       $this ->db->where('sleague_bookings.booking_status',0);
		$this ->db->where('sleague_bookings.booking_approval',0);
		$this ->db->where('yalla_ground.ground_status',0);
		$this ->db->where('sleague_bookings.booking_paymenttype','card');
		$this ->db->where('sleague_bookings.payment_status',1);
        $query= $this -> db -> get();
        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }

function booking_list_all_cash($params = array())
    {
        $this -> db -> select('sleague_bookings.*, sleague_bookings.booking_id, sleague_bookings.booking_ground, sleague_bookings.booking_groundcity, sleague_bookings.booking_team,sleague_bookings.booking_player,sleague_bookings.booking_status,
		
		yalla_ground.ground_id,yalla_ground.ground_name,yalla_ground.ground_city');
        $this -> db -> from('sleague_bookings');
        $this->db->join('yalla_ground', 'yalla_ground.ground_id  = sleague_bookings.booking_ground ','yalla_ground.ground_id  = sleague_bookings.booking_groundcity','left' );

        //$this->db->join('yalla_ground', 'yalla_ground.ground_id  = sleague_bookings.booking_groundcity');

        $this ->db->where('sleague_bookings.booking_status',0);
		$this ->db->where('sleague_bookings.booking_approval',0);
		$this ->db->where('yalla_ground.ground_status',0);
		$this ->db->where('sleague_bookings.booking_paymenttype','cash');
        if (!empty($params['ground_owner_id'])) {
            $this->db->where('yalla_ground.ground_owner_id', $params['ground_owner_id']);
        }
		$this->db->order_by("sleague_bookings.book_code","desc");

        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }
	
	function booking_list_all_card($params = array())
    {
        $this -> db -> select('sleague_bookings.*, sleague_bookings.booking_id, sleague_bookings.booking_ground, sleague_bookings.booking_groundcity, sleague_bookings.booking_team,sleague_bookings.booking_player,sleague_bookings.booking_status,
		
		yalla_ground.ground_id,yalla_ground.ground_name,yalla_ground.ground_city');
        $this -> db -> from('sleague_bookings');
        $this->db->join('yalla_ground', 'yalla_ground.ground_id  = sleague_bookings.booking_ground ','yalla_ground.ground_id  = sleague_bookings.booking_groundcity','left' );

        //$this->db->join('yalla_ground', 'yalla_ground.ground_id  = sleague_bookings.booking_groundcity');

        $this ->db->where('sleague_bookings.booking_status',0);
		$this ->db->where('sleague_bookings.booking_approval',0);
		$this ->db->where('yalla_ground.ground_status',0);
		$this ->db->where('sleague_bookings.booking_paymenttype','card');
		$this ->db->where('sleague_bookings.payment_status',1);
        if (!empty($params['ground_owner_id'])) {
            $this->db->where('yalla_ground.ground_owner_id', $params['ground_owner_id']);
        }
		$this->db->order_by("sleague_bookings.book_code","desc");

        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }


    function booking_approval_list()
    {
        $this -> db -> select('sleague_bookings.*, sleague_bookings.booking_id, sleague_bookings.booking_ground, sleague_bookings.booking_groundcity, sleague_bookings.booking_team,sleague_bookings.booking_player,sleague_bookings.booking_status,sleague_bookings.booking_approval,
		
		yalla_ground.ground_id,yalla_ground.ground_name,yalla_ground.ground_city,sleague_players.player_id,sleague_players.player_fname');
        $this -> db -> from('sleague_bookings');
        //$this->db->join('yalla_team', 'yalla_team.team_id  = sleague_bookings.booking_team');

        $this->db->join('yalla_ground', 'yalla_ground.ground_id  = sleague_bookings.booking_ground ','yalla_ground.ground_id  = sleague_bookings.booking_groundcity' );

        $this->db->join('sleague_players', 'sleague_players.player_id  = sleague_bookings.booking_player');

        $this ->db->where('sleague_bookings.booking_approval',1,2,3);

        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }

    function booking_approval_list_view()
    {
        $this -> db -> select('sleague_bookings.*, sleague_bookings.booking_id, sleague_bookings.booking_ground, sleague_bookings.booking_groundcity, sleague_bookings.booking_team,sleague_bookings.booking_player,sleague_bookings.booking_status,sleague_bookings.booking_approval,
		
		yalla_ground.ground_id,yalla_ground.ground_name,yalla_ground.ground_city,sleague_players.player_id,sleague_players.player_fname');
        $this -> db -> from('sleague_bookings');
        //$this->db->join('yalla_team', 'yalla_team.team_id  = sleague_bookings.booking_team');

        $this->db->join('yalla_ground', 'yalla_ground.ground_id  = sleague_bookings.booking_ground ','yalla_ground.ground_id  = sleague_bookings.booking_groundcity' );

        $this->db->join('sleague_players', 'sleague_players.player_id  = sleague_bookings.booking_player');

        $this ->db->where('sleague_bookings.booking_status',0);

        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }
    
    function payment_cancel_update($booking_id,$data){
        $this ->db->where('booking_id',$booking_id);
        return $this->db->update('sleague_payments', $data);
    }



    function approval_update($approval_id,$data){
        $this ->db->where('booking_id',$approval_id);
        return $this->db->update('sleague_bookings', $data);

    }

    function booking_delete($id){
        $this ->db->where('booking_id',$id);
        $this->db->delete('sleague_bookings');
    }
    
    public function ground_payment_delete($booking_code)
    {
        $this->db->where('booking_id',$booking_code);
        $this->db->delete('sleague_payments');
    }

    public function match_schedule_delete($tourn_match_id){
        $this->db->where('tourn_match_id',$tourn_match_id);
        $this->db->delete('tourn_match_schedule');
    }

    public function booking_s_delete($booking_code){
        $this ->db->where('booking_code',$booking_code);
        $this->db->delete('sleague_bookings');
    }


   function booking_view($booking_id)
    {
        $this -> db -> select('b.*,gs.size,gs.slot,gs.ground_sq_ft,gs.upto_players');
        $this -> db -> from('sleague_bookings b');
		$this->db->join('sleague_ground_size_duration gs', 'gs.id  = b.booking_ground_size','left');
        $this ->db->where('booking_id',$booking_id);
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }
	
	
	function booking_view_orderid($booking_id)
    {
        $this -> db -> select('*');
        $this -> db -> from('sleague_bookings');
        $this ->db->where('booking_code',$booking_id);
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }

    public function get_booking_code()
    {
        $this->db->select('*');
        $this->db->from('sleague_bookings');
        $this->db->where('booking_status', 0);
        $this->db->order_by("book_code","desc");
        $query = $this->db->get();
        $row = $query->row_array();
        return $row;
    }

    function save_booking_details($data)
    {
        $this->db->insert('sleague_bookings', $data);
        return $this->db->insert_id();
    }



    function update_booking_details($data)
    {
        $booking_id = $this->input->post('booking_id');
        $this ->db->where('booking_id',$booking_id);
        return $this->db->update('sleague_bookings', $data);
    }

    function save_payment_details($data)
    {
        return $this->db->insert('sleague_payments', $data);
    }


    function payment_list_all($params = array())
    {
        $this -> db -> select('sleague_payments.*,yalla_ground.ground_id,yalla_ground.ground_name,sleague_players.player_fname');
        $this -> db -> from('sleague_payments');

        $this->db->join('yalla_ground', 'yalla_ground.ground_id  = sleague_payments.ground_id ');
        $this->db->join('sleague_players', 'sleague_players.player_id  = sleague_payments.player_id ');
        if (!empty($params['ground_owner_id'])) {
            $this->db->where('sleague_payments.ground_owner_id', $params['ground_owner_id']);
        }
        $this->db->where('yalla_ground.ground_status', 0);
        $this ->db->order_by('sleague_payments.pay_id','DESC');
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }


    function update_payment_details($data)
    {
        $booking_id = $this->input->post('booking_id');
        $this ->db->where('booking_id',$booking_id);
        return $this->db->update('sleague_payments', $data);
    }


    function booking_payment_update($booking_id,$data){
        $this ->db->where('booking_code',$booking_id);
        return $this->db->update('sleague_bookings', $data);
        //die(print_r($this->db->last_query()));

    }
	
	 public function get_player_mobilenumber($params)
    {
        $this->db->select('*');
        $this->db->from('sleague_players');
        $this->db->where('player_id', $params['player_id']);
        $this->db->where('player_status', 0);
        $query = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $query->row_array();
        return $row;
    }
    
     public function get_ground_list_based_on_ground_id($params){
        $this->db->select("*");
        $this->db->from("yalla_ground");
        $this->db->where('ground_status', 0);
        $this->db->where('ground_id', $params["ground_id"]);
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->row_array();
        return $row;
    }
    
       
    public function get_admin_details()
    {
        $this->db->select('*');
        $this->db->from('yalla_users');
        $this->db->where('user_role', '1');
        $query = $this->db->get();
        $row = $query->row_array();
        return $row;
    }

	 function payment_update($pay_id,$data){
        $this ->db->where('pay_id',$pay_id);
        return $this->db->update('sleague_payments', $data);

    }
	
	function payment_table_update($booking_id,$data){
		$this->db->set('tracking_id',$data['tracking_id']);
		$this->db->set('bank_ref_no',$data['bank_ref_no']);
		$this->db->set('payment_status','1');
        $this ->db->where('booking_id',$booking_id);
        return $this->db->update('sleague_payments');
    }



    function payment_view($pay_id)
    {
        $this -> db -> select('*');
        $this -> db -> from('sleague_payments');
        $this ->db->where('pay_id',$pay_id);
        $query= $this -> db -> get();
        $row = $query->row_array();
        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }
    
        public function ground_open_close_booking_hours($data){
        $this -> db -> select('*');
        $this -> db -> from('ground_working_hours');
        $this ->db->where('day_value', $data['dayOfWeek']);
        $this->db->where('ground_id', $data['ground_id']);
        $query= $this -> db -> get();
        //die($this->db->last_query());

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }

    public function time_slot_hours($data){
        $this -> db -> select('*');
        $this -> db -> from('sleague_bookings');
        $this ->db->where('booking_sdate', $data['dateval']);
        $this->db->where('booking_ground', $data['ground_id']);
        $this->db->where('booking_ground_size', $data['ground_size']);
        $this->db->where('booking_status', '0');
        $this->db->where('booking_approval', '0');
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }


    function get_ground_size_based_on_ground_id($ground_id){
        $this->db->select('trt.*');
        $this->db->from('sleague_ground_size_duration trt');
        $this ->db->where('trt.ground_id',$ground_id);
        $this ->db->where('trt.del_status',0);
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }


    function get_booking_amount_based_on_ground_id($ground_id){
        $this->db->select('trt.*');
        $this->db->from('sleague_ground_size_duration trt');
        $this ->db->where('trt.id',$ground_id);
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }

    //************** BOOKING END**************************//

    //***************** PLAYER ***********************//



    public function update_password($id, $newpassword, $oldpassword){
        $data = array('user_password' => $newpassword);
        $this->db->where('user_id', $id);
        $this->db->where('user_password', $oldpassword);
        $this->db->update('yalla_users', $data);
        //die($this->db->last_query());
        return $this->db->affected_rows();
    }



    /*Srinivasan Starts */

    public function awards_add($data){
        return $this->db->insert('sleague_tourn_awards',$data);
    }

    public function awards_list(){
        $this -> db -> select('*');
        $this -> db -> from('sleague_tourn_awards');
        $this ->db->where('del_status',0);
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }

    function edit_award($award_id)	{
        $this -> db -> select('*');
        $this -> db -> from('sleague_tourn_awards');
        $this ->db->where('id',$award_id);
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }

    function awards_update($award_id,$data){
        $this ->db->where('id',$award_id);
        return $this->db->update('sleague_tourn_awards', $data);
    }

    function awards_delete($id,$data1){
        $this ->db->where('id',$id);
        return $this->db->update('sleague_tourn_awards',$data1);
    }
    function view_tournament($ground_id)	{
        $this -> db -> select('t.*,g.ground_name');
        $this -> db -> from('yalla_tournament t');
        $this -> db -> join('yalla_ground g','t.tour_groundname = g.ground_id','left');
        $this ->db->where('tour_id',$ground_id);
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }

    /*Srinivasan Ends*/
    /*---------Mayavel-------------------*/

    public function save_ground_facility($params)
    {
        return $this->db->insert('sleague_ground_facility',$params);
    }

    public function get_ground_facility_list()
    {
        $this->db->select('*');
        $this->db->from('sleague_ground_facility');
        $this ->db->where('del_status',0);
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }

    function facility_delete($facility_id,$data1)
    {
        $this ->db->where('facility_id',$facility_id);
        return $this->db->update('sleague_ground_facility',$data1);
    }

    function change_facility($facility_id)	{
        $this -> db -> select('*');
        $this -> db -> from('sleague_ground_facility');
        $this ->db->where('facility_id',$facility_id);
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }
    function facility_update($facility_id,$data){
        $this ->db->where('facility_id',$facility_id);
        return $this->db->update('sleague_ground_facility', $data);

    }


    /*---------Mayavel code end-------------------*/

    /*Srinivasan Coding Starts 31-01-2019*/

    public function add_tourn_match_points($data){
        return $this->db->insert('tourn_match_result',$data);
    }

    function get_tourn_match_points_list(){
        $this->db->select('mr.*,t.tour_name,te.team_name');
        $this->db->from('tourn_match_result mr');
        $this->db->join('yalla_tournament t','t.tour_id = mr.tour_id','left');
        $this->db->join('yalla_team te','te.team_id = mr.team_id','left');
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }

    function edit_tourn_match_points($id){
        $this->db->select('mr.*,t.tour_name,te.team_name');
        $this->db->from('tourn_match_result mr');
        $this->db->join('yalla_tournament t','t.tour_id = mr.tour_id','left');
        $this->db->join('yalla_team te','te.team_id = mr.team_id','left');
        $this ->db->where('id',$id);
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }

    function update_tourn_match_points($id,$data){
        $this ->db->where('id',$id);
        return $this->db->update('tourn_match_result', $data);
    }

    function get_team_names_based_on_tour_id($tour_id){
        $this->db->select('trt.*,t.team_id as t_id,t.team_name,');
        $this->db->from('sleague_tourn_register_teams trt');
        $this->db->join('yalla_team t','trt.team_id = t.team_id','left');
        $this ->db->where('trt.tour_id',$tour_id);
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }

    function tournament_schedule_add($data){
        return $this->db->insert('tourn_match_schedule',$data);
    }

    function get_tournament_schedule_list(){
        $this->db->select('t1.*,sb.booking_id,sb.book_code,g.ground_name,t2_1.team_name AS team_name1,t2_1.team_id AS team_id1,t2_2.team_name AS team_name2,t2_2.team_id AS team_id2,');
        $this->db->from('tourn_match_schedule t1');
        $this->db->join('yalla_team t2_1', 't2_1.team_id = t1.team1', 'left');
        $this->db->join('yalla_team t2_2', 't2_2.team_id = t1.team2', 'left');
        $this->db->join('yalla_ground g', 'g.ground_id = t1.ground_id', 'left');
        $this->db->join('sleague_bookings sb', 'sb.booking_code = t1.booking_code', 'left');
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }

    function get_edit_tournament_schedule($tourn_match_id){
        $this->db->select('t1.*,sb.booking_id,sb.book_code,g.ground_name,g.ground_id,t2_1.team_name AS team_name1,t2_1.team_id AS team_id1,t2_2.team_name AS team_name2,t2_2.team_id AS team_id2,');
        $this->db->from('tourn_match_schedule t1');
        $this->db->join('yalla_team t2_1', 't2_1.team_id = t1.team1', 'left');
        $this->db->join('yalla_team t2_2', 't2_2.team_id = t1.team2', 'left');
        $this->db->join('yalla_ground g', 'g.ground_id = t1.ground_id', 'left');
        $this->db->join('sleague_bookings sb', 'sb.booking_code = t1.booking_code', 'left');
        $this->db->where('t1.tourn_match_id',$tourn_match_id);
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }

    function tournament_schedule_update($tourn_match_id,$data){
        $this ->db->where('tourn_match_id',$tourn_match_id);
        return $this->db->update('tourn_match_schedule', $data);
    }

    /*Srinivasan Coding Ends 31-01-2019*/

    /*02- Ground size and duration module start*/

    public function get_ground_size_dur_list($params = array()){
        $this->db->select('gs.*,g.ground_name');
        $this->db->from('sleague_ground_size_duration gs');
        $this->db->join('yalla_ground g','gs.ground_id = g.ground_id','left');
        if (!empty($params['ground_owner_id'])) {
            $this->db->where('g.ground_owner_id', $params['ground_owner_id']);
        }
        $this ->db->where('gs.del_status',0);
        $this ->db->where('g.ground_status',0);
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }

    public function ground_size_dur_add($data){
        return $this->db->insert('sleague_ground_size_duration',$data);
    }

    public function ground_size_dur_edit($id,$params = array()){
        $this->db->select('gs.*,g.ground_name');
        $this->db->from('sleague_ground_size_duration gs');
        $this->db->join('yalla_ground g','gs.ground_id = g.ground_id','left');
        if (!empty($params['ground_owner_id'])) {
            $this->db->where('g.ground_owner_id', $params['ground_owner_id']);
        }
        $this->db->where('gs.id', $id);
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }
    
    public function ground_size_num_validation($data = array()){
        $this->db->select('gs.*');
        $this->db->from('sleague_ground_size_duration gs');
        $this->db->where('gs.ground_id', $data['ground_id']);
        $this->db->where('gs.size', $data['size']);
        $this->db->where('gs.del_status', 0);
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }

    public function ground_size_dur_update($id,$data){
        $this ->db->where('id',$id);
        return $this->db->update('sleague_ground_size_duration', $data);
    }

    public function delete_ground_size_dur($id,$data1){
        $this ->db->where('id',$id);
        return $this->db->update('sleague_ground_size_duration', $data1);
    }


    /*02- Ground size and duration module end*/


    //************* BOOKING TOURNAMENT START *******************//

    function booking_tournament_list($params = array())
    {

        $this -> db -> select('*');
        $this -> db -> from('yalla_tournament t');
        $this->db->join('yalla_ground', 'yalla_ground.ground_id  = t.tour_groundname','left');
              if(!empty($params['ground_owner_id'])){
				$this ->db->where('yalla_ground.ground_owner_id',$params['ground_owner_id']);
				}
        $this ->db->where('t.tour_delstatus',0);

        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }


    function tournament_list_view($tour_id)
    {
        $this -> db -> select('*');
        $this -> db -> from('yalla_tournament');
        $this ->db->where('tour_id',$tour_id);
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->row();
        }
        else
        {
            return 0;
        }
    }



    public function tour_book_update($data){
        $this ->db->where('id',$data['id']);
        return $this->db->update('tourn_match_result', $data);
    }

    function booked_team()
    {


        $this->db->select ('tour_id, COUNT(tour_id) AS count', false);
        $this->db->from("sleague_tourn_register_teams");
        $this->db->where('tour_id',7);

        //echo $this->db->count_all_results();


        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query -> num_rows();
        }
        else
        {
            return 0;
        }

    }





    function tournament_schedule($tourn_schedule){
        $this->db->select('t1.*,sb.booking_id,sb.book_code,g.ground_id,g.ground_name,g.ground_city,t2_1.team_logo AS team_logo1,t2_1.team_id AS team_id1,t2_1.team_name AS team_name1,t2_2.team_logo AS team_logo2,t2_2.team_id AS team_id2,t2_2.team_name AS team_name2');
        $this->db->from('tourn_match_schedule t1');
        $this->db->join('yalla_team t2_1', 't2_1.team_id = t1.team1', 'left');
        $this->db->join('yalla_team t2_2', 't2_2.team_id = t1.team2', 'left');
        $this->db->join('yalla_ground g', 'g.ground_id = t1.ground_id', 'left');
        $this->db->join('sleague_bookings sb', 'sb.booking_code = t1.booking_code', 'left');
        $this->db->where('t1.tour_id',$tourn_schedule);
        $this->db->order_by('t1.date','asc');
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }


    function tournament_points($id){
        $this -> db -> select('*');
        $this -> db -> from('tourn_match_result tms');
        $this->db->join('yalla_team t', 'tms.team_id  = t.team_id');
        $this->db->where('tms.tour_id',$id);
        $this->db->order_by("tms.points", "desc");
        $query= $this -> db -> get();
        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }


    public function tour_booked_update($data,$data1)
    {
        $this->db->where('tour_id', $data['tour_id']);
        return $this->db->update('yalla_tournament', $data1);
    }

    public function get_all_tournament_list_by_tour_id($data){
        $this->db->select('*');
        $this->db->from('yalla_tournament tms');
        $this->db->where('tms.tour_id', $data['tour_id']);
        $query = $this->db->get();
        $row = $query->row_array();
        return $row;
    }
    public function save_tourn_register_teams($data){
        return $this->db->insert('sleague_tourn_register_teams', $data);
    }
    public function get_team_register_tour_id($data){
        $this->db->select('*');
        $this->db->from('sleague_tourn_register_teams trt');
        $this->db->where('trt.tour_id', $data['tour_id']);
        $this->db->where('trt.team_id', $data['team_id']);
        $query = $this->db->get();
        $row = $query->row_array();
        return $row;
    }


    //************* BOOKING TOURNAMENT END *******************//
    function get_user_details($uid)
    {
        $this -> db -> select('*');
        $this -> db -> from('yalla_users');
        $this ->db->where('user_id',$uid);
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }

    //************* BOOKING CALENDER START *******************//

   function ground_booking_list($uid)
    {
        $this -> db -> select('ground_id');
        $this -> db -> from('yalla_ground');
        $this ->db->where('ground_owner_id',$uid);
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            $list =  $query->result();
            foreach ($list as $row) {
                $groundid[] = $row->ground_id;
            }
            $groundids = implode(',', $groundid);
            $this->db->select('sleague_bookings.*,yalla_ground.ground_name,sd.size');
            $this->db->from('sleague_bookings');
            $this->db->join('yalla_ground', 'yalla_ground.ground_id  = sleague_bookings.booking_ground ');
            $this->db->join('sleague_ground_size_duration sd', 'sd.id  = sleague_bookings.booking_ground_size ');
            $this->db->where('sleague_bookings.booking_status', 0);
            $this->db->where('sleague_bookings.booking_approval', 0);
            //$this->db->where_in('booking_ground', $groundids);
            $this->db->where("sleague_bookings.booking_ground IN (".$groundids.")",NULL, false);
            $query = $this->db->get();
            //die($this->db->last_query());
            $row = $query->result();
            return $row;
        }
        else
        {
            return 0;
        }
    }
    	   function ground_booking_list_cash($uid)
    {
        $this -> db -> select('ground_id');
        $this -> db -> from('yalla_ground');
        $this ->db->where('ground_owner_id',$uid);
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            $list =  $query->result();
            foreach ($list as $row) {
                $groundid[] = $row->ground_id;
            }
            $groundids = implode(',', $groundid);
            $this->db->select('sleague_bookings.*,yalla_ground.ground_name,sd.size');
            $this->db->from('sleague_bookings');
            $this->db->join('yalla_ground', 'yalla_ground.ground_id  = sleague_bookings.booking_ground ');
            $this->db->join('sleague_ground_size_duration sd', 'sd.id  = sleague_bookings.booking_ground_size ');
            $this->db->where('sleague_bookings.booking_status', 0);
            $this->db->where('sleague_bookings.booking_approval', 0);
			$this ->db->where('sleague_bookings.booking_paymenttype','cash');
            //$this->db->where_in('booking_ground', $groundids);
            $this->db->where("sleague_bookings.booking_ground IN (".$groundids.")",NULL, false);
            $query = $this->db->get();
            //die($this->db->last_query());
            $row = $query->result();
            return $row;
        }
        else
        {
            return 0;
        }
    }
	
	   function ground_booking_list_card($uid)
    {
        $this -> db -> select('ground_id');
        $this -> db -> from('yalla_ground');
        $this ->db->where('ground_owner_id',$uid);
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            $list =  $query->result();
            foreach ($list as $row) {
                $groundid[] = $row->ground_id;
            }
            $groundids = implode(',', $groundid);
            $this->db->select('sleague_bookings.*,yalla_ground.ground_name,sd.size');
            $this->db->from('sleague_bookings');
            $this->db->join('yalla_ground', 'yalla_ground.ground_id  = sleague_bookings.booking_ground ');
            $this->db->join('sleague_ground_size_duration sd', 'sd.id  = sleague_bookings.booking_ground_size ');
            $this->db->where('sleague_bookings.booking_status', 0);
            $this->db->where('sleague_bookings.booking_approval', 0);
			$this ->db->where('sleague_bookings.booking_paymenttype','card');
			$this ->db->where('sleague_bookings.payment_status',1);
            //$this->db->where_in('booking_ground', $groundids);
            $this->db->where("sleague_bookings.booking_ground IN (".$groundids.")",NULL, false);
            $query = $this->db->get();
            //die($this->db->last_query());
            $row = $query->result();
            return $row;
        }
        else
        {
            return 0;
        }
    }
//************* BOOKING CALENDER END *******************//
 //****************************Report Starts*************************//
 function report_list_all($params = array())
	{	
		$user_id = $this->session->userdata['user_id'];
		$user_role = $this->session->userdata['user_role'];
		$this -> db -> select('sleague_bookings.*,yalla_ground.ground_id,yalla_ground.ground_name,yalla_ground.ground_city,sleague_players.player_fname');
		$this -> db -> from('sleague_bookings');
		//$this->db->join('yalla_team', 'yalla_team.team_id  = sleague_bookings.booking_team');
		
		$this->db->join('yalla_ground', 'yalla_ground.ground_id  = sleague_bookings.booking_ground ','yalla_ground.ground__id  = sleague_bookings.booking_groundcity' );		
		$this->db->join('sleague_players', 'sleague_players.player_id  = sleague_bookings.booking_player ' );

		if (!empty($params['from_date'] || !empty($params['to_date']   || !empty($params['ground_id'])))) {
			if($params['ground_id'] != ''){
				$this ->db->where('sleague_bookings.booking_ground',$params['ground_id']);
			}
			
			if($params['from_date'] != ''){
				$this ->db->where('sleague_bookings.booking_sdate >=',$params['from_date']);
			}

            if($params['to_date'] != ''){
                $this ->db->where('sleague_bookings.booking_sdate <=',$params['to_date']);
            }

		}
		
		//$this->db->join('yalla_ground', 'yalla_ground.ground_id  = sleague_bookings.booking_groundcity');
		if($user_role != 1){
			$this ->db->where('yalla_ground.ground_owner_id',$user_id);
		}
		
		$this ->db->where('sleague_bookings.booking_status',0);
		$this->db->order_by("sleague_bookings.booking_id", "desc");
		
		$query= $this -> db -> get();
		//die($this->db->last_query());
		
		if($query -> num_rows() > 0)
		{
		return  $query->result();
		}
		else
		{
		return 0;
		}	   
	}
    //****************************Report Ends*************************//
    
    //************Tournament Bracket Starts****************************//
    function tournament_schedule_bracket($tourn_schedule){
        $this->db->select('t1.*,g.ground_id,g.ground_name,g.ground_city,t2_1.team_name AS team_logo1,t2_1.team_id AS team_id1,t2_2.team_name AS team_logo2,t2_2.team_id AS team_id2,');
        $this->db->from('tourn_match_schedule t1');
        $this->db->join('yalla_team t2_1', 't2_1.team_id = t1.team1', 'left');
        $this->db->join('yalla_team t2_2', 't2_2.team_id = t1.team2', 'left');
        $this->db->join('yalla_ground g', 'g.ground_id = t1.ground_id', 'left');
        $this->db->where('t1.tour_id',$tourn_schedule);
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }

    //************Tournament Bracket Ends****************************//
    
     //************Language Settings Starts****************************//
public function update_general_set_profile($data){
    $this->db->where('user_id', $data['user_id']);
    return $this->db->update('yalla_users', $data);
}

public function get_language_fields(){
    return $this->db->list_fields('language');
}
public function update_general_language($data){
    $this->db->where('user_id', $data['user_id']);
    return $this->db->update('yalla_users', $data);
}

function add_phrase_name($data)
    {
        return $this->db->insert('language', $data);
    }
	
	
	function get_phrase_language()	{
        $this -> db -> select('*');
        $this -> db -> from('language');
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }
	
	  function edit_phrase_name($data){
        $this ->db->where('phrase_id',$data['phrase_id']);		
        return $this->db->update('language', $data);
        
	
    }
    //************Language Settings Ends****************************//
    //************Push Notification Settings starts****************************//
	
	function add_smscontent_name($data)
    {
        return $this->db->insert('sms_content_field', $data);
    }
	
	
	function get_sms_content_language()	{
        $this -> db -> select('*');
        $this -> db -> from('sms_content_field');
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }
	
	
	 function edit_smscontent_name($data){
        $this ->db->where('sms_content_field_id',$data['sms_content_field_id']);		
        return $this->db->update('sms_content_field', $data);
	
    }
	
	
	//************Push Notification Settings ends****************************//
 function ground_online_booking($data_id,$data)
    {
        $this ->db->where('ground_id',$data_id);
        return $this->db->update('yalla_ground',$data);
    }

    function online_booking_not_available($data_id,$data)
    {
        $this ->db->where('ground_id',$data_id);
        return $this->db->update('yalla_ground',$data);
    }
    
    
    public function get_active_users_token(){
        $this->db->distinct("fcm_token");
        $this->db->select("fcm_token");
        $this->db->from("firebase_tokens");
		
        $result = $this->db->get();
		
        $row = $result->result_array();
		//die(print_r($row));
        return array_column($row,'fcm_token'); 
    }
    
	//************SMS Settings starts****************************//
    
    function edit_sms_setting($data)
    {
        $this ->db->where('id','1');
        return $this->db->update('sms_settings', $data);
    }
	
	
	function get_sms_settings()	{
        $this -> db -> select('*');
        $this -> db -> from('sms_settings');		
		$this->db->where('id', '1');
		
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }
    
    
    //************Payment Gateway Settings starts****************************//
	
	function edit_payment_gateway_setting($data)
    {
        $this ->db->where('id','1');
        return $this->db->update('payment_gateway_settings', $data);
    }
	
	
	function get_payment_gateway_settings()	{
        $this -> db -> select('*');
        $this -> db -> from('payment_gateway_settings');		
		$this->db->where('id', '1');
		
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }
    
	//************SMS Settings ends****************************//
	
	
	
	function edit_smtp_setting($data)
    {
        $this ->db->where('id','1');
        return $this->db->update('smtp_settings', $data);
    }
	
	
	function get_smtp_settings()	{
        $this -> db -> select('*');
        $this -> db -> from('smtp_settings');		
		$this->db->where('id', '1');
		
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }
	
	
	//************LOGO Settings starts****************************//
	
	
	function edit_logo_setting($data)
    {
        $this ->db->where('id','1');
        return $this->db->update('logo_settings', $data);
    }
	
	
	function get_logo_settings()	{
        $this -> db -> select('*');
        $this -> db -> from('logo_settings');		
		$this->db->where('id', '1');
		
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }
	function booking_payment_view($booking_id)
    {
        $this -> db -> select('sleague_bookings.*,sleague_players.player_email,sleague_players.player_mnumber');
        $this->db->from('sleague_bookings');
        $this->db->join('sleague_players', 'sleague_players.player_id  = sleague_bookings.booking_player');

       $this ->db->where('book_code',$booking_id);

        $query= $this -> db -> get();
//die(print_r($this->db->last_query()));
        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }
	
	//settings modal
	 public function get_payment_gateway_key_details(){
        $this->db->select('*');
        $this->db->from('payment_gateway_settings');
        $query = $this->db->get();
        $row = $query->row_array();
        return $row;
    }
	
	
	public function get_smtp_key_settings(){
        $this->db->select('*');
        $this->db->from('smtp_settings');
        $query = $this->db->get();
        $row = $query->row_array();
        return $row;
    }
    
     public function get_sms_key_details(){
        $this->db->select('*');
        $this->db->from('sms_settings');
        $query = $this->db->get();
        $row = $query->row_array();
        return $row;
    }
    
     public function tournament_register_delete($tour_id)
    {
        $this->db->where('tour_id',$tour_id);
        $this->db->delete('sleague_tourn_register_teams');
    }
    
     public function tournament_register_teams($tourn_id)
    {
        $this->db->select ('*');
        $this->db->from("sleague_tourn_register_teams strt");
        $this->db->join("yalla_team t","t.team_id=strt.team_id","left");
        $this->db->where('strt.tour_id',$tourn_id);
        $this->db->where('strt.status',1);
        $query= $this -> db -> get();
//die(print_r($this->db->last_query()));
        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }

     public function unregister_team($id)
    {
        $this ->db->where('id',$id);
        $this->db->delete('sleague_tourn_register_teams');
    }
	
	public function get_tourn_booking_code()
    {
        $this->db->select('*');
        $this->db->from('tourn_match_schedule');
        $this->db->order_by("book_code","desc");
        $query = $this->db->get();
        $row = $query->row_array();
        return $row;
    }
    
    public function save_current_tournament_points($data)
    {
        $this->db->insert('current_tourn_points', $data);
        return $this->db->insert_id();
    }
	
	
	public function tournament_tot_points_exixts_or_not($data){
		$this -> db -> select('*');
        $this -> db -> from('tourn_match_result');		
		$this->db->where('tour_id', $data['tour_id']);
		$this->db->where('team_id', $data['team_id']);
		$this->db->where('team_group', $data['team_group']);
        $query= $this -> db -> get();
        if($query -> num_rows() > 0)
        {
            return  $query->row();
        }
        else
        {
            return 0;
        }
	}
	
	function get_schedule_team($tour_id,$team_id){
        $this->db->select('*');
        $this->db->from('tourn_match_schedule t1');
        $this->db->where('t1.tour_id',$tour_id);
		$this->db->where('t1.team1',$team_id);
		$this->db->or_where('t1.team2',$team_id);
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }
    
    public function current_tourn_team1_points($getlist,$team_id1){
        $this->db->select('*');
        $this->db->from('current_tourn_points t1');
        $this->db->where('t1.tour_id',$getlist[0]->tour_id);
		$this->db->where('t1.team_group',$getlist[0]->groups);
        $this->db->where('t1.match_no',$getlist[0]->match_number);
		$this->db->where('t1.team_id',$team_id1);
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->row_array();
        return $row;
    }
	
	public function current_tourn_team2_points($getlist,$team_id2){
        $this->db->select('*');
        $this->db->from('current_tourn_points t1');
        $this->db->where('t1.tour_id',$getlist[0]->tour_id);
		$this->db->where('t1.team_group',$getlist[0]->groups);
        $this->db->where('t1.match_no',$getlist[0]->match_number);
		$this->db->where('t1.team_id',$team_id2);
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->row_array();
        return $row;
    }
	
	public function current_tourn_team1_points_exists_or_not($getlist,$team_id1){
        $this->db->select('*');
        $this->db->from('current_tourn_points t1');
        $this->db->where('t1.tour_id',$getlist['tour_id']);
		$this->db->where('t1.team_group',$getlist['team_group']);
        $this->db->where('t1.match_no',$getlist['match_number']);
		$this->db->where('t1.team_id',$team_id1);
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->row_array();
        return $row;
    }
	
	public function current_tourn_team2_points_exists_or_not($getlist,$team_id2){
        $this->db->select('*');
        $this->db->from('current_tourn_points t1');
        $this->db->where('t1.tour_id',$getlist['tour_id']);
		$this->db->where('t1.team_group',$getlist['team_group']);
        $this->db->where('t1.match_no',$getlist['match_number']);
		$this->db->where('t1.team_id',$team_id2);
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->row_array();
        return $row;
    }
	
	public function current_tourn_team1_points_delete($id){
        $this ->db->where('ctp_id',$id);
        $this->db->delete('current_tourn_points');
    }
    
    public function get_delete_tournament_schedule($tour_id){
        $this->db->select('t1.*');
        $this->db->from('tourn_match_schedule t1');
        $this->db->where('t1.tour_id',$tour_id);
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }
    
	/*
	Bulk Bookings module Starts
	*/
		public function bulk_booking_list($params = array())
    {
        $this -> db -> select('sleague_bulk_bookings.*,yalla_ground.ground_name,sd.size');
        $this -> db -> from('sleague_bulk_bookings');
        $this->db->join('yalla_ground', 'yalla_ground.ground_id  = sleague_bulk_bookings.booking_ground ');
        $this->db->join('sleague_ground_size_duration sd', 'sd.id  = sleague_bulk_bookings.booking_ground_size ');
        $this ->db->where('sleague_bulk_bookings.booking_status',0);
		if (!empty($params['ground_owner_id'])) {
            $this->db->where('yalla_ground.ground_owner_id', $params['ground_owner_id']);
        }
		$this->db->order_by("sleague_bulk_bookings.book_code","desc");
        $query= $this -> db -> get();
        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }
	function save_bulk_booking_details($data)
    {
        $this->db->insert('sleague_bulk_bookings', $data);
        return $this->db->insert_id();
    }
	 public function get_bulk_booking_code()
    {
        $this->db->select('*');
        $this->db->from('sleague_bulk_bookings');
        $this->db->where('booking_status', 0);
        $this->db->order_by("book_code","desc");
        $query = $this->db->get();
        $row = $query->row_array();
        return $row;
    }
	
	public function bulk_booking_delete($id){
        $this ->db->where('bulk_booking_id',$id);
        $this->db->delete('sleague_bulk_bookings');
    }
	
	function bulk_booking_view($bulk_booking_id)
    {
        $this -> db -> select('b.*,gs.size,gs.slot,gs.ground_sq_ft,gs.upto_players');
        $this -> db -> from('sleague_bulk_bookings b');
		$this->db->join('sleague_ground_size_duration gs', 'gs.id  = b.booking_ground_size','left');
        $this ->db->where('b.bulk_booking_id',$bulk_booking_id);
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }
	
	public function bulk_booking_ground_details()
    {
        $this -> db -> select('sbb.*, sbb.bulk_booking_id, sbb.booking_ground, sbb.booking_groundcity, sbb.booking_team,sbb.booking_player,sbb.booking_status,
		g.ground_id,g.ground_name,g.ground_city');
        $this -> db -> from('sleague_bulk_bookings sbb');
        $this->db->join('yalla_ground g', 'g.ground_id  = sbb.booking_ground ');

        $this ->db->where('sbb.booking_status',0);

        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }
	
	public function bulk_booking_time_slot_hours($data){
        $var = $data["dateval"];
	    $date = str_replace('/', '-', $var);
	    $dateval = date('Y-m-d', strtotime($date));
		if(!empty($data['day'])){
			$days = implode(",",$data['day']);
		}else{
			$days = date('l', strtotime($dateval));
		}
		
		$sql = "SELECT * FROM (`sleague_bulk_bookings`) WHERE booking_days REGEXP REPLACE('".$days."',',','|') 
		AND `booking_from` <= '".$dateval."' AND `booking_to` >= '".$dateval."' 
		AND `booking_ground` = '".$data['ground_id']."' 
		AND `booking_ground_size` = '".$data['ground_size']."' 
		AND `booking_status` = '0'";
		$response = $this->db->query($sql)->result();
		//die(print_r($this->db->last_query()));
        return  $response;
    }
	public function update_bulk_booking_details($data)
    {
        $bulk_booking_id = $this->input->post('bulk_booking_id');
        $this ->db->where('bulk_booking_id',$bulk_booking_id);
        return $this->db->update('sleague_bulk_bookings', $data);
    }
	/*
	Bulk Bookings module Ends
	*/
	
	public function ground_slot_details_based_size($data){
        $this -> db -> select('*');
        $this -> db -> from('sleague_ground_size_duration');
        $this->db->where('ground_id', $data['ground_id']);
        $this->db->where('id', $data['ground_size']);
        $query= $this -> db -> get();
		$row = $query->row_array();
        return $row;
    }
    /*
Version Starts
*/
	public function get_android_version($android){
        $this -> db -> select('*');
        $this -> db -> from('version');
        $this->db->where('version', $android);
        $this->db->where('del_status', 0);
        $query= $this -> db -> get();
		$row = $query->row();
        return $row;
    }
	public function get_ios_version($ios){
        $this -> db -> select('*');
        $this -> db -> from('version');
        $this->db->where('version', $ios);
        $this->db->where('del_status', 0);
        $query= $this -> db -> get();
		$row = $query->row();
        return $row;
    }
	public function update_version_feature($data){
		$this->db->where('id', $data['id']);
		return $this->db->update('version', $data);
	}
	
/*
Version Ends
*/
/*
Academy Starts
*/
    public function academy_list($params = array())
    {
        $this -> db -> select('*');
        $this -> db -> from('academy');
		$this -> db -> join('yalla_users u','academy.academy_owner_id = u.user_id','left');
        if (!empty($params['academy_owner_id'])) {
            $this->db->where('academy.academy_owner_id', $params['academy_owner_id']);
        }
        $this ->db->where('academy.del_status',0);
        $this ->db->order_by('academy.academy_id','DESC');
        $query= $this -> db -> get();
		$result = $query->result_array();
        return $result;
    }
	
	public function academy_owners()
    {
        $this -> db -> select('*');
        $this -> db -> from('yalla_users');
        $this ->db->where('user_role',3);
        $this ->db->or_where('user_role',4);
        $this ->db->where('user_status',0);
        $query= $this -> db -> get();
		$result = $query->result_array();
        return $result;
    }
	
	public function get_all_coaching_classes()
    {
        $this -> db -> select('*');
        $this -> db -> from('academy_coaching_classes');
        $this ->db->where('del_status',0);
        $this ->db->order_by('coaching_id','DESC');
        $query= $this -> db -> get();
		$result = $query->result_array();
        return $result;
    }
	
	public function save_academy($data)
    {
        $this->db->insert('academy',$data);
        // $this->db->trans_complete();
        return $this->db->insert_id();
    }
	
	public function get_academy_list($params = array())
    {
        $this -> db -> select('*');
        $this -> db -> from('academy');
        $this->db->where('academy_id', $params['academy_id']);
        $this ->db->where('del_status',0);
        $query= $this -> db -> get();
		$result = $query->row_array();
        return $result;
    }
	
	public function academy_update($data)
    {
        $this ->db->where('academy_id',$data['academy_id']);
        return $this->db->update('academy', $data);
    }
	
	public function academy_delete($academy_id,$data)
    {
        $this ->db->where('academy_id',$academy_id);
        return $this->db->update('academy',$data);
    }
	
	public function coaching_save($data){
		$this->db->insert('academy_coaching_classes',$data);
        return $this->db->insert_id();
	}
	
	public function get_coaching_class($coaching_id)
    {
        $this -> db -> select('*');
        $this -> db -> from('academy_coaching_classes');
        $this->db->where('coaching_id', $coaching_id);
        $this ->db->where('del_status',0);
        $query= $this -> db -> get();
		$result = $query->row_array();
        return $result;
    }
	
	public function coaching_update($data)
    {
        $this ->db->where('coaching_id',$data['coaching_id']);
        return $this->db->update('academy_coaching_classes',$data);
    }
	
	public function coaching_delete($data)
    {
        $this ->db->where('coaching_id',$data['coaching_id']);
        return $this->db->update('academy_coaching_classes',$data);
    }
    
    public function get_all_academy_price_list($params = array()){
        $this->db->select('ap.*,a.academy_name');
        $this->db->from('academy_price ap');
        $this->db->join('academy a','ap.academy_id = a.academy_id','left');
        if (!empty($params['academy_owner_id'])) {
            $this->db->where('a.academy_owner_id', $params['academy_owner_id']);
        }
        $this ->db->where('ap.del_status',0);
        $this ->db->where('a.del_status',0);
        $this ->db->order_by('ap.id','DESC');
        $query= $this -> db -> get();
		$result = $query->result_array();
        return $result;
    }
	
	public function academy_price_save($data)
    {
        $this->db->insert('academy_price',$data);
        // $this->db->trans_complete();
        return $this->db->insert_id();
    }
	
	public function get_academy_price_based_on_id($id){
		$this -> db -> select('*');
        $this -> db -> from('academy_price');
        $this->db->where('id', $id);
        $this ->db->where('del_status',0);
        $query= $this -> db -> get();
		$result = $query->row_array();
        return $result;
	}
	
	public function academy_price_update($data){
		$this ->db->where('id',$data['id']);
        return $this->db->update('academy_price',$data);
	}
	
	public function academy_price_delete($data)
    {
        $this ->db->where('id',$data['id']);
        $this->db->delete('academy_price');
    }
    
    public function get_age_based_on_academy_id($params = array()){
        $this->db->select('ap.*');
        $this->db->from('academy_price ap');
        $this->db->where('ap.academy_id', $params['academy_id']);
        $this ->db->where('ap.del_status',0);
        $this ->db->order_by('ap.age_limit','DESC');
        $query= $this -> db -> get();
		$result = $query->result_array();
        return $result;
    }
    
    public function academy_booking_list_all_card()
    {
        $this -> db -> select('ab.*,a.academy_id,a.academy_name,a.academy_city,a.sl_commission');
        $this -> db -> from('academy_booking ab');
        $this->db->join('academy a', 'a.academy_id  = ab.booking_academy','left' );
        $this ->db->where('ab.del_status',0);
		$this ->db->where('a.del_status',0);
		$this ->db->where('ab.payment_type','card');
		$this ->db->where('ab.payment_status',1);
        if (!empty($params['academy_owner_id'])) {
            $this->db->where('a.academy_owner_id', $params['academy_owner_id']);
        }
		$this->db->order_by("ab .book_code","desc");
        $query= $this -> db -> get();
		$result = $query->result_array();
        return $result;
    }

    public function academy_booking_list_all_cash($params = array())
    {
        $this -> db -> select('ab.*,a.academy_id,a.academy_name,a.academy_city,a.sl_commission');
        $this -> db -> from('academy_booking ab');
        $this->db->join('academy a', 'a.academy_id  = ab.booking_academy','left' );
        $this ->db->where('ab.del_status',0);
		$this ->db->where('a.del_status',0);
		$this ->db->where('ab.payment_type','cash');
        if (!empty($params['academy_owner_id'])) {
            $this->db->where('a.academy_owner_id', $params['academy_owner_id']);
        }
		$this->db->order_by("ab .book_code","desc");
        $query= $this -> db -> get();
		$result = $query->result_array();
        return $result;
    }
    
    public function academy_booking_list_all_payments($params = array())
    {
        $this -> db -> select('ab.*,a.academy_id,a.academy_name,a.academy_city,a.sl_commission');
        $this -> db -> from('academy_booking ab');
        $this->db->join('academy a', 'a.academy_id  = ab.booking_academy','left' );
        $this ->db->where('ab.del_status',0);
		$this ->db->where('a.del_status',0);
        if (!empty($params['academy_owner_id'])) {
            $this->db->where('a.academy_owner_id', $params['academy_owner_id']);
        }
		$this->db->order_by("ab .book_code","desc");
        $query= $this -> db -> get();
		$result = $query->result_array();
        return $result;
    }
	
	
	public function cancel_academy_booking($data){
        $this ->db->where('a_booking_id',$data['a_booking_id']);
        return $this->db->update('academy_booking', $data);
    }
	
	public function academy_booking_delete($id){
        $this ->db->where('a_booking_id',$id);
        $this->db->delete('academy_booking');
    }
	
	function academy_booking_view($a_booking_id)
    {
        $this ->db->select('b.*');
        $this ->db->from('academy_booking b');
        $this ->db->where('b.a_booking_id',$a_booking_id);
        $query= $this -> db -> get();
		$result = $query->row_array();
        return $result;
    }
    
	public function update_academy_booking($data){
        $this ->db->where('a_booking_id',$data['a_booking_id']);
        return $this->db->update('academy_booking', $data);
    }
    
    public function academy_booking_payment_view($booking_id)
    {
        $this -> db -> select('academy_booking.*,sleague_players.player_email,sleague_players.player_mnumber');
        $this->db->from('academy_booking');
        $this->db->join('sleague_players', 'sleague_players.player_id  = academy_booking.booking_player');

       $this ->db->where('book_code',$booking_id);
        $query= $this -> db -> get();
        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }
    
    public function academy_payment_view($a_booking_id)
    {
		$this -> db -> select('ab.*,a.academy_id,a.academy_name,a.academy_city,a.sl_commission');
        $this -> db -> from('academy_booking ab');
        $this->db->join('academy a', 'a.academy_id  = ab.booking_academy','left' );
        $this ->db->where('ab.a_booking_id',$a_booking_id);
		$this->db->order_by("ab.book_code","desc");
        $query= $this -> db -> get();
		$result = $query->row_array();
        return $result;
    }
    
    public function academy_booikng_payment_update($booking_id,$data){
        $this ->db->where('booking_code',$booking_id);
        return $this->db->update('academy_booking', $data);
    }
    
    function academy_booking_view_orderid($booking_id)
    {
        $this -> db -> select('*');
        $this -> db -> from('academy_booking');
        $this ->db->where('booking_code',$booking_id);
        $query= $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return  $query->result();
        }
        else
        {
            return 0;
        }
    }
    
    public function get_academy_owner_details_based_on_academy_id($params2){
        $this->db->select("*");
        $this->db->from("academy a");
		$this->db->join("yalla_users ys","a.academy_owner_id = ys.user_id","left");
        $this->db->where('a.del_status', 0);
        $this->db->where('a.academy_id', $params2["academy_id"]);
		$this->db->where('ys.user_role <>', 1);
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->row_array();
        return $row;
    }
	
/*
Academy Ends
*/
}