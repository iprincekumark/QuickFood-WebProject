 <?php include 'includes/conn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/test3.png" type="image/gif">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="style/main(gaya3).css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Quick Food - Home</title>
</head>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

<style>
  
    @media screen and (max-width: 700px) {
   
   .footer a h1
   {
     width: 30%;
    font-size: 18px;
    margin-left: 12%;
   }
   }
   </style>
<body>
    <div class="header" id="head">
            <a href="home.php" ><img src="img/test3.png"  title="Quick Food"></a>
            <a ><h1>QUICK FOOD</h1></a>
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

<div class="rest">

    <div class="slideshow-container">

        <div class="mySlides fade">
          <div class="numbertext">1 / 5</div>
          <img src="img/lassi.png" style="width:100%">
          <div class="text">Mango Lassi</div>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">2 / 5</div>
          <img src="img/biriyani.png" style="width:100%">
          <div class="text">Chicken Biriyani</div>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">3 / 5</div>
          <img src="img/lollipop.jpeg" style="width:100%">
          <div class="text">Chicken Lollipop</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">4 / 5</div>
          <img src="img/pani.png" style="width:100%">
          <div class="text">Pani Puri</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">5 / 5</div>
          <img src="img/paneer.png" style="width:100%">
          <div class="text">Paneer Tikka</div>
        </div>
        
        </div>
        
        <div style="text-align:center">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
        </div>

        <br><br><br>

        <script>
            var slideIndex = 0;
            showSlides();
            
            function showSlides() {
              var i;
              var slides = document.getElementsByClassName("mySlides");
              var dots = document.getElementsByClassName("dot");
              for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
              }
              slideIndex++;
              if (slideIndex > slides.length) {slideIndex = 1}    
              for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
              setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
            </script>

<div class="navbar2">
    <?php
		       			
	    $conn = $pdo->open();
        $ctstmt = $conn->prepare("SELECT * FROM category");
        $ctstmt->execute();
        foreach($ctstmt as $row0 ){
            echo    "
                        <a href='#".$row0['name']."'><img class='icons'  src='img/".$row0['photo']."' width='70px' height='70px'>
                            <br>
                        <h2 style='color: white;font-family: Verdana, Geneva, Tahoma, sans-serif;font-size: 20px;'>".$row0['name']."</h2></a>

                    ";
        }
    ?>
</div>
<br>
<br>
<br>
<br>

<div class="wrapper">
<!-- <div class="title" id="Starters">
    <br><br><br><br><br>
    <h4>Starters</h4>
</div> -->
                   
<div class="menu">
   
     <?php
		       			
		       			$conn = $pdo->open();

		       			try{
                                $cstmt = $conn->prepare("SELECT * FROM category");
                                $cstmt->execute();
                                foreach($cstmt as $row1 ){
                                    echo "<div class='title' id='".$row1['name']."'>
                                            <br><br><br><br><br>
                                            <h4>".$row1['name']."</h4>
                                        </div>

                                        ";
                                        $stmt = $conn->prepare("SELECT * FROM product where product.category_id=:cat" );
						                $stmt->execute(['cat'=>$row1['category_id']]);
						                foreach ($stmt as $row) {
						    	        $image = (!empty($row['photo'])) ? 'img/'.$row['photo'] : 'img/noimage.jpg';
						    //	$inc = ($inc == 3) ? 1 : $inc + 1;
	       					//	if($inc == 1) 
                                        echo "
                                    <div class='single-menu'>
                                        <img src='".$image."' >
                                            <div class='menu-content'>
                                                <h4>".$row['name']."<span>Rs".number_format($row['price'], 2)."</span></h4>
                                                ".$row['description']."
                                                <button class='button button1'>Add to cart</button>
                                            </div>
                                    </div>
                                    <br>
	       						            ";
	       						//if($inc == 3) echo "</div>";
						    }
                                }
		       			 	//$inc = 3;	
						    
						//    if($inc == 1) echo "<div class='col-sm-4'></div><div class='col-sm-4'></div></div>"; 
						//	if($inc == 2) echo "<div class='col-sm-4'></div></div>";
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?>
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
    
