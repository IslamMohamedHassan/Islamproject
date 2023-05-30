<body style="background-color: #f7f5f5;">
  <!-- Header with navigation and cart -->
  <!-- ... -->
  
  <!-- Hoodie 1 Page -->
  <div class="hoodie1-page">
    <h2 style="text-align: center; margin-bottom: 40px;"> </h2>
    <div class="product-image">
      <P ALIGN="center"> <img src="{{asset('assets/images/'.$product->image)}}" alt="White Hoodie" HEIGHT="280" WIDTH="320">
    </div>
    <div class="product-description">
      <p style="font-size: 20px; font-weight: bold; margin-bottom: 20px;">Price: ${{$product->price}}</p>
      <form action="{{route('addToCart')}}" method="get">
        <input type="hidden" name="id" value="{{$product->id}}">
        <label for="size" style="font-weight: bold;">Size:</label>
        <select id="size" name="size">
            <option value="XS">XS</option>
          <option value="S">S</option>
          <option value="M">M</option>
          <option value="L">L</option>
          <option value="XL">XL</option>
          <option value="XXL">XXL</option>
          <option value="XXXL">XXXL</option>
        </select>
        <input type="submit" value="Add to Cart" style="margin-top: 20px; padding: 10px 20px; background-color: #333; color: #fff; border-radius: 5px; font-weight: bold;">
      </form>
    </div>
  </div>

  <div class="buttons">
    <a href="index.html" class="back-to-home-button"></a>
    <a href="cart.html" class="cart-button"></a>
  </div>
</div>
<style>
  <!-- Footer -->
  <!-- ... -->
   <!-- Header with navigation and cart -->
<!-- ... -->

<!-- Hoodie 1 Page -->
<div class="hoodie1-page">
  <!-- ... -->

  
    </style>
  
  <!DOCTYPE html>
<html>
<head>
  <style>
      body {
        height: 200px;
        background-image: linear-gradient(to right, #696262, #e7e7e7);
      }

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}

/* Slideshow container */
.slideshow-container {
position: relative;
background: #f1f1f1f1;
}

/* Slides */
.mySlides {
display: none;
padding: 80px;
text-align: center;
}

/* Next & previous buttons */
.prev, .next {
cursor: pointer;
position: absolute;
top: 50%;
width: auto;
margin-top: -30px;
padding: 16px;
color: #888;
font-weight: bold;
font-size: 20px;
border-radius: 0 3px 3px 0;
user-select: none;
}

/* Position the "next button" to the right */
.next {
position: absolute;
right: 0;
border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
background-color: rgba(0,0,0,0.8);
color: white;
}

/* The dot/bullet/indicator container */
.dot-container {
  text-align: center;
  padding: 20px;
  background: #ddd;
}

/* The dots/bullets/indicators */
.dot {
cursor: pointer;
height: 15px;
width: 15px;
margin: 0 2px;
background-color: #bbb;
border-radius: 50%;
display: inline-block;
transition: background-color 0.6s ease;
}



/* Add a background color to the active dot/circle */
.active, .dot:hover {
background-color: #717171;
}

/* Add an italic font style to all quotes */
q {font-style: italic;}

/* Add a blue color to the author */
.author {color: cornflowerblue;}
</style>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides">
<q>I love you the more in that I believe you had liked me for my own sake and for nothing else</q>
<p class="author">- John Keats</p>
</div>

<div class="mySlides">
<q>But man is not made for defeat. A man can be destroyed but not defeated.</q>
<p class="author">- Ernest Hemingway</p>
</div>

<div class="mySlides">
<q>I have not failed. I've just found 10,000 ways that won't work.</q>
<p class="author">- Thomas A. Edison</p>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>

<div class="dot-container">
<span class="dot" onclick="currentSlide(1)"></span> 
<span class="dot" onclick="currentSlide(2)"></span> 
<span class="dot" onclick="currentSlide(3)"></span> 
</div>

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

</body>
</html> 
<!-- Footer -->
<!-- ... -->
<div class="hoodie1-page">
  <!-- ... -->
  
  <!-- Customer Reviews -->
  <!-- ... -->
  
  
  <!-- Back to Home and Cart Buttons -->
  <p><div class="buttons">
    <a href="{{route('home')}}" class="back-to-home-button">Back to Home</a>
    <a href="{{route('cart')}}" class="cart-button">View Cart</a>
  </div>
</div>
<style>
  /* Hoodie 1 Page */
  .hoodie1-page {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    padding: 20px;
  }
  
  /* Product Image */
  .hoodie1-page .product-image {
    width: 40%;
    margin-right: 20px;
  }
  
  /* Product Description */
  .hoodie1-page .product-description {
    width: 50%;
    text-align: left;
  }
  
  /* Customer Reviews */
  .hoodie1-page .review {
    width: 100%;
    margin-bottom: 10px;
  }
  
  /* Back to Home and Cart Buttons */
  
  .hoodie1-page .buttons {
    width: 100%;
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
  }
  
  .hoodie1-page .back-to-home-button,
  .hoodie1-page .cart-button {
    padding: 10px 20px;
    background-color: #333;
    color: #fff;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
  }