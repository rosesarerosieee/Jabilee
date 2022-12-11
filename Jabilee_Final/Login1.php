<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="login.css">
    <title>Log In to Jabilee</title>
</head>
<body>
<form action="login2.php" method="post">
    <div class="top">
        <h1 class="title">
            Jabilee
        </h1>
        
        <ul class="navigation1">
            <li>
                <a href="page.html" style="font-family: poppins; font-weight: 1rem;">
                    <b>
                        Home
                    </b>
                </a>
    </div>

    <div class="container">
        <h1 style="margin-top: 10%;">
            Sign In
        </h1>
        <br>

        <p>
            Welcome to Jabilee
        </p>
        <br>

        <p>
            We've been waiting for you.
        </p>
        <br>
        <hr>

        <p>
            <label for="useracc">
                <b>
                    Email
                </b>
            </label>
        </p>
        <input type="email" placeholder="Enter Email" name="useracc" required><br>

        
        <p>
            <label for="userpw">
                <b>
                    Password
                </b>
            </label>
            <br>
        </p>
        <input type="password" placeholder="Enter Password" id="userpw" name="userpw" required>
        <i style="position: absolute; margin-left: 5px; margin-top: 14px; color: white;" class="bi bi-eye-slash" id="togglePassword"></i>
        <br>
        
        <p>
            <label style="margin-right: 200px;">
                <input type="checkbox" check="check" name="remember" style="margin-bottom:15px;"> 
                    Stay Signed In
             </label>
        </p>
        
        <p style="  padding-left: 19%; padding-right: 17%;">
            This site is protected by Google
            <a href="https://policies.google.com/privacy" style="color:dodgerblue"> Privacy Policy</a>
            and 
            <a href="https://policies.google.com/terms" style="color:dodgerblue">Terms and Conditions</a>.
        </p>
        <br>
        
        <div class="clearfix" align="center">
            <button type="submit" class="btn">
                Sign In
            </button>
        </div>
        
        <p>
            Need an account? 
            <a href="registration.php" style="color:dodgerblue">Create account</a>
        </p>
                    
    </div>

    <script>
        const togglePassword = document.querySelector("#togglePassword");
        
        togglePassword.addEventListener("click", function () {
          const type = userpw.getAttribute("type") === "password" ? "text" : "password";
          userpw.setAttribute("type", type);
          this.classList.toggle("bi-eye");
        });
    </script>
</form>
</body>
</html>