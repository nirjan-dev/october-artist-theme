"use strict";

function scrollIt(t) {
    window.scrollTo({
        behavior: "smooth",
        left: 0,
        top: t.offsetTop
    })
}
//new Litebox;
var navLinks = document.querySelectorAll(".nav--navbar a");
navLinks.forEach(function(t) {
    t.addEventListener("click", function(t) {
        t.preventDefault(), scrollIt(document.querySelector(t.target.attributes[0].value))
    })
});
var toggleButton = document.querySelector(".nav--toggle-button button"),
    navbar = document.querySelector(".nav--navbar");
toggleButton.addEventListener("click", function() {
    toggleButton.classList.toggle("active"), navbar.classList.toggle("show")
});

const NAVBAR = document.querySelector(".nav");

window.addEventListener("scroll", function () { 
    if(window.scrollY > NAVBAR.scrollHeight - 20){
        NAVBAR.classList.add("scroll");
    }else{
        NAVBAR.classList.remove("scroll");
    }
 });