<?php
    $nomeP = $_POST['nomeP'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $conteudo = $_POST['mensagem'];

    $assunto_codificado = sprintf('=?%s?%s?%s?=', 'UTF-8', 'Q', quoted_printable_encode($assunto));

    require 'vendor/autoload.php';
    include "PHPMailer-master/PHPMailerAutoload.php";

    //require 'path/to/PHPMailer/src/Exception.php';
    //require 'path/to/PHPMailer/src/PHPMailer.php';
    //require 'path/to/PHPMailer/src/SMTP.php';

    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->CharSet = 'UTF-8';
    $mail->SMTPAuth = true;

    //remetente
    $mail->Username = 'mari.teste.etec@gmail.com';
    $mail->Password = 'Teste123';
    $mail->SMTPSecure = 'ss1';
    $mail->Port = 587;

    $mail->setFrom('mari.teste.etec@gmail.com', 'Mari');
    $mail->SingleTo = true;

    //destinatario
    $mail->addAddress("$email");
    $mail->Subject = $assunto_codificado;
    $mail->Body = $conteudo;

    //teste de sucesso
    if(!$mail->send()){
        echo 'Deu erro: insira os dados corretamente: '. $mail->ErrorInfo; 
        //header('location: email.php');
    }else{
        echo 'Enviado com sucesso!';
        header('Location: ../index.php');
        exit();
    }
?>