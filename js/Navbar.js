// script.js
let hamburger = document.querySelector(".hamburger");
hamburger.onclick = function() {
    let navbar = document.querySelector(".nav-bar");
    navbar.classList.toggle("active");
}
