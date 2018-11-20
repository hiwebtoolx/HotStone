<?php
/**
 * Created by PhpStorm.
 * User: Magdy
 * Date: 9/14/2016
 * Time: 11:08 PM
 */
vc_map(
    array(
        "name" => __("Slider", "js_composer"), // add a name
        "base" => "stone_slide", // bind with our shortcode
        'category' => 'stone',
        'icon'	   => get_stylesheet_directory_uri().'/img/favicon.png',
        "content_element" => true, // set this parameter when element will has a content
        "is_container" => false, // set this param when you need to add a content element in this element
        // Here starts the definition of array with parameters of our compnent
        "params" => array(
            array(
                'type' => 'loop',
                'heading' => esc_html__( 'Slides', 'stone' ),
                'param_name' => 'data_query',
                'value' => '',
                'settings' => array(
                    'post_type'     => array( 'hidden' => true ),
                    'authors'       => array( 'hidden' => true ),
                    'tax_query'     => array( 'hidden' => true ),
                    'categories'    => array( 'hidden' => true ),
                    'tags'          => array( 'hidden' => true )
                ),
                'description' => esc_html__( 'Create WordPress loop, to populate content from your slides .', 'stone' ),
            ),
        )
    )
);



vc_map(
    array(
        "name" => __("HotStone Services", "js_composer"), // add a name
        "base" => "stone_services", // bind with our shortcode
        'category' => 'stone',
        'icon'     => get_stylesheet_directory_uri().'/img/favicon.png',
        //"content_element" => true, // set this parameter when element will has a content
        //"is_container" => true, // set this param when you need to add a content element in this element
        // Here starts the definition of array with parameters of our compnent
        "params" => array(
            array(
                'heading' => esc_html__( 'Heading', 'stone' ),
                "type" => "textfield", // it will bind a textfield in WP
                "title" => __("Heading", "stone"),
                "param_name" => "heading",
            ),
            array(
                'heading' => esc_html__( 'Sub Heading', 'stone' ),
                "type" => "textfield", // it will bind a textfield in WP
                "title" => __("Sub Heading", "stone"),
                "param_name" => "sub_heading",
            ),
            array(
                'type' => 'loop',
                'heading' => esc_html__( 'Services', 'stone' ),
                'param_name' => 'data_query',
                'value' => '',
                'settings' => array(
                    'post_type'     => array( 'hidden' => true ),
                    'authors'       => array( 'hidden' => true ),
                    'tax_query'     => array( 'hidden' => true ),
                    'categories'    => array( 'hidden' => true ),
                    'tags'          => array( 'hidden' => true )
                ),
                'description' => esc_html__( 'Create WordPress loop, to populate content from your slides .', 'stone' ),
            ),
        )
    )
);
vc_map(
    array(
        "name" => __("HotStone Awards", "js_composer"), // add a name
        "base" => "stone_awards", // bind with our shortcode
        'category' => 'stone',
        'icon'     => get_stylesheet_directory_uri().'/img/favicon.png',
        //"content_element" => true, // set this parameter when element will has a content
        //"is_container" => true, // set this param when you need to add a content element in this element
        // Here starts the definition of array with parameters of our compnent
        "params" => array(
            array(
                'heading' => esc_html__( 'Heading', 'stone' ),
                "type" => "textfield", // it will bind a textfield in WP
                "title" => __("Heading", "stone"),
                "param_name" => "heading",
            ),
            array(
                'type' => 'loop',
                'heading' => esc_html__( 'Services', 'stone' ),
                'param_name' => 'data_query',
                'value' => '',
                'settings' => array(
                    'post_type'     => array( 'hidden' => true ),
                    'authors'       => array( 'hidden' => true ),
                    'tax_query'     => array( 'hidden' => true ),
                    'categories'    => array( 'hidden' => true ),
                    'tags'          => array( 'hidden' => true )
                ),
                'description' => esc_html__( 'Create WordPress loop, to populate content from your slides .', 'stone' ),
            ),
        )
    )
);
vc_map(
    array(
        "name" => __("Testimonial", "js_composer"), // add a name
        "base" => "stone_testimonial", // bind with our shortcode
        'category' => 'stone',
        'icon'     => get_stylesheet_directory_uri().'/img/favicon.png',
        //"content_element" => true, // set this parameter when element will has a content
        //"is_container" => true, // set this param when you need to add a content element in this element
        // Here starts the definition of array with parameters of our compnent
        "params" => array(
            array(
                'heading' => esc_html__( 'Heading', 'stone' ),
                "type" => "textfield", // it will bind a textfield in WP
                "title" => __("Heading", "stone"),
                "param_name" => "heading",
            ),
            array(
                'heading' => esc_html__( 'Sub Heading', 'stone' ),
                "type" => "textfield", // it will bind a textfield in WP
                "title" => __("Sub Heading", "stone"),
                "param_name" => "sub_heading",
            ),
            array(
                'type' => 'loop',
                'heading' => esc_html__( 'Testimonials', 'stone' ),
                'param_name' => 'data_query',
                'value' => '',
                'settings' => array(
                    'post_type'     => array( 'hidden' => true ),
                    'authors'       => array( 'hidden' => true ),
                    'tax_query'     => array( 'hidden' => true ),
                    'categories'    => array( 'hidden' => true ),
                    'tags'          => array( 'hidden' => true )
                ),
                'description' => esc_html__( 'Create WordPress loop, to populate content from your slides .', 'stone' ),
            ),
        )
    )
);







