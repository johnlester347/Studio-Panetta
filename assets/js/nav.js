const nav = document.querySelector(".footer__mb");
const menu = document.querySelector(".mobile__menu");
const close = document.querySelector(".mobile__close");

nav.addEventListener("click", () => {
    menu.style.display = "block";
    // console.log(menu.style);
});

close.addEventListener("click", () => {
    menu.style.display = "none";
});