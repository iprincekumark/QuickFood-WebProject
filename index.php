<!DOCTYPE html>
<?php include 'includes/session.php';
?>
 <?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
      $email = $_POST['email'];
      $password = $_POST['password'];
      $conn = $pdo->open();
        $ctstmt = $conn->prepare("SELECT * FROM user WHERE email=$email and password = $password");
        $ctstmt->execute();
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/test3.png" type="image/gif">
    <title>Quick Food - Login</title>
    <link rel="stylesheet" type="text/css" href="style/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="login-box">
        <img src="img/test3.png" width="100px">
        <h2>Login</h2>
        <br>
        <form action="verify.php" method="POST">
          <div class="user-box">
            <input type="email" name="email" autocomplete="off" required>
            <label>Username</label>
          </div>
          <div class="user-box">
            <input type="password" name="password" autocomplete="off"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="" required>
            <label>Password</label>
          </div>
          <button type="submit" style="background-color: #141e30;">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Login
        </button>
        <br>
          <a href="signup.php">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Sign-up
        </a>
        </form>
      </div>

    
</body>
</html>
