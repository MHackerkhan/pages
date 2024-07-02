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
            header("Location: login.php");
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
    $stmt = mysqli_prepare($con, "SELECT id, password FROM users WHERE email = ?");
    mysqli_stmt_bind_param($stmt, "s", $useremail);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $user_id, $hashed_password);
    mysqli_stmt_fetch($stmt);
    mysqli_stmt_close($stmt);

    // Verify the password
    if(password_verify($password, $hashed_password)) {
        // Password is correct, set session variables and redirect to main page
        $_SESSION['loggedin'] = true;
        $_SESSION['user_id'] = $user_id;
        $_SESSION['last_activity'] = time(); // Update last activity time
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
    <title>Login</title>
    <style>
        /* Your CSS content here */
            body {
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to right, #6a11cb, #2575fc);
            margin: 0; }
        .login-container {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
            transition: transform 0.3s ease;
        }
        .login-container:hover {
            transform: scale(1.05);
        }
        .login-container h2 {
            margin-bottom: 20px;
            color: white;
            text-align: center;
        }
        .login-container label {
            color: white;
            font-weight: bold;
        }
        .login-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .login-container input:focus {
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
        }
        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #2575fc;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .login-container button:hover {
            background-color: #6a11cb;
        }
        .login-container p {
            color: white;
            text-align: center;
        }
        .login-container a {
            color: #ffdd57;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .login-container a:hover {
            color: white;
        }
        .error-message {
            color: red;
            text-align: center;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php
        if($error_message != '') {
            echo '<p class="error-message">' . $error_message . '</p>';
        }
        ?>
        <form method="post" action="">
            <label for="uemail">Email:</label>
            <input type="email" id="uemail" name="uemail" required><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            <button type="submit" name="login">Login</button><br><br>
        </form>
        <p><a href="reset_password.php">Forgot Password?</a></p>
        <p><a href="signup.php">New User? Sign Up</a></p>
        <p><a href="https://t.me/mbkmadmax/">Facing an issue? Contact Support</a></p>
    </div>
</body>
</html>
