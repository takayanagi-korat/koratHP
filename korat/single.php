<?php
  if(in_category(array('column'))){
    get_template_part('single-column', false);
  }
  else{
    get_template_part('single-normal', 'normal');
  }
?>
