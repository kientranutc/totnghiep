<?php
use \yii\web\Request;
$baseUrl = str_replace("/frontend/web","", (new Request)->getBaseUrl());
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);
return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
       
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'request'=>[
            'baseUrl' =>$baseUrl,
            
        ],
       /* */
        'urlManager' => [
            'baseUrl' =>$baseUrl,
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            'dang-nhap' =>'dangky/login',
            'login-thanh-toan'=>'shopcart/thanhtoanlogin',
            'thanhtoan'=>'shopcart/thanhtoan',
            'filter'=>'sanpham/sanphamtheoloai',
             'dang-ky-thanh-vien'=>"dangky/regester",
            'gioi-thieu'=>'gioithieu',
            'bao-hanh'=>'baohanh',
            'san-pham'=>'sanpham',
              'tin-tuc'=>'tintuc',
              'gio-hang'=>'shopcart/listcart',
             'lich-su-mua-hang'=>'historyorder',
            "chi-tiet-san-pham/<title>-<id:\d+>.html"=>"sanpham/chitietsanpham",
             'filter/<title>-<id:\d+>.html'=>'sanpham/sanphamtheoloai',
             'tin-tuc/<title><id:\d+>.html'=>'tintuc',
              'chi-tiet-ban-tin/<title>-<id:\d+>.html'=>'tintuc/chitiet',
            ],
        ],
       
    ],
    'params' => $params,
];