jQuery(document).ready(function($) {
	for (var i = 0; i <= 5; i++) {
		$('.slider'+i).slick({
			prevArrow: $('.prev'+i),
			nextArrow: $('.next'+i)
		})
	}
	$(".menu__list li a").click(function(e) {
		e.preventDefault();
		var aid = $(this).attr("href");
		$('html,body').animate({scrollTop: $(aid).offset().top},'slow');
	});
	$('.up').on('click', function(event) {
		event.preventDefault();
		$('html,body').animate({scrollTop: 0},'slow');
	});
});

window.onscroll = function() {myFunction()};
var header = document.querySelector(".header");
var sticky = header.offsetTop;
function myFunction() {
	if (window.pageYOffset > sticky) {
		header.classList.add("sticky");
		$('.up').show()
	} else {
		$('.up').hide()
		header.classList.remove("sticky");
	}
}