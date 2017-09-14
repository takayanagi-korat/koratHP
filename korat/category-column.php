<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package korat
 */
get_header(); ?>

<div class="subvisual subvisual-l">
  <div class="en">KORAT Engineer Blog</div>
  <h2 class="title font-noto">コラットライフ</h2>
  <div class="image hide-sm"><img src="<?php echo THEMEPATH; ?>/images/column/subvisual_img01.jpg" alt=""></div>
  <div class="image block-sm"><img src="<?php echo THEMEPATH; ?>/images/column/subvisual_img01_sp.jpg" alt=""></div>
</div>

<div class="content-category">
  <?php
    $cat_html = '';
    $cat_id= get_query_var('cat');
    $cat = get_category($cat_id);
    $cat_slug = $cat->category_nicename;

    $cat_column = get_category_by_slug('column')->cat_ID;
    $cat_all = get_terms( "category", "fields=all&get=all" );
    foreach($cat_all as $a):
  ?>
  <?php if($a->slug != 'column' && $a->slug != 'pickup'): ?>
  <?php
    $count = get_column_count($cat_column, $a->term_id);
    if($count):
  ?>
  <?php
    $cat_html .= '<a href="javascript:void(0)" class="num num-jq';
    if($a->slug == $cat_slug){
      $cat_html .= ' current';
    }
    $cat_html .= ' hide-sm" data-category="' . $a->slug . '">' . $a->name . '</a>';
    $cat_html .= '<a href="' . get_category_link($a->term_id) . '" class="link hide-sm"><span>一覧</span> <i class="fa fa-angle-right"></i></a>';
    $cat_html .= '<a href="' . get_category_link($a->term_id) . '" class="num num-link';
    if($a->slug == $cat_slug){
      $cat_html .= ' current';
    }
    $cat_html .= ' inline-block-sm">' . $a->name . '</a>';
  ?>
  <?php endif; ?>
  <?php endif; ?>
  <?php endforeach; ?>
  <?php if($cat_html): ?>
  <div class="categories"><?php echo $cat_html; ?></div>
  <?php endif; ?>
  <div class="posts hide-sm">
    <div class="container">

    </div>
  </div>
</div>

<div class="container">
  <?php if(show_page_number() == 1): ?>
  <?php query_posts( 'category_name=pickup' ); ?>
  <div class="content content-pickup">
    <div class="swiper-container swiper-container-pickup">
      <div class="swiper-wrapper">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="swiper-slide">
          <?php
            $img = THEMEPATH . '/images/column/noimage.png';
            if (has_post_thumbnail()) {
              $thumbnail_id = get_post_thumbnail_id();
              $eye_img = wp_get_attachment_image_src( $thumbnail_id , 'full' );
              $img = $eye_img[0];
            }
            $url = get_the_permalink();
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
          <a href="<?php echo $url; ?>" class="clearfix column appear">
            <div class="image">
              <img src="<?php echo $img; ?>" alt="">
            </div>
            <div class="box">
              <div class="texts">
                <div class="title-date">
                  <span class="badge badge-blue font-en date"><?php echo get_the_date('Y.m.d'); ?></span>
                  <?php echo $category; ?><br>
                  <h3 class="title"><?php echo get_the_title(); ?></h3>
                </div>
                <h4 class="text">
                  <?php echo excerpt(40); ?>
                </h4>
              </div>
              <div class="button button-orange">
                <span>記事を見る</span>
              </div>
            </div>
          </a>
        </div>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </div>
  <?php wp_reset_query(); ?>
  <?php endif; ?>

  <div class="content content-news">
    <div class="content-title content-title-l">
      <div class="en">News</div>
      <h3 class="title">新着記事</h3>
    </div>
    <?php
    if ( have_posts() ) : ?>
      <?php
      while ( have_posts() ) : the_post();
      $img = THEMEPATH . '/images/column/noimage.png';
      if (has_post_thumbnail()) {
        $thumbnail_id = get_post_thumbnail_id();
        $eye_img = wp_get_attachment_image_src( $thumbnail_id , 'full' );
        $img = $eye_img[0];
      }
      $url = get_the_permalink();
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
      <a href="<?php echo $url; ?>" class="column appear">
        <div class="clearfix">
          <div class="image hide-xs">
            <img src="<?php echo $img; ?>" alt="">
          </div>
          <div class="title-date">
            <span class="badge badge-blue font-en date"><?php echo get_the_date('Y.m.d'); ?></span>
            <?php echo $category; ?><br>
            <h3 class="title"><?php echo get_the_title(); ?></h3>
          </div>
          <div class="block-xs">
            <img src="<?php echo $img; ?>" alt="">
          </div>
          <div class="text">
            <h4 class="line2">
              <?php echo get_the_excerpt(); ?>
            </h4>
          </div>
        </div>
      </a>

      <?php endwhile; ?>
      <?php
        if (function_exists("pagination")) {
          pagination($additional_loop->max_num_pages);
        }
      ?>

    <?php else :

      get_template_part( 'template-parts/content', 'none' );

    endif; ?>
  </div>
</div>

<?php
//get_sidebar();
get_footer();
