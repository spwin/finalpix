/************* Button opening function *************/

var dropdownBlocks = function () {
	return {
		bindEvents: function (selector, object, content, button, insidebutton) {
			var value = 0;
			object = $(selector+' '+object);
			object.on('click', function(){
				$(this).closest(selector).find(content)
				.stop(true,false)
				.slideToggle('slow', function(){

					if ( $(this).closest(selector).hasClass('opened') == true) {
						$(this).closest(selector).find(insidebutton).fadeIn('slow');
					} else {
						$(this).closest(selector).find(insidebutton).css('display', 'none');
					}

				});
			});
			
			object.rotate({
				bind:{
					click: function(){
						var parent = $(this).closest(selector);
						parent.toggleClass('opened');
						value = parent.hasClass('opened') ? 180 : 360;
						$(this).closest(selector).find(button).rotate({ animateTo:value}, function(){value = 0;});
					}
				}
			});
		}
	}
	return $.Deferred().resolve();
}(jQuery);

/****************** Content fade in ***********************/

function contentFadeIn(){
    $(window).scroll( function(){
    
        /* Check the location of each desired element */
        $('div.main-seo div, div.main-development div,div.main-design div, .hideme').each( function(i){
            
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){
                
                $(this).animate({'opacity':'1'},1000);

                    
            }
            
        }); 
    
    });
    $('div.main-seo div:lt(11),div.main-development div:lt(11),div.main-contacts div:lt(11),div.main-design div:lt(11), div.main-paslaugos div:lt(20)').animate({'opacity':'1'},1000);
}

/************ Add classees you need only on desktop ***************/

function addClasses(){
	if ($(window).width() > 1023) {
		$('div.main-paslaugos section').addClass('opened');
	}
}

/************************** Hidden icons in paslaugos *******************************/

function hiddenIcons(){
	if ($(window).width() > 1023) {
		$('div.main-paslaugos .section-open').on('click', function(){
			$(this).closest('section').find('.hidden').css('display', 'block');
		})
	}
}

/******************** sections auto height musu paslaugos ***********************/

function sectionsHeight(){
	if ($(window).width() > 1023) {
			var height = $('div.main-paslaugos .sections').height();
			$('div.main-paslaugos .sections').css('height', height);

	}
}

/********************* button-content height musu paslaugos *************************/

function buttonsHeight(){
	if ($(window).width() > 1023) {
		$('div.main-paslaugos .button-content').each( function() {
			var height = $(this).height();
			$(this).css('height', height);
		})
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

/************** MOBILE HIGHLIGHT MENU POINT ***********************/

function highlightMenu(){
    // this will get the full URL at the address bar
    var url = window.location.href; 

    // passes on every "a" tag 
    $(".mob-menu-list a").each(function() {
            // checks if its the same on the address bar
        if(url == (this.href)) { 
            $(this).children().addClass("active");
        }
    });
}

/****************** fade in color lines *********************/

function colorLines() {
	if ($(window).width() > 1023) {
		var height = Math.max($(document).height(), $(window).height());
		var left_line = $('.color-lines-web.left-line');
		var right_line = $('.color-lines-web.right-line');
		left_line.css('height', (height+Math.abs(parseInt(left_line.css('top'))))+'px');
		right_line.css('height', (height+Math.abs(parseInt(right_line.css('top'))))+'px');
		$('.color-lines-web').animate({opacity: 1}, 3000);
	}
}

function colorLinesMob() {
	$('.color-lines-mob').animate({opacity: 1}, 2000);
}

/*******************  hamburger animation *****************/

function hamburgerAnimate(){
	$('#nav-icon3').click(function(){
		$(this).toggleClass('open');
	});
}

/********* show social ************/

function showSocial(){
	$('.social-container').fadeIn('slow');
}

var showSVG = function(){
	return {
		init : function(){
			colorLinesMob();
		}
	}
}();

/********* executing ........ ************/

$( document ).ready(function() {
	dropdownBlocks.bindEvents('section', '.section-open', '.button-content', '.button-down', '.daugiau-button');
	addClasses();
	hiddenIcons();
	preload([
    'img/cont-mail-hover.svgz',
    'img/social-icons/f-icon-hover.svgz',
    'img/social-icons/gplus-icon-hover.svgz',
    'img/social-icons/in-icon-hover.svgz',
    'img/social-icons/twitter-icon-hover.svgz'
	]);
	checkWidth();
	mobileMenu();
	highlightMenu();
	hamburgerAnimate();
});

$(window).load(function() {
	buttonsHeight();
	sectionsHeight();
	showSocial();
	contentFadeIn();
});

