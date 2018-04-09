//do not remove this line of code
$(document).foundation();

//Scrolling
(function() {

	var web = document.querySelector("#web");
	var tl = new TimelineMax({repeat:0, repeatDelay:1});

	var nav = document.querySelector("#mainNav");
	var links = nav.querySelectorAll("a");

	//function
	function scrollit(evt) {
		evt.preventDefault();

	var idNum = evt.target.id;

	TweenLite.to(window, 1, {scrollTo:{y:"#scroll"+idNum, offsetY:20}});
	}
	for(var i=0; i<links.length; i++){
		links[i].addEventListener("click", scrollit, false);
	}


var webShowUp = document.querySelector("#web");
var screenPOS;
var skills;

function activate() {
		screenPOS = window.scrollY;
		web = webShowUp.offsetTop;
		if(screenPOS+400>skills){
			tl.add(TweenLite.to(webShowUp,1,{opacity:1}));

		}
	}

		window.addEventListener("scroll", activate, false);

})();
