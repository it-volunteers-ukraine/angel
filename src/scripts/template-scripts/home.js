const swiper = new Swiper(".swiper-container", {
  direction: "horizontal",
  loop: true,
  slidesPerView: 1,
  spaceBetween: 24,
  pagination: {
    el: ".swiper-pagination",
  },
});

function showSwiper() {
  if (window.innerWidth <= 375) {
    swiper.init();
  } else {
    swiper.destroy();
  }
}

window.addEventListener("resize", showSwiper);
showSwiper();
