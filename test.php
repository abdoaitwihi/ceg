<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ceg</title>
   <!-- styles -->
   <link rel="stylesheet" href="./css/bootstrap.min.css">
   <link rel="stylesheet" href="./css/style.css">
   <link rel="stylesheet" href="./css/animate.css">
   <link rel="stylesheet" href="./css/owl.carousel.min.css">
</head>

<body>
   <style>
      /* Make the image fully responsive */
      .carousel-inner img {
         min-width: 100%;
         min-height: 100%;
      }

      #demo {
         height: 100%;
         overflow: hidden;
      }

      .my-header {
         height: 100vh;
      }

      .navigation {
         position: fixed;
         z-index: 111;

      }
   </style>
   <!-- navigation -->

   <div class="container-fluid navigation">
      <div class="container">
         this is navigation

         <a href="https://www.google.com" target="blank"> go to google</a>
         <a href="./index" target="blank"> go to home</a>
      </div>
   </div>
   <!-- end of navigation -->
   <div class="container-fluid my-header px-0">

      <div id="demo" class="carousel slide">

         <!-- Indicators -->
         <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
         </ul>

         <!-- The slideshow -->
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img src="./assets/img/activit-esoiree-jemaa-el-fna.png" alt="Los Angeles">
            </div>
            <div class="carousel-item">
               <img src="./assets/img/activite-sortie-en-quad.png" alt="Chicago">
            </div>
            <div class="carousel-item">
               <img src="./assets/img/activite-Tour-en-Montgolfier.png" alt="New York">
            </div>
            <div class="carousel-item">
               <img src="./assets/img/activite-Tour-en-Montgolfier.png" alt="New York">
            </div>
         </div>

         <!-- Left and right controls -->
         <a class="carousel-control-prev" href="#demo" data-slide="prev">

         </a>
         <a class="carousel-control-next" href="#demo" data-slide="next">

         </a>

      </div>
   </div>
   <div class="container-fluid">
      <div class="container">
         <div>this is waht comes after the header</div>
      </div>
   </div>
   <!-- scripts -->
   <script></script>
   <script src="./js/jquery.min.js"></script>
   <script src="./js/bootstrap.min.js"></script>
   <script src="./js/jquery.min.js"></script>
   <script src="./js/popper.min.js"></script>
   <script src="./js/jquery.magnific-popup.js"></script>
   <script src="./js/owl.carousel.min.js"></script>
   <script src="./js/costum.js"></script>
   <script>


   </script>
</body>

</html>