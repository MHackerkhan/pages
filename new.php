<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <style>
        /* Common styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Header styles */
        header {
            text-align: center;
            padding: 20px 0;
        }

        header h1 {
            color: #ff0066;
            font-size: 2.5em;
            margin-bottom: 10px;
        }

        /* Navigation styles */
        nav ul {
            list-style: none;
            padding: 0;
            text-align: center;
            margin-bottom: 20px;
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

        /* User dashboard styles */
        .dashboard {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 40px;
        }

        .dashboard h2 {
            color: #ff0066;
            font-size: 1.5em;
            margin-bottom: 20px;
            border-bottom: 2px solid #ff0066;
            padding-bottom: 10px;
        }

        .profile {
            margin-bottom: 20px;
            text-align: center;
        }

        .profile img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .profile p {
            color: #666;
            font-size: 1.2em;
            margin-bottom: 10px;
        }

        .button-container {
            text-align: center;
        }

        .button {
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
            margin: 0 10px;
        }

        .button:hover {
            background-color: #cc0052;
        }

        /* Additional section styles */
        section {
            background-color: #ff0066;
            color: #fff;
            padding: 50px 20px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
        }

        section h2 {
            font-size: 2em;
            margin-bottom: 20px;
        }

        .neon {
            animation: neon 1.5s infinite alternate;
        }

        @keyframes neon {
            from { text-shadow: 0 0 5px #fff, 0 0 10px #ff0066, 0 0 20px #ff0066; }
            to { text-shadow: 0 0 10px #fff, 0 0 20px #ff0066, 0 0 30px #ff0066; }
        }

        /* Footer styles */
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
            left: 0;
        }

        footer p {
            margin: 0;
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
            <li><a href="db.php">info site</a></li>
            <li><a href="net.php">DARK NET</a></li>
</br></br>
            
<li><a href="new.php">VIP Click Now</a></li>
<li><a href="login.php">Log Out</a></li>
        </ul>
    </nav>
  <div class="container">
        <div class="dashboard">
            <h2>User Dashboard</h2>
            <div class="profile">
                <img src="profile.jpg" alt="Profile Picture">
                <p>Welcome, User! Here's your profile information.</p>
                <p>Email:Your Email Only You Know Not Me Mr Cutepi</p>
            </div>
        </div>
    </div>
            <div class="button-container">
                <button class="button">Edit Profile</button>
                <button class="button">Account Settings</button>
            </div>
        </div>
        <section>
            <h2>Click Me</h2>
            <p>Explore more by clicking the button below.</p>
            <button class="button" onclick="window.location.href='sss.html'">Click here</button>
        </section>
        <section>
            <h2>Special Offer</h2>
            <p>Stay connected to avail special offers!</p>
            <a href="https://t.me/mbkmadmax" class="neon">SOMETHING SPECIAL WELL COME HERE STAY CONNECTED</a>
        </section>
    </div>


    <footer>
        <p>&copy; 2024 ©️🔴 Made by MBKMADMAX</p>
    </footer>
</body>
</html>
