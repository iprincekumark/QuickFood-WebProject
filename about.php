<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/test3.png" type="image/gif">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" href="style/aboutus.css">
    <link rel="stylesheet" href="style/sign up.css">
    <title>Quick Food - About Us</title>
</head>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
   
<style>
  .wrapper
  {
     position: absolute;
     margin-top: 400px;
     margin-left: 50%;
     width: 500px;
     padding: 40px;
     transform: translate(-50%, -50%);
     background: rgba(0,0,0,.7);
     box-sizing: border-box;
     box-shadow: 0 15px 25px rgba(0,0,0,.6);
     border-radius: 10px;

  }
  .wrapper img{
    margin-left: 20px;
  }
  
  @media screen and (max-width: 700px) {
 
 .wrapper
  {
     position: absolute;
     margin-top: 400px;
     margin-left: 50%;
     width: 60%;
     padding: 40px;
     transform: translate(-50%, -50%);
     background: rgba(0,0,0,.7);
     box-sizing: border-box;
     box-shadow: 0 15px 25px rgba(0,0,0,.6);
     border-radius: 10px;

  }
 }
 </style>
<body>

  <div class="header" id="head">
    <a href="home.html" ><img src="img/test3.png"  title="Quick Food"></a>
    <a ><h1>ABOUT US</h1></a>
</div>

</div>
<div class="sidebar">
<ul>
<div class="contents">
<li><a href="home.php">HOME</a></li>
<li><a href="services.php">SERVICES</a></li>
<li><a href="contact.php">CONTACT US</a></li>
<li><a href="about.php">ABOUT US</a></li>

</ul>
</div>
<div class="rest" >
  <div class="column" style="width: 100%;margin-left: 0;">
    <div class="card">
      <img src="img/veg1.jpg" alt="Prakhar" style="width:100%">
      <div class="container">
        <h2 style="color: #03e9f4;">Food Is An Important Part Of A Balanced Diet</h2>
        <p>Our Cuisines are freshly made and no frozen ingredients are used in making them. As we belive freshly used ingredients are more tasty as compared to frozen ones. Quality has always been our priority and thus you'll find our food very irresistible.   </p>
        
      </div>
    </div>
  </div>
  
  <h2 style="text-align:center;font-size: 45px;">Our Team</h2>
  <div class="row">
 

  <div class="column">
    <div class="card">
      <img src="img/prakhar.jpeg" alt="Prakhar" style="width:100%">
      <div class="container">
        <h2>PRAKHAR</h2>
        <p class="title">frontend developer</p>
        <p>Prolific, full stack web developer with a passion for metrics and beating former "best-yets." Prototyped 25 new product features per year for Flexor, Inc. Decreased rework by 22% and costs by 15%. Consistently receive high user experience scores for all web development projects. </p>
        <p>PRAKHAR@abc.xyz</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="img/HARINI.jpg" alt="HARINI" style="width:100%">
      <div class="container">
        <h2>ANAGHA</h2>
        <p class="title">ui/ux Designer</p>
        <p>Meticulous web developer with over 2 years of front end experience and passion for responsive website design and a firm believer in the mobile-first approach. W3C certified. Implemented new responsive website approach which increased mobile traffic by 20%.</p>
        <p>anagha@abc.xyz</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="img/janith.jpeg" alt="HARINI" style="width:100%">
      <div class="container">
        <h2>GOWTHAM</h2>
        <p class="title">backend Developer</p>
        <p>Dedicated and efficient full stack developer with 6+ years experience in application layers, presentation layers, and databases. Spearheaded successful transition from LAMP stack to MEAN which cut latency by 40% and increased effectiveness of database administrators by 20%. </p>
        <p>gowtham@abc.xyz</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="img/gayathri.jpg" alt="HARINI" style="width:100%">
      <div class="container">
        <h2>AKSHITA</h2>
        <p class="title">NETWORK ENGINEER</p>
        <p>Skilled and well-organized USC graduate (GPA 3.9) with an MS in Electrical Engineering (Computer Networks). Eager to join Wintermute Corporation as a junior network engineer to help establish and maintain top-quality network performance.</p>
        <p>akshita@abc.xyz</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
<button onclick="topFunction()" id="toTop" title="Go to top"><i class="fas fa-hamburger"></i></button>
</div>

<div class="footer">
    <a href="home.php" ><img src="img/test3.png"  title="Quick Food"></a>
    <a ><h1>© 2021 Quick Food</h1></a>
    <a href="" id="ic"><i class="fab fa-facebook-f"></i></a>
    <a href="" id="ic"><i class="fab fa-twitter"></i></a>
    <a href="" id="ic"><i class="fab fa-google-plus-g"></i></a>
      
</div>

</body>
</html>


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
    
