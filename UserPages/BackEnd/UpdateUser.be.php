<?php
session_start();
?>

<?php

    if(isset($_POST['submit'])){
        include_once 'db.connection.php';
		$userID = strval($_SESSION['userID']);
		
        $firstname =  mysqli_real_escape_string($conn,$_POST['firstname']);
        $middlename =  mysqli_real_escape_string($conn,$_POST['middlename']);
        $lastname =  mysqli_real_escape_string($conn,$_POST['lastname']);
        $gender = mysqli_real_escape_string($conn,$_POST['gender']);
        $PhoneNumber = mysqli_real_escape_string($conn,$_POST['PhoneNumber']);
        $HomeAddress =   mysqli_real_escape_string($conn,$_POST['HomeAddress']);
        $birthdate =     mysqli_real_escape_string($conn,$_POST['birthdate']);
		
		$date1 = strtotime("now");
		$date2 = strtotime($birthdate);
		$diff = abs($date1 - $date2); 
		$years = floor($diff / (365*60*60*24));
		$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24)); 
		$days = floor(($diff - $years * 365*60*60*24 -  $months*30*60*60*24)/ (60*60*24));
		$age = "Years ".$years." Month ".$months." Days ".$days;
		
		$Useremail =     mysqli_real_escape_string($conn,$_POST['Useremail']);
		$username =     mysqli_real_escape_string($conn,$_POST['username']);
		$password =     mysqli_real_escape_string($conn,$_POST['password']);
		

 $sql = "UPDATE users SET User_ID='$userID',Access_ID='1',Users_FirstName ='$firstname',Users_MiddleName='$middlename',Users_LastName ='$lastname',Users_Age ='$age',Users_Gender ='$gender',Users_PhoneNumber ='$PhoneNumber',
 Users_Address ='$HomeAddress',Users_Birthdate ='$birthdate',Users_Email ='$Useremail',
 Users_Username ='$username',Users_Password ='$password',Users_ReTypePassword ='$password',Users_Validation=NULL ,Users_Validation_Expiry=NULL WHERE User_ID = '$userID' ;";
        mysqli_query($conn,$sql);

    if(empty($firstname) && empty($middlename) && empty($lastname) && empty($gender) && empty($PhoneNumber) && empty($HomeAddress) 
        && empty($birthdate) && empty($Useremail) && empty($username) && empty($password)){
        header("Location:../UpdateUserProfile.php");
        exit();
    } 
    
    else{
        header("Location:../UserProfile.php");
        exit();
    }
}

    else{
        header("Location:../UserProfile.php?error=error");
        exit();

    }