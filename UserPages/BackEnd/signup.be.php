<?php
    if(isset($_POST['submit'])){
        require_once 'db.connection.php';
  
        $firstname =  mysqli_real_escape_string($conn,$_POST['firstname']);
        $middlename =  mysqli_real_escape_string($conn,$_POST['middlename']);
        $lastname =  mysqli_real_escape_string($conn,$_POST['lastname']);
        $gender = mysqli_real_escape_string($conn,$_POST['gender']);
       

       
        $phonenumber =       mysqli_real_escape_string($conn,$_POST['phonenumber']);
        $address =   mysqli_real_escape_string($conn,$_POST['address']);
        $birthdate =   mysqli_real_escape_string($conn,$_POST['birthdate']);
        $email =     mysqli_real_escape_string($conn,$_POST['email']);
        $username =   mysqli_real_escape_string($conn,$_POST['username']);
        $password =     mysqli_real_escape_string($conn,$_POST['password']);
        $retypepassword =   mysqli_real_escape_string($conn,$_POST['retypepassword']);

        $date1 = strtotime("now");
        $date2 = strtotime($birthdate);
        $diff = abs($date1 - $date2); 
        $years = floor($diff / (365*60*60*24));
        $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24)); 
        $days = floor(($diff - $years * 365*60*60*24 -  $months*30*60*60*24)/ (60*60*24));
        $age = "Years ".$years." Month ".$months." Days ".$days;

  

        $sql = "INSERT INTO users (Access_ID, Users_FirstName, Users_MiddleName, Users_LastName, Users_Age, Users_Gender, Users_PhoneNumber, Users_Address, Users_Birthdate, Users_Email, Users_Username, Users_Password, Users_ReTypePassword) VALUES
        (1,'$firstname','$middlename', '$lastname','$age' ,'$gender' ,'$phonenumber', '$address', '$birthdate', '$email', '$username', '$password', '$retypepassword');";
        mysqli_query($conn,$sql);

    if(empty($firstname) && empty($middlename) && empty($lastname) && empty($gender) && empty($phonenumber) && empty($address) 
        && empty($birthdate) && empty($email) && empty($username) && empty($password) && empty($retypepassword) ){
        header("Location: ../SignUp.php?signup=emptyfields");
        exit();
    } 

    else {
        if($password != $retypepassword){
            header("Location: ../SignUp.php?signup=passwordnotequal");
            exit();
        }

        else{
            header("Location: ../SignUp_Success.php?signup=success");
            exit();
        }
    }
    
    
}

    else{
        header("Location: ../SignUp.php?signup=error");
        exit();

    }