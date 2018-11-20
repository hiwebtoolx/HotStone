<?php
/**
 * Created by PhpStorm.
 * User: Magdy
 * Date: 31/03/2017
 * Time: 12:50 ص
 */
$args = array(
    'post_type' => 'course',
    'posts_per_page'   => 10,
    'paged' => get_query_var('paged'),
);
query_posts($args);
?>
    <div class="row flight-list image-box flight listing-style1">
<?php $x=0; while (have_posts()) : $x++; the_post();?>

    <div class="col-sm-12 col-md-6 col-lg-6">
        <article class="box border_B">
            <figure>
                <span><?=the_post_thumbnail()?></span>
            </figure>
            <div class="details">
                <div class="training-txt">
                    <h3 class="post-title"><a href="<?=the_permalink()?>"><?=the_title()?></a></h3>
                    <!-- <div class="feedback">
                        <div data-placement="bottom" data-toggle="tooltip" class="five-stars-container" title="" data-original-title="3 stars"><span style="width: 60%;" class="five-stars"></span></div>
                        <span class="review pull-right">27 reviews</span>
                    </div> -->
                    <div class="post-content">
                        <p><?=get_the_excerpt()?><a class="read-more" href="<?=the_permalink()?>">Continue Reading</a></p>
                    </div>
                </div>
                <div class="action">
                    <a href="TrainingCourses_Inner.html">
                        <a href="<?=the_permalink()?>"  class="btn-system btn-large btn-block">Booking Now</a>
                    </a>
                </div>
            </div>
        </article>
    </div>
    <?php if($x %2 == 0):?>
    </div>
    <div class="row flight-list image-box flight listing-style1">
    <?php endif;?>

<?php endwhile;?>
    </div>
