<?php
/**
 * Created by PhpStorm.
 * User: Magdy
 * Date: 9/14/2016
 * Time: 11:07 PM
 */
function stone_icon( $atts, $content) {
    extract( shortcode_atts( array(
        'icon_title' => 'icon_title',
        'icon_icon' => 'icon_icon',

    ), $atts ) );
    ob_start();

    ?>
    <h5 class="alpha-40 transition">
        <i class="fa fa-star" aria-hidden="true"></i> Best For You</h5>

    <?php
    $output = ob_get_contents();
    ob_get_clean();
    return $output;
}
add_shortcode( 'stone_icon', 'stone_icon');

function stone_steps( $atts, $content) {
    extract( shortcode_atts( array(
        'step_title' => 'step_title',
        'icon_title' => 'icon_title',
        'sub_title' => 'sub_title',
        'step_image' => 'step_image'

    ), $atts ) );

    $i_image = wp_get_attachment_image_src( $step_image ) ;

    ob_start();

    ?>
    <span><?=$icon_title?> <img src="<?=$i_image[0]?>"></span>
    <h4><?=$step_title?></h4>
    <p><?=$sub_title?></p>
    <?php
    $output = ob_get_contents();
    ob_get_clean();
    return $output;

    ?>

    <?php
}
add_shortcode( 'stone_steps', 'stone_steps');

// Element HTML
function vc_infobox_html( $atts ) {

    // Params extraction
    extract(
        shortcode_atts(
            array(
                'title'   => '',
                'text' => '',
            ),
            $atts
        )
    );

    // Fill $html var with data
    $html = '
    <div class="vc-infobox-wrap">
     
        <h2 class="vc-infobox-title">' . $title . '</h2>
         
        <div class="vc-infobox-text">' . $text . '</div>
     
    </div>';

    return $html;



};

function stone_banner_func( $atts, $content) {
    $data_query = '';
    extract( shortcode_atts( array(
        //'num_slides' => 'num_slides',
        'data_query'    => '',
        ///'header' => 'header'
    ), $atts ) );

    $data_query .= '|post_type:slider';

    list($query_args, $query_body)  = vc_build_loop_query( $data_query );

    if ($query_body->have_posts()):
        ?>

        <div class="slider-container" >
            <div class="slider fullwidth-section parallax" style="background-image: url(<?=$banner_img[0]?>)"></div>
        </div>
    <?php endif;?>
    <?php

}
add_shortcode( 'stone_banner', 'stone_banner_func');

/*
Element Description: VC Info Box
*/

// Element Class
class vcInfoBox extends WPBakeryShortCode {

    // Element Init
    function __construct() {
        add_action( 'init', array( $this, 'vc_infobox_mapping' ) );
        add_shortcode( 'vc_infobox', array( $this, 'vc_infobox_html' ) );
    }

    // Element Mapping
    public function vc_infobox_mapping() {

        // Stop all if VC is not enabled
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }

