$(function(){
  $(window).resize(function(){
    $('.gallery').find('.image').css({'height': 'auto'});
    setTimeout(function(){
      $('.gallery').each(function(){
        $(this).find('.image').tile();
      });
    }, 10);
  }).trigger('resize');
})
