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
</style>
</head>



<body id="page-top" class="" style="background-color:#e1f9fc">

<?php include_once('includes/topbar.php');?>
 
 


 <div class=" container row m-auto">
 <div class="col-xl-6 col-md-6 mb-4 col-6">
                           <!-- <a href="dashboard.php"> -->
                           <div class="card border-left-info shadow h-100 py-2">
                                
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">


                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                           
                                        <button class="btn btn-info shadow" id="hospitalbtn"><i class="fa-solid fa-hospital mr-1"></i>
                                        <br>
                                        From Hospital</button>
                                        </div>
                                            
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fa fa-home  text-dark"></i>
                                        </div> -->
                                    </div>
                                </div>
                                <!-- data -->
                            </div>
                           </a>
                        </div>
                        <div class="col-xl-6 col-md-6 mb-4 col-6">
                            <div class="card border-left-success shadow h-100 py-2">
                                
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">


                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <button class="btn btn-success shadow" id="doctorbtn"><i class="fa-solid fa-user-doctor mr-1"></i>
                                            <br>
                                            From Doctor</button>
                                            </div>
                                            
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fas fa-users  text-dark"></i>
                                        </div> -->
                                    </div>
                                </div>
                                <!-- data -->
                            </div>
                        </div>
<!-- Hospital div -->
   <div class="card  border-left-primary m-auto" id="hospitaldiv" style="display:none">
   
  <div class="card-body">
  <form action="">
    <div class="form-floating">

 <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
  <label for="floatingTextarea2">Share your problem</label>
  <br>
  <div class="m-auto">
  <button class="btn btn-success" type="submit">Submit</button>
  </div>
 </form>
</div>
  </div>
</div>
     
<!-- Image div -->
<div class="card col-12 col-xl-6 col-md-6 col-sm-6 m-auto " id="imagediv">
   <div class="card-body m-auto">
    <img src="https://i.pinimg.com/originals/4b/22/93/4b229396885b90ea126258e5d19370ec.gif" alt="" class="img-fluid shadow rounded">
    </div>
  </div>
 
<!-- Doctor div -->
<div class=" mt-1 mb-5" id="doctordiv" style="display:none">
    <div class="d-flex justify-content-between mb-3">

       
    </div>
    <div class="row g-2">

        <div class="col-md-3 col-12 col-xl-4 col-sm-6">

            <div class="card p-2 py-3 text-center border-left-info">

                <div class="img mb-2">

                    <img src="https://i.imgur.com/LohyFIN.jpg" width="70" class="rounded-circle">
                    
                </div>

                <h5 class="mb-0">Patey Cruiser</h5>
                <small>Neurosurgeon</small>

                <div class="ratings mt-2">

                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    
                </div>

                <div class="mt-4 apointment d-flex justify-content-center gap-2">

                    <button class="btn btn-success btn-sm" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fa-solid fa-info text-white mr-1"></i></i>More</button>
                    <button class="btn btn-success btn-sm" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1"><i class="fa-solid fa-share text-white mr-1"></i>Share Problem</button>
    
                </div>
                <!-- More  -->
                <div class="collapse mt-2 shadow" id="collapseExample">
                    <div class="card card-body">
                      <p>Education Qualification: Dhaka Medical Collage</p><br>
                      <p>hdsgbcndbc: ahsgcghgsdb</p>
                    </div>
                </div>
                <!-- Share -->
                <div class="collapse mt-2 shadow" id="collapseExample1">
                    <div class="card card-body">
                    <div class="form-floating">

                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Share your problem</label>
                    <br>
                  <div class="m-auto">
                  <button class="btn btn-success" type="submit">Submit</button>
                  </div>
                    </div>
                </div>
            </div>
            
      
</div>
</div>
        <div class="col-md-3 col-12 col-xl-4 col-sm-6">

            <div class="card p-2 py-3 text-center border-left-info">

                <div class="img mb-2">

                    <img src="https://i.imgur.com/LohyFIN.jpg" width="70" class="rounded-circle">
                    
                </div>

                <h5 class="mb-0">Patey Cruiser</h5>
                <small>Neurosurgeon</small>

                <div class="ratings mt-2">

                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    
                </div>

                <div class="mt-4 apointment d-flex justify-content-center gap-2">

                    <button class="btn btn-success btn-sm" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fa-solid fa-info text-white mr-1"></i></i>More</button>
                    <button class="btn btn-success btn-sm" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1"><i class="fa-solid fa-share text-white mr-1"></i>Share Problem</button>
    
                </div>
                <!-- More  -->
                <div class="collapse mt-2 shadow" id="collapseExample">
                    <div class="card card-body">
                      <p>Education Qualification: Dhaka Medical Collage</p><br>
                      <p>hdsgbcndbc: ahsgcghgsdb</p>
                    </div>
                </div>
                <!-- Share -->
                <div class="collapse mt-2 shadow" id="collapseExample1">
                    <div class="card card-body">
                    <div class="form-floating">

                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Share your problem</label>
                    <br>
                  <div class="m-auto">
                  <button class="btn btn-success" type="submit">Submit</button>
                  </div>
                    </div>
                </div>
            </div>
            
        </div>





 
        




        
    </div>
       

   </div>
 


<script>
    $(document).ready(function() {
$('#myTable1').DataTable({
  searching: true,
  paging: true,
  ordering: true
});
});
</script>
<script src="https://kit.fontawesome.com/496c26838e.js" crossorigin="anonymous"></script>
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




    <script>
  document.getElementById("doctorbtn").addEventListener("click", doctor);
  document.getElementById("hospitalbtn").addEventListener("click", hospital);
 
  
  function doctor() {
      var doctordiv = document.getElementById("doctordiv");
      // var hospitalBtn = document.getElementById("hospital");
      var div = document.getElementById("hospitaldiv");
      var imagediv = document.getElementById("imagediv");
      

      if (doctordiv.style.display === "none") {
        doctordiv.style.display = "block";
          imagediv.style.display = "none";
          div.style.display = "none";
          // hospitalBtn.disabled=true;
      } 
      else
      {
        doctordiv.style.display = "none";
        imagediv.style.display = "block";
        // hospitalBtn.disabled=false;
      }
    }

  function hospital() {
      var div = document.getElementById("hospitaldiv");
      var doctordiv = document.getElementById("doctordiv");
      var imagediv = document.getElementById("imagediv");
      // var doctorBtn = document.getElementById("doctor");
      if (div.style.display === "none") {
          div.style.display = "block";
           
          imagediv.style.display = "none";
          doctordiv.style.display = "none";
          // doctorBtn.disabled = true;
      } 
      else
      {
        div.style.display = "none";
        imagediv.style.display = "block";
        // doctorBtn.disabled = false;
      }
    }
  
  </script>
  
</body>

</html>
<?php } ?>