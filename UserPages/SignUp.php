
<?php 
    include 'Header.php';
?>

<html>
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

                <label>Full Name</label><br>
              <!-- Full Name -->
                <div class="form-row">
               
                    <div class="col-sm-4 form-group">
					<?php
					if(isset($_GET['firstname'])){
						$firstname = $_GET['firstname'];
						echo '<input type="text" name="firstname" class="form-control" id="name" minlength="1" maxlength="25" onkeypress="isInputWord(event)" placeholder="First Name" value="'.$firstname.'" required  />';
					}	
					else{
						echo '<input type="text" name="firstname" class="form-control" id="name" minlength="1" maxlength="25" onkeypress="isInputWord(event)" placeholder="First Name" required  />';
					}
					?>
                      <div class="validate"></div>
                    </div>
                    
                    <div class="col-sm-4 form-group">
					<?php
					if(isset($_GET['middlename'])){
						$middlename = $_GET['middlename'];
						echo ' <input type="text" name="middlename" class="form-control" id="name" minlength="1" maxlength="25" onkeypress="isInputWord(event)" placeholder="Middle name" value="'.$middlename.'"  required />';
					}	
					else{
						echo '<input type="text" name="middlename" class="form-control" id="name" minlength="1" maxlength="25" onkeypress="isInputWord(event)" placeholder="Middle name"  required />';
					}
					?>
                      <div class="validate"></div>
                    </div>
                    
                    <div class="col-sm-4 form-group">
					<?php
					if(isset($_GET['lastname'])){
						$lastname = $_GET['lastname'];
						echo '<input type="text" name="lastname" class="form-control" id="name" minlength="1" maxlength="25" onkeypress="isInputWord(event)" placeholder="Last name" value="'.$lastname.'" required />';
					}	
					else{
						echo ' <input type="text" name="lastname" class="form-control" id="name" minlength="1" maxlength="25" onkeypress="isInputWord(event)" placeholder="Last name" required />';
					}
					?>
					
                      <div class="validate"></div>
                    </div>
                </div>

                
                <!--Gender-->
                <label>Gender</label><br>
                <div class="form-row">
                  <div class="col-sm-4 form-group">
                    <input type="radio" name="gender" value="male"> Male<br>
                    <input type="radio" name="gender" value="female"> Female<br>
                    <div class="validate"></div>
                  </div>  
                </div>

                <!-- Phone Number-->
                <label>Phone Number</label><br>
                <div class="form-row">
                  <div class="col-sm-4 form-group">
				  
				  <?php
					if(isset($_GET['phonenumber'])){
						$phonenumber = $_GET['phonenumber'];
						echo '<input type="text" class="form-control" name="phonenumber" id="phonenumber" placeholder="Phone Number" required minlength="11" maxlength="11" onkeypress="isInputNumber(event)" value="'.$phonenumber.'" />';
					}	
					else{
						echo '<input type="text" class="form-control" name="phonenumber" id="phonenumber" placeholder="Phone Number" required minlength="11" maxlength="11" onkeypress="isInputNumber(event)" />';
					}
					?>				  
                  <div class="validate"></div>
                  </div>
                </div>

                <!--Home Address-->
                <label>Home Address</label><br>
                <div class="form-row">
                  <div class="col-lg-6 form-group">
				  
				  <?php
					if(isset($_GET['address'])){
						$address = $_GET['address'];
						echo '<input type="text" class="form-control" name="address" id="address" placeholder="Address" required minlength="5" maxlength="40" value="'.$address.'" />';
					}	
					else{
						echo '<input type="text" class="form-control" name="address" id="address" placeholder="Address" required minlength="5" maxlength="40"  />';
					}
					?>
				  
                    <div class="validate"></div>
                  </div>
                </div>

                <!--Birthdate-->
                <label>Birthdate</label><br>
                <div class="form-row">
                  <div class="col-sm-4 form-group">
				  
				  <?php
					if(isset($_GET['birthdate'])){
						$birthdate = $_GET['birthdate'];
						echo '<input type="date" class="form-control" name="birthdate" max="2020-12-31" placeholder="Birthdate" value="'.$birthdate.'" required />';
					}	
					else{
						echo '<input type="date" class="form-control" name="birthdate" max="2020-12-31" placeholder="Birthdate"  required />';
					}
					?>				            
                  <div class="validate"></div>
                  </div>
                </div>  

                <!--Email-->
                <label>Email</label><br>
                <div class="form-row" >
                  <div class="col-sm-4 form-group">
				  
				   <?php
					if(isset($_GET['email'])){
						$email = $_GET['email'];
						echo '<input type="email" class="form-control" name="email" id="email" placeholder="Email" required minlength="10" maxlength="25" value="'.$email.'" />';
					}	
					else{
						echo '<input type="email" class="form-control" name="email" id="email" placeholder="Email" required minlength="10" maxlength="25" />';
					}
					?>
                  <div class="validate"></div>
                  </div>
                </div>  

                 <!--Username-->
                 <label>Username</label><br>
                <div class="form-row" >
                  <div class="col-sm-4 form-group">
                  <input type="text" class="form-control" name="username" id="username" placeholder="Username" required minlength="5" maxlength="10"   required />
				  <span id="availability"></span>			
                  <div class="validate"></div>
                  </div>
                </div>

                <!--Password-->
                <label>Password</label><br>
                <div class="form-row">
                  <div class="col-sm-4 form-group">
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password" minlength="3" maxlength="10"   required />
				  
				  
                  <div class="validate"></div>
                  </div>
                </div>
                

                <!--Re-Type Password-->
                <label>Re-Type Password</label><br>
                <div class="form-row">
                  <div class="col-sm-4 form-group">
                  <input type="password" class="form-control" name="retypepassword" id="password" placeholder="Password" required minlength="3" maxlength="10"  />
                  <div class="validate"></div>
                  </div>
                </div>

                <div class="text-left">
				
				<?php
				  if(isset($_GET['signup'])){		  
					   if(($_GET['signup']== "passwordnotequal")){
						echo '<p style=color:red;"> ReType Password is not equal to the Password</p>';
					
				  }
				else if(($_GET['signup']== "usernameexisting")){
						echo '<p style=color:red;"> Username has already been taken!</p>';
					
				  }
				  
				else if(($_GET['signup']== "emailexisting")){
						echo '<p style=color:red;"> Email has already been taken!</p>';
					
				  }
				  
		}
		?>
                  <button type="submit" name="submit" id="submit">SignUp</button>
				  
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