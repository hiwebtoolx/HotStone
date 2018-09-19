<?php
/**
 * Created by PhpStorm.
 * User: Magdy
 * Date: 31/03/2017
 * Time: 12:50 ص
 */
$args = array(
    'post_type' => 'award',
    'posts_per_page'   => 9,
    'paged' => get_query_var('paged'),
);
query_posts($args);
?>
<div class="row">
    <?php $x=0; while (have_posts()) : $x++; the_post();

    $featured_img_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ) , 'large');
    ?>

    <div class="col-lg-4 col-sm-6 col-xs-12">
        <div class="award-gallery awards-item aw-item">

            <a class="lightbox" href="<?=$featured_img_url[0]?>"><?=the_post_thumbnail(array(320 , 370), array('class' => 'awards-item-img'))?></a>
            <h4 class="awards-title text-center"><?=the_title()?></h4>
            <p class="awards-sub-title text-center"><?=get_the_excerpt()?></p>
        </div>
    </div>





    <?php if($x %3 == 0):?>
</div>
<div class="row">
    <?php endif;?>

    <?php endwhile;?>
</div>

<div class="row">
    <div class="col-lg-12">
        <nav aria-label="Page navigation example">
            <?php wp_pagenavi(); ?>
        </nav>
    </div>
</div>