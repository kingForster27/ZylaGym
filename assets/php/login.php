<?php 

session_start(); 

include "db-connection.php";

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $email = validate($_POST['email']);
    $pass = validate($_POST['password']);

    if (empty($email)) {
        header("Location: ../pages/login-form.php?error=Introduceți o adresă de email");
        exit();
    }else if(empty($pass)){
        header("Location: ../pages/login-form.php?error=Introduceți parola");
        exit();
    }else{
        $sql = "SELECT * FROM user_data WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            $verify_pass = password_verify($pass, $row['password']);
            if ($row['email'] === $email && $verify_pass){
                
                $ciphering = "AES-128-CTR";
                $iv_length = openssl_cipher_iv_length($ciphering);
                $options = 0;
                $encryption_iv = '1234567891011121';
                $encryption_key_by_email = openssl_encrypt($email, $ciphering, $email, $options, $encryption_iv);

                $_SESSION['email'] = $row['email'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['phone_number'] = $row['phone_number'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['encryption_key'] = $encryption_key_by_email;

                header("Location: ../../index.php");
                exit();

            }else{
                header("Location: ../pages/login-form.php?error=Adresă de email sau parolă incorecte");
                exit();
            }

        }else{
            header("Location: ../pages/login-form.php?error=Adresă de email sau parolă incorecte");
            exit();
        }
    }
