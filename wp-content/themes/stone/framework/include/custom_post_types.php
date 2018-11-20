<?php
/**
 * Created by PhpStorm.
 * User: Magdy
 * Date: 9/14/2016
 * Time: 11:32 PM
 */
// Registers the new post type and taxonomy

function wpt_slider_posttype() {
    register_post_type( 'slider',
        array(
            'labels' => array(
                'name' => __( 'Slider' ),
                'singular_name' => __( 'Slide' ),
                'add_new' => __( 'Add New Slide' ),
                'add_new_item' => __( 'Add New Slide' ),
                'edit_item' => __( 'Edit Slide' ),
                'new_item' => __( 'Add New Slide' ),
                'view_item' => __( 'View Slide' ),
                'search_items' => __( 'Search Slide' ),
                'not_found' => __( 'No Slides found' ),
                'not_found_in_trash' => __( 'No Slides found in trash' )
            ),
            //'class' => 'wp-menu-image dashicons-before dashicons-dashboard',
            //'menu_icon' => '/images/cutom-posttype-icon.png',
            'menu_icon'   => 'dashicons-welcome-view-site',
            'public' => true,
            'supports' => array( 'title', 'excerpt', 'thumbnail' ),
            'capability_type' => 'post',
            'rewrite' => array("slug" => "slider"), // Permalinks format
            'menu_position' => 5,
            //'register_meta_box_cb' => 'add_events_metaboxes'
        )
    );
}
add_action( 'init', 'wpt_slider_posttype' );

function wpt_awards_posttype() {
    register_post_type( 'award',
        array(
            'labels' => array(
                'name' => __( 'Awards' ),
                'singular_name' => __( 'Award' ),
                'add_new' => __( 'Add New Award' ),
                'add_new_item' => __( 'Add New Award' ),
                'edit_item' => __( 'Edit Award' ),
                'new_item' => __( 'Add New Award' ),
                'view_item' => __( 'View Award' ),
                'search_items' => __( 'Search Award' ),
                'not_found' => __( 'No Awards found' ),
                'not_found_in_trash' => __( 'No Awards found in trash' )
            ),
            //'class' => 'wp-menu-image dashicons-before dashicons-dashboard',
            //'menu_icon' => '/images/cutom-posttype-icon.png',
            'menu_icon'   => 'dashicons-welcome-view-site',
            'public' => true,
            'supports' => array( 'title', 'excerpt', 'thumbnail' ),
            'capability_type' => 'post',
            'rewrite' => array("slug" => "award"), // Permalinks format
            'menu_position' => 5,
            //'register_meta_box_cb' => 'add_events_metaboxes'
        )
    );
}
add_action( 'init', 'wpt_awards_posttype' );

function wpt_special_posttype() {
    register_post_type( 'special',
        array(
            'labels' => array(
                'name' => __( 'Special Days' ),
                'singular_name' => __( 'Special Day' ),
                'add_new' => __( 'Add New Special Day' ),
                'add_new_item' => __( 'Add New Special Day' ),
                'edit_item' => __( 'Edit Special Day' ),
                'new_item' => __( 'Add New Special Day' ),
                'view_item' => __( 'View Special Day' ),
                'search_items' => __( 'Search Special Day' ),
                'not_found' => __( 'No Special Days found' ),
                'not_found_in_trash' => __( 'No Special Days found in trash' )
            ),
            //'class' => 'wp-menu-image dashicons-before dashicons-dashboard',
            //'menu_icon' => '/images/cutom-posttype-icon.png',
            'menu_icon'   => 'dashicons-welcome-view-site',
            'public' => true,
            'supports' => array( 'title', 'excerpt', 'thumbnail' ),
            'capability_type' => 'post',
            'rewrite' => array("slug" => "special"), // Permalinks format
            'menu_position' => 5,
            //'register_meta_box_cb' => 'add_events_metaboxes'
        )
    );
}
add_action( 'init', 'wpt_special_posttype' );

