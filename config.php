<?php
session_start();
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

$para = $_SESSION['para'];
$assunto = $_SESSION['assunto'];
$mensagem = $_SESSION['mensagem'];


Enviar_email($para , $assunto , $mensagem);

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
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = $_SESSION['principal'];
        $mail->Password = $_SESSION['senha'];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom($para, 'UNNIC');
        $mail->addAddress($para, 'UNNIC');
        $mail->isHTML(true);
        $mail->Subject = $assunto;
        $mail->Body = $mensagem;

        $mail->send();
        
    } catch (Exception $e) {
        header('location:index.php?email=nenviado');
    }
}
header('location:index.php?email=enviado');
