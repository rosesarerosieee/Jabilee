<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <title>Log In to Jabilee</title>
</head>

<style>
body {
    background-image: url('meat_background.jpg');
}

.container {
  padding: 20px;
  background-color: rgba(48, 46, 46, 0.980);
  margin: 17% auto 10% auto; 
  border: 1px solid rgb(0, 0, 0);
  width: 40%;
  border-radius: 15px;
}

h1 {
    text-align: center;
    position: relative;
    color: green;
    font-size: +50px;
}

h3 {
    text-align: center;
    margin-left: 60px;
    color: white;
    font-size: +30px;
}

.spinner {
 height: 50px;
 width: max-content;
 font-size: 22px;
 font-weight: 600;
 font-family: monospace;
 letter-spacing: 1em;
 color: #f5f5f5;
 filter: drop-shadow(0 0 10px);
 display: flex;
 text-align: center;
 margin-left: 40%;
}

.spinner span {
 animation: loading6454 1.75s ease infinite;
}

.spinner span:nth-child(2) {
 animation-delay: 0.25s;
}

.spinner span:nth-child(3) {
 animation-delay: 0.5s;
}

.spinner span:nth-child(4) {
 animation-delay: 0.75s;
}

.spinner span:nth-child(5) {
 animation-delay: 1s;
}

.spinner span:nth-child(6) {
 animation-delay: 1.25s;
}

.spinner span:nth-child(7) {
 animation-delay: 1.5s;
}

@keyframes loading6454 {
 0%, 100% {
  transform: translateY(0);
 }

 50% {
  transform: translateY(-10px);
 }
}
  
</style>

<body>

<?php
    $useracc = $_POST['useracc'];
    $userpw = $_POST['userpw'];

    $conn = new mysqli('localhost','root','','registration');
  if($conn->connect_error) {
    die('Connection Failed : '.$conn->connect_error);
  } else {
  $stmt = $conn->prepare("select * from accounts where email = ?");
  $stmt->bind_param("s", $useracc);
  $stmt->execute();
  $stmt_result = $stmt->get_result();
  if ($stmt_result->num_rows > 0) {
    $data = $stmt_result->fetch_assoc();
    if ($data['pw'] == $userpw && $data['email'] == $useracc) {
      echo "<div class='container'><h1><span id='boot-icon' class='bi bi-check2-circle' 
            style='font-size: 135px; postion: relative; align-self: flex-start; color: rgb(0, 128, 55); -webkit-text-stroke-width: 5.9px;
            opacity: 1;'></span> Log in Successfully</h1> <h3>Welcome back to Jabilee!</h3>";

      echo "<div class='spinner'>
            <span>L</span>
            <span>O</span>
            <span>A</span>
            <span>D</span>
            <span>I</span>
            <span>N</span>
            <span>G</span>
          </div>
          </div>";
      header("refresh:3; url=page.html");
      exit();
    }
  } else if ($data['email'] != $useracc) {
    header("refresh:0.01; url=login1.php");
    echo '<script language="javascript">';
    echo 'alert("Email is not yet registered")';
    echo '</script>';
    exit();
  } else
    ($data['userpw'] != $userpw); {
    header("refresh:0.01; url=login1.php");
    echo '<script language="javascript">';
    echo 'alert("Password is Incorrect")';
    echo '</script>';
    exit();
  }
}

?>

</body>
</html>