import Glide from '@glidejs/glide'

export default {
  init() {
    // JavaScript to be fired on the home page
    $(document).ready(function(){

      $('#nav-icon3').click(function(){
        $(this).toggleClass('open');
      });

      let testimonials = new Glide('.glide', {
        type: 'slider',
        startAt: 0,
        perView: 2,
      });
      testimonials.mount();
    })
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
