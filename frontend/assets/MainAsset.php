<?php
namespace frontend\assets;


use yii\web\AssetBundle;
use yii\web\View;

class MainAsset extends  AssetBundle{

    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        '../web/source/style.css',
        '../web/source/owl-carousel/owl.carousel.css',
        '../web/source/owl-carousel/owl.theme.css',
        '../web/source/slitslider/css/style.css',
        '../web/source/slitslider/css/custom.css'
    ];

    public $js = [
        '../web/source/script.js',
        '../web/source/owl-carousel/owl.carousel.js',
        '../web/source/slitslider/js/modernizr.custom.79639.js',
        '../web/source/slitslider/js/jquery.ba-cond.min.js',
        '../web/source/slitslider/js/jquery.slitslider.js',
        '../web/source/js/google_analytics_auto.js',

    ];

    public $depends = [
        'yii\web\YiiAsset', // yii.js, jquery.js
        'yii\bootstrap\BootstrapAsset', // bootstrap.css
        'yii\bootstrap\BootstrapPluginAsset' // bootstrap.js
    ];

    public $jsOptions = [
      'position' =>  View::POS_HEAD,
    ];


}