        // Map the block with vc_map()
        vc_map(
            array(
                'name' => __('VC Infobox', 'text-domain'),
                'base' => 'vc_infobox',
                'description' => __('Another simple VC box', 'text-domain'),
                'category' => __('My Custom Elements', 'text-domain'),
                'icon' => get_template_directory_uri().'/assets/img/vc-icon.png',
                'params' => array(

                    array(
                        'type' => 'textfield',
                        'holder' => 'h3',
                        'class' => 'title-class',
                        'heading' => __( 'Title', 'text-domain' ),
                        'param_name' => 'title',
                        'value' => __( 'Default value', 'text-domain' ),
                        'description' => __( 'Box Title', 'text-domain' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Custom Group',
                    ),

                    array(
                        'type' => 'textarea',
                        'holder' => 'div',
                        'class' => 'text-class',
                        'heading' => __( 'Text', 'text-domain' ),
                        'param_name' => 'text',
                        'value' => __( 'Default value', 'text-domain' ),
                        'description' => __( 'Box Text', 'text-domain' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Custom Group',
                    ),

                ),
            )
        );

    }


    // Element HTML
    public function vc_infobox_html( $atts ) {

        // Params extraction
        extract(
            shortcode_atts(
                array(
                    'title'   => '',
                    'text' => '',
                ),
                $atts
            )
        );

        // Fill $html var with data
        $html = '
        <div class="vc-infobox-wrap">
         
            <h2 class="vc-infobox-title">' . $title . '</h2>
             
            <div class="vc-infobox-text">' . $text . '</div>
         
        </div>';

        return $html;

    }

} // End Element Class


// Element Class Init
new vcInfoBox();


function stone_homecourse_func( $atts, $content) {
    extract( shortcode_atts( array(
        'heading' => 'heading',
        'f_title' => 'f_title',
        'f_text' => 'f_text',
        'f_icon' => 'f_icon',
        'f_link' => 'f_link',

        's_title' => 's_title',
        's_text' => 's_text',
        's_icon' => 's_icon',
        's_link' => 's_link',

        't_title' => 't_title',
        't_text' => 't_text',
        't_icon' => 't_icon',
        't_link' => 't_link',

    ), $atts ) );

    ?>

    <section id="menudown">
        <div class="section servicesSection">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 big-title2 text-center">
                        <h1 class="wite-text"><?=$heading?></h1>
                    </div>
                    <div class="col-md-4 col-sm-6 middle-block">
                        <div class="col-md-11 col-sm-12 service-box service-center animated slideInUp" data-animation-type="slideInUp" data-animation-delay="0" style="animation-duration: 1s; visibility: visible;">
                            <div class="service-icon">
                                <i class="<?=$f_icon?> icon-large"></i>
                            </div>
                            <div class="service-content">
                                <h4><?=$f_title?></h4>
                                <p class="left-text"><?=$f_text?><a class="read-more" href="<?=$f_link?>">Read More...</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 middle-block">
                        <div class="col-md-11 col-sm-12 service-box service-center animated slideInUp" data-animation-type="slideInUp" data-animation-delay="0.6" style="animation-duration: 1s; visibility: visible; animation-delay: 0.6s;">
                            <div class="service-icon">
                                <i class="<?=$s_icon?>  icon-large"></i>
                            </div>
                            <div class="service-content">
                                <h4><?=$s_title?> </h4>
                                <p class="left-text"><?=$s_text?>  <a class="read-more" href="<?=$s_link?> ">Read More...</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="col-md-11 col-sm-12 service-box service-center animated slideInUp" data-animation-type="slideInUp" data-animation-delay="0.9" style="animation-duration: 1s; visibility: visible; animation-delay: 0.9s;">
                            <div class="service-icon">
                                <i class="<?=$t_icon?> icon-large"></i>
                            </div>
                            <div class="service-content">
                                <h4><?=$t_title?> </h4>
                                <p class="left-text"><?=$t_text?> <a class="read-more" href="<?=$t_link?>">Read More...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .container -->
        </div>
    </section>

    <?php
}
add_shortcode( 'stone_homecourse', 'stone_homecourse_func');

function about_stone_func( $atts, $content) {
    extract( shortcode_atts( array(
        'cover_image' => 'cover_image',
        'i_image' => 'i_image',
        'title' => 'title',
        'job_title' => 'job_title',
        'about_text' => 'about_text',
        'about_link' => 'about_link',
    ), $atts ) );
    $cover_image = wp_get_attachment_image_src( $cover_image, array(380,140) ) ;
    $i_image = wp_get_attachment_image_src( $i_image, array(130,130) ) ;
    ?>

    <div class="col-md-4 col-sm-6 col-xs-12 box">
        <!-- Classic Heading -->
        <h4 class="classic-title">About stone</h4>
        <div class="card hovercard">
            <div class="cardProinner">

                <div class="cardheader" style="background: url(<?=$cover_image[0]?>);">
                </div>
                <div class="avatar">
                    <img alt="" src=" <?=$i_image[0]?>">
                </div>
                <div class="info">
                    <div class="title">
                        <a target="_blank" href=""><?=$title?></a>
                    </div>
                    <div class="desc"><?=$job_title?></div>
                </div>
                <div class="card_post-content" style="padding-bottom:14px;">
                    <p><?=$about_text?><a class="read-more" href="<?=$about_link?>">Read More</a></p>
                </div>
                <div class="btn-pref btn-group btn-group-justified btn-group-lg">
                    <div class="btn btn-default facebookBTN">
                        <i class="fa fa-facebook"></i>
                        <div class="hidden-xs">30K</div>
                    </div>
                    <div class="btn btn-default twitterBTN">
                        <i class="fa fa-twitter"></i>
                        <div class="hidden-xs">10K</div>
                    </div>
                    <div class="btn btn-default googleBTN">
                        <i class="fa fa-google-plus"></i>
                        <div class="hidden-xs">1K</div>
                    </div>
                    <div class="btn btn-default cardmoreBTN">
                        <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
}
add_shortcode( 'about_stone', 'about_stone_func');

function stone_twitter_func( $atts, $content) {
    extract( shortcode_atts( array(
        'twitter_user' => 'twitter_user',
        //'header' => 'header'
    ), $atts ) );

    ?>

    <div class="col-md-4 col-sm-6 col-xs-12 box">
        <div class="twPc-div">
            <a class="twPc-bg twPc-block"></a>
            <div>
                <div class="twPc-button">
                    <iframe id="twitter-widget-1" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-follow-button twitter-follow-button-rendered" title="Twitter Follow Button" src="https://platform.twitter.com/widgets/follow_button.b8b8e09be0884a395c5ae18831ce1cc0.en.html#dnt=true&amp;id=twitter-widget-1&amp;lang=en&amp;screen_name=<?=$twitter_user?>&amp;show_count=false&amp;show_screen_name=false&amp;size=l&amp;time=1486052438566" data-screen-name="<?=$twitter_user?>" style="position: static; visibility: visible; width: 81px; height: 28px;"></iframe>
                    <script>
                        ! function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0],
                                p = /^http:/.test(d.location) ? 'http' : 'https';
                            if (!d.getElementById(id)) {
                                js = d.createElement(s);
                                js.id = id;
                                js.src = p + '://platform.twitter.com/widgets.js';
                                fjs.parentNode.insertBefore(js, fjs);
                            }
                        }(document, 'script', 'twitter-wjs');
                    </script>
                </div>
                <a title="Mert Salih Kaplan" href="https://twitter.com/<?=$twitter_user?>" class="twPc-avatarLink">
                    <img alt="stone Hassan" src="<?=get_stylesheet_directory_uri()?>/images/pro_Card_img.png" class="twPc-avatarImg">
                </a>
                <div class="twPc-divUser">
                    <div class="twPc-divName">
                        <a href="https://twitter.com/<?=$twitter_user?>">stone Hassan</a>
                    </div>
                    <span style="margin-top:-3px; display:block;">
                        <a href="https://twitter.com/<?=$twitter_user?>">@<span>stonehassan</span></a>
                    </span>
                </div>
                <div class="twPc-divStats">
                    <ul class="twPc-Arrange">
                        <li class="twPc-ArrangeSizeFit">
                            <a href="https://twitter.com/mertskaplan" title="9.840 Tweet">
                                <span class="twPc-StatLabel twPc-block">Tweets</span>
                                <span class="twPc-StatValue">14.7K</span>
                            </a>
                        </li>
                        <li class="twPc-ArrangeSizeFit">
                            <a href="https://twitter.com/mertskaplan/following" title="885 Following">
                                <span class="twPc-StatLabel twPc-block">Following</span>
                                <span class="twPc-StatValue">105K</span>
                            </a>
                        </li>
                        <li class="twPc-ArrangeSizeFit">
                            <a href="https://twitter.com/mertskaplan/followers" title="1.810 Followers">
                                <span class="twPc-StatLabel twPc-block">Followers</span>
                                <span class="twPc-StatValue">12.3K</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-12 widewidth hidden-xs tw_feeds border_B">
                <a class="twitter-timeline" href="https://twitter.com/<?=$twitter_user?>" data-widget-id="541082371076808705">Tweets by @<?=$twitter_user?></a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>
        </div>
    </div>

    <?php
}
add_shortcode( 'stone_twitter', 'stone_twitter_func');


