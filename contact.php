<?php $active = "contact"; ?>
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
      <div class="container-fluid my-banner bg-13 bg-responsive px-0">
         <div class="container h-100">
            <div class="row h-100">
               <div class="col-lg-8 mt-auto mb-5 mx-auto">
                  <h3 class="text-center">Contact us</h3>
                  <h1 class="text-center my-3 my-lg-5">
                     Ready to get started? Contact us for a personalized
                     consultation!
                  </h1>
                  <p>
                     We’re excited to talk to you! Fill out the form below and
                     we’ll be in touch.
                  </p>
               </div>
            </div>
         </div>
      </div>
      <!-- contact form  -->
      <div class="container-fluid py-5">
         <div class="container">
            <h2 class="text-center">Get in touch with us !</h2>
            <p class="col-lg-8 mx-auto">
               We encourage your feedback, please feel free to send us a message
               using the following contact form.
            </p>
            <h3 class="col-lg-8 mx-auto py-3">Just say hi</h3>
            <div class="row">
               <div class="col-lg-8 mx-auto contact-form-part">
                  <?php include "./includes/contact-form.php"; ?>
               </div>
            </div>
            <h3 class="text-center pt-4 pb-2">Connect with us !</h3>
            <div class="social-media-icons text-center">
               <a href="">
                  <img src="./assets/img/contact-us/facebook.png" alt="" />
               </a>
               <a href="">
                  <img src="./assets/img/contact-us/instagram.png" alt="" />
               </a>
               <a href="">
                  <img src="./assets/img/contact-us/twitter.png" alt="" />
               </a>
               <a href="">
                  <img src="./assets/img/contact-us/youtube.png" alt="" />
               </a>
               <a href="">
                  <img src="./assets/img/contact-us/linkedin.png" alt="" />
               </a>
            </div>
         </div>
      </div>
      <!-- our locations -->
      <div class="container-fluid locations bg-9 py-5">
         <div class="container">
            <div class="text-center pb-3">
               <h2 class="line-under line-under-white">Our locations</h2>
            </div>
            <div class="row mt-5">
               <div class="col-lg-4 col-md-6 mb-4">
                  <h3 class="pb-2">casablanca</h3>
                  <p class="small-para pb-2">
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
               <div class="col-lg-4 col-md-6 mb-4">
                  <h3 class="pb-2">marrakech</h3>
                  <p class="small-para pb-2">
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
               <div class="col-lg-4 col-md-6 mb-4">
                  <h3 class="pb-2">rabat</h3>
                  <p class="small-para pb-2">
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
            </div>
         </div>
      </div>
      <!-- <div class="container-fluid py-5 my-international-number bg-10">
         <div class="container">
            <p class="text-center">
               We are available at mon-fri call us
               <a href="tel:+212 000 000 000">+212 000 000 000</a> during
               regular business hours
            </p>
         </div>
      </div> -->
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
