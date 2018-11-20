<?php
/**
 * Created by PhpStorm.
 * User: Magdy
 * Date: 19/03/2017
 * Time: 02:30 ص
 */
?>
<?php $x=0; while (have_posts()) : $x++; the_post();
      $the_cat = get_the_category();

?>
    <?php if(get_post_format() == 'gallery'):
          $gallery = get_post_meta(get_the_ID() ,'rw_pgallery');
        ?>
        <div class="post">
            <div class="post-content-wrapper">
                <div class="flexslider photo-gallery style3">
                    <div class="category">
                        <span>Section:</span>
                        <h3 class="caption-title"><?=$the_cat[0]->name?></h3>

                    </div>
                    <ul class="slides">
                        <?php foreach ($gallery as $gallery_image):
                            $image_url = wp_get_attachment_url( $gallery_image )
                            ?>
                        <li><a href="<?=the_permalink()?>"><img src="<?=$image_url?>"" alt=""></a></li>
                        <?php endforeach;?>
                    </ul>
                </div>
                <div class="details">
                    <h2 class="entry-title"><a href="<?=the_permalink()?>"><?=the_title()?></a></h2>
                    <div class="excerpt-container">
                        <p><?=get_the_excerpt()?></p>
                    </div>
                    <div class="post-meta">
                        <div class="entry-date">
                            <label class="date"><?=the_time('d')?></label>
                            <label class="month"><?=the_time('M')?></label>
                        </div>
                        <div class="entry-author fn">
                            <i class="icon soap-icon-user"></i> Posted By:
                            <a href="#" class="author"><?php the_author()?></a>
                        </div>
                        <div class="entry-action">
                            <a href="#" class="button entry-comment btn-small"><i class="fa fa-comments-o"></i><span><?=comments_number()?></span></a>
                            <a href="<?=get_category_link($the_cat[0]->term_id)?>" class="button btn-small"><i class="fa fa-share-alt"></i><span><?=$the_cat[0]->name?></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php elseif(get_post_format() == 'video'):?>
        <div class="post">
            <div class="post-content-wrapper">
                <div class="video-container">
                    <div class="category">
                        <span>Section:</span>
                        <h3 class="caption-title"><?=$the_cat[0]->name?></h3>

                    </div>
                    <div class="full-video">
                        <iframe src="<?=get_post_meta(get_the_ID(),'rw_embed_code' , true)?>" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="details">
                    <h2 class="entry-title"><a href="<?=the_permalink()?>"><?=the_title()?></a></h2>
                    <div class="excerpt-container">
                        <p><?=get_the_excerpt()?></p>
                    </div>
                    <div class="post-meta">
                        <div class="entry-date">
                            <label class="date"><?=the_time('d')?></label>
                            <label class="month"><?=the_time('M')?></label>
                        </div>
                        <div class="entry-author fn">
                            <i class="icon soap-icon-user"></i> Posted By:
                            <a href="#" class="author"><?php the_author()?></a>
                        </div>
                        <div class="entry-action">
                            <a href="#" class="button entry-comment btn-small"><i class="fa fa-comments-o"></i><span><?=comments_number()?></span></a>
                            <a href="<?=get_category_link($the_cat[0]->term_id)?>" class="button btn-small"><i class="fa fa-share-alt"></i><span><?=$the_cat[0]->name?></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php else:?>
        <div class="post">
            <div class="post-content-wrapper">
                <figure class="image-container">
                    <a href="<?=the_permalink()?>" class="hover-effect">
                        <?=the_post_thumbnail(array(870,465))?>

                    </a>
                    <div class="category">
                        <span>Section:</span>
                        <h3 class="caption-title"><?=$the_cat[0]->name?></h3>
                    </div>
                </figure>
                <div class="details">
                    <h2 class="entry-title"><a href="<?=the_permalink()?>"><?=the_title()?></a></h2>
                    <div class="excerpt-container">
                        <p><?=get_the_excerpt()?></p>
                    </div>
                    <div class="post-meta">
                        <div class="entry-date">
                            <label class="date"><?=the_time('d')?></label>
                            <label class="month"><?=the_time('M')?></label>
                        </div>
                        <div class="entry-author fn">
                            <i class="icon soap-icon-user"></i> Posted By:
                            <a href="#" class="author"><?php the_author()?></a>
                        </div>
                        <div class="entry-action">
                            <a href="#" class="button entry-comment btn-small"><i class="fa fa-comments-o"></i><span><?=comments_number()?></span></a>
                            <a href="<?=get_category_link($the_cat[0]->term_id)?>" class="button btn-small"><i class="fa fa-share-alt"></i><span><?=$the_cat[0]->name?></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif;?>
<?php endwhile?>

