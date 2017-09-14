var _timer, _capthca_w;
var _windowResize = function()
{
  clearTimeout(_timer);
  _timer = setTimeout(function(){
    if(_capthca_w != $('.captcha').width()){
      _capthca_w = $('.captcha').width();
      $('.puzzle').find('a').find('img').click();
    }
  },500)
}

$(function(){
  _capthca_w = $('.captcha').width();
  $(window)
    .resize(_windowResize);

  if($('input[name="capy_captchakey"]').val()){
    windowScrollTo($('.captcha-wrap'), -20, 0);
  }
})
