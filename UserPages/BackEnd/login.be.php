<?php



if(isset($_POST['login-submit'])){

    require 'db.connection.php';

    $username = $_POST['username'];

    $password = $_POST['password'];



    if(empty($username) && empty($password)){

        header("Location: ../Login.php?login=emptyfields");

        exit();

    }

    else{

        $sql = "SELECT * FROM users WHERE Users_Username=? OR Users_Email=?;";

        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)){

            header("Location: ../Login.php?login=sqlerror");

            exit();

        }

        else{

            mysqli_stmt_bind_param($stmt, "ss", $username, $username);

            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);

            if($row = mysqli_fetch_assoc($result)){

                $password_hash = password_hash($row['Users_Password'], PASSWORD_DEFAULT);

                $passwordCheck = password_verify($password,  $password_hash);

                if($passwordCheck == false){

                    header("Location: ../Login.php?login=wrongpassword");

                    exit();

                } 

                else if($passwordCheck == true){

                    session_start();

                    $_SESSION['userID'] = $row['User_ID'];

                    $_SESSION['username'] = $row['Users_Username'];

                 

                    header("Location: ../MainPage.php?login=success");

                    exit();

                }

                else{

                    header("Location: ../Login.php?login=wrongpassword");

                    exit();

                }

            }

            

            else{

                header("Location: ../Login.php?login=nouser");

                exit();

            }

        }

    }

}



else{

    header("Location: ../Login.php?login=error");

    exit();



}