<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register here</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>

    <form autocomplete="off" method="post" action="register.php">
        <div class="header">
            <h2>Register</h2>
        </div>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" required>
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" required>
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1" required>
        </div>
        <div class="input-group">
            <label>Confirm Password</label>
            <input type="password" name="password_2" required>
        </div>
        <div class="input-group">
            <button type="submit" name="register" class="btn">Register</button>
        </div>
        <p>Already a member ? <a href="login.php">Sign In</a>
            <p>
    </form>
</body>

</html>