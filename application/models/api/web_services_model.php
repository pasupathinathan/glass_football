<?php
class web_services_model extends CI_Model
{
    public function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }


     public function get_all_tournament_list(){
        $date = new DateTime("now");
        $curr_date = $date->format('Y-m-d');
        $this->db->select("*");
        $this->db->from("yalla_tournament");
        //$this->db->where("tour_enddate >=",$curr_date);
        $this->db->where('tour_delstatus', 0);
        $this->db->order_by('tour_id','desc');
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->result_array();
        return $row;
    }
    
    public function tournament_list_by_id($params){
       $this->db->select("*");
	    $this->db->select('DATE_FORMAT(tour.tour_startdate, "%d/%m/%Y") as tour_startdate', FALSE);
	    $this->db->select('DATE_FORMAT(tour.tour_enddate, "%d/%m/%Y") as tour_enddate', FALSE);
        $this->db->from("yalla_tournament tour");
        $this->db->join("yalla_ground g","tour.tour_groundname = g.ground_id","left");
        $this->db->where('tour.tour_id', $params["tour_id"]);
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->row_array();
        return $row;
    }
    
    public function get_ground_list(){
        $this->db->select("*");
        $this->db->from("yalla_ground");
        $this->db->where('ground_status', 0);
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->result_array();
        return $row;
    }
    
    public function get_ground_list_based_on_location($params){
        $this->db->select("*");
        $this->db->from("yalla_ground");
        $this->db->where('ground_status', 0);
        $this->db->like('ground_city', $params["city"]);
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->result_array();
        return $row;
    }
    
    public function get_ground_list_based_on_ground_id($params){
        $this->db->select("*");
        $this->db->from("yalla_ground g");
		$this->db->join("yalla_users ys","g.ground_owner_id = ys.user_id","left");
        $this->db->where('g.ground_status', 0);
        $this->db->where('g.ground_id', $params["ground_id"]);
		$this->db->where('ys.user_role <>', 1);
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->row_array();
        return $row;
    }
    
    public function get_ground_list_based_on_rating($ratings){
        $this->db->select("*");
        $this->db->from("sleague_review_rating sr");
        $this->db->join("yalla_ground sg","sr.ground_id = sg.ground_id");
        $this->db->where_in('sr.rating',$ratings);
        $this->db->where('sr.status', 0);
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->result_array();
        return $row;
    }
    
    public function get_ground_list_based_on_price($params){
        $this->db->select("*");
        $this->db->from("yalla_ground");
        $this->db->where('ground_price >=', $params['start_price']);
        $this->db->where('ground_price <=', $params['end_price']);
        $this->db->where('ground_status', 0);
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->result_array();
        return $row;
    }
    public function get_tourn_awards($award_id){
        $this->db->select("*");
		
        $this->db->from("sleague_tourn_awards ta");
        $this->db->where_in('ta.id',$award_id);
        $this->db->where('ta.del_status', 0);
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->result_array();
        return $row;
    }
    
    public function get_ground_facility($ground_facility_id){
        $this->db->select("*");
        $this->db->from("sleague_ground_facility gf");
        $this->db->where_in('gf.facility_id',$ground_facility_id);
        $this->db->where('gf.del_status', 0);
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->result_array();
        return $row;
    }
    
        public function register_tornament($data){
        if($this->db->insert('sleague_tourn_register_teams', $data))
        {
            return $this->db->insert_id();
        }
        else
        {
            return false;
        }
    }

    public function update_limit_cmplt_limit($params,$cmplt_limit){
        $this ->db->where('tour_id',$params['tour_id']);
        return $this->db->update('yalla_tournament', $cmplt_limit);
    }

    public function tournament_list_based_team_player_id($params){
        $this->db->select("tour.*");
        $this->db->from("sleague_players sp");
        $this->db->join("sleague_tourn_register_teams trt","sp.team_id = trt.team_id");
        $this->db->join("yalla_tournament tour","trt.tour_id = tour.tour_id");
        $this->db->where('sp.player_id',$params['player_id']);
        $this->db->where('sp.team_id',$params['team_id']);
        $this->db->where('sp.player_status', 0);
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->result_array();
        return $row;
    }
    public function get_first_team_match_details($team1_id){
        $this->db->select("*");
        $this->db->from("sleague_players sp");
        $this->db->where('sp.team_id',$team1_id);
        $this->db->where('sp.player_status', 0);
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->result_array();
        return $row;
    }
    public function get_second_team_match_details($team2_id){
        $this->db->select("*");
        $this->db->from("sleague_players sp");
        $this->db->where('sp.team_id',$team2_id);
        $this->db->where('sp.player_status', 0);
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->result_array();
        return $row;
    }
    
    public function show_players_based_on_team_id($params)
    {
        $this->db->select("*");
        $this->db->from("sleague_players sp");
        $this->db->where_in('sp.team_id',$params['team_id']);
        $this->db->where('sp.player_status', 0);
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->result_array();
        return $row;
    }
    
    public function get_ground_size_duration($ground_id){
        $this->db->select("*");
        $this->db->from("sleague_ground_size_duration gs");
        $this->db->where('gs.ground_id',$ground_id);
        $this->db->where('gs.del_status', 0);
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->result_array();
        return $row;
    }
    
    public function get_tournament_schedule_based_tour_id($params){
        $this->db->select('t1.*,t2_1.team_name AS team_name1,t2_1.team_logo AS team_logo1, t2_2.team_name AS team_name2,t2_2.team_logo AS team_logo2');
        $this->db->from('tourn_match_schedule t1');
        $this->db->join('yalla_team t2_1', 't2_1.team_id = t1.team1', 'left');
        $this->db->join('yalla_team t2_2', 't2_2.team_id = t1.team2', 'left');
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->result_array();
        return $row;
    }
    
    public function get_past_tournament_schedule_based_tour_id($params){
        $this->db->select('t1.*,t2_1.team_name AS team_name1,t2_1.team_logo AS team_logo1, t2_2.team_name AS team_name2,t2_2.team_logo AS team_logo2');
         $this->db->select('DATE_FORMAT(t1.date, "%d/%m/%Y") as date', FALSE);
        $this->db->from('tourn_match_schedule t1');
        $this->db->join('yalla_team t2_1', 't2_1.team_id = t1.team1', 'left');
        $this->db->join('yalla_team t2_2', 't2_2.team_id = t1.team2', 'left');
         $this->db->where('t1.tour_id',$params['tour_id']);
        $this->db->where('t1.date <',date('Y-m-d'));
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->result_array();
        return $row;
    }
    
    public function get_upcoming_tournament_schedule_based_tour_id($params){
        $this->db->select('t1.*,t2_1.team_name AS team_name1,t2_1.team_logo AS team_logo1, t2_2.team_name AS team_name2,t2_2.team_logo AS team_logo2');
        $this->db->select('DATE_FORMAT(t1.date, "%d/%m/%Y") as date', FALSE);
        $this->db->from('tourn_match_schedule t1');
        $this->db->join('yalla_team t2_1', 't2_1.team_id = t1.team1', 'left');
        $this->db->join('yalla_team t2_2', 't2_2.team_id = t1.team2', 'left');
          $this->db->where('t1.tour_id',$params['tour_id']);
        $this->db->where('t1.date >=',date('Y-m-d'));
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->result_array();
        return $row;
    }

    public function get_tournament_match_result_based_on_tour_id($params){
         $this->db->select('t1.sno as id,t1.match_no,t1.tour_id,t1.team_id,t1.team_group
		,t1.played_games,t1.points,t1.position,t1.wins,t1.loss,t1.tie,
		t1.goals_scored,t1.goals_scored_against,t1.goals_differences,t2_1.team_name');
        $this->db->from('tourn_match_result t1');
        $this->db->join('yalla_team t2_1', 't2_1.team_id = t1.team_id', 'left');
        $this->db->where('t1.tour_id',$params['tour_id']);
        $this->db->order_by('t1.sno','asc');
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->result_array();
        return $row;
    }

     public function get_first_team_match_statistics($tour_id,$team1_id){
        $this->db->select("tmr.*,team.*");
        $this->db->from("current_tourn_points tmr");
        $this->db->join('yalla_team team', 'team.team_id = tmr.team_id', 'left');
        $this->db->where('tmr.tour_id',$tour_id);
        $this->db->where('tmr.team_id',$team1_id);
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->result_array();
        return $row;
    }
    public function get_second_team_match_statistics($tour_id,$team2_id){
        $this->db->select("tmr.*,team.*");
        $this->db->from("current_tourn_points tmr");
        $this->db->join('yalla_team team', 'team.team_id = tmr.team_id', 'left');
        $this->db->where('tmr.tour_id',$tour_id);
        $this->db->where('tmr.team_id',$team2_id);
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->result_array();
        return $row;
    }

    public function get_duration_based_on_size_id($params){
        $this->db->select("*");
        $this->db->from("sleague_ground_size_duration gs");
        $this->db->where('gs.id',$params['size_id']);
        $this->db->where('gs.del_status', 0);
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->row_array();
        return $row;
    }
     
    
    
    
        /*Mayavel Coding Starts*/
    public function show_team_model($params)
    {
        $this->db->select('t.*,sp.player_id,sp.player_fname,sp.player_lname,sp.player_role,sp.team_role,sp.team_id as player_team_id');
        $this->db->from('yalla_team t');
        $this->db->join('sleague_players sp','t.captain_id = sp.player_id','left');
         $this->db->where('sp.player_id !=', $params['player_id']);
        $this->db->where('t.team_status', 0);
        $query = $this->db->get();
        $row = $query->result_array();
        return $row;
    }

    public function show_by_id_team_model($params)
    {
        $this->db->select('t.*,SUM(tmr.wins) as tourn_wins,SUM(tmr.points) as scores');
        $this->db->from('yalla_team t');
        $this->db->join('tourn_match_result tmr','t.team_id = tmr.team_id','left');
        $this->db->join('sleague_players sp','t.captain_id = sp.player_id','left');
        $this->db->where('t.team_id', $params["team_id"]);
        //$this->db->where('t.captain_id != ', $params["captain_id"]);
        $this->db->where('t.team_status', 0);
        $query = $this->db->get();
        $row = $query->row_array();
        return $row;
    }
    
    public function get_ground_list_based_on_ground_location_name($data)
   {
        $this->db->select('*');
        $this->db->from('yalla_ground');
        $this->db->where_in('ground_city',$data);
        $this->db->where('ground_status', 0);
        $query= $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $query->result_array();
        return $row;

   }
   
   public function save_team($params){
        if($this->db->insert('yalla_team', $params))
        {
            return $this->db->insert_id();
        }
        else
        {
            return false;
        }
    }
    
    public function team_name_already($data)
    {
        $this->db->select('*');
        $this->db->from('yalla_team');
        $this->db->where('team_name', $data["team_name"]);
        $this->db->where('team_status', 0);
        $query = $this->db->get();
        $row = $query->row_array();
        return $row;
    }
    
    
    public function get_team_details_based_on_team_id($result){
        $this->db->select('*');
        $this->db->from('yalla_team');
        $this->db->where('team_id', $result);
        $query = $this->db->get();
        $row = $query->row_array();
        return $row;
    }
    
    public function get_player_list()
    {
       $this->db->select('*');
       $this->db->from('sleague_players');
       $this->db->where('team_id', 0);
       $this->db->where('player_status', 0);
       $query = $this->db->get();
       $row = $query->result_array();
       return $row;
    }
    
    public function get_update_player_team_id($player_data){
        $this->db->where('player_id', $player_data['player_id']);
        $this->db->update('sleague_players', $player_data);
    }
    /*Mayavel Coding Ends*/
    
    public function show_players_forwarder_on_team_id($params){
        $this->db->select("*");
        $this->db->from("sleague_players sp");
        $this->db->where_in('sp.team_id',$params['team_id']);
        $this->db->where('sp.player_role','Forwarder');
        $this->db->where('sp.player_status', 0);
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->result_array();
        return $row;
    }
    public function show_players_mid_fielder_on_team_id($params){
        $this->db->select("*");
        $this->db->from("sleague_players sp");
        $this->db->where_in('sp.team_id',$params['team_id']);
        $this->db->where('sp.player_role','MidFielder');
        $this->db->where('sp.player_status', 0);
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->result_array();
        return $row;
    }
    public function show_players_defender_on_team_id($params){
        $this->db->select("*");
        $this->db->from("sleague_players sp");
        $this->db->where_in('sp.team_id',$params['team_id']);
        $this->db->where('sp.player_role','Defender');
        $this->db->where('sp.player_status', 0);
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->result_array();
        return $row;
    }
    public function show_players_goal_keeper_on_team_id($params){
        $this->db->select("*");
        $this->db->from("sleague_players sp");
        $this->db->where_in('sp.team_id',$params['team_id']);
        $this->db->where('sp.player_role','Goal Keeper');
        $this->db->where('sp.player_status', 0);
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->result_array();
        return $row;
    }
    
     public function get_ground_city(){
        $this->db->select("yalla_ground.ground_city");
        $this->db->from("yalla_ground");
        $this->db->where('ground_status', 0);
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->result_array();
        return $row;
    }
    
      public function get_ground_rating_based_on_ground_id($ground_id){
        $this->db->select("AVG(rating) as rating");
        $this->db->from("sleague_review_rating");
        $this->db->where('status', 0);
        $this->db->where('ground_id', $ground_id);
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->row_array();
        return $row;
    }
    
    public function get_ground_start_price($ground_id){
        $query = $this->db->query('SELECT t.* FROM sleague_ground_size_duration t
JOIN 
( SELECT ground_id, MIN(after_discount_ground_price) minVal
  FROM sleague_ground_size_duration where del_status = 0 GROUP BY ground_id
) t2
ON t.after_discount_ground_price = t2.minVal AND t.ground_id = t2.ground_id WHERE t.ground_id = "'.$ground_id.'" AND t.del_status = 0');
        $row = $query->row_array();

//        $this->db->select("MIN(ground_price) as ground_price,ground_discount");
//        $this->db->from("sleague_ground_size_duration");
//        $this->db->where('del_status', 0);
//        $this->db->where('ground_id', $ground_id);
//        $result = $this->db->get();
//die(print_r($this->db->last_query()));
//        $row = $result->row_array();
        return $row;
    }
    
  
    
     public function tournament_team_limit($data){
        $this->db->select("count(team_id) as total_palyers");
        $this->db->from("sleague_players");
        $this->db->where('team_id',$data['team_id']);
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->row_array();
        return $row;
    }
    
    public function player_evaluation($params){

      if($this->db->insert('player_review_rating', $params))
      {
          return $this->db->insert_id();
      }
      else
      {
          return false;
      }
      }
      
      public function ground_hour_details($data)
    {
		
		$var = $data["booking_date"];
		$date = str_replace('/', '-', $var);
		$dayval = date('Y-m-d', strtotime($date));
		$timestamp = strtotime($dayval);
		$dayvalue = date('l', $timestamp);


        $this->db->select('*');
        $this->db->from('ground_working_hours');
        $this->db->where('ground_id', $data["ground_id"]);
         $this->db->where('day_value', $dayvalue);
        $query = $this->db->get();
        $row = $query->row_array();
        return $row;
    }
    
    public function get_tour_team_limit($data)
    {
      $this->db->select("tour_playerlimit");
      $this->db->from("yalla_tournament");
      $this->db->where('tour_id',$data['tour_id']);
      $result = $this->db->get();
      //die(print_r($this->db->last_query()));
      $row = $result->row_array();
      return $row;
    }
    
    
    public function upcoming_tournament_list_based_team_player_id($params){
		$tdydate = date("Y-m-d");
        $this->db->select("tour.*");
        $this->db->from("sleague_players sp");
        $this->db->join("sleague_tourn_register_teams trt","sp.team_id = trt.team_id");
        $this->db->join("yalla_tournament tour","trt.tour_id = tour.tour_id");
        $this->db->where('tour.tour_enddate >=',$tdydate);
        $this->db->where('sp.player_id',$params['player_id']);
        $this->db->where('sp.team_id',$params['team_id']);
        $this->db->where('sp.player_status', 0);
		$this->db->order_by("tour.tour_id", "DESC");
        $result = $this->db->get();
       // die(print_r($this->db->last_query()));
        $row = $result->result_array();
        return $row;
    }
	
	public function past_tournament_list_based_team_player_id($params){
		$tdydate = date("Y-m-d");
        $this->db->select("tour.*");
        $this->db->from("sleague_players sp");
        $this->db->join("sleague_tourn_register_teams trt","sp.team_id = trt.team_id");
        $this->db->join("yalla_tournament tour","trt.tour_id = tour.tour_id");
        $this->db->where('tour.tour_enddate <=',$tdydate);
        $this->db->where('sp.player_id',$params['player_id']);
        $this->db->where('sp.team_id',$params['team_id']);
        $this->db->where('sp.player_status', 0);
		$this->db->order_by("tour.tour_id", "DESC");
        $result = $this->db->get();
        $row = $result->result_array();
        return $row;
    }
	
	
	public function get_player_teamname($params)
    {
        $this->db->select('*');
        $this->db->from('yalla_team');
        $this->db->where('team_id', $params['team_id']);
         $this->db->where('team_status', 0);
        $query = $this->db->get();
		//die(print_r($this->db->last_query()));
        $row = $query->row_array();
        return $row;
    }
	
	
	
	
public function get_players_mobilenumber($params)
    {
        $this->db->select('player_mnumber');
        $this->db->from('sleague_players');
        $this->db->where_in('player_id', $params['player_id']);
         $this->db->where('player_status', 0);
        $query = $this->db->get();
        $row = $query->result_array();
        return $row;
    }
	
	
	public function get_player_captainname($params)
    {
        $this->db->select('*');
        $this->db->from('sleague_players');
         $this->db->where('team_id', $params['team_id']);
         $this->db->where('player_status', 0);
         $this->db->where('team_role', 'Captain');
        $query = $this->db->get();
        $row = $query->row_array();
        return $row;
    }
    
    public function display_ground_filter($params){
        $this->db->select("sp.*");
        $this->db->from("yalla_ground sp");
        $this->db->join("sleague_review_rating trt","sp.ground_id = trt.ground_id",'left');
        $this->db->join("sleague_ground_size_duration tour","sp.ground_id = tour.ground_id",'left');
        if (!empty($params['min_price'])) {
            $this->db->where('tour.ground_price >=',$params['min_price']);
        }
        if (!empty($params['max_price'])) {
            $this->db->where('tour.ground_price <=',$params['max_price']);
        }
        if (!empty($params['rating_filter'])) {
            $this->db->where('trt.rating',$params['rating_filter']);
        }
        $this->db->where('sp.ground_status', 0);
        $this->db->group_by('sp.ground_id');
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->result_array();
        return $row;
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
	return $this->db->insert('sleague_bookings', $data);
	}
	
	public function delete_player($params)
	{
	  $this->db->set('team_id',0);
	  $this->db->set('team_role','');
	  $this->db->where('team_id',$params['team_id']);
	  return $this->db->update('sleague_players');
	}
	
	public function delete_team($params)
	{
	  $this->db->where('team_id',$params['team_id']);
	  $this->db->delete('yalla_team');
	}
	
/*	public function delete_team($params)
	{
	   $this->db->set('team_status',0);
	  $this->db->where('team_id',$params['team_id']);
	  return $this->db->update('yalla_team');
	}
	*/
	
	public function check_team_exist($params)
	{
	    $this->db->select("*");
	    $this->db->from("sleague_tourn_register_teams");
	    $this->db->where('team_id',$params['team_id']);
	    $result = $this->db->get();
	    //die(print_r($this->db->last_query()));
	    $row = $result->row_array();
	    return $row;
	}
	
	public function get_team_rating_based_on_team_id($team_id){
        $this->db->select("AVG(team_rating) as rating");
        $this->db->from("sleague_team_rating");
        $this->db->where('team_id', $team_id);
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->row_array();
        return $row;
       }
       
       public function count_booking_team($params)
   {
   $this->db->select('booking_player, COUNT(booking_player) as booking_total');
   $this->db->from('sleague_bookings');
   $this->db->where('booking_player',$params["booking_player"]);
   $this->db->where('booking_approval','0');
  $this->db->where('booking_status','0');
   $this->db->group_by('booking_team');
   $query = $this->db->get();
   //die(print_r($this->db->last_query()));
   $row = $query->row_array();
   return $row;
   }
   
    public function get_sorting_price_low_details(){
        $this->db->select("sp.*");
        $this->db->from("yalla_ground sp");
        $this->db->join("sleague_ground_size_duration sgp","sgp.ground_id = sp.ground_id",'left');
        $this->db->where('sp.ground_status', 0);
        $this->db->group_by('sp.ground_id');
        $this->db->order_by("sgp.ground_price", "asc");
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->result_array();
        return $row;
    }


    public function get_sorting_price_high_details(){
        $this->db->select("sp.*");
        $this->db->from("yalla_ground sp");
        $this->db->join("sleague_ground_size_duration sgp","sp.ground_id = sgp.ground_id",'left');
        $this->db->where('sp.ground_status', 0);
        $this->db->group_by('sp.ground_id');
        $this->db->order_by("sgp.ground_price", "desc");
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->result_array();
        return $row;
    }

    public function get_ground_low_price(){
        $query = $this->db->query('SELECT t.id,t.ground_id,t.ground_price as g_price,t.ground_discount as g_discount,
		t.size,t.slot,t.after_discount_ground_price,
		g.* FROM sleague_ground_size_duration t
		JOIN yalla_ground g ON t.ground_id = g.ground_id
		JOIN 
		( SELECT ground_id, MIN(after_discount_ground_price) minVal
			FROM sleague_ground_size_duration GROUP BY ground_id
		) t2
		ON t.after_discount_ground_price = t2.minVal AND t.ground_id = t2.ground_id WHERE t.del_status = 0
		AND g.ground_status = 0 GROUP BY t.ground_id
		ORDER BY t.after_discount_ground_price ASC');
        $row = $query->result_array();
		//die(print_r($this->db->last_query()));
        return $row;
    }

    public function get_ground_high_price(){
        $query = $this->db->query('SELECT t.id,t.ground_id,t.ground_price as g_price,t.ground_discount as g_discount,
		t.size,t.slot,t.ground_sq_ft,t.after_discount_ground_price,t.upto_players,
		g.* FROM sleague_ground_size_duration t
		JOIN yalla_ground g ON t.ground_id = g.ground_id
		JOIN 
		( SELECT ground_id, MIN(after_discount_ground_price) minVal
		FROM sleague_ground_size_duration GROUP BY ground_id
		) t2
		ON t.after_discount_ground_price = t2.minVal AND t.ground_id = t2.ground_id WHERE t.del_status = 0 
		AND g.ground_status = 0 GROUP BY t.ground_id
		ORDER BY t.after_discount_ground_price DESC');
        //die(print_r($this->db->last_query()));
        $row = $query->result_array();
        return $row;
    }

    public function player_team_exit($params)
    {
        $this->db->set('team_id',0);
        $this->db->where('player_id',$params['player_id']);
        return($this->db->update('sleague_players'));
    }
    
    public function player_team_noti_exit($params){
        $this->db->where('player_id',$params['player_id']);
        $this->db->delete('sl_add_team_notification');
    }
    
    public function player_join_team_noti_exit($params){
        $this->db->where('player_id',$params['player_id']);
        $this->db->delete('join_team_notification');
    }

    public function get_ground_rating_based_popularity($ground_id)
    {
        $this->db->select("rr.rating as ground_rating");
        $this->db->from("sleague_review_rating rr");
        $this->db->where('rr.status', 0);
        $this->db->where('rr.ground_id', $ground_id);
        $this->db->order_by("rr.rating", "desc");
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->row_array();
        return $row;
    }

    public function get_ground_price_based_on_ground_id($ground_id){
        $query = $this->db->query('SELECT t.* FROM sleague_ground_size_duration t
JOIN 
( SELECT ground_id, MIN(after_discount_ground_price) minVal
  FROM sleague_ground_size_duration GROUP BY ground_id
) t2
ON t.after_discount_ground_price = t2.minVal AND t.ground_id = t2.ground_id WHERE t.ground_id = "'.$ground_id.'" AND t.del_status = 0');
        $row = $query->row_array();
        return $row;
    }

    public function get_sorting_rating_high_details(){
        $this->db->select("sp.*");
        $this->db->from("yalla_ground sp");
        $this->db->join("sleague_review_rating sgp","sp.ground_id = sgp.ground_id",'left');
        $this->db->where('sp.ground_status', 0);
        $this->db->group_by('sp.ground_id');
        $this->db->order_by("sgp.rating", "desc");
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->result_array();
        return $row;
    }
    
    public function save_team_rating($data){
        if($this->db->insert('sleague_team_rating', $data))
        {
            return $this->db->insert_id();
        }
        else
        {
            return false;
        }
    }
    
    public function team_exist_tour($data){
      $this->db->select("tour_id,team_id");
      $this->db->from("sleague_tourn_register_teams");
      $this->db->where('tour_id',$data['tour_id']);
      $this->db->where('team_id',$data['team_id']);
      $this->db->where('status',1);
      $result = $this->db->get();
      //die(print_r($this->db->last_query()));
      $row = $result->num_rows();
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
    
public function nearest_ground($params){
        $this->db->select("*,( 6371 * acos(
            cos(radians('".$params["ground_lat"]."')) * cos(radians(ground_lat)) * cos(radians(ground_long) - radians('".$params["ground_long"]."')) +
            sin(radians('".$params["ground_lat"]."')) * sin(radians(ground_lat))
            ) ) AS distance");
        $this->db->from("yalla_ground");
        //$this->db->having("distance < 10");
        $this->db->where('ground_status', 0);
        $this->db->order_by("distance", "ASC");
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->result_array();
        return $row;

    }
    
public function booking_history_past_based_on_player_id($params){
        $this->db->select("s.*,g.ground_name,g.ground_lat,g.ground_long,d.size,p.tracking_id");
        $this->db->select('DATE_FORMAT(s.booking_sdate, "%d/%m/%Y") as booking_date', FALSE);
        $this->db->from("sleague_bookings s");
        $this->db->join('yalla_ground g','s.booking_ground = g.ground_id','left');
        $this->db->join('sleague_ground_size_duration d','s.booking_ground_size = d.id','left');
        $this->db->join('sleague_payments p','s.booking_code = p.booking_id','left');
        $this->db->where('s.booking_player',$params['player_id']);
        $this->db->where('s.booking_approval',0);
		$this->db->where('s.booking_sdate <',date('Y-m-d'));
		$where = '((s.booking_paymenttype="card" and s.payment_status = "1") or s.booking_paymenttype="cash")';
		$this->db->where($where);
         $this->db->where('s.booking_status',0);
         $this->db->where('p.cancel_status',0);
		 $this->db->order_by("s.book_code", "DESC");
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->result_array();
        return $row;
    }
	
	public function booking_history_upcomin_based_on_player_id($params){
        $this->db->select("s.*,g.ground_name,g.ground_lat,g.ground_long,d.size,p.tracking_id");
        $this->db->select('DATE_FORMAT(s.booking_sdate, "%d/%m/%Y") as booking_date', FALSE);
        $this->db->from("sleague_bookings s");
        $this->db->join('yalla_ground g','s.booking_ground = g.ground_id','left');
        $this->db->join('sleague_ground_size_duration d','s.booking_ground_size = d.id','left');
        $this->db->join('sleague_payments p','s.booking_code = p.booking_id','left');
        $this->db->where('s.booking_player',$params['player_id']);
		$this->db->where('s.booking_sdate >=',date('Y-m-d'));
		$where = '((s.booking_paymenttype="card" and s.payment_status = "1") or s.booking_paymenttype="cash")';
		$this->db->where($where);
        $this->db->where('s.booking_approval',0);
         $this->db->where('s.booking_status',0);
         $this->db->where('p.cancel_status',0);
		 $this->db->order_by("s.book_code", "DESC");
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->result_array();
        return $row;
    }
    
    public function get_ground_ration_based_on_id($params){
	    $this->db->select('*');
	    $this->db->from('sleague_review_rating');
	    $this->db->where('player_id',$params['player_id']);
	    $this->db->where('ground_id',$params['ground_id']);
	    $this->db->where('status',0);
	    $result= $this->db->get();
	    $row = $result->row_array();
	    return $row;
    }
    
    public function save_ground_rating($data){
        if($this->db->insert('sleague_review_rating', $data))
        {
            return $this->db->insert_id();
        }
        else
        {
            return false;
        }
    }
    public function update_ground_rating($data){
        $this->db->where('player_id', $data['player_id']);
        $this->db->where('ground_id', $data['ground_id']);
        return $this->db->update('sleague_review_rating', $data);
    }
    
     public function save_add_team_notification($data){
        if($this->db->insert('sl_add_team_notification', $data))
        {
            return $this->db->insert_id();
        }
        else
        {
            return false;
        }
    }
	
	public function add_team_request_exists_or_not($data){
        $this->db->select("*");
        $this->db->from("sl_add_team_notification s");
        $this->db->where('s.player_id',$data['player_id']);
		$this->db->where('s.team_id',$data['team_id']);
        $this->db->where('s.noti_status',0);
        $this->db->order_by("s.at_noti_id","desc");
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->row_array();
        return $row;
    }

    public function get_add_player_notification_based_player_id($params){
        $this->db->select("*");
        $this->db->from("sl_add_team_notification s");
        $this->db->join('yalla_team t','t.team_id = s.team_id','left');
        $this->db->where('s.player_id',$params['player_id']);
        $this->db->where('s.noti_status',0);
		$this->db->where('t.team_status',0);
        $this->db->order_by("s.at_noti_id","desc");
        $this->db->group_by('s.team_id');
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->result_array();
        return $row;
    }

   public function add_player_accepted($params)
    {
        $this->db->where('at_noti_id', $params['at_noti_id']);
        $this->db->where('player_id', $params['player_id']);
        $this->db->where('team_id', $params['team_id']);
        $this->db->update('sl_add_team_notification', $params);
    }
    
     public function added_player_in_current_team($params2){
        $this->db->where('player_id', $params2['player_id']);
        $this->db->update('sleague_players', $params2);
    }
    
     public function save_join_team_notification($data){
        if($this->db->insert('join_team_notification', $data))
        {
            return $this->db->insert_id();
        }
        else
        {
            return false;
        }
    }
	
	public function join_team_exists_or_not($params){
		$this->db->select('*');
        $this->db->from('join_team_notification');
        $this->db->where('team_id', $params['team_id']);
		$this->db->where('player_id', $params['player_id']);
		$this->db->where('captain_id', $params['captain_id']);
        $this->db->where('jt_noti_status', 0);
        $query = $this->db->get();
        $row = $query->row_array();
        return $row;
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

    public function get_join_team_notification_based_player_id($params){
        $this->db->select("*");
        $this->db->from("join_team_notification jt");
        $this->db->join('sleague_players p','p.player_id = jt.player_id','left');
        $this->db->where('jt.captain_id',$params['captain_id']);
        $this->db->where('jt.team_id',$params['team_id']);
        $this->db->where('jt.jt_noti_status',0);
		$this->db->where('p.player_status',0);
        $this->db->order_by('jt.jt_noti_status','desc');
        $this->db->group_by('jt.player_id');
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->result_array();
        return $row;
    }

    public function join_team_player_accepted($params)
    {
        $this->db->where('jt_noti_id', $params['jt_noti_id']);
        $this->db->where('player_id', $params['player_id']);
        $this->db->where('team_id', $params['team_id']);
        $this->db->update('join_team_notification', $params);
    }

    public function join_team_player_in_current_team($params2){
        $this->db->where('player_id', $params2['player_id']);
        $this->db->update('sleague_players', $params2);
    }
    
        public function get_players_captainmobile($params)
    {
        $this->db->select('*');
        $this->db->from('sleague_players');
        $this->db->where('team_id', $params['team_id']);
        $this->db->where('player_id', $params['captain_id']);
        $this->db->where('player_status', 0);
        $this->db->where('team_role', 'Captain');
        $query = $this->db->get();
        $row = $query->row_array();
        return $row;
    }
    
        public function save_friendly_game_notification($data){
        if($this->db->insert('invite_friendly_game', $data))
        {
            return $this->db->insert_id();
        }
        else
        {
            return false;
        }
    }
	
	public function friendly_game_exists_or_not($params){
	    $this->db->select('*');
        $this->db->from('invite_friendly_game');
        $this->db->where('res_captain_id', $params['res_captain_id']);
        $this->db->where('res_team_id', $params['res_team_id']);
		$this->db->where('req_team_id', $params['req_team_id']);
        $this->db->where('res_status', 0);
        $query = $this->db->get();
        $row = $query->row_array();
        return $row;
	}
	
    public function get_response_team_details($params)
    {
        $this->db->select('*');
        $this->db->from('sleague_players');
        $this->db->where('player_id', $params['res_captain_id']);
        $this->db->where('team_id', $params['res_team_id']);
        $this->db->where('team_role', 'Captain');
        $this->db->where('player_status', 0);
        $query = $this->db->get();
        $row = $query->row_array();
        return $row;
    }
    public function get_req_team_name($params)
    {
        $this->db->select('*');
        $this->db->from('yalla_team');
        $this->db->where('team_id', $params['req_team_id']);
        $this->db->where('team_status', 0);
        $query = $this->db->get();
        $row = $query->row_array();
        return $row;
    }

    public function get_friendly_game_notification_based_captain_id($params){
        $this->db->select("*");
        $this->db->from("invite_friendly_game ifg");
        $this->db->join('yalla_team t','t.team_id = ifg.req_team_id','left');
        $this->db->where('ifg.res_team_id',$params['res_team_id']);
        $this->db->where('ifg.res_captain_id',$params['res_captain_id']);
        $this->db->where('ifg.res_status',0);
		$this->db->where('t.team_status',0);
        $this->db->order_by('ifg.if_game_id','desc');
        $this->db->group_by('ifg.req_team_id');
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->result_array();
        return $row;
    }

    public function invice_friendly_game_accepted($params){
        $this->db->where('if_game_id', $params['if_game_id']);
        $this->db->update('invite_friendly_game', $params);
    }
    
        /*Split Payment starts*/
    public function save_split_payment_notification($data){
        if($this->db->insert('sl_split_payment', $data))
        {
            return $this->db->insert_id();
        }
        else
        {
            return false;
        }
    }

    public function get_amount_spliter_name($params){
        $this->db->select('*');
        $this->db->from('sleague_players');
        $this->db->where('player_id', $params['amount_spliter_id']);
        $this->db->where('player_status', 0);
        $query = $this->db->get();
        $row = $query->row_array();
        return $row;
    }
    public function get_sp_player_mobilenumber($params)
    {
        $this->db->select('player_mnumber');
        $this->db->from('sleague_players');
        $this->db->where_in('player_id', $params['sp_player_id']);
        $this->db->where('player_status', 0);
        $query = $this->db->get();
        $row = $query->result_array();
        return $row;
    }
    public function get_split_payment_notification_based_player_id($params){
        $this->db->select("*");
        $this->db->from("sl_split_payment sp");
        $this->db->join('sleague_players p','p.player_id = sp.amount_spliter_id','left');
        $this->db->where('sp.sp_player_id',$params['player_id']);
        $this->db->where('sp.sp_status',0);
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->result_array();
        return $row;
    }
    public function split_payment_accepted($params){
        $this->db->where('sp_id', $params['sp_id']);
        $this->db->update('sl_split_payment', $params);
    }

    /*Split Payment ends*/
    
	public function ground_hour_detail_based_bookings($params){
	    $var = $params["booking_date"];
	    $date = str_replace('/', '-', $var);
	    $dateval = date('Y-m-d', strtotime($date));
	    $this->db->select('booking_time,booking_id,created_at,booking_paymenttype,payment_status,booking_code');
	    $this->db->from('sleague_bookings');
	    $this->db->where('booking_sdate', $dateval);
	    $this->db->where('booking_ground', $params['ground_id']);
	    $this->db->where('booking_ground_size', $params['ground_size_id']);
        $this->db->where('booking_status', '0');
        $this->db->where('booking_approval', '0');
	    $result = $this->db->get();
	    //die(print_r($this->db->last_query()));
	    $row = $result->result_array();
	    return $row;
	}
	
	
	  public function save_payment_details($data)
    {
        return $this->db->insert('sleague_payments', $data);
    }
	 
 public function get_captain_details($params)
    {
        $this->db->select('*');
        $this->db->from('sleague_players');
        $this->db->where('team_id', $params['team_id']);
        $this->db->where('player_status', 0);
        $this->db->where('team_role', 'Captain');
        $query = $this->db->get();
        $row = $query->row_array();
        return $row;
    }
    
    /*Cancel booking starts*/
     public function cancel_booking_by_player($params){
        $this->db->where('booking_id', $params['booking_id']);
        return($this->db->update('sleague_bookings', $params));
    }
	
	
	function payment_cancel_update($booking_id,$data){
        $this ->db->where('booking_id',$booking_id);
        return $this->db->update('sleague_payments', $data);
    }

	
	 function booking_view($booking_id)
    {
        $this -> db -> select('*');
        $this -> db -> from('sleague_bookings');
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

    /*Cancel booking ends*/
     public function show_friendly_games_count_on_team_id($params){
        $this->db->select('t.*,COUNT(t.if_game_id) as friendly_count');
        $this->db->from('invite_friendly_game t');
        $this->db->where('t.req_team_id', $params["team_id"]);
        $this->db->where('t.res_status', 1);
        $query = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $query->row_array();
        return $row;
    }
    
    /* Add Firebase Token */
    public function insert_firebase_token($params)
    {
        return $this->db->insert('firebase_tokens', $params);
    }

    /* Update Firebase Token */
    public function update_firebase_token($params)
    {
        $this->db->where('user_id', $params['user_id']);
        return($this->db->update('firebase_tokens', $params));
    }
    
    /** Check if users already has a token ***/
    public function check_token_exist_for_user($user_id)
    {
        $this->db->select("*");
        $this->db->from("firebase_tokens");
        $this->db->where('user_id', $user_id);
        $result = $this->db->get();
        $row = $result->row();
        return $row;
    }
    
    /** Get User Device Token ***/
    public function get_user_device_token($ids)
    {
        $this->db->select("ft.fcm_token");
        $this->db->from("firebase_tokens ft");
        $this->db->join('sleague_players p','p.player_id = ft.user_id','left');
        $this->db->where_in('ft.user_id',$ids);
        $this->db->where('p.login_status', 0);
        $result = $this->db->get();
        $row = $result->result_array();
        return array_column($row,'fcm_token'); 
    }
    
    /*** Get active user tokens ***/
    
    public function get_active_users_token(){
        $this->db->distinct("fcm_token");
        $this->db->select("fcm_token");
        $this->db->from("firebase_tokens");
        $result = $this->db->get();
        $row = $result->result_array();
        return array_column($row,'fcm_token'); 
    }
	
	  /*Sms Settings*/
    public function get_sms_key_details(){
        $this->db->select('*');
        $this->db->from('sms_settings');
        $query = $this->db->get();
        $row = $query->row_array();
        return $row;
    }
	
	 public function get_smtp_key_details(){
        $this->db->select('*');
        $this->db->from('smtp_settings');
        $query = $this->db->get();
        $row = $query->row_array();
        return $row;
    }
    
    	    /*Booking delete starts*/
    public function ground_booking_delete($bking_id)
    {
        $this->db->where('booking_id',$bking_id);
        $this->db->delete('sleague_bookings');
    }
    public function ground_payment_delete($booking_code)
    {
        $this->db->where('booking_id',$booking_code);
        $this->db->delete('sleague_payments');
    }
    /*Booking delete ends*/
    
    /*Notification Count Starts*/
public function get_add_player_notification_count($params1){
    $this->db->select("*");
    $this->db->from("sl_add_team_notification s");
    $this->db->join('yalla_team t','t.team_id = s.team_id','left');
    $this->db->where('s.player_id',$params1['player_id']);
    $this->db->where('s.noti_status',0);
    $this->db->where('s.notification_status',0);
    $this->db->where('t.team_status',0);
    $this->db->order_by("s.at_noti_id","desc");
    $this->db->group_by('s.team_id');
    $result = $this->db->get();
    //die(print_r($this->db->last_query()));
    $cnt = $result->num_rows();
        if(empty($cnt)){
            return 0;
        }else{
            return $cnt;
        }
}
    public function get_join_team_notification_count($params2){
        $this->db->select("*");
        $this->db->from("join_team_notification jt");
        $this->db->join('sleague_players p','p.player_id = jt.player_id','left');
        $this->db->where('jt.captain_id',$params2['captain_id']);
        $this->db->where('jt.team_id',$params2['team_id']);
        $this->db->where('jt.jt_noti_status',0);
        $this->db->where('jt.notification_status',0);
        $this->db->where('p.player_status',0);
        $this->db->order_by('jt.jt_noti_status','desc');
        $this->db->group_by('jt.player_id');
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $cnt = $result->num_rows();
        if(empty($cnt)){
            return 0;
        }else{
            return $cnt;
        }
    }

    public function get_friendly_game_notification_count($params){
        $this->db->select("*");
        $this->db->from("invite_friendly_game ifg");
        $this->db->join('yalla_team t','t.team_id = ifg.req_team_id','left');
        $this->db->where('ifg.res_team_id',$params['res_team_id']);
        $this->db->where('ifg.res_captain_id',$params['res_captain_id']);
        $this->db->where('ifg.res_status',0);
        $this->db->where('ifg.notification_status',0);
        $this->db->where('t.team_status',0);
        $this->db->order_by('ifg.if_game_id','desc');
        $this->db->group_by('ifg.req_team_id');
        $result = $this->db->get();
        $cnt = $result->num_rows();
        if(empty($cnt)){
            return 0;
        }else{
            return $cnt;
        }

    }
    
    public function update_add_player_notification_status($params,$data){
        $this->db->where_in('at_noti_id', $params['at_noti_id']);
        return($this->db->update('sl_add_team_notification', $data));
    }
    public function update_join_team_notification_status($params,$data){
        $this->db->where_in('jt_noti_id', $params['jt_noti_id']);
        return($this->db->update('join_team_notification', $data));
    }
    public function update_friendly_game_notification_status($params,$data){
        $this->db->where_in('if_game_id', $params['if_game_id']);
        return($this->db->update('invite_friendly_game', $data));
    }
/*Notification Count Ends*/

public function get_player_team_size($params2){
        $this->db->select("count(at_noti_id) as total_player");
        $this->db->from("sl_add_team_notification");
        $this->db->where('team_id',$params2['team_id']);
        $this->db->where('noti_status',1);
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->row_array();
        return $row;
    }

    public function get_team_size($params2){
        $this->db->select("team_size");
        $this->db->from("yalla_team");
        $this->db->where('team_id',$params2['team_id']);
        $this->db->where('team_status',0);
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->row_array();
        return $row;
    }
    
    public function get_join_team_size($params2){
        $this->db->select("count(jt_noti_id) as total_player");
        $this->db->from("join_team_notification");
        $this->db->where('team_id',$params2['team_id']);
        $this->db->where('jt_noti_status',1);
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->row_array();
        return $row;
    }
    
    public function tournament_schedule_goals_based_tour_id($params){
        $this->db->select('t1.*,t2_1.team_name AS team_name1,t2_2.team_name AS team_name2');
        $this->db->from('tourn_match_schedule t1');
        $this->db->join('yalla_team t2_1', 't2_1.team_id = t1.team1', 'left');
        $this->db->join('yalla_team t2_2', 't2_2.team_id = t1.team2', 'left');
		$this->db->where('t1.tour_id',$params['tour_id']);
		$this->db->order_by("t1.date ASC, t1.time ASC");
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->result_array();
        return $row;
    }
	
	public function current_tourn_teams_points($row,$menus){
        $this->db->select('*');
        $this->db->from('current_tourn_points t1');
        $this->db->where('t1.tour_id',$row['tour_id']);
        $this->db->where('t1.match_no',$row['match_number']);
		$this->db->where_in('t1.team_id',$menus);
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->result_array();
        return $row;
    }
    
    public function get_tournament_total_points_based_on_tour_id($params){
        $this->db->select('t1.*,t2_1.team_name');
        $this->db->from('tourn_match_result t1');
        $this->db->join('yalla_team t2_1', 't2_1.team_id = t1.team_id', 'left');
        $this->db->where('t1.tour_id',$params['tour_id']);
        $this->db->order_by('t1.points DESC,t1.goals_differences DESC');
        $result = $this->db->get();
        $row = $result->result_array();
        return $row;
    }
    
     public function live_tournament_schedule_goals_based_tour_id(){
        $this->db->select('t1.*,t2_1.team_name AS team_name1,t2_2.team_name AS team_name2');
        $this->db->from('tourn_match_schedule t1');
        $this->db->join('yalla_team t2_1', 't2_1.team_id = t1.team1', 'left');
        $this->db->join('yalla_team t2_2', 't2_2.team_id = t1.team2', 'left');
		$this->db->order_by("t1.date", "DESC");
		$this->db->limit(5);
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->result_array();
        return $row;
    }
    
   public function get_winning_team_details($params){
		$date = new DateTime("now");
        $curr_date = $date->format('Y-m-d');
        $this->db->select('t1.*,t2.*');
        $this->db->from('tourn_match_result t1');
        $this->db->join('yalla_team t2', 't2.team_id = t1.team_id', 'left');
		$this->db->join('yalla_tournament tour', 'tour.tour_id = t1.tour_id', 'left');
        $this->db->where('t1.tour_id',$params['tour_id']);
        $this->db->where('t1.team_group','Finals');
        $this->db->where('t1.wins', 1);
		$this->db->where("tour.tour_enddate <",$curr_date);
		$this->db->group_by('t1.tour_id'); 
		//$this->db->order_by('MAX(t1.points)', 'desc');
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->row_array();
        return $row;
    }
    
    public function bulk_ground_hour_detail_based_bookings($params){
	    $var = $params["booking_date"];
	    $date = str_replace('/', '-', $var);
	    $dateval = date('Y-m-d', strtotime($date));
	    $this->db->select('booking_time,bulk_booking_id,created_at,booking_code');
	    $this->db->from('sleague_bulk_bookings');
	    $this->db->where('booking_from <=', $dateval);
		$this->db->where("booking_to >=",$dateval);
	    $this->db->where('booking_ground', $params['ground_id']);
	    $this->db->where('booking_ground_size', $params['ground_size_id']);
        $this->db->where('booking_status', '0');
	    $result = $this->db->get();
	    //die(print_r($this->db->last_query()));
	    $row = $result->result_array();
	    return $row;
    }
    
    public function ground_slot_details_based_size($params){
        $this -> db -> select('*');
        $this -> db -> from('sleague_ground_size_duration');
        $this->db->where('ground_id', $params['ground_id']);
        $this->db->where('id', $params['ground_size_id']);
        $query= $this -> db -> get();
		$row = $query->row_array();
        return $row;
    }
    
    /*Team update starts*/
	public function team_update($params){
        $this->db->where('team_id', $params['team_id']);
        return($this->db->update('yalla_team', $params));
    }
	
	public function get_team_based_on_team_id($params){
        $this->db->select("*");
        $this->db->from("yalla_team");
        $this->db->where('team_id', $params["team_id"]);
        $result = $this->db->get();
        $row = $result->row_array();
        return $row;
    }
	/*Team update ends*/
	public function app_update_version(){
        $this->db->select("*");
        $this->db->from("version");
        $result = $this->db->get();
        $row = $result->result_array();
        return $row;
    }
    
    public function get_all_academy_details(){
        $this->db->select("*");
        $this->db->from("academy");
        $this->db->where('del_status', 0);
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->result_array();
        return $row;
    }
	
	public function get_academy_start_price($academy_id){
        $query = $this->db->query('SELECT t.* FROM academy_price t
JOIN 
( SELECT academy_id, MIN(after_discount_price) minVal
  FROM academy_price where del_status = 0 GROUP BY academy_id
) t2
ON t.after_discount_price = t2.minVal AND t.academy_id = t2.academy_id WHERE t.academy_id = "'.$academy_id.'" AND t.del_status = 0');
        $row = $query->row_array();
        return $row;
    }
	
	public function get_academy_details_based_on_academy_id($params){
        $this->db->select("*");
        $this->db->from("academy a");
		$this->db->join("yalla_users ys","a.academy_owner_id = ys.user_id","left");
        $this->db->where('a.del_status', 0);
        $this->db->where('a.academy_id', $params["academy_id"]);
		$this->db->where('ys.user_role <>', 1);
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->row_array();
        return $row;
    }
	
	public function get_all_coaching_classes($coaching_id){
        $this->db->select("*");
        $this->db->from("academy_coaching_classes ccc");
        $this->db->where_in('ccc.coaching_id',$coaching_id);
        $this->db->where('ccc.del_status', 0);
        $result = $this->db->get();
        $row = $result->result_array();
        return $row;
    }
	
	public function get_all_academy_price($academy_id){
        $this->db->select("*");
        $this->db->from("academy_price ap");
        $this->db->where('ap.academy_id',$academy_id);
        $this->db->where('ap.availability', 0);
        $this->db->where('ap.del_status', 0);
        $result = $this->db->get();
        $row = $result->result_array();
        return $row;
    }
    
    public function get_academy_rating_based_on_ground_id($academy_id){
        $this->db->select("AVG(rating) as rating");
        $this->db->from("academy_rating");
        $this->db->where('del_status', 0);
        $this->db->where('academy_id', $academy_id);
        $result = $this->db->get();
        $row = $result->row_array();
        return $row;
    }
    
    public function get_academy_city(){
        $this->db->select("academy.academy_city");
        $this->db->from("academy");
        $this->db->where('del_status', 0);
        $result = $this->db->get();
        $row = $result->result_array();
        return $row;
    }
	
	public function get_academy_list_based_on_ground_location_name($data)
	{
        $this->db->select('*');
        $this->db->from('academy');
        $this->db->where_in('academy_city',$data);
        $this->db->where('del_status', 0);
        $query= $this->db->get();
        $row = $query->result_array();
        return $row;
	}
	
	public function get_academy_rating_based_on_id($params){
	    $this->db->select('*');
	    $this->db->from('academy_rating');
	    $this->db->where('player_id',$params['player_id']);
	    $this->db->where('academy_id',$params['academy_id']);
	    $this->db->where('del_status',0);
	    $result= $this->db->get();
	    $row = $result->row_array();
	    return $row;
    }
    
    public function save_academy_rating($data){
        if($this->db->insert('academy_rating', $data))
        {
            return $this->db->insert_id();
        }
        else
        {
            return false;
        }
    }
	
    public function update_academy_rating($data){
        $this->db->where('player_id', $data['player_id']);
        $this->db->where('academy_id', $data['academy_id']);
        return $this->db->update('academy_rating', $data);
    }
    
    public function get_academy_low_price(){
        $query = $this->db->query('SELECT t.id,t.academy_id,t.actual_price as a_price,t.discount as a_discount,
		t.age_limit,t.month,t.payment_type,t.after_discount_price,
		a.* FROM academy a
		LEFT JOIN academy_price t ON t.academy_id = a.academy_id
		LEFT JOIN 
		( SELECT academy_id, MIN(after_discount_price) minVal
			FROM academy_price
		) t2
		ON t.after_discount_price = t2.minVal AND t.academy_id = t2.academy_id WHERE a.del_status = 0 GROUP BY t.academy_id
		ORDER BY t.after_discount_price ASC');
        $row = $query->result_array();
        //die(print_r($this->db->last_query()));
        return $row;
    }

    public function get_academy_high_price(){
        $query = $this->db->query('SELECT t.id,t.academy_id,t.actual_price as a_price,t.discount as a_discount,
		t.age_limit,t.month,t.payment_type,t.after_discount_price,
		a.* FROM academy a
		LEFT JOIN academy_price t ON t.academy_id = a.academy_id
		LEFT JOIN 
		( SELECT academy_id, MIN(after_discount_price) minVal
			FROM academy_price
		) t2
		ON t.after_discount_price = t2.minVal AND t.academy_id = t2.academy_id WHERE a.del_status = 0 GROUP BY t.academy_id
		ORDER BY t.after_discount_price DESC');
        $row = $query->result_array();
        return $row;
    }
	
	public function get_sorting_rating_high_academy_details(){
        $this->db->select("a.*");
        $this->db->from("academy a");
        $this->db->join("academy_rating ar","a.academy_id = ar.academy_id",'left');
        $this->db->where('a.del_status', 0);
        $this->db->group_by('a.academy_id');
        $this->db->order_by("ar.rating", "desc");
        $result = $this->db->get();
        $row = $result->result_array();
        return $row;
    }
	
	public function get_academy_price_based_on_academy_id($academy_id){
        $query = $this->db->query('SELECT t.* FROM academy_price t
JOIN 
( SELECT academy_id, MIN(after_discount_price) minVal
  FROM academy_price where del_status = 0 GROUP BY academy_id
) t2
ON t.after_discount_price = t2.minVal AND t.academy_id = t2.academy_id WHERE t.academy_id = "'.$academy_id.'" AND t.del_status = 0');
        $row = $query->row_array();
        return $row;
    }
	
	public function get_academy_rating_based_popularity($academy_id)
    {
        $this->db->select("rr.rating as academy_rating");
        $this->db->from("academy_rating rr");
        $this->db->where('rr.del_status', 0);
        $this->db->where('rr.academy_id', $academy_id);
        $this->db->order_by("rr.rating", "desc");
        $result = $this->db->get();
        $row = $result->row_array();
        return $row;
    }
	
	public function get_nearest_academy($params){
        $this->db->select("*,( 6371 * acos(
            cos(radians('".$params["academy_latitude"]."')) * cos(radians(academy_latitude)) * cos(radians(academy_longitude) - radians('".$params["academy_longitude"]."')) +
            sin(radians('".$params["academy_latitude"]."')) * sin(radians(academy_latitude))
            ) ) AS distance");
        $this->db->from("academy");
        $this->db->where('del_status', 0);
        $this->db->order_by("distance", "ASC");
        $result = $this->db->get();
        $row = $result->result_array();
        return $row;
    }
    
    public function get_academy_booking_code()
    {
        $this->db->select('*');
        $this->db->from('academy_booking');
         $this->db->where('del_status', 0);
		 $this->db->order_by("book_code","desc");
        $query = $this->db->get();
        $row = $query->row_array();
        return $row;
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
	
	function save_academy_booking_details($data)
	{
	return $this->db->insert('academy_booking', $data);
	}
	
	public function academy_booking_history_past_based_on_player_id($params){
        $this->db->select("s.*,a.academy_name,a.academy_latitude,a.academy_longitude,ap.age_limit");
        $this->db->select('DATE_FORMAT(s.booking_date, "%d/%m/%Y") as booking_date', FALSE);
        $this->db->from("academy_booking s");
        $this->db->join('academy a','s.booking_academy = a.academy_id','left');
        $this->db->join('academy_price ap','s.booking_age = ap.id','left');
        $this->db->where('s.booking_player',$params['player_id']);
        $this->db->where('s.booking_cancel',0);
		$this->db->where('s.booking_date <',date('Y-m-d'));
		$where = '((s.payment_type="card" and s.payment_status = "1") or s.payment_type="cash")';
		$this->db->where($where);
         $this->db->where('s.del_status',0);
		 $this->db->order_by("s.book_code", "DESC");
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->result_array();
        return $row;
    }
	
	public function academy_booking_history_upcomin_based_on_player_id($params){
        $this->db->select("s.*,a.academy_name,a.academy_latitude,a.academy_longitude,ap.age_limit");
        $this->db->select('DATE_FORMAT(s.booking_date, "%d/%m/%Y") as booking_date', FALSE);
        $this->db->from("academy_booking s");
        $this->db->join('academy a','s.booking_academy = a.academy_id','left');
        $this->db->join('academy_price ap','s.booking_age = ap.id','left');
        $this->db->where('s.booking_player',$params['player_id']);
		$this->db->where('s.booking_date >=',date('Y-m-d'));
		$where = '((s.payment_type="card" and s.payment_status = "1") or s.payment_type="cash")';
		$this->db->where($where);
        $this->db->where('s.booking_cancel',0);
        $this->db->where('s.del_status',0);
		$this->db->order_by("s.book_code", "DESC");
        $result = $this->db->get();
        //die(print_r($this->db->last_query()));
        $row = $result->result_array();
        return $row;
    }
    
    public function academy_booking_cancel_by_player($params){
        $this->db->where('a_booking_id', $params['a_booking_id']);
        return($this->db->update('academy_booking', $params));
    }

}