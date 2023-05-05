<?php
  if(isset($_GET['email']) && isset($_GET['v_code']))
  {
      
$sql = "SELECT * FROM tbluserregistration WHERE email='$_GET[email]' && varification_code='$_GET[v_code]'"; 
  $result=mysqli_query($con,$sql);
  if($result){
    if(mysql_num_rows($result)==1){
        $row=mysqli_fetch_assoc($result);
        if($row['is_varify']==0){
               $update="UPDATE `tbluserregistration` SET `is_varify`='1' WHERE email='$_GET[email]'";

               if($update)
               {
                echo "Email verify successfully";
               }
               else
               {
                echo "Email verify fail";
               }
        }
    }
    else
    {
        echo "email already exit";
    }

  }
  else{
    echo "sql fial";
  }
  }

?>