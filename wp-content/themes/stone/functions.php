<?php
defined('ABSPATH') or die();


if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_stylesheet_directory_uri() .'/js/core/jquery.min.js', false, null);
    wp_enqueue_script('jquery');
}

add_action( 'init', 'gp_register_taxonomy_for_object_type' );
function gp_register_taxonomy_for_object_type() {
	register_taxonomy_for_object_type( 'post_tag', 'course' );
};

function override_mce_options($initArray)
{
  $opts = '*[*]';
  $initArray['valid_elements'] = $opts;
  $initArray['extended_valid_elements'] = $opts;
  return $initArray;
 }
 add_filter('tiny_mce_before_init', 'override_mce_options');


function pagination($pages = '', $range = 4)
{

    ?>

<?php
	$showitems = ($range * 2)+1;

	global $paged;
	if(empty($paged)) $paged = 1;

	if($pages == '')
	{
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if(!$pages)
		{
			$pages = 1;
		}
	}

	if(1 != $pages)
	{
		echo "<div class=\"row\"> <nav aria-label=\"Page navigation example\"  <div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
		if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
		if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";

		for ($i=1; $i <= $pages; $i++)
		{
			if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
			{
				echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
			}
		}

		if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";
		if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
		echo "</div>\n</div>\n";
	}
}
if ( !class_exists( 'ReduxFramework' ) && file_exists( get_stylesheet_directory(). '/ReduxCore/framework.php' ) ) {
	require_once(get_stylesheet_directory().'/ReduxCore/framework.php');
}
if(!isset($ready_theme)){
	require_once(get_stylesheet_directory().'/ReduxCore/admin-config.php');
}
define( 'FRAMEWORK', get_stylesheet_directory() . '/framework/' );

$theme_options = get_option( 'theme_options' );
global $theme_options;


require_once( FRAMEWORK . '/include/register_assets.php' );
require_once( FRAMEWORK . '/include/custom_post_types.php' );
require_once( FRAMEWORK . '/include/custom_post_fields.php' );
require_once( FRAMEWORK . 'meta-box/inspiry-meta-box.php' );

require_once( FRAMEWORK . '/include/shortcodes.php' );

require_once( FRAMEWORK . '/include/theme_functions.php' );



// if visual composer is installed then include related mapping code for properties shortcode
if ( class_exists( 'Vc_Manager' ) ) {
	require_once( FRAMEWORK . '/include/vc-map.php' );
};
add_action( 'after_setup_theme', 'theme_functions' );
function theme_functions() {

    add_theme_support( 'title-tag' );

}

function stone_enqueue_scripts() {

    wp_enqueue_style( 'awesome-font', "https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" );
    wp_enqueue_style( 'material', get_stylesheet_directory_uri() . '/css/material-kit.min.css' );
    wp_enqueue_style( 'style-css', get_stylesheet_directory_uri() . '/css/style.css' );
    wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri() . '/css/slick.css' );
    wp_enqueue_style( 'slick-theme', get_stylesheet_directory_uri() . '/css/slick-theme.css' );
    wp_enqueue_style( 'gallery-grid', get_stylesheet_directory_uri() . '/css/gallery-grid.css' );
    wp_enqueue_style( 'custom',  'https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css' );

    wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() .'/js/core/jquery.min.js', array(), '201512054', false );
    wp_enqueue_script( 'popper-js', get_stylesheet_directory_uri() .'/js/core/popper.min.js', array(), '201512074', true );
    wp_enqueue_script( 'material-js', get_stylesheet_directory_uri() .'/js/core/bootstrap-material-design.min.js', array(), '20151204', true );
    wp_enqueue_script( 'slick-js', get_stylesheet_directory_uri() .'/"js/plugins/slick.min.js', array(), '20151204', true );
    wp_enqueue_script( 'selecty-js', get_stylesheet_directory_uri() .'/js/plugins/selecty.js', array(), '201551204', true );
    wp_enqueue_script( 'moment-ui-js', get_stylesheet_directory_uri() .'/js/plugins/moment.min.js', array(), '201551204', true );

    wp_enqueue_script( 'datetimepicker-js', get_stylesheet_directory_uri() .'/js/plugins/bootstrap-datetimepicker.js', array(), '201551204', true );
    wp_enqueue_script( 'material-kit-js', get_stylesheet_directory_uri() .'/js/material-kit.js?v=2.0.3', array(), '201551204', true );
    wp_enqueue_script( 'cloudflare-js', 'https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js', array(), '201551204', true );

    wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() .'/js/custom.js', array(), '201551204', true );


}

add_action( 'wp_enqueue_scripts', 'stone_enqueue_scripts' );


function ng_maintenance_mode() {
    global $pagenow;
    if ( $pagenow !== 'wp-login.php' && ! current_user_can( 'manage_options' ) && ! is_admin() ) {
        //header( $_SERVER["SERVER_PROTOCOL"] . ' 503 Service Temporarily Unavailable', true, 503 );
        //header( 'Content-Type: text/html; charset=utf-8' );

        $homepage = get_post(  520 );
        if ( $homepage )
        {
            update_option( 'page_on_front', $homepage->ID );
            update_option( 'show_on_front', 'page' );
        }

    }else{
        $homepage = get_page_by_title( 'Front Page' );

        if ( $homepage )
        {
            update_option( 'page_on_front', $homepage->ID );
            update_option( 'show_on_front', 'page' );
        }
    }
}

add_action( 'wp_loaded', 'ng_maintenance_mode' );


