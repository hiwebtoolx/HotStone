<?php
/**
 * Created by PhpStorm.
 * User: Magdy
 * Date: 03/15/2017
 * Time: 11:50 PM
 */
$theme_options = get_option( 'theme_options' );

if($theme_options['layout_options'] == 2 ){
    $body_box = 'bboxed';
    $entire_box = 'boxed';
}elseif($theme_options['layout_options'] == 3){
    $body_box = 'bboxed';
    $entire_box = 'boxed-2';
}else{
    $body_box = '';
    $entire_box = '';
}
if($body_box != ''){
    $body_bck = $theme_options['background_image']['url'];

    $stl = 'style="background-image: url('.$body_bck.')"';
}else{
    $stl = '';
}

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
    'items_wrap'      => '<ul class="menu type1">%3$s</ul>',
    'depth'           => 3,
);
?>
<!Doctype html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 

    <link rel="shortcut icon" href="<?=$theme_options['favicon']['url']?>">
    <link rel="apple-touch-icon" href="<?=$theme_options['apple-touch-icon']['url']?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?=$theme_options['apple-touch-icon1']['url']?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?=$theme_options['apple-touch-icon2']['url']?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?=$theme_options['apple-touch-icon3']['url']?>">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->



    <?php wp_head(); ?>
     
  <!-- CSS for IE -->
    <!--[if lte IE 9]>
    <link rel="stylesheet" type="text/css" href="css/ie.css" />
    <![endif]-->
    
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
    <![endif]-->
    <style type="text/css">
    .timeline-Widget {
    max-width: 1200px;
    background-color: #fff;
    border-radius: 0px !important; }
    </style>

 
 
</head>

<body>
 
<?php if($theme_options['show_preloader']):?>
<div class="loader-wrapper">
    <div id="large-header" class="large-header">
        <h1 class="loader-title"><span></span> </h1>
    </div>
