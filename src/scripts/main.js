import '../styles/main.scss';

$(document).ready(function() {
    $('.carousel').carousel({
        interval: 10000,
    });

    $('#contact-form').submit(function(event) { 
      // we stoped it
      event.preventDefault();
      // needs for recaptacha ready
      grecaptcha.ready(function() {
          // do request for recaptcha token
          // response is promise with passed token
          grecaptcha.execute('6Lfdp38UAAAAAJUwvPlf-qC3Jfkvy7sN7SoAj6pQ', {action: 'submit_form'}).then(function(token) {
              // add token to form
              $('#contact-form').prepend('<input type="hidden" name="token" value="' + token + '">');
              $('#contact-form').prepend('<input type="hidden" name="action" value="submit_form">');
              // submit form now
              $('#contact-form').unbind('submit').submit();
          });
      });
    });
});

 $(window).on('load', function () {
    carouselNormalization();
 });

function carouselNormalization() {
  var items   = $('#testimonialsCarousel .carousel-item'),     // grab all the slides
      heights = [],                                            // array to store heights
      tallest;                                                 // tallest slide

  if (items.length) {
    function normalizeHeights() {
      items.each(function() {
        heights.push($(this).height());               // add each slide's height
      });                                             // to the array

      tallest = Math.max.apply(null, heights);        // find the largest height

      items.each(function() {
        $(this).css('min-height', tallest + 'px');    // set each slide's minimum
      });                                             // height to the largest
    };

    normalizeHeights();

    $(window).on('resize orientationchange', function() {
      tallest = 0, heights.length = 0;               // reset the variables

      items.each(function() {
        $(this).css('min-height', '0');              // reset each slide's height
      });

      normalizeHeights();                            // run it again
    });
  }
}
