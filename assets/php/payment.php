<?php
include "db-connection.php";

if (isset($_POST['card-number'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $email = validate($_POST['email']);
    $recurrence = validate($_POST['recurrence']);
    $subscription_plan = validate($_POST['subscription_plan']);
    $date_start = validate($_POST['date']);
    $date_end = date('Y-m-d', strtotime($date_start . ' +30 days'));
    $card_number = validate($_POST['card-number']);
    $card_date = validate($_POST['card-date']);
    $cvv = validate($_POST['card-cvv']);
    
    $today_date = date('Y-m-d');
    
    if($subscription_plan === "Plan 50 lei")
        $sum = "50 RON";
    else if($subscription_plan === "Plan 125 lei")
        $sum = "125 RON";
    else if($subscription_plan === "Plan 200 lei")
        $sum = "200 RON";
    else if($subscription_plan === "Plan 300 lei")
        $sum = "300 RON";
    
    $encrypt_card_number = $card_number;
    $encrypt_card_date = $card_date;
    $encrypt_card_cvv = $cvv;
  
    // Store the cipher method
    $ciphering = "AES-128-CTR";

    // Use OpenSSl Encryption method
    $iv_length = openssl_cipher_iv_length($ciphering);
    $options = 0;

    // Non-NULL Initialization Vector for encryption
    $encryption_iv = '1234567891011121';
    
    $encryption_key_by_email = openssl_encrypt($email, $ciphering, $email, $options, $encryption_iv);
    
    // Store the encryption key
    $encryption_key = $encryption_key_by_email;

    // Use openssl_encrypt() function to encrypt the data
    $encryption_card_number = openssl_encrypt($encrypt_card_number, $ciphering,$encryption_key, $options, $encryption_iv);
    $encryption_card_date = openssl_encrypt($encrypt_card_date, $ciphering,$encryption_key, $options, $encryption_iv);
    $encryption_card_cvv = openssl_encrypt($encrypt_card_cvv, $ciphering,$encryption_key, $options, $encryption_iv);
    
    $sql = "SELECT * FROM user_data WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        if ($row['email'] === $email) {
            $user_id = $row['id'];
            $user_name = $row['name'];
            $sql_card_id = "SELECT * FROM card_data WHERE user_id = '$user_id'";
            $result2 = mysqli_query($conn, $sql_card_id);
            $row2 = mysqli_fetch_assoc($result2);
                
                if ($row2['card_number'] === $encryption_card_number && $row2['card_date'] === $encryption_card_date) {
                    $card_id = $row2['id'];
                    
                    $sql_insert_payments = "INSERT INTO payments (user_id, card_id, sum, date) VALUES ('$user_id', '$card_id', '$sum', '$today_date')";
                    mysqli_query($conn, $sql_insert_payments);

                    $result3 = mysqli_query($conn, "SELECT MAX(id) AS payment_id FROM payments");
                    $payment_id = implode(mysqli_fetch_assoc($result3));
                    ++$payment_id;

                    $sql_insert = "INSERT INTO subscription (user_id, payment_id, recurrence, subscription_plan, date_start, date_end) VALUES ('$user_id', '$payment_id', '$recurrence', '$subscription_plan', '$date_start', '$date_end')";
                    mysqli_query($conn, $sql_insert);
                    

                    header("Location: ../pages/account.php");
                    exit();
                    
                } else {
                    
                $result3 = mysqli_query($conn, "SELECT MAX(id) AS card_id FROM card_data");
                $card_id = implode(mysqli_fetch_assoc($result3));
                ++$card_id;
                    
                $result4 = mysqli_query($conn, "SELECT MAX(id) AS payment_id FROM payments");
                $payment_id = implode(mysqli_fetch_assoc($result4));
                ++$payment_id;
                    
                $sql_insert2 = "INSERT INTO card_data (user_id, card_number, card_date, cvv) VALUES ('$user_id', '$encryption_card_number', '$encryption_card_date', '$encryption_card_cvv')";
                mysqli_query($conn, $sql_insert2);
                    
                $sql_insert_payments = "INSERT INTO payments (user_id, card_id, sum, date) VALUES ('$user_id', '$card_id', '$sum', '$today_date')";
                mysqli_query($conn, $sql_insert_payments);
                    
                $sql_insert = "INSERT INTO subscription (user_id, payment_id, recurrence, subscription_plan, date_start, date_end) VALUES ('$user_id', '$payment_id', '$recurrence', '$subscription_plan', '$date_start', '$date_end')";
                mysqli_query($conn, $sql_insert);
                        
                header("Location: ../pages/account.php");
                exit();
            }
}else {
        header("Location: ../pages/subscription-form.php?&user_id=$user_id&recurrence=$recurrence&subscription_plan=$subscription_plan&date_start=$date_start&date_end=$date_end&email=$email&card_number=$card_number");
        exit();
    }
}
}
?>