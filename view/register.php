<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../css/styleRegister.css"> 
    <style>
@import url('https://fonts.googleapis.com/css2?family=Playwrite+DE+Grund:wght@100..400&display=swap');
</style>

</head>
<body>
    <div class="register-container">
        <div class="form-section">
            <h2>Create Your Account</h2>
            <form action="../actions/registerprocess.php" method="post" enctype="multipart/form-data">
                <div class="input-field">
                    <label for="fullname">Full Name</label>
                    <input type="text" id="fullname" name="fullname" required>
                </div>

                <div class="input-field">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" pattern=".+@ashesi\.edu\.gh" required>
                </div>

                <div class="input-field">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <div class="row">
                    <div class="input-field half-width">
                        <label for="country">Country:</label>
                        <input type="text" id="country" name="country" required>
                    </div>
                    <div class="input-field half-width">
                        <label for="city">City:</label>
                        <input type="text" id="city" name="city" required>
                     </div>
                </div>

                <div class="input-field">
                    <label for="contact">Contact Number</label>
                    <input type="tel" id="contact" name="contact" required placeholder="+233..." pattern="\+233[0-9]{9}">
                </div>

                <div class="input-field">
                    <label for="image">Profile Image (optional)</label>
                    <input type="file" id="image" name="image" accept="image/*">
                </div>

                <input type="submit" value="Register" id="registerButton">
                  
            </form>
            <div class="login-link">
                <p>Already have an account? <a href="login.php">Login</a></p>
            </div>
        </div>

        <div class="image-section">
        
        </div>
        </div>
    </div>
</body>
</html>
