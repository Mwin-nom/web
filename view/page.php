<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Page</title>
    <link rel="stylesheet" href="/E-com/css/styleMenu.css"> <!-- Link to your CSS file -->
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

        /* Main container for the menu */
        .menu-container {
            text-align: center;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 300px; /* Fixed width for the menu */
        }

        /* Header styles */
        .menu-container h1 {
            margin-bottom: 20px;
            color: #333;
        }

        /* Button styles */
        .menu-container a {
            display: inline-block;
            margin: 15px 0;
            padding: 12px 20px;
            border-radius: 25px;
            background-color: #18475B; /* Softer purple */
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .menu-container a:hover {
            background-color: #AFB0B5; /* Lighter shade on hover */
        }
    </style>
</head>
<body>
    <div class="menu-container">
        <h1>Hello</h1>
        <a href="../view/register.php">Register</a>
        <a href="../view/logout.php">Logout</a>
    </div>
</body>
</html>
