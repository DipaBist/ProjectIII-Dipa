
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E Clothing Store</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form action="">
            <h1>Login</h1>
            <div class="input-box"> 
                <i class='bx bxs-user'></i>
                <input type="text" placeholder="Username" required>
            </div>
            <div class="input-box">
                <i class='bx bxs-lock-alt'></i>
                <input type="password" placeholder="Password" required>  
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox"> Remember me</label>
                <a href="passwordreset.html">Forgot password?</a>
            </div>
            <a href="homepage.html">
                <!--<button type="button" class="btn">Login</button>-->
                <button type="submit" class="btn">Login </button>
            </a>
            
            <div class="Signup-link">
                <p>Don't have an account? <a href="signup.html">Sign up</a></p>
            </div>
            <div class="divider">
                <hr><span>Or Login with</span><hr>
            </div>
            
                <button type="button" class="google-btn" onclick="alert('Button clicked!')">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Google_%22G%22_logo.svg/1200px-Google_%22G%22_logo.svg.png" alt="Google logo">
                    Sign in with Google
                </button>
                
            
        </form>
    </div>
</body>
</html>
