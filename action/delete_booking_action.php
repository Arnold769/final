<?php
 include_once('../connections.php');
if (!isset($_SESSION)) {
    session_start();
}


//include './core.php';
$user_id = $_SESSION['user_id'];

// Check if the form is submitted
if (isset($_POST["delete"])) {

    global $conn;

    // Retrieve form data
    $booking_id = $_POST['booking_id'];

    // Delete the record
    $sql = "DELETE FROM ApartmentTourBookings WHERE booking_id = $booking_id";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        header("Location: ../index.php?msg=Successfully deleted.");
    } else {
        header("Location: ../index.php?msg=Not successful.");
    }

    $conn->close();
}
?>
