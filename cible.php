<?php 
$message = $_POST['message'];
$headers = 'FROM : site@local.dev';
mail('jfgeerinckx@gmail.com', 'formulaire de contact', $message, $headers);
?>

