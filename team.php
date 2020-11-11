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
      <script>
         $(document).ready(function () {
            /* making an item active in the top carousel */
            $(".active-indicator").addClass("active");
         });
      </script>
      <script>
         /* fist members array */
         ourTeamMembers = [
            {
               name: "dr.anna white",
               pos1: "cej international offce",
               pos2: "Council Member",
               fb: "fb",
               twitter: "tw",
               linkedin: "linken in",
            },
            {
               name: "dr.anna white",
               pos1: "cej international offce",
               pos2: "Council Member",
               fb: "fb",
               twitter: "tw",
               linkedin: "linken in",
            },
            {
               name: "dr.anna white",
               pos1: "cej international offce",
               pos2: "Council Member",
               fb: "fb",
               twitter: "tw",
               linkedin: "linken in",
            },
            {
               name: "dr.anna white",
               pos1: "cej international offce",
               pos2: "Council Member",
               fb: "fb",
               twitter: "tw",
               linkedin: "linken in",
            },
            {
               name: "dr.anna white",
               pos1: "cej international offce",
               pos2: "Council Member",
               fb: "fb",
               twitter: "tw",
               linkedin: "linken in",
            },
            {
               name: "dr.anna white",
               pos1: "cej international offce",
               pos2: "Council Member",
               fb: "fb",
               twitter: "tw",
               linkedin: "linken in",
            },
            {
               name: "dr.anna white",
               pos1: "cej international offce",
               pos2: "Council Member",
               fb: "fb",
               twitter: "tw",
               linkedin: "linken in",
            },
            {
               name: "dr.anna white",
               pos1: "cej international offce",
               pos2: "Council Member",
               fb: "fb",
               twitter: "tw",
               linkedin: "linken in",
            },
         ];
         /* second members array  */
         ourTeamMembers2 = [
            {
               name: "dr.anna white",
               pos1: "cej international offce",
               pos2: "Council Member",
               fb: "fb",
               twitter: "tw",
               linkedin: "linken in",
            },
            {
               name: "dr.anna white",
               pos1: "cej international offce",
               pos2: "Council Member",
               fb: "fb",
               twitter: "tw",
               linkedin: "linken in",
            },
            {
               name: "dr.anna white",
               pos1: "cej international offce",
               pos2: "Council Member",
               fb: "fb",
               twitter: "tw",
               linkedin: "linken in",
            },
            {
               name: "dr.anna white",
               pos1: "cej international offce",
               pos2: "Council Member",
               fb: "fb",
               twitter: "tw",
               linkedin: "linken in",
            },
            {
               name: "dr.anna white",
               pos1: "cej international offce",
               pos2: "Council Member",
               fb: "fb",
               twitter: "tw",
               linkedin: "linken in",
            },
            {
               name: "dr.anna white",
               pos1: "cej international offce",
               pos2: "Council Member",
               fb: "fb",
               twitter: "tw",
               linkedin: "linken in",
            },
            {
               name: "dr.anna white",
               pos1: "cej international offce",
               pos2: "Council Member",
               fb: "fb",
               twitter: "tw",
               linkedin: "linken in",
            },
         ];
         /* function to construct the member  */
         function myMemberConstroctor(member, id) {
            return `
            <div class="col-lg-3 col-md-4 col-sm-6 p-1">
            <div class="our-team-container bg-4 bg-responsive">
                  <div class="over-lay">
                     <h3>${member.name}</h3>
                     <p>${member.pos1}</p>
                     <div class="overlay-spacer"></div>
                     <h4>${member.pos2}</h4>
                     <div class="social-media">
                        <a href="${member.fb}">
                           <img
                              src="./assets/img/home-page/ICON-facebook.png"
                              alt=""
                           />
                        </a>
                        <a href="${member.linkedin}">
                           <img
                              src="./assets/img/home-page/icon-linkedin.png"
                              alt=""
                           />
                        </a>
                        <a href="${member.twitter}">
                           <img
                              src="./assets/img/home-page/icon-twitter.png"
                              alt=""
                           />
                        </a>
                     </div>
                  </div>
                  <div class="first-info">
                     <h3>${member.name}</h3>
                     <p>${member.pos1}</p>
                  </div>
               </div>
               </div>
            `;
         }
         /* first members */
         ourTeamMembers.forEach((item, index) => {
            $(".div-to-append-to").append(myMemberConstroctor(item, index));
         });
         /* adding secondary members */
         ourTeamMembers2.forEach((item, index) => {
            $(".div-to-append-to-2").append(myMemberConstroctor(item, index));
         });
         /* revealing secondary members on click */
         $("#reveal-members").click(function (e) {
            e.preventDefault();
            $(".div-to-append-to-2").slideDown();
            $(this).fadeOut();
         });
      </script>
   </body>
</html>
