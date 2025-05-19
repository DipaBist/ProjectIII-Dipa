<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signup.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <form action="#">
            <h1>Sign Up</h1>
            <div class="input-box">
                <i class='bx bxs-user'></i>
                <input type="text" placeholder="First Name" required>
            </div>
            <div class="input-box">
                <i class='bx bxs-user'></i>
                <input type="text" placeholder="Last Name" required>
            </div>
            <div class="input-box">
                <i class='bx bxs-envelope'></i>
                <input type="email" placeholder="Email" required>
            </div>
            <div class="input-box">
                <i class='bx bxs-lock-alt'></i>
                <input type="password" placeholder="Password" required>
            </div>
            <div class="input-box">
                <i class='bx bxs-lock-alt'></i>
                <input type="password" placeholder="Confirm Password" required>
            </div>
            <button type="submit" class="btn">Sign Up</button>
            <div class="login-link">
                <p>Already have an account? <a href="index.html">Login</a></p>
            </div>
        </form>
    </div>
</body>
</html>
