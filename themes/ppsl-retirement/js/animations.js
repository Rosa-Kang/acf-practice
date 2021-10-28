/**
 * File animations.js.
 *
 * Settings for Animate on Scroll (aos) and Mobile Menu.
 * https://github.com/michalsnik/aos/tree/v2
 */
(function ($) {
  $(function () {
    // Start of Popout Menu -------------------------
    $('#toggle').click(function () {
      $('.dimmed').fadeIn(200);
      $('#popout').css({'-webkit-transform':'translateX(0)','transform':'translateX(0)'});
    });

    // Detect click outside mobile menu
    $(document).mouseup(function (e) {
      var menu = $('.popout-menu');
      if (!menu.is(e.target) && menu.has(e.target).length === 0) {
        $('.dimmed').fadeOut(200);
        $('#popout').css({'-webkit-transform':'translateX(100%)','transform':'translateX(100%)'});
      }
    });

    $('#close-popout').click(function(){
      $('.dimmed').fadeOut(200);
      $('#popout').css({'-webkit-transform':'translateX(100%)','transform':'translateX(100%)'});
    });
    // End of Popout Menu -----------------------

    // Start of Animate on Scroll ---------------------
    // Animations added to elements without data-aos attribute in html element
    $(
      '.intro p, .intro h2, .callout-video h2, .callout-video p, .features p, .features h2, .features .feature-wrapper, .callout-img-center h2, .callout-img-center p, .callout-img-right p, .callout-img-right h2, .callout-img-left p, .callout-img-left h2, .cards-team-members p, .cards-team-members h2, .cards-team-members h3, .callout h2, .callout p, .callout li, .cards-suites p, .cards-suites h2, .cards-suites h3, .additional-form p, .additional-form h2, .contact-form p, .contact-form h2, .contact-form li, .accordions h3, .more-info h2, .blog-container p, .blog-container h2, .image-info-cards article, .single .entry-meta, .single .entry-content p, .single .entry-content li, .entry-content blockquote'
    ).attr({
      'data-aos': 'fade-zoom-in',
      'data-aos-easing': 'ease',
      'data-aos-offset': '0',
    });

    $('.accordion-header p, .accordion').removeAttr('data-aos');

    AOS.init({
      duration: 1300,
      once: false,
      mirror: true
    });

    $(window).on('load', function () {
      AOS.refresh();
    });
    // End of Animate on Scroll ----------------------
  }); // end of doc ready
})(jQuery);
