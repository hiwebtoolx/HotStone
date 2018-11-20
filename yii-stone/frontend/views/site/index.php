<?php

/* @var $this yii\web\View */

$home_seo = \backend\modules\site\models\Settings::findOne(1);
$this->title = $home_seo->title;
$this->registerMetaTag(['name' => 'keywords', 'content' =>    $home_seo->meta_keys]);
$this->registerMetaTag(['name' => 'description', 'content' => $home_seo->meta_desc]);

?>



<!--main-slider-->
<section id="main-slider">
    <div class="intro-slick ">

        <!--<div class="slick-item" style="background-image: url(<?=Yii::$app->homeUrl?>/img/slide1-bg.jpg)">
            <h1 class="slide-title text-center">Welcome To <strong class="pink-color">Hot Stone</strong> Spa</h1>
            <p class="sub-title text-center">Experience Awaits</p>
        </div>-->
        <?php foreach ($slides as $slide):?>
            <div class="slick-item" style="background-image: url(<?=Yii::getAlias('@home').'/uploads/slider/thumbs/'.$slide->image?>)">
                <h1 class="slide-title text-center"><?=$slide->title?></h1>
                <p class="sub-title text-center"><?=$slide->desc?></p>

            </div>
        <?php endforeach;?>

    </div>
</section>
<!--/#main-slider-->


<!--about section-->
<section class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-xs-12">
                <p class="intro-text">A lifestyle salon and spa offering the finest treatments delivered by licensed estheticians, massage therapists, hair stylists and nail technicians. </p>
            </div>

            <div class="col-lg-8 offset-sm-2 col-xs-12">
                <div class="row">
                    <div class=" col-lg-6 col-sm-12 ">
                        <img src="img/about-sec-col-1-img.jpg" />
                        <p>With our main belief, which is deeply rooted in the authenticity of spa treatments, we bring you the latest hi-tech machines from abroad.</p>
                    </div>

                    <div class="col-lg-6 col-sm-12">
                        <img src="img/about-sec-col-2-img.jpg" />
                        <p>Our clients’ unique needs are met through personalized series of skin and body care treatments, as well as spa packages.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--   section  Fixed-background -->
<section class="relaxing" >
    <div class="container">
        <h2 class="text-center black-color-color">Prepare to leave our spa Pampered, Relaxed, & Refreshed.</h2>
    </div>
</section>


<!--   services section   -->
<section class="services" >
    <div class="container">
        <h2 class="text-center section-heading-2 ">most common services</h2>
        <span class="pink-color section-small">The Greatest Pleasure</span>

        <div class="row">
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="card service-card">
                    <img class="card-img-top" src="img/slide2-bg.jpg" alt="Card image cap">

                    <div class="card-body">
                        <h5 class="card-text transition">Lulur Body Scrub</h5>
                        <small>Body Scrub</small>
                        <div class="price">
                            <small>start from</small>
                            <strong>sar 500</strong>
                        </div>
                    </div>
                    <div class="middle-box">
                        <a href="#" class="booking-link">book an appointment</a>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="card service-card">
                    <img class="card-img-top" src="img/slide2-bg.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-text transition">Aroma Therapy</h5>
                        <small>Massage</small>
                        <div class="price">
                            <small>start from</small>
                            <strong>sar 400</strong>
                        </div>
                    </div>
                    <div class="middle-box">
                        <a href="#" class="booking-link">book an appointment</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="card service-card">
                    <img class="card-img-top" src="img/slide2-bg.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-text transition">Hot Stone Massage</h5>
                        <small>Massage</small>
                        <div class="price">
                            <small>start from</small>
                            <strong>sar 400</strong>
                        </div>
                    </div>
                    <div class="middle-box">
                        <a href="#" class="booking-link">book an appointment</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="card service-card">
                    <img class="card-img-top" src="img/slide2-bg.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-text transition">Reflexology Massage</h5>
                        <small>Massage</small>
                        <div class="price">
                            <small>start from</small>
                            <strong>sar 400</strong>
                        </div>
                    </div>
                    <div class="middle-box">
                        <a href="#" class="booking-link">book an appointment</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="card service-card">
                    <img class="card-img-top" src="img/slide2-bg.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-text transition">Royal Moroccan Hammam w/ Enzyme</h5>
                        <small>Moroccan Hammam</small>
                        <div class="price">
                            <small>start from</small>
                            <strong>sar 650</strong>
                        </div>
                    </div>
                    <div class="middle-box">
                        <a href="#" class="booking-link">book an appointment</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="container d-flex h-100">
                    <div class="row justify-content-center align-self-center mr-auto ml-auto">
                        <button class="btn btn-primary btn-lg">Check All</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!--   appointment section   -->
