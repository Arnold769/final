<?php


session_start();

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
require '../connections.php';

// Check if the form is submitted
if (isset($_POST["submit-booking"])) {

    // Retrieve form data
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['pnumber'];
    $meeting_date = $_POST['meeting-date'];
    $meeting_time = $_POST['meeting-time'];
    $location = $_POST['location'];
    $user_id = $_SESSION['user_id'];


    // Insert data into the people table
    $sql = "INSERT INTO ApartmentTourBookings (first_name, last_name,phone_number, email, meeting_date, meeting_time, location, person_id)
            VALUES ('$first_name', '$last_name', '$phone', '$email', '$meeting_date', '$meeting_time','$location', $user_id)";

    // Execute the SQL query
    if ($conn->query($sql) === TRUE) {
        echo "Successful";
        // header("Location:../login.php");
        $message = '
            <h3 align="center">Application Details</h3>
            <table border="1" width="100%" cellpadding="5" cellspacing="5">
            <tr>
                <td width="30%">Name</td>
                <td width="70%">' . $_POST["fname"] . '</td>
            </tr>
            <tr>
                <td width="30%">Name</td>
                <td width="70%">' . $_POST["lname"] . '</td>
            </tr>
            <tr>
                <td width="30%">Email</td>
                <td width="70%">' . $_POST["email"] . '</td>
            </tr>
            <tr>
                <td width="30%">Phone Number</td>
                <td width="70%">' . $_POST["pnumber"] . '</td>
            </tr>
            <tr>
                <td width="30%">Meeting Date</td>
                <td width="70%">' . $_POST["meeting-date"] . '</td>
            </tr>
            <tr>
            <td width="30%">Meeting Time</td>
            <td width="70%">' . $_POST["meeting-time"] . '</td>
            </tr>
            <tr>
            <td width="30%">Location</td>
            <td width="70%">' . $_POST["location"] . '</td>
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
        $mail->FromName = $_POST["fname"];
        $mail->addAddress('aryeequaye41@gmail.com', 'EL-Virtues Construction LTD');
        $mail->WordWrap = 50;
        $mail->isHTML(true);
        $mail->Subject = 'Apartment tour booked';
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
