<!DOCTYPE html>
<html lang="en">
<head>
    <title>Target E-Commerce</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="hero">
<div class="form-box">
    <div class="button-box">
        <div id="btn"></div>
        <button type="button" class="toggle-btn" onclick="SignIn()">Sign In</button>
        <button type="button" class="toggle-btn" onclick="SignUp()">Sign Up</button>
    </div>
    <div class="social-icons">
        <img src="picture/facebook.png" alt="Facebook">
        <img src="picture/twitter.png" alt="Twitter">
        <img src="picture/google.png" alt="Google">
    </div>
    <form id="Sign-In" class="input-group">
        <input type="text" class="input-field" placeholder="User Id" required>
        <input type="password" class="input-field" placeholder="Enter Password" required>
        <input type="checkbox" class="check-box"><span>Remember Password</span>
        <button type="submit" class="submit-btn">Sign In</button>
    </form>
    <form id="Sign-Up" class="input-group" style="left: 450px;" action="index.php" method="post">
         <input type="text" class="input-field" placeholder="Name" required>
        <input type="email" class="input-field" placeholder="Email" required>
        <input type="password" class="input-field" placeholder="Enter Password" required>
        <input type="checkbox" class="check-box"><span>I agree to the terms & conditions</span>
        <button type="submit" class="submit-btn">Sign Up</button>
    </form>
</div>
        
    </div>

    <script>
    var x = document.getElementById("Sign-In");
    var y = document.getElementById("Sign-Up");
    var z = document.getElementById("btn");

    function SignUp(){
        x.style.left = "-400px";
        y.style.left = "30px";
        z.style.left = "110px";
    }

    function SignIn(){
        x.style.left = "30px";
        y.style.left = "450px";
        z.style.left = "0";
    }
    </script>

</body>
</html>