function preparePage() { 

	var floatTitle = function() {
	var title = document.getElementById("page-title");
	title.style.top="30px";
	title.style.opacity="1";
}

var showAddress = function() {
	var address = document.getElementById("address");
	address.style.opacity="1";
}

var showBackground = function() {
}

var timeout = setTimeout(floatTitle,100);
var timoutAddress = setTimeout(showAddress,1500);

}

preparePage();
