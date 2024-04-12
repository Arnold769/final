<?php
include_once('../connections.php');
if (!isset($_SESSION)) {
    session_start();
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//include './core.php';
$user_id = $_SESSION['user_id'];





// Check if the form is submitted
if (isset($_POST["edit"])) {

    global $conn;

    // Retrieve form data
    $booking_id = $_POST['booking_id'];
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['pnumber'];
    $meeting_date = $_POST['meeting_date'];
    $meeting_time = $_POST['meeting_time'];
    $location = $_POST['location'];
    $user_id = $_SESSION['user_id'];


    // Insert data into the people table
    // SQL UPDATE query
    $sql = "UPDATE ApartmentTourBookings SET
        first_name = '$first_name',
        last_name = '$last_name',
        email = '$email',
        phone_number = '$phone',
        meeting_date = '$meeting_date',
        meeting_time = '$meeting_time',
        location = '$location'
        WHERE booking_id = $booking_id";

    // Execute the query
    // var_dump($conn);
    // var_dump($sql);
    if (mysqli_query($conn, $sql)) {
        echo "Successful";
    }

    $conn->close();
}