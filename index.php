<?php $active = "home"; ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include "./includes/meta.php"; ?>
   </head>

   <body>
      <!-- navigation -->
      <div class="container-fluid px-0 navigation" id="menu">
         <?php include "./includes/navigation.php"; ?>
      </div>
      <!-- home-page-slider -->
      <div class="container-fluid px-0">
         <?php include "./includes/home-slider.php"; ?>
      </div>
      <!-- after-slider-home-page -->
      <div class="container-fluid global-class home-second py-5 px-0">
         <div class="container">
            <div class="text-center pb-3">
               <h2 class="line-under line-under-white">Welcome to CEG</h2>
            </div>
            <?php include "./includes/about-content-1.php"; ?>
            <div class="text-center mt-4">
               <a href="./about.php" class="sec-button">
                  continue <img src="./assets/img/home-page/flesh.png" alt="" />
               </a>
            </div>
         </div>
      </div>
      <!-- home page section 3 -->
      <div class="container-fluid global-class section-3-home py-5">
         <div class="container">
            <div class="text-center pb-3">
               <h2 class="line-under-secColor">Our programs</h2>
            </div>
            <p class="pt-4 col-lg-10 mx-auto">
               Incolarum validis conpulit oppida imperator per imperator
               incolarum nomine alio opima excursus conserta firmitate vicinarum
               inter saltus inter veterum quoque.
            </p>
            <div class="row mt-5 our-prgrammes">
               <div
                  class="col-lg-4 my-3 my-lg-0 our-programmes-inner px-4 mx-auto"
               >
                  <div class="my-progrmmes-inner">
                     <img
                        src="./assets/img/home-page/img-give.png"
                        class="w-100"
                        alt=""
                     />
                     <div class="text-center">
                        <a href="">
                           <img src="./assets/img/home-page/btn-1.png" alt="" />
                        </a>
                        <h2>apply</h2>
                        <p class="text-left hidden-para">
                           The application process varies according to the level
                           at which you will join us.
                        </p>
                        <div class="my-under-line-1"></div>
                     </div>
                  </div>
               </div>
               <div
                  class="col-lg-4 my-3 my-lg-0 our-programmes-inner px-4 mx-auto"
               >
                  <div class="my-progrmmes-inner">
                     <img
                        src="./assets/img/home-page/img-give.png"
                        class="w-100"
                        alt=""
                     />
                     <div class="text-center">
                        <a href="">
                           <img src="./assets/img/home-page/btn-1.png" alt="" />
                        </a>
                        <h2>apply</h2>
                        <p class="text-left hidden-para">
                           The application process varies according to the level
                           at which you will join us.
                        </p>
                        <div class="my-under-line-2"></div>
                     </div>
                  </div>
               </div>
               <div
                  class="col-lg-4 my-3 my-lg-0 our-programmes-inner px-4 mx-auto"
               >
                  <div class="my-progrmmes-inner">
                     <img
                        src="./assets/img/home-page/img-give.png"
                        class="w-100"
                        alt=""
                     />
                     <div class="text-center">
                        <a href="">
                           <img src="./assets/img/home-page/btn-1.png" alt="" />
                        </a>
                        <h2>apply</h2>
                        <p class="text-left hidden-para">
                           The application process varies according to the level
                           at which you will join us.
                        </p>
                        <div class="my-under-line-3"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="text-center mt-4">
               <a href="./programs.php" class="sec-button">
                  continue
                  <img src="./assets/img/home-page/flshe-bleu.png" alt="" />
               </a>
            </div>
         </div>
      </div>
      <div class="container-fluid py-5 global-class">
         <div class="container">
            <div class="text-center pb-3">
               <h2 class="line-under line-under-secColor">This our team</h2>
            </div>
            <p class="mt-3 mx-auto col-lg-8">
               Incolarum validis conpulit oppida imperator per imperator
               incolarum nomine alio opima excursus conserta firmitate vicinarum
               inter saltus inter veterum quoque.
            </p>
            <div class="container pt-5 mt-2">
               <div class="our-team owl-carousel div-to-append-to-home"></div>
            </div>
            <div class="text-center mt-4">
               <a href="./team.php" class="sec-button flesh-bleu">
                  continue
                  <img src="./assets/img/home-page/flshe-bleu.png" alt="" />
               </a>
            </div>
         </div>
      </div>
      <!-- image map -->
      <?php include "./includes/img-map.php"; ?>
      <!-- end of image map -->

      <div
         class="container-fluid global-class home-contact bg-5 bg-responsive py-5"
      >
         <div class="container">
            <div class="text-center pb-3">
               <h2 class="line-under line-under-white">Contact us</h2>
            </div>
            <p class="mx-auto col-md-6 mt-4">
               Have an inquiry or some feedback for us? Fill out the from below
               to contact our team.
            </p>
            <div class="row pt-4">
               <div class="col-lg-4">
                  <h3 class="pb-4">Get a quote</h3>
                  <p class="small-para pb-3">
                     Fill up the form and our team will get <br />
                     back to you within 24 hours.
                  </p>
                  <div class="contact-info-inner">
                     <img
                        src="./assets/img/home-page/icon-adresse.png"
                        alt=""
                     />
                     <span>211 Elaine Langone Center</span>
                  </div>
                  <div class="contact-info-inner">
                     <img src="./assets/img/home-page/icon-tel.png" alt="" />
                     <span>+212 000 000 000</span>
                  </div>
                  <div class="contact-info-inner">
                     <img src="./assets/img/home-page/icon-mail.png" alt="" />
                     <span>Contact@ceg.com</span>
                  </div>
               </div>
               <div class="col-lg-8">
                  <h3 class="pb-4">Just say hi !</h3>
                  <p class="small-para pb-3">
                     Tell us more about you and we’ll <br />
                     contact you soon :)
                  </p>
                  <?php include "./includes/contact-form.php"; ?>
               </div>
            </div>
         </div>
      </div>

      <?php include "./includes/footer.php"; ?>
      <?php include "./includes/scripts.php"; ?>
      <script src="./js/our-team.js"></script>
      <script>
         $(document).ready(function () {
            /* making an item active in the top carousel */
            $(".active-indicator").addClass("active");
         });
      </script>
      <script>
         $(document).ready(function () {
            function appedToMap(item) {
               return `
               <a class="${item.class}" href="${item.url}">
            <div class="pop-over-map">
               <h2>${item.h2}</h2>
               <!-- <p>welcome home</p> -->
            </div>
            <div class="map-pin">
               <img
                  src="./assets/img/icon-etat-normal.svg"
                  class="icon-survol d-none"
                  alt=""
               />
               <img
                  src="./assets/img/icon-etat-survol.svg"
                  class="icon-normal"
                  alt=""
               />
            </div>
         </a>
               `;
            }
            myItems = [
               {
                  url: "url",
                  class: "a-one",
                  h2: "Canada application",
               },
               {
                  url: "url",
                  class: "a-two",
                  h2: "Turkish application",
               },
               {
                  url: "url",
                  class: "a-three",
                  h2: "Finish application",
               },
               {
                  url: "url",
                  class: "a-four",
                  h2: "Swedish application",
               },
               {
                  url: "url",
                  class: "a-five",
                  h2: "USA application",
               },
               {
                  url: "url",
                  class: "a-sex",
                  h2: "UK application",
               },
               {
                  url: "url",
                  class: "a-seven",
                  h2: "Norway application",
               },
            ];
            myItems.forEach((item) => {
               $(".div-map").append(appedToMap(item));
            });
         });
      </script>
      <script src="./js/map.js"></script>
   </body>
</html>
