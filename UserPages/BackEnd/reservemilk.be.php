<?php
session_start();
    if(isset($_POST['submit'])){
    include_once 'db.connection.php';
    
    $userID = strval($_SESSION['userID']);
    $baby_firstname =    mysqli_real_escape_string($conn,$_POST['babyfirstname']);
	$baby_middlename =   mysqli_real_escape_string($conn,$_POST['babymiddlename']); 
	$baby_lastname =     mysqli_real_escape_string($conn,$_POST['babylastname']);
    $baby_gender =       mysqli_real_escape_string($conn,$_POST['babygender']);
    $baby_birthdate =    mysqli_real_escape_string($conn,$_POST['babybirthdate']);

	$date1 = strtotime("now");
	$date2 = strtotime($baby_birthdate);
	$diff = abs($date1 - $date2); 
	$years = floor($diff / (365*60*60*24));
	$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24)); 
	$days = floor(($diff - $years * 365*60*60*24 -  $months*30*60*60*24)/ (60*60*24));
	$baby_age = "Years ".$years." Month ".$months." Days ".$days;
	
	
    $baby_weight =       mysqli_real_escape_string($conn,$_POST['babyweight']);
    $hospital1 = mysqli_real_escape_string($conn,$_POST['milkhospital1']);
    $bottles1 =       mysqli_real_escape_string($conn,$_POST['milknumber1']);
    $hospital2 =   mysqli_real_escape_string($conn,$_POST['milkhospital2']);
    $bottles2 =     mysqli_real_escape_string($conn,$_POST['milknumber2']);
    $date3 = strtotime("now");
    $date3 = date("Y-m-d", strtotime("now"));

    $sql = "INSERT INTO recipient (User_ID, Baby_FirstName, Baby_MiddleName, Baby_LastName, Baby_Gender, Baby_Age, Baby_BirthDate, Baby_Weight, Hospital_Choice1, Number_Bottles1, Hospital_Choice2, Number_Bottles2, Date_OfReceiveRequest )
            VALUES('$userID','$baby_firstname','$baby_middlename','$baby_lastname','$baby_gender','$baby_age','$baby_birthdate','$baby_weight','$hospital1','$bottles1','$hospital2','$bottles2', '$date3');";
            mysqli_query($conn,$sql);

    if(empty($baby_firstname) && empty($baby_middlename) && empty($baby_lastname) && empty($baby_gender) && empty($baby_age) && empty($baby_birthdate) && empty($baby_weight) &&
  empty($hospital1) && empty($bottles1) &&   empty($hospital2) && empty($bottles2)) {

        header("Location: ../ReserveMilk.php?reservemilk=emptyfields");
        exit();
    }       
    else{

        header("Location: ../ReserveMilk_Success.php?reservemilk=success");
        exit();
    }
}
else{
    header("Location: ../ReserveMilk.php?reservemilk=error");
    exit();
}
 
