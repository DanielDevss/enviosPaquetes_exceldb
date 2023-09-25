<?php
require "../vendor/autoload.php";

header("Content-Type: application/json;");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : null;
$mensaje = (isset($_POST['mensaje'])) ? $_POST['mensaje'] : null;
$correo = (isset($_POST['correo'])) ? $_POST['correo'] : null;
$whatsapp = (isset($_POST['whatsapp'])) ? $_POST['whatsapp'] : null;

try {

    $mail->isSMTP();
    $mail->Host = "smtp.titan.email";
    $mail->SMTPAuth = true;
    $mail->Username = "contacto@esyshipment.com";
    $mail->Password = "n{'[#ek==lu]A)b";
    $mail->SMTPSecure = "tls";
    $mail->Port = 587;

    $mail->isHTML(true);
    $mail->Subject = "$nombre ¡Quiere contactarse!";
    $mail->CharSet = "UTF-8";
    $mail->Body = '<html> <head> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> </head> <body> <div style="background:#efefef;padding:14px 20px;border-radius:10px;color:#646464;padding-bottom:1rem;"> <img style="margin:auto;display:block;" src="https://esyshipment.com/assets/img/banner/logotipo.png" width="100px"> <h2 style="margin:0;padding:0;">Datos de contacto:</h2> <b>Whatsapp: </b> <a style="text-decoration:none;" target="_blank" href="https://api.whatsapp.com/send?phone='.$whatsapp.'">'.$whatsapp.'</a> </br> <b>Correo: </b> <a style="text-decoration:none;" target="_blank" href="mailto:'.$correo.'">'.$correo.'</a> </div> </hr> <article style="padding:1rem;border: solid 1px #ededed;border-left:5px solid #636363;margin-top:2rem;border-radius:5px"> <h1 style="margin-bottom:0;padding-bottom:0;">Mensaje:</h1> <p style="padding:0;border:none;margin:0;width:100%">'.$mensaje.'</p> </article> </body> </html>';
    $mail->setFrom("contacto@esyshipment.com");
    $mail->addAddress("contacto@esyshipment.com");

    $mail->send();

    echo json_encode(array("response" => "ok"));
} catch (Exception $err) {

    echo json_encode(array("response" => "error"));
    // echo "Error al enviar mensaje {$mail->ErrorInfo}";

}
