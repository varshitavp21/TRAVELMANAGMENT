<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">V<sup>3</sup>-Travels</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>book now</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">book your trip!</h1>

   <form action="book_form.php" method="post" class="book-form" onsubmit="return verify()" name="confirmation">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name" id="name_error">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email" id="email_error">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone"  id="phone_error">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address"  id="address_error">
         </div>
         <div class="inputBox">
            <span>where to :</span>
            <input type="text" placeholder="place you want to visit" name="location"  id="location_error">
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests"  id="guests_error">
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals" id="arrivals_error" >
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving"  id="leaving_error">
         </div>
      </div>

      <input type="submit" value="submit" class="btn" name="send" onclick="return validity()" onsubmit="return verify()"<a href="confirm.php"</a> >

   </form>

</section>

<!-- booking section ends -->





<script>

function verify()
{
   var a= document.forms["confirmation"]["name"].value;
   var b= document.forms["confirmation"]["email"].value;
   var c= document.forms["confirmation"]["phone"].value;
   var d= document.forms["confirmation"]["address"].value;
   var e= document.forms["confirmation"]["location"].value;
   var f= document.forms["confirmation"]["arrivals"].value;
   var g= document.forms["confirmation"]["leaving"].value;
   var x= document.forms["confirmation"]["guests"].value;


   if (a == null || a == "") {
      nameError = "Please enter your name";
      document.getElementById("name_error").innerHTML = nameError; 
      alert("pla enter name");
      
      return false;
  } 

  else if (b == null || b == "") {
   emailError = "Please enter your email";
   document.getElementById("email_error").innerHTML = emailError; 
   alert("pla enter name");
   return false;
} 
else if (c == null || c == "") {
   phoneError = "Please enter your phone";
   document.getElementById("phone_error").innerHTML = phoneError; 
   alert("pla enter name");
   alert("**please enter phone number");
   return false;
} 
else if (d == null || d == "") {
   addressError = "Please enter your address";
   document.getElementById("address_error").innerHTML = adressError; 
   alert("pls enter address");
   prompt("pla enter name");
   
   

   return false;
} 
else if (e == null || e == "") {
   locationError = "Please enter your location";
   document.getElementById("location_error").innerHTML = locationError; 
   alert("pls enter address");
   

   prompt("pla enter name");
   return false;
} 
else if (f == null || f == "") {
   arrivalsError = "Please enter your arrival date";
   document.getElementById("arrivals_error").innerHTML = arrivalsError; 
   prompt("pla enter name");
   alert("pls enter address");
   return false;
} 
else if (g == null || g == "") {
   leavingError = "Please enter your leaving date";
   document.getElementById("leaving_error").innerHTML = leavingError; 
   prompt("pla enter name");
   alert("pls enter address");
   return false;
} 
else if (x == null || x == "") {
   guestsError = "Please enter your leaving date";
   prompt("pla enter name");
   document.getElementById("guests_error").innerHTML = guestsError; 
   alert("pls enter address");
   return false;
} 

else
{
   return true;
}


if(document.getElementById("phone_error").value.length() == 0)
{
      alert("*please enter phone");
      
}

}





</script>



<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i>9845984706 </a>
         <a href="#"> <i class="fas fa-phone"></i> 7895463219</a>
         <a href="#"> <i class="fas fa-envelope"></i> varun@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Dsce, banglore </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>mr. web designer</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>