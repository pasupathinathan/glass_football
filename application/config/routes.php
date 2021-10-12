<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = 'web_site/football';
$route['404_override'] ='';
$route['(:any)'] = "football/$1";
$route['(:any)/(:any)'] = "football/$1/$1";
$route['(:any)/(:any)/(:any)'] = "football/$1/$1/$1";



$route['admin'] = 'football/index';



/*
| -------------------------------------------------------------------------
| Sample REST API Routes
| -------------------------------------------------------------------------
*/
$route['api/users/register'] = 'api/Users/users_register';

$route['api/users/login'] = 'api/Users/users_login';

$route['api/users/forgot_password_otp'] = 'api/Users/forgot_password_otp';

$route['api/users/otp_verification'] = 'api/Users/otp_verification';

$route['api/users/password_upload'] = 'api/Users/password_upload';

$route['api/tournament_list'] = 'api/Web_services/tournament_list';

$route['api/biometric'] = 'api/Web_services/biometric';

$route['api/tournament_list_by_id'] = 'api/Web_services/tournament_list_by_id';

$route['api/player_profile'] = 'api/Users/player_profile';

$route['api/grounds_list'] = 'api/Web_services/grounds_list';

$route['api/grounds_based_on_location'] = 'api/Web_services/grounds_list_based_location';

$route['api/grounds_details_based_on_id'] = 'api/Web_services/grounds_details_based_on_id';

$route['api/grounds_list_based_rating'] = 'api/Web_services/grounds_list_based_rating';

$route['api/grounds_list_based_price'] = 'api/Web_services/grounds_list_based_price';

$route['api/tournament_register'] = 'api/Web_services/tournament_register';

$route['api/booked_tournaments'] = 'api/Web_services/booked_tournaments';

$route['api/two_team_match_details'] = 'api/Web_services/two_team_match_details';

$route['api/player_update'] = 'api/Users/player_update';

$route['api/after_booked_tournament_details'] = 'api/Web_services/after_booked_tournament_details';

$route['api/two_team_match_statistics'] = 'api/Web_services/two_team_match_statistics';


/* Mayavel code starts*/

$route['api/show_team_ci'] = 'api/Web_services/show_team_ci';

$route['api/by_id_team_ci'] = 'api/Web_services/by_id_team_ci';

$route['api/grounds_list_based_on_location'] = 'api/Web_services/grounds_list_based_on_location';

$route['api/add_team'] = 'api/Web_services/add_team';

$route['api/get_players'] = 'api/Web_services/get_players';

$route['api/post_logo_url'] = 'api/Web_services/post_logo_url';

$route['api/get_all_ground_locations'] = 'api/Web_services/get_all_ground_locations';

$route['api/player_rating'] = 'api/Web_services/player_rating';


/*Mayavel code ends*/

$route['api/get_ground_openclose_time'] = 'api/Web_services/get_ground_openclose_time';

$route['api/upcoming_booked_tournaments'] = 'api/Web_services/upcoming_booked_tournaments';

$route['api/past_booked_tournaments'] = 'api/Web_services/past_booked_tournaments';

$route['api/addplayer_send_sms'] = 'api/Web_services/addplayer_send_sms';

$route['api/jointeam_send_sms'] = 'api/Web_services/jointeam_send_sms';

$route['api/ground_filter_options'] = 'api/Web_services/ground_filter_options';

$route['api/insert_booking_data'] = 'api/Web_services/insert_booking_data';

$route['api/delete_team'] = 'api/Web_services/delete_team';

$route['api/image_upload'] = 'api/Web_services/image_upload';

$route['api/price_sorting'] = 'api/Web_services/price_sorting';

$route['api/exit_team'] = 'api/Web_services/exit_team';

$route['api/popularity_sorting'] = 'api/Web_services/popularity_sorting';

$route['api/insert_team_rating'] = 'api/Web_services/insert_team_rating';

$route['api/booking_history'] = 'api/Web_services/booking_history_based_on_player';

$route['api/player_profile_upload'] = 'api/Users/player_profile_upload';

$route['api/insert_ground_rating'] = 'api/Web_services/insert_ground_rating';

$route['api/add_player_notification'] = 'api/Web_services/get_add_player_notification';

$route['api/addplayer_accept'] = 'api/Web_services/addplayer_accept';

$route['api/join_team_notification'] = 'api/Web_services/get_join_team_notification';

$route['api/join_player_accept'] = 'api/Web_services/join_player_accept';

$route['api/invite_team_send_sms'] = 'api/Web_services/invite_team_send_sms';

$route['api/invite_team_notification'] = 'api/Web_services/invite_team_notification';

$route['api/invite_team_accept'] = 'api/Web_services/invite_team_accept';

$route['api/split_payment_send_sms'] = 'api/Web_services/split_payment_send_sms';

$route['api/players_split_payment_notification'] = 'api/Web_services/players_split_payment_notification';

$route['api/split_payment_accept'] = 'api/Web_services/split_payment_accept';

$route['api/cancel_booking'] = 'api/Web_services/cancel_booking';

$route['api/add_firebase_token'] = 'api/Web_services/add_firebase_token';

$route['api/send_multicast_notifications'] = 'api/Web_services/send_multicast_notifications';

$route['api/users/player_logout'] = 'api/Users/player_logout';

$route['api/notification_count'] = 'api/Web_services/notification_count';

$route['api/notification_count_update'] = 'api/Web_services/notification_count_update';

$route['api/team_update'] = 'api/Web_services/team_update';

$route['api/live_tour_schedule'] = 'api/Web_services/live_tournament_schedule';

$route['api/app_update_version'] = 'api/Web_services/app_update_version';

$route['api/academy_details'] = 'api/Web_services/academy_details';

$route['api/academy_details_based_on_id'] = 'api/Web_services/academy_details_based_on_id';

$route['api/get_all_academy_locations'] = 'api/Web_services/get_all_academy_locations';

$route['api/academy_details_based_on_location'] = 'api/Web_services/academy_details_based_on_location';

$route['api/insert_academy_rating'] = 'api/Web_services/insert_academy_rating';

$route['api/academy_price_sorting'] = 'api/Web_services/academy_price_sorting';

$route['api/insert_academy_booking'] = 'api/Web_services/insert_academy_booking';

$route['api/academy_booking_history'] = 'api/Web_services/academy_booking_history_based_on_player';

$route['api/academy_booking_cancel'] = 'api/Web_services/academy_booking_cancel';