// JavaScript Document
$(document).foundation();

(function() {
	"use strict";
	console.log("SEAF fired");

var describe = ["With my skills and knowledge, I can easily create interactive websites. I can also build responsive websites for mobile, tablet and web. As well of some insight on Back End to be able to build database structures.",
"I have developed skills to be able to make motion graphics for Video production. With hand on experiences creating high-end 3D graphics and animations for use in a variety of applications.",
"I’ve had the opportunity to practice and work on designing logos, branding guides and style guides. Also having the chance to learn how to build and improve a brand."];

var captions = ["Front End Development","Motion Design","Branding / Logo Design"]

var info = document.querySelector("#info");
var header = document.querySelector("#header");
var select = document.querySelector("#icons");
var anchors = select.querySelectorAll("img");

//functions
function swapDesc(evt){
	evt.preventDefault();
info.innerHTML = describe[evt.target.id];
header.innerHTML = captions[evt.target.id];
}

//Listeners
for(var d=0;d<anchors.length; d++){
	anchors[d].addEventListener("click", swapDesc, false);
}


})();
