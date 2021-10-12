<?php
class user_model extends CI_Model
{
    public function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }


    public function save_user($data){
        if($this->db->insert('sleague_players', $data))
        {
            return $this->db->insert_id();
        }
        else
        {
            return false;
        }
    }
    

    public function validate_user($params)
    {
        $this->db->select("*");
        $this->db->from("sleague_players");
        $this->db->where('player_email', $params["player_email"]);
        $this->db->where('player_password', $params["player_password"]);
        $this->db->where('player_status', 0);
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->row_array();
        return $row;
    }
    
    public function save_user_exists($params){
        $this->db->select("*");
        $this->db->from("sleague_players");
        $this->db->where('player_mnumber', $params["player_mnumber"]);
        $result = $this->db->get();
        $row = $result->row_array();
        return $row;
    }
    
       public function save_user_email_exists($params){
        $this->db->select("*");
        $this->db->from("sleague_players");
        $this->db->where('player_email', $params["player_email"]);
        $result = $this->db->get();
        $row = $result->row_array();
        return $row;
    }
    
    
    public function player_profile_player_id($params){
        $this->db->select("*");
        $this->db->from("sleague_players");
        $this->db->where('player_id', $params["player_id"]);
        $result = $this->db->get();
        $row = $result->row_array();
        return $row;
    }
    
    public function player_profile_update($params){
        $this->db->where('player_id', $params['player_id']);
        return($this->db->update('sleague_players', $params));
    }
    
    public function validate_user_mobile($params){
        $this->db->select("*");
        $this->db->from("sleague_players");
        $this->db->where('player_mnumber', $params["player_mnumber"]);
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->row_array();
        return $row;
    }
    
    public function get_player_avg_rating($player_id){
        $this->db->select("AVG(rating) as rating");
        $this->db->from("player_review_rating");
        $this->db->where('player_id', $player_id);
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->row_array();
        return $row;
    }

   public function get_player_played_tournaments($team_id){
        $this->db->select('COUNT(team_id) as total_played_tourn');
        $this->db->from('sleague_tourn_register_teams');
        $this->db->where('team_id',$team_id);
        $query = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $query->row_array();
        return $row;
    }


    public function player_played_tournaments_count1($team_id){
        $this->db->select('COUNT(tourn_match_id) as total_no_tourn');
        $this->db->from('tourn_match_schedule');
        $this->db->where('team1',$team_id);
        $this->db->or_where ('team2',$team_id);
        $query = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $query->row_array();
        return $row;
    }

    public function player_played_tournaments_count2($team_id){
        $this->db->select('COUNT(booking_id) as total_no_booking');
        $this->db->from('sleague_bookings');
        $this->db->where('booking_team',$team_id);
        $query = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $query->row_array();
        return $row;
    }
    
   public function validate_email_user($params)
    {
        $this->db->select("*");
        $this->db->from("sleague_players");
        $this->db->where('player_email', $params["player_email"]);
        $this->db->where('player_status', 0);
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->row_array();
        return $row;
    }
	
	
	 public function insert_player_otp($params){
        return $this->db->insert('otp_expiry', $params);
    }
	
	
	public function validate_otp_number($params)
    {
        $this->db->select("*");
        $this->db->from("otp_expiry");
        $this->db->where('otp', $params["otp"]);
        $this->db->where('is_expired', '0');
		$this->db->where('DATE_ADD(create_at,INTERVAL 7 HOUR) >','NOW()', FALSE);
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->row_array();
        return $row;
    }
	
	
	
	  public function update_player_otp($params){
		  
		$this->db->set('is_expired',1);
	  $this->db->where('otp',$params['otp']);
	  return $this->db->update('otp_expiry');
		
    }
	
	
	 public function update_player_password($params){
        $this->db->where('player_id', $params['player_id']);
        return($this->db->update('sleague_players', $params));
    }
    
     public function player_login_status_update($params2){
        $this->db->where('player_id', $params2['player_id']);
        return($this->db->update('sleague_players', $params2));
    }
    public function update_player_logout($params2){
        $this->db->where('player_id', $params2['player_id']);
        return($this->db->update('sleague_players', $params2));
    }
	
	
	public function get_smtp_key_settings(){
        $this->db->select('*');
        $this->db->from('smtp_settings');
        $query = $this->db->get();
        $row = $query->row_array();
        return $row;
    }
    

}