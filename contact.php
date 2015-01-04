<?php
# if request sent using HTTP_X_REQUESTED_WITH
if( isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) ){
  if (isset($_POST['name']) AND isset($_POST['email'])) {
    $to = 'info@divino.com.uy';

    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	$phone = filter_var($_POST['phone'], FILTER_SANITIZE_EMAIL);
	$hora = filter_var($_POST['hora'], FILTER_SANITIZE_EMAIL);
    $subject = "Agendá tu visita - SleepTECH";
    $message = "<h1 style='font-size:16px; font-weight: 400'><b>".$name."</b> quiere agendar una visita para conocer m&aacute;s sobre los colchones <b>SleepTECH</b></h1> <b>Tel&eacute;fono:</b> ".$phone." <br><br> <b>Hora:</b> ".$hora." <br><br> <b>E-mail:</b> ".$email."  ";

    $sent = email($to, $email, $name, $subject, $message);
    if ($sent) {
      echo '<p style="text-align:center; margin:0px; padding:0px;"><b>Gracias '.$name.'!</b></p> <p style="text-align:center; margin:0px; padding:0px;">Su mensaje fue enviado correctamente.</p>';
    } else {
      echo '<p style="text-align:center; margin:0px; padding:0px;"><b>Su mensaje no pudo ser enviado!</b></p>';
    }
  }
  else {
    echo '<p style="text-align:center; margin:0px; padding:0px;"><b>Todos los campos son obligatorios</b></p>';
  }
  return;
}


function email($to, $from_mail, $from_name, $subject, $message){
  $header = array();
  $header[] = "MIME-Version: 1.0";
  $header[] = "From: {$from_name}<{$from_mail}>";
  /* Set message content type HTML*/
  $header[] = "Content-type:text/html; charset=utf-8";
  $header[] = "Content-Transfer-Encoding: 7bit";
  if( mail($to, $subject, $message, implode("\r\n", $header)) ) return true; 
}
?>