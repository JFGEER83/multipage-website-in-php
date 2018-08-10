<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Get variables from the form
$date = date("d-m-Y");
$heure = date("H:i");
$name = $_POST['name'];
$san_name = filter_var($name, FILTER_SANITIZE_STRING);
$firstname = $_POST['firstname'];
$san_first = filter_var($firstname, FILTER_SANITIZE_STRING);
$email = $_POST['email'];
$san_email = filter_var($email, FILTER_SANITIZE_EMAIL);
$choix = $_POST['choix'];
$message = $_POST['message'];
$san_mess = filter_var($message, FILTER_SANITIZE_STRING);
$check = $_POST['check'];

// VALIDATION
    if ($san_name === false || $name == '') {
        $errors['name'] =  "Veuillez indiquer votre nom.";
      }else {
      $errors['nom'] = "";
      }
    if ($san_first === false || $firstname == '') {
        $errors['firstname'] =  "Veuillez indiquer votre prénom.";
      }else {
      $errors['firstname'] = "";
      }
    if ($san_mess === false || $message == '') {
      $errors['message'] =  "Veuillez indiquer votre message.";
    }
      else {
      $errors['message'] = "";
      $mail->Body=$san_mess;
    }
    if ($san_email === false || $email == '') {
      $errors['email'] =  "Veuillez indiquer votre email.";
    }
    else {
      $errors['email'] = "";
      $mail->setFrom=$san_email;
    }
    if (!preg_match("/([w-]+@[w-]+.[w-]+)/",$email)) {
      $errors['email'] = "Format de l'email Incorrect, veuillez indiquer votre email.";
    }


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
    //Set an alternative reply-to address
    //$mail->addReplyTo($email, $name);
    //Recipients
    $mail->addAddress('jfgeerinckx@gmail.com', 'Mail Test');
    $mail->addAddress($email, $name);   

    //Attachments
    $attachement = "images/logo3.gif";
    $mail->addAttachment($attachement);
    
    //body content
    $body = "<p><strong>Bonjour</strong>, le " . $date . " à " .$heure . " ,  " . $name ." a envoyé ce mail, c est un " . $choix . " qui a comme message " . $message ."</p>";
    
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

    // UPLOAD
    $handle = new upload($_FILES['image_field']);
    if ($handle->uploaded) {
      if ($handle->file_src_name_ext === 'png' || $handle->file_src_name_ext === 'jpg' ||$handle->file_src_name_ext === 'jpeg' || $handle->file_src_name_ext === 'gif') {
        $handle->process('./images');
        if ($handle->processed) {
          echo 'image resized';
          $handle->clean();
        }
        else {
          echo 'error : ' . $handle->error;
        }
      }
    }

  //>>>READ FICHIER.TXT <<<
  $monfichier = file_get_contents('fichier.txt');
    // >>>>>>>>>ADD TEXT<<<<<<<<<<<<<
  $monfichier .= 'add test log brackets';
  $add = "test add log";
    // <<<<<REPLACE FICHIER>>>>>>>
  file_put_contents("fichier.txt",$monfichier);
  // OU
    // <<<<<<< ADD in fichier>>>>
  file_put_contents("fichier.txt",$add, FILE_APPEND);
  //MENTION TO USER
  $file = 'logs/logs.txt';
  $date = new DateTime();
  $date = $date->format('Y-m-d H:i:s');
  $texte = $date .$prenom. ' ' .$nom. 'EMAIL :  ' .$email. 'MESSAGE: '.$message.'IMAGE: ci-joint.';
  file_put_contents($file, $texte, FILE_APPEND);


?>
