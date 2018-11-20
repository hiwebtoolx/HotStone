<?php
/**
 * Created by PhpStorm.
 * User: Magdy
 * Date: 19/03/2017
 * Time: 05:30 ص
 */
get_header() ?>
<div class="page-title-container">
    <div class="container">
        <div class="page-title pull-left">
            <h2 class="entry-title"><?php printf( __( 'Search Results for: %s', 'twentyfourteen' ), get_search_query() ); ?></h2>
        </div>
        <ul class="breadcrumbs pull-right">
            <li><a href="<?=get_home_url()?>">HOME</a></li>
            <!--<li><a href="#">Blog Outer</a></li>-->
            <li class="active">Search</li>
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
                            <?php
                            get_template_part('archive');
                            ?>
                            <?php if (function_exists("pagination")) {
                                pagination();
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php get_sidebar()?>

        </div>
    </div>
</section>
<?php get_footer()?>
