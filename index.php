<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    </-- stylesheets -->
    <link rel= "stylesheet"  type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    
    <title>Home | DhaliwalFrontiers.com</title>
</head>
<body>
<div class="site">
    <?php include 'header.php'; ?> 

    <main>

        <!--<div class="home-slider"> <img class="slider-img" src= "313.jpg"></div>
        <div class ="slider-container">
           <span id="slider-image-1"></span>
           <span id="slider-image-2"></span>
           <span id="slider-image-3"></span>

           <div class ="image-container">
             <img src="slider1.jpg"   class="slider-image">
             <img src="slider2.jpg"  class= "slider-image">
             <img src="slider3.jpg"   class= "slider-image">
           </div>
<div class = "slider-header-lines">Our capacities give us the freedom to </br>
take care of your cargo from storage to delivery. </br>
From small cargo to cargo of grand scale. </div>

        <div class="button-container">

<a href="#slider-image-1"  class="slider-button"></a>
<a href="#slider-image-2"    class="slider-button"></a>
<a href="#slider-image-3"     class="slider-button"></a>
</div>
        </div>
        

<!--
<div class="slider">
<input type ="radio" name="slider">
<div class="imgBx">
<img src="slider1.jpg">
<div class="content">
    <h2>Slide 1</h2>
    <p>hhghhghghg hghghh hghghhg hghgh</p>

</div>
</div>


<input type ="radio" name="slider">
<div class="imgBx">
<img src="slider2.jpg">
<div class="content">
    <h2>Slide 2</h2>
    <p>hhghhghghg hghghh hghghhg hghgh</p>

</div>
</div>

<input type ="radio" name="slider">
<div class="imgBx">
<img src="slider3.jpg">
<div class="content">
    <h2>Slide 3</h2>
    <p>hhghhghghg hghghh hghghhg hghgh</p>

</div>
</div>
</div>
-->

<!--<div id="slider">

		<div class="figure">

     
			
      <div style ="position : relative;">   
     <img src="desk.png">
      <div style ="position : absolute;top:7px;">nnn</div>
    </div>
     
      
      
      <div style ="position : relative;">
     <img src="desk2.png">
      <div style ="position :absolute;top:20px;">hhh</div>
</div>
     
			
      <div>
       
       <img src="desk.png">
       <div style ="position : absolute;top:30px;">khh</div>
</div>
      
      

      
			
      <div>
       <img src="desk3.png">
       <div style ="position : absolute;top:39px;">k00h</div>
</div>
      
      
      

      
      <div> 
        
			<img src="desk.png">
      <div style ="position : absolute;top:90px;">khkkkkh</div>
</div>
      
      
      
</div>

        <div class= "banner-lines">jjj jjkkiuu jjj</div>

</div>  -->
        
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <!--<div class="numbertext">1 / 3</div>-->
    <img src="new-banner-1.jpg" style="width:100%">
    <div class="banner-text">Your Load Is Our Periorty</div>
    <div class="banner-text-2">We Understand That Every Load Is Diffrent</div>
  
  </div>

  

  <div class="mySlides fade">
    <!--<div class="numbertext">2 / 3</div>-->
    <img src="banner1.jpg" style="width:100%">
    <div class="banner-text">we are available 24/7</div>
    <div class="banner-text-2">We can deliver anywhere in canada</div>
  
  </div>

  <div class="mySlides fade">
    <!--<div class="numbertext">3 / 3</div>-->
    <img src="ban-3.jpg" style="width:100%">
    <div class="banner-text">We assure the safety of belonging</div>
    <div class="banner-text-2">Tiny Or huge We Are Ready To Help </div>

  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
  <div class="banner-nav-circles" style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
</div>
<br>

<!-- The dots/circles -->

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>


<div class ="main-content">

       <!--<h1> welcome to DhaliwalFrontiers.com</h1>-->

      <h1> If You Want To Transport Something , You Are At Right Place</h1>
       <p> We are Calgary based company. If you want to transport your bike or need a big mover to 
       transport your crane. We can offer best services in both the cases. We have heavy spec to 
       move a crane and mid-sized trucks for small loads. Our drivers are trained for your loading
        and unloading needs. No need to worry about loading equipment We will provide you with the one.</br>
         We understand that every move is different, it requires specialized attention. 
         We understand that if you want to transport your boat it’s the something close to your heart. 
         If we are transporting 
         your construction equipment it's a matter of your bread and butter so we understand the importance.
          We are serving our customers needs since 1999.
          
          <div class="call-to-action"> <div class="call-to-action-left"><p><i>We believe in making relations and building trust
           with our clients.</i></p></div><div class="call-to-action-right"><p><a href="contact-us.php"><button class="call-to-action-btn">Contact Us</button></a></p></div>
           </div>

       </div>

       
<div class="flex-container">


<div class="flex-container-1"><img src="24-services.png" class="image">
<div>24/7 Services
<p>We are open 24/7 to fulfill your transportation needs. Call us any time. 
Our staff will be more than happy to provide you with the best possible solutions for your needs. </p>
</div>

<div class="middle">
    <div class="text"><a href="contact-us.php">Get In Touch</a></div>
  </div></div>

<div class="flex-container-2"><img src="canada.png" class="image">
<div>Anywhere in US
<p>We provide our services anywhere in canada. If you want to transport your tiny home to alaska or
need to transport your car to vancouver. We are well equipped  to help. </p>
</div>

<div class="middle">
  <div class="text"><a href="contact-us.php">Get In Touch</a></div>
  </div></div>

<div class="flex-container-3"><img src="on-time-delivery.png" class="image">
<div>On Time Delivery
<p>Following Time frames is one of our core values. Our customers gave us 5 starts for on time delivery.
Our drivers and load planners work togather for  on-time delivery.  </p>
</div>

<div class="middle">
    <div class="text"><a href="contact-us.php">Get In Touch<a></div>
    



  </div></div>

</div>

<div class="our-clients"> <h2> Our Clients</h2></div>

<div class="flex-container-our-clients">

<div  class="client1"><img src="our-clients-1.png" ></div>

<div class="client2"><img src="our-clients-2.png" ></div>

<div class="client3"><img src="our-clients-3.png" ></div>

<div class="client4"><img src="our-clients-4.png" ></div>



</div>


    </main>

     <!--<?php include 'aside.php'; ?>-->
     <?php include 'footer.php'; ?>
  </div>

</body>
</html>