function stone_slide_func( $atts, $content) {
    $data_query = '';
    extract( shortcode_atts( array(
        //'num_slides' => 'num_slides',
        'data_query'    => '',
        ///'header' => 'header'
    ), $atts ) );

    ob_start();
    $data_query .= '|post_type:slider';


    list($query_args, $query_body)  = vc_build_loop_query( $data_query );
    ?>
    <section id="main-slider">
        <div class="intro-slick ">
            <?php if ($query_body->have_posts()):
                while($query_body->have_posts()):$query_body->the_post();
                    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                    ?>
                    <div class="slick-item" style="background-image: url(<?=$featured_img_url?>)">
                        <h1 class="slide-title text-center"><?=the_title()?></h1>
                        <p class="sub-title text-center"> <?=get_the_excerpt()?></p>
                    </div>
                <?php endwhile; endif; ?>
        </div>
    </section>



    <?php
    $output = ob_get_contents();
    ob_get_clean();
    return $output;
}

add_shortcode( 'stone_slide', 'stone_slide_func');


function stone_services( $atts, $content) {
    $data_query = '';
    extract( shortcode_atts( array(
        'heading' => 'heading',
        'sub_heading' => 'sub_heading',
        'data_query'    => '',

    ), $atts ) );
    //pr



    $data_query .= '|post_type:service';

    list($query_args, $query_body)  = vc_build_loop_query( $data_query );

    if ($query_body->have_posts()):
        ?>


        <!--   services section   -->
        <section class="services" >
            <div class="container">
                <h2 class="text-center section-heading-2 "><?=$heading?></h2>
                <span class="pink-color section-small"><?=$sub_heading?></span>

                <div class="row">
                    <?php   while($query_body->have_posts()):$query_body->the_post();?>
                        <div class="col-lg-4 col-sm-6 col-xs-12">
                            <div class="card service-card">
                                <?=the_post_thumbnail([350 , 188] , ['class' => 'card-img-top'])?>
                                <div class="card-body">
                                    <a href="<?=the_permalink()?>"><h5 class="card-text transition"><?=the_title()?></h5></a>
                                    <small><?=get_the_excerpt()?></small>
                                    <?php  if(get_post_meta(get_the_ID() , 'rw_startsfrom' , true) != ""):?>
                                        <div class="price">
                                            <small>START FROM</small>
                                            <strong><?=get_post_meta(get_the_ID() , 'rw_startsfrom' , true)?></strong>
                                        </div>
                                    <?php endif;?>
                                </div>
                                <div class="middle-box">
                                    <a href="https://hotstone.mysalononline.com/Booking/?sid=0" class="booking-link">book an appointment</a>
                                </div>
                            </div>
                        </div>

                    <?php endwhile;?>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="container d-flex h-100">
                            <div class="row justify-content-center align-self-center mr-auto ml-auto">
                                <a href="<?=get_permalink(235)?>" class="btn btn-primary btn-lg">Check All<div class="ripple-container"></div></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php endif;?>
    <?php
}

