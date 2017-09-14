$(function(){
  $('a[data-wpt-id="wpcf-interview_a"]').hide();
  $('a[data-wpt-id="wpcf-interview_a"]').closest('.wpt-repctl').hide();
  $('a[data-wpt-id="wpcf-interview_image"]').hide();
  $('a[data-wpt-id="wpcf-interview_image"]').closest('.wpt-repctl').hide();
  $('a[data-wpt-id="wpcf-interview_schedule_text"]').hide();
  $('a[data-wpt-id="wpcf-interview_schedule_text"]').closest('.wpt-repctl').hide();
  $('a[data-wpt-id="wpcf-interview_schedule_image"]').hide();
  $('a[data-wpt-id="wpcf-interview_schedule_image"]').closest('.wpt-repctl').hide();

  //hide label
  $('div[data-wpt-id="wpcf-interview_a"]').find('.wpt-form-label').hide();
  $('div[data-wpt-id="wpcf-interview_image"]').find('.wpt-form-label').hide();

  //move item
  var _q = [];
  $('div[data-wpt-id="wpcf-interview_q"]').find('.wpt-field-item').each(function(){
    _q.push($(this).find('.wpt-repctl'));
  });
  $('div[data-wpt-id="wpcf-interview_a"]').find('.wpt-field-item').each(function(i){
    _q[i].before($(this));
  });
  $('div[data-wpt-id="wpcf-interview_image"]').find('.wpt-field-item').each(function(i){
    _q[i].before('<div class="wpt-image"></div>');
    _q[i].prev().append($(this));
  });

  _q = [];
  $('div[data-wpt-id="wpcf-interview_schedule_time"]').find('.wpt-field-item').each(function(){
    _q.push($(this).find('.wpt-repctl'));
  });
  $('div[data-wpt-id="wpcf-interview_schedule_text"]').find('.wpt-field-item').each(function(i){
    _q[i].before($(this));
  });
  $('div[data-wpt-id="wpcf-interview_schedule_image"]').find('.wpt-field-item').each(function(i){
    _q[i].before('<div class="wpt-image"></div>');
    _q[i].prev().append($(this));
  });

  //click action
  $('a.wpt-repadd[data-wpt-id="wpcf-interview_q"]').click(function(){
    setTimeout(function(){
      $('a.wpt-repadd[data-wpt-id="wpcf-interview_a"]')[0].click();
      $('a.wpt-repadd[data-wpt-id="wpcf-interview_image"]')[0].click();

      var _a = $('div[data-wpt-id="wpcf-interview_a"]').find('.wpt-field-item').last()
      var _image = $('div[data-wpt-id="wpcf-interview_image"]').find('.wpt-field-item').last()

      _a.find('.wpt-repctl').remove();
      _image.find('.wpt-repctl').remove();

      var _p = $('div[data-wpt-id="wpcf-interview_q"]').find('.js-wpt-repdelete[data-wpt-id="wpcf-interview_q"]').last().closest('.wpt-repctl');

      _p
        .before(_a)
        .before('<div class="wpt-image"></div>');
      _p
        .prev().append(_image);
    },1)
  });


  $('a.wpt-repadd[data-wpt-id="wpcf-interview_schedule_time"]').click(function(){
    setTimeout(function(){
      $('a.wpt-repadd[data-wpt-id="wpcf-interview_schedule_text"]')[0].click();
      $('a.wpt-repadd[data-wpt-id="wpcf-interview_schedule_image"]')[0].click();

      var _a = $('div[data-wpt-id="wpcf-interview_schedule_text"]').find('.wpt-field-item').last()
      var _image = $('div[data-wpt-id="wpcf-interview_schedule_image"]').find('.wpt-field-item').last()

      _a.find('.wpt-repctl').remove();
      _image.find('.wpt-repctl').remove();

      var _p = $('div[data-wpt-id="wpcf-interview_schedule_time"]').find('.js-wpt-repdelete[data-wpt-id="wpcf-interview_schedule_time"]').last().closest('.wpt-repctl');

      _p
        .before(_a)
        .before('<div class="wpt-image"></div>');
      _p
        .prev().append(_image);
    },1)
  });

  //init
  $('#wpcf-group-interview').show();

  //disable clumn category
  $('#in-popular-category-2')
    .prop('checked', true)
    //.attr('disabled', 'disabled');
    .closest('li').hide();
  $('#in-category-2')
    .prop('checked', true)
    //.attr('disabled', 'disabled');
    .closest('li').hide();
  $('#categorychecklist').show();
  $('#categorychecklist-pop').show();
});
