window.onscroll = function () {
	myFunction();
};

var Topnavbar = document.getElementById('Topnavbar');
var sticky = Topnavbar.offsetTop;

function myFunction() {
	if (window.pageYOffset >= sticky) {
		Topnavbar.classList.add('sticky');
	} else {
		Topnavbar.classList.remove('sticky');
	}
}
