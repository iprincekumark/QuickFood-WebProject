<?php
	include 'includes/session.php';

  
if($_SERVER['REQUEST_METHOD'] == 'POST') {

			$conn = $pdo->open();
      $email = $_POST['email'];
			$stmt = $conn->prepare("SELECT COUNT(*) AS numrows FROM user WHERE email=:email");
			$stmt->execute(['email'=>$email]);
			$row = $stmt->fetch();
			if($row['numrows'] > 0){
        echo '<div class="alert alert-danger" role="alert">
                  User already exists with this email ID
              </div>';
      }
			else
      {
        
          $firstname = $_POST['firstname'];
          $lastname = $_POST['lastname'];
          $password = $_POST['password'];
          $phone = $_POST['phone'];
          $address = $_POST['address'];
				
          $userid = $conn->prepare("select count(*)+1 from user");
					$stmt = $conn->prepare("INSERT INTO user (`user_id`, `fname`, `lname`, `phno`, `email`, `address`, `password`) VALUES (:userid, :firstname, :lastname, :phone, :email, :address, :password)");
					$stmt->execute(['email'=>$email, 'password'=>$password, 'firstname'=>$firstname, 'lastname'=>$lastname, 'userid'=>$userid, 'phone'=>$phone, 'address'=>$address]);
					

					$message = "
						<h2>Thank you for Registering.</h2>
						<p>Your Account:</p>
						<p>Email: ".$email."</p>
						<p>Password: ".$_POST['password']."</p>
					";
        header("location:home.php");
      }
    }
					

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/test3.png" type="image/gif">
    <title>Quick Food - Sign Up</title>
    <link rel="stylesheet" href="style/sign up.css">
    <link rel="stylesheet" href="style/login.css">
    
</head>
<body>
    <div class="Sign-up">
      <img src="img/test3.png" width="100px">
        <h2>Sign-up</h2>
        <form action="" method="Post">
  

       
          <div class="user-box">
            <input type="text" name="firstname" required autocomplete="off">
            <label>First Name</label>
          </div>
          <div class="user-box">
            <input type="text" name="lastname" required autocomplete="off">
            <label>Last Name</label>
          </div>
          <div class="user-box">
            <input type="tel"  name="phone" required autocomplete="off">
            <label>Phone Number</label>
          </div>
          <div class="user-box">
            <input type="email"  name="email" required autocomplete="off">
            <label>E-Mail</label>
          </div>
          <div class="user-box">
            <input type="text"  name="address" required autocomplete="off">
            <label>Address</label>
          </div>
          
          <div id="pswrd_1" class="user-box">
            <input type="password"  name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" Placeholder="" Password="" required autocomplete="off">
            <label>Create Password</label>
          </div>
          
          
          <button type="submit" style="background-color: #141e30;">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Sign-up
        </button>
        <br>
          <a href="index.php">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Login
        </a>
     
        </form>
      </div>
      
</body>



</html>
