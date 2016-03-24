<?php
session_start();
$_SESSION["formulaire"]=true;

    // destinataire est votre adresse mail. Pour envoyer à plusieurs à la fois, séparez-les par une virgule
    $destinataire = 'thibault.meyer14@gmail.com';

    // formulaire envoyé, on récupère tous les champs.
    $nom     = (isset($_POST['nom']))     ? ($_POST['nom'])     : '';
    $email   = (isset($_POST['email']))   ? ($_POST['email'])   : '';
    $prenom   = (isset($_POST['prenom']))   ? ($_POST['prenom'])   : '';
    $message = (isset($_POST['message'])) ? ($_POST['message']) : '';
    $objet = (isset($_POST['objet'])) ? ($_POST['objet']) : '';
    $headers = '';

    $headers .= 'From:'.$nom.' <'.$email.'>' . "\r\n" .
    'Reply-To:'.$email. "\r\n" .
    'Content-Type: text/plain; charset="utf-8"; DelSp="Yes"; format=flowed '."\r\n" .
    'Content-Disposition: inline'. "\r\n" .
    'Content-Transfer-Encoding: 7bit'." \r\n" .
    'X-Mailer:PHP/'.phpversion();

    mail($destinataire, $objet, $message, $headers);

    //Accusé de réception
    $objetA = 'Votre message "'.$objet.' a bien été envoyé';
    $messageA = 'Votre message a bien été envoyé.'.'\r\n'.
    '"'.$message.'"';

    mail($email, $objetA, $messageA);

    header('Location:'.$asset("app.php/contact"));
?>