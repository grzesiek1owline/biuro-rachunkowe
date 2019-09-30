export default {
  init() {
    // JavaScript to be fired on all pages


    //Ready
    jQuery(document).ready(function(){
      console.log('ready');
    })
    // Resize
    window.addEventListener('resize', function(){
      console.log('resize');
    });



    // Hamburger animation
    $('#nav-icon3').click(function(){
      toggleMenu();
    });

    function toggleMenu(){
      $('#nav-icon3').toggleClass('open');
      $('.js-hamburger__target').toggleClass('open');
    }

    // Scroll Header
    window.addEventListener('scroll', throttle(scrollHeader, 10));

    function throttle(fn, wait) {
      var time = Date.now();
      return function() {
        if ((time + wait - Date.now()) < 0) {
          fn();
          time = Date.now();
        }
      }
    }

    function scrollHeader(){
      let s = window.pageYOffset;
      if(s >= 200) {
        document.querySelector('header.header--page').classList.add('scroll');
      } else {
        document.querySelector('header.header--page').classList.remove('scroll');
      }
    }

   //SmoothScroll

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
            scrollTop: target.offset().top,
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



  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
