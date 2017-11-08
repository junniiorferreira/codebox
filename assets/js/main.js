$(function(){
	$(".btn-menu").click(function() {
		$(".mobile-menu").css("transform","translate3d(0, 0, 0)");
	});
	$(".btn-back").click(function() {
		$(".mobile-menu").css("transform","translate3d(0, -100%, 0)");
	});
	$(".btn-login").click(function(){
		$('[data-remodal-id=login]').remodal();
	});
});
