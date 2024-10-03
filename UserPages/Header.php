<?php
	session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Milk Bank [PH]</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/tabs.css" rel="stylesheet">
</head>

 <!-- ======= Top Bar ======= -->
 <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="icofont-envelope"></i><a href="https://www.google.com/intl/fil/gmail/about/#">projectmilkbank@gmail.com</a>
        <i class="icofont-phone"></i> +63 Number
      </div>
      <nav class="nav-menu float-right d-none d-lg-block">
      <?php
           
          // Checks if the user is logged in or not
        if (isset($_SESSION['userID'])){ // Checks if the username is being logged in
          echo '<li>You are logged in Welcome, '.$_SESSION['username'] .'</li>'; 
        }
        else{ // Not logged in Code
          echo '<li>Welcome to MilkBank. Please log in!</li>';
        }        	
        ?>
      </nav>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="MainPage.php"><span>Milk Bank PH</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>

        
          <li class="active"><a href="MainPage.php">Home</a></li>
          <li class="drop-down"><a href="AboutUs.php">About Us</a>
            <ul>
            <li><a href="Mission_Vision.php">Mission | Vision</a></li>
              <li><a href="ProcessesInTheMilkBank.php">Processes in the MilkBank</a></li>
              <li><a href="LearnMoreAboutBreastMilk.php">Learn About Breastmilk</a></li>
              <li><a href="Partners.php">Partners</a></li>
              <li><a href="Hospitals.php">Hospitals</a></li>
            </ul>
          
          <li><a href="ContactUs.php">Contact Us</a></li>

          <?php

            if(isset($_SESSION['userID'])){
                echo'  <li><a href="DonateMilk.php">Donate Milk</a></li>
                <li><a href="ReserveMilk.php">Reserve Milk</a></li>
                <li class="drop-down"><a href="UserProfile.php">Profile</a>
                <ul>
                <li><center><form action="BackEnd/logout.be.php" method = "POST">
                <button type="submit"  name="logout-submit">Logout</button>
                </form></center></li>
                </ul>';
            }
            else{
              echo' <li><a href="SignUp.php">Sign Up</a></li>
               <li><a href="Login.php">Login</a></li>';
            }
          ?>
         
          <ul>

          </ul>
          </li>
          
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->