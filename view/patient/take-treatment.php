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

    <title>CareMe | Take-Treatment</title>
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
</style>
</head>



<body id="page-top" class="" style="background-color:#e1f9fc">

<?php include_once('../../includes/topbar.php');?>
 
 


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

<div class="row">
<div class="input-group mb-3 col-10 col-xl-5 mx-auto mb-2" >
  <input type="text" class="form-control shadow" placeholder="Search here" style="border-radius:20px;" id="search">
 
</div>

</div>
    
    <div class="row g-2">

        <div class="col-md-3 col-12 col-xl-4 col-sm-6">

            <div class="card p-2 py-3 text-center border-left-info doctor">

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

            <div class="card p-2 py-3 text-center border-left-info doctor">

                <div class="img mb-2">

                    <img src="https://i.imgur.com/LohyFIN.jpg" width="70" class="rounded-circle">
                    
                </div>

                <h5 class="mb-0">Nadim Bhuiyan</h5>
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
 


 
 
    <script src="vendor/jquery/jquery.min.js"></script>
  


<!-- Button script -->

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
  
  <script>
  const searchBox = document.getElementById('search');

searchBox.addEventListener('input', function () {
  filterDoctors(searchBox.value.toLowerCase());
});
function filterDoctors(query) {
  const doctors = document.querySelectorAll('.doctor');

  doctors.forEach(function (doctor) {
    const name = doctor.querySelector('h5').textContent.toLowerCase();
    const occupation = doctor.querySelector('small').textContent.toLowerCase();

    if (name.includes(query) || occupation.includes(query)) {
      doctor.style.display = '';
    } else {
      doctor.style.display = 'none';
    }
  });
}

  </script>
</body>

</html>
<?php } ?>