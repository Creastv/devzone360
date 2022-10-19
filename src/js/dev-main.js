(window.load = function (event) {
  const togglerNav = document.querySelector(".js-toggler-nav");
  const headerNav = document.querySelector(".js-navigation");
  let navFlag = false;

  togglerNav.addEventListener("click", () => {
    if (navFlag == false) {
      headerNav.classList.add("active");
      togglerNav.classList.add("active");
      document.querySelector(".js-header").classList.add("active");
      navFlag = true;
    } else {
      headerNav.classList.remove("active");
      togglerNav.classList.remove("active");
      document.querySelector(".js-header").classList.remove("active");
      navFlag = false;
    }
  });

  // Close after click the navmenu on mobile
  const itemsNAv = document.querySelectorAll(".js-navigation a");
  for (let i = 0; i < itemsNAv.length; i++) {
    // console.log(itemsNAv[1]);
    itemsNAv[i].addEventListener("click", () => {
      headerNav.classList.remove("active");
      togglerNav.classList.remove("active");
      navFlag = false;
    });
  }

  // Go to Top
  const goToTop = document.querySelector("#go-to-top");
  goToTop.addEventListener("click", () => {
    document.documentElement.scrollTop = 0;
  });
  document.addEventListener("scroll", () => {
    if (window.pageYOffset >= 200) {
      goToTop.classList.add("go-to-to-active");
    } else {
      goToTop.classList.remove("go-to-to-active");
    }
  });

  // sticy nabvbar
  const navbar = document.querySelector("#header");
  document.addEventListener("scroll", () => {
    if (window.pageYOffset >= 200) {
      navbar.classList.add("active");
    } else {
      navbar.classList.remove("active");
    }
  });

  const menuLis = document.querySelectorAll("#header-nav-list li a");
  for (let li of menuLis) {
    li.addEventListener("click", function () {
      for (let li of menuLis) {
        li.classList.remove("active");
        console.log("class removed");
      }
      this.classList.add("active");
      console.log("class added");
    });
  }
})();

// jQuery(document).ready(function () {
//   jQuery(".js-navigation a").on("click", function (e) {
//     var target = this.hash,
//       jQuerytarget = jQuery(target);

//     jQuery("html, body")
//       .stop()
//       .animate(
//         {
//           scrollTop: jQuerytarget.offset().top - 50
//         },
//         400,
//         "swing",
//         function () {}
//       );
//     return false;
//   });
// });
