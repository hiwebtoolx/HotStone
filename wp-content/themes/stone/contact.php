<?php
/*
Template Name: Contact Me
*/
/**
 * Created by PhpStorm.
 * User: Magdy
 * Date: 18/03/2017
 * Time: 05:20 ص
 */
get_header(); the_post() ?>
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
        <div id="main">

            <div class="row">
                <div class="col-sm-4 col-md-3">
                    <div class="am-box contact-us-box">
                        <h4>Contact Me</h4>
                        <ul class="contact-address">
                            <!-- <li class="address">
                                <i class="soap-icon-address circle"></i>
                                <h5 class="title">Address</h5>
                                <p>Giza, Egypt</p>
                                <p>111A hadayek el ahram</p>
                            </li>
                            <li class="phone">
                                <i class="soap-icon-phone circle"></i>
                                <h5 class="title">Phone</h5>
                                <p>Mobile 1: +2 0100 110 1703</p>
                                <p>Mobile 2: +2 0100 110 1703</p>
                            </li> -->
                            <li class="email">
                                <i class="soap-icon-message circle"></i>
                                <h5 class="title">Email</h5>
                                <p>info@amirhassan.com</p>
                                <p>www.amirhassan.com</p>
                            </li>
                        </ul>
                        <ul class="social-icons full-width">
                            <li><a href="#" data-toggle="tooltip" title="Twitter"><i class="soap-icon-twitter"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" title="GooglePlus"><i class="soap-icon-googleplus"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" title="Facebook"><i class="soap-icon-facebook"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" title="Linkedin"><i class="soap-icon-linkedin"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" title="Vimeo"><i class="soap-icon-vimeo"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-8 col-md-9">
                    <div class="am-box">

                        <h4 class="box-title">Send us a Message</h4>
                        <div class="alert small-box" style="display: none;"></div>
                        <div class="row form-group">
                            <div class="col-xs-6">
                                <label>Your Name</label>
                                <input type="text" name="name" class="input-text full-width">
                            </div>
                            <div class="col-xs-6">
                                <label>Your Email</label>
                                <input type="text" name="email" class="input-text full-width">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Your Message</label>
                            <textarea name="message" rows="6" class="input-text full-width" placeholder="write message here"></textarea>
                        </div>
                        <button type="submit" class="btn-system btn-large btn-block">SEND MESSAGE</button>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<?php get_footer()?>
