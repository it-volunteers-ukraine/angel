const swiper = new Swiper(".advantages-cards", {
  loop: true,
  keyboard: {
    enabled: true,
  },
  slidesPerView: 1,
  slidesPerGroup: 1,
  direction: "horizontal",
  spaceBetween: 32,
  breakpoints: {
    993: {
      slidesPerView: 2,
      slidesPerGroup: 2,
      spaceBetween: 24,
      direction: "vertical",
    },
    575: {
      slidesPerView: 2,
      slidesPerGroup: 2,
      direction: "horizontal",
    },
  },
  navigation: {
    nextEl: ".button-next",
    prevEl: ".button-prev",
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
