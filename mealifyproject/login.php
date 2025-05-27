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

    <form action="home.php" class="form" method="post" >
        <h1 class="signup">Login</h1>
        <div class="container">
            <div>
                <label for="name">Name :</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div>
                <label for="Password">Password :</label>
                <input type="password" name="Password" id="Password" required>
            </div>
            <button type="submit" name="register">Login</button>
            <div><p>Not yet a member ? <a href="register.php">Sign up</a></p></div> 
        </div>
    </form>
</body>
</html>