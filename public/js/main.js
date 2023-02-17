/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
var hamburger = document.querySelector('.header .nav-bar .nav-list .hamburger');
var mobile_menu = document.querySelector('.header .nav-bar .nav-list ul');
var menu_item = document.querySelectorAll('.header .nav-bar .nav-list ul li a');
var header = document.querySelector('.header.container');
hamburger.addEventListener('click', function () {
  hamburger.classList.toggle('active');
  mobile_menu.classList.toggle('active');
});
document.addEventListener('scroll', function () {
  var scroll_position = window.scrollY;
  if (scroll_position > 250) {
    header.style.backgroundColor = '#29323c';
  } else {
    header.style.backgroundColor = 'transparent';
  }
});
menu_item.forEach(function (item) {
  item.addEventListener('click', function () {
    hamburger.classList.toggle('active');
    mobile_menu.classList.toggle('active');
  });
});
/******/ })()
;