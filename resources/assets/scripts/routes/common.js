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

    function smoothScroll (item) {
      document.querySelector(item).scrollIntoView({
        behavior: 'smooth',
      });
    }

    jQuery('a[href^="#"]').click(function(){
      let h = jQuery(this).attr('href');
      console.log('href+' + h);
      // https://css-tricks.com/snippets/jquery/smooth-scrolling/
      smoothScroll(h);
    })



  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
