jQuery(document).ready(function($) {

  // allows for :active to work on mobile

  $('body *').on('touchstart', function (){});

  // click function

  $('.nav-button').on('click', function() {

    // add class on click

    $('#pop-nav').addClass('pop-wrap-show');
      $('.slide-menu').addClass(' animated slideInRight');

  });

  // click function

  $('.search-button-mobile').on('click', function() {

    // add class on click

    $('#pop-search-mobile').addClass('pop-wrap-show');
    $('.search-mobile').addClass(' animated slideInDown');

  });

  // click function

  $('.about-link a').on('click', function() {

    // add class on click

    $('#pop1').addClass('pop-wrap-show');
    $('.pop-container').addClass(' animated bounceInUp');

  });

  // click function

  $('.hero-image').on('click', function() {

    // add class on click

    $('#pop2').addClass('pop-wrap-show');
    $('.question-form-container').addClass('animated bounceInUp');

  });

  // click function

  $('.exit-button').on('click', function() {

    // remove class on click

    $('.pop-wrap').removeClass('pop-wrap-show');

  });


});
