<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

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

<div class="heading" style="background:url(images/header-bg-1.png) no-repeat">
   <h1>about us</h1>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="image">
      <img src="images/about-img.jpg" alt="">
   </div>

   <div class="content">
      <h3>why choose us?</h3>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure numquam nulla iusto corporis dolor commodi libero, vitae obcaecati optio rerum ab culpa nesciunt, earum mollitia quasi ipsam non. Aliquid, iure.</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid rerum, delectus voluptate aliquam quaerat iusto repellendus error nulla ab atque.</p>
      <div class="icons-container">
         <div class="icons">
            <i class="fas fa-map"></i>
            <span>top destinations</span>
         </div>
         <div class="icons">
            <i class="fas fa-hand-holding-usd"></i>
            <span>affordable price</span>
         </div>
         <div class="icons">
            <i class="fas fa-headset"></i>
            <span>24/7 guide service</span>
         </div>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading-title"> clients reviews </h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus facilis laudantium magnam saepe magni ullam possimus laborum voluptas, veniam ipsum officiis quae doloribus minima ut quis. Molestiae qui distinctio possimus?</p>
            <h3>Dhoni</h3>
            <span>traveler</span>
            <img src="data:image/jpeg;base64,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" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus repellendus et suscipit optio similique totam aut laborum ullam sequi! In!</p>
            <h3>alia bhatt</h3>
            <span>traveler</span>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQR81HF-Ifpf7bvmiab_g4murpOXwN3Itb3xQ&usqp=CAU" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus enim deserunt, ab at ea iste odio placeat doloribus eum dolores tempore obcaecati, dolore esse aperiam. Excepturi ad quo distinctio, dignissimos voluptate, dolores, saepe animi eum atque sint esse ab exercitationem!</p>
            <h3>Sudeep</h3>
            <span>traveler</span>
            <img src="data:image/jpeg;base64,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" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus recusandae cum quibusdam odio dignissimos nemo?</p>
            <h3>varun</h3>
            <span>traveler</span>
            <img src="images/pic-4.png" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus facilis laudantium magnam saepe magni ullam possimus laborum voluptas, veniam ipsum officiis quae doloribus minima ut quis. Molestiae qui distinctio possimus?</p>
            <h3>varshita</h3>
            <span>traveler</span>
            <img src="images/pic-5.png" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus facilis laudantium magnam saepe magni ullam possimus laborum voluptas, veniam ipsum officiis quae doloribus minima ut quis. Molestiae qui distinctio possimus?</p>
            <h3>vinay</h3>
            <span>traveler</span>
            <img src="images/pic-6.png" alt="">
         </div>

      </div>

   </div>

</section>

<!-- reviews section ends -->















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
         <a href="#"> <i class="fas fa-phone"></i>7869845562 </a>
         <a href="#"> <i class="fas fa-envelope"></i> varshita@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i>Dsce, Banglore</a>
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