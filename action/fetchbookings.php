<?php
include ('connections.php');
session_start();
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
//include './core.php';

function fetchBookings($userId)
{

    // // Include the database connection file
    // include '../stated-master/connections.php';
    global $conn ;
    // Prepare the SQL statement
    //var_dump ($conn);
    $stmt = $conn->prepare("SELECT * FROM ApartmentTourBookings WHERE person_id = ?");
    $stmt->bind_param("i", $userId);

    // Execute the statement
    $stmt->execute();

    // Get the result set
    $result = $stmt->get_result();
    

    // Fetch the bookings
    $bookings = array();
    while ($row = $result->fetch_assoc()) {
        $bookings[] = $row;
       
    }

    // Close the statement and database connection
    $stmt->close();
    $conn->close();
    


    return $bookings;
}

