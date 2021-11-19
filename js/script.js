// Feather
feather.replace();

// Toggle Mobile Menu
const navbar = document.querySelector(" header nav");
const toggle = document.querySelector(".navbar-toggle-btn")

const show_menu = () => navbar.classList.toggle("active")

toggle.addEventListener("click", show_menu);