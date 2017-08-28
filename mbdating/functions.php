<?php
	$RADIUS_ARRAY = array(
		'5' => '5 Miles',
		'10' => '10 Miles',
		'15' => '15 Miles',
		'20' => '20 Miles',
		'30' => '30 Miles',
		'50' => '50 Miles'
		);
	$GENDER_OPTIONS = array(
		'1' => 'Male',
		'2' => 'Female',
		'3' => 'Other'
		);


	function addressToCoordinations($address){
		//1600+Amphitheatre+Parkway,+Mountain+View,+CA
		$address = str_replace(' ', '+', $address); //Replace spaces with +
		$API_KEY = "AIzaSyBCKEzDz05FJREAC6Egnvu7iOgQqu0aR2E";
		$url = "https://maps.googleapis.com/maps/api/geocode/json?address=".$address."&key=".$API_KEY;
		$curl = curl_init();
		// Set some options - we are passing in a useragent too here
		curl_setopt_array($curl, array(
		    CURLOPT_RETURNTRANSFER => 1,
		    CURLOPT_URL => $url
		));
		$json_result = curl_exec($curl);
		curl_close($curl);
		
		$array_result = json_decode($json_result,true);
		return $array_result['results'][0]['geometry']['location'];
		/*
			$coordiantion = addressToCoordinations('1421 Tennis Dr,Bedford,TX');
  			echo 'Lat is: '.$coordiantion['lat'];
  			echo 'Long is: '.$coordiantion['lng'];
		*/
	}


	function personalityTypeIdToPeronalityTypeName($personalityID){
		$sql = "select * from `personality_types` where `id`=".$personalityID;
        $result = mysql_query($sql);
        $personality_type = mysql_fetch_object($result);
        return $personality_type->name;
	}

	function gender($gender_id){
		if ($gender_id == 1) {
			return "Male";
		} elseif ($gender_id == 2) {
			return "Female";
		} 
		return "Other";
	}

	function calculateAge($birthday){
		$date = new DateTime($birthday);
		$now = new DateTime();
		$interval = $now->diff($date);
		return $interval->y;
	}

	function getPersonalityTypes(){
		$sql = "select * from `personality_types`";
        $result = mysql_query($sql);
        $output = array();
        while($row = mysql_fetch_object($result)){
        	$output[$row->id] = $row->name;
        }
        return $output;
	}
?>