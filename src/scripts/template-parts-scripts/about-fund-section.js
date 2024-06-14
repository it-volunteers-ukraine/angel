const swiper = new Swiper(".advantages-container", {
  direction: "horizontal",
  loop: false,
  slidesPerView: 1,
  spaceBetween: 24,
  pagination: {
    el: ".swiper-pagination",
  },
});

function showSwiper() {
  const section = document.querySelector(".about-fund");
  if (section) {
    if (window.innerWidth <= 590) {
      swiper.init();
    } else {
      swiper.destroy();
    }
  }
}

window.addEventListener("resize", showSwiper);
