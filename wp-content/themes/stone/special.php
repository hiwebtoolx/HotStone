<?php
/*
Template Name: Special Days
*/
get_header();
the_post();
$att_id =  get_post_meta(get_the_ID() , 'rw_banner' , true);
$cover_image = wp_get_attachment_image_src( $att_id, 'full' ) ;

?>
    <!--about section-->
    <section class="inner-section" style="background-image: url('<?=$cover_image[0]?>') ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-1 col-sm-12 col-xs-12">
                    <div class="inner-head-title">
                        <h2 class="section-heading- black-color"><?the_title()?></h2>
                        <small class="section-small black-color alpha-40"><?=get_post_meta(get_the_ID() , 'rw_subtitle' , true)?></small>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="inner-section-content">
        <div class="container">

            <?php
            get_template_part('archive-special');
            ?>



        </div>

    </section>
<?php get_footer()?>