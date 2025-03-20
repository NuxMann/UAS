<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Popup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"></style>
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
        .btn-google {
        @include button-variant($brand-google, $blue);
        }

        .btn-facebook {
        @include button-variant($brand-facebook, $white);
        }
    </style>
</head>
<body>
    
    
    <div class="overlay" id="loginOverlay">
        <div class="login-popup">
            <h4 class="text-center">Welcome!</h4>
            
            <a href="index.html" class="btn btn-facebook btn-block">
                <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                </a>
                <a href="index.html" class="btn btn-google btn-block">
                <i class="fab fa-google fa-fw"></i> Login with Google
                </a>
            <hr>
            <input type="email" class="form-control mb-2" placeholder="Email">
            <input type="password" class="form-control mb-2" placeholder="Password">
            <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" id="rememberMe">
                <label class="form-check-label" for="rememberMe">Remember me</label>
            </div>
            <button class="btn btn-danger w-100">Login</button>
            <p class="text-center mt-2">Don't have an account? <a href="#">Sign up here</a></p>
        </div>
    </div>

   
</body>
</html>
