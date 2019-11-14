(function($) {
'use strict';
    
    $('body').scrollspy({ target: '#navbarmain' });

 /*
     * ----------------------------------------------------------------------------------------
     *  SMOTH SCROOL JS
     * ----------------------------------------------------------------------------------------
     */

    $('a.smoth-scroll').on('click', function (e) {
        var anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top - 100
        }, 1000);
        e.preventDefault();
    });


    $('.home-slider-loop-false').owlCarousel({
      loop:true,
      autoplay: true,
      margin:0,
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      nav:false,
      dots:true,
      autoplayHoverPause: true,
      items: 1,
      responsive:{
        0:{
          items:1,
          nav:false
        },
        600:{
          items:1,
          nav:false
        },
        1000:{
          items:1,
          nav:false
        }
      }
    });
      
 $('.owl-book').owlCarousel({
      loop:true,
      autoplay: true,
      margin:0,
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      nav:false,
      dots:false,
      autoplayHoverPause: true,
      items: 1,
      responsive:{
        0:{
          items:1,
          nav:false
        },
        600:{
          items:1,
          nav:false
        },
        1000:{
          items:1,
          nav:false
        }
      }
    });
      
  $('.testimonial-wrap').slick({
    slidesToShow: 2,
    slidesToScroll: 2,
    infinite: true,
    dots: false,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 4000,
    responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow:2,
            slidesToScroll: 2,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 900,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },{
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      
      ]
  });




  $('.book-preview').each(function () {
        $(this).find('.popup-gallery').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });
    });

    
  // SCROLL TO TOP
  
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > 70) {
        $('.scroll-to-top').addClass('reveal');
    } else {
        $('.scroll-to-top').removeClass('reveal');
    }
});
 
 
/* ----------------------------------------------------------- */
    /*  Fixed header
    /* ----------------------------------------------------------- */


    $(window).on('scroll', function () {
        if ($(window).scrollTop() > 70) {
            $('.site-header').addClass('header-white');
        } else {
            $('.site-header').removeClass('header-white');
        }

    });

 
    
  // Smooth scrolling using jQuery easing
// jQuery for page scrolling feature - requires jQuery Easing plugin
    

  // Closes responsive menu when a scroll trigger link is clicked
  $('.smoth-scroll').on('click', function(event) {
    $('.navbar-collapse').collapse('hide');
  });


function toggleIcon(e) {
    $(e.target)
        .prev('.panel-heading')
        .find(".more-less")
        .toggleClass('ti-minus');
}
$('.panel-group').on('hidden.bs.collapse', toggleIcon);
$('.panel-group').on('shown.bs.collapse', toggleIcon);






})(jQuery); // End of use strict
