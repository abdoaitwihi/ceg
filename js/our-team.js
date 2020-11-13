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
/* function to constract the members for home */
function myMemberConstroctorForHome(member, id) {
   return `
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
   `;
}
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
/* appending to home */
ourTeamMembers.forEach((item, index) => {
   $(".div-to-append-to-home").append(myMemberConstroctorForHome(item, index));
});
