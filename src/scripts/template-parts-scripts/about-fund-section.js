const swiper = new Swiper(".swiper-container", {
  direction: "horizontal",
  loop: false,
  slidesPerView: 1,
  spaceBetween: 24,
  pagination: {
    el: ".swiper-pagination",
  },
  breakpoints: {
    375: { loop: true },
  },
});

function showSwiper() {
  const section = document.querySelector(".about-fund");
  if (section) {
    if (window.innerWidth <= 375) {
      swiper.init();
    } else {
      swiper.destroy();
    }
  }
}

window.addEventListener("resize", showSwiper);
