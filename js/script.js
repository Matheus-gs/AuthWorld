// Feather
feather.replace();

// Toggle Mobile Menu
const navbar = document.querySelector(" header nav");
const toggle = document.querySelector(".navbar-toggle-btn")

const show_menu = () => navbar.classList.toggle("active")

toggle.addEventListener("click", show_menu);

// Loader
let loader = document.querySelector("#loader");
let loading_screen = document.querySelector("#loading")

const loading = () =>  setTimeout(load_page, 2500);

function load_page() { 
  loader.style.display = "none"; 
  loading_screen.style.display="none";
}

document.body.onload = () => loading();
