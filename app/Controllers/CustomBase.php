<?php
namespace App\Controllers;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class CustomBase extends BaseController
{
  protected $data;

  public function __construct(){    
  }
  # Functiomn to Send Email Messages
  public function send_email($message){
    $mail = new PHPMailer(true);
    try{
      $mail->isSMTP();
      $mail->setFrom(getenv("mail.from.email"), getenv("mail.from.display"));
      $mail->addReplyTo(getenv("mail.from.email"), getenv("mail.from.display"));
      $mail->isHTML(true);

      $mail->Host             = getenv("mail.host");
      $mail->SMTPAuth         = true;
      $mail->Username         = getenv("mail.username");
      $mail->Password         = getenv("mail.password");
      $mail->SMTPSecure       = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port             = getenv("mail.port");
      $mail->Subject          = $message["subject"];
      $mail->Body             = $message["body"];      

      foreach($message["to"] as $recipient){
        $mail->addAddress($recipient["email"], $recipient["display"]);
      }
      $mail->send();
    }
    catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }    
  }
}