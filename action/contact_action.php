<?php


use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
require '../connections.php';

// Check if the form is submitted
if (isset($_POST["send-message"])) {
    // Retrieve form data
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    


    // Insert data into the people table
    $sql = "INSERT INTO ContactUs(first_name, last_name,subject, email, message)
            VALUES ('$first_name', '$last_name', '$subject', '$email', '$message')";

    // Execute the SQL query
    if ($conn->query($sql) === TRUE) {
        echo "Successful";
        // header("Location:../login.php");
        $message = '
            <h3 align="center">Message</h3>
            <table border="1" width="100%" cellpadding="5" cellspacing="5">
            <tr>
                <td width="30%">First Name</td>
                <td width="70%">' . $_POST["fname"] . '</td>
            </tr>
            <tr>
                <td width="30%">Last Name</td>
                <td width="70%">' . $_POST["lname"] . '</td>
            </tr>
            <tr>
                <td width="30%">Email</td>
                <td width="70%">' . $_POST["email"] . '</td>
            </tr>
            <tr>
                <td width="30%">Subject</td>
                <td width="70%">' . $_POST["subject"] . '</td>
            </tr>
            <tr>
                <td width="30%">Message</td>
                <td width="70%">' . $_POST["message"] . '</td>
            </tr>
            <tr>

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
        $mail->FromName = $_POST["fname"];
        $mail->addAddress('aryeequaye41@gmail.com', 'EL-Virtues Construction LTD');
        $mail->WordWrap = 50;
        $mail->isHTML(true);
        $mail->Subject = 'For El Virtues';
        $mail->Body = $message;

        if ($mail->send()) {
            $message = '<div class="alert alert-success">Application Successfully Submitted</div>';
        } else {
            $message = '<div class="alert alert-danger">There is an error: ' . $mail->ErrorInfo . '</div>';
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
