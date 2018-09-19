<?php
/*
Template Name: About
*/
/**
 * Created by PhpStorm.
 * User: Magdy
 * Date: 30/03/2017
 * Time: 11:48 م
 */
get_header();
the_post();
?>
<div class="page-title-container">
    <div class="container">
        <div class="page-title pull-left">
            <h2 class="entry-title"><?=the_title()?></h2>
        </div>
        <ul class="breadcrumbs pull-right">
            <li><a href="<?=get_home_url()?>">HOME</a></li>
            <!--<li><a href="#">Blog Outer</a></li>-->
            <li class="active"><?=the_title()?></li>
        </ul>
    </div>
</div>
<section id="content" class="inner_pages">
    <div class="container">
        <div class="row">
            <div id="main" class="col-sm-8 col-md-9">
                <div class="page">
                    <div class="post-content">
                        <div class="blog-infinite">
                            <div class="post">
                                <div class="post-content-wrapper">
                                    <figure class="image-container">
                                        <?=the_post_thumbnail(870,455)?>
                                    </figure>
                                    <div class="details">

                                        <div class="post-content">
                                             <?php the_content()?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php get_sidebar()?>
        </div>
    </div>
</section>

<?php get_footer()?>
