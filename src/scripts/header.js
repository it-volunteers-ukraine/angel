const headerMenu = document.querySelector("#headerMenu");
const headerMenuToggel = document.querySelector("#headerMenuToggle")

headerMenuToggel.addEventListener("click", () => {
    headerMenu.classList.toggle("menu--mobile")
})

// document.addEventListener('click', function (event) {
//     if (!event.target.closest('#headerMenu')) {
//         headerMenu.classList.remove('menu--mobile');
//     }
// });