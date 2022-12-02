<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

if(isset($_POST ["email"])){

    $emailTo = $_POST["email"];
    
   
    $mail = new PHPMailer(true);
        $mail->isSMTP();                                            
        $mail->Host       = 'smtp.gmail.com';                    
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = 'danimaltoc@gmail.com';                   
        $mail->Password   = 'plzvbivrrqwprjkz';                               
        $mail->SMTPSecure = 'smtp';            
        $mail->Port       = 587;                                   
    

        $mail->setFrom('danii@suporte.com.br', 'Daniela');
        $mail->addAddress("$emailTo");     //Add a recipient
        $mail->addReplyTo('no-reply@gmail.com', 'No reply');

        
        $mail->Subject = $subject;
        $mail->Body = $message;

        $mail->send();

        header("Location:../php/sent.html");
    
}