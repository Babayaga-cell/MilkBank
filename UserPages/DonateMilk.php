<?php 

    include 'Header.php';

    require_once 'BackEnd/db.connection.php';

?>



<body>



<!--======Donate Milk Page====-->

  <main id="main">



    <!-- ======= Donate Milk Section ======= -->

    <section id="donatemilk" class="contact">

      <div class="container">



        <div class="section-title">

          <h2>Donate Milk</h2>

        </div>



        <div class="row">



          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">

          <form action="DonateMilk_Verify.php" method="POST" >

              <div class="form-row">

                <div class="col-lg-6 form-group">

                  <label><b>Donor's Spouse</b></label>

                  <input type="text" name="donorspouse" class="form-control" id="name" minlength="4" maxlength="15" onkeypress="isInputWord(event)" placeholder="Spouse’s name" data-rule="minlen:1" data-msg="Please enter A Name" />

                  <label style="color:#428bca;">Required if married. If not, optional for you to answer.</label>

                  <div class="validate"></div>

                </div>

                <div class="col-lg-6 form-group">

                  <label><b>Date given birth</b></label>                

                  <input type="date" class="form-control" name="donorgivingbirth" id="date" placeholder="Days Given Birth" maxlength="3" onkeypress="isInputNumber(event)" data-rule="minlen:1" data-msg="Please enter a date" />

                  <div class="validate"></div>

                  <label style="color:#428bca;">Optional: If given birth already how old are you when you gave birth?</label>

                </div>

              </div>

              <div class="form-group">

                <label><b>Reason for Donating BreastMilk</b></label>

                <textarea class="form-control" name="donorreason" rows="5" data-rule="required" minlength="4" maxlength="500" onkeypress="isInputWord(event)" data-msg="Please write something for us" placeholder="Reason"></textarea>

                <div class="validate"></div>

              </div>



              <?php

                $sql = "SELECT Hospital_Name FROM hospital";

                $hospital = mysqli_query($conn, $sql);



              ?>



              <div class="form-row">

                <!--1st Choice of Hospital -->

                <div class="col-sm-4 form-group">

                <label>1st Choice of Hospital to Donate Breast Milk</label><br>

                  <select type="location" name="milkhospital1" id="category" required>                 

                      <option value="">- Pick 1st Choice of Hospital -</option>	

                      <?php while($row = mysqli_fetch_array($hospital)):; ?>

                            <option><?php echo $row[0]; ?></option>

                            <?php endwhile ?>

                  </select>

                </div>  

                <!--1st number of bottles -->

                <div class="col-sm-4 form-group">

                <label>Number of Bottles for 1st Choice of Hospital</label><br>

                  <select type="location" name="milknumber1" id="category"  required>

                      <option value="">- Pick Number of bottles (100ML per bottle) -</option>

                      <option value="1">1</option>

                      <option value="2">2</option>

                      <option value="3">3</option>

                      <option value="4">4</option>

                    </select>

                </div>

              </div>



              <?php

                $sql1 = "SELECT Hospital_Name FROM hospital";

                $hospital1 = mysqli_query($conn, $sql1);



              ?>



              <div class="form-row">

                <!--2nd Choice of Hospital -->

                <div class="col-sm-4 form-group">

                <label>2nd Choice of Hospital to Donate Breast Milk</label> <br>

                <select type="location" name="milkhospital2" id="category" required>

                      <option value="">- Pick 2nd Choice of Hospital -</option>	

                      <?php while($row1 = mysqli_fetch_array($hospital1)):; ?>

                            <option><?php echo $row1[0]; ?></option>

                            <?php endwhile ?>

                  </select>

                </div>    



                <!--2nd number of bottles -->

                <div class="col-sm-4 form-group">

                <label>Number of Bottles for 2nd Choice of Hospital</label><br>

                  <select type="location" name="milknumber2" id="category"  required>

                      <option value="">- Pick Number of bottles (100ML per bottle) -</option>

                      <option value="1">1</option>

                      <option value="2">2</option>

                      <option value="3">3</option>

                      <option value="4">4</option>

                    </select>

                </div>

              </div>

             

             <!-- <div class="mb-3">

                <div class="loading">Loading</div>

                <div class="error-message"></div>

                <div class="sent-message">Your message has been sent. Thank you!</div>

              </div>-->



              <div class="form-group">

                <button type="submit" class="btn btn-primary" name="submit">Next</button>

                <form action="ReserveMilk.php" >

                    <button class="btn btn-default" onclick="ResetFunction()">Reset</button>

                  </form>

              </div>

            </form>

          </div>



        </div>



      </div>

    </section>

    <!-- End of Donate Milk Section -->

    

    



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