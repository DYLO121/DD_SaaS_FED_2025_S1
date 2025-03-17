<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Signup</title>
    <link rel="stylesheet" href="Style.css"> <!-- Link to CSS file -->
</head>
<body>

<div class="container">
    <!-- Login Form -->
    <div class="form-box">
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <label for="login-username">Username</label>
            <input type="text" id="login-username" name="username" placeholder="Enter your username" required>
            <label for="login-email">Email</label>
            <input type="email" id="login-email">
            <input type="email" id="login-email" name="email" placeholder="Enter your email" required>


            <label for="login-password">Password</label>
            <input type="password" id="login-password" name="password" placeholder="Enter your password" required>
            <button type="submit">Login</button>
        </form>
    </div>

    <!-- Signup Form -->
    <div class="form-box">
        <h2>Sign Up</h2>
        <form action="signup.php" method="POST">
            <label for="signup-username">Username</label>
            <input type="text" id="signup-username" name="username" placeholder="Choose a username" required>

            <label for="signup-password">Password</label>
            <input type="password" id="signup-password" name="password" placeholder="Create a password" required>

            <label for="repeat-password">Repeat Password</label>
            <input type="password" id="repeat-password" name="password_repeat" placeholder="Repeat password" required>

            <button type="submit">Sign Up</button>
        </form>
    </div>
</div>

</body>
</html>
