<?php
// Put backend code here
require 'BackEnd/db.connection.php';

    include 'Header.php';
?>

<?php
$username = strval($_SESSION['username']);
$userid = strval($_SESSION['userID']);

?>

<body>

<!--======User Profile Page======-->
<main id="main">

    <!-- ======= Login Section ======= -->
    <section id="donatemilk" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>User Profile</h2>
      </div>
    </section>

    <!--The Profile Picture must change depende on the gender of the user-->
    <center><img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive" style="width:400x;height:200px;">
    <br>
    <br>
<?php
$sql = " SELECT  Users_FirstName,Users_MiddleName, Users_LastName,Users_Gender, Users_PhoneNumber,Users_Address,Users_Birthdate,Users_Email, Users_Username, Users_Password  FROM users where Users_Username = '$username'";
$result = mysqli_query($conn, $sql);
$number = mysqli_num_rows($result);
?>

<?php
if ($number == 0) {
    echo "Error";
    }
	
	
 else {
	// output data of each row
    while($row = mysqli_fetch_array($result)) {
        
?>

 <h4 style="color:#00b1b1;"><?php echo "".$row[0]. "&nbsp" . $row[1]."&nbsp".$row[2]."";  $fullname = "".$row[0]. "&nbsp" . $row[1]."&nbsp".$row[2]."";?></h4></span> 
              <hr style="margin:5px 0 5px 0;">

    <br>

      <div class="container">

        <!-- Tab Buttons-->
      <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'Profile')" id="defaultOpen">User Profile</button>
        <button class="tablinks" onclick="openCity(event, 'Donate')">Donate BreastMilk History Transaction</button>
        <button class="tablinks" onclick="openCity(event, 'Reserve')">Reserve BreastMilk History Transaction</button>
        <button class="tablinks" onclick="openCity(event, 'Validation')">Validation Messages</button>
      </div>

        

      <!--====Start of User Profile Section====-->

      <div id="Profile" class="tabcontent">
        <br>
      <div class="section-title">
          <h4 style="color:#00b1b1;">Update User's Information</h4>
      </div>
     
      <!--Start Code User Information-->
      <form method="POST" action="BackEnd/UpdateUser.be.php" >
      
      <div class="form-row">

       <label>First Name</label>
          <div class="col-sm-3 form-group">
         <input type="text" class="form-control" value="<?php echo "".$row[0]."";?>" name="firstname" id="subject"  maxlength="25" minlength="1" onkeypress="isInputWord(event)" />
              <div class="validate"></div>
          </div>
      

        <label>Middle Name</label>
     
          <div class="col-sm-3 form-group">
              <input type="text" class="form-control" value="<?php echo "".$row[1]."";?>" name="middlename" id="subject" maxlength="25" minlength="1" onkeypress="isInputWord(event)"  />
              <div class="validate"></div>
          </div>
       

        <label>Last Name</label>
      
          <div class="col-sm-3 form-group">
              <input type="text" class="form-control" value="<?php echo "".$row[2]."";?>" name="lastname" id="subject"  maxlength="25" minlength="1" onkeypress="isInputWord(event)"  />
              <div class="validate"></div>
          </div>
       
        
      </div>

      <div class="form-row">

      <label>Gender:</label>
        <!--Yung Value must be dynamic -->
          <div class="col-sm-2 form-group">
            
            <input type="radio" name="gender" value="m" <?php echo ($row[3]=='m')?'checked':''?> > Male
            <input type="radio" name="gender" value="f" <?php echo ($row[3]=='f')?'checked':''?> > Female
            <div class="validate"></div>
          </div>  
        

          <label>Phone Number</label>
        
            <div class="col-sm-4 form-group">
                <input type="text" class="form-control" value="<?php echo "".$row[4]."";?>" name="PhoneNumber" id="subject" maxlength="11" minlength="11" onkeypress="isInputNumber(event)" />
                <div class="validate"></div>
            </div>
       
        </div>  
        <div class="form-row">

          <label>Home Address</label>
       
            <div class="col-lg-6 form-group">
                <input type="text" class="form-control" value="<?php echo "".$row[5]."";?>" name="HomeAddress" id="subject"  maxlength="20" minlength="5"  />
                <div class="validate"></div>
            </div>
        

            <label>Birthdate</label><br>    
            <div class="col-sm-4 form-group">
              <input type="date" class="form-control" value="<?php echo "".$row[6]."";?>" name="birthdate" max="2020-12-31"  >
              <div class="validate"></div>
            </div>

        </div>  

        <div class="form-row">
          <label>Email</label>
          <div class="col-sm-4 form-group">
              <input type="email" class="form-control" value="<?php echo "".$row[7]."";?>" name="Useremail" id="subject"  maxlength="30" minlength="8"  />
              <div class="validate"></div>
          </div>  
        </div>   


        <div class="form-row">
           <!--Username-->
            <label>Username</label><br>  
            <div class="col-sm-4 form-group">
              <input type="text" class="form-control" name="username" id="username" value="<?php echo "".$row[8]."";?>" maxlength="20" />
              <div class="validate"></div>
            </div>
                

                <!--Password-->
            <label>Password</label><br>  
            <div class="col-sm-4 form-group">
              <input type="password" class="form-control"  name="password" id="password" value="<?php echo "".$row[9]."";}}?>" maxlength="20"  />
              <div class="validate"></div>
            </div>

        </div>
    
         <!--End User Information-->   
         <br> 
		 <!-- Update Button-->
		 <input type ="submit" name="submit" value="Update Acount" class="btn btn-primary" id="saveBtn"/>
		 </form><br>
		 
         <!--Back Button-->
         <form  action="UserProfile.php" method="POST">
		 <input type ="submit" value="Back" class="btn btn-danger" id="backBtn"/>
		 </form><br>
		 
         <br>
      </div>
       <!--End of User Profile Section-->

      <!--====Start Donate Breast Milk History Transaction Section====-->
      <div id="Donate" class="tabcontent">
      <div class="section-title">
          <h4 style="color:#00b1b1;">Donate BreastMilk History Transaction</h4>
      </div>
        <!--Start Code Donate History Transaction-->
      
     
        <!--End Code Donate History Transaction-->
      </div>
       <!--====End Donate Breast Milk History Transaction Section====-->

      <!--====Start Reserve Breast Milk History Transaction Section====-->
      <div id="Reserve" class="tabcontent">
      <div class="section-title">
          <h4 style="color:#00b1b1;">Reserve BreastMilk History Transaction</h4>
      </div>
      <!--Start Reserve Breast Milk History Transaction Code -->
      <div class="content">
        <div class="row gtr-50">
          <div class="container">  
              <div class="table-responsive">  
                <div id="grid_table_reserve_milk"></div>
              </div>  
            </div>
          </div>
        </div>

       <!--End Reserve Breast Milk History Transaction Code -->           
      </div>
      <!--====Reserve Breast Milk History Transaction Section====-->

      <!--====Start Validation Messages Section====-->
      <div id="Validation" class="tabcontent">
      <div class="section-title">
          <h4 style="color:#00b1b1;">Validation Messages</h4>
      </div>
      
     
                 
      </div>
      <!--====End Validation Messages Section====-->
    </div>
</div>

<br>
<br>

    <!-- End of Login Section -->
    
  </main><!-- End #main -->
<!-- Footer-->
  <?php
    include 'Footer.php';
  ?>

<!--End - of Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
   <!--Start of Grid Table Reserve Milk -->
   <script>
    $('#grid_table_reserve_milk').jsGrid({

      width: "350%",
      height: "300px",

      filtering: true,
      inserting:true,
      editing: true,
      sorting: true,
      paging: true,
      autoload: true,
      pageSize: 10,
      pageButtonCount: 5,
      deleteConfirm: "Do you really want to delete data?",

      controller: {
      loadData: function(filter){
        return $.ajax({
        type: "GET",
        url: "ReserveMilk_Fetch.php",
        data: filter
        });
      },
      },

      fields: [
      {
        name: "Recipient_ID",
    type: "required",
    width: 20
      },
      {
        name: "Baby FirstName", 
    type: "text", 
    width: 20, 
    validate: "required"
      },
      {
        name: "Baby Middle Name", 
    type: "text", 
    width: 20, 
    validate: "required"
      },
      {
        name: "Baby Last Name", 
    type: "text", 
    width: 20, 
    validate: "required"
      },
      {
        name: "Baby Gender", 
    type: "text", 
    width: 20, 
    validate: "required"
      },

      {
        name: "Baby Age", 
    type: "text", 
    width: 20, 
    validate: "required"
      },
      {
        name: "Baby Birthdate", 
    type: "text", 
    width: 20, 
    validate: "required"
      },
      {
        name: "Baby Weight", 
    type: "text", 
    width: 20, 
    validate: "required"
      },
      {
        name: "1st Choice of Hospital", 
    type: "text", 
    width: 20, 
    validate: "required"
      },

      {
        name: "Number of Bottles for Hospital 1", 
    type: "text", 
    width: 20, 
    validate: "required"
      },

      {
        name: "2nd Choice of Hospita", 
    type: "text", 
    width: 20, 
    validate: "required"
      },

      {
        name: "Number of Bottles for Hospital 2", 
    type: "text", 
    width: 20, 
    validate: "required"
      },
   
      {
        type: "control"
      }
      ]

    });

</script>

 <!-- End of Grid table of Reserve Milk-->
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
                            $(function() {
                  $('#profile-image1').on('click', function() {
                      $('#profile-image-upload').click();
                  });
              });       
 </script> 
 
 <script>
        function isInputNumber(evt){
            
            var ch = String.fromCharCode(evt.which);
            
            if(!(/[0-9/]/.test(ch))){
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
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>

<script>
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>