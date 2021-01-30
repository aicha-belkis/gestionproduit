<?php
 require_once("../inculdes/navbar.php");//inculdes navbar.php
 ?>

<head >
  
<meta name ="viewport" content="width_device-widht,
  initial-scale=1.0">
<div class="slideshow-container">

<div class="mySlides fade">
  
  <img  class="imgC" src="https://images.unsplash.com/photo-1580828343064-fde4fc206bc6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=751&q=80" style="width:50%">
 
</div>

<div class="mySlides fade">
 
  <img class="imgC" src="https://images.unsplash.com/photo-1545535408-2b4d520cbd88?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80" style="width:50%">

</div>

<div class="mySlides fade">

  <img class="imgC" src="https://images.unsplash.com/photo-1563357732-31978202a214?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" style="width:50% ">
  
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

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
<style>
* {box-sizing: border-box;}
.head {font-family: Verdana, sans-serif; }
.mySlides {display: none;}
.img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  Width: 100%;
  height:10px;
  position: relative;
  margin: auto;
  
}
.imgC{
  float: right;
}





/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;

  background-color: white;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
/* dik botnat   sghar li te7et pic*/
.active {
  background-color:white;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */



</style>
</DIV>
</head>

<body>
  
<div class="text-animations">
  <!--     <h2 class="animation-text-wipe animate-in anim-delay-1">
        A Real Tube Carrying Dreams of 600-M.P.H. Transit 
    </h2> -->
  <br>
  <h1 >
      Start a day with new look 
      
    </h1>
  <span class="animation-text-wipe animate-in anim-delay-2">
   &#35;What you wear is how you present yourself to the world  especially today  when human contacts are so quick    
    <mark style="color:#ff9090 ;  background-color: #e7d0b8;" bac>&#34; Fashion  is instant language &#34;</mark>
    
     <p>jhifugeb fhebhfbjekndkncd cchduiezhd<br>jhqdfhbezhjfbezjhgjfe hjzgfbhz dejbfjhbezhjbfhjbdfhebfhbhdfh<br>jdhuihadbhjbdhjbsdehdhbhbefdjhbfc</p>
    <STYle>
      p{
        color: white;
      }
      
      h1
         {  color:	#44394d; font-family: 'italic'; font-size: 90px; font-weight: bold; letter-spacing: -1px; line-height: 1; text-align: center; }
      
     span{
      color: #ff9090; font-family: 'Helvetica Neue', sans-serif; font-weight:10px;  line-height:50px; margin: 0 0 20px; text-align: justify; text-justify: inter-word;

       font-size: 30PX;
 background-color: #5e7174;
       
      
     }
     
     
    

.animation-text-wipe {
  opacity: 0;
  -webkit-mask-image: linear-gradient(to left, #0000 38%, #000 40%);
  -webkit-mask-size: 300%;
}

.animation-text-wipe.animate-in {
  animation-name: text-wipe;
  animation-duration: 5s;
  animation-timing-function: linear;
  animation-iteration-count: infinite;
}

.anim-delay-1 {
  animation-delay: 0.25s;
}
.anim-delay-2 {
  animation-delay: 0.5s;
}
.anim-delay-3 {
  animation-delay: 0.75s;
}

/**
 * Safari has issues if you try to animate
 * mask-size, so we set that on the element
 * and only translate the position.
 */
@keyframes text-wipe {
  0% {
    opacity: 1;
    -webkit-mask-position: 100%;
  }

  100% {
    opacity: 1;
    -webkit-mask-position: 0%;
  }
}


    </STYle>
    </span>
</div>




    
    
  




    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
      <ul class="thumbnails list-unstyled">
        <li class="col-md-3">
          <div class="thumbnail" style="padding: 0">
            <div style="padding:4px">
              <img alt="300x200" style="width: 100%" src="https://i.pinimg.com/originals/51/5d/38/515d387599f3405a27a247a908378a4a.jpg">
            </div>
            <div class="caption">
              <h2>t shirt</h2>
              <p><a class="btn btn-primary" href="#">Add to cart</a></p>
              <p><i class="icon icon-map-marker"></i> Place, Country</p>
            </div>
            <div class="modal-footer" style="text-align: left; background-color:#e7d0b8;">
              <div class="progress"style="background-color: red;">
                <div  class="progress-bar " role="progressbar " aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                    <span class="sr-only">60% Complete</span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4"><b>60%</b><br/><small>FUNDED</small></div>
                <div class="col-md-4"><b>$400</b><br/><small>PLEDGED</small></div>
                <div class="col-md-4"><b>18</b><br/><small>DAYS</small></div>
              </div>
            </div>
          </div>
        </li>
        <li class="col-md-3">
        <div class="thumbnail" style="padding: 0">
            <div style="padding:4px">
              <img alt="300x200" style="width: 100%" src="https://images.journeys.com/images/products/1_502268_ZM_WHITE.JPG">
            </div>
            <div class="caption">
              <h2>shoes</h2>
              <p><a class="btn btn-primary" href="#">Add to cart</a></p>
              <p><i class="icon icon-map-marker"></i> Place, Country</p>
            </div>
            <div class="modal-footer" style="text-align: left;background-color:#cccccc;">
              <div class="progress"style="background-color: red;">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                    <span class="sr-only">60% Complete</span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4"><b>250%</b><br/><small>FUNDED</small></div>
                <div class="col-md-4"><b>$50000</b><br/><small>PLEDGED</small></div>
                <div class="col-md-4"><b>FUNDED</b><br/><small>AUG 5</small></div>
              </div>
            </div>
          </div>
        </li>
        <li class="col-md-3">
        <div class="thumbnail" style="padding: 0">
          <div style="padding:4px">
            <img alt="300x200" style="width: 100%" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTxqgOPu5Mo5ppjOj30rwwwWI5MYx443AIz0A&usqp=CAU">
          </div>
          <div class="caption">
            <h2>Robe</h2>
            <p><a class="btn btn-primary" href="#">Add to cart</a></p>
            <p><i class="icon icon-map-marker"></i> Place, Country</p>
          </div>
          <div class="modal-footer" style="text-align: left ;background-color:#e7d0b8;">
              <div class="progress"style="background-color: red;">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                    <span class="sr-only">60% Complete</span>
                </div>
              </div>
            <div class="row">
              <div class="col-md-4"><b>30%</b><br/><small>FUNDED</small></div>
              <div class="col-md-4"><b>$1000</b><br/><small>PLEDGED</small></div>
              <div class="col-md-4"><b>NOT FUNDED</b><br/><small></small></div>
            </div>
          </div>
        </div>
      </li>
      <div class="row">
      <ul class="thumbnails list-unstyled">
        <li class="col-md-3">
          <div class="thumbnail" style="padding: 0">
            <div style="padding:4px">
              <img alt="300x200" style="width: 100%" src="data:image/jpeg;base64,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">
            </div>
            <div class="caption">
              <h2> jeans
              </h2>
              <p><a class="btn btn-primary" href="#">Add to cart</a></p>
              <p><i class="icon icon-map-marker"></i> Place, Country</p>
            </div>
            <div class="modal-footer" style="text-align: left;background-color:#cccccc;">
              <div class="progress"style="background-color: red;">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                    <span class="sr-only">60% Complete</span>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4"><b>60%</b><br/><small>FUNDED</small></div>
                <div class="col-md-4"><b>$400</b><br/><small>PLEDGED</small></div>
                <div class="col-md-4"><b>18</b><br/><small>DAYS</small></div>
              </div>
            </div>
          </div>
     <style>
      
       
       
      
     </style>
    </div>