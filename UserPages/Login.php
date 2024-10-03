<?php 
    include 'Header.php';
?>

<body>

<!--======Log in Page======-->
<main id="main">

    <!-- ======= Login Section ======= -->
    <section id="donatemilk" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Login</h2>
        </div>
        
        <div class="section-title">
        <div class="row">

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
            <!--Code Login Form here -->
              
               <form action="BackEnd/login.be.php" method="POST" >
               <div class="form-group">
                <!--Username-->
                
              
               <!-- <label>Username</label>-->
                <center>
                    <div class="col-md-4 col-md-offset-4">
                    
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username / Email Address" required="" minlength="5" maxlength="30"  data-msg="Please fill up the form!" />
                    <div class="validate"></div>
                    </div>
                </center>
                  
                  <!--<label>Password</label> -->
                  <!--Password-->
                  
                  <center>
                    <div class="col-md-4 col-md-offset-4">
                      
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="" minlength="3" maxlength="30"  data-msg="Please fill up the form!" />
                    <div class="validate"></div>
                    </div>
                  </div>
                  
                
                <button  class="btn btn-success" type="submit" name="login-submit">Login</button>
                </center>
                       </form>
              </div>
        </div>
	 
        <!--Start Error Messages for Login User -->
        <br>
         <div class="container">
           <div class="row justify-content-md-center">
            <div class="col col-lg-5">

        <?php
       
        if(isset($_GET['login'])){
          if($_GET['login'] == "wrongpassword"){

            echo '<div class="alert alert-danger center-block" style="width:100%" role="alert">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  	<label>Wrong Password</label>
		  </div>';
          }

          else if($_GET['login'] == "nouser"){
            echo '
                <div class="alert alert-danger center-block" style="width:100%" role="alert">
                <label>No User available</label>
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                </div>
          ';

          }

          else{

            echo '
                <div class="alert alert-primary center-block" style="width:100%" role="alert">
                	<label>Login Here!</label>
                  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             	</div>
          ';
          }
        }
        
        ?>
           </div>
          </div>
        </div>

          
         <!--End Error Messages for Login User -->		
       
       
            <!--Until here-->
            <br>
            <div class="section-title">
              <label>No Account Yet? <a href="SignUp.php">Sign Up Now</a></label>
            </div>
          </div>

        
        </div>
      </div>
    </section>
    <!-- End of Login Section -->
    
  </main><!-- End #main -->
<!-- Footer-->
  <?php
    include 'Footer.php';
  ?>

<!--End - of Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>