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
    "public/css/bootstrap.min.css",
    "font-awesome/css/font-awesome.min.css",
    "css/reset.css",
    "css/owl.carousel.css",
    "css/owl.theme.css",
    "css/owl.transitions.css",

    "style.css",
    "css/responsive.css",
    ];
    public $js = [
    "https://secure.skypeassets.com/i/scom/js/skype-uri.js",
    "js/jquery.js",
    "js/owl.carousel.min.js",
    "public/js/bootstrap.min.js",
    "js/main.js",
    ];
    public $depends = [
    'yii\web\YiiAsset',
    'yii\bootstrap\BootstrapAsset',
    ];
}
