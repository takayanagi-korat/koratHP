$(function(){
  if($('.content-member').size() && $('.swiper-container-member').size()){
    _global.pickup = new Swiper('.swiper-container-member', {
      autoHeight: true,
      autoplay: 5000,
      autoplayDisableOnInteraction: false,
      centeredSlides: true,
      loop: true,
      loopAdditionalSlides: 6,
      //pagination: '.swiper-pagination-members',
      //paginationClickable: true,
      slidesPerView: 6,
      spaceBetween: 30,
      speed: 500,

      breakpoints: {
        640: {
          slidesPerView: 1.5
        },
        767: {
          slidesPerView: 2.5
        },
        991: {
          slidesPerView: 3.5
        },
        1199: {
          slidesPerView: 4.2
        },
        1500: {
          slidesPerView: 4.8
        }
      }
    });

    /*
    $(window).resize(function(){
      var _texts = $('.content-pickup').find('.texts');
      _texts.css({'height': 'auto'});
      setTimeout(function(){
        _texts.tile();
      }, 10);
    })
    .trigger('resize');
    */
  }

  if($('.content-member').find('.members').size()){
    $(window).resize(function(){
      var _texts = $('.content-member').find('.members').find('.box');
      _texts.css({'height': 'auto'});
      setTimeout(function(){
        _texts.tile();
      }, 10);
    })
    .trigger('resize');
  }
});
