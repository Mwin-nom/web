<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/styleLogin.css"> <!-- Link to your CSS file -->
    <style>
@import url('https://fonts.googleapis.com/css2?family=Playwrite+DE+Grund:wght@100..400&display=swap');
</style>
    
</head>
<body>
    <div class="login-container">
        <!-- Image section -->
        <div class="image-section"></div>
        
        <!-- Form section -->
        <div class="form-section">
            <h2>Login</h2>
            <form action="../actions/loginprocess.php" method="post">
                <div class="input-field">
                    <label for="username">Email:</label>
                    <input type="text" id="email" name="email" required>
                </div>
                <div class="input-field">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="input-field">
                    <input type="submit" value="Login">
                </div>
            </form>
            <div class="register-link">
                <p>Don't have an account? <a href="register.php">Register</a></p>
            </div>
        </div>
    </div>
</body>
</html>
