<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include '../connections.php';

if (isset($_POST['signIn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Modify the SQL query and column names according to your database schema
    $query = "SELECT * FROM people WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if ($data = mysqli_fetch_assoc($result)) {
        // Modify the column name for password according to your database schema
        if (password_verify($password, $data['password'])) {
            $_SESSION['user_id'] = $data['person_id']; // Modify the column name for person_id according to your database schema
            // You can add more session variables here as needed
            header("location:../index.php");
            exit(); // Exit to prevent further execution
        } else {
            echo "Failed to verify password";
        }
    } else {
        echo "User not found";
    }
} else {
    echo "Issue";
}
?>
