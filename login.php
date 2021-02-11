<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>

    <form method="post" action="login.php">

        <h2>Sign In</h2>

        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" required>
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1" required>
        </div>

        <div class="input-group">
            <button type="submit" name="login" class="btn">Log In</button>
        </div>
        <p>Not yet a member ? <a href="register.php">Sign Up</a>
            <p>
    </form>
</body>

</html>