<section class="appointment">
    <div class="container text-center">
        <h2 class="text-center text-uppercase white-color">We are Open for You</h2>
        <div class="mr-40"></div>
        <a href="#" class="btn btn-primary  btn-lg">Get An Appointment</a>
    </div>
</section>

<!--Awards-slider-->
<section id="awards-slider">
    <div class="container">
        <h2 class="text-center awards-heading ">Awards and Recognition</h2>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="awards-slick">
                    <div class="awards-item">
                        <img src="img/certificate-photo.jpg" class="awards-item-img" title="" />
                        <h4 class="awards-title text-center">Award or certificate title</h4>
                        <p class="awards-sub-title text-center">Discription</p>
                    </div>
                    <div class="awards-item">
                        <img src="img/certificate-photo.jpg" class="awards-item-img" title="" />

                        <h4 class="awards-title text-center">Award or certificate title</h4>
                        <p class="awards-sub-title text-center">Discription</p>
                    </div>
                    <div class="awards-item">
                        <img src="img/certificate-photo.jpg" class="awards-item-img" title="" />

                        <h4 class="awards-title text-center">Award or certificate title</h4>
                        <p class="awards-sub-title text-center">Discription</p>
                    </div>
                    <div class="awards-item">
                        <img src="img/certificate-photo.jpg" class="awards-item-img" title="" />

                        <h4 class="awards-title text-center">Award or certificate title</h4>
                        <p class="awards-sub-title text-center">Discription</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Awards-slider-->


<!--special days & testimonial-->
<section class="gradient-section">
    <div class="special-days">
        <div class="container">
            <h2 class="text-center section-heading-3 white-color">Special days</h2>
            <span class="gold-color section-small">Get your discount</span>
            <div class="row">
                <div class="col-lg-5 offset-lg-1">
                    <div class="mr-40"></div>
                    <h2 class="gold-color">Woman’s day</h2>
                    <p class="white-color">International Women's Day (March 8) is a global day celebrating the social, economic, cultural and political achievements of women. The day also marks a call to action for accelerating gender parity.</p>

                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="card bg-dark text-white">
                        <img class="card-img" src="img/slide2-bg.jpg" alt="Card image">
                    </div>
                </div>
                <div class="col-sm-12 text-center">
                    <div class="mr-40"></div>
                    <h4 class="gold-color">Contact us to choose the best matching package  <span class="white-color">for you</span></h4>
                    <a href="#" class="btn btn-primary ">Contact Us</a>
                    <div class="mr-40"></div>
                </div>
            </div>

            <hr class="dark-hr">
        </div>
    </div>

    <div class="testimonials">
        <div class="container">
            <h2 class="text-center section-heading-3 white-color">Testimonials</h2>
            <span class="gold-color section-small">See What our clients Talking</span>
            <div class="tz-gallery">

                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="img/cus-testimonial/suc-img-1.jpg">
                            <img src="img/cus-testimonial/suc-img-1.jpg"  alt="">
                        </a>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="img/cus-testimonial/suc-img-2.jpg">
                            <img src="img/cus-testimonial/suc-img-2.jpg"  alt="">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <a class="lightbox" href="img/cus-testimonial/suc-img-3.jpg">
                            <img src="img/cus-testimonial/suc-img-3.jpg"  alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="img/cus-testimonial/suc-img-4.jpg">
                            <img src="img/cus-testimonial/suc-img-4.jpg"  alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="img/cus-testimonial/suc-img-5.jpg">
                            <img src="img/cus-testimonial/suc-img-5.jpg"  alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="img/cus-testimonial/suc-img-6.jpg">
                            <img src="img/cus-testimonial/suc-img-6.jpg"  alt="">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<!--newsletter section-->
<div class="newsletter">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <h4 class="text-uppercase black-color"> Subscribe to our <span class="pink-color">Newsletter</span> </h4>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="row">
                            <div class="col-8">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInput1" placeholder="Sample@domain.co">
                                    <span class="bmd-help">We'll never share your email with anyone else.</span>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <button class="btn btn-primary btn-lg btn-link">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hr-blur"></div>
    </div>
</div>
</section>
