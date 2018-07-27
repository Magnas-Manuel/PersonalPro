<?php

namespace negocio\util;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Envio_Correo {

    public static function enviarcorreo($param) {
       // print_r($param->getCorreo());
        print_r($param);
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
            $mail->SMTPDebug = 0;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'personalpro.xml@gmail.com';                 // SMTP username
            $mail->Password = 'personal2018pro';                       // SMTP username

            $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465;                                    // TCP port to connect to

            $mail->setFrom('personalpro.xml@gmail.com', 'Clave y Usuario');

            $mail->addAddress($param['correo'], $param['nombre']);     // Add a recipient

            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body = 'clave '.$param['clave'].'Nombre usuario '.$param['nombre_usuario'];
            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Listo el pollo';
        } catch (Exception $e) {
//    print_r($e);
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    }

}
