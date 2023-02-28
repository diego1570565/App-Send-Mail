<?php
 use PHPMailer\PHPMailer\Exception;
 use PHPMailer\PHPMailer\PHPMailer;

 function Enviar_email($para, $assunto, $mensagem)
 {
    header("Content-type: text/html; charset=utf-8");

     require "PHPMailer/OAuth.php";
     require "PHPMailer/PHPMailer.php";
     require "PHPMailer/POP3.php";
     require "PHPMailer/SMTP.php";

    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = 2;
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username = 'LojaUnnic@gmail.com';
        $mail->Password = 'oammshsdagslfmmp';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        //Recipients
        $mail->setFrom($para, 'UNNIC');
        $mail->addAddress($para, 'UNNIC');
        $mail->isHTML(true);
        $mail->Subject = $assunto;
        $mail->Body    = $mensagem;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Tú digitou errado man, faz favor de fazer o trem direito: {$mail->ErrorInfo}";
    }
 }