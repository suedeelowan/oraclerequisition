<?php

require_once("./assets/php-mailer/PHPMailer.php");
require_once("./assets/php-mailer/SMTP.php");
require_once("./assets/php-mailer/Exception.php");

// $mail= new PHPMailer();
$mail = new PHPMailer\PHPMailer\PHPMailer();

function send_mail_soumission($email,$lefichier)
{
  //$mail = new PHPMailer\PHPMailer\PHPMailer();
  $date=date('d-m-Y');
  // $email='brouakanda@gmail.com';

  try {
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'marcelkongoza@gmail.com';
    $mail->Password = 'mjpcdobjiqwuqwlc'; //@@gmail.com/dfpi.mae.ci@gmail.com/dqmjwpdjeeonrqjn---mjpcdobjiqwuqwlc 
    $mail->Port = 587;
    $mail->CharSet = 'UTF-8';
    $mail->setFrom('darrv.petition@douanes.ci', 'Reponse de contestation');
    $mail->addReplyTo('darrv.petitio@douanes.ci');
    $mail->addAddress($email);
    $mail->addCC('a.akanda@diplomatie.gouv.ci');

    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    $mail->addBCC('marcelkongoza1@yahoo.fr');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');
     $mail->addAttachment($lefichier, 'reponse_darrv.pdf');

    $mail->isHTML(true);
    $mail->Subject = "DARRV : REPONSE DE LA REQUISITION";
    $mail->Body = "<b>Ceci est un test pour le le projet DARRV - REQUISITION<br>
                   <b>Ceci est un test<br><br>";

    $mail->send();

  } catch (Exception $e) {

  }
}


