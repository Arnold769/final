<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Titan</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap' rel='stylesheet'>
    <style>
        * {
            font-family: "Poppins";
        }

        h1 {
            text-align: center;
            color: #2c3e50;
        }

        .modal_container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .signIn {
            background-color: #ecf0f1;
            padding: 100px;
            border-radius: 0px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        form {
            text-align: center;
        }

        input {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #bdc3c7;
            border-radius: 5px;
        }

        button {
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            margin: 5px;
            position: relative;
            transition: background-color 0.3s;
        }
    </style>
</head>

<body>

    <h1>Task Titan</h1>
    <div class="modal_container">
        <div class="signIn" id="signIn">
            <form action="../final/action/login_user_action.php" method="post">
                <p>Sign In</p>
                <input type="email" placeholder="Enter your Email" name="email" id="emailInput" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" required>
                <br>
                <input type="password" name="password" placeholder="Enter your password" id="passwordInput" pattern=".{6,}" title="Password must be at least 6 characters long" required>
                <br>
                <a href="index.php">
                    <button name="signIn">Sign in</button>
                </a>
                <button><span>Forgot your password?</span></button>
                <button ><span>Don't have an account?</span></button>
            </form>
        </div>
    </div>

</body>

</html>