</div>
<?php endif?>
<!-- **Wrapper** -->
 <?php //$theme_options['site_logo']['url']?>
     <div id="page-wrapper">
        <header id="header" class="navbar-static-top">
            <div class="topnav hidden-xs">
                <div class="container">
                    <div class="col-lg-5 pull-right" style="padding-right: 0px;">
                        <!-- Start Social Links -->
                        <ul class="social-list">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                        <!-- End Social Links -->
                    </div>
                    
                </div>
            </div>
            
            <div class="main-header">
                
                <a href="#mobile-menu-01" data-toggle="collapse" class="mobile-menu-toggle">
                    Mobile Menu Toggle
                </a>
                <div class="container hidden-lg hidden-md">
                    <h1 class="logo navbar-brand">
                    <a href="index.html" title="am - home">
                        <img src="<?=get_stylesheet_directory_uri()?>/images/logo.png" alt="am HTML5 Template" />
                    </a>
                    </h1>
                    
                    <nav id="main-menu" role="navigation">
                        <ul class="menu">
                            <li class="menu-item active">
                                <a href="New_Index.html">Home</a>
                            </li>
                            <li class="menu-item">
                                <a href="AboutMe.html">About Me</a>
                            </li>
                            <li class="menu-item">
                                <a href="Blog-Outer.html">Blog</a>
                            </li>
                            <li class="menu-item">
                                <a href="TrainingCourses_Outer.html">Training Courses</a>
                            </li>
                            <li class="menu-item">
                                <a href="ContactMe.html">Contact Me</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                
                <nav id="mobile-menu-01" class="mobile-menu collapse">
                    <ul id="mobile-primary-menu" class="menu">
                        <li class="menu-item active">
                                <a href="New_Index.html">Home</a>
                            </li>
                            <li class="menu-item">
                                <a href="AboutMe.html">About Me</a>
                            </li>
                            <li class="menu-item">
                                <a href="Blog-Outer.html">Blog</a>
                            </li>
                            <li class="menu-item">
                                <a href="TrainingCourses_Outer.html">Training Courses</a>
                            </li>
                            <li class="menu-item">
                                <a href="ContactMe.html">Contact Me</a>
                            </li>
                    </ul>
                    
                    <ul class="mobile-topnav container">
                        <div id="custom-search-input">
                            <div class="input-group col-md-12">
                                <input type="text" class="form-control input-lg" placeholder="Search here..." />
                                <span class="input-group-btn">
                                    <button class="btn btn-info btn-lg" type="button">
                                    <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                    
                </nav>
            </div>
        </header>
        <section id="content">

            <!-- Start Home Page Slider -->
            <section id="home">
                <div class="container">
                   <!--  <div id="social-float">
            <a class="newsletter_scroll" href="#newsletter">News Letter</a>
    </div> -->
                    <div class="row">
                        
                        <div class="col-md-3 col-sm-3 col-xs-12 hidden-sm hidden-xs">
                            <div class="toplogo">
                                <div class="logo_v2 ">
                                    <img src="<?=get_stylesheet_directory_uri()?>/images/Logo_v2.png" class="img-responsive" alt="Logo" />
                                </div>
                                <!--Nav-->
                                <div class="mainmenu hidden-xs">
                                    <div class=" widget widget-categories">
                            <ul>
                                            <li>
                                                <a class="active" href="New_Index.html">Home</a>
                                            </li>
                                            <li>
                                                <a href="AboutMe.html">About Me</a>
                                            </li>
                                            <li>
                                                <a href="Blog-Outer.html">Blog</a>
                                            </li>
                                            <li>
                                               <a href="TrainingCourses_Outer.html">Training Courses</a>
                                            </li>
                                            <li>
                                                <a href="ContactMe.html">Contact Me</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="newsearch border_B">
                                    <div id="custom-search-input">
                                        <div class="input-group col-md-12">
                                            <input type="text" class="form-control input-lg" placeholder="Search here..." />
                                            <span class="input-group-btn">
                                                <button class="btn btn-info btn-lg" type="button">
                                                <i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
                            <div class="mainslider">
                                <div class="row slider_v2">
                                    <div id="carousel-example-generic" class="carousel slide " data-ride="carousel">
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="col-item">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left:0px; padding-right:0px;">
                                                                <img class="img-responsive" src="<?=get_stylesheet_directory_uri()?>/images/slider/slider_image.png" alt="slider">
                                                            </div>
                                                            <div class="info" style="border-bottom:1px solid #fff;">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 slidertext" style="border-bottom:1px solid #eee;">
                                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop pub.</div>
                                                                </div>
                                                                <div class="clearfix">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="col-item">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left:0px; padding-right:0px;">
                                                                <img class="img-responsive" src="<?=get_stylesheet_directory_uri()?>/images/slider/slider_image.png" alt="slider">
                                                            </div>
                                                            <div class="info" style="border-bottom:1px solid #fff;">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 slidertext" style="border-bottom:1px solid #eee;">
                                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop pub.</div>
                                                                </div>
                                                                <div class="clearfix">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="col-item">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left:0px; padding-right:0px;">
                                                                <img class="img-responsive" src="<?=get_stylesheet_directory_uri()?>/images/slider/slider_image.png" alt="slider">
                                                            </div>
                                                            <div class="info" style="border-bottom:1px solid #fff;">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 slidertext" style="border-bottom:1px solid #eee;">
                                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop pub.</div>
                                                                </div>
                                                                <div class="clearfix">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev" style="display: block;">
                                            <span><i class="fa fa-angle-left"></i></span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                            <span><i class="fa fa-angle-right"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Home Page Slider -->
            <!-- Start servicesSection -->
            <section id="menudown">
                <div class="section servicesSection">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 big-title2 text-center">
                                <h1 class="wite-text">Training Courses</h1>
                            </div>
                            <div class="col-md-4 col-sm-6 middle-block">
                                <div class="col-md-11 col-sm-12 service-box service-center animated slideInUp" data-animation-type="slideInUp" data-animation-delay="0" style="animation-duration: 1s; visibility: visible;">
                                    <div class="service-icon">
                                        <i class="fa fa-cogs icon-large"></i>
                                    </div>
                                    <div class="service-content">
                                        <h4>Digital Strategy</h4>
                                        <p class="left-text">Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of the printing. <a class="read-more" href="#">Read More...</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 middle-block">
                                <div class="col-md-11 col-sm-12 service-box service-center animated slideInUp" data-animation-type="slideInUp" data-animation-delay="0.6" style="animation-duration: 1s; visibility: visible; animation-delay: 0.6s;">
                                    <div class="service-icon">
                                        <i class="fa fa-users icon-large"></i>
                                    </div>
                                    <div class="service-content">
                                        <h4>Social Media Marketing</h4>
                                        <p class="left-text">Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of the printing. <a class="read-more" href="#">Read More...</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="col-md-11 col-sm-12 service-box service-center animated slideInUp" data-animation-type="slideInUp" data-animation-delay="0.9" style="animation-duration: 1s; visibility: visible; animation-delay: 0.9s;">
                                    <div class="service-icon">
                                        <i class="fa fa-desktop icon-large"></i>
                                    </div>
                                    <div class="service-content">
                                        <h4>Content Marketing</h4>
                                        <p class="left-text">Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of the printing. <a class="read-more" href="#">Read More...</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .container -->
                </div>
            </section>
            <!-- End servicesSection -->
            <div class="blogSection">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <!-- Start Recent Posts Carousel -->
                            <div class="latest-posts">
                                <h4 class="classic-title">Most Recent Blog Posts</h4>
                                <!-- Posts 1 -->
                                <div class="post-row-border">
                                    <div class="post-row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 blog-img">
                                            <figure class="animated" data-animation-type="fadeInLeft" data-animation-duration="1">
                                                <a href="#" title="" class="hover-effect">
                                                    <img class="img-responsive" src="<?=get_stylesheet_directory_uri()?>/images/blog-img01.png" alt="blog-img01">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <h3 class="post-title"><a href="#">The standard Lorem Ipsum passage, used since the 1500s</a></h3>
                                            <div class="post-content">
                                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborum. Lorem ipsum dolor sit amet,...<a class="read-more" href="#">Continue Reading</a></p>
                                            </div>
                                            <ul class="post-meta">
                                                <li><i class="fa fa-pencil-square-o"></i><a href="#">Amir Hassan</a></li>
                                                <li><i class="fa fa-calendar-o"></i>06 Jan 2015</li>
                                                <li><i class="fa fa-share-alt"></i><a href="#">30</a></li>
                                                <li><i class="fa fa-comments-o"></i><a href="#">05</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Posts 2 -->
                                <div class="post-row-border">
                                    <div class="post-row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 blog-img">
                                            <figure class="animated" data-animation-type="fadeInLeft" data-animation-duration="1" data-animation-delay="0.4"> 
                                                <a href="#" title="" class="hover-effect">
                                                    <img class="img-responsive" src="<?=get_stylesheet_directory_uri()?>/images/blog-img02.png" alt="blog-img01">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <h3 class="post-title"><a href="#">The standard Lorem Ipsum passage, used since the 1500s</a></h3>
                                            <div class="post-content">
                                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborum. Lorem ipsum dolor sit amet,...<a class="read-more" href="#">Continue Reading</a></p>
                                            </div>
                                            <ul class="post-meta">
                                                <li><i class="fa fa-pencil-square-o"></i><a href="#">Amir Hassan</a></li>
                                                <li><i class="fa fa-calendar-o"></i>06 Jan 2015</li>
                                                <li><i class="fa fa-share-alt"></i><a href="#">30</a></li>
                                                <li><i class="fa fa-comments-o"></i><a href="#">05</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Posts 3 -->
                                <div class="col post-row-border">
                                    <div class="post-row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 blog-img">
                                            <figure class="animated" data-animation-type="fadeInLeft" data-animation-duration="1">
                                                <a href="#" title="" class="hover-effect">
                                                    <img class="img-responsive" src="<?=get_stylesheet_directory_uri()?>/images/blog-img03.png" alt="blog-img01">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <h3 class="post-title"><a href="#">The standard Lorem Ipsum passage, used since the 1500s</a></h3>
                                            <div class="post-content">
                                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborum. Lorem ipsum dolor sit amet,...<a class="read-more" href="#">Continue Reading</a></p>
                                            </div>
                                            <ul class="post-meta">
                                                <li><i class="fa fa-pencil-square-o"></i><a href="#">Amir Hassan</a></li>
                                                <li><i class="fa fa-calendar-o"></i>06 Jan 2015</li>
                                                <li><i class="fa fa-share-alt"></i><a href="#">30</a></li>
                                                <li><i class="fa fa-comments-o"></i><a href="#">05</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Posts 4 -->
                                <div class="post-row-border ">
                                    <div class="post-row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 blog-img">
                                            <figure class="animated" data-animation-type="fadeInLeft" data-animation-duration="1" data-animation-delay="0.4">
                                                <a href="#" title="" class="hover-effect">
                                                    <img class="img-responsive" src="<?=get_stylesheet_directory_uri()?>/images/blog-img01.png" alt="blog-img01">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <h3 class="post-title"><a href="#">The standard Lorem Ipsum passage, used since the 1500s</a></h3>
                                            <div class="post-content">
                                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborum. Lorem ipsum dolor sit amet,...<a class="read-more" href="#">Continue Reading</a></p>
                                            </div>
                                            <ul class="post-meta">
                                                <li><i class="fa fa-pencil-square-o"></i><a href="#">Amir Hassan</a></li>
                                                <li><i class="fa fa-calendar-o"></i>06 Jan 2015</li>
                                                <li><i class="fa fa-share-alt"></i><a href="#">30</a></li>
                                                <li><i class="fa fa-comments-o"></i><a href="#">05</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn-system btn-large btn-block">View more</button>
                            </div>
                            <!-- End Recent Posts -->
                        </div>
                        <!-- Card Profile -->
                        <div class="col-md-4 col-sm-6 col-xs-12 box">
                            <!-- Classic Heading -->
                            <h4 class="classic-title">About Amir</h4>
                            <div class="card hovercard">
                            <div class="cardProinner">
                                
                                    <div class="cardheader">
                                    </div>
                                    <div class="avatar">
                                        <img alt="" src="<?=get_stylesheet_directory_uri()?>/images/pro_Card_img.png">
                                    </div>
                                    <div class="info">
                                        <div class="title">
                                            <a target="_blank" href="http://amirhassan.com/">Amir Hassan</a>
                                        </div>
                                        <div class="desc">Digital Marketing</div>
                                    </div>
                                    <div class="card_post-content" style="padding-bottom:14px;">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry remaining essentially unchanged Lorem Ipsum is simply dummy text....<a class="read-more" href="#">Read More</a></p>
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
                        <!-- Card Profile End -->
                        <!-- Twitter Card -->
                        <div class="col-md-4 col-sm-6 col-xs-12 box">
                            <div class="twPc-div">
                                <a class="twPc-bg twPc-block"></a>
                                <div>
                                    <div class="twPc-button">
                                        <iframe id="twitter-widget-1" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-follow-button twitter-follow-button-rendered" title="Twitter Follow Button" src="https://platform.twitter.com/widgets/follow_button.b8b8e09be0884a395c5ae18831ce1cc0.en.html#dnt=true&amp;id=twitter-widget-1&amp;lang=en&amp;screen_name=mertskaplan&amp;show_count=false&amp;show_screen_name=false&amp;size=l&amp;time=1486052438566" data-screen-name="mertskaplan" style="position: static; visibility: visible; width: 81px; height: 28px;"></iframe>
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
                                    <a title="Mert Salih Kaplan" href="https://twitter.com/AmirHassan" class="twPc-avatarLink">
                                        <img alt="Amir Hassan" src="<?=get_stylesheet_directory_uri()?>/images/pro_Card_img.png" class="twPc-avatarImg">
                                    </a>
                                    <div class="twPc-divUser">
                                        <div class="twPc-divName">
                                            <a href="https://twitter.com/AmirHassan">Amir Hassan</a>
                                        </div>
                                        <span style="margin-top:-3px; display:block;">
                                            <a href="https://twitter.com/AmirHassan">@<span>amirhassan</span></a>
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
                                    <a class="twitter-timeline" href="https://twitter.com/RayAnthonyRCC" data-widget-id="541082371076808705">Tweets by @RayAnthonyRCC</a>
                                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                                </div>
                            </div>
                        </div>
                        <!-- Twitter Card End-->
                        
                    </div>
                </div>
            </div>
            <!-- testimonials_section -->
            <section>
                <div class="section testimonials_section">
                    
                    <div class="col-md-offset-1 col-md-10  text-center" style="margin-top: 60px; margin-bottom: 35px;">
                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                            <!-- Bottom Carousel Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#quote-carousel" data-slide-to="1"></li>
                                <li data-target="#quote-carousel" data-slide-to="2"></li>
                            </ol>
                            
                            <!-- Carousel Slides / Quotes -->
                            <div class="carousel-inner">
                                
                                <!-- Quote 1 -->
                                <div class="item active">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-3 text-center zindex1">
                                                <img class="img-circle" src="<?=get_stylesheet_directory_uri()?>/images/avatars/01.jpg" style="width: 140px;height:140px;">
                                            </div>
                                            <div class="col-sm-9 zindex2">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu pretium mauris.</br>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu pretium mauris.</p>
                                                <small>Amir Hassan, TE Data, Cairo, Egypt</small>
                                            </div>
                                            
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 2 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-3 text-center">
                                                <img class="img-circle" src="<?=get_stylesheet_directory_uri()?>/images/avatars/02.jpg" style="width: 140px;height:140px;">
                                            </div>
                                            <div class="col-sm-9">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu pretium mauris.</br>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu pretium mauris.</p>
                                                <small>Amir Hassan, TE Data, Cairo, Egypt</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 3 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-3 text-center">
                                                <img class="img-circle" src="<?=get_stylesheet_directory_uri()?>/images/avatars/03.jpg" style="width: 140px;height:140px;">
                                            </div>
                                            <div class="col-sm-9">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu pretium mauris.</br>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu pretium mauris.</p>
                                                <small>Amir Hassan, TE Data, Cairo, Egypt</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                            
                            <!-- Carousel Buttons Next/Prev -->
                            <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                            <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Testimonials Section -->
            </section>
            <!-- Start Most Recent Blog Posts Section -->
            <div class="blogSection">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <!-- Start Recent Posts Carousel -->
                            <div class="latest-posts">
                                <h4 class="classic-title">Training Courses</h4>
                                <div class="col-sms-12 col-sm-6 col-md-6 training-width">
                                    <div class="post-row-border ">
                                        <div class="post-row">
                                            <article>
                                                <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.4">
                                                    <a href="#" class="hover-effect">
                                                        <img class="img-responsive" src="<?=get_stylesheet_directory_uri()?>/images/blog-img01.png" alt="blog-img01">
                                                    </a>
                                                </figure>
                                                <div class="details">
                                        <div class="training-txt">
                                            <h3 class="post-title"><a href="#">The standard Lorem Ipsum passage, used since the 1500s</a></h3>
                                          <!--   <div class="feedback">
                                                <div data-placement="bottom" data-toggle="tooltip" class="five-stars-container" title="" data-original-title="3 stars"><span style="width: 60%;" class="five-stars"></span></div>
                                                <span class="review pull-right">27 reviews</span>
                                            </div> -->
                                            <div class="post-content">
                                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborum. Lorem ipsum dolor sit amet,...</p>
                                            </div>
                                        </div>
                                        <div class="action">
                                            <button type="button" class="btn-system btn-large btn-block">Read More</button>
                                        </div>
                                    </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                                <!-- Posts 1 -->
                                <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 training-width">
                                    <div class="post-row-border ">
                                        <div class="post-row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 widewidth">
                                                <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1">
                                                    <a href="#" class="hover-effect">
                                                        <img class="img-responsive" src="<?=get_stylesheet_directory_uri()?>/images/blog-img01.png" alt="blog-img01">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 training-txt">
                                                <h3 class="post-title"><a href="#">The standard Lorem Ipsum passage, used since the 1500s</a></h3>
                                                <div class="post-content">
                                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborum. Lorem ipsum dolor sit amet,...<a class="read-more" href="#">Continue Reading</a></p>
                                                </div>
                                                <ul class="post-meta">
                                                    <li><i class="fa fa-pencil-square-o"></i><a href="#">Amir Hassan</a></li>
                                                    <li><i class="fa fa-calendar-o"></i>06 Jan 2015</li>
                                                    <li><i class="fa fa-share-alt"></i><a href="#">30</a></li>
                                                    <li><i class="fa fa-comments-o"></i><a href="#">05</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                -->
                                <!-- Posts 2 -->
                                     <div class="col-sms-12 col-sm-6 col-md-6 training-width2">
                                    <div class="post-row-border ">
                                        <div class="post-row">
                                            <article>
                                                <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.6">
                                                    <a href="#" class="hover-effect">
                                                        <img class="img-responsive" src="<?=get_stylesheet_directory_uri()?>/images/blog-img02.png" alt="blog-img01">
                                                    </a>
                                                </figure>
                                              <div class="details">
                                        <div class="training-txt">
                                            <h3 class="post-title"><a href="#">The standard Lorem Ipsum passage, used since the 1500s</a></h3>
                                           <!--  <div class="feedback">
                                                <div data-placement="bottom" data-toggle="tooltip" class="five-stars-container" title="" data-original-title="3 stars"><span style="width: 60%;" class="five-stars"></span></div>
                                                <span class="review pull-right">27 reviews</span>
                                            </div> -->
                                            <div class="post-content">
                                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborum. Lorem ipsum dolor sit amet,...</p>
                                            </div>
                                        </div>
                                        <div class="action">
                                            <button type="button" class="btn-system btn-large btn-block">Read More</button>
                                        </div>
                                    </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn-system btn-large btn-block">View more</button>
                            </div>
                            <!-- End Recent Posts -->
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 box" id="newsletter">
                            <!-- Classic Heading -->
                            <h4 class="classic-title">news letter</h4>
                            <div class="sidebar-border">
                                <div class="sidebar-inner">
                                    <!--  <div class="footer-widget mail-subscribe-widget"> -->
                                    <div class="post-content">
                                        <p>Type your email address below and recive our daily news letter for free</p>
                                    </div>
                                    <div class="input-group">
                                        <input type="text" class="newslett_input form-control" placeholder="Email Address">
                                        <span class="mail-icon"><i class="fa fa-envelope"></i></span>
                                        <span class="input-group-btn">
                                            <button class="newslett_btn btn btn-primary" type="button">Go!</button>
                                        </span>
                                    </div>
                                    <div class="post-content" style="padding-top:10px;">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry remaining essentially unchanged Lorem Ipsum is simply dummy text.</p>
                                    </div>
                                </div>
                                <!--  </div> -->
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 text-center box">
                            <iframe id="containerFB" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs&height=214&width=300&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=true&appId" width="" height="214" style="border:none;" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Fanfact -->
        <div class="section Fanfact">
            <div id="parallax-one" class="parallax">
                <div class="parallax-text-container-1">
                    <div class="parallax-text-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-6 col-sm-3 col-md-3">
                                    <div class="counter-item counters-box">
                                        <i class="fa fa-flask"></i>
                                        <div class="timer display-counter" data-value="07">7</div>
                                        <h3>years Experience</h3>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-3">
                                    <div class="counter-item counters-box">
                                        <i class="fa fa-cogs"></i>
                                        <div class="timer display-counter" data-value="10">10</div>
                                        <h3>Services</h3>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-3">
                                    <div class="counter-item counters-box">
                                        <i class="fa fa-users"></i>
                                        <div class="timer display-counter" data-value="1080">1080</div>
                                        <h3>Students</h3>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-3">
                                    <div class="counter-item counters-box">
                                        <i class="fa fa-clock-o"></i>
                                        <div class="timer display-counter" data-value="1040">1040</div>
                                        <h3>Training hours</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <!-- Start Footer Section -->
        <div class="section footermenu">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footermenu">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <ul class="menu_footer">
                                        <li><a href="New_Index.html">Home</a></li>
                                        <li role="separator" class="divider-vertical"></li>
                                        <li><a href="AboutMe.html">About Me</a></li>
                                        <li role="separator" class="divider-vertical"></li>
                                        <li><a href="#Blog-Outer.html">Blog</a></li>
                                         <li role="separator" class="divider-vertical"></li>
                                        <li><a href="TrainingCourses_Outer.html">Training Courses</a></li>
                                        <li role="separator" class="divider-vertical"></li>
                                        <li><a href="ContactMe.html">Contact Me</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="footer-widget social-widget">
                                        <!--    <h4>Follow Us</h4> -->
                                        <!-- Start Social Links -->
                                        <ul class="social-list">
                                            <li>
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-instagram"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                        <!-- End Social Links -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <!-- Start Copyright -->
                <div class="copyright-section">
                    <div class="row">
                        <div class="col-lg-12">
                            <p>&copy; 2017 All Rights Reserved. Amir Hassan</p>
                        </div>
                    </div>
                    <!-- .row -->
                </div>
                <!-- End Copyright -->
            </div>
        </footer>
        <!-- End Footer Section -->
    </div>
    <!-- Javascript -->
    <?php wp_footer()?>
    </body>
</html>