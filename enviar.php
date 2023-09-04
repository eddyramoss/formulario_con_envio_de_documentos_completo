<?php

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$celular = $_POST["celular"];
$mensaje = $_POST["mensaje"];
$archivo = $_FILES["archivo"];

$body = "Nombre: " . $nombre .
        "<br>Correo: " . $email.
        "<br>Numero: " . $celular .
        "<br>Mensaje: " . $mensaje;



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Phpmailer/Exception.php';
require 'Phpmailer/PHPMailer.php';
require 'Phpmailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'eddyinf6057@gmail.com';                     //SMTP username
    $mail->Password   = 'erjdovlizndpzvcu';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;

    //correo y contraseña para smtp
    //eddyinf6057@gmail.com
    //erjdovlizndpzvcu

    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
        );    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('eddyinf6057@gmail.com', $nombre);
    $mail->addAddress('eddyinf6057@gmail.com');   //Add a recipient
    $mail->addAddress('eddyinf605@gmail.com');
    $mail->addAddress('joangalym@gmail.com');
    //Se  puede agregar  mas correos para enviar



    // Manejo de archivos adjuntos
    if ($archivo['error'] === UPLOAD_ERR_OK) {
        $archivo_nombre = $_FILES["archivo"]["name"]; // Nombre del archivo original
        $archivo_ruta_temporal = $_FILES["archivo"]["tmp_name"]; // Ruta temporal del archivo subido
        $mail->addAttachment($archivo_ruta_temporal, $archivo_nombre);
    }

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Cibercrimen';
    $mail->Body    = $body;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo json_encode('exito');

} catch (Exception $e) {
    echo json_encode('error');
}
