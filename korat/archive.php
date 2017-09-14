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
  <div class="categories">
    <?php
      $cat_id= get_query_var('cat');
      $cat = get_category($cat_id);
      $cat_slug = $cat->category_nicename;
      $cat_all = get_terms( "category", "fields=all&get=all" );
      $cat_column = get_category_by_slug('column')->cat_ID;
      foreach($cat_all as $a):
    ?>
    <?php if($a->slug != 'column' && $a->slug != 'pickup'): ?>
    <?php
      $count = get_column_count($cat_column, $a->term_id);
      if($count):
    ?>
    <a href="javascript:void(0)" class="num num-jq<?php if($a->slug == $cat_slug): ?> current<?php endif; ?> hide-sm" data-category="<?php echo $a->slug; ?>"><?php echo $a->name;?></a>
    <a href="<?php echo get_category_link($a->term_id); ?>" class="link hide-sm"><span>一覧</span> <i class="fa fa-angle-right"></i></a>
    <a href="<?php echo get_category_link($a->term_id); ?>" class="num num-link<?php if($a->slug == $cat_slug): ?> current<?php endif; ?> inline-block-sm"><?php echo $a->name;?></a>
    <?php endif; ?>
    <?php endif; ?>
    <?php endforeach; ?>
  </div>
  <div class="posts">
    <div class="container">

    </div>
  </div>
</div>

<?php
?>

<div class="container">
  <div class="content content-news">
    <div class="content-title content-title-l">
      <div class="en">News</div>
      <h3 class="title"><?php echo single_cat_title('', false); ?></h3>
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
