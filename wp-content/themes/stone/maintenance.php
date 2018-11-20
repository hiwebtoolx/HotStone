<?php

/*
Template Name: Maintenance Mode
*/

$theme_options = get_option( 'theme_options' );


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



</head>

<body class="index-page sidebar-collapse">

<!--   section  Fixed-background -->
<section class="fixed-logo-bg">
    <div class="container">
        <div class="row">
            <div class="mr-40"></div>
            <div class="col-md-10 offset-md-1 text-center">

                <h2>We’re doing some work on the site.</h2>
                <h6 class="text-center black-color-color">Thank you for being patient. We are doing some work on the site and will be back shortly.</h6>

                <div class="mr-40"></div>
                <div class="mr-40"></div>
                <a href="https://hotstone.mysalononline.com/Booking/?sid=0" class="btn btn-primary  btn-lg" style="background: #C85D99 !important;color: #fff !important;}">
                    Get An Appointment</a>
            </div>
            <div class="col-sm-12">
                <!--newsletter section-->
                <section class="newsletter">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="text-uppercase black-color"> Subscribe to our <span class="pink-color">Newsletter</span> </h4>
                                    </div>

                                    <div class="col-sm-12">
                                                <?=do_shortcode('[contact-form-7 id="276" title="subscribe"]')?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hr-blur"></div>
                    </div>
                </section>
            </div>

            <div class="col-sm-12">

                <!--    fixed footer section -->
                <section class="fixed-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-sm-12">
                                <a href="mailto:info@hotstone-spa.com" class="mail-link">info@hotstone-spa.com</a>
                            </div>

                            <div class="col-lg-4 col-sm-12">
                                <a href="tel:(+966) 0500094116" class="phone-link">(+966) 0500094116</a>
                            </div>

                            <div class="col-lg-4 col-sm-12">
                                <div class="social-ico">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="span">
                            <span> Copyright © 2018 Hotstone Spa All rights reserved. </span>
                        </div>
                    </div>
                </section>

            </div>


        </div>

    </div>
</section>

<style>
    .fixed-logo-bg {
        background: url(<?=get_stylesheet_directory_uri()?>/img/splash-logo.png) no-repeat center left;
        background-attachment: fixed;
        padding: 100px 0;
        background-size: 240px;
        background-position: 100px 140px;
        padding-bottom: 20px;
    }
</style>


</body>
</html>

