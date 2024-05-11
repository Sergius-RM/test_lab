/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/scss/styles.scss":
/*!******************************!*\
  !*** ./src/scss/styles.scss ***!
  \******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack:///./src/scss/styles.scss?");

/***/ }),

/***/ "./src/js/scripts.js":
/*!***************************!*\
  !*** ./src/js/scripts.js ***!
  \***************************/
/***/ (() => {

eval("// Jquery\r\n// global.jquery = global.jQuery = global.$ = require('jquery');\r\n// ...\r\n// import $ from 'jquery';\r\n// import jQuery from 'jquery';\r\n// window.$ = jQuery;\r\n\r\n/**\r\n * General scripts.\r\n */\r\n\r\n/** menu */\r\nlet menu = document.getElementById('menu-button');\r\nlet nav = document.getElementById('nav');\r\n\r\n// opening by clicking on the menu icon when <960px\r\nmenu.addEventListener(\"click\", function() {\r\n    this.classList.toggle('change');\r\n    nav.classList.toggle('opened');\r\n}, false);\r\n\r\n//\r\nvar closeMenu = function (event) {\r\n    menu.classList.remove('change');\r\n    nav.classList.remove('opened');\r\n}\r\n\r\n// hide opened mobile menu on scroll\r\nwindow.addEventListener(\"scroll\", closeMenu, false);\r\n\r\n// hide opened mobile menu on when resize screen\r\nwindow.addEventListener(\"resize\", closeMenu, false);\r\n\n\n//# sourceURL=webpack:///./src/js/scripts.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The require scope
/******/ 	var __webpack_require__ = {};
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	__webpack_modules__["./src/js/scripts.js"](0, {}, __webpack_require__);
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./src/scss/styles.scss"](0, __webpack_exports__, __webpack_require__);
/******/ 	
/******/ })()
;