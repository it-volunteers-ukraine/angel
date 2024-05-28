const documentsSwiper = new Swiper(".documents-swiper", {
    direction: "horizontal",
    loop: false,
    slidesPerView: 1,
    spaceBetween: 24,
    pagination: {
    el: ".swiper-pagination",
  },
});


function initializeLightbox() {
    lightbox.option({
        'resizeDuration': 200,
        'alwaysShowNavOnTouchDevices': true,
        "disableScrolling": true,
        'wrapAround': true,
        'albumLabel': 'Слайд %1 з %2',
    });
}

document.addEventListener("DOMContentLoaded", function () {
    initializeLightbox();
});