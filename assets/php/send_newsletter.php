<?php

session_start(); 

include "db-connection.php";

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../../vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$phpmailer = new PHPMailer(true);

$subject = validate($_POST['subject']);
$message = validate($_POST['message']);

$sql = "SELECT * FROM newsletter";
$result = mysqli_query($conn, $sql);
    
while($row = mysqli_fetch_array($result))
{
    $addresses[] = $row['email'];
}
            try {
                //Server settings
                $phpmailer = new PHPMailer();
                $phpmailer->isSMTP();
                $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
                $phpmailer->SMTPAuth = true;
                $phpmailer->Port = 2525;
                $phpmailer->Username = 'cc7d5df6cf3dc7';
                $phpmailer->Password = '50d6e27d0534dd';                                  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                
                //Content
                $phpmailer->isHTML(true);                                  //Set email format to HTML
                $phpmailer->Subject = $subject;
                $phpmailer->Body    = $message;
                $phpmailer->AltBody =  $message;

                //Recipients
                $phpmailer->setFrom('newsletter@zylagym.com', 'ZylaGYM News');
                foreach($result as $adress){
                    try {
                        $phpmailer->addAddress($adress['email']); 
                    } catch(Exception $e) { continue; } //Add a recipient
                
                    try {
                        $phpmailer->send();
                    }catch (Exception $e) {
                        echo "Message could not be sent. Mailer Error: {$phpmailer->ErrorInfo}";
                    }
                    
                    $phpmailer->clearAddresses();
                    
                }
                header("location:../adminpanel/send_newsletter.php");
                exit();
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$phpmailer->ErrorInfo}";
            }


