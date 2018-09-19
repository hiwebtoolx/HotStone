<?php
/**
 * Created by PhpStorm.
 * User: Magdy
 * Date: 18/03/2017
 * Time: 05:14 ص
 */
get_header() ; the_post();
$theme_options = get_option( 'theme_options' );
$the_cat = get_the_category();

?>
<div class="page-title-container">
    <div class="container">
        <div class="page-title pull-left">
            <h2 class="entry-title"><?=the_title()?></h2>
        </div>
        <ul class="breadcrumbs pull-right">
            <li><a href="<?=get_home_url()?>">HOME</a></li>
            <li><a href="<?=get_the_permalink(156)?>">Courses</a></li>
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
                                        <?=the_post_thumbnail('large')?>
                                    </figure>
                                    <div class="details">
                                        <h2 class="entry-title"><?=the_title()?></h2>

                                        <div class="post-content">
                                            <p><?=the_content()?></p>
                                        </div>
                                        <button type="submit" class="btn-system btn-large btn-block bookingnow_BTN" data-toggle="modal" href="#shortModal">BOOKING NOW</button>
                                        <!-- <div class="post-meta">
                                            <div class="entry-action">
                                                <a href="#" class="button entry-comment btn-small"><i class="fa fa-comments-o"></i><span>30 Comments</span></a>
                                                <a href="#" class="button btn-small"><i class="fa fa-share-alt"></i><span>22 share</span></a>
                                            </div>
                                        </div>
                                        -->
                                    </div>
                                    <!-- ====================================================== -->
                                    <div id="hotel-features" class="tab-container">
                                        <ul class="tabs">
                                            <?php if(get_post_meta(get_the_ID(),'rw_overview' , true) != ''):?>
                                            <li class="active"><a href="#Overview" data-toggle="tab">Overview</a></li>
                                            <?php endif?>
                                            <?php if(get_post_meta(get_the_ID(),'rw_outlines' , true) != ''):?>
                                            <li><a href="#Outlines" data-toggle="tab">Outlines</a></li>
                                            <?php endif?>
                                            <?php if(get_post_meta(get_the_ID(),'rw_keybenfits' , true) != ''):?>
                                            <li><a href="#KeyBenefits" data-toggle="tab">Key Benefits</a></li>
                                            <?php endif?>
                                            <?php if(get_post_meta(get_the_ID(),'rw_participants' , true) != ''):?>
                                            <li><a href="#ParticipantsProfile" data-toggle="tab">Participants' Profile</a></li>
                                            <?php endif?>
                                            <?php if(get_post_meta(get_the_ID(),'rw_practical' , true) != ''):?>
                                            <li><a href="#Practicalinformation" data-toggle="tab">Practical information</a></li>
                                            <?php endif;?>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade in active course_tabs" id="Overview">
                                                <?=get_post_meta(get_the_ID(),'rw_overview' , true)?>
                                            </div>
                                            <div class="tab-pane fade course_tabs" id="Outlines">
                                                <?=get_post_meta(get_the_ID(),'rw_outlines' , true)?>
                                            </div>
                                            <div class="tab-pane fade course_tabs" id="KeyBenefits">
                                                <?=get_post_meta(get_the_ID(),'rw_keybenfits' , true)?>
                                            </div>
                                            <div class="tab-pane fade course_tabs" id="ParticipantsProfile">
                                                <?=get_post_meta(get_the_ID(),'rw_participants' , true)?>
                                            </div>
                                            <div class="tab-pane fade course_tabs" id="Practicalinformation">
                                                <?=get_post_meta(get_the_ID(),'rw_practical' , true)?>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- ========================================================== -->
                                    <div class="single-navigation block">
                                        <div class="about-author block" style="margin-top:30px;">
                                            <h4 class="classic-title">About Trainer</h4>
                                            <div class="about-author-container am-box">
                                                <div class="about-author-content">
                                                    <div class="avatar">
                                                        <img alt="" src="<?=$theme_options['personal_image']['url']?>">
                                                    </div>
                                                    <div class="description">
                                                        <h4><a href="<?=$theme_options['section_about_url']?>"><?=$theme_options['section_about_title']?></a></h4>
                                                        <p><?=$theme_options['section_about_intro']?></p>
                                                    </div>
                                                </div>
                                                <div class="about-author-meta clearfix">
                                                    <a href="#" class="wrote-posts-count"><i class="soap-icon-slider"></i><span><b> </b>  </span></a>
                                                </div>
                                            </div>
                                            <?php $query = amir_get_related_courses();
                                            if( $query->have_posts() ):
                                            ?>
                                            <h4 class="classic-title">You Might Also Like This</h4>
                                            <div class="am-box">
                                                <div class="suggestions image-carousel style2" data-animation="slide" data-item-width="150" data-item-margin="22">
                                                    <ul class="slides">
                                                        <?php while ($query->have_posts()) : $query->the_post();?>
                                                        <li>
                                                            <a href="<?=the_permalink()?>" class="hover-effect">
                                                                <?php the_post_thumbnail('medium' , array('class' => 'middle-item'))?>
                                                            </a>
                                                            <h5 class="caption"><a href="<?=the_permalink()?>"><?=the_title()?></a></h5>
                                                        </li>
                                                        <?php endwhile;?>
                                                    </ul>
                                                </div>
                                            </div>
                                            <?php endif;?>
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
    <!-- modal -->
    <div id="shortModal" class="modal modal-wide fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Booking Now</h4>
                </div>
                <?=do_shortcode('[contact-form-7 id="158" title="Book Now"]')?>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
        <!-- /.modal -->
</section>
<?php get_footer()?>
