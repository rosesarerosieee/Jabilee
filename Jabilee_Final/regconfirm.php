<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="retgcomplete.css">
  <title>REGISTRATION</title>
</head>

<body>
  <div class="top">
    <h2 class="title">
      Jabilee
    </h2>
    
    <ul class="navigation1">
          <li>
            <a href="page.html" style="font-family: poppins; font-weight: 1rem;">
              <b>
                Home
              </b>
            </a>

            <a href="registration.php" style="font-family: poppins; font-weight: 1rem;">
              <b>
                Sign In
              </b>
            </a>
          </li>
        </ul>
  </div>

<div class="container">
    <?php

    $firstname = $_POST["firstname"]; 
    $lastname = $_POST["lastname"];
    $contact = $_POST["contact"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $pw = $_POST["pw"];

    $conn = new mysqli('localhost','root','','registration');
    if($conn->connect_error) {
      die('Connection Failed : '.$conn->connect_error);
    }
    else {
      $stmt = $conn->prepare("insert into accounts(firstname, lastname, contact, address, email, pw)
      values(?,?,?,?,?,?)");
      $stmt->bind_param("ssisss",$firstname, $lastname, $contact, $address, $email, $pw);

      $check_duplicate = "select email from accounts where email = '$email' ";
      $result = mysqli_query($conn, $check_duplicate);
      $count = mysqli_num_rows($result);
      if ($count > 0) {
        echo "<h1 style='color:red;'>Email is already taken.</h1>";
        echo "<h1 style='color:red;'>Please use another one!</h1>";
        echo "<br>";
        echo "<br>";
        echo '<form action="registration.php"><div class="clearfix" align="center">
                  <button type="submit" class="btn">
                      Register Again!
                  </button>
              </div></form>';
        echo '<form action="login1.php"><div class="clearfix" align="center">
                <button type="submit" class="btn">
                    Sign In
                </button>
              </div></form>';
              header("refresh:10; url=page.html");
        return false;
      } else {
        echo "<h1 style='font-size: +38px;'>Registration Complete!</h1>";
        echo "<br>";
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
          echo "<p>Welcome to Jabilee $firstname $lastname.</p>";
          echo "<br>";
          echo "<br>";
    
          echo "<div class='spinner'>
            <span>R</span>
            <span>E</span>
            <span>D</span>
            <span>I</span>
            <span>R</span>
            <span>E</span>
            <span>C</span>
            <span>T</span>
            <span>I</span>
            <span>N</span>
            <span>G</span>
            </div>";
            header("refresh:2; url=page.html");
        
      }
      $stmt->execute();
      $stmt->close(); 
      $conn->close();
    }
  ?>
<div class="clearfix"><br>
<form action="page.html" method="POST"></form>
</div>

</div>

</body>
</html>