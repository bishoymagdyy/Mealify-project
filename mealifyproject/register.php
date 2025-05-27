<?php include('server.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <form action="login.php" class="form" method="post" >
        <h1 class="signup">Sign up</h1>
        <div class="container">
            <div>
                <label for="name">Name :</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div>
                <label for="email">Email :</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div>
                <label for="Password">Password :</label>
                <input type="password" name="Password" id="Password" required>
            </div>
            <div>
                <label for="Confirm password">Confirm password :</label>
                <input type="password" name="password2" id="Confirm password" required>
            </div>
            <button type="submit" name="register">Sign Up</button>
        </div>
    </form>
</body>
</html>