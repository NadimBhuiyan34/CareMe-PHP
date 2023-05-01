<?php 

require 'config.php';

//----------------------------------------------------------------------------
// echo $_SERVER["REQUEST_METHOD"];
// echo "nadim";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$api_key = escape_data($_POST["api_key"]);
        //print_r($_POST);
        //echo "<br>PROJECT_API_KEY: ".PROJECT_API_KEY."<br>";
	//MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
	 
	if($api_key == PROJECT_API_KEY) {
	 
		$temperature = escape_data($_POST["temperature"]);
		$humidity = escape_data($_POST["humidity"]);
		$bodytemp = escape_data($_POST["bodytem"]);
		$bpm = escape_data($_POST["bpm"]);
	 
		$sql = "INSERT INTO sensordatas(room_temperature,humidity,body_temperature,heart_rate,created_at) 
			VALUES('".$temperature."','".$humidity."','".$bodytemp."','".$bpm."','".date("Y-m-d H:i:s")."')";
		// $sql = "INSERT INTO tbl_temperature(temperature,humidity,bodytemp,bpm,created_date) 
		// 	VALUES('".$temperature."','".$humidity."','".$bodytemp."','".$bpm."','".date("Y-m-d H:i:s")."')";
        
		if($db->query($sql) === FALSE)
			{ echo "Error: " . $sql . "<br>" . $db->error; }

		echo "OK. INSERT ID: ";
		echo $db->insert_id;
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