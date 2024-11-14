function toggleMenu() {
  const navLinks = document.querySelector(".nav-links");
  const body = document.body;
  navLinks.classList.toggle("active");
  body.classList.toggle("menu-active"); // Optional overlay effect
}
