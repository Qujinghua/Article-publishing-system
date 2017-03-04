$(document).ready(function(){
	$(".nav_float_1").hover(function(){
		$(".nav_float1").stop().fadeIn();
	},function(){
		$(".nav_float1").stop().fadeOut();
	});

})