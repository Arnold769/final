<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap' rel='stylesheet'>
</head>

<body>
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .registration-form,
        .info-section {
            flex: 1;
            padding: 20px;
        }

        .registration-form {
            max-width: 500px;
        }

        h1,
        h2 {
            color: #0a0a0a;
        }

        p {
            color: #070707;
        }

        .registration-form p,
        .info-section p {
            color: #666;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input[type=text],
        input[type=tel],
        input[type=email],
        input[type=password] {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button {
            padding: 10px;
            background-color: #0056b3;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #003d82;
        }

        .alternative {
            text-align: center;
            margin: 20px 0;
        }

        .alternative span {
            background-color: #fff;
            padding: 0 10px;
        }

        .login-link {
            text-align: center;
        }

        .login-link a {
            color: #0056b3;
            text-decoration: none;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        input[type="radio"] {
            width: 20px;
            height: 20px;
            margin-right: 5px;
        }

        label {
            font-size: 16px;
        }
    </style>
    <div class="container">
        <div class="registration-form">
            <h1>Welcome to Real Estate Web App</h1>
            <p>Create an account to get started.</p>
            <form action="../final/action/register_user_action.php" method="post">
                <input type="text" id="first-name" name="first-name" placeholder="Enter your first name" required>
                <input type="text" id="last-name" name="last-name" placeholder="Enter your last name" required>
                <input type="email" id="email" name="email" placeholder="Email" required>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm Password" required>
                <input type="tel" id="phone" name="phone" placeholder="Phone" required>
                <input type="text" id="address" name="address" placeholder="Address" required>


                <button type="submit" name="register">Register</button>
            </form>
            <div class="alternative">
                <span>OR</span>
            </div>
            <div class="login-link">
                <p>Already have an account? <a href="login.php">Login here!</a></p>
            </div>
        </div>
        <div class="info-section">
            <h2>Your All-in-One Real Estate Solution</h2>
            <p>Manage your properties, transactions, and client relationships all in one real estate management application.</p>
        </div>
    </div>
</body>

</html> <q>                                                                                                                         `                                               `</q>
