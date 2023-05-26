<?php


require('database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $username = $_POST["username"];
  $password = $_POST["password"];

  $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) == 1) {
    session_start();
    $_SESSION["username"] = $username;
    $_SESSION["password"] = $password;

    header("Location: index.php");
  } else {
    echo "Invalid username or password";
  }

  mysqli_close($conn);
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="login.css">
</head>

<body>

  <div class="container">
    <h1>Login</h1>
    <form action="login.php" method="POST">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" placeholder="Enter your username" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Enter your password" required>
      </div>
      <div class="form-group">
        <button type="submit">Login</button>
        <p style="float: right;font-size: small;">Not a Member? <a href="register.html">Register</a></p>
      </div>

    </form>
  </div>

  <div>


  </div>
</body>

</html>