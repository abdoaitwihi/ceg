$(document).ready(function () {
   $(".items-to-select").click(function (e) {
      e.preventDefault();
      $(".items-to-select").removeClass("selected-item");
      $(this).addClass("selected-item");
      $(".items-to-select").children(".white-image").addClass("d-none");
      $(".items-to-select").children(".blue-image").removeClass("d-none");
      $(this).children(".blue-image").addClass("d-none");
      $(this).children(".white-image").removeClass("d-none");

      let id = +$(this).attr("id");
      $(".my-content-container").addClass("d-none");
      switch (id) {
         case 1:
            $(".selected-about-content-1").removeClass("d-none");
            break;
         case 2:
            $(".selected-about-content-2").removeClass("d-none");
            break;
         case 3:
            $(".selected-about-content-3").removeClass("d-none");
            break;
         case 4:
            $(".selected-about-content-4").removeClass("d-none");
            break;

         default:
            $(".selected-about-content-1").removeClass("d-none");
            break;
      }
      scrollToTopOfForm(".about-content-container");
   });
});
/* adding icons on our comunity section */
let myNumbers = [
   {
      iconUrl: "icon-reussites",
      number: "+150",
      textOne: "succeded",
      textTwo: "sincw 2003",
   },
   {
      iconUrl: "icon-Universites",
      number: "+50",
      textOne: "universities",
      textTwo: "around the world",
   },
   {
      iconUrl: "icon-etuditant",
      number: "+250",
      textOne: "students",
      textTwo: "all over the world",
   },
   {
      iconUrl: "icon-Universites",
      number: "2",
      textOne: "global",
      textTwo: "Centers",
   },
];
function addingFunction(item) {
   return `
            <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="h-100 mt-4 text-center">
                     <img
                        src="./assets/img/about-us/${item.iconUrl}.png"
                        alt=""
                     />
                     <strong class="number">${item.number}</strong>
                     <p>
                        ${item.textOne} <br />
                        ${item.textTwo}
                     </p>
                  </div>
               </div>
            `;
}
myNumbers.forEach((element) => {
   $(".div-to-add-to").append(addingFunction(element));
});
