<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package korat
 */
get_header(); ?>

<div class="subvisual subvisual">
  <div class="en">KORAT Engineer Blog</div>
  <h2 class="title font-noto">コラットライフ</h2>
  <div class="image hide-sm"><img src="<?php echo THEMEPATH; ?>/images/column/subvisual_img01.jpg" alt=""></div>
  <div class="image block-sm"><img src="<?php echo THEMEPATH; ?>/images/column/subvisual_img01_sp.jpg" alt=""></div>
</div>

<div class="content-category">
  <?php
    $cat_html = '';
    $cat_all = get_terms( "category", "fields=all&get=all" );
    $cat_column = get_category_by_slug('column')->cat_ID;
    foreach($cat_all as $a):
  ?>
  <?php if($a->slug != 'column' && $a->slug != 'pickup'): ?>
  <?php
    $count = get_column_count($cat_column, $a->term_id);
    if($count){
      $cat_html = '<a href="' . get_category_link($a->term_id) . '" class="num">' . $a->name . '</a>';
    }
  ?>
  <?php endif; ?>
  <?php endforeach; ?>
  <?php if($cat_html): ?>
  <div class="categories"><?php echo $cat_html; ?></div>
  <?php endif; ?>
  <div class="posts">
  </div>
</div>

<div class="container container-s">
  <div class="content">
    <?php
    while ( have_posts() ) : the_post(); ?>

    <?php
      $img = '';
      if (has_post_thumbnail()) {
        $thumbnail_id = get_post_thumbnail_id();
        $eye_img = wp_get_attachment_image_src( $thumbnail_id , 'full' );
        $img = $eye_img[0];
      }
      $categories = get_the_category();
      $category = '';
      if($categories && count($categories)){
        foreach($categories as $a){
          if($a->slug != 'column' && $a->slug != 'pickup'){
            $category .= '<span class="badge">' . $a->name . '</span>' . "\n";
          }
        }
      }
    ?>

    <?php include( STYLESHEETPATH . '/social.php' ); ?>
    <span class="badge badge-blue font-en date"><?php echo get_the_date('Y.m.d'); ?></span>
    <div class="content-title content-title-s">
      <h3 class="title"><?php the_title(); ?></h3>
    </div>
    <?php if($img): ?>
    <div class="image"><img src="<?php echo $img; ?>"></div>
    <?php endif; ?>
    <div class="font16 line2 text">
      <?php
        $contents = get_the_content();
        $lines = explode("\n", $contents);
        $html = '';
        $gallery_id = 1;
        foreach($lines as $a){
          //gallery
          if(preg_match('/\[gallery.*?ids="(.+?)"/', $a, $m)){
            $images = explode(',', $m[1]);
            $gallery_class = 'gallery' . count($images);
            if(count($images) >= 3){
              $gallery_class = ' gallery3';
            }
            $html .= '<div class="gallery' . $gallery_class . '">';
            $html .= '<ul class="clearfix">';
            foreach($images as $image_id){
              $image = get_image_info($image_id);
              $html .= '<li class="image">';
              //$html .= '<a href="' . $image['src'] . '" rel="gallery' . $gallery_id . '"><img src="' . $image['src'] . '" alt=""></a>';
              $html .= '<img src="' . $image['src'] . '" alt="">';
              $html .= '</li>';
            }
            $html .= '</ul">';
            $html .= '</div>';
            $gallery_id++;
          }
          //image
          else if(preg_match('/(.*?)<img.*?src="(.+?)".*?>(.*?)/', $a, $m)){
            $image_id = get_attachment_id($m[2]);
            $image = get_image_info($image_id);
            $src = $image['src'];
            if(!$src){
              $src = $m[2];
            }
            $html .= $m[1] . '<div class="image">';
            $html .= '<img src="' . $src . '" alt="">';
            $html .= '</div>' . $m[3];
            $html .= '<br>';
          }
          //text
          else{
            $html .= $a;
            $html .= '<br>';
          }
        }
        echo $html;
      ?>
    </div>

    <?php endwhile; ?>
  </div>

  <?php
	$prevpost = get_adjacent_post(false, '', true);
	$nextpost = get_adjacent_post(false, '', false);
	if( $prevpost or $nextpost ):
	?>
	<!--
  <div class="prev-next clearfix">
    <ul class="display-table-fixed">
    	<?php if($prevpost): ?>
  		<a href="<?php echo get_permalink($prevpost->ID); ?>" class="prev">
        <span class="font-en prev-title">PREV</span>
        <?php echo get_the_post_thumbnail($prevpost->ID, array(80,80)); ?>
        <p>
          <span class="font-en badge badge-blue date"><?php echo get_post_time('Y.m.d', false, $prevpost->ID); ?></span><br>
          <span class="title"><?php echo get_the_title($prevpost->ID); ?></span>
        </p>
      </a>
      <?php else: ?>
      <span></span>
      <?php endif; ?>
      <?php if($nextpost): ?>
  		<a href="<?php echo get_permalink($nextpost->ID); ?>" class="next">
        <span class="font-en next-title">NEXT</span>
        <?php echo get_the_post_thumbnail($nextpost->ID, array(80,80)); ?>
        <p>
          <span class="font-en badge badge-blue date"><?php echo get_post_time('Y.m.d', false, $nextpost->ID); ?></span><br>
          <span class="title"><?php echo get_the_title($nextpost->ID); ?></span>
        </p>
      </a>
      <?php else: ?>
      <span></span>
    	<?php endif; ?>
    </ul>
  </div>
  -->
	<?php endif; ?>
</div>


<?php
get_footer();
