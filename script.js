document.addEventListener("DOMContentLoaded", () => {
  const hamburgerMenu = document.querySelector(".hamburger-menu");
  const navbarNav = document.querySelector(".navbar-nav");
  const body = document.body;

  hamburgerMenu.addEventListener("click", () => {
    navbarNav.classList.toggle("active");
    body.classList.toggle("menu-active");
  });
});
