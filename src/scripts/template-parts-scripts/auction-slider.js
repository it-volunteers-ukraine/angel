const auctionSwiper = new Swiper('.auction-slider', {
  navigation: {
    nextEl: '.button-next',
    prevEl: '.button-prev',
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  grabCursor: true,
  lazy: {
    loadOnTransitionStart: true,
    loadPrevNext: true,
  },
  lazyPreloadPrevNext: 1,
  slidesPerView: 1,
  slidesPerGroup: 1, 
  spaceBetween: 20,
  breakpoints: {
    991: {
      slidesPerView: 1.33,
      slidesPerGroup: 1,
      spaceBetween: 24,
    },
    1200: {
      slidesPerView: 2,
      slidesPerGroup: 2,
      spaceBetween: 24,
    },
    1919: {
      slidesPerView: 2,
      slidesPerGroup: 2,
      spaceBetween: 32,
    }  
  },
});