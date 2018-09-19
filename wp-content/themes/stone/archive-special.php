<?php
/**
 * Created by PhpStorm.
 * User: Magdy
 * Date: 31/03/2017
 * Time: 12:50 ص
 */
$args = array(
    'post_type' => 'special',
    'posts_per_page'   => 9,
    'paged' => get_query_var('paged'),
);
query_posts($args);
?>
    <div class="row">
<?php $x=0; while (have_posts()) : $x++; the_post();
$terms = get_the_terms( $post->ID, 'service-category' );

?>


        <div class="col-sm-6 col-xs-12">
            <div class="card">
                <?=the_post_thumbnail(array(540 , 295) , array('class' => 'card-img-top'))?>

                <div class="card-body">
                    <a href="<?=the_permalink()?>"><h5 class="card-text "><?=the_title()?></h5></a>

                    <p class="card-text"><?=get_the_excerpt()?></p>
                    <p class="card-text"><small class="text-muted"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>
                        </small></p>
                </div>
            </div>
        </div>



    <?php if($x %2 == 0):?>
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