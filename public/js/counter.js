/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************!*\
  !*** ./resources/js/counter.js ***!
  \*********************************/
function decrement(e) {
  var btn = e.target.parentNode.parentElement.querySelector('button[data-action="decrement"]');
  var target = btn.nextElementSibling;
  var value = Number(target.value);
  value--;
  target.value = value;
}

function increment(e) {
  var btn = e.target.parentNode.parentElement.querySelector('button[data-action="decrement"]');
  var target = btn.nextElementSibling;
  var value = Number(target.value);

  if (value >= 99) {
    return target.value = value;
  }

  value++;
  target.value = value;
}

var decrementButtons = document.querySelectorAll("button[data-action=\"decrement\"]");
var incrementButtons = document.querySelectorAll("button[data-action=\"increment\"]");
decrementButtons.forEach(function (btn) {
  btn.addEventListener("click", decrement);
});
incrementButtons.forEach(function (btn) {
  btn.addEventListener("click", increment);
});
/******/ })()
;