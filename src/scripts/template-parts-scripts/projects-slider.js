const projectsSwiper = new Swiper(".projects-swiper", {
  slidesPerView: 3,
  slidesPerGroup: 3,
  spaceBetween: 32,
  lazy: {
    loadOnTransitionStart: true,
    loadPrevNext: true,
  },
  lazyPreloadPrevNext: 1,
  navigation: {
    nextEl: ".button-next",
    prevEl: ".button-prev",
  },
  breakpoints: {
    1440: {
      spaceBetween: 24,
    },
    1150: {
      slidesPerView: 2,
      slidesPerGroup: 2,
      spaceBetween: 24,
    },
    768: {
      slidesPerView: 2,
      slidesPerGroup: 2,
      spaceBetween: 24,
    },
    320: {
      slidesPerView: 1,
      slidesPerGroup: 1,
    },
  },
  pagination: {
    el: ".swiper-pagination",
    dynamicBullets: true,
  },
});
