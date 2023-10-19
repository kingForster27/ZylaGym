<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../../vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$phpmailer = new PHPMailer(true);

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$conn = new mysqli('localhost', 'root', '', 'zylagym_db');

$email = validate($_POST['email']);

$res = mysqli_query($conn, "SELECT id FROM user_data WHERE email = '$email'");

        if (mysqli_num_rows($res) > 0){
            
            $user_id = implode(mysqli_fetch_assoc($res));

            try {
                //Server settings
                $phpmailer = new PHPMailer();
                $phpmailer->isSMTP();
                $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
                $phpmailer->SMTPAuth = true;
                $phpmailer->Port = 2525;
                $phpmailer->Username = 'cc7d5df6cf3dc7';
                $phpmailer->Password = '50d6e27d0534dd';       //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            
                //Recipients
                $phpmailer->setFrom('support@zylagym.com', 'ZylaGYM Support');
                $phpmailer->addAddress($email);     //Add a recipient
            
                //Content
                $phpmailer->isHTML(true);                      //Set email format to HTML
                $phpmailer->Subject = 'Confirmare resetare parola';
                $phpmailer->Body    = "Dai click pe urmatorul link pentru ati reseta parola: http://localhost/Zylagym/assets/pages/password_reset.php?user_id=" . $user_id . "";
                $phpmailer->AltBody = "Dai click pe urmatorul link pentru ati reseta parola: http://localhost/Zylagym/assets/pages/password_reset.php?user_id=" . $user_id . "";
            
                $phpmailer->send();
                header("location:../../index.php");
                exit();
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$phpmailer->ErrorInfo}";
            }
            
        }else{
            header("location:../pages/password_reset_email.php?error=Adresa de email nu există");
            exit();
                
        }

