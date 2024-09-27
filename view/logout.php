<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <link rel="stylesheet" href="/E-com/css/styleLogout.css"> <!-- Link to your CSS file -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playwrite+DE+Grund:wght@100..400&display=swap');
        
        /* General styles for the body */
        body {
            font-family: "Playwrite DE Grund", cursive;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #e0e0e0, #96989D); /* Subtle, neutral gradient */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Main container for the logout message */
        .logout-container {
            text-align: center;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 300px;
        }

        /* Header styles */
        .logout-container h1 {
            margin-bottom: 20px;
            color: #333;
        }

        /* Text styles */
        .logout-container p {
            color: #555;
            margin-bottom: 20px;
        }

        /* Button styles */
        .logout-container a {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 20px;
            border-radius: 25px;
            background-color: #18475B; /* Softer purple */
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .logout-container a:hover {
            background-color: #AFB0B5;
        }
    </style>
</head>
<body>
    <div class="logout-container">
        <h1>Goodbye!</h1>
        <p>You have successfully logged out.</p>
        <a href="../view/login.php">Login Again</a>
    </div>
</body>
</html>
