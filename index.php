<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body style="background-color: #E48F45 ;">

    <header>
        <nav>
            <div class="container";>
            
                <div class="logo">
                  <!-- changing logo from image to text -->
                   Chicken Disease Classification
                </div>
                <ul>
                    
                    <li><a href="login_form.php">Sign In</a></li>
                    <li><a href="register_form.php">Sign Up</a></li>
                    <li><a href="index.php" class="active">Home</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="hero">
        <!-- <div class="container">
            <h1>DISEASE PREDICTION SYSTEM</h1>
            </div> -->
            <div class="slideshow-container">

<div class="mySlides fade">
  <!-- <div class="numbertext1">1 / 3</div> -->
  <img src="ChickeSlide1-1.jpg" style="width: 100% ; height: 20%;">
  <div class="text1">Caption Text</div>
</div>

<div class="mySlides fade">
  <!-- <div class="numbertext2">2 / 3</div> -->
  <img src="ChickenSlide2-2.jpg" style="width: 100% ; height: 20%;">
  <div class="text2">Caption Two</div>
</div>

<div class="mySlides fade">
  <!-- <div class="numbertext3">3 / 3</div> -->
  <img src="ChickenSlide3-3.jpg" style="width: 100% ; height: 20%;">
  <div class="text3">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<div class="myText">
<p>We understand how crucial the health of your chickens is to you. Our platform is here to assist you in identifying and predicting potential health issues in your feathered friends. If you have an image of a sick chicken, you're in the right place!

Simply use the upload form below to share images of your chickens, and our advanced prediction system will analyze them to provide insights into potential health concerns. Don't worry; we're here to help ensure your chickens lead happy and healthy lives.

Thank you for entrusting us with the well-being of your chickens. Let's work together to keep your flock thriving!</p>
</div>
          
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <input type="file" name="fileToUpload" id="fileToUpload">
             
                <input type="submit" value="Upload">
            </form>
      
    </section>


    <script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
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

</body>
</html>
