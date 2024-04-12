<?php
include_once('../connections.php');
if (!isset($_SESSION)) {
    session_start();
}

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
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
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    $conn->close();
}
?>
