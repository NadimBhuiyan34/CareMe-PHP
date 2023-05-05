<?php
session_start();
$root_path = $_SERVER['DOCUMENT_ROOT'].'/CareMe-PHP';
include_once($root_path . '/includes/config.php');
if (strlen($_SESSION['user']['id']==0)) {
 header('Location: '.$root_path.'/view/auth/logout.php');
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

    <title>CareMe | Admin</title>
   
     <?php include_once($root_path .'/master.php'); ?>
  
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
 
<?php include_once('../../includes/topbar.php');?>
  
  <h4 class="text-center text-primary">Welcome Admin</h4>
  <hr>
<div class="row m-auto">
    
                    <div class="col-xl-3 col-md-6 mb-4 col-6">
                            <div class="card border-left-success shadow">
                                
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">


                                            <div class="text-xs font-weight-bold text-primary  mb-1 text-center">
                                             Room Temperature</div>
                                            
                                            </div>


                                        <div class="col-auto text-center mx-auto">
                                           <strong class="text-dark fs-4">32</strong>
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
                                           <strong class="text-dark fs-4">50</strong>
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
                                             Body Temperature</div>
                                            
                                        </div>
                                        <div class="col-auto text-center mx-auto">
                                           <strong class="text-dark fs-4">96</strong>
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
                                           <strong class="text-dark fs-4">85</strong>
                                        </div>
                                    </div>
                                </div>
                    
                            </div>
                        </div>

                    
 
 

  

     
</body>

</html>
<?php } ?>