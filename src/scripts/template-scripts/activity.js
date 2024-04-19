const aboutArrowBtn = document.querySelector(".about-heading-wrapper .about-heading-icon-wrapper");
const conetentEls = document.querySelectorAll(".toggle-open-close-content");
const iconEl = document.querySelector(".activity .about-heading-wrapper .about-heading-icon");

const goalsArrowBtnEl = document.querySelector(".activity .sub-info .about-heading-icon-wrapper ");
const goalsListEl = document.querySelector(".activity .sub-info ul");
const goalsIconEl = document.querySelector(".activity .sub-info .about-heading-icon");





aboutArrowBtn.addEventListener("click", () => {
    conetentEls.forEach((el) => el.classList.toggle("is-open"));
    iconEl.classList.toggle("about-icon-rotate");
});

goalsArrowBtnEl.addEventListener("click", ()=>{
    goalsListEl.classList.toggle("is-open")
    goalsIconEl.classList.toggle("about-icon-rotate");

})