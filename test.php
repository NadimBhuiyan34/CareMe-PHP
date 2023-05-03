<?php require 'includes/config.php'; ?>

<!DOCTYPE html>
<html>
<body>

<h2>AhmadLogs - Test POST data</h2>

<form method="POST" action="<?php echo POST_DATA_URL;?>">
  <label for="apikey">Api Key:</label><br>
  <input type="text" id="api_key" name="api_key" value="<?php echo PROJECT_API_KEY;?>"><br>
  <label for="temperature">DeviceId:</label><br>
  <input type="text" id="device" name="device_id" value="careme123"><br>
  <label for="temperature">Temperature:</label><br>
  <input type="text" id="temperature" name="temperature" value="16.53"><br>
  <label for="humidity">Humidity:</label><br>
  <input type="text" id="humidity" name="humidity" value="55.67"><br>
  <label for="humidity">Bpm:</label><br>
  <input type="text" id="humidity" name="bpm" value="59.67"><br>
  <label for="humidity">Body temp:</label><br>
  <input type="text" id="humidity" name="bodytem" value="555.67"><br><br>
  <input type="submit" value="Submit">
</form> 

</body>
</html>