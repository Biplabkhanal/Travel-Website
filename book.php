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

   <a href="home.php" class="logo">travel.</a>

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

   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="Enter your name" name="name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="Enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="Enter your number" name="phone">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="Enter your address" name="address">
         </div>
         <div class="inputBox">
            <span>where to :</span>
            <input type="text" placeholder="Place you want to visit" name="location">
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="Number of guests" name="guests">
         </div>
         <div class="inputBox">
            <span>arrival :</span>
            <input type="date" name="arrival">
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving">
         </div>
      </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>

</section>

<!-- booking section ends -->

















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
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> 9803425678 </a>
         <a href="#"> <i class="fas fa-phone"></i> 9846572041 </a>
         <a href="#"> <i class="fas fa-envelope"></i> khanalbiplab@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Kathmandu, Nepal </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
      </div>

   </div>

   <div class="credit"> created by <span>mr. biplab khanal</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>