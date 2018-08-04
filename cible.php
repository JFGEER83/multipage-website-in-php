<?php 
//Get variables from the form
$name = $_POST['name'];
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$choix = $_POST['choix'];
$message = $_POST['message'];
$check = $_POST['check'];
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
require 'vendor/autoload.php';
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'jfgeerinckx';                 // SMTP username
    $mail->Password = 'secret';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    //Sender
    $mail->setFrom('jfgeerinckx@gmail.com', 'Mail Test');
    //Recipients
    $mail->addAddress($email, $name);   
    //Attachments
    $mail->addAttachment("assets/img/auteur.jpg");
    
    //body content
    $body = "<strong>Bonjour</strong>, voici un mail que" . $name. "a envoyé, c est un" .$choix. "qui a comme message" .$message ;
    
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'PHPMailer GMail SMTP test from'. $name;
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>