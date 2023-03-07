(function ($) {
  $(document).ready(function () {
    // START ALL

    // start scroll effects
    let isScroll = 0,
      targetScroll = 100;
    $(window).on('scroll', function () {
      if (isScroll === 0 && $(this).scrollTop() >= targetScroll) {
        isScroll = 1;
        $('header').addClass('header_moved');
      } else if (isScroll === 1 && $(this).scrollTop() < targetScroll) {
        isScroll = 0;
        $('header').removeClass('header_moved');
      }
    });
    // end scroll effects

    // END ALL
  });
})(jQuery);
