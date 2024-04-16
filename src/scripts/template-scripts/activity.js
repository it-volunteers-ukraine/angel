const aboutArrowBtn = document.querySelector(".about-heading-icon-wrapper");
const conetentEls = document.querySelectorAll(".toggle-open-close-content");
const iconEl = document.querySelector(".about-heading-icon");

           



aboutArrowBtn.addEventListener("click", () => {
    conetentEls.forEach((el) => el.classList.toggle("is-open"));
    iconEl.classList.toggle("about-icon-rotate");

});
;