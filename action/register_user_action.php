<?php


require '../connections.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $email = $_POST['email'];
    $password = $_POST['password']; // Note: You should hash passwords for security
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    // Insert data into the people table
    $sql = "INSERT INTO people (first_name, last_name, email, password, phone, address, role_id)
            VALUES ('$first_name', '$last_name', '$email', '$hashedPassword', '$phone', '$address', 3)";

    // Execute the SQL query
    if ($conn->query($sql) === TRUE) {
        header("Location:../login.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>

