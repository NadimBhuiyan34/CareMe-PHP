 <?php
session_start();
 
 
include_once('../../includes/config.php');
$sql = "SELECT * FROM tbluserregistration WHERE role='doctor' ORDER BY regDate DESC";
$doctor = $con->query($sql);
if (!$doctor) {
  { echo "Error: " . $sql . "<br>" . $con->error; }
}


 if (strlen($_SESSION['user']['id']==0)) {
  header('location:../../view/auth/logout.php');
  } 
 if ($_SESSION['user']['role'] != "admin") {
    if (isset($_SERVER['HTTP_REFERER'])) {
        // Redirect back to the previous page
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit;
    } else {
        // Redirect to a default page
        header("Location: /default.php");
        exit;
    }
}


{
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CareMe | Doctors</title>
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
.tableFixHead {
        overflow-y: auto; /* make the table scrollable if height is more than 200 px  */
        height: 400px; /* gives an initial height of 200px to the table */
      }
      .tableFixHead thead{
        position: sticky; /* make the table heads sticky */
        top: 0px; /* table head will be placed from the top of the table and sticks to it */
        z-index: 1;
      }
      table {
        border-collapse: collapse; /* make the table borders collapse to each other */
        width: 100%;
      }
      .tableFixHead::-webkit-scrollbar {
  display: none; /* hide the scrollbar for webkit browsers (Chrome, Safari, etc.) */
}
       /* remove arrow sign in datatable header */
 
/* decrease header width in datatable */
 
 
.gradient-custom-2 {
/* fallback for old browsers */
/* background: #74fcd8; */
background: #00ffe1;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, #6df2f0, #6df2f0, #6df2f0, #6df2f0);

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
/* background: linear-gradient(to right, #ff6021,#6df2f0,#6df2f0,#6df2f0); */
}   
.gradient-custom-3 {
/* fallback for old browsers */
background:#e3fffc;
/* background:#e3fffc; */

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, #6df2f0, #6df2f0, #6df2f0, #6df2f0);

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
/* background: linear-gradient(to right, #e6fcf5, #e6fcf5, #e6fcf5, #e6fcf5); */
}  
#search:focus {
    animation: scale-in 0.3s ease-in-out;
  }

  @keyframes scale-in {
    0% {
      transform: scale(1);
    }
    50% {
      transform: scale(1.1);
    }
    100% {
      transform: scale(1);
    }
  }  
  .hidden{
    display:none;
  }
</style>
</head>



<body  class="gradient-custom-3">
 
<?php include_once('../../includes/topbar.php');?>


<div class="row mx-auto">
  <div class="col-5">
    <a href="../../view/admin/doctor-registration.php" class="btn btn-success btn-sm p-2"><i class="fa-solid fa-plus mr-1"></i>Add Doctor</a>
 
  </div>
  
<div class="input-group mb-3 col-7 col-xl-5 mx-auto mb-2" >
  <input type="text" class="form-control shadow" placeholder="Search here" style="border-radius:20px;" id="search">
 
</div>

</div>
<hr class="shadow bg-primary">
<div class="row g-2  mx-md-0 mx-auto">

  <?PHP while ($row = mysqli_fetch_assoc($doctor)) {?>
<div class="col-md-3 col-6 col-xl-3 col-sm-6 mx-auto">

    <div class="card p-2 py-3 text-center border-left-info mx-auto">

        <div class="img mb-2">

         <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="" class="rounded-circle" style="width:70px; height:70px;">
            
        </div>

            <h6 style="color:#041f8a"><?php echo $row['fullName'] ?></h6>
            <small><?php echo $row['fullName'] ?></small>
            <p>12 June 2023</p>

        
        <div class="mt-1 apointment d-flex justify-content-center gap-2">

            <!-- <a href="" class="btn btn-info btn-sm "><i class="fa-regular fa-eye"></i></a> -->
           <a href="" class="btn btn-primary btn-sm"><i class="fa-solid fa-circle-info mr-1"></i>Details</a>
           
        </div>
    </div>
</div>
 <?php } ?>

 
 
 
</div>



 
                    
    

    


 

  <script>
    // get the search input field and all the card elements
const searchInput = document.getElementById('search');
const cards = document.querySelectorAll('.card');

// add event listener to search input field
searchInput.addEventListener('input', filterCards);

function filterCards() {
  // get the search input value and convert it to lowercase
  const searchValue = searchInput.value.toLowerCase();

  // loop through all the card elements and check if their text content matches the search input value
  for (let i = 0; i < cards.length; i++) {
    const card = cards[i];
    const cardTitle = card.querySelector('h6').textContent.toLowerCase();
    const cardSubtitle = card.querySelector('small').textContent.toLowerCase();
    const cardDate = card.querySelector('p').textContent.toLowerCase();
    const isMatch = cardTitle.includes(searchValue) || cardSubtitle.includes(searchValue) || cardDate.includes(searchValue);

    // show or hide the card elements based on the search results
    if (isMatch) {
      card.style.display = 'block';
    } else {
      card.style.display = 'none';
    }
  }
}

  </script>
</body>

</html>
<?php } ?>