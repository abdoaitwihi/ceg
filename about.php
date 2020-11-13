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
      <div class="container-fluid my-banner bg-14 bg-responsive px-0">
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
      <!--section-1 -->
      <div class="container-fluid global-class py-5 about-us">
         <div class="container">
            <div class="text-center pb-3">
               <h2 class="line-under-secColor">Our story</h2>
            </div>
            <?php include "./includes/about-content-1.php"; ?>
         </div>
         <div class="container">
            <div class="row mt-4">
               <div class="col-lg-6">
                  <img
                     class="w-100"
                     src="./assets/img/our-programs/img-girl.png"
                     alt=""
                  />
               </div>
               <div class="col-lg-6 my-auto">
                  <div class="translated-content-2">
                     <h3 class="text-center mb-4">
                        Which subjects can students take for the IBDP?
                     </h3>
                     <p>
                        Students study generally three subjects at standard
                        level, and three subjects at a higher level, for which
                        they are expected to demonstrate a greater body of
                        knowledge, understanding and skills. Which specific
                        subjects are offered will vary between the UWC schools
                        and colleges, often reflecting their geographic location
                        and focus areas.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- section-3 -->
      <div class="container-fluid global-class">
         <div class="container">
            <div class="text-center pb-3">
               <h2 class="line-under-secColor">Our story</h2>
            </div>
            <p class="col-lg-8 mx-auto my-2 mt-4">
               Incolarum validis conpulit oppida imperator per imperator
               incolarum nomine alio opima excursus conserta firmitate vicinarum
               inter saltus inter veterum quoque.
            </p>
         </div>
         <!-- this is the javascript powered part -->
         <div class="container">
            <div class="row">
               <div
                  class="col-lg-6 px-0 px-lg-2 about-content-container second"
               >
                  <div class="about-content">
                     <div class="my-content-container selected-about-content-1">
                        <h2>content title</h2>
                        <p>
                           Lorem ipsum dolor sit amet consectetur adipisicing
                           elit. Libero asperiores repellat autem nobis nulla
                           cupiditate quam ratione rerum aut? Fuga!
                        </p>
                        <ul>
                           <li>Lorem ipsum dolors dfs sit.</li>
                           <li>Lorem ipsum dolor sit.</li>
                           <li>Lorem ipsum dolor</li>
                        </ul>
                     </div>
                     <div
                        class="my-content-container selected-about-content-2 d-none"
                     >
                        content-2
                     </div>
                     <div
                        class="my-content-container selected-about-content-3 d-none"
                     >
                        content-3
                     </div>
                     <div
                        class="my-content-container selected-about-content-4 d-none"
                     >
                        content-4
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 first">
                  <div class="row py-lg-5">
                     <div class="col-6 py-2 px-2">
                        <div id="1" class="items-to-select selected-item">
                           <img
                              class="blue-image d-none"
                              src="./assets/img/about-us/icon-Creativity-bleu.png"
                              alt=""
                           />
                           <img
                              class="white-image"
                              src="./assets/img/about-us/icon-Creativity-blanc.png"
                              alt=""
                           />
                           <h2>Creativity</h2>
                        </div>
                     </div>
                     <div class="col-6 py-2 px-2">
                        <div id="2" class="items-to-select">
                           <img
                              class="blue-image"
                              src="./assets/img/about-us/icon-Excellence-bleu.png"
                              alt=""
                           />
                           <img
                              class="white-image d-none"
                              src="./assets/img/about-us/icon-Excellence-blanc.png"
                              alt=""
                           />
                           <h2>Excellence</h2>
                        </div>
                     </div>
                     <div class="col-6 py-2 px-2">
                        <div id="3" class="items-to-select">
                           <img
                              class="blue-image"
                              src="./assets/img/about-us/icon-Collaboration-bleu.png"
                              alt=""
                           />
                           <img
                              class="white-image d-none"
                              src="./assets/img/about-us/icon-Collaboration-blanc.png"
                              alt=""
                           />
                           <h2>Collaboration</h2>
                        </div>
                     </div>
                     <div class="col-6 py-2 px-2">
                        <div id="4" class="items-to-select">
                           <img
                              class="blue-image"
                              src="./assets/img/about-us/icon-integrity-bleu.png"
                              alt=""
                           />
                           <img
                              class="white-image d-none"
                              src="./assets/img/about-us/icon-integrity-blanc.png"
                              alt=""
                           />
                           <h2>Integrity</h2>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- our comunity section -->
      <div
         class="container-fluid py-5 global-class our-comunity bg-responsive bg-15"
      >
         <div class="container">
            <div class="text-center pb-3">
               <h2 class="line-under-white">Our community</h2>
            </div>
            <p class="col-lg-8 mx-auto my-2 mt-4">
               Incolarum validis conpulit oppida imperator per imperator
               incolarum nomine alio opima excursus conserta firmitate vicinarum
               inter saltus inter veterum quoque.
            </p>
            <div class="row div-to-add-to mt-5 pt-3 our-comunity-numbers"></div>
         </div>
      </div>
      <div class="container-fluid py-5 about-team">
         <div class="container">
            <div class="text-center pb-3">
               <h2 class="line-under-secColor">Our team</h2>
            </div>
            <p class="col-lg-8 mx-auto my-2 mt-4">
               Incolarum validis conpulit oppida imperator per imperator
               incolarum nomine alio opima excursus conserta firmitate vicinarum
               inter saltus inter veterum quoque.
            </p>
            <div class="row mt-5">
               <div class="col-lg-7">
                  <img
                     src="./assets/img/about-us/img-our-team.png"
                     alt=""
                     class="w-100"
                  />
               </div>
               <div class="col-lg-5 my-auto pt-4 pt-lg-0">
                  <p class="small-para-2">
                     Humanitatis plerique esset officiis Homerici quod cum Roma
                     omnium dubitatur nobilium Roma bacarum quod Roma Lotophagi
                     advenas plerique bacarum plerique autem aliquando
                     domicilium non non ut Roma multiformibus autem esset
                     Homerici cum bacarum esset Homerici cum cum cum plerique
                     Homerici virtutum officiis quod humanitatis suavitate
                     nobilium suavitate advenas nobilium esset. Humanitatis
                     plerique esset officiis Homerici quod cum Roma omnium
                     dubitatur nobilium Roma bacarum quod Roma Lotophagi advenas
                     plerique bacarum plerique autem aliquando domicilium non
                     non ut Roma multiformibus autem esset Homerici cum bacarum
                     esset Homerici cum cum cum plerique Homerici virtutum
                     officiis quod humanitatis suavitate nobilium suavitate
                     advenas nobilium esset.
                  </p>
                  <div class="mt-4">
                     <a href="./team.php" class="sec-button">
                        View our team
                        <img
                           src="./assets/img/home-page/flshe-bleu.png"
                           alt=""
                        />
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php include "./includes/get-in-touch-content.php"; ?>
      <?php include "./includes/footer.php"; ?>
      <?php include "./includes/scripts.php"; ?>
      <script src="./js/about-page.js"></script>
   </body>
</html>
