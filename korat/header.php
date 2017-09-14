<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package korat
 */
$home_url = esc_url(home_url());

//favicon
$favion_ico = '';
$favion_png = '';
$args = array(
  'numberposts' => 2,
  'post_type' => 'favicon'
);
$customPosts = get_posts($args);
if($customPosts){
  foreach($customPosts as $post){
    setup_postdata( $post );
    $title = get_the_title();
    $meta_values = get_post_meta( $post->ID );
    if($title == 'favicon.ico'){
      $favion_ico = $meta_values['wpcf-favicon_image'][0];
    }
    else if($title == 'apple-touch-icon.png'){
      $favion_png = $meta_values['wpcf-favicon_image'][0];
    }
  }
}
wp_reset_postdata();

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
<meta name="format-detection" content="telephone=no, email=no, address=no">
<?php if($favion_ico): ?>
<link rel="shortcut icon" href="<?php echo $favion_ico; ?>">
<?php endif; ?>
<?php if($favion_png): ?>
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo $favion_png; ?>">
<?php endif; ?>
<link rel="stylesheet" href="<?php echo THEMEPATH; ?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo THEMEPATH; ?>/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo THEMEPATH; ?>/css/colorbox.css">
<link rel="stylesheet" href="<?php echo THEMEPATH; ?>/css/swiper.min.css">
<script type="text/javascript" src="<?php echo THEMEPATH; ?>/js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="<?php echo THEMEPATH; ?>/js/jquery.appear.js"></script>
<script type="text/javascript" src="<?php echo THEMEPATH; ?>/js/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="<?php echo THEMEPATH; ?>/js/jquery.tile.js"></script>
<script type="text/javascript" src="<?php echo THEMEPATH; ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo THEMEPATH; ?>/js/store.min.js"></script>
<script type="text/javascript" src="<?php echo THEMEPATH; ?>/js/swiper.min.js"></script>
<script type="text/javascript" src="<?php echo THEMEPATH; ?>/js/common.js?20170428"></script>
<?php if(is_page('top')): ?>
<script type="text/javascript" src="<?php echo THEMEPATH; ?>/js/top.js?20170428"></script>
<?php endif; ?>
<?php if(is_page('products')): ?>
<script type="text/javascript" src="<?php echo THEMEPATH; ?>/js/products.js?20170428"></script>
<?php endif; ?>
<?php if(is_parent_slug('recruit') || is_parent_slug('contact') || is_page('contact')): ?>
<script type="text/javascript" src="<?php echo THEMEPATH; ?>/js/form.js?20170428"></script>
<?php endif; ?>
<?php if(is_archive() || is_category('column') || in_category(array('column'))): ?>
<script type="text/javascript" src="<?php echo THEMEPATH; ?>/js/column.js?20170428"></script>
<?php endif; ?>
<?php if(is_page('recruit')): ?>
<script type="text/javascript" src="<?php echo THEMEPATH; ?>/js/recruit.js?20170428"></script>
<?php elseif(is_single()): ?>
<script type="text/javascript" src="<?php echo THEMEPATH; ?>/js/single.js?20170428"></script>
<?php endif; ?>
<!--[if lt IE 10]>
<link rel="stylesheet" href="<?php echo THEMEPATH; ?>/css/ie.css">
<![endif]-->
<!--[if lt IE 9]>
<script src="<?php echo THEMEPATH; ?>/js/html5shiv.min.js"></script>
<script src="<?php echo THEMEPATH; ?>/js/css3-mediaqueries.js"></script>
<script src="<?php echo THEMEPATH; ?>/js/respond.min.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrapper">
  <header class="site-header">
    <div class="clearfix">
      <h1 class="site-title"><a href="<?php echo $home_url; ?>/">KORAT</a></h1>
      <nav class="site-navigation">
        <ul class="display-table">
          <li<?php if(is_page('services')): ?> class="current"<?php endif; ?> data-sp="1"><a href="<?php echo $home_url; ?>/services/">業務紹介</a></li>
          <li<?php if(is_page('company')): ?> class="current"<?php endif; ?> data-sp="2"><a href="<?php echo $home_url; ?>/company/">企業情報</a></li>
          <li<?php if(is_page('recruit') || is_parent_slug('recruit')): ?> class="current"<?php endif; ?> data-sp="4"><a href="<?php echo $home_url; ?>/recruit/">採用</a></li>
          <li<?php if(is_category('column') || in_category(array('column'))): ?> class="current"<?php endif; ?> data-sp="3"><a href="<?php echo $home_url; ?>/column/">コラットライフ</a></li>
          <li<?php if(is_page('products')): ?> class="current"<?php endif; ?> data-sp="5"><a href="<?php echo $home_url; ?>/products/">製品</a></li>
          <li<?php if(is_page('contact') || is_parent_slug('contact')): ?> class="current"<?php endif; ?> data-sp="6"><a href="<?php echo $home_url; ?>/contact/">お問い合わせ</a></li>
        </ul>
      </nav>
    </div>
    <a href="javascript:void(0)" class="menu"><i class="fa fa-bars"></i><i class="fa fa-times"></i></a>
  </header>

  <div class="contents">
