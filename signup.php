<?php 
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection details
$host = 'localhost'; // usually 'localhost'
$username = 'wKg1MUulCOS0r7yPu0DwoGDjlX1fChXq';
$password = 'torprojectfree007';
$database = 'jCwz5d9mggEnNvpViLfkVa5CeQpyoJcN';

// Establishing the database connection
$con = mysqli_connect($host, $username, $password, $database);

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Initialize the error message variable
$error_message = '';

// Code for registration 
if(isset($_POST['register'])) {
    $fname = $_POST['fname'];
    $useremail = $_POST['uemail'];
    $password = $_POST['password'];

    // Hash the password before storing it
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare the SQL statement with placeholders
    $stmt = mysqli_prepare($con, "INSERT INTO users (fname, email, password) VALUES (?, ?, ?)");

    if ($stmt === false) {
        $error_message = 'Prepare failed: ' . htmlspecialchars(mysqli_error($con));
    } else {
        // Bind parameters and execute
        mysqli_stmt_bind_param($stmt, "sss", $fname, $useremail, $hashed_password);
        $success = mysqli_stmt_execute($stmt);

        if ($success) {
            // Redirect to login page
            header("Location: index.php");
            exit();
        } else {
            $error_message = 'Execute failed: ' . htmlspecialchars(mysqli_stmt_error($stmt));
        }
        
        mysqli_stmt_close($stmt);
    }
}

// Code for login
if(isset($_POST['login'])) {
    $useremail = $_POST['uemail'];
    $password = $_POST['password'];

    // Retrieve the hashed password from the database
    $stmt = mysqli_prepare($con, "SELECT password FROM users WHERE email = ?");
    mysqli_stmt_bind_param($stmt, "s", $useremail);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $hashed_password);
    mysqli_stmt_fetch($stmt);
    mysqli_stmt_close($stmt);

    // Verify the password
    if(password_verify($password, $hashed_password)) {
        // Password is correct, redirect to main page or dashboard
        header("Location: main.php");
        exit();
    } else {
        // Password is incorrect, show error message
        $error_message = 'Invalid email or password';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to right, #6a11cb, #2575fc);
            margin: 0;
            overflow: hidden;
        }

        .signup-container {
            background: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(10px);
            transition: transform 0.5s ease, box-shadow 0.5s ease;
            max-width: 400px;
            width: 100%;
            animation: fadeIn 1.5s ease-in-out;
        }

        .signup-container:hover {
            transform: scale(1.05);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.6);
        }

        .signup-container h2 {
            margin-bottom: 30px;
            color: #ffffff;
            text-align: center;
            font-size: 2rem;
        }

        .signup-container label {
            color: #ffffff;
            font-weight: bold;
        }

        .signup-container input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: none;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.2);
            color: #ffffff;
            font-size: 1rem;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .signup-container input:focus {
            background-color: rgba(255, 255, 255, 0.4);
            color: #000000;
            outline: none;
        }

        .signup-container button {
            width: 100%;
            padding: 12px;
            background-color: #2575fc;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
            font-size: 1rem;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .signup-container button:hover {
            background-color: #6a11cb;
            transform: scale(1.1);
        }

        .signup-container p {
            color: #ffffff;
            text-align: center;
            margin-top: 20px;
        }

        .signup-container a {
            color: #ffdd57;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .signup-container a:hover {
            color: #ffffff;
        }

        .error-message {
            color: red;
            text-align: center;
            margin-bottom: 10px;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <h2>Sign Up</h2>
        <?php
        if($error_message != '') {
            echo '<p class="error-message">' . $error_message . '</p>';
        }
        ?>
        <form method="post" action="">
            <label for="fname">Name:</label>
            <input type="text" id="fname" name="fname" required><br><br>
            <label for="uemail">Email:</label>
            <input type="email" id="uemail" name="uemail" required><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            <button type="submit" name="register">Register</button><br><br>
        </form>
        <p>Already have an account? <a href="index.php">Login here</a></p>
    </div>
</body>
</html>
