<?php 
    include 'Header.php';

    if(isset($_POST['submit'])){
        $donorspouse=$_POST['donorspouse'];
        $donorgivingbirth=$_POST['donorgivingbirth'];
        $donorreason=$_POST['donorreason'];
        $milkhospital1=$_POST['milkhospital1'];
        $milknumber1=$_POST['milknumber1'];
        $milkhospital2=$_POST['milkhospital2'];
        $milknumber2=$_POST['milknumber2'];
    }   
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
            <form action="BackEnd/donatemilk.be.php" method="POST" >

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
                        <th>Spouse's Name</th>
                        <th>Days Given Birth</th>
                        <th>Reason</th>
                        <th>1st Choice of Hospital</th>
                        <th>Number of Bottles</th>
                        <th>2nd Choice of Hospital</th>
                        <th>Number of Bottles</th>           
                    </tr>
                    <tr>
                        <td>"<?php echo $donorspouse ?>" </td>
                        <td>"<?php echo $donorgivingbirth ?>"</td>
                        <td>"<?php echo $donorreason ?>"</td>
                        <td>"<?php echo $milkhospital1 ?>"</td>
                        <td>"<?php echo $milknumber1 ?>"</td>
                        <td>"<?php echo $milkhospital2 ?>"</td>
                        <td>"<?php echo $milknumber2 ?>"</td>
                    </tr>
                </table>  
                <br>
             
                <div class="form-row">
                  <input type="hidden" name="donorspouse" class="form-control" id="name" minlength="4" maxlength="15" onkeypress="isInputWord(event)" value="<?php echo $donorspouse ?>" placeholder="Spouse’s name" data-rule="minlen:1" data-msg="Please enter A Name" />
                  <input type="hidden" class="form-control" name="donorgivingbirth" id="email" placeholder="Days Given Birth" maxlength="3" onkeypress="isInputNumber(event)" value="<?php echo $donorgivingbirth?>" data-rule="email" data-msg="Please enter a valid email" />
              </div>

              <div class="form-group">
                <input type="hidden" name="donorreason" rows="5" data-rule="required" minlength="4" maxlength="15" onkeypress="isInputWord(event)" value="<?php echo $donorreason ?>" data-msg="Please write something for us" placeholder="Reason"></textarea>
              </div>

                 <!--1st Choice of Hospital -->
                 <div class="form-group">
                <input type="hidden" name="milkhospital1" value="<?php echo $milkhospital1 ?>" id="category" required>                 
              </div>  
              <!--1st number of bottles -->
              <div class="form-group">
                <input type="hidden" name="milknumber1" value="<?php echo $milknumber1?>" id="category"  required>
              </div>

              <!--2nd Choice of Hospital -->
              <div class="form-group">
              <input type="hidden" name="milkhospital2" value="<?php echo $milkhospital2 ?>" id="category" required>
              </div>  

               <!--2nd number of bottles -->
               <div class="form-group">
                <input type="hidden" name="milknumber2" value="<?php echo $milknumber2 ?>" id="category"  required>
              </div>
              <div class="form-group">
                  <center><button type="submit" name="submit">Donate BreastMilk Now!</button></center>
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