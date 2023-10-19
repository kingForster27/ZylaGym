<?php 

session_start(); 

include "db-connection.php";

if (isset($_POST['news_email'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }
        
    $email = validate($_POST['news_email']);
    
    $date = date('Y-m-d');

    $sql = "SELECT * FROM newsletter WHERE email='$email'";

    $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['email'] === $email) {

                header("Location: ../pages/about-us.php?error= Email already in use");

                exit();
            }
        }else{
            
            $sql_insert = "INSERT INTO newsletter (email, date) VALUES ('$email', '$date')";
            
            mysqli_query($conn, $sql_insert);
            
            header("Location: ../../index.php");
            
            exit();
        }
    }