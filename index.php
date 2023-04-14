<?php 
session_start();
error_reporting(0);
//DB conncetion
include_once('includes/config.php');




if(isset($_POST['login']))
  {
$email=$_POST['emailid'];
$userpassword=$_POST['userpassword'];
    $query=mysqli_query($con,"select id from tbluserregistration where  emailid='$email' && loginPassword='$userpassword' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['aid']=$ret['id'];
     header('location:dashboard.php');
    }
    else{
      session_start(); // Start the session
      // Perform some action and set a success message
      $_SESSION['success'] = "Your email or password is not correct!";
      // Redirect to some page where you want to show the success message
      header("Location: index.php");
      exit();
              
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CareMe |  User Login</title>
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
<style type="text/css">
label{
    font-size:16px;
    font-weight:bold;
    color:#000;
}




.gradient-custom-2 {
/* fallback for old browsers */
background: #fccb90;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, #ee7728, #d8363a, #dd3677, #b44593);

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
}

@media (min-width: 768px) {
.gradient-form {
height: 100vh !important;
}
}
@media (min-width: 769px) {
.gradient-custom-2 {
border-top-right-radius: .3rem;
border-bottom-right-radius: .3rem;
}
}
</style>


</head>

<body id="page-top" style="background-image: url('https://i.pinimg.com/originals/36/42/29/3642291603d80cbf90ee7421ba227a8b.jpg');" class="row">

   
 




 
  
        <div class="card rounded-5 text-black shadow mt-5 mx-auto " style="width:350px">
        <?php
session_start(); // Start the session
if(isset($_SESSION['success'])){
  ?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <?php echo $_SESSION['success'] ?>
 
</div>
<?php
 
  
  unset($_SESSION['success']); // Clear the success message
}
?>   
              <div class="card-body p-md-3 mx-md-3">

                <div class="text-center">
                  <img src="img/logo4.png"
                    style="width:190px; height:70px" alt="logo">
                 
                </div>

                <form name="newtesting" method="post" class="m-auto">
                  <!-- <p class="text-center">Please login to your account</p> -->

                 
                  <div class="form-group">
                          <label>Email</label>
                           <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Enter your email " required="true">
                 </div>
                 
 
                  <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" id="userpassword" name="userpassword" placeholder="Enter your paassword" required="true">
                                           
                  </div>
           
                  <div class="text-center pt-1 mb-2 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" name="login" id="submit">Log
                      in</button>
                      <a href="password-recovery.php">Forgot Password</a>
                  </div>
<!-- 
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="mb-0 me-2">Don't have an account?</p>
                     <a href="" class="ml-2">Create Account</a>
                  </div> -->

                </form>
</div>
  </div>
 


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>