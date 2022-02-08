$(document).ready(function () {
	$(window).scroll(function () {
		$('#menubar').toggleClass("scaled", ($(window).scrollTop() > 100));
	});
});