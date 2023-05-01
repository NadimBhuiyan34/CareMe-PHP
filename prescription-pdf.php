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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CareMe | Prescription</title>
    <link rel="icon" type="image/png" href="img/title-logo.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="vendor/bootstrap/pdf.css" />
    <script src="vendor/bootstrap/pdf.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <style>
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

<body class="gradient-custom-3">
<?php include_once('includes/topbar.php');?>
    <div class="container d-flex justify-content-center  mb-50">
        <div class="row">
            <div class="col-md-12 text-right mb-3 col-12 col-xl-12">
                <button class="btn btn-primary" id="download"><i class="fa-solid fa-download fa-shake"></i></button>
            </div>
            <div class="col-md-10 col-xl-12 mx-auto col-12">
                <div class="card" id="invoice"> 
                    <div class="card-header d-flex flex-column" style="background-color:#f7e3cd">
                       <div class="mx-auto">
                        <img src="img/logo4.png" alt=""  style="width:150px; height:50px" alt="logo">
                       </div>
                       
                       <div class="mx-auto d-flex flex-column text-dark">
                          <h5 class="mx-auto fw-bold">Dr.Nadim Bhuiyan</h5>
                          <small class="text-center mx-auto">Surgeon,Cardiologist</small>
                          <small class="mx-auto">Associative Professor (Dhaka Medical)</small>

                       </div>
                    </div>
                    <div class="card-body">
                        <div class="row text-black">
                            <div class="col-sm-6 col-12 col-md-6 col-xl-3">
                                 <small>Name: Nadim Bhuiyan</small>
                            </div>
                            <div class="col-sm-6 col-12 col-md-6 col-xl-3">
                                 <small>Age: 25</small>
                            </div>
                            <div class="col-sm-6 col-12 col-md-6 col-xl-3">
                                 <small >Address: Narayanganj</small>
                            </div>
                            <div class="col-sm-6 col-12 col-md-6 col-xl-3">
                                 <small>Date: 12 June 2023</small>
                            </div> 

                        
                        </div>
                        <!-- name part end -->
                          
                       <div class="row">

                        <!-- Symptoms -->
                              <div class="mt-3 text-xl-left text-sm-left text-md-left text-black">
                                   <h5 class="fw-bold">Symptoms</h5>
                                   <hr>
                             </div> 
                             
                             <div class="col-12 col-xl-12">
                                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt voluptatem quam iusto maxime dolor ullam, officiis sed vero dolorum sit deserunt, rerum sint autem. Sed maxime id quos neque accusantium?</p>
                             </div>
                             <!-- Rx table -->
                              <div class="text-xl-left text-sm-left text-md-left text-black">
                                   <h5 class="fw-bold">Rx</h5>
                                   <hr>
                             </div> 
                              <div class="float-left  col-xl-12 col-12 ">
                        
                        <table class=" table-bordered w-100">
                            <thead>
                                <th>Rx</th>
                                <th>Term</th>
                                <th>When</th>
                            </thead>
                            <tbody>
                               <tr>
                                <td>Napa</td>
                                <td>1+1+1</td>
                                <td>After</td>
                               </tr>
                               <tr>
                                <td>Napa</td>
                                <td>1+1+1</td>
                                <td>After</td>
                               </tr>
                               <tr>
                                <td>Napa</td>
                                <td>1+1+1</td>
                                <td>After</td>
                               </tr>
                               <tr>
                                <td>Napa</td>
                                <td>1+1+1</td>
                                <td>After</td>
                               </tr>
                            </tbody>
                        </table>

                    
                       </div>
                        <div class="mt-3 text-xl-left text-sm-left text-md-left text-black">
                                   <h5 class="fw-bold">Test</h5>
                                   <hr>
                       </div> 

                       <div class="text-left">
                        <li class="">Blood Test</li>
                        <li class="">Blood Test</li>
                        <li class="">Blood Test</li>
                        
                       </div>

                        <div class="mt-3 text-xl-left text-sm-left text-md-left text-black">
                                   <h5 class="fw-bold">Advice</h5>
                                   <hr>
                       </div> 

                       <div>
                        <p class="text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore, maxime? Sequi dolor fugiat quaerat dignissimos neque! Corporis et maiores minus esse minima laudantium, illo nemo natus, maxime dolores explicabo eveniet?</p>
                       </div>
                       </div>
                      
                    </div>
                   
                  
                  
                </div>
            </div>
        </div>
    </div>


    
</body>
  <script src="https://kit.fontawesome.com/496c26838e.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
<?php } ?>