<?php
include_once('../../includes/config.php');
  if(isset($_GET['email']) && isset($_GET['v_code']))
  {
      
$sql = "SELECT * FROM tbluserregistration WHERE emailid='$_GET[email]' && varification_code='$_GET[v_code]'"; 
  $result=mysqli_query($con,$sql);
  if($result){
     
        $row=mysqli_fetch_assoc($result);
        if($row['is_varify']==0){
               $update_sql="UPDATE `tbluserregistration` SET `is_varify`='1' WHERE emailid='$_GET[email]'";
                      $verify=mysqli_query($con,$update_sql);
               if($verify)
               {
                echo "Email verify successfully";
               }
               else
               {
                echo "Email verify fail";
               }
        }
 

  }
  else{
    echo "sql fial";
  }
  }

?>