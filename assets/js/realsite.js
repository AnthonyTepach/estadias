$(document).ready(function() {
    'use strict';
    /**
     * Scroll top
     */
    var scroll_top = $('.scroll-top');
    if(scroll_top.length != 0) {
        scroll_top.on('click', function() {
            $.scrollTo('.header', 800);
        });
    }


  

     

  

    /**
     * Background image
     */
    $('*[data-background-image]').each(function() {
        $(this).css({
            'background-image': 'url(' + $(this).data('background-image') + ')'
        });
    });

    /**
     * Dropdown
     */
    $('div.dropdown-menu').on('focusin', function() {
        $(this).transition({
            height: 'auto',
            duration: 150,
            width: 'auto'
        });
    });

    $('div.dropdown-menu').on('focusout', function() {
        $(this).transition({
            height: 0,
            duration: 250,
            width: 0
        });
    });

    /**
     * Header animation
     */
     /**
      * Header animation
      */
     $('#nav-main > li.has-children').hover(function() {
         var el = $('> div', this);

         el.transition({
             height: 'auto',
             duration: 250,
             width: 'auto'
         });
     }, function() {
         var el = $('> div', this);

         el.transition({
             height: 0,
             duration: 150,
             width: 0
         });
     });

     // Second level
     $('#nav-main > li.has-children > div > ul > li.has-children').hover(function() {
         var el = $('> div', this);

         $(this).closest('div').css('overflow', 'visible');

         el.transition({
             height: 'auto',
             duration: 250,
             width: 'auto'
         });
     }, function() {
         var el = $('> div', this);

         $(this).closest('div').css('overflow', 'hidden');

         el.transition({
             height: 0,
             duration: 150,
             width: 0
         });
     });

    $('.navbar-toggle').on('click', function() {
        $('.nav-main-wrapper').toggleClass('open');
    });

    $('.nav-main-wrapper').on('click', function(e) {
        if (e.offsetX > 240) {
            $('.nav-main-wrapper').removeClass('open');
        }
    })
});
