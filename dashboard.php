<?php
session_start();
include_once('includes/config.php');
if (strlen($_SESSION['aid']==0)) {
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <!-- Datatable -->
        <link href="vendor/bootstrap/assets/images/favicon.png" rel="icon">
    <link href="vendor/bootstrap/assets/images/favicon.png" rel="apple-touch-icon">

    <!-- <link rel="stylesheet" href="vendor/bootstrap/assets/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="vendor/bootstrap/assets/css/datatables.min.css">
    <!-- <link rel="stylesheet" href="vendor/bootstrap/assets/css/style.css"> -->
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
  
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
                            <div class="card border-left-success shadow h-100 py-2">
                                
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">


                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                             Room Temperature</div>
                                            
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-dark"></i>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    <div class="col-xl-3 col-md-6 mb-4 col-6">
                            <div class="card border-left-primary shadow h-100 py-2">
                             
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">


                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                             Humidity</div>
                                            
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                      
                            </div>
                        </div>
                    <div class="col-xl-3 col-md-6 mb-4 col-6">
                            <div class="card border-left-info shadow h-100 py-2">
                             
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">


                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                             Body Temperature</div>
                                            
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                  
                            </div>
                        </div>
                    <div class="col-xl-3 col-md-6 mb-4 col-6">
                            <div class="card border-left-danger shadow h-100 py-2">
                             
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">


                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                             Heart Rate</div>
                                            
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                    
                            </div>
                        </div>

                        <!-- Table start -->
                        <!-- <div class=" row">
                            <div class="col-12 col-xl-12 col-md-12 col-sm-12 tableFixHead">

                           
                            <table class="table bg-white shadow rounded  border-left-primary">
                             <thead  class="text-center bg-info text-white">
                                <tr>
                            
                                <th>Room Temp</th>
                                <th>Humidity</th>
                                <th>Body Temp</th>
                                <th class="">Heart Rate</th>
                                <th>Date</th>
                                </tr>
                             </thead>
                             <tbody  class="text-center text-dark">
                                <tr>
                                  
                                    <td>52</td>
                                    <td>55</td>
                                    <td>85</td>
                                    <td>85</td>
                                    <td>12/02/2023hhh</td>
                                </tr>
                                <tr>
                                 
                                    <td>52</td>
                                    <td>55</td>
                                    <td>85</td>
                                    <td>85</td>
                                    <td>12/02/2023jhh</td>
                                </tr>
                                <tr>
                                 
                                    <td>52</td>
                                    <td>55</td>
                                    <td>85</td>
                                    <td>85</td>
                                    <td>12/02/2023jhh</td>
                                </tr>
                                <tr>
                                 
                                    <td>52</td>
                                    <td>55</td>
                                    <td>85</td>
                                    <td>85</td>
                                    <td>12/02/2023jhh</td>
                                </tr>
                                <tr>
                                 
                                    <td>52</td>
                                    <td>55</td>
                                    <td>85</td>
                                    <td>85</td>
                                    <td>12/02/2023jhh</td>
                                </tr>
                                <tr>
                                 
                                    <td>52</td>
                                    <td>55</td>
                                    <td>85</td>
                                    <td>85</td>
                                    <td>12/02/2023jhh</td>
                                </tr>
                             </tbody>
                            </table>

                        </div> -->



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
                            <tr>
                            <td>52</td>
                                    <td>55</td>
                                    <td>85</td>
                                    <td>85</td>
                                    <td>12/02/2023jhh</td>
                            </tr>
                            <tr>
                            <td>52</td>
                                    <td>55</td>
                                    <td>85</td>
                                    <td>85</td>
                                    <td>12/02/2024</td>
                            </tr>
                            <tr>
                            <td>52</td>
                                    <td>55</td>
                                    <td>85</td>
                                    <td>85</td>
                                    <td>12/02/2023jhh</td>
                            </tr>
                            <tr>
                            <td>52</td>
                                    <td>55</td>
                                    <td>85</td>
                                    <td>85</td>
                                    <td>12/02/2023jhh</td>
                            </tr>
                            <tr>
                                    <td>52</td>
                                    <td>55</td>
                                    <td>85</td>
                                    <td>85</td>
                                    <td>12/02/2023jhh</td>
                            </tr>
                            <tr>
                            <td>52</td>
                                    <td>55</td>
                                    <td>85</td>
                                    <td>85</td>
                                    <td>12/02/2023jhh</td>
                            </tr>
                            <tr>
                            <td>52</td>
                                    <td>55</td>
                                    <td>85</td>
                                    <td>85</td>
                                    <td>12/02/2023jhh</td>
                            </tr>
                            <tr>
                            <td>52</td>
                                    <td>55</td>
                                    <td>85</td>
                                    <td>85</td>
                                    <td>12/02/2023jhh</td>
                            </tr>
                            <tr>
                            <td>52</td>
                                    <td>55</td>
                                    <td>85</td>
                                    <td>85</td>
                                    <td>12/02/2023jhh</td>
                            </tr>
                            <tr>
                            <td>52</td>
                                    <td>55</td>
                                    <td>85</td>
                                    <td>85</td>
                                    <td>12/02/2023jhh</td>
                            </tr>
                            <tr>
                            <td>52</td>
                                    <td>55</td>
                                    <td>85</td>
                                    <td>85</td>
                                    <td>12/02/2023jhh</td>
                            </tr>
                            <tr>
                            <td>52</td>
                                    <td>55</td>
                                    <td>85</td>
                                    <td>85</td>
                                    <td>12/02/2023jhh</td>
                            </tr>
                            <tr>
                            <td>52</td>
                                    <td>55</td>
                                    <td>85</td>
                                    <td>85</td>
                                    <td>12/02/2023jhh</td>
                            </tr>
                            <tr>
                            <td>52</td>
                                    <td>55</td>
                                    <td>85</td>
                                    <td>85</td>
                                    <td>12/02/2023jhh</td>
                            </tr>
                            <tr>
                            <td>52</td>
                                    <td>55</td>
                                    <td>85</td>
                                    <td>85</td>
                                    <td>12/02/2023jhh</td>
                            </tr>
                            <tr>
                            <td>52</td>
                                    <td>55</td>
                                    <td>85</td>
                                    <td>85</td>
                                    <td>12/02/2023jhh</td>
                            </tr>
                            <tr>
                            <td>52</td>
                                    <td>55</td>
                                    <td>85</td>
                                    <td>85</td>
                                    <td>12/02/2023jhh</td>
                            </tr>
                             
                        </tbody>
                    </table>
                </div>
            </div>
                        </div>
                    </div>

                    
           
        </div>

                    
                    <script type="text/javascript">
        $(document).ready(function () {
    $('#example').DataTable();
});
    </script>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
      <!-- Datatable -->
     



    <!-- <script src="vendor/bootstrap/assets/js/bootstrap.bundle.min.js"></script> -->
    <script src="vendor/bootstrap/assets/js/jquery-3.6.0.min.js"></script>
    <script src="vendor/bootstrap/assets/js/datatables.min.js"></script>
    <script src="vendor/bootstrap/assets/js/pdfmake.min.js"></script>
    <script src="vendor/bootstrap/assets/js/vfs_fonts.js"></script>
    <script src="vendor/bootstrap/assets/js/custom.js"></script>
</body>

</html>
<?php } ?>