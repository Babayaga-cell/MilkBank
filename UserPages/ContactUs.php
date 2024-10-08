<?php 
    include 'Header.php';
?>

<!--===== Contact Us Page=====-->
<body class ="mobile-nav-active">


  <main id="main">

     <!-- ======= Contact Us Section ======= -->
     <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact Us</h2>
        </div>

        <div class="row">

          <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>551 M.F. Jhocson St, Sampaloc, Manila, 1008 Metro Manila</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>projectmilkbank@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box ">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>099999991323</p>
            </div>
          </div>

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
            <form action="BackEnd/contacts.be.php" method="POST" >
              <div class="form-row">
                <div class="col-lg-6 form-group">
                  <input type="text" name="contactname" class="form-control" id="name" placeholder="Your Name" minlength = "2" maxlength = "30" onkeypress="isInputWord(event)" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required/>
                  <div class="validate"></div>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" class="form-control" name="contactemail" id="email" placeholder="Your Email" minlength = "2" maxlength = "50"  data-rule="email" data-msg="Please enter a valid email" required/>
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="contactsubject" id="subject" placeholder="Subject" minlength = "2" maxlength = "50" onkeypress="isInputWord(event)" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="contactmessage" rows="5" data-rule="required" onkeypress="isInputWord(event)" minlength = "2" maxlength = "100" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <!--<div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>-->
              <button type="submit" class="btn btn-primary" name="submit">Send Message</button>
           
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->
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
 <script>
        function isInputNumber(evt){
            
            var ch = String.fromCharCode(evt.which);
            
            if(!(/[0-9/.]/.test(ch))){
                evt.preventDefault();
            }
        }
     </script>
	 
	 <script>
        function isInputWord(evt){
            
            var ch = String.fromCharCode(evt.which);
            
            if(!(/[a-z A-Z]/.test(ch))){
                evt.preventDefault();
            }
        }
     </script>
	 
	 <script>
function ResetFunction() {
  alert("Reset This Page");
}
</script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>