<?php
/**
 * Created by PhpStorm.
 * User: Magdy
 * Date: 9/14/2016
 * Time: 11:20 PM
 */

function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function ltc_widgets_first() {
    register_sidebar(
        array(
        'name' => __( 'Footer First Area', 'ltc' ),
        'id' => 'first-area',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
        )
    );
}
add_action( 'widgets_init', 'ltc_widgets_first' );
function ltc_widgets_second() {
    register_sidebar(
        array(
            'name' => __( 'Footer Second Area', 'ltc' ),
            'id' => 'second-area',
            'before_widget' => '<div>',
            'after_widget' => '</div>',
            'before_title' => '<h1>',
            'after_title' => '</h1>',
        )

    );
}
add_action( 'widgets_init', 'ltc_widgets_second' );
function ltc_widgets_third() {
    register_sidebar(
        array(
            'name' => __( 'Footer Third Area', 'ltc' ),
            'id' => 'third-area',
            'before_widget' => '<div>',
            'after_widget' => '</div>',
            'before_title' => '<h1>',
            'after_title' => '</h1>',
        )
    );
}
add_action( 'widgets_init', 'ltc_widgets_third' );
function ltc_widgets_forth() {
    register_sidebar(
        array(
            'name' => __( 'Footer Forth Area', 'ltc' ),
            'id' => 'forth-area',
            'before_widget' => '<div>',
            'after_widget' => '</div>',
            'before_title' => '<h1>',
            'after_title' => '</h1>',
        )
    );
}
add_action( 'widgets_init', 'ltc_widgets_forth' );

function ltc_widgets_newsletter() {
    register_sidebar(
        array(
            'name' => __( 'Newsletter Area', 'ltc' ),
            'id' => 'newsletter-area',
            'before_widget' => '<div>',
            'after_widget' => '</div>',
            'before_title' => '<h1>',
            'after_title' => '</h1>',
        )
    );
}
add_action( 'widgets_init', 'ltc_widgets_newsletter' );


function stone_get_related_courses() {
    global $post;
    $tags = get_the_terms( $post->ID, 'course-tags' );
    $cats = get_the_terms( $post->ID, 'course-category' );

    $tags = !empty($tags)?array_map( function($tag){return $tag->term_id;}, $tags):array();
    $cats = !empty($cats)?array_map( function($cat){return $cat->term_id;}, $cats):array();

    $posts = new WP_Query(
        array(
            'post_type'     => 'course',
            'posts_per_page'   => 8,  /** TODO: Theme option**/
            'post__not_in'     => array( get_the_ID() ),
            'tax_query' => array(
                'relation' => 'OR',
                array(
                    'taxonomy' => 'course-tags',
                    'field'    => 'id',
                    'terms'    => $tags
                ),
                array(
                    'taxonomy' => 'course-category',
                    'field'    => 'term_id',
                    'terms'    => $cats
                )
            )
        )
    );

    return $posts;
}

function custom_query_vars_filter($vars) {
    $vars[] = 'pg_id';
    return $vars;
}
add_filter( 'query_vars', 'custom_query_vars_filter' );


function add_custom_sizes() {
    add_image_size( 'event-thumb', 1170,340, true );
    add_image_size( 'portfolio-image', 1074, 725, true );
    add_image_size( 'available-homes', 500, 279, true );
    add_image_size( 'idea-thumb', 146, 141, true );
}
add_action('after_setup_theme','add_custom_sizes');


function get_menu_parent( $menu, $post_id = null ) {

    $post_id        = $post_id ? : get_the_ID();
    $menu_items     = wp_get_nav_menu_items( $menu );
    $parent_item_id = wp_filter_object_list( $menu_items, array( 'object_id' => $post_id ), 'and', 'menu_item_parent' );

    if ( ! empty( $parent_item_id ) ) {
        $parent_item_id = array_shift( $parent_item_id );
        $parent_post_id = wp_filter_object_list( $menu_items, array( 'ID' => $parent_item_id ), 'and', 'object_id' );

        if ( ! empty( $parent_post_id ) ) {
            $parent_post_id = array_shift( $parent_post_id );

            return get_post( $parent_post_id );
        }
    }

    return false;
}
add_theme_support('post-formats', array('gallery','image','video'));

function new_test($pages = '', $range = 4)
{

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
        echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
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
        echo "</div>\n";
    }

}
add_filter( 'walker_nav_menu_start_el', 'wpse_add_arrow',10,4);
function wpse_add_arrow( $item_output, $item, $depth, $args ){
    //Only add class to 'top level' items on the 'primary' menu.
    if('primary' == $args->theme_location && $depth ==0){
        $item_output .='<span class="arrow"></span>';
    }
    return $item_output;
}
//

//if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('header-sidebar') ) :

//endif; 