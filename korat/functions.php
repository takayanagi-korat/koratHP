<?php
/**
 * korat functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package korat
 */

 define(THEMEPATH, get_template_directory_uri());

if ( ! function_exists( 'korat_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function korat_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on korat, use a find and replace
	 * to change 'korat' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'korat', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'korat' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'korat_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'korat_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function korat_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'korat_content_width', 640 );
}
add_action( 'after_setup_theme', 'korat_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function korat_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'korat' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'korat' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'korat_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function korat_scripts() {
	wp_enqueue_style( 'korat-style', get_stylesheet_uri() );

	//wp_enqueue_script( 'korat-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	//wp_enqueue_script( 'korat-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'korat_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';



/**
 * Clear head.
 */
remove_action( 'wp_head', 'wp_generator');
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action('wp_head', 'wp_shortlink_wp_head');

// Remove the REST API endpoint.
remove_action( 'rest_api_init', 'wp_oembed_register_route' );

// Turn off oEmbed auto discovery.
add_filter( 'embed_oembed_discover', '__return_false' );

// Don't filter oEmbed results.
remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );

// Remove oEmbed discovery links.
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );

// Remove oEmbed-specific JavaScript from the front-end and back-end.
remove_action( 'wp_head', 'wp_oembed_add_host_js' );

// Remove all embeds rewrite rules.
// add_filter( 'rewrite_rules_array', 'disable_embeds_rewrites' );

function my_delete_local_jquery() {
    wp_deregister_script('jquery');
}
add_action( 'wp_enqueue_scripts', 'my_delete_local_jquery' );


/**
 * Customize.
 */
// add page slug to bodyclass
function pagename_class($classes = '') {
	if (is_page()) {
		$page = get_page(get_the_ID());
		if($page->ancestors){
			foreach($page->ancestors as $anc_id){
				$anc = get_page($anc_id);
				$classes[] = 'page-' . $anc->post_name;
			}
		}
		$classes[] = 'page-' . $page->post_name;
	}
  else if(is_single()){
    global $post;
    foreach((get_the_category($post->ID)) as $category) {
      $classes[] = 'single-in-'.$category->category_nicename;
    }
  }
	return $classes;
}
add_filter('body_class','pagename_class');

//check post parent slug
function is_parent_slug($slug) {
	global $post;
	$ret = false;
	if ($post->post_parent) {
		$post_data = get_post($post->post_parent);
		if($slug == $post_data->post_name){
			$ret = true;
		}
	}
	return $ret;
}

//remove category from uri
function remcat_function($link) {
  return str_replace("/category/", "/", $link);
}
add_filter('user_trailingslashit', 'remcat_function');
function remcat_flush_rules() {
  global $wp_rewrite;
  $wp_rewrite->flush_rules();
}
add_action('init', 'remcat_flush_rules');
function remcat_rewrite($wp_rewrite) {
  $new_rules = array('(.+)/page/(.+)/?' => 'index.php?category_name='.$wp_rewrite->preg_index(1).'&paged='.$wp_rewrite->preg_index(2));
  $wp_rewrite->rules = $new_rules + $wp_rewrite->rules;
}
add_filter('generate_rewrite_rules', 'remcat_rewrite');

//force post status to public
function publicfuturepost($data, $posted){
	if($posted['original_post_status'] == 'publish' && $data['post_status'] == 'future'){
		$data['post_status'] = 'publish';
	}
	return($data);
}
add_filter('wp_insert_post_data', 'publicfuturepost', 10, 2);

//add slash to uri
function add_slash_uri_end($uri, $type) {
	global $post;
  if ($type != 'single' && !$post->post_parent) {
    $uri = trailingslashit($uri);
  }
  return $uri;
}
add_filter('user_trailingslashit', 'add_slash_uri_end', 10, 2);

//cache
function my_wp_default_styles( $styles ) {
    $styles->default_version = 201610201;
}
add_action( 'wp_default_styles', 'my_wp_default_styles' );

//get privacy policy
function getprivacypolicy() {
	$page = get_page_by_path('privacy_policy');
	return $page->post_content;
	//return 'TEST';
}
add_shortcode('showprivacypolicy', 'getprivacypolicy');

//pagenation
function pagination($pages = '', $range = 4) {
   $showitems = ($range * 2)+1;

   global $paged;
   if(empty($paged)) $paged = 1;

   if($pages == ''){
     global $wp_query;
     $pages = $wp_query->max_num_pages;
     if(!$pages){
       $pages = 1;
     }
   }

   if(1 != $pages){
		 echo '<div class="paging">';
     if($paged > 2 && $paged > $range+1 && $showitems < $pages){
			 echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
		 }
		 else{
			 echo '<span>&laquo;</span>';
		 }
     if($paged > 1 && $showitems < $pages){
			 echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";
		 }
		 else{
			 echo '<span>&lsaquo;</span>';
		 }

     for ($i=1; $i <= $pages; $i++){
       if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
         echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
       }
     }

     if ($paged < $pages && $showitems < $pages){
			 echo "<a href=\"".get_pagenum_link($paged + 1)."\">&rsaquo;</a>";
		 }
		 else{
			 echo '<span>&rsaquo;</span>';
		 }

     if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages){
			 echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
		 }
		 else{
			 echo '<span>&raquo;</span>';
		 }

     echo "</div>\n";
   }
}

