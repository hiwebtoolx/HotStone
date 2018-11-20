<?php
/**
 * Created by PhpStorm.
 * User: Magdy
 * Date: 10/28/2016
 * Time: 11:50 PM
 */
$theme_options = get_option( 'theme_options' );

//if ( $pagenow !== 'wp-login.php' && ! current_user_can( 'manage_options' ) && ! is_admin() ) {
//    $maint_page = get_post(520);
//
//    wp_redirect(get_permalink($maint_page->ID));
//    die();
//}
?>
<!Doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link rel="shortcut icon" href="<?=$theme_options['favicon']['url']?>">
    <link rel="apple-touch-icon" href="<?=$theme_options['apple-touch-icon']['url']?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?=$theme_options['apple-touch-icon1']['url']?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?=$theme_options['apple-touch-icon2']['url']?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?=$theme_options['apple-touch-icon3']['url']?>">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_head(); ?>

    <?php
    $main_menu = array(
        'theme_location'  => '',
        'menu'            => 48,
        'container'       => '',
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => 'menu',
        'menu_id'         => 48,
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul class="navbar-nav ml-auto">%3$s</ul>',
        'depth'           => 3,
    );

    $menu = wp_get_nav_menu_items("Main Menu" );
    ?>

</head>

<body class="index-page sidebar-collapse">
<nav id="navbar" class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
        <div class="col col-lg-2">
            <div class="navbar-translate">
                <a class="navbar-brand" href="<?=get_home_url()?>"><img src="<?=$theme_options['site_logo']['url']?>"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
        <div class="col-md-auto">
            <div class="call-us">
                <a href="tel:<?=$theme_options['text-phone']?>"><span style="color:rgba(0, 0, 0, 0.3)!important">Call Now  </span><?=$theme_options['text-phone']?></a>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-round" data-toggle="modal" data-target="#firstModal">
                    Book An Appointment
                </button>


            </div>
            <div class="collapse navbar-collapse">

                <ul class="navbar-nav ml-auto">
                    <?php foreach ( $menu as $navItem ) {
                        $current = ( $navItem->object_id == get_queried_object_id() ) ? 'active' : '';

                        echo '<li class="nav-item  '.$current.'"><a class="nav-link" href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a></li>';
                    } ?>
                </ul>
            </div>
        </div>
    </div>
</nav>


<!-- Modal -->
<div class="modal fade" id="firstModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 1000000">
    <div class="modal-dialog modal-lg modal-notify modal-info" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Choose Branch</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="text-align: center">
                <a href="https://hotstone.mysalononline.com/Booking/?sid=0" class="btn btn-primary btn-round">Takhassossi</a>
                <a href="https://hotstone2.mysalononline.com/Booking/?sid=0" class="btn btn-primary btn-round">King Salman</a>
            </div>
            <div class="modal-footer">
                Thank you
            </div>
        </div>
    </div>
</div>
