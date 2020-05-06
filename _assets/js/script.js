$(document).ready(function() {
    
/* STICKY & NONSTICKY NAVIGATION */
/* --------------------------------------- */

    $('.js--sticky-navi-start').waypoint(function(direction) {
        if (direction == "down") {
            $('nav').addClass('sticky');
        } else {
            $('nav').addClass('fadeOut');
            $('nav').removeClass('fadeOut sticky');
        }
    }, {
        offset: '0px'
    });
    
/* MOBILE NAVIGATION */
/* --------------------------------------- */
    $('.js--nav-icon').click(function() {
        var nav = $('.js--main-nav');
        var icon = $('.js--nav-icon i');
        
        nav.slideToggle(300);
        
        if (icon.hasClass('ion-navicon-round')) {
            icon.addClass('ion-close-round');
            icon.removeClass('ion-navicon-round');  
        } else {
                icon.addClass('ion-navicon-round');
                icon.removeClass('ion-close-round');
        }
        });
    
/* FOOD DELIVERY ANIMATION */
/* --------------------------------------- */
    $('.js--wp-1').waypoint(function(direction) {
        if (direction == 'down') {
            $('.js--wp-1').addClass('animated pulse');   
        } else {
            $('.js--wp-1').removeClass('animated pulse');
        }
    }, {
        offset: '80%'
    });
    
/* HOW IT WORKS ANIMATION */
/* --------------------------------------- */
    $('.js--wp-2').waypoint(function(direction) {
        if (direction == 'down') {
            $('.js--wp-2').addClass('animated fadeInUp');
        } else {
            $('.js--wp-2').removeClass('animated fadeInUp')
        }
    }, {
        offset: '82%'
    });
    
/* SIGN UP ANIMATION */
/* --------------------------------------- */
    $('.js--wp-4').waypoint(function(direction) {
        if (direction == 'down') {
            $('.js--wp-4').addClass('animated zoomIn');
        } else {
            $('.js--wp-4').removeClass('animated zoomIn');
        }
    }, {
        offset: '175%'
    }); 
    
/* JQUERY SMOOTH SCROLL */
/* -------------------------------------------------*/
$('.body').localScroll();

/* MAPS.JS ------------------------------- */
/* --------------------------------------- */
    
});