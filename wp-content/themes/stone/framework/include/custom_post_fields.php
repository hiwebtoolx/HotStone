<?php
/**
 * Created by PhpStorm.
 * User: Magdy
 * Date: 9/14/2016
 * Time: 11:18 PM
 */
add_filter( 'rwmb_meta_boxes', 'ltc_register_meta_boxes' );
function ltc_register_meta_boxes( $meta_boxes ) {
    $prefix = 'rw_';
    // 1st meta box
    /** Default page options */


    $courses_array = array(-1 => __('None', 'framework'));
    $courses_posts = get_posts(array('post_type' => 'course', 'posts_per_page' => -1, 'suppress_filters' => 0));
    if (!empty($courses_posts)) {
        foreach ($courses_posts as $course_posts) {
            $courses_array[$course_posts->ID] = $course_posts->post_title;
        }
    }

    $meta_boxes[] = array(
        //'id' => 'video-meta-box',
        'title' => __('Page Settings', 'framework'),
        'post_types' => array('page' ),
        'context' => 'normal',
        'priority' => 'high',
        'fields' => array(
            array(
                'name' => __('Sub Title', 'framework'),
                'id' => "{$prefix}subtitle",
                'type' => 'textarea',
                'cols' => '20',
                'rows' => '1'
            ),
            array(
                'name' => __( 'Banner', 'framework' ),
                'id'   => $prefix . 'banner',
                'type' => 'image',
                'max_file_uploads' => 1,
                'force_delete' => true
            ),

        )
    );

    $meta_boxes[] = array(
        //'id' => 'video-meta-box',
        'title' => __('Page Settings', 'framework'),
        'post_types' => array('special'),
        'context' => 'normal',
        'priority' => 'high',
        'fields' => array(
            array(
                'name' => __('Event Date', 'framework'),
                'id' => "{$prefix}date",
                'type' => 'date',
            ),
            array(
                'name' => __('Sub Title', 'framework'),
                'id' => "{$prefix}subtitle",
                'type' => 'textarea',
                'cols' => '20',
                'rows' => '1'
            ),
            array(
                'name' => __( 'Banner', 'framework' ),
                'id'   => $prefix . 'banner',
                'type' => 'image_advanced',
                'max_file_uploads' => 1,
                'force_delete' => true
            ),
            array(
                'id'               => 'image',
                'name'             => 'Image Advanced',
                'type'             => 'image_advanced',

                // Delete image from Media Library when remove it from post meta?
                // Note: it might affect other posts if you use same image for multiple posts
                'force_delete'     => false,

                // Maximum image uploads.
                'max_file_uploads' => 2,

                // Do not show how many images uploaded/remaining.
                'max_status'       => 'false',

                // Image size that displays in the edit page.
                'image_size'       => 'thumbnail',
            ),
        )
    );
    $meta_boxes[] = array(
        //'id' => 'video-meta-box',
        'title' => __('Service Settings', 'framework'),
        'post_types' => array('service'),
        'context' => 'normal',
        'priority' => 'high',
        'fields' => array(
            array(
                'name' => __('Starts From', 'framework'),
                'id' => "{$prefix}startsfrom",
                'type' => 'text',
                'cols' => '20',
                'rows' => '1'
            ),
            array(
                'name' => __( 'Banner', 'framework' ),
                'id'   => $prefix . 'banner',
                'type' => 'image',
                'max_file_uploads' => 1,
                'force_delete' => true
            ),
        )
    );
    $meta_boxes[] = array(
        //'id' => 'video-meta-box',
        'title' => __('Product Settings', 'framework'),
        'post_types' => array('product'),
        'context' => 'normal',
        'priority' => 'high',
        'fields' => array(
            array(
                'name' => __('Price', 'framework'),
                'id' => "{$prefix}price",
                'type' => 'text',
                'cols' => '20',
                'rows' => '1'
            ),
            array(
                'name' => __( 'Banner', 'framework' ),
                'id'   => $prefix . 'banner',
                'type' => 'image',
                'max_file_uploads' => 1,
                'force_delete' => true
            ),
        )
    );
    $meta_boxes[] = array(
        //'id' => 'video-meta-box',
        'title' => __('Video Embed Code', 'framework'),
        'post_types' => array('post'),
        'context' => 'normal',
        'priority' => 'high',
        'fields' => array(
            array(
                'name' => __('Video Embed Code', 'framework'),
                'desc' => __('If you are not using self hosted videos then please provide the video embed code and remove the width and height attributes.', 'framework'),
                'id' => "{$prefix}embed_code",
                'type' => 'textarea',
                'cols' => '20',
                'rows' => '3'
            ),
            array(
                'name' => __( 'Gallery', 'framework' ),
                'id'   => $prefix . 'pgallery',
                'type' => 'image',
                'max_file_uploads' => 10,
                'force_delete' => true
            ),
        )
    );


    $meta_boxes[] = array(
        'title'      => __( 'Fields', 'ltc' ),
        'post_types' => array('slider'),
        'fields'     => array(
            array(
                'name' => __( 'URL', 'ltc' ),
                'id'   => $prefix . 'url',
                'type' => 'url',
                'desc'  => 'http://wwww.example.com',
            ),
        )
    );


    $meta_boxes[] = array(
        'title' => __( 'Course Info', 'rwmb' ),
        'tabs'      => array(
            'overview' => array(
                'label' => __('Overview', 'framework'),
                'icon' => 'dashicons-admin-home',
            ),

            'outlines' => array(
                'label' => __('Outlines', 'framework'),
                'icon' => 'dashicons-format-gallery',
            ),
            'benefits' => array(
                'label' => __('Key Benefits', 'framework'),
                'icon' => 'dashicons-format-image',
            ),
            'participants' => array(
                'label' => __('Participants Profile', 'framework'),
                'icon' => 'dashicons-format-image',
            ),
            'practical' => array(
                'label' => __('Practical information', 'framework'),
                'icon' => 'dashicons-format-image',
            ),
        ),
        'tab_style' => 'left',
        'post_types' => array('course'),
        'fields' => array(
            array(
                'name' => __( 'Overview', 'ltc' ),
                'id'   => $prefix . 'overview',
                'type' => 'wysiwyg',
                'tab'  => 'overview'
            ),
            array(
                'name' => __( 'Outlines', 'ltc' ),
                'id'   => $prefix . 'outlines',
                'type' => 'wysiwyg',
                'tab'  => 'outlines'
            ),
            array(
                'name' => __( 'key benefits', 'ltc' ),
                'id'   => $prefix . 'keybenfits',
                'type' => 'wysiwyg',
                'tab'  => 'benefits'
            ),
            array(
                'name' => __( 'Participants', 'ltc' ),
                'id'   => $prefix . 'participants',
                'type' => 'wysiwyg',
                'tab'  => 'participants'
            ),
            array(
                'name' => __( 'practical', 'ltc' ),
                'id'   => $prefix . 'practical',
                'type' => 'wysiwyg',
                'tab'  => 'practical'
            ),
        ),
    );


    return $meta_boxes;
}