<?php 
    include 'Header.php';
    require_once 'BackEnd/db.connection.php';
?>

<body>

<!--====Reserve Milk Page======-->

  

  <main id="main">

    <!-- ======= Reserve Milk Section ======= -->
    <section id="reservemilk" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Reserve Milk</h2>
        </div>

        <div class="row">
          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
          <form action="ReserveMilk_Verify.php" method="POST" >

          <label>Full Name</label><br>
              <!-- Full Name -->
            <div class="form-row">
               
              <div class="col-sm-4 form-group">
                <input type="text" class="form-control" name="babyfirstname" id="name" minlength="1" maxlength="30" onkeypress="isInputWord(event)" placeholder="Baby’s FirstName" required="" data-rule="minlen:1" data-msg="Please Enter Your Name"/>
                <div class="validate"></div>
              </div>
               
              <div class="col-sm-4 form-group">
                <input type="text" class="form-control" name="babymiddlename" id="name" minlength="1" maxlength="30" onkeypress="isInputWord(event)" placeholder="Baby’s MiddleName" required="" data-rule="minlen:1" data-msg="Please Enter Your Name"/>
                <div class="validate"></div>
              </div>
               
              <div class="col-sm-4 form-group">
                <input type="text" class="form-control" name="babylastname" id="name" minlength="1" maxlength="30" onkeypress="isInputWord(event)" placeholder="Baby’s LastName" required data-rule="minlen:1" data-msg="Please Enter Your Name"/>
                <div class="validate"></div>
              </div>

           </div>

           
                  <div class="form-row">
                  
                  <div class="col-sm-2 form-group">
                  <label>Gender</label><br>
                    <input type="radio" name="babygender" value="male"> Male<br>
                    <input type="radio" name="babygender" value="female"> Female
                    <div class="validate"></div>
                  </div>  
                  
               
                <div class="col-sm-2 form-group">
                    <label>Birthday</label><br>
                      <input type="date" name="babybirthdate"  min="2018-01-01" max="2020-12-31" required>
                      <div class="validate"></div>
                </div>

                
                  <div class="col-sm-4 form-group">
                  <label>Weight</label><br>
                    <input type="text" class="form-control" name="babyweight" id="subject" placeholder="Weight(Kg)"  maxlength="6" onkeypress="isInputNumber(event)" required="" data-rule="minlen:1" data-msg="Must be in Kilograms" />
                    <div class="validate"></div>
                  </div>
              </div>
              
              <?php
                $sql = "SELECT Hospital_Name FROM hospital";
                $hospital = mysqli_query($conn, $sql);

              ?>

              <!--1st Choice of Hospital -->
              <div class="form-group">
              <label>1st Choice of Hospital to Reserve Breast Milk</label><br>
                <select type="location" name="milkhospital1" id="category" required>                 
                    <option value="">- Pick 1st Choice of Hospital -</option>	
                    <?php while($row = mysqli_fetch_array($hospital)):; ?>
													<option><?php echo $row[0]; ?></option>
													<?php endwhile ?>
                </select>
              </div>  
              <!--1st number of bottles -->
              <div class="form-group">
              <label>Number of Bottles</label><br>
                <select type="location" name="milknumber1" id="category"  required>
                    <option value="">- Pick Number of bottles (100ML per bottle) -</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
              </div>
              <?php
                $sql1 = "SELECT Hospital_Name FROM hospital";
                $hospital1 = mysqli_query($conn, $sql1);

              ?>

              <!--2nd Choice of Hospital -->
              <div class="form-group">
              <label>2nd Choice of Hospital to Reserve Breast Milk</label> <br>
              <select type="location" name="milkhospital2" id="category" required>
                    <option value="">- Pick 2nd Choice of Hospital -</option>	
                    <?php while($row1 = mysqli_fetch_array($hospital1)):; ?>
													<option><?php echo $row1[0]; ?></option>
													<?php endwhile ?>
                </select>
              </div>  

               <!--2nd number of bottles -->
               <div class="form-group">
               <label>Number of Bottles</label><br>
                <select type="location" name="milknumber2" id="category"  required>
                    <option value="">- Pick Number of bottles (100ML per bottle) -</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
              </div>
              
              
              <!--<div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>-->
              <div class="form-group">
                  <button type="submit" class="btn btn-success" name="submit">Next</button>
                  <form action="ReserveMilk.php" >
                    <button class="btn btn-default" onclick="ResetFunction()">Reset</button>
                  </form>
              </div>
              <br>
              <div class="form-group">
               
                  
              </div> 
            </form>
          </div>

        </div>

      </div>
    </section>
        <!-- End of Reserve Milk Section -->

   
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