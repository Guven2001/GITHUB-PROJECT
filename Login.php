<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicare Login</title>
    <link rel="stylesheet" href="assets/css/Login.css">
</head>
<body>
    <header class="header" data-header>
        <div class="container">
    
          <a href="#" class="logo">
            <img src="./assets/images/imagenew.png" width="200" height="110" alt="UOV-MIH">
          </a>
    </header>


    <div class="login-container">
        <h1>UOV-MIH Login</h1>
        <form action="/dashboard" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
            <p class="register-link">Don't have an account? <a href="/register">Register here</a></p>
        </form>
    </div>
</body>
</html>
