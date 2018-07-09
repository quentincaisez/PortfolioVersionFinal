<?php
if($_POST){
  $email = $_POST['email'];
  $name = $_POST['name'];
  $sujet = $_POST['sujet'];
  $message = $_POST['message'];
  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
  $headers .= "From: $name <$email>\r\nReply-to : $name <$email>\nX-Mailer:PHP";
  $subject="$sujet";
  $destinataire="quentin.caisez@gmail.com";
  $body="$message";
  if(mail($destinataire,$subject,$body,$headers)) {
    $response['status'] = 'succ&egrave;s';
    $response['msg'] = "Votre message a bien &eacute;t&eacute; envoy&eacute;, merci. Vous allez &ecirc;tre redirig&eacute; vers la page d'acceuil.";
    header( "refresh:5;url=index.html");
  } else {
    $response['status'] = 'erreur';
    $response['msg'] = "Une erreur c'est produite. Vous allez être rediriger vers la page d'acceuil.";
    header( "refresh:5;url=index.html");
  }
  echo json_encode($response);
}
?>