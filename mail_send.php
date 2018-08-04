<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';
/**
 * This example shows sending a message using PHP's mail() function.
 */
//Import the PHPMailer class into the global namespace

//Create a new PHPMailer instance

$mail = new PHPMailer;
//Set who the message is to be sent from
$mail->setFrom('henrot.paul@gmail.com', 'Paul Henrot');
//Set an alternative reply-to address
$mail->addReplyTo('henrot.paul@gmail.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress($_POST['email'], $_POST['firstname']);
//Set the subject line
$mail->Subject = 'PHPMailer mail() test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
/* $mail->msgHTML(file_get_contents('cible.php'), __DIR__); */
//Replace the plain text body with one created manually
ob_start();
include('mail_content.php');
$mail->Body = ob_get_contents();
ob_end_clean();
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
$mail->addAttachment('assets/img/auteur.jpg');
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/style/style.css" />
    <title>Mail envoyé</title>
</head>
<body id="body-mail">
    <div id="mail-background">
        <h1>MERCI VOTRE DEMANDE A BIEN ETE ENVOYEE</h1>
        <h3>Une confirmation par mail vient de vous être envoyée</h3>
    </div>      
<?php header("Refresh:4; url=index.php");?>    
</body>
</html>
<?php 
}
?>
