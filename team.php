<?php $active = "team"; ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include "./includes/meta.php"; ?>
   </head>

   <body class="global-class">
      <!-- navigation -->
      <div class="container-fluid px-0 navigation" id="menu">
         <?php include "./includes/navigation.php"; ?>
      </div>
      <!-- home-page-slider -->
      <div class="container-fluid my-banner bg-12 bg-responsive px-0">
         <div class="container h-100">
            <div class="row h-100">
               <div class="col-lg-8 mt-auto mb-5 mx-auto">
                  <h3 class="text-center">Our team</h3>
                  <h1 class="text-center my-3 my-lg-5">
                     As a member of our team, you will among other things work
                  </h1>
                  <p>
                     When your mission is to be better, faster and smarter, you
                     need the best people driving your vision forward
                  </p>
               </div>
            </div>
         </div>
      </div>
      <!-- after-slider-home-page -->
      <div class="container-fluid team-section py-5">
         <div class="container">
            <div class="text-center pb-5">
               <h2 class="line-under-secColor">Our team</h2>
            </div>
            <p class="col-lg-8 mx-auto mb-5">
               Incolarum validis conpulit oppida imperator per imperator
               incolarum nomine alio opima excursus conserta firmitate vicinarum
               inter saltus inter veterum quoque.
            </p>
            <div class="row div-to-append-to"></div>
            <div class="text-center pt-2">
               <span id="reveal-members">
                  <img src="./assets/img/our-team/btn-plus.png" alt="" />
               </span>
            </div>
            <div class="row div-to-append-to-2" style="display: none"></div>
         </div>
      </div>
      <?php include "./includes/get-in-touch-content.php"; ?>
      <?php include "./includes/footer.php"; ?>
      <?php include "./includes/scripts.php"; ?>

      <script src="./js/our-team.js"></script>
   </body>
</html>
