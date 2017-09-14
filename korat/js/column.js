var getPostsByCategory = function(_category)
{
  $('.content-category').find('.posts').addClass('jq-loading active');
  var _data = {
    action : 'get_posts_by_category',
    category: _category
  };
  $.ajax({
    url: _ajaxurl,
    type: 'POST',
    dataType: 'json',
    data: _data
  })
  .done(function(data){
    var i, l, a, _html = '';
    if(data && data.list && data.list.length) {
      for(i = 0, l = data.list.length; i < l; i++){
        a = data.list[i];
        _html += '<div class="swiper-slide">';
        _html += '<a href="' + a.url + '">';
        _html += '<div class="image"><img src="' + a.img + '"></div>';
        _html += '<div class="font-en date">' + a.date + '</div>';
        _html += '<div class="title">' + a.title + '</div>';
        _html += '</a>';
        _html += '</div>';
      }
      $('.swiper-container-' + _category).find('.swiper-wrapper').html(_html);
      if(l > 5){
        new Swiper('.swiper-container-' + _category, {
          autoHeight: true,
          autoplay: 3500,
          autoplayDisableOnInteraction: false,
          centeredSlides: true,
          loop: true,
          loopAdditionalSlides: 3,
          //pagination: '.swiper-pagination-members',
          //paginationClickable: true,
          slidesPerView: 5,
          spaceBetween: 0,
          speed: 500,

          breakpoints: {
            480: {
              slidesPerView: 1
            },
            767: {
              slidesPerView: 3
            },
            991: {
              slidesPerView: 5
            }
          }
        });
      }
      else{
        $('.swiper-container-' + _category).addClass('normal');
      }
    }
  })
  .always(function(){
    $('.content-category').find('.posts').removeClass('active');
    setTimeout(function(){
      $('.content-category').find('.posts').removeClass('jq-loading');
    }, 500)
  })
}

$(function(){
  //pickup
  if($('.content-pickup').size()){
    _global.pickup = new Swiper('.swiper-container-pickup', {
      autoHeight: true,
      autoplay: 3500,
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
      });

    $(window).resize(function(){
      var _texts = $('.content-pickup').find('.texts');
      _texts.css({'height': 'auto'});
      setTimeout(function(){
        _texts.tile();
      }, 10);
    })
    .trigger('resize');
  }

  //categories
  $('.content-category').find('.categories').find('.num-jq').each(function(){
    $('.content-category').find('.posts').find('.container').append('<div class="swiper-container swiper-container-' + $(this).data('category') + '"><div class="swiper-wrapper">' + $(this).data('category') + '</div></div>');
  });

  $('.content-category').find('.categories').find('.num-jq').click(function(){
    var _category = $(this).data('category');
    $('.content-category').find('.posts').find('.swiper-container').hide();

    //off
    if($(this).hasClass('active')){
      $(this).removeClass('active');
      $(this).next('.link').removeClass('active');
      $('.content-category').find('.posts').removeClass('posts-active');
    }
    //on
    else{
      $('.content-category').find('.categories').find('.active').removeClass('active');
      $(this).addClass('active');
      $(this).next('.link').addClass('active');
      $('.content-category')
        .find('.posts').addClass('posts-active')
          .find('.swiper-container-' + _category).show();

      if(!$(this)[0]._get_posts){
        getPostsByCategory(_category);
        $(this)[0]._get_posts = true;
      }
    }
  })

});
