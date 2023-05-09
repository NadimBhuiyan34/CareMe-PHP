 <?php
session_start(); // Start the session
if(isset($_SESSION['success'])){
?>
 <div class="my-toast alert alert-<?php echo $_SESSION['success']['type'] ?> alert-dismissible fade show" role="alert" id="alert-message">
  <div class="text-black ">
    <i class="fa-solid <?php echo $_SESSION['success']['icon'] ?> fa-bounce fa-lg mr-2"></i>
    <?php echo $_SESSION['success']['message'] ?>
    <!-- <span class="fs-6"><span id="countdown"> 5</span></span> -->
    <span class="badge rounded-pill bg-primary" id="countdown">5</span>
    
  </div>
</div>

  <?php unset($_SESSION['success']); // Clear the success message ?>
<script>
  var count =5;
  var timer = setInterval(function() {
    document.getElementById('countdown').innerHTML = count;
    count--;
    if (count < 0) {
      clearInterval(timer);
      document.getElementById('alert-message').remove(); // Remove the alert message
    }
  }, 1000);
</script>


<?php
}
?>