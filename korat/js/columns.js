$(function(){
  if($('.content-pickup').size()){
    _global.pickup = new Swiper('.swiper-container-pickup', {
      autoHeight: true,
      autoplay: 5000,
      autoplayDisableOnInteraction: false,
      centeredSlides: true,
      loop: true,
      loopAdditionalSlides: 3,
      //pagination: '.swiper-pagination-members',
      //paginationClickable: true,
      slidesPerView: 3,
      spaceBetween: 30,
      speed: 500,

      breakpoints: {
        480: {
          slidesPerView: 1
        },
        767: {
          centeredSlides: false,
          slidesPerView: 2
        },
        991: {
          slidesPerView: 2.4
        }
      }
    });

    $('.content-pickup')
      .on('mouseenter', 'a', function(){
        _global.pickup.stopAutoplay();
      })
      .on('mouseleave', 'a', function(){
        _global.pickup.startAutoplay();
      })


    $(window).resize(function(){
      var _texts = $('.content-pickup').find('.texts');
      _texts.css({'height': 'auto'});
      setTimeout(function(){
        _texts.tile();
      }, 10);
    })
    .trigger('resize');
  }
});
