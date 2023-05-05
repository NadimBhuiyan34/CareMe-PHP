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

    <title>CareMe | Prescription</title>
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


<div>
<div class="input-group mb-3 col-10 col-xl-5 mx-auto mb-2" >
  <input type="text" class="form-control shadow" placeholder="Search here" style="border-radius:20px;" id="search">
 
</div>

</div>

<div class="row g-2 mx-auto mx-md-0">


<div class="col-md-3 col-6 col-xl-3 col-sm-6 mx-auto">

    <div class="card p-2 py-3 text-center border-left-info mx-auto">

        <div class="img mb-2">

        <i class="fa-solid fa-file-prescription fa-bounce fa-2xl" style="color: #f91a5d;"></i>
            
        </div>

            <h6 style="color:#041f8a">PS-1236</h6>
            <small>Nadim Bhuiyan</small>
            <p>12 June 2023</p>

        
        <div class="mt-1 apointment d-flex justify-content-center gap-2">

            <!-- <a href="" class="btn btn-info btn-sm "><i class="fa-regular fa-eye"></i></a> -->
            <a href="prescription-pdf.php" class="btn btn-success btn-sm "><i class="fa-solid fa-download"></i></a>
           
        </div>
    </div>
</div>
<div class="col-md-3 col-6 col-xl-3 col-sm-6">

    <div class="card p-2 py-3 text-center border-left-info">

        <div class="img mb-2">

        <i class="fa-solid fa-file-prescription fa-bounce fa-2xl" style="color: #f91a5d;"></i>
            
        </div>

            <h6 style="color:#041f8a">PS-1236</h6>
            <small>Nadim Bhuiyan</small>
            <p>12 June 2023</p>

        
        <div class="mt-1 apointment d-flex justify-content-center gap-2">

            <!-- <a href="" class="btn btn-info btn-sm "><i class="fa-regular fa-eye"></i></a> -->
            <a href="prescription-pdf.php" class="btn btn-success btn-sm "><i class="fa-solid fa-download"></i></a>
           
        </div>
    </div>
</div>
<div class="col-md-3 col-6 col-xl-3 col-sm-6 mx-auto">

    <div class="card p-2 py-3 text-center border-left-info mx-auto">

        <div class="img mb-2">

        <i class="fa-solid fa-file-prescription fa-bounce fa-2xl" style="color: #f91a5d;"></i>
            
        </div>

            <h6 style="color:#041f8a">PS-12366</h6>
            <small>Rahim Bhuiyan</small>
            <p>13 June 2023</p>

        
        <div class="mt-1 apointment d-flex justify-content-center gap-2">

            <!-- <a href="" class="btn btn-info btn-sm "><i class="fa-regular fa-eye"></i></a> -->
            <a href="prescription-pdf.php" class="btn btn-success btn-sm "><i class="fa-solid fa-download"></i></a>
           
        </div>
    </div>
</div>
<div class="col-md-3 col-6 col-xl-3 col-sm-6">

    <div class="card p-2 py-3 text-center border-left-info">

        <div class="img mb-2">

        <i class="fa-solid fa-file-prescription fa-bounce fa-2xl" style="color: #f91a5d;"></i>
            
        </div>

            <h6 style="color:#041f8a">PS-1236</h6>
            <small>Nadim Bhuiyan</small>
            <p>12 June 2023</p>

        
        <div class="mt-1 apointment d-flex justify-content-center gap-2">

            <!-- <a href="" class="btn btn-info btn-sm "><i class="fa-regular fa-eye"></i></a> -->
            <a href="prescription-pdf.php" class="btn btn-success btn-sm "><i class="fa-solid fa-download"></i></a>
           
        </div>
    </div>
</div>
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