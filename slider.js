// var slider = {
//     setInitialImage: function() {
//         var images = document.getElementsByClassName("slider-images");
//         images[0].style.opacity = "1";
//         images[0].id = "current-image";
//     },
//     sliderIndex: 0,
//     images: document.getElementsByClassName("slider-images"),
//     startSlider: function() {
//         if (slider.sliderIndex === 0) {
//             slider.images[slider.sliderIndex].style.opacity = "1";
//             slider.sliderIndex++;
//         } else if (slider.sliderIndex > 0) {
//             var previousImage = slider.sliderIndex - 1;
//             var currentImage = slider.sliderIndex;
//             slider.images[previousImage].style.opacity = "0";
//             slider.images[previousImage].id = null;
//             slider.images[currentImage].style.opacity = "1";
//             slider.images[currentImage].id = "current-image";
//             slider.sliderIndex++;
//         } else if (slider.sliderIndex == 4) {
//             slider.sliderIndex = 0;
//             slider.images[slider.images.length - 1].style.opacity = "0";
//             slider.images[slider.sliderIndex].style.opacity = "1";
//             slider.sliderIndex++;
//         }
//     },
//     showNav: function() {
//         document.getElementById("slide-left").style.opacity = .3;
//         document.getElementById("slide-right").style.opacity = .3;
//         document.getElementById("slide-left").style.left = "3px";
//         document.getElementById("slide-right").style.right = "3px";
//     },
//     hideNav: function() {
//         document.getElementById("slide-left").style.opacity = ".3";
//         document.getElementById("slide-right").style.opacity = ".3r";
//         document.getElementById("slide-left").style.left = "10px";
//         document.getElementById("slide-right").style.right = "10px";
//     },
//     slideLeft: function() {
//     }
// };
// slider.setInitialImage();
// setInterval(slider.startSlider, 4000);
// var navs = document.getElementById("slider");
// navs.onmouseover = function() {
//     slider.showNav();
// };
// navs.onmouseout = function() {
//     slider.hideNav();
// };
// var leftNav = document.getElementById("slide-left");
// leftNav.onclick = function() {
//     slider.slideLeft();
// };


var slider = {
    images : document.getElementsByClassName(".slider-images"),
    initialImage : $('.slider-images')[0],
    setInitialImage : function() {
        $(slider.initialImage).css('opacity', '1');
    },
    leftNav : document.getElementsByClassName("slider-nav")[0],
    rightNav : document.getElementsByClassName("slider-nav")[1],
    showNav : function() {
        slider.leftNav.style.left="3px";
        slider.rightNav.style.right="3px";
    },
    hideNav : function() {
        slider.leftNav.style.left="10px";
        slider.rightNav.style.right="10px";
    },
    slideLeft : function() {
        for (var i=0;i<slider.images.length - 1;i++) {
            if (slider.images[i].style.opacity="1") {
                console.log(slider.images[i]);
            }
        }
    }
};

slider.setInitialImage();
$("#slider").hover(function() {
    slider.showNav();
});
$("#slider").mouseleave(function() {
    slider.hideNav();
});