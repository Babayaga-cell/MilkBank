<?php
require 'BackEnd/db.connection.php';


?>

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Milk Bank PH</h3>
            <p>
              National University <br>
              Manila, Philippines<br><br>
              <strong>Phone:</strong>+63 <br>
              <strong>Email:</strong>projectmilkbank@gmail.com<br>
            </p>
            <div class="social-links mt-3">
              <a href="https://twitter.com" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://www.facebook.com" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.linkedin.com" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="MainPage.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="AboutUs.php">About us</a></li>
              
              
              <li><i class="bx bx-chevron-right"></i> <a href="ContactUs.php">Contact Us</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>

            <?php
             if(isset($_SESSION['userID'])){
              echo'   <li><i class="bx bx-chevron-right"></i> <a href="DonateMilk.php">Donate Milk</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="ReserveMilk.php">Reserve Milk</a></li>';
          }
          else{
            echo' <li><i class="bx bx-chevron-right"></i> <a href="SignUp.php">Sign Up</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="Login.php">Login</a></li>';
          }
        ?>
            
          
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>MILK BANK PH</span></strong>. All Rights Reserved 2020
      </div>
      
    </div>
  </footer><!-- End Footer -->


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
  <script type="text/javascript">
    $(document).ready(function(){
        openLoginModal();
    });
</script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>