function my_error_message($error, $key, $rule){
  if (($key === 'first_kana' || $key === 'last_kana') && $rule === 'katakana'){
    return '全角カナで入力してください。';
  }
  return $error;
}
add_filter( 'mwform_error_message_mw-wp-form-13', 'my_error_message', 10, 3 );

//custom excerpt
function my_excerpt_mblength($length) {
  return 125;
}
add_filter('excerpt_mblength', 'my_excerpt_mblength');

function my_excerpt_more($more) {
  return ' ... <span class="more">続きを読む</span>';
}
add_filter('excerpt_more', 'my_excerpt_more');

function excerpt($limit) {
    return wp_trim_words(get_the_excerpt(), $limit);
}

//show category count
function show_category_count($category_id){
  $num = 0;
	$cat = get_category(get_cat_ID($category));
  if($cat && $cat->count){
  	$num = $cat->count;
	}
	return $num;
}

function show_page_number() {
  global $wp_query;

  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  return $paged;
}

function my_post_type_link( $link, $post ){
  if ( 'interview' === $post->post_type ) {
    return home_url( '/interview/' . $post->ID );
  } else {
    return $link;
  }
}

add_filter( 'rewrite_rules_array', 'my_rewrite_rules_array' );
function my_rewrite_rules_array( $rules ) {
  $new_rules = array(
    'archives/news/([0-9]+)/?$' => 'index.php?post_type=news&p=$matches[1]',
  );

  return $new_rules + $rules;
}

//add ajaxurl
function add_my_ajaxurl()
{
?>
  <script>
    var _ajaxurl = '<?php echo admin_url( 'admin-ajax.php'); ?>';
  </script>
<?php
}
add_action('wp_head', 'add_my_ajaxurl', 1);

//get lists
function get_posts_by_category()
{
  $json = array();
  $json['list'] = array();
  $cat = get_category_by_slug($_POST['category']);
  $cat_and = array($cat->cat_ID);
  $cat = get_category_by_slug('column');
  $cat_and[] = $cat->cat_ID;
  query_posts( array( 'category__and' => $cat_and, 'posts_per_page' => 20, 'post_status' => 'publish', 'order' => 'DESC' ) );
  //query_posts('category__and=' . $cat->cat_ID . '&posts_per_page=20&post_status=publish');
  if(have_posts()){
    while(have_posts()){
      the_post();
      $img = '';
      if (has_post_thumbnail()) {
        $thumbnail_id = get_post_thumbnail_id();
        $eye_img = wp_get_attachment_image_src( $thumbnail_id , 'full' );
        $img = $eye_img[0];
      }
      $json['list'][] = array(
        'title' => get_the_title(),
        'date'  => get_the_date('Y.m.d'),
        'img'   => $img,
        'url'   => get_the_permalink()
      );
    }
  }
  echo json_encode($json);
  die();
}
add_action( 'wp_ajax_get_posts_by_category', 'get_posts_by_category' );
add_action( 'wp_ajax_nopriv_get_posts_by_category', 'get_posts_by_category' );

function get_attachment_id($url)
{
  global $wpdb;
  $query = "SELECT ID FROM {$wpdb->posts} WHERE guid='$url'";
  $id = $wpdb->get_var($query);
  return $id;
}

function get_image_info($image_id, $size)
{
  if(!$size){
    $size = 'large';
  }
  $post = get_post($image_id);
  $image_src = wp_get_attachment_image_src($image_id , $size);
  $src = $image_src[0];
  $caption = get_post_meta($image_id, '_wp_attachment_image_alt', true);
  if(LANG == 'jp' && $post->post_title){
    $caption = $post->post_title;
  }
  return array(
    'caption' => $caption,
    'src' => $src
  );
}

//admin
function my_admin_script() {
  echo '<script type="text/javascript" src="' . THEMEPATH . '/js/jquery-1.12.4.min.js"></script><script src="' . THEMEPATH . '/js/admin.js"></script>'.PHP_EOL;
}
add_action('admin_print_scripts', 'my_admin_script');

function my_admin_style() {
  echo '<link rel="stylesheet" href="' . THEMEPATH . '/css/admin.css" />'.PHP_EOL;
}
add_action('admin_print_styles', 'my_admin_style');


function _h($str) {
  return htmlspecialchars($str);
}

function custom_enqueue($hook_suffix) {
	wp_enqueue_style('custom_css', get_template_directory_uri() . '/css/admin.css');
}
add_action( 'admin_enqueue_scripts', 'custom_enqueue' );

function get_column_count($cat1, $cat2) {
  $args = array(
    'tax_query' => array(
      'relation' => 'AND',
      array(
        'taxonomy' => 'category',
        'field' => 'term_taxonomy_id',
        'terms' => array( $cat1 ),
        'operator' => 'IN'
      ),
      array(
        'taxonomy' => 'category',
        'field' => 'term_taxonomy_id',
        'terms' => array( $cat2 ),
        'operator' => 'IN'
      ),
    )
  );
  $query = new WP_Query( $args );
  return $query->post_count;
}
