<?php 

require 'includes/config.php';
	 
//----------------------------------------------------------------------------
// echo $_SERVER["REQUEST_METHOD"];
// echo "nadim";
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$api_key = escape_data($_POST["api_key"]);
	$device = escape_data($_POST["device"]);
        //print_r($_POST);
      
	//MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM

	if($api_key == PROJECT_API_KEY) {
	  
		 
		 
		// $device = escape_data($_POST["api_key"]);
		$temperature = escape_data($_POST["temperature"]);
		$humidity = escape_data($_POST["humidity"]);
		$bodytemp = escape_data($_POST["bodytem"]);
		$bpm = escape_data($_POST["bpm"]);
	    date_default_timezone_set('Asia/Dhaka');
		$sql = "INSERT INTO sensordata(room_temperature,body_temperature,humidity,heart_rate,device,created_at) 
			VALUES('".$temperature."','".$bodytemp."','".$humidity."','".$bpm."','".$device."','".date("Y-m-d H:i:s")."')";
		 
		if($con->query($sql) === FALSE)
			{ echo "Error: " . $sql . "<br>" . $con->error; }

		echo "OK. INSERT ID: ";
		echo $con->insert_id;
	}
	//MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
	else
	{
		echo "Wrong API Key";
	}
	//MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
}
//----------------------------------------------------------------------------
else
{
	echo "No HTTP POST request found";
}
//----------------------------------------------------------------------------


function escape_data($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}