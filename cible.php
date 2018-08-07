<?php 

//Get variables from the form
$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$choix = $_POST['choix'];
$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
$check = $_POST['check'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'jfgeerinckx';                      // SMTP username
    $password = 'Fejg83fejg';                             //variable pour protéger le password
    $mail->Password = $password;                          // SMTP password
    //unset($password);
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Sender
    $mail->setFrom('jfgeerinckx@gmail.com', 'Mail Test');
    //Recipients
    $mail->addAddress($email, $name);   

    //Attachments
    $attachement = "images/logo3.gif";
    $mail->addAttachment($attachement);
    
    //body content
    $body = "<p><strong>Bonjour</strong>, " . $name ." a envoyé ce mail, c est un " . $choix . " qui a comme message " . $message ."</p>";
    
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'PHPMailer GMail SMTP test from'. $name;
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

   if ($mail->send())
    {
       header("location:http://localhost/multipage-website-in-php/thanks.php");
    exit;}
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>
