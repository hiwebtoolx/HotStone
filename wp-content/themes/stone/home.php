<?php 
/*
Template Name: Home
*/
 
$theme_options = get_option( 'theme_options' );



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
the_post()
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

    <?php wp_head(); ?>
 
</head>

<body>
 
 
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
        <section id="home">
            <div class="container">
            	<div class="row">
        			<?=the_content()?>
         		</div>
            </div>
        </section>
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