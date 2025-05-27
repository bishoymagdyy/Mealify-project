<?php
if(!isset($_SESSION)){
    session_start();}
    $error = array();
    // Connect to database
    $db = mysqli_connect('localhost', 'root', '', 'mealify_db');


// If user clicked the button
if(isset($_POST['register'])){
    $username = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password1 = mysqli_real_escape_string($db, $_POST['Password']);
    $password2 = mysqli_real_escape_string($db, $_POST['password2']);

    if(empty($username)){
        array_push($error, "Username is required");
    }
    if(empty($email)){
        array_push($error, "Email is required");
    }
    if(empty($password1)){
        array_push($error, "Password is required");
    }
    if(empty($password2)){
        array_push($error, "Confirm password is required");
    }
    if($password1 != $password2){
        array_push($error, "Passwords do not match");
    }
    
    if(count($error) == 0){
        // Insert into database
        $sql = "INSERT INTO `users` (`name`,`email`,`password`) VALUES('$username', '$email', '$password1')";
        mysqli_query($db, $sql);
    }
}


// // Registration Validation
// array_push($error, "Confirm password is required");
// if($password1 != $password2){
//     array_push($error, "Passwords do not match");
// }

// if(count($error) == 0){
//     // Insert into database
//     $sql = "INSERT INTO users (name, email, password) VALUES('$username', '$email', '$Password')";
//     mysqli_query($db, $sql);
// }


// Login System
if(isset($_POST['login'])){
    $username = mysqli_real_escape_string($db, $_POST['name']);
    $password = mysqli_real_escape_string($db, $_POST['Password']);
    
    if(empty($username)){
        array_push($error, "Username is required");
    }
    if(empty($password)){
        array_push($error, "Password is required");
    }
    
    if(count($error) == 0){
        $query = "SELECT * FROM users WHERE name='$username' AND password='$Password'";
        $result = mysqli_query($db, $query);

        
        if(mysqli_num_rows($result) == 1){
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Welcome you are logged in";
            // Redirect user to homepage
            header('location:home.php');}
    }
}

// Logout System
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location:login.php');
}



?>