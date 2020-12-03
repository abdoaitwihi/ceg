$(document).ready(function () {
   /* map pin hover action  */
   $(".map-pin").hover(
      function () {
         // over
         $(this).siblings(".pop-over-map").css("opacity", "1");
         $(this).children(".icon-normal").addClass("d-none");
         $(this).children(".icon-survol").removeClass("d-none");
      },
      function () {
         // out
         $(this).siblings(".pop-over-map").css("opacity", "0");
         $(this).children(".icon-normal").removeClass("d-none");
         $(this).children(".icon-survol").addClass("d-none");
      }
   );
});
