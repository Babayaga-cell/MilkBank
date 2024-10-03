<?php

    if(isset($_POST['submit'])){
    include_once 'db.connection.php';
    
   $name =      mysqli_real_escape_string($conn,$_POST['contactname']);
   $email =     mysqli_real_escape_string($conn,$_POST['contactemail']);
   $subject =   mysqli_real_escape_string($conn,$_POST['contactsubject']);
   $message =   mysqli_real_escape_string($conn,$_POST['contactmessage']);

    $sql = "INSERT INTO contact_us (Contact_Name, Contact_Email, Contact_Subject, Contact_Message)
        VALUES('$name', '$email', '$subject', '$message');";
    mysqli_query($conn,$sql);
    
    if(empty($name) || empty($email) || empty($subject) || empty($message)){
        header("Location: ../ContactUs.php?contactus=empty");
        exit();
        }   
            else{
             if(!filter_var($email, FILTER_VALIDATE_EMAIL)){  
                header("Location: ../ContactUs.php?signup=invalidemail");
                exit();
                }
                else{
                    header("Location: ../ContactUs_Success.php?contactus=success");
                    exit();
                }
        }

    }
        else{
            header("Location: ../ContactUs.php?contactus=error");
            exit();
}