function wpt_testimonial_posttype() {
    register_post_type( 'testimonial',
        array(
            'labels' => array(
                'name' => __( 'Testimonial' ),
                'singular_name' => __( 'Testimonial' ),
                'add_new' => __( 'Add New Testimonial' ),
                'add_new_item' => __( 'Add New Testimonial' ),
                'edit_item' => __( 'Edit Testimonial' ),
                'new_item' => __( 'Add New Testimonial' ),
                'view_item' => __( 'View Testimonial' ),
                'search_items' => __( 'Search Testimonial' ),
                'not_found' => __( 'No Testimonials found' ),
                'not_found_in_trash' => __( 'No Testimonials found in trash' )
            ),
            //'class' => 'wp-menu-image dashicons-before dashicons-dashboard',
            //'menu_icon' => '/images/cutom-posttype-icon.png',
            'menu_icon'   => 'dashicons-welcome-view-site',
            'public' => true,
            'supports' => array( 'title', 'excerpt', 'thumbnail' ),
            'capability_type' => 'post',
            'rewrite' => array("slug" => "Testimonial"), // Permalinks format
            'menu_position' => 7,
            //'register_meta_box_cb' => 'add_events_metaboxes'
        )
    );
}
add_action( 'init', 'wpt_testimonial_posttype' );

function galileo_post_type_service()
{

     $labels = array(
         'name' => __('Services','galileo'),
         'singular_name' => __('Service item','galileo'),
         'add_new' => __('Add New Service','galileo'),
         'add_new_item' => __('Add New Service item','galileo'),
         'edit_item' => __('Edit Service item','galileo'),
         'new_item' => __('New Service item','galileo'),
         'view_item' => __('View Service item','galileo'),
         'search_items' => __('Search Service items','galileo'),
         'not_found' =>  __('No Service items found','galileo'),
         'not_found_in_trash' => __('No Service items found in Trash','galileo'),
         'parent_item_colon' => ''
       );
        
     $args = array(
         'labels' => $labels,
         'public' => true,
         'publicly_queryable' => true,
         'show_ui' => true,
         'query_var' => true,
         'capability_type' => 'post',
         'hierarchical' => false,
         'menu_position' => null,
         'rewrite' => array( 'slug' => 'service'),
         'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt','page-attributes', 'comments' ),
     );
      
     register_post_type( 'service' ,$args);
    
    register_taxonomy(
    'service-category',
    array('service'),
    array(
        'hierarchical' => true, 
        'label' =>  __('Service categories','galileo'),
        'singular_label' =>  __('service category','galileo'),
        //'rewrite' => true,
        'rewrite'               => array( 'slug' => 'service_category' ),
        )
    );

	register_taxonomy(
		'service-tags',
		array('service'),
		array(
			'hierarchical' => false,
			'label' =>  __('service Tags','galileo'),
			'singular_label' =>  __('service Tags','galileo'),
			//'rewrite' => true,
			'rewrite'               => array( 'slug' => 'service_tags' ),
		)
	);
 } 

add_action( 'init', 'galileo_post_type_service' );


function galileo_post_type_product()
{

    $labels = array(
        'name' => __('Products','galileo'),
        'singular_name' => __('Product item','galileo'),
        'add_new' => __('Add New Product','galileo'),
        'add_new_item' => __('Add New Product item','galileo'),
        'edit_item' => __('Edit Product item','galileo'),
        'new_item' => __('New Product item','galileo'),
        'view_item' => __('View Product item','galileo'),
        'search_items' => __('Search Product items','galileo'),
        'not_found' =>  __('No Product items found','galileo'),
        'not_found_in_trash' => __('No Product items found in Trash','galileo'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'rewrite' => array( 'slug' => 'product'),
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt','page-attributes', 'comments' ),
    );

    register_post_type( 'product' ,$args);

    register_taxonomy(
        'product-category',
        array('product'),
        array(
            'hierarchical' => true,
            'label' =>  __('product categories','galileo'),
            'singular_label' =>  __('product category','galileo'),
            //'rewrite' => true,
            'rewrite'               => array( 'slug' => 'product_category' ),
        )
    );

    register_taxonomy(
        'product-tags',
        array('product'),
        array(
            'hierarchical' => false,
            'label' =>  __('product Tags','galileo'),
            'singular_label' =>  __('product Tags','galileo'),
            //'rewrite' => true,
            'rewrite'               => array( 'slug' => 'product_tags' ),
        )
    );
}

add_action( 'init', 'galileo_post_type_product' );



