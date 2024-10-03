<?php 
    include 'Header.php';

    if(isset($_POST['submit'])){
        $babyfirstname=$_POST['babyfirstname'];
        $babymiddlename=$_POST['babymiddlename'];
        $babylastname=$_POST['babylastname'];
        $babygender= $_POST['babygender'];
        $babybirthdate=$_POST['babybirthdate'];
        $babyweight=$_POST['babyweight'];
        $milkhospital1=$_POST['milkhospital1'];
        $milknumber1=$_POST['milknumber1'];
        $milkhospital2=$_POST['milkhospital2'];
        $milknumber2=$_POST['milknumber2'];
    }   
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
            <form action="BackEnd/reservemilk.be.php" method="POST" >

            <label>Inputted Information</label><br>
              <!-- Full Name -->
              <style>
                table, th, td{
                    border: 1px solid black;
                }
                th, td{
                    padding: 10px;
                }
                </style>
              <table>
                    <tr>
                        <th>Baby's Full Name</th>
                        <th>Baby's Gender</th>
                        <th>Baby's Birthday</th>
                        <th>Baby's Weight</th>
                        <th>1st Choice of Hospital</th>
                        <th>Number of Bottles</th>
                        <th>2nd Choice of Hospital</th>
                        <th>Number of Bottles</th>           
                    </tr>
                    <tr>
                        <td>"<?php echo $babyfirstname." ".$babymiddlename." ".$babylastname ?>"</td>
                        <td>"<?php echo $babygender ?>"</td>
                        <td>"<?php echo $babybirthdate ?>"</td>
                        <td>"<?php echo $babyweight ?>"</td>
                        <td>"<?php echo $milkhospital1 ?>"</td>
                        <td>"<?php echo $milknumber1 ?>"</td>
                        <td>"<?php echo $milkhospital2 ?>"</td>
                        <td>"<?php echo $milknumber2 ?>"</td>
                    </tr>
                </table>  

                <div class="form-group">
                <input type="hidden" class="form-control" name="babyfirstname" id="name" minlength="4" maxlength="15" onkeypress="isInputWord(event)" value="<?php echo $babyfirstname ?>" placeholder="Baby’s FirstName" required="" data-rule="minlen:1" data-msg="Please Enter Your Name"/>
              </div>

              <div class="form-group">
                <input type="hidden" class="form-control" name="babymiddlename" id="name" minlength="4" maxlength="15" onkeypress="isInputWord(event)" value="<?php echo $babymiddlename ?>" placeholder="Baby’s MiddleName" required="" data-rule="minlen:1" data-msg="Please Enter Your Name"/>
              </div>

              <div class="form-group">
                <input type="hidden" class="form-control" name="babylastname" id="name" minlength="4" maxlength="15" onkeypress="isInputWord(event)" value="<?php echo $babylastname ?>" placeholder="Baby’s LastName" required data-rule="minlen:1" data-msg="Please Enter Your Name"/>
              </div>

              <div class="form-group">
									<input type="hidden" name="babygender" value="<?php echo $babygender ?>" id="category"  required>
              </div>
             
              <div class="form-group">
                  <input type="hidden" name="babybirthdate" value="<?php echo $babybirthdate ?>"  min="2018-01-01" max="2020-12-31" required>
              </div>

              <div class="form-group">
                <input type="hidden" class="form-control" name="babyweight" id="subject" placeholder="Weight(Kg)"  maxlength="6" onkeypress="isInputNumber(event)" value="<?php echo $babyweight ?>" required="" data-rule="minlen:1" data-msg="Must be in Kilograms" />
              </div>

              <!--1st Choice of Hospital -->
              <div class="form-group">
                <input type="hidden" name="milkhospital1" value="<?php echo $milkhospital1 ?>" id="category" required>                 
              </div>  
              <!--1st number of bottles -->
              <div class="form-group">
                <input type="hidden" name="milknumber1" value="<?php echo $milknumber1 ?>" id="category"  required>
              </div>

              <!--2nd Choice of Hospital -->
              <div class="form-group">
              <input type="hidden" name="milkhospital2" value="<?php echo $milkhospital2 ?>" id="category" required>
              </div>  

               <!--2nd number of bottles -->
               <div class="form-group">
                <input type="hidden" name="milknumber2" value="<?php echo $milknumber2 ?>" id="category"  required>
              </div>
              
              
              <!--<div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>-->
              <div class="form-group">
                  <center><button type="submit" name="submit">Reserve BreastMilk Now!</button></center>
              </div>
              <br>
              <div class="text-left">
                  <button onclick="ResetFunction()"><a href="ReserveMilk.php" >Reset</a></button>
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