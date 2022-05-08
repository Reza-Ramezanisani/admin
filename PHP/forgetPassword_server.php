<?php

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

// require_once __DIR__ . '/PHPMailer/src/Exception.php';
// require_once __DIR__ . '/PHPMailer/src/PHPMailer.php';
// require_once __DIR__ . '/PHPMailer/src/SMTP.php';

// // passing true in constructor enables exceptions in PHPMailer
// $mail = new PHPMailer(true);

// try {
//     // Server settings
//     $mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
//     $mail->isSMTP();
//     $mail->Host = 'smtp.gmail.com';
//     $mail->SMTPAuth = true;
//     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
//     $mail->Port = 587;

//     $mail->Username = 'example@gmail.com'; // YOUR gmail email
//     $mail->Password = 'YOUR_GMAIL_PASSWORD'; // YOUR gmail password

//     // Sender and recipient settings
//     $mail->setFrom('example@gmail.com', 'Sender Name');
//     $mail->addAddress('phppot@example.com', 'Receiver Name');
//     $mail->addReplyTo('example@gmail.com', 'Sender Name'); // to set the reply to

//     // Setting the email content
//     $mail->IsHTML(true);
//     $mail->Subject = "Send email using Gmail SMTP and PHPMailer";
//     $mail->Body = 'HTML message body. <b>Gmail</b> SMTP email body.';
//     $mail->AltBody = 'Plain text message body for non-HTML email client. Gmail SMTP email body.';

//     $mail->send();
//     echo "Email message sent.";
// } catch (Exception $e) {
//     echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
// }













// require '../PHPMailer/src/Exception.php';
// require '../PHPMailer/src/PHPMailer.php';
// require '../PHPMailer/src/SMTP.php';
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
// include "../PHPMailer/src/class.PHPMailer.php";
// include "../PHPMailer/src/class.PHPMailer.php";
include "../PHPMailer/src/OAuthTokenProvider.php";
include "../PHPMailer/src/PHPMailer.php";
include "../PHPMailer/src/SMTP.php";
include "../PHPMailer/src/OAuth.php";
include "../PHPMailer/src/Exception.php";
// include "PHPMailer/class.phpmailer.php";
// require("../PHPMailer-master/src/PHPMailer.php");
// require("../PHPMailer-master/src/SMTP.php");
// require("../PHPMailer-master/src/Exception.php");





use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;










$mail = new PHPMailer(true);
$mail->IsSMTP();
try {
    $mail->Host="smtp.gmail.com";
    $mail->SMTPAuth=true;
    $mail->SMTPSecure="ssl";
    $mail->Port=564;
    $mail->Username="ramezanisanireza@gmail.com";
    $mail->Password="0830169725r";
    $mail->AddAddress("poojb302@gmail.com");
    // $mail->SetForm("poojb302@gmail.com");
    $mail->Subject="Hello";
    $mail->MsgHTML("i'm reza");
    $mail->Send();
    echo "sended";
    // $mail->="";
    // $mail->="";

    
} catch (phpmailerException $e) {
    echo $e->errorMessage();
}
?>






