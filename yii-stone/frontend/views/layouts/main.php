<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="index-page sidebar-collapse">
<?php $this->beginBody() ?>


<nav id="navbar" class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
        <div class="col col-lg-2">
            <div class="navbar-translate">
                <a class="navbar-brand" href="#"><img src="img/logo.svg"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
        <div class="col-md-auto">
            <div class="call-us">
                <a href="#"><span style="color:rgba(0, 0, 0, 0.3)!important">Call Now  </span>011 - 4196663</a>
                <a href="#" class="btn btn-primary btn-round">Book An Appointment</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="javascript:void(0)">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="javascript:void(0)">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="javascript:void(0)">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="javascript:void(0)">Franchise</a></li>
                    <li class="nav-item"><a class="nav-link" href="javascript:void(0)">Special Day</a></li>
                    <li class="nav-item"><a class="nav-link" href="javascript:void(0)">Awards</a></li>
                    <li class="nav-item"><a class="nav-link" href="javascript:void(0)">Careers</a></li>
                    <li class="nav-item"><a class="nav-link" href="javascript:void(0)">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
        <?= $content ?>

<!--    fixed footer section -->
<section class="fixed-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <a href="mailto:info@hotstone-spa.com" class="mail-link">info@hotstone-spa.com</a>
            </div>

            <div class="col-lg-4 col-sm-12">
                <a href="tel:(+966) 0500094116" class="phone-link">(+966) 0500094116</a>
            </div>

            <div class="col-lg-4 col-sm-12">
                <div class="social-ico">
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <div class="span">
            <span> Copyright © 2018 Hotstone Spa All rights reserved. </span>
        </div>
    </div>
</section>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
