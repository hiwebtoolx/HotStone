<?php
/**
 * Created by PhpStorm.
 * User: Magdy
 * Date: 31/03/2017
 * Time: 12:50 ص
 */
$args = array(
    'post_type' => 'product',
    'posts_per_page'   => 9,
    'paged' => get_query_var('paged'),
);
query_posts($args);
?>
    <div class="row">
<?php $x=0; while (have_posts()) : $x++; the_post();
$terms = get_the_terms( $post->ID, 'product-category' );

?>
    <div class="col-lg-4 col-sm-6 col-xs-12">
        <div class="card product-card">
            <?=the_post_thumbnail('large' , array('class' => 'card-img-top'))?>
            <div class="card-body">
                <a href="<?=the_permalink()?>"><h5 class="card-text transition"><?=the_title()?></h5></a>
                <small><?=get_the_excerpt()?> </small>
                <div class="price">
                    <strong><?=get_post_meta(get_the_ID() , 'rw_price' , true)?></strong>
                </div>
            </div>
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