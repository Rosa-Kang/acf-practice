/**
 * File: custom.js
 *
 * Templates: All
 *
 */
(function ($) {
  $(function () {
    // Start of Auto Add Rel to External Links -------------------
    addTargetBlankToExternalLinks();

    function addTargetBlankToExternalLinks() {
      $('a[href^="http"]')
        .not('a[href*="' + location.hostname + '"]')
        .attr({ target: '_blank', rel: 'noopener noreferrer' });
    }
    // End of Auto Add Rel to External Links ----------------

    // Open all pdfs in a new tab ----------------
    $('a[target!="_blank"][href$=".pdf"]').attr({
      target: '_blank',
      title: 'Opens in a new window',
      rel: 'noopener noreferrer',
    });
    // End of Open all pdfs in a new tab --------------------

    // Start of Smooth Scrolling -----------------
    // Select all links with hashes
    $('a[href*="#"]')
      // Remove links that don't actually link to anything
      .not('[href="#"]')
      .not('[href="#0"]')
      .click(function(event) {
        // On-page links
        if (
          location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
          && 
          location.hostname == this.hostname
        ) {
          // Figure out element to scroll to
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          // Does a scroll target exist?
          if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000, function() {
              // Callback after animation
              // Must change focus!
              var $target = $(target);
              $target.focus();
              if ($target.is(':focus')) { // Checking if the target was focused
                return false;
              } else {
                $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
              }
            });
          }
        }
      });
    // End of Smooth Scrolling ------------------

    // Start of Font Resizer ---------------
    function changeFont(fontSize) {
      return function () {
        $(
          '.site-content section:not(.features) p:not(.subtitle):not(.is-family-secondary), .site-content p a, .site-content ul li, .site-content ul li a, .site-content ol li'
        ).css('font-size', fontSize + 'px');
        sessionStorage.setItem('fSize', fontSize);
      };
    }

    var normalFont = changeFont(18),
      mediumFont = changeFont(20),
      largeFont = changeFont(22);

    $('.js-font-decrease').on('click', function () {
      normalFont();
    });

    $('.js-font-normal').on('click', function () {
      mediumFont();
    });

    $('.js-font-increase').on('click', function () {
      largeFont();
    });

    if (sessionStorage.length !== 0) {
      $('.site-content section:not(.features) p:not(.subtitle):not(.is-family-secondary), .site-content p a, .site-content ul li, .site-content ul li a, .site-content ol li').css('font-size', sessionStorage.getItem('fSize') + 'px');
    }
    // End of Font Resizer --------------------

    // Start of Show More Button (News Posts) -------------------
    $('.blog article').hide().slice(0, 6).show();

    $('.page-template-page-updates article').hide().slice(0, 6).show();

    $('#loadMore').click(function (e) {
      e.preventDefault();
      $('article:hidden').slice(0, 3).show();
      if ($('article:hidden').length === 0) {
        $('#loadMore').replaceWith('<p class="text-btn">no more</p>');
      }
    });
    // End of Show More Button -----------------

    // Start of Modals -----------------
    $('.modal').each(function (i) {
      var modalContainerId = $(this).attr('data-modal', 'modal-' + (i + 1));
    });

    $('.show-modal-btn').each(function (i) {
      var modalId = $(this).attr('id', 'modal-' + (i + 1));

      $(modalId).click(function () {
        $('[data-modal="' + $(this).attr('id') + '"]').addClass('is-active');
      });
    });

    // Close Modal
    $('.modal-close').click(function () {
      $('.modal').removeClass('is-active');
    });
    // End of Modals ----------------

    // Start of Accordions -------------------------
    // FAQ w/ icon btn
    // $('.accordion-icon-wrapper svg:last-child').hide()

    $('.accordion-container .accordion-header').on('click', function () {
      if ($(this).next('.accordion-body').css('display') === 'none') {
        $(this).addClass('current-accordion-item');
        $(this).next('.accordion-body').slideDown(500);
        $(this)
          .children('h3')
          .children('.accordion-control')
          .children('.accordion-icon-wrapper').toggleClass('active').children('.accordion-icon-wrapper svg:first-child').hide().next('.accordion-icon-wrapper svg:last-child').show();
      } else {
        $(this).removeClass('current-accordion-item');
        $(this).next('.accordion-body').slideUp(500);
        $(this)
          .children('h3')
          .children('.accordion-control')
          .children('.accordion-icon-wrapper').toggleClass('active').children('.accordion-icon-wrapper svg:last-child').hide().prev('.accordion-icon-wrapper svg:first-child').show();
      }
    });

    $('.cards-suites .accordion-header').on('click', function () {
      if ($(this).next('.accordion-body').css('display') === 'none') {
        $(this).addClass('current-accordion-item');
        $(this).next('.accordion-body').slideDown(500);
      } else {
        $(this).removeClass('current-accordion-item');
        $(this).next('.accordion-body').slideUp(500);
      }
    });
    // End of Accordions ----------------

    // Start of Tabs ------------------
    $('.tabs .column .tab-button').on('click', function(){
      var tab = $(this).data('tab');

      $('.tabs .tab-button').removeClass('is-active-tab');
      $(this).addClass('is-active-tab');

      $('.tabs-content .columns:first-of-type .column').removeClass('is-active-tab');
      $('.column[data-content="' + tab + '"]').addClass('is-active-tab');
    });

    // Trigger click even when link is tapped
    // $('.tabs .column .tab-button').on('touchstart', function(){
    //   $(this).trigger('click');
    // });
    // End of Tabs ---------------------

  }); // End of Doc Ready -------------------
})(jQuery);
