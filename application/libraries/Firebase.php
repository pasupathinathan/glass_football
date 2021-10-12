<?php 

class Firebase {

	private $firbaseUrl;

	private $key;

	function __construct()
	{
		$this->firbaseUrl = 'https://fcm.googleapis.com/fcm/send';
		$this->key = 'AAAA3xNK35s:APA91bGaZNewf86_LauayqxgSMXB6Ian2uukANTpJX2r2xliNmo27Q22FxOq-Cra3Wphesu0mmbH9phZRdqDo4-mRqTWqRI5nrRmkLCwQ1UPe9FxdQjolcN9S9IgF3sY91UJj4a_A9sr';
	}

	public function sendNotification($deviceIds,$firebaseNotification)
	{
		
		if (($firebaseNotification instanceof FirebaseNotification) && is_array($deviceIds) && sizeof($deviceIds)) {
			$notificationData = array (
				'registration_ids' => $deviceIds,
				'notification' => array(
					'title' => $firebaseNotification->getTitle(),
					'body' => $firebaseNotification->getMessageBody(),
					//'click_action' => "FCM_PLUGIN_ACTIVITY",
					 'sound' => "default" //If you want notification sound
				),
				//'data' => $firebaseNotification->getPayload()
    		);
    		$headers = array (
    			'Authorization: key=' . $this->key,
    			'Content-Type: application/json'
    		);

    		$ch = curl_init ();
		    curl_setopt ( $ch, CURLOPT_URL, $this->firbaseUrl);
		    curl_setopt ( $ch, CURLOPT_POST, true );
		    curl_setopt ( $ch, CURLOPT_HTTPHEADER, $headers );
		    curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
		    curl_setopt ( $ch, CURLOPT_POSTFIELDS, json_encode($notificationData)); 
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);			
			$result = curl_exec ( $ch );			
            $err = curl_error($ch);			
			curl_close ( $ch );
    		return $result;
		}
	}
}


?>