<?php 
    
    header('Location:../index.php');

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'PHPMailer-master/src/Exception.php';
    require 'PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/src/SMTP.php';

    $nomeP = $_POST['nomeP'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $conteudo = $_POST['mensagem'];

    $assunto_codificado = sprintf('=?%s?%s?%s?=', 'UTF-8', 'Q', quoted_printable_encode($assunto));

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Mailer = "smtp";

    $mail->SMTPDebug  = 1;  
    $mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;
    $mail->Host       = "smtp.gmail.com";
    $mail->Username   = "mari.teste.etec@gmail.com";
    $mail->Password   = "Teste123";

    $mail->IsHTML(true);
    $mail->AddAddress("$email", "$nomeP");
    $mail->SetFrom("mari.teste.etec@gmail.com", "Mari");
    $mail->AddReplyTo("mari.teste.etec@gmail.com", "Mari");
    $mail->AddCC("mari.teste.etec@gmail.com", "Mari");

    $mail->Subject = "$assunto";
    $content = "<b>$conteudo</b>";

    $mail->MsgHTML($content); 

    if(!$mail->Send()) {
    echo "Error while sending Email.";
    var_dump($mail);
    } else {
    echo "Email sent successfully";
    }
?>