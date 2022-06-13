<?php
  	session_start();
  	if(isset($_SESSION['admin'])){
    	header('location:home.php');
  	}
?>
<?php include 'includes/header.php'; ?>
        
<!DOCTYPE html>
<html lang="en">
<head>
  <title>UoK Student Voting System</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/uoklogo.jpeg"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
    
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100 p-t-85 p-b-20">
        <form class="login100-form validate-form" action="login.php" method="POST">
          <span class="login100-form-title p-b-70">
<!--            <label style="color: blue;">UoK SVS</label>-->

          </span>
          <span class="login100-form-avatar">
            <img src="images/uoklogo.jpeg" alt="image">
          </span>

         
          <div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter Admin Credentials">
            <input class="input100" type="text" name="username">
            <span class="focus-input100" data-placeholder="Enter Admin Credentials"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
            <input class="input100" type="password" name="password">
            <span class="focus-input100" data-placeholder="Password"></span>
          </div>

          <div class="container-login100-form-btn">
            <button class="login100-form-btn" name="login" type="submit">
              Login
            </button>
             <label style="color: blue; font-size: 20px;"><b>Simple,Transparent,Honest & Reliable.</b></label>
          </div>

          
        </form>
      </div>
    </div>
  </div>
  

  <div id="dropDownSelect1"></div>
     <div>
    <?php
      if(isset($_SESSION['error'])){
        echo "
          <div class='callout callout-danger text-center mt20'>
            <p>".$_SESSION['error']."</p> 
          </div>
        ";
        unset($_SESSION['error']);
      }
    ?>
</div>
  
<?php include 'includes/scripts.php' ?>




  
<!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>
</body>
</html>