<?php 
session_start(); 
include "db-connection.php";

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $name = validate($_POST['name']); 
    $email = validate($_POST['email']);
    $phone = validate($_POST['phone_number']);
    $pass = validate($_POST['password']);
    
    $password_hash = password_hash($pass, PASSWORD_DEFAULT);

    if (empty($name)) {
        header("Location: ../pages/login-form.php?error=Numele trebuie completat");
        exit();
    }else if (empty($email)) {
        header("Location: ../pages/login-form.php?error=Emailul trebuie completat");
        exit();
    }else if (empty($phone)) {
        header("Location: ../pages/login-form.php?error=Numarul de telefon trebuie completat");
        exit();
    }else if(empty($pass)){
        header("Location: ../pages/login-form.php?error=Parola trebuie completata");
        exit();
    }else{
        $sql = "SELECT * FROM user_data WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email) {
                header("Location: ../pages/login-form.php?error= Email-ul este deja folosit");
                exit();
            }
        }else{
            $sql_insert = "INSERT INTO user_data (name, email, password, phone_number) VALUES ('$name', '$email', '$password_hash', '$phone')";
            mysqli_query($conn, $sql_insert);
            header("Location: ../pages/login-form.php");
            exit();
        }
    }