add_shortcode( 'stone_services', 'stone_services');


function stone_awards( $atts, $content) {
    $data_query = '';
    extract( shortcode_atts( array(
        'heading' => 'heading',
        'data_query'    => '',

    ), $atts ) );
    //pr


    $page_sr = get_post(262);

    $data_query .= '|post_type:award';

    list($query_args, $query_body)  = vc_build_loop_query( $data_query );

    if ($query_body->have_posts()):
        ?>

        <!--Awards-slider-->
        <section id="awards-slider">
            <div class="container">

                <a href="<?=get_permalink($page_sr->ID)?>"><h2 class="text-center awards-heading "><?=$heading?></h2></a>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="awards-slick">
                            <?php   while($query_body->have_posts()):$query_body->the_post();?>
                                <div class="awards-item">
                                    <?=the_post_thumbnail([350 , 188] , ['class' => 'awards-item-img'])?>
                                    <h4 class="awards-title text-center"><?=the_title()?></h4>
                                    <p class="awards-sub-title text-center"><?=get_the_excerpt()?></p>
                                </div>
                            <?php endwhile;?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/Awards-slider-->



    <?php endif;?>
    <?php
}

add_shortcode( 'stone_awards', 'stone_awards');


function stone_posts_func( $atts, $content) {
    $data_query = '';
    extract( shortcode_atts( array(
        'heading' => 'heading',
        'data_query'    => '',
        'intro' => 'intro',
        'background_image' => 'background_image'
    ), $atts ) );
    //pr



    $data_query .= '|post_type:post';

    list($query_args, $query_body)  = vc_build_loop_query( $data_query );

    if ($query_body->have_posts()):
        ?>
        <div class="col-md-8">

            <div class="latest-posts">
                <h4 class="classic-title"><?=$heading?></h4>
                <!-- Posts 1 -->
                <?php while($query_body->have_posts()):$query_body->the_post();?>
                    <div class="post-row-border">
                        <div class="post-row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 blog-img">
                                <figure class="animated" data-animation-type="fadeInLeft" data-animation-duration="1">
                                    <a href="<?=the_permalink()?>" title="" class="hover-effect">
                                        <?=the_post_thumbnail(array(355,190) , array('class' => 'img-responsive'))?>
                                    </a>
                                </figure>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <h3 class="post-title"><a href="<?=the_permalink()?>"><?=the_title()?></a></h3>
                                <div class="post-content">
                                    <p><?=get_the_excerpt()?><a class="read-more" href="<?=the_permalink()?>">Continue Reading</a></p>
                                </div>
                                <ul class="post-meta">
                                    <li><i class="fa fa-pencil-square-o"></i><a href="#"><?php the_author()?></a></li>
                                    <li><i class="fa fa-calendar-o"></i><?=the_time('d M Y')?></li>
                                    <!--<li><i class="fa fa-share-alt"></i><a href="#">30</a></li> -->
                                    <li><i class="fa fa-comments-o"></i><a href="#"><?=comments_number()?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endwhile;?>

                <a href="<?=get_the_permalink(92)?>" class="btn-system btn-large ">View more</a>
            </div>
        </div>
    <?php endif;?>
    <?php
}

