(window.load = function (event) {
  const togglerNav = document.querySelector(".js-toggler-nav");
  const headerNav = document.querySelector(".js-navigation");
  let navFlag = false;

  togglerNav.addEventListener("click", () => {
    if (navFlag == false) {
      headerNav.classList.add("active");
      togglerNav.classList.add("active");
      document.querySelector("body").style.overflow = "hidden";
      navFlag = true;
    } else {
      headerNav.classList.remove("active");
      togglerNav.classList.remove("active");
      document.querySelector("body").style.overflow = "initial";
      // document.querySelector(".js-header").classList.remove("active");
      navFlag = false;
    }

    loadItemsNav();
  });
  function loadItemsNav() {
    const li = [...document.querySelectorAll('.js-header-nav-list li')];
    let index = 0;
    setTimeout(function () {
        window.setInterval(function () {
            if (index < li.length) {
                li[index++].classList.toggle('liVisible');
            }
        }, 100);
    }, 0);
  }

  // Close after click the navmenu on mobile
  const itemsNAv = document.querySelectorAll(".js-navigation a");
  for (let i = 0; i < itemsNAv.length; i++) {
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
      goToTop.classList.add("active");
    } else {
      goToTop.classList.remove("active");
    }
  });
  // sticy nabvbar
  const navbar = document.querySelector("#header");
  document.addEventListener("scroll", () => {
      if (window.pageYOffset >= 50) {
        navbar.classList.add("active");
      } else {
        navbar.classList.remove("active");
      }
  });

})();

