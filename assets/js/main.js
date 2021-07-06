/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/main.js":
/*!************************!*\
  !*** ./src/js/main.js ***!
  \************************/
/***/ (() => {

(function ($) {
  $.fn.niceNumber = function (options) {
    var defaults = {
      autoSize: true,
      autoSizeBuffer: 1,
      buttonDecrement: '-',
      buttonIncrement: '+',
      buttonPosition: 'around',

      /**
      	callbackFunction
      	@param {$input} currentInput - the input running the callback
      	@param {number} amount - the amount after increase/decrease
      	@param {object} settings - the passed niceNumber settings
      **/
      onDecrement: false,
      onIncrement: false
    };
    var settings = $.extend(defaults, options);
    return this.each(function () {
      var currentInput = this,
          $currentInput = $(currentInput),
          maxValue = $currentInput.attr('max'),
          minValue = $currentInput.attr('min'),
          attrMax = null,
          attrMin = null; // Skip already initialized input

      if ($currentInput.attr('data-nice-number-initialized')) return; // Handle max and min values

      if (maxValue !== undefined && maxValue !== false) {
        attrMax = parseFloat(maxValue);
      }

      if (minValue !== undefined && minValue !== false) {
        attrMin = parseFloat(minValue);
      } // Fix issue with initial value being < min


      if (attrMin && !currentInput.value) {
        $currentInput.val(attrMin);
      } // Generate container


      var $inputContainer = $('<div/>', {
        "class": 'nice-number'
      }).insertAfter(currentInput); // Generate interval (object so it is passed by reference)

      var interval = {}; // Generate buttons

      var $minusButton = $('<button/>').attr('type', 'button').html(settings.buttonDecrement).on('mousedown mouseup mouseleave', function (event) {
        changeInterval(event.type, interval, function () {
          var currentValue = parseFloat($currentInput.val() || 0);

          if (attrMin == null || attrMin < currentValue) {
            var newValue = currentValue - 1;
            $currentInput.val(newValue);

            if (settings.onDecrement) {
              settings.onDecrement($currentInput, newValue, settings);
            }
          }
        }); // Trigger the input event here to avoid event spam

        if (event.type == 'mouseup' || event.type == 'mouseleave') {
          $currentInput.trigger('input');
        }
      });
      var $plusButton = $('<button/>').attr('type', 'button').html(settings.buttonIncrement).on('mousedown mouseup mouseleave', function (event) {
        changeInterval(event.type, interval, function () {
          var currentValue = parseFloat($currentInput.val() || 0);

          if (attrMax == null || attrMax > currentValue) {
            var newValue = currentValue + 1;
            $currentInput.val(newValue);

            if (settings.onIncrement) {
              settings.onIncrement($currentInput, newValue, settings);
            }
          }
        }); // Trigger the input event here to avoid event spam

        if (event.type == 'mouseup' || event.type == 'mouseleave') {
          $currentInput.trigger('input');
        }
      }); // Remember that we have initialized this input

      $currentInput.attr('data-nice-number-initialized', true); // Append elements

      switch (settings.buttonPosition) {
        case 'left':
          $minusButton.appendTo($inputContainer);
          $plusButton.appendTo($inputContainer);
          $currentInput.appendTo($inputContainer);
          break;

        case 'right':
          $currentInput.appendTo($inputContainer);
          $minusButton.appendTo($inputContainer);
          $plusButton.appendTo($inputContainer);
          break;

        case 'around':
        default:
          $minusButton.appendTo($inputContainer);
          $currentInput.appendTo($inputContainer);
          $plusButton.appendTo($inputContainer);
          break;
      } // Nicely size input


      if (settings.autoSize) {
        $currentInput.width($currentInput.val().length + settings.autoSizeBuffer + 'ch');
        $currentInput.on('keyup input', function () {
          $currentInput.animate({
            width: $currentInput.val().length + settings.autoSizeBuffer + 'ch'
          }, 200);
        });
      }
    });
  };

  function changeInterval(eventType, interval, callback) {
    if (eventType == 'mousedown') {
      interval.timeout = setTimeout(function () {
        interval.actualInterval = setInterval(function () {
          callback();
        }, 100);
      }, 200);
      callback();
    } else {
      if (interval.timeout) {
        clearTimeout(interval.timeout);
      }

      if (interval.actualInterval) {
        clearInterval(interval.actualInterval);
      }
    }
  }
})(jQuery);

var $ = jQuery.noConflict();
$('input[type="number"]').niceNumber();

/***/ }),

/***/ "./src/scss/main.scss":
/*!****************************!*\
  !*** ./src/scss/main.scss ***!
  \****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					result = fn();
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
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
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/main": 0,
/******/ 			"css/main": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			for(moduleId in moreModules) {
/******/ 				if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 					__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 				}
/******/ 			}
/******/ 			if(runtime) var result = runtime(__webpack_require__);
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkIds[i]] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunkdurpal_theme"] = self["webpackChunkdurpal_theme"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/main"], () => (__webpack_require__("./src/js/main.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/main"], () => (__webpack_require__("./src/scss/main.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;