$(document).ready(function(){	
	$('button#suiv').click(function(){
		$('html, body').animate({scrollTop: window.pageYOffset + $(window).height()}, 800);
	});	
	$('button#prec').click(function(){
		$('html, body').animate({scrollTop : window.pageYOffset - $(window).height()}, 800);
	});});