<?php
error_reporting(0);
$to = $_POST['rsvp-email'];
$rname = $_POST['rsvp-name'];
include_once 'sendmail.php';
$mail->addAddress('rahulgupta388@gmail.com');
$mail->Subject = 'Wedding Invitation';
$mail->Body    = 'Dear '.$rname.' you are coordially invited to the <i>wedding</i>.';
$mail->AltBody = 'Dear '.$rname.' you are coordially invited to the wedding';
$mail->addAddress($to);

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

?>