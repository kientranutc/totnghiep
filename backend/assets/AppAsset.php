<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'font-awesome/css/font-awesome.min.css',
        'css/site.css',
    ];
    public $js = [
    
    'tinymce/tinymce.min.js',
    'js/main.js',
    'js/modal.js',
    'js/submitform.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
