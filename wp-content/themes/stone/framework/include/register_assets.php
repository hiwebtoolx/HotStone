<?php
/**
 * Created by PhpStorm.
 * User: Magdy
 * Date: 9/14/2016
 * Time: 11:19 PM
 */
//function wpdocs_dequeue_script() {
//    wp_dequeue_script( 'jquery' );
//}
//add_action( 'wp_print_scripts', 'wpdocs_dequeue_script', 100 );
function ltc_enqueue_scripts() {
    $theme_options = get_option( 'theme_options' );
    wp_enqueue_style( 'awesome-font', "https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" );
    wp_enqueue_style( 'material', get_stylesheet_directory_uri() . '/css/material-kit.min.css' );
    wp_enqueue_style( 'style-css', get_stylesheet_directory_uri() . '/css/style.css' );
    wp_enqueue_style( 'custom-css', get_stylesheet_directory_uri() . '/css/custom.css' );
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
    //wp_enqueue_script( 'revolution-js', get_stylesheet_directory_uri() .'/assets/js/jquery.themepunch.revolution.min.js', array(), '201551204', true );
    wp_enqueue_script( 'datetimepicker-js', get_stylesheet_directory_uri() .'/js/plugins/bootstrap-datetimepicker.js', array(), '201551204', true );
    wp_enqueue_script( 'material-kit-js', get_stylesheet_directory_uri() .'/js/material-kit.js?v=2.0.3', array(), '201551204', true );
    wp_enqueue_script( 'cloudflare-js', 'https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js', array(), '201551204', true );

    wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() .'/js/custom.js', array(), '201551204', true );


}

add_action( 'wp_enqueue_scripts', 'ltc_enqueue_scripts' );
