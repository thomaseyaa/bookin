// Navbar styles switcher for scrolled navbar
function scrolled_navbar() {
  var scroll = window.scrollY;
	if (scroll > 0) {
		$(".navbar-dark").addClass("navbar-light");
		$(".navbar-dark").addClass("navbar-dark-scrolled");
		$(".navbar-dark-scrolled").removeClass("navbar-dark");
		$(".navbar").addClass("navbar-light-scrolled");
	} else {
		$(".navbar-dark-scrolled").removeClass("navbar-light");
		$(".navbar-dark-scrolled").addClass("navbar-dark");
		$(".navbar-dark").removeClass("navbar-dark-scrolled");
		$(".navbar").removeClass("navbar-light-scrolled");
	}
}
$(window).scroll(function() { scrolled_navbar(); });
$(document).ready(function() { scrolled_navbar(); });


// Auto-hide for navbar
$(".auto-hiding-navbar").autoHidingNavbar({
  "animationDuration": 300,
  "showOnBottom": false
});


// AOS
AOS.init({
	once: true,
	startEvent: 'load'
});
