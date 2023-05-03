<?php
session_start();
include_once('includes/config.php');
$device_id=$_SESSION['user']['device'];

$sensor = "SELECT * FROM sensordata WHERE device='$device_id' ORDER BY created_at DESC LIMIT 10";
$result = $con->query($sensor);
if (!$result) {
  { echo "Error: " . $sql . "<br>" . $con->error; }
}

if (strlen($_SESSION['user']['id']==0)) {
  header('location:logout.php');
  } else{

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CareMe | Dashboard</title>
    <link rel="icon" type="image/png" href="img/title-logo.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="vendor/bootstrap/assets/css/datatables.min.css">
 
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
       <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>  
  
<style>
    table {
  font-size: 11px;
}

/* Increase font size for medium to large devices */
@media screen and (min-width: 768px) {
  table {
    font-size: 14px;
  }
}

/* Decrease font size for small devices */
@media screen and (max-width: 767px) {
  table {
    font-size: 11px;
  }
}
.tableFixHead {
        overflow-y: auto; /* make the table scrollable if height is more than 200 px  */
        height: 400px; /* gives an initial height of 200px to the table */
      }
      .tableFixHead thead{
        position: sticky; /* make the table heads sticky */
        top: 0px; /* table head will be placed from the top of the table and sticks to it */
        z-index: 1;
      }
      table {
        border-collapse: collapse; /* make the table borders collapse to each other */
        width: 100%;
      }
      .tableFixHead::-webkit-scrollbar {
  display: none; /* hide the scrollbar for webkit browsers (Chrome, Safari, etc.) */
}
       /* remove arrow sign in datatable header */
 
/* decrease header width in datatable */
 
 
.gradient-custom-2 {
/* fallback for old browsers */
/* background: #74fcd8; */
background: #00ffe1;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, #6df2f0, #6df2f0, #6df2f0, #6df2f0);

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
/* background: linear-gradient(to right, #ff6021,#6df2f0,#6df2f0,#6df2f0); */
}   
.gradient-custom-3 {
/* fallback for old browsers */
background:#e3fffc;
/* background:#e3fffc; */

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, #6df2f0, #6df2f0, #6df2f0, #6df2f0);

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
/* background: linear-gradient(to right, #e6fcf5, #e6fcf5, #e6fcf5, #e6fcf5); */
}   
</style>
</head>



<body  class="gradient-custom-3">
 
<?php include_once('includes/topbar.php');?>
 <div class="row m-auto">
    
                    <div class="col-xl-3 col-md-6 mb-4 col-6">
                            <div class="card border-left-success shadow">
                                
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">


                                            <div class="text-xs font-weight-bold text-primary  mb-1 text-center">
                                             Room-Temp</div>
                                            
                                            </div>

                                        
                                        <div class="col-auto text-center mx-auto">
                                           <strong class="text-dark fs-4" id="room-temp"></strong>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    <div class="col-xl-3 col-md-6 mb-4 col-6">
                            <div class="card border-left-primary shadow " style="padding-bottom:3px">
                             
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">


                                            <div class="text-xs font-weight-bold text-primary  mb-1">
                                             Humidity</div>
                                            
                                        </div>
                                        <div class="col-auto text-center mx-auto">
                                           <strong class="text-dark fs-4" id="humidity"></strong>
                                        </div>
                                    </div>
                                </div>
                      
                            </div>
                        </div>
                    <div class="col-xl-3 col-md-6 mb-4 col-6">
                            <div class="card border-left-info shadow">
                             
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">


                                            <div class="text-xs font-weight-bold text-primary mb-1 text-center">
                                             Body-Temp</div>
                                            
                                        </div>
                                        <div class="col-auto text-center mx-auto">
                                           <strong class="text-dark fs-4" id="body-temp"></strong>
                                        </div>
                                    </div>
                                </div>
                  
                            </div>
                        </div>
                    <div class="col-xl-3 col-md-6 mb-4 col-6">
                            <div class="card border-left-danger shadow" style="padding-bottom:3px">
                             
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">


                                            <div class="text-xs font-weight-bold text-primary  mb-1">
                                             Heart Rate</div>
                                            
                                        </div>
                                        <div class="col-auto text-center mx-auto">
                                           <strong class="text-dark fs-4" id="heart-rate"></strong>
                                        </div>
                                    </div>
                                </div>
                    
                            </div>
                        </div>

                       

                        <!-- Data table -->
                        <div class="row">
                <div class="col-12 col-md-12 col-xl-12 col-sm-12 tableFixHead">
                    <table id="example" class="table bg-white shadow rounded">
                        <thead class="table-dark">
                            <tr>
                                <th>Room Temp</th>
                                <th>Humidity</th>
                                <th>Body Temp</th>
                                <th>Heart Rate</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                             <?PHP while ($row = mysqli_fetch_assoc($result)) {?>
                            <tr>
                                    <td><?PHP echo $row['room_temperature'];?></td>
                                    <td><?PHP echo $row['humidity'];?></td>
                                    <td><?PHP echo $row['body_temperature'];?></td>
                                    <td><?PHP echo $row['heart_rate'];?></td>
                                    <td><?PHP echo date("Y-m-d h:i: A", strtotime($row['created_at']));?></td>
                            </tr>
                           <?PHP } ?>
                        </tbody>
                    </table>
                </div>
            </div>
                        </div>
                    </div>

                    
           
        </div>

      
     <script>
     $(document).ready(function () {
  fetchSensorData();
});

const apiUrl = "getdata.php";
const device_id = "nadim"; // Replace with your device ID
const params = `device_id=${encodeURIComponent(device_id)}`;

function fetchSensorData() {
  $.getJSON(`${apiUrl}?${params}`, function(data) {
    // Update the values of the sensor data in the HTML elements
    $("#room-temp").text(data.room_temperature);
    $("#body-temp").text(data.body_temperature);
    $("#humidity").text(data.humidity);
    $("#heart-rate").text(data.heart_rate);
  });
}

setInterval(fetchSensorData, 2000);

     </script>   


        
     

    <!-- Fontawesoma -->
    <script src="https://kit.fontawesome.com/496c26838e.js" crossorigin="anonymous"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Data table js -->
    <script src="vendor/bootstrap/assets/js/jquery-3.6.0.min.js"></script>
    <script src="vendor/bootstrap/assets/js/datatables.min.js"></script>
    <script src="vendor/bootstrap/assets/js/pdfmake.min.js"></script>
    <script src="vendor/bootstrap/assets/js/vfs_fonts.js"></script>
    <script src="vendor/bootstrap/assets/js/custom.js"></script>
</body>

</html>
<?php } ?>