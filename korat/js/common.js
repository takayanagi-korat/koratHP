var _global = {};

jQuery.extend({
  stringify  : function stringify(obj) {
    if ("JSON" in window) {
      return JSON.stringify(obj);
    }

    var t = typeof (obj);
    if (t != "object" || obj === null) {
      // simple data type
      if (t == "string") obj = '"' + obj + '"';

      return String(obj);
    } else {
      // recurse array or object
      var n, v, json = [], arr = (obj && obj.constructor == Array);

      for (n in obj) {
        v = obj[n];
        t = typeof(v);
        if (obj.hasOwnProperty(n)) {
          if (t == "string") {
            v = '"' + v + '"';
          } else if (t == "object" && v !== null){
            v = jQuery.stringify(v);
          }

          json.push((arr ? "" : '"' + n + '":') + String(v));
        }
      }

      return (arr ? "[" : "{") + String(json) + (arr ? "]" : "}");
    }
  }
});

//smooth scroll
var windowScrollTo = function(_target, _offset, _speed)
{
  var _top = 0;
  try{
    _top = _target.offset().top;
  }catch(e){
  }
  if(_offset == null){
    _offset = 0;
  }
  _offset -= $('.site-header').outerHeight();
  if(_speed == null){
    _speed = 500;
  }
  _top = Math.max(0, _top + _offset);
  $('body, html').animate({scrollTop:_top}, _speed, 'swing');
}

var formSetStore = function()
{
  var _id = $('.hentry').attr('id').replace('post-', '');
  var _store = {};
  $('.content-form')
    .find('select').each(function(){
      _store[$(this).attr('name')] = $(this).val();
    }).end()
    .find('input[type="text"]').each(function(){
      _store[$(this).attr('name')] = $(this).val();
    }).end()
    .find('input[type="tel"]').each(function(){
      _store[$(this).attr('name')] = $(this).val();
    }).end()
    .find('input[type="email"]').each(function(){
      _store[$(this).attr('name')] = $(this).val();
    }).end()
    .find('textarea').each(function(){
      _store[$(this).attr('name')] = $(this).val();
    });
    _store.update = Number(new Date());
    store.set('form' + _id, $.stringify(_store));
}

var _ua = (function(u)
{
  return {
    Touch:(u.indexOf("windows") != -1 && u.indexOf("touch") != -1 && u.indexOf("tablet pc") == -1)
      || u.indexOf("ipad") != -1
      || (u.indexOf("android") != -1 && u.indexOf("mobile") == -1)
      || (u.indexOf("firefox") != -1 && u.indexOf("tablet") != -1)
      || u.indexOf("kindle") != -1
      || u.indexOf("silk") != -1
      || u.indexOf("playbook") != -1
      || (u.indexOf("windows") != -1 && u.indexOf("phone") != -1)
      || u.indexOf("iphone") != -1
      || u.indexOf("ipod") != -1
      || (u.indexOf("android") != -1 && u.indexOf("mobile") != -1)
      || (u.indexOf("firefox") != -1 && u.indexOf("mobile") != -1)
      || u.indexOf("blackberry") != -1
  }
})(window.navigator.userAgent.toLowerCase());

var _img = {};
_img.loaded = {};

