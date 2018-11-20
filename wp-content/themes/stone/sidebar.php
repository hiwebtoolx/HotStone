<?php
/**
 * Created by PhpStorm.
 * User: Magdy
 * Date: 29/03/2017
 * Time: 08:29 م
 */

$args = array( 'numberposts' => '3' );
$recent_posts = wp_get_recent_posts( $args );


$courses_args = array(
    'numberposts' => 3,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_type' => 'course',
    'post_status' => 'publish',
    'suppress_filters' => true
);

$recent_courses = wp_get_recent_posts( $courses_args, ARRAY_A );

$theme_options = get_option( 'theme_options' );

?>
<div class="sidebar col-sm-4 col-md-3 ">
    <div class="hidden-sm hidden-xs">
        <form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
         <div class="am-box">
            <div class="inner_newsearch">
                <div id="custom-search-input">
                    <div class="input-group col-md-12">
                        <input type="search" class="form-control input-lg"
                               placeholder="<?php echo esc_attr_x( 'Search', 'placeholder' ) ?>"
                               value="<?php echo get_search_query() ?>" name="s"
                               title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
                        <span class="input-group-btn">
                            <button class="btn btn-info btn-lg" type="submit">
                            <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        </form>
     </div>
    <!-- Tabs Box -->
    <div class="tab-container style1 box border_B">
        <ul class="tabs full-width">
            <li><a data-toggle="tab" href="#recent-posts">Recent Posts</a></li>
            <li class="active"><a data-toggle="tab" href="#popular-posts">Courses</a></li>
        </ul>
        <div class="tab-content">
            <div id="recent-posts" class="tab-pane fade">
                <div class="image-box style14">
                    <?php foreach( $recent_posts as $recent ): ?>
                        <article class="box">
                            <figure><a href="<?=get_permalink($recent["ID"])?>" title="">
                                    <?=get_the_post_thumbnail($recent["ID"] , array(63,59) , array('class' => 'img63'))?>
                                </a>
                            </figure>
                            <div class="details">
                                <h5 class="box-title"><a href="<?=get_permalink($recent["ID"])?>"><?=$recent["post_title"]?></a></h5>

                            </div>
                        </article>
                    <?php endforeach;
	                wp_reset_query();?>


                </div>
            </div>
            <div id="popular-posts" class="tab-pane fade in active">
                <div class="image-box style14">
                    <?php foreach( $recent_courses as $recent ): ?>
                        <article class="box">
                            <figure><a href="<?=get_permalink($recent["ID"])?>" title="">
                                    <?=get_the_post_thumbnail($recent["ID"] , array(63,59) , array('class' => 'img63'))?>
                                </a>
                            </figure>
                            <div class="details">
                                <h5 class="box-title"><a href="<?=get_permalink($recent["ID"])?>"><?=$recent["post_title"]?></a></h5>

                            </div>
                        </article>
                    <?php endforeach;
                    wp_reset_query();?>
                </div>
            </div>

        </div>
    </div>
    <!-- Tabs Box End -->
    <!-- Card Profile -->
    <div class="box">
        <!-- Classic Heading -->
        <h4 class="classic-title">About Amir</h4>
        <div class="card hovercard">
            <div class="cardProinner">

                <div class="cardheader">
                </div>
                <div class="avatar">
                    <img alt="" src="<?=$theme_options['personal_image']['url']?>">
                </div>
                <div class="info">
                    <div class="title">
                        <a target="_blank" href="<?=$theme_options['section_about_url']?>"><?=$theme_options['section_about_title']?></a>
                    </div>
                    <div class="desc"><?=$theme_options['section_job_title']?></div>
                </div>
                <div class="card_post-content" style="padding-bottom:14px;">
                    <p><?=$theme_options['section_about_intro']?><a class="read-more" href="<?=$theme_options['section_about_url']?>">Read More</a></p>
                </div>
                <div class="btn-pref btn-group btn-group-justified btn-group-lg">
                    <div class="btn btn-default facebookBTN">
                        <i class="fa fa-facebook"></i>
                        <div class="hidden-xs">30K</div>
                    </div>
                    <div class="btn btn-default twitterBTN">
                        <i class="fa fa-twitter"></i>
                        <div class="hidden-xs">10K</div>
                    </div>
                    <div class="btn btn-default googleBTN">
                        <i class="fa fa-google-plus"></i>
                        <div class="hidden-xs">1K</div>
                    </div>
                    <div class="btn btn-default cardmoreBTN">
                        <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Card Profile End -->
    <!-- Twitter Card -->
    <div class="box">
        <div class="twPc-div">
            <a class="twPc-bg twPc-block"></a>

            <div class="twPc-button">
                <iframe id="twitter-widget-1" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-follow-button twitter-follow-button-rendered" title="Twitter Follow Button" src="https://platform.twitter.com/widgets/follow_button.b8b8e09be0884a395c5ae18831ce1cc0.en.html#dnt=true&amp;id=twitter-widget-1&amp;lang=en&amp;screen_name=mertskaplan&amp;show_count=false&amp;show_screen_name=false&amp;size=l&amp;time=1486052438566" data-screen-name="mertskaplan" style="position: static; visibility: visible; width: 81px; height: 28px;"></iframe>
                <script>
                    ! function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0],
                            p = /^http:/.test(d.location) ? 'http' : 'https';
                        if (!d.getElementById(id)) {
                            js = d.createElement(s);
                            js.id = id;
                            js.src = p + '://platform.twitter.com/widgets.js';
                            fjs.parentNode.insertBefore(js, fjs);
                        }
                    }(document, 'script', 'twitter-wjs');
                </script>
            </div>
            <a title="Mert Salih Kaplan" href="https://twitter.com/AmirHassan" class="twPc-avatarLink">
                <img alt="Amir Hassan" src="images/pro_Card_img.png" class="twPc-avatarImg">
            </a>
            <div class="twPc-divUser">
                <div class="twPc-divName">
                    <a href="https://twitter.com/AmirHassan">Amir Hassan</a>
                </div>
                <span style="margin-top:-3px; display:block;">
        <a href="https://twitter.com/AmirHassan">@<span>amirhassan</span></a>
    </span>
            </div>
            <div class="twPc-divStats">
                <ul class="twPc-Arrange">
                    <li class="twPc-ArrangeSizeFit">
                        <a href="https://twitter.com/mertskaplan" title="9.840 Tweet">
                            <span class="twPc-StatLabel twPc-block">Tweets</span>
                            <span class="twPc-StatValue">14.7K</span>
                        </a>
                    </li>
                    <li class="twPc-ArrangeSizeFit">
                        <a href="https://twitter.com/mertskaplan/following" title="885 Following">
                            <span class="twPc-StatLabel twPc-block">Following</span>
                            <span class="twPc-StatValue">105K</span>
                        </a>
                    </li>
                    <li class="twPc-ArrangeSizeFit">
                        <a href="https://twitter.com/mertskaplan/followers" title="1.810 Followers">
                            <span class="twPc-StatLabel twPc-block">Followers</span>
                            <span class="twPc-StatValue">12.3K</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="hidden-xs tw_feeds">
                <a class="twitter-timeline" href="https://twitter.com/RayAnthonyRCC" data-widget-id="541082371076808705">Tweets by @RayAnthonyRCC</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>
        </div>
    </div>
    <!-- Twitter Card End-->
    <div class="am-box">
        <h4 class="classic-title">news letter</h4>

        <div class="post-content">
            <p>Type your email address below and recive our daily news letter for free</p>
        </div>
        <div class="input-group">
            <input type="text" class="newslett_input form-control" placeholder="Email Address">
            <span class="mail-icon"><i class="fa fa-envelope"></i></span>
            <span class="input-group-btn">
    <button class="newslett_btn btn btn-primary" type="button">Go!</button>
</span>
        </div>
        <div class="post-content" style="padding-top:10px;">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry remaining essentially unchanged Lorem Ipsum is simply dummy text.</p>
        </div>
    </div>
    <div class="box">
        <iframe id="containerFB" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsafety4arab&tabs&height=214&width=270&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=true&appId" width="" height="214" style="border:none;" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
    </div>
</div>
