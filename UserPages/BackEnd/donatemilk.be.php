<?php
session_start();
    if(isset($_POST['submit'])){
        include_once 'db.connection.php';

        $userID = strval($_SESSION['userID']);
        $donorspouse =  mysqli_real_escape_string($conn,$_POST['donorspouse']);
        $donorgivingbirth =  mysqli_real_escape_string($conn,$_POST['donorgivingbirth']);
        $donorreason =  mysqli_real_escape_string($conn,$_POST['donorreason']);
        $hospital1 = mysqli_real_escape_string($conn,$_POST['milkhospital1']);
        $bottles1 =       mysqli_real_escape_string($conn,$_POST['milknumber1']);
        $hospital2 =   mysqli_real_escape_string($conn,$_POST['milkhospital2']);
        $bottles2 =     mysqli_real_escape_string($conn,$_POST['milknumber2']);
        $date1 = strtotime("now");
        $date1 = date("Y-m-d", strtotime("now"));

        $sql = "INSERT INTO donor (User_ID, Donate_Spouse, Donate_DaysGiveBirth, Donate_Reason, Hospital_Choice1, Number_Bottles1, Hospital_Choice2, Number_Bottles2, donor_DonateRequest)
        VALUES('$userID','$donorspouse','$donorgivingbirth','$donorreason', '$hospital1', '$bottles1', '$hospital2', '$bottles2', '$date1');";
        mysqli_query($conn,$sql);

    if(empty($donorspouse) && empty($donorgivingbirth) && empty($hospital1) && empty($bottles1) && empty($hospital2) && empty($bottles2) 
        || empty($donorreason) ){
        header("Location: ../DonateMilk.php?donatemilk=emptyfields");
        exit();
    } 
    
    else{
        header("Location: ../DonateMilk_Success.php?donate=success");
        exit();
    }
}

    else{
        header("Location: ../DonateMilk.php?donatemilk=error");
        exit();

    }