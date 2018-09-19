<?php
$theme_options = get_option( 'theme_options' );



$menu = wp_get_nav_menu_items("Main Menu" );
?>
<?php //=$theme_options['section_social_facebook']?>

<!--newsletter section-->
<section class="newsletter">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <h4 class="text-uppercase black-color"> Subscribe to our <span class="pink-color">Newsletter</span> </h4>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <?=do_shortcode('[contact-form-7 id="276" title="subscribe"]')?>
                    </div>
                </div>
            </div>
        </div>
        <div class="hr-blur"></div>
    </div>
</section>
<!--    fixed footer section -->
<section class="fixed-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <a href="mailto:<?=$theme_options['text-email']?>" class="mail-link"><?=$theme_options['text-email']?></a>
            </div>

            <div class="col-lg-4 col-sm-12">
                <a href="tel:<?=$theme_options['text-phone']?>" class="phone-link"><?=$theme_options['text-phone']?></a>
            </div>

            <div class="col-lg-4 col-sm-12">
                <div class="social-ico">
                    <?php if($theme_options['section_social_facebook'] != ""):?>
                    <a href="<?=$theme_options['section_social_facebook']?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <?php endif?>
                    <?php if($theme_options['section_social_twitter'] != ""):?>
                    <a href="<?=$theme_options['section_social_twitter']?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <?php endif?>
                    <?php if($theme_options['section_social_google'] != ""):?>
                    <a href="<?=$theme_options['section_social_google']?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    <?php endif?>
                    <?php if($theme_options['section_social_instagram'] != ""):?>
                    <a href="<?=$theme_options['section_social_instagram']?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <?php endif?>
                </div>
            </div>
        </div>
        <div class="span">
            <span> Copyright © <?=date('Y')?> Hotstone Spa All rights reserved. </span>
        </div>
    </div>
</section>




</body>
<?php wp_footer()?>

</html>
