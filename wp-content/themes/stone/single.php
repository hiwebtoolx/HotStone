<?php

get_header();
the_post();
$att_id =  get_post_meta(get_the_ID() , 'rw_banner' , true);
$cover_image = wp_get_attachment_image_src( $att_id, 'full' ) ;

$backgroun_img = $cover_image[0] != '' ? "background-image:'.$cover_image[0].'" : ''
?>
    <!--about section-->
    <section class="inner-section" style="<?=$backgroun_img?> ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-1 col-sm-12 col-xs-12">
                    <div class="inner-head-title">
                        <h2 class="section-heading- black-color"><?=the_title()?></h2>
                        <small class="section-small black-color alpha-40"><?=get_post_meta(get_the_ID() , 'rw_subtitle'  , true)?></small>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="inner-section-content">
        <div class="container">

            <?=the_content()?>

        </div>

    </section>
<?php get_footer()?>