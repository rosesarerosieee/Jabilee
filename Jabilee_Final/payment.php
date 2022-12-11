<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel ="stylesheet" href="payment.css">
  <title>PAYMENT</title>
</head>

<body>
<div class="top">
        <h1 class="title">Jabilee</h1>
        <h5><a style="color: black;" class="fa-solid fa-user" href="Login1.php"></a></h5>
        <ul class="navigation1"> 
            <li><a href="page.html">Home</a></li>
            <li><a target ="_blank" href="https://www.facebook.com/profile.php?id=100086736890869">Contact us</a></li>
            <li><a href="registration.php">Register</a></li>
            </ul>

<div class="container">
    <?php
    
    $firstname = $_POST["firstname"]; 
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $contact_num = $_POST["contact_num"];
    $payment_type = $_POST["payment_type"];
    $cardname = $_POST["cardname"];
    $ccnum = $_POST["ccnum"];
    $expmonth = $_POST["expmonth"];
    $expyear = $_POST["expyear"];
    $cvv = $_POST["cvv"];

    $conn = new mysqli('localhost','root','','registration');
    if($conn->connect_error) {
      die('Connection Failed : '.$conn->connect_error);
    }else {
      $stmt = $conn->prepare("insert into jabilee_cust(firstname, lastname, email, contact_num, payment_type, cardname, ccnum, expmonth, expyear, cvv)
      values(?,?,?,?,?,?,?,?,?,?)"); 
      $stmt->bind_param("sssissssii",$firstname, $lastname, $email, $contact_num, $payment_type, $cardname, $ccnum, $expmonth, $expyear, $cvv);

      $stmt->execute();
      echo "<p style = text-align:center; > Thank you for your purchase!!</p>";
      echo "<p style = text-align:center;> Come again next time!!!</p>";
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