add_shortcode( 'stone_posts', 'stone_posts_func');

function testimonial_func( $atts, $content) {
    $data_query = '';
    extract( shortcode_atts( array(
        'heading'=> 'heading',
        'data_query'    => '',
        'sub_heading' => 'sub_heading'
    ), $atts ) );
    ob_start();
    $data_query .= '|post_type:testimonial';
    list($query_args, $query_body)  = vc_build_loop_query( $data_query );

    if ($query_body->have_posts()):
        ?>



        <div class="testimonials">
            <div class="container">
                <h2 class="text-center section-heading-3 white-color"><?=$heading?></h2>
                <span class="gold-color section-small"><?=$sub_heading?></span>
                <div class="tz-gallery">

                    <div class="row">

                        <?php $x=0;while($query_body->have_posts()):$query_body->the_post(); $x++;
                            $featured_img_url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID()) , 'large');
                            ?>
                            <div class="col-sm-6 col-md-4">
                                <a class="lightbox" href="<?=$featured_img_url[0]?>">
                                    <?=the_post_thumbnail('thumbnail' )?>
                                </a>
                            </div>

                        <?php endwhile;?>
                    </div>
                </div>
            </div>
        </div>

    <?php endif?>
    <?php
    $output = ob_get_contents();
    ob_get_clean();
    return $output;
}

add_shortcode( 'stone_testimonial', 'testimonial_func');

function stone_days_func( $atts, $content) {
    $data_query = '';
    extract( shortcode_atts( array(
        'title' => 'title',
        'sub_title' => 'sub_title',
        'special_image' => 'special_image',
        'left_title' => 'left_title',
        'left_sub_title' => 'left_sub_title',
        'footer_title' => 'footer_title',
        'button_title' => 'button_title',
        'button_link' => 'button_link',
        'sub_heading' => 'sub_heading'
    ), $atts ) );




    $data_query .= '|post_type:special';
    list($query_args, $query_body)  = vc_build_loop_query( $data_query );
    ob_start();

    $date   = date('Y-m-d');
    $start =  date('Y-m-d') ;
    $end   =  date("Y-m-d", strtotime("$start +1 month"));




    $args = array(
        'post_type' => 'special',
        'posts_per_page' => 1,
        'order'          => 'ASC',
        'orderby'       => 'meta_value',
        'meta_key'=>'rw_date',
        'meta_query' => array(
            'key'           => 'rw_date',
            'compare'       => '>=',
            'value'         => date('Y-m-d'),
            'type'          => 'DATE'
        )
    );
    $query = new WP_Query( $args );

    if ($query->have_posts()):

        ?>


        <div class="special-days">
            <div class="container">
                <h2 class="text-center section-heading-3 white-color"><?=$title?></h2>
                <span class="gold-color section-small"><?=$sub_title?></span>
                <?php $x=0;
                while($query->have_posts()):$query->the_post(); $x++;
                    //if($x == 1):
                        ?>
                        <div class="row">
                            <div class="col-lg-5 offset-lg-1">
                                <div class="mr-40"></div>
                                <h2 class="gold-color"><?=the_title()?></h2>
                                <p class="white-color"><?=get_the_excerpt()?></p>

                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="card bg-dark text-white">
                                    <?=the_post_thumbnail(array(540 , 288), array('class' => 'card-img'))?>
                                </div>
                            </div>
                            <div class="col-sm-12 text-center">
                                <div class="mr-40"></div>
                                <h4 class="gold-color"><?=$footer_title?></h4>
                                <a href="<?=the_permalink(59)?>" class="btn btn-primary "><?=$button_title?></a>
                                <div class="mr-40"></div>
                            </div>
                        </div>
                    <?php
                   // endif;
                endwhile;?>
                <hr class="dark-hr">
            </div>
        </div>


    <?php
    endif;
    $output = ob_get_contents();
    ob_get_clean();
    return $output;
}

add_shortcode( 'stone_days', 'stone_days_func');


