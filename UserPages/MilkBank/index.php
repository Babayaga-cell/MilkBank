<html>
    <head>
        <link href="Main.css" rel="stylesheet"/>
        <script src="jquery-1.10.2.min.js"></script>
        <script src="JQUERY%20Main.js"></script>
    </head>
    <body>
	<div class="wrapper">
  <div class="sliding-background"></div>
</div>
	
        <div id="box">
            <div id="main"></div>
            
            <div id="loginform">
                <h1>LOGIN FORM</h1>
					<form action="SignupBackend"
			method="post">
				<span class="fa fa-user"></span>
                <input type="text" placeholder="Username" required ="" ><br>
				<span class="fa fa-lock"></span>
                <input type="password" placeholder="Password" maxlength="8" size="8" required =""><br>
                <button>LOGIN</button>
            </div>
            </form>
			<form action="SignupBackend.php" method="post">
            <div id="signupform">
			
			<!-- MUST DELETE AGE AND ADD AGE GENERATION VIA Email
				VALIDATION FUNCTION TO BE DISCUSSED
				MUST ADD FIELD FOR ADDRESS ATTRIBUTE-->
                <h1>SIGN UP</h1>
                <input type="text" name="fname" placeholder="First Name"  required><br>
				<input type="text" name="mname" placeholder="Middle Name" required><br>
				<input type="text" name="lname" placeholder="Last Name" required><br>
				<input type="text" name="bday" placeholder="BirthDate" required><br>
				<input type="text" name="age" placeholder="Age" required><br>
				<input type="text" name="gender" placeholder="Gender" required><br>
				<input type="text" name="pnum" placeholder="Phone Number" required>required<br>
				<input type="email" name="email" placeholder="Email" required><br>
                <input type="text" name="username" placeholder="Username" required><br>
                <input type="password" name="password" placeholder="Password" maxlength="8" size="8" /required><br>
                <button type = "submit" name = "signup-submit">SIGN UP</button>
            </div>
           </form>
            <div id="login_msg">Already have an account?</div>
			
            <div id="signup_msg">  HELLO!<br>
			Don't have an account?</div>
            
            <button id="login_btn">LOGIN</button>
            <button id="signup_btn">SIGN UP</button>
            
            
        </div>
		
		 
		<div class="wrapper">
  <div class="sliding-background"></div>
</div>
    </body>
</html>