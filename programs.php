<?php $active = "programs"; ?>
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
      <div class="container-fluid my-banner bg-11 bg-responsive px-0">
         <div class="container h-100">
            <div class="row h-100">
               <div class="col-lg-8 mt-auto mb-5 mx-auto">
                  <h3 class="text-center">Our programs</h3>
                  <h1 class="text-center my-3 my-lg-5">Programs of Study</h1>
                  <p>
                     Dive into your interests and develop your passions at U of
                     T. We offer over 700 undergraduate and 200 graduate
                     programs across
                  </p>
               </div>
            </div>
         </div>
      </div>
      <!-- section one -->
      <div class="container-fluid py-5">
         <div class="container">
            <div class="text-center pb-3">
               <h2 class="line-under-secColor">Our programs</h2>
            </div>
            <p class="col-lg-8 mx-auto mt-4">
               CEG enrolls more than 24,000 full- and part-time students
               throughout nine academic divisions. Our faculty and students
               study, teach, and learn across more than 260 programs in the arts
               and music, the humanities, the social and natural sciences,
               engineering, international studies, education, business, and the
               health professions. <br />
               <br />
               Use our interactive program explorer to see what we offer. Sort
               by division and/or degree type, or use the keyword search to get
               started.
            </p>
         </div>
         <div class="container our-programs-main pt-5">
            <div class="row">
               <div class="col-md-3">
                  <div class="sticky-list">
                     <h3>Discover our program</h3>
                     <ul>
                        <li id="item-1" class="menu-item active-item">
                           Accademie life
                        </li>
                        <li id="item-2" class="menu-item">Campus visits</li>
                        <li id="item-3" class="menu-item">College staff</li>
                        <li id="item-4" class="menu-item">CEG day</li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-9">
                  <div id="content-1" class="programs-content">
                     <?php include "./includes/programs-content-1.php"; ?>
                  </div>
                  <div id="content-2" class="programs-content d-none">
                     content-2
                  </div>
                  <div id="content-3" class="programs-content d-none">
                     content 3
                  </div>
                  <div id="content-4" class="programs-content d-none">
                     content 4
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php include "./includes/get-in-touch-content.php"; ?>
      <?php include "./includes/footer.php"; ?>
      <?php include "./includes/scripts.php"; ?>
      <script>
         /* display the item that is clicked in the menu of Discover our programs */
         $(".menu-item").click(function (e) {
            e.preventDefault();
            /* changing the background color to the selected item */
            $(this).siblings().removeClass("active-item");
            $(this).addClass("active-item");
            /* changing the content in the div */
            let contentId = $(this).attr("id");
            let realId = +contentId.slice(5, 6);
            $(".programs-content").addClass("d-none");
            switch (realId) {
               case 1:
                  $("#content-1").removeClass("d-none");
                  break;
               case 2:
                  $("#content-2").removeClass("d-none");
                  break;
               case 3:
                  $("#content-3").removeClass("d-none");
                  break;
               case 4:
                  $("#content-4").removeClass("d-none");
                  break;
               default:
                  $("#content-1").removeClass("d-none");
                  break;
            }
            scrollToTopOfForm(".our-programs-main");
            /* scrollling to the div that contains the programs */
         });
      </script>
   </body>
</html>
