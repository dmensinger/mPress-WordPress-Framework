$(function() {
  var $slides = $('#slides');

  Hammer($slides[0]).on("swipeleft", function(e) {
	$slides.data('superslides').animate('next');
  });

  Hammer($slides[0]).on("swiperight", function(e) {
	$slides.data('superslides').animate('prev');
  });

  $slides.superslides({
	hashchange: false
  });
});
