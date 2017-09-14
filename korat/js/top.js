var _windowResize = function()
{
  var _w = window.innerWidth ? window.innerWidth: $(window).width();
  var _h = window.innerHeight ? window.innerHeight: $(window).height();
  var _header_h = $('.site-header').outerHeight();

  if(_global._w != _w){
    _global._w = _w;
    $('.mainvisual').height(_h - _header_h);

    var _content_h = Math.min(400,_w/3);
    if(_w <= 767) {
      _content_h = Math.min(300,_w/2);
    }
    $('.content').find('a').height(_content_h);
  }
}

var _loaded = function()
{
  setTimeout(function(){
    $('.mainvisual')
      .find('.image').addClass('image-loaded');
  }, 100);

  setTimeout(function(){
    $('.mainvisual')
      .find('.message').addClass('image-loaded').end()
      .find('.copy').addClass('image-loaded');
  }, 500);
}

_img.loaded.count = 0;
$(function(){
  $(window)
    .resize(_windowResize)
    .bind('onorientationchange', _windowResize)
    .trigger('resize');

  //visual
  var _visual = $('.mainvisual');
  _visual.find('.image').each(function(i){
    _img.loaded[i] = 0;
    var _container = $(this);
    var _src = $(this).find('img').attr('src');
    $(this)
      .attr('id', 'main-image' + i)
      .css('background-image', 'url(' + _src + ')');

    var _$img = $('<img data-id="' + i + '">');
    _$img
      .load(function(){
        _img.loaded.count++;
        if(_img.loaded.count == 4){
          _loaded();
        }
      })
      .attr('src', _src);
  });

  _visual.find('img').each(function(i){
    var _src = $(this).attr('src');
    var _$img = $('<img data-id="' + i + '">');
    _$img
      .load(function(){
        _img.loaded.count++;
        if(_img.loaded.count == 4){
          _loaded();
        }
      })
      .attr('src', _src);
  });

  //content
  _visual = $('.content');
  _visual.find('.image').each(function(i){
    var _container = $(this);
    var _src = $(this).find('img').attr('src');
    $(this)
      .attr('id', 'main-image' + i)
      .css('background-image', 'url(' + _src + ')');

    var _$img = $('<img data-id="' + i + '">');
    _$img
      .load(function(){
        _container.addClass('image-loaded');
      })
      .attr('src', _src);
  });

});
