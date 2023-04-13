     
    <div class="w-100">
    <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow border-bottom-success w-100" style="background-color:#69f0ff">
    <!-- <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow border-bottom-success w-100 gradient-custom-2"> -->

                
       
<!-- Topbar Search -->
<?php if($_SESSION['aid']):?>

<!-- Topbar Navbar -->

<ul class="navbar-nav mr-auto">

    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
   


    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<?php
//Fetching admin Name
$adid=$_SESSION['aid'];
$ret1=mysqli_query($con,"select fullName from tbluserregistration where ID='$adid'");
while($row1=mysqli_fetch_array($ret1)){

?>
<img class="img-profile rounded-circle"
                src="img/profile.png">
    <span class="mr-1 text-dark small fs-6 font-weight-bold ml-1"><?php  echo $row1['fullName'];?></span>
           
       <?php } ?>
           
                
        </a>
        <!-- Dropdown - User Information -->
<!--                           
        <div class=" dropdown-menu bg-white"
            aria-labelledby="userDropdown"> -->
            <ul class="dropdown-menu  pr-5" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="profile.php">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Profile
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="take-treatment.php">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Take Treatement
            </a>
            <a class="dropdown-item" href="prescription.php">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
               Prescription
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="change-password.php">
                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
              Change Password
            </a>
   
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
            </a>
            </ul>
        <!-- </div> -->
    </li>

</ul>
<?php endif;?>
<img src="img/logo4.png"
style="width:120px; height:60px" alt="logo" class="">

</div>
</nav>
    </div>