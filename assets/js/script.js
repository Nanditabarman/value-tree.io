const burgerButton = document.getElementById("burger");
const menu = document.getElementById("menu");
const overlay = document.querySelector(".overlay");

burgerButton.addEventListener("click", function () {
  burgerButton.classList.toggle("active");
  overlay.classList.toggle("active");
  menu.classList.toggle("active");

  // Toggle a class on the body to prevent scrolling
  document.body.classList.toggle("nav-open");
});

overlay.addEventListener("click", function () {
  burgerButton.classList.remove("active");
  overlay.classList.remove("active");
  menu.classList.remove("active");
  document.body.classList.remove("nav-open");
});



