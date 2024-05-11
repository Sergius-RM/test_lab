// Jquery
// global.jquery = global.jQuery = global.$ = require('jquery');
// ...
// import $ from 'jquery';
// import jQuery from 'jquery';
// window.$ = jQuery;

/**
 * General scripts.
 */

/** menu */
let menu = document.getElementById('menu-button');
let nav = document.getElementById('nav');

// opening by clicking on the menu icon when <960px
menu.addEventListener("click", function() {
    this.classList.toggle('change');
    nav.classList.toggle('opened');
}, false);

//
var closeMenu = function (event) {
    menu.classList.remove('change');
    nav.classList.remove('opened');
}

// hide opened mobile menu on scroll
window.addEventListener("scroll", closeMenu, false);

// hide opened mobile menu on when resize screen
window.addEventListener("resize", closeMenu, false);
