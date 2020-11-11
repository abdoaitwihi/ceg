$(document).ready(function () {
   /* navigation effect when scrolling */
   $(window).scroll(function () {
      var window_top = $(window).scrollTop() + 1;
      if (window_top > 50) {
         $(".navigation").addClass("nav-scrooled");
      } else {
         $(".navigation").removeClass("nav-scrooled");
      }
   });
   /* action when clicking the navbar-toggler button */
   $(".navbar-toggler").click(function (e) {
      e.preventDefault();
      /* fixing to background of the menu */
      $(".navigation").toggleClass("fixing");
      /* changing the icon of navigation menu */
      if ($(".navbar-collapse").hasClass("show")) {
         $(".navbar-toggler img").attr("src", "./assets/img/menu-icon.png");
      } else {
         $(".navbar-toggler img").attr(
            "src",
            "./assets/img/btn-fermer-blanc.png"
         );
      }
   });
   /* our programee hover script */
   $(".our-programmes-inner").hover(
      function () {
         // over
         let myPara = $(this)
            .children(".my-progrmmes-inner")
            .children("div")
            .children("p");
         let myImg = $(this)
            .children(".my-progrmmes-inner")
            .children("div")
            .children("a")
            .children("img");
         myImg.css("opacity", "1");
         myPara.addClass("full-height");
      },
      function () {
         // out
         let myPara = $(this)
            .children(".my-progrmmes-inner")
            .children("div")
            .children("p");
         let myImg = $(this)
            .children(".my-progrmmes-inner")
            .children("div")
            .children("a")
            .children("img");
         myPara.removeClass("full-height");
         myImg.css("opacity", "0");
      }
   );

   /* our team slide script */
   var review = $(".our-team");
   if (review.length) {
      review.owlCarousel({
         items: 3,
         loop: true,
         dots: true,
         autoplay: true,
         autoplayHoverPause: true,
         autoplayTimeout: 5000,
         nav: false,
         margin: 30,
         responsiveClass: true,
         responsive: {
            0: {
               items: 1,
            },
            576: {
               items: 2,
            },
            991: {
               items: 4,
            },
         },
         nav: true,
         navText: ["<", ">"],
      });
   }
   /* our team slide hiding what's behind the overlay script */
   $(".over-lay").hover(
      function () {
         // over
         $(this).siblings(".first-info").css("opacity", "0");
      },
      function () {
         // out
         $(this).siblings(".first-info").css("opacity", "1");
      }
   );
   /* new letter email collapsing */
   $("#collapse-news-email").click(function (e) {
      e.preventDefault();
      $(".news-letter-part").slideDown();
   });
   /* back to top btn */
   $("#go-to-top-btn").click(function (e) {
      e.preventDefault();
      console.log("clicked");
      $(window).scrollTop(0);
   });
});
