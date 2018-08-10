<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Get variables from the form
$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$choix = $_POST['choix'];
$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
$check = $_POST['check'];
//test code upload
/*$handle = new upload($_FILES['image_field']);
if ($handle->uploaded) {
  $handle->image_convert('jpg', 'jpeg', 'png', 'gif');
  $handle->process('./images');
  if ($handle->processed) {
    echo 'image resized';
    $handle->clean();
  } else {
    echo 'error : ' . $handle->error;
  }
}*/
//fin test code upload

/*use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;*/

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
    $password = 'Fejg83fejg';                             //variable pour protÃ©ger le password
    $mail->Password = $password;                          // SMTP password
    //unset($password);
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Sender
    $mail->setFrom('jfgeerinckx@gmail.com', 'Mail Test');
    //Set an alternative reply-to address
    $mail->addReplyTo($email, $name);
    //Recipients
    $mail->addAddress($email, $name);   

    //Attachments
    $attachement = "assets/img/logo.png";
    $mail->addAttachment($attachement);
    
    //body content
    $body = "<p><strong>Bonjour</strong>, " . $name .", </p><p>Nous avons bien reçu votre demande concernant:</p>".$message."<p>Nous vous envoyons une réponse dans les plus brefs délais.</p><p>Bien cordialement</p><p>L'équipe ASSoc.be</p>";
    
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'PHPMailer GMail SMTP test from'. $name;
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

   if ($mail->send())
    {
    header("location:thanks.php");
  /*   header("Refresh:4; url=index.php"); */
     exit;} 
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>