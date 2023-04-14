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
    <div class="container d-flex justify-content-center mt-50 mb-50">
        <div class="row">
            <div class="col-md-12 text-right mb-3">
                <button class="btn btn-primary" id="download"> download pdf</button>
            </div>
            <div class="col-md-12">
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
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-4 pull-left">

                                    <ul class="list list-unstyled mb-0 text-left">
                                        <li>2269 Six Sigma</li>
                                        <li>New york city</li>
                                        <li>+1 474 44737 47 </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-4 ">
                                    <div class="text-sm-right">
                                        <h4 class="invoice-color mb-2 mt-md-2">Invoice #BBB1243</h4>
                                        <ul class="list list-unstyled mb-0">
                                            <li>Date: <span class="font-weight-semibold">March 15, 2020</span></li>
                                            <li>Due date: <span class="font-weight-semibold">March 30, 2020</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-md-flex flex-md-wrap">
                            <div class="mb-4 mb-md-2 text-left"> <span class="text-muted">Invoice To:</span>
                                <ul class="list list-unstyled mb-0">
                                    <li>
                                        <h5 class="my-2">Tibco Turang</h5>
                                    </li>
                                    <li><span class="font-weight-semibold">Samantha Mutual funds Ltd</span></li>
                                    <li>Gurung Street</li>
                                    <li>23 BB Lane</li>
                                    <li>Hong kong</li>
                                    <li>234 456 5678</li>
                                    <li><a href="#" data-abc="true">tibco@samantha.com</a></li>
                                </ul>
                            </div>
                            <div class="mb-2 ml-auto"> <span class="text-muted">Payment Details:</span>
                                <div class="d-flex flex-wrap wmin-md-400">
                                    <ul class="list list-unstyled mb-0 text-left">
                                        <li>
                                            <h5 class="my-2">Total Due:</h5>
                                        </li>
                                        <li>Bank name:</li>
                                        <li>Country:</li>
                                        <li>City:</li>
                                        <li>Address:</li>
                                        <li>IBAN:</li>
                                        <li>SWIFT code:</li>
                                    </ul>
                                    <ul class="list list-unstyled text-right mb-0 ml-auto">
                                        <li>
                                            <h5 class="font-weight-semibold my-2">$1,090</h5>
                                        </li>
                                        <li><span class="font-weight-semibold">Hong Kong Bank</span></li>
                                        <li>Hong Kong</li>
                                        <li>Thurnung street, 21</li>
                                        <li>New standard</li>
                                        <li><span class="font-weight-semibold">98574959485</span></li>
                                        <li><span class="font-weight-semibold">BHDHD98273BER</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                  
                  
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
<?php } ?>