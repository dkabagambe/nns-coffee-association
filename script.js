document.addEventListener("DOMContentLoaded", () => {
  const hamburgerMenu = document.querySelector(".hamburger-menu");
  const navbarNav = document.querySelector(".navbar-nav");

  // Ensure the menu starts hidden
  navbarNav.classList.remove("active");

  hamburgerMenu.addEventListener("click", () => {
    navbarNav.classList.toggle("active");
  });
});
// Dynamically set the current year
document.getElementById("currentYear").textContent = new Date().getFullYear();
