/************ Add classees you need only on desktop ***************/

function addClasses(){
	if ($(window).width() > 1023) {
		$('div.main-paslaugos section').addClass('opened');
	}
}

/******************** preload images ************************/

function preload(arrayOfImages) {
    $(arrayOfImages).each(function(){
        $('<img/>')[0].src = this;
    });
}

/************ check if window width is changed *************/

function checkWidth() {
	var width = $(window).width();
	$(window).resize(function(){
	   if($(this).width() != width){
	      width = $(this).width();
	      if (width < 1024) {
	      	$('div.hidden').css('display', 'none');
	      }
	   }
	});
}

/************ MOBILE MENU **************/

function mobileMenu() {
	$('.mob-hamb').on('click', function(){
		$('.mob-menu').slideToggle('fast');
	})
}

/*******************  hamburger animation *****************/

function hamburgerAnimate(){
	$('#nav-icon3').click(function(){
		$(this).toggleClass('open');
	});
};

/****************** footer positioning ********************/

function footerPosition(){
	var footer = $('footer');
	var button = $('.homepage-button');
	var epsilon = 0;
	if(button.offset().top + button.outerHeight(true) + epsilon > footer.offset().top){
		footer.css('bottom', 'initial');
	}
}

/********* executing ........ ************/

$( document ).ready(function() {
	addClasses();
	preload([
    'img/cont-mail-hover.svgz'
	]);
	checkWidth();
	mobileMenu();
	hamburgerAnimate();
});