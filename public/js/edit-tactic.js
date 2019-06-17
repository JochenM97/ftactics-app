/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/edit-tactic.js":
/*!*************************************!*\
  !*** ./resources/js/edit-tactic.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var keyframes_json = JSON.parse(decodeURIComponent(data));
var keyframes_json_length = keyframes_json[4].length;
var countLayers = 1;

for (var i = keyframes_json_length; i > 1; i--) {
  countLayers += 1;
  var pushLayer = "layer_" + countLayers;
  layersArray.push(pushLayer);
  pushLayer = new Konva.Layer();
  pushLayer.visible(false);
  pushLayer.name("layer_" + countLayers);
  stage.add(pushLayer);
  var frameElement = document.createElement('span');
  frameElement.className = "frame";
  frameElement.id = "frame_layer_" + i;
  var referenceNode = allFrames[activeFrame - 1];
  referenceNode.parentNode.insertBefore(frameElement, referenceNode.nextSibling);
  allFrames[activeFrame].addEventListener('click', onFrameClick.bind(this, allFrames[activeFrame]), false);
  amountBluePlayers.push(5); // 5 blauwe spelers toevoegen

  amountRedPlayers.push(5); // 5 rode spelers toevoegen

  amountFootballs.push(1); // 5 ballen toevoegen
}

for (var i = 0; i < allFrames.length; i++) {
  allFrames[i].innerHTML = i + 1;
}

for (var i = 0; i < keyframes_json[4].length; i++) {
  var keyframes_json_i_length = keyframes_json[4][i].length;

  for (var y = 0; y < keyframes_json_i_length; y++) {
    var currentLayerName = "." + layersArray[i];
    var curentLayerToAdd = stage.find(currentLayerName);
    var currentLayerIndex = i;
    var typeObject = keyframes_json[4][i][y][2];
    var setPositionX = keyframes_json[4][i][y][0];
    var setPositionY = keyframes_json[4][i][y][1];

    switch (typeObject) {
      case "red-player":
        var playerNumberText = keyframes_json[4][i][y][3];
        var redPlayer = new Konva.Rect({
          fill: '#FFAA00',
          opacity: 1,
          cornerRadius: 2,
          width: 10,
          height: 10
        });
        var playerNumber = new Konva.Text({
          text: playerNumberText,
          fontSize: 8,
          fontFamily: 'BebasNeue',
          fill: '#FFF',
          align: 'center',
          verticalAlign: 'bottom',
          width: 10,
          height: 10
        });
        var rPlayerGroup = new Konva.Group({
          x: setPositionX,
          y: setPositionY,
          draggable: true,
          name: 'canvas-object',
          stroke: "#BA7C00",
          strokeEnabled: false,
          strokeWidth: 1,
          objectType: 'red-player'
        });
        rPlayerGroup.add(redPlayer);
        rPlayerGroup.add(playerNumber);
        rPlayerGroup.strokeEnabled = false;
        rPlayerGroup.selected = false;
        rPlayerGroup.dragBoundFunc(function (pos) {
          var newY = pos.y > stage.height() - stage.height() / 150 * redPlayer.getAttr("height") ? stage.height() - stage.height() / 150 * redPlayer.getAttr("height") : pos.y < 0 ? 0 : pos.y;
          var newX = pos.x > stage.width() - stage.width() / 100 * redPlayer.getAttr("width") ? stage.width() - stage.width() / 100 * redPlayer.getAttr("width") : pos.x < 0 ? 0 : pos.x;
          return {
            x: newX,
            y: newY
          };
        });
        rPlayerGroup.on('click', function () {
          onObjectClick(rPlayerGroup);
        });
        rPlayerGroup.on('tap', function () {
          onObjectClick(rPlayerGroup);
        });
        rPlayerGroup.on('mouseenter', function () {
          stage.container().style.cursor = 'move';
        });
        rPlayerGroup.on('mouseleave', function () {
          stage.container().style.cursor = 'default';
        });
        curentLayerToAdd.add(rPlayerGroup);
        curentLayerToAdd.draw();
        amountRedPlayers[i] -= 1;
        availableRedPlayers.innerHTML = amountRedPlayers[i];
        break;

      case "blue-player":
        var playerNumberText = keyframes_json[4][i][y][3];
        var bluePlayer = new Konva.Rect({
          fill: '#00E2DE',
          opacity: 1,
          cornerRadius: 2,
          width: 10,
          height: 10
        });
        var playerNumber = new Konva.Text({
          text: playerNumberText,
          fontSize: 8,
          fontFamily: 'BebasNeue',
          fill: '#FFF',
          align: 'center',
          verticalAlign: 'bottom',
          width: 10,
          height: 10
        });
        var bPlayerGroup = new Konva.Group({
          x: setPositionX,
          y: setPositionY,
          draggable: true,
          name: 'canvas-object',
          stroke: "#00A5A2",
          strokeEnabled: false,
          strokeWidth: 1,
          objectType: 'blue-player'
        });
        bPlayerGroup.add(bluePlayer);
        bPlayerGroup.add(playerNumber);
        bPlayerGroup.selected = false;
        bPlayerGroup.dragBoundFunc(function (pos) {
          var newY = pos.y > stage.height() - stage.height() / 150 * bluePlayer.getAttr("height") ? stage.height() - stage.height() / 150 * bluePlayer.getAttr("height") : pos.y < 0 ? 0 : pos.y;
          var newX = pos.x > stage.width() - stage.width() / 100 * bluePlayer.getAttr("width") ? stage.width() - stage.width() / 100 * bluePlayer.getAttr("width") : pos.x < 0 ? 0 : pos.x;
          return {
            x: newX,
            y: newY
          };
        });
        bPlayerGroup.on('click', function () {
          onObjectClick(bPlayerGroup);
        });
        bPlayerGroup.on('tap', function () {
          onObjectClick(bPlayerGroup);
        });
        bPlayerGroup.on('mouseenter', function () {
          stage.container().style.cursor = 'move';
        });
        bPlayerGroup.on('mouseleave', function () {
          stage.container().style.cursor = 'default';
        });
        curentLayerToAdd.add(bPlayerGroup);
        curentLayerToAdd.draw();
        amountBluePlayers[i] -= 1;
        availableBluePlayers.innerHTML = amountBluePlayers[i];
        break;

      case "ball":
        var ball = new Konva.Rect({
          x: setPositionX,
          y: setPositionY,
          fill: '#FFF',
          draggable: true,
          name: 'canvas-object',
          opacity: 1,
          cornerRadius: 5,
          width: 8,
          height: 8,
          stroke: "rgba(185,194,210,0.5)",
          strokeEnabled: false,
          strokeWidth: 2,
          objectType: 'ball'
        });
        ball.selected = false;
        ball.dragBoundFunc(function (pos) {
          var newY = pos.y > stage.height() - stage.height() / 150 * ball.getAttr("height") ? stage.height() - stage.height() / 150 * ball.getAttr("height") : pos.y < 0 ? 0 : pos.y;
          var newX = pos.x > stage.width() - stage.width() / 100 * ball.getAttr("width") ? stage.width() - stage.width() / 100 * ball.getAttr("width") : pos.x < 0 ? 0 : pos.x;
          return {
            x: newX,
            y: newY
          };
        });
        ball.on('click', function () {
          onObjectClick(ball);
        });
        ball.on('tap', function () {
          onObjectClick(ball);
        });
        ball.on('mouseenter', function () {
          stage.container().style.cursor = 'move';
        });
        ball.on('mouseleave', function () {
          stage.container().style.cursor = 'default';
        });
        curentLayerToAdd.add(ball);
        curentLayerToAdd.draw();
        amountFootballs[i] -= 1;
        availableFootballs.innerHTML = amountFootballs[i];
        break;
    }
  }
}

/***/ }),

/***/ 1:
/*!*******************************************!*\
  !*** multi ./resources/js/edit-tactic.js ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\htdocs\ftactics\resources\js\edit-tactic.js */"./resources/js/edit-tactic.js");


/***/ })

/******/ });