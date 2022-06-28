<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/test3.png" type="image/gif">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" href="style/aboutus.css">
    <title>Quick Food - Services</title>
</head>

<style>
  @media screen and (max-width: 800px) {
 
 .footer a h1
 {
   width: 30%;
  font-size: 18px;
  margin-left: 12%;
 }
 }
 </style>

<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<body>  
  <div class="header" id="head">
    <a href="home.php" ><img src="img/test3.png"  title="Quick Food"></a>
    <a ><h1>SERVICES</h1></a>
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
<br>
<div class="rest">
  <div class="row">
  <div class="column">
    <div class="card">
      <img src="img/delivery.jpg" alt="Akash" style="width:100%">
        <div class="container">
          <h2>Home Delivery</h2>
          <p>
            Contact : -  +0135 342249<br>
                    +91 8954224559
          </p>
          
      </div>
    </div>
  </div>
  <div class="row">
    <div class="column">
      <div class="card">
        <img src="img/res.jfif" alt="Akash" style="width:100%">
        <div class="container">
          <h2>pick up</h2>
          <p>
            A101, First Floor, Parsvnath Mall, Rajpur Rd, DElhi 110001
          </p>
          
        </div>
      </div>
        </div>
    </div>
</div>
</div>


<button onclick="topFunction()" id="toTop" title="Go to top"><i class="fas fa-hamburger"></i></button>
</body>
</html>

<div class="footer">
    <a href="home.php" ><img src="img/test3.png"  title="Quick Food"></a>
    <a ><h1>© 2021 Quick Food</h1></a>
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
    
