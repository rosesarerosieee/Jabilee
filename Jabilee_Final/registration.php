<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="registration.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
  <script src="bb60a23c28.js" crossorigin="anonymous"></script>
  <title>Register to Jabilee</title>
</head>
<body>
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

            <a href="login1.php" style="font-family: poppins; font-weight: 1rem;">
              <b>
                Sign In
              </b>
            </a>
          </li>
        </ul>
  </div>

  <form action="regconfirm.php" method="post" style="border:1px solid #ccc">
    <div class="container">
      <br>
          <h1>
            Sign Up
          </h1>
          <br>
          
          <p style="font-size: 25px; font-family: FF Mark W05;">
            Please fill in this form to register your account.
          </p>
          <br>
          <hr>
                  
          <p>
            <label for="firstname">
              <b>
                First name
              </b>
            </label>
              <br>
              <input type="text" placeholder="Enter First name" name="firstname" required>
              <br>
          </p>
          
          <p>
            <label for="lastname">
              <b>
                Last name
              </b>
            </label>
              <br>
              <input type="text" placeholder="Enter Last name" name="lastname" required>
              <br>
          </p>

          <p>
            <label for="contact">
              <b>
                Contact number
              </b>
            </label>
            <br>
            <input type="text" placeholder="Enter Contact Number" name="contact" required>
            <br>
          </p>

          <p>
            <label for="address">
              <b>
                Address
              </b>
            </label>
            <br>
            <input type="text" placeholder="Enter Address" name="address" required>
            <br>
          </p>

          <p>
            <label for="email">
              <b>
                E-mail
              </b>
            </label>
            <br>
            <input type="email" placeholder="Enter Email" name="email" required>
            <br>
          </p>
                  
          <p>
            <label for="pw">
              <b>
                Password
              </b>
            </label>
            <br>
            <input type="password" placeholder="Enter Password" id="pw" name="pw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" onkeyup='pwcheck();' required>
            <i style="position: absolute; margin-left: 5px; margin-top: 14px;" class="bi bi-eye-slash" id="togglePassword"></i>
            <br>
          </p>

          <div id="validmessage">
            <h4>
              Password must contain the following:
            </h4>
            
            <p id="letter" class="pwinvalid">
              A 
              <b>
                lowercase
              </b> 
              letter (a-z)
            </p>
            
            <p id="capital" class="pwinvalid">
              A 
              <b>
                capital
              </b> 
              letter (A-Z)
            </p>

            <p id="number" class="pwinvalid">
              A 
              <b>
                number
              </b> 
              (0-9)
            </p>
                      
            <p id="length" class="pwinvalid">Minimum <b>8 characters</b></p>
        </div>

          <p>
            <label for="confirmpw">
              <b>
                Re-enter password
              </b>
            </label>
            <br>
            <input type="password" placeholder="Confirm password" id="confirmpw" name="confirmpw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" onkeyup='pwcheck();' required>
            <i style="position: absolute; margin-left: 5px; margin-top: 14px;" class="bi bi-eye-slash" id="togglePassword2"></i><span class="pwcheck" id='message'></span><br>
          </p>
                      
          <p style="font-size: 19px;">
            <label>
              <input type="checkbox" check="check" name="remember" style="margin-bottom:15px">
                Please email me special offers and other promo info
            </label>
          </p>
                      
          <p style="font-size: 19px;">By registering, you agree to Jabilee 
            <a href="DataPolicy.html" style="color:dodgerblue">Privacy Policy</a>
              and
            <a href="blankopa" style="color:dodgerblue">Terms and Conditions</a>.
          </p>
          <br>
                    
          <div class="clearfix" name="registerbtn" align="center">
            <button type="submit" class="btn">
              Sign Up
            </button>   
          </div>
    </div>
  </form>
      <script src="registration.js"></script>
</body>
</html>