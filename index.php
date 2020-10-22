<?php

require("PHPMailer-master/src/PHPMailer.php");
require("PHPMailer-master/src/SMTP.php");

$mail = new PHPMailer\PHPMailer\PHPMailer();

$mail->IsSMTP(); // enable SMTP

$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only

$mail->Host = 'mail.tca.com.br';
$mail->SMTPAuth = true;
//$mail -> SMTPAutoTLS = false ; 
$mail->Port = 465;
$mail->SMTPSecure = 'ssl'; 

 $mail->IsHTML(true);

 $mail->Username = "ti@labbompastor.com.br";
 $mail->Password = "lab@123";
 //$mail->Password = "phwLPp0Og5.Q";
 $mail->SetFrom("ti@labbompastor.com.br");

 $mail->Subject = "Assunto da mensagem";
 $mail->Body = "Escreva o texto do email aqui";
 $mail->AddAddress("ti@labbompastor.com.br");

    if(!$mail->Send()) {
     
       echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
     
       echo "Mensagem enviada com sucesso";
    }
?>