vc_map(
    array(
        'name'                      => esc_html__( 'Icon With Title', 'alecta' ),
        'base'                      => 'stone_icon',
        'category'                  => esc_html__( 'stone', 'alecta' ),
        'icon'     => get_stylesheet_directory_uri().'/img/favicon.png',
        "content_element" => true, // set this parameter when element will has a content
        "is_container" => false, // set this param when you need to add a content element in this element
        "params" => array(

            array(
                "type" => "textfield", // it will bind a textfield in WP
                "heading" => __("Title", "ltc"),
                "param_name" => "icon_title",
            ),
            array(
                'heading' => esc_html__( 'Forth Block Icon', 'stone' ),
                "type" => "iconpicker", // it will bind a textfield in WP
                "title" => __("Icon", "stone"),
                "param_name" => "icon_icon",
            ),

        )
    )
);



vc_map(
    array(
        "class" => "class",
        "controls" => "full",
        //"icon" => plugins_url('assets/asterisk_yellow.png', __FILE__), // or css class name which you can reffer in your css file later. Example: "vc_extend_my_class"
        "category" => __('stone', 'js_composer'),
        'name'                      => esc_html__( 'Steps', 'alecta' ),
        'base'                      => 'stone_steps',

        'icon'     => get_stylesheet_directory_uri().'/img/favicon.png',

        "params" => array(

            array(
                "type" => "textfield", // it will bind a textfield in WP
                "heading" => __("Step Title", "ltc"),
                "param_name" => "icon_title",
            ),

            array(
                "type" => "textfield", // it will bind a textfield in WP
                "heading" => __("Title", "ltc"),
                "param_name" => "step_title",
            ),
            array(
                "type" => "textfield", // it will bind a textfield in WP
                "heading" => __("Sub Title", "ltc"),
                "param_name" => "sub_title",
            ),
            array(
                'heading' => esc_html__( 'Image', 'stone' ),
                "type" => "attach_image", // it will bind a textfield in WP
                "title" => __("Image", "stone"),
                "param_name" => "step_image",
            ),
        )
    )
);

vc_map(
    array(
        "class" => "class",
        "controls" => "full",
        //"icon" => plugins_url('assets/asterisk_yellow.png', __FILE__), // or css class name which you can reffer in your css file later. Example: "vc_extend_my_class"
        "category" => __('stone', 'js_composer'),
        'name'                      => esc_html__( 'Special Days', 'alecta' ),
        'base'                      => 'stone_days',

        'icon'     => get_stylesheet_directory_uri().'/img/favicon.png',

        "params" => array(

            array(
                "type" => "textfield", // it will bind a textfield in WP
                "heading" => __("Title", "ltc"),
                "param_name" => "title",
            ),
            array(
                "type" => "textfield", // it will bind a textfield in WP
                "heading" => __("Sub Title", "ltc"),
                "param_name" => "sub_title",
            ),
            array(
                'heading' => esc_html__( 'Image', 'stone' ),
                "type" => "attach_image", // it will bind a textfield in WP
                "title" => __("Image", "stone"),
                "param_name" => "special_image",
            ),
            array(
                "type" => "textfield", // it will bind a textfield in WP
                "heading" => __("left Block Title", "ltc"),
                "param_name" => "left_title",
            ),
            array(
                "type" => "textfield", // it will bind a textfield in WP
                "heading" => __("left Sub Title", "ltc"),
                "param_name" => "left_sub_title",
            ),
            array(
                "type" => "textfield", // it will bind a textfield in WP
                "heading" => __("Footer Title", "ltc"),
                "param_name" => "footer_title",
            ),
            array(
                "type" => "textfield", // it will bind a textfield in WP
                "heading" => __("Button Title", "ltc"),
                "param_name" => "button_title",
            ),
            array(
                "type" => "textfield", // it will bind a textfield in WP
                "heading" => __("Button Link", "ltc"),
                "param_name" => "button_link",
            ),

            array(
                'type' => 'loop',
                'heading' => esc_html__( 'Select Special Day', 'stone' ),
                'param_name' => 'data_query',
                'value' => '',
                'settings' => array(
                    'post_type'     => array( 'hidden' => true ),
                    'authors'       => array( 'hidden' => true ),
                    'tax_query'     => array( 'hidden' => true ),
                    'categories'    => array( 'hidden' => true ),
                    'tags'          => array( 'hidden' => true )
                ),
                'description' => esc_html__( 'Create WordPress loop, to populate content from your slides .', 'stone' ),
            ),
        )
    )
);
