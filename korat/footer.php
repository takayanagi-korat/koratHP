<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package korat
 */
$home_url = esc_url(home_url());
?>

	</div><!-- .contents -->
	<div class='footer-push'></div>
</div><!-- .wrapper -->

<footer class="site-footer">
	<a href="#" class="pagetop"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
	<div class="privacy-policy"><a href="<?php echo $home_url; ?>/privacy_policy/">個人情報の取扱いについて</a></div>
	<div class="copyright">&copy; 2016 KORAT Co., Ltd.</div>
</footer>

<?php wp_footer(); ?>
<div class="menu-hover-bg"></div>
</body>
</html>
