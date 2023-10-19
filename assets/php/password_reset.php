<?php

error_reporting(E_ERROR | E_PARSE);

include "db-connection.php";

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$id = validate($_POST['id']);
$password = validate($_POST['new_password']);
$confirm_password = validate($_POST['confirm_new_password']);

    if($password === $confirm_password){
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $edit = mysqli_query($conn, "update user_data set password='$password_hash' where id='$id'");
            if ($edit) {
                mysqli_close($conn);
                header("location:../pages/login-form.php?'$id'");
                exit;
                }
    }else{
        header("location:../pages/password_reset.php?error=Parolele nu sunt la fel"); 
    }   