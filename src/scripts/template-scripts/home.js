const directionsCards = document.querySelector(".directions-cards");
const directionsImages = document.querySelector(".directions-images-wrapper");

directionsCards.querySelectorAll("& > li").forEach((card, index) => {
  const cardItem = jQuery(card);
  cardItem.parent().find(".active").find(".extra-content").slideDown(0);

  card.addEventListener("click", () => {
    if (!card.classList.contains("active")) {
      cardItem.parent().find(".active").removeClass("active");
      cardItem.parent().find(".extra-content").slideUp(400);
      cardItem.find(".extra-content").slideToggle(400);
      cardItem.toggleClass("active");

      directionsImages
        .querySelectorAll("& > li")
        .forEach((image, imageIndex) => {
          if (index === imageIndex) {
            jQuery(image).parent().find(".active").removeClass("active");
            jQuery(image).toggleClass("active");
          }
        });
    }
  });
});

const partnersSwiper = new Swiper(".partners-swiper", {
  slidesPerView: 6,
  spaceBetween: 32,
  loop: true,
  lazy: {
    loadOnTransitionStart: true,
    loadPrevNext: true,
  },
  lazyPreloadPrevNext: 1,
  // autoplay: {
  //   delay: 2500,
  //   disableOnInteraction: false,
  // },
  breakpoints: {
    992: {
      slidesPerView: 6,
      spaceBetween: 24,
    },
    768: {
      slidesPerView: 5,
      spaceBetween: 40,
    },
    375: {
      slidesPerView: 3,
      spaceBetween: 32,
    },
  },
  pagination: {
    el: ".swiper-pagination",
  },
});
