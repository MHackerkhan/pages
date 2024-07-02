<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .dashboard {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .dashboard h2 {
            color: #333;
            margin-bottom: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
        }

        .profile {
            margin-bottom: 30px;
        }

        .profile img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .profile p {
            color: #666;
        }

        .button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #0056b3;
        }

        /* New CSS styles from the fancy page */
        header {
            background-color: #ff0066;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        nav ul {
            list-style: none;
            padding: 0;
            text-align: center;
        }

        nav ul li {
            display: inline;
            margin: 0 10px;
        }

        nav ul li a {
            color: #333;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        nav ul li a:hover {
            color: #ff0066;
        }

        main {
            padding: 20px;
        }

        section {
            margin-bottom: 40px;
        }

        section h2 {
            color: #ff0066;
            margin-bottom: 20px;
            text-align: center;
        }

        section p {
            color: #333;
            text-align: center;
        }

        .neon {
            color: #ff0066;
            animation: neon 1.5s infinite alternate;
        }

        @keyframes neon {
            from { text-shadow: 0 0 5px #fff, 0 0 10px #ff0066, 0 0 20px #ff0066; }
            to { text-shadow: 0 0 10px #fff, 0 0 20px #ff0066, 0 0 30px #ff0066; }
        }

        .animated {
            animation: slideIn 1s ease;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .content {
            text-align: center;
            padding: 50px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .button-fancy {
            background-color: #ff0066;
            color: #fff;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: background-color 0.3s ease;
        }

        .button-fancy:hover {
            background-color: #cc0052;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to MBKMADMAX website</h1>
    </header>

    <nav>
        <ul>
            <li><a href="main.php">Home</a></li>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="db.php">Info Site</a></li>
            <li><a href="net.php">Dark Net</a></li>
            <li><a href="new.php">VIP Click Now</a></li>
            <li><a href="logout.php">Log Out</a></li>
        </ul>
    </nav>
    

</body>
</html>

    <main>
        <div class="dashboard">
            <h2>User Dashboard</h2>
            
            <div class="profile">
                <img src="profile.jpg" alt="Profile Picture">
                <p>Welcome, User! Here's your profile information.</p>
               <p>Email:Your Email Wait I dont know it Ok And we dont store it Ok</p>
            </div>

            <button class="button">Edit Profile</button>
            <button class="button">Account Settings</button>
        </div>

        <div class="container">
            <div class="content animated">
                <h1>Welcome to Your Fancy Dashboard!</h1>
                <p>This is a beautifully designed dashboard page with colorful elements and effects. Explore and enjoy!</p>
                <button class="button-fancy">    <a href="main.php">Home</a>Get Started</button>
            </div>
        </div>
    </main>


    <footer>
        <p>&copy; 2024 ©️🔴 Made by MBKMADMAX</p>
    </footer>
</body>
</html>
