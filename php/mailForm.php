<?php
$lastName = $_POST["lastName"];
$firstName = $_POST["firstName"];
$replyMail = $_POST["replyMail"];
$contentMail = $_POST["contentMail"] . "\r\n $lastName $firstName";
$to = "afpa.webdesigners.begles@gmail.com";
$subject = 'Audit AFPA DWWM';
$headers = "From: $replyMail" . "\r\n" .
    "Reply-To: $replyMail" . "\r\n" .
    "X-Mailer: PHP/ . phpversion()";
if (mail($to, $subject, $contentMail, $headers)) {
    $retour = "Votre message a bien été envoyé ! Merci.";
    echo $retour;
}

