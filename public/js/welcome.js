/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************!*\
  !*** ./resources/js/welcome.js ***!
  \*********************************/
function navToggle() {
  var btn = document.getElementById('menuBtn');
  var nav = document.getElementById('menu');
  btn.classList.toggle('open');
  nav.classList.toggle('flex');
  nav.classList.toggle('hidden');
}

window.addEventListener('scroll', function () {
  var btt = document.getElementById('btt');

  if (window.scrollY >= 1080) {
    btt.classList.remove('hidden');
    btt.classList.add('block');
  } else {
    btt.classList.add('hidden');
    btt.classList.remove('block');
  }
});
console.log('Code/Design: ttntm.me');
window.addEventListener('DOMContentLoaded', function () {
  var template = document.getElementById('followTip'); // const container = document.createElement('div');
  // container.appendChild(document.importNode(template.content, true));

  tippy('#follow', {
    content: template.innerHTML,
    allowHTML: true,
    animation: 'scale',
    duration: 250,
    arrow: true,
    placement: 'bottom',
    interactive: true,
    appendTo: 'parent'
  });
});
/******/ })()
;