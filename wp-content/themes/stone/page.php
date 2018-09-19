<?php
/*
Template Name: Default Page
*/
get_header();
the_post();
$att_id =  get_post_meta(get_the_ID() , 'rw_banner' , true);
$cover_image = wp_get_attachment_image_src( $att_id, 'full' ) ;


?>

    <section class="inner-section-content">
        <div class="container">

        <?=the_content()?>
        </div>
      </section>
<?php get_footer()?>