$(function(){
	$(window).load(function() {
		$('#banner-bg-web').responsify();
	});
	$(window).resize(function(){
		$('#banner-bg-web').responsify();
	})	
	$(window).load(function() {
		$('#banner-bg-mobile').responsify();
	});
	$(window).resize(function(){
		$('#banner-bg-mobile').responsify();
	})	
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
