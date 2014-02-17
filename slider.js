var slider = {
	setInitialImage : function() {
		var images = document.getElementsByClassName("slider-images");
		images[0].style.opacity="1";
	},
	images : document.getElementsByClassName("slider-images"),
	startSlider : setTimeout(function() {
			for (var i = 0;i<slider.images.length;i++) {
				currentImage = slider.images[i];
				if (i===0) {
					currentImage.style.opacity="1";
				} else if (i===1) {
					slider.images[0].opacity="0";
					slider.images[i].opacity="1";
				} 
			}
		},4000),
	showNav :  function() {
		document.getElementById("slide-left").style.opacity="1";
		document.getElementById("slide-right").style.opacity="1";
		document.getElementById("slide-left").style.left="3px";
		document.getElementById("slide-right").style.right="3px";

	},
	hideNav : function() {
		document.getElementById("slide-left").style.opacity="0";
		document.getElementById("slide-right").style.opacity="0";
		document.getElementById("slide-left").style.left="10px";
		document.getElementById("slide-right").style.right="10px";
	}

}

slider.setInitialImage();
slider.startSlider;
var navs = document.getElementById("slider");
navs.onmouseover = function() {
	slider.showNav();
}

navs.onmouseout = function() {
	slider.hideNav();
}