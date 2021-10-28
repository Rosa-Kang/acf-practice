/**
 * File: gallery.js
 *
 * Templates: page-suites.php
 *
 * Slider (swiper.js)
 *
 */

/**
 * Multiple Swiper Slides
 * with same configuration and multiple navigation buttons
 *
 * @require Swiper v4.X
 * @author Pedro Britto
 */
(function () {
  const multipleSwiperSlides = function() {
    let sliderMain = document.querySelectorAll('.swiper-container.js-slider--main')
    let sliderNav  = document.querySelectorAll('.swiper-container.js-slider--nav')
  
    // Arrays to hold swiper instances
    let mainArray  = [];
    let navArray   = [];
  
    // Slider Main
    sliderMain.forEach(function(element, i) {
      // Push swiper instance to array
      mainArray.push(
        new Swiper(element, {
          observer: true,
          observeParents: true,
          loop: true,
          loopedSlides: 12, 
          // Keyboard control
          keyboard: {
            enabled: true,
          },
        })
      );
    });
  
    // Slider Nav
    sliderNav.forEach(function(element, i) {
      var self = sliderNav;
      // Push swiper instance to array
      navArray.push(
        new Swiper(element, {
          observer: true,
          observeParents: true,
          slidesPerView: 4,
          loop: true,
          loopedSlides: 12,
          slideToClickedSlide: true,
          spaceBetween: 10,
          navigation: {
            nextEl: self[i].querySelector('.swiper-button-next'),
            prevEl: self[i].querySelector('.swiper-button-prev')
          },
          breakpoints: {
            1024: {
              slidesPerView: 3,
            },
          },
        })
      );
    });
  
    const checkOnPage = function() {
      if (sliderMain.length > 0 && sliderNav.length > 0) {
        let numberOfSlides = mainArray.length || navArray.length || 0;
    
        if (mainArray.length !== navArray.length) {
          console.warn('multipleSwiperSlides: Number of main slides and nav slides is different. Expect incorrect behaviour.');
        }
    
        for (let i = 0; i < numberOfSlides ; i++ ) {
          mainArray[i].controller.control = navArray[i];
          navArray[i].controller.control  = mainArray[i];
        }
      }
    }
  
    checkOnPage();
  }
  
  multipleSwiperSlides();
})();
