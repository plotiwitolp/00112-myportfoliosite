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

    // start paralax
    $(window).on('mousemove', (e) => {
      let w = $(window).width();
      let h = $(window).height();

      let offsetX = 0.5 - e.pageX / w;
      let offsetY = 0.5 - e.pageY / h;

      $('.parallax').each(function (i, el) {
        let offset = parseInt($(el).data('offset'));

        let translate = 'translate3d(' + Math.round(offsetX * offset) + 'px,' + Math.round(offsetY * offset) + 'px, 0px)';

        $(el).css({
          transform: translate,
        });
      });
    });
    // end paralax

    // start top-menu
    $('body').on('click', '.menu-burger', function () {
      $('.regular-menu').toggleClass('regular-menu_active');
    });
    $('body').on('click', '#menu li', function () {
      $('.regular-menu').toggleClass('regular-menu_active');
    });
    // end top-menu

    // END ALL
  });
})(jQuery);
