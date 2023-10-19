<?php 

session_start();

include "db-connection.php";

if (isset($_POST['name'])){

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }
    
    $name = validate($_POST['name']);
    
    $email = validate($_POST['email']);
    
    $date_start = validate($_POST['date']);
    
    $recurrence = validate($_POST['recurrence']);
    
    $subscription_plan = validate($_POST['subscription_plan']);
    
    $phone_number = validate($_POST['phone_number']);

    $sql = "SELECT * FROM user_data WHERE email='$email'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {

        $row = mysqli_fetch_assoc($result);
        
        if ($row['email'] === $email) {

            $user_id = $row['id'];           
            
            $date_end = date('Y-m-d', strtotime($date_start . ' +30 days'));

            $sql_insert = "INSERT INTO subscription (user_id, recurrence, subscription_plan, date_start, date_end) VALUES ('$user_id', '$recurrence', '$subscription_plan', '$date_start', '$date_end')";

            mysqli_query($conn, $sql_insert);

            header("Location: ../pages/payment-form.php?email=$email");

            exit();
                    
            }

        }else{

            header("Location: ../pages/subscription-form.php");

            exit();
        
        }
}
