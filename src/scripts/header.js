const headerMenu = document.querySelector("#headerMenu");
const headerMenuToggel = document.querySelector("#headerMenuToggle");
const mobileHeaderMenu = document.querySelector(".mobile-menu_list");

headerMenuToggel.addEventListener("click", () => {
  jQuery(headerMenu).toggleClass("menu--mobile");
  jQuery(headerMenuToggel).toggleClass("is-open");
  document.body.classList.toggle("_lock");
});

mobileHeaderMenu.querySelectorAll("& > li > a").forEach((item) => {
  item.addEventListener("click", (e) => {
    const subMenuList = jQuery(item).parent().find(".sub-menu");
    if (subMenuList.length) {
      e.preventDefault();

      subMenuList.first().slideToggle(400);
      jQuery(item).parent().toggleClass("toggel-icon");
      jQuery(item).parent().toggleClass("open-acardion");
    }
  });
});
