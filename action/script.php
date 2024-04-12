<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';


//require 'class/class.phpmailer.php';

if (isset($_POST["send-application"])) {
    $path = 'upload/' . $_FILES['resume']['name'];
    move_uploaded_file($_FILES['resume']['tmp_name'], $path);
    $message = '
            <h3 align="center">Application Details</h3>
            <table border="1" width="100%" cellpadding="5" cellspacing="5">
            <tr>
                <td width="30%">Name</td>
                <td width="70%">'.$_POST["fname"].'</td>
            </tr>
            <tr>
                <td width="30%">Name</td>
                <td width="70%">'.$_POST["lname"].'</td>
            </tr>
            <tr>
                <td width="30%">Address</td>
                <td width="70%">'.$_POST["address"].'</td>
            </tr>
            <tr>
                <td width="30%">Email Address</td>
                <td width="70%">'.$_POST["email"].'</td>
            </tr>
            <tr>
                <td width="30%">Role</td>
                <td width="70%">'.$_POST["job-role"].'</td>
            </tr>
            </table>
            ';
      
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'aryeequaye41@gmail.com';
    $mail->Password = 'wzrf buup qnab uihf';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->From = $_POST["email"];
    $mail->FromName = $_POST["name"];
    $mail->addAddress('aryeequaye41@gmail.com', 'EL-Virtues Construction LTD');
    $mail->WordWrap = 50;
    $mail->isHTML(true);
    $mail->addAttachment($path);
    $mail->Subject = 'New Contract Application';
    $mail->Body = $message;

    if ($mail->send()) {
        $message = '<div class="alert alert-success">Application Successfully Submitted</div>';
        unlink($path);
    } else {
        $message = '<div class="alert alert-danger">There is an error: ' . $mail->ErrorInfo . '</div>';
    }
}

echo $message;
