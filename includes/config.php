<?php
//time zone
date_default_timezone_set('Asia/Kolkata');
//database connection
$con=mysqli_connect("127.0.0.1","root","root","bpmmsdb");
define('PROJECT_API_KEY', 'hello');
define('POST_DATA_URL', 'http://192.168.0.102/CareMe-PHP/sensordata.php');
$root_path = $_SERVER['DOCUMENT_ROOT'].'/CareMe-PHP';
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}

  ?>
