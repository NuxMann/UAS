<?php 

include "database/connection-database.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Hotel - Login</title>
    <!-- Bootstrap & FontAwesome Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: url('https://source.unsplash.com/1600x900/?hotel,travel') no-repeat center center;
            background-size: cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-popup {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 350px;
            position: relative;
        }
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    
    <form action="database/validation-login.php" method="POST">
    <div class="overlay" id="loginOverlay">
        <div class="login-popup">
            <h4 class="text-center">Login Brooo</h4>
            <a href="dashboard.php"><button class="btn-close float-end" id="closeLogin"></button></a>
            <!-- <div class="text-center my-3">
                <a href="#" class="btn btn-facebook btn-block w-100 text-white" style="background:#3b5998;">
                    <i class="fab fa-facebook-f"></i> Continue with Facebook
                </a>
                <a href="#" class="btn btn-google btn-block w-100 mt-2 text-white" style="background:#db4437;">
                    <i class="fab fa-google"></i> Continue with Google
                </a>
            </div> -->
            <hr>
            <input type="text" class="form-control mb-2" placeholder="Enter your username" name="username">
            <input type="password" class="form-control mb-2" placeholder="Password" name="password">
            <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" id="rememberMe">
                <label class="form-check-label" for="rememberMe">Remember Me</label>
            </div>
            <button class="btn btn-primary w-100" type="submit">Login</button>
            <p class="text-center mt-2">Don't have an account? <a href="register-page.php">Create an Account!</a></p>
        </div>
    </div>
    </form>
   
</body>
</html>
