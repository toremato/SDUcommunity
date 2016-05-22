function login1() {
	var lala = document.getElementsByClassName('logbuttons-container');
	lala[0].style.right = "160px";
	lala[0].style.transition = ".7s";
	lala[0].style.transitionDelay = ".2s";



	var search = document.getElementsByClassName('search');
	search[0].style.opacity = 0.9;
	search[0].style.width = "160px";
	search[0].style.transition = ".8s";
	search[0].style.transitionDelay = ".2s";
}
function login2() {
	var lala = document.getElementsByClassName('logbuttons-container');
	lala[0].style.right = "70px";
	lala[0].style.transition = ".7s";
	lala[0].style.transitionDelay = ".2s";

	var search = document.getElementsByClassName('search');
	search[0].style.opacity = 0.6;
	search[0].style.width = "60px";
	search[0].style.transition = ".8s";
	// search[0].style.transitionDelay = ".2s";
}
function login3() {
	var lala = document.getElementsByClassName('logbuttons-container');
	lala[0].style.right = "270px";
	lala[0].style.transition = ".7s";

	var s = document.getElementsByClassName('search');
	s[0].style.width = "270px";
	s[0].style.transition = ".8s";

	var stext = document.getElementsByClassName('searchtext');
	stext[0].style.width = "200px";
	stext[0].style.transition = ".8s";
}
function searchtext() {
	var searchtext = document.getElementsByClassName('searchtext');
	searchtext[0].style.width = "95px";
	searchtext[0].style.transition = ".8s";
}

function startsession() {
	// var loginwindow = document.getElementById('login-window');
	// loginwindow.style.display = "none";

	// var yes = document.getElementById('container');
	// yes.style.width = "200px";
	// var logbutton = document.getElementById('login');
	// var regbutton = document.getElementById('signup');
	// logbutton.style.display = "none";
	// regbutton.style.display = "none";
}
function endsession() {
	
}
function login() {
	var loginwindow = document.getElementById('login-window');
	loginwindow.style.display = "block";
	// loginwindow.fadeIn();

	// var loginbuttons = document.getElementsByClassName('logbuttons-container');
	// loginbutton[0].style.display = "none";
	// var logbutton = document.getElementById('login');
	// var regbutton = document.getElementById('signup');
	// logbutton.style.display = "none";
	// regbutton.style.display = "none";
}