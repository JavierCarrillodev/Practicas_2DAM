<?php

require("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;

function sendMail($subject, $body, $email, $name, $html = false){

    // Configuración inicial de nuestro servidor de correo
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = '6712ee7c832ed8';
    $phpmailer->Password = 'd283184eb40d78';

    // Añadiendo destinatarios
    $phpmailer->setFrom('mark@facebook.com', 'Mark Zuckerberg');
    $phpmailer->addAddress($email, $name);

    //Definiendoe l contenido de mi email
    $phpmailer->isHTML($html);
    $phpmailer->Subject = $subject;
    $phpmailer->Body    = $body;

    // Mandamos el correo
    $phpmailer->send();

}

?>
