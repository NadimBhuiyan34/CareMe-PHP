<?php
session_start();
error_reporting(0);
//DB conncetion
include_once('../../includes/config.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if(isset($_POST['submit'])){
function sendMail($email,$v_code,$password,$name)
{
 require '../../vendor/autoload.php';
    $mail=new PHPMailer(true);  
try{
    $mail=new PHPMailer(true);                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'caremeproject2023@gmail.com';                     //SMTP username
    $mail->Password   = 'dxlmmsvhbgoxezib';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            
    $mail->Port       = 465;  
    $mail->setFrom('caremeproject2023@gmail.com');
    $mail->addAddress($email);     //Add a recipient
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Email Verification from CareMe';
    
    $mail->Body = "Dear $name, <br><br>
    Your Email is: $email <br>
    Your password is: $password<br><br>
    please login use this email and password <br><br>
    Click the link to verify your email: <a href='http://localhost/CareMe-PHP/view/admin/verify.php?v_code=$v_code & email=$email'><button>Verify</button></a> ";

     $mail->send();
     return true;
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}                   //Enable verbose debug output
    
}



        $password_length = 8;
        $random_password = '';
        $char_range = array_merge(range('a', 'z'), range('A', 'Z'), range(0, 9));
        for ($i = 0; $i < $password_length; $i++) {
            $random_password .= $char_range[rand(0, count($char_range) - 1)];
        }
 


    $fname=$_POST['fullname'];
    $v_code=bin2hex(random_bytes(16));
    $mnumber=$_POST['mobilenumber'];
    $email=$_POST['emailid'];
    $device_id=$_POST['device_id']; 
    $role=$_POST['role'];
    $userpassword=md5($random_password);
    $ret=mysqli_query($con,"select id from tbluserregistration where emailid='$email'");
    $result=mysqli_num_rows($ret);

if($result==0){

        $query="INSERT INTO `tbluserregistration`( `fullName`, `emailid`, `mobileNumber`, `device`, `loginPassword`, `role`, `varification_code`, `is_varify`) VALUES ('$fname','$email','$mnumber','$device_id','$userpassword','$role','$v_code','0')";

    if(mysqli_query($con, $query) && sendMail($email,$v_code,$random_password,$fname))
    {
   
      
          session_start(); 
      $_SESSION['success'] = "Registration Successfull!";
      // Redirect to some page where you want to show the success message
      header("Location: ../../view/admin/doctor-registration.php");
           exit();
        
    }
    else
    {
          session_start(); 
        $_SESSION['success'] = "Registration Fail";
      // Redirect to some page where you want to show the success message
      header("Location: ../../view/admin/doctor-registration.php");
           exit();
    }

 
}
else 
{
     session_start(); 
     $_SESSION['success'] = "This email is already taken";
      // Redirect to some page where you want to show the success message
      header("Location: ../../view/admin/doctor-registration.php");
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

    <title>CareMe| Doctor Registration</title>
      <?php include_once('../../master.php'); ?>
<style type="text/css">
label{
    font-size:16px;
    font-weight:bold;
    color:#000;
}

</style>
  <script>
function emailAvailability() {

$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'emailid='+$("#emailid").val(),
type: "POST",
success:function(data){
$("#email-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

 

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
          <?php include_once('../../includes/topbar.php');?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
            <form name="newtesting" method="post">
                     <div class="row">

                        <div class="col-lg-6 col-12 col-sm-12 mx-auto">
                             <div class="text-center mt-2 mb-2">
                  <img src="../../img/logo4.png"
                    style="width:190px; height:70px" alt="logo">
                 
                </div>

                            <!-- Basic Card Example -->
                            
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 w-100">
                                    <h6 class="m-0 font-weight-bold text-primary text-center"><i class="fa-solid fa-user-doctor fa-beat fa-xl mr-2"></i>Doctor Registration</h6>
                                </div>
                                <div class="card-body">
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
                                    <input type="hidden" name="role" value="doctor">
                        <div class="form-group">
                                        <label>Full Name</label>
                                            <input type="text" class="form-control" id="fullname" name="fullname"  placeholder="Enter your full name..." pattern="[A-Za-z ]+" title="letters only" required="true">
                                        </div>
                                        <div class="form-group">
                                             <label>Mobile Number</label>
                                  <input type="text" class="form-control" id="mobilenumber" name="mobilenumber" placeholder="Please enter your mobile number" pattern="[0-9]{10}" title="10 numeric characters only" required="true" >
                                            
                                        </div>
                                        <div class="form-group">
                                             <label>Email id</label>
                                            <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Enter your email id" required="true" onBlur="emailAvailability()">    <span id="email-availability-status" style="font-size:12px;"></span>
                                        </div>

                                                <div class="form-group">
                                             <label>Password</label>
                                            <input type="password" class="form-control" id="userpassword" name="userpassword" placeholder="Enter your paassword" required="true">
                                        </div>
           
      <div class="form-group">
                                 <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" id="submit">                           
                             </div>

                                </div>
                            </div>

                        </div>


                    </div>
</form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

          

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



   

</body>

</html>