     <?php $root_path = $_SERVER['DOCUMENT_ROOT'].'/CareMe-PHP';?>
    <div class="">
    <nav class="navbar navbar-expand navbar-light topbar mb-5 static-top shadow border-bottom-success w-100" style="background-color:white;" >
    <!-- <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow border-bottom-success w-100 gradient-custom-2"> -->

                
       
<!-- Topbar Search -->
<?php if($_SESSION['user']['id']):?>

<!-- Topbar Navbar -->

<ul class="navbar-nav mr-auto">

    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
   


    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<?php
//Fetching admin Name
$adid=$_SESSION['user']['id'];
$ret1=mysqli_query($con,"select * from tbluserregistration where ID='$adid'");
while($row1=mysqli_fetch_array($ret1)){

?>
<img class="img-profile rounded-circle"
                src="../../img/profile.png">
    <span class="mr-1 text-dark small fs-6 font-weight-bold ml-1"><?php  echo $row1['fullName'];?></span>
           
  
           
                
        </a>
        <!-- Dropdown - User Information -->
<!--                           
        <div class=" dropdown-menu bg-white"
            aria-labelledby="userDropdown"> -->
            <ul class="dropdown-menu  pr-5" aria-labelledby="userDropdown">
              <?php if ($row1['role']=='doctor')
              {?>
            <a class="dropdown-item " href="../../view/doctor/doctor-profile.php">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-dark"></i>
                Profile
            </a>
            <?php }
            else {
            ?>
            <a class="dropdown-item " href="../../view/patient/profile.php">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-dark"></i>
                Profile
            </a>
            <?php
            }
            ?>


            <?php if ($row1['role']=='admin')
               {
                ?>
              <a class="dropdown-item" href="../../view/admin/admin-dashboard.php">
              <i class="fa-solid fa-house fa-sm fa-fw mr-2 text-dark"></i>
                <!-- <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> -->
                Dashboard
            </a>
            
                <?php
               }
               elseif($row1['role']=='doctor')
               {
                ?>
                 <a class="dropdown-item" href="dashboard.php">
                      <i class="fa-solid fa-house fa-sm fa-fw mr-2 text-dark"></i>
                <!-- <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> -->
                Dashboard
            </a>
                <?php
               }
               else
               {
                ?>
                   <a class="dropdown-item" href="dashboard.php">
                      <i class="fa-solid fa-house fa-sm fa-fw mr-2 text-dark"></i>
                         Dashboard
                   </a>
                      <?php
               }
            ?>
         
          <!-- Patient -->

            <div class="dropdown-divider"></div>
            <?php if ($row1['role']=='patient')
              {
            ?>
              <a class="dropdown-item" href="../../view/patient/take-treatment.php">
            <i class="fa-solid fa-stethoscope fa-sm fa-fw mr-2 text-dark"></i>
                <!-- <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> -->
                Take Treatement
            </a>
           <a class="dropdown-item" href="prescription.php">
            <i class="fa-solid fa-prescription fa-sm fa-fw mr-2 text-dark"></i> 
               Prescription
            </a>
            <?php
              }
            ?>

            <!-- Admin -->
            <?php
            if($row1['role']=='admin')
            {
                ?>
            <a class="dropdown-item" href="../../view/admin/patient-list.php">
                <i class="fa-solid fa-hospital-user fa-sm fa-fw mr-2 text-dark"></i>
        
               Patients
            </a>
            <a class="dropdown-item" href="../../view/admin/doctor-list.php">
                <i class="fa-solid fa-user-doctor fa-sm fa-fw mr-2 text-dark"></i>
                
        
               Doctors
            </a>
                <?php
            }
            ?>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="change-password.php">
                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-dark"></i>
                
              Change Password
            </a>
   
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-danger" href="../../view/auth/logout.php" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-danger"></i>
                Logout
            </a>
            </ul>
        <!-- </div> -->
    </li>

</ul>
     <?php } ?>
<?php endif;?>
<img src="../../img/logo4.png"
style="width:120px; height:60px" alt="logo" class="">

</div>
</nav>
    </div>