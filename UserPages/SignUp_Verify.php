<?php 
    include 'Header.php';

    if(isset($_POST['submit'])){
        $firstname=$_POST['firstname'];
        $middlename=$_POST['middlename'];
        $lastname=$_POST['lastname'];
        $gender=$_POST['gender'];
        $phonenumber=$_POST['phonenumber'];
        $address=$_POST['address'];
        $birthdate=$_POST['birthdate'];
        $email=$_POST['email'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $retypepassword=$_POST['retypepassword'];
    }   
?>

<body>

<!--======Sign Up Page======-->

  <main id="main">

    <!-- ======= SignUp Section ======= -->
    <section id="donatemilk" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Sign Up</h2>
        </div>

        <div class="row">

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="1000">
            <!--Code form here-->
            <form action="BackEnd/signup.be.php" method="POST" >

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
                        <th>Full Name</th>
                        <th>Gender</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>Birthdate</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Re-type Password</th>
                    </tr>
                    <tr>
                        <td>"<?php echo $firstname." ".$middlename." ".$lastname ?>"</td>
                        <td>"<?php echo $gender ?>"</td>
                        <td>"<?php echo $phonenumber ?>"</td>
                        <td>"<?php echo $address ?>"</td>
                        <td>"<?php echo $birthdate ?>"</td>
                        <td>"<?php echo $email ?>"</td>
                        <td>"<?php echo $username ?>"</td>
                        <td>"<?php echo $password ?>"</td>
                        <td>"<?php echo $retypepassword ?>"</td>
                    </tr>
                </table>  
              
                <div class="form-row">
                      <input type="hidden" name="firstname" class="form-control" id="name" minlength="3" maxlength="15" onkeypress="isInputWord(event)" value="<?php echo $firstname ?>"  placeholder="First Name" required="" data-rule="minlen:1" data-msg="Please enter A Name" />
                      <input type="hidden" name="middlename" class="form-control" id="name" minlength="3" maxlength="15" onkeypress="isInputWord(event)" value="<?php echo $middlename ?>" placeholder="Middle name"  data-rule="minlen:1" data-msg="Please enter A Name" />
                      <input type="hidden" name="lastname" class="form-control" id="name" minlength="3" maxlength="15" onkeypress="isInputWord(event)" value="<?php echo $lastname ?>" placeholder="Last name" required="" data-rule="minlen:1" data-msg="Please enter A Name" />
                </div>
                
                <!--Gender-->
                <div class="form-row">
                    <input type="hidden" name="gender" value="<?php echo $gender ?>" >
                </div>

                <!-- Phone Number-->
                <div class="form-row">
                  <input type="hidden" class="form-control" name="phonenumber" id="phonenumber" placeholder="Phone Number" required="" minlength="11" maxlength="11" onkeypress="isInputNumber(event)" value="<?php echo $phonenumber ?>"  data-rule="email" data-msg="Please enter a valid email" />
                </div>

                <!--Home Address-->
                <div class="form-row">                    
                  <input type="hidden" class="form-control" name="address" id="address" placeholder="Address" required="" minlength="10" maxlength="40" onkeypress="isInputWord(event)" value="<?php echo $address ?>"  data-rule="email" data-msg="Form must not be empty" /> 
                </div>

                <!--Birthdate-->
                <div class="form-row">
                  <input type="hidden" class="form-control" name="birthdate" max="2020-12-31" placeholder="Birthdate" value="<?php echo $birthdate ?>"  required="" data-rule="email" data-msg="Please fill up your birthdate" >
                </div>  

                <!--Email-->
                <div class="form-row">
                  <input type="hidden" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email ?>"  required="" minlength="10" maxlength="25" data-rule="email" data-msg="Please enter a valid email" />
                </div>  

                 <!--Username-->
                <div class="form-row">
                  <input type="hidden" class="form-control" name="username" id="username" value="<?php echo $username ?>"  placeholder="Username" required="" minlength="5" maxlength="10"  data-msg="Please fill up the form!" />
                </div>

                <!--Password-->
                <div class="form-row">
                  <input type="hidden" class="form-control" name="password" id="password" value="<?php echo $password ?>"  placeholder="Password" required="" minlength="3" maxlength="10"  data-msg="Please fill up the form!" />
                </div>

                <!--Re-Type Password-->
                <div class="form-row">
                  <input type="hidden" class="form-control" name="retypepassword" id="password" value="<?php echo $retypepassword?>"  placeholder="Password" required="" minlength="3" maxlength="10"  data-msg="Please fill up the form!" />
                </div>
                <br>
                <div class="form-group">
                  <center><button type="submit" name="submit">Sign Up Now!</button></center>
              </div>

            </form>
            <!--Until here-->
          </div>

        </div>

      </div>
    </section><!-- End of SignUp Section -->

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