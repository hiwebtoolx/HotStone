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
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?=Yii::$app->homeUrl?>/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?=Yii::$app->homeUrl?>/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Hot-Stone Spa :: Home
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="<?=Yii::$app->homeUrl?>/css/material-kit.min.css" rel="stylesheet" />
    <link href="<?=Yii::$app->homeUrl?>/css/style.css" rel="stylesheet" />

    <!-- Slick slider CSS Files -->
    <link href="<?=Yii::$app->homeUrl?>/css/slick.css" rel="stylesheet" />
    <link href="<?=Yii::$app->homeUrl?>/css/slick-theme.css" rel="stylesheet" />

    <link href="<?=Yii::$app->homeUrl?>/css/gallery-grid.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
</head>
<body class="index-page sidebar-collapse">
<?php $this->beginBody() ?>


<?= $content ?>


<?php $this->endBody() ?>
<style>
    .fixed-logo-bg {
        background: url(<?=Yii::$app->homeUrl?>/img/splash-logo.png) no-repeat center left;
        background-attachment: fixed;
        padding: 100px 0;
        background-size: 240px;
        background-position: 100px 140px;
        padding-bottom: 20px;
    }
</style>
</body>
</html>
<?php $this->endPage() ?>
