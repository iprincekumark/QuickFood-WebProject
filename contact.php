<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/test3.png" type="image/gif">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" href="style/Verzeo_WD_MajorProject_ContactUs.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="style/sign up.css">
    <title>Quick Food - Contact Us</title>
</head>
<style>
  
 @media screen and (max-width: 700px) {

.footer a h1
{
  width: 30%;
 font-size: 18px;
 margin-left: 12%;
}
.Sign-up
{
  width: 45%;
}
}
</style>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<body>

  <div class="header" id="head">
    <a href="home.php" ><img src="img/test3.png"  title="Quick Food"></a>
    <a ><h1>CONTACT US</h1></a>
</div>

</div>
<div class="sidebar">
<ul>
<div class="contents">
<li><a href="home.php">HOME</a></li>
<li><a href="services.php">SERVICES</a></li>
<li><a href="contact.php">CONTACT US</a></li>
<li><a href="about.php">ABOUT US</a></li>
    </div>
</ul>
</div>


<div class="Sign-up" style="margin-top: 370px;">
  <div class="title">
    <h1>Contact Us</h1>
  </div>
  <div class="form">
    <div class="user-box">
      <input type="text" lastname="" required="">
      <label>User Name</label>
    </div>
    <div class="user-box">
      <input type="tel" Phone="" required="">
      <label>Phone Number</label>
    </div>
    <div class="user-box">
      <input type="email" email="" required="">
      <label>E-Mail</label>
    </div>
    <div class="user-box">
      <input type="text" Message="" required="">
      <label>Message</label>
    </div>
    
    

  <div class="btn">
    <a>Submit
    <i class="fas fa-arrow-right"></i></a>
  </div>
  
  
  <div class="social-icons">
    <div class="facebook">
      <i class="fab fa-facebook-f"></i>
    </div>
    <div class="twitter">
      <i class="fab fa-twitter"></i>
    </div>
    <div class="google">
      <i class="fab fa-google-plus-g"></i>
    </div>
  </div>
  
</div>
</div>


<div class="footer" style="top: 770px;">
  <a href="home.php" ><img src="img/test3.png"  title="Quick Food"></a>
  <a ><h1>?? 2021 Quick Food</h1></a>
  <a href="" id="ic"><i class="fab fa-facebook-f"></i></a>
  <a href="" id="ic"><i class="fab fa-twitter"></i></a>
  <a href="" id="ic"><i class="fab fa-google-plus-g"></i></a>
    
</div>



<script>
  //Get the button
  var mybutton = document.getElementById("toTop");
  
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {scrollFunction()};
  
  function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
      document.getElementById("head").style.backgroundColor = "rgb(65, 62, 62)";
      mybutton.style.display = "block";
    } else {
      document.getElementById("head").style.backgroundColor = "rgb(65, 62, 62,0)";
      mybutton.style.display = "none";
    }
  }
  
  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
  </script>
  
