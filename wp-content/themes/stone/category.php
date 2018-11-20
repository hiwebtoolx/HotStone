<?php
    get_header();
$cats = get_categories();
?>
<div class="page-title-container">
    <div class="container">
        <div class="page-title pull-left">
            <h2 class="entry-title"><?=the_category()?></h2>
        </div>
        <ul class="breadcrumbs pull-right">
            <li><a href="<?=get_home_url()?>">HOME</a></li>
            <!--<li><a href="#">Blog Outer</a></li>-->
            <li class="active"><?=the_category()?></li>
        </ul>
    </div>
</div>
<section id="content" class="inner_pages">
    <div class="container">
        <div class="row">
            <div id="main" class="col-sm-8 col-md-9">
                <div class="sort-by-section clearfix am-box">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                        <h4 class="sort-by-title block-sm">Filter By Category:</h4>
                    </div>
                    <div class="sort-by-title col-xs-12 col-sm-12 col-md-6 col-lg-4">


                        <div class="selector" style="padding-bottom:15px;">
                            <select name="country_code" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);" class="full-width">

                                <?php foreach ($cats as $cat):?>
                                    <option value="<?=get_category_link($cat->term_id)?>"><?=$cat->cat_name?></option>
                                <?php endforeach;?>
                            </select><span class="custom-select full-width">Select you category...</span>
                        </div>

                    </div>
                </div>
                <div class="page">
                    <div class="post-content">
                        <div class="blog-infinite">
                            <?php
                            get_template_part('archive');
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php get_sidebar()?>

        </div>
    </div>
</section>
<?php get_footer()?>
