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
                <input type="text" class="input-field" placeholder="Name" name="name" required>
                <input type="email" class="input-field" placeholder="Email" name="email" required>
                <input type="password" class="input-field" placeholder="Enter Password" name="password" required>
                <select class="input-field" name="user-type" id="user_type" required onchange="toggleAdditionalFields()">
                    <option value="" disabled selected>Choose Account Type</option>
                    <option value="customer">Customer</option>
                    <option value="seller">Seller</option>
                </select>
                <div id="additional-fields" style="display: none;">
                    <div id="seller-fields">
                        <input type="text" class="input-field" placeholder="Shop Name" name="shop_name">
                    </div>
                </div>
                <input type="checkbox" class="check-box"><span>I agree to the terms & conditions</span>
                <button type="submit" class="submit-btn">Sign Up</button>
            </form>
        </div>
    </div>

    <script>
        var x = document.getElementById("Sign-In");
        var y = document.getElementById("Sign-Up");
        var z = document.getElementById("btn");

        function SignUp() {
            x.style.left = "-400px";
            y.style.left = "30px";
            z.style.left = "110px";
        }

        function SignIn() {
            x.style.left = "30px";
            y.style.left = "450px";
            z.style.left = "0";
        }

        function toggleAdditionalFields() {
            var userType = document.getElementById("user_type").value;
            var sellerFields = document.getElementById("seller-fields");
            var additionalFields = document.getElementById("additional-fields");

            if (userType === "seller") {
                additionalFields.style.display = "block";
            } else {
                additionalFields.style.display = "none";
            }
        }
    </script>

</body>
</html>