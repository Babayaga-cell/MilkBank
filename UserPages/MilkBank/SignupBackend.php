<?php
   
    $firstname = $_POST['fname'];
    $middlename = $_POST['mname'];
    $lastname = $_POST['lname'];
    $birthday =  $_POST['bday'];
    $age =     $_POST['age'];
    $gender =  $_POST['gender'];
    $pnum =  $_POST['pnum'];
    $email =  $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
	
	
	$accessid=0;

if(!empty($firstname) ||!empty($middlename) || !empty($lastname) || !empty($birthday) ||!empty($age) ||!empty($gender) ||!empty($pnum) ||!empty($email) || !empty($username) || !empty($password)){    
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "milkbankdb";
    //create connection
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    
	
//MUST CREATE A FUNCTION FOR AGE DERIVATION FROM BDAY
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT Users_Email From users Where Users_Email = ? Limit 1";
     $INSERT = "INSERT INTO users( Access_ID, Users_FirstName,Users_MiddleName, Users_LastName, Users_Email, Users_Username, Users_Password, Users_Age, Users_Gender, Users_PhoneNumber, Users_Birthdate) 
				VALUES (?,?,?,?,?,?,?,?,?,?,?);";
     //Prepare statement
	 
	 //
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("issssssisss", $accessid,$firstname,$middlename,$lastname,$email,$username,$password,$age,$gender,$pnum,$birthday);
      $stmt->execute();
      echo "Registered Successfully!";
     } else {
      echo "Someone is already registered using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>