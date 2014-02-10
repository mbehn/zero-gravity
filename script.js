function preparePage() { 

	var floatTitle = function() {
	var title = document.getElementById("page-title");
	title.style.top="50px";
	title.style.opacity="1";
	title.style.letterSpacing="5px";
}

var showAddress = function() {
	var address = document.getElementById("address-container");
	address.style.opacity="1";
	address.style.right="50px";
}


var timeout = setTimeout(floatTitle,100);
var timoutAddress = setTimeout(showAddress,1500);

}
preparePage();