$(function(){
  $.fn.hasClassRegEx = function(regex){
		var classes = $(this).attr('class');
		if(!classes || !regex){ return false; }
		classes = classes.split(' ');
		var l = classes.length;
		for(var i = 0; i < l; i++){
			if(classes[i].match(regex)){
        return true;
      }
		}
		return false;
	};

  //touch detection
  if(!_ua.Touch){
    $('body').addClass('touch-false');
  }
  else{
    //hover action
    /*
    var touched = false;
    var touch_timeout;
    $('a')
      .bind('touchstart', function(){
        var _this = $(this);
        $(this).addClass('hover');
        clearTimeout(touch_timeout);
        touch_timeout = setTimeout(function(){
          _this.removeClass('hover');
        }, 750)
      })
      .bind('touchmove touchend', function(){
        clearTimeout(touch_timeout);
        $(this).removeClass('hover');
      });
    */
  }


  //smooth scroll
  $('a[href^="#"]').click(function() {
    windowScrollTo($($(this).attr('href')));
    return false;
  });

  //menu
  $('.site-header').find('.menu').click(function(){
    $('body').toggleClass('menu-open');
    if($('body').hasClass('menu-open')){
      $('.menu-hover').each(function(i){
        $(this).css({top: (60 + i * 50) + 'px'});
      });
      $('.menu-hover-bg').show();
    }
    else{
      $('.menu-hover').each(function(i){
        $(this).css({top: '-50px'});
      });
      $('.menu-hover-bg').hide();
    }
    return false;
  });
  $('body').append('<div class="site-menu"></div>');
  $('.site-navigation').find('li').each(function(){
    if($(this).data('sp') > 1 && $('.site-menu').find('.menu-hover').eq($(this).data('sp') - 2).size()){
      $('.site-menu').find('.menu-hover').eq($(this).data('sp') - 2).after($(this).find('a').clone().addClass('menu-hover'));
    }
    else{
      $('.site-menu').append($(this).find('a').clone().addClass('menu-hover'));
    }
  });
  $('.site-menu').append($('.site-footer').find('.privacy-policy').find('a').clone().addClass('menu-hover').text('個人情報保護'));
  $('.menu-hover-bg').bind('click touchstart', function(e){
    e.preventDefault();
    $('.site-header').find('.menu').trigger('click');
    return false;
  });

  //visual
  if($('.subvisual').size()){
    var _visual = $('.subvisual');
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
          var _id = $(this).data('id')
          _img.loaded[_id] = 1;
          setTimeout(function(){
            $('#main-image' + _id).addClass('image-loaded');
          }, 1);
        })
        .attr('src', _src);
    });
  }

  //form
  if(!$('.content-form').find('.button-send').size()){
    $('.content-form')
    .find('input.tel').attr({'type': 'tel'}).end()
    .find('input[name="mail"]').attr({'type': 'email'}).end()
  }
  $('.content-form')
    .find('.error').each(function(){
      var _p = $(this).parent();
      if(!_p[0]._checked){
        _p[0]._checked = 1;
        var _size = _p.find('input').size();
        if(_size > 1){
          var _msg = {};
          var _msgs = [];
          _p.find('.error').each(function(){
            var _text = $(this).text();
            if(_text == '未入力です。'){
              _text = '未入力の項目があります。';
            }
            if(!_msg[_text]){
              _msg[_text] = 1;
              _msgs.push(_text);
            }
          });
          var _e = _p.find('.error').last().text(_msgs.join('')).addClass('active');
          _p.find('input').last().after(_e);
        }
        else{
          $(this).addClass('active');
        }
      }
    }).end()
    .find('form').attr({'novalidate': 'novalidate'}).end()
    .find('select')
      .find('option').eq(0).text('選択').end().end().end()
    .find('input.tel').each(function(i){
      var _e = $(this).next();
      if(_e.size() && _e.hasClass('error') && !_e.hasClassRegEx(/active\d+/)){
        $(this).parent().find('.error').last().addClass('active' + (i + 1));
      }
    }).end()
    .find('.button-confirm').click(function(){
      var _p = $(this).parent();
      _p.addClass('jq-loading');
      setTimeout(function(){
        _p.addClass('active');
      }, 1);
      $(this).closest('form').find('.form-confirm').click();
      return false;
    }).end()
    .find('.button-back').click(function(){
      var _p = $(this).parent();
      _p.addClass('jq-loading');
      setTimeout(function(){
        _p.addClass('active');
      }, 1);
      $(this).closest('form').find('.form-back').click();
      return false;
    }).end()
    .find('.button-send').click(function(){
      var _p = $(this).parent();
      _p.addClass('jq-loading');
      setTimeout(function(){
        _p.addClass('active');
      }, 1);
      $(this).closest('form').find('.form-send').click();
      return false;
    }).end()

  if($('.content-form').find('.error').size()){
    setTimeout(function(){
      windowScrollTo($('.content-form').find('.error').eq(0).parent(), -20);
    }, 250);
  }

  //form auto input
  if($('.content-form').find('input[name="submitConfirm"]').size() && store.enabled){
    $('.content-form')
      .find('select').bind('change', formSetStore).end()
      .find('input[type="text"]').bind('input', formSetStore).end()
      .find('input[type="tel"]').bind('input', formSetStore).end()
      .find('input[type="email"]').bind('input', formSetStore).end()
      .find('textarea').bind('input', formSetStore);

    //init, back
    if(!$('.content-form').find('.error').size() && !document.referrer.match(/.+\/confirm$/)){
      var _id = $('.hentry').attr('id').replace('post-', '');
      var _form_input = store.get('form' + _id);
      if(_form_input){
        var _store = $.parseJSON(_form_input);
        if(_store.update && Number(new Date()) - _store.update < 1000*60*5){
          var _p = $('.content-form');
          for(var i in _store){
            _p.find('[name="' + i + '"]').val(_store[i]);
          }
        }
      }
    }
  }

  //animation
  if($('.appear').size()){
    $('.appear').appear();
    $(document.body).on('appear', '.appear', function(e, $affected) {
       $(this).addClass('appeared')
     });

    setTimeout(function(){
      $.force_appear();
    }, 250);
  }
});
