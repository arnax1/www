function theRotator() {
	// padarom visus paveiksliukus nematomais
	$('div#rotator ul li').css({opacity: 0.0});
 
	// imam pirma paveiksliuka ir parodom ji (pakeliui darom matomu)
	$('div#rotator ul li:first').css({opacity: 1.0});
 
	// kvieciam funkcija "rotate" tamk kad startuoti animacija (5000 - paveiksliukas keiciasi kas 5 sekundes)
	setInterval('rotate()',5000);
}
 
function rotate() {	
	// imam pirma paveiksliuka
	var current = ($('div#rotator ul li.show')?  $('div#rotator ul li.show') : $('div#rotator ul li:first'));
 
	// imam kita paveiksliuka ir kai pasieksim paskutini, pradedam is naujo
	var next = ((current.next().length) ? ((current.next().hasClass('show')) ? $('div#rotator ul li:first') :current.next()) : $('div#rotator ul li:first'));	
 
	// paveiksliukai rodomi randomu
	 //var sibs = current.siblings();
	 //var rndNum = Math.floor(Math.random() * sibs.length );
	 //var next = $( sibs[ rndNum ] );
 
	// grazi animacija
	next.css({opacity: 0.0})
	.addClass('show')
	.animate({opacity: 1.0}, 1000);
 
	// slepiam rodoma paveiksliuka
	current.animate({opacity: 0.0}, 1000)
	.removeClass('show');
};
 
$(document).ready(function() {		
	// startuojam animacija
	theRotator();
});