<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css',
        'css/material-kit.min.css',
        'css/style.css',
        'css/slick.css',
        'css/slick-theme.css',
        'css/gallery-grid.css',
        'https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css'
    ];
    public $js = [
        'js/core/jquery.min.js',
        'js/core/popper.min.js',
        'js/core/bootstrap-material-design.min.js',
        'js/plugins/slick.min.js',
        'js/plugins/selecty.js',
        'js/plugins/moment.min.js',
        'js/plugins/bootstrap-datetimepicker.js',
        'js/material-kit.js?v=2.0.3',
        'https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js',
        'js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
