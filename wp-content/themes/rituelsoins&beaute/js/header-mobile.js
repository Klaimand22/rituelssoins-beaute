/** @format */

document.addEventListener("DOMContentLoaded", function () {
  const mobileMenuIcon = document.querySelector(".mobile-menu-icon");
  const mobileMenu = document.querySelector(".mobile-menu");

  mobileMenuIcon.addEventListener("click", function () {
    mobileMenu.classList.toggle("show");
  });
});
