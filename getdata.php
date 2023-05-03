<?php
include_once('includes/config.php');
 

 

// Fetch the latest sensor data from the sensordata table
$sql = "SELECT * FROM sensordata ORDER BY created_at DESC LIMIT 1";
 
// $sql = "SELECT * FROM sensordata WHERE device='$device_id' ORDER BY created_at DESC LIMIT 1";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

// Build a JSON object with the sensor data values
$data = array(
  'room_temperature' => $row['room_temperature'],
  'body_temperature' => $row['body_temperature'],
  'humidity' => $row['humidity'],
  'heart_rate' => $row['heart_rate']
);

// Set the response content type to JSON
header('Content-Type: application/json');

// Send the JSON object back to the client
$data=json_encode($data);
echo $data;
 ?>

