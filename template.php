<?php $active = "about"; ?>
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
      <div class="container-fluid my-banner bg-8 bg-responsive px-0">
         <div class="container h-100">
            <div class="row h-100">
               <div class="col-lg-8 mt-auto mb-5 mx-auto">
                  <h3 class="text-center">About us</h3>
                  <h1 class="text-center my-3 my-lg-5">What is CEG?</h1>
                  <p>
                     UWC (United World Colleges) is a global education movement
                     that makes education a force to unite people, nations and
                     cultures for peace and a sustainable future
                  </p>
               </div>
            </div>
         </div>
      </div>
      <!-- after-slider-home-page -->

      <?php include "./includes/footer.php"; ?>
      <?php include "./includes/scripts.php"; ?>
      <script>
         $(document).ready(function () {
            /* making an item active in the top carousel */
            $(".active-indicator").addClass("active");
         });
      </script>
   </body>
</html>
