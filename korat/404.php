<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package korat
 */

$home_url = esc_url(home_url());
get_header(); ?>

<div class="container container2">
  <div class="appear appear-o">
    <strong>お探しのページが見つかりませんでした。</strong>
    お手数ですが、<a href="<?php echo $home_url; ?>/" class="ul">トップページ</a> またはページ上部のメニューよりお探しください。
  </div>
</div>

<?php
get_footer();
